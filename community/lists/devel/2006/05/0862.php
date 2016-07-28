<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May  8 13:09:00 2006" -->
<!-- isoreceived="20060508170900" -->
<!-- sent="Mon, 8 May 2006 19:08:31 +0200" -->
<!-- isosent="20060508170831" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?" -->
<!-- id="A11E66F7-A9DA-4A9D-8215-89B689F68976_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="445F7938.2080409_at_cs.kuleuven.be" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-08 13:08:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0863.php">Dries Kimpe: "[OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 8, 2006, at 7:00 PM, Dries Kimpe wrote:
<br>
<p><span class="quotelev1">&gt; There is another small problem in that file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - --with-io-romio-flags is not being passed either. This is needed  
</span><br>
<span class="quotelev1">&gt; to pass --with-filesystems for
</span><br>
<span class="quotelev1">&gt; enabling ROMIO support for more than NFS and UFS.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Problem is the
</span><br>
<span class="quotelev1">&gt; io_romio_flags=
</span><br>
<span class="quotelev1">&gt; line clearing the previously stored value:
</span><br>
<p>Thanks for finding this one as well.  A fix will be in tonight's  
<br>
nightly tarballs.
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0863.php">Dries Kimpe: "[OMPI devel] bug in Makefile.in"</a>
<li><strong>Previous message:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
<li><strong>In reply to:</strong> <a href="0861.php">Dries Kimpe: "Re: [OMPI devel] typo in ompi/mca/io/romio/configure.m4?"</a>
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
