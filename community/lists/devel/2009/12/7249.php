<?
$subject_val = "Re: [OMPI devel] Bug or feature?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 16 09:20:27 2009" -->
<!-- isoreceived="20091216142027" -->
<!-- sent="Wed, 16 Dec 2009 09:20:23 -0500" -->
<!-- isosent="20091216142023" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Bug or feature?" -->
<!-- id="E65F690E-61A6-4A66-BBDF-E48506AFCA0D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="B8C39670-A0C2-4366-86DA-475B461B404E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Bug or feature?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-12-16 09:20:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7250.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Previous message:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7243.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7250.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would tend to agree with Paul.
<br>
<p>It's uncommon (e.g., no one has run into this before now), and I would say that this is a bad application.  But then again, hanging is bad -- so it would be better to abort/terminate the whole job in this scenario.
<br>
<p>I don't know how I would rate the priority of this, but it would be nice to have someday.
<br>
<p><p>On Dec 15, 2009, at 11:17 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Understandable - and we can count on your patch in the near future, then? :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 15, 2009, at 9:12 PM, Paul H. Hargrove wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; My 0.02USD says that for pragmatic reasons one should attempt to terminate the job in this case, regardless of ones opinion of this unusual application behavior.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -Paul
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi folks
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In case you didn't follow this on the user list, we had a question come up about proper OMPI behavior. Basically, the user has an application where one process decides it should cleanly terminate prior to calling MPI_Init, but all the others go ahead and enter MPI_Init. The application hangs since we don't detect the one proc's exit as an abnormal termination (no segfault, and it didn't call MPI_Init so it isn't required to call MPI_Finalize prior to termination).
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I can probably come up with a way to detect this scenario and abort it. But before I spend the effort chasing this down, my question to you MPI folks is:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; What -should- OMPI do in this situation? We have never previously detected such behavior - was this an oversight, or is this simply a &quot;bad&quot; application?
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
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Future Technologies Group                 Tel: +1-510-495-2352
</span><br>
<span class="quotelev2">&gt; &gt; HPC Research Department                   Fax: +1-510-486-6900
</span><br>
<span class="quotelev2">&gt; &gt; Lawrence Berkeley National Laboratory    
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7250.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
<li><strong>Previous message:</strong> <a href="7248.php">Joshua Hursey: "Re: [OMPI devel] carto vs. hwloc"</a>
<li><strong>In reply to:</strong> <a href="7243.php">Ralph Castain: "Re: [OMPI devel] Bug or feature?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7250.php">George Bosilca: "Re: [OMPI devel] Bug or feature?"</a>
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
