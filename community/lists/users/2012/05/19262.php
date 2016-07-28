<?
$subject_val = "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 13 09:53:28 2012" -->
<!-- isoreceived="20120513135328" -->
<!-- sent="Sun, 13 May 2012 07:53:19 -0600" -->
<!-- isosent="20120513135319" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error with &amp;quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&amp;quot;" -->
<!-- id="0686718D-1DAA-47AC-9135-3E62CE869D29_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANBrWcqxQj8aQJTcKHzR-EOV53+8OScfMUr8Hk6jKP7rtn=8Uw_at_mail.gmail.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-13 09:53:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19263.php">Ilja Honkonen: "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19261.php">Dongshan Wei: "[OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="19261.php">Dongshan Wei: "[OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19285.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Reply:</strong> <a href="19285.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I believe the error message is pretty clear, actually - your program needs to call MPI_INIT -before- it calls any MPI function.
<br>
<p>On May 13, 2012, at 6:37 AM, Dongshan Wei wrote:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a question about openmpi running. I have compiled
</span><br>
<span class="quotelev1">&gt; successfully a paralle VASP program with openmpi 1.4.2. But when I run
</span><br>
<span class="quotelev1">&gt; the compiled program with mpirun, I got the following information at
</span><br>
<span class="quotelev1">&gt; very beginning:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *** The MPI_Comm_f2c() function was called before MPI_INIT was invoked.
</span><br>
<span class="quotelev1">&gt; *** This is disallowed by the MPI standard.
</span><br>
<span class="quotelev1">&gt; *** Your MPI job will now abort.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I believe this error will not related to the VASP program, but only to
</span><br>
<span class="quotelev1">&gt; openmpi. But I don't how to handle. Does anybody give some solution?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Dongshan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Dongshan Wei, Dr.
</span><br>
<span class="quotelev1">&gt; Chongqing Institute of Green and Intelligent Technology, CAS
</span><br>
<span class="quotelev1">&gt; 85 Jinyu Ave, Yubei Area, Chongqing 401120, China
</span><br>
<span class="quotelev1">&gt; Email: dswei_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Phone: (+86) 23-63063762
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19263.php">Ilja Honkonen: "[OMPI users] Uncommitted MPI_Datatype leaks memory heavily"</a>
<li><strong>Previous message:</strong> <a href="19261.php">Dongshan Wei: "[OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>In reply to:</strong> <a href="19261.php">Dongshan Wei: "[OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19285.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Reply:</strong> <a href="19285.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
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
