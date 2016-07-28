<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  2 23:25:11 2009" -->
<!-- isoreceived="20090603032511" -->
<!-- sent="Tue, 02 Jun 2009 20:25:05 -0700" -->
<!-- isosent="20090603032505" -->
<!-- name="Iftikhar Rathore" -->
<!-- email="irathore_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="1243999505.14068.9.camel_at_localhost.localdomain" -->
<!-- inreplyto="4A25CAB1.1050608_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Openmpi and processor affinity<br>
<strong>From:</strong> Iftikhar Rathore (<em>irathore_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-02 23:25:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Previous message:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9514.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9514.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Guss
<br>
Thanks for the reply and it was a typo (Im  sick). I have updated to
<br>
1.3.2 since my last post and  have tried checking cpu affinity by using
<br>
f and j it shows processes spread on all 8 cores in the beginning, but
<br>
it does eventually shows all processes running on 0, 
<br>
<p>My P and Q's are made for an 890 run, I have done this run with other
<br>
mpi implementation before. I have made sure that I am using the right
<br>
mpirun, but as Jeff pointed out I may have a mixed build and I am
<br>
investigating it more and will post my findings. 
<br>
<p>Regards
<br>
<p><p>On Tue, 2009-06-02 at 20:58 -0400, Gus Correa wrote:
<br>
<span class="quotelev1">&gt; Hi Iftikhar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Iftikhar Rathore wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi
</span><br>
<span class="quotelev2">&gt; &gt; We are using openmpi version 1.2.8 (packaged with ofed-1.4). I am trying
</span><br>
<span class="quotelev2">&gt; &gt; to run hpl-2.0 (linpak). We have two intel quad core CPU's in all our
</span><br>
<span class="quotelev2">&gt; &gt; server (8 total cores)  and all hosts in the hostfile have lines that
</span><br>
<span class="quotelev2">&gt; &gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Is this a typo on your email or on your hostfile?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;  &gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There should be blank space between the number of slots and max_slots:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 10.100.0.227 slots=8 max_slots=8
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Another possibility is that you may be inadvertently using another
</span><br>
<span class="quotelev1">&gt; mpirun on the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A third possibility:
</span><br>
<span class="quotelev1">&gt; Does your HPL.dat file require 896 processors?
</span><br>
<span class="quotelev1">&gt; The product P x Q on each (P,Q) pair should match 896.
</span><br>
<span class="quotelev1">&gt; If it is less, HPL will run on less processors, i.e., on P x Q only.
</span><br>
<span class="quotelev1">&gt; (If it is more, HPL will issue an error message and stop.)
</span><br>
<span class="quotelev1">&gt; Is this what is happening?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; A fourth one ...:
</span><br>
<span class="quotelev1">&gt; Are you sure processor affinity is not correct?
</span><br>
<span class="quotelev1">&gt; Do the processes drift across the cores?
</span><br>
<span class="quotelev1">&gt; Typing 1 on top is not enough to clarify this.
</span><br>
<span class="quotelev1">&gt; To see the process-to-core map on top,
</span><br>
<span class="quotelev1">&gt; type &quot;f&quot; (for fields),
</span><br>
<span class="quotelev1">&gt; then &quot;j&quot; (to display the CPU/core number),
</span><br>
<span class="quotelev1">&gt; and wait for several minutes to see if processor/core (header &quot;P&quot;)
</span><br>
<span class="quotelev1">&gt; and the process ID (header &quot;PID&quot;),
</span><br>
<span class="quotelev1">&gt; drift or not.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Even when I launch less processes than the available/requested cores
</span><br>
<span class="quotelev1">&gt; &quot;--mca mpi_paffinity_alone 1&quot; works right here,
</span><br>
<span class="quotelev1">&gt; as I just checked, with P=4 and Q=1 on HPL.dat
</span><br>
<span class="quotelev1">&gt; and with -np 8 on mpiexec.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; **
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently ran a bunch of HPL tests with --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev1">&gt; and OpenMPI 1.3.2, built from source, and the processor affinity seems
</span><br>
<span class="quotelev1">&gt; to work (i.e., the processes stick to the cores).
</span><br>
<span class="quotelev1">&gt; Building from source quite simple, and would give you the latest OpenMPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't know if 1.2.8 (which you are using)
</span><br>
<span class="quotelev1">&gt; has a problem with mpi_paffinity_alone,
</span><br>
<span class="quotelev1">&gt; but the OpenMPI developers may clarify this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Gustavo Correa
</span><br>
<span class="quotelev1">&gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev1">&gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Now when I use mpirun (even with --mca mpi_paffinity_alone 1) it does
</span><br>
<span class="quotelev2">&gt; &gt; not keep the affinity, the processes seem to gravitate towards first
</span><br>
<span class="quotelev2">&gt; &gt; four cores (using top and hitting 1). I know I do have MCA paffinity
</span><br>
<span class="quotelev2">&gt; &gt; available.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_devi DLR_WB_88]# ompi_info | grep paffinity
</span><br>
<span class="quotelev2">&gt; &gt; [devi.cisco.com:26178] mca: base: component_find: unable to open btl openib: file not found (ignored)
</span><br>
<span class="quotelev2">&gt; &gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component v1.2.8)
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; The command line I am using is:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; # mpirun -nolocal -np 896 -v  --mca mpi_paffinity_alone 1 -hostfile /mnt/apps/hosts/896_8slots /mnt/apps/bin/xhpl
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Am I doing something wrong and is there a way to confirm cpu affinity besides hitting &quot;1&quot; on top.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; [root_at_devi DLR_WB_88]# mpirun -V
</span><br>
<span class="quotelev2">&gt; &gt; mpirun (Open MPI) 1.2.8
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
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
<pre>
-- 
Iftikhar Rathore
Technical Marketing Engineer
Server Access Virtualization BU.
Cisco Systems, Inc.
Phone:  +1 408 853 5322
Mobile: +1 636 675 2982
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9504.php">Tee Wen Kai: "[OMPI users] Exit Program Without Calling MPI_Finalize For Special Case"</a>
<li><strong>Previous message:</strong> <a href="9502.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>In reply to:</strong> <a href="9501.php">Gus Correa: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9514.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9514.php">JACOB_LIBERMAN_at_[hidden]: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
