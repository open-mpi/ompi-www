<?
$subject_val = "Re: [OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 18:22:39 2010" -->
<!-- isoreceived="20100426222239" -->
<!-- sent="Tue, 27 Apr 2010 08:20:55 +1000" -->
<!-- isosent="20100426222055" -->
<!-- name="Nev" -->
<!-- email="openmpi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="1272320455.24425.75.camel_at_roo" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="00D21AAE-E1E2-4B84-8D58-33DCC54FA474_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] unresolved symbol mca_base_param_reg_int<br>
<strong>From:</strong> Nev (<em>openmpi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 18:20:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12811.php">Teng Lin: "[OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12809.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12803.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 2010-04-26 at 14:43 -0400, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 24, 2010, at 10:14 PM, Nev wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;   void * const result = dlopen(libName, RTLD_LAZY | RTLD_LOCAL);
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This line is the problem: change RTLD_LOCAL to RTLD_GLOBAL and it'll work.  There's another option, too -- keep reading...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;highly complex linker voodoo&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Before discussing why this happens, know that Open MPI plugins call functions back up in the main Open MPI libraries.  As a crass-and-not-really-correct-but-close-enough example, consider that OMPI plugins are created (sorta) like this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     gcc my_plugin_source.c ... -L&lt;dir&gt; -lmpi --shared -o mca_framework_component.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where libmpi.so is a shared library.  These plugins are not making MPI standardized API function calls; they're calling internal functions inside libmpi.so (i.e., OMPI's internal implementation API).  This is because libmpi.so (and friends) have a whole lotta infrastructure that the plugins need in order to be able to do their work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It's a fun use of the intelligence of linkers -- a normal MPI app is linked against OMPI's libmpi.so, but so is mca_framework_component.so.  When your app calls MPI_Init, the normal run-time linker semantics take over, resolve the symbol, and then call it.  Later, mca_framework_component.so is dlopen()'ed.  The run-time linker sees that it needs libmpi.so, but realizes that libmpi.so is already loaded -- so it doesn't load it again.  When mca_framework_component.so calls OMPI_do_something(), the same run-time resolution occurs, and (this is key) it calls the function in the same instance of libmpi.so that your app is using.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Nifty.  Without this concept, OMPI's plugin concept wouldn't work.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Your code is dlopening liba2lib as LOCAL.  The run-time linker pulls in libmpi.so at the same time as liba2lib (because MPI_Init needs it) -- and therefore libmpi.so is loaded into the same private space as liba2lib.  But then later, the innards of Open MPI dlopen() mca_framework_component.so.  This plugin is loaded into a DIFFERENT symbol space than libmpi.so.  The key point here is that LOCAL is not &quot;inherited&quot;, so to speak.  If you dlopen() libfoo as LOCAL, if libfoo then dlopen()s more DSOs, those newly-opened DSOs are in a different space than libfoo.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The best I can guess is that when mca_framework_component.so is dlopen()'ed, the linker says &quot;ya, we have libmpi.so loaded&quot; and it allows the load to complete successfully.  But later when it tries to actually resolve OMPI_do_something(), it fails -- because OMPI_do_something() is in the private/LOCAL symbol space.  And therefore OMPI_do_something has a value of 0.  And it segv's when we try to call through it.  (this paragraph may not be exactly right; but it's probably close -- every time I think I understand linkers, I find out that I don't understand them at all...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It works for you in the static case because Open MPI slurps up all the components *into* libmpi.so in that case.  Hence, all the components *and* all the internal libmpi symbols are loaded into the same LOCAL symbol space.  There's no dlopen'ing of plugins in this case.  And it all works fine because everything can resolve nicely, yadda yadda yadda.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I think your options are 1) to change that LOCAL to GLOBAL, 2) use &quot;--enable-static --disable-shared&quot;, or 3) use --disable-dlopen.  #2 builds libmpi.a *and* slurps all of OMPI's components up into libmpi.a.  #3 builds libmpi.so *and* slurps all of OMPI's components up into libmpi.so.  So you get the benefits of a shared library, but all the components are physically inside libmpi.so as opposed to being standalone DSO's.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;/highly complex linker voodoo&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope that made sense!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Hi Jeff,
<br>
Thank you very much for your very clear and detailed explanation. I have
<br>
verified that all 3 options work with the minimal example. I will now
<br>
verify against the real code, but that will take a little longer.
<br>
Thanks again for the time you and effort addressing my problem.
<br>
Thanks Nev.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12811.php">Teng Lin: "[OMPI users] deadlock when calling MPI_gatherv"</a>
<li><strong>Previous message:</strong> <a href="12809.php">Prentice Bisbal: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>In reply to:</strong> <a href="12803.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
