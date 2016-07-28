<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 05:36:21 2005" -->
<!-- isoreceived="20050810103621" -->
<!-- sent="Wed, 10 Aug 2005 06:36:19 -0400" -->
<!-- isosent="20050810103619" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="New version of Valgrind: 3.0.0" -->
<!-- id="165354ae380f64d190885d3d5611192d_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-10 05:36:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
George pointed out to me last night that there's a new version of 
<br>
Valgrind that works on AMD (see <a href="http://www.valgrind.org/">http://www.valgrind.org/</a>):
<br>
<p>-----
<br>
3.0.0 is a major overhaul of Valgrind.  The most significant user 
<br>
visible change is that Valgrind now supports architectures other than 
<br>
x86.  The new architectures it supports are AMD64 and PPC32, and the 
<br>
infrastructure is present for other architectures to be added later.
<br>
-----
<br>
<p>There are some important notes about AMD support in the NEWS file -- be 
<br>
sure to read it.
<br>
<p>I also note the DOE's handiwork in the NEWS file:
<br>
<p>-----
<br>
- Small changes in control log file naming which make it easier to
<br>
&nbsp;&nbsp;&nbsp;use valgrind for debugging MPI-based programs.  The relevant
<br>
&nbsp;&nbsp;&nbsp;new flags are --log-file-exactly= and --log-file-qualifier=.
<br>
-----
<br>
<p>If you give an environment variable name to --log-file-qualifier, it 
<br>
will use the value of that environment variable in the output file 
<br>
name.  Do we have a suitable environment variable which is globally 
<br>
available for such a purpose?  (in LAM, we had $LAMRANK, which was your 
<br>
rank in MPI_COMM_WORLD)
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
<li><strong>Next message:</strong> <a href="0122.php">Gleb Natapov: "Re:  Memory registration question."</a>
<li><strong>Previous message:</strong> <a href="0120.php">Sridhar Chirravuri: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0123.php">Gleb Natapov: "Re:  New version of Valgrind: 3.0.0"</a>
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
