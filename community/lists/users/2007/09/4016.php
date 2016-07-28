<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 13:53:51 2007" -->
<!-- isoreceived="20070914175351" -->
<!-- sent="Fri, 14 Sep 2007 13:53:50 -0400" -->
<!-- isosent="20070914175350" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiio romio etc" -->
<!-- id="46EACAAE.6090902_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070914172748.GS25905_at_mcs.anl.gov" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-14 13:53:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4017.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="4015.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>In reply to:</strong> <a href="4015.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4018.php">Jeff Squyres: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Reply:</strong> <a href="4018.php">Jeff Squyres: "Re: [OMPI users] mpiio romio etc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>To give FLAGS to the ROMIO configuration script, the configure option 
<br>
for Open MPI is:
<br>
<p>&nbsp;&nbsp;&nbsp;--with-io-romio-flags=FLAGS
<br>
<p>So something like:
<br>
&nbsp;&nbsp;&nbsp;--with-io-romio-flags=&quot;--with-filesystems=ufs+nfs+pvfs2&quot;
<br>
should work, though I have not tested it.
<br>
<p>You can see all the ROMIO configure flags by running:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;./ompi/mca/io/romio/romio/configure --help
<br>
from the top directory of the Open MPI source.
<br>
<p>If you want to see what file systems support has been built for, you 
<br>
should just be able to look in the config.log for ROMIO:
<br>
&nbsp;&nbsp;&nbsp;grep FILE_SYSTEM ./ompi/mca/io/romio/romio/config.log
<br>
<p>I am not an expert in this area, but I hope this helps.
<br>
<p>Tim
<br>
<p>Robert Latham wrote:
<br>
<span class="quotelev1">&gt; On Fri, Sep 07, 2007 at 10:18:55AM -0400, Brock Palen wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Is there a way to find out which ADIO options romio was built with?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; not easily. You can use 'nm' and look at the symbols :&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also does OpenMPI's romio come with pvfs2 support included? What  
</span><br>
<span class="quotelev2">&gt;&gt; about Luster or GPFS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI has shipped with PVFS v2 support for a long time.  Not sure
</span><br>
<span class="quotelev1">&gt; how you enable it, though.  --with-filesystems=ufs+nfs+pvfs2 might
</span><br>
<span class="quotelev1">&gt; work for OpenMPI as it does for MPICH2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All versions of ROMIO support Lustre and GPFS the same way: with the
</span><br>
<span class="quotelev1">&gt; &quot;generic unix filesystem&quot; (UFS) driver.  Weikuan Yu at ORNL has been
</span><br>
<span class="quotelev1">&gt; working on a native &quot;AD_LUSTRE&quot; driver and some improvements to ROMIO
</span><br>
<span class="quotelev1">&gt; collective I/O.   Likely to be in the next ROMIO release.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For GPFS, the only optimized MPI-IO implementation is IBM's MPI for
</span><br>
<span class="quotelev1">&gt; AIX.  You're likely to see decent performance with the UFS driver,
</span><br>
<span class="quotelev1">&gt; though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4017.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>Previous message:</strong> <a href="4015.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>In reply to:</strong> <a href="4015.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4018.php">Jeff Squyres: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Reply:</strong> <a href="4018.php">Jeff Squyres: "Re: [OMPI users] mpiio romio etc"</a>
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
