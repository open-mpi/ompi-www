<?
$subject_val = "[OMPI users] LOCAL QP OPERATION ERROR";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  5 17:21:52 2014" -->
<!-- isoreceived="20140305222152" -->
<!-- sent="Wed, 5 Mar 2014 16:21:51 -0600" -->
<!-- isosent="20140305222151" -->
<!-- name="Vince Grimes" -->
<!-- email="tom.grimes_at_[hidden]" -->
<!-- subject="[OMPI users] LOCAL QP OPERATION ERROR" -->
<!-- id="5317A37F.5050204_at_ttu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] LOCAL QP OPERATION ERROR<br>
<strong>From:</strong> Vince Grimes (<em>tom.grimes_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-05 17:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23777.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23775.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OpenMPI folks:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I am having trouble running a specific program (ScalIT, a code produced 
<br>
and maintained by one of the research groups here at TTU) using 
<br>
Infiniband. There is conflicting information that has made it impossible 
<br>
to diagnose the problem:
<br>
<p>1) Other programs (like NWChem) run using OpenMPI over multiple nodes 
<br>
using Infiniband without any problems at all.
<br>
<p>2) ScalIT runs on other clusters (and I believe with OpenMPI) without error.
<br>
<p>3) ScalIT runs with OpenMPI on a single node without error.
<br>
<p>4) ScalIT dies at a particular place with OpenMPI over multiple nodes 
<br>
(20) with OpenMPI.
<br>
<p>I don't know whether it is a hardware problem (but other codes work just 
<br>
fine) or a programming error in ScalIT (but it works without 
<br>
modification on other clusters).
<br>
<p>The error I am getting is:
<br>
local QP operation err (QPN 0014bc, WQE @ 00009005, CQN 000097, index 
<br>
2232620)
<br>
&nbsp;&nbsp;&nbsp;[ 0] 000014bc
<br>
&nbsp;&nbsp;&nbsp;[ 4] 00000000
<br>
&nbsp;&nbsp;&nbsp;[ 8] 00000000
<br>
&nbsp;&nbsp;&nbsp;[ c] 00000000
<br>
&nbsp;&nbsp;&nbsp;[10] 026f3410
<br>
&nbsp;&nbsp;&nbsp;[14] 00000000
<br>
&nbsp;&nbsp;&nbsp;[18] 00009005
<br>
&nbsp;&nbsp;&nbsp;[1c] ff100000
<br>
[[44095,1],45][btl_openib_component.c:3492:handle_wc] from 
<br>
compute-6-13.local to: compute-3-11 error polling LP CQ with status 
<br>
LOCAL QP OPERATION ERROR status number 2 for wr_id 40c5e00 opcode 0 
<br>
vendor error 111 qp_idx 0
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 45 with PID 27168 on
<br>
node compute-6-13.local exiting improperly. There are two reasons this 
<br>
could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>I am using OpenMPI 1.6.5 compiled with the Intel 11.1-080 compilers.
<br>
<p>`uname -a` returns &quot;Linux compute-1-1.local 2.6.32-279.14.1.el6.x86_64 
<br>
#1 SMP Tue Nov 6 23:43:09 UTC 2012 x86_64 x86_64 x86_64 GNU/Linux&quot;
<br>
<p>ibv_devinfo returns
<br>
hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;transport:                      InfiniBand (0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0005:ad00:001f:fed8
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0005:ad00:0100:d050
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       MT_03B0120002
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               39
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;link_layer:             IB
<br>
<p><p>Any help in tracking down the problem is greatly appreciated.
<br>
<p><pre>
-- 
T. Vince Grimes, Ph.D.
CCC System Administrator
Texas Tech University
Dept. of Chemistry and Biochemistry (10A)
Box 41061
Lubbock, TX 79409-1061
(806) 834-0813 (voice);     (806) 742-1289 (fax)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23777.php">Beichuan Yan: "Re: [OMPI users] OpenMPI job initializing problem"</a>
<li><strong>Previous message:</strong> <a href="23775.php">Latham, Robert J.: "Re: [OMPI users] OrangeFS ROMIO support"</a>
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
