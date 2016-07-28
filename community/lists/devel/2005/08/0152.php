<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 15 10:45:59 2005" -->
<!-- isoreceived="20050815154559" -->
<!-- sent="Mon, 15 Aug 2005 11:45:58 -0400" -->
<!-- isosent="20050815154558" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="linux paffinity component" -->
<!-- id="b328e497c2a07a523c17572bd1a17d22_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
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
<strong>Date:</strong> 2005-08-15 10:45:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<li><strong>Reply:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Is anyone having problems compiling the &quot;linux&quot; paffinity component?
<br>
<p>It turns out that there are *3* different implementations of the Linux 
<br>
system call sched_setaffinity() (and 3 different corresponding 
<br>
prototypes -- #@$@#$%!!!).  The differences seem to be loosely 
<br>
categorized as:
<br>
<p>1. implementation that was back-ported to 2.4 kernels (the one that is 
<br>
listed in sched_setaffinity(2))
<br>
2. implementation in early 2.6 kernels
<br>
3. implementation in later 2.6 kernels
<br>
<p>(although there seem to be some exceptions to the above categorization)
<br>
<p>Plus, at least some 2.4 kernels seem to have broken aspects.  Or is it 
<br>
glibc?  Who knows, who cares: in some places, the CPU_ZERO() macro 
<br>
won't compile.
<br>
<p>The default code path is for case #3.  I have fixes for all cases ready 
<br>
to commit, but they involve changes to that component's configure.m4, 
<br>
which means making everyone re-run autogen.sh.
<br>
<p>Unless someone is actively running into compilation problems now, I was 
<br>
planning until waiting until tonight to commit (observing the &quot;try not 
<br>
to cause people to re-run autogen.sh during the US work day&quot; rule).
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
<li><strong>Next message:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<li><strong>Previous message:</strong> <a href="0151.php">Jeff Squyres: "Re:  Memory registration question."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
<li><strong>Reply:</strong> <a href="0153.php">Tim S. Woodall: "Re:  linux paffinity component"</a>
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
