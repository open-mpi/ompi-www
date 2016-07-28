<?
$subject_val = "[OMPI devel] Changing BTLs at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 23 04:02:57 2010" -->
<!-- isoreceived="20100323080257" -->
<!-- sent="Tue, 23 Mar 2010 09:02:50 +0100" -->
<!-- isosent="20100323080250" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="[OMPI devel] Changing BTLs at runtime" -->
<!-- id="4BA875AA.6030402_at_upb.de" -->
<!-- charset="ISO-8859-15" -->
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
<strong>Subject:</strong> [OMPI devel] Changing BTLs at runtime<br>
<strong>From:</strong> Christoph Konersmann (<em>c_k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-23 04:02:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7649.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7661.php">Jeff Squyres: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>Reply:</strong> <a href="7661.php">Jeff Squyres: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>Maybe reply:</strong> <a href="7666.php">Christoph Konersmann: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>It was long ago where I've asked about hints to implement a dynamic BTL 
<br>
control. I've currently managed to change the MPI communication path 
<br>
from a BTL module (e.g. openib) to another BTL module (e.g. tcp) at 
<br>
runtime of a distributed application.
<br>
<p>For this I've developed a so called BTL Control Client (orte-btlctl) to 
<br>
send control messages to all processes through the ORTE RML. These 
<br>
messages are received and processed in the OMPI BML. In BML I've 
<br>
implemented a function to stop the MPI communication and another for 
<br>
changing the BTL exclusivity and recalculating the btl_{send,eager,rdma} 
<br>
lists. All is done at runtime so a distributed application running with 
<br>
Open MPI is not affected in its computation.
<br>
<p>I also managed to unload a module not used anymore, e.g. openib after 
<br>
changing the MPI communication to tcp, through the already implemented 
<br>
function mca_bml_r2_del_btl(mca_btl_base_module_t* btl).
<br>
<p>The Question:
<br>
The function to (re)initialise a BTL module 
<br>
&quot;mca_bml_r2_add_btl(mca_btl_base_module_t* btl)&quot; is currently not 
<br>
implemented. Why is it not implemented? And what has to be done if I 
<br>
want to implement it?
<br>
<p>As far as I understood the internals of the OMPI Layer, for adding a BTL 
<br>
module you have to implement the following steps:
<br>
1. find the corresponding component in mca_btl_base_components_opened
<br>
2. Do component-&gt;btl_init to get an array of BTL modules
<br>
3. and add those to mca_btl_base_modules_initialized
<br>
4. Iterate through mca_btl_base_modules_initialized and add BTL module 
<br>
to mca_bml_r2.btl_modules in bml_r2
<br>
5. Add BTL module to btl_{send,eager,rdma} (if applicable) for all 
<br>
reachable procs
<br>
<p>Am I missing something?
<br>
<p>The Background:
<br>
I should give some background, why I'm implementing this. Changing the 
<br>
MPI communication from a high speed network to a network with 
<br>
flowcontrol (openib-&gt;tcp) is necessary for checkpointing distributed 
<br>
applications in virtual machines. Ok, you are able to checkpoint through 
<br>
the FT-Framework and BLCR in Open MPI, but virtual machines already 
<br>
provide trivial functions for checkpointing. As you are not able to 
<br>
checkpoint the hardware information of e.g. openib you have to get rid 
<br>
of it in case of a checkpoint, and change back again on resume/continue.
<br>
<p>Would such feature/support generally be interesting for you? The 
<br>
implementation will be made publicly available on bitbucket until end of 
<br>
march.
<br>
<p>Thoughts? Suggestions? Or hints? :)
<br>
Thanks a lot,
<br>
<p>Christoph Konersmann
<br>
<p><pre>
-- 
Paderborn Center for Parallel Computing - PC2
University of Paderborn - Germany
<a href="http://www.pc2.de">http://www.pc2.de</a>
Christoph Konersmann &lt;c_k_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7651.php">Joshua Hursey: "Re: [OMPI devel] RFC: Merge tmp fault recovery branch into trunk"</a>
<li><strong>Previous message:</strong> <a href="7649.php">&#213;&#197;&#190;&#167;: "Re: [OMPI devel] Migrate OpenMPI to the VxWorks"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7661.php">Jeff Squyres: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>Reply:</strong> <a href="7661.php">Jeff Squyres: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>Maybe reply:</strong> <a href="7666.php">Christoph Konersmann: "Re: [OMPI devel] Changing BTLs at runtime"</a>
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
