<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Feb 11 15:09:37 2014" -->
<!-- isoreceived="20140211200937" -->
<!-- sent="Tue, 11 Feb 2014 20:09:35 +0000" -->
<!-- isosent="20140211200935" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="FDA09ADC-879D-483A-8D71-73EFB37ACFCC_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140208214947.GE4981_at_lisas.de" -->
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
<strong>Date:</strong> 2014-02-11 15:09:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14106.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14106.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14106.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Feb 8, 2014, at 4:49 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; I note you have a stray $3 at the end of your configure.m4, too (it might supposed to be $2?).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think I do not really understand configure.m4 and was happy to just
</span><br>
<span class="quotelev1">&gt; copy it from blcr. Especially what $2 and $3 mean and how they are
</span><br>
<span class="quotelev1">&gt; supposed to be used. I will try to simplify my configure.m4. Is there an
</span><br>
<span class="quotelev1">&gt; example which I can have a look at?
</span><br>
<p>Sorry -- been a bit busy with releasing OMPI 1.7.4 and preparing for 1.7.5...
<br>
<p>m4 is a macro language, so think of it as templates with some intelligence.  
<br>
<p>$1, $2, and $3 are the &quot;parameters&quot; passed in to the macro.  So when you do something like:
<br>
<p>AC_DEFUN([FOO], [
<br>
&nbsp;&nbsp;&nbsp;echo 1 is $1
<br>
&nbsp;&nbsp;&nbsp;echo 2 is $2])
<br>
<p>and you invoke that macro via
<br>
<p>&nbsp;&nbsp;&nbsp;FOO([hello world], [goodbye world])
<br>
<p>the generated script will contain:
<br>
<p>&nbsp;&nbsp;&nbsp;echo 1 is hello world
<br>
&nbsp;&nbsp;&nbsp;echo 2 is goodbye world
<br>
<p>In our case, $1 is the action to execute if the package is happy / wants to build, and $2 is the action to execute if the package is unhappy / does not want to build.
<br>
<p>Meaning: we have a top-level engine that is iterating over all frameworks and components, and calling their *_CONFIG macros with appropriate $1 and $2 values that expand to actions-to-execute-if-happy / actions-to-execute-if-unhappy.
<br>
<p>Make sense?
<br>
<p><span class="quotelev2">&gt;&gt; Finally, I note you're looking for libcriu.  Last time I checked with the CRIU guys -- which was quite a while ago -- that didn't exist (but I put in my $0.02 that OMPI would like to see such a userspace library).  I take it that libcriu now exists?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes criu has introduced libcriu with the 1.1 release. It is used to
</span><br>
<span class="quotelev1">&gt; create RPCs to the criu process running as a service. I submitted a few
</span><br>
<span class="quotelev1">&gt; patches to criu to actually install the headers and libraries and
</span><br>
<span class="quotelev1">&gt; included it in the Fedora package:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://admin.fedoraproject.org/updates/criu-1.1-4.fc20">https://admin.fedoraproject.org/updates/criu-1.1-4.fc20</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is what I am currently using to build against criu.
</span><br>
<p>Gotcha.
<br>
<p>I guess I should go look at that; thanks.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14106.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Previous message:</strong> <a href="14104.php">Ralph Castain: "Re: [OMPI devel] v1.7.4, mpiexec &quot;exit 1&quot; and no other warning - behaviour changed to previous versions"</a>
<li><strong>In reply to:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14106.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14106.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
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
