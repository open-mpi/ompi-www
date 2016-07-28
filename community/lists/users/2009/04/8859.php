<?
$subject_val = "[OMPI users] openmpi src rpm and message coalesce";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 10 09:57:31 2009" -->
<!-- isoreceived="20090410135731" -->
<!-- sent="Fri, 10 Apr 2009 19:24:05 +0530" -->
<!-- isosent="20090410135405" -->
<!-- name="vkm" -->
<!-- email="viral.vkm_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi src rpm and message coalesce" -->
<!-- id="49DF4F7D.1010304_at_gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] openmpi src rpm and message coalesce<br>
<strong>From:</strong> vkm (<em>viral.vkm_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-10 09:54:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8860.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>Reply:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I was trying to understand how &quot;btl_openib_use_message_coalescing&quot; is working.
<br>
<p>Since for a certain test scenario, IMB-EXT is working if I use &quot;btl_openib_use_message_coalescing = 0&quot; and not for &quot;btl_openib_use_message_coalescing = 1&quot;
<br>
No idea, who can have BUG here either open-mpi or low-level-driver !! ??
<br>
<p>Howsoever, I have one more concern as well. I added some prints to debug openmpi.
<br>
<p>I was following below procedure,
<br>
Extract OFED TAR
<br>
Extract openmpi*.src.rpm
<br>
Go to SOURCE
<br>
Extract openmpi*.tgz
<br>
modify code
<br>
Create TAR
<br>
Create openmpi*.src.rpm
<br>
Build rpm
<br>
<p>But, it was taking whole lot of my time. Is there any short cut ?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8860.php">Francesco Pietra: "Re: [OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8858.php">Geoffroy Pignot: "[OMPI users] 1.3.1 -rf rankfile behaviour ??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
<li><strong>Reply:</strong> <a href="8934.php">Jeff Squyres: "Re: [OMPI users] openmpi src rpm and message coalesce"</a>
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
