<?
$subject_val = "Re: [OMPI devel] printf format warnings on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 27 11:13:42 2015" -->
<!-- isoreceived="20150227161342" -->
<!-- sent="Fri, 27 Feb 2015 08:13:37 -0800" -->
<!-- isosent="20150227161337" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] printf format warnings on master" -->
<!-- id="DC280A34-BE13-4B0E-A4D8-C836C3847099_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16aAxSA9oBocHs7u79h3Ju1jrwv1O8-=cWdpSq2FWb-7g_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] printf format warnings on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-27 11:13:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17075.php">Joshua Ladd: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>Previous message:</strong> <a href="17073.php">Paul Hargrove: "[OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32"</a>
<li><strong>In reply to:</strong> <a href="17064.php">Paul Hargrove: "[OMPI devel] printf format warnings on master"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed - thanks!
<br>
<p><span class="quotelev1">&gt; On Feb 26, 2015, at 3:22 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Clang noted the following on FreeBSD-10/amd64 using the current master tarball:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Making check in threads
</span><br>
<span class="quotelev1">&gt; make  opal_thread opal_condition
</span><br>
<span class="quotelev1">&gt;   CC       opal_thread.o
</span><br>
<span class="quotelev1">&gt;   CCLD     opal_thread
</span><br>
<span class="quotelev1">&gt;   CC       opal_condition.o
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-master-freebsd10-amd64/openmpi-dev-1118-gdc80863/test/threads/opal_condition.c:72:
</span><br>
<span class="quotelev1">&gt; 61: warning: format specifies type 'long' but the argument has type 'int' [-Wformat]
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;thr1: time per iteration: %ld usec\n&quot;, (c2 - c1) / TEST_COUNT);
</span><br>
<span class="quotelev1">&gt;                                                ~~~          ^~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt;                                                %d
</span><br>
<span class="quotelev1">&gt; /home/phargrov/OMPI/openmpi-master-freebsd10-amd64/openmpi-dev-1118-gdc80863/test/threads/opal_condition.c:89:
</span><br>
<span class="quotelev1">&gt; 61: warning: format specifies type 'long' but the argument has type 'int' [-Wformat]
</span><br>
<span class="quotelev1">&gt;     fprintf(stderr, &quot;thr2: time per iteration: %ld usec\n&quot;, (c2 - c1) / TEST_COUNT);
</span><br>
<span class="quotelev1">&gt;                                                ~~~          ^~~~~~~~~~~~~~~~~~~~~~
</span><br>
<span class="quotelev1">&gt;                                                %d
</span><br>
<span class="quotelev1">&gt; 2 warnings generated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden] &lt;mailto:PHHargrove_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/02/17064.php">http://www.open-mpi.org/community/lists/devel/2015/02/17064.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17074/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17075.php">Joshua Ladd: "Re: [OMPI devel] Tues Mar 3rd telecon"</a>
<li><strong>Previous message:</strong> <a href="17073.php">Paul Hargrove: "[OMPI devel] Odd master build failure with Studio 12.4 on Linux w/ -m32"</a>
<li><strong>In reply to:</strong> <a href="17064.php">Paul Hargrove: "[OMPI devel] printf format warnings on master"</a>
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
