<?
$subject_val = "Re: [OMPI devel] reduce_scatter bug with hierarch";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 14 06:41:39 2009" -->
<!-- isoreceived="20090114114139" -->
<!-- sent="Wed, 14 Jan 2009 06:41:34 -0500" -->
<!-- isosent="20090114114134" -->
<!-- name="Tim Mattox" -->
<!-- email="timattox_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] reduce_scatter bug with hierarch" -->
<!-- id="ea86ce220901140341w6c09c69cr88deb5845fbc1898_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="509B6C9D-F3CF-48D0-946D-73B1087FBEE5_at_eecs.utk.edu" -->
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
<strong>From:</strong> Tim Mattox (<em>timattox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-14 06:41:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5173.php">Matthias Jurenz: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>In reply to:</strong> <a href="5170.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5186.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5186.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, although this fixed some problems when enabling hierarch coll,
<br>
there is still a segfault in two of IU's tests that only shows up when we set
<br>
-mca coll_hierarch_priority 100
<br>
<p>See this MTT summary to see how the failures improved on the trunk,
<br>
but that there are still two that segfault even at 1.4a1r20267:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=923">http://www.open-mpi.org/mtt/index.php?do_redir=923</a>
<br>
<p>This link just has the remaining failures:
<br>
<a href="http://www.open-mpi.org/mtt/index.php?do_redir=922">http://www.open-mpi.org/mtt/index.php?do_redir=922</a>
<br>
<p>So, I'll vote for applying the CMR for 1.3 since it clearly improved things,
<br>
but there is still more to be done to get coll_hierarch ready for regular
<br>
use.
<br>
<p>On Wed, Jan 14, 2009 at 12:15 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Here we go by the book :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/1749">https://svn.open-mpi.org/trac/ompi/ticket/1749</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 13, 2009, at 23:40 , Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Let's debate tomorrow when people are around, but first you have to file a
</span><br>
<span class="quotelev2">&gt;&gt; CMR... :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jan 13, 2009, at 10:28 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately, this pinpoint the fact that we didn't test enough the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective module mixing thing. I went over the tuned collective functions
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and changed all instances to use the correct module information. It is now
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on the trunk, revision 20267. Simultaneously,I checked that all other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; collective components do the right thing ... and I have to admit tuned was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the only faulty one.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is clearly a bug in the tuned, and correcting it will allow people
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to use the hierarch. In the current incarnation 1.3 will mostly/always
</span><br>
<span class="quotelev3">&gt;&gt;&gt; segfault when hierarch is active. I would prefer not to give a broken toy
</span><br>
<span class="quotelev3">&gt;&gt;&gt; out there. How about pushing r20267 in the 1.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jan 13, 2009, at 20:13 , Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for digging into this.  Can you file a bug?  Let's mark it for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; v1.3.1.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I say 1.3.1 instead of 1.3.0 because this *only* affects hierarch, and
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; since hierarch isn't currently selected by default (you must specifically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; elevate hierarch's priority to get it to run), there's no danger that users
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will run into this problem in default runs.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; But clearly the problem needs to be fixed, and therefore we need a bug
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to track it.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jan 13, 2009, at 2:09 PM, Edgar Gabriel wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I just debugged the Reduce_scatter bug mentioned previously. The bug is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unfortunately not in hierarch, but in tuned.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Here is the code snipplet causing the problems:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int reduce_scatter (...., mca_coll_base_module_t *module)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; err = comm-&gt;c_coll.coll_reduce (...., module)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but should be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; err = comm-&gt;c_coll.coll_reduce (..., comm-&gt;c_coll.coll_reduce_module);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The problem as it is right now is, that when using hierarch, only a
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subset of the function are set, e.g. reduce,allreduce, bcast and barrier.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thus, reduce_scatter is from tuned in most scenarios, and calls the
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; subsequent functions with the wrong module. Hierarch of course does not like
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; that :-)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Anyway, a quick glance through the tuned code reveals a significant
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; number of instances where this appears(reduce_scatter, allreduce, allgather,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; allgatherv). Basic, hierarch and inter seem to do that mostly correctly.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Assistant Professor
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
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
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
Tim Mattox, Ph.D. - <a href="http://homepage.mac.com/tmattox/">http://homepage.mac.com/tmattox/</a>
 tmattox_at_[hidden] || timattox_at_[hidden]
    I'm a bright... <a href="http://www.the-brights.net/">http://www.the-brights.net/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5175.php">Tim Mattox: "Re: [OMPI devel] RFC: Fragmented sm Allocations"</a>
<li><strong>Previous message:</strong> <a href="5173.php">Matthias Jurenz: "Re: [OMPI devel] OpenMPI rpm build 1.3rc3r20226 build failed"</a>
<li><strong>In reply to:</strong> <a href="5170.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5186.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
<li><strong>Reply:</strong> <a href="5186.php">George Bosilca: "Re: [OMPI devel] reduce_scatter bug with hierarch"</a>
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
