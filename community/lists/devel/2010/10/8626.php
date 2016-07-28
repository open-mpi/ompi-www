<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 26 06:56:42 2010" -->
<!-- isoreceived="20101026105642" -->
<!-- sent="Tue, 26 Oct 2010 12:55:27 +0200 (CEST)" -->
<!-- isosent="20101026105527" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="alpine.DEB.2.00.1010261247490.1631_at_jeaugeys" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="676DC1FE-AB99-4A46-9983-D7CA8B9122E0_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib<br>
<strong>From:</strong> Sylvain Jeaugey (<em>sylvain.jeaugey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-26 06:55:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>This problem may be a detail, but it bugs me a lot, so I'd like to have it 
<br>
fixed. Here is a patch that changes the path setting algorithm to &quot;last 
<br>
component wins&quot; instead of &quot;first component wins&quot;.
<br>
<p>This is as wrong as was the original code, except that it is 
<br>
consistent with the way autogen.pl generates static-components.h.
<br>
<p>If nobody objects, I'll commit it tomorrow.
<br>
<p>Sylvain
<br>
<p>diff -r c9746f7a683a opal/mca/installdirs/base/installdirs_base_components.c
<br>
--- a/opal/mca/installdirs/base/installdirs_base_components.c	Tue Oct 26 10:56:53 2010 +0200
<br>
+++ b/opal/mca/installdirs/base/installdirs_base_components.c	Tue Oct 26 12:48:41 2010 +0200
<br>
@@ -25,7 +25,7 @@
<br>
<p>&nbsp;&nbsp;#define CONDITIONAL_COPY(target, origin, field)                 \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;do {                                                        \
<br>
-        if (origin.field != NULL &amp;&amp; target.field == NULL) {     \
<br>
+        if (origin.field != NULL) {                             \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;target.field = origin.field;                        \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}                                                       \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} while (0)
<br>
<p>On Thu, 7 Oct 2010, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; What you are seeing is just the difference in how the build system (old vs new vs RPM script) travels across the directory tree. The new build system and RPM do it in alphabetical order, so config comes before env. The old autogen.sh did it in reverse alpha order, so env came before config. I don't think anyone thought it made a difference, though you correctly point to one place where it does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Modifying the build system to have one place do it differently would be a mistake, IMO. The better solution would be to use priorities to order the processing, though that means two passes through the components (one to get the priorities, and then another to execute) and additional API functions in the various modules.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 7, 2010, at 6:25 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi list,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Remember this old bug ? I think I finally found out what was going wrong.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The opal &quot;installdirs&quot; framework has two static components : config and env. These components are automatically detected by the MCA system and they are listed in opal/mca/installdirs/base/static-components.h.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The problem is that no priority is given, while the order matters : the first opened component sets the value.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I build the v1.5 branch, I get 1.env 2.config :
</span><br>
<span class="quotelev2">&gt;&gt; const mca_base_component_t *mca_installdirs_base_static_components[] = {
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;mca_installdirs_env_component,
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;mca_installdirs_config_component,
</span><br>
<span class="quotelev2">&gt;&gt;  NULL
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I build an RPM *or* the new default branch, I get 1.config 2.env :
</span><br>
<span class="quotelev2">&gt;&gt; const mca_base_component_t *mca_installdirs_base_static_components[] = {
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;mca_installdirs_config_component,
</span><br>
<span class="quotelev2">&gt;&gt;  &amp;mca_installdirs_env_component,
</span><br>
<span class="quotelev2">&gt;&gt;  NULL
</span><br>
<span class="quotelev2">&gt;&gt; };
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I don't know why the generated file is not consistent. It may be related to the order in which directories are created.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, the first case seems to be what was intended in the first place. Since config sets all the values, having it in first position makes env useless. Besides, in the first configuration, env only needs to sets OPAL_PREFIX and since config sets all other pathes relatively to ${prefix}, it works.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So, how could we solve this ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1. Make autogen/configure/whatever generate a consistent static-components.h with env THEN config ;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2. Add priorities to these components so that env is opened first regardless of its position in the static components array ;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. Any other idea ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sylvain
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Fri, 19 Jun 2009, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Thu, 18 Jun 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Jun 18, 2009, at 11:25 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My problem seems related to library generation through RPM, not with
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; 1.3.2, nor the patch.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I'm not sure I understand -- is there something we need to fix in our SRPM?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I need to dig a bit, but here is the thing : I generated an RPM from the official openmpi-1.3.2-1.src.rpm (with some defines like install-in-opt, ...) and the OPAL_PREFIX trick doesn't seem to work with it.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But don't take too much time on this, I'll find out why and maybe this is just me building it the wrong way.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sylvain
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8625.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [OMPI svn-full] svn:open-mpi r23936"</a>
<li><strong>In reply to:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8627.php">Jeff Squyres: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
