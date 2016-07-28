<?
$subject_val = "Re: [hwloc-users] hwloc 1.2 compilation problems";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul  3 11:09:51 2011" -->
<!-- isoreceived="20110703150951" -->
<!-- sent="Sun, 3 Jul 2011 17:09:45 +0200" -->
<!-- isosent="20110703150945" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] hwloc 1.2 compilation problems" -->
<!-- id="20110703150945.GA23891_at_const.famille.thibault.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20110621001022.GW4812_at_const.famille.thibault.fr" -->
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
<strong>Date:</strong> 2011-07-03 11:09:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0311.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0311.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0319.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Samuel Thibault, le Tue 21 Jun 2011 02:10:22 +0200, a &#233;crit :
<br>
<span class="quotelev1">&gt; Carl Smith, le Tue 21 Jun 2011 02:07:09 +0200, a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Ah, ok. So what fails to link is
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /* cc test.c -o test -lncurses */
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #include &lt;ncurses.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; #include &lt;term.h&gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int main(void) {
</span><br>
<span class="quotelev3">&gt; &gt; &gt; }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; is that right?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 	Yes, and
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt; &gt; /* cc test.c -I/usr/include/ncurses -o test -lncurses */
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; does not fail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ok, then good, I'll simply include term.h when checking -lfoocurses, to
</span><br>
<span class="quotelev1">&gt; make it fail with ncurses on your AIX box (but succeed with curses right
</span><br>
<span class="quotelev1">&gt; after that)
</span><br>
<p>I've done so in svn, could you check?
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0313.php">Alfredo Buttari: "[hwloc-users] on using hwloc_get_area_membind_nodeset"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0311.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/hwloc-users/2011/06/0311.php">Samuel Thibault: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0319.php">Carl Smith: "Re: [hwloc-users] hwloc 1.2 compilation problems"</a>
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
