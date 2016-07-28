<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep  6 09:41:29 2005" -->
<!-- isoreceived="20050906144129" -->
<!-- sent="Tue, 6 Sep 2005 10:41:22 -0400" -->
<!-- isosent="20050906144122" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  recommended way to update an ompi tree" -->
<!-- id="93f1be0df3540412ef2179b6c6a37f82_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200509061634.40245.cap_at_nsc.liu.se" -->
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
<strong>Date:</strong> 2005-09-06 09:41:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0321.php">George Bosilca: "rcache"</a>
<li><strong>Previous message:</strong> <a href="0319.php">Peter Kjellstr&#246;m: "recommended way to update an ompi tree"</a>
<li><strong>In reply to:</strong> <a href="0319.php">Peter Kjellstr&#246;m: "recommended way to update an ompi tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 6, 2005, at 10:34 AM, Peter Kjellstr&#246;m wrote:
<br>
<p><span class="quotelev1">&gt; What is the recommended way to update a local svn snap shot? (a tree 
</span><br>
<span class="quotelev1">&gt; that has
</span><br>
<span class="quotelev1">&gt; been checked out, autogen'ed, configured and built) is it:
</span><br>
<span class="quotelev1">&gt; $ svn up
</span><br>
<span class="quotelev1">&gt; $ ./autogen.sh
</span><br>
<span class="quotelev1">&gt; $ make distclean
</span><br>
<span class="quotelev1">&gt; $ configure ...
</span><br>
<span class="quotelev1">&gt; $ make all install
</span><br>
<p>No need for &quot;make distclean&quot; -- the dependency analysis stuff should 
<br>
take care of rebuilding what you need to rebuild.
<br>
<p>Also, autogen.sh is not always necessary.  autogen.sh is really only 
<br>
necessary when something in configure changes (e.g., configure.ac or 
<br>
any *.m4 file).  Unfortunately, we've been making a lot of changes to 
<br>
the configure system recently, so autogen *has* been necessary a lot, 
<br>
but in general, have a look at the files that go by when you &quot;svn up&quot; 
<br>
and see if you see configure.ac or any *.m4 file get updated.  If no, 
<br>
you should be able to simply &quot;make all install&quot; (note that parallel 
<br>
builds are also supported -- e.g., &quot;make -j 4 all; make -j 4 install&quot;.
<br>
<p>FWIW, we try to make changes to configure during off-peak work hours 
<br>
(e.g., US evenings, weekends, and holidays).
<br>
<p><span class="quotelev1">&gt; Does this change if I vpath build?
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; Is there a hard-cleanup-that-will-allways-work way?
</span><br>
<p>distclean is a pretty good way to go if you want to start from 
<br>
almost-scratch (starting from total scratch would be removing your SVN 
<br>
checkout and getting a new one -- something that is rarely necessary).  
<br>
Or if you do a VPATH build, just remove the entire build tree (or make 
<br>
a new build tree).
<br>
<p><span class="quotelev1">&gt; (and the opposite) Is there a minimum-recompile-regen-way that will 
</span><br>
<span class="quotelev1">&gt; usually
</span><br>
<span class="quotelev1">&gt; work?
</span><br>
<p>See above.
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
<li><strong>Next message:</strong> <a href="0321.php">George Bosilca: "rcache"</a>
<li><strong>Previous message:</strong> <a href="0319.php">Peter Kjellstr&#246;m: "recommended way to update an ompi tree"</a>
<li><strong>In reply to:</strong> <a href="0319.php">Peter Kjellstr&#246;m: "recommended way to update an ompi tree"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
<li><strong>Reply:</strong> <a href="0392.php">George Bosilca: "why do we need the backward dependencies ?"</a>
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
