create table clientes (
id              int,
nome            varchar(200),
cpf_cnpj        varchar(20),
rg              varchar(30),
rg_uf           varchar(2),
rg_emissao      date,
data_nascimento date,
sexo            varchar(1),
nacionalidade   varchar(100),
natural_de      int,
uf_nascimento   varchar(2),
estado_civil    int,
grau_instrucao  int
)


create table cliente_dados_bancarios (
    cod_cliente int,
    tipo        int,
    sequencia   int,
    banco       varchar(3),
    agencia     varchar(4),
    conta       varchar(10),
    dig_conta   varchar(2)
)

cep

create table clientes_enderecos (
    cod_cliente int,
    sequencia   int,
    cep         varchar(8),
    endereco    varchar(200),
    numero      varchar(10),
    complemento varchar(30),
    bairro      varchar(50),
    cidade      varchar(100),
    uf          varchar(2)
)

create table clientes_dados_prof (
    cod_cliente int,
    nome_empresa  varchar(100),
    profissao     int,
    salario       double,
    tempo_servico varchar(10),
    telefone_coml varchar(14),
    ramal         varchar(10)
)


ALTER TABLE cliente_dados_bancarios
ADD FOREIGN KEY fk_cli_da(cod_cliente)
REFERENCES clientes(id);

ALTER TABLE clientes_enderecos
ADD FOREIGN KEY fk_cli_enderecos(cod_cliente)
REFERENCES clientes(id);

ALTER TABLE clientes_dados_prof
ADD FOREIGN KEY fk_cli_dados_prof(cod_cliente)
REFERENCES clientes(id);
