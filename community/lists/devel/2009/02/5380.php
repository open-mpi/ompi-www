<?
$subject_val = "Re: [OMPI devel] add_procs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  5 15:27:14 2009" -->
<!-- isoreceived="20090205202714" -->
<!-- sent="Thu, 05 Feb 2009 15:26:39 -0500" -->
<!-- isosent="20090205202639" -->
<!-- name="Richard Graham" -->
<!-- email="rlgraham_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] add_procs" -->
<!-- id="C5B0B5AF.2F39B%rlgraham_at_ornl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="498B40FA.1080609_at_sun.com" -->
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
<strong>From:</strong> Richard Graham (<em>rlgraham_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-05 15:26:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<li><strong>Reply:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I would leave the code alone.  The intent was for (A), but it is not used
<br>
for that.  It is not in the performance critical region, works correctly as
<br>
we use it today, and putting it back later on would be a hassle not needed.
<br>
<p>Rich
<br>
<p><p>On 2/5/09 2:41 PM, &quot;Eugene Loh&quot; &lt;Eugene.Loh_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; BTLs have &quot;add_procs&quot; functions.  E.g., my own parochial interests are
</span><br>
<span class="quotelev1">&gt; with the sm BTL and there is a mca_btl_sm_add_procs() function.  I'm
</span><br>
<span class="quotelev1">&gt; trying to get a feel for how likely it is that this function would be
</span><br>
<span class="quotelev1">&gt; called more than once.  There is code in there to support the case where
</span><br>
<span class="quotelev1">&gt; it's called multiple times:  e.g., don't just call it once during
</span><br>
<span class="quotelev1">&gt; MPI_Init, but again during program execution to add more processes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe we can do this the &quot;multiple choice&quot; method:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A) That code is in there for standard purposes (dynamically added
</span><br>
<span class="quotelev1">&gt; processes or something?) and is robust and routinely tested.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; B) That code was in there because we had hoped to support this stuff
</span><br>
<span class="quotelev1">&gt; someday, but I'm not sure if it works.  It's not really tested and
</span><br>
<span class="quotelev1">&gt; rarely used by our users.  We should clean it up sometime so that we're
</span><br>
<span class="quotelev1">&gt; sure it's doing what it should.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; C) That code was a fantasy we had when we first started coding this
</span><br>
<span class="quotelev1">&gt; stuff, and for sure there is no prayer of that stuff working properly
</span><br>
<span class="quotelev1">&gt; today or any time in the foreseeable future without major work.  Come to
</span><br>
<span class="quotelev1">&gt; think of it, we'd be doing ourselves a service by ripping all that stuff
</span><br>
<span class="quotelev1">&gt; out.
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
<li><strong>Next message:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<li><strong>Previous message:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<li><strong>In reply to:</strong> <a href="5379.php">Eugene Loh: "[OMPI devel] add_procs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
<li><strong>Reply:</strong> <a href="5381.php">Ralph Castain: "Re: [OMPI devel] add_procs"</a>
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
