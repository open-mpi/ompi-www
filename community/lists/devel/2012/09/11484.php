<?
$subject_val = "Re: [OMPI devel] Program prefix for OpenMPI binaries?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep  9 13:29:51 2012" -->
<!-- isoreceived="20120909172951" -->
<!-- sent="Sun, 9 Sep 2012 19:29:46 +0200" -->
<!-- isosent="20120909172946" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Program prefix for OpenMPI binaries?" -->
<!-- id="CAGR4S9FagTbz_AwEvHPuxVBjrULfKsgZ-0DF6V0ROo86jpGX+g_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9DD514C0-A386-45E3-B5AA-4F7B23B26064_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Program prefix for OpenMPI binaries?<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-09 13:29:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11485.php">Jeff Squyres: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Previous message:</strong> <a href="11483.php">Ralph Castain: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>In reply to:</strong> <a href="11483.php">Ralph Castain: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11485.php">Jeff Squyres: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Reply:</strong> <a href="11485.php">Jeff Squyres: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Great, thank you!
<br>
<p>- D.
<br>
<p>2012/9/9 Ralph Castain &lt;rhc_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; I see - I was trying to understand your question as I don't recall ever encountering such a request before - to my knowledge, we have never supported that option as it was never requested.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't know how hard it would be to implement, but it looks like something we could do for future releases, perhaps starting in the 1.7 series. I'll have to look into it and discuss with a few people here and then get back to you on it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 9, 2012, at 8:02 AM, Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm working on trunk, or close to it. When configuring with
</span><br>
<span class="quotelev2">&gt;&gt; --program-prefix=someprefix I get:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: *** The Open MPI configure script does not support
</span><br>
<span class="quotelev2">&gt;&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev2">&gt;&gt; are recommended to instead use --prefix with a unique directory and
</span><br>
<span class="quotelev2">&gt;&gt; make symbolic links as desired for renaming.
</span><br>
<span class="quotelev2">&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is what I meant by &quot;disabled&quot;.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; And how --enable-orterun-prefix-by-default is involved? We just need
</span><br>
<span class="quotelev2">&gt;&gt; an installation kept in separate folder to have uniquely named
</span><br>
<span class="quotelev2">&gt;&gt; user-level wrappers, e.g. mpicc -&gt; prefix-mpicc, etc., which correctly
</span><br>
<span class="quotelev2">&gt;&gt; link to their local orte-wrapper.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; - D.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2012/9/9 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Sep 8, 2012, at 1:14 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Setting program prefix is disabled for OpenMPI compilation, could you
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; please explain why?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not sure I understand - setting the prefix is most definitely enabled and working. What version of OMPI are you concerned about?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Consider we want to make a package containing OpenMPI packed together
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with our open-source compiler, that is installable on arbitrary Linux
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; system. In this case, it would be very handy to add some program
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; prefix to guarantee no confusion with other possibly installed MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; implementations visible through $PATH.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you saying that --enable-orterun-prefix-by-default is inadequate? This is the reason it exists - to avoid path confusion. If something further is required, please let us know and we'll see what can be done.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="11485.php">Jeff Squyres: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Previous message:</strong> <a href="11483.php">Ralph Castain: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>In reply to:</strong> <a href="11483.php">Ralph Castain: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11485.php">Jeff Squyres: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>Reply:</strong> <a href="11485.php">Jeff Squyres: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
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
