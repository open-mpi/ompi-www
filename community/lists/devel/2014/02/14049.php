<?
$subject_val = "[OMPI devel] Still having issues w/ opal_path_nfs and EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  8 00:06:35 2014" -->
<!-- isoreceived="20140208050635" -->
<!-- sent="Fri, 7 Feb 2014 21:06:33 -0800" -->
<!-- isosent="20140208050633" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Still having issues w/ opal_path_nfs and EPERM" -->
<!-- id="CAAvDA16sO9aTgxsUqff08AOxK-T4ru4G4Qifw5P-RZvDMqomMg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] Still having issues w/ opal_path_nfs and EPERM<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-08 00:06:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Previous message:</strong> <a href="14048.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Reply:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tested the 1.7 tarball tonight.
<br>
Jeff had indicated (
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2014/01/13785.php">http://www.open-mpi.org/community/lists/devel/2014/01/13785.php</a>) that the
<br>
problem I had reported w/ opal_path_nfs() and EPERM had been fixed in the
<br>
trunk.
<br>
Trac ticket #4125 indicated the fix was CMRed to v1.7
<br>
<p>However, I still see the problem:
<br>
&nbsp;Failure : Mismatch: input &quot;/users/course13/.gvfs&quot;, expected:0 got:1
<br>
<p>&nbsp;Failure : Mismatch: input &quot;/users/steineju/.gvfs&quot;, expected:0 got:1
<br>
<p>SUPPORT: OMPI Test failed: opal_path_nfs() (2 of 20 failed)
<br>
FAIL: opal_path_nfs
<br>
<p><p>I don't currently know if the problem was every fixed on the trunk, but
<br>
should know by morning.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-14049/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Previous message:</strong> <a href="14048.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
<li><strong>Reply:</strong> <a href="14050.php">Paul Hargrove: "Re: [OMPI devel] Still having issues w/ opal_path_nfs and EPERM"</a>
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
