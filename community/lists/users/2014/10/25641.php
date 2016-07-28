<?
$subject_val = "[OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 11:16:29 2014" -->
<!-- isoreceived="20141029151629" -->
<!-- sent="Wed, 29 Oct 2014 16:16:07 +0100 (CET)" -->
<!-- isosent="20141029151607" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="[OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4" -->
<!-- id="201410291516.s9TFG78K023335_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-29 11:16:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Previous message:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Reply:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Reply:</strong> <a href="25643.php">Oscar Vega-Gisbert: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>today a tested some small Java programs with openmpi-dev-178-ga16c1e4.
<br>
One program throws an exception ArrayIndexOutOfBoundsException. The
<br>
program worked fine in older MPI versions, e.g., openmpi-1.8.2a1r31804.
<br>
<p><p>tyr java 138 mpiexec -np 2 java MsgSendRecvMain
<br>
<p>Now 1 process sends its greetings.
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 26
<br>
&nbsp;&nbsp;message:        
<br>
tyr.informatik.hs-fulda.de???????????????????????????????????????????????????????????????????????????????
<br>
??????????????????????????????????????????????????????????????????????????????
<br>
<p>Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.recv(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.recv(Comm.java:391)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at MsgSendRecvMain.main(MsgSendRecvMain.java:92)
<br>
...
<br>
<p><p><p>The exception happens also on my Linux box.
<br>
<p>linpc1 java 102 mpijavac MsgSendRecvMain.java 
<br>
linpc1 java 103 mpiexec -np 2 java MsgSendRecvMain
<br>
<p>Now 1 process sends its greetings.
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 6
<br>
&nbsp;&nbsp;message:        linpc1?????%???%?????%?f?%?%???$??????????
<br>
<p>Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.recv(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.recv(Comm.java:391)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at MsgSendRecvMain.main(MsgSendRecvMain.java:92)
<br>
...
<br>
<p><p><p>tyr java 139 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
<br>
...
<br>
(gdb) run -np 2 java MsgSendRecvMain
<br>
Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 2 java MsgSendRecvMain
<br>
[Thread debugging using libthread_db enabled]
<br>
[New Thread 1 (LWP 1)]
<br>
[New LWP    2        ]
<br>
<p>Now 1 process sends its greetings.
<br>
<p>Greetings from process 1:
<br>
&nbsp;&nbsp;message tag:    3
<br>
&nbsp;&nbsp;message length: 26
<br>
&nbsp;&nbsp;message:        tyr.informatik.hs-fulda.de
<br>
<p>Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.recv(Native Method)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at mpi.Comm.recv(Comm.java:391)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;at MsgSendRecvMain.main(MsgSendRecvMain.java:92)
<br>
-------------------------------------------------------
<br>
Primary job  terminated normally, but 1 process returned
<br>
a non-zero exit code.. Per user-direction, the job has been aborted.
<br>
-------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec detected that one or more processes exited with non-zero status, thus causing
<br>
the job to be terminated. The first process to do so was:
<br>
<p>&nbsp;&nbsp;Process name: [[61564,1],1]
<br>
&nbsp;&nbsp;Exit code:    1
<br>
--------------------------------------------------------------------------
<br>
[LWP    2         exited]
<br>
[New Thread 2        ]
<br>
[Switching to Thread 1 (LWP 1)]
<br>
sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
<br>
(gdb) bt
<br>
#0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
<br>
#1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
<br>
#2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
<br>
#3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
<br>
#4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
<br>
#5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
<br>
#6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
<br>
#7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
<br>
#8  0xffffffff7ec87ca0 in vm_close ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
#9  0xffffffff7ec85274 in lt_dlclose ()
<br>
&nbsp;&nbsp;&nbsp;from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
<br>
#10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187b70)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
<br>
#11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187b70)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
<br>
#12 0xffffffff7eca9eac in mca_base_component_repository_release (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
<br>
#13 0xffffffff7ecac17c in mca_base_component_unload (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
<br>
#14 0xffffffff7ecac210 in mca_base_component_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
<br>
#15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1, 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
<br>
#16 0xffffffff7ecac24c in mca_base_framework_components_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
<br>
#17 0xffffffff7efcaf80 in orte_oob_base_close ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
<br>
#18 0xffffffff7ecc0d74 in mca_base_framework_close (
<br>
&nbsp;&nbsp;&nbsp;&nbsp;framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
<br>
#19 0xffffffff7be07858 in rte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
<br>
#20 0xffffffff7ef338bc in orte_finalize ()
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
<br>
#21 0x000000010000723c in orterun (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
<br>
#22 0x0000000100003e80 in main (argc=5, argv=0xffffffff7fffe0d8)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
<br>
(gdb) 
<br>
<p><p>Hopefully the problem has nothing to do with my program.
<br>
I would be grateful if somebody (Oscar?) can fix the
<br>
problem. Thank you very much for any help in advance.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p>
<br><hr>
<ul>
<li>APPLICATION/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25641/MsgSendRecvMain.java">MsgSendRecvMain.java</a>
</ul>
<!-- attachment="MsgSendRecvMain.java" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Previous message:</strong> <a href="25640.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Allgather in OpenMPI 1.4.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Reply:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>Reply:</strong> <a href="25643.php">Oscar Vega-Gisbert: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
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
