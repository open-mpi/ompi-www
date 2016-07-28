<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 02:10:03 2007" -->
<!-- isoreceived="20070920061003" -->
<!-- sent="Thu, 20 Sep 2007 08:09:34 +0200" -->
<!-- isosent="20070920060934" -->
<!-- name="Ralf Wildenhues" -->
<!-- email="Ralf.Wildenhues_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="20070920060934.GA25785_at_ins.uni-bonn.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="46F15B26.9050901_at_cs.ubc.ca" -->
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
<strong>From:</strong> Ralf Wildenhues (<em>Ralf.Wildenhues_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 02:09:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2341.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2333.php">Karol Mroz: "[OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Karol,
<br>
<p>* Karol Mroz wrote on Wed, Sep 19, 2007 at 07:23:50PM CEST:
<br>
<span class="quotelev1">&gt; When running the autogen.sh script as non-root, I see the following error:
</span><br>
[...]
<br>
<span class="quotelev1">&gt; 	autom4te-2.61: cannot open configure: Permission denied
</span><br>
[...]
<br>
<span class="quotelev1">&gt; After some searching, it would appear that this is an autoconf issue
</span><br>
<span class="quotelev1">&gt; that crops up in FreeBSD but, for whatever reason, not in Linux. A quick
</span><br>
<span class="quotelev1">&gt; workaround is to add: `chmod -vr u+w *` just before autogen issues the
</span><br>
<span class="quotelev1">&gt; `run_and_check $ompi_autoconf` command on line 438.
</span><br>
<p>I can look into this if needed.  Is it sufficient to make
<br>
opal/libltdl/configure writable, or its containing directory?
<br>
<p>As a workaround you should be able to use nightly tarballs
<br>
instead of the SVN version.
<br>
<p>Cheers,
<br>
Ralf
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2341.php">Tim Prins: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>In reply to:</strong> <a href="2333.php">Karol Mroz: "[OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<li><strong>Reply:</strong> <a href="2344.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
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
