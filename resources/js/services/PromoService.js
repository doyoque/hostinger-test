import axios from 'axios';

const apiClient = axios.create({
	baseURL: process.env.MIX_HOST,
	withCredentials: false,
	headers: {
		Accept: 'application/json',
		'Content-type': 'application/json'
	}
});

export default {
	getPromo() {
		return apiClient.get('/api/promo');
	}
};