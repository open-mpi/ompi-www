<?
$subject_val = "Re: [OMPI devel] orte-restart and PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 12:35:29 2014" -->
<!-- isoreceived="20140312163529" -->
<!-- sent="Wed, 12 Mar 2014 09:34:49 -0700" -->
<!-- isosent="20140312163449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-restart and PATH" -->
<!-- id="436BE89D-555E-4BDB-8BB8-2F75DF04C20B_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140312162812.GL31434_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-restart and PATH<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 12:34:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14339.php">Adrian Reber: "[OMPI devel] orte-restart and PATH"</a>
<li><strong>In reply to:</strong> <a href="14339.php">Adrian Reber: "[OMPI devel] orte-restart and PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14345.php">Josh Hursey: "Re: [OMPI devel] orte-restart and PATH"</a>
<li><strong>Reply:</strong> <a href="14345.php">Josh Hursey: "Re: [OMPI devel] orte-restart and PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That's what the --enable-orterun-prefix-by-default configure option is for
<br>
<p><p>On Mar 12, 2014, at 9:28 AM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I am using orte-restart without setting my PATH to my Open MPI
</span><br>
<span class="quotelev1">&gt; installation. I am running /full/path/to/orte-restart and orte-restart
</span><br>
<span class="quotelev1">&gt; tries to run mpirun to restart the process. This fails on my system
</span><br>
<span class="quotelev1">&gt; because I do not have any mpirun in my PATH. Is it expected for an Open
</span><br>
<span class="quotelev1">&gt; MPI installation to set up the PATH variable or should it work using the
</span><br>
<span class="quotelev1">&gt; absolute path to the binaries?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Should I just set my PATH correctly and be done with it or should
</span><br>
<span class="quotelev1">&gt; orte-restart figure out the full path to its accompanying mpirun and
</span><br>
<span class="quotelev1">&gt; start mpirun with the full path?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/03/14339.php">http://www.open-mpi.org/community/lists/devel/2014/03/14339.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14341.php">Mike Dubman: "Re: [OMPI devel] autoconf warnings: openib BTL"</a>
<li><strong>Previous message:</strong> <a href="14339.php">Adrian Reber: "[OMPI devel] orte-restart and PATH"</a>
<li><strong>In reply to:</strong> <a href="14339.php">Adrian Reber: "[OMPI devel] orte-restart and PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14345.php">Josh Hursey: "Re: [OMPI devel] orte-restart and PATH"</a>
<li><strong>Reply:</strong> <a href="14345.php">Josh Hursey: "Re: [OMPI devel] orte-restart and PATH"</a>
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
