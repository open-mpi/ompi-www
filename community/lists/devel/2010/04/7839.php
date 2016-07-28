<?
$subject_val = "Re: [OMPI devel] Porting OpenMPI to a new system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 06:40:25 2010" -->
<!-- isoreceived="20100429104025" -->
<!-- sent="Thu, 29 Apr 2010 06:04:16 -0400" -->
<!-- isosent="20100429100416" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting OpenMPI to a new system" -->
<!-- id="A00F1DE9-B560-41DE-880F-566172CC84D6_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BD85597.7010008_at_capsl.udel.edu" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Porting OpenMPI to a new system<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 06:04:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>In reply to:</strong> <a href="7835.php">Ioannis E. Venetis: "[OMPI devel]  Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 28, 2010, at 11:34 AM, Ioannis E. Venetis wrote:
<br>
<p><span class="quotelev1">&gt; 1) We need to have support for both, a native and also a
</span><br>
<span class="quotelev1">&gt; cross-compilation environment.
</span><br>
<span class="quotelev1">&gt;    a) The native environment is a non-mainstream 64-bit processor
</span><br>
<span class="quotelev1">&gt; (specially designed for the system where it is being used). The OS
</span><br>
<span class="quotelev1">&gt; environment is Linux, the compiler is gcc and in general we have a quite
</span><br>
<span class="quotelev1">&gt; typical Linux/GNU environment, ported to that system.
</span><br>
<p>FWIW, Open MPI is much easier to compile natively than in a cross-compilation environment.  
<br>
<p>Compiling in a cross-compilation environment *works*, but it's a little manual-setup-intensive.  I can provide more details if you need them; we don't have all the cross-compilation instructions in the main README, IIRC.
<br>
<p><span class="quotelev1">&gt;    b) The cross-compilation environment should be run on a Linux x86_64
</span><br>
<span class="quotelev1">&gt; system. The cross-compiler, libraries, etc are already working, which
</span><br>
<span class="quotelev1">&gt; means that only OpenMPI needs to be ported right now. We use this
</span><br>
<span class="quotelev1">&gt; environment together with a simulator of the system, in order to
</span><br>
<span class="quotelev1">&gt; evaluate any changes in the architecture of the system. Using the
</span><br>
<span class="quotelev1">&gt; typical configure options of most applications, we would like to have
</span><br>
<span class="quotelev1">&gt; something like the following options in this case when building OpenMPI:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --host=x86_64-linux-gnu --build=&lt;our system triplet&gt;
</span><br>
<p>Ralf already commented on this.
<br>
<p><span class="quotelev1">&gt; Afterwards, the OpenMPI library should be linked together with our
</span><br>
<span class="quotelev1">&gt; applications and the final executable should be run on the simulator.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have started looking into the source code of OpenMPI, but I have not
</span><br>
<span class="quotelev1">&gt; yet understood in which files I should start making changes. I would
</span><br>
<span class="quotelev1">&gt; appreciate any help you can provide, in order for me to start the port.
</span><br>
<p>Open MPI has a small chunk of assembly code for some critical portions of functionality (like fast locks, etc.).  If your processor does not have assembly code support already, you'll need to add that.  Shrudder.
<br>
<p>Are you running on a network that Open MPI supports already?  Hopefully your platform supports at least TCP-based communications.  OMPI uses TCP for setup/bootstrapping and then can also use TCP for MPI communications. If you have a different kind of network, you'll need to write OMPI plugins to support that network.
<br>
<p>OMPI's code base is *fairly* portable -- it might &quot;just work&quot; on your system.  More likely is that it'll &quot;mostly work&quot; and there will be a few portability issues that you'l run into because they're corner cases that all work on OMPI's supported platforms but not on yours.  Perhaps the easiest thing to do is just to try configuring and compiling, and see what problems you run into.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Previous message:</strong> <a href="7838.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>In reply to:</strong> <a href="7835.php">Ioannis E. Venetis: "[OMPI devel]  Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>Reply:</strong> <a href="7840.php">Ioannis E. Venetis: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
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
