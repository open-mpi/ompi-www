<?
$subject_val = "[OMPI devel] Coll ML issues";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 23 18:43:09 2015" -->
<!-- isoreceived="20150123234309" -->
<!-- sent="Fri, 23 Jan 2015 18:43:05 -0500" -->
<!-- isosent="20150123234305" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="[OMPI devel] Coll ML issues" -->
<!-- id="02E8599A-A9DB-4756-9D80-85097F0853F7_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] Coll ML issues<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-23 18:43:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16821.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] Problem to integrate function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16819.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem to integrate function in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16822.php">Howard Pritchard: "Re: [OMPI devel] Coll ML issues"</a>
<li><strong>Reply:</strong> <a href="16822.php">Howard Pritchard: "Re: [OMPI devel] Coll ML issues"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
During some experiments we have identified several major issues with coll ML with a very recent version of Open MPI master (22ab638 Jan 20 13:21:44). Based on the description below I consider these issues as major drawbacks that require immediate action (or disabling coll ML by default in all versions where it ships).
<br>
<p>1. Stressing the coll ML selection mechanism leads to deadlocks. For each new communicator created coll ml will do several collective communications to figure out the topology of the newly created communicator. Unfortunately this algorithm seem to be somehow broken as a stress test eventually deadlocks. Attached is a such a test developed by Thomas that will stress the communicator creation in Open MPI by creating hundreds of communicators following a random split. Running it over 4 processes with &#226;&#128;&#156;-a 250&#226;&#128;&#157; will deadlock. As soon as coll ML is disabled, the test successfully completes. When it deadlocks the backtrace is the following:
<br>
<p>#6  0x00007ffeb9520009 in mca_pml_ob1_recv (addr=0x7ffff7936780, count=38, 
<br>
&nbsp;&nbsp;&nbsp;datatype=0x7ffec290bb40, src=0, tag=-99, comm=0x3092e40, status=0x0)
<br>
&nbsp;&nbsp;&nbsp;at pml_ob1_irecv.c:109
<br>
#7  0x00007ffec2629bc7 in comm_allreduce_pml (sbuf=0x3095c88, rbuf=0x3095c88, 
<br>
&nbsp;&nbsp;&nbsp;count=38, dtype=0x7ffec290bb40, my_rank_in_group=2, op=0x7ffec2924520, 
<br>
&nbsp;&nbsp;&nbsp;n_peers=3, ranks_in_comm=0x30a6d60, comm=0x3092e40)
<br>
&nbsp;&nbsp;&nbsp;at patterns/comm/allreduce.c:215
<br>
#8  0x00007ffeb865a151 in ml_module_set_small_msg_thresholds (
<br>
&nbsp;&nbsp;&nbsp;ml_module=0x3093da0) at coll_ml_module.c:1312
<br>
#9  0x00007ffeb865aa0f in ml_discover_hierarchy (ml_module=0x3093da0)
<br>
&nbsp;&nbsp;&nbsp;at coll_ml_module.c:1546
<br>
#10 0x00007ffeb865f401 in mca_coll_ml_comm_query (comm=0x3092e40, 
<br>
&nbsp;&nbsp;&nbsp;priority=0x7ffff793aa68) at coll_ml_module.c:2970
<br>
<p>2. In the lucky cases where the above mentioned deadlock doesn&#226;&#128;&#153;t occur, the whole selection logic of the coll ML is __extremely__ costly. All the collective communications during the hierarchy discovery are unnecessary done for each communicator, they should be done only when new processes are added to the poll (as an example this should only be done once per MPI_COMM_WORLD).
<br>
<p>The figure in ml.pdf shows the average and the standard deviation of the communicator creation cost. As one can see there is a drastic increase in communicator creation cost, as well as an extreme variation of the standard deviation.
<br>
<p>&nbsp;George.
<br>
<p><p><p>

<br><hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16820/manysplit.c">manysplit.c</a>
</ul>
<!-- attachment="manysplit.c" -->
<hr>
<ul>
<li>application/pdf attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16820/ml.pdf">ml.pdf</a>
</ul>
<!-- attachment="ml.pdf" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16821.php">Cyrille DIBAMOU MBEUYO: "Re: [OMPI devel] Problem to integrate function in OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="16819.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Problem to integrate function in OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16822.php">Howard Pritchard: "Re: [OMPI devel] Coll ML issues"</a>
<li><strong>Reply:</strong> <a href="16822.php">Howard Pritchard: "Re: [OMPI devel] Coll ML issues"</a>
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
