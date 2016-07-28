<?
$subject_val = "Re: [OMPI devel] errors and warnings with show_help() usage";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 11 02:07:27 2014" -->
<!-- isoreceived="20140811060727" -->
<!-- sent="Mon, 11 Aug 2014 15:07:25 +0900" -->
<!-- isosent="20140811060725" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] errors and warnings with show_help() usage" -->
<!-- id="53E85D9D.3000400_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DD7AC547-36D7-4457-A3A8-BB3C2EF9EF30_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] errors and warnings with show_help() usage<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-11 02:07:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15603.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>In reply to:</strong> <a href="15554.php">Jeff Squyres (jsquyres): "[OMPI devel] errors and warnings with show_help() usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15611.php">Ralph Castain: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Reply:</strong> <a href="15611.php">Ralph Castain: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Reply:</strong> <a href="15613.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff and all,
<br>
<p>i fixed the trivial errors in the trunk, there are now 11 non trivial
<br>
errors.
<br>
(commits r32490 to r32497)
<br>
<p>i ran the script vs the v1.8 branch and found 54 errors
<br>
(first, you need to
<br>
touch Makefile.ompi-rules
<br>
in the top-level Open MPI directory in order to make the script happy)
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 2014/08/08 22:43, Jeff Squyres (jsquyres) wrote:
<br>
<span class="quotelev1">&gt; SHORT VERSION
</span><br>
<span class="quotelev1">&gt; =============
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The ./contrib/check-help-strings.pl script is showing ***47 coding errors*** with regards to using show_help() in components.  Here's a summary of the offenders:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - ORTE (lumped together because there's a single maintainer :-) )
</span><br>
<span class="quotelev1">&gt; - smcuda and cuda
</span><br>
<span class="quotelev1">&gt; - common/verbs
</span><br>
<span class="quotelev1">&gt; - bcol
</span><br>
<span class="quotelev1">&gt; - mxm
</span><br>
<span class="quotelev1">&gt; - openib
</span><br>
<span class="quotelev1">&gt; - oshmem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Could the owners of these portions of the code base please run ./contrib/check-help-strings.pl and fix the ERRORs that are shown?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MORE DETAIL
</span><br>
<span class="quotelev1">&gt; ===========
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The first part of ./contrib/check-help-strings.pl's output shows ERRORs -- referring to help files that do not exist, or referring to help topics that do not exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm only calling out the ERRORs in this mail -- but the second part of the output shows a bazillion WARNINGs, too.  These are help topics that are probably unused -- they don't seem to be referenced by the code anywhere.  
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It would be good to clean up all the WARNINGs, too, but the ERRORs are more worrisome.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15603.php">Kawashima, Takahiro: "Re: [OMPI devel] [OMPI users] bus error with openmpi-1.8.2rc4r32485 and gcc-4.9.0"</a>
<li><strong>Previous message:</strong> <a href="15601.php">Gilles Gouaillardet: "Re: [OMPI devel] ibm abort test hangs on one node"</a>
<li><strong>In reply to:</strong> <a href="15554.php">Jeff Squyres (jsquyres): "[OMPI devel] errors and warnings with show_help() usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15611.php">Ralph Castain: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Reply:</strong> <a href="15611.php">Ralph Castain: "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
<li><strong>Reply:</strong> <a href="15613.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] errors and warnings with show_help() usage"</a>
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
