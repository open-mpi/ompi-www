<?
$subject_val = "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  9 08:35:50 2010" -->
<!-- isoreceived="20100209133550" -->
<!-- sent="Tue, 9 Feb 2010 08:35:32 -0500" -->
<!-- isosent="20100209133532" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g" -->
<!-- id="AE91F3F5-DA36-4A16-A489-6F3FCE45B09C_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="16343B3F-02CF-4938-9552-933B769719DF_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-02-09 08:35:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7388.php">Guillaume Thouvenin: "[OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>Previous message:</strong> <a href="7386.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>In reply to:</strong> <a href="7386.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7390.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Reply:</strong> <a href="7390.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 9, 2010, at 4:34 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev2">&gt; &gt; While we're at it, why not call the option giving MPI_THREAD_MULTIPLE support --enable-thread-multiple ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Makes sense to me. I agree with Brian that we need three options here.
</span><br>
<p>Ok, how about these:
<br>
<p>&nbsp;&nbsp;--enable-opal-progress-threads: enables progress thread machinery in opal
<br>
<p>&nbsp;&nbsp;--enable-opal-multi-thread: enables multi threaded machinery in opal
<br>
&nbsp;&nbsp;&nbsp;&nbsp;or perhaps --enable-opal-threads ?
<br>
<p>&nbsp;&nbsp;--enable-mpi-thread-multiple: enables the use of MPI_THREAD_MULTIPLE; affects only the MPI layer
<br>
&nbsp;&nbsp;&nbsp;&nbsp;directly implies --enable-opal-multi-thread
<br>
<p>&nbsp;&nbsp;Deprecated options
<br>
&nbsp;&nbsp;--enable-mpi-threads: deprecated synonym for --enable-mpi-thread-multiple
<br>
&nbsp;&nbsp;--enable-progress-threads: deprecated synonym for --enable-opal-progress-threads
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7388.php">Guillaume Thouvenin: "[OMPI devel] [patch] return value not updated in ompi_mpi_init()"</a>
<li><strong>Previous message:</strong> <a href="7386.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>In reply to:</strong> <a href="7386.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7390.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
<li><strong>Reply:</strong> <a href="7390.php">Ralph Castain: "Re: [OMPI devel] RFC: s/ENABLE_MPI_THREADS/ENABLE_THREAD_SAFETY/g"</a>
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
