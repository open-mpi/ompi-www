<?
$subject_val = "Re: [OMPI users] Pathscale compiler and C++ bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 31 17:02:07 2008" -->
<!-- isoreceived="20080731210207" -->
<!-- sent="Thu, 31 Jul 2008 17:01:53 -0400" -->
<!-- isosent="20080731210153" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Pathscale compiler and C++ bindings" -->
<!-- id="C714C8FD-C6E5-46C7-A646-EE0C738B6184_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48922562.2090200_at_cse.ucdavis.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Pathscale compiler and C++ bindings<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-31 17:01:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6242.php">Scott Beardsley: "[OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="6242.php">Scott Beardsley: "[OMPI users] Pathscale compiler and C++ bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Reply:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Lenny mentioned that it worked for him as well, but it definitely does  
<br>
not work for me.  I'm not doing anything special as far as I know --  
<br>
the only difference that I can think of is that we might be running  
<br>
different OS's.  I'm running RHEL 4U4 (fairly ancient, but still  
<br>
fairly common).
<br>
<p><p>On Jul 31, 2008, at 4:49 PM, Scott Beardsley wrote:
<br>
<p><span class="quotelev1">&gt; I saw your comment regarding Pathscale compiled OMPI and thought I'd  
</span><br>
<span class="quotelev1">&gt; bring discussion over here. I'm attempting to reproduce the bug  
</span><br>
<span class="quotelev1">&gt; described in ticket 1326[1]. Using 1.2.6 (plus the MPI_CART_GET  
</span><br>
<span class="quotelev1">&gt; patch) with the 3.2 compiler. I'm using a hello++.cc actually  
</span><br>
<span class="quotelev1">&gt; written by Jeff and co.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It seems to run OK for me...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpiCC -showme
</span><br>
<span class="quotelev1">&gt; pathCC -I/share/apps/openmpi-1.2.6/pathscale-3.2/include -pthread -L/ 
</span><br>
<span class="quotelev1">&gt; share/apps/openmpi-1.2.6/pathscale-3.2/lib64 -lmpi_cxx -lmpi -lopen- 
</span><br>
<span class="quotelev1">&gt; rte -lopen-pal -ldl -Wl,--export-dynamic -lnsl -lutil -lm -ldl
</span><br>
<span class="quotelev1">&gt; $ mpiCC -Wno-deprecated -o hello++ hello++.cc
</span><br>
<span class="quotelev1">&gt; $ ./hello++
</span><br>
<span class="quotelev1">&gt; Hello World! I am 0 of 1
</span><br>
<span class="quotelev1">&gt; $
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Perhaps I'm doing something that you aren't? The bug doesn't mention  
</span><br>
<span class="quotelev1">&gt; only happening under certain circumstances.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Scott
</span><br>
<span class="quotelev1">&gt; -------
</span><br>
<span class="quotelev1">&gt; [1] <a href="https://svn.open-mpi.org/trac/ompi/ticket/1326">https://svn.open-mpi.org/trac/ompi/ticket/1326</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Previous message:</strong> <a href="6242.php">Scott Beardsley: "[OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>In reply to:</strong> <a href="6242.php">Scott Beardsley: "[OMPI users] Pathscale compiler and C++ bindings"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
<li><strong>Reply:</strong> <a href="6244.php">Scott Beardsley: "Re: [OMPI users] Pathscale compiler and C++ bindings"</a>
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
