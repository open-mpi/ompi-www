<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 19:54:34 2014" -->
<!-- isoreceived="20141016235434" -->
<!-- sent="Thu, 16 Oct 2014 19:54:28 -0400" -->
<!-- isosent="20141016235428" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="54405AB4.2020205_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="424E87A0-ACED-447C-9A96-572AB7E30238_at_open-mpi.org" -->
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
<strong>Date:</strong> 2014-10-16 19:54:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25524.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25520.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25517.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph
<br>
<p>I have clusters with CentOS 6.4, 6.5, and 5.5.
<br>
<p>OK, completing my table (ran on CentOS 6.4):
<br>
<p>#bytes #repetitions      t[usec]   Mbytes/sec
<br>
262144          160        48.04      5203.93 :OMPI 1.6.5+knem
<br>
262144          160        63.72      3923.30 :OMPI 1.8.3+vader
<br>
262144          160        67.00      3731.34 :OMPI 1.8.3+sm+knem_broken
<br>
<p>Indeed, as you said, in 1.8.3 vader is faster than sm (lines 2 an 3).
<br>
However, 1.6.5+knem still beats the crap on both (line 1).
<br>
Anyway, as others have said, vader needs the CMA thing,
<br>
kernel 3.X, etc, which I don't have, so comparing knem with
<br>
vader-less-the-support-it-requires is bogus.
<br>
<p>Nevertheless, I would guess I am not the only one to live
<br>
in a kernel 2.6.Z world, hence still need knem support.
<br>
<p>It would be great if the knem functionality could be restored to
<br>
OMPI 1.8.
<br>
<p>Many thanks,
<br>
Gus
<br>
<p>On 10/16/2014 07:13 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; You probably have this somewhere below, but what OS are you running?
</span><br>
I have CentOS6, and vader works fine for me and is much faster than the
<br>
sm btl.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can certainly ask to see if someone has time to fix the knem support -
</span><br>
if they do, we would definitely include the fix in the 1.8 series.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 16, 2014, at 4:06 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Back to the original issue of knem in Open MPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt; It really seems to be broken.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I launched the Intel MPI benchmarks (IMB) job both with
</span><br>
<span class="quotelev2">&gt;&gt; '-mca btl ^vader,tcp', and with '-mca btl sm,self,openib'.
</span><br>
<span class="quotelev2">&gt;&gt; Both syntaxes seem to have turned off vader (along with tcp),
</span><br>
<span class="quotelev2">&gt;&gt; as shown in stderr by messages like this
</span><br>
<span class="quotelev2">&gt;&gt; (I also used -mca btl_base_verbose 30):
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; [1,11]&lt;stddiag&gt;:[node26:13439] mca: bml: Using sm btl to [[39251,1],0] on node node26
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *However*, in both cases /dev/knem continues to *show only zeros*.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My conclusion is that the knem seems not to be working
</span><br>
<span class="quotelev2">&gt;&gt; at all in OMPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That is a real pity, because without knem performance really suffers.
</span><br>
<span class="quotelev2">&gt;&gt; I took a quick look at the Intel MPI benchmarks output
</span><br>
<span class="quotelev2">&gt;&gt; using OMPI 1.6.5 with knem, and OMPI 1.8.5 where knem doesn't work (despite my attempts to make it work).
</span><br>
<span class="quotelev2">&gt;&gt; The older OMPI with knem shows very good speedups.
</span><br>
<span class="quotelev2">&gt;&gt; For instance, ping-pong on two processors, message size 256kB,
</span><br>
<span class="quotelev2">&gt;&gt; OMPI 1.6.5+knem has a ~32% speeedup w.r.t. OMPI 1.8.3.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #bytes #repetitions      t[usec]   Mbytes/sec
</span><br>
<span class="quotelev2">&gt;&gt; 262144          160        48.04      5203.93 (OMPI 1.6.5 + knem)
</span><br>
<span class="quotelev2">&gt;&gt; 262144          160        63.72      3923.30 (OMPI 1.8.3, broken knem)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Numbers like these don't give me any incentive to upgrade
</span><br>
<span class="quotelev2">&gt;&gt; our production codes to OMPI 1.8.
</span><br>
<span class="quotelev2">&gt;&gt; Will this be fixed in the next Open MPI 1.8 release?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; PS - Many thanks to Aurelien Boutelier for pointing out the existence
</span><br>
<span class="quotelev2">&gt;&gt; of the vader btl.  Without his tip I would still be in the dark side.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On 10/16/2014 05:46 PM, Gus Correa wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 10/16/2014 05:28 PM, Nathan Hjelm wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; And it doesn't support knem at this time. Probably never will because of
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the existence of CMA.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks, Nathan
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But for the benefit of mere mortals like me
</span><br>
<span class="quotelev3">&gt;&gt;&gt; who don't share the dark or the bright side of the force,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and just need to keep their MPI applications running in production mode,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hopefully with Open MPI 1.8,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; can somebody explain more clearly what &quot;vader&quot; is about?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Thu, Oct 16, 2014 at 01:49:09PM -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; FWIW: vader is the default in 1.8
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 16, 2014, at 1:40 PM, Aur&#233;lien Bouteiller
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &lt;bouteill_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Are you sure you are not using the vader BTL ?
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Setting mca_btl_base_verbose and/or sm_verbose should spit out some
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; knem initialization info.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The CMA linux system (that ships with most 3.1x linux kernels) has
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; similar features, and is also supported in sm.
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Aurelien
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;           ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;              ~ Research Scientist @ ICL ~
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; The University of Tennessee, Innovative Computing Laboratory
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; 1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Le 16 oct. 2014 &#224; 16:35, Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Dear Open MPI developers
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Well, I just can't keep my promises for too long ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, here I am pestering you again, although this time
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; it is not a request for more documentation.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Hopefully it is something more legit.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am having trouble using knem with Open MPI 1.8.3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and need your help.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I configured Open MPI 1.8.3 with knem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I had done the same with some builds of Open MPI 1.6.5 before.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I build and launch the Intel MPI benchmarks (IMB)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; with Open MPI 1.6.5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'cat /dev/knem'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; starts showing non-zero-and-growing statistics right away.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; However, when I build and launch IMB with Open MPI 1.8.3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /dev/knem shows only zeros,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; no statistics growing, nothing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Knem just seems to be completely asleep.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, my conclusion is that somehow knem is not working with OMPI 1.8.3,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; at least not for me.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; The runtime environment related to knem is setup the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; same way on both OPMI releases.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried setting it up both on the command line:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; -mca btl_sm_eager_limit 32768 -mca btl_sm_knem_dma_min 1048576
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and on the MCA parameter file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_sm_use_knem = 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_sm_eager_limit = 32768
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; btl_sm_knem_dma_min = 1048576
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; and the behavior is the same (i.e., knem is active in 1.6.5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; but doesn't seem to be used by 1.8.3, as indicated by the
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /dev/knem statistics.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; When I 'grep -i knem config.log', both 1.6.5 and 1.8.3 builds show:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; #define OMPI_BTL_SM_HAVE_KNEM 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; suggesting that both configurations picked up knem correctly.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; On the other hand, when I do 'ompi_info --all --all |grep knem',
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; OMPI 1.6.5 shows &quot;btl_sm_have_knem_support&quot;:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; 'MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; source: default value)  Whether this component supports the knem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Linux kernel module or not'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; By contrast, in OMPI 1.8.3 ompi_info doesn't show this particular
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; item (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; although the *other* 'btl sm knem' items are there,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; namely &quot;btl_sm_use_knem&quot;,&quot;btl_sm_knem_dma_min&quot;,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; &quot;btl_sm_knem_max_simultaneous&quot;.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I am scratching my head to understand why a parameter with such a
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; suggestive name (&quot;btl_sm_have_knem_support&quot;),
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; somehow vanished from ompi_info in OMPI 1.8.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Questions:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Am I doing something totally wrong,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; perhaps with the knem runtime environment?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Was knem somehow phased out in 1.8.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Could there be a bad interaction with other runtime parameters that
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; somehow is knocking out knem in 1.8.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (FYI, besides knem, I'm just excluding the tcp btl, binding to
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; core, and reporting the bindings, which is exactly what I do on 1.6.5,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; although the runtime parameter syntax has changed.)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Is knem inadvertently not being activated at runtime in OMPI 1.8.3?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (i.e. a bug)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Is there a way to increase verbosity to detect if knem is being
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; used by OMPI?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That would certainly help to check what is going on.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; I tried '-mca btl_base_verbose 30' but there was no trace of knem
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; in sderr/stdout of either 1.6.5 or 1.8.3.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; So, the evidence I have that knem is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; active in 1.6.5 but not in 1.8.3 comes only from the statistics in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; /dev/knem.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thank you,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; ***
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; PS - As an aside, I also have some questions on the knem setup,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; which I mostly copied from the knem web site
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; (hopefully Brice Goglin is listening ...):
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Is 32768 in 'btl_sm_eager_limit 32768' a good number,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; or should it be larger/smaller/something else?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [OK, I know I should benchmark it, but exploring the whole parameter
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; space takes long, so why not asking? ]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - Is it worth using 'btl_sm_knem_dma_min 1048576'?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; [I think I read somewhere that this dma engine offload
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; is an Intel thing, not AMD.]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; - How about btl_sm_knem_max_simultaneous?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; That one is not mentioned in the knem web site.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Should I leave it default to zero or set it to 1? 2? 4? Something
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; else?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25511.php">http://www.open-mpi.org/community/lists/users/2014/10/25511.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25512.php">http://www.open-mpi.org/community/lists/users/2014/10/25512.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25513.php">http://www.open-mpi.org/community/lists/users/2014/10/25513.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25515.php">http://www.open-mpi.org/community/lists/users/2014/10/25515.php</a>
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
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25518.php">http://www.open-mpi.org/community/lists/users/2014/10/25518.php</a>
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25519.php">http://www.open-mpi.org/community/lists/users/2014/10/25519.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25520.php">http://www.open-mpi.org/community/lists/users/2014/10/25520.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25524.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25522.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25520.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25517.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
