<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 31 05:58:11 2005" -->
<!-- isoreceived="20050831105811" -->
<!-- sent="Wed, 31 Aug 2005 06:58:05 -0400" -->
<!-- isosent="20050831105805" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Small ltdl use update" -->
<!-- id="42b3b220b426fb1761fa38a85521df74_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050831064844.GC9686_at_iam.uni-bonn.de" -->
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
<strong>Date:</strong> 2005-08-31 05:58:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0275.php">Ralf Wildenhues: "&quot;fix&quot; for romio configure.in"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Ralf Wildenhues: "Small ltdl use update"</a>
<li><strong>In reply to:</strong> <a href="0273.php">Ralf Wildenhues: "Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 31, 2005, at 2:48 AM, Ralf Wildenhues wrote:
<br>
<p><span class="quotelev1">&gt; Please apply the first patch (or a similar solution) to include
</span><br>
<span class="quotelev1">&gt; ltdl.h directly.  This is both how it's documented and how
</span><br>
<span class="quotelev1">&gt; it will work with Libtool 1.5.x and 2.x: the latter has other
</span><br>
<span class="quotelev1">&gt; included files, which live one directory level further down
</span><br>
<p>Done, thanks.
<br>
<p><span class="quotelev1">&gt; Below is another tiny patch to please &quot;make distcheck&quot;
</span><br>
<span class="quotelev1">&gt; (on my machine all there is left to make it pass is one failing test
</span><br>
<span class="quotelev1">&gt; and the tarballs not being removed properly; the latter will be fixed
</span><br>
<span class="quotelev1">&gt; by computing the VERSION argument to AC_INIT properly.)
</span><br>
<p>Brian's still working on this.  Given that our goal is to start making 
<br>
release candidates in the near future, we opted to not bring over any 
<br>
of that stuff to the trunk until after we branch for 1.0.
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
<li><strong>Next message:</strong> <a href="0275.php">Ralf Wildenhues: "&quot;fix&quot; for romio configure.in"</a>
<li><strong>Previous message:</strong> <a href="0273.php">Ralf Wildenhues: "Small ltdl use update"</a>
<li><strong>In reply to:</strong> <a href="0273.php">Ralf Wildenhues: "Small ltdl use update"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
<li><strong>Reply:</strong> <a href="0276.php">Ralf Wildenhues: "Re:  Small ltdl use update"</a>
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
