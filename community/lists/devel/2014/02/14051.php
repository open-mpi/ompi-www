<?
$subject_val = "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 13:01:29 2014" -->
<!-- isoreceived="20140208180129" -->
<!-- sent="Sat, 8 Feb 2014 10:00:04 -0800" -->
<!-- isosent="20140208180004" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM" -->
<!-- id="508EFB6C-2D19-404F-B9FC-1DEAFF45C5AC_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAAvDA14-8M3Ex9CcQAXwMEWF4R5vwvHzDfUm8GCrxNPZuer-vw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 13:00:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>In reply to:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sounds like it - I'll take a peek and see if I can spot it, otherwise will have to wait for Jeff next week
<br>
<p>On Feb 8, 2014, at 9:56 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; A test of Friday night's trunk tarball is failing in the same manner.
</span><br>
<span class="quotelev1">&gt; So, the CMR isn't the issue - the problem was never (fully?) fixed in trunk.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 7, 2014 at 9:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; I tested the 1.7 tarball tonight.
</span><br>
<span class="quotelev1">&gt; Jeff had indicated (<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13785.php">http://www.open-mpi.org/community/lists/devel/2014/01/13785.php</a>) that the problem I had reported w/ opal_path_nfs() and EPERM had been fixed in the trunk.
</span><br>
<span class="quotelev1">&gt; Trac ticket #4125 indicated the fix was CMRed to v1.7
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I still see the problem:
</span><br>
<span class="quotelev1">&gt;  Failure : Mismatch: input &quot;/users/course13/.gvfs&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  Failure : Mismatch: input &quot;/users/steineju/.gvfs&quot;, expected:0 got:1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SUPPORT: OMPI Test failed: opal_path_nfs() (2 of 20 failed)
</span><br>
<span class="quotelev1">&gt; FAIL: opal_path_nfs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't currently know if the problem was every fixed on the trunk, but should know by morning.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -Paul
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14051/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14052.php">Ralph Castain: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>In reply to:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
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
