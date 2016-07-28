<?
$subject_val = "[OMPI devel] BML problem?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 11 21:32:03 2008" -->
<!-- isoreceived="20081212023203" -->
<!-- sent="Thu, 11 Dec 2008 18:35:45 -0800" -->
<!-- isosent="20081212023545" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="[OMPI devel] BML problem?" -->
<!-- id="4941CE01.8040709_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] BML problem?<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-11 21:35:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Reply:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Reply:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not exactly sure where the fix to this should be, but I think I've 
<br>
found a problem.
<br>
<p>Consider, for illustration, launching a multi-process job on a single 
<br>
node.  The function
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_add_procs()
<br>
<p>calls
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mca_btl_sm_add_procs()
<br>
<p>Each process could conceivably return a different value -- OMPI_SUCCESS 
<br>
or otherwise.  E.g., if there isn't enough room for all to allocate all 
<br>
the shared memory they need, early processes might succeed in their 
<br>
allocations while laggards won't.
<br>
<p>The fact that some processes fail doesn't bother the BML.  It just loops 
<br>
over other BTLs and, quite possibly, finds another BTL to make needed 
<br>
connections.
<br>
<p>Is this a problem?  It seems to me to be, but I haven't yet figured out 
<br>
what the BML does next.  I'm guessing it ends up with a hodgepodge of 
<br>
BTLs.  E.g., A talks to B via sm, but B talks to A via tcp.  And, I'm 
<br>
still guessing, this produces badness (like hangs).
<br>
<p>Comments?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5048.php">Jeff Squyres: "Re: [OMPI devel] shared-memory allocations"</a>
<li><strong>Previous message:</strong> <a href="5046.php">George Bosilca: "Re: [OMPI devel] Fwd: [OMPI users] Onesided + derived datatypes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Reply:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI devel] BML problem?"</a>
<li><strong>Reply:</strong> <a href="5056.php">George Bosilca: "Re: [OMPI devel] BML problem?"</a>
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
