<?
$subject_val = "Re: [OMPI devel] OMPI 1.4.3 hangs in gather";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 16 10:54:15 2011" -->
<!-- isoreceived="20110116155415" -->
<!-- sent="Sun, 16 Jan 2011 10:54:07 -0500" -->
<!-- isosent="20110116155407" -->
<!-- name="Shamis, Pavel" -->
<!-- email="shamisp_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OMPI 1.4.3 hangs in gather" -->
<!-- id="EAEB338D-0414-4F74-911E-008A6F15753A_at_ornl.gov" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="AANLkTinWCtyOwd1UwLkpjzMb=ezWNqujeBC7QO8_Df_x_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OMPI 1.4.3 hangs in gather<br>
<strong>From:</strong> Shamis, Pavel (<em>shamisp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-16 10:54:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8879.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8877.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8877.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8885.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8885.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well, then I would suspect rdmacm vs oob QP configuration. They supposed to be the same, but  probably it's some bug there, and  somehow rdmacm QP tuning different from oob, it is potential source cause for the performance differences that you see.
<br>
<p>Regards,
<br>
Pavel (Pasha) Shamis
<br>
<pre>
---
Application Performance Tools Group
Computer Science and Math Division
Oak Ridge National Laboratory
On Jan 16, 2011, at 4:12 AM, Doron Shoham wrote:
&gt; Hi,
&gt;
&gt; The gather hangs only in liner_sync algorithm but works with
&gt; basic_linear and binomial algorithms.
&gt; The gather algorithm is choosen dynamiclly depanding on block size and
&gt; communicator size.
&gt; So, in the beginning, binomial algorithm is chosen (communicator size
&gt; is larger then 60).
&gt; When increasing the message size, the liner_sync algorithm is chosen
&gt; (with small_segment_size).
&gt; When debugging on the cluster I saw that the linear_sync function is
&gt; called in endless loop with segment size of 1024.
&gt; This explain why hang occure in the middle of the run.
&gt;
&gt; I still don't understand why does RDMACM solve it or what causes
&gt; liner_sync hangs.
&gt;
&gt; Again, in 1.5 it doesn't hang (maybe timing is different?).
&gt; I'm still trying to understand what are the diffrences in those areas
&gt; between 1.4.3 and 1.5
&gt;
&gt;
&gt; BTW,
&gt; Choosing RDMACM fixes hangs and performance issues in all collective operations.
&gt;
&gt; Thanks,
&gt; Doron
&gt;
&gt;
&gt; On Thu, Jan 13, 2011 at 9:44 PM, Shamis, Pavel &lt;shamisp_at_[hidden]&gt; wrote:
&gt;&gt; RDMACM creates the same QPs with the same tunings as OOB, so I don't see how CPC may effect on performance.
&gt;&gt;
&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt; ---
&gt;&gt; Application Performance Tools Group
&gt;&gt; Computer Science and Math Division
&gt;&gt; Oak Ridge National Laboratory
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt;
&gt;&gt; On Jan 13, 2011, at 2:15 PM, Jeff Squyres wrote:
&gt;&gt;
&gt;&gt;&gt; +1 on what Pasha said -- if using rdmacm fixes the problem, then there's something else nefarious going on...
&gt;&gt;&gt;
&gt;&gt;&gt; You might want to check padb with your hangs to see where all the processes are hung to see if anything obvious jumps out.  I'd be surprised if there's a bug in the oob cpc; it's been around for a long, long time; it should be pretty stable.
&gt;&gt;&gt;
&gt;&gt;&gt; Do we create QP's differently between oob and rdmacm, such that perhaps they are &quot;better&quot; (maybe better routed, or using a different SL, or ...) when created via rdmacm?
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; On Jan 12, 2011, at 12:12 PM, Shamis, Pavel wrote:
&gt;&gt;&gt;
&gt;&gt;&gt;&gt; RDMACM or OOB can not effect on performance of this benchmark, since they are not involved in communication. So I'm not sure that the performance changes that you see are related to connection manager changes.
&gt;&gt;&gt;&gt; About oob - I'm not aware about hangs issue there, the code is very-very old, we did not touch it for a long time.
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Regards,
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; Pavel (Pasha) Shamis
&gt;&gt;&gt;&gt; ---
&gt;&gt;&gt;&gt; Application Performance Tools Group
&gt;&gt;&gt;&gt; Computer Science and Math Division
&gt;&gt;&gt;&gt; Oak Ridge National Laboratory
&gt;&gt;&gt;&gt; Email: shamisp_at_[hidden]
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; On Jan 12, 2011, at 8:45 AM, Doron Shoham wrote:
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Hi,
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; For the first problem, I can see that when using rdmacm as openib oob
&gt;&gt;&gt;&gt;&gt; I get much better performence results (and no hangs!).
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; mpirun -display-map -np 64 -machinefile voltairenodes -mca btl
&gt;&gt;&gt;&gt;&gt; sm,self,openib -mca btl_openib_connect_rdmacm_priority 100
&gt;&gt;&gt;&gt;&gt; imb/src/IMB-MPI1 gather -npmin 64
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; #bytes      #repetitions        t_min[usec]     t_max[usec]     t_avg[usec]
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 0       1000        0.04        0.05        0.05
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 1       1000        19.64       19.69       19.67
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 2       1000        19.97       20.02       19.99
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 4       1000        21.86       21.96       21.89
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 8       1000        22.87       22.94       22.90
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 16      1000        24.71       24.80       24.76
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 32      1000        27.23       27.32       27.27
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 64      1000        30.96       31.06       31.01
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 128     1000        36.96       37.08       37.02
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 256     1000        42.64       42.79       42.72
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 512     1000        60.32       60.59       60.46
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 1024    1000        82.44       82.74       82.59
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 2048    1000        497.66      499.62      498.70
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 4096    1000        684.15      686.47      685.33
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 8192    519         544.07      546.68      545.85
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 16384   519         653.20      656.23      655.27
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 32768   519         704.48      707.55      706.60
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 65536   519         918.00      922.12      920.86
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 131072  320         2414.08     2422.17     2418.20
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 262144  160         4198.25     4227.58     4213.19
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 524288  80          7333.04     7503.99     7438.18
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 1048576 40          13692.60    14150.20    13948.75
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 2097152 20          30377.34    32679.15    31779.86
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; 4194304 10          61416.70    71012.50    68380.04
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; How can the oob cause the hang? Isn't it only used to bring up the connection?
&gt;&gt;&gt;&gt;&gt; Does the oob has any part of the connections were made?
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;&gt; Dororn
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; On Tue, Jan 11, 2011 at 2:58 PM, Doron Shoham &lt;doron.ompi_at_[hidden]&gt; wrote:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Hi
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; All machines on the setup are IDataPlex with Nehalem 12 cores per node, 24GB  memory.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &#183;         Problem 1 &#150; OMPI 1.4.3 hangs in gather:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I&#146;m trying to run IMB and gather operation with OMPI 1.4.3 (Vanilla).
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; It happens when np &gt;= 64 and message size exceed 4k:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mpirun -np 64 -machinefile voltairenodes -mca btl sm,self,openib  imb/src-1.4.2/IMB-MPI1 gather &#150;npmin 64
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; voltairenodes consists of 64 machines.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; # Benchmarking Gather
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; # #processes = 64
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;   #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        0         1000         0.02         0.02         0.02
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        1          331        14.02        14.16        14.09
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        2          331        12.87        13.08        12.93
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        4          331        14.29        14.43        14.34
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        8          331        16.03        16.20        16.11
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;       16          331        17.54        17.74        17.64
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;       32          331        20.49        20.62        20.53
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;       64          331        23.57        23.84        23.70
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      128          331        28.02        28.35        28.18
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      256          331        34.78        34.88        34.80
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      512          331        46.34        46.91        46.60
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     1024          331        63.96        64.71        64.33
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     2048          331       460.67       465.74       463.18
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     4096          331       637.33       643.99       640.75
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; This the padb output:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; padb &#150;A &#150;x &#150;Ormgr=mpirun &#150;tree:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; =~=~=~=~=~=~=~=~=~=~=~= PuTTY log 2011.01.06 14:33:17 =~=~=~=~=~=~=~=~=~=~=~=
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Warning, remote process state differs across ranks
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; state : ranks
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; R (running) : [1,3-6,8,10-13,16-20,23-28,30-32,34-42,44-45,47-49,51-53,56-59,61-63]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; S (sleeping) : [0,2,7,9,14-15,21-22,29,33,43,46,50,54-55,60]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 1
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; main() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; IMB_init_buffers_iter() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; IMB_gather() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;  PMPI_Gather() at pgather.c:175
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;    mca_coll_sync_gather() at coll_sync_gather.c:46
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      ompi_coll_tuned_gather_intra_dec_fixed() at coll_tuned_decision_fixed.c:714
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        [0,3-63] (62 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:248
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;          mca_pml_ob1_recv() at pml_ob1_irecv.c:104
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;              opal_condition_wait() at ../../../../opal/threads/condition.h:99
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        [1] (1 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:302
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;          mca_pml_ob1_send() at pml_ob1_isend.c:125
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;              opal_condition_wait() at ../../../../opal/threads/condition.h:99
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        [2] (1 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:315
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;          ompi_request_default_wait() at request/req_wait.c:37
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;            ompi_request_wait_completion() at ../ompi/request/request.h:375
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;              opal_condition_wait() at ../opal/threads/condition.h:99
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 2
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; start_thread() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; btl_openib_async_thread() at btl_openib_async.c:344
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; poll() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 3
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; start_thread() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; service_thread_start() at btl_openib_fd.c:427
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; select() at ?:?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -bash-3.2$
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; When running again padb after couple of minutes, I can see that the total number of processes remain in the same position but
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; different processes are at different positions.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; For example, this is the diff between two padb outputs:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Warning, remote process state differs across ranks
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; state : ranks
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -R (running) : [0,2-4,6-13,16-18,20-21,28-31,33-36,38-56,58,60,62-63]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -S (sleeping) : [1,5,14-15,19,22-27,32,37,57,59,61]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; +R (running) : [2,5-14,16-23,25,28-40,42-48,50-51,53-58,61,63]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; +S (sleeping) : [0-1,3-4,15,24,26-27,41,49,52,59-60,62]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Stack trace(s) for thread: 1
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [0-63] (64 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; @@ -13,21 +13,21 @@
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mca_coll_sync_gather() at coll_sync_gather.c:46
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_dec_fixed() at coll_tuned_decision_fixed.c:714
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; - [0,3-63] (62 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; + [0-5,8-63] (62 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:248
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_ob1_recv() at pml_ob1_irecv.c:104
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; opal_condition_wait() at ../../../../opal/threads/condition.h:99
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; - [1] (1 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; + [6] (1 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:302
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; mca_pml_ob1_send() at pml_ob1_isend.c:125
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_request_wait_completion() at ../../../../ompi/request/request.h:375
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; opal_condition_wait() at ../../../../opal/threads/condition.h:99
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; - [2] (1 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; + [7] (1 processes)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; -----------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_coll_tuned_gather_intra_linear_sync() at coll_tuned_gather.c:315
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; ompi_request_default_wait() at request/req_wait.c:37
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Choosing different gather algorithm seems to bypass the hang.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; I&#146;ve used the following mca parameters:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; --mca coll_tuned_use_dynamic_rules 1
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; --mca coll_tuned_gather_algorithm 1
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Actually, both dec_fixed and basic_linear works while binomial and linear_sync doesn&#146;t.
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; With OMPI 1.5 it doesn&#146;t hangs (with all gather algorithms) and it much faster (the number of repetitions is much higher):
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; # Benchmarking Gather
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; # #processes = 64
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; #----------------------------------------------------------------
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;   #bytes #repetitions  t_min[usec]  t_max[usec]  t_avg[usec]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        0         1000         0.02         0.03         0.02
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        1         1000        18.50        18.55        18.53
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        2         1000        18.17        18.25        18.22
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        4         1000        19.04        19.10        19.07
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;        8         1000        19.60        19.67        19.64
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;       16         1000        21.39        21.47        21.43
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;       32         1000        24.83        24.91        24.87
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;       64         1000        27.35        27.45        27.40
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      128         1000        33.23        33.34        33.29
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      256         1000        41.24        41.39        41.32
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;      512         1000        52.62        52.81        52.71
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     1024         1000        73.20        73.46        73.32
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     2048         1000       416.36       418.04       417.22
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     4096         1000       638.54       640.70       639.65
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;     8192         1000       506.26       506.97       506.63
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;    16384         1000       600.63       601.40       601.02
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;    32768         1000       639.52       640.34       639.93
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;    65536          640       914.22       916.02       915.13
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;   131072          320      2287.37      2295.18      2291.35
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;   262144          160      4041.36      4070.58      4056.27
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;   524288           80      7292.35      7463.27      7397.14
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;  1048576           40     13647.15     14107.15     13905.29
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;  2097152           20     30625.00     32635.45     31815.36
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;  4194304           10     63543.01     70987.49     68680.48
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; &#183;         Problem 2 &#150; segmentation fault with OMPI 1.4.3/1.5 and IMB gather np=768:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; When trying to run the same command but with np=768 I get segmentation fault:
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; openmpi-1.4.3/bin/mpirun -np 768 -machinefile voltairenodes -mca btl sm,self,openib -mca coll_tuned_use_dynamic_rules 1 -mca coll_tuned_gather_algorithm 1 imb/src/IMB-MPI1 gather -npmin 768 -mem 1.6
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; This happens in OMPI 1.4.3 and 1.5
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] *** Process received signal ***
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] Signal: Segmentation fault (11)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] Signal code: Address not mapped (1)
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] Failing at address: 0x2aab4a204000
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 0] /lib64/libpthread.so.0 [0x366aa0e7c0]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 1] /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(ompi_convertor_unpack+0x15f) [0x2b077882282e]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 2] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9e1672]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 3] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9dd0b6]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 4] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_btl_sm.so [0x2b077c459d87]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 5] /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libopen-pal.so.0(opal_progress+0xbe) [0x2b0778d845b8]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 6] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9d6d62]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 7] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9d6ba7]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 8] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_pml_ob1.so [0x2b077b9d6a90]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [ 9] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so [0x2b077d298dc5]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [10] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so [0x2b077d2990d3]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [11] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_tuned.so [0x2b077d286e9b]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [12] /gpfs/asrc/home/voltaire/install/openmpi-1.4.3/lib/openmpi/mca_coll_sync.so [0x2b077d07e96c]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [13] /gpfs/asrc/home/voltaire/install//openmpi-1.4.3/lib/libmpi.so.0(PMPI_Gather+0x55e) [0x2b077883ec9a]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [14] imb/src/IMB-MPI1(IMB_gather+0xe8) [0x40a088]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [15] imb/src/IMB-MPI1(IMB_init_buffers_iter+0x28a) [0x405baa]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [16] imb/src/IMB-MPI1(main+0x30f) [0x40362f]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [17] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3669e1d994]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] [18] imb/src/IMB-MPI1 [0x403269]
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; [compa163:20249] *** End of error message ***
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Any ideas? More debuggin tips?
&gt;&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt;&gt; Thanks,
&gt;&gt;&gt;&gt;&gt;&gt; Doron
&gt;&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt;
&gt;&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; --
&gt;&gt;&gt; Jeff Squyres
&gt;&gt;&gt; jsquyres_at_[hidden]
&gt;&gt;&gt; For corporate legal information go to:
&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;&gt;&gt;
&gt;&gt;&gt;
&gt;&gt;&gt; _______________________________________________
&gt;&gt;&gt; devel mailing list
&gt;&gt;&gt; devel_at_[hidden]
&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;&gt;
&gt;&gt; _______________________________________________
&gt;&gt; devel mailing list
&gt;&gt; devel_at_[hidden]
&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
&gt;&gt;
&gt;
&gt; _______________________________________________
&gt; devel mailing list
&gt; devel_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8879.php">Pascal Deveze: "Re: [OMPI devel] RFC:	Bring	the	lastest	ROMIO	version	from	MPICH2-1.3 into the trunk"</a>
<li><strong>Previous message:</strong> <a href="8877.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>In reply to:</strong> <a href="8877.php">Doron Shoham: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8885.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
<li><strong>Reply:</strong> <a href="8885.php">Jeff Squyres: "Re: [OMPI devel] OMPI 1.4.3 hangs in gather"</a>
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
