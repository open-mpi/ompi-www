<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 15:53:35 2010" -->
<!-- isoreceived="20101028195335" -->
<!-- sent="Thu, 28 Oct 2010 15:53:29 -0400" -->
<!-- isosent="20101028195329" -->
<!-- name="Scott Atchley" -->
<!-- email="atchley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="14472FF4-7CAF-4C50-B6F4-3C45A3A8BB33_at_myri.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4CC9C5EB.5050608_at_aem.umn.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults<br>
<strong>From:</strong> Scott Atchley (<em>atchley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-28 15:53:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14643.php">Jack Bryan: "[OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 28, 2010, at 2:50 PM, Ray Muno wrote:
<br>
<p><span class="quotelev1">&gt; On 10/28/2010 01:40 PM, Scott Atchley wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does your environment have LD_LIBRARY_PATH set to point to $OMPI/lib and $MX/lib? Does it get set on login? Is $OMPI/bin in your PATH?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Scott
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $MX/lib was not in LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is interesting. On the head node,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [/etc/ld.so.conf.d]$ more mx.conf
</span><br>
<span class="quotelev1">&gt; /opt/mx/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But that is not there on the compute nodes.  It must have been there
</span><br>
<span class="quotelev1">&gt; before the rebuild.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was looking in /etc/ld.so.con* for things that were getting in my way
</span><br>
<span class="quotelev1">&gt; but not for things that were missing.
</span><br>
<p>:-)
<br>
<p><span class="quotelev1">&gt; In any event, adding the $MX/lib to the relevant module takes care of
</span><br>
<span class="quotelev1">&gt; the issue.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you...
</span><br>
<p>Anytime.
<br>
<p>Scott
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14643.php">Jack Bryan: "[OMPI users] open MPI please recommend a debugger for open MPI"</a>
<li><strong>Previous message:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14641.php">Ray Muno: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
