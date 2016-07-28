<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul  5 05:37:34 2007" -->
<!-- isoreceived="20070705093734" -->
<!-- sent="Thu, 5 Jul 2007 10:37:07 +0100" -->
<!-- isosent="20070705093707" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="15B2DD29-8D6E-413F-A9E6-C107507C1C9F_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.0.99.0707041702250.2445_at_localhost" -->
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
<strong>Date:</strong> 2007-07-05 05:37:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>In reply to:</strong> <a href="3570.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yoinks -- that's not good.
<br>
<p>I suspect that our included memory manager is borking things up  
<br>
(Brian: can you comment?).  Can you try configuring OMPI --without- 
<br>
memory-manager?
<br>
<p><p>On Jul 4, 2007, at 5:52 PM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can you be a bit more specific than &quot;it dies&quot;?  Are you talking about
</span><br>
<span class="quotelev2">&gt;&gt; mpif90/mpif77, or your app?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry, tuspid me. When executing mpif90 or mpif77 I have a segfault  
</span><br>
<span class="quotelev1">&gt; and it doesn't compile. I've tried both with or without input  
</span><br>
<span class="quotelev1">&gt; (i.e., giving it something to compile or just executing it  
</span><br>
<span class="quotelev1">&gt; expecting to see the normal &quot;no files given&quot; kind of message). The  
</span><br>
<span class="quotelev1">&gt; intel suite compiled openmpi without problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Going through the posting guidelines:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5005.0 $ ompi_info --all
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (added an strace of this execution in attach).
</span><br>
<span class="quotelev1">&gt; (also added config.log e make.log)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have compiled lam 7.1.3 with this set of compilers and have no  
</span><br>
<span class="quotelev1">&gt; problem at all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  thanks,
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
<span class="quotelev1">&gt; &lt;config.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;make.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;ompi_info.log.bz2&gt;
</span><br>
<span class="quotelev1">&gt; &lt;mime-attachment.txt&gt;
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
<li><strong>Next message:</strong> <a href="3575.php">Jeff Squyres: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3573.php">Graham Jenkins: "Re: [OMPI users] Unable to find any HCAs .."</a>
<li><strong>In reply to:</strong> <a href="3570.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3577.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
