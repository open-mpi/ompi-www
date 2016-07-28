<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 11:12:09 2006" -->
<!-- isoreceived="20060420151209" -->
<!-- sent="Thu, 20 Apr 2006 08:12:07 -0700" -->
<!-- isosent="20060420151207" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_event_loop exiting" -->
<!-- id="187D7A85-41DA-4DBE-8355-BD2D8113879D_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5AC7BD90-3FE6-43B7-8D9E-080566247EA0_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 11:12:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>In reply to:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 19, 2006, at 4:15 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; We've just run across a rather tricky issue. We're calling
</span><br>
<span class="quotelev1">&gt; opal_event_loop() to dispatch orte events to an orted that has been
</span><br>
<span class="quotelev1">&gt; launched separately. However if the orted dies for some reason (gets
</span><br>
<span class="quotelev1">&gt; a signal or whatever) then opal_event_loop() is calling exit().
</span><br>
<span class="quotelev1">&gt; Needless to say, this is not good behavior us. Any suggestions on how
</span><br>
<span class="quotelev1">&gt; to get around this problem?
</span><br>
<p>Is the orted you are connecting to the &quot;seed&quot; daemon?  I think the  
<br>
only time we should be exiting like that is if the orted was the seed  
<br>
daemon.  I'm not sure what we want to do if that's the case -- it  
<br>
looks like we're calling errmgr.abort() when badness happens.  I  
<br>
wonder if your application can provide its own errmgr component that  
<br>
provides an abort that doesn't actually abort?  Just some off the  
<br>
cuff ideas -- Ralph could probably give a better idea of exactly what  
<br>
is happening...
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0829.php">Greg Watson: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>In reply to:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Reply:</strong> <a href="0831.php">Ralph Castain: "Re: [OMPI devel] opal_event_loop exiting"</a>
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
