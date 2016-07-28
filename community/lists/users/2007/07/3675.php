<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Jul 13 14:23:37 2007" -->
<!-- isoreceived="20070713182337" -->
<!-- sent="Fri, 13 Jul 2007 14:23:20 -0400" -->
<!-- isosent="20070713182320" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)" -->
<!-- id="1CF20E80-F843-4706-9B81-06291FC09540_at_cisco.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="alpine.DEB.0.99.0707131114330.2435_at_localhost" -->
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
<strong>Date:</strong> 2007-07-13 14:23:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3674.php">David Prendergast: "[OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<li><strong>In reply to:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3685.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3685.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah -- intel 10.  I think you said this before but I blew right past  
<br>
it.  I have not personally tested with intel 10; I don't know if  
<br>
anyone else on the team has.
<br>
<p>My support guy here at Cisco tells me that he's got a license for it  
<br>
and has been looking for an excuse to spend some time to install  
<br>
them.  Hopefully I'll have access within the next several [business]  
<br>
days; I can check it out then.  Perhaps we're tripping a problem with  
<br>
that specific version of the compiler (wouldn't be the first time ;-) ).
<br>
<p><p><p>On Jul 13, 2007, at 6:16 AM, Ricardo Reis wrote:
<br>
<p><span class="quotelev1">&gt; On Thu, 12 Jul 2007, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I admit to being baffled.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My systems seem to have that effect on people... :)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If general C++ applications seem to be working with icc/icpc, I do
</span><br>
<span class="quotelev2">&gt;&gt; not know why OMPI would fail for you with icc/icpc (especially while
</span><br>
<span class="quotelev2">&gt;&gt; accessing stack memory).  What version of icc/icpc are you using?
</span><br>
<span class="quotelev2">&gt;&gt; There were some bugs in the 8.x series that caused problems, IIRC...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5001.0 $ icc --version
</span><br>
<span class="quotelev1">&gt; icc (ICC) 10.0 20070426
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 5002.0 $ ifort --version
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 10.0 20070426
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2007 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do the intel compilers come with any error checking tools to give
</span><br>
<span class="quotelev2">&gt;&gt; more diagnostics?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; yes, they come with their own debugger. I'll try to use it and send  
</span><br>
<span class="quotelev1">&gt; more info when done.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks!,
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
<span class="quotelev1">&gt;  http:// 
</span><br>
<span class="quotelev1">&gt; radio.ist.utl.pt_______________________________________________
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
<li><strong>Next message:</strong> <a href="3676.php">Robert Latham: "Re: [OMPI users] DataTypes with &quot;holes&quot; for writing files"</a>
<li><strong>Previous message:</strong> <a href="3674.php">David Prendergast: "[OMPI users] Problem compiling openmpi-1.2.3 on Core 2 Duo with icc"</a>
<li><strong>In reply to:</strong> <a href="3673.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3685.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
<li><strong>Reply:</strong> <a href="3685.php">Ricardo Reis: "Re: [OMPI users] mpi with icc, icpc and ifort :: segfault (Jeff Squyres)"</a>
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
