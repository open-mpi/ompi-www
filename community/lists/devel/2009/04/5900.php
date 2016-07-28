<?
$subject_val = "Re: [OMPI devel] r21096";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 09:17:20 2009" -->
<!-- isoreceived="20090429131720" -->
<!-- sent="Wed, 29 Apr 2009 09:16:50 -0400" -->
<!-- isosent="20090429131650" -->
<!-- name="Rainer Keller" -->
<!-- email="keller_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r21096" -->
<!-- id="200904290916.50648.keller_at_ornl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="AE0B777F-7E2B-462B-8E8A-5605ACBD9623_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] r21096<br>
<strong>From:</strong> Rainer Keller (<em>keller_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 09:16:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5898.php">Jeff Squyres: "[OMPI devel] r21096"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<li><strong>Reply:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
sure like to try to explain the matters.
<br>
The script check_unnecessary_headers.sh is not smart at all.
<br>
It checks whether a header, if known, is required due to some content.
<br>
It does not know about hierarchies of include files, or convenience headers 
<br>
such as bindings.h and would delete the very headers mention below from 
<br>
bindings.h.
<br>
<p>Now, only if we switch to a more sophisticated method (ctags?, munching gcc's 
<br>
preprocessed output?), this could be handled.
<br>
<p>My personal opinion however is, that every header and every source file should 
<br>
be self contained:
<br>
It should include all the headers with symbols it needs, no less, and 
<br>
certainly not more ;-)
<br>
<p>Hope, this is a satisfactory answer?
<br>
<p>Thanks,
<br>
Rainer
<br>
<p><p><p>On Wednesday 29 April 2009 06:31:13 am Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Rainer --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you explain this a little more:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     In ompi/mpi/c/ header files are moved up into the actual c-file,
</span><br>
<span class="quotelev1">&gt;     where necessary (these are the only additional #include),
</span><br>
<span class="quotelev1">&gt;     otherwise it is only deletions of #include (apart from the above
</span><br>
<span class="quotelev1">&gt;     additions required due to notifier...)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the addition of
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev1">&gt; +#include &quot;ompi/errhandler/errhandler.h&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; to lots of ompi/mpi/c/*.c files.  I don't quite grok from your commit
</span><br>
<span class="quotelev1">&gt; comment why that was a good thing...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<p><pre>
-- 
------------------------------------------------------------------------
Rainer Keller, PhD                  Tel: +1 (865) 241-6293
Oak Ridge National Lab          Fax: +1 (865) 241-4811
PO Box 2008 MS 6164           Email: keller_at_[hidden]
Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5899.php">Ralph Castain: "Re: [OMPI devel] Branching for 1.5.0"</a>
<li><strong>In reply to:</strong> <a href="5898.php">Jeff Squyres: "[OMPI devel] r21096"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
<li><strong>Reply:</strong> <a href="5901.php">Ralph Castain: "Re: [OMPI devel] r21096"</a>
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
