<?
$subject_val = "[OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 11 19:31:56 2016" -->
<!-- isoreceived="20160212003156" -->
<!-- sent="Thu, 11 Feb 2016 17:30:56 -0700" -->
<!-- isosent="20160212003056" -->
<!-- name="Stephen Guzik" -->
<!-- email="Stephen.Guzik_at_[hidden]" -->
<!-- subject="[OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread" -->
<!-- id="56BD27C0.8020607_at_colostate.edu" -->
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
<strong>Subject:</strong> [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread<br>
<strong>From:</strong> Stephen Guzik (<em>Stephen.Guzik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-11 19:30:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28516.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28514.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Reply:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I would like to divide n processes between the sockets on a node, with
<br>
one process per core, and bind them to a hwthread.  Consider a system
<br>
with 2 sockets, 10 cores per socket, and 2 hwthreads per core.  If I enter
<br>
<p>-np 20 --map-by ppr:1:core --bind-to hwthread
<br>
<p>then this works as I intend.  But if I only want 10 processes with 5 on
<br>
each socket, then
<br>
<p>-np 10 --map-by ppr:5:socket --bind-to hwthread
<br>
<p>will map two processes to each core (1 per hwthread).  I also tried
<br>
<p>-np 10 --map-by ppr:5:socket:pe=2 --bind-to hwthread
<br>
-np 10 --map-by ppr:5:socket --bind-to core
<br>
<p>but both of those will bind to the core.  How can I say 5 per socket and
<br>
only 1 per core and bind to a single hardware thread?
<br>
<p>I am using openmpi 1.8.8.
<br>
<p>Thanks,
<br>
Stephen
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28516.php">Jeff Hammond: "Re: [OMPI users] shared memory zero size segment"</a>
<li><strong>Previous message:</strong> <a href="28514.php">Nathan Hjelm: "Re: [OMPI users] shared memory zero size segment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
<li><strong>Reply:</strong> <a href="28520.php">Stephen Guzik: "Re: [OMPI users] How to map to sockets with 1 per core, but bind to a single hwthread"</a>
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
