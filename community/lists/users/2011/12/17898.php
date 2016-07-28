<?
$subject_val = "Re: [OMPI users] How are the Open MPI processes spawned?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  6 15:40:31 2011" -->
<!-- isoreceived="20111206204031" -->
<!-- sent="Tue, 6 Dec 2011 13:40:25 -0700" -->
<!-- isosent="20111206204025" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How are the Open MPI processes spawned?" -->
<!-- id="91F3A15F-409B-42AF-B983-98BAC2D4B3C2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4EDE7B02.3090305_at_rz.rwth-aachen.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] How are the Open MPI processes spawned?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-06 15:40:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>In reply to:</strong> <a href="17894.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll take a look at having the rsh launcher forward MCA params up to the cmd line limit, and warn if there are too many to fit. Shouldn't be too hard, I would think.
<br>
<p><p>On Dec 6, 2011, at 1:28 PM, Paul Kapinos wrote:
<br>
<p><span class="quotelev1">&gt; Hello Jeff, Ralph, all!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Meaning that per my output from above, what Paul was trying should have worked, no?  I.e., setenv'ing OMPI_&lt;whatever&gt;, and those env vars should magically show up in the launched process.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the -launched process- yes. However, his problem was that they do not show up for the -orteds-, and thus the orteds don't wireup correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for latency, too many issues on too many area needing improvement :-/
</span><br>
<span class="quotelev1">&gt; Well, just to clarify the long story about what I have seen:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. got a strange start-up problem (based on bogus configuration of eth0 +  known (for you, experts :o) bug in /1.5.x
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. got a workaround for (1.) by setting  '-mca oob_tcp_if_include ib0 -mca btl_tcp_if_include ib0' on the command line of mpiexec =&gt; WORKS! Many thanks guys!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. remembered that any MCA Parameters can also be defined over OMP_MCA_... envvars, tried out to set =&gt; works NOT, the hang-ups were again here. Checking how the MCA parameters are set by ompi_info - all clear, but doesn't work. My blind guess was, mpiexec does not understood there envvars in this case.
</span><br>
<span class="quotelev1">&gt; See also <a href="http://www.open-mpi.org/community/lists/users/2011/11/17823.php">http://www.open-mpi.org/community/lists/users/2011/11/17823.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thus this issue is not about forwarding some or any OMPI_* envvars to the _processes_, but on someone step _before_ (the processes were not started correctly at all in my problem case), as Ralph wrote.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The difference in behaviour if setting parameters on command line or over OMPI_*envvars matters!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Did you filed it, or someone else, or should I do it in some way?
</span><br>
<span class="quotelev2">&gt; &gt; I'll take care of it, and copy you on the ticket so you can see
</span><br>
<span class="quotelev2">&gt; &gt; what happens. I'll also do the same for the connection bug
</span><br>
<span class="quotelev2">&gt; &gt; - sorry for the problem :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph, many thanks for this!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best wishes and a nice evening/day/whatever time you have!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Paul Kapinos
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Dipl.-Inform. Paul Kapinos   -   High Performance Computing,
</span><br>
<span class="quotelev1">&gt; RWTH Aachen University, Center for Computing and Communication
</span><br>
<span class="quotelev1">&gt; Seffenter Weg 23,  D 52074  Aachen (Germany)
</span><br>
<span class="quotelev1">&gt; Tel: +49 241/80-24915
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
<li><strong>Next message:</strong> <a href="17899.php">John Doe: "[OMPI users] orte_ess_base_select failed"</a>
<li><strong>Previous message:</strong> <a href="17897.php">Ralph Castain: "Re: [OMPI users] wiki and &quot;man mpirun&quot; odds, and a question"</a>
<li><strong>In reply to:</strong> <a href="17894.php">Paul Kapinos: "Re: [OMPI users] How are the Open MPI processes spawned?"</a>
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
