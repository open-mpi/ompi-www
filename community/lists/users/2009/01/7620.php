<?
$subject_val = "Re: [OMPI users] question running on heterogeneous systems";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan  2 09:08:45 2009" -->
<!-- isoreceived="20090102140845" -->
<!-- sent="Fri, 02 Jan 2009 15:08:29 +0100" -->
<!-- isosent="20090102140829" -->
<!-- name="doriankrause" -->
<!-- email="doriankrause_at_[hidden]" -->
<!-- subject="Re: [OMPI users] question running on heterogeneous systems" -->
<!-- id="495E1FDD.9010107_at_web.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="118b978f0901012015w7a091308q32e6bbfe18c0db10_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] question running on heterogeneous systems<br>
<strong>From:</strong> doriankrause (<em>doriankrause_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-01-02 09:08:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7621.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7619.php">Mahmoud Payami: "[OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="7619.php">Mahmoud Payami: "[OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7622.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7622.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Mahmoud Payami wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear OpenMPI Users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two systems, one with Intel64 processor, and one with IA32. The 
</span><br>
<span class="quotelev1">&gt; OSs on first is CentOS-86_64 and the other CentOS-i386. I installed 
</span><br>
<span class="quotelev1">&gt; Intel fortran compiler 10.1 on both.  In the first I use the fce, and 
</span><br>
<span class="quotelev1">&gt; in the second I use fc directories (ifortvars.sh/csh). I have compiled 
</span><br>
<span class="quotelev1">&gt; openmpi separately on each machine. Now, I could not run my 
</span><br>
<span class="quotelev1">&gt; application whch is compiled on ia32 machine. Should I use &quot;fc&quot; 
</span><br>
<span class="quotelev1">&gt; instead of &quot;fce&quot; on intel64 and then compile openmpi with that?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Could you give us some more information? What is the error message?
<br>
You said that the application is compiled for the 32 bit architecture. 
<br>
I'm not used to mixing 32/64 bit architectures. Does the application run 
<br>
on each host seperately?
<br>
<p>Dorian
<br>
<p><p><p><span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Mahmoud Payami
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: I have read the following FAQ but I need specific answer. 
</span><br>
<span class="quotelev1">&gt;                    
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As of v1.1, Open MPI requires that the size of C, C++, and Fortran 
</span><br>
<span class="quotelev1">&gt; datatypes be the same on all platforms within a single parallel 
</span><br>
<span class="quotelev1">&gt; application with the exception of types represented by |MPI_BOOL| and 
</span><br>
<span class="quotelev1">&gt; |MPI_LOGICAL| -- size differences in these types between processes are 
</span><br>
<span class="quotelev1">&gt; properly handled. Endian differences between processes in a single MPI 
</span><br>
<span class="quotelev1">&gt; job are properly and automatically handled.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Prior to v1.1, Open MPI did not include any support for data size or 
</span><br>
<span class="quotelev1">&gt; endian heterogeneity.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7621.php">Biagio Lucini: "Re: [OMPI users] Problem with openmpi and infiniband"</a>
<li><strong>Previous message:</strong> <a href="7619.php">Mahmoud Payami: "[OMPI users] question running on heterogeneous systems"</a>
<li><strong>In reply to:</strong> <a href="7619.php">Mahmoud Payami: "[OMPI users] question running on heterogeneous systems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7622.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
<li><strong>Reply:</strong> <a href="7622.php">Mahmoud Payami: "Re: [OMPI users] question running on heterogeneous systems"</a>
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
