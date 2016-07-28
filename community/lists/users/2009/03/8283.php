<?
$subject_val = "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 09:47:08 2009" -->
<!-- isoreceived="20090304144708" -->
<!-- sent="Wed, 4 Mar 2009 09:46:59 -0500" -->
<!-- isosent="20090304144659" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Lahey 64 bit and openmpi 1.3?" -->
<!-- id="4E795A2D-F712-488D-BB25-1F6D8101DF2D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="49ABF884.90902_at_coas.oregonstate.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Lahey 64 bit and openmpi 1.3?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-04 09:46:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<li><strong>In reply to:</strong> <a href="8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8336.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 2, 2009, at 10:17 AM, Tiago Silva wrote:
<br>
<p><span class="quotelev1">&gt; Has anyone had success building openmpi with the 64 bit Lahey  
</span><br>
<span class="quotelev1">&gt; fortran compiler? I have seen a previous thread about the problems  
</span><br>
<span class="quotelev1">&gt; with 1.2.6 and am wondering if any progress has been made.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I can build individual libraries by removing -rpath and -soname, and  
</span><br>
<span class="quotelev1">&gt; by compiling the respective objects with -KPIC. Neverheless I  
</span><br>
<span class="quotelev1">&gt; couldn't come up with FCFLAGS and LDFLAGS that would both pass the  
</span><br>
<span class="quotelev1">&gt; makefile tests and build sucessfully.
</span><br>
<p>Unfortunately, I don't think any of us test with the Lahey compiler.   
<br>
So it's quite possible that there may be some issues there.
<br>
<p>Do you know if GNU Libtool supports the Lahey compiler?  We basically  
<br>
support what Libtool supports because Libtool essentially *is* our  
<br>
building process.  So if Libtool doesn't support it, then we likely  
<br>
don't either.
<br>
<p><span class="quotelev1">&gt; How do I find the libtool generated script, as suggested in the  
</span><br>
<span class="quotelev1">&gt; previous thread?
</span><br>
<p>I'm not sure which specific script you're referring to.  The &quot;libtool&quot;  
<br>
script itself should generated after you run &quot;configure&quot; -- it should  
<br>
be in the top-level Open MPI directory.
<br>
<p><span class="quotelev1">&gt; openmpi 1.3
</span><br>
<span class="quotelev1">&gt; Lahey Linux64 8.10a
</span><br>
<span class="quotelev1">&gt; CentOS 5.2
</span><br>
<span class="quotelev1">&gt; Rocks 5.1
</span><br>
<span class="quotelev1">&gt; libtool 1.5.22
</span><br>
<p>FWIW, the version of Libtool that you have installed on your system is  
<br>
likely not too important here.  Open MPI tarballs come bootstrapped  
<br>
with the Libtool that we used to build the tarball -- *that* included  
<br>
Libtool is used to build Open MPI, not the one installed on your  
<br>
system.  We use Libtool 2.2.6a to build Open MPI v1.3.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8284.php">Prentice Bisbal: "Re: [OMPI users] libnuma under ompi 1.3"</a>
<li><strong>Previous message:</strong> <a href="8282.php">Jeff Squyres: "Re: [OMPI users] Calculation stuck in MPI"</a>
<li><strong>In reply to:</strong> <a href="8271.php">Tiago Silva: "[OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8336.php">Tiago Silva: "Re: [OMPI users] Lahey 64 bit and openmpi 1.3?"</a>
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
