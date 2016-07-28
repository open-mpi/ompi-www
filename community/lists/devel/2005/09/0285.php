<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Sep  1 05:56:09 2005" -->
<!-- isoreceived="20050901105609" -->
<!-- sent="Thu, 1 Sep 2005 06:56:03 -0400" -->
<!-- isosent="20050901105603" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  ltdl.h problem" -->
<!-- id="6f63b1bf710ead24a2ab1f3d84d9fcc8_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050901043709.GC5483_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-09-01 05:56:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0286.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 1, 2005, at 12:37 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I trace this one as far as I could. And the results are mostly 
</span><br>
<span class="quotelev2">&gt;&gt; unexpected.
</span><br>
<span class="quotelev2">&gt;&gt; On some of the clusters it compiles without any problems and on some
</span><br>
<span class="quotelev2">&gt;&gt; others it doesn't. The difference is ... if there is an ltdl.h 
</span><br>
<span class="quotelev2">&gt;&gt; installed
</span><br>
<span class="quotelev2">&gt;&gt; in the system directories. I don't think that's the expected behavior 
</span><br>
<span class="quotelev2">&gt;&gt; for
</span><br>
<span class="quotelev2">&gt;&gt; the compilation, if we have our own ltdl.h file why should we use the
</span><br>
<span class="quotelev2">&gt;&gt; system wide one ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is usually up to the user's choice at some point (I don't know
</span><br>
<span class="quotelev1">&gt; about OpenMPI with that respect).
</span><br>
<p>FWIW, the reason we did this (force the use of our included ltdl.h vs. 
<br>
any potentially-installed ltdl.h) is that we *need* to use the included 
<br>
libltdl (and therefore its matching ltdl.h) because older versions are 
<br>
buggy and don't support the functionality that we need.
<br>
<p>Unfortunately, many Linux distros (and other OSs) include such older 
<br>
versions of the ltdl package, so we have to resort to this kind of 
<br>
stuff to absolutely ensure that ours is the one that is used.
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
<li><strong>Next message:</strong> <a href="0286.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
<li><strong>Previous message:</strong> <a href="0284.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<li><strong>In reply to:</strong> <a href="../../2005/08/0282.php">Ralf Wildenhues: "Re:  ltdl.h problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0289.php">Jeff Squyres: "Re:  ltdl.h problem"</a>
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
