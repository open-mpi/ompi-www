<?
$subject_val = "Re: [OMPI devel] Segfault in 1.3 branch";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 15 10:23:05 2008" -->
<!-- isoreceived="20080715142305" -->
<!-- sent="Tue, 15 Jul 2008 17:22:59 +0300" -->
<!-- isosent="20080715142259" -->
<!-- name="Pavel Shamis (Pasha)" -->
<!-- email="pasha_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Segfault in 1.3 branch" -->
<!-- id="487CB2C3.8010200_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C4A1540B.5893%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Pavel Shamis (Pasha) (<em>pasha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-15 10:22:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4362.php">Jeff Squyres: "[OMPI devel] New trac milestone: v1.4"</a>
<li><strong>Previous message:</strong> <a href="4360.php">Andrew Friedley: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>In reply to:</strong> <a href="4350.php">Ralph Castain: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I opened ticket for the bug:
<br>
<a href="https://svn.open-mpi.org/trac/ompi/ticket/1389">https://svn.open-mpi.org/trac/ompi/ticket/1389</a>
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; It looks like a new issue to me, Pasha. Possibly a side consequence of the
</span><br>
<span class="quotelev1">&gt; IOF change made by Jeff and I the other day. From what I can see, it looks
</span><br>
<span class="quotelev1">&gt; like you app was a simple &quot;hello&quot; - correct?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you look at the error, the problem occurs when mpirun is trying to route
</span><br>
<span class="quotelev1">&gt; a message. Since the app is clearly running at this time, the problem is
</span><br>
<span class="quotelev1">&gt; probably in the IOF. The error message shows that mpirun is attempting to
</span><br>
<span class="quotelev1">&gt; route a message to a jobid that doesn't exist. We have a test in the RML
</span><br>
<span class="quotelev1">&gt; that forces an &quot;abort&quot; if that occurs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I would guess that there is either a race condition or memory corruption
</span><br>
<span class="quotelev1">&gt; occurring somewhere, but I have no idea where.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This may be the &quot;new hole in the dyke&quot; I cautioned about in earlier notes
</span><br>
<span class="quotelev1">&gt; regarding the IOF... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Still, given that this hits rarely, it probably is a more acceptable bug to
</span><br>
<span class="quotelev1">&gt; leave in the code than the one we just fixed (duplicated stdin)...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/14/08 1:11 AM, &quot;Pavel Shamis (Pasha)&quot; &lt;pasha_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; Please see <a href="http://www.open-mpi.org/mtt/index.php?do_redir=764">http://www.open-mpi.org/mtt/index.php?do_redir=764</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The error is not consistent. It takes a lot of iteration to reproduce it.
</span><br>
<span class="quotelev2">&gt;&gt; In my MTT testing I seen it few times.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is it know issue ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Pasha
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4362.php">Jeff Squyres: "[OMPI devel] New trac milestone: v1.4"</a>
<li><strong>Previous message:</strong> <a href="4360.php">Andrew Friedley: "Re: [OMPI devel] ompi_ignore dr pml?"</a>
<li><strong>In reply to:</strong> <a href="4350.php">Ralph Castain: "Re: [OMPI devel] Segfault in 1.3 branch"</a>
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
