<?
$subject_val = "Re: [OMPI users] Hide Abort output";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  6 09:34:36 2010" -->
<!-- isoreceived="20100406133436" -->
<!-- sent="Tue, 6 Apr 2010 09:34:30 -0400" -->
<!-- isosent="20100406133430" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hide Abort output" -->
<!-- id="FE8D4968-9DBC-466D-BD0A-241991C889DB_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="201004060913.27912.yves.caniou_at_ens-lyon.fr" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> Re: [OMPI users] Hide Abort output<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-06 09:34:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12552.php">Jeff Squyres: "Re: [OMPI users] IPoIB"</a>
<li><strong>In reply to:</strong> <a href="12544.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I understand what your MPI_Quit function would do differently than MPI_Abort and/or MPI_Finalize...?
<br>
<p>On Apr 6, 2010, at 3:13 AM, Yves Caniou wrote:
<br>
<p><span class="quotelev1">&gt; I really understand the failure idea of the MPI_Abort() function, and it
</span><br>
<span class="quotelev1">&gt; clearly appeared in the recent mails.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There is an evident advantage for me to have an MPI_Quit() function:
</span><br>
<span class="quotelev1">&gt; Having such a function would be great in the sens that someone would not have
</span><br>
<span class="quotelev1">&gt; to code the termination mechanism, whose process can be &quot;long&quot; (running time)
</span><br>
<span class="quotelev1">&gt; on large scale systems as we are now seeing in HPC, if not correctly
</span><br>
<span class="quotelev1">&gt; implemented.
</span><br>
<span class="quotelev1">&gt; If the implementation of the standard does this, it can ensure good routing
</span><br>
<span class="quotelev1">&gt; and the &quot;best&quot; usage of message transfer mechanisms (architecture dependent)
</span><br>
<span class="quotelev1">&gt; to even terminate the application the soonest...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; .Yves.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PS:   It seems that I nearly always forgot to answer on the list. Sorry...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Le Monday 05 April 2010 16:53:57, vous avez &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; Yves
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In my view, and I think in the view of those who developed the standard, an
</span><br>
<span class="quotelev2">&gt; &gt; MPI program that ends in an MPI_Abort call is considered to have failed.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If there is really a need for a mechanism to end an MPI program by a single
</span><br>
<span class="quotelev2">&gt; &gt; task deciding that a correct answer has been achieved and whatever the
</span><br>
<span class="quotelev2">&gt; &gt; other tasks are still doing can be considered expendable garbage, then
</span><br>
<span class="quotelev2">&gt; &gt; perhaps the MPI Forum should be asked to consider a new function which does
</span><br>
<span class="quotelev2">&gt; &gt; not carry the implication of job failure.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have never before heard anyone request such a mechanism but maybe there
</span><br>
<span class="quotelev2">&gt; &gt; are many out there that just figure calling MPI_Abort is good enough.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is a current MPI Forum working on the 3.0 version of the MPI
</span><br>
<span class="quotelev2">&gt; &gt; standard.  Do you think they should be considering am MPI_Quit subroutine?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev2">&gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev2">&gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev2">&gt; &gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   From:       Yves Caniou &lt;yves.caniou_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   To:         Richard Treumann/Poughkeepsie/IBM_at_IBMUS
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Date:       04/05/2010 10:38 AM
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   Subject:    Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am just saying that it is just about convenience.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If a task in the application shows a divergence, it does not necessarily
</span><br>
<span class="quotelev2">&gt; &gt; imply
</span><br>
<span class="quotelev2">&gt; &gt; a failure of the application: It gives a result, non-convergence of the
</span><br>
<span class="quotelev2">&gt; &gt; whole
</span><br>
<span class="quotelev2">&gt; &gt; calculus for some initial condition for example.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another example: if your application is built as a graphe which ends by all
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; tasks performing its own calculus: the first one finishing causes the
</span><br>
<span class="quotelev2">&gt; &gt; application to end. Then, for simplicity, you can call MPI_Abort() to end
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt; application -- even if I agree that it is not the proper way, since each
</span><br>
<span class="quotelev2">&gt; &gt; task
</span><br>
<span class="quotelev2">&gt; &gt; should call MPI_Finalize().
</span><br>
<span class="quotelev2">&gt; &gt; But in the proper way, the first finishing task should communicate to all
</span><br>
<span class="quotelev2">&gt; &gt; of
</span><br>
<span class="quotelev2">&gt; &gt; the other that they have to finish, thus implying that you have coded some
</span><br>
<span class="quotelev2">&gt; &gt; async receive in each task, with a correctly defined protocol, waiting for
</span><br>
<span class="quotelev2">&gt; &gt; the termination message.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know if you consider this as a dirty trick and if there is other
</span><br>
<span class="quotelev2">&gt; &gt; practical means to end properly the application in such cases (I am not a
</span><br>
<span class="quotelev2">&gt; &gt; deep user of MPI), but at least, this should work very fine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; .Yves.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Le Monday 05 April 2010 15:45:47 Richard Treumann, vous avez &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I do not really understand your argument.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; A correct MPI application ends when every task calls MPI_Finalize.  I do
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not know what a &quot;join-node&quot; is.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  MPI_Abort is for cases like getting an intermediate result that cannot
</span><br>
<span class="quotelev3">&gt; &gt; &gt; possible be right and deciding (within the application) to give up and
</span><br>
<span class="quotelev3">&gt; &gt; &gt; announce failure.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev3">&gt; &gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   From:       Yves Caniou &lt;yves.caniou_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   To:         Richard Treumann/Poughkeepsie/IBM_at_IBMUS
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Date:       04/05/2010 09:38 AM
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   Subject:    Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In that case, if your application does not end by a join node, you code
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; the
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; whole thing to make an async receive and the send that kills everyone in
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; a
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; logn messages?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; .Yves.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Le Monday 05 April 2010 15:27:33, vous avez &#233;crit :
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yves
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If an application issued an MPI_Abort, it did not &quot;end correctly&quot;.  The
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; MPI_Abort call is intended for one thing only.  The application has
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; recognized that something is so wrong that there is no point in
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; continuing.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; The output from an application that ended in MPI_Abort should be
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; considered
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; suspect (probably incomplete or garbage)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; If you have an application that is calling MPI_Abort to end a valid run
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; then I  would consider that application to be broken.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   From:       Yves Caniou &lt;yves.caniou_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   To:         users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   Cc:         Richard Treumann/Poughkeepsie/IBM_at_IBMUS
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   Date:       04/05/2010 09:14 AM
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   Subject:    Re: [OMPI users] Hide Abort output
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Le Monday 05 April 2010 15:01:42 Richard Treumann, vous avez &#233;crit :
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Why should any software system  offer an option which lets the user
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; hide
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; all distinction between a run that succeeded and one that failed?
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Dick Treumann  -  MPI Team
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; IBM Systems &amp; Technology Group
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Dept X2ZA / MS P963 -- 2455 South Road -- Poughkeepsie, NY 12601
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; Tele (845) 433-7846         Fax (845) 433-8363
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; I don't understand how your question is related to mine, since in my
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; case,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; the
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; application ends correctly and I don't want any output. :?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yves Caniou
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; --
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yves Caniou
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev3">&gt; &gt; &gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev3">&gt; &gt; &gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Yves Caniou
</span><br>
<span class="quotelev2">&gt; &gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev2">&gt; &gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev2">&gt; &gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev2">&gt; &gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev2">&gt; &gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev2">&gt; &gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev2">&gt; &gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev2">&gt; &gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev2">&gt; &gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Yves Caniou
</span><br>
<span class="quotelev1">&gt; Associate Professor at Universit&#233; Lyon 1,
</span><br>
<span class="quotelev1">&gt; Member of the team project INRIA GRAAL in the LIP ENS-Lyon,
</span><br>
<span class="quotelev1">&gt; D&#233;l&#233;gation CNRS in Japan French Laboratory of Informatics (JFLI),
</span><br>
<span class="quotelev1">&gt;   * in Information Technology Center, The University of Tokyo,
</span><br>
<span class="quotelev1">&gt;     2-11-16 Yayoi, Bunkyo-ku, Tokyo 113-8658, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-5841-0540
</span><br>
<span class="quotelev1">&gt;   * in National Institute of Informatics
</span><br>
<span class="quotelev1">&gt;     2-1-2 Hitotsubashi, Chiyoda-ku, Tokyo 101-8430, Japan
</span><br>
<span class="quotelev1">&gt;     tel: +81-3-4212-2412
</span><br>
<span class="quotelev1">&gt; <a href="http://graal.ens-lyon.fr/~ycaniou/">http://graal.ens-lyon.fr/~ycaniou/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12552.php">Jeff Squyres: "Re: [OMPI users] IPoIB"</a>
<li><strong>In reply to:</strong> <a href="12544.php">Yves Caniou: "Re: [OMPI users] Hide Abort output"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Reply:</strong> <a href="12554.php">Richard Treumann: "Re: [OMPI users] Hide Abort output"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
