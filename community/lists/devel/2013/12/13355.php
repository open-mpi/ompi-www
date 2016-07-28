<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 06:25:49 2013" -->
<!-- isoreceived="20131204112549" -->
<!-- sent="Wed, 04 Dec 2013 12:25:45 +0100" -->
<!-- isosent="20131204112545" -->
<!-- name="Isa&#237;as A. Compr&#233;s Ure&#241;a" -->
<!-- email="compresu_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="529F1139.8080109_at_in.tum.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D7C0679B-05FB-423B-9420-FBFE06E48C62_at_cisco.com" -->
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
<strong>From:</strong> Isa&#237;as A. Compr&#233;s Ure&#241;a (<em>compresu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 06:25:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13356.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="13346.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13359.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13359.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff Squyres,
<br>
<p>On 12/03/2013 11:27 PM, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; I'm sorry; I really wasn't paying attention to my email the week of SC, and then I was on vacation for the Thanksgiving holiday.  :-\
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More below.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 20, 2013, at 4:13 PM, Compres &lt;compresu_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was at the birds of a feather and wanted to talk to the Open MPI developers, but unfortunately had to leave early.  In particular, I would like to discuss about your implementation of the MPI tools interface and possibly contribute to it later on.
</span><br>
<span class="quotelev1">&gt; Sorry we missed you.
</span><br>
<p>No problem; I had to be at a booth during times that overlapped with 
<br>
your session.
<br>
<p><span class="quotelev1">&gt; What did you want to discuss?  We actually have a full implementation of the MPI_T interface -- meaning that we have all the infrastructure in place for MPI_T control and performance variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. The MPI_T control variables map directly to OMPI's MCA params, so we automatically expose oodles of cvars through MPI_T.  They're all read-only after MPI_INIT, however -- many things are setup during MPI_INIT and it would be quite a Big Deal if they were to change.  However, we pretty much *assumed* all cvars shouldn't change after INIT -- we didn't really audit to see if there were actually some cvars that could change after INIT. So there's work that could be done there (i.e., find cvars that could change after INIT, and/or evaluate the amount of work/change it would be to change some read-only cvars to be read-write, etc.).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. The MPI_T performance variables are new.  There's only a few created right now (e.g., in the Cisco usnic BTL).  But the field is pretty wide open here -- the infrastructure is there, but we're really not exposing much information yet.  There's lots that can be done here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What did you have in mind?
</span><br>
<p>I think you made a good guess on what we would like to do here.  We are 
<br>
working on automatic tuning based on both modeling and empirical data.  
<br>
One of our aims is to accelerate the data collection part (in this case 
<br>
related to MPI settings), by doing it online without the need of full 
<br>
application runs or restarts.
<br>
<p>Right now we can modify MPI runtime parameters with IBM-MPI or Open 
<br>
MPI.  These require full restarts, since they are set as environment 
<br>
variables and are not modifiable after MPI_INIT.  With your MPIT 
<br>
implementation, we can do the same programmatically but cannot avoid the 
<br>
restarts or full runs.
<br>
<p>We already did what you describe at the end of 1., but with a (1 year 
<br>
old) snapshot of MPICH.  The idea was to identify which variables could 
<br>
be made modifiable at runtime, and whether there was any attainable 
<br>
performance as a result of tuning them.  We only explored point to point 
<br>
and collective communication parameters, and the results are 
<br>
encouraging.  There was no technical reason when picking MPICH for the 
<br>
first prototype.
<br>
<p>With MPICH, we had to examine the code for things that were 
<br>
configurable.  It seems to me that in the case of Open MPI, most of the 
<br>
work is done and, as you point out, it may just be necessary to identify 
<br>
which ones can be made modifiable at runtime and at what development cost.
<br>
<p>My main intention here is to see if other people are interested and will 
<br>
benefit from this.  Additionally, if the changes (patches) are taken by 
<br>
the project, we avoid running out of sync (which is what ended up 
<br>
happening with our MPICH modifications).
<br>
<p>- Isa&#237;as A. Compr&#233;s
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13356.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Previous message:</strong> <a href="13354.php">Paul Kapinos: "Re: [OMPI devel] two questions about 1.7.1"</a>
<li><strong>In reply to:</strong> <a href="13346.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13359.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13359.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
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
