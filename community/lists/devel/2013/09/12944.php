<?
$subject_val = "Re: [OMPI devel] MPI fails when launched with srun using openib btl.";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 20 10:27:25 2013" -->
<!-- isoreceived="20130920142725" -->
<!-- sent="Fri, 20 Sep 2013 07:27:21 -0700" -->
<!-- isosent="20130920142721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI fails when launched with srun using openib btl." -->
<!-- id="A6027964-1233-43F8-BFEC-85B30AB10644_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMv3GsfA5grTfcJLe1_G9sdgEFgiRsTrsGqbcFNU+_sa+DK8Aw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI fails when launched with srun using openib btl.<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-20 10:27:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12943.php">Victor Kocheganov: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>In reply to:</strong> <a href="12943.php">Victor Kocheganov: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That looks out-of-date to me - there have been commits all week long. Best guess is that the git mirror is behind
<br>
<p>On Sep 20, 2013, at 6:48 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have HEAD on git revision:
</span><br>
<span class="quotelev1">&gt; commit 4c282fe5bc8a4143a8c6ac5c0f8d4af591277f6f
</span><br>
<span class="quotelev1">&gt; Author: Ralph Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date:   Sun Sep 15 15:33:51 2013 +0000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; May be there is a difference in PMI? I have PMI-1 on machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Sep 20, 2013 at 5:37 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; What revision level are you at? I just checked and it worked fine for me
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Sep 20, 2013, at 2:33 AM, Victor Kocheganov &lt;victor.kocheganov_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi folks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am trying to launch MPI master branch with srun (simple send/recv program, see attach) and using openib, but unfortunately I get a segfault.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Below is my workflow.
</span><br>
<span class="quotelev2">&gt;&gt; 1) I configured ompi/master with following line:
</span><br>
<span class="quotelev2">&gt;&gt; ./autogen.sh &amp;&amp;  ./configure --prefix=$PWD/install --with-openib --with-pmi &amp;&amp; make -j3 &amp;&amp; make install -j3
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2) exported (along with PATH and LD_LIBRARY_PATH) OMPI_MCA_btl variable:
</span><br>
<span class="quotelev2">&gt;&gt; export OMPI_MCA_btl=self,openib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 3) and launched with following line:
</span><br>
<span class="quotelev2">&gt;&gt; mpicc ~/usefull_tests/mpi_init.c &amp;&amp; srun -n 2 ./a.out
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Eventually I get following error: 
</span><br>
<span class="quotelev2">&gt;&gt; srun: error: mir6: task 1: Segmentation fault (core dumped)
</span><br>
<span class="quotelev2">&gt;&gt; srun: Terminating job step 17309.2
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; with following backtrace:
</span><br>
<span class="quotelev2">&gt;&gt; #0  0x00007f856c47b1d0 in ?? ()
</span><br>
<span class="quotelev2">&gt;&gt; #1  &lt;signal handler called&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #2  0x00007f856d12d721 in rml_recv_cb (status=0, process_name=0x2027c50, buffer=0x7f857084ed10,
</span><br>
<span class="quotelev2">&gt;&gt;     tag=102, cbdata=0x0) at connect/btl_openib_connect_oob.c:823
</span><br>
<span class="quotelev2">&gt;&gt; #3  0x00007f857553ffb0 in orte_rml_base_process_msg (fd=-1, flags=4, cbdata=0x2027b80)
</span><br>
<span class="quotelev2">&gt;&gt;     at base/rml_base_msg_handlers.c:172
</span><br>
<span class="quotelev2">&gt;&gt; #4  0x00007f857522a6c6 in event_process_active_single_queue (base=0x1ed6c60, activeq=0x1ec9210)
</span><br>
<span class="quotelev2">&gt;&gt;     at event.c:1367
</span><br>
<span class="quotelev2">&gt;&gt; #5  0x00007f857522a93e in event_process_active (base=0x1ed6c60) at event.c:1437
</span><br>
<span class="quotelev2">&gt;&gt; #6  0x00007f857522afbc in opal_libevent2021_event_base_loop (base=0x1ed6c60, flags=1) at event.c:1645
</span><br>
<span class="quotelev2">&gt;&gt; #7  0x00007f85754ccc19 in orte_progress_thread_engine (obj=0x7f857577cf20) at runtime/orte_init.c:180
</span><br>
<span class="quotelev2">&gt;&gt; #8  0x0000003b5a6077f1 in start_thread () from /lib64/libpthread.so.0
</span><br>
<span class="quotelev2">&gt;&gt; #9  0x0000003b59ee570d in clone () from /lib64/libc.so.6
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can anybody please help with a reason of such failure?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; P.s. I use  Red Hat Enterprise Linux Server release 6.2 with InfiniBand cards.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance,
</span><br>
<span class="quotelev2">&gt;&gt; Victor Kocheganov.
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mpi_test.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12944/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12945.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Intercomm Merge"</a>
<li><strong>Previous message:</strong> <a href="12943.php">Victor Kocheganov: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
<li><strong>In reply to:</strong> <a href="12943.php">Victor Kocheganov: "Re: [OMPI devel] MPI fails when launched with srun using openib btl."</a>
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
