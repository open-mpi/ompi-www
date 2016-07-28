<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 11 13:31:08 2011" -->
<!-- isoreceived="20110611173108" -->
<!-- sent="Sat, 11 Jun 2011 19:31:02 +0200" -->
<!-- isosent="20110611173102" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="20110611173102.GH22532_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1260813782.1318584.1307655188847.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-06-11 13:31:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>cs_at_[hidden], le Thu 09 Jun 2011 23:33:08 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt;         I wonder whether anyone could speak about exactly what
</span><br>
<span class="quotelev1">&gt; versions of the supporting operating systems we should expect to
</span><br>
<span class="quotelev1">&gt; work, particularly specifics about compilation requirements and
</span><br>
<span class="quotelev1">&gt; instructions.
</span><br>
<p>Unfortunately I don't know any more, because the AIX machine I used to
<br>
build on just died. There is no particular compilation instruction, just
<br>
the standard ./configure &amp;&amp; make &amp;&amp; make install, and I also tested
<br>
setting CC=xlc
<br>
<p><span class="quotelev1">&gt; did complete but the make soon found fault with lines in lstopo-text.c).
</span><br>
<p>The warnings about pure and wchar_t are completely harmless. The errors
<br>
about cur_strs, cur_nums and cur_bools are not from our code, I guess
<br>
it's from some issue in the ncurses library on AIX. Did you try to use
<br>
-bloadmap or -bnoquiet, as the error message suggests?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0304.php">cs_at_[hidden]: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
