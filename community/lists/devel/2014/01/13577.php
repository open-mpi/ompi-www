<?
$subject_val = "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 18:19:40 2014" -->
<!-- isoreceived="20140107231940" -->
<!-- sent="Tue, 7 Jan 2014 15:17:11 -0800" -->
<!-- isosent="20140107231711" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)" -->
<!-- id="E23BF070-D371-4B6C-B660-14CFA3011EED_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="28BB9B32-8018-4E1D-BAC5-E3D773195215_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 18:17:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13578.php">Nathan Hjelm: "[OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13576.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>In reply to:</strong> <a href="13576.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Reply:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1
<br>
<p>On Jan 7, 2014, at 1:49 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Drop mpirun single-dash CLI options such as -bynode (but keep the double-dash equivalents, like --bynode)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: It's a well-established de facto CLI option standard:
</span><br>
<span class="quotelev1">&gt;  &quot;-&quot; is used for single-letter options
</span><br>
<span class="quotelev1">&gt;  &quot;--&quot; is used for tokenized options
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: probably mostly in orte/tools/orterun
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: 1.9
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Teleconf, Tuesday 21 Jan 2014
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAIL:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We've supported single- and double-dash variants of many mpirun options for several years (e.g., --bynode and -bynode).  With the exception of &quot;-np&quot;, there's really no reason we should support the single-dash versions (&quot;-np&quot; is pretty universally expected in the MPI/HPC world; I don't think we'll ever be able to get rid of it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Let's deprecate all single-dash options (except -np) in 1.7.5/1.8 and eliminate them in 1.9.  Specifically, let's do something like this in 1.7.5:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; $ shell mpirun -bynode -np 4 a.out
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; You used the &quot;-bynode&quot; option to mpirun, which, although it still functions
</span><br>
<span class="quotelev1">&gt; as you would expect it to, is now deprecated.  The exactly-equivalent &quot;--bynode&quot;
</span><br>
<span class="quotelev1">&gt; option replaces the &quot;-bynode&quot; option.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** NOTE THAT -bynode OPTION WILL DISAPPEAR IN A FUTURE VERSION OF OPEN MPI! ***
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To be compatible with future versions of Open MPI, use the &quot;--bynode&quot; option. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you can't easily change your mpirun command line, then you can set the MCA
</span><br>
<span class="quotelev1">&gt; parameter orterun_i_promise_to_update_my_cli_options_before_ompi_1_9 to 1,
</span><br>
<span class="quotelev1">&gt; which will suppress this message.
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This gives the user two clear options:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Update from -foo to --foo to be forward compatible
</span><br>
<span class="quotelev1">&gt; 2. Set an MCA parameter to suppress the message, but risk not being forward compatible
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, on trunk/v1.9, we remove all the single-dash options.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Comments?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13578.php">Nathan Hjelm: "[OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13576.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>In reply to:</strong> <a href="13576.php">Jeff Squyres (jsquyres): "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Reply:</strong> <a href="13579.php">Nathan Hjelm: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
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
