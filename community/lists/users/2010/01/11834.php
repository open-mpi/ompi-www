<?
$subject_val = "Re: [OMPI users] dynamic rules";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 20 14:09:02 2010" -->
<!-- isoreceived="20100120190902" -->
<!-- sent="Wed, 20 Jan 2010 20:08:55 +0100" -->
<!-- isosent="20100120190855" -->
<!-- name="Daniel Sp&#229;ngberg" -->
<!-- email="daniels_at_[hidden]" -->
<!-- subject="Re: [OMPI users] dynamic rules" -->
<!-- id="op.u6uh45qshvmlko_at_girasole.cluster.mkem.uu.se" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="d21ea44c1001160731x15afda2bl4f29ad8b6ea0b2ea_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] dynamic rules<br>
<strong>From:</strong> Daniel Sp&#229;ngberg (<em>daniels_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-20 14:08:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11835.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Den 2010-01-16 16:31:24 skrev Roman Martonak &lt;r.martonak_at_[hidden]&gt;:
<br>
<p><span class="quotelev2">&gt;&gt; Terribly sorry, I should checked my own notes thoroughly before giving
</span><br>
<span class="quotelev2">&gt;&gt; others advice. One needs to give the dynamic rules file location on the
</span><br>
<span class="quotelev2">&gt;&gt; command line:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -mca coll_tuned_use_dynamic_rules 1 -mca
</span><br>
<span class="quotelev2">&gt;&gt; coll_tuned_dynamic_rules_filename /homeXXXX/.openmpi/dynamic_rules_file
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That works for me with openmpi 1.4. I have not tried 1.4.1 yet.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks, I will try it. VASP uses cartesian topology communicators.
</span><br>
<span class="quotelev1">&gt; Should the dynamic
</span><br>
<span class="quotelev1">&gt; rules work also for this case in openmpi-1.4 ? In openmpi-1.3.2 and
</span><br>
<span class="quotelev1">&gt; previous versions
</span><br>
<span class="quotelev1">&gt; the dynamic rules specified via a dynamic rules file had no effect at
</span><br>
<span class="quotelev1">&gt; all for VASP.
</span><br>
<p>I just tried alltoall with a communicator I created that uses half the  
<br>
slots with 256 bytes message size. The fixed rules uses bruck for messages  
<br>
smaller than 200 bytes on (I think) 12 processes and up. So my test should  
<br>
never use bruck. On 512 cores (using 256 for the comm) the fixed rules  
<br>
take about 10 ms / alltoall. Using the dynamic rules file forcing bruck  
<br>
makes it take about 1 ms / alltoall, so 10 times quicker. So, yes it seems  
<br>
that other communicators than MPI_COMM_WORLD are affected by the dynamics  
<br>
rule file.
<br>
<p>My communicator:
<br>
<p>&nbsp;&nbsp;&nbsp;MPI_Comm_group(MPI_COMM_WORLD,&amp;world_group);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;size);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;rank);
<br>
&nbsp;&nbsp;&nbsp;ranges[0][0]=0;
<br>
&nbsp;&nbsp;&nbsp;ranges[0][1]=size-2;
<br>
&nbsp;&nbsp;&nbsp;ranges[0][2]=2;
<br>
&nbsp;&nbsp;&nbsp;MPI_Group_range_incl(world_group,1,ranges,&amp;half_group);
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_create(MPI_COMM_WORLD,half_group,&amp;half_comm);
<br>
<p>HTH
<br>
<pre>
-- 
Daniel Sp&#229;ngberg
Materialkemi
Uppsala Universitet
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11835.php">Dave Love: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>Previous message:</strong> <a href="11833.php">Jeff Squyres: "Re: [OMPI users] building the 1.4.1 rpm under RHEL 5"</a>
<li><strong>In reply to:</strong> <a href="11804.php">Roman Martonak: "Re: [OMPI users] dynamic rules"</a>
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
