<?
$subject_val = "Re: [OMPI users] hcoll API in 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 24 11:08:27 2015" -->
<!-- isoreceived="20151224160827" -->
<!-- sent="Thu, 24 Dec 2015 18:08:25 +0200" -->
<!-- isosent="20151224160825" -->
<!-- name="Mike Dubman" -->
<!-- email="miked_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll API in 1.10.1" -->
<!-- id="CAAO1KyZDmWPdMwV2zOQP3PsKTv+U0nAFCdC=bJi86nJmEvVcsQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="002e01d13de2$2faee7b0$8f0cb710$_at_nci.org.au" -->
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
<strong>Date:</strong> 2015-12-24 11:08:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28204.php">Platzer, Peter: "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Previous message:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Ben,
<br>
<p>It looks like HCOLL v2.x is too old for OMPI v1.10.
<br>
Could you download HPCx from <a href="http://mellanox.com/poducts/hpcx">http://mellanox.com/poducts/hpcx</a> which
<br>
contains latest hcoll and use it to compile OMPI?
<br>
<p>(also HPCx contains OMPI sources and precompiled w/ HCOLL)
<br>
<p>On Thu, Dec 24, 2015 at 2:29 AM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Mike,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 11:18 bjm900_at_raijin7 ~ &gt; rpm -qi hcoll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Name        : hcoll                        Relocations:
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Version     : 2.0.472                           Vendor: mellanox
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Release     : 1                             Build Date: Sun Jan  5
</span><br>
<span class="quotelev1">&gt; 23:40:18 2014
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Install Date: Fri Jun 12 15:00:23 2015         Build Host: localhost
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Group       : Applications                  Source RPM:
</span><br>
<span class="quotelev1">&gt; hcoll-2.0.472-1.src.rpm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Size        : 14074151                         License: Proprietary
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Signature   : DSA/SHA1, Sun Feb 23 23:20:58 2014, Key ID c5ed83e26224c050
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Packager    : mellanox
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; URL         : <a href="http://www.mellanox.com">http://www.mellanox.com</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Summary     : Hierarchical collectives (HCOLL)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Description :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HCOLL...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also just realised that it doesn&#226;&#128;&#153;t work for any OpenMPI 1.8.x series or
</span><br>
<span class="quotelev1">&gt; 1.10.0 either &#226;&#128;&#147; while it is able to build (unlike for 1.10.1) it fails at
</span><br>
<span class="quotelev1">&gt; runtime with a symbol lookup error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; symbol lookup error: /apps/openmpi/1.8.8/lib/openmpi/mca_coll_hcoll.so:
</span><br>
<span class="quotelev1">&gt; undefined symbol: hcoll_check_mem_release_cb_needed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; That symbol doesn&#226;&#128;&#153;t appear to be in any of the .so files in
</span><br>
<span class="quotelev1">&gt; /opt/mellanox/hcoll, so I&#226;&#128;&#153;m guessing it&#226;&#128;&#153;s from a newer version of hcoll.
</span><br>
<span class="quotelev1">&gt; This would also explain why it warned about an implicit declaration of this
</span><br>
<span class="quotelev1">&gt; symbol during the builds:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:263:
</span><br>
<span class="quotelev1">&gt; warning: implicit declaration of function
</span><br>
<span class="quotelev1">&gt; 'hcoll_check_mem_release_cb_needed'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:* users [mailto:users-bounces_at_[hidden]] *On Behalf Of *Mike
</span><br>
<span class="quotelev1">&gt; Dubman
</span><br>
<span class="quotelev1">&gt; *Sent:* Thursday, 24 December 2015 7:14 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] hcoll API in 1.10.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; hcoll is part of MOFED or comes from HPCx.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what version of hcoll do you have on your system?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 23, 2015 at 4:58 AM, Ben Menadue &lt;ben.menadue_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi,
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; M.
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28202.php">http://www.open-mpi.org/community/lists/users/2015/12/28202.php</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28203/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28204.php">Platzer, Peter: "[OMPI users] gcc 5 compiler does not like variable argument functions -&gt; config fails when checking for ISO C99 ability"</a>
<li><strong>Previous message:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28202.php">Ben Menadue: "Re: [OMPI users] hcoll API in 1.10.1"</a>
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
