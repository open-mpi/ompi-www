<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  2 14:40:30 2005" -->
<!-- isoreceived="20050802194030" -->
<!-- sent="Tue, 2 Aug 2005 14:40:21 -0500" -->
<!-- isosent="20050802194021" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Broken --enable-mpi-threads" -->
<!-- id="A32D103D-B541-490B-8187-6D5C7EF9C397_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050802152349.GL29812_at_unixer.de" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-02 14:40:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0066.php">Jeff Squyres: "processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0072.php">Torsten Hoefler: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0072.php">Torsten Hoefler: "Re:  Broken --enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 2, 2005, at 10:23 AM, Torsten Hoefler wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt; after having some off-list conversation about enabling thread support
</span><br>
<span class="quotelev1">&gt; for applications using Open MPI, I found several errors during
</span><br>
<span class="quotelev1">&gt; compilation (revision 6701 with --enable-mpi-threads):
</span><br>
<span class="quotelev1">&gt; * mutex.h:267
</span><br>
<span class="quotelev1">&gt;  OMPI_SIZEOF_SIZE_T is not defined
</span><br>
<span class="quotelev1">&gt; * orte_pointer_array.c:358
</span><br>
<span class="quotelev1">&gt;  table is not defined
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could you fix this?
</span><br>
<p><p>The tree now compiles with the --enable-mpi-threads problem.  There  
<br>
is a bug in the event library that will cause deadlocks in orterun,  
<br>
so the tree isn't exactly useful right now.  Tim Woodall is going to  
<br>
look into the problem.
<br>
<p>Brian
<br>
<p><p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0066.php">Jeff Squyres: "processor affinity"</a>
<li><strong>Previous message:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0072.php">Torsten Hoefler: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0072.php">Torsten Hoefler: "Re:  Broken --enable-mpi-threads"</a>
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
