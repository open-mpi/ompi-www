<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 27 10:43:09 2007" -->
<!-- isoreceived="20070727144309" -->
<!-- sent="Fri, 27 Jul 2007 18:42:57 -0400" -->
<!-- isosent="20070727224257" -->
<!-- name="Aurelien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations" -->
<!-- id="4CEC92FC-91D9-42C5-87E9-C62577622CAC_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C2CF59C5.36F0%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Aurelien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-27 18:42:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I basically agree with Terry, even if your proposal would solve all  
<br>
the issue I currently face. I think we need to read the MPI2 standard  
<br>
to make sure we are not on the brink of breaking the standard.
<br>
<p>Aurelien
<br>
<p><p>On Jul 27, 2007, at 10:13 , Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 7/27/07 7:58 AM, &quot;Terry D. Dontje&quot; &lt;Terry.Dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT:   Proposal to add two new command line options that will  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow us to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        replace the current need to separately launch a persistent  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; daemon to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        support connect/accept operations
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY:    Remove problems of confusing multiple allocations,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; provide a cleaner
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        method for connect/accept between jobs
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE:  minor changes in orterun and orted, some code in rmgr and  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each pls
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        to ensure the proper jobid and connect info is passed to each
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        app_context as it is launched
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It is my opinion that we would be better off attacking the issues of
</span><br>
<span class="quotelev2">&gt;&gt; the persistent daemons described below then creating a new set of
</span><br>
<span class="quotelev2">&gt;&gt; options to mpirun for process placement.  (more comments below on
</span><br>
<span class="quotelev2">&gt;&gt; the actual proposal).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Non-trivial problems - we haven't figured them out in three years of
</span><br>
<span class="quotelev1">&gt; occasional effort. It isn't clear that they even -can- be solved when
</span><br>
<span class="quotelev1">&gt; considering the problem of running in multiple RM-based allocations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll try to provide more detail on the problems when I return from  
</span><br>
<span class="quotelev1">&gt; my quick
</span><br>
<span class="quotelev1">&gt; trip...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2033.php">Ralph Castain: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>Previous message:</strong> <a href="2031.php">George Bosilca: "Re: [OMPI devel] Hostfiles - yet again"</a>
<li><strong>In reply to:</strong> <a href="2029.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
<li><strong>Reply:</strong> <a href="2039.php">Ralph Castain: "Re: [OMPI devel] [RFC] New command line options to replace persistent daemon operations"</a>
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
