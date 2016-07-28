<?
$subject_val = "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 25 09:36:01 2010" -->
<!-- isoreceived="20100525133601" -->
<!-- sent="Tue, 25 May 2010 09:35:57 -0400" -->
<!-- isosent="20100525133557" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t" -->
<!-- id="51CE91E4-CC4C-4476-BE68-6F776BF4F003_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="Pine.GSO.4.64.1005241232210.7158_at_mikefire1.tamu.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-25 09:35:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
<li><strong>Previous message:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Maybe in reply to:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 24, 2010, at 2:02 PM, Michael E. Thomadakis wrote:
<br>
<p><span class="quotelev1">&gt; | &gt; 1) high-resolution timers: how do I specify the HRT linux timers in the
</span><br>
<span class="quotelev1">&gt; | &gt;     --with-timer=TYPE
</span><br>
<span class="quotelev1">&gt; | &gt;  line of ./configure ?
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | You shouldn't need to do anything; the &quot;linux&quot; timer component of Open MPI
</span><br>
<span class="quotelev1">&gt; | should get automatically selected.  You should be able to see this in the
</span><br>
<span class="quotelev1">&gt; | stdout of Open MPI's &quot;configure&quot;, and/or if you run ompi_info | grep timer
</span><br>
<span class="quotelev1">&gt; | -- there should only be one entry: linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If nothing is menioned, will it by default select 'linux' timers?
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; Or I have to specify in th configure
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;         --with-timer=linux ?
</span><br>
<p>Nope.  The philosophy of Open MPI is that whenever possible, we try to choose a sensible default.  It never hurts to double check, but we try to do the Right Thing whenever it's possible to automatically choose it (within reason, of course).
<br>
<p>You can also check the output of ompi_info -- ompi_info tells you lots of things about your Open MPI installation.
<br>
<p><span class="quotelev1">&gt; I actually spent some time looking around in the source trying to see which
</span><br>
<span class="quotelev1">&gt; actual timer is the base. Is this a high-resolution timer such as a POSIX
</span><br>
<span class="quotelev1">&gt; timers (timer_gettime or clock_nanosleep, etc.) or Intel processor's TSC ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am just trying to stay away from gettimeofday()
</span><br>
<p>Understood.
<br>
<p>Ugh; I just poked into the code -- it's complicated how we resolve the timer functions.  It looks like we put in the infrastructure into getting high resolution timers, but at least for Linux, we don't use it (the code falls back to gettimeofday).  It looks like we're only using the high-resolution timers on AIX (!) and Solaris.
<br>
<p>Patches would be greatly appreciated; I'd be happy to walk someone through what to do. 
<br>
<p><span class="quotelev1">&gt; | &gt; 2) I have installed blcr V0.8.2 but when I try to built OMPI and I point to the
</span><br>
<span class="quotelev1">&gt; | &gt; full installation it complains it cannot find it. Note that I build BLCR with
</span><br>
<span class="quotelev1">&gt; | &gt; GCC but I am building OMPI with Intel compilers (V11.1)
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | Can you be more specific here?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I pointed to the insatllation path for BLCR but config complained that it
</span><br>
<span class="quotelev1">&gt; couldn't find it. If BLCR is only needed for checkpoint / restart then we can
</span><br>
<span class="quotelev1">&gt; leave without it. Is BLCR needed for suspend/resume of mpi jobs ?
</span><br>
<p>You mean suspend with ctrl-Z?  If so, correct -- BLCR is *only* used for checkpoint/restart.  Ctrl-Z just uses the SIGSTP functionality.
<br>
<p><span class="quotelev1">&gt; | &gt; 4) How could I select the high-speed transport, say DAPL or OFED IB verbs ? Is
</span><br>
<span class="quotelev1">&gt; | &gt; there any preference as to the specific high-speed transport over QDR IB?
</span><br>
<span class="quotelev1">&gt; |
</span><br>
<span class="quotelev1">&gt; | openib is the preferred Open MPI plugin (the name is somewhat outdated, but
</span><br>
<span class="quotelev1">&gt; | it's modern OpenFabrics verbs -- see
</span><br>
<span class="quotelev1">&gt; | <a href="http://www.open-mpi.org/faq/?category=openfabrics#why-openib-name">http://www.open-mpi.org/faq/?category=openfabrics#why-openib-name</a>).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does this mean that the DAPL API is not suported at all or that OPMI works
</span><br>
<span class="quotelev1">&gt; better with OFED verbs?
</span><br>
<p>Sorry for not being clear.
<br>
<p>Our DAPL plugin is only supported on Solaris.  It *probably* works on Linux (the API should be the same), but we don't test it on Linux at all.  The OMPI configure script deactivates the udapl plugin on Linux by default.
<br>
<p>On Linux, DAPL is a (thin) layer over verbs, anyway, so there isn't much point in using it.  On Linux, Open MPI uses the verb (openib) plugin.  FWIW, DAPL is an abstraction layer that intentionally hides lower-layer things.  The verbs API is much more complex than DAPL and exposes a lot more information, which OMPI uses.
<br>
<p>We strongly recommend that you use the verbs (openib) plugin on Linux.
<br>
<p><span class="quotelev1">&gt; Justr as a feedback from one of the many HPC centers, for us it is most
</span><br>
<span class="quotelev1">&gt; important to have
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a) a light-weight efficient MPI stack which makes the underlying IB h/w
</span><br>
<span class="quotelev1">&gt; capabilities available and
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; b) it can smoothly cooperate withe a batch scheduler / resource manager so
</span><br>
<span class="quotelev1">&gt; that a mixture of jobs get a decent allocation of the cluster resources.
</span><br>
<p>Cools; good to know.  We try to make these things very workable in Open MPI -- it's been a goal from day 1 to integrate with job schedulers, etc.  And without high performance, we wouldn't have much to talk about.
<br>
<p>Please be sure to let us know of questions / problems / etc.  I admit that we're sometimes a little slow to answer on the users list, but we do the best we can.  So don't hesitate to bump us if we don't reply.
<br>
<p>Thanks!
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13161.php">Richard Treumann: "Re: [OMPI users] About the necessity of cancelation of pending	communication and the use of buffer"</a>
<li><strong>Previous message:</strong> <a href="13159.php">Fernando Lemos: "Re: [OMPI users] About the necessity of cancelation of pending communication and the use of buffer"</a>
<li><strong>Maybe in reply to:</strong> <a href="13091.php">Michael E. Thomadakis: "[OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13164.php">Josh Hursey: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
<li><strong>Reply:</strong> <a href="13167.php">Michael E. Thomadakis: "Re: [OMPI users] Some Questions on Building OMPI on Linux Em64t"</a>
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
