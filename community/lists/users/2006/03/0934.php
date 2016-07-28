<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 09:31:22 2006" -->
<!-- isoreceived="20060330143122" -->
<!-- sent="Thu, 30 Mar 2006 07:31:18 -0700" -->
<!-- isosent="20060330143118" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connecting multiple applications" -->
<!-- id="442BEBB6.8040809_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="442BEA3A.7010309_at_vertica.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 09:31:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Previous message:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>In reply to:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi John
<br>
<p>We haven't built an MPI-layer interface yet to the registry functions. 
<br>
For now, the only means of accessing them is directly through the 
<br>
OpenRTE interface via the option 3 method I described.
<br>
<p>At some point in the future, it is my understanding that the MPI-layer 
<br>
interface to the registry will be added. I'm not sure what form that 
<br>
will take - still TBD.
<br>
<p>For now, if you want to store/retrieve info from the registry and/or use 
<br>
the event notification system, you'll have to do it directly through the 
<br>
OpenRTE interface.
<br>
<p>Does that help?
<br>
Ralph
<br>
<p><p>John Robinson wrote:
<br>
<span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for the explanation and the pointers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; One further point of clarification (is this right?):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI provides a &quot;registry&quot; function using publish/lookup.  What OpemRTE 
</span><br>
<span class="quotelev1">&gt; adds is an event mechanism so that an application does not have to 
</span><br>
<span class="quotelev1">&gt; poll for changes to information in the registry, plus it exposes this 
</span><br>
<span class="quotelev1">&gt; to non-MPI applications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; /jr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0935.php">Brian Barrett: "Re: [OMPI users] OMPI 1.0.1, CentOS 4.2 and gcc4"</a>
<li><strong>Previous message:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<li><strong>In reply to:</strong> <a href="0933.php">John Robinson: "Re: [OMPI users] Connecting multiple applications"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0938.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Connecting multiple applications"</a>
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
