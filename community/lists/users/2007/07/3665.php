<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 12 10:36:18 2007" -->
<!-- isoreceived="20070712143618" -->
<!-- sent="Thu, 12 Jul 2007 10:35:54 -0400" -->
<!-- isosent="20070712143554" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="9466E83F-3048-4882-A15F-4CB6145DA880_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.0.99.0707120825500.18400_at_localhost" -->
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
<strong>Date:</strong> 2007-07-12 10:35:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3666.php">Michael: "[OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="3664.php">Jeff Squyres: "Re: [OMPI users] read send buffer before a send operation completes"</a>
<li><strong>In reply to:</strong> <a href="3662.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I admit to being baffled.  :-(
<br>
<p>If general C++ applications seem to be working with icc/icpc, I do  
<br>
not know why OMPI would fail for you with icc/icpc (especially while  
<br>
accessing stack memory).  What version of icc/icpc are you using?   
<br>
There were some bugs in the 8.x series that caused problems, IIRC...
<br>
<p>Do the intel compilers come with any error checking tools to give  
<br>
more diagnostics?
<br>
<p><p><p>On Jul 12, 2007, at 3:28 AM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; On Wed, 11 Jul 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; LAM uses C++ for the laminfo command and its wrapper compilers (mpicc
</span><br>
<span class="quotelev2">&gt;&gt; and friends).  Did you use those successfully?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, no problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; attached out from laminfo -all
</span><br>
<span class="quotelev1">&gt;                   strace laminfo
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  greets,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Ricardo Reis
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  'Non Serviam'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  PhD student @ Lasef
</span><br>
<span class="quotelev1">&gt;  Computational Fluid Dynamics, High Performance Computing, Turbulence
</span><br>
<span class="quotelev1">&gt;  &lt;<a href="http://www.lasef.ist.utl.pt">http://www.lasef.ist.utl.pt</a>&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  &amp;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Cultural Instigator @ R&#225;dio Zero
</span><br>
<span class="quotelev1">&gt;  <a href="http://radio.ist.utl.pt">http://radio.ist.utl.pt</a>
</span><br>
<span class="quotelev1">&gt; &lt;laminfostrace.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;laminfoall.bz2&gt;
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
<li><strong>Next message:</strong> <a href="3666.php">Michael: "[OMPI users] Correction to FAQ: How do I build BLACS with Open MPI?"</a>
<li><strong>Previous message:</strong> <a href="3664.php">Jeff Squyres: "Re: [OMPI users] read send buffer before a send operation completes"</a>
<li><strong>In reply to:</strong> <a href="3662.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
