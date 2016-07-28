<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jan 19 13:19:02 2006" -->
<!-- isoreceived="20060119181902" -->
<!-- sent="Thu, 19 Jan 2006 13:20:10 -0500" -->
<!-- isosent="20060119182010" -->
<!-- name="Andrew Friedley" -->
<!-- email="afriedle_at_[hidden]" -->
<!-- subject="Re:  debugging methods" -->
<!-- id="43CFD85A.4040106_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="62f43a280601050813s7c93587fi_at_mail.gmail.com" -->
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
<strong>From:</strong> Andrew Friedley (<em>afriedle_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-19 13:20:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Leslie Watter: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0709.php">Leslie Watter: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0709.php">Leslie Watter: "Re:  debugging methods"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Apologies for the late response.  I've been learning the BTL interface 
<br>
myself recently, and was asked to come up with answers for you. 
<br>
Hopefully my response is useful, let me know if you have more questions.
<br>
<p>Andrew
<br>
<p><p>Leslie Watter wrote:
<br>
<span class="quotelev1">&gt; What I need? To know how and what functions is necessary to perform a minimalist
</span><br>
<span class="quotelev1">&gt; implementation of a new btl, registering it and make it usable.
</span><br>
<p>First, two component functions are required - mca_component_open and 
<br>
mca_component_close.
<br>
<p>Two structs need to be set up - one for the component, and one for  each 
<br>
module.  The component struct is called  mca_btl_&lt;btl&gt;_component_t, and 
<br>
extends mca_btl_base_component_t.   The module struct is called 
<br>
mca_btl_&lt;btl&gt;_module_t, and extends  mca_btl_base_module_t.
<br>
<p>Only one instance of the component struct is created, while many  module 
<br>
structs may be created (usually one per network interface).
<br>
<p>Inside these structs are several function pointers that must be  filled 
<br>
in.  For the component, the btl_init and btl_progress fields  are 
<br>
required.  For each module, the following functions are required:
<br>
<p>btl_add_procs
<br>
btl_del_procs
<br>
btl_register
<br>
btl_finalize
<br>
btl_alloc
<br>
btl_free
<br>
btl_prepare_src
<br>
btl_send
<br>
<p>The remaining three - btl_prepare_dst, btl_put, and btl_get - are 
<br>
optional RDMA functions.  Their presence is indicated by the btl_flags 
<br>
field in the module struct.  If either MCA_BTL_FLAGS_PUT or 
<br>
MCA_BTL_FLAGS_GET are set, the respective put/get function must be set 
<br>
in the struct, as well as prepare_dst.
<br>
<p>See btl.h and tcp/btl_tcp.h for examples.
<br>
<p><p><span class="quotelev1">&gt; 1) Inicialization
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; component open
</span><br>
<span class="quotelev1">&gt; component init
</span><br>
<span class="quotelev1">&gt; component create instances
</span><br>
<span class="quotelev1">&gt; btl tcp   create
</span><br>
<span class="quotelev1">&gt; component create_listen
</span><br>
<span class="quotelev1">&gt; btl tcp   setsocket options
</span><br>
<span class="quotelev1">&gt; component exchange
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; btl tcp   add procs
</span><br>
<span class="quotelev1">&gt; endpoint  construct ( executed * number of endpoints )
</span><br>
<span class="quotelev1">&gt; btl tcp   del procs
</span><br>
<span class="quotelev1">&gt; btl tcp   register
</span><br>
<p>del procs should not be getting called here.  Otherwise this looks correct.
<br>
<p>&lt;big cut&gt;
<br>
<p><span class="quotelev1">&gt; This is the sequence I have found executing the TCP BTL code. Please fell free
</span><br>
<span class="quotelev1">&gt; to correct the place of sections.
</span><br>
<p>Other than the del procs call, this looks correct.  Tim Woodall had some 
<br>
additional comments about typical send cases:
<br>
<p>&nbsp;From the perspective of the PML&lt;-&gt;BTL interface, the PML will in
<br>
general call:
<br>
<p>1) btl_alloc followed by btl_send for short control messages
<br>
2) btl_prepare_src followed by btl_send for send/recv semantics
<br>
3) btl_prepare_dst/btl_prepare_src/btl_put for rdma semantics
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0701.php">George Bosilca: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>Previous message:</strong> <a href="0699.php">Graham E Fagg: "Re:  while-loop around opal_condition_wait"</a>
<li><strong>In reply to:</strong> <a href="0657.php">Leslie Watter: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0709.php">Leslie Watter: "Re:  debugging methods"</a>
<li><strong>Reply:</strong> <a href="0709.php">Leslie Watter: "Re:  debugging methods"</a>
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
