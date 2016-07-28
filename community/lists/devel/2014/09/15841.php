<?
$subject_val = "Re: [OMPI devel] 1.8.3rc1 - start your engines";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep 16 14:40:54 2014" -->
<!-- isoreceived="20140916184054" -->
<!-- sent="Tue, 16 Sep 2014 11:40:52 -0700" -->
<!-- isosent="20140916184052" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.3rc1 - start your engines" -->
<!-- id="CAAvDA14-hEs1Goy-1+V1Jhjg20pyb3FGmPsYNWRQnKwuys3cCA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AFC0F6A5-290C-45BC-93A7-B8786761DAF0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.3rc1 - start your engines<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-16 14:40:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15842.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>Previous message:</strong> <a href="15840.php">Paul Hargrove: "Re: [OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>In reply to:</strong> <a href="15826.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15845.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Reply:</strong> <a href="15845.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The ARM results finished a couple days back and the MIPS results (3 ABIs to
<br>
test) finally completed over night.
<br>
In the meantime I was able to schedule tests of most of my menagerie of
<br>
Intel, PGI, Sun, Pathscale, and Open64 compilers on x86-64, and some IBM
<br>
compiler tests on PPC64 (but *NOT* yet the latest compiler release
<br>
available to me)
<br>
<p>Other then the known issues with various compilers (such need to explicitly
<br>
disable F08 bindings with some PGI versions) there were no problems found
<br>
in 1.8.3rc1.
<br>
<p>There may be some results later for the IBM compiler I didn't get to, and
<br>
possibly for Clang on Linux.
<br>
<p>-Paul
<br>
<p>On Sun, Sep 14, 2014 at 8:55 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Your contributions are always appreciated, Paul - thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sep 13, 2014, at 7:51 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am not sure if I will have time to run my full suite of configurations,
</span><br>
<span class="quotelev1">&gt; including all the PGI, Sun, Intel and IBM compilers on Linux.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, the following non-(Linux/x86-64) platforms have passed:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; + Linux/{PPC32,PPC64,IA64}
</span><br>
<span class="quotelev1">&gt; + Solaris-10/{SPARC-v8+,SPARC-v9} (Oracle and GNU compilers)
</span><br>
<span class="quotelev1">&gt; + Solaris-11/{amd64,i386} (Oracle and GNU compilers)
</span><br>
<span class="quotelev1">&gt; + NetBSD-6/{amd64,i386}
</span><br>
<span class="quotelev1">&gt; + OpenBSD-5/{amd64,i386}
</span><br>
<span class="quotelev1">&gt; + FreeBSD-10/{amd64,i386}
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've started runs on my ARM and MIPS Linux systems, but those results will
</span><br>
<span class="quotelev1">&gt; take a while.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sat, Sep 13, 2014 at 11:23 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Time to start the release process with rc1 - please test and report
</span><br>
<span class="quotelev2">&gt;&gt; issues:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/software/ompi/v1.8/">http://www.open-mpi.org/software/ompi/v1.8/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15822.php">http://www.open-mpi.org/community/lists/devel/2014/09/15822.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15823.php">http://www.open-mpi.org/community/lists/devel/2014/09/15823.php</a>
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/09/15826.php">http://www.open-mpi.org/community/lists/devel/2014/09/15826.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15841/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15842.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>Previous message:</strong> <a href="15840.php">Paul Hargrove: "Re: [OMPI devel] CONVERSION TO GITHUB"</a>
<li><strong>In reply to:</strong> <a href="15826.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15845.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
<li><strong>Reply:</strong> <a href="15845.php">Ralph Castain: "Re: [OMPI devel] 1.8.3rc1 - start your engines"</a>
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
