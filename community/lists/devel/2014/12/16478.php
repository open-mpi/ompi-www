<?
$subject_val = "Re: [OMPI devel] autogen broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 11:32:06 2014" -->
<!-- isoreceived="20141209163206" -->
<!-- sent="Tue, 9 Dec 2014 11:32:03 -0500" -->
<!-- isosent="20141209163203" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen broken" -->
<!-- id="CAMJJpkX93QJqwxQEZmKv=_BOaxhu75Tp7uHN=iixuD1SSCj=Xg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAbhqc6mHKS6FDWNaNUojw7_=-nRBN5xkqiggnZ5Tzt=0EiC+A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] autogen broken<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 11:32:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>In reply to:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the hint, it does fixes the problem. But it has to be applied on
<br>
the build directory after every configure ...
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><p>On Tue, Dec 9, 2014 at 2:27 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; I experience the exact same thing.
</span><br>
<span class="quotelev1">&gt; Please see my bug-report on this (and the work-around) here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16371.php">http://www.open-mpi.org/community/lists/devel/2014/11/16371.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2014-12-09 7:57 GMT+01:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After updating to the latest master (3a14c8e), I start having issues with
</span><br>
<span class="quotelev2">&gt;&gt; the VPATH build on Mac OS X. The autogen.pl and configure succeeded but
</span><br>
<span class="quotelev2">&gt;&gt; when make is invoked I got the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Making all in opal
</span><br>
<span class="quotelev2">&gt;&gt; Making all in include
</span><br>
<span class="quotelev2">&gt;&gt; /Applications/Xcode.app/Contents/Developer/usr/bin/make  all-am
</span><br>
<span class="quotelev2">&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev2">&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../ompi/opal/libltdl &amp;&amp; /bin/sh
</span><br>
<span class="quotelev2">&gt;&gt; /Users/bosilca/unstable/ompi/trunk/ompi/config/missing aclocal-1.14 -I
</span><br>
<span class="quotelev2">&gt;&gt; ../../config
</span><br>
<span class="quotelev2">&gt;&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:312: file
</span><br>
<span class="quotelev2">&gt;&gt; &#226;&#128;&#152;opal/mca/backtrace/configure.m4&#226;&#128;&#153; does not exist
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried to wipe out everything and start from scratch but to no avail.
</span><br>
<span class="quotelev2">&gt;&gt; Any ideas what&#226;&#128;&#153;s going wrong and/or how to fix this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   George.
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16455.php">http://www.open-mpi.org/community/lists/devel/2014/12/16455.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16456.php">http://www.open-mpi.org/community/lists/devel/2014/12/16456.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16478/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16477.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI commits] Git: open-mpi/ompi branch master updated. dev-477-g09d03a1"</a>
<li><strong>In reply to:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16479.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
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
