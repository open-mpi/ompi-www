<?
$subject_val = "Re: [OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 07:38:14 2009" -->
<!-- isoreceived="20090116123814" -->
<!-- sent="Fri, 16 Jan 2009 07:38:07 -0500" -->
<!-- isosent="20090116123807" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="8830C462-103C-4DE3-9952-AEA15E6B7AA9_at_cisco.com" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-16 07:38:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5217.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>In reply to:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5303.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
w00t.
<br>
<p>(translation: I believe that this is a Good Thing and should be put  
<br>
back to the trunk when ready)
<br>
<p><p>On Jan 16, 2009, at 7:19 AM, Terry Dontje wrote:
<br>
<p><span class="quotelev1">&gt; Just wanted to give an update.  On a workspace with just the  
</span><br>
<span class="quotelev1">&gt; predefined communicators converted to opaque pointers I've ran  
</span><br>
<span class="quotelev1">&gt; netpipe and hpcc performance tests and compared the results before  
</span><br>
<span class="quotelev1">&gt; and after the changes.  The differences in performance with 10  
</span><br>
<span class="quotelev1">&gt; sample run was undetectable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've also tested using comm_world that I can have an a.out compile  
</span><br>
<span class="quotelev1">&gt; and link with a non-debug version of the library and then run the  
</span><br>
<span class="quotelev1">&gt; a.out successfully with a debug version of the library.  At a simple  
</span><br>
<span class="quotelev1">&gt; level this proves that the change actually does what we believe it  
</span><br>
<span class="quotelev1">&gt; should.
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
<span class="quotelev3">&gt;&gt;&gt;  Is there any way you can quantify the cost ?  This seems  
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
<span class="quotelev2">&gt;&gt; IMB, netperf, and such.  So do you have something else in mind,  
</span><br>
<span class="quotelev2">&gt;&gt; maybe HPCC?
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 12/16/08 10:41 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt;  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
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
<span class="quotelev4">&gt;&gt;&gt;&gt; WHY:  To make OMPI more backwards compatible in regards to  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; changes to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structures that define predefined handles.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; that
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
<span class="quotelev4">&gt;&gt;&gt;&gt; does not have to recompile when changes are made to the OMPI  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; library.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In this case specifically the predefined handles that use the  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; structures
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; for communicators, groups, ops, datatypes, error handlers, win,  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; file,
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
<span class="quotelev4">&gt;&gt;&gt;&gt; Note, the one downfall that Jeff and I could think of by doing  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; this is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; you potentially add one level of indirection but I believe that  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; will be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a small overhead and if you use one of the predefined handles
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; repetitively (like in a loop) that the address will probably be  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; stored
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5217.php">Jeff Squyres: "Re: [OMPI devel] Open MPI v1.3rc7 has been posted"</a>
<li><strong>Previous message:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>In reply to:</strong> <a href="5215.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5303.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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
