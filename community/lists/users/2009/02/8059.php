<?
$subject_val = "Re: [OMPI users] MPI_PROC_NULL";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 13 07:53:31 2009" -->
<!-- isoreceived="20090213125331" -->
<!-- sent="Fri, 13 Feb 2009 04:53:26 -0800" -->
<!-- isosent="20090213125326" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_PROC_NULL" -->
<!-- id="9E52271C-65A8-43A5-8F38-94A527610F96_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9b0da5ce0902130439p4fefd522p126c367326f2b620_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_PROC_NULL<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-13 07:53:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 13, 2009, at 4:39 AM, jody wrote:
<br>
<p><span class="quotelev1">&gt; Yes, it was doing no sensible work -
</span><br>
<span class="quotelev1">&gt; It was only intended to show the error message.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I now downloaded the latest nightly tarball and installed it,
</span><br>
<span class="quotelev1">&gt; and used your version of the test programm. It works -
</span><br>
<span class="quotelev1">&gt; *if* is use the entire path to mpirun:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [jody_at_localhost 3D]$  /opt/openmpi-1.3.1a0r20534/bin/mpirun -np 2 ./sr
</span><br>
<p>That's interesting.  Note that if you give the full pathname to  
<br>
mpirun, it is the same as using the --prefix option to mpirun.
<br>
<p>This leads me to suspect that you have a version mismatch of Open MPI  
<br>
somewhere.  Can you verify that you are using only one version of Open  
<br>
MPI and not accidentally using multiple versions when you mpirun?
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
<li><strong>Next message:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>Previous message:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<li><strong>In reply to:</strong> <a href="8058.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8060.php">jody: "Re: [OMPI users] MPI_PROC_NULL"</a>
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
