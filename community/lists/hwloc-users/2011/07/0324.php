<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul  9 17:08:32 2011" -->
<!-- isoreceived="20110709210832" -->
<!-- sent="Sat, 9 Jul 2011 23:08:23 +0200" -->
<!-- isosent="20110709210823" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="20110709210823.GM10877_at_const" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1981885554.1692902.1310089867193.JavaMail.root_at_zmbs4.inria.fr" -->
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
<strong>Date:</strong> 2011-07-09 17:08:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0325.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Carl Smith, le Fri 08 Jul 2011 03:51:07 +0200, a &#233;crit :
<br>
<span class="quotelev2">&gt; &gt; Alright, I give up trying to use autoconf high-end macros, here is
</span><br>
<span class="quotelev2">&gt; &gt; another, low-level try.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 	Alas, I think this one comes full circle:  it's deciding on ncurses,
</span><br>
<span class="quotelev1">&gt; then failing the link step.
</span><br>
<p>Uh. That's not coherent:
<br>
<p>checking curses support using curses.h and -lncurses... yes
<br>
<p>means that ./configure was able to compile &amp; link with -lncurses the
<br>
following:
<br>
<p>#include &lt;curses.h&gt;
<br>
#include &lt;term.h&gt;
<br>
int main(void) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0);
<br>
}
<br>
<p>but then it fails at lstopo-text link, which does the same?!
<br>
<p>is it perhaps the presence of -L/usr/local/lib which makes the linking
<br>
fail? I've commited something that might help.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0325.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Previous message:</strong> <a href="0323.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0302.php">cs_at_[hidden]: "[hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0325.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
