<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 15 21:05:50 2011" -->
<!-- isoreceived="20110616010550" -->
<!-- sent="Wed, 15 Jun 2011 18:05:36 -0700" -->
<!-- isosent="20110616010536" -->
<!-- name="Carl Smith" -->
<!-- email="cs_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="4623.1308186336_at_kanawha.pbspro.com" -->
<!-- inreplyto="samuel.thibault_at_inria.fr" -->
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
<strong>From:</strong> Carl Smith (<em>cs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-15 21:05:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Ah.  Do you perhaps have a /usr/include/ncurses.h?
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yes, but ...
<br>
<p><span class="quotelev1">&gt;                                                     I guess we should be
</span><br>
<span class="quotelev1">&gt; trying that before curses.h, I've commited it, please test svn or next
</span><br>
<span class="quotelev1">&gt; night tarball.
</span><br>
<p>when I tried out your change, &lt;ncurses.h&gt; was found and linking was still
<br>
done with libncurses (and therefore failed).  I think what's needed is some
<br>
uglier, more complex code here
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([ncurses.h curses.h], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CHECK_HEADERS([term.h], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SEARCH_LIBS([tparm], [termcap ncursesw ncurses curses], [
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_SUBST([HWLOC_TERMCAP_LIBS], [&quot;$LIBS&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_DEFINE([HWLOC_HAVE_LIBTERMCAP], [1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[Define to 1 if you have a library providing the termcap interface])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;], [], [[#include &lt;curses.h&gt;]])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p>that would generate the correct header file to library pairing.  In my
<br>
case, the attached patch on top of your previous change did the trick.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<p><p>
<br><hr>
<ul>
<li>multipart/mixed attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0306/hwloc-trunk.patch">patch to config/hwloc_internal.m4 for AIX build</a>
</ul>
<!-- attachment="hwloc-trunk.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0307.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
