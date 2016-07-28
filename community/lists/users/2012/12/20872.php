<?
$subject_val = "Re: [OMPI users] BLCR + Qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 05:43:14 2012" -->
<!-- isoreceived="20121204104314" -->
<!-- sent="Tue, 4 Dec 2012 10:43:05 +0000" -->
<!-- isosent="20121204104305" -->
<!-- name="William Hay" -->
<!-- email="w.hay_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR + Qlogic infiniband" -->
<!-- id="CAOEAUJ71Xf06oW6oo3tW+_sXm1zqjxnYDQiL2wg9nqd7zrknZw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOEAUJ7rYWHKWdfOgq6wqLuzr8TP=ZqWqDFRhRo4GT8wOqYm4w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] BLCR + Qlogic infiniband<br>
<strong>From:</strong> William Hay (<em>w.hay_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-04 05:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20871.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20785.php">William Hay: "[OMPI users] BLCR + Qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20916.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="20916.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 28 November 2012 11:14, William Hay &lt;w.hay_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm trying to build openmpi with support for BLCR plus qlogic infiniband
</span><br>
<span class="quotelev1">&gt; (plus grid engine).  Everything seems to compile OK and checkpoints are
</span><br>
<span class="quotelev1">&gt; taken but whenever I try to restore a checkpoint I get the following error:
</span><br>
<span class="quotelev1">&gt; - do_mmap(&lt;file&gt;, 00002aaab18c7000, 0000000000001000, ...) failed:
</span><br>
<span class="quotelev1">&gt; ffffffffffffffea
</span><br>
<span class="quotelev1">&gt; - mmap failed: /dev/ipath
</span><br>
<span class="quotelev1">&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev1">&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev1">&gt; Restart failed: Invalid argument
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This occurs whether I specify psm or openib as the btl.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This looks like the sort of thing I would expect to be handled by the blcr
</span><br>
<span class="quotelev1">&gt; supporting code in openmpi.  So I guess I have a couple ofquestions.
</span><br>
<span class="quotelev1">&gt; 1)Are Infiniband and BLCR support in openmpi compatible?
</span><br>
<span class="quotelev1">&gt; 2)Are there any special tricks necessary to get them working together.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A third question occurred to me that may be relevant.  How do I verify
</span><br>
that my openmpi install has blcr support built in?  I would have thought
<br>
this would mean that either mpiexec or binaries built with mpicc would have
<br>
libcr linked in.  However running ldd doesn't report this in either case.
<br>
&nbsp;I'm setting LD_PRELOAD to point to it but I would have thought openmpi
<br>
would need to register a callback with blcr and it would be easier to do
<br>
this if the library were linked in rather than trying to detect whether it
<br>
has been LD_PRELOADed.  I'm building with the following options:
<br>
./configure --prefix=/home/ccaawih/openmpi-blcr --with-openib --without-psm
<br>
--with-blcr=/usr --with-blcr-libdir=/usr/lib64 --with-ft=cr
<br>
--enable-ft-thread --enable-mpi-threads --with-sge
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20872/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20873.php">Durga Choudhury: "Re: [OMPI users] Windows support for OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="20871.php">Joseph Farran: "Re: [OMPI users] CentOS 6.3 &amp; OpenMPI 1.6.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/11/20785.php">William Hay: "[OMPI users] BLCR + Qlogic infiniband"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20916.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<li><strong>Reply:</strong> <a href="20916.php">Josh Hursey: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
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
