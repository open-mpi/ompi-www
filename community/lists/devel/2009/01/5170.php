<?
$subject_val = "Re: [OMPI devel] reduce_scatter bug with hierarch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 00:15:16 2009" -->
<!-- isoreceived="20090114051516" -->
<!-- sent="Wed, 14 Jan 2009 00:15:09 -0500" -->
<!-- isosent="20090114051509" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reduce_scatter bug with hierarch" -->
<!-- id="509B6C9D-F3CF-48D0-946D-73B1087FBEE5_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2C796789-AB40-49F4-AB13-361BED328209_at_cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 00:15:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5169.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5174.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5174.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here we go by the book :)
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/1749">https://svn.open-mpi.org/trac/ompi/ticket/1749</a>
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 13, 2009, at 23:40 , Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Let's debate tomorrow when people are around, but first you have to  
</span><br>
<span class="quotelev1">&gt; file a CMR... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 10:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately, this pinpoint the fact that we didn't test enough  
</span><br>
<span class="quotelev2">&gt;&gt; the collective module mixing thing. I went over the tuned  
</span><br>
<span class="quotelev2">&gt;&gt; collective functions and changed all instances to use the correct  
</span><br>
<span class="quotelev2">&gt;&gt; module information. It is now on the trunk, revision 20267.  
</span><br>
<span class="quotelev2">&gt;&gt; Simultaneously,I checked that all other collective components do  
</span><br>
<span class="quotelev2">&gt;&gt; the right thing ... and I have to admit tuned was the only faulty  
</span><br>
<span class="quotelev2">&gt;&gt; one.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is clearly a bug in the tuned, and correcting it will allow  
</span><br>
<span class="quotelev2">&gt;&gt; people to use the hierarch. In the current incarnation 1.3 will  
</span><br>
<span class="quotelev2">&gt;&gt; mostly/always segfault when hierarch is active. I would prefer not  
</span><br>
<span class="quotelev2">&gt;&gt; to give a broken toy out there. How about pushing r20267 in the 1.3?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2009, at 20:13 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for digging into this.  Can you file a bug?  Let's mark it  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for v1.3.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I say 1.3.1 instead of 1.3.0 because this *only* affects hierarch,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and since hierarch isn't currently selected by default (you must  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; specifically elevate hierarch's priority to get it to run),  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there's no danger that users will run into this problem in default  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But clearly the problem needs to be fixed, and therefore we need a  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; bug to track it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 13, 2009, at 2:09 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I just debugged the Reduce_scatter bug mentioned previously. The  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; bug is unfortunately not in hierarch, but in tuned.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here is the code snipplet causing the problems:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; int reduce_scatter (...., mca_coll_base_module_t *module)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; err = comm-&gt;c_coll.coll_reduce (...., module)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but should be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; err = comm-&gt;c_coll.coll_reduce (..., comm- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt; &gt;c_coll.coll_reduce_module);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The problem as it is right now is, that when using hierarch, only  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a subset of the function are set, e.g. reduce,allreduce, bcast  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and barrier. Thus, reduce_scatter is from tuned in most  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; scenarios, and calls the subsequent functions with the wrong  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; module. Hierarch of course does not like that :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Anyway, a quick glance through the tuned code reveals a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; significant number of instances where this  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; appears(reduce_scatter, allreduce, allgather, allgatherv). Basic,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; hierarch and inter seem to do that mostly correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="5171.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5169.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5168.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5174.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5174.php">Tim Mattox: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
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
