<?
$subject_val = "Re: [OMPI devel] Environment forwarding";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 17:09:56 2007" -->
<!-- isoreceived="20071105220956" -->
<!-- sent="Mon, 5 Nov 2007 23:11:18 +0100" -->
<!-- isosent="20071105221118" -->
<!-- name="Torsten Hoefler" -->
<!-- email="torsten.hoefler_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Environment forwarding" -->
<!-- id="20071105221118.GK18506_at_ringo.informatik.tu-chemnitz.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.LNX.4.64.0711051655300.4842_at_milliways.osl.iu.edu" -->
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
<strong>From:</strong> Torsten Hoefler (<em>torsten.hoefler_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 17:11:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Nov 05, 2007 at 04:57:19PM -0500, Brian W. Barrett wrote:
<br>
<span class="quotelev1">&gt; This is extremely tricky to do.  How do you know which environment 
</span><br>
<span class="quotelev1">&gt; variables to forward (foo in this case) and which not to (hostname). 
</span><br>
<span class="quotelev1">&gt; SLURM has a better chance, since it's linux only and generally only run on 
</span><br>
<span class="quotelev1">&gt; tightly controlled clusters.  But there's a whole variety of things that 
</span><br>
<span class="quotelev1">&gt; shouldn't be forwarded and that list differs from OS to OS.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe we toyed around with the &quot;right thing&quot; in LAM and early on with 
</span><br>
<span class="quotelev1">&gt; OPen MPI and decided that it was too hard to meet expected behavior.
</span><br>
Some applications rely on this (I know at least two right away, Gamess
<br>
and Abinit) and they work without problems with Lam/Mpich{1,2} but not
<br>
with Open MPI. I am *not* arguing that those applications are correct (I
<br>
agree that this way of passing arguments is ugly, but it's done). 
<br>
<p>I know it's not defined in the standard but I think it's a nice
<br>
convenient functionality. E.g., setting the LD_LIBRARY_PATH to find
<br>
libmpi.so in the .bashrc is also a pain if you have multiple (Open) MPIs
<br>
installed.
<br>
<p><p>Just my two cents,
<br>
&nbsp;&nbsp;Torsten
<br>
<p><pre>
-- 
 bash$ :(){ :|:&amp;};: --------------------- <a href="http://www.unixer.de/">http://www.unixer.de/</a> -----
&quot;You should never bet against anything in science at odds of more than
about 10^12 to 1.&quot; Ernest Rutherford
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Previous message:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>In reply to:</strong> <a href="2550.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
<li><strong>Reply:</strong> <a href="2552.php">Brian W. Barrett: "Re: [OMPI devel] Environment forwarding"</a>
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
