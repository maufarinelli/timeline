<style>
    /* Wrapper to simulate the website
    ======================================== */
    #wrapper {
        width: 940px;
        margin: 0 auto;
    }

    /* The timeline line
    ======================================== */
    .timeline-line {
        width: 100%;
        height: 10px;
        margin-top: 300px;
        margin-bottom: -22px;

        border-radius: 10px;
        background-color: #00467e;
    }

    /* The timeline list
    ======================================== */
    .timeline-list {
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        justify-content: space-between;
    }

    /* each buttlet */
    .timeline-item {
        position: relative;
        width: 33px;
        height: 33px;

        list-style: none;

        border-radius: 50%;
        border: 1px solid #00467e;
        background-color: #00467e;

        cursor: pointer;
    }

    /* The circle outside it bullet */
    .timeline-item:hover:before{
        content: " ";
        position: absolute;
        top: -10px;
        left: -10px;

        width: 45px;
        height: 45px;

        z-index: -1;

        border: 4px solid #00467e;
        border-radius: 50%;
    }

    /* each box */
    .timeline-item-box {
        position: absolute;
        top: -240px;
        left: -136px;

        width: 300px;
        height: 190px;

        opacity: 0;

        border-radius: 15px;
        border: 8px solid #00467e;

        color: #FFF;

        -webkit-transition: all 0.2s;
        transition: all 0.2s;
    }

    /* each box arrow */
    .timeline-item-box:after {
        content: "";
        position: absolute;
        left: 130px;
        bottom: -22px;

        width: 0;
        height: 0;

        border-left: 15px solid transparent;
        border-right: 15px solid transparent;
        border-top: 15px solid #00467e;
    }

    /* each box text */
    .timeline-item-box p {
        position: absolute;
        bottom: 0px;
        padding: 10px;
        background: rgba(0, 0, 0, 0.6);

        border-bottom-left-radius: 6px;
        border-bottom-right-radius: 6px;
    }

    /* Shows box */
    .timeline-item:hover > .timeline-item-box {
        opacity: 1;
    }

    /* Box modifiers */
    .timeline-item-box--naissance {
        left: -15px;
        background: url(http://avcf.agencevia.ca/wp-content/uploads/2014/03/naissance.jpg) 0 0 no-repeat;
    }

    /* As it is the first box, it is positioned differently */
    .timeline-item-box--naissance:after {
        left: 10px;
    }

    .timeline-item-box--etudes {
        background: url(http://avcf.agencevia.ca/wp-content/uploads/2014/03/etudes.jpg) 0 0 no-repeat;
    }

    .timeline-item-box--famille {
        background: url(http://avcf.agencevia.ca/wp-content/uploads/2014/03/famille.jpg) 0 0 no-repeat;
    }

    .timeline-item-box--retraite {
        background: url(http://avcf.agencevia.ca/wp-content/uploads/2014/03/golf.jpg) 0 0 no-repeat;
    }

    .timeline-item-box--deces {
        left: auto;
        right: -15px;
        background: url(http://avcf.agencevia.ca/wp-content/uploads/2014/04/deces.jpg) 0 0 no-repeat;
    }

    /* As it is the last box, it is positioned differently */
    .timeline-item-box--deces:after {
        left: auto;
        right: 10px;
    }

</style>

<section id="wrapper">
    <div class="timeline-line"></div>
    <ul class="timeline-list">
        <li class="timeline-item">
            <div class="timeline-item-box timeline-item-box--naissance">
                <p>Profitez du jeune âge et de l’excellent état de santé de votre enfant pour lui procurer une protection qui le suivra jusqu’à l’âge adulte et même toute sa vie.</p>
            </div>
        </li>
        <li class="timeline-item">
            <div class="timeline-item-box timeline-item-box--etudes">
                <p>Le régime enregistré d’épargne-études (REEE) est le véhicule financier par excellence pour accumuler des sommes en vue des études postsecondaires d’un enfant.</p>
            </div>
        </li>
        <li class="timeline-item">
            <div class="timeline-item-box timeline-item-box--famille">
                <p>Dotez votre famille des protections nécessaires pour vivre cette nouvelle aventure en toute confiance.</p>
            </div>
        </li>
        <li class="timeline-item">
            <div class="timeline-item-box timeline-item-box--retraite">
                <p>L’espérance de vie ne cesse de s’accroître, et le temps dont les gens disposent à leur retraite aussi. C'est pourquoi il est préférable de planifier dès aujourd’hui votre retraite.</p>
            </div>
        </li>
        <li class="timeline-item">
            <div class="timeline-item-box timeline-item-box--deces">
                <p>Vous avez investi tant d'efforts et d'économies pour assurer votre sécurité financière, ne laissez pas un décès mettre en péril vos acquis et l'avenir de vos proches.</p>
            </div>
        </li>
    </ul>
</section>