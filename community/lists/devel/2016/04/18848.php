<?
$subject_val = "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 29 14:00:56 2016" -->
<!-- isoreceived="20160429180056" -->
<!-- sent="Fri, 29 Apr 2016 11:00:52 -0700" -->
<!-- isosent="20160429180052" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?" -->
<!-- id="59841A96-7CC4-41ED-B07F-44ADE94F1FBE_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="881EF058-828E-452A-AE1D-8A37F46E7D93_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-29 14:00:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18849.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to	communicate	to	users?"</a>
<li><strong>Previous message:</strong> <a href="18847.php">Ralph Castain: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>In reply to:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18850.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Reply:</strong> <a href="18850.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Reply:</strong> <a href="18853.php">Swpoole-Gmail: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Didn&#226;&#128;&#153;t OSHMEM up-level its API?
<br>
<p>I believe we also have some early support in there for DVM and Singularity, but not the full-blown capability that is in master. Unsure if we want to advertise that for 2.0, maybe wait for the updates in 2.1?
<br>
<p><p><span class="quotelev1">&gt; On Apr 29, 2016, at 10:55 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm thinking something like a simple &quot;User's migration guide: 1.8.x/1.10.x --&gt; 2.0.0&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here's big topics I see so far:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; User-Noticeable changes
</span><br>
<span class="quotelev1">&gt; (i.e., things that may prevent users from simply re-compiling / re-mpirun'ing their existing MPI app)
</span><br>
<span class="quotelev1">&gt; -----------------------
</span><br>
<span class="quotelev1">&gt; - mpirun -np behavior
</span><br>
<span class="quotelev1">&gt; - OMPIO is now the default (not ROMIO)
</span><br>
<span class="quotelev1">&gt; - ...more?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; New features
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt; - Launch scalability improvements (i.e., support for PMIx)
</span><br>
<span class="quotelev1">&gt; - Lots of improvements to MPI RMA
</span><br>
<span class="quotelev1">&gt; - Improved support for MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev1">&gt; - ompi_info pretty print improvements
</span><br>
<span class="quotelev1">&gt; - UCX support
</span><br>
<span class="quotelev1">&gt; - PLFS support (via OMPIO)
</span><br>
<span class="quotelev1">&gt; - Better Cray build / SLURM support
</span><br>
<span class="quotelev1">&gt; - ...more?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Removed support
</span><br>
<span class="quotelev1">&gt; ---------------
</span><br>
<span class="quotelev1">&gt; - OS X Leopard
</span><br>
<span class="quotelev1">&gt; - Cray XT
</span><br>
<span class="quotelev1">&gt; - VampirTrace
</span><br>
<span class="quotelev1">&gt; - Myrinet MX / OpenMX
</span><br>
<span class="quotelev1">&gt; - coll:ml module
</span><br>
<span class="quotelev1">&gt; - Alpha processors
</span><br>
<span class="quotelev1">&gt; - --enable-mpi-profiling option
</span><br>
<span class="quotelev1">&gt; - Checkpoint / restart
</span><br>
<span class="quotelev1">&gt; - ...more?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 29, 2016, at 1:21 PM, Howard Pritchard &lt;hppritcha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint/restart is not supported in this release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does this release work with totalview?  I recall we had some problems,
</span><br>
<span class="quotelev2">&gt;&gt; and do not remember if they were resolved.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We may also want to clarify if any PML/MTLs are experimental in this
</span><br>
<span class="quotelev2">&gt;&gt; release.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; MPI_THREAD_MULTIPLE support.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Howard
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2016-04-29 10:34 GMT-06:00 Cabral, Matias A &lt;matias.a.cabral_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; How about for &#226;&#128;&#156;developers that have not been following the transition from 1.x to 2.0?  Particularly myself J. I started contributing to some specific parts (psm2 mtl) and following changes. However, I don&#226;&#128;&#153;t have details of what is changing in 2.0. I see there could be different level of details in the &#226;&#128;&#156;developer&#226;&#128;&#153;s transition guide book&#226;&#128;&#157;, ranging from architectural change to what pieces were moved where.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _MAC
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; From: devel [mailto:devel-bounces_at_[hidden]] On Behalf Of Joshua Ladd
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Friday, April 29, 2016 7:11 AM
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Certainly we need to communicate / advertise / evangelize the improvements in job launch - the largest and most substantial change between the two branches - and provide some best practice guidelines for usage (use direct modex for applications with sparse communication patterns and full modex for dense.) I would be happy to contribute some paragraphs. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Obviously, we also need to communicate, reiterate the need to recompile codes built against the 1.10 series.  
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Best, 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Josh
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Thursday, April 28, 2016, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We're getting darn close to v2.0.0.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What &quot;gotchas&quot; do we need to communicate to users?  I.e., what will people upgrading from v1.8.x/v1.10.x be surprised by?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; The most obvious one I can think of is mpirun requiring -np when slots are not specified somehow.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What else do we need to communicate?  It would be nice to avoid the confusion users experienced regarding affinity functionality/options when upgrading from v1.6 -&gt; v1.8 (because we didn't communicate these changes well, IMHO).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18832.php">http://www.open-mpi.org/community/lists/devel/2016/04/18832.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18843.php">http://www.open-mpi.org/community/lists/devel/2016/04/18843.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18844.php">http://www.open-mpi.org/community/lists/devel/2016/04/18844.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/devel">https://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2016/04/18846.php">http://www.open-mpi.org/community/lists/devel/2016/04/18846.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18849.php">Cabral, Matias A: "Re: [OMPI devel] 2.0.0 is coming: what do we need to	communicate	to	users?"</a>
<li><strong>Previous message:</strong> <a href="18847.php">Ralph Castain: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>In reply to:</strong> <a href="18846.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to	users?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18850.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Reply:</strong> <a href="18850.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate	to	users?"</a>
<li><strong>Reply:</strong> <a href="18853.php">Swpoole-Gmail: "Re: [OMPI devel] 2.0.0 is coming: what do we need to communicate to users?"</a>
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
