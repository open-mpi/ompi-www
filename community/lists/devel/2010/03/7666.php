<?
$subject_val = "Re: [OMPI devel] Changing BTLs at runtime";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 26 09:46:29 2010" -->
<!-- isoreceived="20100326134629" -->
<!-- sent="Fri, 26 Mar 2010 14:46:22 +0100" -->
<!-- isosent="20100326134622" -->
<!-- name="Christoph Konersmann" -->
<!-- email="c_k_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Changing BTLs at runtime" -->
<!-- id="4BACBAAE.4050000_at_upb.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="12637_1269545719_1Nuspo-0002E0-8Z_1328AFAE-B433-488F-9AB4-0345D9E607C9_at_cisco.com" -->
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
<strong>From:</strong> Christoph Konersmann (<em>c_k_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-26 09:46:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7667.php">luyang dong: "[OMPI devel] The feature of openmpi1.5"</a>
<li><strong>Previous message:</strong> <a href="7665.php">Jeff Squyres: "[OMPI devel] blocker for v1.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="7650.php">Christoph Konersmann: "[OMPI devel] Changing BTLs at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7675.php">Josh Hursey: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>Reply:</strong> <a href="7675.php">Josh Hursey: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your reply and your suggestions, I'll try to give more 
<br>
detailed information.
<br>
<p>Am 25.03.2010 20:32, schrieb Jeff Squyres:
<br>
<span class="quotelev1">&gt; On Mar 23, 2010, at 4:02 AM, Christoph Konersmann wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It was long ago where I've asked about hints to implement a dynamic BTL
</span><br>
<span class="quotelev2">&gt;&gt; control. I've currently managed to change the MPI communication path
</span><br>
<span class="quotelev2">&gt;&gt; from a BTL module (e.g. openib) to another BTL module (e.g. tcp) at
</span><br>
<span class="quotelev2">&gt;&gt; runtime of a distributed application.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For this I've developed a so called BTL Control Client (orte-btlctl) to
</span><br>
<span class="quotelev2">&gt;&gt; send control messages to all processes through the ORTE RML.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cool!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, you might want to name it ompi-btlctl.  ORTE is our run-time layer and has no knowledge of the BTL's.
</span><br>
<p>My first problem, which had to solve, was, how to send those commands 
<br>
directly to the BML in all procs. The solution I've implemented is 
<br>
nearly the same as Ralph Castain has mentioned. The orte-btlctl sends 
<br>
its command to the ORTE daemon, which is then forwarded through 
<br>
orte_grpcomm.xcast() to all procs. This is done in orte/orted/orted_comm.c.
<br>
A running recv_callback function in BML receives the specially tagged 
<br>
command and executes it. This callback function also got the information 
<br>
which rml_uri the orte-btlctl tool has, so all answers are directly sent 
<br>
back to the control client. For the reason that this tool depends on the 
<br>
ORTE daemon, I've just called it orte-btlctl... But it might be changed 
<br>
to any other name. :)
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; These
</span><br>
<span class="quotelev2">&gt;&gt; messages are received and processed in the OMPI BML. In BML I've
</span><br>
<span class="quotelev2">&gt;&gt; implemented a function to stop the MPI communication and another for
</span><br>
<span class="quotelev2">&gt;&gt; changing the BTL exclusivity and recalculating the btl_{send,eager,rdma}
</span><br>
<span class="quotelev2">&gt;&gt; lists. All is done at runtime so a distributed application running with
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI is not affected in its computation.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I also managed to unload a module not used anymore, e.g. openib after
</span><br>
<span class="quotelev2">&gt;&gt; changing the MPI communication to tcp, through the already implemented
</span><br>
<span class="quotelev2">&gt;&gt; function mca_bml_r2_del_btl(mca_btl_base_module_t* btl).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sounds great!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Question:
</span><br>
<span class="quotelev2">&gt;&gt; The function to (re)initialise a BTL module
</span><br>
<span class="quotelev2">&gt;&gt; &quot;mca_bml_r2_add_btl(mca_btl_base_module_t* btl)&quot; is currently not
</span><br>
<span class="quotelev2">&gt;&gt; implemented. Why is it not implemented? And what has to be done if I
</span><br>
<span class="quotelev2">&gt;&gt; want to implement it?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm actually not sure -- this is not an area of the code where I am an expert...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It looks like the r2 proc_add is calling the internal function add_btls (plural).  I don't know where in the code base calls bml.add_btl...?  (does anywhere call it?)  It may have been planned but then never used...?
</span><br>
<p>No, I haven't found any code snippet which calls this function... Maybe 
<br>
there was just no need for it...
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; As far as I understood the internals of the OMPI Layer, for adding a BTL
</span><br>
<span class="quotelev2">&gt;&gt; module you have to implement the following steps:
</span><br>
<span class="quotelev2">&gt;&gt; 1. find the corresponding component in mca_btl_base_components_opened
</span><br>
<span class="quotelev2">&gt;&gt; 2. Do component-&gt;btl_init to get an array of BTL modules
</span><br>
<span class="quotelev2">&gt;&gt; 3. and add those to mca_btl_base_modules_initialized
</span><br>
<span class="quotelev2">&gt;&gt; 4. Iterate through mca_btl_base_modules_initialized and add BTL module
</span><br>
<span class="quotelev2">&gt;&gt; to mca_bml_r2.btl_modules in bml_r2
</span><br>
<span class="quotelev2">&gt;&gt; 5. Add BTL module to btl_{send,eager,rdma} (if applicable) for all
</span><br>
<span class="quotelev2">&gt;&gt; reachable procs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This *sounds* right, but again, I'm not the expert in this part of the code base.
</span><br>
<p>I currently have an experimental function called 
<br>
mca_bml_r2_add_btl_by_name(char* btl_name); which is under construction 
<br>
and not really working yet.
<br>
<p>It's current tasks are:
<br>
1. Search for the given component name and initialize the modules for 
<br>
each available interface
<br>
2. Add those BTL modules to the list of initialized modules in 
<br>
mca_btl_base_modules_initialized
<br>
3. For each initialized BTL module which component name is the given 
<br>
btl_name do:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Add BTL to the list mca_bml_r2.btl_modules
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. For each process do:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. Add this btl to the list of btl_send in bml_endpoint if reachable
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. Set btl_mpool = NULL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. Reset other attributes and set btl_endpoint, at least try to set it...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. Register btl_progress
<br>
4. Recalculate the lists btl_send, btl_eager and btl_rdma to make sure 
<br>
the highest exclusivity is used.
<br>
<p>I think that the challenging part is to set the endpoints in bml and btl 
<br>
in all procs. Maybe I'm missing some stuff related to the memory pool or 
<br>
other components. I don't really know what the exact problem is, but I 
<br>
know that the BTL module will cause a segfault on changing the mpi 
<br>
communication back to it with the first package to receive.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The Background:
</span><br>
<span class="quotelev2">&gt;&gt; I should give some background, why I'm implementing this. Changing the
</span><br>
<span class="quotelev2">&gt;&gt; MPI communication from a high speed network to a network with
</span><br>
<span class="quotelev2">&gt;&gt; flowcontrol (openib-&gt;tcp) is necessary for checkpointing distributed
</span><br>
<span class="quotelev2">&gt;&gt; applications in virtual machines. Ok, you are able to checkpoint through
</span><br>
<span class="quotelev2">&gt;&gt; the FT-Framework and BLCR in Open MPI, but virtual machines already
</span><br>
<span class="quotelev2">&gt;&gt; provide trivial functions for checkpointing. As you are not able to
</span><br>
<span class="quotelev2">&gt;&gt; checkpoint the hardware information of e.g. openib you have to get rid
</span><br>
<span class="quotelev2">&gt;&gt; of it in case of a checkpoint, and change back again on resume/continue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not quite sure I understand.  I can see how the original model of CRS and SNAPC don't quite fit that of VM's, but I don't quite understand what switching openib -&gt;  tcp and then later tcp -&gt;  openib gives you...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can't you just quiesce the openib BTL, let the VM checkpoint, and then resume with openib?  (or whatever other non TCP/sm BTL you want)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>I worked under the assumption that a virtualization might support 
<br>
InfiniBand through SR-IOV. So every virtual machine has the possibility 
<br>
to use it at full speed. Just starving out the communication between 
<br>
InfiniBand devices would not help in case of migration when the 
<br>
underlying hardware and its configuration would change. Therefore I have 
<br>
to unload the desired BTL module. To make sure that absolutely no bml 
<br>
uses infiniband for transfer anymore, I change the communication to 
<br>
another device whose protocol is known to work with migrating virtual 
<br>
machines, like tcp.
<br>
<p>Checkpointing would work with just quiesce the communication if the 
<br>
infiniband hardware will not changed.
<br>
<p>Kind regards,
<br>
Christoph Konersmann
<br>
<pre>
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
<li><strong>Next message:</strong> <a href="7667.php">luyang dong: "[OMPI devel] The feature of openmpi1.5"</a>
<li><strong>Previous message:</strong> <a href="7665.php">Jeff Squyres: "[OMPI devel] blocker for v1.4"</a>
<li><strong>Maybe in reply to:</strong> <a href="7650.php">Christoph Konersmann: "[OMPI devel] Changing BTLs at runtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7675.php">Josh Hursey: "Re: [OMPI devel] Changing BTLs at runtime"</a>
<li><strong>Reply:</strong> <a href="7675.php">Josh Hursey: "Re: [OMPI devel] Changing BTLs at runtime"</a>
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
