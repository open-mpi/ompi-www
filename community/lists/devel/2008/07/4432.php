<?
$subject_val = "[OMPI devel] Large IMB test problems?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 17:13:31 2008" -->
<!-- isoreceived="20080724211331" -->
<!-- sent="Thu, 24 Jul 2008 15:13:19 -0600" -->
<!-- isosent="20080724211319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Large IMB test problems?" -->
<!-- id="7887B6FB-21F3-4A77-B188-3DAD9F215E0F_at_lanl.gov" -->
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
<strong>Subject:</strong> [OMPI devel] Large IMB test problems?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-24 17:13:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<li><strong>Previous message:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<li><strong>Reply:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo folks
<br>
<p>We are trying to run some tests on a new cluster and are having a  
<br>
problem telling hardware, system software, and OMPI failures apart.  
<br>
This is a 16-ppn Opteron system running SLURM under RHEL (forget the  
<br>
precise version), with IB and OMPI 1.2.6.
<br>
<p>Everything launches just fine and seems to work okay. However, on  
<br>
large jobs (e.g., &gt;450 procs), the IMB tests fail and crash a bunch of  
<br>
the nodes on which they are running.
<br>
<p>Has anyone else been able to test in 16+ ppn configurations? I'm  
<br>
wondering if we have an SM problem - perhaps inadequate backing file  
<br>
space or something?
<br>
<p>Any suggestions on how to debug this or config options for higher ppn  
<br>
systems would be appreciated. We don't see this problem on anything  
<br>
with lesser ppn. I'm going to give it a try with 1.3 and see what  
<br>
happens there.
<br>
<p>Thanks
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<li><strong>Previous message:</strong> <a href="4431.php">Ralph Castain: "Re: [OMPI devel] 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
<li><strong>Reply:</strong> <a href="4433.php">George Bosilca: "Re: [OMPI devel] Large IMB test problems?"</a>
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
