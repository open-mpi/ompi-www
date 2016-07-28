<?
$subject_val = "Re: [OMPI users] unresolved symbol mca_base_param_reg_int";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 26 14:43:46 2010" -->
<!-- isoreceived="20100426184346" -->
<!-- sent="Mon, 26 Apr 2010 14:43:35 -0400" -->
<!-- isosent="20100426184335" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] unresolved symbol mca_base_param_reg_int" -->
<!-- id="00D21AAE-E1E2-4B84-8D58-33DCC54FA474_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1272161672.24425.68.camel_at_roo" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-26 14:43:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12766.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12810.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12810.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2010, at 10:14 PM, Nev wrote:
<br>
<p><span class="quotelev1">&gt;   void * const result = dlopen(libName, RTLD_LAZY | RTLD_LOCAL);
</span><br>
<p>This line is the problem: change RTLD_LOCAL to RTLD_GLOBAL and it'll work.  There's another option, too -- keep reading...
<br>
<p>&lt;highly complex linker voodoo&gt;
<br>
<p>Before discussing why this happens, know that Open MPI plugins call functions back up in the main Open MPI libraries.  As a crass-and-not-really-correct-but-close-enough example, consider that OMPI plugins are created (sorta) like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;gcc my_plugin_source.c ... -L&lt;dir&gt; -lmpi --shared -o mca_framework_component.so
<br>
<p>where libmpi.so is a shared library.  These plugins are not making MPI standardized API function calls; they're calling internal functions inside libmpi.so (i.e., OMPI's internal implementation API).  This is because libmpi.so (and friends) have a whole lotta infrastructure that the plugins need in order to be able to do their work.
<br>
<p>It's a fun use of the intelligence of linkers -- a normal MPI app is linked against OMPI's libmpi.so, but so is mca_framework_component.so.  When your app calls MPI_Init, the normal run-time linker semantics take over, resolve the symbol, and then call it.  Later, mca_framework_component.so is dlopen()'ed.  The run-time linker sees that it needs libmpi.so, but realizes that libmpi.so is already loaded -- so it doesn't load it again.  When mca_framework_component.so calls OMPI_do_something(), the same run-time resolution occurs, and (this is key) it calls the function in the same instance of libmpi.so that your app is using.
<br>
<p>Nifty.  Without this concept, OMPI's plugin concept wouldn't work.
<br>
<p>Your code is dlopening liba2lib as LOCAL.  The run-time linker pulls in libmpi.so at the same time as liba2lib (because MPI_Init needs it) -- and therefore libmpi.so is loaded into the same private space as liba2lib.  But then later, the innards of Open MPI dlopen() mca_framework_component.so.  This plugin is loaded into a DIFFERENT symbol space than libmpi.so.  The key point here is that LOCAL is not &quot;inherited&quot;, so to speak.  If you dlopen() libfoo as LOCAL, if libfoo then dlopen()s more DSOs, those newly-opened DSOs are in a different space than libfoo.
<br>
<p>The best I can guess is that when mca_framework_component.so is dlopen()'ed, the linker says &quot;ya, we have libmpi.so loaded&quot; and it allows the load to complete successfully.  But later when it tries to actually resolve OMPI_do_something(), it fails -- because OMPI_do_something() is in the private/LOCAL symbol space.  And therefore OMPI_do_something has a value of 0.  And it segv's when we try to call through it.  (this paragraph may not be exactly right; but it's probably close -- every time I think I understand linkers, I find out that I don't understand them at all...)
<br>
<p>It works for you in the static case because Open MPI slurps up all the components *into* libmpi.so in that case.  Hence, all the components *and* all the internal libmpi symbols are loaded into the same LOCAL symbol space.  There's no dlopen'ing of plugins in this case.  And it all works fine because everything can resolve nicely, yadda yadda yadda.
<br>
<p>So I think your options are 1) to change that LOCAL to GLOBAL, 2) use &quot;--enable-static --disable-shared&quot;, or 3) use --disable-dlopen.  #2 builds libmpi.a *and* slurps all of OMPI's components up into libmpi.a.  #3 builds libmpi.so *and* slurps all of OMPI's components up into libmpi.so.  So you get the benefits of a shared library, but all the components are physically inside libmpi.so as opposed to being standalone DSO's.
<br>
<p>&lt;/highly complex linker voodoo&gt;
<br>
<p>I hope that made sense!
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
<li><strong>Next message:</strong> <a href="12804.php">Matthew MacManes: "Re: [OMPI users] problem using new OMPI1.4.1 vie SGE"</a>
<li><strong>Previous message:</strong> <a href="12802.php">Teng Lin: "Re: [OMPI users] Bug report in plm_lsf_module.c"</a>
<li><strong>In reply to:</strong> <a href="12766.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12810.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Reply:</strong> <a href="12810.php">Nev: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
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
