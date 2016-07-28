<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 08:49:24 2005" -->
<!-- isoreceived="20050810134924" -->
<!-- sent="Wed, 10 Aug 2005 07:49:19 -0600" -->
<!-- isosent="20050810134919" -->
<!-- name="Ralph H. Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re:  New version of Valgrind: 3.0.0" -->
<!-- id="6.2.3.4.2.20050810074412.01d3b720_at_pobox1663.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="332cdc70f0243c77ed0ea6b8d59e6f94_at_open-mpi.org" -->
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
<strong>From:</strong> Ralph H. Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-10 08:49:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is a variable for the entire name, but it follows the prefix 
<br>
rule. I'd have to look in the code to give you the exact reference 
<br>
(I'm not at a computer that has the code on it at the moment). It was 
<br>
originally defined so that launchers could pass the proc name on to 
<br>
the child process, but people mostly have gone to using the 
<br>
individual environmental parameters for job, vpid, etc so they don't 
<br>
have to parse the enviro variable on the receiving end.
<br>
<p>I have no objection to creating a short-hand version, if that's 
<br>
helpful to people. To avoid potential conflicts, we just wouldn't use 
<br>
it anywhere in the code base - we could just set it so that people 
<br>
could use it for things like valgrind. Let me know if that's 
<br>
something you'd like to see done and I'll add it to the list.
<br>
<p>Ralph
<br>
<p><p>At 04:58 AM 8/10/2005, you wrote:
<br>
<span class="quotelev1">&gt;On Aug 10, 2005, at 6:48 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you give an environment variable name to --log-file-qualifier, it
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will use the value of that environment variable in the output file
</span><br>
<span class="quotelev3">&gt; &gt;&gt; name.  Do we have a suitable environment variable which is globally
</span><br>
<span class="quotelev3">&gt; &gt;&gt; available for such a purpose?  (in LAM, we had $LAMRANK, which was
</span><br>
<span class="quotelev3">&gt; &gt;&gt; your
</span><br>
<span class="quotelev3">&gt; &gt;&gt; rank in MPI_COMM_WORLD)
</span><br>
<span class="quotelev2">&gt; &gt; I use $OMPI_MCA_ns_nds_vpid for this. Is this good enough?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I knew about this one, but was wondering if we actually have anything
</span><br>
<span class="quotelev1">&gt;that encompasses the entire cellid,jobid,vpid triple, and perhaps uses
</span><br>
<span class="quotelev1">&gt;a nice short name (perhaps one that does not obey the prefix rule --
</span><br>
<span class="quotelev1">&gt;gasp!).  So I'm guessing this doesn't exist, but would be convenient
</span><br>
<span class="quotelev1">&gt;for exactly this purpose (valgrind's --log-file-qualifier).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Ralph -- got any opinions here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;--
</span><br>
<span class="quotelev1">&gt;{+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt;{+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt;{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt;devel mailing list
</span><br>
<span class="quotelev1">&gt;devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Previous message:</strong> <a href="0125.php">Tim S. Woodall: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="0124.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>Reply:</strong> <a href="0127.php">Jeff Squyres: "Re:  New version of Valgrind: 3.0.0"</a>
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
