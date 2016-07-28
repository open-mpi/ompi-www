<?
$subject_val = "[OMPI devel] RFC: Remove Darwin backtrace support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  2 11:22:11 2013" -->
<!-- isoreceived="20130702152211" -->
<!-- sent="Tue, 2 Jul 2013 15:21:39 +0000" -->
<!-- isosent="20130702152139" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Remove Darwin backtrace support" -->
<!-- id="CDF84C1F.11D55%bwbarre_at_sandia.gov" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Remove Darwin backtrace support<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-02 11:21:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>Previous message:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>Reply:</strong> <a href="12526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove Darwin backtrace support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
All -
<br>
<p>I would like to remove the Darwin backtrace component.  Since 10.5.0, OS X
<br>
has supported the execinfo() interface supported by Linux, which is both
<br>
easier to use and less fragile.  So the impact will be a loss of stack
<br>
traces on failure on OS X versions prior to 10.5.0, which should be a
<br>
small set of users.  If no one objects before Friday, July 5th, I'll
<br>
remove it then.
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories

</pre>
<p>
<p><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12525/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>Previous message:</strong> <a href="12524.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [EXTERNAL] RFC: OMPI_FREE_LIST_{GET|WAIT} lose the rc argument"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove Darwin backtrace support"</a>
<li><strong>Reply:</strong> <a href="12526.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: Remove Darwin backtrace support"</a>
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
