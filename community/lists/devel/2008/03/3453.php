<?
$subject_val = "Re: [OMPI devel] rankfile questions";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 10:39:35 2008" -->
<!-- isoreceived="20080318143935" -->
<!-- sent="Tue, 18 Mar 2008 10:39:00 -0400" -->
<!-- isosent="20080318143900" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] rankfile questions" -->
<!-- id="BDCB9472-5D8E-4826-A858-88D4C481FA1E_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3A3BFE61-63F1-47B7-96E1-3793360E1F02_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] rankfile questions<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 10:39:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3454.php">Josh Hursey: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Previous message:</strong> <a href="3452.php">Jeff Squyres: "[OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3452.php">Jeff Squyres: "[OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3471.php">Ralph Castain: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Reply:</strong> <a href="3471.php">Ralph Castain: "Re: [OMPI devel] rankfile questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 18, 2008, at 9:32 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; I notice that rankfile didn't compile properly on some platforms and
</span><br>
<span class="quotelev1">&gt; issued warnings on other platforms.  Thanks to Ralph for cleaning it
</span><br>
<span class="quotelev1">&gt; up...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. I see a getenv(&quot;slot_list&quot;) in the MPI side of the code; it looks
</span><br>
<span class="quotelev1">&gt; like $slot_list is set by the odls for the MPI process.  Why isn't it
</span><br>
<span class="quotelev1">&gt; an MCA parameter?  That's what all other values passed by the orted to
</span><br>
<span class="quotelev1">&gt; the MPI process appear to be.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. I see that ompi_mpi_params.c is now registering 2 rmaps-level MCA
</span><br>
<span class="quotelev1">&gt; parameters.  Why?  Shouldn't these be in ORTE somewhere?
</span><br>
<p><p>A few more notes:
<br>
<p>3. Most of the files in orte/mca/rmaps/rankfile do not obey the prefix  
<br>
rule.  I think that they should be renamed.
<br>
<p>4. A quick look through rankfile_lex.l seems to show that there are  
<br>
global variables that are not protected by the prefix rule (or  
<br>
static).  Ditto in rmaps_rf.c.  These should be fixed.
<br>
<p>5. rank_file_done was instantiated in both rankfile_lex.l and  
<br>
ramps_rf.c (causing a duplicate symbol linker error on OS X).  I  
<br>
removed it from rmaps_rf.c (it was declared &quot;extern&quot; in  
<br>
rankfile_lex.h, assumedly to indicate that it is &quot;owned&quot; by the lex.l  
<br>
file...?).
<br>
<p>6. svn:ignore was not set in the new rankfile directory.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3454.php">Josh Hursey: "Re: [OMPI devel] xensocket btl and migration"</a>
<li><strong>Previous message:</strong> <a href="3452.php">Jeff Squyres: "[OMPI devel] rankfile questions"</a>
<li><strong>In reply to:</strong> <a href="3452.php">Jeff Squyres: "[OMPI devel] rankfile questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3471.php">Ralph Castain: "Re: [OMPI devel] rankfile questions"</a>
<li><strong>Reply:</strong> <a href="3471.php">Ralph Castain: "Re: [OMPI devel] rankfile questions"</a>
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
