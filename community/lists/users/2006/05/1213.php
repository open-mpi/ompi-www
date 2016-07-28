<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May  4 15:09:51 2006" -->
<!-- isoreceived="20060504190951" -->
<!-- sent="Thu, 04 May 2006 14:10:26 -0500" -->
<!-- isosent="20060504191026" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] comm_join and singleton init" -->
<!-- id="445A51A2.3030603_at_cs.uh.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20060503225116.GN25378_at_mcs.anl.gov" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-05-04 15:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Robert Latham wrote:
<br>
<span class="quotelev1">&gt; This was fine on a single machine.  What do you recommend for multiple
</span><br>
<span class="quotelev1">&gt; machines (e.g. app1 on node1 and app2 on node2)? How do i tell
</span><br>
<span class="quotelev1">&gt; multiple orted instances that they are part of the same universe?
</span><br>
<p>well, the assumption here is, that the persistent daemon is running such 
<br>
that both mpirun's can contact it. E.g. the persistent daemon could run 
<br>
on the front end node of a cluster - the same nodes from which you start 
<br>
both mpirun commands. The mpirun command launches the processes onto the 
<br>
cluster nodes, this should still work and be fine. Does this answer your 
<br>
question?
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Department of Computer Science          email:gabriel_at_[hidden]
University of Houston                   <a href="http://www.cs.uh.edu/~gabriel">http://www.cs.uh.edu/~gabriel</a>
Philip G. Hoffman Hall, Room 524        Tel: +1 (713) 743-3857
Houston, TX-77204, USA                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI users] comm_join and singleton init"</a>
<li><strong>Previous message:</strong> <a href="1212.php">Edgar Gabriel: "Re: [OMPI users] MPI_Open_port returns port 0.0.0:2000"</a>
<li><strong>In reply to:</strong> <a href="1210.php">Robert Latham: "Re: [OMPI users] comm_join and singleton init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1214.php">Ralph Castain: "Re: [OMPI users] comm_join and singleton init"</a>
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
