# PHP Neo4j

Exercícios

## Referencias de estudo

- https://neo4j.com/cloud/platform/aura-graph-database/?ref=neo4j-home-hero
- https://www.youtube.com/watch?v=NNZ7jL1X2mI&ab_channel=ManualdoC%C3%B3digo
- https://www.youtube.com/watch?v=9ZpI3pUcbyg&ab_channel=Andr%C3%A9Santanch%C3%A8
- https://www.youtube.com/watch?v=613XEcGYQC4&ab_channel=Andr%C3%A9Santanch%C3%A8
- https://www.youtube.com/watch?v=RABFPxXXQqM&ab_channel=PauloFreitas
- https://www.youtube.com/watch?v=Zh-XW0s_LTc&ab_channel=Maransatto

## Requisitos

- Docker 24+
- Docker Compose 2.23+

## Para iniciar

1. Clone o repositório

```bash
git git@github.com:marcelofabianov/proposta-arquitetura-02.git
```

2. Preparando o ambiente

```bash
sh _local/init.sh
```
3. Carregando alias

```bash
source .alias.sh
```

4 Executando comando com o container

Subir containers
```bash
app.up
```

Baixar containers
```bash
app.down
```

Restart nos containers
```bash
app.restart
```

Entrar no container app
```bash
app.zsh
```

Executando comandos com o php
```bash
app.php -v
```

Executando comandos do composer
```bash
app.composer -v
```

Executando comando de testes
```bash
app.test
```

Executando lint
```bash
app.lint
```
```bash
app.check
```

Executando server php http
```bash
app.server
```
