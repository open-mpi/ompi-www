<?
$subject_val = "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  7 08:26:18 2010" -->
<!-- isoreceived="20101007122618" -->
<!-- sent="Thu, 7 Oct 2010 14:25:53 +0200 (CEST)" -->
<!-- isosent="20101007122553" -->
<!-- name="Sylvain Jeaugey" -->
<!-- email="sylvain.jeaugey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib" -->
<!-- id="alpine.DEB.2.00.1010071408520.6488_at_jeaugeys.frec.bull.fr" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="alpine.DEB.2.00.0906191312010.4598_at_jeaugeys.frec.bull.fr" -->
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
<strong>Date:</strong> 2010-10-07 08:25:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8581.php">Graham, Richard L.: "Re: [OMPI devel] 1.5 release notes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6279.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi list,
<br>
<p>Remember this old bug ? I think I finally found out what was going wrong.
<br>
<p>The opal &quot;installdirs&quot; framework has two static components : config and 
<br>
env. These components are automatically detected by the MCA system and 
<br>
they are listed in opal/mca/installdirs/base/static-components.h.
<br>
<p>The problem is that no priority is given, while the order matters : the 
<br>
first opened component sets the value.
<br>
<p>When I build the v1.5 branch, I get 1.env 2.config :
<br>
const mca_base_component_t *mca_installdirs_base_static_components[] = {
<br>
&nbsp;&nbsp;&nbsp;&amp;mca_installdirs_env_component,
<br>
&nbsp;&nbsp;&nbsp;&amp;mca_installdirs_config_component,
<br>
&nbsp;&nbsp;&nbsp;NULL
<br>
};
<br>
<p>When I build an RPM *or* the new default branch, I get 1.config 2.env :
<br>
const mca_base_component_t *mca_installdirs_base_static_components[] = {
<br>
&nbsp;&nbsp;&nbsp;&amp;mca_installdirs_config_component,
<br>
&nbsp;&nbsp;&nbsp;&amp;mca_installdirs_env_component,
<br>
&nbsp;&nbsp;&nbsp;NULL
<br>
};
<br>
<p>I don't know why the generated file is not consistent. It may be related 
<br>
to the order in which directories are created.
<br>
<p>Anyway, the first case seems to be what was intended in the first place. 
<br>
Since config sets all the values, having it in first position makes env 
<br>
useless. Besides, in the first configuration, env only needs to sets 
<br>
OPAL_PREFIX and since config sets all other pathes relatively to 
<br>
${prefix}, it works.
<br>
<p>So, how could we solve this ?
<br>
<p>1. Make autogen/configure/whatever generate a consistent 
<br>
static-components.h with env THEN config ;
<br>
<p>2. Add priorities to these components so that env is opened first 
<br>
regardless of its position in the static components array ;
<br>
<p>3. Any other idea ?
<br>
<p>Sylvain
<br>
<p>On Fri, 19 Jun 2009, Sylvain Jeaugey wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 18 Jun 2009, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jun 18, 2009, at 11:25 AM, Sylvain Jeaugey wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My problem seems related to library generation through RPM, not with
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1.3.2, nor the patch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm not sure I understand -- is there something we need to fix in our SRPM?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to dig a bit, but here is the thing : I generated an RPM from the 
</span><br>
<span class="quotelev1">&gt; official openmpi-1.3.2-1.src.rpm (with some defines like install-in-opt, ...) 
</span><br>
<span class="quotelev1">&gt; and the OPAL_PREFIX trick doesn't seem to work with it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But don't take too much time on this, I'll find out why and maybe this is 
</span><br>
<span class="quotelev1">&gt; just me building it the wrong way.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sylvain
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Previous message:</strong> <a href="8581.php">Graham, Richard L.: "Re: [OMPI devel] 1.5 release notes"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2009/06/6279.php">Sylvain Jeaugey: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
<li><strong>Reply:</strong> <a href="8583.php">Ralph Castain: "Re: [OMPI devel] Use of OPAL_PREFIX to relocate a lib"</a>
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
