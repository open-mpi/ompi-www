<?
$subject_val = "[OMPI users] Adding libraries to wrapper compiler at run-time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 14:53:27 2010" -->
<!-- isoreceived="20100707185327" -->
<!-- sent="Wed, 7 Jul 2010 14:53:26 -0400 (EDT)" -->
<!-- isosent="20100707185326" -->
<!-- name="Jeremiah Willcock" -->
<!-- email="jewillco_at_[hidden]" -->
<!-- subject="[OMPI users] Adding libraries to wrapper compiler at run-time" -->
<!-- id="alpine.LRH.2.00.1007071451270.1920_at_flowerpot.osl.iu.edu" -->
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
<strong>Subject:</strong> [OMPI users] Adding libraries to wrapper compiler at run-time<br>
<strong>From:</strong> Jeremiah Willcock (<em>jewillco_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 14:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13518.php">Douglas Guptill: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13516.php">Jeff Squyres: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13655.php">Jeff Squyres: "Re: [OMPI users] Adding libraries to wrapper compiler at run-time"</a>
<li><strong>Reply:</strong> <a href="13655.php">Jeff Squyres: "Re: [OMPI users] Adding libraries to wrapper compiler at run-time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The Open MPI FAQ shows how to add libraries to the Open MPI wrapper 
<br>
compilers when building them (using configure flags), but I would like to 
<br>
add flags for a specific run of the wrapper compiler.  Setting OMPI_LIBS 
<br>
overrides the necessary MPI libraries, and it does not appear that there 
<br>
is an easy way to get just the flags that OMPI_LIBS contains by default 
<br>
(either using -showme:link or ompi_info).  Is there a way to add to the 
<br>
default set of OMPI_LIBS rather than overriding it entirely?  Thank you 
<br>
for your help.
<br>
<p>-- Jeremiah Willcock
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13518.php">Douglas Guptill: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<li><strong>Previous message:</strong> <a href="13516.php">Jeff Squyres: "Re: [OMPI users] trouble using openmpi under slurm"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13655.php">Jeff Squyres: "Re: [OMPI users] Adding libraries to wrapper compiler at run-time"</a>
<li><strong>Reply:</strong> <a href="13655.php">Jeff Squyres: "Re: [OMPI users] Adding libraries to wrapper compiler at run-time"</a>
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
