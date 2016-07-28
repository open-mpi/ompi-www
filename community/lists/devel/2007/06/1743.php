<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jun 22 04:28:39 2007" -->
<!-- isoreceived="20070622082839" -->
<!-- sent="Fri, 22 Jun 2007 10:20:36 +0200" -->
<!-- isosent="20070622082036" -->
<!-- name="Markus Daene" -->
<!-- email="markus.daene_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] (loose) SGE Integration fails, why?" -->
<!-- id="200706221020.36534.markus.daene_at_physik.uni-halle.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="467A7C8D.7010107_at_gmx.net" -->
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
<strong>From:</strong> Markus Daene (<em>markus.daene_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-22 04:20:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1742.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1737.php">sadfub_at_[hidden]: "[OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi.
<br>
<p>I think it is not necessary to specify the hosts via the hostfile using SGE 
<br>
and OpenMPI, even the $NSLOTS is not necessary , just run 
<br>
mpirun executable 
<br>
this works very well.
<br>
<p>to your memory problem:
<br>
I had similar problems when I specified the h_vmem option to use in SGE. 
<br>
Without SGE everything works, but starting with SGE gives such memory errors.
<br>
You can easily check this with 'qconf -sc'. If you have used this option, try 
<br>
without it. The problem in my case was that OpenMPI allocates sometimes a lot 
<br>
of memory and the job gets immediately killed by SGE, and one gets such error 
<br>
messages, see my posting some days ago. I am not sure if this helps in your 
<br>
case but it could be an explanation.
<br>
<p>Markus
<br>
<p><p><p>Am Donnerstag, 21. Juni 2007 15:26 schrieb sadfub_at_[hidden]:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm having some really strange error causing me some serious headaches.
</span><br>
<span class="quotelev1">&gt; I want to integrate OpenMPI version 1.1.1 from the OFED package version
</span><br>
<span class="quotelev1">&gt; 1.1 with SGE version 6.0. For mvapich all works, but for OpenMPI not ;(.
</span><br>
<span class="quotelev1">&gt; Here is my jobfile and error message:
</span><br>
<span class="quotelev1">&gt; #!/bin/csh -f
</span><br>
<span class="quotelev1">&gt; #$ -N MPI_Job
</span><br>
<span class="quotelev1">&gt; #$ -pe mpi 4
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1.-1/lib64
</span><br>
<span class="quotelev1">&gt; /usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -np $NSLOTS -hostfile
</span><br>
<span class="quotelev1">&gt; $TMPDIR/machines /usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ERRORMESSAGE:
</span><br>
<span class="quotelev1">&gt; [node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25768] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25769] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25770] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,102400)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [node04:25771] mca_mpool_openib_register: ibv_reg_mr(0x584000,528384)
</span><br>
<span class="quotelev1">&gt; failed with error: Cannot allocate memory
</span><br>
<span class="quotelev1">&gt; [0,1,1][btl_openib.c:808:mca_btl_openib_create_cq_srq] error creating
</span><br>
<span class="quotelev1">&gt; low priority cq for mthca0 errno says Cannot allocate memory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Error&quot; (-1) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; MPI_Job.e111975 (END)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run the OMPI job just with out SGE =&gt; everything works e.g. the
</span><br>
<span class="quotelev1">&gt; following command:
</span><br>
<span class="quotelev1">&gt; /usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -v -np 4 -H
</span><br>
<span class="quotelev1">&gt; node04,node04,node04,node04
</span><br>
<span class="quotelev1">&gt; /usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I do this with static machinefiles, it works too:
</span><br>
<span class="quotelev1">&gt; $ cat /tmp/machines
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt; node04
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; /usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -v -np 4 -hostfile
</span><br>
<span class="quotelev1">&gt; /tmp/machines /usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And if I run this in a jobscript it works even with a static machinefile
</span><br>
<span class="quotelev1">&gt; (not shown below):
</span><br>
<span class="quotelev1">&gt; #!/bin/csh -f
</span><br>
<span class="quotelev1">&gt; #$ -N MPI_Job
</span><br>
<span class="quotelev1">&gt; #$ -pe mpi 4
</span><br>
<span class="quotelev1">&gt; export PATH=$PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin
</span><br>
<span class="quotelev1">&gt; export
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/usr/ofed/mpi/gcc/openmpi-1.1.1.-1/lib64
</span><br>
<span class="quotelev1">&gt; /usr/ofed/mpi/gcc/openmpi-1.1.1-1/bin/mpirun -v -np 4 -H
</span><br>
<span class="quotelev1">&gt; node04,node04,node04,node04
</span><br>
<span class="quotelev1">&gt; /usr/ofed/mpi/gcc/openmpi-1.1.1-1/tests/IMB-2.3/IMB-MPI1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are correct ulimits for all nodes in the cluster e.g. node04:
</span><br>
<span class="quotelev1">&gt; -sh-3.00$ ssh node04 ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 1024
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) 8162952
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 139264
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; And the infiniband seems to have no troubles at all:
</span><br>
<span class="quotelev1">&gt; -sh-3.00$ ibstat
</span><br>
<span class="quotelev1">&gt; CA 'mthca0'
</span><br>
<span class="quotelev1">&gt;         CA type: MT25204
</span><br>
<span class="quotelev1">&gt;         Number of ports: 1
</span><br>
<span class="quotelev1">&gt;         Firmware version: 1.0.800
</span><br>
<span class="quotelev1">&gt;         Hardware version: a0
</span><br>
<span class="quotelev1">&gt;         Node GUID: 0x0002c90200220ac8
</span><br>
<span class="quotelev1">&gt;         System image GUID: 0x0002c90200220acb
</span><br>
<span class="quotelev1">&gt;         Port 1:
</span><br>
<span class="quotelev1">&gt;                 State: Active
</span><br>
<span class="quotelev1">&gt;                 Physical state: LinkUp
</span><br>
<span class="quotelev1">&gt;                 Rate: 10
</span><br>
<span class="quotelev1">&gt;                 Base lid: 18
</span><br>
<span class="quotelev1">&gt;                 LMC: 0
</span><br>
<span class="quotelev1">&gt;                 SM lid: 1
</span><br>
<span class="quotelev1">&gt;                 Capability mask: 0x02510a68
</span><br>
<span class="quotelev1">&gt;                 Port GUID: 0x0002c90200220ac9Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any suggestions..
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Previous message:</strong> <a href="1742.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>In reply to:</strong> <a href="1737.php">sadfub_at_[hidden]: "[OMPI devel] (loose) SGE Integration fails, why?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
<li><strong>Reply:</strong> <a href="1744.php">sadfub_at_[hidden]: "Re: [OMPI devel] (loose) SGE Integration fails, why?"</a>
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
