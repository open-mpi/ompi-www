<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 30 15:26:06 2006" -->
<!-- isoreceived="20060330202606" -->
<!-- sent="Thu, 30 Mar 2006 15:25:47 -0500" -->
<!-- isosent="20060330202547" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Connecting multiple applications" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5B1ED7_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] Connecting multiple applications" -->
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
<strong>From:</strong> Jeff Squyres \(jsquyres\) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-30 15:25:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0937.php">Brian Barrett: "Re: [OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<li><strong>Maybe in reply to:</strong> <a href="0923.php">Ralph Castain: "[OMPI users] Connecting multiple applications"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Another clarification here -- Open MPI's implementation of the MPI-2
<br>
publish/lookup stuff is implemented using the underlying ORTE registry
<br>
(that's one of the reasons the ORTE registry exists).  It is fairly
<br>
narrow in scope -- think of MPI-2's publish/lookup stuff as &quot;DNS for
<br>
MPI&quot;.  It is not intended as a general information storage/retrieval
<br>
system.
<br>
<p>We haven't really talked about exposing the ORTE registry through other
<br>
mechanisms in the MPI API.  There may be ways to do so, but that wasn't
<br>
really something that we had considered.  The ORTE registry is available
<br>
if you want to go outside of the MPI API, of course (and use the ORTE
<br>
API).
<br>
<p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:users-bounces_at_[hidden]] On Behalf Of John Robinson
</span><br>
<span class="quotelev1">&gt; Sent: Thursday, March 30, 2006 9:25 AM
</span><br>
<span class="quotelev1">&gt; To: rhc_at_[hidden]; Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Connecting multiple applications
</span><br>
<span class="quotelev1">&gt; 
</span><br>
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
<span class="quotelev1">&gt; MPI provides a &quot;registry&quot; function using publish/lookup.  
</span><br>
<span class="quotelev1">&gt; What OpemRTE 
</span><br>
<span class="quotelev1">&gt; adds is an event mechanism so that an application does not 
</span><br>
<span class="quotelev1">&gt; have to poll 
</span><br>
<span class="quotelev1">&gt; for changes to information in the registry, plus it exposes this to 
</span><br>
<span class="quotelev1">&gt; non-MPI applications.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; /jr
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0939.php">Rolf Vandevaart: "[OMPI users] General ORTE questions"</a>
<li><strong>Previous message:</strong> <a href="0937.php">Brian Barrett: "Re: [OMPI users] sed :36: unescaped newline in pattern substitution"</a>
<li><strong>Maybe in reply to:</strong> <a href="0923.php">Ralph Castain: "[OMPI users] Connecting multiple applications"</a>
<!-- nextthread="start" -->
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
