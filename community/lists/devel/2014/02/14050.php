<?
$subject_val = "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 12:56:26 2014" -->
<!-- isoreceived="20140208175626" -->
<!-- sent="Sat, 8 Feb 2014 09:56:24 -0800" -->
<!-- isosent="20140208175624" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM" -->
<!-- id="CAAvDA14-8M3Ex9CcQAXwMEWF4R5vwvHzDfUm8GCrxNPZuer-vw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAAvDA16sO9aTgxsUqff08AOxK-T4ru4G4Qifw5P-RZvDMqomMg_at_mail.gmail.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 12:56:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Previous message:</strong> <a href="14049.php">Paul Hargrove: "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>In reply to:</strong> <a href="14049.php">Paul Hargrove: "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Reply:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A test of Friday night's trunk tarball is failing in the same manner.
<br>
So, the CMR isn't the issue - the problem was never (fully?) fixed in trunk.
<br>
<p>-Paul
<br>
<p><p>On Fri, Feb 7, 2014 at 9:06 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I tested the 1.7 tarball tonight.
</span><br>
<span class="quotelev1">&gt; Jeff had indicated (
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/01/13785.php">http://www.open-mpi.org/community/lists/devel/2014/01/13785.php</a>) that the
</span><br>
<span class="quotelev1">&gt; problem I had reported w/ opal_path_nfs() and EPERM had been fixed in the
</span><br>
<span class="quotelev1">&gt; trunk.
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
<span class="quotelev1">&gt; I don't currently know if the problem was every fixed on the trunk, but
</span><br>
<span class="quotelev1">&gt; should know by morning.
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
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14050/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Previous message:</strong> <a href="14049.php">Paul Hargrove: "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>In reply to:</strong> <a href="14049.php">Paul Hargrove: "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Reply:</strong> <a href="14051.php">Ralph Castain: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
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
