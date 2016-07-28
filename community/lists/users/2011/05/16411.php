<?
$subject_val = "Re: [OMPI users] OpenMPI LS-DYNA Connection refused";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 13:43:08 2011" -->
<!-- isoreceived="20110502174308" -->
<!-- sent="Mon, 02 May 2011 13:45:27 -0400" -->
<!-- isosent="20110502174527" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI LS-DYNA Connection refused" -->
<!-- id="4DBEEDB7.4030807_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DA4E99DF8B4E413E840F9735A11F6800_at_ce.ufl.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI LS-DYNA Connection refused<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 13:45:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16410.php">Robert Walters: "[OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16410.php">Robert Walters: "[OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/02/2011 01:27 PM, Robert Walters wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open-MPI Users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been using OpenMPI for a while now and am very pleased with it. I 
</span><br>
<span class="quotelev1">&gt; use the OpenMPI system across eight Red Hat Linux nodes (8 cores each) 
</span><br>
<span class="quotelev1">&gt; on 1 Gbps Ethernet behind a dedicated switch. After working out kinks 
</span><br>
<span class="quotelev1">&gt; in the beginning, we've been using it periodically anywhere from 8 
</span><br>
<span class="quotelev1">&gt; cores to 64 cores. We use a finite element software named LS-DYNA. We 
</span><br>
<span class="quotelev1">&gt; do not have source code for this program, it is compiled to work with 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4.1 (I use 1.4.2) and we cannot make changes or request code 
</span><br>
<span class="quotelev1">&gt; to see how it performs certain functions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; From time to time, I will be simulating a particular &quot;job&quot; in LS-DYNA 
</span><br>
<span class="quotelev1">&gt; and for some reason, it will quit OpenMPI issuing a MPI_ABORT command 
</span><br>
<span class="quotelev1">&gt; stating that &quot;connect to address xx.xxx.xxx.xxx port xxx: Connection 
</span><br>
<span class="quotelev1">&gt; refused; trying normal rsh (/usr/bin/rsh).&quot; This error comes after 
</span><br>
<span class="quotelev1">&gt; running for hours, which means that connections to the node it's 
</span><br>
<span class="quotelev1">&gt; citing have already been made previously. The particular node it names 
</span><br>
<span class="quotelev1">&gt; is random and changes from simulation to simulation. We use SSH to 
</span><br>
<span class="quotelev1">&gt; communicate and we have the ports open for node-to-node communications 
</span><br>
<span class="quotelev1">&gt; on any port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
I am curious what makes you think the connections to the node its citing 
<br>
have been made?  Are you sure the connection between two processes have 
<br>
been made?
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does any user have experience with this error where a connection is 
</span><br>
<span class="quotelev1">&gt; established, and used for several hours, but after a seemingly random 
</span><br>
<span class="quotelev1">&gt; period of time the program dies stating it can't make a connection?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Have you tried running the code giving mpirun the &quot;-mca 
<br>
mpi_preconnect_mpi 1&quot; option?  This will try (it isn't complete but 
<br>
close) to establish all connections at the start of the job.
<br>
<p><pre>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16411/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16411/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16410.php">Robert Walters: "[OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>In reply to:</strong> <a href="16410.php">Robert Walters: "[OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16412.php">Robert Walters: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
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
