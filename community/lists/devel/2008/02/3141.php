<?
$subject_val = "Re: [OMPI devel] OpenMPI on Cell BE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  6 13:09:49 2008" -->
<!-- isoreceived="20080206180949" -->
<!-- sent="Wed, 6 Feb 2008 13:09:40 -0500" -->
<!-- isosent="20080206180940" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] OpenMPI on Cell BE" -->
<!-- id="5C7A99F3-26FD-49B6-93B9-30518CF3B424_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C3CF3DD9.C205%rhc_at_lanl.gov" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-06 13:09:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3142.php">George Bosilca: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="3140.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="3139.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3143.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Reply:</strong> <a href="3143.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
At UTK we had a cluster of PS3. We wrote a documentation on how to use  
<br>
the PS3 cluster, including how to configure and install Open MPI there  
<br>
(there is a configuration file in the platform directory). You can use  
<br>
the following link <a href="http://www.netlib.org/utk/people/JackDongarra/PAPERS/scop3.pdf">http://www.netlib.org/utk/people/JackDongarra/PAPERS/scop3.pdf</a>
<br>
<p>However, the application running on the PPE is in charge of starting  
<br>
whatever you want on the SPE. In other words, Open MPI is unable to  
<br>
start MPI processes on the SPE.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Feb 6, 2008, at 12:35 PM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; Hi Resat
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm sorry I am not communicating clearly. I recognized the acronym.  
</span><br>
<span class="quotelev1">&gt; What I
</span><br>
<span class="quotelev1">&gt; don't fully understand is what you mean by &quot;tested on Cell BE&quot;?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you mean &quot;have we run Open MPI on a machine entirely composed of  
</span><br>
<span class="quotelev1">&gt; Cell
</span><br>
<span class="quotelev1">&gt; BE's&quot;, then the answer is &quot;no&quot;. However, if you mean &quot;have we run  
</span><br>
<span class="quotelev1">&gt; Open MPI
</span><br>
<span class="quotelev1">&gt; on a hybrid machine that includes a Cell BE&quot;, then the answer is  
</span><br>
<span class="quotelev1">&gt; &quot;yes&quot;.
</span><br>
<span class="quotelev1">&gt; However, we have still not really developed a fully supported  
</span><br>
<span class="quotelev1">&gt; capability for
</span><br>
<span class="quotelev1">&gt; running MPI procs on both the host and the Cell BE - that remains  
</span><br>
<span class="quotelev1">&gt; under
</span><br>
<span class="quotelev1">&gt; development.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there a particular motivation for this question?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/6/08 9:22 AM, &quot;Resat Umit Payli&quot; &lt;rupayli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I was talking about the IBM's Cell Broadband Engine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 6, 2008 10:56 AM, Ralph H Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm not entirely sure what you mean, but suspect the answer is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; probably
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;no&quot;...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 2/6/08 8:48 AM, &quot;Resat Umit Payli&quot; &lt;rupayli_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Did openMPI tested on Cell BE?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you in advance
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
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev3">&gt;&gt;&gt;
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3141/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3142.php">George Bosilca: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Previous message:</strong> <a href="3140.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="3139.php">Ralph H Castain: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3143.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>Reply:</strong> <a href="3143.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
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
