<?
$subject_val = "Re: [OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 12:11:50 2012" -->
<!-- isoreceived="20120529161150" -->
<!-- sent="Tue, 29 May 2012 12:11:45 -0400" -->
<!-- isosent="20120529161145" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The option &amp;quot;--mca hwloc_base_mem_alloc_policy local_only&amp;quot; doesn't bind memory to numa node" -->
<!-- id="57648742-448D-49C9-AAE2-D2A67EEDB85F_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4FC3D695.7050308_at_calculquebec.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 12:11:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19393.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19387.php">Fran&#231;ois Guertin: "[OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 28, 2012, at 3:48 PM, Fran&#231;ois Guertin wrote:
<br>
<p><span class="quotelev1">&gt; I try to bind both the memory and processes on our compute cluster nodes
</span><br>
<span class="quotelev1">&gt; but only the processes binding works. How can I also specify to allocate
</span><br>
<span class="quotelev1">&gt; the memory on the same numa node than where the process is bind? I tried
</span><br>
<span class="quotelev1">&gt; with the option  &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; without
</span><br>
<span class="quotelev1">&gt; any luck.
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<p>Thanks for your very detailed message -- it made it possible to completely understand your question, and (hopefully) answer it properly.  :-)
<br>
<p>I think the issue here is that the help message for hwloc_base_mem_alloc_policy isn't quite worded properly:
<br>
<p><span class="quotelev2">&gt;&gt; MCA hwloc: parameter &quot;hwloc_base_mem_alloc_policy&quot; (current value:
</span><br>
<span class="quotelev2">&gt;&gt; &lt;none&gt;, data source: default value)
</span><br>
<span class="quotelev2">&gt;&gt;                          Policy that determines how general memory
</span><br>
<span class="quotelev2">&gt;&gt; allocations are bound after MPI_INIT.  A value of &quot;none&quot; means that no
</span><br>
<span class="quotelev2">&gt;&gt; memory policy is applied.  A value of &quot;local_only&quot; means that all
</span><br>
<span class="quotelev2">&gt;&gt; memory allocations will be restricted to the local NUMA node where
</span><br>
<span class="quotelev2">&gt;&gt; each process is placed.  Note that operating system paging policies
</span><br>
<span class="quotelev2">&gt;&gt; are unaffected by this setting.  For example, if &quot;local_only&quot; is used
</span><br>
<span class="quotelev2">&gt;&gt; and local NUMA node memory is exhausted, a new memory allocation may
</span><br>
<span class="quotelev2">&gt;&gt; cause paging.
</span><br>
<p>At issue is the fact that I probably should not have used to word &quot;bound&quot; in the first sentence, and probably clarified that memory is *not* bound. 
<br>
<p>Specifically, when you set hwloc_base_mem_alloc_policy to &quot;local_only&quot;, that only sets the policy of where newly malloced code is placed.  Even more specifically: it does *not* bind the memory, meaning that if your process' memory is swapped out, it could get swapped in to a new location (yoinks!).
<br>
<p>That being said, most HPC apps don't swap, so it's *usually* not an issue.  But, of course, after you malloc memory (which will be physically located on your local NUMA node), you could bind it, too, if you want.
<br>
<p>Open MPI doesn't bind user-allocated memory (except possibly those that are passed as message buffers to functions like MPI_SEND and MPI_RECV) because that would mean that we have to intercept calls like malloc, calloc, etc.  And we don't really want to be in that business.
<br>
<p>(disclaimer: we sorta do intercept malloc, calloc, etc. in some cases -- but we really don't want to, and don't do it in all cases.  I can explain more if you care)
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
<li><strong>Next message:</strong> <a href="19393.php">Jeff Squyres: "Re: [OMPI users] Compilation problem (configure) with Intel 12.0.4 and OpenMPI 1.6"</a>
<li><strong>Previous message:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19387.php">Fran&#231;ois Guertin: "[OMPI users] The option &quot;--mca hwloc_base_mem_alloc_policy local_only&quot; doesn't bind memory to numa node"</a>
<!-- nextthread="start" -->
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
