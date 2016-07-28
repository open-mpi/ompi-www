<?
$subject_val = "Re: [OMPI users] flash2.5 with openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 25 15:01:29 2008" -->
<!-- isoreceived="20080125200129" -->
<!-- sent="Fri, 25 Jan 2008 21:01:21 +0100" -->
<!-- isosent="20080125200121" -->
<!-- name="Daniel Pfenniger" -->
<!-- email="Daniel.Pfenniger_at_[hidden]" -->
<!-- subject="Re: [OMPI users] flash2.5 with openmpi" -->
<!-- id="479A4011.5070903_at_obs.unige.ch" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A4C31855-EF38-48C8-9652-B9F325C453D7_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] flash2.5 with openmpi<br>
<strong>From:</strong> Daniel Pfenniger (<em>Daniel.Pfenniger_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-25 15:01:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4882.php">Brock Palen: "[OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Reply:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Brock Palen wrote:
<br>
<span class="quotelev1">&gt; Is anyone using flash with openMPI?  we are here, but when ever it  
</span><br>
<span class="quotelev1">&gt; tries to write its second checkpoint file it segfaults once it gets  
</span><br>
<span class="quotelev1">&gt; to 2.2GB always in the same location.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Debugging is a pain as it takes 3 days to get to that point.  Just  
</span><br>
<span class="quotelev1">&gt; wondering if anyone else has seen this same behavior.
</span><br>
<p>Just to make testing faster you might think reducing the file output
<br>
interval (trstrt or nrstrt parameters in flash.par), and decrease the
<br>
resolution (lrefine_max) to produce smaller files and to see whether
<br>
the problem is related with the file size.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Dan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Previous message:</strong> <a href="4886.php">Barry Rountree: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="4882.php">Brock Palen: "[OMPI users] flash2.5 with openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
<li><strong>Reply:</strong> <a href="4888.php">Brock Palen: "Re: [OMPI users] flash2.5 with openmpi"</a>
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
