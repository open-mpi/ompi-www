<?
$subject_val = "Re: [OMPI devel] OpenMPI on Cell BE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 14:57:32 2008" -->
<!-- isoreceived="20080206195732" -->
<!-- sent="Wed, 06 Feb 2008 12:57:19 -0700" -->
<!-- isosent="20080206195719" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI on Cell BE" -->
<!-- id="C3CF5F2F.C21B%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5D462654-8F89-48E9-8BBE-C19B457FC3B7_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] OpenMPI on Cell BE<br>
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 14:57:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3143.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="3142.php">George Bosilca: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3146.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Reply:</strong> <a href="3146.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ummmm....well, actually, yes there is...but not in release or in the OMPI
<br>
repository. It may become available sometime this summer.
<br>
<p><p>On 2/6/08 11:17 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Resat,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Right now there is no MPI implementation that will allow you to start
</span><br>
<span class="quotelev1">&gt; MPI processes on the SPEs. Keep this in mind when you try porting your
</span><br>
<span class="quotelev1">&gt; code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 6, 2008, at 1:06 PM, Resat Umit Payli wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ralf;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes. There is a particular motivation. Here at IU last two day I did
</span><br>
<span class="quotelev2">&gt;&gt; attend the IBM workshop based on Cell programming.  Right now I do
</span><br>
<span class="quotelev2">&gt;&gt; have opportunity to access this type of machine.  I would like to
</span><br>
<span class="quotelev2">&gt;&gt; play with my MPI based CFD code. May be IBM will provide me some
</span><br>
<span class="quotelev2">&gt;&gt; kind of MPI acceses on that machine.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I was curious openMPI development on that machine.  I like testing
</span><br>
<span class="quotelev2">&gt;&gt; the new things.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2008 12:35 PM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Resat
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm sorry I am not communicating clearly. I recognized the acronym.
</span><br>
<span class="quotelev2">&gt;&gt; What I
</span><br>
<span class="quotelev2">&gt;&gt; don't fully understand is what you mean by &quot;tested on Cell BE&quot;?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; If you mean &quot;have we run Open MPI on a machine entirely composed of
</span><br>
<span class="quotelev2">&gt;&gt; Cell
</span><br>
<span class="quotelev2">&gt;&gt; BE's&quot;, then the answer is &quot;no&quot;. However, if you mean &quot;have we run
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; on a hybrid machine that includes a Cell BE&quot;, then the answer is
</span><br>
<span class="quotelev2">&gt;&gt; &quot;yes&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; However, we have still not really developed a fully supported
</span><br>
<span class="quotelev2">&gt;&gt; capability for
</span><br>
<span class="quotelev2">&gt;&gt; running MPI procs on both the host and the Cell BE - that remains
</span><br>
<span class="quotelev2">&gt;&gt; under
</span><br>
<span class="quotelev2">&gt;&gt; development.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Is there a particular motivation for this question?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2/6/08 9:22 AM, &quot;Resat Umit Payli&quot; &lt;rupayli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I was talking about the IBM's Cell Broadband Engine.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Feb 6, 2008 10:56 AM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not entirely sure what you mean, but suspect the answer is
</span><br>
<span class="quotelev2">&gt;&gt; probably
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;no&quot;...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 2/6/08 8:48 AM, &quot;Resat Umit Payli&quot; &lt;rupayli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Did openMPI tested on Cell BE?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thank you in advance
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3143.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="3142.php">George Bosilca: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3146.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Reply:</strong> <a href="3146.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
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
