<?
$subject_val = "[OMPI devel] async thread in openib BTL";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 23 00:51:38 2010" -->
<!-- isoreceived="20101223055138" -->
<!-- sent="Wed, 22 Dec 2010 21:49:39 -0800" -->
<!-- isosent="20101223054939" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="[OMPI devel] async thread in openib BTL" -->
<!-- id="4D12E2F3.2090302_at_oracle.com" -->
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
<strong>Subject:</strong> [OMPI devel] async thread in openib BTL<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-23 00:49:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Reply:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm starting to look at the openib BTL for the first time and am 
<br>
puzzled.  In btl_openib_async.c, it looks like an asynchronous thread is 
<br>
started.  During MPI_Init(), the main thread sends the async thread a 
<br>
file descriptor for each IB interface to be polled.  In MPI_Finalize(), 
<br>
the main thread asks the async thread to shut down.  Between MPI_Init() 
<br>
and MPI_Finalize(), I would think that the async thread would poll on 
<br>
the IB fd's and handle events that come up.  If I stick print statements 
<br>
into the async thread, however, I don't see any events come up on the IB 
<br>
fd's.  So, the async thread is useless.  Yes?  It starts up and shuts 
<br>
down, but never sees any events on the IB devices?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Previous message:</strong> <a href="8816.php">Joshua Hursey: "Re: [OMPI devel] Some questions about checkpoint/restart (16)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
<li><strong>Reply:</strong> <a href="8818.php">Shamis, Pavel: "Re: [OMPI devel] async thread in openib BTL"</a>
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
