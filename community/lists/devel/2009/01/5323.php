<?
$subject_val = "Re: [OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 28 07:35:49 2009" -->
<!-- isoreceived="20090128123549" -->
<!-- sent="Wed, 28 Jan 2009 07:35:43 -0500" -->
<!-- isosent="20090128123543" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="4980511F.6090405_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="497DE88C.5030209_at_sun.com" -->
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
<strong>Date:</strong> 2009-01-28 07:35:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5324.php">Lenny Verkhovsky: "Re: [OMPI devel] BTL/sm meeting on Wed after Forum"</a>
<li><strong>Previous message:</strong> <a href="5322.php">Jeff Squyres: "[OMPI devel] Fun web site stats"</a>
<li><strong>In reply to:</strong> <a href="5303.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Per yesterday's concall I did some experiments with the padding changes 
<br>
and looking at MPI_Comm structures in dbx.  I believe the concern from 
<br>
George Bosilca was that using the padding changes you wouldn't be able 
<br>
to print out the structures values.
<br>
<p>What I found with dbx and Sun Studio is that prior to call MPI_Init the 
<br>
ompi_communicator_t forward reference was unresolved so any attempt t 
<br>
print a communicator structure failed because the structure was 
<br>
undefined.  However once MPI_Init was called the communicator structure 
<br>
printed out fine and exactly the same as the non-padded implementation.
<br>
<p>I believe non-padded implementation worked because there was extern 
<br>
struct ompi_communicator_t that was resolved to the library which I 
<br>
imagine pulled in the real structure definition.   One could probably 
<br>
force the same for the padded implementation by defining dummy 
<br>
structures that can be externed in mpi.h.  To me this seems gross 
<br>
however I wonder does it actually makes sense to print out an MPI 
<br>
communicator before MPI_Init is called?  The values of the field should 
<br>
be either 0 or garbage.  So I am really curious if the above is a 
<br>
problem anyways.
<br>
<p>--td
<br>
<p>Terry Dontje wrote:
<br>
<span class="quotelev1">&gt; Another update for this RFC.  It turns out that using pointers instead 
</span><br>
<span class="quotelev1">&gt; of structures as initializers would prevent someone from initializing 
</span><br>
<span class="quotelev1">&gt; a global to one of the predefined handles.  So instead, we decided to 
</span><br>
<span class="quotelev1">&gt; go the route of padding the structures to provide us with the ability 
</span><br>
<span class="quotelev1">&gt; to not overrun the bss section.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would like to discuss any objections to this solution on tomorrow's 
</span><br>
<span class="quotelev1">&gt; OMPI concall.
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
<span class="quotelev1">&gt; Terry Dontje wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Just wanted to give an update.  On a workspace with just the 
</span><br>
<span class="quotelev2">&gt;&gt; predefined communicators converted to opaque pointers I've ran 
</span><br>
<span class="quotelev2">&gt;&gt; netpipe and hpcc performance tests and compared the results before 
</span><br>
<span class="quotelev2">&gt;&gt; and after the changes.  The differences in performance with 10 sample 
</span><br>
<span class="quotelev2">&gt;&gt; run was undetectable.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've also tested using comm_world that I can have an a.out compile 
</span><br>
<span class="quotelev2">&gt;&gt; and link with a non-debug version of the library and then run the 
</span><br>
<span class="quotelev2">&gt;&gt; a.out successfully with a debug version of the library.  At a simple 
</span><br>
<span class="quotelev2">&gt;&gt; level this proves that the change actually does what we believe it 
</span><br>
<span class="quotelev2">&gt;&gt; should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I will be completing the rest of handles in the next couple days.  
</span><br>
<span class="quotelev2">&gt;&gt; Upon completion I will rerun the same tests above and test running 
</span><br>
<span class="quotelev2">&gt;&gt; hpcc with a debug and non-debug version of the library without 
</span><br>
<span class="quotelev2">&gt;&gt; recompiling.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I believe I am on track to putting this back to the trunk by the end 
</span><br>
<span class="quotelev2">&gt;&gt; of next week.  So if anyone has any issues with this please speak up.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --td
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Graham, Richard L. wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; No specific test, just an idea how this might impact an app.  I am 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guessing it won't even be noticable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sent: Thu Dec 18 07:13:08 2008
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI devel] RFC: make predefined handles extern to 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pointers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Richard Graham wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Terry,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;   Is there any way you can quantify the cost ?  This seems 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reasonable, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; would be nice to get an idea what the performance cost is (and not 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; within a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tight loop where everything stays in cache).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Rich
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ok, I guess that would eliminate any of the simple perf tests like 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; IMB, netperf, and such.  So do you have something else in mind, 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; maybe HPCC?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --td
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 12/16/08 10:41 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHAT:  To make predefined handles extern to pointers instead of an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; address of an extern to a structure.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHY:  To make OMPI more backwards compatible in regards to changes to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; structures that define predefined handles.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi that
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; directly use the predefined handles.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; WHEN:  01/24/2009
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; TIMEOUT:  01/10/2009
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ____________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; The point of this change is to improve the odds that an MPI 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; application
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not have to recompile when changes are made to the OMPI library.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; In this case specifically the predefined handles that use the 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; structures
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for communicators, groups, ops, datatypes, error handlers, win, file,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and info.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; An example of the changes for the communicator predefined handles 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; can be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; found in the hg tmp workspace at
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ssh://www.open-mpi.org/~tdd/hg/predefcompat.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Note, the one downfall that Jeff and I could think of by doing 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; you potentially add one level of indirection but I believe that 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; will be
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a small overhead and if you use one of the predefined handles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; repetitively (like in a loop) that the address will probably be 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; stored
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in a register once and no additional over should be seen due to 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; this change.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;           
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
<li><strong>Next message:</strong> <a href="5324.php">Lenny Verkhovsky: "Re: [OMPI devel] BTL/sm meeting on Wed after Forum"</a>
<li><strong>Previous message:</strong> <a href="5322.php">Jeff Squyres: "[OMPI devel] Fun web site stats"</a>
<li><strong>In reply to:</strong> <a href="5303.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5338.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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
