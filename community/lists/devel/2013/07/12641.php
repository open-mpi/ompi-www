<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 17 14:15:29 2013" -->
<!-- isoreceived="20130717181529" -->
<!-- sent="Wed, 17 Jul 2013 18:15:24 +0000" -->
<!-- isosent="20130717181524" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F725C12_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="20130717161633.GP18047_at_pantheralanlgov.local" -->
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
<strong>Subject:</strong> Re: [OMPI devel] ompi_info<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-17 14:15:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12642.php">Piotr Lesnicki: "[OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>Previous message:</strong> <a href="12640.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12640.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2013, at 12:16 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; As Ralph suggested you need to pass the --level or -l option to see all the variables. --level 9 will print everything. If you think there are variables everyday users should see you are welcome to change them to OPAL_INFO_LVL_1. We are trying to avoid moving too many variables to this info level.
</span><br>
<p>I think George might have a point here, though.  He was specifically asking about the --all option, right?
<br>
<p>I think it might be reasonable for &quot;ompi_info --all&quot; to actually show *all* MCA params (up through level 9).
<br>
<p>Thoughts?
<br>
<p><span class="quotelev2">&gt;&gt; Btw, something is wrong i the following output. I have an &quot;btl = sm,self&quot; in my .openmpi/mca-params.conf so I should not even see the BTL TCP parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think ompi_info has always shown all the variables despite what you have the selection variable set (at least in some cases). We now just display everything in all cases. An additional benefit to the updated code is that if you set a selection variable through the environment (OMPI_MCA_btl=self,sm) it no longer appears as unset in ompi_info. The old code unset all selection variables in order to ensure all parameters got printed (very annoying but necessary).
</span><br>
<p>Yes, I think I like this new behavior better, too.
<br>
<p>Does anyone violently disagree?
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
<li><strong>Next message:</strong> <a href="12642.php">Piotr Lesnicki: "[OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>Previous message:</strong> <a href="12640.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12640.php">Nathan Hjelm: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
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
