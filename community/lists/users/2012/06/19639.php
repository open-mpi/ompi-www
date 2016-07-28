<?
$subject_val = "Re: [OMPI users] MPI_Allreduce hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 20 16:16:20 2012" -->
<!-- isoreceived="20120620201620" -->
<!-- sent="Wed, 20 Jun 2012 16:16:12 -0400" -->
<!-- isosent="20120620201612" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Allreduce hangs" -->
<!-- id="682C9349-D442-4663-BDA9-5636E5A89997_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20120620193615.GB31755_at_stikine.sfu.ca" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-20 16:16:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19640.php">Ufuk Utku Turuncoglu (BE): "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..."</a>
<li><strong>Previous message:</strong> <a href="19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jun 20, 2012, at 3:36 PM, Martin Siegert wrote:
<br>
<p><span class="quotelev1">&gt; by now we know of three programs - dirac, wrf, quantum espresso - that
</span><br>
<span class="quotelev1">&gt; all hang with openmpi-1.4.x (have not yet checked with openmpi-1.6).
</span><br>
<span class="quotelev1">&gt; All of these programs run to completion with the mpiexec commandline
</span><br>
<span class="quotelev1">&gt; argument: --mca btl_openib_flags 305
</span><br>
<span class="quotelev1">&gt; We now set this in the global configuration file openmpi-mca-params.conf.
</span><br>
<span class="quotelev1">&gt; What is the reason that this is not the default in the first place?
</span><br>
<span class="quotelev1">&gt; Are there any negative effects?
</span><br>
<p>Two things:
<br>
<p>1. These flags -- 305 (or 0x131 or 0001 0011 0001) translate to telling the openib BTL the following:
<br>
<p>- 1: SEND: meaning that the openib BTL is using send/receive semantics
<br>
- 16: ACK: meaningless with the ob1 PML
<br>
- 32: CHECKSUM: meaningless with the ob1 PML
<br>
- 256: meaningless
<br>
<p>What's meaning here is what is missing: RDMA PUT and GET.  So all RDMA support is disabled.
<br>
<p>This will work fine, but you may want to increase your mca_btl_openib_eager_limit size (e.g., U. Michigan did the same thing as you -- disabled RDMA -- but increased the eager limit to 64k to get back some of the lost performance).
<br>
<p>2. We believe that we have *finally* (just recently) fixed this issue in the SVN trunk and upcoming 1.6.1 release.  I have a test pre-release 1.6.1 tarball -- would you mind giving it a whirl?
<br>
<p><a href="http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2">http://www.open-mpi.org/~jsquyres/unofficial/openmpi-1.6.1ticket3131r26612M.tar.bz2</a>
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19640.php">Ufuk Utku Turuncoglu (BE): "[OMPI users] two jobs in a single mpirun command and MPI_COMM_WORLD issue ..."</a>
<li><strong>Previous message:</strong> <a href="19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>In reply to:</strong> <a href="19638.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
<li><strong>Reply:</strong> <a href="19689.php">Martin Siegert: "Re: [OMPI users] MPI_Allreduce hangs"</a>
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
