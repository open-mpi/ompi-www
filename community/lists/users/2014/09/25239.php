<?
$subject_val = "Re: [OMPI users] SGE and openMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  3 06:28:30 2014" -->
<!-- isoreceived="20140903102830" -->
<!-- sent="Wed, 3 Sep 2014 12:28:20 +0200" -->
<!-- isosent="20140903102820" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SGE and openMPI" -->
<!-- id="FCAF9EFA-22CD-4EA4-88F8-52BB0CFFEBDB_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5406EAAD.7090401_at_dm.univaq.it" -->
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
<strong>Subject:</strong> Re: [OMPI users] SGE and openMPI<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-03 06:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25238.php">Donato Pera: "[OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25238.php">Donato Pera: "[OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 03.09.2014 um 12:17 schrieb Donato Pera:
<br>
<p><span class="quotelev1">&gt; I'm using Rocks 5.4.3 with SGE 6.1 I installed
</span><br>
<span class="quotelev1">&gt; a new version of openMPI 1.6.5 when I run
</span><br>
<span class="quotelev1">&gt; a script using SGE+openMPI (1.6.5) in a single node
</span><br>
<span class="quotelev1">&gt; I don't have any problems but when I try to use more nodes
</span><br>
<span class="quotelev1">&gt; I get this error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A hostfile was provided that contains at least one node not
</span><br>
<span class="quotelev1">&gt; present in the allocation:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  hostfile:  /tmp/21202.1.parallel.q/machines
</span><br>
<span class="quotelev1">&gt;  node:      compute-2-4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you are operating in a resource-managed environment, then only
</span><br>
<span class="quotelev1">&gt; nodes that are in the allocation can be used in the hostfile. You
</span><br>
<span class="quotelev1">&gt; may find relative node syntax to be a useful alternative to
</span><br>
<span class="quotelev1">&gt; specifying absolute node names see the orte_hosts man page for
</span><br>
<span class="quotelev1">&gt; further information.
</span><br>
<p>Was Open MPI compiled with SGE support?
<br>
<p>$ ompi_info | grep grid
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA ras: gridengine (MCA v2.0, API v2.0, Component v1.6.5)
<br>
<p>In this case you don't need to provide any -machinefile option at all, as Open MPI will use the SGE generated one automatically.
<br>
<p>(Nevertheless the $TMPDIR/machines should be correct - it could be an issue between the short hostname and the FQDN - can you `cat` the $TMPDIR/machines in a job script for curiosity - and the output of `hostname` on a node too therein?).
<br>
<p><p><span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; rm: cannot remove `/tmp/21202.1.parallel.q/rsh': No such file or directory
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<p>The above line comes from &quot;stop_proc_args&quot; defined in the &quot;mpi&quot; PE and can be ignored. In fact: you don't need any &quot;stop_proc_args&quot; at all. Maybe you can define a new PE solely for Open MPI, often called &quot;orte&quot;:
<br>
<p><a href="https://www.open-mpi.org/faq/?category=sge">https://www.open-mpi.org/faq/?category=sge</a>
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I send also my SGE script:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -pe mpi 64
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -o ./file.out
</span><br>
<span class="quotelev1">&gt; #$ -e ./file.err
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=/home/SWcbbc/openmpi-1.6.5/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; CPMD_PATH=/home/tanzi/myroot/X86_66intel-mpi/
</span><br>
<span class="quotelev1">&gt; PP_PATH=/home/tanzi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /home/SWcbbc/openmpi-1.6.5/bin/mpirun -np 64 -machinefile 
</span><br>
<span class="quotelev1">&gt; $TMPDIR/machines  
</span><br>
<span class="quotelev1">&gt; ${CPMD_PATH}cpmd.x  input ${PP_PATH}/PP/ &gt; out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't understand my mistake
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards D.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/25238.php">http://www.open-mpi.org/community/lists/users/2014/09/25238.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Previous message:</strong> <a href="25238.php">Donato Pera: "[OMPI users] SGE and openMPI"</a>
<li><strong>In reply to:</strong> <a href="25238.php">Donato Pera: "[OMPI users] SGE and openMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
<li><strong>Reply:</strong> <a href="25240.php">Donato Pera: "Re: [OMPI users] SGE and openMPI"</a>
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
