<?
$subject_val = "Re: [OMPI users] MPi Abort verbosity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 24 09:36:38 2010" -->
<!-- isoreceived="20100224143638" -->
<!-- sent="Wed, 24 Feb 2010 07:36:28 -0700" -->
<!-- isosent="20100224143628" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPi Abort verbosity" -->
<!-- id="C37BBB8F-0F0C-41EE-B966-0F3C99BAAC3D_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3a37617f1002240617s7b334af8s455412556099be6f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPi Abort verbosity<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-24 09:36:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Reply:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm afraid not. We are working on alternative error response mechanisms, but nothing is released at this time.
<br>
<p>On Feb 24, 2010, at 7:17 AM, Gabriele Fatigati wrote:
<br>
<p><span class="quotelev1">&gt; Mm,
</span><br>
<span class="quotelev1">&gt; i'm trying to explain better.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My target is, when a MPI process dead for some reason, after launched MPI_Abort i would like to control this behaviour. Example:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; rank 0 died and launc MPI_Abort
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; i would like to do something before other process died. So i want to control shutdown of my MPI application. Is it possible?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2010/2/24 Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; I don't believe the error handler will help suppress the messages you are trying to avoid as they don't originate in the MPI layer. They are actually generated in the RTE layer as mpirun is exiting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You could try adding the --quiet option to your mpirun cmd line. This will help eliminate some (maybe not all) of the verbage.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 24, 2010, at 6:36 AM, Jed Brown wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, 24 Feb 2010 14:21:02 +0100, Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes, of course,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; but i would like to know if there is any way to do that with openmpi
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; See the error handler docs, e.g. MPI_Comm_set_errhandler.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Jed
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12135/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Previous message:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>In reply to:</strong> <a href="12134.php">Gabriele Fatigati: "Re: [OMPI users] MPi Abort verbosity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
<li><strong>Reply:</strong> <a href="12136.php">Nadia Derbey: "Re: [OMPI users] MPi Abort verbosity"</a>
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
