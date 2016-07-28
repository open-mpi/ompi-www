<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 16:39:50 2010" -->
<!-- isoreceived="20100515203950" -->
<!-- sent="Sat, 15 May 2010 14:39:40 -0600" -->
<!-- isosent="20100515203940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="D72E0D90-A1E4-40B4-90A9-73FAE8BC43B7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C6C52439-8832-4FB3-82D8-453464F3095D_at_eecs.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] RFC: Remove all other paffinity components<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 16:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7936.php">George Bosilca: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7936.php">George Bosilca: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7950.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7950.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
So, to ensure I understand, you are proposing that we completely eliminate the paffinity framework and commit to hwloc in its place?
<br>
<p>I'm not necessarily opposed to the idea, so long as &quot;test&quot; can be supported as you describe. However, I do have a concern about becoming so strongly dependent on hwloc - a software package we do not control, written by non-members of our community with whom we have little interaction. The event lib is one example of that model, and it hasn't work out that great.
<br>
<p>I guess we always have the option of re-installing the paffinity framework...but that might not be so easy to do.
<br>
<p>So if we do what you propose, who would go in and revamp everywhere that currently calls paffinity? (ie, don't look at me). Why not just revamp the paffinity framework API and retain an easy ability to revert if, for example, INRIA stops being funded for hwloc and drops support for it?
<br>
<p>On May 15, 2010, at 11:28 AM, George Bosilca wrote:
<br>
<p><span class="quotelev1">&gt; The problem here is that if we keep out component approach we cannot use the full power of the hwloc API, except if we provide exactly the same. Clearly not a suitable approach.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How about we use one of the &quot;obscure&quot; features of hwloc (hwloc_topology_set_xml: loads an XML file describing a topology), which will force hwloc to load the configuration from the file instead of gathering it from the current environment. I can see two benefits with this approach:
</span><br>
<span class="quotelev1">&gt; 1. we can freely use all hwloc API to gain access to the most obscure architectural features (and we need then if we really want to harness the full potential of current architectures).
</span><br>
<span class="quotelev1">&gt; 2. we can simulate any other architecture as soon as we have a description file. So the current test module will be somehow supported with even more extensive capabilities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  george.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 15, 2010, at 12:19 , Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Oh, I mis-read your mail. Yes, leaving the &quot;test&quot; component is a friendly amendment to this rfc. 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -jms
</span><br>
<span class="quotelev2">&gt;&gt; Sent from my PDA.  No type good.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ----- Original Message -----
</span><br>
<span class="quotelev2">&gt;&gt; From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Developers &lt;devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Sent: Sat May 15 09:02:28 2010
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI devel] RFC: Remove all other paffinity components
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Umm...I vote &quot;no&quot;. I still need that &quot;test&quot; component to use when testing paffinity on machines that don't have all the required support (e.g., Mac).
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I don't have an opinion on the other components.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On May 13, 2010, at 6:20 PM, Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHAT: Remove all non-hwloc paffinity components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHY: The hwloc component supports all those systems.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHERE: opal/mca/paffinity/[^hwloc|base] directories
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WHEN: for 1.5.1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; TIMEOUT: Tuesday call, May 25 (yes, about 2 weeks from now -- let hwloc soak for a while...)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MORE DETAILS:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; As you probably noticed, I have (finally) committed the &quot;hwloc&quot; paffinity component to the trunk and removed the &quot;linux&quot; (i.e., PLPA) paffinity component:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/23125">https://svn.open-mpi.org/trac/ompi/changeset/23125</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  <a href="https://svn.open-mpi.org/trac/ompi/changeset/23126">https://svn.open-mpi.org/trac/ompi/changeset/23126</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; hwloc supports all systems that OMPI supports (and several that OMPI doesn't!) -- more specifically, it supports all the other systems that we have paffinity components for (darwin, linux, posix, solaris, windows).  It can therefore fully replace all the other paffinity components.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Indeed, the new hwloc's default priority is higher than all of the other current paffinity components, so over the next week or two, it'll be a good soak test to see if it is working properly.  Once we get any kinks worked out, I propose removing all the other paffinity components and leaving only hwloc.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; That being said, we might as well leave the paffinity framework around, even if it only has one component left, simply on the argument that someday Open MPI may support a platform that hwloc does not.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="7938.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI devel] The&quot; Missing Symbol&quot; issue and OpenMPI on NetBSD"</a>
<li><strong>Previous message:</strong> <a href="7936.php">George Bosilca: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7936.php">George Bosilca: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7950.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7950.php">Jeff Squyres: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
