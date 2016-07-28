<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 17 11:31:49 2009" -->
<!-- isoreceived="20090817153149" -->
<!-- sent="Mon, 17 Aug 2009 09:31:44 -0600" -->
<!-- isosent="20090817153144" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="71d2d8cc0908170831j72231e9yc0037adfc2dc399f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="Prayer.1.3.1.0908171612240.19783_at_hermes-2.csi.cam.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Heads up on new feature to 1.3.4<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-17 11:31:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't disagree with your statements. However, I was addressing the
<br>
specific question of two OpenMPI programs conflicting on process placement,
<br>
not the overall question you are raising.
<br>
<p>The issue of when/if to bind has been debated for a long time. I agree that
<br>
having more options (bind-to-socket, bind-to-core, etc) makes sense and that
<br>
the choice of a default is difficult, for all the reasons that have been
<br>
raised in this thread.
<br>
<p>At issue for us is that other MPIs -do- bind by default, thus creating an
<br>
apparent performance advantage for themselves compared to us on standard
<br>
benchmarks run &quot;out-of-the-box&quot;. We repeatedly get beat-up in papers and
<br>
elsewhere over our performance, when many times the major difference is in
<br>
the default binding. If we bind the same way they do, then the performance
<br>
gap disappears or is minimal.
<br>
<p>So this is why we are wrestling with this issue. I'm not sure of the best
<br>
compromise here, but I think people have raised good points on all sides.
<br>
Unfortunately, there problem isn't a perfect answer... :-/
<br>
<p>Certainly, I have no clue what it would be! Not that smart :-)
<br>
Ralph
<br>
<p><p>On Mon, Aug 17, 2009 at 9:12 AM, N.M. Maclaren &lt;nmm1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Aug 17 2009, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  The problem is that the two mpiruns don't know about each other, and
</span><br>
<span class="quotelev2">&gt;&gt;  therefore the second mpirun doesn't know that another mpirun has  already
</span><br>
<span class="quotelev2">&gt;&gt; used socket 0.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We hope to change that at some point in the future.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It won't help.  The problem is less likely to be that two jobs are running
</span><br>
<span class="quotelev1">&gt; OpenMPI programs (that have been recently linked!), but that the other
</span><br>
<span class="quotelev1">&gt; tasks
</span><br>
<span class="quotelev1">&gt; are not OpenMPI at all.  I have mentioned daemons, kernel threads and so
</span><br>
<span class="quotelev1">&gt; on,
</span><br>
<span class="quotelev1">&gt; but think of shared-memory parallel programs (OpenMP etc.) and so on; a LOT
</span><br>
<span class="quotelev1">&gt; of applications nowadays include some sort of threading.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; For the ordinary multi-user system, you don't want any form of binding. The
</span><br>
<span class="quotelev1">&gt; scheduler is ricketty enough as it is, without confusing it further. That
</span><br>
<span class="quotelev1">&gt; may change as the consequences of serious levels of multiple cores force
</span><br>
<span class="quotelev1">&gt; that area to be improved, but don't hold your breath. And I haven't a clue
</span><br>
<span class="quotelev1">&gt; which of the many directions scheduler design will go!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I agree that having an option, and having it easy to experiment with, is
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; right way to go.  What the default should be is very much less clear.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Nick Maclaren.
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6653/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6652.php">Kenneth Lloyd: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6651.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6654.php">N.M. Maclaren: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
