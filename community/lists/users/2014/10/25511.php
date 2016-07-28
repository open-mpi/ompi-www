<?
$subject_val = "[OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 16:35:10 2014" -->
<!-- isoreceived="20141016203510" -->
<!-- sent="Thu, 16 Oct 2014 16:35:03 -0400" -->
<!-- isosent="20141016203503" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="[OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="54402BF7.30603_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] knem in Open MPI 1.8.3<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 16:35:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25512.php">Aurélien Bouteiller: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25512.php">Aurélien Bouteiller: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25512.php">Aurélien Bouteiller: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Open MPI developers
<br>
<p>Well, I just can't keep my promises for too long ...
<br>
So, here I am pestering you again, although this time
<br>
it is not a request for more documentation.
<br>
Hopefully it is something more legit.
<br>
<p>I am having trouble using knem with Open MPI 1.8.3,
<br>
and need your help.
<br>
<p>I configured Open MPI 1.8.3 with knem.
<br>
I had done the same with some builds of Open MPI 1.6.5 before.
<br>
<p>When I build and launch the Intel MPI benchmarks (IMB)
<br>
with Open MPI 1.6.5,
<br>
'cat /dev/knem'
<br>
starts showing non-zero-and-growing statistics right away.
<br>
<p>However, when I build and launch IMB with Open MPI 1.8.3,
<br>
/dev/knem shows only zeros,
<br>
no statistics growing, nothing.
<br>
Knem just seems to be completely asleep.
<br>
<p>So, my conclusion is that somehow knem is not working with OMPI 1.8.3,
<br>
at least not for me.
<br>
<p>***
<br>
<p>The runtime environment related to knem is setup the
<br>
same way on both OPMI releases.
<br>
I tried setting it up both on the command line:
<br>
<p>-mca btl_sm_eager_limit 32768 -mca btl_sm_knem_dma_min 1048576
<br>
<p>and on the MCA parameter file:
<br>
<p>btl_sm_use_knem = 1
<br>
btl_sm_eager_limit = 32768
<br>
btl_sm_knem_dma_min = 1048576
<br>
<p>and the behavior is the same (i.e., knem is active in 1.6.5,
<br>
but doesn't seem to be used by 1.8.3, as indicated by the
<br>
/dev/knem statistics.)
<br>
<p>***
<br>
<p>When I 'grep -i knem config.log', both 1.6.5 and 1.8.3 builds show:
<br>
<p>#define OMPI_BTL_SM_HAVE_KNEM 1
<br>
<p>suggesting that both configurations picked up knem correctly.
<br>
<p>On the other hand, when I do 'ompi_info --all --all |grep knem',
<br>
OMPI 1.6.5 shows &quot;btl_sm_have_knem_support&quot;:
<br>
<p>'MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data 
<br>
source: default value)  Whether this component supports the knem Linux 
<br>
kernel module or not'
<br>
<p>By contrast, in OMPI 1.8.3 ompi_info doesn't show this particular item 
<br>
(&quot;btl_sm_have_knem_support&quot;),
<br>
although the *other* 'btl sm knem' items are there,
<br>
namely &quot;btl_sm_use_knem&quot;,&quot;btl_sm_knem_dma_min&quot;, 
<br>
&quot;btl_sm_knem_max_simultaneous&quot;.
<br>
<p>I am scratching my head to understand why a parameter with such a
<br>
suggestive name (&quot;btl_sm_have_knem_support&quot;),
<br>
so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
<br>
somehow vanished from ompi_info in OMPI 1.8.3.
<br>
<p>***
<br>
<p>Questions:
<br>
<p>- Am I doing something totally wrong,
<br>
perhaps with the knem runtime environment?
<br>
<p>- Was knem somehow phased out in 1.8.3?
<br>
<p>- Could there be a bad interaction with other runtime parameters that
<br>
somehow is knocking out knem in 1.8.3?
<br>
(FYI, besides knem, I'm just excluding the tcp btl, binding to core, and 
<br>
reporting the bindings, which is exactly what I do on 1.6.5,
<br>
although the runtime parameter syntax has changed.)
<br>
<p>- Is knem inadvertently not being activated at runtime in OMPI 1.8.3?
<br>
(i.e. a bug)
<br>
<p>- Is there a way to increase verbosity to detect if knem is being
<br>
used by OMPI?
<br>
That would certainly help to check what is going on.
<br>
I tried '-mca btl_base_verbose 30' but there was no trace of knem
<br>
in sderr/stdout of either 1.6.5 or 1.8.3.
<br>
So, the evidence I have that knem is
<br>
active in 1.6.5 but not in 1.8.3 comes only from the statistics in
<br>
/dev/knem.
<br>
<p>***
<br>
<p><p>Thank you,
<br>
Gus Correa
<br>
<p>***
<br>
<p>PS - As an aside, I also have some questions on the knem setup,
<br>
which I mostly copied from the knem web site
<br>
(hopefully Brice Goglin is listening ...):
<br>
<p>- Is 32768 in 'btl_sm_eager_limit 32768' a good number,
<br>
or should it be larger/smaller/something else?
<br>
[OK, I know I should benchmark it, but exploring the whole parameter
<br>
space takes long, so why not asking? ]
<br>
<p>- Is it worth using 'btl_sm_knem_dma_min 1048576'?
<br>
[I think I read somewhere that this dma engine offload
<br>
is an Intel thing, not AMD.]
<br>
<p>- How about btl_sm_knem_max_simultaneous?
<br>
That one is not mentioned in the knem web site.
<br>
Should I leave it default to zero or set it to 1? 2? 4? Something else?
<br>
<p><p>Thanks again,
<br>
Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25512.php">Aurélien Bouteiller: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25510.php">Ralph Castain: "Re: [OMPI users] Open MPI 1.8.3 openmpi-mca-params.conf: old and new parameters"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25512.php">Aurélien Bouteiller: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25512.php">Aurélien Bouteiller: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25525.php">Jeff Squyres (jsquyres): "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
