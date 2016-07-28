<?
$subject_val = "[OMPI users] Performance differences using mpirun and SLURM";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 20 17:15:16 2015" -->
<!-- isoreceived="20150520211516" -->
<!-- sent="Wed, 20 May 2015 14:15:15 -0700" -->
<!-- isosent="20150520211515" -->
<!-- name="Patrick LeGresley" -->
<!-- email="plegresl_at_[hidden]" -->
<!-- subject="[OMPI users] Performance differences using mpirun and SLURM" -->
<!-- id="CAEE0hjwe51afF=YvxYE-XO4qHHevfJcBFquYYqWFpRc=o4XasA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Performance differences using mpirun and SLURM<br>
<strong>From:</strong> Patrick LeGresley (<em>plegresl_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-20 17:15:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26895.php">Ralph Castain: "Re: [OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>Previous message:</strong> <a href="26893.php">Gilles Gouaillardet: "Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26895.php">Ralph Castain: "Re: [OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>Reply:</strong> <a href="26895.php">Ralph Castain: "Re: [OMPI users] Performance differences using mpirun and SLURM"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I've noticed some performance differences when using mpirun and SLURM for
<br>
job startup.  Below I've included example output from the OSU bidirectional
<br>
bandwidth benchmark that seem to show a significant difference in bandwidth
<br>
for larger message sizes.  I've looked at the OpenMPI FAQ for running jobs
<br>
under SLURM and my OpenMPI installation was configured using both
<br>
--with-slurm and --with-pmi.  Similar differences in performance seem to
<br>
happen if you use the &quot;wrong&quot; mpirun executable, for example using the
<br>
1.8.4 mpirun to start an executable compiled using 1.8.5 (also shown
<br>
below).  I thought maybe the environment variables set by the mpirun from
<br>
1.8.5 were important, but using the same environment variables set by the
<br>
1.8.5 version of mpirun didn't seem to influence the behavior.  Is this a
<br>
known issue, or are there ideas of why using SLURM seems to result in such
<br>
different performance for larger message sizes?
<br>
<p>Thanks,
<br>
<p>Patrick
<br>
<p><p>*SLURM:*
<br>
<p>plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ *env | grep OMPI*
<br>
<p>plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ *srun -p GTX980x4sys
<br>
--ntasks 2 ./osu_bibw*
<br>
<p>cpu_bind=MASK - svail-15, task  0  0 [6916]: mask 0x8000 set
<br>
<p>cpu_bind=MASK - svail-15, task  1  1 [6917]: mask 0x80000000 set
<br>
<p># OSU MPI-CUDA Bi-Directional Bandwidth Test
<br>
<p># Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
<p># Size     Bi-Bandwidth (MB/s)
<br>
<p>1                         1.44
<br>
<p>2                         6.12
<br>
<p>4                        12.19
<br>
<p>8                        24.45
<br>
<p>16                       48.95
<br>
<p>32                       97.76
<br>
<p>64                      193.11
<br>
<p>128                     375.00
<br>
<p>256                     688.26
<br>
<p>512                    1101.45
<br>
<p>1024                   1975.76
<br>
<p>2048                   3298.67
<br>
<p>4096                   3270.65
<br>
<p>8192                   4737.39
<br>
<p>16384                  5479.92
<br>
<p>32768                  6331.54
<br>
<p>65536                  6392.04
<br>
<p>131072                 5034.20
<br>
<p>262144                 3762.04
<br>
<p>524288                 4543.68
<br>
<p>1048576                4244.62
<br>
<p>2097152                4233.64
<br>
<p>4194304                4232.11
<br>
<p>plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ *export
<br>
OMPI_MCA_btl=self,vader*
<br>
<p>plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$ *srun -p GTX980x4sys
<br>
--ntasks 2 ./osu_bibw*
<br>
<p>cpu_bind=MASK - svail-15, task  0  0 [6961]: mask 0x8000 set
<br>
<p>cpu_bind=MASK - svail-15, task  1  1 [6962]: mask 0x80000000 set
<br>
<p># OSU MPI-CUDA Bi-Directional Bandwidth Test
<br>
<p># Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
<p># Size     Bi-Bandwidth (MB/s)
<br>
<p>1                         2.59
<br>
<p>2                         4.78
<br>
<p>4                         9.89
<br>
<p>8                        41.75
<br>
<p>16                       81.89
<br>
<p>32                      166.25
<br>
<p>64                      239.32
<br>
<p>128                     388.07
<br>
<p>256                     667.63
<br>
<p>512                    1166.52
<br>
<p>1024                   1978.11
<br>
<p>2048                   3462.92
<br>
<p>4096                   3831.92
<br>
<p>8192                   5722.75
<br>
<p>16384                  8295.46
<br>
<p>32768                 10401.27
<br>
<p>65536                 11181.00
<br>
<p>131072                10024.32
<br>
<p>262144                 9953.43
<br>
<p>524288                10237.18
<br>
<p>1048576               13484.74
<br>
<p>2097152               13548.25
<br>
<p>4194304               12401.71
<br>
<p>plegresl_at_svail-1:~/SRC/openmpi-1.8.5/majel/bin$
<br>
<p>*mpirun:*
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ *env | grep OMPI*
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$
<br>
*/tools/openmpi-1.8.5/bin/mpirun
<br>
-np 2 --report-bindings -npersocket 1 ./osu_bibw*
<br>
<p>[svail-15:06868] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]:
<br>
[../../../../../../../..][BB/../../../../../../..]
<br>
<p>[svail-15:06868] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:
<br>
[BB/../../../../../../..][../../../../../../../..]
<br>
<p># OSU MPI-CUDA Bi-Directional Bandwidth Test
<br>
<p># Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
<p># Size     Bi-Bandwidth (MB/s)
<br>
<p>1                         2.40
<br>
<p>2                         5.11
<br>
<p>4                        11.96
<br>
<p>8                        24.68
<br>
<p>16                       49.17
<br>
<p>32                       92.79
<br>
<p>64                      179.02
<br>
<p>128                     317.15
<br>
<p>256                     484.08
<br>
<p>512                     920.96
<br>
<p>1024                   1543.13
<br>
<p>2048                   2588.79
<br>
<p>4096                   3267.20
<br>
<p>8192                   4324.19
<br>
<p>16384                  5642.14
<br>
<p>32768                  6422.15
<br>
<p>65536                  6988.72
<br>
<p>131072                 6793.10
<br>
<p>262144                 6284.13
<br>
<p>524288                 6398.42
<br>
<p>1048576                7267.68
<br>
<p>2097152                7430.67
<br>
<p>4194304                7215.42
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ *export
<br>
OMPI_MCA_btl=self,vader*
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$
<br>
*/tools/openmpi-1.8.5/bin/mpirun
<br>
-np 2 --report-bindings -npersocket 1 ./osu_bibw*
<br>
<p>[svail-15:06892] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]:
<br>
[../../../../../../../..][BB/../../../../../../..]
<br>
<p>[svail-15:06892] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:
<br>
[BB/../../../../../../..][../../../../../../../..]
<br>
<p># OSU MPI-CUDA Bi-Directional Bandwidth Test
<br>
<p># Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
<p># Size     Bi-Bandwidth (MB/s)
<br>
<p>1                         3.09
<br>
<p>2                         6.32
<br>
<p>4                        29.89
<br>
<p>8                        60.45
<br>
<p>16                       86.52
<br>
<p>32                      206.86
<br>
<p>64                      265.10
<br>
<p>128                     348.81
<br>
<p>256                     507.25
<br>
<p>512                     856.77
<br>
<p>1024                   1468.91
<br>
<p>2048                   2508.12
<br>
<p>4096                   3949.40
<br>
<p>8192                   6830.64
<br>
<p>16384                 10118.59
<br>
<p>32768                 14690.76
<br>
<p>65536                 18497.65
<br>
<p>131072                20405.31
<br>
<p>262144                19300.26
<br>
<p>524288                18829.65
<br>
<p>1048576               19374.49
<br>
<p>2097152               21596.29
<br>
<p>4194304               24355.79
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$
<br>
<p><p>*&quot;wrong&quot; mpirun:*
<br>
<p><p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$ *env | grep OMPI*
<br>
<p>OMPI_MCA_btl=self,vader
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$
<br>
*/tools/openmpi-1.8.4/bin/mpirun
<br>
-np 2 --report-bindings -npersocket 1 ./osu_bibw*
<br>
<p>[svail-15:07109] MCW rank 1 bound to socket 1[core 8[hwt 0-1]]:
<br>
[../../../../../../../..][BB/../../../../../../..]
<br>
<p>[svail-15:07109] MCW rank 0 bound to socket 0[core 0[hwt 0-1]]:
<br>
[BB/../../../../../../..][../../../../../../../..]
<br>
<p># OSU MPI-CUDA Bi-Directional Bandwidth Test
<br>
<p># Send Buffer on HOST (H) and Receive Buffer on HOST (H)
<br>
<p># Size     Bi-Bandwidth (MB/s)
<br>
<p>1                         6.10
<br>
<p>2                        13.67
<br>
<p>4                        26.74
<br>
<p>8                        57.17
<br>
<p>16                       81.82
<br>
<p>32                      238.84
<br>
<p>64                      241.87
<br>
<p>128                     319.86
<br>
<p>256                     490.38
<br>
<p>512                     805.50
<br>
<p>1024                   1394.54
<br>
<p>2048                   2350.89
<br>
<p>4096                   2845.86
<br>
<p>8192                   3692.30
<br>
<p>16384                  5196.64
<br>
<p>32768                  6018.54
<br>
<p>65536                  6360.56
<br>
<p>131072                 6540.06
<br>
<p>262144                 6860.57
<br>
<p>524288                 7945.36
<br>
<p>1048576                7983.90
<br>
<p>2097152                7926.69
<br>
<p>4194304                7836.43
<br>
<p>plegresl_at_svail-15:~/SRC/openmpi-1.8.5/majel/bin$
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26895.php">Ralph Castain: "Re: [OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>Previous message:</strong> <a href="26893.php">Gilles Gouaillardet: "Re: [OMPI users] 'The MPI_Comm_rank() function was called before MPI_INIT was invoked'"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26895.php">Ralph Castain: "Re: [OMPI users] Performance differences using mpirun and SLURM"</a>
<li><strong>Reply:</strong> <a href="26895.php">Ralph Castain: "Re: [OMPI users] Performance differences using mpirun and SLURM"</a>
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
