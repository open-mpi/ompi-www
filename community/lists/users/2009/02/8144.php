<?
$subject_val = "Re: [OMPI users] OpenMPI 1.3.1 rpm build error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 20 14:30:37 2009" -->
<!-- isoreceived="20090220193037" -->
<!-- sent="Fri, 20 Feb 2009 14:30:28 -0500" -->
<!-- isosent="20090220193028" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.3.1 rpm build error" -->
<!-- id="817188FB-FD0A-46F5-BC86-F32F297513F2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="df8c8a6d0902201120w41744b53xb56cd119de1db5bd_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.3.1 rpm build error<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-20 14:30:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 20, 2009, at 2:20 PM, Jim Kusznir wrote:
<br>
<p><span class="quotelev1">&gt; I just went to www.open-mpi.org, went to download, then source rpm.
</span><br>
<span class="quotelev1">&gt; Looks like it was actually 1.3-1.  Here's the src.rpm that I pulled
</span><br>
<span class="quotelev1">&gt; in:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm">http://www.open-mpi.org/software/ompi/v1.3/downloads/openmpi-1.3-1.src.rpm</a>
</span><br>
<p>Ah, gotcha.  Yes, that's 1.3.0, SRPM version 1.  We didn't make up  
<br>
this nomenclature.  :-(
<br>
<p><span class="quotelev1">&gt; The reason for this upgrade is it seems a user found some bug that may
</span><br>
<span class="quotelev1">&gt; be in the OpenMPI code that results in occasionally an MPI_Send()
</span><br>
<span class="quotelev1">&gt; message getting lost.  He's managed to reproduce it multiple times,
</span><br>
<span class="quotelev1">&gt; and we can't find anything in his code that can cause it...He's got
</span><br>
<span class="quotelev1">&gt; logs of mpi_send() going out, but the matching mpi_receive() never
</span><br>
<span class="quotelev1">&gt; getting anything, thus killing his code.  We're currently running
</span><br>
<span class="quotelev1">&gt; 1.2.8 with ofed support (Haven't tried turning off ofed, etc. yet).
</span><br>
<p>Ok.  1.3.x is much mo' betta' then 1.2 in many ways.  We could  
<br>
probably help track down the problem, but if you're willing to upgrade  
<br>
to 1.3.x, it'll hopefully just make the problem go away.
<br>
<p>Can you try a 1.3.1 nightly tarball?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Previous message:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>In reply to:</strong> <a href="8143.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
<li><strong>Reply:</strong> <a href="8145.php">Jim Kusznir: "Re: [OMPI users] OpenMPI 1.3.1 rpm build error"</a>
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
