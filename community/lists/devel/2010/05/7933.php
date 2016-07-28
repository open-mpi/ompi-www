<?
$subject_val = "Re: [OMPI devel] RFC: Remove all other paffinity components";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 15 11:11:11 2010" -->
<!-- isoreceived="20100515151111" -->
<!-- sent="Sat, 15 May 2010 10:11:05 -0500" -->
<!-- isosent="20100515151105" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] RFC: Remove all other paffinity components" -->
<!-- id="58D723FE08DC6A4398E6596E38F3FA17056798_at_XMB-RCD-205.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="272832AB-B88D-4E69-A2A8-ADC526EAF435_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-05-15 11:11:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hwloc supports mac topology (not binding because osx doesn't (publicly) support binding). 
<br>
<p>But I definitely agree that soak time is necessary. I put a timeout of about 2 weeks; I thought that should be enough. But there's really no rush. 
<br>
<p>-jms
<br>
Sent from my PDA.  No type good.
<br>
<p>----- Original Message -----
<br>
From: devel-bounces_at_[hidden] &lt;devel-bounces_at_[hidden]&gt;
<br>
To: Open MPI Developers &lt;devel_at_[hidden]&gt;
<br>
Sent: Sat May 15 09:02:28 2010
<br>
Subject: Re: [OMPI devel] RFC: Remove all other paffinity components
<br>
<p>Umm...I vote &quot;no&quot;. I still need that &quot;test&quot; component to use when testing paffinity on machines that don't have all the required support (e.g., Mac).
<br>
<p>I don't have an opinion on the other components.
<br>
<p><p>On May 13, 2010, at 6:20 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; WHAT: Remove all non-hwloc paffinity components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHY: The hwloc component supports all those systems.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHERE: opal/mca/paffinity/[^hwloc|base] directories
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; WHEN: for 1.5.1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; TIMEOUT: Tuesday call, May 25 (yes, about 2 weeks from now -- let hwloc soak for a while...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; MORE DETAILS:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you probably noticed, I have (finally) committed the &quot;hwloc&quot; paffinity component to the trunk and removed the &quot;linux&quot; (i.e., PLPA) paffinity component:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/23125">https://svn.open-mpi.org/trac/ompi/changeset/23125</a>
</span><br>
<span class="quotelev1">&gt;    <a href="https://svn.open-mpi.org/trac/ompi/changeset/23126">https://svn.open-mpi.org/trac/ompi/changeset/23126</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; hwloc supports all systems that OMPI supports (and several that OMPI doesn't!) -- more specifically, it supports all the other systems that we have paffinity components for (darwin, linux, posix, solaris, windows).  It can therefore fully replace all the other paffinity components.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, the new hwloc's default priority is higher than all of the other current paffinity components, so over the next week or two, it'll be a good soak test to see if it is working properly.  Once we get any kinks worked out, I propose removing all the other paffinity components and leaving only hwloc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That being said, we might as well leave the paffinity framework around, even if it only has one component left, simply on the argument that someday Open MPI may support a platform that hwloc does not.
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
<p><p>_______________________________________________
<br>
devel mailing list
<br>
devel_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Previous message:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>In reply to:</strong> <a href="7932.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
<li><strong>Reply:</strong> <a href="7934.php">Ralph Castain: "Re: [OMPI devel] RFC: Remove all other paffinity components"</a>
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
