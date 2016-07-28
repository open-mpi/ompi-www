<?
$subject_val = "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Dec  4 10:59:39 2007" -->
<!-- isoreceived="20071204155939" -->
<!-- sent="Tue, 4 Dec 2007 10:59:31 -0500" -->
<!-- isosent="20071204155931" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RTE issue I. Support for non-MPI jobs" -->
<!-- id="A2B80993-5AAA-4DF8-A19B-5C06150BFBEA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C37ABC4A.B782%rhc_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RTE issue I. Support for non-MPI jobs<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-04 10:59:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>In reply to:</strong> <a href="2709.php">Ralph H Castain: "[OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 4, 2007, at 10:11 AM, Ralph H Castain wrote:
<br>
<p><span class="quotelev1">&gt; (a) do we want to retain the feature to run non-MPI jobs with mpirun  
</span><br>
<span class="quotelev1">&gt; as-is
</span><br>
<span class="quotelev1">&gt; (and accept the tradeoffs, including the one described below in II)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (b) do we provide a flag to mpirun (perhaps adding the distinction  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; &quot;orterun&quot; must be used for non-MPI jobs?) to indicate &quot;this is NOT  
</span><br>
<span class="quotelev1">&gt; an MPI
</span><br>
<span class="quotelev1">&gt; job&quot; so we can act accordingly?
</span><br>
<p>Based on talking to Ralph this morning, I'd [cautiously] be in favor  
<br>
of b) -- have an MCA param / command line switch that allows switching  
<br>
between jobs that call orte_init and those that do not, along with  
<br>
setting the default by looking at argv[0] (orterun = does not call  
<br>
orte_init, mpirun = does call orte_init).
<br>
<p>The benefits are what Ralph described: less complex ORTE code and the  
<br>
potential for optimizations that are difficult if you don't know if  
<br>
the launched applications are going to call MPI_INIT (orte_init) or not.
<br>
<p>But this is definitely a change from past behavior -- so it's worth  
<br>
community discussion.  The real question is: how many OMPI users  
<br>
actually use mpirun to launch non-MPI jobs?
<br>
<p>My $0.02 is that we're focusing ORTE on OMPI these days.  So  
<br>
optimizing more for MPI starting is a Good Thing(tm).
<br>
<p><span class="quotelev1">&gt; (c) simply eliminate support for non-MPI jobs?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (d) other suggestions?
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2716.php">Arlin Davis: "Re: [OMPI devel] [ofa-general] uDAPL EVD queue length issue"</a>
<li><strong>Previous message:</strong> <a href="2714.php">Jeff Squyres: "Re: [OMPI devel] MPI_GROUP_EMPTY and MPI_Group_free()"</a>
<li><strong>In reply to:</strong> <a href="2709.php">Ralph H Castain: "[OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2718.php">Rolf.Vandevaart_at_[hidden]: "Re: [OMPI devel] RTE issue I. Support for non-MPI jobs"</a>
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
