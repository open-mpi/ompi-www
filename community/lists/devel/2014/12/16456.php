<?
$subject_val = "Re: [OMPI devel] autogen broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 02:28:18 2014" -->
<!-- isoreceived="20141209072818" -->
<!-- sent="Tue, 9 Dec 2014 08:27:57 +0100" -->
<!-- isosent="20141209072757" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen broken" -->
<!-- id="CAAbhqc6mHKS6FDWNaNUojw7_=-nRBN5xkqiggnZ5Tzt=0EiC+A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="675551B8-9A50-49AD-8817-E8417365DCF9_at_icl.utk.edu" -->
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
<strong>Date:</strong> 2014-12-09 02:27:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16457.php">Ralph Castain: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16455.php">George Bosilca: "[OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16455.php">George Bosilca: "[OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16457.php">Ralph Castain: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16457.php">Ralph Castain: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I experience the exact same thing.
<br>
Please see my bug-report on this (and the work-around) here:
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16371.php">http://www.open-mpi.org/community/lists/devel/2014/11/16371.php</a>
<br>
<p>2014-12-09 7:57 GMT+01:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; After updating to the latest master (3a14c8e), I start having issues with
</span><br>
<span class="quotelev1">&gt; the VPATH build on Mac OS X. The autogen.pl and configure succeeded but
</span><br>
<span class="quotelev1">&gt; when make is invoked I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Making all in opal
</span><br>
<span class="quotelev1">&gt; Making all in include
</span><br>
<span class="quotelev1">&gt; /Applications/Xcode.app/Contents/Developer/usr/bin/make  all-am
</span><br>
<span class="quotelev1">&gt; Making all in libltdl
</span><br>
<span class="quotelev1">&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../ompi/opal/libltdl &amp;&amp; /bin/sh
</span><br>
<span class="quotelev1">&gt; /Users/bosilca/unstable/ompi/trunk/ompi/config/missing aclocal-1.14 -I
</span><br>
<span class="quotelev1">&gt; ../../config
</span><br>
<span class="quotelev1">&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:312: file
</span><br>
<span class="quotelev1">&gt; &#226;&#128;&#152;opal/mca/backtrace/configure.m4&#226;&#128;&#153; does not exist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried to wipe out everything and start from scratch but to no avail. Any
</span><br>
<span class="quotelev1">&gt; ideas what&#226;&#128;&#153;s going wrong and/or how to fix this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   George.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16455.php">http://www.open-mpi.org/community/lists/devel/2014/12/16455.php</a>
</span><br>
<p><p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16457.php">Ralph Castain: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Previous message:</strong> <a href="16455.php">George Bosilca: "[OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16455.php">George Bosilca: "[OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16457.php">Ralph Castain: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16457.php">Ralph Castain: "Re: [OMPI devel] autogen broken"</a>
<li><strong>Reply:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
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
