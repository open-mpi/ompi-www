<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 31 09:36:40 2006" -->
<!-- isoreceived="20060331143640" -->
<!-- sent="Fri, 31 Mar 2006 09:36:31 -0500" -->
<!-- isosent="20060331143631" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 support in OpenMPI?" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5B20DC_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] IPv6 support in OpenMPI?" -->
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
<strong>Date:</strong> 2006-03-31 09:36:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Brian Barrett
</span><br>
<span class="quotelev1">&gt; Sent: Friday, March 31, 2006 9:08 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Developers
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] IPv6 support in OpenMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  From a practical standpoint, Open MPI has to support both IPv4 and  
</span><br>
<span class="quotelev1">&gt; IPv6 for the foreseeable future.  We currently try to wire up one  
</span><br>
<span class="quotelev1">&gt; connection per &quot;IP device&quot;, so it seems like we should be able to  
</span><br>
<span class="quotelev1">&gt; find some way to automatically switch between IPv6 or IPv4 based on  
</span><br>
<span class="quotelev1">&gt; what we determine is available on that host, right?  I'll admit it  
</span><br>
<span class="quotelev1">&gt; has been a year or so since I've looked at this, so I could be  
</span><br>
<span class="quotelev1">&gt; completely off base there.
</span><br>
<p>I'll echo Brian's sentiments (and excellent writeup): we'd *LOVE* to
<br>
have IPv6 support in Open MPI.  So thanks!  But we do need to be able to
<br>
support both v4 and v6, so converting the v4 code to do v6 isn't really
<br>
attractive.
<br>
<p>Our philosophy in Open MPI is that the infrastructure should &quot;do the
<br>
Right Thing whenever possible.&quot;  Hence, in a best-case scenario, it
<br>
would be great if the two TCP components (oob and btl) can automatically
<br>
figure out whether they're supposed to use IPv4 or IPv6
<br>
addressing/sockets/whatever to reach their peers, and act accordingly.  
<br>
<p>I have no personal experience with IPv6, but one thought that strikes me
<br>
is that the components might be able to figure out what to do by looking
<br>
at/parsing either the hostnames or the results that come back from
<br>
resolving the hostname...?
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0786.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="0784.php">Brian Barrett: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Maybe in reply to:</strong> <a href="0781.php">Christian Kauhaus: "[OMPI devel] IPv6 support in OpenMPI?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="0787.php">Adrian Knoth: "Re: [OMPI devel] IPv6 support in OpenMPI?"</a>
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
