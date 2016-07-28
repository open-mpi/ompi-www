<?
$subject_val = "[OMPI devel] OMPI &amp; SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 25 19:18:18 2008" -->
<!-- isoreceived="20080925231818" -->
<!-- sent="Thu, 25 Sep 2008 17:18:10 -0600" -->
<!-- isosent="20080925231810" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI &amp;amp; SLURM" -->
<!-- id="9DF52465-27A4-47FC-A5D2-2515A19A7F22_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI &amp; SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-09-25 19:18:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI devel] OMPI &amp; SLURM"</a>
<li><strong>Previous message:</strong> <a href="4710.php">Jeff Squyres: "Re: [OMPI devel] trunk temporarily closed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI devel] OMPI &amp; SLURM"</a>
<li><strong>Reply:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI devel] OMPI &amp; SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo all
<br>
<p>Over the last few days, we at LANL have been working with our LLNL  
<br>
counterparts on some OMPI/SLURM integration issues. In the course of  
<br>
this work, we have learned that the meaning/use of the  
<br>
SLURM_TASKS_PER_NODE environmental variable used by OMPI (and LAM-MPI  
<br>
as well as others) to extract required allocation information was  
<br>
changed beginning with SLURM 1.2, and the info we are seeking was  
<br>
shifted to SLURM_JOB_CPUS_PER_NODE. Since SLURM is now on release  
<br>
1.3.7 and above, this clearly occurred some time ago.
<br>
<p>What I propose to do (per LLNL's recommendation) is modify the SLURM  
<br>
ras module to check for SLURM_JOB_CPUS_PER_NODE first and use that  
<br>
value if found - if not found, then fall back to using  
<br>
SLURM_TASKS_PER_NODE. This will make us fully compatible with more  
<br>
recent SLURM releases while retaining backward compatibility with pre- 
<br>
SLURM 1.2 versions (assuming anyone out there is running something  
<br>
that old).
<br>
<p>Given that 1.2.8 and 1.3.0 have not yet been released, we (LANL) would  
<br>
like to get this change into those releases. It is a minor code change  
<br>
(I will insert it into trunk so people can see) and easily tested on  
<br>
any SLURM machine.
<br>
<p>Are there any objections/comments?
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI devel] OMPI &amp; SLURM"</a>
<li><strong>Previous message:</strong> <a href="4710.php">Jeff Squyres: "Re: [OMPI devel] trunk temporarily closed"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI devel] OMPI &amp; SLURM"</a>
<li><strong>Reply:</strong> <a href="4712.php">Jeff Squyres: "Re: [OMPI devel] OMPI &amp; SLURM"</a>
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
