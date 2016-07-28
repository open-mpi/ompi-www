<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 09:11:13 2005" -->
<!-- isoreceived="20050808141113" -->
<!-- sent="Mon, 8 Aug 2005 10:11:11 -0400" -->
<!-- isosent="20050808141111" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  compile error" -->
<!-- id="0f3bfb85c2e79e39acfa72c8acbbf167_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20050808140722.GH16361_at_minantech.com" -->
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
<strong>Date:</strong> 2005-08-08 09:11:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should not need to re-run autogen.sh after a Makefile.am changes --  
<br>
you only need to re-run autogen.sh if a .m4 file or configure.ac  
<br>
changes.  See the HACKING file.
<br>
<p>Makefile's should be automatically regenerated during &quot;make all&quot; if  
<br>
their corresponding Makefile.am's were modified (dependencies in the  
<br>
Makefile ensure that the appropriate rules are triggered).  However, if  
<br>
there's a error during the regeneration of the Makefile, this kind of  
<br>
thing can happen.  Can you verify that your Makefile was not properly  
<br>
regenerated from the changed Makefile.am?
<br>
<p><p><p>On Aug 8, 2005, at 10:07 AM, Gleb Natapov wrote:
<br>
<p><span class="quotelev1">&gt; On Mon, Aug 08, 2005 at 07:44:48AM -0600, Ralph H. Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Very interesting - it built fine for me (building static). However,
</span><br>
<span class="quotelev2">&gt;&gt; the ns_base_nds.c file is &quot;stale&quot;, so I just committed a &quot;delete&quot; of
</span><br>
<span class="quotelev2">&gt;&gt; that file. It shouldn't have been building anyway as it isn't in the
</span><br>
<span class="quotelev2">&gt;&gt; Makefile. My guess, therefore, is that you are building dynamically
</span><br>
<span class="quotelev2">&gt;&gt; and are encountering the old &quot;stale library&quot; problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; It was in my Makefile! I didn't run autogen.sh after svn update.  
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My commit won't fix that situation, unfortunately. If you are
</span><br>
<span class="quotelev2">&gt;&gt; building dynamically, you need to remove your libraries (do an rm -rf
</span><br>
<span class="quotelev2">&gt;&gt; of the directory root your provided as --prefix) to fix the problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At 07:29 AM 8/8/2005, you wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've got this compile error with the latest svn code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/ns/base/.libs/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; libmca_ns_base.a(ns_base_local_fns.o)(.text+0xfa7): In
</span><br>
<span class="quotelev3">&gt;&gt;&gt; function `orte_ns_base_get_peers':
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ns_base_local_fns.c:609:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; multiple definition of `orte_ns_base_get_peers'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mca/ns/base/.libs/libmca_ns_base.a(ns_base_nds.o)(.text+0x116):/ 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_nds.c:31:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: *** [liborte.la] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[2]: Leaving directory  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make[1]: Leaving directory  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev3">&gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                         Gleb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; 			Gleb.
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
<li><strong>Next message:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0088.php">Gleb Natapov: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0091.php">Gleb Natapov: "Re:  compile error"</a>
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
