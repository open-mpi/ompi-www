<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  2 05:23:42 2005" -->
<!-- isoreceived="20050902102342" -->
<!-- sent="Fri, 2 Sep 2005 06:23:35 -0400" -->
<!-- isosent="20050902102335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="IMPORTANT: Libtool version" -->
<!-- id="2f0203d93a24ed0e17bce9c44248cc8d_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-09-02 05:23:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0299.php">Jeff Squyres: "poe PLS component"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Ralf Wildenhues: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>Reply:</strong> <a href="0300.php">Ralf Wildenhues: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>Reply:</strong> <a href="0302.php">Peter Kjellstr&#246;m: "Re:  IMPORTANT: Libtool version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Haven't heard back from any of the other core developers about their 
<br>
versions of Libtool.
<br>
<p>FAIR WARNING: If I don't hear back from anyone by COB today, I'm going 
<br>
to raise the required version of Libtool
<br>
<p>The issue: shared library builds [the default] for OMPI require some 
<br>
version of Libtool &gt; 1.5, probably somewhere around 1.5.14 or 1.5.16, 
<br>
although 1.5.18 is the most current.  This is actually causing 
<br>
confusion and build issues for some users, so I want to make autogen.sh 
<br>
force the use of a more recent libtool (right now it only checks for &gt;= 
<br>
1.5).
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
<li><strong>Next message:</strong> <a href="0299.php">Jeff Squyres: "poe PLS component"</a>
<li><strong>Previous message:</strong> <a href="0297.php">Peter Kjellstr&#246;m: "Re:  configure hangs in libtool.."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0300.php">Ralf Wildenhues: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>Reply:</strong> <a href="0300.php">Ralf Wildenhues: "Re:  IMPORTANT: Libtool version"</a>
<li><strong>Reply:</strong> <a href="0302.php">Peter Kjellstr&#246;m: "Re:  IMPORTANT: Libtool version"</a>
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
