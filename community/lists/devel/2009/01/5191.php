<?
$subject_val = "Re: [OMPI devel] reduce_scatter bug with hierarch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 13:11:42 2009" -->
<!-- isoreceived="20090114181142" -->
<!-- sent="Wed, 14 Jan 2009 13:11:35 -0500" -->
<!-- isosent="20090114181135" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reduce_scatter bug with hierarch" -->
<!-- id="2D9CA1CE-87AF-4B69-AC94-8DB977DF2ED1_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="496E2918.3020102_at_cs.uh.edu" -->
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
<strong>Date:</strong> 2009-01-14 13:11:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5190.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5187.php">Edgar Gabriel: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5194.php">Brad Benton: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case a parallel debugger is not available, I'm using mpirun  
<br>
*blahblah* xterm -e gdb [app_name] and this works pretty well as long  
<br>
as the ssh forward the X11 display.
<br>
<p>&nbsp;&nbsp;&nbsp;Hope this helps,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jan 14, 2009, at 13:04 , Edgar Gabriel wrote:
<br>
<p><span class="quotelev1">&gt; I'm already debugging it. the good news is that it only seems to  
</span><br>
<span class="quotelev1">&gt; appear with trunk, with 1.3 (after copying the new tuned module  
</span><br>
<span class="quotelev1">&gt; over), all the tests pass.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now if somebody can tell me a trick on how to tell mpirun not kill  
</span><br>
<span class="quotelev1">&gt; the debugger under my feet, then I could even see where the problem  
</span><br>
<span class="quotelev1">&gt; occurs:-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; All these errors are in the MPI_Finalize, it should not be that  
</span><br>
<span class="quotelev2">&gt;&gt; hard to find. I'll take a look later this afternoon.
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 14, 2009, at 06:41 , Tim Mattox wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, although this fixed some problems when enabling  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hierarch coll,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; there is still a segfault in two of IU's tests that only shows up  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; when we set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca coll_hierarch_priority 100
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; See this MTT summary to see how the failures improved on the trunk,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but that there are still two that segfault even at 1.4a1r20267:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=923">http://www.open-mpi.org/mtt/index.php?do_redir=923</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This link just has the remaining failures:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mtt/index.php?do_redir=922">http://www.open-mpi.org/mtt/index.php?do_redir=922</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, I'll vote for applying the CMR for 1.3 since it clearly  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; improved things,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but there is still more to be done to get coll_hierarch ready for  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; regular
</span><br>
<span class="quotelev3">&gt;&gt;&gt; use.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Jan 14, 2009 at 12:15 AM, George Bosilca &lt;bosilca_at_[hidden] 
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Here we go by the book :)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1749">https://svn.open-mpi.org/trac/ompi/ticket/1749</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 13, 2009, at 23:40 , Jeff Squyres wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Let's debate tomorrow when people are around, but first you have  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; to file a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; CMR... :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Jan 13, 2009, at 10:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Unfortunately, this pinpoint the fact that we didn't test  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; enough the
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; collective module mixing thing. I went over the tuned  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; collective functions
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; and changed all instances to use the correct module  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; information. It is now
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; on the trunk, revision 20267. Simultaneously,I checked that all  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; other
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; collective components do the right thing ... and I have to  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; admit tuned was
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; the only faulty one.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; This is clearly a bug in the tuned, and correcting it will  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; allow people
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; to use the hierarch. In the current incarnation 1.3 will mostly/ 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; always
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; segfault when hierarch is active. I would prefer not to give a  
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; broken toy
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; out there. How about pushing r20267 in the 1.3?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; george.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; On Jan 13, 2009, at 20:13 , Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks for digging into this.  Can you file a bug?  Let's mark  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it for
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; v1.3.1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I say 1.3.1 instead of 1.3.0 because this *only* affects  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; hierarch, and
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; since hierarch isn't currently selected by default (you must  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; specifically
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; elevate hierarch's priority to get it to run), there's no  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; danger that users
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; will run into this problem in default runs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; But clearly the problem needs to be fixed, and therefore we  
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; need a bug
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; to track it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jan 13, 2009, at 2:09 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I just debugged the Reduce_scatter bug mentioned previously.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The bug is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; unfortunately not in hierarch, but in tuned.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Here is the code snipplet causing the problems:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; int reduce_scatter (...., mca_coll_base_module_t *module)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; err = comm-&gt;c_coll.coll_reduce (...., module)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; but should be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; err = comm-&gt;c_coll.coll_reduce (..., comm- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; &gt;c_coll.coll_reduce_module);
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The problem as it is right now is, that when using hierarch,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; only a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subset of the function are set, e.g. reduce,allreduce, bcast  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; and barrier.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thus, reduce_scatter is from tuned in most scenarios, and  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; calls the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; subsequent functions with the wrong module. Hierarch of  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; course does not like
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; that :-)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Anyway, a quick glance through the tuned code reveals a  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; significant
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; number of instances where this appears(reduce_scatter,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allreduce, allgather,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; allgatherv). Basic, hierarch and inter seem to do that mostly  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tmattox_at_[hidden] || timattox_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5192.php">Eugene Loh: "Re: [OMPI devel] autosizing the shared memory backing file"</a>
<li><strong>Previous message:</strong> <a href="5190.php">Jeff Squyres: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>In reply to:</strong> <a href="5187.php">Edgar Gabriel: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5194.php">Brad Benton: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
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
