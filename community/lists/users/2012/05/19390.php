<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 29 10:05:09 2012" -->
<!-- isoreceived="20120529140509" -->
<!-- sent="Tue, 29 May 2012 10:05:03 -0400" -->
<!-- isosent="20120529140503" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc" -->
<!-- id="CD9E9432-CE10-4137-A635-2450AFF50166_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAM9tzSnzGC2MXKdSeHOUoBLvv87sGEovoONxGVOgSsV8_y8RRw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-29 10:05:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19389.php">Rohan Deshpande: "[OMPI users] Gathering results of MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19386.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 27, 2012, at 1:52 PM, Jed Brown wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, May 23, 2012 at 8:29 AM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; And therein lies the problem.  We have a number of users who build Open
</span><br>
<span class="quotelev2">&gt; &gt; MPI statically and even some who build both static and shared libraries in
</span><br>
<span class="quotelev2">&gt; &gt; the same build.  We've never been able to figure out a reasonable way to
</span><br>
<span class="quotelev2">&gt; &gt; guess if we need to add -lhwloc or -ldl, so we add them.  It's better to
</span><br>
<span class="quotelev2">&gt; &gt; list them and have some redundant dependencies (since you have to have the
</span><br>
<span class="quotelev2">&gt; &gt; library anyways) than to not list them and have odd link errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So pkg-config has the --static option for exactly this reason. Let's look at Cairo as an example.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ cat /usr/lib/pkgconfig/cairo.pc 
</span><br>
<span class="quotelev1">&gt; prefix=/usr
</span><br>
<span class="quotelev1">&gt; exec_prefix=${prefix}
</span><br>
<span class="quotelev1">&gt; [snip]
</span><br>
<span class="quotelev1">&gt; $ pkg-config cairo --libs
</span><br>
<span class="quotelev1">&gt; -lcairo
</span><br>
<span class="quotelev1">&gt; $ pkg-config cairo --libs --static
</span><br>
<span class="quotelev1">&gt; -pthread -lcairo -lgobject-2.0 -lffi -lpixman-1 -lfontconfig -lexpat -lfreetype -lbz2 -lpng15 -lz -lm -lxcb-shm -lxcb-render -lXrender -lglib-2.0 -lrt -lpcre -lX11 -lpthread -lxcb -lXau -lXdmcp
</span><br>
<p>We've tossed around ideas such as having the wrappers always assume dynamic linking (e.g., only include a minimum of libraries), and then add another wrapper option like --wrapper:static (or whatever) to know when to add in all the dependent libraries.  Or possibly even look for some popular linker options like --static, or some such (which we've tried to avoid, because that can turn into a slippery slope), but such switches aren't always necessary for MPI-only-static (vs. completely-100%-static) linking.  It gets even fuzzier when both libmpi.so and libmpi.a are present.  Which way should we assume?
<br>
<p>Another problem is backwards compatibility -- users who are currently statically linking will assume the old behavior (of not needing to specify anything additional).
<br>
<p><span class="quotelev1">&gt; Now I'm not saying that Open MPI should commit to pkg-config instead of wrapper compilers, but the concept of linking differently for static versus shared libraries is something that should be observed.
</span><br>
<p>Fair enough.  But we've never been able to come up with a rational way to do it (note that pkg-config has its own problems -- OMPI provides pkg-config files in addition to wrapper compilers, but they don't fix everything, either).
<br>
<p>We have users who both --enable-static and --enable-shared (meaning: both libmpi.so and libmpi.a are present).  And therefore we've come down on the conservative side of adding in whatever is necessary for static linking.
<br>
<p><span class="quotelev1">&gt; (Over-linking is an ongoing problem with HPC-oriented packages. We are probably all guilty of it, but tools like pkg-config don't handle multiple configurations well and I don't know of a similar system that manages both static/shared and multi-configuration well.)
</span><br>
<p>I suppose, but it does depend on how you define &quot;problem&quot;.  The linker will ignore any unused libraries -- so it's a problem like lint is a problem.  It's annoying, but it doesn't do any harm.
<br>
<p>...or are there cases where it actually does something harmful?
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
<li><strong>Next message:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19389.php">Rohan Deshpande: "[OMPI users] Gathering results of MPI_SCAN"</a>
<li><strong>In reply to:</strong> <a href="19386.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Reply:</strong> <a href="19391.php">Jed Brown: "Re: [OMPI users] [EXTERNAL] Re: mpicc link shouldn't add -ldl and -lhwloc"</a>
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
