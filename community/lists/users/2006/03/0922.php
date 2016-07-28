<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 27 17:56:58 2006" -->
<!-- isoreceived="20060327225658" -->
<!-- sent="Mon, 27 Mar 2006 17:56:49 -0500" -->
<!-- isosent="20060327225649" -->
<!-- name="Michael Kluskens" -->
<!-- email="mkluskens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Best MPI implementation" -->
<!-- id="385B5296-3F8C-4128-8F53-3CBF14761025_at_ieee.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C835B9C9CB0F1C4E9DA48913C9E8F8AF56BD95_at_xmb-rtp-215.amer.cisco.com" -->
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
<strong>From:</strong> Michael Kluskens (<em>mkluskens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-27 17:56:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0923.php">Ralph Castain: "[OMPI users] Connecting multiple applications"</a>
<li><strong>Previous message:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>In reply to:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Best MPI implementation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mar 27, 2006, at 4:11 PM, Jeff Squyres (jsquyres) wrote:
<br>
<p><span class="quotelev1">&gt; For your code, most MPI implementations (Open MPI, LAM/MPI, etc.)
</span><br>
<span class="quotelev1">&gt; support the same API.  So if it compiles/links with one, it *should*
</span><br>
<span class="quotelev1">&gt; compile/link with the others (assuming you coded it in an MPI- 
</span><br>
<span class="quotelev1">&gt; conformant
</span><br>
<span class="quotelev1">&gt; way).
</span><br>
<p>The MPI installed on major systems I have access are lacking in their  
<br>
support for MPI_COMM_SPAWN and MPI_BCAST in a dynamic process  
<br>
environment (example code posted here previously).  The vendors of  
<br>
the machines are SGI and IBM.  When you are working on machines that  
<br>
you have no control over it is possible to build OpenMPI, link to  
<br>
your OpenMPI library, and run?   I got some hints from the install  
<br>
process that this may be possible using either libtool and/or  
<br>
environmental variables LIBDIR, LD_LIBRARY_PATH, LD_RUN_PATH, and/or  
<br>
compile/link options of -Wl,--rpath  -Wl,LIBDIR.
<br>
<p>Michael
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0923.php">Ralph Castain: "[OMPI users] Connecting multiple applications"</a>
<li><strong>Previous message:</strong> <a href="0921.php">Eric Brunner-Williams: "Re: [OMPI users] Best MPI implementation"</a>
<li><strong>In reply to:</strong> <a href="0919.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] Best MPI implementation"</a>
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
