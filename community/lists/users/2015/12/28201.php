<?
$subject_val = "Re: [OMPI users] hcoll API in 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 23 15:13:48 2015" -->
<!-- isoreceived="20151223201348" -->
<!-- sent="Wed, 23 Dec 2015 22:13:47 +0200" -->
<!-- isosent="20151223201347" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll API in 1.10.1" -->
<!-- id="CAAO1KyZTROzcE0N_-ukuthPU22w6Rc+EK1anczaqz=yQPk22Eg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="007c01d13d2d$be93e080$3bbba180$_at_nci.org.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] hcoll API in 1.10.1<br>
<strong>From:</strong> Mike Dubman (<em>miked_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-23 15:13:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28200.php">Ben Menadue: "[OMPI users] hcoll API in 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28200.php">Ben Menadue: "[OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
hcoll is part of MOFED or comes from HPCx.
<br>
what version of hcoll do you have on your system?
<br>
<p>Thx
<br>
<p>On Wed, Dec 23, 2015 at 4:58 AM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's probably in plain sight somewhere and I missed it, but is there a
</span><br>
<span class="quotelev1">&gt; minimum version of hcoll needed to build 1.10.1?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We have 2.0.0, which allows us to build 1.10.0, but 1.10.1 fails with
</span><br>
<span class="quotelev1">&gt; missing entries in the hcoll_collectives_t structure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   CC       coll_hcoll_module.lo
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; 'mca_coll_hcoll_mem_release_cb':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:60:
</span><br>
<span class="quotelev1">&gt; warning:
</span><br>
<span class="quotelev1">&gt; implicit declaration of function 'hcoll_mem_unmap'
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; 'hcoll_comm_attr_del_fn':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:166:
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function 'hcoll_group_destroy_notify'
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In
</span><br>
<span class="quotelev1">&gt; function
</span><br>
<span class="quotelev1">&gt; 'mca_coll_hcoll_comm_query':
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:263:
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'hcoll_check_mem_release_cb_needed'
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:317: error:
</span><br>
<span class="quotelev1">&gt; 'hcoll_collectives_t' has no member named 'coll_alltoallv'
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:318: error:
</span><br>
<span class="quotelev1">&gt; 'hcoll_collectives_t' has no member named 'coll_gatherv'
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:324: error:
</span><br>
<span class="quotelev1">&gt; 'hcoll_collectives_t' has no member named 'coll_igatherv'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like PR567 in the 1.10 branch that added the new references.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ben
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28200.php">http://www.open-mpi.org/community/lists/users/2015/12/28200.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind Regards,
M.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28201/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28200.php">Ben Menadue: "[OMPI users] hcoll API in 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28200.php">Ben Menadue: "[OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
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
