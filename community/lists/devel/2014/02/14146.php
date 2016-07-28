<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 14 11:35:39 2014" -->
<!-- isoreceived="20140214163539" -->
<!-- sent="Fri, 14 Feb 2014 16:35:37 +0000" -->
<!-- isosent="20140214163537" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="EE5A3F2E-2D0C-4337-95E8-597EF061FD91_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140214163408.GM24474_at_lisas.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] new CRS component added (criu)<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-14 11:35:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14147.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>Previous message:</strong> <a href="14145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>In reply to:</strong> <a href="14144.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Perfect; cloning now.  Thanks!
<br>
<p>On Feb 14, 2014, at 11:34 AM, Adrian Reber &lt;adrian_at_[hidden]&gt;
<br>
&nbsp;wrote:
<br>
<p><span class="quotelev1">&gt; Sure. I added the cloneurl information:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/~adrian/open-mpi.git">https://lisas.de/~adrian/open-mpi.git</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Fri, Feb 14, 2014 at 04:30:05PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can I clone your git tree and send you a patch?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 11, 2014, at 4:45 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, Feb 11, 2014 at 08:09:35PM +0000, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Feb 8, 2014, at 4:49 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; I note you have a stray $3 at the end of your configure.m4, too (it might supposed to be $2?).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I think I do not really understand configure.m4 and was happy to just
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; copy it from blcr. Especially what $2 and $3 mean and how they are
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; supposed to be used. I will try to simplify my configure.m4. Is there an
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; example which I can have a look at?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Sorry -- been a bit busy with releasing OMPI 1.7.4 and preparing for 1.7.5...
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; m4 is a macro language, so think of it as templates with some intelligence.  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; $1, $2, and $3 are the &quot;parameters&quot; passed in to the macro.  So when you do something like:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; AC_DEFUN([FOO], [
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  echo 1 is $1
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  echo 2 is $2])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; and you invoke that macro via
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  FOO([hello world], [goodbye world])
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the generated script will contain:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  echo 1 is hello world
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;  echo 2 is goodbye world
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In our case, $1 is the action to execute if the package is happy / wants to build, and $2 is the action to execute if the package is unhappy / does not want to build.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Meaning: we have a top-level engine that is iterating over all frameworks and components, and calling their *_CONFIG macros with appropriate $1 and $2 values that expand to actions-to-execute-if-happy / actions-to-execute-if-unhappy.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Make sense?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks. I also tried to understand the macros better and with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated output and your description I think I understand it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Trying to simplify configure.m4 like you suggested I would change this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   AS_IF([test &quot;$check_crs_criu_good&quot; != &quot;yes&quot;], [$2],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [AS_IF([test ! -z &quot;$with_criu&quot; -a &quot;$with_criu&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                [check_crs_criu_dir=&quot;$with_criu&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 check_crs_criu_dir_msg=&quot;$with_criu (from --with-criu)&quot;])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          AS_IF([test ! -z &quot;$with_criu_libdir&quot; -a &quot;$with_criu_libdir&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                [check_crs_criu_libdir=&quot;$with_criu_libdir&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 check_crs_criu_libdir_msg=&quot;$with_criu_libdir (from --with-criu-libdir)&quot;])
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AS_IF([test &quot;$check_crs_criu_good&quot; = &quot;yes&quot; -a ! -z &quot;$with_criu&quot; -a &quot;$with_criu&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [check_crs_criu_dir=&quot;$with_criu&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         check_crs_criu_dir_msg=&quot;$with_criu (from --with-criu)&quot;], 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [$2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         check_crs_criu_good=&quot;no&quot;])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  AS_IF([test &quot;$check_crs_criu_good&quot; = &quot;yes&quot; -a ! -z &quot;$with_criu_libdir&quot; -a &quot;$with_criu_libdir&quot; != &quot;yes&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [check_crs_criu_dir_libdir=&quot;$with_criu_libdir&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         check_crs_criu_dir_libdir_msg=&quot;$with_criu_libdir (from --with-criu)&quot;],
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        [$2
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         check_crs_criu_good=&quot;no&quot;])
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct? With three checks in one line it seems bit unreadable
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the nested AS_IF seems easier for me to understand.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Did I understand it correctly what you meant or did you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mean something else?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 		Adrian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14147.php">Hjelm, Nathan T: "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>Previous message:</strong> <a href="14145.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] mca_base_component_var_register()	MCA_BASE_VAR_TYPE_STRING"</a>
<li><strong>In reply to:</strong> <a href="14144.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14148.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
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
