<?
$subject_val = "Re: [OMPI users] Help: How to accomplish processors affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:43:38 2009" -->
<!-- isoreceived="20090817154338" -->
<!-- sent="Mon, 17 Aug 2009 08:44:13 -0700" -->
<!-- isosent="20090817154413" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: How to accomplish processors affinity" -->
<!-- id="4A897ACD.2080006_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="289665360908132050k2498ee0bh2edec8d83b40e38f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: How to accomplish processors affinity<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 11:44:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Previous message:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lee Amy wrote:
<br>
<p><span class="quotelev1">&gt;I build a Kerrighed Clusters
</span><br>
<span class="quotelev1">&gt;
</span><br>
Like Lenny, I'm not familiar with such clusters, but...
<br>
<p><span class="quotelev1">&gt;with 4 nodes so they look like a big SMP
</span><br>
<span class="quotelev1">&gt;machine. every node has 1 processor with dingle core.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;1) Dose MPI programs could be running on such kinds of machine? If
</span><br>
<span class="quotelev1">&gt;yes, could anyone show me some examples?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
&nbsp;From what I understand, the answer is &quot;yes&quot;.
<br>
<p>MPI applications can run on clusters.  A special case of this is that an 
<br>
MPI application could run on a single node or SMP.
<br>
<p>If I understand correctly, Kerrighed clusters are ways of making a 
<br>
cluster look like a single SMP for the sake of ease of use (first 
<br>
objective listed on Kerrighed home page) and other benefits.
<br>
<p>So, running MPI on Kerrighed should &quot;just work&quot; -- it's just that most 
<br>
benefits of having Kerrighed simply don't benefit MPI programs.
<br>
<p>Running an MPI program on Kerrighed, if I understand correctly, should 
<br>
just look like running an MPI program on any cluster or on any SMP.  If 
<br>
I google &quot;Kerrighed MPI&quot; I see a number of hits.  Perhaps those hits 
<br>
might confirm or dispel my naive impression.
<br>
<p><span class="quotelev1">&gt;2) In this SMP machine there are 4 processors I could see. So how do I
</span><br>
<span class="quotelev1">&gt;use OpenMPI to run some programs on these CPUs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Nothing special should be needed.  E.g., &quot;mpirun -np 4 ./a.out&quot; should 
<br>
run ./a.out using four processes -- presumably one per processor.
<br>
<p><span class="quotelev1">&gt;Though I read how to
</span><br>
<span class="quotelev1">&gt;make a rank file but I am still feel confused. Could anyone show me a
</span><br>
<span class="quotelev1">&gt;simple rank file example for my Clusters?
</span><br>
<span class="quotelev1">&gt;
</span><br>
A rank file may be unneeded for your case.  With any luck, the 
<br>
underlying Kerrighed software will map one process to each processor, 
<br>
without any subsequent migration.  So, things should &quot;just work&quot; and 
<br>
performance should be as expected.  I suggest testing the first (does an 
<br>
MPI application &quot;just work&quot;?) before worrying about the second (do I 
<br>
have to do anything special to get better performance?)
<br>
<p>OMPI rankfiles are for highly specialized tasks -- that is, for 
<br>
explicitly controlling which process runs on which core/s of which 
<br>
nodes.  If I understand correctly, such control is not needed in your 
<br>
situation.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10389.php">Ralph Castain: "Re: [OMPI users] PBS tm error returns"</a>
<li><strong>Previous message:</strong> <a href="10387.php">Ralph Castain: "Re: [OMPI users] Invalid Info object in MPI_Comm_spawn_multiple"</a>
<li><strong>In reply to:</strong> <a href="10359.php">Lee Amy: "[OMPI users] Help: How to accomplish processors affinity"</a>
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
