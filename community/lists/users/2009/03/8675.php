<?
$subject_val = "[OMPI users] Strange behaviour of SGE+OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 31 11:43:30 2009" -->
<!-- isoreceived="20090331154330" -->
<!-- sent="Tue, 31 Mar 2009 23:43:25 +0800" -->
<!-- isosent="20090331154325" -->
<!-- name="PN" -->
<!-- email="poknam_at_[hidden]" -->
<!-- subject="[OMPI users] Strange behaviour of SGE+OpenMPI" -->
<!-- id="92daa7bf0903310843p2bdbfcf4k6bb854da6551d635_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Strange behaviour of SGE+OpenMPI<br>
<strong>From:</strong> PN (<em>poknam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-31 11:43:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8676.php">M C: "[OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear all,
<br>
<p>I'm using Open MPI 1.3.1 and SGE 6.2u2 on CentOS 5.2
<br>
I have 2 compute nodes for testing, each node has a single quad core CPU.
<br>
<p>Here is my submission script and PE config:
<br>
$ cat hpl-8cpu.sge
<br>
#!/bin/bash
<br>
#
<br>
#$ -N HPL_8cpu_IB
<br>
#$ -pe mpi-fu 8
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
# For IB
<br>
/opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS -machinefile $TMPDIR/machines
<br>
./bin/goto-openmpi-gcc/xhpl
<br>
<p>I've tested the mpirun command can be run correctly in command line.
<br>
<p>$ qconf -sp mpi-fu
<br>
pe_name            mpi-fu
<br>
slots              8
<br>
user_lists         NONE
<br>
xuser_lists        NONE
<br>
start_proc_args    /opt/sge/mpi/startmpi.sh -catch_rsh $pe_hostfile
<br>
stop_proc_args     /opt/sge/mpi/stopmpi.sh
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
<p><p>I've checked the $TMPDIR/machines after submit, it was correct.
<br>
node0002
<br>
node0002
<br>
node0002
<br>
node0002
<br>
node0001
<br>
node0001
<br>
node0001
<br>
node0001
<br>
<p>However, I found that if I explicitly specify the &quot;-machinefile
<br>
$TMPDIR/machines&quot;, all 8 mpi processes were spawned within a single node,
<br>
i.e. node0002.
<br>
<p>However, if I omit &quot;-machinefile $TMPDIR/machines&quot; in the line mpirun, i.e.
<br>
/opt/openmpi-gcc/bin/mpirun -v -np $NSLOTS ./bin/goto-openmpi-gcc/xhpl
<br>
<p>The mpi processes can start correctly, 4 processes in node0001 and 4
<br>
processes in node0002.
<br>
<p>Is this normal behaviour of Open MPI?
<br>
<p>Also, I wondered if I have IB interface, for example, the hostname of IB
<br>
become node0001-clust and node0002-clust, will Open MPI automatically use
<br>
the IB interface?
<br>
<p>How about if I have 2 IB ports in each node, which IB bonding was done, will
<br>
Open MPI automatically benefit from the double bandwidth?
<br>
<p>Thanks a lot.
<br>
<p>Best Regards,
<br>
PN
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8675/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8676.php">M C: "[OMPI users] OpenMPI 1.3.1 + BLCR build problem"</a>
<li><strong>Previous message:</strong> <a href="8674.php">Massimo Cafaro: "Re: [OMPI users] Generic Type"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
<li><strong>Reply:</strong> <a href="8678.php">Rolf Vandevaart: "Re: [OMPI users] Strange behaviour of SGE+OpenMPI"</a>
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
