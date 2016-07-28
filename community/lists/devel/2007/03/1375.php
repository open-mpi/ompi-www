<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 11:11:12 2007" -->
<!-- isoreceived="20070322151112" -->
<!-- sent="Thu, 22 Mar 2007 09:11:05 -0600" -->
<!-- isosent="20070322151105" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --prefix question" -->
<!-- id="1C483EE1-34A8-4005-892F-552F617C786B_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D97EF33-0E24-4855-A3E4-E227AB6E3B28_at_cisco.com" -->
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
<strong>From:</strong> David Daniel (<em>ddd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 11:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is a development system for roadrunner using ssh.
<br>
<p>David
<br>
<p>On Mar 22, 2007, at 5:19 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; FWIW, I believe that we had intended --prefix to handle simple cases
</span><br>
<span class="quotelev1">&gt; which is why this probably doesn't work for you.  But as long as the
</span><br>
<span class="quotelev1">&gt; different prefixes are specified for different nodes, it could
</span><br>
<span class="quotelev1">&gt; probably be made to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Which launcher are you using this with?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 21, 2007, at 11:36 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yo David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What system are you running this on? RoadRunner? If so, I can take
</span><br>
<span class="quotelev2">&gt;&gt; a look at
</span><br>
<span class="quotelev2">&gt;&gt; &quot;fixing&quot; it for you tomorrow (Thurs).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 3/21/07 10:17 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm experimenting with heterogeneous applications (x86_64 &lt;--&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ppc64), where the systems share the file system where Open MPI is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; installed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What I would like to be able to do is something like this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mpirun --np 1 --host host-x86_64 --prefix /opt/ompi/x86_64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out.x86_64 : --np 1 --host host-ppc64 --prefix /opt/ompi/ppc64
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a.out.ppc64
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately it looks as if the second --prefix is always ignored.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My guess is that orte_app_context_t::prefix_dir is getting set, but
</span><br>
<span class="quotelev3">&gt;&gt;&gt; only the 0th app context is never consulted (except in the dynamic
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process stuff where I do see a loop over the app context array).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I can of course work around it with startup scripts, but a command
</span><br>
<span class="quotelev3">&gt;&gt;&gt; line solution would be attractive.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is with openmpi-1.2.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<p><pre>
--
David Daniel &lt;ddd_at_[hidden]&gt;
Computer Science for High-Performance Computing (CCS-1)
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Previous message:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1374.php">Jeff Squyres: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
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
