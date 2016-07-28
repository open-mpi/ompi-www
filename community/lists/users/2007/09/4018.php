<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep 14 14:17:00 2007" -->
<!-- isoreceived="20070914181700" -->
<!-- sent="Fri, 14 Sep 2007 14:16:46 -0400" -->
<!-- isosent="20070914181646" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiio romio etc" -->
<!-- id="CCED4745-1CA4-48FF-B782-67E8A1A883F3_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="46EACAAE.6090902_at_open-mpi.org" -->
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
<strong>Date:</strong> 2007-09-14 14:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4019.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Previous message:</strong> <a href="4017.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4019.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Reply:</strong> <a href="4019.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry for not replying earlier -- going on vacation for a few days  
<br>
really puts you behind in e-mail.  :-)
<br>
<p>I think that we should have a simple way to look up at least  
<br>
*something* about ROMIO in ompi_info.  Perhaps we can easily snarf  
<br>
the flags provided to --with-io-romio-flags and put that in an MCA  
<br>
parameter that would then be query-able through ompi_info.
<br>
<p>Rob -- is there a public constant/symbol somewhere where we can  
<br>
access some form of ROMIO's version number?  If so, we can also make  
<br>
that query-able via ompi_info.
<br>
<p><p>On Sep 14, 2007, at 1:53 PM, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To give FLAGS to the ROMIO configuration script, the configure option
</span><br>
<span class="quotelev1">&gt; for Open MPI is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    --with-io-romio-flags=FLAGS
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So something like:
</span><br>
<span class="quotelev1">&gt;    --with-io-romio-flags=&quot;--with-filesystems=ufs+nfs+pvfs2&quot;
</span><br>
<span class="quotelev1">&gt; should work, though I have not tested it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can see all the ROMIO configure flags by running:
</span><br>
<span class="quotelev1">&gt;     ./ompi/mca/io/romio/romio/configure --help
</span><br>
<span class="quotelev1">&gt; from the top directory of the Open MPI source.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you want to see what file systems support has been built for, you
</span><br>
<span class="quotelev1">&gt; should just be able to look in the config.log for ROMIO:
</span><br>
<span class="quotelev1">&gt;    grep FILE_SYSTEM ./ompi/mca/io/romio/romio/config.log
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not an expert in this area, but I hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Robert Latham wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, Sep 07, 2007 at 10:18:55AM -0400, Brock Palen wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is there a way to find out which ADIO options romio was built with?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; not easily. You can use 'nm' and look at the symbols :&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Also does OpenMPI's romio come with pvfs2 support included? What
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about Luster or GPFS.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI has shipped with PVFS v2 support for a long time.  Not sure
</span><br>
<span class="quotelev2">&gt;&gt; how you enable it, though.  --with-filesystems=ufs+nfs+pvfs2 might
</span><br>
<span class="quotelev2">&gt;&gt; work for OpenMPI as it does for MPICH2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All versions of ROMIO support Lustre and GPFS the same way: with the
</span><br>
<span class="quotelev2">&gt;&gt; &quot;generic unix filesystem&quot; (UFS) driver.  Weikuan Yu at ORNL has been
</span><br>
<span class="quotelev2">&gt;&gt; working on a native &quot;AD_LUSTRE&quot; driver and some improvements to ROMIO
</span><br>
<span class="quotelev2">&gt;&gt; collective I/O.   Likely to be in the next ROMIO release.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For GPFS, the only optimized MPI-IO implementation is IBM's MPI for
</span><br>
<span class="quotelev2">&gt;&gt; AIX.  You're likely to see decent performance with the UFS driver,
</span><br>
<span class="quotelev2">&gt;&gt; though.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ==rob
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4019.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Previous message:</strong> <a href="4017.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Documentation?"</a>
<li><strong>In reply to:</strong> <a href="4016.php">Tim Prins: "Re: [OMPI users] mpiio romio etc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4019.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
<li><strong>Reply:</strong> <a href="4019.php">Robert Latham: "Re: [OMPI users] mpiio romio etc"</a>
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
