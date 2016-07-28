<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Dec  6 09:58:34 2006" -->
<!-- isoreceived="20061206145834" -->
<!-- sent="Wed, 6 Dec 2006 15:59:25 +0100" -->
<!-- isosent="20061206145925" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Major revision to the RML/OOB" -->
<!-- id="20061206145925.GF7117_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="C19C1CBE.6410%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-12-06 09:59:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1221.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Dec 06, 2006 at 07:07:42AM -0700, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; The concern is that we want to leave open the possibility of putting this
</span><br>
<span class="quotelev1">&gt; revision into 1.2 since it will have a major performance impact on both
</span><br>
<span class="quotelev1">&gt; startup time and the max cluster size we can support. The IP6 code is
</span><br>
<span class="quotelev1">&gt; scheduled for 1.3 and we don't know what the performance impact will look
</span><br>
<span class="quotelev1">&gt; like - hence the hesitation.
</span><br>
<p>I agree not to include IPv6 in the v1.2 (you might remove the configure
<br>
patch from the v1.2 line, or leave it there without really using it)
<br>
<p>If one considers the current v1.2 branch as stable, the trunk could
<br>
be used for the new v1.3 line.
<br>
<p>I therefore suggest to move the OPAL changes into the trunk,
<br>
also the small hostfile code (lex code for IPv6) and the btl code.
<br>
<p>When you've completed all changes to the OOB, we can have a look
<br>
and do the necessary IPv6 changes afterwards. Though I feel the oob/tcp
<br>
is the hardest part of all (it got the most modifications), I hope
<br>
that it's possible to copy a lot of the existing patch. Perhaps
<br>
your rewrite simplifies something.
<br>
<p>I'm currently not developing new code, so at least the IPv6 codebase
<br>
isn't a moving target.
<br>
<p><p>Just let me know if I could help.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany  
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Previous message:</strong> <a href="1222.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>In reply to:</strong> <a href="1221.php">Ralph H Castain: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
<li><strong>Reply:</strong> <a href="1224.php">Jeff Squyres: "Re: [OMPI devel] Major revision to the RML/OOB"</a>
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
