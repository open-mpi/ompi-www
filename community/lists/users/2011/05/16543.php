<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 16 10:54:02 2011" -->
<!-- isoreceived="20110516145402" -->
<!-- sent="Mon, 16 May 2011 10:53:55 -0400" -->
<!-- isosent="20110516145355" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="02C529BC-661F-40CA-97BE-B9BE9A98C73C_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="18EEFC7E-946B-4082-B8AF-070C5E643FFC_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] btl_openib_cpc_include rdmacm questions<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-16 10:53:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16544.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16542.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16542.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16544.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16544.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 16, 2011, at 10:23 AM, Samuel K. Gutierrez wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just out of curiosity - what happens when you add the following MCA option to your openib runs?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca btl_openib_flags 305
</span><br>
<p>You Sir found the magic combination.
<br>
I verified this lets IMB and CRASH progress pass their lockup points,
<br>
I will have a user test this, 
<br>
Is this an ok option to put in our environment?  What does 305 mean?
<br>
<p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Samuel Gutierrez
</span><br>
<span class="quotelev1">&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 13, 2011, at 2:38 PM, Brock Palen wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 13, 2011, at 4:09 PM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres &lt;jsquyres_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On May 11, 2011, at 3:21 PM, Dave Love wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; We can reproduce it with IMB.  We could provide access, but we'd have to
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; negotiate with the owners of the relevant nodes to give you interactive
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; access to them.  Maybe Brock's would be more accessible?  (If you
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; contact me, I may not be able to respond for a few days.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Brock has replied off-list that he, too, is able to reliably reproduce the issue with IMB, and is working to get access for us.  Many thanks for your offer; let's see where Brock's access takes us.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good.  Let me know if we could be useful
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; -- we have not closed this issue,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Which issue?   I couldn't find a relevant-looking one.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2714">https://svn.open-mpi.org/trac/ompi/ticket/2714</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks.  In csse it's useful info, it hangs for me with 1.5.3 &amp; np=32 on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; connectx with more than one collective I can't recall.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Extra data point, that ticket said it ran with mpi_preconnect_mpi 1,  well that doesn't help here, both my production code (crash) and IMB still hang.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Excuse the typping -- I have a broken wrist
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16544.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16542.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>In reply to:</strong> <a href="16542.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16544.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16544.php">Samuel K. Gutierrez: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
