<?
$subject_val = "Re: [OMPI devel] r21096";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 29 09:33:16 2009" -->
<!-- isoreceived="20090429133316" -->
<!-- sent="Wed, 29 Apr 2009 07:33:08 -0600" -->
<!-- isosent="20090429133308" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] r21096" -->
<!-- id="71d2d8cc0904290633u33b84fa4h23f5df2c04cfad66_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200904290916.50648.keller_at_ornl.gov" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-29 09:33:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5902.php">Jeff Squyres: "Re: [OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<li><strong>In reply to:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5902.php">Jeff Squyres: "Re: [OMPI devel] r21096"</a>
<li><strong>Reply:</strong> <a href="5902.php">Jeff Squyres: "Re: [OMPI devel] r21096"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Wed, Apr 29, 2009 at 7:16 AM, Rainer Keller &lt;keller_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff,
</span><br>
<span class="quotelev1">&gt; sure like to try to explain the matters.
</span><br>
<span class="quotelev1">&gt; The script check_unnecessary_headers.sh is not smart at all.
</span><br>
<span class="quotelev1">&gt; It checks whether a header, if known, is required due to some content.
</span><br>
<span class="quotelev1">&gt; It does not know about hierarchies of include files, or convenience headers
</span><br>
<span class="quotelev1">&gt; such as bindings.h and would delete the very headers mention below from
</span><br>
<span class="quotelev1">&gt; bindings.h.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Now, only if we switch to a more sophisticated method (ctags?, munching
</span><br>
<span class="quotelev1">&gt; gcc's
</span><br>
<span class="quotelev1">&gt; preprocessed output?), this could be handled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My personal opinion however is, that every header and every source file
</span><br>
<span class="quotelev1">&gt; should
</span><br>
<span class="quotelev1">&gt; be self contained:
</span><br>
<span class="quotelev1">&gt; It should include all the headers with symbols it needs, no less, and
</span><br>
<span class="quotelev1">&gt; certainly not more ;-)
</span><br>
<p><p>That's an unusual coding style - we could debate the relative pros and cons
<br>
of it for quite some time. Typically, if a body of code is going to all
<br>
require the same headers, coding efficiency would put those dependencies in
<br>
a common .h file, not explicitly copy/paste them into every individual file.
<br>
<p>Is this a convention we adopted somewhere along the line? I don't recall
<br>
doing so. Not sure if it is a good one or not...certainly would appear to
<br>
merit some discussion before enforcing it.
<br>
<p>FWIW: I understood you were simply going to remove unnecessary dependencies,
<br>
not enforce new coding standards. :-)
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope, this is a satisfactory answer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Rainer
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wednesday 29 April 2009 06:31:13 am Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Rainer --
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Can you explain this a little more:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;     In ompi/mpi/c/ header files are moved up into the actual c-file,
</span><br>
<span class="quotelev2">&gt; &gt;     where necessary (these are the only additional #include),
</span><br>
<span class="quotelev2">&gt; &gt;     otherwise it is only deletions of #include (apart from the above
</span><br>
<span class="quotelev2">&gt; &gt;     additions required due to notifier...)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It looks like the addition of
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/runtime/params.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/communicator/communicator.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt; +#include &quot;ompi/errhandler/errhandler.h&quot;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; to lots of ompi/mpi/c/*.c files.  I don't quite grok from your commit
</span><br>
<span class="quotelev2">&gt; &gt; comment why that was a good thing...?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Rainer Keller, PhD                  Tel: +1 (865) 241-6293
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Lab          Fax: +1 (865) 241-4811
</span><br>
<span class="quotelev1">&gt; PO Box 2008 MS 6164           Email: keller_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Oak Ridge, TN 37831-2008    AIM/Skype: rusraink
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-5901/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5902.php">Jeff Squyres: "Re: [OMPI devel] r21096"</a>
<li><strong>Previous message:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<li><strong>In reply to:</strong> <a href="5900.php">Rainer Keller: "Re: [OMPI devel] r21096"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5902.php">Jeff Squyres: "Re: [OMPI devel] r21096"</a>
<li><strong>Reply:</strong> <a href="5902.php">Jeff Squyres: "Re: [OMPI devel] r21096"</a>
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
