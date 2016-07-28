<?
$subject_val = "Re: [OMPI devel] Changing BTLs at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 25 15:32:34 2010" -->
<!-- isoreceived="20100325193234" -->
<!-- sent="Thu, 25 Mar 2010 15:32:28 -0400" -->
<!-- isosent="20100325193228" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changing BTLs at runtime" -->
<!-- id="1328AFAE-B433-488F-9AB4-0345D9E607C9_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BA875AA.6030402_at_upb.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Changing BTLs at runtime<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-25 15:32:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7662.php">luyang dong: "[OMPI devel] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="7660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="7650.php">Christoph Konersmann: "[OMPI devel] Changing BTLs at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7666.php">Christoph Konersmann: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 23, 2010, at 4:02 AM, Christoph Konersmann wrote:
<br>
<p><span class="quotelev1">&gt; It was long ago where I've asked about hints to implement a dynamic BTL
</span><br>
<span class="quotelev1">&gt; control. I've currently managed to change the MPI communication path
</span><br>
<span class="quotelev1">&gt; from a BTL module (e.g. openib) to another BTL module (e.g. tcp) at
</span><br>
<span class="quotelev1">&gt; runtime of a distributed application.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For this I've developed a so called BTL Control Client (orte-btlctl) to
</span><br>
<span class="quotelev1">&gt; send control messages to all processes through the ORTE RML.
</span><br>
<p>Cool!  
<br>
<p>FWIW, you might want to name it ompi-btlctl.  ORTE is our run-time layer and has no knowledge of the BTL's.
<br>
<p><span class="quotelev1">&gt; These
</span><br>
<span class="quotelev1">&gt; messages are received and processed in the OMPI BML. In BML I've
</span><br>
<span class="quotelev1">&gt; implemented a function to stop the MPI communication and another for
</span><br>
<span class="quotelev1">&gt; changing the BTL exclusivity and recalculating the btl_{send,eager,rdma}
</span><br>
<span class="quotelev1">&gt; lists. All is done at runtime so a distributed application running with
</span><br>
<span class="quotelev1">&gt; Open MPI is not affected in its computation.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also managed to unload a module not used anymore, e.g. openib after
</span><br>
<span class="quotelev1">&gt; changing the MPI communication to tcp, through the already implemented
</span><br>
<span class="quotelev1">&gt; function mca_bml_r2_del_btl(mca_btl_base_module_t* btl).
</span><br>
<p>Sounds great!
<br>
<p><span class="quotelev1">&gt; The Question:
</span><br>
<span class="quotelev1">&gt; The function to (re)initialise a BTL module
</span><br>
<span class="quotelev1">&gt; &quot;mca_bml_r2_add_btl(mca_btl_base_module_t* btl)&quot; is currently not
</span><br>
<span class="quotelev1">&gt; implemented. Why is it not implemented? And what has to be done if I
</span><br>
<span class="quotelev1">&gt; want to implement it?
</span><br>
<p>I'm actually not sure -- this is not an area of the code where I am an expert...
<br>
<p>It looks like the r2 proc_add is calling the internal function add_btls (plural).  I don't know where in the code base calls bml.add_btl...?  (does anywhere call it?)  It may have been planned but then never used...?
<br>
<p><span class="quotelev1">&gt; As far as I understood the internals of the OMPI Layer, for adding a BTL
</span><br>
<span class="quotelev1">&gt; module you have to implement the following steps:
</span><br>
<span class="quotelev1">&gt; 1. find the corresponding component in mca_btl_base_components_opened
</span><br>
<span class="quotelev1">&gt; 2. Do component-&gt;btl_init to get an array of BTL modules
</span><br>
<span class="quotelev1">&gt; 3. and add those to mca_btl_base_modules_initialized
</span><br>
<span class="quotelev1">&gt; 4. Iterate through mca_btl_base_modules_initialized and add BTL module
</span><br>
<span class="quotelev1">&gt; to mca_bml_r2.btl_modules in bml_r2
</span><br>
<span class="quotelev1">&gt; 5. Add BTL module to btl_{send,eager,rdma} (if applicable) for all
</span><br>
<span class="quotelev1">&gt; reachable procs
</span><br>
<p>This *sounds* right, but again, I'm not the expert in this part of the code base.
<br>
<p><span class="quotelev1">&gt; The Background:
</span><br>
<span class="quotelev1">&gt; I should give some background, why I'm implementing this. Changing the
</span><br>
<span class="quotelev1">&gt; MPI communication from a high speed network to a network with
</span><br>
<span class="quotelev1">&gt; flowcontrol (openib-&gt;tcp) is necessary for checkpointing distributed
</span><br>
<span class="quotelev1">&gt; applications in virtual machines. Ok, you are able to checkpoint through
</span><br>
<span class="quotelev1">&gt; the FT-Framework and BLCR in Open MPI, but virtual machines already
</span><br>
<span class="quotelev1">&gt; provide trivial functions for checkpointing. As you are not able to
</span><br>
<span class="quotelev1">&gt; checkpoint the hardware information of e.g. openib you have to get rid
</span><br>
<span class="quotelev1">&gt; of it in case of a checkpoint, and change back again on resume/continue.
</span><br>
<p>I'm not quite sure I understand.  I can see how the original model of CRS and SNAPC don't quite fit that of VM's, but I don't quite understand what switching openib -&gt; tcp and then later tcp -&gt; openib gives you...?
<br>
<p>Can't you just quiesce the openib BTL, let the VM checkpoint, and then resume with openib?  (or whatever other non TCP/sm BTL you want)
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
<li><strong>Next message:</strong> <a href="7662.php">luyang dong: "[OMPI devel] process migration on openmpi"</a>
<li><strong>Previous message:</strong> <a href="7660.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] RFC: increase default AC/AM/LT requirements"</a>
<li><strong>In reply to:</strong> <a href="7650.php">Christoph Konersmann: "[OMPI devel] Changing BTLs at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7666.php">Christoph Konersmann: "Re: [OMPI devel] Changing BTLs at runtime"</a>
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
