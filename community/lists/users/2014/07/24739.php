<?
$subject_val = "Re: [OMPI users] openMP  and mpi problem";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  2 08:54:03 2014" -->
<!-- isoreceived="20140702125403" -->
<!-- sent="Wed, 2 Jul 2014 05:53:44 -0700" -->
<!-- isosent="20140702125344" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMP  and mpi problem" -->
<!-- id="668B2B89-AFA4-4C20-8096-429E9A48FA72_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1404286401.857873638_at_f281.i.mail.ru" -->
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
<strong>Date:</strong> 2014-07-02 08:53:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24740.php">Ralph Castain: "Re: [OMPI users] mpi prorg fails (big data)"</a>
<li><strong>Previous message:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<li><strong>In reply to:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24741.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI started binding by default during the 1.7 series. You should add the following to your cmd line:
<br>
<p>--map-by :pe=$OMP_NUM_THREADS
<br>
<p>This will give you a dedicated core for each thread. Alternatively, you could instead add
<br>
<p>--bind-to socket
<br>
<p>OMPI 1.5.5 doesn't bind at all unless directed to do so, which is why you are getting the difference in behavior.
<br>
<p><p>On Jul 2, 2014, at 12:33 AM, Timur Ismagilov &lt;tismagilov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have open mpi 1.9a1r32104 and open mpi 1.5.5.
</span><br>
<span class="quotelev1">&gt; I have much better perfomance in open mpi 1.5.5 with openMP on 8 cores
</span><br>
<span class="quotelev1">&gt; in  the program:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ....
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #define N 10000000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; int main(int argc, char *argv[]) {
</span><br>
<span class="quotelev1">&gt; ...............
</span><br>
<span class="quotelev1">&gt; MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt; ...............
</span><br>
<span class="quotelev1">&gt; for (i = 0; i &lt; N; i++) {
</span><br>
<span class="quotelev1">&gt; a[i] = i * 1.0;
</span><br>
<span class="quotelev1">&gt; b[i] = i * 2.0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #pragma omp parallel for shared(a, b, c) private(i)
</span><br>
<span class="quotelev1">&gt; for (i = 0; i &lt; N; i++) {
</span><br>
<span class="quotelev1">&gt; c[i] = a[i] + b[i];
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; .............
</span><br>
<span class="quotelev1">&gt; MPI_Finalize();
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I got on 1 node 
</span><br>
<span class="quotelev1">&gt; (for i in 1 2 4 8 ; do export OMP_NUM_THREADS=$i; sbatch -p test -t 5 --exclusive -N 1 -o hybrid-hello_omp$i.out -e hybrid-hello_omp$i.err ompi_mxm3.0 ./hybrid-hello; done)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &#239;&#187;&#191;open mpi 1.5.5 (Data for node: node1-128-17 Num slots: 8 Max slots: 0): 
</span><br>
<span class="quotelev1">&gt; 8 threads 0.014527 sec
</span><br>
<span class="quotelev1">&gt; 4 threads 0.016138 sec
</span><br>
<span class="quotelev1">&gt; 2 threads 0.018764 sec
</span><br>
<span class="quotelev1">&gt; 1 thread   0.029963 sec
</span><br>
<span class="quotelev1">&gt; openmpi 1.9a1r32104 (node1-128-29: slots=8 max_slots=0 slots_inuse=0 state=UP):
</span><br>
<span class="quotelev1">&gt; 8 threads 0.035055 sec
</span><br>
<span class="quotelev1">&gt; 4 threads 0.029859 sec 
</span><br>
<span class="quotelev1">&gt; 2 threads 0.019564 sec (same as open mpi 1.5.5)
</span><br>
<span class="quotelev1">&gt; 1 thread   0.028394 sec (same as open mpi 1.5.5)
</span><br>
<span class="quotelev1">&gt; So, it looks like, that open mpi 1.9 use only 2 cores from 8.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What can i do with this?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $cat ompi_mxm3.0
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [ x&quot;$TMPDIR&quot; == x&quot;&quot; ] &amp;&amp; TMPDIR=/tmp
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; HOSTFILE=${TMPDIR}/hostfile.${SLURM_JOB_ID}
</span><br>
<span class="quotelev1">&gt; srun hostname -s|sort|uniq -c|awk '{print $2&quot; slots=&quot;$1}' &gt; $HOSTFILE || { rm -f $HOSTFILE; exit 255; }
</span><br>
<span class="quotelev1">&gt; LD_PRELOAD=/mnt/data/users/dm2/vol3/semenov/_scratch/mxm/mxm-3.0/lib/libmxm.so mpirun -x LD_PRELOAD -x MXM_SHM_KCOPY_MODE=off --display-allocation --hostfile $HOSTFILE &quot;$@&quot;
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
<span class="quotelev1">&gt; For open mpi 1.5.5 i remove LD_PRELOAD from run script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/07/24738.php">http://www.open-mpi.org/community/lists/users/2014/07/24738.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24739/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24740.php">Ralph Castain: "Re: [OMPI users] mpi prorg fails (big data)"</a>
<li><strong>Previous message:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<li><strong>In reply to:</strong> <a href="24738.php">Timur Ismagilov: "[OMPI users] openMP  and mpi problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24741.php">Ralph Castain: "Re: [OMPI users] openMP  and mpi problem"</a>
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
