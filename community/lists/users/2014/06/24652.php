<?
$subject_val = "[OMPI users] deprecated cuptiActivityEnqueueBuffer";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 16 13:40:14 2014" -->
<!-- isoreceived="20140616174014" -->
<!-- sent="Mon, 16 Jun 2014 12:40:07 -0500" -->
<!-- isosent="20140616174007" -->
<!-- name="jcabello_at_[hidden]" -->
<!-- email="jcabello_at_[hidden]" -->
<!-- subject="[OMPI users] deprecated cuptiActivityEnqueueBuffer" -->
<!-- id="5ba349d7c73abd25b367660af7e4da1d.squirrel_at_computacion.cs.cinvestav.mx" -->
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
<strong>Subject:</strong> [OMPI users] deprecated cuptiActivityEnqueueBuffer<br>
<strong>From:</strong> <a href="mailto:jcabello_at_[hidden]?Subject=Re:%20[OMPI%20users]%20deprecated%20cuptiActivityEnqueueBuffer"><em>jcabello_at_[hidden]</em></a><br>
<strong>Date:</strong> 2014-06-16 13:40:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Previous message:</strong> <a href="24651.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Reply:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all:
<br>
<p>I'm having trouble to compile OMPI from trunk svn with the new 6.0 nvidia
<br>
SDK because deprecated cuptiActivityEnqueueBuffer
<br>
<p>this is the problem:
<br>
<p>&nbsp;&nbsp;CC       libvt_la-vt_cupti_activity.lo
<br>
&nbsp;&nbsp;CC       libvt_la-vt_iowrap_helper.lo
<br>
&nbsp;&nbsp;CC       libvt_la-vt_libwrap.lo
<br>
&nbsp;&nbsp;CC       libvt_la-vt_mallocwrap.lo
<br>
vt_cupti_activity.c: In function 'vt_cuptiact_queueNewBuffer':
<br>
vt_cupti_activity.c:203:3: error: implicit declaration of function
<br>
'cuptiActivityEnqueueBuffer' [-Werror=implicit-function-declaration]
<br>
&nbsp;&nbsp;&nbsp;VT_CUPTI_CALL(cuptiActivityEnqueueBuffer(cuCtx, 0, ALIGN_BUFFER(buffer,
<br>
8),
<br>
<p>Does any body known any patch?
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Previous message:</strong> <a href="24651.php">Ralph Castain: "Re: [OMPI users] Bind multiple cores to rank - OpenMPI 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
<li><strong>Reply:</strong> <a href="24653.php">Rolf vandeVaart: "Re: [OMPI users] deprecated cuptiActivityEnqueueBuffer"</a>
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
