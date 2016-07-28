<?
$subject_val = "Re: [OMPI users] how to SPMD on openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Oct  1 08:13:47 2009" -->
<!-- isoreceived="20091001121347" -->
<!-- sent="Thu, 1 Oct 2009 08:13:42 -0400" -->
<!-- isosent="20091001121342" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to SPMD on openmpi" -->
<!-- id="B4F1AB88-E63E-4FDF-B930-FE91477B7606_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="bccd656d0910010336x7ec45328rae8f3096ee9d7b32_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] how to SPMD on openmpi<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-10-01 08:13:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10847.php">Nader Ahmadi: "[OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<li><strong>Previous message:</strong> <a href="10845.php">Blesson Varghese: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>In reply to:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI is a compliant MPI-2.1 implementation, meaning that your MPI  
<br>
applications are source compatible with other MPI 2.1  
<br>
implementations.  In short: use MPI_Send and all the other MPI_*  
<br>
functions that you're used to.
<br>
<p><p>On Oct 1, 2009, at 6:36 AM, ankur pachauri wrote:
<br>
<p><span class="quotelev1">&gt; hi vipin,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks for the answer but one thing more, do openmpi had bit  
</span><br>
<span class="quotelev1">&gt; different library functions than mpi or it's usage is different  
</span><br>
<span class="quotelev1">&gt; (such as i'll have to use ompi_** insted of mpi_** functions)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Oct 1, 2009 at 2:53 PM, vipin kumar &lt;vipinkumar41_at_[hidden]&gt;  
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hi Ankur,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; try this command,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ mpirun -np 2 -host firstHostIp,secondHostIp a.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for details read manual page for &quot;mpirun&quot;.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                 $ man mpirun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Sep 30, 2009 at 3:22 PM, ankur pachauri &lt;ankurpachauri_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev1">&gt; Dear all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have been able to install open mpi on two independent machines  
</span><br>
<span class="quotelev1">&gt; having FC 10. The simple hello world programms are running fine on  
</span><br>
<span class="quotelev1">&gt; the independent machines....But can any one pls help me by letting  
</span><br>
<span class="quotelev1">&gt; me know how to connect the two machines and run a common program  
</span><br>
<span class="quotelev1">&gt; between the two....how do we a do a lamboot -v lamhosts in case of  
</span><br>
<span class="quotelev1">&gt; openmpi?
</span><br>
<span class="quotelev1">&gt; How do we get the open mpi running on the two computers  
</span><br>
<span class="quotelev1">&gt; simultaneously and excute a common program on the two machines.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks in advance
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ankur Pachauri.
</span><br>
<span class="quotelev1">&gt; 09927590910
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research Scholar,
</span><br>
<span class="quotelev1">&gt; software engineering.
</span><br>
<span class="quotelev1">&gt; Department of Mathematics
</span><br>
<span class="quotelev1">&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev1">&gt; Dayalbagh,
</span><br>
<span class="quotelev1">&gt; AGRA
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Vipin K.
</span><br>
<span class="quotelev1">&gt; Research Engineer,
</span><br>
<span class="quotelev1">&gt; C-DOTB, India
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Ankur Pachauri.
</span><br>
<span class="quotelev1">&gt; 09927590910
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Research Scholar,
</span><br>
<span class="quotelev1">&gt; software engineering.
</span><br>
<span class="quotelev1">&gt; Department of Mathematics
</span><br>
<span class="quotelev1">&gt; Dayalbagh Educational Institute
</span><br>
<span class="quotelev1">&gt; Dayalbagh,
</span><br>
<span class="quotelev1">&gt; AGRA
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10847.php">Nader Ahmadi: "[OMPI users] How to force the configure, and make to build a 32 bit opmi on a 64 bit linux ?"</a>
<li><strong>Previous message:</strong> <a href="10845.php">Blesson Varghese: "Re: [OMPI users] MPI_Comm_accept()/connect() errors"</a>
<li><strong>In reply to:</strong> <a href="10844.php">ankur pachauri: "Re: [OMPI users] how to SPMD on openmpi"</a>
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
