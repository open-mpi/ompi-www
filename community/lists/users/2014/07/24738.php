<?
$subject_val = "[OMPI users] openMP  and mpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 03:33:24 2014" -->
<!-- isoreceived="20140702073324" -->
<!-- sent="Wed, 02 Jul 2014 11:33:21 +0400" -->
<!-- isosent="20140702073321" -->
<!-- name="Timur Ismagilov" -->
<!-- email="tismagilov_at_[hidden]" -->
<!-- subject="[OMPI users] openMP  and mpi problem" -->
<!-- id="1404286401.857873638_at_f281.i.mail.ru" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] openMP  and mpi problem<br>
<strong>From:</strong> Timur Ismagilov (<em>tismagilov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-02 03:33:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24737.php">Brock Palen: "[OMPI users] HugeTLB messages from mpi code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Reply:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24741.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24742.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24743.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24750.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24751.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello!
<br>
I have open mpi&#194;&#160;1.9a1r32104 and open mpi 1.5.5.
<br>
I have much better perfomance in open mpi 1.5.5 with openMP on 8 cores
<br>
in &#194;&#160;the program:
<br>
....
<br>
<p>#define N 10000000
<br>
int main(int argc, char *argv[]) {
<br>
...............
<br>
MPI_Init(&amp;argc, &amp;argv);
<br>
...............
<br>
for (i = 0; i &lt; N; i++) {
<br>
a[i] = i * 1.0;
<br>
b[i] = i * 2.0;
<br>
}
<br>
<p>#pragma omp parallel for shared(a, b, c) private(i)
<br>
for (i = 0; i &lt; N; i++) {
<br>
c[i] = a[i] + b[i];
<br>
}
<br>
.............
<br>
MPI_Finalize();
<br>
}
<br>
I got on 1 node 
<br>
(for i in 1 2 4 8 ; do export OMP_NUM_THREADS=$i; sbatch -p test -t 5 --exclusive -N 1 -o hybrid-hello_omp$i.out -e hybrid-hello_omp$i.err ompi_mxm3.0 ./hybrid-hello; done)
<br>
*  &#239;&#187;&#191; open mpi 1.5.5 (Data for node: node1-128-17 Num slots: 8 Max slots: 0):&#194;&#160;
<br>
*  8 threads&#194;&#160;0.014527 sec
<br>
*  4 threads 0.016138 sec
<br>
*  2 threads&#194;&#160;0.018764 sec
<br>
*  1 thread &#194;&#160; 0.029963 sec
<br>
*  openmpi 1.9a1r32104 ( node1-128-29: slots=8 max_slots=0 slots_inuse=0 state=UP ):
<br>
*  8 threads&#194;&#160;0.035055 sec
<br>
*  4 threads&#194;&#160;0.029859 sec&#194;&#160;
<br>
*  2 threads&#194;&#160;0.019564 sec&#194;&#160; (same as&#194;&#160; open mpi 1.5.5 )
<br>
*  1 thread &#194;&#160;&#194;&#160;0.028394 sec (same as  open mpi 1.5.5 )
<br>
So, it looks like, that open mpi 1.9 use only 2 cores from 8.
<br>
<p>What can i do with this?
<br>
<p>$cat ompi_mxm3.0
<br>
#!/bin/sh
<br>
[ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
<br>
HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
<br>
srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE || { rm -f $HOSTFILE; exit 255; }
<br>
LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --display-allocation --hostfile $HOSTFILE &quot;$@&quot;
<br>
rc=$?
<br>
rm -f $HOSTFILE
<br>
exit $rc
<br>
<p>For open mpi 1.5.5 i remove LD_PRELOAD from run script.<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24738/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Previous message:</strong> <a href="24737.php">Brock Palen: "[OMPI users] HugeTLB messages from mpi code"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Reply:</strong> <a href="24739.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24741.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24742.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24743.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24750.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe reply:</strong> <a href="24751.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
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
