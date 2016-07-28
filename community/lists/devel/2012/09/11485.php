<?
$subject_val = "Re: [OMPI devel] Program prefix for OpenMPI binaries?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 10 08:33:34 2012" -->
<!-- isoreceived="20120910123334" -->
<!-- sent="Mon, 10 Sep 2012 08:33:30 -0400" -->
<!-- isosent="20120910123330" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Program prefix for OpenMPI binaries?" -->
<!-- id="677303FB-E442-4859-8AFD-F811CBD4E968_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAGR4S9FagTbz_AwEvHPuxVBjrULfKsgZ-0DF6V0ROo86jpGX+g_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-10 08:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11486.php">Jeff Squyres: "[OMPI devel] 1.6.2rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="11484.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>In reply to:</strong> <a href="11484.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry, there are definite reasons we don't support --program-prefix: it has caused issues in the past.  Here's where we added the warning message in configure:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/lists/devel/2009/09/6750.php">http://www.open-mpi.org/community/lists/devel/2009/09/6750.php</a>
<br>
<p>The short version is that --program-prefix doesn't do what you want, anyway: even if you want to have multiple different MPI's installed in a single --prefix, prefixing the executables isn't enough.  I.e., even if you have ompi-mpirun, ompi-mpicc, etc., what about mpi.h and mpif.h?  Your MPI installations, by definition, *must* name their versions of those files with the same names.
<br>
<p>Most people install MPI implementations into different directories and either use environment modules to select which one to use, or use the alternatives system (or something like it).
<br>
<p>That's what I remember off the top of my head, but I think there are subtler issues, too -- I seem to recall having deep, long, complicated discussions with Brian (my main partner in crime with OMPI's configure/build system) about program-prefix and friends.  I can try to dig back a bit further in my memory, if needed...
<br>
<p><p><p>On Sep 9, 2012, at 1:29 PM, Dmitry N. Mikushin wrote:
<br>
<p><span class="quotelev1">&gt; Great, thank you!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2012/9/9 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; I see - I was trying to understand your question as I don't recall ever encountering such a request before - to my knowledge, we have never supported that option as it was never requested.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't know how hard it would be to implement, but it looks like something we could do for future releases, perhaps starting in the 1.7 series. I'll have to look into it and discuss with a few people here and then get back to you on it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 9, 2012, at 8:02 AM, Dmitry N. Mikushin &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Ralph,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm working on trunk, or close to it. When configuring with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --program-prefix=someprefix I get:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: WARNING: *** The Open MPI configure script does not support
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --program-prefix, --program-suffix or --program-transform-name. Users
</span><br>
<span class="quotelev3">&gt;&gt;&gt; are recommended to instead use --prefix with a unique directory and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make symbolic links as desired for renaming.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; configure: error: *** Cannot continue
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is what I meant by &quot;disabled&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; And how --enable-orterun-prefix-by-default is involved? We just need
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an installation kept in separate folder to have uniquely named
</span><br>
<span class="quotelev3">&gt;&gt;&gt; user-level wrappers, e.g. mpicc -&gt; prefix-mpicc, etc., which correctly
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link to their local orte-wrapper.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2012/9/9 Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Sep 8, 2012, at 1:14 PM, &quot;Dmitry N. Mikushin&quot; &lt;maemarcus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Setting program prefix is disabled for OpenMPI compilation, could you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; please explain why?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure I understand - setting the prefix is most definitely enabled and working. What version of OMPI are you concerned about?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Consider we want to make a package containing OpenMPI packed together
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; with our open-source compiler, that is installable on arbitrary Linux
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; system. In this case, it would be very handy to add some program
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; prefix to guarantee no confusion with other possibly installed MPI
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; implementations visible through $PATH.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Are you saying that --enable-orterun-prefix-by-default is inadequate? This is the reason it exists - to avoid path confusion. If something further is required, please let us know and we'll see what can be done.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; - D.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11486.php">Jeff Squyres: "[OMPI devel] 1.6.2rc2 is out"</a>
<li><strong>Previous message:</strong> <a href="11484.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
<li><strong>In reply to:</strong> <a href="11484.php">Dmitry N. Mikushin: "Re: [OMPI devel] Program prefix for OpenMPI binaries?"</a>
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
