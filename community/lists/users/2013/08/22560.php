<?
$subject_val = "Re: [OMPI users] Unable to schedule an MPI tasks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 27 02:56:40 2013" -->
<!-- isoreceived="20130827065640" -->
<!-- sent="Tue, 27 Aug 2013 08:56:26 +0200" -->
<!-- isosent="20130827065626" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Unable to schedule an MPI tasks" -->
<!-- id="BB8FE1F7-6F40-4F8D-9DE9-CE6F24D541BF_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="COL126-W44C463F16425049627108AFE4A0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] Unable to schedule an MPI tasks<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-08-27 02:56:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22559.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 27.08.2013 um 03:45 schrieb Ng Shi Wei:
<br>
<p><span class="quotelev1">&gt; Due to the time constraints, I would like to run the mpi program by scheduling the program to run on desired time using the &quot;at&quot; command. However, it seems that the mpirun doesn't execute the mpi program at the desired time using the &quot;at&quot; command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would like to ask is there any other method to schedule a program to run ?
</span><br>
<span class="quotelev1">&gt; For best, it can straight away starts the second mpi program once the previous program is finished.
</span><br>
<p>Is this a local machine just for you, a cluster for you or one shared by several users?
<br>
<p>You could also think of implementing a full blown queuingsystem like SoGE <a href="https://arc.liv.ac.uk/trac/SGE">https://arc.liv.ac.uk/trac/SGE</a> or Torque <a href="http://www.adaptivecomputing.com/products/open-source/torque/">http://www.adaptivecomputing.com/products/open-source/torque/</a>
<br>
<p>You don't have to think about a time when the job should start then (even though this is possible with the -a option), but requesting the intended number of cores will allow a job to run as soon as these resources are available. I.e. you can submit several jobs at once but they will be executed one after the other without oversubscribing the available resources.
<br>
<p>-- Reuti
<br>
<p>NB: There is also the command `batch` in the at-suite to start the next job when the load drops under a certain value.
<br>
<p><p><span class="quotelev1">&gt; Hope to get some reply from you all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; Shi Wei
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
<li><strong>Next message:</strong> <a href="22561.php">Reuti: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Previous message:</strong> <a href="22559.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>In reply to:</strong> <a href="22557.php">Ng Shi Wei: "[OMPI users] Unable to schedule an MPI tasks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/01/23318.php">Ng Shi Wei: "Re: [OMPI users] Unable to schedule an MPI tasks"</a>
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
