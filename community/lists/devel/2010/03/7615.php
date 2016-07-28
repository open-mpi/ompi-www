<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 17 01:34:12 2010" -->
<!-- isoreceived="20100317053412" -->
<!-- sent="Wed, 17 Mar 2010 13:34:06 +0800" -->
<!-- isosent="20100317053406" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="632a27d11003162234h59b1f4cfw6c6c61d2edfae518_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="974C7BE4-D17B-46A3-9D73-BB8B440A7853_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2010-03-17 01:34:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7616.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7614.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7613.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7612.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi George ,
<br>
Thank you very much!
<br>
i really had saw these functions before ,but it's a long time ,i can't find
<br>
it !
<br>
Thank you very much,you save me a lot of time.
<br>
<p>Thanks &amp; Regards,
<br>
Yaohui Hu
<br>
<p>On Wed, Mar 17, 2010 at 1:28 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Yaohui,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The callback functions are registered by any modules that can handle
</span><br>
<span class="quotelev1">&gt; network communications. In your specific case I would guess it is the PML.
</span><br>
<span class="quotelev1">&gt; Look in mca/pml/ob1/pml_ob1.c starting from line 364 to see what callbacks
</span><br>
<span class="quotelev1">&gt; are registered by OB1.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 17, 2010, at 01:22 , hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Geogre,
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much!
</span><br>
<span class="quotelev2">&gt; &gt; i know ,it's really a receive callback in this send function
</span><br>
<span class="quotelev1">&gt; mca_btl_self_send,what i want to know is where  this callback function(line
</span><br>
<span class="quotelev1">&gt; 303).
</span><br>
<span class="quotelev2">&gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 303    reg = mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev2">&gt; &gt; 304    reg-&gt;cbfunc( btl, tag, des, reg-&gt;cbdata );
</span><br>
<span class="quotelev2">&gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mapped to,where this function is initialized.in which file,which
</span><br>
<span class="quotelev1">&gt; function,the mca_bml_r2_register was called.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev2">&gt; &gt; Yaohui
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 17, 2010 at 12:42 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Yoahui,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The self component is special. While is does behave as a &quot;normal&quot; BTL, it
</span><br>
<span class="quotelev1">&gt; takes a lot of shortcuts as all operations are in the memory of a single
</span><br>
<span class="quotelev1">&gt; process. However, as the simplest BTLs in Open MPI, I guess it is a good
</span><br>
<span class="quotelev1">&gt; starting point.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As stated previously, the self BTL exhibit a lot of differences compared
</span><br>
<span class="quotelev1">&gt; with the others BTL. For your case, in the self BTL the send function
</span><br>
<span class="quotelev1">&gt; trigger the receiver callback, as there is other simple way to drain the
</span><br>
<span class="quotelev1">&gt; &quot;network&quot;. This explain why we compute the btl_active_message_callback_t
</span><br>
<span class="quotelev1">&gt; directly in the send function. Usually, this is done on the progress
</span><br>
<span class="quotelev1">&gt; function, once some data have been extracted from the network. Basically,
</span><br>
<span class="quotelev1">&gt; everything in the mca_btl_self_send function starting from the &quot;/* upcall
</span><br>
<span class="quotelev1">&gt; */&quot; comment is the receive operation.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mar 17, 2010, at 00:30 , hu yaohui wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi George,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; what i want to do is to modify the self component to meet my needs,i
</span><br>
<span class="quotelev1">&gt; just want to modify the send function of the self component to test whether
</span><br>
<span class="quotelev1">&gt; my implemented send function ,which based on some emulation platform, is
</span><br>
<span class="quotelev1">&gt; right.so i copied all the self component code,modified the component name to
</span><br>
<span class="quotelev1">&gt; mine ,the i wanted to subsitude its send and receive to my implemented
</span><br>
<span class="quotelev1">&gt; send/receive function.i dont know whether this is right,if not ,or you need
</span><br>
<span class="quotelev1">&gt; more information ,please let me know.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yaohui Hu .
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Wed, Mar 17, 2010 at 12:05 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Yaohui,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The whole infrastructure at the level where you're looking is similar
</span><br>
<span class="quotelev1">&gt; to Active Messages. The register function is used to register callback for a
</span><br>
<span class="quotelev1">&gt; specific tag. A tag is a uint8_t, and thus there are 256 callbacks possible.
</span><br>
<span class="quotelev1">&gt; However, there are some rules regarding which level is allowed to register
</span><br>
<span class="quotelev1">&gt; callbacks in a specific range, in order to avoid conflict between several
</span><br>
<span class="quotelev1">&gt; modules loaded in same time.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Anyway, as far as I understood you're looking at writing a new BTL.
</span><br>
<span class="quotelev1">&gt; Every time a message is drained from the network, the BTL is supposed to
</span><br>
<span class="quotelev1">&gt; know that tag it was send to and trigger the corresponding callback (this
</span><br>
<span class="quotelev1">&gt; only on the receiver side). How this &quot;tag&quot; is moved around depends on the
</span><br>
<span class="quotelev1">&gt; BTL capabilities. Some will have to push it explicitly through the network
</span><br>
<span class="quotelev1">&gt; (TCP as an example), while others have other means to move it around (for MX
</span><br>
<span class="quotelev1">&gt; this tag is part of the 64 bits key used for each message). Therefore, the
</span><br>
<span class="quotelev1">&gt; first thing you should make sure is that you really have a way to retrieve
</span><br>
<span class="quotelev1">&gt; this tag on the receiver side. Once you have the tag and the content of the
</span><br>
<span class="quotelev1">&gt; message, you should call the callback corresponding to the tag (using the
</span><br>
<span class="quotelev1">&gt; simple addition you noticed), and pass the correct arguments. This should at
</span><br>
<span class="quotelev1">&gt; least let you start the eager protocol.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;  george.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; On Mar 16, 2010, at 23:22 , hu yaohui wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Hi Jeff &amp; All
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yes,you are right,i was just a little dizzy then. i need to modify
</span><br>
<span class="quotelev1">&gt; the send function of component self in btl framework.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; i just met a problem right now.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; when i browse the function
</span><br>
<span class="quotelev1">&gt; mca_btl_self_send(~/ompi/mca/btl/self/btl_self.c),i think it use this to
</span><br>
<span class="quotelev1">&gt; send the data
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 303    reg = mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 304    reg-&gt;cbfunc( btl, tag, des, reg-&gt;cbdata );
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;/snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; i trace through the &quot;mca_btl_base_active_message_trigger&quot; to the
</span><br>
<span class="quotelev1">&gt; function where it get its value ,then i find function
</span><br>
<span class="quotelev1">&gt; mca_bml_r2_register(~/ompi/mca/bml/bml_r2.c),it like this:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 728    mca_btl_base_active_message_trigger[tag].cbfunc = cbfunc;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; 729    mca_btl_base_active_message_trigger[tag].cbdata = data;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; when i trace through mca_bml_r2_register ,in the same file,i get this
</span><br>
<span class="quotelev1">&gt; structure:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; mca_bml_r2_module_t mca_bml_r2 = {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     {
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         &amp;mca_bml_r2_component,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_add_procs,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_del_procs,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_add_btl,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_del_btl,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_del_proc_btl,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_register, &lt;------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_register_error,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_finalize,
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;         mca_bml_r2_ft_event
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;     }
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; };
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; &lt;snip&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; after this ,i find the place where mca_bml_r2 is initialized,but i
</span><br>
<span class="quotelev1">&gt; cannt find anything related to mca_bml_r2_register.i just want to know reg =
</span><br>
<span class="quotelev1">&gt; mca_btl_base_active_message_trigger + tag;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; really is.and i want to modify the send function of self ,is this the
</span><br>
<span class="quotelev1">&gt; right way? or you can tell me the right way to modify the send function of
</span><br>
<span class="quotelev1">&gt; self component.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Thanks &amp; Regards
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Yaohui Hu
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Wed, Mar 17, 2010 at 12:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; On Mar 16, 2010, at 9:45 AM, hu yaohui wrote:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; it just said,i had a wrong command format,when i use mpirun
</span><br>
<span class="quotelev1">&gt; --help,i really
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; didn't find the --mca parameter.why the tcp FAQ part list these
</span><br>
<span class="quotelev1">&gt; command lines,
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; but it cann't execute successfully on my machine.Is there any
</span><br>
<span class="quotelev1">&gt; another way to control the specific
</span><br>
<span class="quotelev1">&gt; &gt; &gt; &gt; &gt; btl components to be used?
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Make sure you're using the right mpirun -- you might have multiple
</span><br>
<span class="quotelev1">&gt; installed on your machine.
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; OMPI's &quot;mpirun --help&quot; definitely includes a description of the --mca
</span><br>
<span class="quotelev1">&gt; parameter:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;   -mca|--mca &lt;arg0&gt; &lt;arg1&gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                         Pass context-specific MCA parameters; they
</span><br>
<span class="quotelev1">&gt; are
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                         considered global if --gmca is not used and
</span><br>
<span class="quotelev1">&gt; only
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                         one context is specified (arg0 is the
</span><br>
<span class="quotelev1">&gt; parameter
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;                         name; arg1 is the parameter value)
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; --
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; For corporate legal information go to:
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7615/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7616.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7614.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7613.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7612.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
