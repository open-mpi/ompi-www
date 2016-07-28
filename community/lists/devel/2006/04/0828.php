<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 19 19:16:01 2006" -->
<!-- isoreceived="20060419231601" -->
<!-- sent="Wed, 19 Apr 2006 17:15:44 -0600" -->
<!-- isosent="20060419231544" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="[OMPI devel] opal_event_loop exiting" -->
<!-- id="5AC7BD90-3FE6-43B7-8D9E-080566247EA0_at_lanl.gov" -->
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
<strong>From:</strong> Greg Watson (<em>gwatson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-19 19:15:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0827.php">Matt Leininger: "Re: [OMPI devel] [openib-general] RFC userspace / MPI multicast support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Maybe reply:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0830.php">Brian Barrett: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Maybe reply:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>We've just run across a rather tricky issue. We're calling  
<br>
opal_event_loop() to dispatch orte events to an orted that has been  
<br>
launched separately. However if the orted dies for some reason (gets  
<br>
a signal or whatever) then opal_event_loop() is calling exit().  
<br>
Needless to say, this is not good behavior us. Any suggestions on how  
<br>
to get around this problem?
<br>
<p>Thanks,
<br>
<p>Greg
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0827.php">Matt Leininger: "Re: [OMPI devel] [openib-general] RFC userspace / MPI multicast support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Maybe reply:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0830.php">Brian Barrett: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Maybe reply:</strong> <a href="0832.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
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
