<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 16:45:22 2014" -->
<!-- isoreceived="20140211214522" -->
<!-- sent="Tue, 11 Feb 2014 22:45:21 +0100" -->
<!-- isosent="20140211214521" -->
<!-- name="Adrian Reber" -->
<!-- email="adrian_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="20140211214521.GB9359_at_lisas.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FDA09ADC-879D-483A-8D71-73EFB37ACFCC_at_cisco.com" -->
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
<strong>From:</strong> Adrian Reber (<em>adrian_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-11 16:45:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, Feb 11, 2014 at 08:09:35PM +0000, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; On Feb 8, 2014, at 4:49 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I note you have a stray $3 at the end of your configure.m4, too (it might supposed to be $2?).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I think I do not really understand configure.m4 and was happy to just
</span><br>
<span class="quotelev2">&gt; &gt; copy it from blcr. Especially what $2 and $3 mean and how they are
</span><br>
<span class="quotelev2">&gt; &gt; supposed to be used. I will try to simplify my configure.m4. Is there an
</span><br>
<span class="quotelev2">&gt; &gt; example which I can have a look at?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry -- been a bit busy with releasing OMPI 1.7.4 and preparing for 1.7.5...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; m4 is a macro language, so think of it as templates with some intelligence.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $1, $2, and $3 are the &quot;parameters&quot; passed in to the macro.  So when you do something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; AC_DEFUN([FOO], [
</span><br>
<span class="quotelev1">&gt;    echo 1 is $1
</span><br>
<span class="quotelev1">&gt;    echo 2 is $2])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and you invoke that macro via
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    FOO([hello world], [goodbye world])
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; the generated script will contain:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    echo 1 is hello world
</span><br>
<span class="quotelev1">&gt;    echo 2 is goodbye world
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In our case, $1 is the action to execute if the package is happy / wants to build, and $2 is the action to execute if the package is unhappy / does not want to build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Meaning: we have a top-level engine that is iterating over all frameworks and components, and calling their *_CONFIG macros with appropriate $1 and $2 values that expand to actions-to-execute-if-happy / actions-to-execute-if-unhappy.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Make sense?
</span><br>
<p>Thanks. I also tried to understand the macros better and with the
<br>
generated output and your description I think I understand it.
<br>
<p>Trying to simplify configure.m4 like you suggested I would change this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$check_crs_criu_good&quot; != &quot;yes&quot;], [$2],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test ! -z &quot;$with_criu&quot; -a &quot;$with_criu&quot; != &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[check_crs_criu_dir=&quot;$with_criu&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_crs_criu_dir_msg=&quot;$with_criu (from --with-criu)&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_IF([test ! -z &quot;$with_criu_libdir&quot; -a &quot;$with_criu_libdir&quot; != &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[check_crs_criu_libdir=&quot;$with_criu_libdir&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_crs_criu_libdir_msg=&quot;$with_criu_libdir (from --with-criu-libdir)&quot;])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
<p>to this:
<br>
<p>&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$check_crs_criu_good&quot; = &quot;yes&quot; -a ! -z &quot;$with_criu&quot; -a &quot;$with_criu&quot; != &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[check_crs_criu_dir=&quot;$with_criu&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_crs_criu_dir_msg=&quot;$with_criu (from --with-criu)&quot;], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_crs_criu_good=&quot;no&quot;])
<br>
<p>&nbsp;&nbsp;&nbsp;AS_IF([test &quot;$check_crs_criu_good&quot; = &quot;yes&quot; -a ! -z &quot;$with_criu_libdir&quot; -a &quot;$with_criu_libdir&quot; != &quot;yes&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[check_crs_criu_dir_libdir=&quot;$with_criu_libdir&quot;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_crs_criu_dir_libdir_msg=&quot;$with_criu_libdir (from --with-criu)&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;check_crs_criu_good=&quot;no&quot;])
<br>
<p><p>correct? With three checks in one line it seems bit unreadable
<br>
and the nested AS_IF seems easier for me to understand.
<br>
Did I understand it correctly what you meant or did you
<br>
mean something else?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Adrian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14107.php">Ralph Castain: "[OMPI devel] 1.7.5 status"</a>
<li><strong>Previous message:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>In reply to:</strong> <a href="14105.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14142.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
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
