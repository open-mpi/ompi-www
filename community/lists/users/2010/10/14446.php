<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 12:13:12 2010" -->
<!-- isoreceived="20101012161312" -->
<!-- sent="Tue, 12 Oct 2010 18:12:57 +0200" -->
<!-- isosent="20101012161257" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="3A355AE6-D0D0-41A6-ADFD-A8268F71125A_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87k4ln1pym.fsf_at_liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 12:12:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14447.php">Ed Peddycoart: "[OMPI users] Send data structures"</a>
<li><strong>Previous message:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.10.2010 um 15:49 schrieb Dave Love:
<br>
<p><span class="quotelev1">&gt; Chris Jewell &lt;chris.jewell_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've scrapped this system now in favour of the new SGE core binding feature.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How does that work, exactly?  I thought the OMPI SGE integration didn't
</span><br>
<span class="quotelev1">&gt; support core binding, but good if it does.
</span><br>
<p>With the default binding_instance set to &quot;set&quot; (the default) the shepherd should bind the processes to cores already. With other types of binding_instance these selected cores must be forward to the application via an environment variable or in the hostfile.
<br>
<p>As this is only a hint to SGE and not a hard request, the user must plan a little bit the allocation beforehand. Especially if you oversubscribe a machine it won't work. When I look at /proc/*/status it's mentioned there as it happened. And it's also noted in &quot;config&quot; file of each job's .../active_jobs/... file. E.g. a top shows:
<br>
<p>&nbsp;9926 ms04      39  19  3756  292  228 R   25  0.0   0:19.31 ever                                                                                                                              
<br>
&nbsp;9927 ms04      39  19  3756  292  228 R   25  0.0   0:19.31 ever                                                                                                                              
<br>
&nbsp;9925 ms04      39  19  3756  288  228 R   25  0.0   0:19.30 ever                                                                                                                              
<br>
&nbsp;9928 ms04      39  19  3756  292  228 R   25  0.0   0:19.30 ever 
<br>
<p>for 4 forks of an endless loop in one and the same jobscript when submitted with `qsub -binding linear:1 demo.sh`. Well, the funny thing is that with this kernel version I still get a load of 4, despite the fact that all 4 forks are bound to one core. Should it really be four?
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt; ______________________________________________
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
<li><strong>Next message:</strong> <a href="14447.php">Ed Peddycoart: "[OMPI users] Send data structures"</a>
<li><strong>Previous message:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>In reply to:</strong> <a href="14445.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<li><strong>Reply:</strong> <a href="14461.php">Dave Love: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
