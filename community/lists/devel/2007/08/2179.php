<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Aug 17 08:35:09 2007" -->
<!-- isoreceived="20070817123509" -->
<!-- sent="Fri, 17 Aug 2007 08:35:00 -0400" -->
<!-- isosent="20070817123500" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881" -->
<!-- id="184DEBF3-9037-4947-A716-E7C631B6CF6F_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="200708171422.11345.stork_at_hlrs.de" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-17 08:35:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 17, 2007, at 8:22 AM, Sven Stork wrote:
<br>
<p><span class="quotelev1">&gt; What's about this. Every component choose its own tag independent  
</span><br>
<span class="quotelev1">&gt; from the
</span><br>
<span class="quotelev1">&gt; others. Before a component can use the tag it must register with  
</span><br>
<span class="quotelev1">&gt; its full
</span><br>
<span class="quotelev1">&gt; name and the tag at a small (process intern) database. If 2  
</span><br>
<span class="quotelev1">&gt; components try to
</span><br>
<span class="quotelev1">&gt; register the same tag we emit a warning, terminate the  
</span><br>
<span class="quotelev1">&gt; processes, ... .
</span><br>
<p>My knee-jerk reaction to this is: no!  How could we ship code that  
<br>
might abort?!
<br>
<p>But upon further reflection, I'm guessing that you assume that we  
<br>
would catch such tag conflicts during QA testing and therefore only  
<br>
ship components that use distinct tags.  That might be tolerable.
<br>
<p>However, it does raise another place where we would have to have  
<br>
central coordination between all MPI processes -- something we've  
<br>
actively been trying to shed for scalability reasons...
<br>
<p><span class="quotelev1">&gt; If 2 components (CompA and CompB) want to register the same tag and  
</span><br>
<span class="quotelev1">&gt; we assume
</span><br>
<span class="quotelev1">&gt; that process A loads _only_ CompA while processes B loads _only_  
</span><br>
<span class="quotelev1">&gt; CompB than
</span><br>
<span class="quotelev1">&gt; both components will be loaded without any error.
</span><br>
<span class="quotelev1">&gt; I assume that it's rather unusual that CompA send a message to  
</span><br>
<span class="quotelev1">&gt; process B as
</span><br>
<span class="quotelev1">&gt; there is no counter component. But there is still some probability.
</span><br>
<p>*Assumedly* we would never ship components that use the same tag (per  
<br>
above), but it doesn't address the possibility of 3rd party  
<br>
components, etc.
<br>
<p><span class="quotelev1">&gt; For more safety (and of course less performance) we could :
</span><br>
<span class="quotelev1">&gt; - add a parameter that cause this tag database to sync. across all  
</span><br>
<span class="quotelev1">&gt; processes.
</span><br>
<span class="quotelev1">&gt; - add a parameter that turns a check for every send/receive, if the  
</span><br>
<span class="quotelev1">&gt; specified
</span><br>
<span class="quotelev1">&gt; tag has been used or not
</span><br>
<p>Another thought (that was long-ago discarded) would be to use string  
<br>
tags.  If you follow the prefix rule, it's easy to guarantee that  
<br>
there won't be conflicts.  But:
<br>
<p>a) this is the moral equivalent of the modex -- which currently  
<br>
utilizes the one-time blast-o-gram from the HNP during MPI_INIT to do  
<br>
all the transport
<br>
<p>b) to use this for regular RML/OOB/RSL/whatever communication in the  
<br>
MPI layer would be rather expensive (which is why it was discarded)
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2180.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] [RFC] Runtime Services Layer"</a>
<li><strong>Previous message:</strong> <a href="2178.php">Jeff Squyres: "Re: [OMPI devel] [Pkg-openmpi-maintainers] Bug#435581: [uwe@hermann-uwe.de: Bug#435581: openmpi-bin: Segfault on Debian GNU/kFreeBSD]"</a>
<li><strong>In reply to:</strong> <a href="2177.php">Sven Stork: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r15881"</a>
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
