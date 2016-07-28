<?
$subject_val = "Re: [OMPI devel] add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 15:30:52 2009" -->
<!-- isoreceived="20090205203052" -->
<!-- sent="Thu, 5 Feb 2009 13:30:41 -0700" -->
<!-- isosent="20090205203041" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] add_procs" -->
<!-- id="7DC300F8-1D20-42A5-8DFD-32B666ECBBA3_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C5B0B5AF.2F39B%rlgraham_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] add_procs<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 15:30:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would only add that we should be certain that the code is -not-  
<br>
called more than once as this could cause problems. We don't currently  
<br>
have a way for dynamically spawned procs to share memory with their  
<br>
parents - if that code does get called, I would worry that it hadn't  
<br>
been tested and could cause memory issues.
<br>
<p><p>On Feb 5, 2009, at 1:26 PM, Richard Graham wrote:
<br>
<p><span class="quotelev1">&gt; I would leave the code alone.  The intent was for (A), but it is not  
</span><br>
<span class="quotelev1">&gt; used
</span><br>
<span class="quotelev1">&gt; for that.  It is not in the performance critical region, works  
</span><br>
<span class="quotelev1">&gt; correctly as
</span><br>
<span class="quotelev1">&gt; we use it today, and putting it back later on would be a hassle not  
</span><br>
<span class="quotelev1">&gt; needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rich
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 2/5/09 2:41 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; BTLs have &quot;add_procs&quot; functions.  E.g., my own parochial interests  
</span><br>
<span class="quotelev2">&gt;&gt; are
</span><br>
<span class="quotelev2">&gt;&gt; with the sm BTL and there is a mca_btl_sm_add_procs() function.  I'm
</span><br>
<span class="quotelev2">&gt;&gt; trying to get a feel for how likely it is that this function would be
</span><br>
<span class="quotelev2">&gt;&gt; called more than once.  There is code in there to support the case  
</span><br>
<span class="quotelev2">&gt;&gt; where
</span><br>
<span class="quotelev2">&gt;&gt; it's called multiple times:  e.g., don't just call it once during
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init, but again during program execution to add more processes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Maybe we can do this the &quot;multiple choice&quot; method:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; A) That code is in there for standard purposes (dynamically added
</span><br>
<span class="quotelev2">&gt;&gt; processes or something?) and is robust and routinely tested.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; B) That code was in there because we had hoped to support this stuff
</span><br>
<span class="quotelev2">&gt;&gt; someday, but I'm not sure if it works.  It's not really tested and
</span><br>
<span class="quotelev2">&gt;&gt; rarely used by our users.  We should clean it up sometime so that  
</span><br>
<span class="quotelev2">&gt;&gt; we're
</span><br>
<span class="quotelev2">&gt;&gt; sure it's doing what it should.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; C) That code was a fantasy we had when we first started coding this
</span><br>
<span class="quotelev2">&gt;&gt; stuff, and for sure there is no prayer of that stuff working properly
</span><br>
<span class="quotelev2">&gt;&gt; today or any time in the foreseeable future without major work.   
</span><br>
<span class="quotelev2">&gt;&gt; Come to
</span><br>
<span class="quotelev2">&gt;&gt; think of it, we'd be doing ourselves a service by ripping all that  
</span><br>
<span class="quotelev2">&gt;&gt; stuff
</span><br>
<span class="quotelev2">&gt;&gt; out.
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
<li><strong>Next message:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5380.php">Richard Graham: "Re: [OMPI devel] add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5382.php">George Bosilca: "Re: [OMPI devel] add_procs"</a>
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
