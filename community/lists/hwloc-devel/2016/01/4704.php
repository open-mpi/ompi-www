<?
$subject_val = "Re: [hwloc-devel] Static analysis";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 05:13:27 2016" -->
<!-- isoreceived="20160114101327" -->
<!-- sent="Thu, 14 Jan 2016 11:13:25 +0100" -->
<!-- isosent="20160114101325" -->
<!-- name="Brice Goglin" -->
<!-- email="Brice.Goglin_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] Static analysis" -->
<!-- id="569774C5.5050309_at_inria.fr" -->
<!-- charset="iso-8859-2" -->
<!-- inreplyto="D6EDEBF1F91015459DB866AC4EE162CC0234A50E_at_IRSMSX103.ger.corp.intel.com" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] Static analysis<br>
<strong>From:</strong> Brice Goglin (<em>Brice.Goglin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 05:13:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4705.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-950-gb15f2e8)"</a>
<li><strong>Previous message:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello
<br>
<p>I looked at the full list of warnings. It doesn't look like this tool
<br>
will be very useful to hwloc. Many warnings are false-positive caused by
<br>
the lack of precise control flow analysis (dead code, leaks). Also the
<br>
report isn't precise enough to explain which control-flow would actually
<br>
cause a leak. Coverity Scan does a much better job at detecting and
<br>
reporting these and I already try to fix all warnings it reports.
<br>
<p>Also the tool lacks some understanding of how some APIs work. For
<br>
instance it knows posix_memalign() allocates things but doesn't know
<br>
that it doesn't allocate when it returns non-0. Or it complains about
<br>
pthread_mutex() return values without looking at how we initialized the
<br>
mutex.
<br>
<p>Finally some warnings seem Microsoft-specific :)
<br>
Function 'memcpy' is deprecated. Replace with more secure equivalent
<br>
like 'memcpy_s', add missing logic, or re-architect.
<br>
Function 'sprintf' is deprecated. Replace with more secure equivalent
<br>
like 'sprintf_s', add missing logic, or re-architect.
<br>
<p>Coverity lets you mark some warnings as false-positive so that next runs
<br>
don't report them. If you can hide all the above, we could look at the
<br>
remaining ones. But right now there are so many warnings that it's hard
<br>
to focus on the real bugs :/
<br>
<p>Brice
<br>
<p><p><p>Le 12/01/2016 14:26, Odzioba, Lukasz a &#233;crit :
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; I use klocwork, which doesn't mean it is better it just reports different subset of potential errors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ignoring malloc errors is your design decision, I don't mind it. 
</span><br>
<span class="quotelev1">&gt; From debugging perspective it makes it easier to track it down since you have null ptr dereference somewhere near malloc .
</span><br>
<span class="quotelev1">&gt; Malloc might start failing as well as just fail once in process live (i.e. some other process requested free memory for a short period of time), if an app is able to survive it's nice if not then well we have to live with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Lukas
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: hwloc-devel [mailto:hwloc-devel-bounces_at_[hidden]] On Behalf Of Brice Goglin
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, January 12, 2016 12:57 PM
</span><br>
<span class="quotelev1">&gt; To: hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [hwloc-devel] Static analysis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We're running coverity every night and I try to address most of what it
</span><br>
<span class="quotelev1">&gt; reports (except the netloc/ directory git master which still needs a lot
</span><br>
<span class="quotelev1">&gt; of work). What tool do you use?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It's true we don't check malloc() return values in many cases (hopefully
</span><br>
<span class="quotelev1">&gt; only the small allocations), mostly because we're lazy (and also because
</span><br>
<span class="quotelev1">&gt; many other things would go wrong when malloc starts failing :/)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brice
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 12/01/2016 12:23, Odzioba, Lukasz a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; Static analysis tool we use has found quite a lot of potential issues in hwloc.
</span><br>
<span class="quotelev2">&gt;&gt; Most of them are type of &quot;NULL ptr dereference&quot; i.e. when pointer is not checked for null after allocation, but there are some more interesting cases as well.
</span><br>
<span class="quotelev2">&gt;&gt; My team distributes hwloc as a part of software package and we could just ignore those, but I wanted to let you know in case you are interested in fixing some or all of them.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please let me know If you would like to get a full list, so I'll prepare it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Lukas
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4698.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4699.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4699.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; hwloc-devel mailing list
</span><br>
<span class="quotelev1">&gt; hwloc-devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php">http://www.open-mpi.org/community/lists/hwloc-devel/2016/01/4700.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4705.php">MPI Team: "[hwloc-devel] Create success (hwloc git dev-950-gb15f2e8)"</a>
<li><strong>Previous message:</strong> <a href="4703.php">Jirka Hladky: "Re: [hwloc-devel] Static analysis"</a>
<li><strong>In reply to:</strong> <a href="4700.php">Odzioba, Lukasz: "Re: [hwloc-devel] Static analysis"</a>
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
