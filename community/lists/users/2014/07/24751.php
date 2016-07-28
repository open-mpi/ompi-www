<?
$subject_val = "Re: [OMPI users] openMP  and mpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul  4 12:37:21 2014" -->
<!-- isoreceived="20140704163721" -->
<!-- sent="Fri, 4 Jul 2014 09:37:12 -0700" -->
<!-- isosent="20140704163712" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMP  and mpi problem" -->
<!-- id="1A8F555C-9B23-42B1-8F0B-BDFEB4C4E57E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1404487193.402110482_at_f395.i.mail.ru" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMP  and mpi problem<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-04 12:37:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24752.php">Tim Prince: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24750.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I see what's going on here. The problem stems from a combination of two things:
<br>
<p>1. your setup of the hostfile guarantees we will think there is only one slot on each host, even though Slurm will have assigned more. Is there some reason you are doing that? OMPI knows how to read the Slurm envars to get the allocation, so there is no reason to be creating a hostfile
<br>
<p>2. you didn't specify how many processes to run. Looks like we have a bug for that case when you also specify pe=N and N &gt; 1.
<br>
<p>I can deal with the bug, but I suspect this will run just fine if you (a) let us just read the Slurm allocation ourselves, and (b) add &quot;-np 1&quot; to you cmd line
<br>
<p><p>On Jul 4, 2014, at 8:19 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; 1. Intell mpi is located here: /opt/intel/impi/4.1.0/intel64/lib. I have added OMPI path at the start and got the same output.
</span><br>
<span class="quotelev1">&gt; 2. here is my cmd line:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export OMP_NUM_THREADS=8; export LD_LIBRARY_PATH=$LD_LIBRARY_PATH:/mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.9.0_mxm-3.0/lib; sbatch -p test -t 5 --exclusive -N 1 -o ./results/hybrid-hello_omp$i.out -e ./results/hybrid-hello_omp$i.err ompi_mxm3.0 ./hybrid-hello; done
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat ompi_mxm3.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #srun --resv-ports &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; #exit $?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
</span><br>
<span class="quotelev1">&gt; HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
</span><br>
<span class="quotelev1">&gt; srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE || { rm -f $HOSTFILE; exit 255; }
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --map-by slot:pe=8 --mca rmaps_base_verbose 20 --hostfile $HOSTFILE &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt; rc=$?
</span><br>
<span class="quotelev1">&gt; rm -f $HOSTFILE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; exit $rc
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Fri, 4 Jul 2014 07:06:34 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hmmm...couple of things here:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Intel packages Intel MPI in their compiler, and so there is in fact an mpiexec and MPI libraries in your path before us. I would advise always putting the OMPI path at the start of your path envars to avoid potential conflict
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. I'm having trouble understanding your command line because of all the variable definitions. Could you please tell me what the mpirun cmd line is? I suspect I know the problem, but need to see the actual cmd line to confirm it
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 4, 2014, at 1:38 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There is only one path to mpi lib.
</span><br>
<span class="quotelev2">&gt;&gt; echo $LD_LIBRARY_PATH 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/intel/composer_xe_2013.2.146/mkl/lib/intel64:/opt/intel/composer_xe_2013.2.146/compiler/lib/intel64:/home/users/semenov/BFD/lib:/home/users/semenov/local/lib:/usr/lib64/:/mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.9.0_mxm-3.0/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This one also looks correct.
</span><br>
<span class="quotelev2">&gt;&gt; $ldd hybrid-hello
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; linux-vdso.so.1 =&gt; (0x00007fff8b983000)
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.0 =&gt; /mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.9.0_mxm-3.0/lib/libmpi.so.0 (0x00007f58c95cb000)
</span><br>
<span class="quotelev2">&gt;&gt; libm.so.6 =&gt; /lib64/libm.so.6 (0x000000338ac00000)
</span><br>
<span class="quotelev2">&gt;&gt; libiomp5.so =&gt; /opt/intel/composer_xe_2013.2.146/compiler/lib/intel64/libiomp5.so (0x00007f58c92a2000)
</span><br>
<span class="quotelev2">&gt;&gt; libstdc++.so.6 =&gt; /usr/lib64/libstdc++.so.6 (0x000000338d400000)
</span><br>
<span class="quotelev2">&gt;&gt; libgcc_s.so.1 =&gt; /lib64/libgcc_s.so.1 (0x000000338cc00000)
</span><br>
<span class="quotelev2">&gt;&gt; libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x000000338b800000)
</span><br>
<span class="quotelev2">&gt;&gt; libc.so.6 =&gt; /lib64/libc.so.6 (0x000000338b000000)
</span><br>
<span class="quotelev2">&gt;&gt; libdl.so.2 =&gt; /lib64/libdl.so.2 (0x000000338b400000)
</span><br>
<span class="quotelev2">&gt;&gt; libopen-rte.so.0 =&gt; /mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.9.0_mxm-3.0/lib/libopen-rte.so.0 (0x00007f58c9009000)
</span><br>
<span class="quotelev2">&gt;&gt; libopen-pal.so.0 =&gt; /mnt/data/users/dm2/vol3/semenov/_scratch/openmpi-1.9.0_mxm-3.0/lib/libopen-pal.so.0 (0x00007f58c8d05000)
</span><br>
<span class="quotelev2">&gt;&gt; libnuma.so.1 =&gt; /usr/lib64/libnuma.so.1 (0x00007f58c8afb000)
</span><br>
<span class="quotelev2">&gt;&gt; librt.so.1 =&gt; /lib64/librt.so.1 (0x000000338c000000)
</span><br>
<span class="quotelev2">&gt;&gt; libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003393800000)
</span><br>
<span class="quotelev2">&gt;&gt; libutil.so.1 =&gt; /lib64/libutil.so.1 (0x000000339b600000)
</span><br>
<span class="quotelev2">&gt;&gt; libimf.so =&gt; /opt/intel/composer_xe_2013.2.146/compiler/lib/intel64/libimf.so (0x00007f58c863e000)
</span><br>
<span class="quotelev2">&gt;&gt; libsvml.so =&gt; /opt/intel/composer_xe_2013.2.146/compiler/lib/intel64/libsvml.so (0x00007f58c7c73000)
</span><br>
<span class="quotelev2">&gt;&gt; libirng.so =&gt; /opt/intel/composer_xe_2013.2.146/compiler/lib/intel64/libirng.so (0x00007f58c7a6b000)
</span><br>
<span class="quotelev2">&gt;&gt; libintlc.so.5 =&gt; /opt/intel/composer_xe_2013.2.146/compiler/lib/intel64/libintlc.so.5 (0x00007f58c781d000)
</span><br>
<span class="quotelev2">&gt;&gt; /lib64/ld-linux-x86-64.so.2 (0x000000338a800000)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; open mpi 1.5.5 was preinstalled to &quot;/opt/mpi/openmpi-1.5.5-icc/&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is an output after adding &quot;--mca rmaps_base_verbose 20&quot; and &quot;--map-by slot:pe=8&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; outfile:
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Your job failed to map. Either no mapper was available, or none
</span><br>
<span class="quotelev2">&gt;&gt; of the available mappers was able to perform the requested
</span><br>
<span class="quotelev2">&gt;&gt; mapping operation. This can happen if you request a map type
</span><br>
<span class="quotelev2">&gt;&gt; (e.g., loadbalance) and the corresponding mapper was not built.
</span><br>
<span class="quotelev2">&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; errfile:
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:lama: Priority 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:lama: Map : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:lama: Bind : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:lama: MPPR : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:lama: Order : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component lama register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component mindist register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component ppr register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component rank_file register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component resilient register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component round_robin register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component seq register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_register: component staged has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] [[26215,0],0] rmaps:base set policy with slot:pe=8
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] [[26215,0],0] rmaps:base policy slot modifiers pe=8 provided
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] [[26215,0],0] rmaps:base check modifiers with pe=8
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] [[26215,0],0] rmaps:base setting pe/rank to 8
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component mindist open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component ppr open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component rank_file open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component resilient open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component round_robin open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component seq open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: components_open: component staged open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [lama]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] [[26215,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: mindist Priority: 20
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: staged Priority: 5
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: lama Priority: 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps: mapping job [26215,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps: creating new map for job [26215,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps: nprocs 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps mapping given - using default
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:ppr: job [26215,1] not using ppr mapper
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:seq: job [26215,1] not using seq mapper
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:resilient: cannot perform initial map of job [26215,1] - no fault groups
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:mindist: job [26215,1] not using mindist mapper
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:rr: mapping job [26215,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] node: node1-128-29 daemon: 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:rr: mapping by slot for job [26215,1] slots 1 num_procs 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:rr:slot working node node1-128-29
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:rr:slot assigning 0 procs to node node1-128-29
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca:rmaps:base: computing vpids by slot for job [26215,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component mindist closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component ppr closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component resilient closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component seq closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: component staged closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21477] mca: base: close: unloading component staged
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here is an output after adding &quot;--mca rmaps_base_verbose 20&quot; and  WITHOUT &quot;--map-by slot:pe=8&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; outfile:
</span><br>
<span class="quotelev2">&gt;&gt; nothing
</span><br>
<span class="quotelev2">&gt;&gt; errfile:
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: registering rmaps components
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:lama: Priority 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:lama: Map : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:lama: Bind : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:lama: MPPR : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:lama: Order : NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component lama register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component mindist register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component ppr register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component rank_file register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component resilient register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component round_robin register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component seq register function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: found loaded component staged
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_register: component staged has no register or open function
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] [[25027,0],0] rmaps:base set policy with NULL
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: opening rmaps components
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component mindist open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component ppr open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component rank_file open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component resilient open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component round_robin open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component seq open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: found loaded component staged
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: components_open: component staged open function successful
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [lama]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [mindist]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [ppr]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [rank_file]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [resilient]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [round_robin]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [seq]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: checking available component staged
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:select: Querying component [staged]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] [[25027,0],0]: Final mapper priorities
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: ppr Priority: 90
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: seq Priority: 60
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: resilient Priority: 40
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: mindist Priority: 20
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: round_robin Priority: 10
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: staged Priority: 5
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: lama Priority: 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] Mapper: rank_file Priority: 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps: mapping job [25027,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps: creating new map for job [25027,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps: nprocs 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps mapping not given - using bycore
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:ppr: job [25027,1] not using ppr mapper
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:seq: job [25027,1] not using seq mapper
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:resilient: cannot perform initial map of job [25027,1] - no fault groups
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:mindist: job [25027,1] not using mindist mapper
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:rr: mapping job [25027,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] AVAILABLE NODES FOR MAPPING:
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] node: node1-128-29 daemon: 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:rr: mapping no-span by Core for job [25027,1] slots 1 num_procs 1
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:rr: found 8 Core objects on node node1-128-29
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:rr: calculated nprocs 1
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:rr: assigning nprocs 1
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:rr: assigning proc to object 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:base: computing vpids by slot for job [25027,1]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps:base: assigning rank 0 to node node1-128-29
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps: compute bindings for job [25027,1] with policy CORE
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps: bindings for job [25027,1] - bind in place
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca:rmaps: bind in place for job [25027,1] with bindings CORE
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] [[25027,0],0] reset_usage: node node1-128-29 has 1 procs on it
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] [[25027,0],0] reset_usage: ignoring proc [[25027,1],0]
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] BINDING PROC [[25027,1],0] TO Core NUMBER 0
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] [[25027,0],0] BOUND PROC [[25027,1],0] TO 0,8[Core:0] on node node1-128-29
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21571] mca: base: components_register: component sbgp / ibnet register function failed
</span><br>
<span class="quotelev2">&gt;&gt; Main 21.366504 secs total /1
</span><br>
<span class="quotelev2">&gt;&gt; Computation 21.048671 secs total /1000
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component lama
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component mindist closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component mindist
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component ppr closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component ppr
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component rank_file closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component rank_file
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component resilient closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component resilient
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component round_robin closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component round_robin
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component seq closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component seq
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: component staged closed
</span><br>
<span class="quotelev2">&gt;&gt; [node1-128-29:21569] mca: base: close: unloading component staged
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Timur.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thu, 3 Jul 2014 06:10:26 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; This looks to me like a message from some older version of OMPI. Please check your LD_LIBRARY_PATH and ensure that the 1.9 installation is at the *front* of that list.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Of course, I'm also assuming that you installed the two versions into different locations - yes?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, add &quot;--mca rmaps_base_verbose 20&quot; to your cmd line - this will tell us what mappers are being considered.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 3, 2014, at 1:31 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When i used --map-by slot:pe=8, i got the same message 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Your job failed to map. Either no mapper was available, or none
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the available mappers was able to perform the requested
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mapping operation. This can happen if you request a map type
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (e.g., loadbalance) and the corresponding mapper was not built.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Wed, 2 Jul 2014 07:36:48 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Let's keep this on the user list so others with similar issues can find it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that the $OMP_NUM_THREADS syntax isn't quite right, so it didn't pick up the actual value there. Since it doesn't hurt to have extra cpus, just set it to 8 for your test case and that should be fine, so adding a little clarity:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --map-by slot:pe=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not aware of any slurm utility similar to top, but there is no reason you can't just submit this as an interactive job and use top itself, is there?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As for that sbgp warning - you can probably just ignore it. Not sure why that is failing, but it just means that component will disqualify itself. If you want to eliminate it, just add
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -mca sbgp ^ibnet
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to your cmd line
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Jul 2, 2014, at 7:29 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, Ralph!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With '--map-by :pe=$OMP_NUM_THREADS'  i got:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Your job failed to map. Either no mapper was available, or none
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of the available mappers was able to perform the requested
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mapping operation. This can happen if you request a map type
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (e.g., loadbalance) and the corresponding mapper was not built.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What does it mean?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; With '--bind-to socket' everything looks better, but performance still worse..( but better than it was)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 1 thread 0.028 sec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 2 thread 0.018 sec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 4 thread 0.020 sec 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 8 thread 0.021 sec
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Do i have utility similar to the 'top' with sbatch?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Also, every time,  i got the message in ompi 1.9:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; mca: base: components_register: component sbgp / ibnet register function failed
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Is it bad?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Regards, 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Timur
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Wed, 2 Jul 2014 05:53:44 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI started binding by default during the 1.7 series. You should add the following to your cmd line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --map-by :pe=$OMP_NUM_THREADS
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This will give you a dedicated core for each thread. Alternatively, you could instead add
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --bind-to socket
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI 1.5.5 doesn't bind at all unless directed to do so, which is why you are getting the difference in behavior.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jul 2, 2014, at 12:33 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have open mpi 1.9a1r32104 and open mpi 1.5.5.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have much better perfomance in open mpi 1.5.5 with openMP on 8 cores
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; in  the program:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ....
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #define N 10000000
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...............
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ...............
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for (i = 0; i &lt; N; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a[i] = i * 1.0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; b[i] = i * 2.0;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #pragma omp parallel for shared(a, b, c) private(i)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; for (i = 0; i &lt; N; i++) {
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; c[i] = a[i] + b[i];
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; .............
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I got on 1 node 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; (for i in 1 2 4 8 ; do export OMP_NUM_THREADS=$i; sbatch -p test -t 5 --exclusive -N 1 -o hybrid-hello_omp$i.out -e hybrid-hello_omp$i.err ompi_mxm3.0 ./hybrid-hello; done)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &#239;&#187;&#191;open mpi 1.5.5 (Data for node: node1-128-17 Num slots: 8 Max slots: 0): 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8 threads 0.014527 sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 threads 0.016138 sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2 threads 0.018764 sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1 thread   0.029963 sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; openmpi 1.9a1r32104 (node1-128-29: slots=8 max_slots=0 slots_inuse=0 state=UP):
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 8 threads 0.035055 sec
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 4 threads 0.029859 sec 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 2 threads 0.019564 sec (same as open mpi 1.5.5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1 thread   0.028394 sec (same as open mpi 1.5.5)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; So, it looks like, that open mpi 1.9 use only 2 cores from 8.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What can i do with this?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; $cat ompi_mxm3.0
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; [ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE || { rm -f $HOSTFILE; exit 255; }
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --display-allocation --hostfile $HOSTFILE &quot;$@&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rc=$?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; rm -f $HOSTFILE
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; exit $rc
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For open mpi 1.5.5 i remove LD_PRELOAD from run script.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24738.php">http://www.open-mpi.org/community/lists/users/2014/07/24738.php</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24751/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24752.php">Tim Prince: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24750.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
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
