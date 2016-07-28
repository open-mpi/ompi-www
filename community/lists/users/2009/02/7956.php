<?
$subject_val = "[OMPI users] OpenMPI hangs across multiple nodes.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb  3 17:48:16 2009" -->
<!-- isoreceived="20090203224816" -->
<!-- sent="Wed, 04 Feb 2009 09:46:27 +1100" -->
<!-- isosent="20090203224627" -->
<!-- name="Robertson Burgess" -->
<!-- email="Robertson.Burgess_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI hangs across multiple nodes." -->
<!-- id="498963F0.1AFE.00C7.0_at_newcastle.edu.au" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI hangs across multiple nodes.<br>
<strong>From:</strong> Robertson Burgess (<em>Robertson.Burgess_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-03 17:46:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="7955.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Maybe reply:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear users,
<br>
I am quite new to OpenMPI, I have compiled it on two nodes, each node with 8 CPU cores. The two nodes are identical. The code I am using works in parallel across the 8 cores on a single node. However, whenever I try to run across both nodes, OpenMPI simply hangs. There is no output whatsoever, when I run it in background, outputting to a log file, the log file is always empty. The cores do not appear to be doing anything at all, either on the host node or on the remote node. This happens whether I am running my code, or even if I when I tell it to run a process that doesn't even exist, for instance
<br>
<p>mpirun -np 4 -host node1,node2 random
<br>
<p>Simply results in the terminal hanging, so all I can do is close the terminal and open up a new one.
<br>
<p>mpirun -np 4 -host node1,node2 random &gt;&amp; log.log &amp;
<br>
<p>simply produces and empty log.log file
<br>
<p>I am running Redhat Linux on the systems, and compiled OpenMPI with the Intel Compilers 10.1. As I've said, it works fine on one node. I have set up both nodes such that they can log into each other via ssh without the need for a password, and I have altered my .bashrc file so the PATH and LD_LIBRARY_PATH include the appropriate folders.
<br>
I have looked through the FAQ and mailing lists, but I was unable to find anything that really matched my problem. Any help would be greatly appreciated.
<br>
<p>Sincerely,
<br>
Robertson Burgess
<br>
University of Newcastle
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Previous message:</strong> <a href="7955.php">Ralph Castain: "Re: [OMPI users] Handling output of processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Reply:</strong> <a href="7957.php">Ralph Castain: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
<li><strong>Maybe reply:</strong> <a href="7969.php">Robertson Burgess: "Re: [OMPI users] OpenMPI hangs across multiple nodes."</a>
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
