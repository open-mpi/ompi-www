<?
$subject_val = "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 21 16:40:16 2012" -->
<!-- isoreceived="20120521204016" -->
<!-- sent="Mon, 21 May 2012 22:40:04 +0200" -->
<!-- isosent="20120521204004" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun error with &amp;quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&amp;quot;" -->
<!-- id="8D37503D-B342-4F73-AD88-4849EC487F30_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-21 16:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19319.php">Mudassar Majeed: "[OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19317.php">Reuti: "Re: [OMPI users] MPI books and resources"</a>
<li><strong>In reply to:</strong> <a href="19261.php">Dongshan Wei: "[OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Reply:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 13.05.2012 um 14:37 schrieb Dongshan Wei:
<br>
<p><span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I encountered a question about openmpi running. I have compiled
</span><br>
<span class="quotelev1">&gt; successfully a paralle VASP program with openmpi 1.4.2. But when I run
</span><br>
<p>Which version of VASP are you using? By default I can't spot any direct call to MPI_Comm_f2c in the source. Do you want to compile the ScaLAPACK or plain MPI version?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; the compiled program with mpirun, I got the following information at
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
<li><strong>Next message:</strong> <a href="19319.php">Mudassar Majeed: "[OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19317.php">Reuti: "Re: [OMPI users] MPI books and resources"</a>
<li><strong>In reply to:</strong> <a href="19261.php">Dongshan Wei: "[OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
<li><strong>Reply:</strong> <a href="19321.php">Jeff Squyres: "Re: [OMPI users] mpirun error with &quot; The MPI_Comm_f2c() function was called before MPI_INIT was invoked.&quot;"</a>
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
