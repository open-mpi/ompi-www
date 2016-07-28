<?
$subject_val = "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 29 18:37:31 2014" -->
<!-- isoreceived="20141029223731" -->
<!-- sent="Wed, 29 Oct 2014 23:36:57 +0100" -->
<!-- isosent="20141029223657" -->
<!-- name="Oscar Vega-Gisbert" -->
<!-- email="ovega_at_[hidden]" -->
<!-- subject="Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4" -->
<!-- id="54516C09.9090702_at_dsic.upv.es" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="201410291516.s9TFG78K023335_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4<br>
<strong>From:</strong> Oscar Vega-Gisbert (<em>ovega_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-29 18:36:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25644.php">asad06_at_[hidden]: "[OMPI users] asad06@gmail.com has indicated you're a friend. Accept?"</a>
<li><strong>Previous message:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>In reply to:</strong> <a href="25641.php">Siegmar Gross: "[OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>There is an error in the program.
<br>
First you declare a 256 char buffer (BUF_SIZE = 256).
<br>
<p>When it is executed the line 96:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer = (MPI.getProcessorName()).toCharArray();
<br>
<p>The buffer length becomes less than 256.
<br>
So, when the next iteration is executed, at line 92 you could get an 
<br>
exception, because you want to receive 256 chars, but the buffer length 
<br>
is less than 256.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status = MPI.COMM_WORLD.recv (buffer, BUF_SIZE, MPI.CHAR, 0, 
<br>
MPI.ANY_TAG);
<br>
<p>I think this program worked because of causality.
<br>
The lines 96-98 should be replaced by:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char name[] = MPI.getProcessorName().toCharArray();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System.out.printf(&quot;message length: %d  message: %s\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name.length, new String(name));
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI.COMM_WORLD.send(name, name.length, MPI.CHAR, 0, MSGTAG);
<br>
<p>Now you won't lose the 256 char buffer.
<br>
<p>Also, the call to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String.valueOf(buffer)
<br>
should be replaced by
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;String.valueOf(buffer, 0, num)
<br>
because the buffer content could be trash from the position 'num'.
<br>
<p>Regards,
<br>
Oscar
<br>
<p>El 29/10/14 16:16, Siegmar Gross escribi&#243;:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; today a tested some small Java programs with openmpi-dev-178-ga16c1e4.
</span><br>
<span class="quotelev1">&gt; One program throws an exception ArrayIndexOutOfBoundsException. The
</span><br>
<span class="quotelev1">&gt; program worked fine in older MPI versions, e.g., openmpi-1.8.2a1r31804.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 138 mpiexec -np 2 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 1 process sends its greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;    message tag:    3
</span><br>
<span class="quotelev1">&gt;    message length: 26
</span><br>
<span class="quotelev1">&gt;    message:
</span><br>
<span class="quotelev1">&gt; tyr.informatik.hs-fulda.de???????????????????????????????????????????????????????????????????????????????
</span><br>
<span class="quotelev1">&gt; ??????????????????????????????????????????????????????????????????????????????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
</span><br>
<span class="quotelev1">&gt;          at mpi.Comm.recv(Native Method)
</span><br>
<span class="quotelev1">&gt;          at mpi.Comm.recv(Comm.java:391)
</span><br>
<span class="quotelev1">&gt;          at MsgSendRecvMain.main(MsgSendRecvMain.java:92)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The exception happens also on my Linux box.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; linpc1 java 102 mpijavac MsgSendRecvMain.java
</span><br>
<span class="quotelev1">&gt; linpc1 java 103 mpiexec -np 2 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 1 process sends its greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;    message tag:    3
</span><br>
<span class="quotelev1">&gt;    message length: 6
</span><br>
<span class="quotelev1">&gt;    message:        linpc1?????%???%?????%?f?%?%???$??????????
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
</span><br>
<span class="quotelev1">&gt;          at mpi.Comm.recv(Native Method)
</span><br>
<span class="quotelev1">&gt;          at mpi.Comm.recv(Comm.java:391)
</span><br>
<span class="quotelev1">&gt;          at MsgSendRecvMain.main(MsgSendRecvMain.java:92)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; tyr java 139 /usr/local/gdb-7.6.1_64_gcc/bin/gdb mpiexec
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; (gdb) run -np 2 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt; Starting program: /usr/local/openmpi-1.9.0_64_gcc/bin/mpiexec -np 2 java MsgSendRecvMain
</span><br>
<span class="quotelev1">&gt; [Thread debugging using libthread_db enabled]
</span><br>
<span class="quotelev1">&gt; [New Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; [New LWP    2        ]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now 1 process sends its greetings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greetings from process 1:
</span><br>
<span class="quotelev1">&gt;    message tag:    3
</span><br>
<span class="quotelev1">&gt;    message length: 26
</span><br>
<span class="quotelev1">&gt;    message:        tyr.informatik.hs-fulda.de
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exception in thread &quot;main&quot; java.lang.ArrayIndexOutOfBoundsException
</span><br>
<span class="quotelev1">&gt;          at mpi.Comm.recv(Native Method)
</span><br>
<span class="quotelev1">&gt;          at mpi.Comm.recv(Comm.java:391)
</span><br>
<span class="quotelev1">&gt;          at MsgSendRecvMain.main(MsgSendRecvMain.java:92)
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Primary job  terminated normally, but 1 process returned
</span><br>
<span class="quotelev1">&gt; a non-zero exit code.. Per user-direction, the job has been aborted.
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpiexec detected that one or more processes exited with non-zero status, thus causing
</span><br>
<span class="quotelev1">&gt; the job to be terminated. The first process to do so was:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Process name: [[61564,1],1]
</span><br>
<span class="quotelev1">&gt;    Exit code:    1
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; [LWP    2         exited]
</span><br>
<span class="quotelev1">&gt; [New Thread 2        ]
</span><br>
<span class="quotelev1">&gt; [Switching to Thread 1 (LWP 1)]
</span><br>
<span class="quotelev1">&gt; sol_thread_fetch_registers: td_ta_map_id2thr: no thread can be found to satisfy query
</span><br>
<span class="quotelev1">&gt; (gdb) bt
</span><br>
<span class="quotelev1">&gt; #0  0xffffffff7f6173d0 in rtld_db_dlactivity () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #1  0xffffffff7f6175a8 in rd_event () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #2  0xffffffff7f618950 in lm_delete () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #3  0xffffffff7f6226bc in remove_so () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #4  0xffffffff7f624574 in remove_hdl () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #5  0xffffffff7f61d97c in dlclose_core () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #6  0xffffffff7f61d9d4 in dlclose_intn () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #7  0xffffffff7f61db0c in dlclose () from /usr/lib/sparcv9/ld.so.1
</span><br>
<span class="quotelev1">&gt; #8  0xffffffff7ec87ca0 in vm_close ()
</span><br>
<span class="quotelev1">&gt;     from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #9  0xffffffff7ec85274 in lt_dlclose ()
</span><br>
<span class="quotelev1">&gt;     from /usr/local/openmpi-1.9.0_64_gcc/lib64/libopen-pal.so.0
</span><br>
<span class="quotelev1">&gt; #10 0xffffffff7ecaa5dc in ri_destructor (obj=0x100187b70)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:382
</span><br>
<span class="quotelev1">&gt; #11 0xffffffff7eca8fd8 in opal_obj_run_destructors (object=0x100187b70)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/class/opal_object.h:446
</span><br>
<span class="quotelev1">&gt; #12 0xffffffff7eca9eac in mca_base_component_repository_release (
</span><br>
<span class="quotelev1">&gt;      component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_component_repository.c:240
</span><br>
<span class="quotelev1">&gt; #13 0xffffffff7ecac17c in mca_base_component_unload (
</span><br>
<span class="quotelev1">&gt;      component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:47
</span><br>
<span class="quotelev1">&gt; #14 0xffffffff7ecac210 in mca_base_component_close (
</span><br>
<span class="quotelev1">&gt;      component=0xffffffff7b1236f0 &lt;mca_oob_tcp_component&gt;, output_id=-1)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:60
</span><br>
<span class="quotelev1">&gt; #15 0xffffffff7ecac2e4 in mca_base_components_close (output_id=-1,
</span><br>
<span class="quotelev1">&gt;      components=0xffffffff7f14bc58 &lt;orte_oob_base_framework+80&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:86
</span><br>
<span class="quotelev1">&gt; #16 0xffffffff7ecac24c in mca_base_framework_components_close (
</span><br>
<span class="quotelev1">&gt;      framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;, skip=0x0)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_components_close.c:66
</span><br>
<span class="quotelev1">&gt; #17 0xffffffff7efcaf80 in orte_oob_base_close ()
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/orte/mca/oob/base/oob_base_frame.c:112
</span><br>
<span class="quotelev1">&gt; #18 0xffffffff7ecc0d74 in mca_base_framework_close (
</span><br>
<span class="quotelev1">&gt;      framework=0xffffffff7f14bc08 &lt;orte_oob_base_framework&gt;)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/opal/mca/base/mca_base_framework.c:187
</span><br>
<span class="quotelev1">&gt; #19 0xffffffff7be07858 in rte_finalize ()
</span><br>
<span class="quotelev1">&gt;      at ../../../../../openmpi-dev-178-ga16c1e4/orte/mca/ess/hnp/ess_hnp_module.c:857
</span><br>
<span class="quotelev1">&gt; #20 0xffffffff7ef338bc in orte_finalize ()
</span><br>
<span class="quotelev1">&gt;      at ../../openmpi-dev-178-ga16c1e4/orte/runtime/orte_finalize.c:66
</span><br>
<span class="quotelev1">&gt; #21 0x000000010000723c in orterun (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/orterun.c:1103
</span><br>
<span class="quotelev1">&gt; #22 0x0000000100003e80 in main (argc=5, argv=0xffffffff7fffe0d8)
</span><br>
<span class="quotelev1">&gt;      at ../../../../openmpi-dev-178-ga16c1e4/orte/tools/orterun/main.c:13
</span><br>
<span class="quotelev1">&gt; (gdb)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hopefully the problem has nothing to do with my program.
</span><br>
<span class="quotelev1">&gt; I would be grateful if somebody (Oscar?) can fix the
</span><br>
<span class="quotelev1">&gt; problem. Thank you very much for any help in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25641.php">http://www.open-mpi.org/community/lists/users/2014/10/25641.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25644.php">asad06_at_[hidden]: "[OMPI users] asad06@gmail.com has indicated you're a friend. Accept?"</a>
<li><strong>Previous message:</strong> <a href="25642.php">Ralph Castain: "Re: [OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
<li><strong>In reply to:</strong> <a href="25641.php">Siegmar Gross: "[OMPI users] java.lang.ArrayIndexOutOfBoundsException in openmpi-dev-178-ga16c1e4"</a>
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
