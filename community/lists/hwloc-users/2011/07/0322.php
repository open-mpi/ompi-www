<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  7 19:42:42 2011" -->
<!-- isoreceived="20110707234242" -->
<!-- sent="Fri, 8 Jul 2011 01:42:37 +0200" -->
<!-- isosent="20110707234237" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="20110707234237.GY4189_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="935192775.1692569.1310079713866.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-users] hwloc 1.2 compilation problems<br>
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-07-07 19:42:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0321.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Carl Smith, le Fri 08 Jul 2011 01:01:53 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; Oops, I hadn't realized that AC_CHECK_HEADERS checks for all of them.
</span><br>
<span class="quotelev2">&gt; &gt; I've rewritten it quite a bit, in an actually more straightforward way,
</span><br>
<span class="quotelev2">&gt; &gt; could you test it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Sure - still no joy.  It's still selecting ncurses.
</span><br>
<p>Ow, AC_SEARCH_LIBS is actually not using ac_includes_default.
<br>
<p>Alright, I give up trying to use autoconf high-end macros, here is
<br>
another, low-level try.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0321.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
