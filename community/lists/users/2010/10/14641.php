<?
$subject_val = "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 28 14:50:24 2010" -->
<!-- isoreceived="20101028185024" -->
<!-- sent="Thu, 28 Oct 2010 13:50:19 -0500" -->
<!-- isosent="20101028185019" -->
<!-- name="Ray Muno" -->
<!-- email="muno_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults" -->
<!-- id="4CC9C5EB.5050608_at_aem.umn.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="85EA84BC-C04E-459D-9195-1DEAD9ADE631_at_myri.com" -->
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
<strong>From:</strong> Ray Muno (<em>muno_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-28 14:50:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14642.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14642.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14642.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/28/2010 01:40 PM, Scott Atchley wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does your environment have LD_LIBRARY_PATH set to point to $OMPI/lib and $MX/lib? Does it get set on login? Is $OMPI/bin in your PATH?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<p>$MX/lib was not in LD_LIBRARY_PATH
<br>
<p>That is interesting. On the head node,
<br>
<p>&nbsp;[/etc/ld.so.conf.d]$ more mx.conf
<br>
/opt/mx/lib
<br>
<p>But that is not there on the compute nodes.  It must have been there
<br>
before the rebuild.
<br>
<p>I was looking in /etc/ld.so.con* for things that were getting in my way
<br>
but not for things that were missing.
<br>
<p>In any event, adding the $MX/lib to the relevant module takes care of
<br>
the issue.
<br>
<p>Thank you...
<br>
<pre>
-- 
 Ray Muno
 University of Minnesota
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14642.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Previous message:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>In reply to:</strong> <a href="14640.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14642.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
<li><strong>Reply:</strong> <a href="14642.php">Scott Atchley: "Re: [OMPI users] OpenMPI 1.4.2 with Myrinet MX, mpirun seg faults"</a>
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
