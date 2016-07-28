<?
$subject_val = "[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 04:46:47 2012" -->
<!-- isoreceived="20121213094647" -->
<!-- sent="Thu, 13 Dec 2012 15:15:53 +0530" -->
<!-- isosent="20121213094553" -->
<!-- name="Shikha Maheshwari" -->
<!-- email="shikha.mah_at_[hidden]" -->
<!-- subject="[OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z" -->
<!-- id="OF9C1F04E3.7448C2EE-ON65257AD3.00345137-65257AD3.0035B089_at_in.ibm.com" -->
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
<strong>Subject:</strong> [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z<br>
<strong>From:</strong> Shikha Maheshwari (<em>shikha.mah_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-13 04:45:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>Previous message:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>Reply:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We are trying to build 'hwloc 1.4.2' on Linux on System Z. To build hwloc, 
<br>
need to perform the following steps:
<br>
- ./configure
<br>
- gmake all install
<br>
<p>We are getting error while performing first step i.e. running configure 
<br>
script.
<br>
error message is :
<br>
configure: error: No atomic primitives available for s390x-ibm-linux-gnu
<br>
<p>If we investigate configure script, we got to know that it deals with some 
<br>
assembly related operations in this part. And, switch-case does not cover 
<br>
Linux on System z architecture (s390/s390x), hence it throws error and 
<br>
exits.
<br>
<p>If we exclude this part (i.e. commented exit part only), configure gets 
<br>
executed till end and Makefile gets generated.
<br>
<p>Questions: We have following questions related to this:
<br>
<p>1. Is 'hwloc' supported on Linux on system z?
<br>
2. What exactly this assembly part is used for?
<br>
3. What functionality will get affected if we exclude this part?
<br>
<p>Please assist us.
<br>
<p>Thanks &amp; Regards, 
<br>
Shikha Maheshwari
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20939/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>Previous message:</strong> <a href="20938.php">Siegmar Gross: "Re: [OMPI users] problem configuring openmpi-1.6.4a1r27643 on Linux"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
<li><strong>Reply:</strong> <a href="20940.php">Brice Goglin: "Re: [OMPI users] Error in configuring hwloc(hardware locality) on Linux on System Z"</a>
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
