<?
$subject_val = "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 12:01:41 2010" -->
<!-- isoreceived="20100209170141" -->
<!-- sent="Tue, 9 Feb 2010 10:01:32 -0700" -->
<!-- isosent="20100209170132" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g" -->
<!-- id="9D3303EA-C5E0-407D-9A8A-3617A084D085_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AE91F3F5-DA36-4A16-A489-6F3FCE45B09C_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 12:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7391.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>In reply to:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm sure someone will object to a name, but the logic looks fine to me
<br>
<p><p>On Feb 9, 2010, at 6:35 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Feb 9, 2010, at 4:34 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; While we're at it, why not call the option giving MPI_THREAD_MULTIPLE support --enable-thread-multiple ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Makes sense to me. I agree with Brian that we need three options here.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, how about these:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --enable-opal-progress-threads: enables progress thread machinery in opal
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --enable-opal-multi-thread: enables multi threaded machinery in opal
</span><br>
<span class="quotelev1">&gt;    or perhaps --enable-opal-threads ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-thread-multiple: enables the use of MPI_THREAD_MULTIPLE; affects only the MPI layer
</span><br>
<span class="quotelev1">&gt;    directly implies --enable-opal-multi-thread
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Deprecated options
</span><br>
<span class="quotelev1">&gt;  --enable-mpi-threads: deprecated synonym for --enable-mpi-thread-multiple
</span><br>
<span class="quotelev1">&gt;  --enable-progress-threads: deprecated synonym for --enable-opal-progress-threads
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7391.php">Lisandro Dalcín: "Re: [OMPI devel] failure with zero-length Reduce() and both sbuf=rbuf=NULL"</a>
<li><strong>Previous message:</strong> <a href="7389.php">Ralph Castain: "Re: [OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>In reply to:</strong> <a href="7387.php">Jeff Squyres: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
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
