<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  2 10:26:26 2005" -->
<!-- isoreceived="20050802152626" -->
<!-- sent="Tue, 2 Aug 2005 10:26:16 -0500" -->
<!-- isosent="20050802152616" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re:  Broken --enable-mpi-threads" -->
<!-- id="D2E12F9A-C0BB-4B4D-841C-A1B8CC6A6BF1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-02 10:26:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll take a look today.  We should probably add the threaded builds  
<br>
back into the nightly build tests...
<br>
<p>Brian
<br>
<p>On Aug 2, 2005, at 10:23 AM, Torsten Hoefler wrote:
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;    Torsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  bash$ :(){ :|:&amp;};: ----- pgp: <a href="http://www.unixer.de/htor-key.asc">http://www.unixer.de/htor-key.asc</a> -----
</span><br>
<span class="quotelev1">&gt; Help Microsoft fight software piracy: Give Linux to a friend today!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="0062.php">Torsten Hoefler: "Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Reply:</strong> <a href="0064.php">Jeff Squyres: "Re:  Broken --enable-mpi-threads"</a>
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
