<?
$subject_val = "Re: [OMPI users] Absoft compilation problem";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  1 10:52:36 2007" -->
<!-- isoreceived="20070701145236" -->
<!-- sent="Sun, 1 Jul 2007 13:03:40 +0200" -->
<!-- isosent="20070701110340" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Absoft compilation problem" -->
<!-- id="D6886697-4492-420B-8EBF-5FD4D8FA8CD4_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="350B898AB2BACD4980AC3DAFB99294F70A5B6E_at_XCH-NW-4V2.nw.nos.boeing.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-01 07:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3560.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>Previous message:</strong> <a href="../../2007/06/3558.php">Glenn Carver: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>In reply to:</strong> <a href="../../2007/06/3554.php">Yip, Elizabeth L: "[OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3563.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Reply:</strong> <a href="3563.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I unfortunately do not have access to an Absoft compiler to test this  
<br>
with; it looks like GNU Libtool is getting the wrong arguments to  
<br>
pass to the f95 compiler to build a shared library.
<br>
<p>A quick workaround for this issue would be to disable the MPI F90  
<br>
bindings with the --disable-mpi-f90 switch to configure.
<br>
<p>Could you try the Open MPI nightly trunk tarball and see if it works  
<br>
there?  We use a different version of Libtool to make those tarballs.
<br>
<p><p>On Jun 30, 2007, at 2:09 AM, Yip, Elizabeth L wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The attachment shows my problems when I tried to compile openmpi  
</span><br>
<span class="quotelev1">&gt; 1.2.3 with absoft 95
</span><br>
<span class="quotelev1">&gt; (Absoft 64-bit Fortran 95 9.0 with Service Pack 1).  I have similar  
</span><br>
<span class="quotelev1">&gt; problems with version 1.2.1, but
</span><br>
<span class="quotelev1">&gt; no problem with version 1.2.1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Elizabeth Yip
</span><br>
<span class="quotelev1">&gt; &lt;ompi_absoft.tar.gz&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="3560.php">Jeff Squyres: "Re: [OMPI users] openmpi on g4 mac with g95 (www.g95.org) in mpif90"</a>
<li><strong>Previous message:</strong> <a href="../../2007/06/3558.php">Glenn Carver: "Re: [OMPI users] MPI over IB not working : &quot;Connection event not handled: 16391&quot;"</a>
<li><strong>In reply to:</strong> <a href="../../2007/06/3554.php">Yip, Elizabeth L: "[OMPI users] Absoft compilation problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3563.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Reply:</strong> <a href="3563.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
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
