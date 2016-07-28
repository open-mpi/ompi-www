<?
$subject_val = "Re: [OMPI users] OpenMPI-1.2.7 + SGE";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 11:39:51 2008" -->
<!-- isoreceived="20081104163951" -->
<!-- sent="Tue, 4 Nov 2008 17:39:43 +0100" -->
<!-- isosent="20081104163943" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI-1.2.7 + SGE" -->
<!-- id="9C71B188-BE09-4CAF-BBAC-4A1B5D6AE7E1_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="cb60cbc40811040754t27287962j3b391b5a7990e1fc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI-1.2.7 + SGE<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-11-04 11:39:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<li><strong>Previous message:</strong> <a href="7205.php">Gus Correa: "Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi"</a>
<li><strong>In reply to:</strong> <a href="7204.php">Sangamesh B: "[OMPI users] OpenMPI-1.2.7 + SGE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 04.11.2008 um 16:54 schrieb Sangamesh B:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      In Rocks-5.0 cluster, OpenMPI-1.2.6 comes by default. I guess it
</span><br>
<span class="quotelev1">&gt; gets installed through rpm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     # /opt/openmpi/bin/ompi_info | grep gridengine
</span><br>
<span class="quotelev1">&gt;                  MCA ras: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.6)
</span><br>
<span class="quotelev1">&gt;                  MCA pls: gridengine (MCA v1.0, API v1.3, Component  
</span><br>
<span class="quotelev1">&gt; v1.2.6)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      Now I've to install OpenMPI-1.2.7. The &quot;./configure --help | grep
</span><br>
<span class="quotelev1">&gt; gridengine&quot; - doesn't show anything.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      In such scenario how OpenMPI-1.2.7 can be integrated to SGE?
</span><br>
<p>only for 1.3 it must be compiled with --with-sge, not in 1.2.x
<br>
<p><span class="quotelev1">&gt;     After achieving this integration:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      1. Is it possible to use -machinefile option in the SGE script?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Eg:
</span><br>
<span class="quotelev1">&gt;              #$ -pe orte 4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             /opt/openmpi/bin/mpirun -machinefile $TMPDIR/machines -np
</span><br>
<span class="quotelev1">&gt; 4 &lt;executable&gt;
</span><br>
<p>You don't need this. Open MPI with use the correct cores on its own.  
<br>
Just specify: mpirun -np $NSLOTS mypgm
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      2. If &quot;qstat -f&quot; is showing 2 slots on node1 and 2 slots on node2
</span><br>
<span class="quotelev1">&gt; for a 4 process openmpi job, then will these processes run exactly  on
</span><br>
<span class="quotelev1">&gt; those nodes?
</span><br>
<p>qstat is only an output of what is granted to the job. With a bad  
<br>
configuration you could start all forks on the master node of the  
<br>
parallel job and leave the slaves idling. Open MPI will do the right  
<br>
thing on its own.
<br>
<p>-- Reuti
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name           orte
</span><br>
<span class="quotelev1">&gt; slots             999
</span><br>
<span class="quotelev1">&gt; user_lists        NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists       NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args   /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; allocation_rule   $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves    TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots     min
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Sangamesh
</span><br>
<span class="quotelev1">&gt; Consultant - HPC
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
<li><strong>Next message:</strong> <a href="7207.php">Jeff Squyres: "Re: [OMPI users] mca btl_openib_flags default value"</a>
<li><strong>Previous message:</strong> <a href="7205.php">Gus Correa: "Re: [OMPI users] question regarding the configuration of multiple nics	for openmpi"</a>
<li><strong>In reply to:</strong> <a href="7204.php">Sangamesh B: "[OMPI users] OpenMPI-1.2.7 + SGE"</a>
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
