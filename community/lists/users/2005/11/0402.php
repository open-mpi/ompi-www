<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 28 14:17:35 2005" -->
<!-- isoreceived="20051128191735" -->
<!-- sent="Mon, 28 Nov 2005 14:17:27 -0500" -->
<!-- isosent="20051128191727" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problems with bproc cluster" -->
<!-- id="ce46f4190fef916442e31f9767cd02ae_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="438B501F.1070506_at_lanl.gov" -->
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
<strong>Date:</strong> 2005-11-28 14:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0403.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0403.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 28, 2005, at 1:44 PM, Tim S. Woodall wrote:
<br>
<p><span class="quotelev1">&gt; You need to specify both --enable-static and --disable-shared to do a 
</span><br>
<span class="quotelev1">&gt; static
</span><br>
<span class="quotelev1">&gt; build (not sure why, perhaps someone else can fill us in on that)...
</span><br>
<p>Just to tie this up for the web logs:
<br>
<p>This is correct.  If you don't --disable-shared, then *both* static and 
<br>
shared libraries are built.  If both are build, all the OMPI tools 
<br>
(like orted) will link against the dynamic libraries -- this appears to 
<br>
be a libtool default (i.e., our Makefile.am's link against 
<br>
..../libmpi.la and friends).
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0403.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>Previous message:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0401.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0403.php">Dale Harris: "Re: [O-MPI users] problems with bproc cluster"</a>
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
