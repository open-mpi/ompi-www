<?
$subject_val = "Re: [OMPI devel] Heads up on new feature to 1.3.4";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 16 09:42:05 2009" -->
<!-- isoreceived="20090816134205" -->
<!-- sent="Sun, 16 Aug 2009 07:41:59 -0600" -->
<!-- isosent="20090816134159" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Heads up on new feature to 1.3.4" -->
<!-- id="71d2d8cc0908160641v39b80527k5c9564c976c6c3a4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="609822424.1372331250410490401.JavaMail.root_at_mail.vpac.org" -->
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
<strong>Date:</strong> 2009-08-16 09:41:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6633.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6633.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Chris
<br>
<p>There would be a &quot;-do-not-bind&quot; option that will prevent us from binding
<br>
processes to anything which should cover that situation.
<br>
<p>My point was only that we would be changing the out-of-the-box behavior to
<br>
the opposite of today's, so all those such as yourself would now have to add
<br>
the -do-not-bind MCA param to your default MCA param file.
<br>
<p>Doable - but it -is- a significant change in our out-of-the-box behavior.
<br>
<p>On Sun, Aug 16, 2009 at 2:14 AM, Chris Samuel &lt;csamuel_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----- &quot;Terry Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I just wanted to give everyone a heads up if they do not get bugs
</span><br>
<span class="quotelev2">&gt; &gt; email.  I just submitted a CMR to move over some new paffinity options
</span><br>
<span class="quotelev2">&gt; &gt; from the trunk to the v1.3 branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralphs comments imply that for those sites that share nodes
</span><br>
<span class="quotelev1">&gt; between jobs (such as ourselves, and most other sites that
</span><br>
<span class="quotelev1">&gt; I'm aware of in Australia) these changes will severely impact
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think that would be a Very Bad Thing(tm).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can it be something that defaults to being configured out
</span><br>
<span class="quotelev1">&gt; for at least 1.3 please ?  That way those few sites that
</span><br>
<span class="quotelev1">&gt; can take advantage can enable it whilst the rest of us
</span><br>
<span class="quotelev1">&gt; aren't impacted.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Christopher Samuel - (03) 9925 4751 - Systems Manager
</span><br>
<span class="quotelev1">&gt;  The Victorian Partnership for Advanced Computing
</span><br>
<span class="quotelev1">&gt;  P.O. Box 201, Carlton South, VIC 3053, Australia
</span><br>
<span class="quotelev1">&gt; VPAC is a not-for-profit Registered Research Agency
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6634/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Previous message:</strong> <a href="6633.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>In reply to:</strong> <a href="6633.php">Chris Samuel: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
<li><strong>Reply:</strong> <a href="6635.php">Eugene Loh: "Re: [OMPI devel] Heads up on new feature to 1.3.4"</a>
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
