<?
$subject_val = "Re: [OMPI users] Performance differences using mpirun and SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 18:01:22 2015" -->
<!-- isoreceived="20150520220122" -->
<!-- sent="Wed, 20 May 2015 15:01:17 -0700" -->
<!-- isosent="20150520220117" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Performance differences using mpirun and SLURM" -->
<!-- id="CC0F757F-5FD0-498E-9A7C-A6E9CBBCD8CE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAEE0hjwe51afF=YvxYE-XO4qHHevfJcBFquYYqWFpRc=o4XasA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Performance differences using mpirun and SLURM<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 18:01:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26896.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26894.php">Patrick LeGresley: "[OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>In reply to:</strong> <a href="26894.php">Patrick LeGresley: "[OMPI users] Performance differences using mpirun and SLURM"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are major differences when you launch via srun vs mpirun as the OMPI daemons provide a lot of &#226;&#128;&#156;helper&#226;&#128;&#157; info to the procs that they don&#226;&#128;&#153;t get when directly launched. We&#226;&#128;&#153;ve tried to minimize those differences, but we can&#226;&#128;&#153;t necessarily get them all.
<br>
<p>We&#226;&#128;&#153;ve seen reports of this before, but there aren&#226;&#128;&#153;t any known solutions. We are working on a new version of PMI (called PMIx) that will hopefully reduce those differences, but it isn&#226;&#128;&#153;t released yet.
<br>
<p>Bottom line for now is that direct launch has its downside.
<br>
<p><p><span class="quotelev1">&gt; On May 20, 2015, at 2:15 PM, Patrick LeGresley &lt;plegresl_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've noticed some performance differences when using mpirun and SLURM for job startup.  Below I've included example output from the OSU bidirectional bandwidth benchmark that seem to show a significant difference in bandwidth for larger message sizes.  I've looked at the OpenMPI FAQ for running jobs under SLURM and my OpenMPI installation was configured using both --with-slurm and --with-pmi.  Similar differences in performance seem to happen if you use the &quot;wrong&quot; mpirun executable, for example using the 1.8.4 mpirun to start an executable compiled using 1.8.5 (also shown below).  I thought maybe the environment variables set by the mpirun from 1.8.5 were important, but using the same environment variables set by the 1.8.5 version of mpirun didn't seem to influence the behavior.  Is this a known issue, or are there ideas of why using SLURM seems to result in such different performance for larger message sizes?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Patrick
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; SLURM:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ env | grep OMPI
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ srun -p GTX980x4sys --ntasks 2 ./osu_bibw
</span><br>
<span class="quotelev1">&gt; cpu_bind=MASK - svail-15, task  0  0 [6916]: mask 0x8000 set
</span><br>
<span class="quotelev1">&gt; cpu_bind=MASK - svail-15, task  1  1 [6917]: mask 0x80000000 set
</span><br>
<span class="quotelev1">&gt; # OSU MPI-CUDA Bi-Directional Bandwidth Test
</span><br>
<span class="quotelev1">&gt; # Send Buffer on HOST (H) and Receive Buffer on HOST (H)
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         1.44
</span><br>
<span class="quotelev1">&gt; 2                         6.12
</span><br>
<span class="quotelev1">&gt; 4                        12.19
</span><br>
<span class="quotelev1">&gt; 8                        24.45
</span><br>
<span class="quotelev1">&gt; 16                       48.95
</span><br>
<span class="quotelev1">&gt; 32                       97.76
</span><br>
<span class="quotelev1">&gt; 64                      193.11
</span><br>
<span class="quotelev1">&gt; 128                     375.00
</span><br>
<span class="quotelev1">&gt; 256                     688.26
</span><br>
<span class="quotelev1">&gt; 512                    1101.45
</span><br>
<span class="quotelev1">&gt; 1024                   1975.76
</span><br>
<span class="quotelev1">&gt; 2048                   3298.67
</span><br>
<span class="quotelev1">&gt; 4096                   3270.65
</span><br>
<span class="quotelev1">&gt; 8192                   4737.39
</span><br>
<span class="quotelev1">&gt; 16384                  5479.92
</span><br>
<span class="quotelev1">&gt; 32768                  6331.54
</span><br>
<span class="quotelev1">&gt; 65536                  6392.04
</span><br>
<span class="quotelev1">&gt; 131072                 5034.20
</span><br>
<span class="quotelev1">&gt; 262144                 3762.04
</span><br>
<span class="quotelev1">&gt; 524288                 4543.68
</span><br>
<span class="quotelev1">&gt; 1048576                4244.62
</span><br>
<span class="quotelev1">&gt; 2097152                4233.64
</span><br>
<span class="quotelev1">&gt; 4194304                4232.11
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ export OMPI_MCA_btl=self,vader
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ srun -p GTX980x4sys --ntasks 2 ./osu_bibw
</span><br>
<span class="quotelev1">&gt; cpu_bind=MASK - svail-15, task  0  0 [6961]: mask 0x8000 set
</span><br>
<span class="quotelev1">&gt; cpu_bind=MASK - svail-15, task  1  1 [6962]: mask 0x80000000 set
</span><br>
<span class="quotelev1">&gt; # OSU MPI-CUDA Bi-Directional Bandwidth Test
</span><br>
<span class="quotelev1">&gt; # Send Buffer on HOST (H) and Receive Buffer on HOST (H)
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         2.59
</span><br>
<span class="quotelev1">&gt; 2                         4.78
</span><br>
<span class="quotelev1">&gt; 4                         9.89
</span><br>
<span class="quotelev1">&gt; 8                        41.75
</span><br>
<span class="quotelev1">&gt; 16                       81.89
</span><br>
<span class="quotelev1">&gt; 32                      166.25
</span><br>
<span class="quotelev1">&gt; 64                      239.32
</span><br>
<span class="quotelev1">&gt; 128                     388.07
</span><br>
<span class="quotelev1">&gt; 256                     667.63
</span><br>
<span class="quotelev1">&gt; 512                    1166.52
</span><br>
<span class="quotelev1">&gt; 1024                   1978.11
</span><br>
<span class="quotelev1">&gt; 2048                   3462.92
</span><br>
<span class="quotelev1">&gt; 4096                   3831.92
</span><br>
<span class="quotelev1">&gt; 8192                   5722.75
</span><br>
<span class="quotelev1">&gt; 16384                  8295.46
</span><br>
<span class="quotelev1">&gt; 32768                 10401.27
</span><br>
<span class="quotelev1">&gt; 65536                 11181.00
</span><br>
<span class="quotelev1">&gt; 131072                10024.32
</span><br>
<span class="quotelev1">&gt; 262144                 9953.43
</span><br>
<span class="quotelev1">&gt; 524288                10237.18
</span><br>
<span class="quotelev1">&gt; 1048576               13484.74
</span><br>
<span class="quotelev1">&gt; 2097152               13548.25
</span><br>
<span class="quotelev1">&gt; 4194304               12401.71
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ env | grep OMPI
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ /tools/openmpi-1.8.5/bin/mpirun -np 2 --report-bindings -npersocket 1 ./osu_bibw
</span><br>
<span class="quotelev1">&gt; [svail-15:06868] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svail-15:06868] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; # OSU MPI-CUDA Bi-Directional Bandwidth Test
</span><br>
<span class="quotelev1">&gt; # Send Buffer on HOST (H) and Receive Buffer on HOST (H)
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         2.40
</span><br>
<span class="quotelev1">&gt; 2                         5.11
</span><br>
<span class="quotelev1">&gt; 4                        11.96
</span><br>
<span class="quotelev1">&gt; 8                        24.68
</span><br>
<span class="quotelev1">&gt; 16                       49.17
</span><br>
<span class="quotelev1">&gt; 32                       92.79
</span><br>
<span class="quotelev1">&gt; 64                      179.02
</span><br>
<span class="quotelev1">&gt; 128                     317.15
</span><br>
<span class="quotelev1">&gt; 256                     484.08
</span><br>
<span class="quotelev1">&gt; 512                     920.96
</span><br>
<span class="quotelev1">&gt; 1024                   1543.13
</span><br>
<span class="quotelev1">&gt; 2048                   2588.79
</span><br>
<span class="quotelev1">&gt; 4096                   3267.20
</span><br>
<span class="quotelev1">&gt; 8192                   4324.19
</span><br>
<span class="quotelev1">&gt; 16384                  5642.14
</span><br>
<span class="quotelev1">&gt; 32768                  6422.15
</span><br>
<span class="quotelev1">&gt; 65536                  6988.72
</span><br>
<span class="quotelev1">&gt; 131072                 6793.10
</span><br>
<span class="quotelev1">&gt; 262144                 6284.13
</span><br>
<span class="quotelev1">&gt; 524288                 6398.42
</span><br>
<span class="quotelev1">&gt; 1048576                7267.68
</span><br>
<span class="quotelev1">&gt; 2097152                7430.67
</span><br>
<span class="quotelev1">&gt; 4194304                7215.42
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ export OMPI_MCA_btl=self,vader
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ /tools/openmpi-1.8.5/bin/mpirun -np 2 --report-bindings -npersocket 1 ./osu_bibw
</span><br>
<span class="quotelev1">&gt; [svail-15:06892] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svail-15:06892] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; # OSU MPI-CUDA Bi-Directional Bandwidth Test
</span><br>
<span class="quotelev1">&gt; # Send Buffer on HOST (H) and Receive Buffer on HOST (H)
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         3.09
</span><br>
<span class="quotelev1">&gt; 2                         6.32
</span><br>
<span class="quotelev1">&gt; 4                        29.89
</span><br>
<span class="quotelev1">&gt; 8                        60.45
</span><br>
<span class="quotelev1">&gt; 16                       86.52
</span><br>
<span class="quotelev1">&gt; 32                      206.86
</span><br>
<span class="quotelev1">&gt; 64                      265.10
</span><br>
<span class="quotelev1">&gt; 128                     348.81
</span><br>
<span class="quotelev1">&gt; 256                     507.25
</span><br>
<span class="quotelev1">&gt; 512                     856.77
</span><br>
<span class="quotelev1">&gt; 1024                   1468.91
</span><br>
<span class="quotelev1">&gt; 2048                   2508.12
</span><br>
<span class="quotelev1">&gt; 4096                   3949.40
</span><br>
<span class="quotelev1">&gt; 8192                   6830.64
</span><br>
<span class="quotelev1">&gt; 16384                 10118.59
</span><br>
<span class="quotelev1">&gt; 32768                 14690.76
</span><br>
<span class="quotelev1">&gt; 65536                 18497.65
</span><br>
<span class="quotelev1">&gt; 131072                20405.31
</span><br>
<span class="quotelev1">&gt; 262144                19300.26
</span><br>
<span class="quotelev1">&gt; 524288                18829.65
</span><br>
<span class="quotelev1">&gt; 1048576               19374.49
</span><br>
<span class="quotelev1">&gt; 2097152               21596.29
</span><br>
<span class="quotelev1">&gt; 4194304               24355.79
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;wrong&quot; mpirun:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ env | grep OMPI
</span><br>
<span class="quotelev1">&gt; OMPI_MCA_btl=self,vader
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ /tools/openmpi-1.8.4/bin/mpirun -np 2 --report-bindings -npersocket 1 ./osu_bibw
</span><br>
<span class="quotelev1">&gt; [svail-15:07109] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]: [../../../../../../../..][BB/../../../../../../..]
</span><br>
<span class="quotelev1">&gt; [svail-15:07109] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]: [BB/../../../../../../..][../../../../../../../..]
</span><br>
<span class="quotelev1">&gt; # OSU MPI-CUDA Bi-Directional Bandwidth Test
</span><br>
<span class="quotelev1">&gt; # Send Buffer on HOST (H) and Receive Buffer on HOST (H)
</span><br>
<span class="quotelev1">&gt; # Size     Bi-Bandwidth (MB/s)
</span><br>
<span class="quotelev1">&gt; 1                         6.10
</span><br>
<span class="quotelev1">&gt; 2                        13.67
</span><br>
<span class="quotelev1">&gt; 4                        26.74
</span><br>
<span class="quotelev1">&gt; 8                        57.17
</span><br>
<span class="quotelev1">&gt; 16                       81.82
</span><br>
<span class="quotelev1">&gt; 32                      238.84
</span><br>
<span class="quotelev1">&gt; 64                      241.87
</span><br>
<span class="quotelev1">&gt; 128                     319.86
</span><br>
<span class="quotelev1">&gt; 256                     490.38
</span><br>
<span class="quotelev1">&gt; 512                     805.50
</span><br>
<span class="quotelev1">&gt; 1024                   1394.54
</span><br>
<span class="quotelev1">&gt; 2048                   2350.89
</span><br>
<span class="quotelev1">&gt; 4096                   2845.86
</span><br>
<span class="quotelev1">&gt; 8192                   3692.30
</span><br>
<span class="quotelev1">&gt; 16384                  5196.64
</span><br>
<span class="quotelev1">&gt; 32768                  6018.54
</span><br>
<span class="quotelev1">&gt; 65536                  6360.56
</span><br>
<span class="quotelev1">&gt; 131072                 6540.06
</span><br>
<span class="quotelev1">&gt; 262144                 6860.57
</span><br>
<span class="quotelev1">&gt; 524288                 7945.36
</span><br>
<span class="quotelev1">&gt; 1048576                7983.90
</span><br>
<span class="quotelev1">&gt; 2097152                7926.69
</span><br>
<span class="quotelev1">&gt; 4194304                7836.43
</span><br>
<span class="quotelev1">&gt; plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26894.php">http://www.open-mpi.org/community/lists/users/2015/05/26894.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26895/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26896.php">George Bosilca: "Re: [OMPI users] Open MPI collectives algorithm selection"</a>
<li><strong>Previous message:</strong> <a href="26894.php">Patrick LeGresley: "[OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>In reply to:</strong> <a href="26894.php">Patrick LeGresley: "[OMPI users] Performance differences using mpirun and SLURM"</a>
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
