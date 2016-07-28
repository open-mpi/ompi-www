<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Oct  9 10:07:25 2007" -->
<!-- isoreceived="20071009140725" -->
<!-- sent="Tue, 09 Oct 2007 09:07:16 -0500" -->
<!-- isosent="20071009140716" -->
<!-- name="Edgar Gabriel" -->
<!-- email="gabriel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI" -->
<!-- id="470B8B14.4090205_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="57E1B781-6D10-4BEF-A15F-3E15CA373AA7_at_cisco.com" -->
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
<strong>From:</strong> Edgar Gabriel (<em>gabriel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-09 10:07:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>In reply to:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this in the production VT, or is this OMPI-specific functionality?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If it's OMPI-specific functionality, I would vote to not have it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; One of my big problems with this idea is that we lose the concept of  
</span><br>
<span class="quotelev1">&gt; shipping a single unit of Open MPI.  If someone sends us a bug report  
</span><br>
<span class="quotelev1">&gt; concerning VT, we no longer have a solid idea of what version they  
</span><br>
<span class="quotelev1">&gt; are running because they may have replaced the one inside their Open  
</span><br>
<span class="quotelev1">&gt; MPI software.
</span><br>
<p>well, this issue could be however resolved, if ompi_info and friends 
<br>
would have a way to report the precise version number for VT, isn't it?
<br>
<p>Without having any strong feelings one way or the other, I think that 
<br>
the functionality is great from the end-users perspective. Just my 0.02$...
<br>
<p>Thanks
<br>
Edgar
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running an external VT install OMPI is a different thing; that's easy  
</span><br>
<span class="quotelev1">&gt; enough to tell that someone is not using the included VT vs. an  
</span><br>
<span class="quotelev1">&gt; external VT.  But if the user is able to arbitrarily (and perhaps  
</span><br>
<span class="quotelev1">&gt; accidentally) change the included VT, this becomes problematic for  
</span><br>
<span class="quotelev1">&gt; support and maintenance.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - about the two vampirtrace-specific spots in the .m4 files: they  
</span><br>
<span class="quotelev2">&gt;&gt; correspont
</span><br>
<span class="quotelev2">&gt;&gt; to two tasks: firstly, decide if you want vampirtrace at all or (if  
</span><br>
<span class="quotelev2">&gt;&gt; you might
</span><br>
<span class="quotelev2">&gt;&gt; want to update) and secondly, passing configure options to  
</span><br>
<span class="quotelev2">&gt;&gt; vampirtrace.
</span><br>
<span class="quotelev2">&gt;&gt; we need to do the first before the second, of course. maybe we can  
</span><br>
<span class="quotelev2">&gt;&gt; move
</span><br>
<span class="quotelev2">&gt;&gt; everything to &quot;our&quot; .m4 file, let me check ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would think that all OMPI-specific VT functionality should be in  
</span><br>
<span class="quotelev1">&gt; one .m4 file.  Per my other mail, I think it should be in contrib/vt/ 
</span><br>
<span class="quotelev1">&gt; configure.m4.  This makes a nice, clean separation of m4  
</span><br>
<span class="quotelev1">&gt; functionality and keeps it self-contained into the contrib/vt/ tree.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - btw: so far the vampirtrace distribution tarball is brought to  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi
</span><br>
<span class="quotelev2">&gt;&gt; under ./tracing/vampirtrace with no modifications
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Excellent.  That makes things considerably easier.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - the mpicc-vt (and friends) compiler wrappers: this is not part of
</span><br>
<span class="quotelev2">&gt;&gt; vampirtrace but a new thing that only makes sense together with  
</span><br>
<span class="quotelev2">&gt;&gt; openmpi.
</span><br>
<span class="quotelev2">&gt;&gt; therefore, they stay next to 'mpicc' and all others. in fact we're  
</span><br>
<span class="quotelev2">&gt;&gt; following
</span><br>
<span class="quotelev2">&gt;&gt; a earlier suggestion from you, Jeff: 'mpicc-vt' is just like  
</span><br>
<span class="quotelev2">&gt;&gt; 'mpicc' but
</span><br>
<span class="quotelev2">&gt;&gt; calls the 'vtcc' compier wrapper instead of 'cc'.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; this makes everything much simpler, because we can handle all  
</span><br>
<span class="quotelev2">&gt;&gt; special cases in
</span><br>
<span class="quotelev2">&gt;&gt; vtcc. the wrapper config for 'mpicc-vt' is almost a mere copy of  
</span><br>
<span class="quotelev2">&gt;&gt; mpicc's one.
</span><br>
<span class="quotelev2">&gt;&gt; therefore, I'd like to keep them where they are right now. is this  
</span><br>
<span class="quotelev2">&gt;&gt; o.k. with
</span><br>
<span class="quotelev2">&gt;&gt; everyone?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I like the idea of mpicc-vt (etc.) wrappers, but again, I think they  
</span><br>
<span class="quotelev1">&gt; should be consolidated in the contrib/vt tree.  There's no technical  
</span><br>
<span class="quotelev1">&gt; reason they need to be in the wrappers directory.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; More specifically, I am uncomfortable with importing 3rd party  
</span><br>
<span class="quotelev1">&gt; packages that touch a whole bunch of places in the OMPI tree.  I am  
</span><br>
<span class="quotelev1">&gt; much more comfortable with 3rd party packages being self-contained.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope to have the libnbc integration done either this week or next  
</span><br>
<span class="quotelev1">&gt; as an example.  We're still far enough away from v1.3 release that  
</span><br>
<span class="quotelev1">&gt; this does not impact any release plans with VT.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Edgar Gabriel
Assistant Professor
Parallel Software Technologies Lab      <a href="http://pstl.cs.uh.edu">http://pstl.cs.uh.edu</a>
Department of Computer Science          University of Houston
Philip G. Hoffman Hall, Room 524        Houston, TX-77204, USA
Tel: +1 (713) 743-3857                  Fax: +1 (713) 743-3335
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Previous message:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<li><strong>In reply to:</strong> <a href="2410.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party software in OMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
<li><strong>Reply:</strong> <a href="2412.php">Jeff Squyres: "Re: [OMPI devel] VampirTrace integration / bundling 3rd party	software in OMPI"</a>
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
