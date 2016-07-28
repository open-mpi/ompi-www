<?
$subject_val = "Re: [OMPI devel] Porting OpenMPI to a new system";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 29 07:46:49 2010" -->
<!-- isoreceived="20100429114649" -->
<!-- sent="Thu, 29 Apr 2010 14:46:35 +0300" -->
<!-- isosent="20100429114635" -->
<!-- name="Ioannis E. Venetis" -->
<!-- email="venetis_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Porting OpenMPI to a new system" -->
<!-- id="4BD9719B.4050307_at_capsl.udel.edu" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="A00F1DE9-B560-41DE-880F-566172CC84D6_at_cisco.com" -->
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
<strong>From:</strong> Ioannis E. Venetis (<em>venetis_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-29 07:46:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>In reply to:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 29/4/2010 1:04 &#206;&#188;&#206;&#188;, Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 28, 2010, at 11:34 AM, Ioannis E. Venetis wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) We need to have support for both, a native and also a
</span><br>
<span class="quotelev2">&gt;&gt; cross-compilation environment.
</span><br>
<span class="quotelev2">&gt;&gt;     a) The native environment is a non-mainstream 64-bit processor
</span><br>
<span class="quotelev2">&gt;&gt; (specially designed for the system where it is being used). The OS
</span><br>
<span class="quotelev2">&gt;&gt; environment is Linux, the compiler is gcc and in general we have a quite
</span><br>
<span class="quotelev2">&gt;&gt; typical Linux/GNU environment, ported to that system.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, Open MPI is much easier to compile natively than in a cross-compilation environment.
</span><br>
<p>The problem is that I don't have direct access at this point to the 
<br>
machine. I will have to send it to someone else even for a simple 
<br>
compilation. But I have the simulator, so I have right now to start from 
<br>
there.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Compiling in a cross-compilation environment *works*, but it's a little manual-setup-intensive.  I can provide more details if you need them; we don't have all the cross-compilation instructions in the main README, IIRC.
</span><br>
<p>So, I would really appreciate it if you could do this.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     b) The cross-compilation environment should be run on a Linux x86_64
</span><br>
<span class="quotelev2">&gt;&gt; system. The cross-compiler, libraries, etc are already working, which
</span><br>
<span class="quotelev2">&gt;&gt; means that only OpenMPI needs to be ported right now. We use this
</span><br>
<span class="quotelev2">&gt;&gt; environment together with a simulator of the system, in order to
</span><br>
<span class="quotelev2">&gt;&gt; evaluate any changes in the architecture of the system. Using the
</span><br>
<span class="quotelev2">&gt;&gt; typical configure options of most applications, we would like to have
</span><br>
<span class="quotelev2">&gt;&gt; something like the following options in this case when building OpenMPI:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --host=x86_64-linux-gnu --build=&lt;our system triplet&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralf already commented on this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Afterwards, the OpenMPI library should be linked together with our
</span><br>
<span class="quotelev2">&gt;&gt; applications and the final executable should be run on the simulator.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have started looking into the source code of OpenMPI, but I have not
</span><br>
<span class="quotelev2">&gt;&gt; yet understood in which files I should start making changes. I would
</span><br>
<span class="quotelev2">&gt;&gt; appreciate any help you can provide, in order for me to start the port.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI has a small chunk of assembly code for some critical portions of functionality (like fast locks, etc.).  If your processor does not have assembly code support already, you'll need to add that.  Shrudder.
</span><br>
<p>That's not a problem. I am very familiar with assembly.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are you running on a network that Open MPI supports already?  Hopefully your platform supports at least TCP-based communications.  OMPI uses TCP for setup/bootstrapping and then can also use TCP for MPI communications. If you have a different kind of network, you'll need to write OMPI plugins to support that network.
</span><br>
<p>Now, I knew already that this is the most important part! I am waiting 
<br>
from day to day to get the documentation about all this. From some 
<br>
preliminary search I did in what I already have, there is probably NO 
<br>
TCP. I think that this will be the most difficult part for me to port.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OMPI's code base is *fairly* portable -- it might &quot;just work&quot; on your system.  More likely is that it'll &quot;mostly work&quot; and there will be a few portability issues that you'l run into because they're corner cases that all work on OMPI's supported platforms but not on yours.  Perhaps the easiest thing to do is just to try configuring and compiling, and see what problems you run into.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes, this is what I started doing.
<br>
<p>Thank you for your help!
<br>
<p>Ioannis
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7841.php">Jonathan Vincent: "[OMPI devel] bug with /bin/sh and /bin/ksh"</a>
<li><strong>Previous message:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
<li><strong>In reply to:</strong> <a href="7839.php">Jeff Squyres: "Re: [OMPI devel] Porting OpenMPI to a new system"</a>
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
