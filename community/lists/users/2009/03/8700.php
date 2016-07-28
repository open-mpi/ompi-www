<?
$subject_val = "Re: [OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 22:39:42 2009" -->
<!-- isoreceived="20090401023942" -->
<!-- sent="Wed, 1 Apr 2009 10:39:36 +0800" -->
<!-- isosent="20090401023936" -->
<!-- name="PN" -->
<!-- email="poknam_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="92daa7bf0903311939of1788adsb9658ed10c80eaa7_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="49D253BC.4090707_at_Sun.COM" -->
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
<strong>From:</strong> PN (<em>poknam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 22:39:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Rolf,
<br>
<p>Thanks for your reply.
<br>
I've created another PE and changed the submission script, explicitly
<br>
specify the hostname with &quot;--host&quot;.
<br>
However the result is the same.
<br>
<p># qconf -sp orte
<br>
pe_name            orte
<br>
slots              8
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /bin/true
<br>
stop_proc_args     /bin/true
<br>
allocation_rule    $fill_up
<br>
control_slaves     TRUE
<br>
job_is_first_task  FALSE
<br>
urgency_slots      min
<br>
accounting_summary TRUE
<br>
<p>$ cat hpl-8cpu-test.sge
<br>
#!/bin/bash
<br>
#
<br>
#$ -N HPL_8cpu_GB
<br>
#$ -pe orte 8
<br>
#$ -cwd
<br>
#$ -j y
<br>
#$ -S /bin/bash
<br>
#$ -V
<br>
#
<br>
cd /home/admin/hpl-2.0
<br>
/opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS --host
<br>
node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002
<br>
./bin/goto-openmpi-gcc/xhpl
<br>
<p><p># pdsh -a ps ax --width=200|grep hpl
<br>
node0002: 18901 ?        S      0:00 /opt/openmpi-gcc/bin/mpirun -v -np 8
<br>
--host
<br>
node0001,node0001,node0001,node0001,node0002,node0002,node0002,node0002
<br>
./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18902 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18903 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18904 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18905 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18906 ?        RLl    0:29 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18907 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18908 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
<br>
node0002: 18909 ?        RLl    0:28 ./bin/goto-openmpi-gcc/xhpl
<br>
<p>Any hint to debug this situation?
<br>
<p>Also, if I have 2 IB ports in each node, which IB bonding was done, will
<br>
Open MPI automatically benefit from the double bandwidth?
<br>
<p>Thanks a lot.
<br>
<p>Best Regards,
<br>
PN
<br>
<p>2009/4/1 Rolf Vandevaart &lt;Rolf.Vandevaart_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; On 03/31/09 11:43, PN wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 compute nodes for testing, each node has a single quad core CPU.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Here is my submission script and PE config:
</span><br>
<span class="quotelev2">&gt;&gt; $ cat hpl-8cpu.sge
</span><br>
<span class="quotelev2">&gt;&gt; #!/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; #$ -N HPL_8cpu_IB
</span><br>
<span class="quotelev2">&gt;&gt; #$ -pe mpi-fu 8
</span><br>
<span class="quotelev2">&gt;&gt; #$ -cwd
</span><br>
<span class="quotelev2">&gt;&gt; #$ -j y
</span><br>
<span class="quotelev2">&gt;&gt; #$ -S /bin/bash
</span><br>
<span class="quotelev2">&gt;&gt; #$ -V
</span><br>
<span class="quotelev2">&gt;&gt; #
</span><br>
<span class="quotelev2">&gt;&gt; cd /home/admin/hpl-2.0
</span><br>
<span class="quotelev2">&gt;&gt; # For IB
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile $TMPDIR/machines
</span><br>
<span class="quotelev2">&gt;&gt; ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've tested the mpirun command can be run correctly in command line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ qconf -sp mpi-fu
</span><br>
<span class="quotelev2">&gt;&gt; pe_name            mpi-fu
</span><br>
<span class="quotelev2">&gt;&gt; slots              8
</span><br>
<span class="quotelev2">&gt;&gt; user_lists         NONE
</span><br>
<span class="quotelev2">&gt;&gt; xuser_lists        NONE
</span><br>
<span class="quotelev2">&gt;&gt; start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh $pe_hostfile
</span><br>
<span class="quotelev2">&gt;&gt; stop_proc_args     /opt/sge/mpi/stopmpi.sh
</span><br>
<span class="quotelev2">&gt;&gt; allocation_rule    $fill_up
</span><br>
<span class="quotelev2">&gt;&gt; control_slaves     TRUE
</span><br>
<span class="quotelev2">&gt;&gt; job_is_first_task  FALSE
</span><br>
<span class="quotelev2">&gt;&gt; urgency_slots      min
</span><br>
<span class="quotelev2">&gt;&gt; accounting_summary TRUE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've checked the $TMPDIR/machines after submit, it was correct.
</span><br>
<span class="quotelev2">&gt;&gt; node0002
</span><br>
<span class="quotelev2">&gt;&gt; node0002
</span><br>
<span class="quotelev2">&gt;&gt; node0002
</span><br>
<span class="quotelev2">&gt;&gt; node0002
</span><br>
<span class="quotelev2">&gt;&gt; node0001
</span><br>
<span class="quotelev2">&gt;&gt; node0001
</span><br>
<span class="quotelev2">&gt;&gt; node0001
</span><br>
<span class="quotelev2">&gt;&gt; node0001
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, I found that if I explicitly specify the &quot;-machinefile
</span><br>
<span class="quotelev2">&gt;&gt; $TMPDIR/machines&quot;, all 8 mpi processes were spawned within a single node,
</span><br>
<span class="quotelev2">&gt;&gt; i.e. node0002.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line mpirun,
</span><br>
<span class="quotelev2">&gt;&gt; i.e.
</span><br>
<span class="quotelev2">&gt;&gt; /opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS ./bin/goto-openmpi-gcc/xhpl
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The mpi processes can start correctly, 4 processes in node0001 and 4
</span><br>
<span class="quotelev2">&gt;&gt; processes in node0002.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this normal behaviour of Open MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I just tried it both ways and I got the same result both times.  The
</span><br>
<span class="quotelev1">&gt; processes are split between the nodes.  Perhaps to be extra sure, you can
</span><br>
<span class="quotelev1">&gt; just run hostname?  And for what it is worth, as you have seen, you do not
</span><br>
<span class="quotelev1">&gt; need to specify a machines file.  Open MPI will use the ones that were
</span><br>
<span class="quotelev1">&gt; allocated by SGE.  You can also change your parallel queue to not run any
</span><br>
<span class="quotelev1">&gt; scripts.  Like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; start_proc_args    /bin/true
</span><br>
<span class="quotelev1">&gt; stop_proc_args     /bin/true
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, I wondered if I have IB interface, for example, the hostname of IB
</span><br>
<span class="quotelev2">&gt;&gt; become node0001-clust and node0002-clust, will Open MPI automatically use
</span><br>
<span class="quotelev2">&gt;&gt; the IB interface?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; Yes, it should use the IB interface.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; How about if I have 2 IB ports in each node, which IB bonding was done,
</span><br>
<span class="quotelev2">&gt;&gt; will Open MPI automatically benefit from the double bandwidth?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks a lot.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Best Regards,
</span><br>
<span class="quotelev2">&gt;&gt; PN
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; rolf.vandevaart_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 781-442-3043
</span><br>
<span class="quotelev1">&gt; =========================
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8700/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8701.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>Previous message:</strong> <a href="8699.php">Rahul Nabar: "Re: [OMPI users] job runs with mpirun on a node but not if submitted via Torque."</a>
<li><strong>In reply to:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/04/8709.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
