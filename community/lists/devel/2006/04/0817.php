<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  5 08:44:31 2006" -->
<!-- isoreceived="20060405124431" -->
<!-- sent="Wed, 5 Apr 2006 08:44:22 -0400" -->
<!-- isosent="20060405124422" -->
<!-- name="Jeff Squyres \(jsquyres\)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] IPv6 in OpenRTE" -->
<!-- id="C835B9C9CB0F1C4E9DA48913C9E8F8AF5FA49A_at_xmb-rtp-215.amer.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI devel] IPv6 in OpenRTE" -->
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
<strong>Date:</strong> 2006-04-05 08:44:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Previous message:</strong> <a href="0816.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Maybe in reply to:</strong> <a href="0813.php">Ralph Castain: "[OMPI devel] IPv6 in OpenRTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0819.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Reply:</strong> <a href="0819.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that the best thing to do would be to add some relevant tests in
<br>
configure for IPv6 headers/types/whatever, and then put appropriate
<br>
#if's around in the code.
<br>
<p>This won't guarantee to make it work, of course, but it'll be a good
<br>
start -- if it doesn't compile/work on a machine without IPv6 stuff,
<br>
then it's just a matter of adjusting the #if's, etc.
<br>
&nbsp;
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: devel-bounces_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; [mailto:devel-bounces_at_[hidden]] On Behalf Of Ralf Wildenhues
</span><br>
<span class="quotelev1">&gt; Sent: Wednesday, April 05, 2006 4:33 AM
</span><br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI devel] IPv6 in OpenRTE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * Christian Kauhaus wrote on Tue, Apr 04, 2006 at 07:04:43PM CEST:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; If someone could provide us an account on a non-IPv6-enabled Unix
</span><br>
<span class="quotelev2">&gt; &gt; machine (like an old Solaris or HP-UX), this would be very helpful. 
</span><br>
<span class="quotelev2">&gt; &gt; This way we can be sure not to break the build with our patches.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW, I may be able to do OpenMPI testing on some systems, but I can
</span><br>
<span class="quotelev1">&gt; not provide access, unfortunately.  Feel free to ping me when you have
</span><br>
<span class="quotelev1">&gt; something to test.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ralf
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0818.php">Jeff Squyres \(jsquyres\): "Re: [OMPI devel] process ordering/processes per node"</a>
<li><strong>Previous message:</strong> <a href="0816.php">Ralf Wildenhues: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Maybe in reply to:</strong> <a href="0813.php">Ralph Castain: "[OMPI devel] IPv6 in OpenRTE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0819.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
<li><strong>Reply:</strong> <a href="0819.php">Christian Kauhaus: "Re: [OMPI devel] IPv6 in OpenRTE"</a>
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
