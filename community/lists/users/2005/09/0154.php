<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Sep 20 10:54:50 2005" -->
<!-- isoreceived="20050920155450" -->
<!-- sent="Tue, 20 Sep 2005 09:54:44 -0600" -->
<!-- isosent="20050920155444" -->
<!-- name="Lisa Glendenning" -->
<!-- email="lisa_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Compile problem" -->
<!-- id="0EF71CDF-953F-4CB7-A676-BFA33E5FF555_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C8C7B681-9912-440F-B8FE-5F06F359DF9A_at_open-mpi.org" -->
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
<strong>From:</strong> Lisa Glendenning (<em>lisa_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-09-20 10:54:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Daryl W. Grunau: "[O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>In reply to:</strong> <a href="0151.php">Brian Barrett: "Re: [O-MPI users] Compile problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That worked, thanks!
<br>
<p>On Sep 20, 2005, at 1:27 AM, Brian Barrett wrote:
<br>
<p><span class="quotelev1">&gt; On Sep 19, 2005, at 11:39 PM, Lisa Glendenning wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output is attached.  The make failed (see the tail of make.LOG).  I
</span><br>
<span class="quotelev2">&gt;&gt; am on a Mac OS 10.4, using the packaged gcc, and am attempting --
</span><br>
<span class="quotelev2">&gt;&gt; enable-static.  I previously got OpenMPI to build without the --
</span><br>
<span class="quotelev2">&gt;&gt; enable-static option.  I am using version 1.0a1r7423.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &lt;output.tar.gz&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a linking issue with Open MPI on OS X when using static
</span><br>
<span class="quotelev1">&gt; libraries.  The simple work around is to disable one of the
</span><br>
<span class="quotelev1">&gt; components that causes a naming conflict.  If you add the option &quot;--
</span><br>
<span class="quotelev1">&gt; enable-mca-no-build=pml-uniq&quot; to configure and rebuild, you shouldn't
</span><br>
<span class="quotelev1">&gt; run into any problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;    Brian Barrett
</span><br>
<span class="quotelev1">&gt;    Open MPI developer
</span><br>
<span class="quotelev1">&gt;    <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0155.php">Daryl W. Grunau: "[O-MPI users] HOWTO turn of &quot;multi-rail&quot; support at runtime?"</a>
<li><strong>Previous message:</strong> <a href="0153.php">Tim S. Woodall: "Re: [O-MPI users] attempt to override read-only MCA	parameter	&quot;orte_infrastructure&quot; - FIXED!"</a>
<li><strong>In reply to:</strong> <a href="0151.php">Brian Barrett: "Re: [O-MPI users] Compile problem"</a>
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
