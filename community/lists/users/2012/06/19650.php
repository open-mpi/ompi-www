<?
$subject_val = "[OMPI users] How to check processes working in parallel on one node of MPI cluster";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun 23 15:33:35 2012" -->
<!-- isoreceived="20120623193335" -->
<!-- sent="Sat, 23 Jun 2012 13:33:30 -0600" -->
<!-- isosent="20120623193330" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] How to check processes working in parallel on one node of MPI cluster" -->
<!-- id="BLU154-W31A906FFEC066A3E6E7831CBE30_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] How to check processes working in parallel on one node of MPI cluster<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-06-23 15:33:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19651.php">Ralph Castain: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Previous message:</strong> <a href="19649.php">Peter Soukalopoulos: "[OMPI users] Test message - no auto reply from forum for my last post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19651.php">Ralph Castain: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Reply:</strong> <a href="19651.php">Ralph Castain: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I am running an OpenMPI program on a linux cluster with 4 quad cores per node. 
<br>
<p>I use qstat -n jobID to check how many processes working in parallel and find that : 
<br>
<p>node160/15+node160/14+node160/13+node160/12+node160/11+node160/10+node160/9
<br>
&nbsp;&nbsp;&nbsp;+node160/8+node160/7+node160/6+node160/5+node160/4+node160/3+node160/2
<br>
&nbsp;&nbsp;&nbsp;+node160/1+node160/0+node166/15+node166/14+node166/13+node166/12+node166/11
<br>
&nbsp;&nbsp;&nbsp;+node166/10+node166/9+node166/8+node166/7+node166/6+node166/5+node166/4
<br>
&nbsp;&nbsp;&nbsp;+node166/3+node166/2+node166/1+node166/0+node173/15+node173/14+node173/13
<br>
&nbsp;&nbsp;&nbsp;+node173/12+node173/11+node173/10+node173/9+node173/8+node173/7+node173/6
<br>
&nbsp;&nbsp;&nbsp;+node173/5+node173/4+node173/3+node173/2+node173/1+node173/0+node175/15
<br>
&nbsp;&nbsp;&nbsp;+node175/14+node175/13+node175/12+node175/11+node175/10+node175/9+node175/8
<br>
&nbsp;&nbsp;&nbsp;+node175/7+node175/6+node175/5+node175/4+node175/3+node175/2+node175/1
<br>
&nbsp;&nbsp;&nbsp;+node175/0
<br>
<p>But, when I use ssh to be on a node , e..g ssh node175, 
<br>
<p>I use top command to check how many processes working on node 175 and find that 
<br>
there are only one process working, not 8 processes. 
<br>
<p>Would you please tell me how to check the processes number on one node ?
<br>
<p>Any  help will be appreciated.  
<br>
<p>Thanks 
<br>
<p>Jinxu Ding
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19650/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19651.php">Ralph Castain: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Previous message:</strong> <a href="19649.php">Peter Soukalopoulos: "[OMPI users] Test message - no auto reply from forum for my last post"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19651.php">Ralph Castain: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
<li><strong>Reply:</strong> <a href="19651.php">Ralph Castain: "Re: [OMPI users] How to check processes working in parallel on one node of MPI cluster"</a>
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
