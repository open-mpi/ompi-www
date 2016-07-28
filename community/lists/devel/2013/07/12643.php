<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 08:46:27 2013" -->
<!-- isoreceived="20130718124627" -->
<!-- sent="Thu, 18 Jul 2013 14:46:25 +0200" -->
<!-- isosent="20130718124625" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="FD325276-FA66-45DB-A217-F23DCD8F92F9_at_icl.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EF66BBEB19BADC41AC8CCF5F684F07FC4F725C12_at_xmb-rcd-x01.cisco.com" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 08:46:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12642.php">Piotr Lesnicki: "[OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>In reply to:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 17, 2013, at 20:15 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 17, 2013, at 12:16 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As Ralph suggested you need to pass the --level or -l option to see all the variables. --level 9 will print everything. If you think there are variables everyday users should see you are welcome to change them to OPAL_INFO_LVL_1. We are trying to avoid moving too many variables to this info level.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think George might have a point here, though.  He was specifically asking about the --all option, right?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think it might be reasonable for &quot;ompi_info --all&quot; to actually show *all* MCA params (up through level 9).
</span><br>
<p>Thanks Jeff,
<br>
<p>I'm totally puzzled by the divergence in opinion in this community on the word ALL. ALL like in &quot;every single one of them&quot;, not like in &quot;4 poorly chosen MCA arguments that I don't even know how to care about&quot;.
<br>
<p><span class="quotelev1">&gt; Thoughts?
</span><br>
<p>Give back to the word ALL it's original meaning: &quot;the whole quantity or extent of a group&quot;. 
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Btw, something is wrong i the following output. I have an &quot;btl = sm,self&quot; in my .openmpi/mca-params.conf so I should not even see the BTL TCP parameters.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think ompi_info has always shown all the variables despite what you have the selection variable set (at least in some cases). We now just display everything in all cases. An additional benefit to the updated code is that if you set a selection variable through the environment (OMPI_MCA_btl=self,sm) it no longer appears as unset in ompi_info. The old code unset all selection variables in order to ensure all parameters got printed (very annoying but necessary).
</span><br>
<p>Ralph comment above is not accurate. Prior to this change (well the one from few weeks ago), explicitly forbidden components did not leave traces in the MCA parameters list. I validate this with the latest stable.
<br>
<p><span class="quotelev1">&gt; Yes, I think I like this new behavior better, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone violently disagree?
</span><br>
<p>Yes. This behavior means the every single MPI process out there will 1) load all existing .so components, and 2) will give them a chance to leave undesired traces in the memory of the application. So first we generate an increased I/O traffic, and 2) we use memory that shouldn't be used. We can argue about the impact of all this, but from my perspective what I see is that Open MPI is doing it when explicit arguments to prevent the usage of these component were provided.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li><strong>Next message:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Previous message:</strong> <a href="12642.php">Piotr Lesnicki: "[OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>In reply to:</strong> <a href="12641.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12644.php">Ralph Castain: "Re: [OMPI devel] ompi_info"</a>
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
