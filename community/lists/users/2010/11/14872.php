<?
$subject_val = "[OMPI users] Prioritization of --mca btl openib,tcp,self";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 22 20:19:01 2010" -->
<!-- isoreceived="20101123011901" -->
<!-- sent="Mon, 22 Nov 2010 18:18:55 -0700" -->
<!-- isosent="20101123011855" -->
<!-- name="Parallel Scientific" -->
<!-- email="paul.monday_at_[hidden]" -->
<!-- subject="[OMPI users] Prioritization of --mca btl openib,tcp,self" -->
<!-- id="04B898D6-BCDE-4B29-A9DC-2AEE4FCB1BF7_at_parsci.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Prioritization of --mca btl openib,tcp,self<br>
<strong>From:</strong> Parallel Scientific (<em>paul.monday_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-22 20:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Previous message:</strong> <a href="14871.php">James Overfelt: "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14874.php">Terry Dontje: "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>Reply:</strong> <a href="14874.php">Terry Dontje: "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a follow-up to an earlier question, I'm trying to understand how --mca btl prioritizes it's choice for connectivity.  Going back to my original network, there are actually two networks running around.  A point to point Infiniband network that looks like this (with two fabrics):
<br>
<p>A(port 1)(opensm)------&gt;B
<br>
A(port 2)(opensm)------&gt;C
<br>
<p>The original question queried whether there was a way to avoid the problem of B and C not being able to talk to each other if I were to run
<br>
<p>mpirun  -host A,B,C --mca btl openib,self -d /mnt/shared/apps/myapp
<br>
<p>&quot;At least one pair of MPI processes are unable to reach each other for
<br>
MPI communications.&quot; ...
<br>
<p>There is an additional network though, I have an ethernet management network that connects to all nodes.  If our program retrieves the ranks from the nodes using TCP and then can shift to openib, that would be interesting and, in fact, if I run 
<br>
<p>mpirun  -host A,B,C --mca btl openib,tcp,self -d /mnt/shared/apps/myapp
<br>
<p>The program does, in fact, run cleanly.
<br>
<p>But, the question I have now is does MPI &quot;choose&quot; to use tcp when it can find all nodes and then always use tcp, or will it fall back to openib if it can?
<br>
<p>So ... more succinctly:
<br>
Given a list of btls, such as openib,tcp,self, and a program can only broadcast on tcp but individual operations can occur over openib between nodes, will mpirun use the first interconnect that works for each operation or once it finds one that the broadcast phase works on will it use that one permanently?
<br>
<p>And, as a follow-up, can I turn off the attempt to broadcast to touch all nodes?
<br>
<p>Paul Monday
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>Previous message:</strong> <a href="14871.php">James Overfelt: "[OMPI users] How to avoid abort when calling MPI_Finalize without calling MPI_File_close?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14874.php">Terry Dontje: "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<li><strong>Reply:</strong> <a href="14874.php">Terry Dontje: "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
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
