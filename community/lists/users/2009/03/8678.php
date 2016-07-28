<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 13:32:51 2009" -->
<!-- isoreceived="20090331173251" -->
<!-- sent="Tue, 31 Mar 2009 13:32:44 -0400" -->
<!-- isosent="20090331173244" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="49D253BC.4090707_at_Sun.COM" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="92daa7bf0903310843p2bdbfcf4k6bb854da6551d635_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Strange behaviour of SGE+OpenMPI<br>
<strong>From:</strong> Rolf Vandevaart (<em>Rolf.Vandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 13:32:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8675.php">PN: "[OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8700.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/31/09 11:43, PN wrote:
<br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
</span><br>
<span class="quotelev1">&gt; I have 2 compute nodes for testing, each node has a single quad core CPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is my submission script and PE config:
</span><br>
<span class="quotelev1">&gt; $ cat hpl-8cpu.sge
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #$ -N HPL_8cpu_IB
</span><br>
<span class="quotelev1">&gt; #$ -pe mpi-fu 8
</span><br>
<span class="quotelev1">&gt; #$ -cwd
</span><br>
<span class="quotelev1">&gt; #$ -j y
</span><br>
<span class="quotelev1">&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt; #$ -V
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev1">&gt; # For IB
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile $TMPDIR/machines 
</span><br>
<span class="quotelev1">&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tested the mpirun command can be run correctly in command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ qconf -sp mpi-fu
</span><br>
<span class="quotelev1">&gt; pe_name            mpi-fu
</span><br>
<span class="quotelev1">&gt; slots              8
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev1">&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt; control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt; urgency_slots      min
</span><br>
<span class="quotelev1">&gt; accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've checked the $TMPDIR/machines after submit, it was correct.
</span><br>
<span class="quotelev1">&gt; node0002
</span><br>
<span class="quotelev1">&gt; node0002
</span><br>
<span class="quotelev1">&gt; node0002
</span><br>
<span class="quotelev1">&gt; node0002
</span><br>
<span class="quotelev1">&gt; node0001
</span><br>
<span class="quotelev1">&gt; node0001
</span><br>
<span class="quotelev1">&gt; node0001
</span><br>
<span class="quotelev1">&gt; node0001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, I found that if I explicitly specify the &quot;-machinefile 
</span><br>
<span class="quotelev1">&gt; $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a single 
</span><br>
<span class="quotelev1">&gt; node, i.e. node0002.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line mpirun, i.e.
</span><br>
<span class="quotelev1">&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The mpi processes can start correctly, 4 processes in node0001 and 4 
</span><br>
<span class="quotelev1">&gt; processes in node0002.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this normal behaviour of Open MPI?
</span><br>
<p>I just tried it both ways and I got the same result both times.  The 
<br>
processes are split between the nodes.  Perhaps to be extra sure, you 
<br>
can just run hostname?  And for what it is worth, as you have seen, you 
<br>
do not need to specify a machines file.  Open MPI will use the ones that 
<br>
were allocated by SGE.  You can also change your parallel queue to not 
<br>
run any scripts.  Like this:
<br>
<p>start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, I wondered if I have IB interface, for example, the hostname of IB 
</span><br>
<span class="quotelev1">&gt; become node0001-clust and node0002-clust, will Open MPI automatically 
</span><br>
<span class="quotelev1">&gt; use the IB interface?
</span><br>
Yes, it should use the IB interface.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about if I have 2 IB ports in each node, which IB bonding was done, 
</span><br>
<span class="quotelev1">&gt; will Open MPI automatically benefit from the double bandwidth?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best Regards,
</span><br>
<span class="quotelev1">&gt; PN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<p><p><pre>
-- 
=========================
rolf.vandevaart_at_[hidden]
781-442-3043
=========================
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8679.php">Jeff Squyres: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>Previous message:</strong> <a href="8677.php">Terry Dontje: "Re: [OMPI users] Linux opteron infiniband sunstudio configure, problem"</a>
<li><strong>In reply to:</strong> <a href="8675.php">PN: "[OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8683.php">Dave Love: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8700.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
