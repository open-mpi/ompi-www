<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 20 19:00:46 2011" -->
<!-- isoreceived="20110620230046" -->
<!-- sent="Tue, 21 Jun 2011 01:00:41 +0200" -->
<!-- isosent="20110620230041" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="20110620230040.GO4812_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1621347486.1454604.1308609860722.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-06-20 19:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0310.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0310.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Carl Smith, le Tue 21 Jun 2011 00:44:20 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Seems like it's lstopo-text.c's assumption that /usr/include/term.h is
</span><br>
<span class="quotelev1">&gt; appropriate to include with ncurses support that's causing the cross-pollution.
</span><br>
<p>Ah, ok. So what fails to link is
<br>
<p>/* cc test.c -o test -lncurses */
<br>
#include &lt;ncurses.h&gt;
<br>
#include &lt;term.h&gt;
<br>
int main(void) {
<br>
}
<br>
<p>is that right?  If so we can simply add including &lt;term.h&gt; to the link
<br>
test, and thus configure will discover that it should use curses to get
<br>
term working, not ncurses.
<br>
<p><span class="quotelev1">&gt; 	hwloc didn't adjust the include path if ncurses was found,
</span><br>
<p>It'd be a difficult thing to do actually. The ncursesw implementation
<br>
uses ncursesw/ for instance.
<br>
<p><span class="quotelev1">&gt; so I tried a simple experiment without my last suggested change but a
</span><br>
<span class="quotelev1">&gt; different include path,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ ./autogen.sh
</span><br>
<span class="quotelev1">&gt; $ ./configure CC=/usr/vac/bin/cc CPPFLAGS=&quot;-I/usr/include/ncurses&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and it configured and built correctly.
</span><br>
<p>and this would still work too to get hwloc built against ncurses instead
<br>
of curses.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0310.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0308.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0310.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
