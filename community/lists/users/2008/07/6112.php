<?
$subject_val = "Re: [OMPI users] openmpi on linux-ia64";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 23 09:15:34 2008" -->
<!-- isoreceived="20080723131534" -->
<!-- sent="Wed, 23 Jul 2008 09:15:12 -0400" -->
<!-- isosent="20080723131512" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi on linux-ia64" -->
<!-- id="3CDA0B51-4906-4C1E-A3FC-96D53ED4C61B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48872535.2070009_at_fft.be" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi on linux-ia64<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-23 09:15:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6111.php">Eloi Gaudry: "[OMPI users] openmpi on linux-ia64"</a>
<li><strong>In reply to:</strong> <a href="6111.php">Eloi Gaudry: "[OMPI users] openmpi on linux-ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>Reply:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2008, at 8:33 AM, Eloi Gaudry wrote:
<br>
<p><span class="quotelev1">&gt; I've been encountering some issues with openmpi on a linux-ia64  
</span><br>
<span class="quotelev1">&gt; platform
</span><br>
<span class="quotelev1">&gt; (centos-4.6 with gcc-4.3.1) within a call to MPI_Query_thread (in a  
</span><br>
<span class="quotelev1">&gt; fake
</span><br>
<span class="quotelev1">&gt; single process run):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; An error occurred in MPI_Query_thread
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<p><p>This error message usually means that you have invoked an MPI function  
<br>
call (e.g., MPI_Query_thread) before you invoked MPI_Init (or  
<br>
MPI_Init_thread).
<br>
<p>Is that what your code is doing?
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
<li><strong>Next message:</strong> <a href="6113.php">Robert Kubrick: "Re: [OMPI users] Parallel I/O with MPI-1"</a>
<li><strong>Previous message:</strong> <a href="6111.php">Eloi Gaudry: "[OMPI users] openmpi on linux-ia64"</a>
<li><strong>In reply to:</strong> <a href="6111.php">Eloi Gaudry: "[OMPI users] openmpi on linux-ia64"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
<li><strong>Reply:</strong> <a href="6114.php">Eloi Gaudry: "Re: [OMPI users] openmpi on linux-ia64"</a>
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
