<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug  8 09:07:52 2005" -->
<!-- isoreceived="20050808140752" -->
<!-- sent="Mon, 8 Aug 2005 17:07:22 +0300" -->
<!-- isosent="20050808140722" -->
<!-- name="Gleb Natapov" -->
<!-- email="glebn_at_[hidden]" -->
<!-- subject="Re:  compile error" -->
<!-- id="20050808140722.GH16361_at_minantech.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="6.2.3.4.2.20050808074208.01d2b330_at_pobox1663.lanl.gov" -->
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
<strong>Date:</strong> 2005-08-08 09:07:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Aug 08, 2005 at 07:44:48AM -0600, Ralph H. Castain wrote:
<br>
<span class="quotelev1">&gt; Very interesting - it built fine for me (building static). However, 
</span><br>
<span class="quotelev1">&gt; the ns_base_nds.c file is &quot;stale&quot;, so I just committed a &quot;delete&quot; of 
</span><br>
<span class="quotelev1">&gt; that file. It shouldn't have been building anyway as it isn't in the 
</span><br>
<span class="quotelev1">&gt; Makefile. My guess, therefore, is that you are building dynamically 
</span><br>
<span class="quotelev1">&gt; and are encountering the old &quot;stale library&quot; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
It was in my Makefile! I didn't run autogen.sh after svn update. Thanks.
<br>
<p><span class="quotelev1">&gt; My commit won't fix that situation, unfortunately. If you are 
</span><br>
<span class="quotelev1">&gt; building dynamically, you need to remove your libraries (do an rm -rf 
</span><br>
<span class="quotelev1">&gt; of the directory root your provided as --prefix) to fix the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At 07:29 AM 8/8/2005, you wrote:
</span><br>
<span class="quotelev2">&gt; &gt;Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;I've got this compile error with the latest svn code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;mca/ns/base/.libs/libmca_ns_base.a(ns_base_local_fns.o)(.text+0xfa7): In
</span><br>
<span class="quotelev2">&gt; &gt;function `orte_ns_base_get_peers':
</span><br>
<span class="quotelev2">&gt; &gt;/home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_local_fns.c:609:
</span><br>
<span class="quotelev2">&gt; &gt;multiple definition of `orte_ns_base_get_peers'
</span><br>
<span class="quotelev2">&gt; &gt;mca/ns/base/.libs/libmca_ns_base.a(ns_base_nds.o)(.text+0x116):/home/glebn/OpenMPI_latest/ompi/orte/mca/ns/base/ns_base_nds.c:31:
</span><br>
<span class="quotelev2">&gt; &gt;first defined here
</span><br>
<span class="quotelev2">&gt; &gt;collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt; &gt;make[2]: *** [liborte.la] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;make[2]: Leaving directory `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev2">&gt; &gt;make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;make[1]: Leaving directory `/export/home/glebn/OpenMPI_latest/ompi/orte'
</span><br>
<span class="quotelev2">&gt; &gt;make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;--
</span><br>
<span class="quotelev2">&gt; &gt;                         Gleb.
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
			Gleb.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Previous message:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<li><strong>In reply to:</strong> <a href="0087.php">Ralph H. Castain: "Re:  compile error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0089.php">Jeff Squyres: "Re:  compile error"</a>
<li><strong>Reply:</strong> <a href="0090.php">Ralph H. Castain: "Re:  compile error"</a>
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
