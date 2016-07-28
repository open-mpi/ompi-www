<?
$subject_val = "Re: [OMPI devel] how to add a component in the ompi?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 16 12:52:34 2010" -->
<!-- isoreceived="20100316165234" -->
<!-- sent="Tue, 16 Mar 2010 09:52:17 -0700" -->
<!-- isosent="20100316165217" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] how to add a component in the ompi?" -->
<!-- id="95F42438-621C-44DD-8E75-AB162085F2A0_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="632a27d11003160945u28ef4b72pc5c3193cd540b09_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-16 12:52:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7597.php">Leonardo Fialho: "[OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7595.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7595.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 16, 2010, at 9:45 AM, hu yaohui wrote:
<br>
<p><span class="quotelev1">&gt; it just said,i had a wrong command format,when i use mpirun --help,i really
</span><br>
<span class="quotelev1">&gt; didn't find the --mca parameter.why the tcp FAQ part list these command lines,
</span><br>
<span class="quotelev1">&gt; but it cann't execute successfully on my machine.Is there any another way to control the specific
</span><br>
<span class="quotelev1">&gt; btl components to be used?
</span><br>
<p>Make sure you're using the right mpirun -- you might have multiple installed on your machine.
<br>
<p>OMPI's &quot;mpirun --help&quot; definitely includes a description of the --mca parameter:
<br>
<p>&nbsp;&nbsp;&nbsp;-mca|--mca &lt;arg0&gt; &lt;arg1&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Pass context-specific MCA parameters; they are
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;considered global if --gmca is not used and only
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;one context is specified (arg0 is the parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;name; arg1 is the parameter value)
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
<li><strong>Next message:</strong> <a href="7597.php">Leonardo Fialho: "[OMPI devel] Signals"</a>
<li><strong>Previous message:</strong> <a href="7595.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>In reply to:</strong> <a href="7595.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
<li><strong>Reply:</strong> <a href="7606.php">hu yaohui: "Re: [OMPI devel] how to add a component in the ompi?"</a>
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
