<?
$subject_val = "Re: [OMPI devel] question to OMPI_DECLSPEC";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 26 12:33:25 2014" -->
<!-- isoreceived="20141126173325" -->
<!-- sent="Wed, 26 Nov 2014 11:33:28 -0600" -->
<!-- isosent="20141126173328" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question to OMPI_DECLSPEC" -->
<!-- id="54760EE8.3070507_at_cs.uh.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAMJJpkVcewhe=5PaQuJ6Z3G0TvqAKjtprhji466gadGPaEqEUg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] question to OMPI_DECLSPEC<br>
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-26 12:33:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16361.php">George Bosilca: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16361.php">George Bosilca: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/26/2014 11:02 AM, George Bosilca wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We had similar problems in the PML V, and we decided to try to minimize
</span><br>
<span class="quotelev1">&gt; the increase in size of the main library. Thus, instead of moving
</span><br>
<span class="quotelev1">&gt; everything in the base, we added a structure in the base that will
</span><br>
<span class="quotelev1">&gt; contain all the pointer to the functions we would need. This structure
</span><br>
<span class="quotelev1">&gt; is only initialized when our main module is loaded, and all sub-modules
</span><br>
<span class="quotelev1">&gt; will use this structure to get access to the pointers provided.
</span><br>
<p>That is an interesting option, let me think about it. What it would give 
<br>
us is that we do not have artificially 'force' some code into the base 
<br>
of other frameworks, since in my opinion the ompio component is still 
<br>
the best place for these functions.
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    George.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;     &gt;
</span><br>
<span class="quotelev2">&gt;     &gt; 2. I will have to extend the io framework interfaces a bit ( I will try to minimize the number of new function as much as I can), but those function pointers will be NULL for ROMIO. Just want to make sure this is ok with everybody.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I&#146;ll have to let others chime in here, but that would seem to fit
</span><br>
<span class="quotelev1">&gt;     the OMPI architecture.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Thanks
</span><br>
<span class="quotelev2">&gt;      &gt; Edgar
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; On 11/25/2014 11:43 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; On Nov 25, 2014, at 9:36 AM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; On 11/25/2014 11:31 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; On Nov 25, 2014, at 8:24 AM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; On 11/25/2014 10:18 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; Hmmm&#133;no, nothing has changed with regard to declspec that I know
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; about. I&#146;ll ask the obvious things to check:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; * does that component have the proper include to find this
</span><br>
<span class="quotelev1">&gt;     function?
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; Could be that it used to be found thru some chain, but the
</span><br>
<span class="quotelev1">&gt;     chain is
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; now broken and it needs to be directly included
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; header is included, I double checked.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; * is that function in the base code, or down in a component?
</span><br>
<span class="quotelev1">&gt;     If the
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; latter, then that&#146;s a problem, but I&#146;m assuming you didn&#146;t
</span><br>
<span class="quotelev1">&gt;     make that
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; mistake.
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; I am not sure what you mean. The function is in a component,
</span><br>
<span class="quotelev1">&gt;     but I am
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; not aware that it is illegal to call a function of a
</span><br>
<span class="quotelev1">&gt;     component from
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; another component.
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; Of course that is illegal - you can only access a function via the
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; framework interface, not directly. You have no way of knowing
</span><br>
<span class="quotelev1">&gt;     that the
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; other component has been loaded. Doing it directly violates the
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; abstraction rules.
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; well, ok. I know that the other componen has been loaded
</span><br>
<span class="quotelev1">&gt;     because that component triggered the initialization of these
</span><br>
<span class="quotelev1">&gt;     sub-frameworks.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; I think we&#146;ve seen that before, and run into problems with that
</span><br>
<span class="quotelev1">&gt;     approach (i.e., components calling framework opens).
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; I can move that functionality to the base, however, none of the
</span><br>
<span class="quotelev1">&gt;     20+ functions are required for the other components of the io
</span><br>
<span class="quotelev1">&gt;     framework (i.e. ROMIO). So I would basically add functionality
</span><br>
<span class="quotelev1">&gt;     required for one component only into the base.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Sounds like you&#146;ve got an abstraction problem. If the fcoll
</span><br>
<span class="quotelev1">&gt;     component requires certain functions from another framework, then
</span><br>
<span class="quotelev1">&gt;     the framework should be exposing those APIs. If ROMIO doesn&#146;t
</span><br>
<span class="quotelev1">&gt;     provide them, then it needs to return an error if someone attempts
</span><br>
<span class="quotelev1">&gt;     to call it.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; You are welcome to bring this up on next week&#146;s call if you
</span><br>
<span class="quotelev1">&gt;     like. IIRC, this has come up before when people have tried this hard
</span><br>
<span class="quotelev1">&gt;     links between components. Maybe someone else will have a better
</span><br>
<span class="quotelev1">&gt;     solution, but is just seems to me like you have to go thru the
</span><br>
<span class="quotelev1">&gt;     framework to avoid the problem.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Nevertheless, I think the original question is still valid. We
</span><br>
<span class="quotelev1">&gt;     did not see this problem before, but it is now showing on all of our
</span><br>
<span class="quotelev1">&gt;     platforms, and I am still wandering that is the case. I *know* that
</span><br>
<span class="quotelev1">&gt;     the ompio component is loaded, and I still get the error message
</span><br>
<span class="quotelev1">&gt;     about the missing symbol from the ompio component. I do not
</span><br>
<span class="quotelev1">&gt;     understand why that happens.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Probably because the fcoll component didn&#146;t explicitly link
</span><br>
<span class="quotelev1">&gt;     against the ompio component. You were likely getting away with it
</span><br>
<span class="quotelev1">&gt;     out of pure luck.
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Nov 25, 2014, at 8:07 AM, Edgar Gabriel
</span><br>
<span class="quotelev1">&gt;     &lt;gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; &lt;mailto:gabriel_at_[hidden] &lt;mailto:gabriel_at_[hidden]&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; Has something changed recently on the trunk/master regarding
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_DECLSPEC? The reason I ask is because we get now
</span><br>
<span class="quotelev1">&gt;     errors about
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; unresolved symbols, e.g.
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; symbol lookup error:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; /home/gabriel/OpenMPI/lib64/openmpi/mca_fcoll_dynamic.so:
</span><br>
<span class="quotelev1">&gt;     undefined
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; and that problem was not there roughly two weeks back the
</span><br>
<span class="quotelev1">&gt;     last time
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; I tested. I did verify that the the function listed there
</span><br>
<span class="quotelev1">&gt;     has an
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI_DECLSPEC before its definition.
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks Edgar -- Edgar Gabriel Associate Professor Parallel
</span><br>
<span class="quotelev1">&gt;     Software
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; Science          University of Houston Philip G. Hoffman
</span><br>
<span class="quotelev1">&gt;     Hall, Room
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; 524        Houston, TX-77204, USA Tel: +1 (713) 743-3857
</span><br>
<span class="quotelev1">&gt;     &lt;tel:%2B1%20%28713%29%20743-3857&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel
</span><br>
<span class="quotelev1">&gt;     mailing list
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt; Subscription:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; post:
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16332.php">http://www.open-mpi.org/community/lists/devel/2014/11/16332.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel
</span><br>
<span class="quotelev1">&gt;     mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;Subscription:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to
</span><br>
<span class="quotelev1">&gt;     this post:
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16333.php">http://www.open-mpi.org/community/lists/devel/2014/11/16333.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; &lt;<a href="http://pstl.cs.uh.edu/">http://pstl.cs.uh.edu/</a>&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Tel: +1 (713) 743-3857 &lt;tel:%2B1%20%28713%29%20743-3857&gt;
</span><br>
<span class="quotelev1">&gt;                  Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev2">&gt;      &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;     post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16334.php">http://www.open-mpi.org/community/lists/devel/2014/11/16334.php</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16336.php">http://www.open-mpi.org/community/lists/devel/2014/11/16336.php</a>
</span><br>
<span class="quotelev1">&gt;      &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Associate Professor
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Tel: +1 (713) 743-3857 &lt;tel:%2B1%20%28713%29%20743-3857&gt;
</span><br>
<span class="quotelev1">&gt;                Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;      &gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16338.php">http://www.open-mpi.org/community/lists/devel/2014/11/16338.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16339.php">http://www.open-mpi.org/community/lists/devel/2014/11/16339.php</a>
</span><br>
<span class="quotelev3">&gt;      &gt;&gt;
</span><br>
<span class="quotelev2">&gt;      &gt;
</span><br>
<span class="quotelev2">&gt;      &gt; --
</span><br>
<span class="quotelev2">&gt;      &gt; Edgar Gabriel
</span><br>
<span class="quotelev2">&gt;      &gt; Associate Professor
</span><br>
<span class="quotelev2">&gt;      &gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev2">&gt;      &gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev2">&gt;      &gt; Tel: +1 (713) 743-3857 &lt;tel:%2B1%20%28713%29%20743-3857&gt;
</span><br>
<span class="quotelev1">&gt;              Fax: +1 (713) 743-3335 &lt;tel:%2B1%20%28713%29%20743-3335&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;      &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;      &gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;      &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;      &gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16358.php">http://www.open-mpi.org/community/lists/devel/2014/11/16358.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     devel mailing list
</span><br>
<span class="quotelev1">&gt;     devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16359.php">http://www.open-mpi.org/community/lists/devel/2014/11/16359.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16361.php">http://www.open-mpi.org/community/lists/devel/2014/11/16361.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><pre>
-- 
Edgar Gabriel
Associate Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16363.php">Ralph Castain: "Re: [OMPI devel] race condition in abort can cause mpirun v1.8 hang"</a>
<li><strong>Previous message:</strong> <a href="16361.php">George Bosilca: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16361.php">George Bosilca: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
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
