<?
$subject_val = "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  5 11:15:25 2011" -->
<!-- isoreceived="20110705151525" -->
<!-- sent="Tue, 5 Jul 2011 11:15:29 -0400" -->
<!-- isosent="20110705151529" -->
<!-- name="yanyg_at_[hidden]" -->
<!-- email="yanyg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
<!-- id="4E12F251.450.229D3F46_at_localhost" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="[OMPI users] mpirun does not propagate environment from master node to slave nodes" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes<br>
<strong>From:</strong> <a href="mailto:yanyg_at_[hidden]?Subject=Re:%20[OMPI%20users]%20mpirun%20does%20not%20propagate%20environment%20from%20master%20node%20to%20slave%20nodes"><em>yanyg_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-07-05 11:15:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16819.php">yanyg_at_[hidden]: "[OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>Previous message:</strong> <a href="16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, Ralph.
<br>
Your information is very deep and detailed.
<br>
<p>I tried with your suggestion to set &quot;&quot;-mca 
<br>
plm_rsh_assume_same_shell 0&quot;, it still does not work though. My 
<br>
situation is that we start a c-shell script from bash shell, which in 
<br>
turn invokes mpirun to other slave nodes. These slave nodes have 
<br>
bash login shell by default, and mpirun will execute another c-shell 
<br>
script on each node, will these mess thing up a little bit and related 
<br>
to the orted missing message?
<br>
<p>Thanks again,
<br>
Yiguang
<br>
<p>On Jun 28, 2011, at 3:52 PM, yanyg_at_[hidden] wrote: 
<br>
<p>I looked a little deeper into this. I keep forgetting that we changed 
<br>
our default settings a few years ago. In the dim past, OMPI would 
<br>
always probe the remote node to find out what shell it was using, 
<br>
and then use the proper command syntax for that shell. However, 
<br>
people complained about the extra time during launch, and very 
<br>
very few people actually used mis-matched shells.
<br>
<p>So we changed the setting the other way to default to assuming the 
<br>
remote shell is the same as the local one. For those like yourself 
<br>
that actually do have a mismatch, we left a parameter you can set 
<br>
to override that assumption. Just add &quot;-mca 
<br>
plm_rsh_assume_same_shell 0&quot; to your mpirun cmd line and it 
<br>
should resolve the problem. 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16819.php">yanyg_at_[hidden]: "[OMPI users] MPI_Reduce error over Infiniband or TCP"</a>
<li><strong>Previous message:</strong> <a href="16817.php">Rob Latham: "Re: [OMPI users] File seeking with shared filepointer issues"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/06/16772.php">yanyg_at_[hidden]: "[OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
<li><strong>Reply:</strong> <a href="16821.php">Ralph Castain: "Re: [OMPI users] mpirun does not propagate environment from master node to slave nodes"</a>
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
