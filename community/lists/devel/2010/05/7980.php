<?
$subject_val = "Re: [OMPI devel] trunk breakage";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 22 10:43:21 2010" -->
<!-- isoreceived="20100522144321" -->
<!-- sent="Sat, 22 May 2010 10:43:15 -0400" -->
<!-- isosent="20100522144315" -->
<!-- name="Joshua Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] trunk breakage" -->
<!-- id="6B5323C8-FBA3-42F5-A2F5-00A7EEF1094E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FCF1DDCF-4CDD-4BBE-A295-AFA526D13EA8_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] trunk breakage<br>
<strong>From:</strong> Joshua Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-22 10:43:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7981.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7981.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="7981.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Along with this, the exit code from mpirun is not correct. It is returning 1, even when the run was successful. This is showing up in MTT, where the trivial test suite is failing things like 'hello world' since the return code is not what was expected.
<br>
<p>Ralph is looking into this, but I just wanted to give people a heads up.
<br>
<p>-- Josh
<br>
<p>On May 21, 2010, at 12:59 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Both things should now be fixed.  Please let me know if you run into problems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's a few more fixes coming in paffinity, but base functionality should be restored.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 21, 2010, at 10:45 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; There's two things broken on the trunk right now:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 1. I broke internal libltdl builds.  Grr.  Should have a fix shortly.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 2. Paffinity is broken -- if you try to run with any binding, you'll get an error.  It looks like some OPAL_SOS stuff broke it (error code checking conversion stuff).  Ralph and I talked on the phone and agreed on a fix; I'll get to it after I fix #1.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Sorry folks...
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7981.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Previous message:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>In reply to:</strong> <a href="7979.php">Jeff Squyres: "Re: [OMPI devel] trunk breakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7981.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
<li><strong>Reply:</strong> <a href="7981.php">Ralph Castain: "Re: [OMPI devel] trunk breakage"</a>
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
