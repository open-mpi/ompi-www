<?
$subject_val = "Re: [OMPI users] BLCR + Qlogic infiniband";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec 11 11:21:40 2012" -->
<!-- isoreceived="20121211162140" -->
<!-- sent="Tue, 11 Dec 2012 10:21:36 -0600" -->
<!-- isosent="20121211162136" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] BLCR + Qlogic infiniband" -->
<!-- id="CAANzjE=G3mNQnwN9X0Ltd9aDcH4DSaRQLqM_d3Q9_yy53J-nyw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOEAUJ71Xf06oW6oo3tW+_sXm1zqjxnYDQiL2wg9nqd7zrknZw_at_mail.gmail.com" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-11 11:21:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20917.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>Previous message:</strong> <a href="20915.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
<li><strong>In reply to:</strong> <a href="20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
With that configure string, Open MPI should fail in configure if it does
<br>
not find the BLCR libraries. Note that this does not check to make sure the
<br>
BLCR is loaded as a module in the kernel (you will need to check that
<br>
manually).
<br>
<p>The ompi_info command will also show you if C/R is enabled and will show
<br>
you if the 'blcr' 'crs' module in the listing at the end. That is probably
<br>
the best way to see if the build includes this support.
<br>
<p><p>On Tue, Dec 4, 2012 at 4:43 AM, William Hay &lt;w.hay_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 28 November 2012 11:14, William Hay &lt;w.hay_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to build openmpi with support for BLCR plus qlogic infiniband
</span><br>
<span class="quotelev2">&gt;&gt; (plus grid engine).  Everything seems to compile OK and checkpoints are
</span><br>
<span class="quotelev2">&gt;&gt; taken but whenever I try to restore a checkpoint I get the following error:
</span><br>
<span class="quotelev2">&gt;&gt; - do_mmap(&lt;file&gt;, 00002aaab18c7000, 0000000000001000, ...) failed:
</span><br>
<span class="quotelev2">&gt;&gt; ffffffffffffffea
</span><br>
<span class="quotelev2">&gt;&gt; - mmap failed: /dev/ipath
</span><br>
<span class="quotelev2">&gt;&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev2">&gt;&gt; - thaw_threads returned error, aborting. -22
</span><br>
<span class="quotelev2">&gt;&gt; Restart failed: Invalid argument
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This occurs whether I specify psm or openib as the btl.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This looks like the sort of thing I would expect to be handled by the
</span><br>
<span class="quotelev2">&gt;&gt; blcr supporting code in openmpi.  So I guess I have a couple ofquestions.
</span><br>
<span class="quotelev2">&gt;&gt; 1)Are Infiniband and BLCR support in openmpi compatible?
</span><br>
<span class="quotelev2">&gt;&gt; 2)Are there any special tricks necessary to get them working together.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A third question occurred to me that may be relevant.  How do I verify
</span><br>
<span class="quotelev1">&gt; that my openmpi install has blcr support built in?  I would have thought
</span><br>
<span class="quotelev1">&gt; this would mean that either mpiexec or binaries built with mpicc would have
</span><br>
<span class="quotelev1">&gt; libcr linked in.  However running ldd doesn't report this in either case.
</span><br>
<span class="quotelev1">&gt;  I'm setting LD_PRELOAD to point to it but I would have thought openmpi
</span><br>
<span class="quotelev1">&gt; would need to register a callback with blcr and it would be easier to do
</span><br>
<span class="quotelev1">&gt; this if the library were linked in rather than trying to detect whether it
</span><br>
<span class="quotelev1">&gt; has been LD_PRELOADed.  I'm building with the following options:
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/home/ccaawih/openmpi-blcr --with-openib
</span><br>
<span class="quotelev1">&gt; --without-psm --with-blcr=/usr --with-blcr-libdir=/usr/lib64 --with-ft=cr
</span><br>
<span class="quotelev1">&gt; --enable-ft-thread --enable-mpi-threads --with-sge
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20916/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20917.php">Ifeanyi: "Re: [OMPI users] Live process migration"</a>
<li><strong>Previous message:</strong> <a href="20915.php">Josh Hursey: "Re: [OMPI users] Live process migration"</a>
<li><strong>In reply to:</strong> <a href="20872.php">William Hay: "Re: [OMPI users] BLCR + Qlogic infiniband"</a>
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
