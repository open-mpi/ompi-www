<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan 23 06:13:50 2006" -->
<!-- isoreceived="20060123111350" -->
<!-- sent="Mon, 23 Jan 2006 09:13:44 -0200" -->
<!-- isosent="20060123111344" -->
<!-- name="Leslie Watter" -->
<!-- email="watter_at_[hidden]" -->
<!-- subject="Re:  debugging methods" -->
<!-- id="62f43a280601230313y6c4642cg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="43CFD85A.4040106_at_open-mpi.org" -->
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
<strong>From:</strong> Leslie Watter (<em>watter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-01-23 06:13:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/02/0710.php">Nathan DeBardeleben: "Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Andrew,
<br>
<p>Thanks for this explanation. It was very helpfull to me to understand
<br>
the function of BTL, specially about the correct sequence of the
<br>
function path.
<br>
<p>I was wondering if this mail, can be included in a commentary inside
<br>
btl.h or an README file at the BTL base directory to help other people
<br>
too.
<br>
<p>For now, I don't have more questions, :)
<br>
<p>Thanks
<br>
<p>Leslie
<br>
<p><p><p>2006/1/19, Andrew Friedley &lt;afriedle_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Apologies for the late response.  I've been learning the BTL interface
</span><br>
<span class="quotelev1">&gt; myself recently, and was asked to come up with answers for you.
</span><br>
<span class="quotelev1">&gt; Hopefully my response is useful, let me know if you have more questions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Andrew
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Leslie Watter wrote:
</span><br>
<span class="quotelev2">&gt; &gt; What I need? To know how and what functions is necessary to perform a minimalist
</span><br>
<span class="quotelev2">&gt; &gt; implementation of a new btl, registering it and make it usable.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; First, two component functions are required - mca_component_open and
</span><br>
<span class="quotelev1">&gt; mca_component_close.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Two structs need to be set up - one for the component, and one for  each
</span><br>
<span class="quotelev1">&gt; module.  The component struct is called  mca_btl_&lt;btl&gt;_component_t, and
</span><br>
<span class="quotelev1">&gt; extends mca_btl_base_component_t.   The module struct is called
</span><br>
<span class="quotelev1">&gt; mca_btl_&lt;btl&gt;_module_t, and extends  mca_btl_base_module_t.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Only one instance of the component struct is created, while many  module
</span><br>
<span class="quotelev1">&gt; structs may be created (usually one per network interface).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Inside these structs are several function pointers that must be  filled
</span><br>
<span class="quotelev1">&gt; in.  For the component, the btl_init and btl_progress fields  are
</span><br>
<span class="quotelev1">&gt; required.  For each module, the following functions are required:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; btl_add_procs
</span><br>
<span class="quotelev1">&gt; btl_del_procs
</span><br>
<span class="quotelev1">&gt; btl_register
</span><br>
<span class="quotelev1">&gt; btl_finalize
</span><br>
<span class="quotelev1">&gt; btl_alloc
</span><br>
<span class="quotelev1">&gt; btl_free
</span><br>
<span class="quotelev1">&gt; btl_prepare_src
</span><br>
<span class="quotelev1">&gt; btl_send
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The remaining three - btl_prepare_dst, btl_put, and btl_get - are
</span><br>
<span class="quotelev1">&gt; optional RDMA functions.  Their presence is indicated by the btl_flags
</span><br>
<span class="quotelev1">&gt; field in the module struct.  If either MCA_BTL_FLAGS_PUT or
</span><br>
<span class="quotelev1">&gt; MCA_BTL_FLAGS_GET are set, the respective put/get function must be set
</span><br>
<span class="quotelev1">&gt; in the struct, as well as prepare_dst.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See btl.h and tcp/btl_tcp.h for examples.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 1) Inicialization
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; component open
</span><br>
<span class="quotelev2">&gt; &gt; component init
</span><br>
<span class="quotelev2">&gt; &gt; component create instances
</span><br>
<span class="quotelev2">&gt; &gt; btl tcp   create
</span><br>
<span class="quotelev2">&gt; &gt; component create_listen
</span><br>
<span class="quotelev2">&gt; &gt; btl tcp   setsocket options
</span><br>
<span class="quotelev2">&gt; &gt; component exchange
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; btl tcp   add procs
</span><br>
<span class="quotelev2">&gt; &gt; endpoint  construct ( executed * number of endpoints )
</span><br>
<span class="quotelev2">&gt; &gt; btl tcp   del procs
</span><br>
<span class="quotelev2">&gt; &gt; btl tcp   register
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; del procs should not be getting called here.  Otherwise this looks correct.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;big cut&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; This is the sequence I have found executing the TCP BTL code. Please fell free
</span><br>
<span class="quotelev2">&gt; &gt; to correct the place of sections.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other than the del procs call, this looks correct.  Tim Woodall had some
</span><br>
<span class="quotelev1">&gt; additional comments about typical send cases:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  From the perspective of the PML&lt;-&gt;BTL interface, the PML will in
</span><br>
<span class="quotelev1">&gt; general call:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) btl_alloc followed by btl_send for short control messages
</span><br>
<span class="quotelev1">&gt; 2) btl_prepare_src followed by btl_send for send/recv semantics
</span><br>
<span class="quotelev1">&gt; 3) btl_prepare_dst/btl_prepare_src/btl_put for rdma semantics
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
--
Leslie H. Watter
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/02/0710.php">Nathan DeBardeleben: "Alpha 4 and job state transitions"</a>
<li><strong>Previous message:</strong> <a href="0708.php">Ralf Wildenhues: "Re:  ompi_get_version"</a>
<li><strong>In reply to:</strong> <a href="0700.php">Andrew Friedley: "Re:  debugging methods"</a>
<!-- nextthread="start" -->
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
