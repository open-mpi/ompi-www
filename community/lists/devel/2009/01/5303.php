<?
$subject_val = "Re: [OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 26 11:45:12 2009" -->
<!-- isoreceived="20090126164512" -->
<!-- sent="Mon, 26 Jan 2009 11:45:00 -0500" -->
<!-- isosent="20090126164500" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="497DE88C.5030209_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="49707B61.7050507_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: make predefined handles extern to pointers<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-26 11:45:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5304.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5302.php">Jeff Squyres: "Re: [OMPI devel] Open MPI Extensions Interface"</a>
<li><strong>In reply to:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5304.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5304.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5323.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another update for this RFC.  It turns out that using pointers instead 
<br>
of structures as initializers would prevent someone from initializing a 
<br>
global to one of the predefined handles.  So instead, we decided to go 
<br>
the route of padding the structures to provide us with the ability to 
<br>
not overrun the bss section.
<br>
<p>I would like to discuss any objections to this solution on tomorrow's 
<br>
OMPI concall.
<br>
<p>thanks,
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Just wanted to give an update.  On a workspace with just the 
</span><br>
<span class="quotelev1">&gt; predefined communicators converted to opaque pointers I've ran netpipe 
</span><br>
<span class="quotelev1">&gt; and hpcc performance tests and compared the results before and after 
</span><br>
<span class="quotelev1">&gt; the changes.  The differences in performance with 10 sample run was 
</span><br>
<span class="quotelev1">&gt; undetectable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've also tested using comm_world that I can have an a.out compile and 
</span><br>
<span class="quotelev1">&gt; link with a non-debug version of the library and then run the a.out 
</span><br>
<span class="quotelev1">&gt; successfully with a debug version of the library.  At a simple level 
</span><br>
<span class="quotelev1">&gt; this proves that the change actually does what we believe it should.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I will be completing the rest of handles in the next couple days.  
</span><br>
<span class="quotelev1">&gt; Upon completion I will rerun the same tests above and test running 
</span><br>
<span class="quotelev1">&gt; hpcc with a debug and non-debug version of the library without 
</span><br>
<span class="quotelev1">&gt; recompiling.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I believe I am on track to putting this back to the trunk by the end 
</span><br>
<span class="quotelev1">&gt; of next week.  So if anyone has any issues with this please speak up.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev2">&gt;&gt; No specific test, just an idea how this might impact an app.  I am 
</span><br>
<span class="quotelev2">&gt;&gt; guessing it won't even be noticable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Thu Dec 18 07:13:08 2008
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] RFC: make predefined handles extern to 
</span><br>
<span class="quotelev2">&gt;&gt; pointers
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   Is there any way you can quantify the cost ?  This seems 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reasonable, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; would be nice to get an idea what the performance cost is (and not 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; within a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tight loop where everything stays in cache).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
</span><br>
<span class="quotelev2">&gt;&gt; Ok, I guess that would eliminate any of the simple perf tests like 
</span><br>
<span class="quotelev2">&gt;&gt; IMB, netperf, and such.  So do you have something else in mind, maybe 
</span><br>
<span class="quotelev2">&gt;&gt; HPCC?
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/16/08 10:41 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHAT:  To make predefined handles extern to pointers instead of an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; address of an extern to a structure.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY:  To make OMPI more backwards compatible in regards to changes to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structures that define predefined handles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; directly use the predefined handles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHEN:  01/24/2009
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; TIMEOUT:  01/10/2009
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ____________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The point of this change is to improve the odds that an MPI 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does not have to recompile when changes are made to the OMPI library.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In this case specifically the predefined handles that use the 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structures
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for communicators, groups, ops, datatypes, error handlers, win, file,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and info.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; An example of the changes for the communicator predefined handles 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; can be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; found in the hg tmp workspace at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ssh://www.open-mpi.org/~tdd/hg/predefcompat.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Note, the one downfall that Jeff and I could think of by doing this is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you potentially add one level of indirection but I believe that 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a small overhead and if you use one of the predefined handles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; repetitively (like in a loop) that the address will probably be stored
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in a register once and no additional over should be seen due to 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this change.
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
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       
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
<li><strong>Next message:</strong> <a href="5304.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5302.php">Jeff Squyres: "Re: [OMPI devel] Open MPI Extensions Interface"</a>
<li><strong>In reply to:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5304.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5304.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5323.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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
