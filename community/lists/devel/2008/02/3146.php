<?
$subject_val = "Re: [OMPI devel] OpenMPI on Cell BE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 21:17:52 2008" -->
<!-- isoreceived="20080207021752" -->
<!-- sent="Wed, 6 Feb 2008 21:17:43 -0500" -->
<!-- isosent="20080207021743" -->
<!-- name="Resat Umit Payli" -->
<!-- email="rupayli_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI on Cell BE" -->
<!-- id="ae3afb330802061817l11149b9hec7a0c20876e5cab_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C3CF5F2F.C21B%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Resat Umit Payli (<em>rupayli_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 21:17:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3147.php">Ralph Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3144.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3141.php">George Bosilca: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph;
<br>
Whenever is ready I can test it.
<br>
<p>Thank you
<br>
<p><p>On Feb 6, 2008 2:57 PM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Ummmm....well, actually, yes there is...but not in release or in the OMPI
</span><br>
<span class="quotelev1">&gt; repository. It may become available sometime this summer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/6/08 11:17 AM, &quot;George Bosilca&quot; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Resat,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Right now there is no MPI implementation that will allow you to start
</span><br>
<span class="quotelev2">&gt; &gt; MPI processes on the SPEs. Keep this in mind when you try porting your
</span><br>
<span class="quotelev2">&gt; &gt; code.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Feb 6, 2008, at 1:06 PM, Resat Umit Payli wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Ralf;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Yes. There is a particular motivation. Here at IU last two day I did
</span><br>
<span class="quotelev3">&gt; &gt;&gt; attend the IBM workshop based on Cell programming.  Right now I do
</span><br>
<span class="quotelev3">&gt; &gt;&gt; have opportunity to access this type of machine.  I would like to
</span><br>
<span class="quotelev3">&gt; &gt;&gt; play with my MPI based CFD code. May be IBM will provide me some
</span><br>
<span class="quotelev3">&gt; &gt;&gt; kind of MPI acceses on that machine.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was curious openMPI development on that machine.  I like testing
</span><br>
<span class="quotelev3">&gt; &gt;&gt; the new things.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thank you
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On Feb 6, 2008 12:35 PM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Resat
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm sorry I am not communicating clearly. I recognized the acronym.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What I
</span><br>
<span class="quotelev3">&gt; &gt;&gt; don't fully understand is what you mean by &quot;tested on Cell BE&quot;?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; If you mean &quot;have we run Open MPI on a machine entirely composed of
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Cell
</span><br>
<span class="quotelev3">&gt; &gt;&gt; BE's&quot;, then the answer is &quot;no&quot;. However, if you mean &quot;have we run
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Open MPI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; on a hybrid machine that includes a Cell BE&quot;, then the answer is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;yes&quot;.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; However, we have still not really developed a fully supported
</span><br>
<span class="quotelev3">&gt; &gt;&gt; capability for
</span><br>
<span class="quotelev3">&gt; &gt;&gt; running MPI procs on both the host and the Cell BE - that remains
</span><br>
<span class="quotelev3">&gt; &gt;&gt; under
</span><br>
<span class="quotelev3">&gt; &gt;&gt; development.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Is there a particular motivation for this question?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Ralph
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 2/6/08 9:22 AM, &quot;Resat Umit Payli&quot; &lt;rupayli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Hi;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; I was talking about the IBM's Cell Broadband Engine.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; Thank you
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; On Feb 6, 2008 10:56 AM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; I'm not entirely sure what you mean, but suspect the answer is
</span><br>
<span class="quotelev3">&gt; &gt;&gt; probably
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; &quot;no&quot;...
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; On 2/6/08 8:48 AM, &quot;Resat Umit Payli&quot; &lt;rupayli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Hi;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Did openMPI tested on Cell BE?
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; Thank you in advance
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3146/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3147.php">Ralph Castain: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>In reply to:</strong> <a href="3144.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3141.php">George Bosilca: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
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
