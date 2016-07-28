<?
$subject_val = "Re: [OMPI devel] new CRS component added (criu)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  7 17:08:51 2014" -->
<!-- isoreceived="20140207220851" -->
<!-- sent="Fri, 7 Feb 2014 22:08:48 +0000" -->
<!-- isosent="20140207220848" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] new CRS component added (criu)" -->
<!-- id="3E73D97D-EA33-4C11-92E5-2C613B432851_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20140207214607.GD4981_at_lisas.de" -->
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
<strong>Date:</strong> 2014-02-07 17:08:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14041.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14039.php">Nathan Hjelm: "[OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14037.php">Adrian Reber: "[OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14048.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14048.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sweet -- +1 for CRIU support!
<br>
<p>FWIW, I see you modeled your configure.m4 off the blcr configure.m4, but I'd actually go with making it a bit simpler.  For example, I typically structure my configure.m4's like this (typed in mail client -- forgive mistakes...):
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;AS_IF([...some test....], [crs_criu_happy=1], [crs_criu_happy=0])
<br>
&nbsp;&nbsp;&nbsp;# Only bother doing the next test if the previous one passed
<br>
&nbsp;&nbsp;&nbsp;AS_IF([test $crs_criu_happy -eq 1 &amp;&amp; ...next test....], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[crs_criu_happy=1], [crs_criu_happy=0])
<br>
&nbsp;&nbsp;&nbsp;# Only bother doing the next test if the previous one passed
<br>
&nbsp;&nbsp;&nbsp;AS_IF([test $crs_criu_happy -eq 1 &amp;&amp; ...next test....], 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[crs_criu_happy=1], [crs_criu_happy=0])
<br>
<p>&nbsp;&nbsp;&nbsp;...etc...
<br>
<p>&nbsp;&nbsp;&nbsp;# Put a single execution of $2 and $3 at the end, depending on how the 
<br>
&nbsp;&nbsp;&nbsp;# above tests go.  If a human asked for criu (e.g., --with-criu) and
<br>
&nbsp;&nbsp;&nbsp;# we can't find criu support, that's a fatal error.
<br>
&nbsp;&nbsp;&nbsp;AS_IF([test $crs_criu_happy -eq 1],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$2],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AS_IF([test &quot;$with_criu&quot; != &quot;x&quot; &amp;&amp; &quot;x$with_criu&quot; != &quot;xno&quot;],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[AC_MSG_WARN([You asked for CRIU support, but I can't find it.])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_MSG_ERROR([Cannot continue])],
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[$1])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;])
<br>
-----
<br>
<p>I note you have a stray $3 at the end of your configure.m4, too (it might supposed to be $2?).
<br>
<p>Finally, I note you're looking for libcriu.  Last time I checked with the CRIU guys -- which was quite a while ago -- that didn't exist (but I put in my $0.02 that OMPI would like to see such a userspace library).  I take it that libcriu now exists?
<br>
<p><p><p><p><p>On Feb 7, 2014, at 4:46 PM, Adrian Reber &lt;adrian_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I have created a new CRS component using criu (criu.org) to support
</span><br>
<span class="quotelev1">&gt; checkpoint/restart in Open MPI. My current patch only provides the
</span><br>
<span class="quotelev1">&gt; framework and necessary configure scripts to detect and link against
</span><br>
<span class="quotelev1">&gt; criu. With this patch orte-checkpoint can request a checkpoint and the
</span><br>
<span class="quotelev1">&gt; new CRIU CRS component is used:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] orte_cr: init: orte_cr_init()
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] crs:criu: opal_crs_criu_prelaunch
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] crs:criu: opal_crs_criu_prelaunch
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Verbose Level: 30
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: FT Enabled: true
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Is a tool program: false
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Debug SIGPIPE: 30 (False)
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Checkpoint Signal: 10
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: FT Use thread: true
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: FT thread sleep: check = 0, wait = 100
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: C/R Debugging Enabled [False]
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Checkpoint Signal (Debug): 20
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: init: Temp Directory: /tmp
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord: orte_cr_coord(Checkpoint)
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord_pre_ckpt: orte_cr_coord_pre_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord_post_ckpt: orte_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] ompi_cr: coord_post_ckpt: ompi_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] opal_cr: opal_cr_inc_core_ckpt: Take the checkpoint.
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] crs:criu: checkpoint(13772, ---)
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] crs:criu: criu_init_opts() returned 0
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] orte_cr: coord_post_ckpt: orte_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] ompi_cr: coord_post_ckpt: ompi_cr_coord_post_ckpt()
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] opal_cr: opal_cr_inc_core_ckpt: Take the checkpoint.
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] crs:criu: checkpoint(13771, ---)
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] crs:criu: criu_init_opts() returned 0
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] 13766: Checkpoint established for process [55729,0].
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] ompi_cr: coord: ompi_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; [dcbz:13771] orte_cr: coord: orte_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; [dcbz:13766] 13766: Successfully restarted process [55729,0].
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] ompi_cr: coord: ompi_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; [dcbz:13772] orte_cr: coord: orte_cr_coord(Running)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It seems the C/R code basically works again and now needs to be filled
</span><br>
<span class="quotelev1">&gt; with the actual code to take checkpoints using criu.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch I want to check in is available at:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; <a href="https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=7e0c7c940705cc572242097ff53f9e0ee6db11ea">https://lisas.de/git/?p=open-mpi.git;a=commitdiff;h=7e0c7c940705cc572242097ff53f9e0ee6db11ea</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The patch only creates files in opal/mca/crs/criu and does not touch any
</span><br>
<span class="quotelev1">&gt; other code.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 		Adrian
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
<li><strong>Next message:</strong> <a href="14041.php">Paul Hargrove: "Re: [OMPI devel] Update on 1.7.5"</a>
<li><strong>Previous message:</strong> <a href="14039.php">Nathan Hjelm: "[OMPI devel] RFC: optimize probe in ob1"</a>
<li><strong>In reply to:</strong> <a href="14037.php">Adrian Reber: "[OMPI devel] new CRS component added (criu)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14048.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14048.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] new CRS component added (criu)"</a>
<li><strong>Reply:</strong> <a href="14054.php">Adrian Reber: "Re: [OMPI devel] new CRS component added (criu)"</a>
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
