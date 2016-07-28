<?
$subject_val = "Re: [OMPI users] Question about scheduler support";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 14 18:18:01 2014" -->
<!-- isoreceived="20140514221801" -->
<!-- sent="Wed, 14 May 2014 15:16:21 -0700" -->
<!-- isosent="20140514221621" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Question about scheduler support" -->
<!-- id="A83F0F27-648B-4DE5-8B8C-3D8D174E47CB_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="77D9A9BA-2335-4B5D-B504-98A9C6A6FA67_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Question about scheduler support<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-14 18:16:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24364.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24364.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Indeed, a quick review indicates that the new policy for scheduler support was not uniformly applied. I'll update it.
<br>
<p>To reiterate: we will only build support for a scheduler if the user specifically requests it. We did this because we are increasingly seeing distros include header support for various schedulers, and so just finding the required headers isn't enough to know that the scheduler is intended for use. So we wind up building a bunch of useless modules.
<br>
<p><p>On May 14, 2014, at 3:09 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: I believe we no longer build the slurm support by default, though I'd have to check to be sure. The intent is definitely not to do so.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The plan we adjusted to a while back was to *only* build support for schedulers upon request. Can't swear that they are all correctly updated, but that was the intent.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 14, 2014, at 2:52 PM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here's a bit of our rational, from the README file:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   Note that for many of Open MPI's --with-&lt;foo&gt; options, Open MPI will,
</span><br>
<span class="quotelev2">&gt;&gt;   by default, search for header files and/or libraries for &lt;foo&gt;.  If
</span><br>
<span class="quotelev2">&gt;&gt;   the relevant files are found, Open MPI will built support for &lt;foo&gt;;
</span><br>
<span class="quotelev2">&gt;&gt;   if they are not found, Open MPI will skip building support for &lt;foo&gt;.
</span><br>
<span class="quotelev2">&gt;&gt;   However, if you specify --with-&lt;foo&gt; on the configure command line and
</span><br>
<span class="quotelev2">&gt;&gt;   Open MPI is unable to find relevant support for &lt;foo&gt;, configure will
</span><br>
<span class="quotelev2">&gt;&gt;   assume that it was unable to provide a feature that was specifically
</span><br>
<span class="quotelev2">&gt;&gt;   requested and will abort so that a human can resolve out the issue.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In some cases, we don't need header or library files.  For example, with SLURM and LSF, our native support is actually just fork/exec'ing the SLURM/LSF executables under the covers (e.g., as opposed to using rsh/ssh).  So we can basically *always* build them.  So we do.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In general, OMPI builds support for everything that it can find on the rationale that a) we can't know ahead of time exactly what people want, and b) most people want to just &quot;./configure &amp;&amp; make -j 32 install&quot; and be done with it -- so build as much as possible.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 14, 2014, at 5:31 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Gus,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Oh, I know that, what I am refering to is that slurm and loadleveler support are enabled by default, and it seems that if we're using Torque/Moab, we have no use for slurm and loadleveler support.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My point is not that it is hard to compile it with torque support, my point is that it is compiling support for many schedulers while I'm rather convinced that very few sites actually use multiple schedulers at the same time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 2014-05-14 16:51, Gus Correa a &#233;crit :
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 05/14/2014 04:25 PM, Maxime Boissonneault wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I was compiling OpenMPI 1.8.1 today and I noticed that pretty much every
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; single scheduler has its support enabled by default at configure (except
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the one I need, which is Torque). Is there a reason for that ? Why not
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; have a single scheduler enabled and require to specify it at configure
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; time ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Is there any reason for me to build with loadlever or slurm if we're
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; using torque ?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Maxime Boisssonneault
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi Maxime
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I haven't tried 1.8.1 yet.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, for all previous versions of OMPI I tried, up to 1.6.5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; all it took to configure it with Torque support was to point configure
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to the Torque installation directory (which is non-standard in my case):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --with-tm=/opt/torque/bla/bla
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My two cents,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24366.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24364.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24364.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Reply:</strong> <a href="24368.php">Ralph Castain: "Re: [OMPI users] Question about scheduler support"</a>
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
