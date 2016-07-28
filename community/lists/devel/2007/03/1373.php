<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Mar 21 23:36:28 2007" -->
<!-- isoreceived="20070322033628" -->
<!-- sent="Wed, 21 Mar 2007 21:36:20 -0600" -->
<!-- isosent="20070322033620" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --prefix question" -->
<!-- id="C22755D4.21E8%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CFD4E089-A2AB-4563-BFBF-329296492519_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-21 23:36:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>In reply to:</strong> <a href="1370.php">David Daniel: "[OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yo David
<br>
<p>What system are you running this on? RoadRunner? If so, I can take a look at
<br>
&quot;fixing&quot; it for you tomorrow (Thurs).
<br>
<p>Ralph
<br>
<p><p>On 3/21/07 10:17 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I'm experimenting with heterogeneous applications (x86_64 &lt;--&gt;
</span><br>
<span class="quotelev1">&gt; ppc64), where the systems share the file system where Open MPI is
</span><br>
<span class="quotelev1">&gt; installed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I would like to be able to do is something like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     mpirun --np 1 --host host-x86_64 --prefix /opt/ompi/x86_64
</span><br>
<span class="quotelev1">&gt; a.out.x86_64 : --np 1 --host host-ppc64 --prefix /opt/ompi/ppc64
</span><br>
<span class="quotelev1">&gt; a.out.ppc64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately it looks as if the second --prefix is always ignored.
</span><br>
<span class="quotelev1">&gt; My guess is that orte_app_context_t::prefix_dir is getting set, but
</span><br>
<span class="quotelev1">&gt; only the 0th app context is never consulted (except in the dynamic
</span><br>
<span class="quotelev1">&gt; process stuff where I do see a loop over the app context array).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can of course work around it with startup scripts, but a command
</span><br>
<span class="quotelev1">&gt; line solution would be attractive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is with openmpi-1.2.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks, David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1372.php">Donald Kerr: "Re: [OMPI devel] MCA parameter settings"</a>
<li><strong>In reply to:</strong> <a href="1370.php">David Daniel: "[OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
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
