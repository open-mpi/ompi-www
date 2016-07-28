<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 12 13:48:19 2011" -->
<!-- isoreceived="20110512174819" -->
<!-- sent="Thu, 12 May 2011 13:48:03 -0400" -->
<!-- isosent="20110512174803" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="E2E5CCDB-9B64-4551-A76B-21D8EA60DE43_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0B8D99B0-0FA1-44ED-B9D3-31B88AD2014E_at_umich.edu" -->
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
<strong>Date:</strong> 2011-05-12 13:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16531.php">Rainer Keller: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16528.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16538.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am pretty sure MTL's and BTL's are very different, but just as a note,
<br>
This users code (Crash) hangs at MPI_Allreduce() in 
<br>
<p>Openib
<br>
<p>But runs on:
<br>
tcp
<br>
psm (an mtl, different hardware)
<br>
<p>Putting it out there if it does have any bearing.  Otherwise ignore. 
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 12, 2011, at 10:20 AM, Brock Palen wrote:
<br>
<p><span class="quotelev1">&gt; On May 12, 2011, at 10:13 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 11, 2011, at 3:21 PM, Dave Love wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We can reproduce it with IMB.  We could provide access, but we'd have to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; negotiate with the owners of the relevant nodes to give you interactive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; access to them.  Maybe Brock's would be more accessible?  (If you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; contact me, I may not be able to respond for a few days.)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Brock has replied off-list that he, too, is able to reliably reproduce the issue with IMB, and is working to get access for us.  Many thanks for your offer; let's see where Brock's access takes us.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I should also note that as far as I know I have three codes (CRASH, Namd (some cases), and another user code.  That lockup on a collective on OpenIB but run with the same library on Gig-e.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I am not sure it is limited to IMB, or I could be crossing errors, normally I would assume unmatched eager recvs for this sort of problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -- we have not closed this issue,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which issue?   I couldn't find a relevant-looking one.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="https://svn.open-mpi.org/trac/ompi/ticket/2714">https://svn.open-mpi.org/trac/ompi/ticket/2714</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="16533.php">Rodrigo Silva Oliveira: "[OMPI users] Scheduling dynamically spawned processes"</a>
<li><strong>Previous message:</strong> <a href="16531.php">Rainer Keller: "Re: [OMPI users] Windows: MPI_Allreduce() crashes when using MPI_DOUBLE_PRECISION"</a>
<li><strong>In reply to:</strong> <a href="16528.php">Brock Palen: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16538.php">Dave Love: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
