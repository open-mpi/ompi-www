<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jun 21 09:26:22 2007" -->
<!-- isoreceived="20070621132622" -->
<!-- sent="Thu, 21 Jun 2007 15:26:37 +0200" -->
<!-- isosent="20070621132637" -->
<!-- name="sadfub_at_[hidden]" -->
<!-- email="sadfub_at_[hidden]" -->
<!-- subject="[OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="467A7C8D.7010107_at_gmx.net" -->
<!-- charset="ISO-8859-15" -->
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
<strong>From:</strong> <a href="mailto:sadfub_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20(loose)%20SGE%20Integration%20fails,%20why?"><em>sadfub_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-06-21 09:26:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm having some really strange error causing me some serious headaches.
<br>
I want to integrate OpenMPI version 1.1.1 from the OFED package version
<br>
1.1 with SGE version 6.0. For mvapich all works, but for OpenMPI not ;(.
<br>
Here is my jobfile and error message:
<br>
#!/bin/csh -f
<br>
#$ -N MPI_Job
<br>
#$ -pe mpi 4
<br>
export PATH=$PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin
<br>
export
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1.-1/lib64
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -np $NSLOTS -hostfile
<br>
$TMPDIR/machines /usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>ERRORMESSAGE:
<br>
[node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
<br>
failed with error: Cannot allocate memory
<br>
[0,1,1][btl_openib.c:808:mca_btl_openib_create_cq_srq] error creating
<br>
low priority cq for mthca0 errno says Cannot allocate memory
<br>
<p>--------------------------------------------------------------------------
<br>
It looks like MPI_INIT failed for some reason; your parallel process is
<br>
likely to abort.  There are many reasons that a parallel process can
<br>
fail during MPI_INIT; some of which are due to configuration or environment
<br>
problems.  This failure appears to be an internal failure; here's some
<br>
additional information (which may only be relevant to an Open MPI
<br>
developer):
<br>
<p>&nbsp;&nbsp;PML add procs failed
<br>
&nbsp;&nbsp;--&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
<br>
--------------------------------------------------------------------------
<br>
*** An error occurred in MPI_Init
<br>
*** before MPI was initialized
<br>
*** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
MPI_Job.e111975 (END)
<br>
<p><p>If I run the OMPI job just with out SGE =&gt; everything works e.g. the
<br>
following command:
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -v -np 4 -H
<br>
node04,node04,node04,node04
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>If I do this with static machinefiles, it works too:
<br>
$ cat /tmp/machines
<br>
node04
<br>
node04
<br>
node04
<br>
node04
<br>
<p>/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -v -np 4 -hostfile
<br>
/tmp/machines /usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>And if I run this in a jobscript it works even with a static machinefile
<br>
(not shown below):
<br>
#!/bin/csh -f
<br>
#$ -N MPI_Job
<br>
#$ -pe mpi 4
<br>
export PATH=$PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin
<br>
export
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1.-1/lib64
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -v -np 4 -H
<br>
node04,node04,node04,node04
<br>
/usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
<br>
<p>There are correct ulimits for all nodes in the cluster e.g. node04:
<br>
-sh-3.00$ ssh node04 ulimit -a
<br>
core file size          (blocks, -c) 0
<br>
data seg size           (kbytes, -d) unlimited
<br>
file size               (blocks, -f) unlimited
<br>
pending signals                 (-i) 1024
<br>
max locked memory       (kbytes, -l) 8162952
<br>
max memory size         (kbytes, -m) unlimited
<br>
open files                      (-n) 1024
<br>
pipe size            (512 bytes, -p) 8
<br>
POSIX message queues     (bytes, -q) 819200
<br>
stack size              (kbytes, -s) 10240
<br>
cpu time               (seconds, -t) unlimited
<br>
max user processes              (-u) 139264
<br>
virtual memory          (kbytes, -v) unlimited
<br>
file locks                      (-x) unlimited
<br>
<p>And the infiniband seems to have no troubles at all:
<br>
-sh-3.00$ ibstat
<br>
CA 'mthca0'
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CA type: MT25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Number of ports: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Firmware version: 1.0.800
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hardware version: a0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Node GUID: 0x0002c90200220ac8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System image GUID: 0x0002c90200220acb
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port 1:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;State: Active
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Physical state: LinkUp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rate: 10
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Base lid: 18
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LMC: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SM lid: 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Capability mask: 0x02510a68
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Port GUID: 0x0002c90200220ac9Hi,
<br>
<p>Thanks for any suggestions..
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1736.php">Jeff Squyres: "Re: [OMPI devel] large virtual memory consumption on smp nodes and gridengine problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1738.php">Jeff Squyres: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1743.php">Markus Daene: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
