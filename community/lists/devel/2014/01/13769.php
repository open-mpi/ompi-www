<?
$subject_val = "[OMPI devel] test/util/opal_path_nfs failure due to EPERM";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 13 23:20:16 2014" -->
<!-- isoreceived="20140114042016" -->
<!-- sent="Mon, 13 Jan 2014 20:20:14 -0800" -->
<!-- isosent="20140114042014" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] test/util/opal_path_nfs failure due to EPERM" -->
<!-- id="CAAvDA17mfJAUtXMTg09WjqDGNZtb05Yh4HSqy98MU59kKzW9nQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] test/util/opal_path_nfs failure due to EPERM<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-13 23:20:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13768.php">Paul Hargrove: "Re: [OMPI devel] Webex info: MPI implementation requirements for a network layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<li><strong>Reply:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a Linux system on which there is a fuse mount.
<br>
Users other than the owner get EPERM from statfs().
<br>
<p>When opal_path_nfs() sees the EPERM it drops one path component and does
<br>
statfs() on the parent.
<br>
The issue I encountered is that the parent is a user's NFS-mounted home
<br>
directory.
<br>
Thus the results from the test differ from what is expected:
<br>
&nbsp;Failure : Mismatch: input &quot;/users/steineju/.gvfs&quot;, expected:0 got:1
<br>
<p>I am not overly concerned about this, but figured I should report it for
<br>
completeness.
<br>
<p>This was tonight's trunk tarball if it matters.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13769/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13770.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc1 install failure: NetBSD-6 amd64"</a>
<li><strong>Previous message:</strong> <a href="13768.php">Paul Hargrove: "Re: [OMPI devel] Webex info: MPI implementation requirements for a network layer"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
<li><strong>Reply:</strong> <a href="13785.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] test/util/opal_path_nfs failure due to EPERM"</a>
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
