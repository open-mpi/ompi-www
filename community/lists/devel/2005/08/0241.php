<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 26 07:47:39 2005" -->
<!-- isoreceived="20050826124739" -->
<!-- sent="Fri, 26 Aug 2005 08:47:31 -0400" -->
<!-- isosent="20050826124731" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="maffinity framework" -->
<!-- id="b746e6a846fd833ea99e535efd063b40_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-26 07:47:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0242.php">Jeff Squyres: "F90 support"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Jeff Squyres: "Re:  OpenIB results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just committed a new &quot;maffinity&quot; (memory affinity) framework with 
<br>
only a single, trivial component right now.  It's API is still changing 
<br>
a bit, but it's getting there.
<br>
<p>Right now, memory affinity is automatically enabled during 
<br>
ompi_mpi_init() (*not* automatically during opal_init()) if processor 
<br>
affinity is both enabled and successful in biinding the process to a 
<br>
processor.  Nothing really uses the memory affinity yet except my 
<br>
un-committed shared memory collectives, but the API/components will 
<br>
likely be expanded in the near future to hint to the OS that all 
<br>
malloc's should return local memory, etc.
<br>
<p>Thanks to Troy for pointing out the libnuma project (out of the SUSE 
<br>
Labs) that is usable on any NUMA machine (e.g., Opterons -- I'm asking 
<br>
to have it installed on the Odin IU cluster).  I'll be making a 
<br>
maffinity component for that as well.
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
<li><strong>Next message:</strong> <a href="0242.php">Jeff Squyres: "F90 support"</a>
<li><strong>Previous message:</strong> <a href="0240.php">Jeff Squyres: "Re:  OpenIB results"</a>
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
