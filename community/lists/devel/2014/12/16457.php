<?
$subject_val = "Re: [OMPI devel] autogen broken";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  9 03:24:20 2014" -->
<!-- isoreceived="20141209082420" -->
<!-- sent="Tue, 9 Dec 2014 00:24:16 -0800" -->
<!-- isosent="20141209082416" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] autogen broken" -->
<!-- id="29BD3C5A-B17B-458A-B643-790011962E7D_at_open-mpi.org" -->
<!-- charset="utf-8" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-09 03:24:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16458.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, we&#226;&#128;&#153;ve confirmed at Intel that OMPI won&#226;&#128;&#153;t build with libtool 2.4.3+
<br>
<p>I made Jeff aware of it, but we&#226;&#128;&#153;re both too busy to dig into this before the holiday.
<br>
<p><p><span class="quotelev1">&gt; On Dec 8, 2014, at 11:27 PM, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I experience the exact same thing.
</span><br>
<span class="quotelev1">&gt; Please see my bug-report on this (and the work-around) here:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16371.php">http://www.open-mpi.org/community/lists/devel/2014/11/16371.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16371.php">http://www.open-mpi.org/community/lists/devel/2014/11/16371.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2014-12-09 7:57 GMT+01:00 George Bosilca &lt;bosilca_at_[hidden] &lt;mailto:bosilca_at_[hidden]&gt;&gt;:
</span><br>
<span class="quotelev1">&gt; After updating to the latest master (3a14c8e), I start having issues with the VPATH build on Mac OS X. The autogen.pl &lt;<a href="http://autogen.pl/">http://autogen.pl/</a>&gt; and configure succeeded but when make is invoked I got the following error:
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
<span class="quotelev1">&gt; CDPATH=&quot;${ZSH_VERSION+.}:&quot; &amp;&amp; cd ../../../ompi/opal/libltdl &amp;&amp; /bin/sh /Users/bosilca/unstable/ompi/trunk/ompi/config/missing aclocal-1.14 -I ../../config
</span><br>
<span class="quotelev1">&gt; aclocal-1.14: error: ../../config/autogen_found_items.m4:312: file &#226;&#128;&#152;opal/mca/backtrace/configure.m4&#226;&#128;&#153; does not exist
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tried to wipe out everything and start from scratch but to no avail. Any ideas what&#226;&#128;&#153;s going wrong and/or how to fix this?
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
<span class="quotelev1">&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16455.php">http://www.open-mpi.org/community/lists/devel/2014/12/16455.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2014/12/16455.php">http://www.open-mpi.org/community/lists/devel/2014/12/16455.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Kind regards Nick
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16456.php">http://www.open-mpi.org/community/lists/devel/2014/12/16456.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16457/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16458.php">Pim Schellart: "Re: [OMPI devel] hwloc out-of-order topology discovery with SLURM 14.11.0 and openmpi 1.6"</a>
<li><strong>Previous message:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<li><strong>In reply to:</strong> <a href="16456.php">Nick Papior Andersen: "Re: [OMPI devel] autogen broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16478.php">George Bosilca: "Re: [OMPI devel] autogen broken"</a>
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
