<?
$subject_val = "Re: [OMPI users] hcoll API in 1.10.1";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 23 19:29:48 2015" -->
<!-- isoreceived="20151224002948" -->
<!-- sent="Thu, 24 Dec 2015 11:29:43 +1100" -->
<!-- isosent="20151224002943" -->
<!-- name="Ben Menadue" -->
<!-- email="ben.menadue_at_[hidden]" -->
<!-- subject="Re: [OMPI users] hcoll API in 1.10.1" -->
<!-- id="002e01d13de2$2faee7b0$8f0cb710$_at_nci.org.au" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAO1KyZTROzcE0N_-ukuthPU22w6Rc+EK1anczaqz=yQPk22Eg_at_mail.gmail.com" -->
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
<strong>From:</strong> Ben Menadue (<em>ben.menadue_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-23 19:29:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Mike,
<br>
<p>&nbsp;
<br>
<p>11:18 bjm900_at_raijin7 ~ &gt; rpm -qi hcoll
<br>
<p>Name        : hcoll                        Relocations: /opt/mellanox/hcoll 
<br>
<p>Version     : 2.0.472                           Vendor: mellanox
<br>
<p>Release     : 1                             Build Date: Sun Jan  5 23:40:18 2014
<br>
<p>Install Date: Fri Jun 12 15:00:23 2015         Build Host: localhost
<br>
<p>Group       : Applications                  Source RPM: hcoll-2.0.472-1.src.rpm
<br>
<p>Size        : 14074151                         License: Proprietary
<br>
<p>Signature   : DSA/SHA1, Sun Feb 23 23:20:58 2014, Key ID c5ed83e26224c050
<br>
<p>Packager    : mellanox
<br>
<p>URL         : <a href="http://www.mellanox.com">http://www.mellanox.com</a>
<br>
<p>Summary     : Hierarchical collectives (HCOLL)
<br>
<p>Description :
<br>
<p>HCOLL...
<br>
<p>&nbsp;
<br>
<p>I also just realised that it doesn&#226;&#128;&#153;t work for any OpenMPI 1.8.x series or 1.10.0 either &#226;&#128;&#147; while it is able to build (unlike for 1.10.1) it fails at runtime with a symbol lookup error:
<br>
<p>&nbsp;
<br>
<p>symbol lookup error: /apps/openmpi/1.8.8/lib/openmpi/mca_coll_hcoll.so: undefined symbol: hcoll_check_mem_release_cb_needed
<br>
<p>&nbsp;
<br>
<p>That symbol doesn&#226;&#128;&#153;t appear to be in any of the .so files in /opt/mellanox/hcoll, so I&#226;&#128;&#153;m guessing it&#226;&#128;&#153;s from a newer version of hcoll. This would also explain why it warned about an implicit declaration of this symbol during the builds:
<br>
<p>&nbsp;
<br>
<p>../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:263: warning: implicit declaration of function 'hcoll_check_mem_release_cb_needed'
<br>
<p>&nbsp;
<br>
<p>Cheers,
<br>
<p>Ben
<br>
<p>&nbsp;
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Mike Dubman
<br>
Sent: Thursday, 24 December 2015 7:14 AM
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] hcoll API in 1.10.1
<br>
<p>&nbsp;
<br>
<p>Hi,
<br>
<p>hcoll is part of MOFED or comes from HPCx.
<br>
<p>what version of hcoll do you have on your system?
<br>
<p>&nbsp;
<br>
<p>Thx
<br>
<p>&nbsp;
<br>
<p>On Wed, Dec 23, 2015 at 4:58 AM, Ben Menadue &lt;ben.menadue_at_[hidden] &lt;mailto:ben.menadue_at_[hidden]&gt; &gt; wrote:
<br>
<p>Hi,
<br>
<p>It's probably in plain sight somewhere and I missed it, but is there a
<br>
minimum version of hcoll needed to build 1.10.1?
<br>
<p>We have 2.0.0, which allows us to build 1.10.0, but 1.10.1 fails with
<br>
missing entries in the hcoll_collectives_t structure:
<br>
<p>&nbsp;&nbsp;CC       coll_hcoll_module.lo
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In function
<br>
'mca_coll_hcoll_mem_release_cb':
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:60: warning:
<br>
implicit declaration of function 'hcoll_mem_unmap'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In function
<br>
'hcoll_comm_attr_del_fn':
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:166:
<br>
warning: implicit declaration of function 'hcoll_group_destroy_notify'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c: In function
<br>
'mca_coll_hcoll_comm_query':
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:263:
<br>
warning: implicit declaration of function
<br>
'hcoll_check_mem_release_cb_needed'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:317: error:
<br>
'hcoll_collectives_t' has no member named 'coll_alltoallv'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:318: error:
<br>
'hcoll_collectives_t' has no member named 'coll_gatherv'
<br>
../../../../../../../../ompi/mca/coll/hcoll/coll_hcoll_module.c:324: error:
<br>
'hcoll_collectives_t' has no member named 'coll_igatherv'
<br>
<p>It looks like PR567 in the 1.10 branch that added the new references.
<br>
<p>Cheers,
<br>
Ben
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden] &lt;mailto:users_at_[hidden]&gt; 
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28200.php">http://www.open-mpi.org/community/lists/users/2015/12/28200.php</a>
<br>
<p><p><p><p><p>&nbsp;
<br>
<p><pre>
-- 
 
Kind Regards,
 
M.
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28202/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>In reply to:</strong> <a href="28201.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Reply:</strong> <a href="28203.php">Mike Dubman: "Re: [OMPI users] hcoll API in 1.10.1"</a>
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
