<?
$subject_val = "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 30 06:49:46 2009" -->
<!-- isoreceived="20090430104946" -->
<!-- sent="Thu, 30 Apr 2009 06:49:04 -0400" -->
<!-- isosent="20090430104904" -->
<!-- name="Terry Dontje" -->
<!-- email="Terry.Dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library" -->
<!-- id="49F98220.2070806_at_sun.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="01624B31-9F5D-4A71-8C9A-3A78FC568B83_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library<br>
<strong>From:</strong> Terry Dontje (<em>Terry.Dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-30 06:49:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5912.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="5912.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 29, 2009, at 5:03 PM, Brian Blank wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Purify did find some other UMR (unitialize memory read) errors 
</span><br>
<span class="quotelev2">&gt;&gt; though, but they don't seem to be negativley impacting my application 
</span><br>
<span class="quotelev2">&gt;&gt; right now.  Nonetheless, I'll post them later today in case anyone is 
</span><br>
<span class="quotelev2">&gt;&gt; interested in them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Might as well; we've looked at such things before, but it's always 
</span><br>
<span class="quotelev1">&gt; good to refresh for bit rot, etc.  Many thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Just to give you a sample of what it see's now, one of the UMR errors 
</span><br>
<span class="quotelev2">&gt;&gt; seems a little odd ... paffinity_solaris_module.c line 180.
</span><br>
<span class="quotelev2">&gt;&gt; if (P_ONLINE == pinfo.pi_state || P_NOINTR == pinfo.pi_state) {
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We'll have to throw this one to the Sun guys... that's their module.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
Actually, I think this error is a false positive.  If you look at the 
<br>
line before it &amp;pinfo is passed into the processor_info function which 
<br>
initializes pinfo.
<br>
<p>--td
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5914.php">Number Cruncher: "Re: [OMPI devel] predefined ompi_t types break strict-aliasing rules"</a>
<li><strong>Previous message:</strong> <a href="5912.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
<li><strong>In reply to:</strong> <a href="5912.php">Jeff Squyres: "Re: [OMPI devel] Fwd: Purify found bugs inside open-mpi library"</a>
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
