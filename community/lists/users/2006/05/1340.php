<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed May 31 19:58:33 2006" -->
<!-- isoreceived="20060531235833" -->
<!-- sent="Wed, 31 May 2006 17:58:06 -0600" -->
<!-- isosent="20060531235806" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers." -->
<!-- id="B79C05F8-758C-4EB6-92BE-CF40F1993581_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="8d39cca0605311141g70b838bdy3f6bf1b3ba44806f_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-05-31 19:58:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1341.php">Brian Barrett: "Re: [OMPI users] Recommended Resources for learning MPI"</a>
<li><strong>Previous message:</strong> <a href="1339.php">William Voorhees: "[OMPI users] Recommended Resources for learning MPI"</a>
<li><strong>In reply to:</strong> <a href="1338.php">Justin Bronder: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On May 31, 2006, at 12:41 PM, Justin Bronder wrote:
<br>
<p><span class="quotelev1">&gt; On 5/31/06, Brian W. Barrett &lt;brbarret_at_[hidden]&gt; wrote: A quick  
</span><br>
<span class="quotelev1">&gt; workaround is to edit opal/include/opal_config.h and change the
</span><br>
<span class="quotelev1">&gt; #defines for OMPI_CXX_GCC_INLINE_ASSEMBLY and  
</span><br>
<span class="quotelev1">&gt; OMPI_CC_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; from 1 to 0.  That should allow you to build Open MPI with those XL
</span><br>
<span class="quotelev1">&gt; compilers.  Hopefully IBM will fix this in a future version ;).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Well I actually edited include/ompi_config.h and set both  
</span><br>
<span class="quotelev1">&gt; OMPI_C_GCC_INLINE_ASSEMBLY
</span><br>
<span class="quotelev1">&gt; and OMPI_CXX_GCC_INLINE_ASSEMBLY to 0.  This worked until libtool  
</span><br>
<span class="quotelev1">&gt; tried to create
</span><br>
<span class="quotelev1">&gt; a shared library:
</span><br>
<p>Ah, yes, sorry about that.  We reorganized our directory structure a  
<br>
little bit since we released 1.0.2 and I listed the new path.
<br>
<p>&lt;snip&gt;
<br>
<p><span class="quotelev1">&gt; Of course, I've been told that directly linking with ld isn't such  
</span><br>
<span class="quotelev1">&gt; a great idea in the first
</span><br>
<span class="quotelev1">&gt; place.  Ideas?
</span><br>
<p>I've had some issues building shared libraries with the XL  
<br>
compilers.  Libtool doesn't seem to do a good job of supporting  
<br>
them.  Your best bet is to build Open MPI with static libraries.  The  
<br>
options --enable-static --disable-shared will build static libraries  
<br>
instead of shared libraries.
<br>
<p><p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1341.php">Brian Barrett: "Re: [OMPI users] Recommended Resources for learning MPI"</a>
<li><strong>Previous message:</strong> <a href="1339.php">William Voorhees: "[OMPI users] Recommended Resources for learning MPI"</a>
<li><strong>In reply to:</strong> <a href="1338.php">Justin Bronder: "Re: [OMPI users] [PMX:VIRUS] Re: OpenMPI 1.0.3a1r10002 Fails to build with IBM XL Compilers."</a>
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
