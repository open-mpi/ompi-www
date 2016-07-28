<?
$subject_val = "Re: [OMPI users] btl_openib_cpc_include rdmacm questions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 11 16:05:39 2011" -->
<!-- isoreceived="20110511200539" -->
<!-- sent="Wed, 11 May 2011 16:05:31 -0400" -->
<!-- isosent="20110511200531" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] btl_openib_cpc_include rdmacm questions" -->
<!-- id="B80131CD-17DA-411B-B5DD-851327C6874B_at_umich.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E976C7F7-6B69-4B37-9F2E-1C95674A809C_at_cisco.com" -->
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
<strong>Date:</strong> 2011-05-11 16:05:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16514.php">Peter Thompson: "[OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 9, 2011, at 9:31 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On May 3, 2011, at 6:42 AM, Dave Love wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; We managed to have another user hit the bug that causes collectives (this time MPI_Bcast() ) to hang on IB that was fixed by setting:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_openib_cpc_include rdmacm
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Could someone explain this?  We also have problems with collective hangs
</span><br>
<span class="quotelev2">&gt;&gt; with openib/mlx4 (specifically in IMB), but not with psm, and I couldn't
</span><br>
<span class="quotelev2">&gt;&gt; see any relevant issues filed.  However, rdmacm isn't an available value
</span><br>
<span class="quotelev2">&gt;&gt; for that parameter with our 1.4.3 or 1.5.3 installations, only oob (not
</span><br>
<span class="quotelev2">&gt;&gt; that I understand what these things are...).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay -- perhaps an IB vendor can reply here with more detail...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; We had a user-reported issue of some hangs that the IB vendors have been unable to replicate in their respective labs.  We *suspect* that it may be an issue with the oob openib CPC, but that code is pretty old and pretty mature, so all of us would be at least somewhat surprised if that were the case.  If anyone can reliably reproduce this error, please let us know and/or give us access to your machines -- we have not closed this issue, but are unable to move forward because the customers who reported this issue switched to rdmacm and moved on (i.e., we don't have access to their machines to test any more).
</span><br>
<p>An update, we set all our ib0 interfaces to have IP's on a 172. network. This allowed the use of rdmacm to work and get latencies that we would expect.  That said we are still getting hangs.  I can very reliably reproduce it using IMB with a specific core count on a specific test case. 
<br>
<p>Just an update.  Has anyone else had luck fixing the lockup issues on openib BTL for collectives in some cases? Thanks!
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Previous message:</strong> <a href="16514.php">Peter Thompson: "[OMPI users] TotalView Memory debugging and OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16491.php">Jeff Squyres: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
<li><strong>Reply:</strong> <a href="16516.php">Ralph Castain: "Re: [OMPI users] btl_openib_cpc_include rdmacm questions"</a>
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
