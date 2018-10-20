<?php

namespace Entity;


/**
 * Votacao Model
 *
 * @Entity
 * @Table(name="votacoes")
 */


class Votacao
{

    /**
     * @Id
     * @Column(type="integer", nullable=false)
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    private $votacaoAberta = false;   

     /**
     * @OneToOne(targetEntity="Urna", mappedBy="urnas", cascade={"all"}, orphanRemoval=true)
     * @JoinColumn(name="urna_id", referencedColumnName="id")
     */
    private $urna;



/**
     * @OneToOne(targetEntity="ItemDePauta", cascade={"refresh"})
     * @JoinColumn(name="itemdepauta_id", referencedColumnName="id")
*/
    private $itemDePauta;

///////////////////////
/*
    @OneToOne(cascade = CascadeType.ALL)
    private ResultadoDaVotacao resultado;

    @Enumerated
    private StatusVotacao status = StatusVotacao.FECHADA;

    @Enumerated
    private Turno turno;

    public Votacao() {

    }

    public Votacao(Urna urna, ItemDePauta itemDePauta) {
        this.setUrna(urna);
        this.setItemDePauta(itemDePauta);
    }

    public void registraVotoNaUrna(Voto voto) {
        this.getUrna().recebe(voto);
    }

    public Long getId() {
        return id;
    }

    public void setId(Long id) {
        this.id = id;
    }

    public boolean isVotacaoAberta() {
        return votacaoAberta;
    }

    public void setVotacaoAberta(boolean votacaoAberta) {
        this.votacaoAberta = votacaoAberta;
    }

    public Urna getUrna() {
        return urna;
    }

    public void setUrna(Urna urna) {
        this.urna = urna;
    }

    public ItemDePauta getItemDePauta() {
        return itemDePauta;
    }

    public void setItemDePauta(ItemDePauta itemDePauta) {
        this.itemDePauta = itemDePauta;
    }

    public ResultadoDaVotacao getResultado() {
        return resultado;
    }

    public void setResultado(ResultadoDaVotacao resultado) {
        this.resultado = resultado;
    }

    public StatusVotacao getStatus() {
        return status;
    }

    public void setStatus(StatusVotacao status) {
        this.status = status;
    }

    public Turno getTurno() {
        return turno;
    }

    public void setTurno(Turno turno) {
        this.turno = turno;
    }

    @Override
    public String toString() {
        return "Votacao{" +
                "id=" + id +
                ", votacaoAberta=" + votacaoAberta +
                ", urna=" + urna +
                ", itemDePauta=" + itemDePauta +
                ", resultado=" + resultado +
                ", status=" + status +
                '}';
    }

    @Override
    public boolean equals(Object o) {
        if (this == o) return true;
        if (o == null || getClass() != o.getClass()) return false;
        Votacao votacao = (Votacao) o;
        return isVotacaoAberta() == votacao.isVotacaoAberta() &&
                Objects.equals(getId(), votacao.getId()) &&
                Objects.equals(getUrna(), votacao.getUrna()) &&
                Objects.equals(getItemDePauta(), votacao.getItemDePauta()) &&
                Objects.equals(getResultado(), votacao.getResultado()) &&
                getStatus() == votacao.getStatus();
    }

    @Override
    public int hashCode() {

        return Objects.hash(getId(), isVotacaoAberta(), getUrna(), getItemDePauta(), getResultado(), getStatus());
    }
*/
}
