<?
$subject_val = "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 11:38:42 2014" -->
<!-- isoreceived="20140214163842" -->
<!-- sent="Fri, 14 Feb 2014 16:38:38 +0000" -->
<!-- isosent="20140214163838" -->
<!-- name="Hjelm, Nathan T" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7153A864EB3_at_ECS-EXG-P-MB07.win.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140214163131.GL24474_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING<br>
<strong>From:</strong> Hjelm, Nathan T (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 11:38:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14143.php">Adrian Reber: "[OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Friday, February 14, 2014 9:31 AM, devel [devel-bounces_at_[hidden]] on behalf of Adrian Reber [adrian_at_[hidden]] wrote:
<br>
<span class="quotelev1">&gt; To: devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: [OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to find out how to deal with string variables. Do I have to
</span><br>
<span class="quotelev1">&gt; allocate the memory before calling mca_base_component_var_register() or
</span><br>
<p>No, you can provide any initial value including NULL. If you allocate memory you will have to free it your self.
<br>
<p><span class="quotelev1">&gt; not? It seems it does a strdup() meaning it has to be free()'d while
</span><br>
<span class="quotelev1">&gt; closing the component. Looking at other occurrences of string variables
</span><br>
<p>The variable system handles this for you. It will strdup the string value you provide and free it when your component goes away. It will store the allocated string in the pointer you provide so DO NOT free it yourself.
<br>
<p>Ex.
<br>
<p>foo = strdup (&quot;foo&quot;);
<br>
mca_base_var_register (..., &amp;foo);
<br>
<p>free (foo);
<br>
<p>Is not allowed nor recommended. This would be correct:
<br>
<p>foo = &quot;foo&quot;;
<br>
mca_base_var_register (..., &amp;foo);
<br>
<p>Also note that the storage you provide must be accessible as long as the variable is valid. So, it may not be on the stack.
<br>
<p>-Nathan<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14146.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14143.php">Adrian Reber: "[OMPI devel] mca_base_component_var_register() MCA_BASE_VAR_TYPE_STRING"</a>
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
