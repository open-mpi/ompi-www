<?
$subject_val = "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 15 15:57:31 2012" -->
<!-- isoreceived="20120515195731" -->
<!-- sent="Tue, 15 May 2012 15:57:26 -0400" -->
<!-- isosent="20120515195726" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error with &amp;quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&amp;quot;" -->
<!-- id="4C08A4E9-AD9E-476C-AE61-E1D61FCAC54F_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="0686718D-1DAA-47AC-9135-3E62CE869D29_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-15 15:57:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19284.php">Jeff Squyres: "Re: [OMPI users] Polling and Interrupt"</a>
<li><strong>In reply to:</strong> <a href="19262.php">Ralph Castain: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19318.php">Reuti: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
More specifically -- are you calling any MPI function before calling MPI_Init? (particularly from Fortran)
<br>
<p>I.e., you may be seeing a side-effect of calling a fortran MPI function before calling MPI_Init.
<br>
<p><p>On May 13, 2012, at 9:53 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I believe the error message is pretty clear, actually - your program needs to call MPI_INIT -before- it calls any MPI function.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On May 13, 2012, at 6:37 AM, Dongshan Wei wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I encountered a question about openmpi running. I have compiled
</span><br>
<span class="quotelev2">&gt;&gt; successfully a paralle VASP program with openmpi 1.4.2. But when I run
</span><br>
<span class="quotelev2">&gt;&gt; the compiled program with mpirun, I got the following information at
</span><br>
<span class="quotelev2">&gt;&gt; very beginning:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; *** The MPI_Comm_f2c() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev2">&gt;&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev2">&gt;&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I believe this error will not related to the VASP program, but only to
</span><br>
<span class="quotelev2">&gt;&gt; openmpi. But I don't how to handle. Does anybody give some solution?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Dongshan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Dongshan Wei, Dr.
</span><br>
<span class="quotelev2">&gt;&gt; Chongqing Institute of Green and Intelligent Technology, CAS
</span><br>
<span class="quotelev2">&gt;&gt; 85 Jinyu Ave, Yubei Area, Chongqing 401120, China
</span><br>
<span class="quotelev2">&gt;&gt; Email: dswei_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Phone: (+86) 23-63063762
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19286.php">Ricardo Reis: "Re: [OMPI users] MPI-IO puzzlement"</a>
<li><strong>Previous message:</strong> <a href="19284.php">Jeff Squyres: "Re: [OMPI users] Polling and Interrupt"</a>
<li><strong>In reply to:</strong> <a href="19262.php">Ralph Castain: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19318.php">Reuti: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
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
