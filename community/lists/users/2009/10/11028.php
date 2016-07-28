<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 30 12:35:32 2009" -->
<!-- isoreceived="20091030163532" -->
<!-- sent="Fri, 30 Oct 2009 12:35:23 -0400" -->
<!-- isosent="20091030163523" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="4AEB15CB.30002_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="65BE579095BE0C489DB2EC8C7F85E83D1E33C0_at_UXEXMBU115.academic.windsor" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-30 12:35:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11027.php">Abhishek Kulkarni: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11025.php">Konstantinos Angelopoulos: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Konstantinos, list
<br>
<p>If you want &quot;qsub&quot; you need to install the resource manager /
<br>
queue system in your PC.
<br>
Assuming your PC is a Linux box, if your resource manager
<br>
is Torque/PBS on some Linux distributions it can be installed
<br>
from an rpm through yum (or equivalent mechanism), for instance.
<br>
I am not sure, but I would guess SGE and SLURM may also be available
<br>
through rmps also.
<br>
Or you can install the resource manager from source.
<br>
We have workstations/PCs here running Torque (installed through yum and 
<br>
rpm), for the convenience of submitting jobs as in a cluster,
<br>
and letting the queue control them.
<br>
<p>You could also use just &quot;mpiexec&quot; directly.
<br>
This doesn't require a resource manager, but you have to be
<br>
the resource manager yourself, baby-sitting the jobs,
<br>
submitting one at a time, waiting for completion, etc.
<br>
<p>On another related issue,
<br>
let's say your 2 processors are dual core,
<br>
for a total of 4 cores.
<br>
Then you can count on  submitting &quot;mpiexec&quot; with a number of processes
<br>
up to 4 ( &quot;-n 4&quot; or &quot;-np 4&quot;).
<br>
<p>If you use more than that 4, say &quot;-np 6&quot;,
<br>
you are oversubscribing the physical cores.
<br>
Linux will have to make the 6 processes take turns in using the
<br>
4 cores.
<br>
(Some resource managers won't let you do this.)
<br>
Oversubscription can work for lightweight MPI jobs, but in my
<br>
experience it eventually hangs for heavier computation/communication
<br>
codes.
<br>
<p>Also, note that any interactive work that you may be doing on your PC,
<br>
concurrently with the MPI jobs, will have an impact on performance,
<br>
and may even take the MPI jobs to a halt.
<br>
We had this experience here, when the user of the aforementioned
<br>
workstation insisted in running Matlab, browsing the web,
<br>
watching streaming video, listening to music, while the MPI jobs
<br>
were running.  :)
<br>
<p>I hope this helps.
<br>
Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<p><p>Konstantinos Angelopoulos wrote:
<br>
<span class="quotelev1">&gt; good part of the day,
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; I am trying to run a parallel program (that used to run in a cluster) in my double core pc. Could openmpi simulate the distribution of the parallel jobs  to my 2 processors meaning will qsub work even if it is not a real cluster?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; thank you for reading my message and for any answer.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;                                                                          
</span><br>
<span class="quotelev1">&gt; Konstantinos Angelopoulos
</span><br>
<span class="quotelev1">&gt; Post-Graduate Student
</span><br>
<span class="quotelev1">&gt; Brunel University
</span><br>
<span class="quotelev1">&gt; School of Engineering and Design 
</span><br>
<span class="quotelev1">&gt; Uxbridge, Middlesex
</span><br>
<span class="quotelev1">&gt; UB8 3PH 
</span><br>
<span class="quotelev1">&gt; UK 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Contact emails: mepgkka1_at_[hidden]
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt;  
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
<li><strong>Next message:</strong> <a href="11029.php">Terry Dontje: "Re: [OMPI users] Runtime error while running mpirun"</a>
<li><strong>Previous message:</strong> <a href="11027.php">Abhishek Kulkarni: "Re: [OMPI users] Checkpoint/Restart in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11025.php">Konstantinos Angelopoulos: "[OMPI users] (no subject)"</a>
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
