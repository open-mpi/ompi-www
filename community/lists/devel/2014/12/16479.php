<?
$subject_val = "Re: [OMPI devel] autogen broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 11:55:20 2014" -->
<!-- isoreceived="20141209165520" -->
<!-- sent="Tue, 9 Dec 2014 16:54:58 +0000" -->
<!-- isosent="20141209165458" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen broken" -->
<!-- id="CAAbhqc6F3cYsu1teoT6LSbOOXaVuCCn5Q2Z0eitq_0bwPtY9tQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMJJpkX93QJqwxQEZmKv=_BOaxhu75Tp7uHN=iixuD1SSCj=Xg_at_mail.gmail.com" -->
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
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 11:54:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, I know, but it might give a clue as to what goes wrong in the autogen
<br>
script (as the config path is erroneous), what is peculiar is that it only
<br>
happens for that sub-directory, so that should narrow the search down :)
<br>
<p>I am glad it worked :)
<br>
<p>2014-12-09 16:32 GMT+00:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Thanks for the hint, it does fixes the problem. But it has to be applied
</span><br>
<span class="quotelev1">&gt; on the build directory after every configure ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Dec 9, 2014 at 2:27 AM, Nick Papior Andersen &lt;nickpapior_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I experience the exact same thing.
</span><br>
<span class="quotelev2">&gt;&gt; Please see my bug-report on this (and the work-around) here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16371.php">http://www.open-mpi.org/community/lists/devel/2014/11/16371.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-12-09 7:57 GMT+01:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After updating to the latest master (3a14c8e), I start having issues
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with the VPATH build on Mac OS X. The autogen.pl and configure
</span><br>
<span class="quotelev3">&gt;&gt;&gt; succeeded but when make is invoked I got the following error:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in opal
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in include
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Applications/Xcode.app/Contents/Developer/usr/bin/make  all-am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Making all in libltdl
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../ompi/opal/libltdl &amp;&amp; /bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /Users/bosilca/unstable/ompi/trunk/ompi/config/missing aclocal-1.14 -I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ../../config
</span><br>
<span class="quotelev3">&gt;&gt;&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:312: file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#226;&#128;&#152;opal/mca/backtrace/configure.m4&#226;&#128;&#153; does not exist
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I tried to wipe out everything and start from scratch but to no avail.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any ideas what&#226;&#128;&#153;s going wrong and/or how to fix this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   George.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16455.php">http://www.open-mpi.org/community/lists/devel/2014/12/16455.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16456.php">http://www.open-mpi.org/community/lists/devel/2014/12/16456.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16478.php">http://www.open-mpi.org/community/lists/devel/2014/12/16478.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16479/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16480.php">Ralph Castain: "Re: [OMPI devel] Update to usnic BTL / libfabric"</a>
<li><strong>Previous message:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16584.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] autogen broken"</a>
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
