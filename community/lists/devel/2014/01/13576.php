<?
$subject_val = "[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  7 16:49:15 2014" -->
<!-- isoreceived="20140107214915" -->
<!-- sent="Tue, 7 Jan 2014 21:49:13 +0000" -->
<!-- isosent="20140107214913" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="[OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)" -->
<!-- id="28BB9B32-8018-4E1D-BAC5-E3D773195215_at_cisco.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-07 16:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Previous message:</strong> <a href="13575.php">Tobias Burnus: "[OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Reply:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
WHAT: Drop mpirun single-dash CLI options such as -bynode (but keep the double-dash equivalents, like --bynode)
<br>
<p>WHY: It's a well-established de facto CLI option standard:
<br>
&nbsp;&nbsp;&quot;-&quot; is used for single-letter options
<br>
&nbsp;&nbsp;&quot;--&quot; is used for tokenized options
<br>
<p>WHERE: probably mostly in orte/tools/orterun
<br>
<p>WHEN: 1.9
<br>
<p>TIMEOUT: Teleconf, Tuesday 21 Jan 2014
<br>
<p>MORE DETAIL:
<br>
<p>We've supported single- and double-dash variants of many mpirun options for several years (e.g., --bynode and -bynode).  With the exception of &quot;-np&quot;, there's really no reason we should support the single-dash versions (&quot;-np&quot; is pretty universally expected in the MPI/HPC world; I don't think we'll ever be able to get rid of it).
<br>
<p>Let's deprecate all single-dash options (except -np) in 1.7.5/1.8 and eliminate them in 1.9.  Specifically, let's do something like this in 1.7.5:
<br>
<p>-----
<br>
$ shell mpirun -bynode -np 4 a.out
<br>
------------------------------------------------------------------------
<br>
You used the &quot;-bynode&quot; option to mpirun, which, although it still functions
<br>
as you would expect it to, is now deprecated.  The exactly-equivalent &quot;--bynode&quot;
<br>
option replaces the &quot;-bynode&quot; option.
<br>
<p>&nbsp;*** NOTE THAT -bynode OPTION WILL DISAPPEAR IN A FUTURE VERSION OF OPEN MPI! ***
<br>
<p>To be compatible with future versions of Open MPI, use the &quot;--bynode&quot; option. 
<br>
<p>If you can't easily change your mpirun command line, then you can set the MCA
<br>
parameter orterun_i_promise_to_update_my_cli_options_before_ompi_1_9 to 1,
<br>
which will suppress this message.
<br>
------------------------------------------------------------------------
<br>
-----
<br>
<p>This gives the user two clear options:
<br>
<p>1. Update from -foo to --foo to be forward compatible
<br>
2. Set an MCA parameter to suppress the message, but risk not being forward compatible
<br>
<p>Then, on trunk/v1.9, we remove all the single-dash options.
<br>
<p>Comments?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Previous message:</strong> <a href="13575.php">Tobias Burnus: "[OMPI devel] [Patch] For Fortran, support GCC/gfortran 4.9's TYPE(*) with NO_ARG_CHECK"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
<li><strong>Reply:</strong> <a href="13577.php">Ralph Castain: "Re: [OMPI devel] RFC: Drop all mpirun single-dash multi-letter CLI options (except -np)"</a>
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
