<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 19 19:19:22 2006" -->
<!-- isoreceived="20060419231922" -->
<!-- sent="Wed, 19 Apr 2006 17:19:09 -0600" -->
<!-- isosent="20060419231909" -->
<!-- name="Greg Watson" -->
<!-- email="gwatson_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] opal_event_loop exiting" -->
<!-- id="AFB435E7-5FC8-4FE4-B1D6-3C5491B9AB57_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="A07364D5-6A73-43AC-9D98-E6701002FB98_at_lanl.gov" -->
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
<strong>Date:</strong> 2006-04-19 19:19:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0830.php">Brian Barrett: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<li><strong>Maybe in reply to:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0830.php">Brian Barrett: "Re: [OMPI devel] opal_event_loop exiting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oops, should have mentioned that this is 1.0.2 on MacOSX.
<br>
<p>Greg
<br>
<p>On Apr 19, 2006, at 5:15 PM, Greg Watson wrote:
<br>
<p><span class="quotelev1">&gt; Hi all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We've just run across a rather tricky issue. We're calling  
</span><br>
<span class="quotelev1">&gt; opal_event_loop() to dispatch orte events to an orted that has been  
</span><br>
<span class="quotelev1">&gt; launched separately. However if the orted dies for some reason  
</span><br>
<span class="quotelev1">&gt; (gets a signal or whatever) then opal_event_loop() is calling exit 
</span><br>
<span class="quotelev1">&gt; (). Needless to say, this is not good behavior us. Any suggestions  
</span><br>
<span class="quotelev1">&gt; on how to get around this problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Greg
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0830.php">Brian Barrett: "Re: [OMPI devel] opal_event_loop exiting"</a>
<li><strong>Previous message:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<li><strong>Maybe in reply to:</strong> <a href="0828.php">Greg Watson: "[OMPI devel] opal_event_loop exiting"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0830.php">Brian Barrett: "Re: [OMPI devel] opal_event_loop exiting"</a>
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
