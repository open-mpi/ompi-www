<?
$subject_val = "Re: [OMPI devel] question to OMPI_DECLSPEC";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 25 12:43:19 2014" -->
<!-- isoreceived="20141125174319" -->
<!-- sent="Tue, 25 Nov 2014 09:43:15 -0800" -->
<!-- isosent="20141125174315" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] question to OMPI_DECLSPEC" -->
<!-- id="13F44FD9-FBCE-4370-A6A1-B2667D7C7242_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="5474BE29.7040709_at_cs.uh.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-25 12:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16340.php">Allan Wu: "Re: [OMPI devel] devel Digest, Vol 2854, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="16338.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16338.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16358.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Reply:</strong> <a href="16358.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; On Nov 25, 2014, at 9:36 AM, Edgar Gabriel &lt;gabriel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/25/2014 11:31 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 25, 2014, at 8:24 AM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:gabriel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 11/25/2014 10:18 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hmmm&#133;no, nothing has changed with regard to declspec that I know
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; about. I&#146;ll ask the obvious things to check:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * does that component have the proper include to find this function?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Could be that it used to be found thru some chain, but the chain is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now broken and it needs to be directly included
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; header is included, I double checked.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; * is that function in the base code, or down in a component? If the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; latter, then that&#146;s a problem, but I&#146;m assuming you didn&#146;t make that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mistake.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am not sure what you mean. The function is in a component, but I am
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not aware that it is illegal to call a function of a component from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; another component.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course that is illegal - you can only access a function via the
</span><br>
<span class="quotelev2">&gt;&gt; framework interface, not directly. You have no way of knowing that the
</span><br>
<span class="quotelev2">&gt;&gt; other component has been loaded. Doing it directly violates the
</span><br>
<span class="quotelev2">&gt;&gt; abstraction rules.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; well, ok. I know that the other componen has been loaded because that component triggered the initialization of these sub-frameworks.
</span><br>
<p>I think we&#146;ve seen that before, and run into problems with that approach (i.e., components calling framework opens).
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can move that functionality to the base, however, none of the 20+ functions are required for the other components of the io framework (i.e. ROMIO). So I would basically add functionality required for one component only into the base.
</span><br>
<p>Sounds like you&#146;ve got an abstraction problem. If the fcoll component requires certain functions from another framework, then the framework should be exposing those APIs. If ROMIO doesn&#146;t provide them, then it needs to return an error if someone attempts to call it.
<br>
<p>You are welcome to bring this up on next week&#146;s call if you like. IIRC, this has come up before when people have tried this hard links between components. Maybe someone else will have a better solution, but is just seems to me like you have to go thru the framework to avoid the problem.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nevertheless, I think the original question is still valid. We did not see this problem before, but it is now showing on all of our platforms, and I am still wandering that is the case. I *know* that the ompio component is loaded, and I still get the error message about the missing symbol from the ompio component. I do not understand why that happens.
</span><br>
<p>Probably because the fcoll component didn&#146;t explicitly link against the ompio component. You were likely getting away with it out of pure luck.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Edgar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Nov 25, 2014, at 8:07 AM, Edgar Gabriel &lt;gabriel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;mailto:gabriel_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Has something changed recently on the trunk/master regarding
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI_DECLSPEC? The reason I ask is because we get now errors about
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; unresolved symbols, e.g.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; symbol lookup error:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; /home/gabriel/OpenMPI/lib64/openmpi/mca_fcoll_dynamic.so: undefined
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; symbol: ompi_io_ompio_decode_datatype
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and that problem was not there roughly two weeks back the last time
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I tested. I did verify that the the function listed there has an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; OMPI_DECLSPEC before its definition.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks Edgar -- Edgar Gabriel Associate Professor Parallel Software
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a> Department of Computer
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Science          University of Houston Philip G. Hoffman Hall, Room
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 524        Houston, TX-77204, USA Tel: +1 (713) 743-3857
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt; Subscription:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> Link to this
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16332.php">http://www.open-mpi.org/community/lists/devel/2014/11/16332.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________ devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;Subscription:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/develLink">http://www.open-mpi.org/mailman/listinfo.cgi/develLink</a> to this post:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16333.php">http://www.open-mpi.org/community/lists/devel/2014/11/16333.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Edgar Gabriel
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Associate Professor
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Parallel Software Technologies Lab <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;<a href="http://pstl.cs.uh.edu/">http://pstl.cs.uh.edu/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Department of Computer Science          University of Houston
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/devel/2014/11/16334.php">http://www.open-mpi.org/community/lists/devel/2014/11/16334.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16336.php">http://www.open-mpi.org/community/lists/devel/2014/11/16336.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Edgar Gabriel
</span><br>
<span class="quotelev1">&gt; Associate Professor
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/11/16338.php">http://www.open-mpi.org/community/lists/devel/2014/11/16338.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16340.php">Allan Wu: "Re: [OMPI devel] devel Digest, Vol 2854, Issue 1"</a>
<li><strong>Previous message:</strong> <a href="16338.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>In reply to:</strong> <a href="16338.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16358.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
<li><strong>Reply:</strong> <a href="16358.php">Edgar Gabriel: "Re: [OMPI devel] question to OMPI_DECLSPEC"</a>
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
