<?
$subject_val = "Re: [OMPI users] Problem on openmpi run";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 17 22:04:01 2009" -->
<!-- isoreceived="20091118030401" -->
<!-- sent="Tue, 17 Nov 2009 20:03:50 -0700" -->
<!-- isosent="20091118030350" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem on openmpi run" -->
<!-- id="94208096-6633-4BC6-87D6-FB717266DD25_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="b5d787260911171839n3580f838vad94d4080259be96_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem on openmpi run<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-17 22:03:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11225.php">Jiaye Li: "[OMPI users] Problem on openmpi run"</a>
<li><strong>In reply to:</strong> <a href="11225.php">Jiaye Li: "[OMPI users] Problem on openmpi run"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Nov 17, 2009, at 7:39 PM, Jiaye Li wrote:
<br>
<p><span class="quotelev1">&gt; Dear users
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I installed openmpi 1.3.3 on my PC (single core &amp; quad-processes). The compilation reported no error and I have found the executable file in the configure directory. But when I try to test it, I met a problem. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tested it with Vasp and PWscf programs, respectively. I typed &quot;mpirun -np 4 vasp &amp;&quot;, and then it runs like four separated processes (not parallel run), which looks like &quot;mpirun -np 1 vasp &amp;&quot; X 4.
</span><br>
<p>How did you determine this? If you run something simple that outputs MPI rank and comm_world_size, what do you get?
<br>
<p><span class="quotelev1">&gt; Moreover, I tested it with pwscf by &quot;mpirun -np 4 pwscf &lt;input &gt;output &amp;&quot;, only 25% of cpu was taken up.(It should have been 100%, 4 processes).
</span><br>
<p>Could be a lot of reasons for this - may well be running correctly. It depends on what else is going on in the system at the time. OMPI doesn't bind to processors by default, and if you don't tell it something about how many processors are available to it, it may well run &quot;non-aggressively&quot; and not consume all your cpu.
<br>
<p>You might try giving it a hostfile indicating you have four slots available on this node, and then set -mca mpi_paffinity_alone 1 so it behaves aggressively. You should get more utilization out of it that way.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could anybody help me to fix this problem? Thank you in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sincerely yours
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jiaye Li
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11227.php">Ralph Castain: "Re: [OMPI users] custom modules per job	(PBS/OpenMPI/environment-modules)"</a>
<li><strong>Previous message:</strong> <a href="11225.php">Jiaye Li: "[OMPI users] Problem on openmpi run"</a>
<li><strong>In reply to:</strong> <a href="11225.php">Jiaye Li: "[OMPI users] Problem on openmpi run"</a>
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
