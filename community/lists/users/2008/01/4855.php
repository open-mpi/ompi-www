<?
$subject_val = "Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 18 20:53:33 2008" -->
<!-- isoreceived="20080119015333" -->
<!-- sent="Fri, 18 Jan 2008 20:53:17 -0500" -->
<!-- isosent="20080119015317" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2" -->
<!-- id="4AD783A0-C42F-461D-A564-418BA3B44E33_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1F7B9A89-4793-43F6-80A5-B3C7A02E4F47_at_rain.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] compiler warnings in openmpi-1.2.5rc2<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-18 20:53:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4856.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4756.php">Doug Reeder: "[OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You're right.  This fix is already on the trunk; it looks like we  
<br>
missed bringing it to the v1.2 branch.  I'll file a CMR against the  
<br>
v1.2 branch in case we ever release 1.2.6.
<br>
<p>Thanks!
<br>
<p>On Dec 27, 2007, at 10:34 PM, Doug Reeder wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attachment contains a short explanation of a compiler warning
</span><br>
<span class="quotelev1">&gt; using the gcc-4.3.0 compilers from hpc-sourceforge on os x 10.5.1.
</span><br>
<span class="quotelev1">&gt; The warning doesn't occur when using the apple gcc-4.0.1 compilers.
</span><br>
<span class="quotelev1">&gt; This was on a mac /x86 machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; &lt;openmpi.wrn&gt;&lt;ATT279117.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4856.php">Jeff Squyres: "Re: [OMPI users] multi-compiler builds of OpenMPI (RPM)"</a>
<li><strong>Previous message:</strong> <a href="4854.php">Jeff Squyres: "Re: [OMPI users] Occasional mpirun hang on completion"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/12/4756.php">Doug Reeder: "[OMPI users] compiler warnings in openmpi-1.2.5rc2"</a>
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
