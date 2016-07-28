<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct 23 08:58:35 2007" -->
<!-- isoreceived="20071023125835" -->
<!-- sent="Tue, 23 Oct 2007 08:57:50 -0400" -->
<!-- isosent="20071023125750" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]" -->
<!-- id="8088526F-C5C7-4B47-B257-72B7DD849E65_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.LNX.4.64.0710231053200.4540_at_kenzo.iwr.uni-heidelberg.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-23 08:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 23, 2007, at 6:33 AM, Bogdan Costescu wrote:
<br>
<p><span class="quotelev2">&gt;&gt; There is in the openib BTL.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bug #1025 has in one the answers the following phrase:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;It looks like this will affect many threading issues with the
</span><br>
<span class="quotelev1">&gt; pathscale compiler -- the openib BTL is simply the first place we
</span><br>
<span class="quotelev1">&gt; tripped it.&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; which along with the rest of the data (failure dependency on TLS
</span><br>
<span class="quotelev1">&gt; usage) led me to wonder about threading issues.
</span><br>
<p>FWIW, these problems even affect non-threaded builds, so I'm not  
<br>
entirely sure what the problem is.  All indications point to a  
<br>
problem in the Pathscale compiler, but who knows -- perhaps we're  
<br>
doing something stupid that doesn't show up in any other compiler.
<br>
<p><span class="quotelev2">&gt;&gt; To be honest, I removed the pathscale suite from my regular
</span><br>
<span class="quotelev2">&gt;&gt; regression testing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, is anyone else testing PathScale 3.0 with stable versions of Open
</span><br>
<span class="quotelev1">&gt; MPI ? Or with development versions ?
</span><br>
<p>I don't know; Cisco is not.  I removed it from my normal testing set  
<br>
because all IB testing would fail -- so it wasn't worth testing.
<br>
<p><span class="quotelev2">&gt;&gt; I just recompiled the OMPI 1.2 branch with pathscale 3.0 on RHEL4U4
</span><br>
<span class="quotelev2">&gt;&gt; and I do not see the problems that you are seeing.  :-\  Is Debian
</span><br>
<span class="quotelev2">&gt;&gt; etch a supported pathscale platform?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like it's not... And indeed the older RHEL4 is a supported
</span><br>
<span class="quotelev1">&gt; platform, which might explain the different results.
</span><br>
<p>You might want to ask them if Debian etch is supported.
<br>
<p><span class="quotelev1">&gt; I made some progress: if I configure with &quot;--without-memory-manager&quot;
</span><br>
<span class="quotelev1">&gt; (along with all other options that I mentioned before), then it works.
</span><br>
<span class="quotelev1">&gt; This was inspired by the fact that the segmentation fault occured in
</span><br>
<span class="quotelev1">&gt; ptmalloc2. I have previously tried to remove the MX support without
</span><br>
<span class="quotelev1">&gt; any effect; with ptmalloc2 out of the picture I have had test runs
</span><br>
<span class="quotelev1">&gt; over MX and TCP without problems.
</span><br>
<p>This is ringing a [very] distant bell in my memory, but I don't  
<br>
remember the details.  Brian: do you remember any specific issues  
<br>
about the memory manager and pathscale compiler?
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2486.php">Shipman, Galen M.: "Re: [OMPI devel] collective problems"</a>
<li><strong>Previous message:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>In reply to:</strong> <a href="2484.php">Bogdan Costescu: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
<li><strong>Reply:</strong> <a href="2521.php">Tom Mitchell: "Re: [OMPI devel] PathScale 3.0 problems with Open MPI 1.2.[34]"</a>
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
