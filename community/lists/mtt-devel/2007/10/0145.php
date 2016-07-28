<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 11:42:14 2007" -->
<!-- isoreceived="20071003154214" -->
<!-- sent="Wed, 03 Oct 2007 10:42:06 -0500" -->
<!-- isosent="20071003154206" -->
<!-- name="Mohamad Chaarawi" -->
<!-- email="mschaara_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Uh testbake runs" -->
<!-- id="4703B84E.40603_at_cs.uh.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9801F59A-AA2D-4AB4-9B5D-BDA0973248D0_at_cisco.com" -->
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
<strong>From:</strong> Mohamad Chaarawi (<em>mschaara_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 11:42:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Oct 3, 2007, at 4:12 AM, Mohamad Chaarawi wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; yea im doing that, but not for the already installed libraries..  
</span><br>
<span class="quotelev2">&gt;&gt; that's
</span><br>
<span class="quotelev2">&gt;&gt; the problem..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ah - are you saying that we should add these kinds of fields for the  
</span><br>
<span class="quotelev1">&gt; already-installed plugin:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpich2_additional_wrapper_libs = -lpmi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If so, I'm not sure we can -- these fields take advantage of the fact  
</span><br>
<span class="quotelev1">&gt; that we know it's MPICH/MVAPICH and know exactly which bits to  
</span><br>
<span class="quotelev1">&gt; twiddle in their script-based wrapper compilers.  We can't assume  
</span><br>
<span class="quotelev1">&gt; that an already-installed MPI will have a script-based wrapper  
</span><br>
<span class="quotelev1">&gt; compiler that is exactly like MPICH's wrapper compilers.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can you not use the already-installed MVAPICH and instead always  
</span><br>
<span class="quotelev1">&gt; install it?  I.e., is there a reason you're trying to use an already- 
</span><br>
<span class="quotelev1">&gt; installed MVAPICH?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
Yea, i can do that, but i thought that since we are downloading a
<br>
release, it would be easier to just do it once and install it, and then
<br>
use what we have just for time saving.. but it's not a big deal to
<br>
download it and install it..
<br>
<p><p><pre>
-- 
Mohamad Chaarawi
Instructional Assistant		  <a href="http://www.cs.uh.edu/~mschaara">http://www.cs.uh.edu/~mschaara</a>
Department of Computer Science	  University of Houston
4800 Calhoun, PGH Room 526        Houston, TX 77204, USA
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0146.php">Josh Hursey: "Re: [MTT devel] Fwd: MTT server error (user: iu)"</a>
<li><strong>Previous message:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0144.php">Jeff Squyres: "Re: [MTT devel] Uh testbake runs"</a>
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
