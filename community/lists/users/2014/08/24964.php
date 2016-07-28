<?
$subject_val = "Re: [OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 03:07:31 2014" -->
<!-- isoreceived="20140811070731" -->
<!-- sent="Mon, 11 Aug 2014 07:07:28 +0000" -->
<!-- isosent="20140811070728" -->
<!-- name="Lenny Verkhovsky" -->
<!-- email="lennyb_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="d730fd7f983f40108b6f1ae1083e5b7d_at_DB4PR05MB368.eurprd05.prod.outlook.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="75C03ABA-6234-473C-B27D-1C5DE83E6E15_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI fails with np &gt; 65<br>
<strong>From:</strong> Lenny Verkhovsky (<em>lennyb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 03:07:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24965.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24972.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="24972.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't think so,
<br>
It's always the 66th node, even if I swap between 65th and 66th
<br>
I also get the same error when setting np=66, while having only 65 hosts in hostfile
<br>
(I am using only tcp btl )
<br>
<p><p>Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com">http://www.mellanox.com</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p>From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Ralph Castain
<br>
Sent: Monday, August 11, 2014 1:07 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI fails with np &gt; 65
<br>
<p>Looks to me like your 65th host is missing the dstore library - is it possible you don't have your paths set correctly on all hosts in your hostfile?
<br>
<p><p>On Aug 10, 2014, at 1:13 PM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&lt;mailto:lennyb_at_[hidden]&gt;&gt; wrote:
<br>
<p><p>Hi all,
<br>
<p>Trying to run OpenMPI ( trunk Revision: 32428 ) I faced the problem running OMPI with more than 65 procs.
<br>
It looks like MPI failes to open 66th connection even with running `hostname` over tcp.
<br>
It also seems to unrelated to specific host.
<br>
All hosts are Ubuntu 12.04.1 LTS
<br>
<p>mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
<br>
[nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
<br>
<p>.......................................
<br>
It looks like environment issue, but I can't find any limit related.
<br>
Any ideas ?
<br>
Thanks.
<br>
Lenny Verkhovsky
<br>
SW Engineer,  Mellanox Technologies
<br>
www.mellanox.com&lt;<a href="http://www.mellanox.com/">http://www.mellanox.com/</a>&gt;
<br>
<p>Office:    +972 74 712 9244
<br>
Mobile:  +972 54 554 0233
<br>
Fax:        +972 72 257 9400
<br>
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24961.php">http://www.open-mpi.org/community/lists/users/2014/08/24961.php</a>
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24964/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24965.php">Siegmar Gross: "[OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>In reply to:</strong> <a href="24962.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24972.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="24972.php">Ralph Castain: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
