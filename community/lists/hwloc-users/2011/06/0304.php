<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 13 22:18:41 2011" -->
<!-- isoreceived="20110614021841" -->
<!-- sent="Mon, 13 Jun 2011 19:18:27 -0700" -->
<!-- isosent="20110614021827" -->
<!-- name="cs_at_[hidden]" -->
<!-- email="cs_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="8318.1308017907_at_kanawha.pbspro.com" -->
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
<strong>From:</strong> <a href="mailto:cs_at_[hidden]?Subject=Re:%20[hwloc-users]%20hwloc%201.2%20compilation%20problems"><em>cs_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-06-13 22:18:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Unfortunately I don't know any more, because the AIX machine I used to
</span><br>
<span class="quotelev1">&gt; build on just died.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;If our configuration had worked out of the box, I'd be inclined
<br>
to volunteer some help.  Inasmuch as it didn't, I'd be concerned that we
<br>
don't have very representative configurations.
<br>
<p><span class="quotelev1">&gt;                     There is no particular compilation instruction, just
</span><br>
<span class="quotelev1">&gt; the standard ./configure &amp;&amp; make &amp;&amp; make install, and I also tested
</span><br>
<span class="quotelev1">&gt; setting CC=xlc
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Turns out xlc == /usr/vac/bin/cc.
<br>
<p><span class="quotelev1">&gt; The warnings about pure and wchar_t are completely harmless. The errors
</span><br>
<span class="quotelev1">&gt; about cur_strs, cur_nums and cur_bools are not from our code, I guess
</span><br>
<span class="quotelev1">&gt; it's from some issue in the ncurses library on AIX. Did you try to use
</span><br>
<span class="quotelev1">&gt; -bloadmap or -bnoquiet, as the error message suggests?
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The flags themselves were unhelpful - just presenting the same data
<br>
in another way.  The problem is that those symbols are present (on our systems
<br>
at least) in libcurses but not libncurses, which is what the HWLOC_TERMCAP_LIBS
<br>
uses (because the search path in config/hwloc_internal.m4 places ncurses before
<br>
curses), so specifying LIBS=&quot;-lcurses&quot; on the configure line did the trick.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Carl
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0303.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0305.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
