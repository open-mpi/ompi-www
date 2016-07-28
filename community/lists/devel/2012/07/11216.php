<?
$subject_val = "[OMPI devel] mpirun --tmux -np 4 a.out";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  2 19:59:23 2012" -->
<!-- isoreceived="20120702235923" -->
<!-- sent="Mon, 2 Jul 2012 19:59:17 -0400" -->
<!-- isosent="20120702235917" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] mpirun --tmux -np 4 a.out" -->
<!-- id="ACDE7799-6DF8-4610-987D-C85D293E16E4_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] mpirun --tmux -np 4 a.out<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-02 19:59:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11217.php">Jeff Squyres: "[OMPI devel] Fwd: EuroMPI 2012 Call for participation"</a>
<li><strong>Previous message:</strong> <a href="11215.php">Jeff Squyres: "[OMPI devel] agenda item"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev3">&gt;&gt;&gt; Terry -- please add this to the agenda (but at the lowest priority).
</span><br>
<p>It's been a long-standing dream of mine to launch MPI processes in individual text screens.  The venerable screen(1) app makes this somewhat difficult, but I was pleased to discover recently that tmux(1) -- basically, a 2nd-generation version of screen -- makes it quite easy.
<br>
<p>With Ralph's help, I have a Mercurial branch from the trunk (<a href="https://bitbucket.org/jsquyres/ompi-tmux">https://bitbucket.org/jsquyres/ompi-tmux</a>) where you can do stuff like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --tmux -np 4 a.out
<br>
<p>and you'll get a 4-window tmux.  Window 0 will be MCW rank 0; window 1 will be MCW rank 1, etc.  You can switch between them just like you would with screen(1), and see all the proc's stdout and stderr.  Once stdin forwarding is working, you'll even be able to do something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun --tmux -np 4 gdb a.out
<br>
<p>And get a gdb in each tmux window running a single MCW process.  Of course, you could do this with xterm instead:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -x DISPLAY=whatever:1 -np 4 xterm -e gdb a.out
<br>
<p>But for me, at least, xterm latency is horrendous.  This is why I wanted a text/ncurses-based solution.
<br>
<p>Here's the limitations so far:
<br>
<p>1. it doesn't scale to lots of MPI processes
<br>
&nbsp;&nbsp;&nbsp;--&gt; this is only intended to be a debugging / development tool
<br>
&nbsp;&nbsp;&nbsp;--&gt; it uses the orte-iof tool for stdout/stderr/stdin forwarding
<br>
2. mpirun quits when tmux quits/detaches
<br>
&nbsp;&nbsp;&nbsp;--&gt; you can't disconnect and leave it running
<br>
&nbsp;&nbsp;&nbsp;--&gt; this could change, though (depending on what people want)
<br>
3. only stdout/stderr so far; no stdin forwarding
<br>
&nbsp;&nbsp;&nbsp;--&gt; it's on the to-do list; it'll take a little more work
<br>
<p>My question to developers is: what kind of functionality would you find useful?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11217.php">Jeff Squyres: "[OMPI devel] Fwd: EuroMPI 2012 Call for participation"</a>
<li><strong>Previous message:</strong> <a href="11215.php">Jeff Squyres: "[OMPI devel] agenda item"</a>
<!-- nextthread="start" -->
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
