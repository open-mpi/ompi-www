<?
$subject_val = "[OMPI devel] RFC: Remove solaris thread support";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 14 12:39:12 2013" -->
<!-- isoreceived="20130214173912" -->
<!-- sent="Thu, 14 Feb 2013 17:38:36 +0000" -->
<!-- isosent="20130214173836" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove solaris thread support" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317F2965_at_EXMB01.srn.sandia.gov" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove solaris thread support<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-02-14 12:38:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12121.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove solaris thread support"</a>
<li><strong>Previous message:</strong> <a href="12119.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28048 - in trunk: . config ...etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12121.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove solaris thread support"</a>
<li><strong>Reply:</strong> <a href="12121.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove solaris thread support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all -
<br>
<p>I'd like to propose that we remove the support for Solaris threads in the
<br>
trunk.  Solaris provides a pthread implementation which is of equivalent
<br>
performance and supporting two thread libraries is kind of a pain.
<br>
Pthreads also supports static initializers, which will be nice going
<br>
forward.  Assuming no one complains, I'll remove the solaris threads
<br>
support from the trunk on Wednesday, February 20th.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12121.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove solaris thread support"</a>
<li><strong>Previous message:</strong> <a href="12119.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r28048 - in trunk: . config ...etc."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12121.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove solaris thread support"</a>
<li><strong>Reply:</strong> <a href="12121.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove solaris thread support"</a>
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
