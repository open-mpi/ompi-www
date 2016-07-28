<?
$subject_val = "Re: [OMPI devel] Coll ML issues";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jan 25 11:25:49 2015" -->
<!-- isoreceived="20150125162549" -->
<!-- sent="Sun, 25 Jan 2015 10:25:47 -0600" -->
<!-- isosent="20150125162547" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Coll ML issues" -->
<!-- id="CAF1Cqj58+8M2=Z6x2LcQ8rv4ZEsH6kr3uozdFj1eBAgn3E0Kag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="02E8599A-A9DB-4756-9D80-85097F0853F7_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Coll ML issues<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-25 11:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16823.php">Adrian Reber: "[OMPI devel] make check failure on ppc64"</a>
<li><strong>Previous message:</strong> <a href="16821.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] Problem to integrate function in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16820.php">George Bosilca: "[OMPI devel] Coll ML issues"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
<p>I put this on the agenda for this week's meeting.
<br>
<p>Howard
<br>
<p><p>2015-01-23 16:43 GMT-07:00 George Bosilca &lt;bosilca_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; During some experiments we have identified several major issues with coll
</span><br>
<span class="quotelev1">&gt; ML with a very recent version of Open MPI master (22ab638 Jan 20 13:21:44).
</span><br>
<span class="quotelev1">&gt; Based on the description below I consider these issues as major drawbacks
</span><br>
<span class="quotelev1">&gt; that require immediate action (or disabling coll ML by default in all
</span><br>
<span class="quotelev1">&gt; versions where it ships).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Stressing the coll ML selection mechanism leads to deadlocks. For each
</span><br>
<span class="quotelev1">&gt; new communicator created coll ml will do several collective communications
</span><br>
<span class="quotelev1">&gt; to figure out the topology of the newly created communicator. Unfortunately
</span><br>
<span class="quotelev1">&gt; this algorithm seem to be somehow broken as a stress test eventually
</span><br>
<span class="quotelev1">&gt; deadlocks. Attached is a such a test developed by Thomas that will stress
</span><br>
<span class="quotelev1">&gt; the communicator creation in Open MPI by creating hundreds of communicators
</span><br>
<span class="quotelev1">&gt; following a random split. Running it over 4 processes with &#226;&#128;&#156;-a 250&#226;&#128;&#157; will
</span><br>
<span class="quotelev1">&gt; deadlock. As soon as coll ML is disabled, the test successfully completes.
</span><br>
<span class="quotelev1">&gt; When it deadlocks the backtrace is the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #6  0x00007ffeb9520009 in mca_pml_ob1_recv (addr=0x7ffff7936780, count=38,
</span><br>
<span class="quotelev1">&gt;    datatype=0x7ffec290bb40, src=0, tag=-99, comm=0x3092e40, status=0x0)
</span><br>
<span class="quotelev1">&gt;    at pml_ob1_irecv.c:109
</span><br>
<span class="quotelev1">&gt; #7  0x00007ffec2629bc7 in comm_allreduce_pml (sbuf=0x3095c88,
</span><br>
<span class="quotelev1">&gt; rbuf=0x3095c88,
</span><br>
<span class="quotelev1">&gt;    count=38, dtype=0x7ffec290bb40, my_rank_in_group=2, op=0x7ffec2924520,
</span><br>
<span class="quotelev1">&gt;    n_peers=3, ranks_in_comm=0x30a6d60, comm=0x3092e40)
</span><br>
<span class="quotelev1">&gt;    at patterns/comm/allreduce.c:215
</span><br>
<span class="quotelev1">&gt; #8  0x00007ffeb865a151 in ml_module_set_small_msg_thresholds (
</span><br>
<span class="quotelev1">&gt;    ml_module=0x3093da0) at coll_ml_module.c:1312
</span><br>
<span class="quotelev1">&gt; #9  0x00007ffeb865aa0f in ml_discover_hierarchy (ml_module=0x3093da0)
</span><br>
<span class="quotelev1">&gt;    at coll_ml_module.c:1546
</span><br>
<span class="quotelev1">&gt; #10 0x00007ffeb865f401 in mca_coll_ml_comm_query (comm=0x3092e40,
</span><br>
<span class="quotelev1">&gt;    priority=0x7ffff793aa68) at coll_ml_module.c:2970
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. In the lucky cases where the above mentioned deadlock doesn&#226;&#128;&#153;t occur,
</span><br>
<span class="quotelev1">&gt; the whole selection logic of the coll ML is __extremely__ costly. All the
</span><br>
<span class="quotelev1">&gt; collective communications during the hierarchy discovery are unnecessary
</span><br>
<span class="quotelev1">&gt; done for each communicator, they should be done only when new processes are
</span><br>
<span class="quotelev1">&gt; added to the poll (as an example this should only be done once per
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The figure in ml.pdf shows the average and the standard deviation of the
</span><br>
<span class="quotelev1">&gt; communicator creation cost. As one can see there is a drastic increase in
</span><br>
<span class="quotelev1">&gt; communicator creation cost, as well as an extreme variation of the standard
</span><br>
<span class="quotelev1">&gt; deviation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/01/16820.php">http://www.open-mpi.org/community/lists/devel/2015/01/16820.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16822/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16823.php">Adrian Reber: "[OMPI devel] make check failure on ppc64"</a>
<li><strong>Previous message:</strong> <a href="16821.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] Problem to integrate function in OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="16820.php">George Bosilca: "[OMPI devel] Coll ML issues"</a>
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
