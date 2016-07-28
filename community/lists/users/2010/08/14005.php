<?
$subject_val = "Re: [OMPI users] Abort";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 12 22:44:21 2010" -->
<!-- isoreceived="20100813024421" -->
<!-- sent="Thu, 12 Aug 2010 20:44:12 -0600" -->
<!-- isosent="20100813024412" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Abort" -->
<!-- id="4D5F2CD4-CEA6-4855-BEDF-FB6C87AE7A28_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1281664141.14228.16.camel_at_montroll.chem.mcgill.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Abort<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-08-12 22:44:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds very strange - what OMPI version, on what type of machine, and how was it configured?
<br>
<p><p>On Aug 12, 2010, at 7:49 PM, David Ronis wrote:
<br>
<p><span class="quotelev1">&gt; I've got a mpi program that is supposed to to generate a core file if
</span><br>
<span class="quotelev1">&gt; problems arise on any of the nodes.   I tried to do this by adding a
</span><br>
<span class="quotelev1">&gt; call to abort() to my exit routines but this doesn't work; I get no core
</span><br>
<span class="quotelev1">&gt; file, and worse, mpirun doesn't detect that one of my nodes has
</span><br>
<span class="quotelev1">&gt; aborted(?) and doesn't kill off the entire job, except in the trivial
</span><br>
<span class="quotelev1">&gt; case where the number of processors I'm running on is 1.   I've replaced
</span><br>
<span class="quotelev1">&gt; abort with MPI_Abort, which kills everything off, but leaves no core
</span><br>
<span class="quotelev1">&gt; file.  Any suggestions how I can get one and still have mpi exit?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14006.php">Gus Correa: "Re: [OMPI users] Abort"</a>
<li><strong>Previous message:</strong> <a href="14004.php">David Zhang: "Re: [OMPI users] Abort"</a>
<li><strong>In reply to:</strong> <a href="14002.php">David Ronis: "[OMPI users] Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
<li><strong>Reply:</strong> <a href="14019.php">David Ronis: "Re: [OMPI users] Abort"</a>
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
