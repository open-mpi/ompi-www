<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Aug 10 12:28:03 2005" -->
<!-- isoreceived="20050810172803" -->
<!-- sent="Wed, 10 Aug 2005 12:28:03 -0500" -->
<!-- isosent="20050810172803" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re:  New version of Valgrind: 3.0.0" -->
<!-- id="935610DC-ED33-4CE8-A5CD-AA07CD32B2E4_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6.2.3.4.2.20050810074412.01d3b720_at_pobox1663.lanl.gov" -->
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
<strong>Date:</strong> 2005-08-10 12:28:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That sounds perfect -- thanks!
<br>
<p><p>On Aug 10, 2005, at 8:49 AM, Ralph H. Castain wrote:
<br>
<p><span class="quotelev1">&gt; There is a variable for the entire name, but it follows the prefix
</span><br>
<span class="quotelev1">&gt; rule. I'd have to look in the code to give you the exact reference
</span><br>
<span class="quotelev1">&gt; (I'm not at a computer that has the code on it at the moment). It was
</span><br>
<span class="quotelev1">&gt; originally defined so that launchers could pass the proc name on to
</span><br>
<span class="quotelev1">&gt; the child process, but people mostly have gone to using the
</span><br>
<span class="quotelev1">&gt; individual environmental parameters for job, vpid, etc so they don't
</span><br>
<span class="quotelev1">&gt; have to parse the enviro variable on the receiving end.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have no objection to creating a short-hand version, if that's
</span><br>
<span class="quotelev1">&gt; helpful to people. To avoid potential conflicts, we just wouldn't use
</span><br>
<span class="quotelev1">&gt; it anywhere in the code base - we could just set it so that people
</span><br>
<span class="quotelev1">&gt; could use it for things like valgrind. Let me know if that's
</span><br>
<span class="quotelev1">&gt; something you'd like to see done and I'll add it to the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At 04:58 AM 8/10/2005, you wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2005, at 6:48 AM, Gleb Natapov wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; If you give an environment variable name to --log-file- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; qualifier, it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will use the value of that environment variable in the output file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; name.  Do we have a suitable environment variable which is globally
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; available for such a purpose?  (in LAM, we had $LAMRANK, which was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; your
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; rank in MPI_COMM_WORLD)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I use $OMPI_MCA_ns_nds_vpid for this. Is this good enough?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I knew about this one, but was wondering if we actually have anything
</span><br>
<span class="quotelev2">&gt;&gt; that encompasses the entire cellid,jobid,vpid triple, and perhaps  
</span><br>
<span class="quotelev2">&gt;&gt; uses
</span><br>
<span class="quotelev2">&gt;&gt; a nice short name (perhaps one that does not obey the prefix rule --
</span><br>
<span class="quotelev2">&gt;&gt; gasp!).  So I'm guessing this doesn't exist, but would be convenient
</span><br>
<span class="quotelev2">&gt;&gt; for exactly this purpose (valgrind's --log-file-qualifier).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph -- got any opinions here?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev2">&gt;&gt;
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
<p><p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0128.php">George Bosilca: "Re:  Fwd: Regarding MVAPI Component in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
<li><strong>In reply to:</strong> <a href="0126.php">Ralph H. Castain: "Re:  New version of Valgrind: 3.0.0"</a>
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
