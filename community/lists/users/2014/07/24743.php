<?
$subject_val = "Re: [OMPI users] openMP  and mpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  3 09:10:31 2014" -->
<!-- isoreceived="20140703131031" -->
<!-- sent="Thu, 3 Jul 2014 06:10:26 -0700" -->
<!-- isosent="20140703131026" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMP  and mpi problem" -->
<!-- id="BA966E2B-BF8C-4C8E-B8A7-24D1A08BEA37_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1404376263.470336063_at_f244.i.mail.ru" -->
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
<strong>Date:</strong> 2014-07-03 09:10:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24744.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn question"</a>
<li><strong>Previous message:</strong> <a href="24742.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24748.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Reply:</strong> <a href="24748.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This looks to me like a message from some older version of OMPI. Please check your LD_LIBRARY_PATH and ensure that the 1.9 installation is at the *front* of that list.
<br>
<p>Of course, I'm also assuming that you installed the two versions into different locations - yes?
<br>
<p>Also, add &quot;--mca rmaps_base_verbose 20&quot; to your cmd line - this will tell us what mappers are being considered.
<br>
<p><p>On Jul 3, 2014, at 1:31 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; When i used --map-by slot:pe=8, i got the same message 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your job failed to map. Either no mapper was available, or none
</span><br>
<span class="quotelev1">&gt; of the available mappers was able to perform the requested
</span><br>
<span class="quotelev1">&gt; mapping operation. This can happen if you request a map type
</span><br>
<span class="quotelev1">&gt; (e.g., loadbalance) and the corresponding mapper was not built.
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Wed, 2 Jul 2014 07:36:48 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt; Let's keep this on the user list so others with similar issues can find it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My guess is that the $OMP_NUM_THREADS syntax isn't quite right, so it didn't pick up the actual value there. Since it doesn't hurt to have extra cpus, just set it to 8 for your test case and that should be fine, so adding a little clarity:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --map-by slot:pe=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm not aware of any slurm utility similar to top, but there is no reason you can't just submit this as an interactive job and use top itself, is there?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As for that sbgp warning - you can probably just ignore it. Not sure why that is failing, but it just means that component will disqualify itself. If you want to eliminate it, just add
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -mca sbgp ^ibnet
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your cmd line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Jul 2, 2014, at 7:29 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, Ralph!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With '--map-by :pe=$OMP_NUM_THREADS'  i got:
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What does it mean?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; With '--bind-to socket' everything looks better, but performance still worse..( but better than it was)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1 thread 0.028 sec
</span><br>
<span class="quotelev2">&gt;&gt; 2 thread 0.018 sec
</span><br>
<span class="quotelev2">&gt;&gt; 4 thread 0.020 sec 
</span><br>
<span class="quotelev2">&gt;&gt; 8 thread 0.021 sec
</span><br>
<span class="quotelev2">&gt;&gt; Do i have utility similar to the 'top' with sbatch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Also, every time,  i got the message in ompi 1.9:
</span><br>
<span class="quotelev2">&gt;&gt; mca: base: components_register: component sbgp / ibnet register function failed
</span><br>
<span class="quotelev2">&gt;&gt; Is it bad?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards, 
</span><br>
<span class="quotelev2">&gt;&gt; Timur
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Wed, 2 Jul 2014 05:53:44 -0700 &#208;&#190;&#209;&#130; Ralph Castain &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI started binding by default during the 1.7 series. You should add the following to your cmd line:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --map-by :pe=$OMP_NUM_THREADS
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; This will give you a dedicated core for each thread. Alternatively, you could instead add
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --bind-to socket
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI 1.5.5 doesn't bind at all unless directed to do so, which is why you are getting the difference in behavior.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 2, 2014, at 12:33 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have open mpi 1.9a1r32104 and open mpi 1.5.5.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have much better perfomance in open mpi 1.5.5 with openMP on 8 cores
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in  the program:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ....
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #define N 10000000
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...............
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...............
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for (i = 0; i &lt; N; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a[i] = i * 1.0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; b[i] = i * 2.0;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #pragma omp parallel for shared(a, b, c) private(i)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; for (i = 0; i &lt; N; i++) {
</span><br>
<span class="quotelev3">&gt;&gt;&gt; c[i] = a[i] + b[i];
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; .............
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize();
</span><br>
<span class="quotelev3">&gt;&gt;&gt; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got on 1 node 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (for i in 1 2 4 8 ; do export OMP_NUM_THREADS=$i; sbatch -p test -t 5 --exclusive -N 1 -o hybrid-hello_omp$i.out -e hybrid-hello_omp$i.err ompi_mxm3.0 ./hybrid-hello; done)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#239;&#187;&#191;open mpi 1.5.5 (Data for node: node1-128-17 Num slots: 8 Max slots: 0): 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 threads 0.014527 sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 threads 0.016138 sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 threads 0.018764 sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 thread   0.029963 sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi 1.9a1r32104 (node1-128-29: slots=8 max_slots=0 slots_inuse=0 state=UP):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 8 threads 0.035055 sec
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 4 threads 0.029859 sec 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2 threads 0.019564 sec (same as open mpi 1.5.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1 thread   0.028394 sec (same as open mpi 1.5.5)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, it looks like, that open mpi 1.9 use only 2 cores from 8.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What can i do with this?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; $cat ompi_mxm3.0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #!/bin/sh
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; [ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
</span><br>
<span class="quotelev3">&gt;&gt;&gt; srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE || { rm -f $HOSTFILE; exit 255; }
</span><br>
<span class="quotelev3">&gt;&gt;&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --display-allocation --hostfile $HOSTFILE &quot;$@&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rc=$?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rm -f $HOSTFILE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exit $rc
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For open mpi 1.5.5 i remove LD_PRELOAD from run script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24738.php">http://www.open-mpi.org/community/lists/users/2014/07/24738.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24743/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24744.php">Milan Hodoscek: "[OMPI users] mpi_comm_spawn question"</a>
<li><strong>Previous message:</strong> <a href="24742.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Maybe in reply to:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24748.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
<li><strong>Reply:</strong> <a href="24748.php">Timur Ismagilov: "Re: [OMPI users] openMP  and mpi problem"</a>
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
