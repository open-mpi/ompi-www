<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 17:46:27 2014" -->
<!-- isoreceived="20141016214627" -->
<!-- sent="Thu, 16 Oct 2014 17:46:21 -0400" -->
<!-- isosent="20141016214621" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="54403CAD.4080008_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20141016212817.GH55306_at_pn1246003.lanl.gov" -->
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
<strong>Date:</strong> 2014-10-16 17:46:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25519.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25517.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25515.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25519.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25519.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 10/16/2014 05:28 PM, Nathan Hjelm wrote:
<br>
<span class="quotelev1">&gt; And it doesn't support knem at this time. Probably never will because of
</span><br>
<span class="quotelev1">&gt; the existence of CMA.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Nathan
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Thanks, Nathan
<br>
<p>But for the benefit of mere mortals like me
<br>
who don't share the dark or the bright side of the force,
<br>
and just need to keep their MPI applications running in production mode,
<br>
hopefully with Open MPI 1.8,
<br>
can somebody explain more clearly what &quot;vader&quot; is about?
<br>
<p>Thank you,
<br>
Gus Correa
<br>
<p><p><span class="quotelev1">&gt; On Thu, Oct 16, 2014 at 01:49:09PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; FWIW: vader is the default in 1.8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 16, 2014, at 1:40 PM, Aur&#233;lien Bouteiller &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are you sure you are not using the vader BTL ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Setting mca_btl_base_verbose and/or sm_verbose should spit out some knem initialization info.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The CMA linux system (that ships with most 3.1x linux kernels) has similar features, and is also supported in sm.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
</span><br>
<span class="quotelev3">&gt;&gt;&gt;              ~ Research Scientist @ ICL ~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The University of Tennessee, Innovative Computing Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Le 16 oct. 2014 &#224; 16:35, Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Open MPI developers
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, I just can't keep my promises for too long ...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, here I am pestering you again, although this time
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it is not a request for more documentation.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hopefully it is something more legit.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am having trouble using knem with Open MPI 1.8.3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and need your help.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I configured Open MPI 1.8.3 with knem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I had done the same with some builds of Open MPI 1.6.5 before.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I build and launch the Intel MPI benchmarks (IMB)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with Open MPI 1.6.5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'cat /dev/knem'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; starts showing non-zero-and-growing statistics right away.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; However, when I build and launch IMB with Open MPI 1.8.3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /dev/knem shows only zeros,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; no statistics growing, nothing.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Knem just seems to be completely asleep.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, my conclusion is that somehow knem is not working with OMPI 1.8.3,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at least not for me.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; The runtime environment related to knem is setup the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; same way on both OPMI releases.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried setting it up both on the command line:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -mca btl_sm_eager_limit 32768 -mca btl_sm_knem_dma_min 1048576
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and on the MCA parameter file:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_sm_use_knem = 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_sm_eager_limit = 32768
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; btl_sm_knem_dma_min = 1048576
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and the behavior is the same (i.e., knem is active in 1.6.5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; but doesn't seem to be used by 1.8.3, as indicated by the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /dev/knem statistics.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I 'grep -i knem config.log', both 1.6.5 and 1.8.3 builds show:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; #define OMPI_BTL_SM_HAVE_KNEM 1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggesting that both configurations picked up knem correctly.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On the other hand, when I do 'ompi_info --all --all |grep knem',
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; OMPI 1.6.5 shows &quot;btl_sm_have_knem_support&quot;:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 'MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data source: default value)  Whether this component supports the knem Linux kernel module or not'
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; By contrast, in OMPI 1.8.3 ompi_info doesn't show this particular item (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; although the *other* 'btl sm knem' items are there,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; namely &quot;btl_sm_use_knem&quot;,&quot;btl_sm_knem_dma_min&quot;, &quot;btl_sm_knem_max_simultaneous&quot;.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I am scratching my head to understand why a parameter with such a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; suggestive name (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somehow vanished from ompi_info in OMPI 1.8.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Questions:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Am I doing something totally wrong,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; perhaps with the knem runtime environment?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Was knem somehow phased out in 1.8.3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Could there be a bad interaction with other runtime parameters that
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; somehow is knocking out knem in 1.8.3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (FYI, besides knem, I'm just excluding the tcp btl, binding to core, and reporting the bindings, which is exactly what I do on 1.6.5,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; although the runtime parameter syntax has changed.)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Is knem inadvertently not being activated at runtime in OMPI 1.8.3?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (i.e. a bug)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Is there a way to increase verbosity to detect if knem is being
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; used by OMPI?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That would certainly help to check what is going on.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I tried '-mca btl_base_verbose 30' but there was no trace of knem
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; in sderr/stdout of either 1.6.5 or 1.8.3.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, the evidence I have that knem is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; active in 1.6.5 but not in 1.8.3 comes only from the statistics in
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; /dev/knem.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; PS - As an aside, I also have some questions on the knem setup,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; which I mostly copied from the knem web site
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (hopefully Brice Goglin is listening ...):
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Is 32768 in 'btl_sm_eager_limit 32768' a good number,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or should it be larger/smaller/something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [OK, I know I should benchmark it, but exploring the whole parameter
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; space takes long, so why not asking? ]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - Is it worth using 'btl_sm_knem_dma_min 1048576'?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; [I think I read somewhere that this dma engine offload
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; is an Intel thing, not AMD.]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - How about btl_sm_knem_max_simultaneous?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; That one is not mentioned in the knem web site.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Should I leave it default to zero or set it to 1? 2? 4? Something else?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks again,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25511.php">http://www.open-mpi.org/community/lists/users/2014/10/25511.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25512.php">http://www.open-mpi.org/community/lists/users/2014/10/25512.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25513.php">http://www.open-mpi.org/community/lists/users/2014/10/25513.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25515.php">http://www.open-mpi.org/community/lists/users/2014/10/25515.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25519.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25517.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25515.php">Nathan Hjelm: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25519.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25519.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
