<?
$subject_val = "Re: [OMPI devel] [1.8.4rc3] dangling symlinks";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 12 11:30:50 2014" -->
<!-- isoreceived="20141212163050" -->
<!-- sent="Fri, 12 Dec 2014 08:30:46 -0800" -->
<!-- isosent="20141212163046" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc3] dangling symlinks" -->
<!-- id="3351C0E2-541D-488A-8456-BF14CD8D8147_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA16V2yoofXZVR57ZcHOje5CeqAFm+4g7bgKE7RwQ_7tUdg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc3] dangling symlinks<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-12 11:30:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16548.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16546.php">Ralph Castain: "[OMPI devel] OpenIB has some borked code"</a>
<li><strong>In reply to:</strong> <a href="16536.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3] dangling symlinks"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Fixed in master, setup for 1.8.4 - thanks Paul!
<br>
<p><span class="quotelev1">&gt; On Dec 11, 2014, at 11:47 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a Linux system configured without java support I see the following two dangling symlinks installed in ${prefix}/bin:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 phhargrove phhargrove 8 Dec 11 23:52 oshjavac -&gt; mpijavac
</span><br>
<span class="quotelev1">&gt; lrwxrwxrwx  1 phhargrove phhargrove 8 Dec 11 23:52 shmemjavac -&gt; mpijavac 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems there is some logic missing to make installation of those links conditional on Java support.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16536.php">http://www.open-mpi.org/community/lists/devel/2014/12/16536.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16547/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16548.php">Ralph Castain: "Re: [OMPI devel] 1.8.4rc2 now available for testing"</a>
<li><strong>Previous message:</strong> <a href="16546.php">Ralph Castain: "[OMPI devel] OpenIB has some borked code"</a>
<li><strong>In reply to:</strong> <a href="16536.php">Paul Hargrove: "[OMPI devel] [1.8.4rc3] dangling symlinks"</a>
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
