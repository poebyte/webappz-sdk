import axios, { AxiosInstance } from "axios";

interface WebhookResponse {
    success: boolean;
    message: string;
}

export class WebAppz {
    private apiUrl: string;
    private apiKey: string;
    private client: AxiosInstance;

    constructor(apiKey: string, apiUrl: string = "https://api.webappz.org") {
        if (!apiKey) {
            throw new Error("API key is required.");
        }

        this.apiKey = apiKey;
        this.apiUrl = apiUrl;
        this.client = axios.create({
            baseURL: this.apiUrl,
            headers: {
                "Content-Type": "application/json",
                Authorization: `Bearer ${this.apiKey}`,
            },
        });
    }

    async setupWebhook(keyId: string, webhookUrl: string): Promise<WebhookResponse> {
        const response = await this.client.post(`/api/keys/${keyId}/setupWebhook`, {
            webhook_url: webhookUrl,
        });
        return response.data;
    }

    async getWebhookStatus(keyId: string): Promise<WebhookResponse> {
        const response = await this.client.get(`/api/keys/${keyId}/webhookStatus`);
        return response.data;
    }
}
