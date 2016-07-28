<?
$subject_val = "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 23 15:39:29 2012" -->
<!-- isoreceived="20120623193929" -->
<!-- sent="Sat, 23 Jun 2012 13:39:22 -0600" -->
<!-- isosent="20120623193922" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster" -->
<!-- id="6574CF05-6E7D-4586-8A18-9AD84342B301_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BLU154-W31A906FFEC066A3E6E7831CBE30_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-23 15:39:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Previous message:</strong> <a href="19650.php">Jack Bryan: "[OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>In reply to:</strong> <a href="19650.php">Jack Bryan: "[OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Reply:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No sure I can fully answer that question, but you could add --display-map to the mpirun command and it will tell you how many we *think* we started on each node.
<br>
<p><p>On Jun 23, 2012, at 1:33 PM, Jack Bryan wrote:
<br>
<p><span class="quotelev1">&gt; Hi, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am running an OpenMPI program on a linux cluster with 4 quad cores per node. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use qstat -n jobID to check how many processes working in parallel and find that : 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node160/15+node160/14+node160/13+node160/12+node160/11+node160/10+node160/9
</span><br>
<span class="quotelev1">&gt;    +node160/8+node160/7+node160/6+node160/5+node160/4+node160/3+node160/2
</span><br>
<span class="quotelev1">&gt;    +node160/1+node160/0+node166/15+node166/14+node166/13+node166/12+node166/11
</span><br>
<span class="quotelev1">&gt;    +node166/10+node166/9+node166/8+node166/7+node166/6+node166/5+node166/4
</span><br>
<span class="quotelev1">&gt;    +node166/3+node166/2+node166/1+node166/0+node173/15+node173/14+node173/13
</span><br>
<span class="quotelev1">&gt;    +node173/12+node173/11+node173/10+node173/9+node173/8+node173/7+node173/6
</span><br>
<span class="quotelev1">&gt;    +node173/5+node173/4+node173/3+node173/2+node173/1+node173/0+node175/15
</span><br>
<span class="quotelev1">&gt;    +node175/14+node175/13+node175/12+node175/11+node175/10+node175/9+node175/8
</span><br>
<span class="quotelev1">&gt;    +node175/7+node175/6+node175/5+node175/4+node175/3+node175/2+node175/1
</span><br>
<span class="quotelev1">&gt;    +node175/0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; But, when I use ssh to be on a node , e..g ssh node175, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I use top command to check how many processes working on node 175 and find that 
</span><br>
<span class="quotelev1">&gt; there are only one process working, not 8 processes. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Would you please tell me how to check the processes number on one node ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any  help will be appreciated.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jinxu Ding
</span><br>
<span class="quotelev1">&gt; 
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
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19651/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Previous message:</strong> <a href="19650.php">Jack Bryan: "[OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>In reply to:</strong> <a href="19650.php">Jack Bryan: "[OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Reply:</strong> <a href="19652.php">John Hearns: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
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
