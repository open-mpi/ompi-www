<?
$subject_val = "Re: [OMPI devel] reduce_scatter bug with hierarch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 13 20:13:23 2009" -->
<!-- isoreceived="20090114011323" -->
<!-- sent="Tue, 13 Jan 2009 20:13:15 -0500" -->
<!-- isosent="20090114011315" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reduce_scatter bug with hierarch" -->
<!-- id="E0C0EE09-C374-48BB-A881-28C2DAD040C0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496CE6F7.8080200_at_cs.uh.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] reduce_scatter bug with hierarch<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-13 20:13:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5157.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5139.php">Edgar Gabriel: "[OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5167.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5167.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for digging into this.  Can you file a bug?  Let's mark it for  
<br>
v1.3.1.
<br>
<p>I say 1.3.1 instead of 1.3.0 because this *only* affects hierarch, and  
<br>
since hierarch isn't currently selected by default (you must  
<br>
specifically elevate hierarch's priority to get it to run), there's no  
<br>
danger that users will run into this problem in default runs.
<br>
<p>But clearly the problem needs to be fixed, and therefore we need a bug  
<br>
to track it.
<br>
<p><p><p>On Jan 13, 2009, at 2:09 PM, Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; I just debugged the Reduce_scatter bug mentioned previously. The bug  
</span><br>
<span class="quotelev1">&gt; is unfortunately not in hierarch, but in tuned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is the code snipplet causing the problems:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int reduce_scatter (...., mca_coll_base_module_t *module)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;   err = comm-&gt;c_coll.coll_reduce (...., module)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; but should be
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;  err = comm-&gt;c_coll.coll_reduce (..., comm- 
</span><br>
<span class="quotelev2">&gt; &gt;c_coll.coll_reduce_module);
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem as it is right now is, that when using hierarch, only a  
</span><br>
<span class="quotelev1">&gt; subset of the function are set, e.g. reduce,allreduce, bcast and  
</span><br>
<span class="quotelev1">&gt; barrier. Thus, reduce_scatter is from tuned in most scenarios, and  
</span><br>
<span class="quotelev1">&gt; calls the subsequent functions with the wrong module. Hierarch of  
</span><br>
<span class="quotelev1">&gt; course does not like that :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, a quick glance through the tuned code reveals a significant  
</span><br>
<span class="quotelev1">&gt; number of instances where this appears(reduce_scatter, allreduce,  
</span><br>
<span class="quotelev1">&gt; allgather, allgatherv). Basic, hierarch and inter seem to do that  
</span><br>
<span class="quotelev1">&gt; mostly correctly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5159.php">George Bosilca: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5157.php">Jeff Squyres: "Re: [OMPI devel] FLOSS Weekly and comment about Mercurial"</a>
<li><strong>In reply to:</strong> <a href="5139.php">Edgar Gabriel: "[OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5167.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5167.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
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
