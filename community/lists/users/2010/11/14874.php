<?
$subject_val = "Re: [OMPI users] Prioritization of --mca btl openib,tcp,self";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 07:12:54 2010" -->
<!-- isoreceived="20101123121254" -->
<!-- sent="Tue, 23 Nov 2010 07:12:04 -0500" -->
<!-- isosent="20101123121204" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prioritization of --mca btl openib,tcp,self" -->
<!-- id="4CEBAF94.2020907_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="04B898D6-BCDE-4B29-A9DC-2AEE4FCB1BF7_at_parsci.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prioritization of --mca btl openib,tcp,self<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 07:12:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14875.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>In reply to:</strong> <a href="14872.php">Parallel Scientific: "[OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 11/22/2010 08:18 PM, Paul Monday (Parallel Scientific) wrote:
<br>
<span class="quotelev1">&gt; This is a follow-up to an earlier question, I'm trying to understand how --mca btl prioritizes it's choice for connectivity.  Going back to my original network, there are actually two networks running around.  A point to point Infiniband network that looks like this (with two fabrics):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A(port 1)(opensm)------&gt;B
</span><br>
<span class="quotelev1">&gt; A(port 2)(opensm)------&gt;C
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The original question queried whether there was a way to avoid the problem of B and C not being able to talk to each other if I were to run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  -host A,B,C --mca btl openib,self -d /mnt/shared/apps/myapp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;At least one pair of MPI processes are unable to reach each other for
</span><br>
<span class="quotelev1">&gt; MPI communications.&quot; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an additional network though, I have an ethernet management network that connects to all nodes.  If our program retrieves the ranks from the nodes using TCP and then can shift to openib, that would be interesting and, in fact, if I run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun  -host A,B,C --mca btl openib,tcp,self -d /mnt/shared/apps/myapp
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The program does, in fact, run cleanly.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, the question I have now is does MPI &quot;choose&quot; to use tcp when it can find all nodes and then always use tcp, or will it fall back to openib if it can?
</span><br>
For MPI communications (as opposed to the ORTE communications) the 
<br>
library will try and pick out the most performant protocol to use for 
<br>
communications between two nodes.  So in your case A-B and A-C should 
<br>
use the openib btl and B-C should use the tcp btl.
<br>
<span class="quotelev1">&gt; So ... more succinctly:
</span><br>
<span class="quotelev1">&gt; Given a list of btls, such as openib,tcp,self, and a program can only broadcast on tcp but individual operations can occur over openib between nodes, will mpirun use the first interconnect that works for each operation or once it finds one that the broadcast phase works on will it use that one permanently?
</span><br>
If by broadcast you mean MPI_Bcast, this is actually done using point to 
<br>
point algorithms so the communications will happen over a mixture of IB 
<br>
and TCP.
<br>
<p>If you mean something else by broadcast you'll need to clarify what you 
<br>
mean because there really isn't a direct use of protocol broadcasts in 
<br>
MPI or even ORTE to my knowledge.
<br>
<span class="quotelev1">&gt; And, as a follow-up, can I turn off the attempt to broadcast to touch all nodes?
</span><br>
See above.
<br>
<span class="quotelev1">&gt; Paul Monday
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14874/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-14874/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14875.php">Hicham Mouline: "Re: [OMPI users] launching the mpi runtime"</a>
<li><strong>Previous message:</strong> <a href="14873.php">Riccardo Murri: "Re: [OMPI users] possible mismatch between MPI_Iprobe and MPI_Recv?"</a>
<li><strong>In reply to:</strong> <a href="14872.php">Parallel Scientific: "[OMPI users] Prioritization of --mca btl openib,tcp,self"</a>
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
