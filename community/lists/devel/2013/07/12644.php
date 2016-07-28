<?
$subject_val = "Re: [OMPI devel] ompi_info";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 18 09:06:13 2013" -->
<!-- isoreceived="20130718130613" -->
<!-- sent="Thu, 18 Jul 2013 06:06:06 -0700" -->
<!-- isosent="20130718130606" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] ompi_info" -->
<!-- id="A81595BB-8098-4809-B7C7-650807C472F7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="FD325276-FA66-45DB-A217-F23DCD8F92F9_at_icl.utk.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-18 09:06:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>Previous message:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12647.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 18, 2013, at 5:46 AM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 17, 2013, at 20:15 , &quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 17, 2013, at 12:16 PM, Nathan Hjelm &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As Ralph suggested you need to pass the --level or -l option to see all the variables. --level 9 will print everything. If you think there are variables everyday users should see you are welcome to change them to OPAL_INFO_LVL_1. We are trying to avoid moving too many variables to this info level.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think George might have a point here, though.  He was specifically asking about the --all option, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I think it might be reasonable for &quot;ompi_info --all&quot; to actually show *all* MCA params (up through level 9).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks Jeff,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm totally puzzled by the divergence in opinion in this community on the word ALL. ALL like in &quot;every single one of them&quot;, not like in &quot;4 poorly chosen MCA arguments that I don't even know how to care about&quot;.
</span><br>
<p>I don't think there is a divergence of opinion on this - I think it was likely a programming oversight. I certainly would agree that all should operate that way.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thoughts?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Give back to the word ALL it's original meaning: &quot;the whole quantity or extent of a group&quot;. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Btw, something is wrong i the following output. I have an &quot;btl = sm,self&quot; in my .openmpi/mca-params.conf so I should not even see the BTL TCP parameters.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think ompi_info has always shown all the variables despite what you have the selection variable set (at least in some cases). We now just display everything in all cases. An additional benefit to the updated code is that if you set a selection variable through the environment (OMPI_MCA_btl=self,sm) it no longer appears as unset in ompi_info. The old code unset all selection variables in order to ensure all parameters got printed (very annoying but necessary).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph comment above is not accurate. Prior to this change (well the one from few weeks ago), explicitly forbidden components did not leave traces in the MCA parameters list. I validate this with the latest stable.
</span><br>
<p>FWIW: that wasn't my comment
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Yes, I think I like this new behavior better, too.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Does anyone violently disagree?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Yes. This behavior means the every single MPI process out there will 1) load all existing .so components, and 2) will give them a chance to leave undesired traces in the memory of the application. So first we generate an increased I/O traffic, and 2) we use memory that shouldn't be used. We can argue about the impact of all this, but from my perspective what I see is that Open MPI is doing it when explicit arguments to prevent the usage of these component were provided.
</span><br>
<p>That's a good point, and a bad behavior. IIRC, it results from the MPI Forum's adoption of the MPI-T requirement that stipulates we must allow access to all control and performance variables at startup so they can be externally seen/manipulated. I guess the question is: does that truly mean &quot;all&quot; per your proposed definition, or &quot;all that fall within the pre-given MCA directives on components&quot;?
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  George.
</span><br>
<span class="quotelev1">&gt; 
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
<li><strong>Next message:</strong> <a href="12645.php">Ralph Castain: "Re: [OMPI devel] pmi2 slurm/openmpi patch"</a>
<li><strong>Previous message:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<li><strong>In reply to:</strong> <a href="12643.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12646.php">David Goodell (dgoodell): "Re: [OMPI devel] ompi_info"</a>
<li><strong>Reply:</strong> <a href="12647.php">George Bosilca: "Re: [OMPI devel] ompi_info"</a>
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
