<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 07:55:24 2013" -->
<!-- isoreceived="20131204125524" -->
<!-- sent="Wed, 4 Dec 2013 04:55:22 -0800" -->
<!-- isosent="20131204125522" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="CAMD57ocDV8Sg8nPSt=eYE9mQFi2BBeozTTGDn0knGW7DvRLNEw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="529F1139.8080109_at_in.tum.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SC13 birds of a feather<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 07:55:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13360.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13355.php">Isa&#237;as A. Compr&#233;s Ure&#241;a: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13360.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13360.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure how many apps would benefit, but we are always interested in
<br>
taking back patches that extend the ability for researchers to explore new
<br>
capabilities provided they don't impact performance (or can be configured
<br>
out if they do) and are self-maintained (i.e., either the researcher agrees
<br>
to maintain them, or - as in this case - they involve a change that
<br>
essentially requires no ongoing maintenance).
<br>
<p>So if you want to take a crack at this, I'd suggest taking one or two of
<br>
most interest and sending us the required patch for review. If it looks
<br>
like things fit well, then we (a) can absorb the patches, and (b) it would
<br>
probably be worth your time to submit a contributor agreement and join the
<br>
team as full committers.
<br>
<p>HTH
<br>
Ralph
<br>
<p><p><p>On Wed, Dec 4, 2013 at 3:25 AM, &quot;Isa&#237;as A. Compr&#233;s Ure&#241;a&quot; &lt;
<br>
compresu_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Dear Jeff Squyres,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 12/03/2013 11:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry; I really wasn't paying attention to my email the week of SC,
</span><br>
<span class="quotelev2">&gt;&gt; and then I was on vacation for the Thanksgiving holiday.  :-\
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; More below.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 20, 2013, at 4:13 PM, Compres &lt;compresu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  I was at the birds of a feather and wanted to talk to the Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; developers, but unfortunately had to leave early.  In particular, I would
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like to discuss about your implementation of the MPI tools interface and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibly contribute to it later on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sorry we missed you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No problem; I had to be at a booth during times that overlapped with your
</span><br>
<span class="quotelev1">&gt; session.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  What did you want to discuss?  We actually have a full implementation of
</span><br>
<span class="quotelev2">&gt;&gt; the MPI_T interface -- meaning that we have all the infrastructure in place
</span><br>
<span class="quotelev2">&gt;&gt; for MPI_T control and performance variables.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. The MPI_T control variables map directly to OMPI's MCA params, so we
</span><br>
<span class="quotelev2">&gt;&gt; automatically expose oodles of cvars through MPI_T.  They're all read-only
</span><br>
<span class="quotelev2">&gt;&gt; after MPI_INIT, however -- many things are setup during MPI_INIT and it
</span><br>
<span class="quotelev2">&gt;&gt; would be quite a Big Deal if they were to change.  However, we pretty much
</span><br>
<span class="quotelev2">&gt;&gt; *assumed* all cvars shouldn't change after INIT -- we didn't really audit
</span><br>
<span class="quotelev2">&gt;&gt; to see if there were actually some cvars that could change after INIT. So
</span><br>
<span class="quotelev2">&gt;&gt; there's work that could be done there (i.e., find cvars that could change
</span><br>
<span class="quotelev2">&gt;&gt; after INIT, and/or evaluate the amount of work/change it would be to change
</span><br>
<span class="quotelev2">&gt;&gt; some read-only cvars to be read-write, etc.).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. The MPI_T performance variables are new.  There's only a few created
</span><br>
<span class="quotelev2">&gt;&gt; right now (e.g., in the Cisco usnic BTL).  But the field is pretty wide
</span><br>
<span class="quotelev2">&gt;&gt; open here -- the infrastructure is there, but we're really not exposing
</span><br>
<span class="quotelev2">&gt;&gt; much information yet.  There's lots that can be done here.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What did you have in mind?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think you made a good guess on what we would like to do here.  We are
</span><br>
<span class="quotelev1">&gt; working on automatic tuning based on both modeling and empirical data.  One
</span><br>
<span class="quotelev1">&gt; of our aims is to accelerate the data collection part (in this case related
</span><br>
<span class="quotelev1">&gt; to MPI settings), by doing it online without the need of full application
</span><br>
<span class="quotelev1">&gt; runs or restarts.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Right now we can modify MPI runtime parameters with IBM-MPI or Open MPI.
</span><br>
<span class="quotelev1">&gt;  These require full restarts, since they are set as environment variables
</span><br>
<span class="quotelev1">&gt; and are not modifiable after MPI_INIT.  With your MPIT implementation, we
</span><br>
<span class="quotelev1">&gt; can do the same programmatically but cannot avoid the restarts or full runs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We already did what you describe at the end of 1., but with a (1 year old)
</span><br>
<span class="quotelev1">&gt; snapshot of MPICH.  The idea was to identify which variables could be made
</span><br>
<span class="quotelev1">&gt; modifiable at runtime, and whether there was any attainable performance as
</span><br>
<span class="quotelev1">&gt; a result of tuning them.  We only explored point to point and collective
</span><br>
<span class="quotelev1">&gt; communication parameters, and the results are encouraging.  There was no
</span><br>
<span class="quotelev1">&gt; technical reason when picking MPICH for the first prototype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With MPICH, we had to examine the code for things that were configurable.
</span><br>
<span class="quotelev1">&gt;  It seems to me that in the case of Open MPI, most of the work is done and,
</span><br>
<span class="quotelev1">&gt; as you point out, it may just be necessary to identify which ones can be
</span><br>
<span class="quotelev1">&gt; made modifiable at runtime and at what development cost.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My main intention here is to see if other people are interested and will
</span><br>
<span class="quotelev1">&gt; benefit from this.  Additionally, if the changes (patches) are taken by the
</span><br>
<span class="quotelev1">&gt; project, we avoid running out of sync (which is what ended up happening
</span><br>
<span class="quotelev1">&gt; with our MPICH modifications).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Isa&#237;as A. Compr&#233;s
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13359/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13360.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>In reply to:</strong> <a href="13355.php">Isa&#237;as A. Compr&#233;s Ure&#241;a: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13360.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13360.php">Isaías A. Comprés Ureña: "Re: [OMPI devel] SC13 birds of a feather"</a>
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
