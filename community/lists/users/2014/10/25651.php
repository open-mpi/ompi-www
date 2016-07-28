<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 30 19:47:27 2014" -->
<!-- isoreceived="20141030234727" -->
<!-- sent="Thu, 30 Oct 2014 19:47:21 -0400" -->
<!-- isosent="20141030234721" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="5452CE09.5090801_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="F92E84F5-4973-47AE-A260-C495DA85000E_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] knem in Open MPI 1.8.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-30 19:47:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25652.php">Marshall Ward: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Previous message:</strong> <a href="25650.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25650.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25653.php">Brice Goglin: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/30/2014 07:32 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Just for FYI: I believe Nathan misspoke.
</span><br>
<span class="quotelev1">&gt; The new capability is in 1.8.4, which I hope
</span><br>
<span class="quotelev1">&gt; to release next Friday (Nov 7th)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi Ralph
<br>
<p>That is even better!
<br>
Look forward to OMPI 1.8.4.
<br>
<p>I still would love to hear from Nathan / OMPI team
<br>
about my remaining questions below
<br>
(specially the 12 vader parameters).
<br>
<p>Many thanks,
<br>
Gus Correa
<br>
<p><span class="quotelev2">&gt;&gt; On Oct 30, 2014, at 4:24 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Nathan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for addressing this problem.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I read your notes on Jeff's blog about vader,
</span><br>
<span class="quotelev2">&gt;&gt; and that clarified many things that were obscure to me
</span><br>
<span class="quotelev2">&gt;&gt; when I first started this thread
</span><br>
<span class="quotelev2">&gt;&gt; whining that knem was not working in OMPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt; Thank you also for writing that blog post,
</span><br>
<span class="quotelev2">&gt;&gt; and for sending the link to it.
</span><br>
<span class="quotelev2">&gt;&gt; That was very helpful indeed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As your closing comments on the blog post point out,
</span><br>
<span class="quotelev2">&gt;&gt; and your IMB benchmark graphs of pingpong/latency &amp;
</span><br>
<span class="quotelev2">&gt;&gt; sendrecv/bandwidth show,
</span><br>
<span class="quotelev2">&gt;&gt; vader+xpmem outperforms the other combinations
</span><br>
<span class="quotelev2">&gt;&gt; of btl+memory_copy_mechanism of intra-node communication.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For the benefit of pedestrian OpenMPI users like me:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) What is the status of xpmem in the Linux world at this point?
</span><br>
<span class="quotelev2">&gt;&gt; [Proprietary (SGI?) / open source, part of the Linux kernel (which),
</span><br>
<span class="quotelev2">&gt;&gt; part of standard distributions (which) ?]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Any recommendation for the values of the
</span><br>
<span class="quotelev2">&gt;&gt; various vader btl parameters?
</span><br>
<span class="quotelev2">&gt;&gt; [There are 12 of them in OMPI 1.8.3!
</span><br>
<span class="quotelev2">&gt;&gt; That is real challenge to get right.]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Which values did you use in your benchmarks?
</span><br>
<span class="quotelev2">&gt;&gt; Defaults?
</span><br>
<span class="quotelev2">&gt;&gt; Other?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In particular, is there an optimal value for the eager/rendevous threshold value? (btl_vader_eager_limit, default=4kB)
</span><br>
<span class="quotelev2">&gt;&gt; [The INRIA web site suggests 32kB for the sm+knem counterpart (btl_sm_eager_limit, default=4kB).]
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) Did I understand it right, that the upcoming OpenMPI 1.8.5
</span><br>
<span class="quotelev2">&gt;&gt; can be configured with more than one memory copy mechanism altogether
</span><br>
<span class="quotelev2">&gt;&gt; (e.g. --with-knem and --with-cma and --with-xpmem),
</span><br>
<span class="quotelev2">&gt;&gt; then select one of them at runtime with the btl_vader_single_copy_mechanism parameter?
</span><br>
<span class="quotelev2">&gt;&gt; Or must OMPI be configured with only one memory copy mechanism?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Many thanks,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/30/2014 05:44 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to close the loop on this issue. 1.8.5 will address it in several
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ways:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - knem support in btl/sm has been fixed. A sanity check was disabling
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     knem during component registration. I wrote the sanity check before
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     the 1.7 release and didn't intend this side-effect.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   - vader now supports xpmem, cma, and knem. The best available
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     single-copy mechanism will be used. If multiple single-copy
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     mechanisms are available you can select which one you want to use are
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     runtime.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; More about the vader btl can be found here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy/">http://blogs.cisco.com/performance/the-vader-shared-memory-transport-in-open-mpi-now-featuring-3-flavors-of-zero-copy/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev3">&gt;&gt;&gt; HPC-5, LANL
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Fri, Oct 17, 2014 at 01:02:23PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       On Oct 17, 2014, at 12:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Hi Jeff
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Many thanks for looking into this and filing a bug report at 11:16PM!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Thanks to Aurelien, Ralph and Nathan for their help and clarifications
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       also.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Related suggestion:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Add a note to the FAQ explaining that in OMPI 1.8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       the new (default) btl is vader (and what it is).
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       It was a real surprise to me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       If Aurelien Bouteiller didn't tell me about vader,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       I might have never realized it even existed.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       That could be part of one of the already existent FAQs
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       explaining how to select the btl.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       **
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Doubts (btl in OMPI 1.8):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       I still don't understand clearly the meaning and scope of vader
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       being a &quot;default btl&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     We mean that it has a higher priority than the other shared memory
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     implementation, and so it will be used for intra-node messaging by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     default.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Which is the scope of this default: intra-node btl only perhaps?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Yes - strictly intra-node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Was there a default btl before vader, and which?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     The &quot;sm&quot; btl was the default shared memory transport before vader
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Is vader the intra-node default only (i.e. replaces sm  by default),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Yes
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       or does it somehow extend beyond node boundaries, and replaces (or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       brings in) network btls (openib,tcp,etc) ?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Nope - just intra-node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       If I am running on several nodes, and want to use openib, not tcp,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       and, say, use vader, what is the right syntax?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       * nothing (OMPI will figure it out ... but what if you have
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       IB,Ethernet,Myrinet,OpenGM, altogether?)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     If you have higher-speed connections, we will pick the fastest for
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     inter-node messaging as the &quot;default&quot; since we expect you would want the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     fastest possible transport.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       * -mca btl openib (and vader will come along automatically)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     Among the ones you show, this would indeed be the likely choices (openib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     and vader)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       * -mca btl openib,self (and vader will come along automatically)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;     The &quot;self&quot; btl is *always* active as the loopback transport
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       * -mca btl openib,self,vader (because vader is default only for 1-node
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       jobs)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       * something else (or several alternatives)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Whatever happened to the &quot;self&quot; btl in this new context?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Gone? Still there?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Many thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       On 10/16/2014 11:16 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         On Oct 16, 2014, at 1:35 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           and on the MCA parameter file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           btl_sm_use_knem = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         I think the logic enforcing this MCA param got broken when we revamped
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         the MCA param system.  :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           I am scratching my head to understand why a parameter with such a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           suggestive name (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;           somehow vanished from ompi_info in OMPI 1.8.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         It looks like this MCA param was also dropped when we revamped the MCA
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         system.  Doh!  :-(
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         There's some deep mojo going on that is somehow causing knem to not be
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         used; I'm too tired to understand the logic right now.  I just opened
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         <a href="https://github.com/open-mpi/ompi/issues/239">https://github.com/open-mpi/ompi/issues/239</a> to track this issue --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;         feel free to subscribe to the issue to get updates.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25652.php">Marshall Ward: "Re: [OMPI users] large memory usage and hangs when preconnecting beyond 1000 cpus"</a>
<li><strong>Previous message:</strong> <a href="25650.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25650.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25653.php">Brice Goglin: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
