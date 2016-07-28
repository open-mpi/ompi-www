<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 12:38:18 2007" -->
<!-- isoreceived="20070322163818" -->
<!-- sent="Thu, 22 Mar 2007 10:38:11 -0600" -->
<!-- isosent="20070322163811" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --prefix question" -->
<!-- id="C2280D13.221D%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1C483EE1-34A8-4005-892F-552F617C786B_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-22 12:38:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1377.php">Greg Watson: "[OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1384.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1384.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We had a nice chat about this on the OpenRTE telecon this morning. The
<br>
question of what to do with multiple prefix's has been a long-running issue,
<br>
most recently captured in bug trac report #497. The problem is that prefix
<br>
is intended to tell us where to find the ORTE/OMPI executables, and
<br>
therefore is associated with a node - not an app_context. What we haven't
<br>
been able to define is an appropriate notation that a user can exploit to
<br>
tell us the association.
<br>
<p>This issue has arisen on several occasions where either (a) users have
<br>
heterogeneous clusters with a common file system, so the prefix must be
<br>
adjusted on each *type* of node to point to the correct type of binary; and
<br>
(b) for whatever reason, typically on rsh/ssh clusters, users have installed
<br>
the binaries in different locations on some of the nodes. In this latter
<br>
case, the reports have been from homogeneous clusters, so the *type* of
<br>
binary was never the issue - it just wasn't located where we expected.
<br>
<p>Sun's solution is (I believe) what most of us would expect - they locate
<br>
their executables in the same relative location on all their nodes. The
<br>
binary in that location is correct for that local architecture. This
<br>
requires, though, that the &quot;prefix&quot; location not be on a common file system.
<br>
<p>Unfortunately, that isn't the case with LANL's roadrunner, nor can we expect
<br>
that everyone will follow that sensible approach :-). So we need a notation
<br>
to support the &quot;exception&quot; case where someone needs to truly specify prefix
<br>
versus node(s).
<br>
<p>We discussed a number of options, including auto-detecting the local arch
<br>
and appending it to the specified &quot;prefix&quot; and several others. After
<br>
discussing them, those of us on the call decided that adding a field to the
<br>
hostfile that specifies the prefix to use on that host would be the best
<br>
solution. This could be done on a cluster-level basis, so - although it is
<br>
annoying to create the data file - at least it would only have to be done
<br>
once.
<br>
<p>Again, this is the exception case, so requiring a little inconvenience seems
<br>
a reasonable thing to do.
<br>
<p>Anyone have heartburn and/or other suggestions? If not, we might start to
<br>
play with this next week. We would have to do some small modifications to
<br>
the RAS, RMAPS, and PLS components to ensure that any multi-prefix info gets
<br>
correctly propagated and used across all platforms for consistent behavior.
<br>
<p>Ralph
<br>
<p><p>On 3/22/07 9:11 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This is a development system for roadrunner using ssh.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 22, 2007, at 5:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW, I believe that we had intended --prefix to handle simple cases
</span><br>
<span class="quotelev2">&gt;&gt; which is why this probably doesn't work for you.  But as long as the
</span><br>
<span class="quotelev2">&gt;&gt; different prefixes are specified for different nodes, it could
</span><br>
<span class="quotelev2">&gt;&gt; probably be made to work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Which launcher are you using this with?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 21, 2007, at 11:36 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Yo David
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What system are you running this on? RoadRunner? If so, I can take
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a look at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;fixing&quot; it for you tomorrow (Thurs).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3/21/07 10:17 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm experimenting with heterogeneous applications (x86_64 &lt;--&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ppc64), where the systems share the file system where Open MPI is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; installed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What I would like to be able to do is something like this:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     mpirun --np 1 --host host-x86_64 --prefix /opt/ompi/x86_64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a.out.x86_64 : --np 1 --host host-ppc64 --prefix /opt/ompi/ppc64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a.out.ppc64
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Unfortunately it looks as if the second --prefix is always ignored.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My guess is that orte_app_context_t::prefix_dir is getting set, but
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; only the 0th app context is never consulted (except in the dynamic
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; process stuff where I do see a loop over the app context array).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I can of course work around it with startup scripts, but a command
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; line solution would be attractive.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; This is with openmpi-1.2.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks, David
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; David Daniel &lt;ddd_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Computer Science for High-Performance Computing (CCS-1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1377.php">Greg Watson: "[OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>Previous message:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>In reply to:</strong> <a href="1375.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1384.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
<li><strong>Reply:</strong> <a href="1384.php">David Daniel: "Re: [OMPI devel] mpirun --prefix question"</a>
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
