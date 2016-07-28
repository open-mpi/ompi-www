<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 00:05:33 2010" -->
<!-- isoreceived="20100317040533" -->
<!-- sent="Wed, 17 Mar 2010 00:05:23 -0400" -->
<!-- isosent="20100317040523" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="7157797C-B561-408C-99BA-3E204DE3E39C_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="632a27d11003162022u7d438f1drf82e3e3d6766f6be_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] how to add a component in the ompi?<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 00:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7608.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7608.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7608.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yaohui,
<br>
<p>The whole infrastructure at the level where you're looking is similar to Active Messages. The register function is used to register callback for a specific tag. A tag is a uint8_t, and thus there are 256 callbacks possible. However, there are some rules regarding which level is allowed to register callbacks in a specific range, in order to avoid conflict between several modules loaded in same time.
<br>
<p>Anyway, as far as I understood you're looking at writing a new BTL. Every time a message is drained from the network, the BTL is supposed to know that tag it was send to and trigger the corresponding callback (this only on the receiver side). How this &quot;tag&quot; is moved around depends on the BTL capabilities. Some will have to push it explicitly through the network (TCP as an example), while others have other means to move it around (for MX this tag is part of the 64 bits key used for each message). Therefore, the first thing you should make sure is that you really have a way to retrieve this tag on the receiver side. Once you have the tag and the content of the message, you should call the callback corresponding to the tag (using the simple addition you noticed), and pass the correct arguments. This should at least let you start the eager protocol.
<br>
<p>&nbsp;&nbsp;george.
<br>
<p>On Mar 16, 2010, at 23:22 , hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt; Hi Jeff &amp; All
</span><br>
<span class="quotelev1">&gt; Yes,you are right,i was just a little dizzy then. i need to modify the send function of component self in btl framework.
</span><br>
<span class="quotelev1">&gt; i just met a problem right now.
</span><br>
<span class="quotelev1">&gt; when i browse the function mca_btl_self_send(~/ompi/mca/btl/self/btl_self.c),i think it use this to send the data
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 303    reg = mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev1">&gt; 304    reg-&gt;cbfunc( btl, tag, des, reg-&gt;cbdata );
</span><br>
<span class="quotelev1">&gt; &lt;/snip&gt;
</span><br>
<span class="quotelev1">&gt; i trace through the &quot;mca_btl_base_active_message_trigger&quot; to the function where it get its value ,then i find function mca_bml_r2_register(~/ompi/mca/bml/bml_r2.c),it like this:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; 728    mca_btl_base_active_message_trigger[tag].cbfunc = cbfunc;
</span><br>
<span class="quotelev1">&gt; 729    mca_btl_base_active_message_trigger[tag].cbdata = data;
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; when i trace through mca_bml_r2_register ,in the same file,i get this structure:
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_module_t mca_bml_r2 = {
</span><br>
<span class="quotelev1">&gt;     {
</span><br>
<span class="quotelev1">&gt;         &amp;mca_bml_r2_component, 
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_add_procs,
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_del_procs,
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_add_btl,
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_del_btl,
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_del_proc_btl,
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_register, &lt;------------------------------------
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_register_error,
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_finalize, 
</span><br>
<span class="quotelev1">&gt;         mca_bml_r2_ft_event
</span><br>
<span class="quotelev1">&gt;     }
</span><br>
<span class="quotelev1">&gt;     
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev1">&gt; after this ,i find the place where mca_bml_r2 is initialized,but i cannt find anything related to mca_bml_r2_register.i just want to know reg = mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev1">&gt; really is.and i want to modify the send function of self ,is this the right way? or you can tell me the right way to modify the send function of self component.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks &amp; Regards
</span><br>
<span class="quotelev1">&gt; Yaohui Hu
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; On Wed, Mar 17, 2010 at 12:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2010, at 9:45 AM, hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; it just said,i had a wrong command format,when i use mpirun --help,i really
</span><br>
<span class="quotelev2">&gt; &gt; didn't find the --mca parameter.why the tcp FAQ part list these command lines,
</span><br>
<span class="quotelev2">&gt; &gt; but it cann't execute successfully on my machine.Is there any another way to control the specific
</span><br>
<span class="quotelev2">&gt; &gt; btl components to be used?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sure you're using the right mpirun -- you might have multiple installed on your machine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OMPI's &quot;mpirun --help&quot; definitely includes a description of the --mca parameter:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev1">&gt;                         Pass context-specific MCA parameters; they are
</span><br>
<span class="quotelev1">&gt;                         considered global if --gmca is not used and only
</span><br>
<span class="quotelev1">&gt;                         one context is specified (arg0 is the parameter
</span><br>
<span class="quotelev1">&gt;                         name; arg1 is the parameter value)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7608.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7608.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7608.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
