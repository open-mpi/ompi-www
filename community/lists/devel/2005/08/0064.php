<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug  2 10:49:16 2005" -->
<!-- isoreceived="20050802154916" -->
<!-- sent="Tue, 2 Aug 2005 11:49:10 -0400" -->
<!-- isosent="20050802154910" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  Broken --enable-mpi-threads" -->
<!-- id="3d9220becf6419e377b45999a22b999a_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D2E12F9A-C0BB-4B4D-841C-A1B8CC6A6BF1_at_open-mpi.org" -->
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
<strong>Date:</strong> 2005-08-02 10:49:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Will re-add back to the nightlies -- the nightlies were initially 
<br>
configured when threads were the default, so there are currently builds 
<br>
that explicitly turn threads *off*.  :-)
<br>
<p><p>On Aug 2, 2005, at 11:26 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; I'll take a look today.  We should probably add the threaded builds
</span><br>
<span class="quotelev1">&gt; back into the nightly build tests...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 2, 2005, at 10:23 AM, Torsten Hoefler wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt; after having some off-list conversation about enabling thread support
</span><br>
<span class="quotelev2">&gt;&gt; for applications using Open MPI, I found several errors during
</span><br>
<span class="quotelev2">&gt;&gt; compilation (revision 6701 with --enable-mpi-threads):
</span><br>
<span class="quotelev2">&gt;&gt; * mutex.h:267
</span><br>
<span class="quotelev2">&gt;&gt;  OMPI_SIZEOF_SIZE_T is not defined
</span><br>
<span class="quotelev2">&gt;&gt; * orte_pointer_array.c:358
</span><br>
<span class="quotelev2">&gt;&gt;  table is not defined
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Could you fix this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;    Torsten
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt;  bash$ :(){ :|:&amp;};: ----- pgp: <a href="http://www.unixer.de/htor-key.asc">http://www.unixer.de/htor-key.asc</a> -----
</span><br>
<span class="quotelev2">&gt;&gt; Help Microsoft fight software piracy: Give Linux to a friend today!
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>Previous message:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<li><strong>In reply to:</strong> <a href="0063.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0065.php">Brian Barrett: "Re:  Broken --enable-mpi-threads"</a>
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
