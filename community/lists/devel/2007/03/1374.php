<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 07:19:14 2007" -->
<!-- isoreceived="20070322111914" -->
<!-- sent="Thu, 22 Mar 2007 07:19:02 -0400" -->
<!-- isosent="20070322111902" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --prefix question" -->
<!-- id="4D97EF33-0E24-4855-A3E4-E227AB6E3B28_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C22755D4.21E8%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-22 07:19:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I believe that we had intended --prefix to handle simple cases  
<br>
which is why this probably doesn't work for you.  But as long as the  
<br>
different prefixes are specified for different nodes, it could  
<br>
probably be made to work.
<br>
<p>Which launcher are you using this with?
<br>
<p><p><p>On Mar 21, 2007, at 11:36 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Yo David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What system are you running this on? RoadRunner? If so, I can take  
</span><br>
<span class="quotelev1">&gt; a look at
</span><br>
<span class="quotelev1">&gt; &quot;fixing&quot; it for you tomorrow (Thurs).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/21/07 10:17 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm experimenting with heterogeneous applications (x86_64 &lt;--&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ppc64), where the systems share the file system where Open MPI is
</span><br>
<span class="quotelev2">&gt;&gt; installed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What I would like to be able to do is something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     mpirun --np 1 --host host-x86_64 --prefix /opt/ompi/x86_64
</span><br>
<span class="quotelev2">&gt;&gt; a.out.x86_64 : --np 1 --host host-ppc64 --prefix /opt/ompi/ppc64
</span><br>
<span class="quotelev2">&gt;&gt; a.out.ppc64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately it looks as if the second --prefix is always ignored.
</span><br>
<span class="quotelev2">&gt;&gt; My guess is that orte_app_context_t::prefix_dir is getting set, but
</span><br>
<span class="quotelev2">&gt;&gt; only the 0th app context is never consulted (except in the dynamic
</span><br>
<span class="quotelev2">&gt;&gt; process stuff where I do see a loop over the app context array).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I can of course work around it with startup scripts, but a command
</span><br>
<span class="quotelev2">&gt;&gt; line solution would be attractive.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is with openmpi-1.2.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks, David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1373.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
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
