const Post = require('../models/post');

module.exports = {
    async index(req, res) {
        const posts = await Post.findAll();
        res.json(posts);
    },

    async show(req, res) {
        const post = await Post.findByPk(req.params.id);
        if (!post) {
            return res.status(404).json({ error: 'Post não encontrado' });
        }
        res.json(post);
    },

    async create(req, res) {
        const post = await Post.create(req.body);
        res.json(post);
    },

    async update(req, res) {
        const post = await Post.findByPk(req.params.id);
        if (!post) {
            return res.status(404).json({ error: 'Post não encontrado' });
        }
        await post.update(req.body);
        res.json(post);
    },

    async destroy(req, res) {
        const post = await Post.findByPk(req.params.id);
        if (!post) {
            return res.status(404).json({ error: 'Post não encontrado' });
        }
        await post.destroy();
        res.json({ message: 'Post deletado com sucesso' });
    }
};