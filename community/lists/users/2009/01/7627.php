<?
$subject_val = "Re: [OMPI users] single data/ mutilple processes";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jan  3 15:35:58 2009" -->
<!-- isoreceived="20090103203558" -->
<!-- sent="Sat, 03 Jan 2009 15:35:50 -0500" -->
<!-- isosent="20090103203550" -->
<!-- name="Jim Kress" -->
<!-- email="jimkress_35_at_[hidden]" -->
<!-- subject="Re: [OMPI users] single data/ mutilple processes" -->
<!-- id="1231014950.5505.51.camel_at_master.org" -->
<!-- inreplyto="1231008661.5505.45.camel_at_master.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] single data/ mutilple processes<br>
<strong>From:</strong> Jim Kress (<em>jimkress_35_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-03 15:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7626.php">Jim Kress: "Re: [OMPI users] single data/ mutilple processes"</a>
<li><strong>In reply to:</strong> <a href="7626.php">Jim Kress: "Re: [OMPI users] single data/ mutilple processes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Never mind.  I figured it out for myself.
<br>
<p>Jim
<br>
<p>On Sat, 2009-01-03 at 13:51 -0500, Jim Kress wrote:
<br>
<span class="quotelev1">&gt; Hi Jody,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I did not explain my problem very well.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have an application called mdrun.  It was compiled and linked using
</span><br>
<span class="quotelev1">&gt; openMPI.  I want to run mdrun on 8 nodes of my cluster in parallel.
</span><br>
<span class="quotelev1">&gt; Just me.  Not multiple users.  So I want to launch the openMPI version
</span><br>
<span class="quotelev1">&gt; of mdrun so that it only uses the input files on the node from which it
</span><br>
<span class="quotelev1">&gt; is launched (the head node) and does not look for any input files on the
</span><br>
<span class="quotelev1">&gt; other seven nodes where it spawns the 7 other processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With MPICH I use the procgroup capability and mdrun only looks for its
</span><br>
<span class="quotelev1">&gt; input files on the node from which it is launched, using the same mdrun
</span><br>
<span class="quotelev1">&gt; parameters as the ones I tried to use with openMPI
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, how can I replicate the behavior of MPICH with openMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jim
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
<span class="quotelev1">&gt; On Sat, 2009-01-03 at 17:46 +0100, jody wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jim
</span><br>
<span class="quotelev2">&gt; &gt; If all of your workers can mount a directory on your head node,
</span><br>
<span class="quotelev2">&gt; &gt; all can access the data there.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Sat, Jan 3, 2009 at 4:13 PM, Jim Kress &lt;jimkress_35_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to use openMPI in a mode where the input and output data reside
</span><br>
<span class="quotelev3">&gt; &gt; &gt; on one node of my cluster while all the other nodes are just used for
</span><br>
<span class="quotelev3">&gt; &gt; &gt; computation and send data to/from the head node.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; All I can find in the documentation are cases showing how to use openMPI
</span><br>
<span class="quotelev3">&gt; &gt; &gt; for cases where input and output data reside on all the nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Will anyone please show me the command line I need to use to accomplish
</span><br>
<span class="quotelev3">&gt; &gt; &gt; my single data/ multiple node calculation?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jim
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7628.php">Lenny Verkhovsky: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7626.php">Jim Kress: "Re: [OMPI users] single data/ mutilple processes"</a>
<li><strong>In reply to:</strong> <a href="7626.php">Jim Kress: "Re: [OMPI users] single data/ mutilple processes"</a>
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
