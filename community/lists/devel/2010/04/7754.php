<?
$subject_val = "Re: [OMPI devel] RFC: Deprecate rankfile?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 19:52:33 2010" -->
<!-- isoreceived="20100415235233" -->
<!-- sent="Thu, 15 Apr 2010 16:54:45 -0700" -->
<!-- isosent="20100415235445" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Deprecate rankfile?" -->
<!-- id="4BC7A745.3000209_at_oracle.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="30110365-51C1-4033-A3F1-AC0C5320657E_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Deprecate rankfile?<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 19:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt;WHAT: Deprecate the &quot;rankfile&quot; component in the v1.5 series; remove it in the 1.7 series
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHY: It's old, creaky, and difficult to maintain.  It'll require maintenance someday soon, when we support hardware / hyperthreads in OMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHERE: svn rm orte/mca/rmaps/rank_file
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;WHEN: Deprecate in 1.5, remove in 1.7.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;TIMEOUT: Teleconf on Tue, 27 April 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;-----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Now that we have nice paffinity binding options, can we deprecate rankfile in the 1.5 series and remove it in 1.7?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;I only ask because it's kind of a pain to maintain.  It's not a huge deal, but Ralph and I were talking about another paffinity issue today and we both groaned at the prospect of extending rank file to support hyperthreads (and/or boards).  Perhaps it should just go away...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Pro: less maintenance, especially since the original developers no longer maintain it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;Con: it's the only way to have completely custom affinity bindings (i.e., outside of our pre-constructed &quot;bind to socket&quot;, &quot;bind to core&quot;, etc. options).
</span><br>
<span class="quotelev1">&gt;
</span><br>
Arguably, someone could always hack something together him/herself with 
<br>
numactl, processor_binding(), scripts, etc.
<br>
<p><span class="quotelev1">&gt;...do any other MPI's offer completely custom binding options?
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes, &quot;they all do.&quot;  Okay, I haven't actually checked exhaustively, but 
<br>
from what I can tell every MPI (now that OMPI has joined their ranks) 
<br>
supports specification of process-bind mappings both via policy (a la 
<br>
&quot;bysocket&quot;) and via customized list.  Specifically, I've checked:
<br>
<p>*) MVAPICH2 (which uses PLPA!  God help them)
<br>
<a href="http://mvapich.cse.ohio-state.edu/support/user_guide_mvapich2-1.4rc1.html#x1-360006.8">http://mvapich.cse.ohio-state.edu/support/user_guide_mvapich2-1.4rc1.html#x1-360006.8</a>
<br>
*) Scali/Platform
<br>
*) Intel MPI (the full-blown set of options is very extensive)
<br>
<a href="http://software.intel.com/file/15429">http://software.intel.com/file/15429</a>
<br>
*) HP MPI
<br>
<a href="http://docs.hp.com/en/B6060-96022/ch03s07.html">http://docs.hp.com/en/B6060-96022/ch03s07.html</a>
<br>
<p><span class="quotelev1">&gt;I.e., do any real users care?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I think so.  Users end up wanting fine controls on all kinds of stuff.  
<br>
I think I first ran into users wanting to bind processes about 15 years 
<br>
ago.  Issues include spreading/gathering processes on multicore nodes, 
<br>
squelching migration, avoiding or targeting particular processes, 
<br>
dealing with asymmetries within a node, etc.  It just seems to keep 
<br>
coming up over and over and over again.  There's been a history of 
<br>
problems (like excessive migration, poor initial placement, etc.) and 
<br>
clever developers fixing these problems, but the constant has been the 
<br>
existance of some subset of users who just want a stable workaround to 
<br>
carry them through the broken/fixed cycles of history.
<br>
<p>Note that various MPI implementations (also OMP, more on that in a 
<br>
second) have spent a lot of time on process binding.  Intel has a very 
<br>
rich set of options.  I don't know if that's because of demanding users 
<br>
or because of developers drinking too much Red Bull, but their options 
<br>
are much richer than ours.  So, imagine a socket that has two caches, 
<br>
with two cores per cache?  Intel allows you to control placement on this 
<br>
architecture via policy.  We don't.  So, what do our users do?  Allowing 
<br>
custom mappings remains the hammer that hammers every nail.
<br>
<p>With regards to your two questions (what do others do?  do users care?), 
<br>
I believe (FWIW) that OpenMP implementations tend to support customized 
<br>
mappings.  E.g., Oracle Solaris Studio (formerly Sun Studio), GNU 
<br>
libgomp, PGI OMP, and Intel OMP.  I think the OMP ARB is considering a 
<br>
standardized interface for binding threads, but I don't remember if it 
<br>
was for policies, customized mappings, or both.  Anyhow, custom mappings 
<br>
go even beyond just MPI.
<br>
<p>I'm sympathetic to the maintenance-cost issue.  And the current 
<br>
functionality is kind of awkward.  (Even just the name &quot;rank file&quot; is a 
<br>
puzzler.)  And it's astounding that there is such extensive 
<br>
diversification of interfaces out there among MPI and OMP 
<br>
implementations (with only Intel making any attempt to have MPI and OMP 
<br>
play well with each other).  But there is no question that customized 
<br>
binding mappings are commonplace.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>Previous message:</strong> <a href="7753.php">Graham, Richard L.: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
<li><strong>In reply to:</strong> <a href="7752.php">Jeff Squyres: "[OMPI devel] RFC: Deprecate rankfile?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7755.php">Ralph Castain: "Re: [OMPI devel] RFC: Deprecate rankfile?"</a>
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
