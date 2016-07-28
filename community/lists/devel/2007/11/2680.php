<?
$subject_val = "Re: [OMPI devel] THREAD_MULTIPLE";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 28 14:09:42 2007" -->
<!-- isoreceived="20071128190942" -->
<!-- sent="Wed, 28 Nov 2007 14:09:32 -0500" -->
<!-- isosent="20071128190932" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] THREAD_MULTIPLE" -->
<!-- id="474DBCEC.8030805_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="D00A8709-6A1F-43D6-AE86-11279848329B_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] THREAD_MULTIPLE<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-28 14:09:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2681.php">Keshetti Mahesh: "Re: [OMPI devel] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="2679.php">Gleb Natapov: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="2678.php">George Bosilca: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If the guidelines are made for the BTLs Sun will handle the udapl btl. 
<br>
<p>We can also help in testing too.
<br>
<p>--td
<br>
<p>George Bosilca wrote:
<br>
<span class="quotelev1">&gt; Yes, &quot;us&quot; means UTK. Our math folks are pushing hard for this. I'll 
</span><br>
<span class="quotelev1">&gt; gladly accept any help, even if it's only for testing. For 
</span><br>
<span class="quotelev1">&gt; development, I dispose of some of my time and a 100% of a post-doc for 
</span><br>
<span class="quotelev1">&gt; few months.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However, there are limits to what we can do. We will make sure the BTL 
</span><br>
<span class="quotelev1">&gt; threading requirements are clearly specified, and we will take care of 
</span><br>
<span class="quotelev1">&gt; the BTLs we already worked on (TCP, self, SM, MX). I hope that once 
</span><br>
<span class="quotelev1">&gt; the BTL interface is defined, others can make sure their BTL follow 
</span><br>
<span class="quotelev1">&gt; the guidelines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Thanks,
</span><br>
<span class="quotelev1">&gt;     george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 28, 2007, at 1:34 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 28, 2007, at 1:26 PM, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is a priority change for us.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;us&quot; = UTK?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It's definitively time to have a fully supported MPI_THREAD_MULTIPLE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mode in Open MPI. I'm working to figure out how and where to get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cycles for this. I expect to start working on it in January. So, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; good news is that 1.3 will have thread support.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That will be great.  Do you really think that you can finish the
</span><br>
<span class="quotelev2">&gt;&gt; THREAD_MULTIPLE work by yourself?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cisco can provide some resources for testing (in the environments that
</span><br>
<span class="quotelev2">&gt;&gt; we care about :-) ), but probably not for development.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
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
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2681.php">Keshetti Mahesh: "Re: [OMPI devel] [openMPI-infiniband] openMPI in IB network when openSM with LASH is running"</a>
<li><strong>Previous message:</strong> <a href="2679.php">Gleb Natapov: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<li><strong>In reply to:</strong> <a href="2678.php">George Bosilca: "Re: [OMPI devel] THREAD_MULTIPLE"</a>
<!-- nextthread="start" -->
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
