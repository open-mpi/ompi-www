<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  6 09:34:46 2005" -->
<!-- isoreceived="20050906143446" -->
<!-- sent="Tue, 6 Sep 2005 16:34:34 +0200" -->
<!-- isosent="20050906143434" -->
<!-- name="Peter Kjellstr&#246;m" -->
<!-- email="cap_at_[hidden]" -->
<!-- subject="recommended way to update an ompi tree" -->
<!-- id="200509061634.40245.cap_at_nsc.liu.se" -->
<!-- charset="iso-8859-15" -->
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
<strong>From:</strong> Peter Kjellstr&#246;m (<em>cap_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-06 09:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<li><strong>Previous message:</strong> <a href="0318.php">John Ryan: "error in ompi/mca/rcache/rb/rcache_rb_mru.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<li><strong>Reply:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Sorry for this possibly silly question but I couldn't find the answer in any 
<br>
of the included documentation files..
<br>
<p>What is the recommended way to update a local svn snap shot? (a tree that has 
<br>
been checked out, autogen'ed, configured and built) is it:
<br>
$ svn up
<br>
$ ./autogen.sh
<br>
$ make distclean
<br>
$ configure ...
<br>
$ make all install
<br>
<p>Does this change if I vpath build?
<br>
<p>Is there a hard-cleanup-that-will-allways-work way?
<br>
<p>(and the opposite) Is there a minimum-recompile-regen-way that will usually 
<br>
work?
<br>
<p>tia,
<br>
&nbsp;Peter
<br>
<p><pre>
-- 
------------------------------------------------------------
  Peter Kjellstr&#246;m               |
  National Supercomputer Centre  |
  Sweden                         | <a href="http://www.nsc.liu.se">http://www.nsc.liu.se</a>

</pre>
<p>
<p><hr>
<ul>
<li>application/pgp-signature attachment: <a href="../../att-0319/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<li><strong>Previous message:</strong> <a href="0318.php">John Ryan: "error in ompi/mca/rcache/rb/rcache_rb_mru.c"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
<li><strong>Reply:</strong> <a href="0320.php">Jeff Squyres: "Re:  recommended way to update an ompi tree"</a>
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
