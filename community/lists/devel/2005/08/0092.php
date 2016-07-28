<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 09:19:57 2005" -->
<!-- isoreceived="20050808141957" -->
<!-- sent="Mon, 8 Aug 2005 10:19:53 -0400" -->
<!-- isosent="20050808141953" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  compile error" -->
<!-- id="61f9d8a8d574d7a5d55b3d1074d50970_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050808141715.GI16361_at_minantech.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 09:19:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 8, 2005, at 10:17 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev2">&gt;&gt; You should not need to re-run autogen.sh after a Makefile.am changes 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; you only need to re-run autogen.sh if a .m4 file or configure.ac
</span><br>
<span class="quotelev2">&gt;&gt; changes.  See the HACKING file.
</span><br>
<span class="quotelev1">&gt; I know. You are right, but I am running autogen.sh and build on 
</span><br>
<span class="quotelev1">&gt; different
</span><br>
<span class="quotelev1">&gt; computers right now. That's why I had this problem. (Note to myself:
</span><br>
<span class="quotelev1">&gt; should install latest libtool and friends on build computers)
</span><br>
<p>Gotcha -- yes, that would definitely cause this kind of problem (it saw 
<br>
the updated Makefile.am and tried to regenerate Makefile, but failed 
<br>
because the right tools weren't present).
<br>
<p>Ok, good -- that explains this.  I hate unexplained problems.  :-)
<br>
<p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0093.php">Jeff Squyres: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
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
