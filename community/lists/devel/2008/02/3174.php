<?
$subject_val = "[OMPI devel] request help debugging openib btl problem";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  8 17:52:40 2008" -->
<!-- isoreceived="20080208225240" -->
<!-- sent="Fri, 08 Feb 2008 14:52:35 -0800" -->
<!-- isosent="20080208225235" -->
<!-- name="Ralph Campbell" -->
<!-- email="ralph.campbell_at_[hidden]" -->
<!-- subject="[OMPI devel] request help debugging openib btl problem" -->
<!-- id="1202511155.3638.121.camel_at_brick.pathscale.com" -->
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
<strong>Subject:</strong> [OMPI devel] request help debugging openib btl problem<br>
<strong>From:</strong> Ralph Campbell (<em>ralph.campbell_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-08 17:52:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<li><strong>Previous message:</strong> <a href="3173.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<li><strong>Reply:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm using openmpi 1.2.5 with a QLogic HCA and using the
<br>
openib btl (not PSM).  osu_latency and osu_bw work OK but
<br>
when I run osu_bibw with a message size of 2MB (1&lt;&lt;21),
<br>
it hangs in btl_openib_component_progress() waiting for something.
<br>
<p>I tried adding printfs at each point where ibv_post_send(),
<br>
ibv_post_recv(), and ibv_poll_cq() are called and then ran
<br>
a python script which verified that all sends and recvs got a
<br>
good completion notice in the posted order
<br>
(mca_btl_openib_component.use_srq is zero for this test)
<br>
Note that only RC SEND (12252 byte) messages are being sent
<br>
at this point.
<br>
<p>I can send the trace of ibv_* calls if it will help.
<br>
<p>Any suggestions what to look for are welcome.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<li><strong>Previous message:</strong> <a href="3173.php">George Bosilca: "Re: [OMPI devel] Datasize confusion in MPI_Write can lead to data los!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
<li><strong>Reply:</strong> <a href="3175.php">Jeff Squyres: "Re: [OMPI devel] request help debugging openib btl problem"</a>
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
