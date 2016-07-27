<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct  3 03:04:07 2007" -->
<!-- isoreceived="20071003070407" -->
<!-- sent="Wed, 3 Oct 2007 09:04:03 +0200" -->
<!-- isosent="20071003070403" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [MTT devel] Uh testbake runs" -->
<!-- id="9801F59A-AA2D-4AB4-9B5D-BDA0973248D0_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3888.129.7.254.33.1191377554.squirrel_at_mail.cs.uh.edu" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-10-03 03:04:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 3, 2007, at 4:12 AM, Mohamad Chaarawi wrote:
<br>
<p><span class="quotelev1">&gt; yea im doing that, but not for the already installed libraries..  
</span><br>
<span class="quotelev1">&gt; that's
</span><br>
<span class="quotelev1">&gt; the problem..
</span><br>
<p>Ah - are you saying that we should add these kinds of fields for the  
<br>
already-installed plugin:
<br>
<p><span class="quotelev2">&gt;&gt; mpich2_additional_wrapper_ldflags = -L/opt/slurm/current/lib
</span><br>
<span class="quotelev2">&gt;&gt; mpich2_additional_wrapper_libs = -lpmi
</span><br>
<p>If so, I'm not sure we can -- these fields take advantage of the fact  
<br>
that we know it's MPICH/MVAPICH and know exactly which bits to  
<br>
twiddle in their script-based wrapper compilers.  We can't assume  
<br>
that an already-installed MPI will have a script-based wrapper  
<br>
compiler that is exactly like MPICH's wrapper compilers.  :-(
<br>
<p>Can you not use the already-installed MVAPICH and instead always  
<br>
install it?  I.e., is there a reason you're trying to use an already- 
<br>
installed MVAPICH?
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
<li><strong>Next message:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Previous message:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>In reply to:</strong> <a href="0143.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
<li><strong>Reply:</strong> <a href="0145.php">Mohamad Chaarawi: "Re: [MTT devel] Uh testbake runs"</a>
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
