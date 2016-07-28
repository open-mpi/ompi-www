<?
$subject_val = "Re: [OMPI users] Debugging help";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 12 18:19:21 2016" -->
<!-- isoreceived="20160412221921" -->
<!-- sent="Tue, 12 Apr 2016 22:19:04 +0000" -->
<!-- isosent="20160412221904" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Debugging help" -->
<!-- id="107423FA-9634-448D-A209-8CD18B095954_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAHXxYDhdidT_FHj7myk6oRXJ8dkhBnT31tuZ3t9_htZqPZ66zQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Debugging help<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-12 18:19:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28930.php">dpchoudh .: "[OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28929.php">dpchoudh .: "[OMPI users] Debugging help"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 12, 2016, at 2:38 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hello all
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to set a breakpoint during the modex exchange process so I can see the data being passed for different transport type. I assume that this is being done in the context of orted since this is part of process launch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here is what I did: (All of this pertains to the master branch and NOT the 1.10 release)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. Built  and installed OpenMPI like this: (on two nodes)
</span><br>
<span class="quotelev1">&gt; ./configure --enable-debug --enable-debug-symbols --disable-dlopen &amp;&amp; make &amp;&amp; sudo make install
</span><br>
<p>FWIW: You don't need to --disable-dlopen for this; using dlopen and plugins is very, very helpful (and a giant time-saver) when you're building/debugging a single BTL plugin, for example (because you can &quot;cd opal/mca/btl/YOUR_BTL; make install&quot; instead of a top-level install).
<br>
<p><span class="quotelev1">&gt; 2. Compiled a tiny hello-world MPI program, mpitest (on both nodes)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 3. Since the modex exchange is a macro now, (it used to be a function call before), I have to put the breakpoint inside a line of code in the macro; I chose the function mca_base_component_to_string(). I hoped that choosing --enable-debug-symbols and --disable-dlopen will make this function visible, but may be I am wrong. Do I need to explicitly add a DLSPEC to lib tools?
</span><br>
<p>No, you don't need to add anything to libtool.
<br>
<p>There's two parts to the modex:
<br>
<p>1. each component modex sending their data
<br>
2. each component selectively/lazily reading data from peers
<br>
<p><span class="quotelev1">&gt; 4. I launched gdb like this:
</span><br>
<span class="quotelev1">&gt; gdb mpirun
</span><br>
<span class="quotelev1">&gt; set args -np 2 -H bigMPI,smallMPI -mca btl tcp,self ./mpitest
</span><br>
<span class="quotelev1">&gt; b mca_base_component_to_string
</span><br>
<span class="quotelev1">&gt; run
</span><br>
<p>That looks reasonable, but you are probably breaking in the wrong function.
<br>
<p>Also, if your mpitest program doesn't do any MPI_Send/MPI_Recv functionality, the modex receive functionality may not be invoked.  It might be better to use examples/ring_c.c as your test program.
<br>
<p>If you upgrade your GDB to the latest version, you should be able to break on a macro.
<br>
<p><span class="quotelev1">&gt; This told me that the breakpoint is not present in the executable and gdb will try to load a shared object if needed; I chose 'yes'.
</span><br>
<span class="quotelev1">&gt; However, the breakpoint never triggers and the program runs to completion and exits.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have two requests:
</span><br>
<span class="quotelev1">&gt; 1. Please help me understand what I am doing wrong.
</span><br>
<span class="quotelev1">&gt; 2. Is there a (perhaps a sequence of) switch to 'configure' that will create the most debuggable image, while throwing all performance optimization out of the window? This would be a great thing for a developer.
</span><br>
<p>--enable-debug should do ya.
<br>
<p>You might want to enable --enable-mem-debug and --enable-mem-profile, too, but those are supplementary.
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
<li><strong>Next message:</strong> <a href="28932.php">Gilles Gouaillardet: "Re: [OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>Previous message:</strong> <a href="28930.php">dpchoudh .: "[OMPI users] Possible bug in MPI_Barrier() ?"</a>
<li><strong>In reply to:</strong> <a href="28929.php">dpchoudh .: "[OMPI users] Debugging help"</a>
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
