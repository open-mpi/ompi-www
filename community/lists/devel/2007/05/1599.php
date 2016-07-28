<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue May 29 08:37:36 2007" -->
<!-- isoreceived="20070529123736" -->
<!-- sent="Tue, 29 May 2007 06:37:28 -0600" -->
<!-- isosent="20070529123728" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] undefined environ symbol on Darwin" -->
<!-- id="C2817AA8.2E28%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20070529021959.GA4992_at_bromo.msbb.uc.edu" -->
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
<strong>Date:</strong> 2007-05-29 08:37:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1600.php">Gleb Natapov: "[OMPI devel] Fix for deadlock in OB1 RDMA protocol"</a>
<li><strong>Previous message:</strong> <a href="1598.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1598.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am no expert on this issue. However, having watched those attempting to
<br>
maintain the Windows port using the same approach you are advocating, I can
<br>
say that requiring APPLE-specific &quot;if...include&quot; logic almost certainly will
<br>
be an exercise in frustration, if not futility. Many of us actually develop
<br>
Open MPI code on the Mac and have never seen this problem - which indicates
<br>
(to me, at least) that we will have great trouble &quot;policing&quot; this
<br>
requirement even within that sub-group of the project.
<br>
<p>And as for the rest of the developers who work on Linux and other systems -
<br>
asking them to &quot;please remember that Darwin requires some strange mojo&quot; is
<br>
something we can do, but (based on experience with Windows) is very unlikely
<br>
to happen.
<br>
<p>IF a behind-the-scenes solution can be found, that would be far more
<br>
preferable. Otherwise, we will likely find us patching releases regularly as
<br>
someone else discovers a missing &quot;if APPLE&quot; somewhere in the code.
<br>
<p>Alternatively, of course, Darwin could just conform to the rest of the Unix
<br>
world... ;-)  (just kidding, of course...)
<br>
<p>Ralph
<br>
<p><p>&nbsp;
<br>
<p><p>On 5/28/07 8:19 PM, &quot;Jack Howarth&quot; &lt;howarth_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Brian,
</span><br>
<span class="quotelev1">&gt;     One general example of why openmpi shouldn't be creating
</span><br>
<span class="quotelev1">&gt; shared libraries with undefined environ symbols is as follows.
</span><br>
<span class="quotelev1">&gt; If a python based application was using the openmpi shared libraries
</span><br>
<span class="quotelev1">&gt; linked into the application's python module, your suggested
</span><br>
<span class="quotelev1">&gt; approach would be unusable since the user would have to rebuild
</span><br>
<span class="quotelev1">&gt; python to explicitly provide the missing environ symbol. You
</span><br>
<span class="quotelev1">&gt; will always run into such corner cases as long as openmpi is
</span><br>
<span class="quotelev1">&gt; misbuilt on darwin.
</span><br>
<span class="quotelev1">&gt;              Jack
</span><br>
<span class="quotelev1">&gt; ps I have posted this issue to Apple's radar bug reporter
</span><br>
<span class="quotelev1">&gt; as issue 5233061 as well.
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
<li><strong>Next message:</strong> <a href="1600.php">Gleb Natapov: "[OMPI devel] Fix for deadlock in OB1 RDMA protocol"</a>
<li><strong>Previous message:</strong> <a href="1598.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<li><strong>In reply to:</strong> <a href="1598.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1601.php">Jack Howarth: "Re: [OMPI devel] undefined environ symbol on Darwin"</a>
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
