<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 06:53:28 2007" -->
<!-- isoreceived="20071009105328" -->
<!-- sent="Tue, 9 Oct 2007 12:38:45 +0200" -->
<!-- isosent="20071009103845" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI" -->
<!-- id="57E1B781-6D10-4BEF-A15F-3E15CA373AA7_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200710082200.53894.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Date:</strong> 2007-10-09 06:38:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2409.php">Richard Graham: "Re: [OMPI devel] Module Design Concept"</a>
<li><strong>In reply to:</strong> <a href="2406.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 8, 2007, at 10:00 PM, Andreas Kn&#252;pfer wrote:
<br>
<p><span class="quotelev1">&gt; - yes, we might move vanmpirtrace to ./ompi/contrib/vampirtrace/,  
</span><br>
<span class="quotelev1">&gt; why not. but since we agreed on the current location ./tracing/ 
</span><br>
<span class="quotelev1">&gt; vampirtrace/ we should not rush it just because another software is  
</span><br>
<span class="quotelev1">&gt; coming to openmpi, should we?
</span><br>
<p>I actually always had in my mind that VT should live somewhere under / 
<br>
ompi -- not in the top-level directory.  I'm sorry if I did not  
<br>
communicate that well.
<br>
<p><span class="quotelev1">&gt; - the &quot;call home&quot; feature. I understand you concerns perfectly  
</span><br>
<span class="quotelev1">&gt; well. we'll
</span><br>
<span class="quotelev1">&gt; remove this, If anyone is asking us to. but please let me explain  
</span><br>
<span class="quotelev1">&gt; first:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) it's not in vampirtrace itself but in the parts we added to ompi  
</span><br>
<span class="quotelev1">&gt; on behalf
</span><br>
<span class="quotelev1">&gt; of vampirtrace
</span><br>
<span class="quotelev1">&gt; 2) it is never active by default, instead you need a
</span><br>
<span class="quotelev1">&gt; special '--update-vampirtrace' switch on your configure command.  
</span><br>
<span class="quotelev1">&gt; otherwise
</span><br>
<span class="quotelev1">&gt; nothing is calling nowhere. is this equivalent to &quot;totally  
</span><br>
<span class="quotelev1">&gt; deactivated&quot; or
</span><br>
<span class="quotelev1">&gt; still not good enough?
</span><br>
<span class="quotelev1">&gt; 3) it was our idea to make it easier to replace the included  
</span><br>
<span class="quotelev1">&gt; vampirtrace
</span><br>
<span class="quotelev1">&gt; version if it was necessary. manually download and untar is not  
</span><br>
<span class="quotelev1">&gt; that much
</span><br>
<span class="quotelev1">&gt; harder, though.
</span><br>
<span class="quotelev1">&gt; 4) we check if 'wget' is present and try _not_ to make ./configure  
</span><br>
<span class="quotelev1">&gt; fail
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; once again, if anybody want's this removed, please say so.
</span><br>
<p>Is this in the production VT, or is this OMPI-specific functionality?
<br>
<p>If it's OMPI-specific functionality, I would vote to not have it.
<br>
<p>One of my big problems with this idea is that we lose the concept of  
<br>
shipping a single unit of Open MPI.  If someone sends us a bug report  
<br>
concerning VT, we no longer have a solid idea of what version they  
<br>
are running because they may have replaced the one inside their Open  
<br>
MPI software.
<br>
<p>Running an external VT install OMPI is a different thing; that's easy  
<br>
enough to tell that someone is not using the included VT vs. an  
<br>
external VT.  But if the user is able to arbitrarily (and perhaps  
<br>
accidentally) change the included VT, this becomes problematic for  
<br>
support and maintenance.
<br>
<p><span class="quotelev1">&gt; - about the two vampirtrace-specific spots in the .m4 files: they  
</span><br>
<span class="quotelev1">&gt; correspont
</span><br>
<span class="quotelev1">&gt; to two tasks: firstly, decide if you want vampirtrace at all or (if  
</span><br>
<span class="quotelev1">&gt; you might
</span><br>
<span class="quotelev1">&gt; want to update) and secondly, passing configure options to  
</span><br>
<span class="quotelev1">&gt; vampirtrace.
</span><br>
<span class="quotelev1">&gt; we need to do the first before the second, of course. maybe we can  
</span><br>
<span class="quotelev1">&gt; move
</span><br>
<span class="quotelev1">&gt; everything to &quot;our&quot; .m4 file, let me check ...
</span><br>
<p>I would think that all OMPI-specific VT functionality should be in  
<br>
one .m4 file.  Per my other mail, I think it should be in contrib/vt/ 
<br>
configure.m4.  This makes a nice, clean separation of m4  
<br>
functionality and keeps it self-contained into the contrib/vt/ tree.
<br>
<p><span class="quotelev1">&gt; - btw: so far the vampirtrace distribution tarball is brought to  
</span><br>
<span class="quotelev1">&gt; openmpi
</span><br>
<span class="quotelev1">&gt; under ./tracing/vampirtrace with no modifications
</span><br>
<p>Excellent.  That makes things considerably easier.
<br>
<p><span class="quotelev1">&gt; - the mpicc-vt (and friends) compiler wrappers: this is not part of
</span><br>
<span class="quotelev1">&gt; vampirtrace but a new thing that only makes sense together with  
</span><br>
<span class="quotelev1">&gt; openmpi.
</span><br>
<span class="quotelev1">&gt; therefore, they stay next to 'mpicc' and all others. in fact we're  
</span><br>
<span class="quotelev1">&gt; following
</span><br>
<span class="quotelev1">&gt; a earlier suggestion from you, Jeff: 'mpicc-vt' is just like  
</span><br>
<span class="quotelev1">&gt; 'mpicc' but
</span><br>
<span class="quotelev1">&gt; calls the 'vtcc' compier wrapper instead of 'cc'.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this makes everything much simpler, because we can handle all  
</span><br>
<span class="quotelev1">&gt; special cases in
</span><br>
<span class="quotelev1">&gt; vtcc. the wrapper config for 'mpicc-vt' is almost a mere copy of  
</span><br>
<span class="quotelev1">&gt; mpicc's one.
</span><br>
<span class="quotelev1">&gt; therefore, I'd like to keep them where they are right now. is this  
</span><br>
<span class="quotelev1">&gt; o.k. with
</span><br>
<span class="quotelev1">&gt; everyone?
</span><br>
<p>I like the idea of mpicc-vt (etc.) wrappers, but again, I think they  
<br>
should be consolidated in the contrib/vt tree.  There's no technical  
<br>
reason they need to be in the wrappers directory.
<br>
<p>More specifically, I am uncomfortable with importing 3rd party  
<br>
packages that touch a whole bunch of places in the OMPI tree.  I am  
<br>
much more comfortable with 3rd party packages being self-contained.
<br>
<p>I hope to have the libnbc integration done either this week or next  
<br>
as an example.  We're still far enough away from v1.3 release that  
<br>
this does not impact any release plans with VT.
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
<li><strong>Next message:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2409.php">Richard Graham: "Re: [OMPI devel] Module Design Concept"</a>
<li><strong>In reply to:</strong> <a href="2406.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2411.php">Edgar Gabriel: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
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
