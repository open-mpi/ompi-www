<?
$subject_val = "Re: [OMPI users] Running openmpi jobs on two system";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 22 06:34:07 2013" -->
<!-- isoreceived="20130322103407" -->
<!-- sent="Fri, 22 Mar 2013 11:33:49 +0100" -->
<!-- isosent="20130322103349" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Running openmpi jobs on two system" -->
<!-- id="A0F8714F-C141-4D90-9C8A-D15D7661D84C_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMvdAsKQbNL+__1vbCw-g3odw0E5A=R+GibnDEqLHwzVaJuwxg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Running openmpi jobs on two system<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-03-22 06:33:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Previous message:</strong> <a href="21595.php">Syed Ahsan Ali: "[OMPI users] Running openmpi jobs on two system"</a>
<li><strong>In reply to:</strong> <a href="21595.php">Syed Ahsan Ali: "[OMPI users] Running openmpi jobs on two system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Reply:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 22.03.2013 um 10:14 schrieb Syed Ahsan Ali:
<br>
<p><span class="quotelev1">&gt; I have a very basic question. If we want to run mpirun job on two systems which are not part of cluster, then how we can make it possible. Can the host be specifiend on mpirun which is not compute node, rather a stand alone system.
</span><br>
<p>Sure, the machines can be specified as argument to `mpiexec`. But do you want to run applications just between these two machines, or should they participate on a larger parallel job with machines of the cluster: then a direct network connection between outside and inside of the cluster is necessary by some kind of forwarding in case these are separated networks.
<br>
<p>Also the paths to the started binaries may be different, in case the two machines are not sharing the same /home with the cluster and this needs to be honored.
<br>
<p>In case you are using a queuing system and want to route jobs to outside machines of the set up cluster: it's necessary to negotiate with the admin to allow jobs being scheduled thereto.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ahsan
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
<li><strong>Next message:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Previous message:</strong> <a href="21595.php">Syed Ahsan Ali: "[OMPI users] Running openmpi jobs on two system"</a>
<li><strong>In reply to:</strong> <a href="21595.php">Syed Ahsan Ali: "[OMPI users] Running openmpi jobs on two system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
<li><strong>Reply:</strong> <a href="21597.php">Syed Ahsan Ali: "Re: [OMPI users] Running openmpi jobs on two system"</a>
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
