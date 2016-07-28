<?
$subject_val = "[OMPI devel] OMPI 1.4.3 hangs in gather";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 11 07:58:40 2011" -->
<!-- isoreceived="20110111125840" -->
<!-- sent="Tue, 11 Jan 2011 14:58:33 +0200" -->
<!-- isosent="20110111125833" -->
<!-- name="Doron Shoham" -->
<!-- email="doron.ompi_at_[hidden]" -->
<!-- subject="[OMPI devel] OMPI 1.4.3 hangs in gather" -->
<!-- id="AANLkTinOvKQ8y-W7qZU1F-Yw6XcS7WQOgzNJ=ZfK4aUQ_at_mail.gmail.com" -->
<!-- charset="windows-1252" -->
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
<strong>Subject:</strong> [OMPI devel] OMPI 1.4.3 hangs in gather<br>
<strong>From:</strong> Doron Shoham (<em>doron.ompi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-11 07:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8853.php">Jeff Squyres: "[OMPI devel] Removing paffinity trunk components"</a>
<li><strong>Previous message:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8859.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8859.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8864.php">Nysal Jan: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>All machines on the setup are IDataPlex with Nehalem 12 cores per node, 24GB
<br>
&nbsp;memory.
<br>
<p><p><p>&#183;         *Problem 1 &#150; OMPI 1.4.3 hangs in gather:*
<br>
<p><p><p>I&#146;m trying to run IMB and gather operation with OMPI 1.4.3 (Vanilla).
<br>
<p>It happens when np &gt;= 64 and message size exceed 4k:
<br>
<p>mpirun -np 64 -machinefile voltairenodes -mca btl sm,self,openib
<br>
imb/src-1.4.2/IMB-MPI1 gather &#150;npmin 64
<br>
<p><p><p>voltairenodes consists of 64 machines.
<br>
<p><p><p>#----------------------------------------------------------------
<br>
<p># Benchmarking Gather
<br>
<p># #processes = 64
<br>
<p>#----------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.02         0.02         0.02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1          331        14.02        14.16        14.09
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2          331        12.87        13.08        12.93
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4          331        14.29        14.43        14.34
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8          331        16.03        16.20        16.11
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16          331        17.54        17.74        17.64
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32          331        20.49        20.62        20.53
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64          331        23.57        23.84        23.70
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128          331        28.02        28.35        28.18
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256          331        34.78        34.88        34.80
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512          331        46.34        46.91        46.60
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024          331        63.96        64.71        64.33
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048          331       460.67       465.74       463.18
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096          331       637.33       643.99       640.75
<br>
<p><p><p>This the padb output:
<br>
<p>padb &#150;A &#150;x &#150;Ormgr=mpirun &#150;tree:
<br>
<p><p><p>=~=~=~=~=~=~=~=~=~=~=~= PuTTY log 2011.01.06 14:33:17
<br>
=~=~=~=~=~=~=~=~=~=~=~=
<br>
<p><p><p>Warning, remote process state differs across ranks
<br>
<p>state : ranks
<br>
<p>R (running) :
<br>
[1,3-6,8,10-13,16-20,23-28,30-32,34-42,44-45,47-49,51-53,56-59,61-63]
<br>
<p>S (sleeping) : [0,2,7,9,14-15,21-22,29,33,43,46,50,54-55,60]
<br>
<p>Stack trace(s) for thread: 1
<br>
<p>-----------------
<br>
<p>[0-63] (64 processes)
<br>
<p>-----------------
<br>
<p>main() at ?:?
<br>
<p>&nbsp;&nbsp;IMB_init_buffers_iter() at ?:?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;IMB_gather() at ?:?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PMPI_Gather() at pgather.c:175
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_coll_sync_gather() at coll_sync_gather.c:46
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_gather_intra_dec_fixed() at
<br>
coll_tuned_decision_fixed.c:714
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[0,3-63] (62 processes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_gather_intra_linear_sync() at
<br>
coll_tuned_gather.c:248
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_recv() at pml_ob1_irecv.c:104
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_wait_completion() at
<br>
../../../../ompi/request/request.h:375
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait() at
<br>
../../../../opal/threads/condition.h:99
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[1] (1 processes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_gather_intra_linear_sync() at
<br>
coll_tuned_gather.c:302
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_pml_ob1_send() at pml_ob1_isend.c:125
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_wait_completion() at
<br>
../../../../ompi/request/request.h:375
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait() at
<br>
../../../../opal/threads/condition.h:99
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[2] (1 processes)
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-----------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_coll_tuned_gather_intra_linear_sync() at
<br>
coll_tuned_gather.c:315
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_default_wait() at request/req_wait.c:37
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi_request_wait_completion() at
<br>
../ompi/request/request.h:375
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal_condition_wait() at ../opal/threads/condition.h:99
<br>
<p>Stack trace(s) for thread: 2
<br>
<p>-----------------
<br>
<p>[0-63] (64 processes)
<br>
<p>-----------------
<br>
<p>start_thread() at ?:?
<br>
<p>&nbsp;&nbsp;btl_openib_async_thread() at btl_openib_async.c:344
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;poll() at ?:?
<br>
<p>Stack trace(s) for thread: 3
<br>
<p>-----------------
<br>
<p>[0-63] (64 processes)
<br>
<p>-----------------
<br>
<p>start_thread() at ?:?
<br>
<p>&nbsp;&nbsp;service_thread_start() at btl_openib_fd.c:427
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;select() at ?:?
<br>
<p>-bash-3.2$
<br>
<p><p><p><p><p>When running again padb after couple of minutes, I can see that the total
<br>
number of processes remain in the same position but
<br>
<p>different processes are at different positions.
<br>
<p>For example, this is the diff between two padb outputs:
<br>
<p><p><p>Warning, remote process state differs across ranks
<br>
<p>state : ranks
<br>
<p>-R (running) : [0,2-4,6-13,16-18,20-21,28-31,33-36,38-56,58,60,62-63]
<br>
<p>-S (sleeping) : [1,5,14-15,19,22-27,32,37,57,59,61]
<br>
<p>+R (running) : [2,5-14,16-23,25,28-40,42-48,50-51,53-58,61,63]
<br>
<p>+S (sleeping) : [0-1,3-4,15,24,26-27,41,49,52,59-60,62]
<br>
<p>Stack trace(s) for thread: 1
<br>
<p>-----------------
<br>
<p>[0-63] (64 processes)
<br>
<p>@@ -13,21 +13,21 @@
<br>
<p>mca_coll_sync_gather() at coll_sync_gather.c:46
<br>
<p>ompi_coll_tuned_gather_intra_dec_fixed() at coll_tuned_decision_fixed.c:714
<br>
<p>-----------------
<br>
<p>- [0,3-63] (62 processes)
<br>
<p>+ [0-5,8-63] (62 processes)
<br>
<p>-----------------
<br>
<p>ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:248
<br>
<p>mca_pml_ob1_recv() at pml_ob1_irecv.c:104
<br>
<p>ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
<br>
<p>opal_condition_wait() at ../../../../opal/threads/condition.h:99
<br>
<p>-----------------
<br>
<p>- [1] (1 processes)
<br>
<p>+ [6] (1 processes)
<br>
<p>-----------------
<br>
<p>ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:302
<br>
<p>mca_pml_ob1_send() at pml_ob1_isend.c:125
<br>
<p>ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
<br>
<p>opal_condition_wait() at ../../../../opal/threads/condition.h:99
<br>
<p>-----------------
<br>
<p>- [2] (1 processes)
<br>
<p>+ [7] (1 processes)
<br>
<p>-----------------
<br>
<p>ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:315
<br>
<p>ompi_request_default_wait() at request/req_wait.c:37
<br>
<p><p><p><p><p>*Choosing different gather algorithm seems to bypass the hang.*
<br>
<p>I&#146;ve used the following mca parameters:
<br>
<p>--mca coll_tuned_use_dynamic_rules 1
<br>
<p>--mca coll_tuned_gather_algorithm 1
<br>
<p><p><p>Actually, both dec_fixed and basic_linear works while binomial and
<br>
linear_sync doesn&#146;t.
<br>
<p><p><p>With OMPI 1.5 it doesn&#146;t hangs (with all gather algorithms) and it much
<br>
faster (the number of repetitions is much higher):
<br>
<p>#----------------------------------------------------------------
<br>
<p># Benchmarking Gather
<br>
<p># #processes = 64
<br>
<p>#----------------------------------------------------------------
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0         1000         0.02         0.03         0.02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1         1000        18.50        18.55        18.53
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2         1000        18.17        18.25        18.22
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4         1000        19.04        19.10        19.07
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8         1000        19.60        19.67        19.64
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16         1000        21.39        21.47        21.43
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32         1000        24.83        24.91        24.87
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;64         1000        27.35        27.45        27.40
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;128         1000        33.23        33.34        33.29
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;256         1000        41.24        41.39        41.32
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;512         1000        52.62        52.81        52.71
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1024         1000        73.20        73.46        73.32
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2048         1000       416.36       418.04       417.22
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4096         1000       638.54       640.70       639.65
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;8192         1000       506.26       506.97       506.63
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16384         1000       600.63       601.40       601.02
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;32768         1000       639.52       640.34       639.93
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;65536          640       914.22       916.02       915.13
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;131072          320      2287.37      2295.18      2291.35
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;262144          160      4041.36      4070.58      4056.27
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;524288           80      7292.35      7463.27      7397.14
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1048576           40     13647.15     14107.15     13905.29
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2097152           20     30625.00     32635.45     31815.36
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4194304           10     63543.01     70987.49     68680.48
<br>
<p><p><p><p><p>&#183;         *Problem 2 &#150; segmentation fault with OMPI 1.4.3/1.5 and IMB gather
<br>
np=768:*
<br>
<p>When trying to run the same command but with np=768 I get segmentation
<br>
fault:
<br>
<p>openmpi-1.4.3/bin/mpirun -np 768 -machinefile voltairenodes -mca btl
<br>
sm,self,openib -mca coll_tuned_use_dynamic_rules 1 -mca
<br>
coll_tuned_gather_algorithm 1 imb/src/IMB-MPI1 gather -npmin 768 -mem 1.6
<br>
<p><p><p>This happens in OMPI 1.4.3 and 1.5
<br>
<p><p><p>[compa163:20249] *** Process received signal ***
<br>
<p>[compa163:20249] Signal: Segmentation fault (11)
<br>
<p>[compa163:20249] Signal code: Address not mapped (1)
<br>
<p>[compa163:20249] Failing at address: 0x2aab4a204000
<br>
<p>[compa163:20249] [ 0] /lib64/libpthread.so.0 [0x366aa0e7c0]
<br>
<p>[compa163:20249] [ 1]
<br>
/gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(ompi_convertor_unpack+0x15f)
<br>
[0x2b077882282e]
<br>
<p>[compa163:20249] [ 2]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b077b9e1672]
<br>
<p>[compa163:20249] [ 3]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b077b9dd0b6]
<br>
<p>[compa163:20249] [ 4]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_btl_sm.so
<br>
[0x2b077c459d87]
<br>
<p>[compa163:20249] [ 5]
<br>
/gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0xbe)
<br>
[0x2b0778d845b8]
<br>
<p>[compa163:20249] [ 6]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b077b9d6d62]
<br>
<p>[compa163:20249] [ 7]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b077b9d6ba7]
<br>
<p>[compa163:20249] [ 8]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so
<br>
[0x2b077b9d6a90]
<br>
<p>[compa163:20249] [ 9]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b077d298dc5]
<br>
<p>[compa163:20249] [10]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b077d2990d3]
<br>
<p>[compa163:20249] [11]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so
<br>
[0x2b077d286e9b]
<br>
<p>[compa163:20249] [12]
<br>
/gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_sync.so
<br>
[0x2b077d07e96c]
<br>
<p>[compa163:20249] [13]
<br>
/gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(PMPI_Gather+0x55e)
<br>
[0x2b077883ec9a]
<br>
<p>[compa163:20249] [14] imb/src/IMB-MPI1(IMB_gather+0xe8) [0x40a088]
<br>
<p>[compa163:20249] [15] imb/src/IMB-MPI1(IMB_init_buffers_iter+0x28a)
<br>
[0x405baa]
<br>
<p>[compa163:20249] [16] imb/src/IMB-MPI1(main+0x30f) [0x40362f]
<br>
<p>[compa163:20249] [17] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x3669e1d994]
<br>
<p>[compa163:20249] [18] imb/src/IMB-MPI1 [0x403269]
<br>
[compa163:20249] *** End of error message ***
<br>
<p><p>Any ideas? More debuggin tips?
<br>
<p>Thanks,
<br>
Doron
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-8852/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8853.php">Jeff Squyres: "[OMPI devel] Removing paffinity trunk components"</a>
<li><strong>Previous message:</strong> <a href="8851.php">Jeff Squyres: "Re: [OMPI devel] u_int8_t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8859.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8859.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8864.php">Nysal Jan: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
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
