<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 20:33:57 2007" -->
<!-- isoreceived="20070323003357" -->
<!-- sent="Thu, 22 Mar 2007 18:33:51 -0600" -->
<!-- isosent="20070323003351" -->
<!-- name="David Daniel" -->
<!-- email="ddd_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mpirun --prefix question" -->
<!-- id="862275D8-B2F9-4BB6-8D92-473242FA4D31_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2280D13.221D%rhc_at_lanl.gov" -->
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
<strong>Date:</strong> 2007-03-22 20:33:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1385.php">Brad Penoff: "[OMPI devel] . always in the PATH"</a>
<li><strong>Previous message:</strong> <a href="1383.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>In reply to:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OK. This sounds sensible.
<br>
<p>Thanks, David
<br>
<p>On Mar 22, 2007, at 10:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; We had a nice chat about this on the OpenRTE telecon this morning. The
</span><br>
<span class="quotelev1">&gt; question of what to do with multiple prefix's has been a long- 
</span><br>
<span class="quotelev1">&gt; running issue,
</span><br>
<span class="quotelev1">&gt; most recently captured in bug trac report #497. The problem is that  
</span><br>
<span class="quotelev1">&gt; prefix
</span><br>
<span class="quotelev1">&gt; is intended to tell us where to find the ORTE/OMPI executables, and
</span><br>
<span class="quotelev1">&gt; therefore is associated with a node - not an app_context. What we  
</span><br>
<span class="quotelev1">&gt; haven't
</span><br>
<span class="quotelev1">&gt; been able to define is an appropriate notation that a user can  
</span><br>
<span class="quotelev1">&gt; exploit to
</span><br>
<span class="quotelev1">&gt; tell us the association.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This issue has arisen on several occasions where either (a) users have
</span><br>
<span class="quotelev1">&gt; heterogeneous clusters with a common file system, so the prefix  
</span><br>
<span class="quotelev1">&gt; must be
</span><br>
<span class="quotelev1">&gt; adjusted on each *type* of node to point to the correct type of  
</span><br>
<span class="quotelev1">&gt; binary; and
</span><br>
<span class="quotelev1">&gt; (b) for whatever reason, typically on rsh/ssh clusters, users have  
</span><br>
<span class="quotelev1">&gt; installed
</span><br>
<span class="quotelev1">&gt; the binaries in different locations on some of the nodes. In this  
</span><br>
<span class="quotelev1">&gt; latter
</span><br>
<span class="quotelev1">&gt; case, the reports have been from homogeneous clusters, so the  
</span><br>
<span class="quotelev1">&gt; *type* of
</span><br>
<span class="quotelev1">&gt; binary was never the issue - it just wasn't located where we expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sun's solution is (I believe) what most of us would expect - they  
</span><br>
<span class="quotelev1">&gt; locate
</span><br>
<span class="quotelev1">&gt; their executables in the same relative location on all their nodes.  
</span><br>
<span class="quotelev1">&gt; The
</span><br>
<span class="quotelev1">&gt; binary in that location is correct for that local architecture. This
</span><br>
<span class="quotelev1">&gt; requires, though, that the &quot;prefix&quot; location not be on a common  
</span><br>
<span class="quotelev1">&gt; file system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Unfortunately, that isn't the case with LANL's roadrunner, nor can  
</span><br>
<span class="quotelev1">&gt; we expect
</span><br>
<span class="quotelev1">&gt; that everyone will follow that sensible approach :-). So we need a  
</span><br>
<span class="quotelev1">&gt; notation
</span><br>
<span class="quotelev1">&gt; to support the &quot;exception&quot; case where someone needs to truly  
</span><br>
<span class="quotelev1">&gt; specify prefix
</span><br>
<span class="quotelev1">&gt; versus node(s).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We discussed a number of options, including auto-detecting the  
</span><br>
<span class="quotelev1">&gt; local arch
</span><br>
<span class="quotelev1">&gt; and appending it to the specified &quot;prefix&quot; and several others. After
</span><br>
<span class="quotelev1">&gt; discussing them, those of us on the call decided that adding a  
</span><br>
<span class="quotelev1">&gt; field to the
</span><br>
<span class="quotelev1">&gt; hostfile that specifies the prefix to use on that host would be the  
</span><br>
<span class="quotelev1">&gt; best
</span><br>
<span class="quotelev1">&gt; solution. This could be done on a cluster-level basis, so -  
</span><br>
<span class="quotelev1">&gt; although it is
</span><br>
<span class="quotelev1">&gt; annoying to create the data file - at least it would only have to  
</span><br>
<span class="quotelev1">&gt; be done
</span><br>
<span class="quotelev1">&gt; once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, this is the exception case, so requiring a little  
</span><br>
<span class="quotelev1">&gt; inconvenience seems
</span><br>
<span class="quotelev1">&gt; a reasonable thing to do.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyone have heartburn and/or other suggestions? If not, we might  
</span><br>
<span class="quotelev1">&gt; start to
</span><br>
<span class="quotelev1">&gt; play with this next week. We would have to do some small  
</span><br>
<span class="quotelev1">&gt; modifications to
</span><br>
<span class="quotelev1">&gt; the RAS, RMAPS, and PLS components to ensure that any multi-prefix  
</span><br>
<span class="quotelev1">&gt; info gets
</span><br>
<span class="quotelev1">&gt; correctly propagated and used across all platforms for consistent  
</span><br>
<span class="quotelev1">&gt; behavior.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3/22/07 9:11 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is a development system for roadrunner using ssh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 22, 2007, at 5:19 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FWIW, I believe that we had intended --prefix to handle simple cases
</span><br>
<span class="quotelev3">&gt;&gt;&gt; which is why this probably doesn't work for you.  But as long as the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; different prefixes are specified for different nodes, it could
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably be made to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Which launcher are you using this with?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 21, 2007, at 11:36 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Yo David
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What system are you running this on? RoadRunner? If so, I can take
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; a look at
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;fixing&quot; it for you tomorrow (Thurs).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Ralph
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3/21/07 10:17 AM, &quot;David Daniel&quot; &lt;ddd_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I'm experimenting with heterogeneous applications (x86_64 &lt;--&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ppc64), where the systems share the file system where Open MPI is
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; installed.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; What I would like to be able to do is something like this:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;     mpirun --np 1 --host host-x86_64 --prefix /opt/ompi/x86_64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a.out.x86_64 : --np 1 --host host-ppc64 --prefix /opt/ompi/ppc64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; a.out.ppc64
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Unfortunately it looks as if the second --prefix is always  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; ignored.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My guess is that orte_app_context_t::prefix_dir is getting set,  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; but
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; only the 0th app context is never consulted (except in the dynamic
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; process stuff where I do see a loop over the app context array).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I can of course work around it with startup scripts, but a command
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; line solution would be attractive.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; This is with openmpi-1.2.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks, David
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cisco Systems
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; David Daniel &lt;ddd_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Computer Science for High-Performance Computing (CCS-1)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li><strong>Next message:</strong> <a href="1385.php">Brad Penoff: "[OMPI devel] . always in the PATH"</a>
<li><strong>Previous message:</strong> <a href="1383.php">Jeff Squyres: "Re: [OMPI devel] RH Enterprise Linux issue"</a>
<li><strong>In reply to:</strong> <a href="1376.php">Ralph Castain: "Re: [OMPI devel] mpirun --prefix question"</a>
<!-- nextthread="start" -->
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
