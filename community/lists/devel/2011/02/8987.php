<?
$subject_val = "Re: [OMPI devel] --enable-opal-multi-threads";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 15 07:47:30 2011" -->
<!-- isoreceived="20110215124730" -->
<!-- sent="Tue, 15 Feb 2011 05:47:21 -0700" -->
<!-- isosent="20110215124721" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] --enable-opal-multi-threads" -->
<!-- id="242F98F5-4A35-4D30-80EC-281DC33EE90B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="alpine.LRH.2.02.1102142326380.23571_at_hulk.cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] --enable-opal-multi-threads<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-15 07:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8988.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Previous message:</strong> <a href="8986.php">Abhishek Kulkarni: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>In reply to:</strong> <a href="8986.php">Abhishek Kulkarni: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8988.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Reply:</strong> <a href="8988.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 14, 2011, at 9:26 PM, Abhishek Kulkarni wrote:
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, 14 Feb 2011, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If the ability to turn &quot;on&quot; thread support is missing from 1.5, then that is an error.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it was changed from &quot;--enable-mpi-threads&quot; to &quot;--enable-opal-multi-threads&quot; on the trunk in r22841 [1].
</span><br>
<p>I know - I did it :-)
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If the changeset has not been brought over to v1.5, it indeed looks like an anachronism in the README.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://svn.open-mpi.org/trac/ompi/changeset/22841">https://svn.open-mpi.org/trac/ompi/changeset/22841</a>
</span><br>
<p>My point is that it isn't an anachronism in the README, but an error in 1.5 - it needs to have the ability to turn on thread safety.
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 14, 2011, at 5:36 PM, Eugene Loh wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the v1.5 README, I see this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --enable-opal-multi-threads
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Enables thread lock support in the OPAL and ORTE layers. Does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; not enable MPI_THREAD_MULTIPLE - see above option for that feature.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This is currently disabled by default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I don't otherwise find opal-multi-threads at all in this branch.  It seems to me, for such an option, one needs to move to the trunk.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this an error (anachronism) in the v1.5 README?
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
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="8988.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Previous message:</strong> <a href="8986.php">Abhishek Kulkarni: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>In reply to:</strong> <a href="8986.php">Abhishek Kulkarni: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8988.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
<li><strong>Reply:</strong> <a href="8988.php">Eugene Loh: "Re: [OMPI devel] --enable-opal-multi-threads"</a>
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
