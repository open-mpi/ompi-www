<?
$subject_val = "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 28 12:10:26 2014" -->
<!-- isoreceived="20140328161026" -->
<!-- sent="Fri, 28 Mar 2014 11:10:25 -0500" -->
<!-- isosent="20140328161025" -->
<!-- name="Rob Latham" -->
<!-- email="robl_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-ROMIO-OrangeFS" -->
<!-- id="53359EF1.607_at_mcs.anl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5334B3A9.3000905_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-ROMIO-OrangeFS<br>
<strong>From:</strong> Rob Latham (<em>robl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-28 12:10:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/27/2014 06:26 PM, Edgar Gabriel wrote:
<br>
<span class="quotelev1">&gt; I will resubmit a new patch, Rob sent me a pointer to the correct
</span><br>
<span class="quotelev1">&gt; solution. Its on my to do list for tomorrow/this weekend.
</span><br>
<p>I also found a bad memcopy (i was taking the size of a pointer to a 
<br>
thing instead of the size of the thing itself), but that only matters 
<br>
if ROMIO uses extended generalized requests.  I trust ticket #1159 is 
<br>
still accurate?
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1159">https://svn.open-mpi.org/trac/ompi/ticket/1159</a>
<br>
<p>==rob
<br>
<p><pre>
-- 
Rob Latham
Mathematics and Computer Science Division
Argonne National Lab, IL USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Previous message:</strong> <a href="24015.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Mapping ranks to hosts (from MPI error messages)"</a>
<li><strong>In reply to:</strong> <a href="24011.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<li><strong>Reply:</strong> <a href="24017.php">Jeff Squyres (jsquyres): "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
