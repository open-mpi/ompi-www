<?
$subject_val = "[OMPI devel] MPI fails when launched with srun using openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 05:33:27 2013" -->
<!-- isoreceived="20130920093327" -->
<!-- sent="Fri, 20 Sep 2013 13:33:26 +0400" -->
<!-- isosent="20130920093326" -->
<!-- name="Victor Kocheganov" -->
<!-- email="victor.kocheganov_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI fails when launched with srun using openib btl." -->
<!-- id="CAMv3Gsf0AQ9p73eJhVjmCHeE-rFXZpYWnSNkRUq8BA5QB8P-fQ_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI devel] MPI fails when launched with srun using openib btl.<br>
<strong>From:</strong> Victor Kocheganov (<em>victor.kocheganov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 05:33:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12942.php">Ralph Castain: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>Previous message:</strong> <a href="12940.php">Hjelm, Nathan T: "[OMPI devel] RFC: Neighborhood collective support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12942.php">Ralph Castain: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>Reply:</strong> <a href="12942.php">Ralph Castain: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks!
<br>
<p>I am trying to launch *MPI master branch* with srun (simple send/recv
<br>
program, see attach) and using *openib*, but unfortunately I get a *segfault
<br>
*.
<br>
<p>Below is my workflow.
<br>
1) I configured ompi/master with following line:
<br>
<p>./autogen.sh &amp;&amp;  ./configure --prefix=$PWD/install --with-openib --with-pmi
<br>
&amp;&amp; make -j3 &amp;&amp; make install -j3
<br>
<p>2) exported (along with PATH and LD_LIBRARY_PATH) OMPI_MCA_btl variable:
<br>
<p>export OMPI_MCA_btl=self,openib
<br>
<p>3) and launched with following line:
<br>
<p>mpicc ~/usefull_tests/mpi_init.c &amp;&amp; srun -n 2 ./a.out
<br>
<p><p>Eventually I get following error:
<br>
<p>srun: error: mir6: task 1: Segmentation fault (core dumped)
<br>
srun: Terminating job step 17309.2
<br>
<p><p>with following backtrace:
<br>
<p>#0  0x00007f856c47b1d0 in ?? ()
<br>
#1  &lt;signal handler called&gt;
<br>
#2  0x00007f856d12d721 in rml_recv_cb (status=0, process_name=0x2027c50,
<br>
buffer=0x7f857084ed10,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;tag=102, cbdata=0x0) at connect/btl_openib_connect_oob.c:823
<br>
#3  0x00007f857553ffb0 in orte_rml_base_process_msg (fd=-1, flags=4,
<br>
cbdata=0x2027b80)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at base/rml_base_msg_handlers.c:172
<br>
#4  0x00007f857522a6c6 in event_process_active_single_queue
<br>
(base=0x1ed6c60, activeq=0x1ec9210)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at event.c:1367
<br>
#5  0x00007f857522a93e in event_process_active (base=0x1ed6c60) at
<br>
event.c:1437
<br>
#6  0x00007f857522afbc in opal_libevent2021_event_base_loop
<br>
(base=0x1ed6c60, flags=1) at event.c:1645
<br>
#7  0x00007f85754ccc19 in orte_progress_thread_engine (obj=0x7f857577cf20)
<br>
at runtime/orte_init.c:180
<br>
#8  0x0000003b5a6077f1 in start_thread () from /lib64/libpthread.so.0
<br>
#9  0x0000003b59ee570d in clone () from /lib64/libc.so.6
<br>
<p><p><p>Can anybody please help with a reason of such failure?
<br>
<p>P.s. I use  Red Hat Enterprise Linux Server release 6.2 with InfiniBand
<br>
cards.
<br>
<p>Thanks in advance,
<br>
Victor Kocheganov.
<br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12941/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12941/mpi_test.c">mpi_test.c</a>
</ul>
<!-- attachment="mpi_test.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12942.php">Ralph Castain: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>Previous message:</strong> <a href="12940.php">Hjelm, Nathan T: "[OMPI devel] RFC: Neighborhood collective support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12942.php">Ralph Castain: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>Reply:</strong> <a href="12942.php">Ralph Castain: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
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
