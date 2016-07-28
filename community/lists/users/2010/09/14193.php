<?
$subject_val = "Re: [OMPI users] MPI_Reduce performance";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  9 03:34:46 2010" -->
<!-- isoreceived="20100909073446" -->
<!-- sent="Thu, 9 Sep 2010 09:34:42 +0200" -->
<!-- isosent="20100909073442" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Reduce performance" -->
<!-- id="AANLkTine_=jTxPSZkMPExwxsW8u8MpUpiUL1xTOyw67g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6916E76B-E86B-470D-A5E8-B00282781A3A_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Reduce performance<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-09 03:34:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14192.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14191.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mm,I don't understand.
<br>
The experiments on my appliciation shows that an intensive use of Barrier+
<br>
Reduce is more faster than a single Reduce.
<br>
<p>2010/9/9 Ralph Castain &lt;rhc_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; As people have said, these time values are to be expected. All they reflect
</span><br>
<span class="quotelev1">&gt; is the time difference spent in reduce waiting for the slowest process to
</span><br>
<span class="quotelev1">&gt; catch up to everyone else. The barrier removes that factor by forcing all
</span><br>
<span class="quotelev1">&gt; processes to start from the same place.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No mystery here - just a reflection of the fact that your processes arrive
</span><br>
<span class="quotelev1">&gt; at the MPI_Reduce calls at different times.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2010, at 1:14 AM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More in depth,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; total execution time without Barrier is about 10000 sec.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Total execution time with Barrier+Reduce is 9453, with 128 procs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2010/9/9 Terry Frankcombe &lt;terry_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gabriele,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you clarify... those timings are what is reported for the reduction
</span><br>
<span class="quotelev2">&gt;&gt; call specifically, not the total execution time?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, then the difference is, to a first approximation, the time you
</span><br>
<span class="quotelev2">&gt;&gt; spend sitting idly by doing absolutely nothing waiting at the barrier.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ciao
</span><br>
<span class="quotelev2">&gt;&gt; Terry
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Terry Frankcombe
</span><br>
<span class="quotelev2">&gt;&gt; Research School of Chemistry, Australian National University
</span><br>
<span class="quotelev2">&gt;&gt; Ph: (+61) 0417 163 509    Skype: terry.frankcombe
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Parallel programmer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; CINECA Systems &amp; Tecnologies Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supercomputing Group
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
Parallel programmer
CINECA Systems &amp; Tecnologies Department
Supercomputing Group
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14193/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14194.php">Gabriele Fatigati: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>Previous message:</strong> <a href="14192.php">Terry Frankcombe: "Re: [OMPI users] MPI_Reduce performance"</a>
<li><strong>In reply to:</strong> <a href="14191.php">Ralph Castain: "Re: [OMPI users] MPI_Reduce performance"</a>
<!-- nextthread="start" -->
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
