<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr  1 09:10:25 2009" -->
<!-- isoreceived="20090401131025" -->
<!-- sent="Wed, 01 Apr 2009 09:10:06 -0400" -->
<!-- isosent="20090401131006" -->
<!-- name="Rolf Vandevaart" -->
<!-- email="Rolf.Vandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="49D367AE.7000200_at_Sun.COM" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="92daa7bf0903311939of1788adsb9658ed10c80eaa7_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-04-01 09:10:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8708.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8700.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8718.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It turns out that the use of --host and --hostfile act as a filter of 
<br>
which nodes to run on when you are running under SGE.  So, listing them 
<br>
several times does not affect where the processes land.  However, this 
<br>
still does not explain why you are seeing what you are seeing.  One 
<br>
thing you can try is to add this to the mpirun command.
<br>
<p>&nbsp;&nbsp;-mca ras_gridengine_verbose 100
<br>
<p>This will provide some additional information as to what Open MPI is 
<br>
seeing as nodes and slots from SGE.  (Is there any chance that node0002 
<br>
actually has 8 slots?)
<br>
<p>I just retried on my cluster of 2 CPU sparc solaris nodes.  When I run 
<br>
with np=2, the two MPI processes will all land on a single node, because 
<br>
that node has two slots.  When I go up to np=4, then they move on to the 
<br>
other node.  The --host acts as a filter to where they should run.
<br>
<p>In terms of the using &quot;IB bonding&quot;, I do not know what that means 
<br>
exactly.  Open MPI does stripe over multiple IB interfaces, so I think 
<br>
the answer is yes.
<br>
<p>Rolf
<br>
<p>PS:  Here is what my np=4 job script looked like.  (I just changed np=2 
<br>
for the other run)
<br>
<p>&nbsp;&nbsp;burl-ct-280r-0 148 =&gt;more run.sh
<br>
#! /bin/bash
<br>
#$ -S /bin/bash
<br>
#$ -V
<br>
#$ -cwd
<br>
#$ -N Job1
<br>
#$ -pe orte 200
<br>
#$ -j y
<br>
#$ -l h_rt=00:20:00      # Run time (hh:mm:ss) - 10 min
<br>
<p>echo $NSLOTS
<br>
/opt/SUNWhpc/HPC8.2/sun/bin/mpirun -mca ras_gridengine_verbose 100 -v 
<br>
-np 4 -host burl-ct-280r-1,burl-ct-280r-0 -mca btl self,sm,tcp hostname
<br>
<p>Here is the output (somewhat truncated)
<br>
&nbsp;&nbsp;burl-ct-280r-0 150 =&gt;more Job1.o199
<br>
200
<br>
[burl-ct-280r-2:22132] ras:gridengine: JOB_ID: 199
<br>
[burl-ct-280r-2:22132] ras:gridengine: PE_HOSTFILE: 
<br>
/ws/ompi-tools/orte/sge/sge6_2u1/default/spool/burl-ct-280r-2/active_jobs/199.1/pe_hostfile
<br>
[..snip..]
<br>
[burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-0: PE_HOSTFILE shows 
<br>
slots=2
<br>
[burl-ct-280r-2:22132] ras:gridengine: burl-ct-280r-1: PE_HOSTFILE shows 
<br>
slots=2
<br>
[..snip..]
<br>
burl-ct-280r-1
<br>
burl-ct-280r-1
<br>
burl-ct-280r-0
<br>
burl-ct-280r-0
<br>
&nbsp;&nbsp;burl-ct-280r-0 151 =&gt;
<br>
<p><p>On 03/31/09 22:39, PN wrote:
<br>
<span class="quotelev1">&gt; Dear Rolf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt; I've created another PE and changed the submission script, explicitly 
</span><br>
<span class="quotelev1">&gt; specify the hostname with &quot;--host&quot;.
</span><br>
<span class="quotelev1">&gt; However the result is the same.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # qconf -sp orte
</span><br>
<span class="quotelev1">&gt; pe_name            orte
</span><br>
<span class="quotelev1">&gt; slots              8
</span><br>
<span class="quotelev1">&gt; user_lists         NONE
</span><br>
<span class="quotelev1">&gt; xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
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
<span class="quotelev1">&gt; $ cat hpl-8cpu-test.sge
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt; #$ -N HPL_8cpu_GB
</span><br>
<span class="quotelev1">&gt; #$ -pe orte 8
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
<span class="quotelev1">&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS --host 
</span><br>
<span class="quotelev1">&gt; node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002 
</span><br>
<span class="quotelev1">&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; # pdsh -a ps ax --width=200|grep hpl
</span><br>
<span class="quotelev1">&gt; node0002: 18901 ?        S      0:00 /opt/openmpi-gcc/bin/mpirun -v -np 
</span><br>
<span class="quotelev1">&gt; 8 --host 
</span><br>
<span class="quotelev1">&gt; node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002 
</span><br>
<span class="quotelev1">&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18902 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18903 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18904 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18905 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18906 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18907 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18908 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; node0002: 18909 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any hint to debug this situation?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Also, if I have 2 IB ports in each node, which IB bonding was done, will 
</span><br>
<span class="quotelev1">&gt; Open MPI automatically benefit from the double bandwidth?
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
<span class="quotelev1">&gt; 2009/4/1 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Rolf.Vandevaart_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On 03/31/09 11:43, PN wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Dear all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
</span><br>
<span class="quotelev1">&gt;         I have 2 compute nodes for testing, each node has a single quad
</span><br>
<span class="quotelev1">&gt;         core CPU.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Here is my submission script and PE config:
</span><br>
<span class="quotelev1">&gt;         $ cat hpl-8cpu.sge
</span><br>
<span class="quotelev1">&gt;         #!/bin/bash
</span><br>
<span class="quotelev1">&gt;         #
</span><br>
<span class="quotelev1">&gt;         #$ -N HPL_8cpu_IB
</span><br>
<span class="quotelev1">&gt;         #$ -pe mpi-fu 8
</span><br>
<span class="quotelev1">&gt;         #$ -cwd
</span><br>
<span class="quotelev1">&gt;         #$ -j y
</span><br>
<span class="quotelev1">&gt;         #$ -S /bin/bash
</span><br>
<span class="quotelev1">&gt;         #$ -V
</span><br>
<span class="quotelev1">&gt;         #
</span><br>
<span class="quotelev1">&gt;         cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev1">&gt;         # For IB
</span><br>
<span class="quotelev1">&gt;         /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile
</span><br>
<span class="quotelev1">&gt;         $TMPDIR/machines ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I've tested the mpirun command can be run correctly in command line.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         $ qconf -sp mpi-fu
</span><br>
<span class="quotelev1">&gt;         pe_name            mpi-fu
</span><br>
<span class="quotelev1">&gt;         slots              8
</span><br>
<span class="quotelev1">&gt;         user_lists         NONE
</span><br>
<span class="quotelev1">&gt;         xuser_lists        NONE
</span><br>
<span class="quotelev1">&gt;         start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev1">&gt;         stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev1">&gt;         allocation_rule    $fill_up
</span><br>
<span class="quotelev1">&gt;         control_slaves     TRUE
</span><br>
<span class="quotelev1">&gt;         job_is_first_task  FALSE
</span><br>
<span class="quotelev1">&gt;         urgency_slots      min
</span><br>
<span class="quotelev1">&gt;         accounting_summary TRUE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         I've checked the $TMPDIR/machines after submit, it was correct.
</span><br>
<span class="quotelev1">&gt;         node0002
</span><br>
<span class="quotelev1">&gt;         node0002
</span><br>
<span class="quotelev1">&gt;         node0002
</span><br>
<span class="quotelev1">&gt;         node0002
</span><br>
<span class="quotelev1">&gt;         node0001
</span><br>
<span class="quotelev1">&gt;         node0001
</span><br>
<span class="quotelev1">&gt;         node0001
</span><br>
<span class="quotelev1">&gt;         node0001
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         However, I found that if I explicitly specify the &quot;-machinefile
</span><br>
<span class="quotelev1">&gt;         $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a
</span><br>
<span class="quotelev1">&gt;         single node, i.e. node0002.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line
</span><br>
<span class="quotelev1">&gt;         mpirun, i.e.
</span><br>
<span class="quotelev1">&gt;         /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS
</span><br>
<span class="quotelev1">&gt;         ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         The mpi processes can start correctly, 4 processes in node0001
</span><br>
<span class="quotelev1">&gt;         and 4 processes in node0002.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Is this normal behaviour of Open MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     I just tried it both ways and I got the same result both times.  The
</span><br>
<span class="quotelev1">&gt;     processes are split between the nodes.  Perhaps to be extra sure,
</span><br>
<span class="quotelev1">&gt;     you can just run hostname?  And for what it is worth, as you have
</span><br>
<span class="quotelev1">&gt;     seen, you do not need to specify a machines file.  Open MPI will use
</span><br>
<span class="quotelev1">&gt;     the ones that were allocated by SGE.  You can also change your
</span><br>
<span class="quotelev1">&gt;     parallel queue to not run any scripts.  Like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt;     stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Also, I wondered if I have IB interface, for example, the
</span><br>
<span class="quotelev1">&gt;         hostname of IB become node0001-clust and node0002-clust, will
</span><br>
<span class="quotelev1">&gt;         Open MPI automatically use the IB interface?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     Yes, it should use the IB interface.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         How about if I have 2 IB ports in each node, which IB bonding
</span><br>
<span class="quotelev1">&gt;         was done, will Open MPI automatically benefit from the double
</span><br>
<span class="quotelev1">&gt;         bandwidth?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         Best Regards,
</span><br>
<span class="quotelev1">&gt;         PN
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     =========================
</span><br>
<span class="quotelev1">&gt;     rolf.vandevaart_at_[hidden] &lt;mailto:rolf.vandevaart_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     781-442-3043
</span><br>
<span class="quotelev1">&gt;     =========================
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="8710.php">Ralph Castain: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>Previous message:</strong> <a href="8708.php">Guanyinzhu: "Re: [OMPI users] Beginner's question: how to avoid a running mpi job hang if host or network failed or orted deamon killed?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/03/8700.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8711.php">Ralph Castain: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8718.php">PN: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
