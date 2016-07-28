<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 09:17:46 2005" -->
<!-- isoreceived="20050808141746" -->
<!-- sent="Mon, 8 Aug 2005 17:17:15 +0300" -->
<!-- isosent="20050808141715" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  compile error" -->
<!-- id="20050808141715.GI16361_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0f3bfb85c2e79e39acfa72c8acbbf167_at_open-mpi.org" -->
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
<strong>From:</strong> Gleb Natapov (<em>glebn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-08 09:17:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 08, 2005 at 10:11:11AM -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; You should not need to re-run autogen.sh after a Makefile.am changes --  
</span><br>
<span class="quotelev1">&gt; you only need to re-run autogen.sh if a .m4 file or configure.ac  
</span><br>
<span class="quotelev1">&gt; changes.  See the HACKING file.
</span><br>
I know. You are right, but I am running autogen.sh and build on different
<br>
computers right now. That's why I had this problem. (Note to myself:
<br>
should install latest libtool and friends on build computers)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Makefile's should be automatically regenerated during &quot;make all&quot; if  
</span><br>
<span class="quotelev1">&gt; their corresponding Makefile.am's were modified (dependencies in the  
</span><br>
<span class="quotelev1">&gt; Makefile ensure that the appropriate rules are triggered).  However, if  
</span><br>
<span class="quotelev1">&gt; there's a error during the regeneration of the Makefile, this kind of  
</span><br>
<span class="quotelev1">&gt; thing can happen.  Can you verify that your Makefile was not properly  
</span><br>
<span class="quotelev1">&gt; regenerated from the changed Makefile.am?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 8, 2005, at 10:07 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Aug 08, 2005 at 07:44:48AM -0600, Ralph H. Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Very interesting - it built fine for me (building static). However,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the ns_base_nds.c file is &quot;stale&quot;, so I just committed a &quot;delete&quot; of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; that file. It shouldn't have been building anyway as it isn't in the
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Makefile. My guess, therefore, is that you are building dynamically
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and are encountering the old &quot;stale library&quot; problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; It was in my Makefile! I didn't run autogen.sh after svn update.  
</span><br>
<span class="quotelev2">&gt; &gt; Thanks.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; My commit won't fix that situation, unfortunately. If you are
</span><br>
<span class="quotelev3">&gt; &gt;&gt; building dynamically, you need to remove your libraries (do an rm -rf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; of the directory root your provided as --prefix) to fix the problem.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; At 07:29 AM 8/8/2005, you wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hello,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I've got this compile error with the latest svn code.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mca/ns/base/.libs/ 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; libmca_ns_base.a(ns_base_local_fns.o)(.text+0xfa7): In
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; function `orte_ns_base_get_peers':
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; /home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; ns_base_local_fns.c:609:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; multiple definition of `orte_ns_base_get_peers'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; mca/ns/base/.libs/libmca_ns_base.a(ns_base_nds.o)(.text+0x116):/ 
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_nds.c:31:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; first defined here
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: *** [liborte.la] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[2]: Leaving directory  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make[1]: Leaving directory  
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;                         Gleb.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; 			Gleb.
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0092.php">Jeff Squyres: "Re:  compile error"</a>
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
