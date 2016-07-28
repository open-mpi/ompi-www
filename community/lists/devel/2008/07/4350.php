<?
$subject_val = "Re: [OMPI devel] Segfault in 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 14 21:06:04 2008" -->
<!-- isoreceived="20080715010604" -->
<!-- sent="Mon, 14 Jul 2008 19:05:47 -0600" -->
<!-- isosent="20080715010547" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segfault in 1.3 branch" -->
<!-- id="C4A1540B.5893%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="487AFC29.6040603_at_dev.mellanox.co.il" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Segfault in 1.3 branch<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-14 21:05:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4334.php">Pavel Shamis (Pasha): "[OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4361.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like a new issue to me, Pasha. Possibly a side consequence of the
<br>
IOF change made by Jeff and I the other day. From what I can see, it looks
<br>
like you app was a simple &quot;hello&quot; - correct?
<br>
<p>If you look at the error, the problem occurs when mpirun is trying to route
<br>
a message. Since the app is clearly running at this time, the problem is
<br>
probably in the IOF. The error message shows that mpirun is attempting to
<br>
route a message to a jobid that doesn't exist. We have a test in the RML
<br>
that forces an &quot;abort&quot; if that occurs.
<br>
<p>I would guess that there is either a race condition or memory corruption
<br>
occurring somewhere, but I have no idea where.
<br>
<p>This may be the &quot;new hole in the dyke&quot; I cautioned about in earlier notes
<br>
regarding the IOF... :-)
<br>
<p>Still, given that this hits rarely, it probably is a more acceptable bug to
<br>
leave in the code than the one we just fixed (duplicated stdin)...
<br>
<p>Ralph
<br>
<p><p><p>On 7/14/08 1:11 AM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Please see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=764">http://www.open-mpi.org/mtt/index.php?do_redir=764</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error is not consistent. It takes a lot of iteration to reproduce it.
</span><br>
<span class="quotelev1">&gt; In my MTT testing I seen it few times.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is it know issue ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Pasha
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
<li><strong>Next message:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Previous message:</strong> <a href="4349.php">Jeff Squyres: "Re: [OMPI devel] IBCM error"</a>
<li><strong>In reply to:</strong> <a href="4334.php">Pavel Shamis (Pasha): "[OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4351.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<li><strong>Reply:</strong> <a href="4361.php">Pavel Shamis (Pasha): "Re: [OMPI devel] Segfault in 1.3 branch"</a>
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
