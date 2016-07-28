<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 14 05:10:03 2011" -->
<!-- isoreceived="20110614091003" -->
<!-- sent="Tue, 14 Jun 2011 11:09:58 +0200" -->
<!-- isosent="20110614090958" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="20110614090958.GP5403_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1182899184.1352019.1308017917074.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-06-14 05:09:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0306.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0306.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
cs_at_[hidden], le Tue 14 Jun 2011 04:18:37 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; The problem is that those symbols are present (on our systems
</span><br>
<span class="quotelev1">&gt; at least) in libcurses but not libncurses, which is what the HWLOC_TERMCAP_LIBS
</span><br>
<span class="quotelev1">&gt; uses (because the search path in config/hwloc_internal.m4 places ncurses before
</span><br>
<span class="quotelev1">&gt; curses), so specifying LIBS=&quot;-lcurses&quot; on the configure line did the trick.
</span><br>
<p>Ah.  Do you perhaps have a /usr/include/ncurses.h?  I guess we should be
<br>
trying that before curses.h, I've commited it, please test svn or next
<br>
night tarball.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0306.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0306.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
