<?
$subject_val = "Re: [OMPI users] knem in Open MPI 1.8.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct 16 16:40:50 2014" -->
<!-- isoreceived="20141016204050" -->
<!-- sent="Thu, 16 Oct 2014 16:40:46 -0400" -->
<!-- isosent="20141016204046" -->
<!-- name="Aur&#233;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] knem in Open MPI 1.8.3" -->
<!-- id="1DE10DBF-B6BE-4506-8471-380D7F847AE9_at_icl.utk.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54402BF7.30603_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Aur&#233;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-16 16:40:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25513.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25511.php">Gus Correa: "[OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25511.php">Gus Correa: "[OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25513.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25513.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25514.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Are you sure you are not using the vader BTL ? 
<br>
<p>Setting mca_btl_base_verbose and/or sm_verbose should spit out some knem initialization info. 
<br>
<p>The CMA linux system (that ships with most 3.1x linux kernels) has similar features, and is also supported in sm.
<br>
<p>Aurelien
<br>
<pre>
--
          ~~~ Aur&#233;lien Bouteiller, Ph.D. ~~~
             ~ Research Scientist @ ICL ~
The University of Tennessee, Innovative Computing Laboratory
1122 Volunteer Blvd, suite 309, Knoxville, TN 37996
tel: +1 (865) 974-9375       fax: +1 (865) 974-8296
<a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
Le 16 oct. 2014 &#224; 16:35, Gus Correa &lt;gus_at_[hidden]&gt; a &#233;crit :
&gt; Dear Open MPI developers
&gt; 
&gt; Well, I just can't keep my promises for too long ...
&gt; So, here I am pestering you again, although this time
&gt; it is not a request for more documentation.
&gt; Hopefully it is something more legit.
&gt; 
&gt; I am having trouble using knem with Open MPI 1.8.3,
&gt; and need your help.
&gt; 
&gt; I configured Open MPI 1.8.3 with knem.
&gt; I had done the same with some builds of Open MPI 1.6.5 before.
&gt; 
&gt; When I build and launch the Intel MPI benchmarks (IMB)
&gt; with Open MPI 1.6.5,
&gt; 'cat /dev/knem'
&gt; starts showing non-zero-and-growing statistics right away.
&gt; 
&gt; However, when I build and launch IMB with Open MPI 1.8.3,
&gt; /dev/knem shows only zeros,
&gt; no statistics growing, nothing.
&gt; Knem just seems to be completely asleep.
&gt; 
&gt; So, my conclusion is that somehow knem is not working with OMPI 1.8.3,
&gt; at least not for me.
&gt; 
&gt; ***
&gt; 
&gt; The runtime environment related to knem is setup the
&gt; same way on both OPMI releases.
&gt; I tried setting it up both on the command line:
&gt; 
&gt; -mca btl_sm_eager_limit 32768 -mca btl_sm_knem_dma_min 1048576
&gt; 
&gt; and on the MCA parameter file:
&gt; 
&gt; btl_sm_use_knem = 1
&gt; btl_sm_eager_limit = 32768
&gt; btl_sm_knem_dma_min = 1048576
&gt; 
&gt; and the behavior is the same (i.e., knem is active in 1.6.5,
&gt; but doesn't seem to be used by 1.8.3, as indicated by the
&gt; /dev/knem statistics.)
&gt; 
&gt; ***
&gt; 
&gt; When I 'grep -i knem config.log', both 1.6.5 and 1.8.3 builds show:
&gt; 
&gt; #define OMPI_BTL_SM_HAVE_KNEM 1
&gt; 
&gt; suggesting that both configurations picked up knem correctly.
&gt; 
&gt; On the other hand, when I do 'ompi_info --all --all |grep knem',
&gt; OMPI 1.6.5 shows &quot;btl_sm_have_knem_support&quot;:
&gt; 
&gt; 'MCA btl: information &quot;btl_sm_have_knem_support&quot; (value: &lt;1&gt;, data source: default value)  Whether this component supports the knem Linux kernel module or not'
&gt; 
&gt; By contrast, in OMPI 1.8.3 ompi_info doesn't show this particular item (&quot;btl_sm_have_knem_support&quot;),
&gt; although the *other* 'btl sm knem' items are there,
&gt; namely &quot;btl_sm_use_knem&quot;,&quot;btl_sm_knem_dma_min&quot;, &quot;btl_sm_knem_max_simultaneous&quot;.
&gt; 
&gt; I am scratching my head to understand why a parameter with such a
&gt; suggestive name (&quot;btl_sm_have_knem_support&quot;),
&gt; so similar to the OMPI_BTL_SM_HAVE_KNEM cpp macro,
&gt; somehow vanished from ompi_info in OMPI 1.8.3.
&gt; 
&gt; ***
&gt; 
&gt; Questions:
&gt; 
&gt; - Am I doing something totally wrong,
&gt; perhaps with the knem runtime environment?
&gt; 
&gt; - Was knem somehow phased out in 1.8.3?
&gt; 
&gt; - Could there be a bad interaction with other runtime parameters that
&gt; somehow is knocking out knem in 1.8.3?
&gt; (FYI, besides knem, I'm just excluding the tcp btl, binding to core, and reporting the bindings, which is exactly what I do on 1.6.5,
&gt; although the runtime parameter syntax has changed.)
&gt; 
&gt; - Is knem inadvertently not being activated at runtime in OMPI 1.8.3?
&gt; (i.e. a bug)
&gt; 
&gt; - Is there a way to increase verbosity to detect if knem is being
&gt; used by OMPI?
&gt; That would certainly help to check what is going on.
&gt; I tried '-mca btl_base_verbose 30' but there was no trace of knem
&gt; in sderr/stdout of either 1.6.5 or 1.8.3.
&gt; So, the evidence I have that knem is
&gt; active in 1.6.5 but not in 1.8.3 comes only from the statistics in
&gt; /dev/knem.
&gt; 
&gt; ***
&gt; 
&gt; 
&gt; Thank you,
&gt; Gus Correa
&gt; 
&gt; ***
&gt; 
&gt; PS - As an aside, I also have some questions on the knem setup,
&gt; which I mostly copied from the knem web site
&gt; (hopefully Brice Goglin is listening ...):
&gt; 
&gt; - Is 32768 in 'btl_sm_eager_limit 32768' a good number,
&gt; or should it be larger/smaller/something else?
&gt; [OK, I know I should benchmark it, but exploring the whole parameter
&gt; space takes long, so why not asking? ]
&gt; 
&gt; - Is it worth using 'btl_sm_knem_dma_min 1048576'?
&gt; [I think I read somewhere that this dma engine offload
&gt; is an Intel thing, not AMD.]
&gt; 
&gt; - How about btl_sm_knem_max_simultaneous?
&gt; That one is not mentioned in the knem web site.
&gt; Should I leave it default to zero or set it to 1? 2? 4? Something else?
&gt; 
&gt; 
&gt; Thanks again,
&gt; Gus Correa
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/10/25511.php">http://www.open-mpi.org/community/lists/users/2014/10/25511.php</a>

</pre>
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25512/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25513.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Previous message:</strong> <a href="25511.php">Gus Correa: "[OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>In reply to:</strong> <a href="25511.php">Gus Correa: "[OMPI users] knem in Open MPI 1.8.3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25513.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25513.php">Ralph Castain: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
<li><strong>Reply:</strong> <a href="25514.php">Gus Correa: "Re: [OMPI users] knem in Open MPI 1.8.3"</a>
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
