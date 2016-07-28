<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr  6 11:25:22 2006" -->
<!-- isoreceived="20060406152522" -->
<!-- sent="Thu, 6 Apr 2006 11:25:20 -0400" -->
<!-- isosent="20060406152520" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Build is breaking" -->
<!-- id="5A3AF945-4A10-4744-8CC1-35FF61D00E8B_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="44353200.5060906_at_lanl.gov" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-06 11:25:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0822.php">Ralf Wildenhues: "[OMPI devel] [OT] padding and integer types"</a>
<li><strong>Previous message:</strong> <a href="0820.php">Sushant Sharma: "[OMPI devel] Build is breaking"</a>
<li><strong>In reply to:</strong> <a href="0820.php">Sushant Sharma: "[OMPI devel] Build is breaking"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 6, 2006, at 11:21 AM, Sushant Sharma wrote:
<br>
<p><span class="quotelev1">&gt; Just checked out fresh trunk and got this error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In file included from ../../ompi-trunk/opal/runtime/opal_finalize.c: 
</span><br>
<span class="quotelev1">&gt; 33:
</span><br>
<span class="quotelev1">&gt; ../../ompi-trunk/opal/mca/memcpy/base/base.h:72:44:
</span><br>
<span class="quotelev1">&gt; opal/mca/memcpy/base/base_impl.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; make[2]: *** [runtime/opal_finalize.lo] Error 1
</span><br>
<p>Try running autogen.sh and configure again.  Not sure why the build  
<br>
system didn't do it automatically, but that should cure the problem...
<br>
<p>Brian
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0822.php">Ralf Wildenhues: "[OMPI devel] [OT] padding and integer types"</a>
<li><strong>Previous message:</strong> <a href="0820.php">Sushant Sharma: "[OMPI devel] Build is breaking"</a>
<li><strong>In reply to:</strong> <a href="0820.php">Sushant Sharma: "[OMPI devel] Build is breaking"</a>
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
