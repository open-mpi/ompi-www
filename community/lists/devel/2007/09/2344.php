<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep 20 11:04:07 2007" -->
<!-- isoreceived="20070920150407" -->
<!-- sent="Thu, 20 Sep 2007 08:03:40 -0700" -->
<!-- isosent="20070920150340" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] FreeBSD Support?" -->
<!-- id="46F28BCC.7030702_at_cs.ubc.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20070920060934.GA25785_at_ins.uni-bonn.de" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-20 11:03:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, Ralf. So it seems that either approach works. One can `chmod u+w *`
<br>
or `chmod u+w configure` on its own, allowing the autogen process to
<br>
complete successfully on FreeBSD 6.2. Note also, that neither change to
<br>
autogen.sh breaks the Linux autogen process.
<br>
<p>Ralf Wildenhues wrote:
<br>
<span class="quotelev1">&gt; Hello Karol,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Karol Mroz wrote on Wed, Sep 19, 2007 at 07:23:50PM CEST:
</span><br>
<span class="quotelev2">&gt;&gt; When running the autogen.sh script as non-root, I see the following error:
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; 	autom4te-2.61: cannot open configure: Permission denied
</span><br>
<span class="quotelev1">&gt; [...]
</span><br>
<span class="quotelev2">&gt;&gt; After some searching, it would appear that this is an autoconf issue
</span><br>
<span class="quotelev2">&gt;&gt; that crops up in FreeBSD but, for whatever reason, not in Linux. A quick
</span><br>
<span class="quotelev2">&gt;&gt; workaround is to add: `chmod -vr u+w *` just before autogen issues the
</span><br>
<span class="quotelev2">&gt;&gt; `run_and_check $ompi_autoconf` command on line 438.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can look into this if needed.  Is it sufficient to make
</span><br>
<span class="quotelev1">&gt; opal/libltdl/configure writable, or its containing directory?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As a workaround you should be able to use nightly tarballs
</span><br>
<span class="quotelev1">&gt; instead of the SVN version.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p>Thanks.
<br>
<pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2345.php">Aurelien Bouteiller: "Re: [OMPI devel] Malloc segfaulting?"</a>
<li><strong>Previous message:</strong> <a href="2343.php">Tim Prins: "[OMPI devel] Malloc segfaulting?"</a>
<li><strong>In reply to:</strong> <a href="2342.php">Ralf Wildenhues: "Re: [OMPI devel] FreeBSD Support?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2007/11/2537.php">Karol Mroz: "Re: [OMPI devel] FreeBSD Support?"</a>
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
