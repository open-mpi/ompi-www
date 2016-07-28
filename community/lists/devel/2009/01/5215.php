<?
$subject_val = "Re: [OMPI devel] RFC: make predefined handles extern to pointers";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 07:19:50 2009" -->
<!-- isoreceived="20090116121950" -->
<!-- sent="Fri, 16 Jan 2009 07:19:45 -0500" -->
<!-- isosent="20090116121945" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: make predefined handles extern to pointers" -->
<!-- id="49707B61.7050507_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="537C6C0940C6C143AA46A88946B854170F0FBF4B_at_ORNLEXCHANGE.ornl.gov" -->
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
<strong>Date:</strong> 2009-01-16 07:19:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5216.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5214.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5075.php">Graham, Richard L.: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5216.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5216.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5303.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just wanted to give an update.  On a workspace with just the predefined 
<br>
communicators converted to opaque pointers I've ran netpipe and hpcc 
<br>
performance tests and compared the results before and after the 
<br>
changes.  The differences in performance with 10 sample run was 
<br>
undetectable.
<br>
<p>I've also tested using comm_world that I can have an a.out compile and 
<br>
link with a non-debug version of the library and then run the a.out 
<br>
successfully with a debug version of the library.  At a simple level 
<br>
this proves that the change actually does what we believe it should.
<br>
<p>I will be completing the rest of handles in the next couple days.  Upon 
<br>
completion I will rerun the same tests above and test running hpcc with 
<br>
a debug and non-debug version of the library without recompiling.
<br>
<p>I believe I am on track to putting this back to the trunk by the end of 
<br>
next week.  So if anyone has any issues with this please speak up.
<br>
<p>thanks,
<br>
<p>--td
<br>
<p>Graham, Richard L. wrote:
<br>
<span class="quotelev1">&gt; No specific test, just an idea how this might impact an app.  I am guessing it won't even be noticable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- Original Message -----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Sent: Thu Dec 18 07:13:08 2008
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] RFC: make predefined handles extern to pointers
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Richard Graham wrote:
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Terry,
</span><br>
<span class="quotelev2">&gt;&gt;   Is there any way you can quantify the cost ?  This seems reasonable, but
</span><br>
<span class="quotelev2">&gt;&gt; would be nice to get an idea what the performance cost is (and not within a
</span><br>
<span class="quotelev2">&gt;&gt; tight loop where everything stays in cache).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Rich
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt; Ok, I guess that would eliminate any of the simple perf tests like IMB, 
</span><br>
<span class="quotelev1">&gt; netperf, and such.  So do you have something else in mind, maybe HPCC? 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; On 12/16/08 10:41 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;   
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:  To make predefined handles extern to pointers instead of an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; address of an extern to a structure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:  To make OMPI more backwards compatible in regards to changes to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; structures that define predefined handles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:  In the trunk.  ompi/include/mpi.h.in and places in ompi that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; directly use the predefined handles.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN:  01/24/2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT:  01/10/2009
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ____________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The point of this change is to improve the odds that an MPI application
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does not have to recompile when changes are made to the OMPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In this case specifically the predefined handles that use the structures
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for communicators, groups, ops, datatypes, error handlers, win, file,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; An example of the changes for the communicator predefined handles can be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; found in the hg tmp workspace at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ssh://www.open-mpi.org/~tdd/hg/predefcompat.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Note, the one downfall that Jeff and I could think of by doing this is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you potentially add one level of indirection but I believe that will be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a small overhead and if you use one of the predefined handles
</span><br>
<span class="quotelev3">&gt;&gt;&gt; repetitively (like in a loop) that the address will probably be stored
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in a register once and no additional over should be seen due to this change.
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
<span class="quotelev3">&gt;&gt;&gt;       
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5216.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Previous message:</strong> <a href="5214.php">Jeff Squyres: "Re: [OMPI devel] RFC: Eliminate opal_round_up_to_nearest_pow2()"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2008/12/5075.php">Graham, Richard L.: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5216.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5216.php">Jeff Squyres: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
<li><strong>Reply:</strong> <a href="5303.php">Terry Dontje: "Re: [OMPI devel] RFC: make predefined handles extern to pointers"</a>
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
