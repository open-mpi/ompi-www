<?
$subject_val = "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 18:45:30 2014" -->
<!-- isoreceived="20140107234530" -->
<!-- sent="Tue, 7 Jan 2014 16:45:27 -0700" -->
<!-- isosent="20140107234527" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)" -->
<!-- id="20140107234527.GG61812_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E23BF070-D371-4B6C-B660-14CFA3011EED_at_open-mpi.org" -->
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
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 18:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13578.php">Nathan Hjelm: "[OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
+1. Single dashed long names drive me nuts.
<br>
<p>-Nathan
<br>
<p>On Tue, Jan 07, 2014 at 03:17:11PM -0800, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; +1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jan 7, 2014, at 1:49 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHAT: Drop mpirun single-dash CLI options such as -bynode (but keep the double-dash equivalents, like --bynode)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHY: It's a well-established de facto CLI option standard:
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;-&quot; is used for single-letter options
</span><br>
<span class="quotelev2">&gt; &gt;  &quot;--&quot; is used for tokenized options
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHERE: probably mostly in orte/tools/orterun
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; WHEN: 1.9
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; TIMEOUT: Teleconf, Tuesday 21 Jan 2014
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; MORE DETAIL:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; We've supported single- and double-dash variants of many mpirun options for several years (e.g., --bynode and -bynode).  With the exception of &quot;-np&quot;, there's really no reason we should support the single-dash versions (&quot;-np&quot; is pretty universally expected in the MPI/HPC world; I don't think we'll ever be able to get rid of it).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Let's deprecate all single-dash options (except -np) in 1.7.5/1.8 and eliminate them in 1.9.  Specifically, let's do something like this in 1.7.5:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; $ shell mpirun -bynode -np 4 a.out
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; You used the &quot;-bynode&quot; option to mpirun, which, although it still functions
</span><br>
<span class="quotelev2">&gt; &gt; as you would expect it to, is now deprecated.  The exactly-equivalent &quot;--bynode&quot;
</span><br>
<span class="quotelev2">&gt; &gt; option replaces the &quot;-bynode&quot; option.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; *** NOTE THAT -bynode OPTION WILL DISAPPEAR IN A FUTURE VERSION OF OPEN MPI! ***
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; To be compatible with future versions of Open MPI, use the &quot;--bynode&quot; option. 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If you can't easily change your mpirun command line, then you can set the MCA
</span><br>
<span class="quotelev2">&gt; &gt; parameter orterun_i_promise_to_update_my_cli_options_before_ompi_1_9 to 1,
</span><br>
<span class="quotelev2">&gt; &gt; which will suppress this message.
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; -----
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; This gives the user two clear options:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 1. Update from -foo to --foo to be forward compatible
</span><br>
<span class="quotelev2">&gt; &gt; 2. Set an MCA parameter to suppress the message, but risk not being forward compatible
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Then, on trunk/v1.9, we remove all the single-dash options.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Comments?
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13579/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13580.php">Shamis, Pavel: "Re: [OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>Previous message:</strong> <a href="13578.php">Nathan Hjelm: "[OMPI devel] RFC: OB1 optimizations"</a>
<li><strong>In reply to:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
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
