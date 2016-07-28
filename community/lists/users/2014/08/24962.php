<?
$subject_val = "Re: [OMPI users] OpenMPI fails with np &gt; 65";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 10 18:07:19 2014" -->
<!-- isoreceived="20140810220719" -->
<!-- sent="Sun, 10 Aug 2014 15:06:38 -0700" -->
<!-- isosent="20140810220638" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI fails with np &amp;gt; 65" -->
<!-- id="75C03ABA-6234-473C-B27D-1C5DE83E6E15_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="7da337e8e4fc449785b88155597bb620_at_DB4PR05MB368.eurprd05.prod.outlook.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-10 18:06:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24961.php">Lenny Verkhovsky: "[OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="24961.php">Lenny Verkhovsky: "[OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24964.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="24964.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Looks to me like your 65th host is missing the dstore library - is it possible you don't have your paths set correctly on all hosts in your hostfile?
<br>
<p><p>On Aug 10, 2014, at 1:13 PM, Lenny Verkhovsky &lt;lennyb_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Trying to run OpenMPI ( trunk Revision: 32428 ) I faced the problem running OMPI with more than 65 procs.
</span><br>
<span class="quotelev1">&gt; It looks like MPI failes to open 66th connection even with running `hostname` over tcp.
</span><br>
<span class="quotelev1">&gt; It also seems to unrelated to specific host.
</span><br>
<span class="quotelev1">&gt; All hosts are Ubuntu 12.04.1 LTS
</span><br>
<span class="quotelev1">&gt; mpirun -np 66 --hostfile /proj/SSA/Mellanox/tmp//20140810_070156_hostfile.txt --mca btl tcp,self hostname
</span><br>
<span class="quotelev1">&gt; [nodename] [[4452,0],65] ORTE_ERROR_LOG: Error in file base/ess_base_std_orted.c at line 288
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;&#133;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It looks like environment issue, but I can&#146;t find any limit related.
</span><br>
<span class="quotelev1">&gt; Any ideas ?
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Lenny Verkhovsky
</span><br>
<span class="quotelev1">&gt; SW Engineer,  Mellanox Technologies
</span><br>
<span class="quotelev1">&gt; www.mellanox.com
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Office:    +972 74 712 9244
</span><br>
<span class="quotelev1">&gt; Mobile:  +972 54 554 0233
</span><br>
<span class="quotelev1">&gt; Fax:        +972 72 257 9400
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24961.php">http://www.open-mpi.org/community/lists/users/2014/08/24961.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24962/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24963.php">Mohamad Chaarawi: "Re: [OMPI users] MPI-I/O issues"</a>
<li><strong>Previous message:</strong> <a href="24961.php">Lenny Verkhovsky: "[OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>In reply to:</strong> <a href="24961.php">Lenny Verkhovsky: "[OMPI users] OpenMPI fails with np &gt; 65"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24964.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
<li><strong>Reply:</strong> <a href="24964.php">Lenny Verkhovsky: "Re: [OMPI users] OpenMPI fails with np &gt; 65"</a>
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
