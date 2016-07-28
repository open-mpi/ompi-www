<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 27 14:25:49 2012" -->
<!-- isoreceived="20120627182549" -->
<!-- sent="Wed, 27 Jun 2012 11:25:45 -0700" -->
<!-- isosent="20120627182545" -->
<!-- name="Martin Siegert" -->
<!-- email="siegert_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="20120627182545.GC7598_at_stikine.sfu.ca" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="682C9349-D442-4663-BDA9-5636E5A89997_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Allreduce hangs<br>
<strong>From:</strong> Martin Siegert (<em>siegert_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-27 14:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19639.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>On Wed, Jun 20, 2012 at 04:16:12PM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Jun 20, 2012, at 3:36 PM, Martin Siegert wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; by now we know of three programs - dirac, wrf, quantum espresso - that
</span><br>
<span class="quotelev2">&gt; &gt; all hang with openmpi-1.4.x (have not yet checked with openmpi-1.6).
</span><br>
<span class="quotelev2">&gt; &gt; All of these programs run to completion with the mpiexec commandline
</span><br>
<span class="quotelev2">&gt; &gt; argument: --mca btl_openib_flags 305
</span><br>
<span class="quotelev2">&gt; &gt; We now set this in the global configuration file openmpi-mca-params.conf.
</span><br>
<span class="quotelev2">&gt; &gt; What is the reason that this is not the default in the first place?
</span><br>
<span class="quotelev2">&gt; &gt; Are there any negative effects?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Two things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. These flags -- 305 (or 0x131 or 0001 0011 0001) translate to telling the openib BTL the following:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - 1: SEND: meaning that the openib BTL is using send/receive semantics
</span><br>
<span class="quotelev1">&gt; - 16: ACK: meaningless with the ob1 PML
</span><br>
<span class="quotelev1">&gt; - 32: CHECKSUM: meaningless with the ob1 PML
</span><br>
<span class="quotelev1">&gt; - 256: meaningless
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's meaning here is what is missing: RDMA PUT and GET.  So all RDMA support is disabled.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This will work fine, but you may want to increase your mca_btl_openib_eager_limit size (e.g., U. Michigan did the same thing as you -- disabled RDMA -- but increased the eager limit to 64k to get back some of the lost performance).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We believe that we have *finally* (just recently) fixed this issue in the SVN trunk and upcoming 1.6.1 release.  I have a test pre-release 1.6.1 tarball -- would you mind giving it a whirl?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2">http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2</a>
</span><br>
<p>Thanks! I tried this and, indeed, the program (I tested quantum espresso,
<br>
pw.x, so far) no longer hangs.
<br>
<p>Then I went one step further and benchmarked the following three cases:
<br>
<p>1) pw.x compiled with openmpi-1.3.3
<br>
2) pw.x compiled with openmpi-1.4.3 and
<br>
&nbsp;&nbsp;&nbsp;btl_openib_flags = 305
<br>
&nbsp;&nbsp;&nbsp;btl_openib_eager_limit = 65536
<br>
&nbsp;&nbsp;&nbsp;in etc/openmpi-mca-params.conf
<br>
3) pw.x compiled with openmpi-1.6.1ticket3131r26612M
<br>
<p>These are the results time (in seconds) per iteration - smaller is better:
<br>
1) 33.11
<br>
2) 28.23
<br>
3) 34.81
<br>
<p>That's rather disappointing, isn't it?
<br>
<p>Cheers,
<br>
Martin
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Previous message:</strong> <a href="19688.php">Jeff Squyres: "Re: [OMPI users] rpmbuild defining opt install path"</a>
<li><strong>In reply to:</strong> <a href="19639.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19690.php">Jeff Squyres: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
