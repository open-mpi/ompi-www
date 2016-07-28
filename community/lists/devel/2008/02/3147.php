<?
$subject_val = "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb  7 00:09:22 2008" -->
<!-- isoreceived="20080207050922" -->
<!-- sent="Wed, 06 Feb 2008 22:09:08 -0700" -->
<!-- isosent="20080207050908" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk" -->
<!-- id="C3CFE084.4511%rhc_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20080206211407.GN3275_at_benten.cs.indiana.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-07 00:09:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3146.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Torsten
<br>
<p>I don't have an opinion either way on this specific proposal. However, I do
<br>
have a growing concern over the number of packages being added to the
<br>
system, all of which want to &quot;build by default&quot;. The build time is already
<br>
long and rapidly growing, and our code distribution is correspondingly
<br>
increasing in size.
<br>
<p>I therefore would like to raise two areas for thought:
<br>
<p>1. Do we need to, at some point, begin to ask if all these packages -have-
<br>
to be included as source code in our code base? Can we devise a means such
<br>
that people could download them separately and link the libraries to us in
<br>
some other fashion?
<br>
<p>I only ask the community to consider because we seem to be developing a
<br>
mindset whereby everything &quot;looks good&quot; and/or is wanted by &quot;someone&quot;. If we
<br>
continue down the path of adding everything that someone might find
<br>
interesting, one could envision code releases in the GBytes, taking more
<br>
than an hour to configure and build as every conceivable package &quot;builds by
<br>
default&quot;.
<br>
<p><p>2. Have we applied the &quot;rational thought&quot; filter here - i.e., are we
<br>
building by default what a large percentage of the user community will use,
<br>
or are we building by default all things that somebody, somewhere, someday
<br>
-might- use? If the latter, is that really how we want to define the
<br>
&quot;default&quot; build?
<br>
<p><p>I'm not proposing solutions as I don't know the answers. I only wonder if we
<br>
have really thought about what is happening, and if we need to begin
<br>
thinking about alternative approaches.
<br>
<p>For example, as a first step on #2, wouldn't it make more sense to at least
<br>
have the build system -not- build some things by default when in &quot;developer&quot;
<br>
mode, but build by default when doing an optimized installation? This would
<br>
save those of us who have to build frequently from all the time penalties of
<br>
building things we have no use for in our daily work (which is becoming a
<br>
significant part of the code base), while retaining this &quot;build everything
<br>
conceivable&quot; approach. I suggest this only because, while I certainly -can-
<br>
turn it all &quot;off&quot;, the number of options required to turn off all these
<br>
unneeded &quot;default&quot; code areas is becoming large, and constantly seems to be
<br>
growing.
<br>
<p>Just some thoughts to ponder...
<br>
Ralph
<br>
<p><p><p>On 2/6/08 2:14 PM, &quot;Torsten Hoefler&quot;
<br>
&lt;torsten.hoefler_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi folks,        
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; WHAT:            
</span><br>
<span class="quotelev1">&gt;  Merge the htor-nbc branch to the trunk. This branch adds LibNBC support
</span><br>
<span class="quotelev1">&gt;  to Open MPI (via compiler-wrappers mpi{cc,CC,xx,f90,...}-nbc.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; WHY:             
</span><br>
<span class="quotelev1">&gt;  Users asked for it - this will enable to use non-blocking collective
</span><br>
<span class="quotelev1">&gt;  operations with Open MPI easily.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; WHEN:            
</span><br>
<span class="quotelev1">&gt;  Before 1.3 closes
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; TIMEOUT:         
</span><br>
<span class="quotelev1">&gt;  I will do the merge at February 13th if no one opposes.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; DESCRIPTION:     
</span><br>
<span class="quotelev1">&gt;  LibNBC implements non-blocking collective operations in an MPI-style. It
</span><br>
<span class="quotelev1">&gt;  was planned that Open MPI supports this extension as MPIX_&lt;collective&gt;.
</span><br>
<span class="quotelev1">&gt;  However, this would require another MPIX_{Test,Wait} which might collide
</span><br>
<span class="quotelev1">&gt;  with any MPIX_ extensions (cf. Generalized Requests). So we decided on
</span><br>
<span class="quotelev1">&gt;  the Paris meeting last year that we just import LibNBC and keep the NBC_
</span><br>
<span class="quotelev1">&gt;  namespace which should not collide with anything and enables portability
</span><br>
<span class="quotelev1">&gt;  without code-changes (since LibNBC can be linked with any MPI).
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;  More information on LibNBC is available in &quot;Implementation and
</span><br>
<span class="quotelev1">&gt;  Performance Analysis of Non-Blocking Collective Operations for MPI&quot; and
</span><br>
<span class="quotelev1">&gt;  on <a href="http://www.unixer.de/research/nbcoll/">http://www.unixer.de/research/nbcoll/</a> .
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;  Impact to the code base:
</span><br>
<span class="quotelev1">&gt;   The impact will be minimal because LibNBC will be added as a third-party
</span><br>
<span class="quotelev1">&gt;   library (like vt) in ompi/contrib/libnbc. Jeff did all the build-system
</span><br>
<span class="quotelev1">&gt;   magic to get LibNBC's configure script called after ompi is built. So
</span><br>
<span class="quotelev1">&gt;   this glue-code is also minimal.
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;  Impact on compilation time:
</span><br>
<span class="quotelev1">&gt;   The implementation will be compiled and installed by default (unless it
</span><br>
<span class="quotelev1">&gt;   disables itself during configure).
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt;  Impact on running time:
</span><br>
<span class="quotelev1">&gt;   No impact since it just offers additional functionality. No Open MPI
</span><br>
<span class="quotelev1">&gt;   functionality will be changed. It is also only linked if those calls are
</span><br>
<span class="quotelev1">&gt;   actually used. The command-line arguments are only added if the user
</span><br>
<span class="quotelev1">&gt;   uses the -nbc mpi-compiler wrapper. However, using the calls does not
</span><br>
<span class="quotelev1">&gt;   necessarily mean that the library achieves any overlap (this depends on
</span><br>
<span class="quotelev1">&gt;   the network and also Open MPI's configuration, e.g., leave_pinned for
</span><br>
<span class="quotelev1">&gt;   InfiniBand).   
</span><br>
<span class="quotelev1">&gt;                  
</span><br>
<span class="quotelev1">&gt; Best,            
</span><br>
<span class="quotelev1">&gt;    Torsten       
</span><br>
<span class="quotelev1">&gt;                                                                                 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3148.php">Brian Barrett: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Previous message:</strong> <a href="3146.php">Resat Umit Payli: "Re: [OMPI devel] OpenMPI on Cell BE"</a>
<li><strong>In reply to:</strong> <a href="3145.php">Torsten Hoefler: "[OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
<li><strong>Reply:</strong> <a href="3150.php">Torsten Hoefler: "Re: [OMPI devel] [RFC] Non-blocking collectives (LibNBC) merge to trunk"</a>
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
