<?
$subject_val = "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 13 18:01:37 2007" -->
<!-- isoreceived="20071213230137" -->
<!-- sent="Thu, 13 Dec 2007 17:01:32 -0600 (CST)" -->
<!-- isosent="20071213230132" -->
<!-- name="Brian W. Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt" -->
<!-- id="Pine.LNX.4.64.0712131659110.17526_at_marvin.we-be-smart.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="5312AE81-A825-42D5-BED9-EDCDEC61A529_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt<br>
<strong>From:</strong> Brian W. Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-12-13 18:01:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>Previous message:</strong> <a href="4668.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 13 Dec 2007, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Specifically: it would probably require some significant hackery in
</span><br>
<span class="quotelev1">&gt; the OMPI build process to put in a #define that indicates whether OMPI
</span><br>
<span class="quotelev1">&gt; is being built statically or not.  But the AM/LT process shields this
</span><br>
<span class="quotelev1">&gt; information from the build process by design (part of the issue is
</span><br>
<span class="quotelev1">&gt; that AM/LT allows both static and shared libraries to be built
</span><br>
<span class="quotelev1">&gt; simultaneously).  We'd then have to introduce some global symbol that
</span><br>
<span class="quotelev1">&gt; could be queried that is outside of the MPI interface.  Neither of
</span><br>
<span class="quotelev1">&gt; these things are attractive.  :-(
</span><br>
<p>Well, if libmpi.a is static, then this whole conversation is pointless 
<br>
because you're not going to dlopen it in the first place.
<br>
<p>But it is easy for OPen MPI to figure out whether it's statically or 
<br>
dynamically linked, as libtool compiles the code twice if building both 
<br>
static and shared and you could poke at #defines to figure out what's 
<br>
going on -- easy enough to deal with.  I just don't think we should be 
<br>
doing so :).
<br>
<p><p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4670.php">Brian W. Barrett: "Re: [OMPI users] undefined reference to `pthread_atfork' (Lahey Fujitsu compiler AMD64)"</a>
<li><strong>Previous message:</strong> <a href="4668.php">Brock Palen: "Re: [OMPI users] parpack with openmpi"</a>
<li><strong>In reply to:</strong> <a href="4663.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
<li><strong>Reply:</strong> <a href="4673.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.2.4 verbosity w.r.t. osc pt2pt"</a>
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
