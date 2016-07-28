<?
$subject_val = "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallelcomputation.";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 18:09:19 2008" -->
<!-- isoreceived="20080228230919" -->
<!-- sent="Thu, 28 Feb 2008 17:09:06 -0600" -->
<!-- isosent="20080228230906" -->
<!-- name="Chembeti, Ramesh (S&amp;T-Student)" -->
<!-- email="rc2nf_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallelcomputation." -->
<!-- id="3142CF519A6B204896E248FD59CB7FB20E154E_at_MST-VMAIL3.srv.mst.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BE23B7D8-9E33-4A1A-A20D-ECCEBC143373_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallelcomputation.<br>
<strong>From:</strong> Chembeti, Ramesh (S&amp;T-Student) (<em>rc2nf_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 18:09:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5102.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel	computation."</a>
<li><strong>Previous message:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>In reply to:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5102.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel	computation."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Mr. Palen
<br>
<p>Thank you very much for your instant reply. I will let you know if I
<br>
face any problem in future.
<br>
<p>Ramesh
<br>
<p>-----Original Message-----
<br>
From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Brock Palen
<br>
Sent: Thursday, February 28, 2008 4:51 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] OpenMPI on intel core 2 duo machine for
<br>
parallelcomputation.
<br>
<p><p><p>On Feb 28, 2008, at 5:32 PM, Chembeti, Ramesh (S&amp;T-Student) wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am a graduate student working on molecular dynamic simulation. My  
</span><br>
<span class="quotelev1">&gt; professor/adviser is planning to buy Linux based clusters. But  
</span><br>
<span class="quotelev1">&gt; before that he wanted me to parallelize a serial code on molecular  
</span><br>
<span class="quotelev1">&gt; dynamic simulations and test it on a intelcore 2 duo machine with  
</span><br>
<span class="quotelev1">&gt; fedora 8 on it. I have parallelised my code in fortran 77 using  
</span><br>
<span class="quotelev1">&gt; MPI. I have installed OpenMPI and compiling the code using mpif77 - 
</span><br>
<span class="quotelev1">&gt; g -o code code.f
</span><br>
<p>I would make sure to always use some sort of optimizer
<br>
<p>mpif77 -O2 -o code code.f
<br>
atleast, higher (-O3, -fastsse) if it gives the right results, look  
<br>
up your compiler docs.
<br>
<p><span class="quotelev1">&gt; and running it using
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./code. I have a couple of questions to ask you:
</span><br>
<span class="quotelev1">&gt; 1. Is it possible to use a duo core or any multi core machine for  
</span><br>
<span class="quotelev1">&gt; parallel computations?
</span><br>
<p>Yes a core is really another cpu, duel core is just two cpus packed  
<br>
(with some changes) into a single socket so to MPI it is the same as  
<br>
a duel cpu machine.  We use duel socket duel core all the time  
<br>
(mpirun -np 4 app)  all the time.
<br>
<p><span class="quotelev1">&gt; 2. Is that a a right procedure to run a parallel job as explained  
</span><br>
<span class="quotelev1">&gt; above?(using mpif77 -g -o code code.f and running it using
</span><br>
<span class="quotelev1">&gt; mpirun -np 2 ./code)
</span><br>
<p>Yes this is correct, Once you have more than one node you will need  
<br>
to somehow tell mpirun use host x and host y,  but right now it just  
<br>
assumes 'localhost'  which is correct.
<br>
<p>Check out: <a href="http://www.open-mpi.org/faq/?category=running">http://www.open-mpi.org/faq/?category=running</a>
<br>
<p><span class="quotelev1">&gt; 3. How do I know my code is being run on both the processors.(I am  
</span><br>
<span class="quotelev1">&gt; a chemical engineering student and new to computational aspects)
</span><br>
<p>Run 'top'  you should see two processes, one for each cpu at 100%,  
<br>
there should be a system summary at the top that gives you a percent  
<br>
for the entire machine make sure idle is 0%.
<br>
<p><span class="quotelev1">&gt; 4. If what I have done is wrong can anyone please explain me how to  
</span><br>
<span class="quotelev1">&gt; do it?
</span><br>
<p>Nope looks like a good start,  always check out man pages
<br>
<p>man mpirun
<br>
<p>If you guys have cluster guys on campus is best not to spend your  
<br>
time being admins, have some Unix SA's run the cluster and you focus  
<br>
on your science.  But thats my opinion (and observations).
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is my CPU details:
</span><br>
<span class="quotelev1">&gt; processor	: 0
</span><br>
<span class="quotelev1">&gt; vendor_id	: GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family	: 6
</span><br>
<span class="quotelev1">&gt; model		: 15
</span><br>
<span class="quotelev1">&gt; model name	: Intel(R) Core(TM)2 Duo CPU     E6750  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping	: 11
</span><br>
<span class="quotelev1">&gt; cpu MHz		: 2000.000
</span><br>
<span class="quotelev1">&gt; cache size	: 4096 KB
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; siblings	: 2
</span><br>
<span class="quotelev1">&gt; core id		: 0
</span><br>
<span class="quotelev1">&gt; cpu cores	: 2
</span><br>
<span class="quotelev1">&gt; fpu		: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception	: yes
</span><br>
<span class="quotelev1">&gt; cpuid level	: 10
</span><br>
<span class="quotelev1">&gt; wp		: yes
</span><br>
<span class="quotelev1">&gt; flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
</span><br>
mca  
<br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe  
</span><br>
<span class="quotelev1">&gt; syscall lm constant_tsc arch_perfmon pebs bts rep_good pni monitor  
</span><br>
<span class="quotelev1">&gt; ds_cpl vmx smx est tm2 ssse3 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips	: 5322.87
</span><br>
<span class="quotelev1">&gt; clflush size	: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment	: 64
</span><br>
<span class="quotelev1">&gt; address sizes	: 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; processor	: 1
</span><br>
<span class="quotelev1">&gt; vendor_id	: GenuineIntel
</span><br>
<span class="quotelev1">&gt; cpu family	: 6
</span><br>
<span class="quotelev1">&gt; model		: 15
</span><br>
<span class="quotelev1">&gt; model name	: Intel(R) Core(TM)2 Duo CPU     E6750  @ 2.66GHz
</span><br>
<span class="quotelev1">&gt; stepping	: 11
</span><br>
<span class="quotelev1">&gt; cpu MHz		: 2000.000
</span><br>
<span class="quotelev1">&gt; cache size	: 4096 KB
</span><br>
<span class="quotelev1">&gt; physical id	: 0
</span><br>
<span class="quotelev1">&gt; siblings	: 2
</span><br>
<span class="quotelev1">&gt; core id		: 1
</span><br>
<span class="quotelev1">&gt; cpu cores	: 2
</span><br>
<span class="quotelev1">&gt; fpu		: yes
</span><br>
<span class="quotelev1">&gt; fpu_exception	: yes
</span><br>
<span class="quotelev1">&gt; cpuid level	: 10
</span><br>
<span class="quotelev1">&gt; wp		: yes
</span><br>
<span class="quotelev1">&gt; flags		: fpu vme de pse tsc msr pae mce cx8 apic sep mtrr pge
</span><br>
mca  
<br>
<span class="quotelev1">&gt; cmov pat pse36 clflush dts acpi mmx fxsr sse sse2 ss ht tm pbe  
</span><br>
<span class="quotelev1">&gt; syscall lm constant_tsc arch_perfmon pebs bts rep_good pni monitor  
</span><br>
<span class="quotelev1">&gt; ds_cpl vmx smx est tm2 ssse3 cx16 xtpr lahf_lm
</span><br>
<span class="quotelev1">&gt; bogomips	: 5319.97
</span><br>
<span class="quotelev1">&gt; clflush size	: 64
</span><br>
<span class="quotelev1">&gt; cache_alignment	: 64
</span><br>
<span class="quotelev1">&gt; address sizes	: 36 bits physical, 48 bits virtual
</span><br>
<span class="quotelev1">&gt; power management:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you
</span><br>
<span class="quotelev1">&gt; Ramesh
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Brock Palen
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5102.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel	computation."</a>
<li><strong>Previous message:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<li><strong>In reply to:</strong> <a href="5100.php">Brock Palen: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel computation."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5102.php">Terry Frankcombe: "Re: [OMPI users] OpenMPI on intel core 2 duo machine for parallel	computation."</a>
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
