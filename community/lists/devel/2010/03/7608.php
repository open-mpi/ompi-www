<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 00:30:17 2010" -->
<!-- isoreceived="20100317043017" -->
<!-- sent="Wed, 17 Mar 2010 12:30:11 +0800" -->
<!-- isosent="20100317043011" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="632a27d11003162130n3dbead2dv6a7a73d0d89ba962_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="7157797C-B561-408C-99BA-3E204DE3E39C_at_eecs.utk.edu" -->
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
<strong>From:</strong> hu yaohui (<em>loki2441_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-17 00:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7609.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7609.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7609.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George,
<br>
what i want to do is to modify the self component to meet my needs,i just
<br>
want to modify the send function of the self component to test whether my
<br>
implemented send function ,which based on some emulation platform, is
<br>
right.so i copied all the self component code,modified the component name to
<br>
mine ,the i wanted to subsitude its send and receive to my implemented
<br>
send/receive function.i dont know whether this is right,if not ,or you need
<br>
more information ,please let me know.
<br>
<p>Thanks &amp; Regards
<br>
Yaohui Hu .
<br>
<p>On Wed, Mar 17, 2010 at 12:05 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Yaohui,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The whole infrastructure at the level where you're looking is similar to
</span><br>
<span class="quotelev1">&gt; Active Messages. The register function is used to register callback for a
</span><br>
<span class="quotelev1">&gt; specific tag. A tag is a uint8_t, and thus there are 256 callbacks possible.
</span><br>
<span class="quotelev1">&gt; However, there are some rules regarding which level is allowed to register
</span><br>
<span class="quotelev1">&gt; callbacks in a specific range, in order to avoid conflict between several
</span><br>
<span class="quotelev1">&gt; modules loaded in same time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Anyway, as far as I understood you're looking at writing a new BTL. Every
</span><br>
<span class="quotelev1">&gt; time a message is drained from the network, the BTL is supposed to know that
</span><br>
<span class="quotelev1">&gt; tag it was send to and trigger the corresponding callback (this only on the
</span><br>
<span class="quotelev1">&gt; receiver side). How this &quot;tag&quot; is moved around depends on the BTL
</span><br>
<span class="quotelev1">&gt; capabilities. Some will have to push it explicitly through the network (TCP
</span><br>
<span class="quotelev1">&gt; as an example), while others have other means to move it around (for MX this
</span><br>
<span class="quotelev1">&gt; tag is part of the 64 bits key used for each message). Therefore, the first
</span><br>
<span class="quotelev1">&gt; thing you should make sure is that you really have a way to retrieve this
</span><br>
<span class="quotelev1">&gt; tag on the receiver side. Once you have the tag and the content of the
</span><br>
<span class="quotelev1">&gt; message, you should call the callback corresponding to the tag (using the
</span><br>
<span class="quotelev1">&gt; simple addition you noticed), and pass the correct arguments. This should at
</span><br>
<span class="quotelev1">&gt; least let you start the eager protocol.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 16, 2010, at 23:22 , hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jeff &amp; All
</span><br>
<span class="quotelev2">&gt; &gt; Yes,you are right,i was just a little dizzy then. i need to modify the
</span><br>
<span class="quotelev1">&gt; send function of component self in btl framework.
</span><br>
<span class="quotelev2">&gt; &gt; i just met a problem right now.
</span><br>
<span class="quotelev2">&gt; &gt; when i browse the function
</span><br>
<span class="quotelev1">&gt; mca_btl_self_send(~/ompi/mca/btl/self/btl_self.c),i think it use this to
</span><br>
<span class="quotelev1">&gt; send the data
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 303    reg = mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev2">&gt; &gt; 304    reg-&gt;cbfunc( btl, tag, des, reg-&gt;cbdata );
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; i trace through the &quot;mca_btl_base_active_message_trigger&quot; to the function
</span><br>
<span class="quotelev1">&gt; where it get its value ,then i find function
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_register(~/ompi/mca/bml/bml_r2.c),it like this:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 728    mca_btl_base_active_message_trigger[tag].cbfunc = cbfunc;
</span><br>
<span class="quotelev2">&gt; &gt; 729    mca_btl_base_active_message_trigger[tag].cbdata = data;
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; when i trace through mca_bml_r2_register ,in the same file,i get this
</span><br>
<span class="quotelev1">&gt; structure:
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mca_bml_r2_module_t mca_bml_r2 = {
</span><br>
<span class="quotelev2">&gt; &gt;     {
</span><br>
<span class="quotelev2">&gt; &gt;         &amp;mca_bml_r2_component,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_add_procs,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_del_procs,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_add_btl,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_del_btl,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_del_proc_btl,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_register, &lt;------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_register_error,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_finalize,
</span><br>
<span class="quotelev2">&gt; &gt;         mca_bml_r2_ft_event
</span><br>
<span class="quotelev2">&gt; &gt;     }
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; };
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; after this ,i find the place where mca_bml_r2 is initialized,but i cannt
</span><br>
<span class="quotelev1">&gt; find anything related to mca_bml_r2_register.i just want to know reg =
</span><br>
<span class="quotelev1">&gt; mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev2">&gt; &gt; really is.and i want to modify the send function of self ,is this the
</span><br>
<span class="quotelev1">&gt; right way? or you can tell me the right way to modify the send function of
</span><br>
<span class="quotelev1">&gt; self component.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Yaohui Hu
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 17, 2010 at 12:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 16, 2010, at 9:45 AM, hu yaohui wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; it just said,i had a wrong command format,when i use mpirun --help,i
</span><br>
<span class="quotelev1">&gt; really
</span><br>
<span class="quotelev3">&gt; &gt; &gt; didn't find the --mca parameter.why the tcp FAQ part list these command
</span><br>
<span class="quotelev1">&gt; lines,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; but it cann't execute successfully on my machine.Is there any another
</span><br>
<span class="quotelev1">&gt; way to control the specific
</span><br>
<span class="quotelev3">&gt; &gt; &gt; btl components to be used?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Make sure you're using the right mpirun -- you might have multiple
</span><br>
<span class="quotelev1">&gt; installed on your machine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; OMPI's &quot;mpirun --help&quot; definitely includes a description of the --mca
</span><br>
<span class="quotelev1">&gt; parameter:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;   -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev2">&gt; &gt;                         Pass context-specific MCA parameters; they are
</span><br>
<span class="quotelev2">&gt; &gt;                         considered global if --gmca is not used and only
</span><br>
<span class="quotelev2">&gt; &gt;                         one context is specified (arg0 is the parameter
</span><br>
<span class="quotelev2">&gt; &gt;                         name; arg1 is the parameter value)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7608/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7609.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7609.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7609.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
