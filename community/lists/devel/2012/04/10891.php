<?
$subject_val = "[OMPI devel] OPAL polling optimization";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 19 08:43:49 2012" -->
<!-- isoreceived="20120419124349" -->
<!-- sent="Thu, 19 Apr 2012 15:43:39 +0300" -->
<!-- isosent="20120419124339" -->
<!-- name="Alex Margolin" -->
<!-- email="alex.margolin_at_[hidden]" -->
<!-- subject="[OMPI devel] OPAL polling optimization" -->
<!-- id="4F90087B.1000409_at_mail.huji.ac.il" -->
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
<strong>Subject:</strong> [OMPI devel] OPAL polling optimization<br>
<strong>From:</strong> Alex Margolin (<em>alex.margolin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-04-19 08:43:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<li><strong>Previous message:</strong> <a href="10890.php">Jeffrey Squyres: "[OMPI devel] Fortran merge complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<li><strong>Reply:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm writing a new polling module and I stumbled upon some strange code:
<br>
The following function is implemented in 
<br>
openmpi-trunk/opal/mca/event/libevent2013/libevent/signal.c :
<br>
<p>evsig_add(struct event_base *base, evutil_socket_t evsignal, short old, 
<br>
short events, void *p)
<br>
<p>- It appears the three last paramaters are not used at all!
<br>
It's a coincidence that I'm just trying to register ANY signal handler 
<br>
to interrupt my ppoll syscall, so It may work out,
<br>
but I'm not sure how I'm supposed to use this function to set my own 
<br>
handler, not what the other parameters are for.
<br>
I've attached my patch for OPAL so far... I'll appreciate any advice.
<br>
<p>Alex
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-10891/mosix-opal-patch.diff">mosix-opal-patch.diff</a>
</ul>
<!-- attachment="mosix-opal-patch.diff" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<li><strong>Previous message:</strong> <a href="10890.php">Jeffrey Squyres: "[OMPI devel] Fortran merge complete"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
<li><strong>Reply:</strong> <a href="10892.php">Ralph Castain: "Re: [OMPI devel] OPAL polling optimization"</a>
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
