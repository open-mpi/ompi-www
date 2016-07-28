<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 23:22:23 2010" -->
<!-- isoreceived="20100317032223" -->
<!-- sent="Wed, 17 Mar 2010 11:22:18 +0800" -->
<!-- isosent="20100317032218" -->
<!-- name="hu yaohui" -->
<!-- email="loki2441_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="632a27d11003162022u7d438f1drf82e3e3d6766f6be_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="95F42438-621C-44DD-8E75-AB162085F2A0_at_cisco.com" -->
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
<strong>Date:</strong> 2010-03-16 23:22:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff &amp; All
<br>
Yes,you are right,i was just a little dizzy then. i need to modify the send
<br>
function of component self in btl framework.
<br>
i just met a problem right now.
<br>
when i browse the function mca_btl_self_send(~/ompi/mca/btl/self/btl_self.c),i
<br>
think it use this to send the data
<br>
&lt;snip&gt;
<br>
303    reg = mca_btl_base_active_message_trigger + tag;
<br>
304    reg-&gt;cbfunc( btl, tag, des, reg-&gt;cbdata );
<br>
&lt;/snip&gt;
<br>
i trace through the &quot;mca_btl_base_active_message_trigger&quot; to the function
<br>
where it get its value ,then i find function
<br>
mca_bml_r2_register(~/ompi/mca/bml/bml_r2.c),it
<br>
like this:
<br>
&lt;snip&gt;
<br>
728    mca_btl_base_active_message_trigger[tag].cbfunc = cbfunc;
<br>
729    mca_btl_base_active_message_trigger[tag].cbdata = data;
<br>
&lt;snip&gt;
<br>
when i trace through mca_bml_r2_register ,in the same file,i get this
<br>
structure:
<br>
&lt;snip&gt;
<br>
mca_bml_r2_module_t mca_bml_r2 = {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&amp;mca_bml_r2_component,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_add_procs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_del_procs,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_add_btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_del_btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_del_proc_btl,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_register, &lt;------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_register_error,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_finalize,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mca_bml_r2_ft_event
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>};
<br>
&lt;snip&gt;
<br>
after this ,i find the place where mca_bml_r2 is initialized,but i cannt
<br>
find anything related to mca_bml_r2_register.i just want to know reg =
<br>
mca_btl_base_active_message_trigger + tag;
<br>
really is.and i want to modify the send function of self ,is this the right
<br>
way? or you can tell me the right way to modify the send function of self
<br>
component.
<br>
<p>Thanks &amp; Regards
<br>
Yaohui Hu
<br>
<p>On Wed, Mar 17, 2010 at 12:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Mar 16, 2010, at 9:45 AM, hu yaohui wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; it just said,i had a wrong command format,when i use mpirun --help,i
</span><br>
<span class="quotelev1">&gt; really
</span><br>
<span class="quotelev2">&gt; &gt; didn't find the --mca parameter.why the tcp FAQ part list these command
</span><br>
<span class="quotelev1">&gt; lines,
</span><br>
<span class="quotelev2">&gt; &gt; but it cann't execute successfully on my machine.Is there any another way
</span><br>
<span class="quotelev1">&gt; to control the specific
</span><br>
<span class="quotelev2">&gt; &gt; btl components to be used?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you're using the right mpirun -- you might have multiple
</span><br>
<span class="quotelev1">&gt; installed on your machine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's &quot;mpirun --help&quot; definitely includes a description of the --mca
</span><br>
<span class="quotelev1">&gt; parameter:
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
<span class="quotelev1">&gt;  Jeff Squyres
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-7606/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Previous message:</strong> <a href="7605.php">Leonardo Fialho: "Re: [OMPI devel] Signals"</a>
<li><strong>In reply to:</strong> <a href="7596.php">Jeff Squyres: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7607.php">George Bosilca: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
