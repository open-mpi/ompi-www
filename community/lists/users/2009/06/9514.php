<?
$subject_val = "Re: [OMPI users] Openmpi and processor affinity";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  3 10:48:36 2009" -->
<!-- isoreceived="20090603144836" -->
<!-- sent="Wed, 3 Jun 2009 09:48:30 -0500" -->
<!-- isosent="20090603144830" -->
<!-- name="JACOB_LIBERMAN_at_[hidden]" -->
<!-- email="JACOB_LIBERMAN_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Openmpi and processor affinity" -->
<!-- id="7ADD3FA62176CB4588006774C1CCA43B596625_at_ausx3mps336.aus.amer.dell.com" -->
<!-- charset="Windows-1252" -->
<!-- inreplyto="1243999505.14068.9.camel_at_localhost.localdomain" -->
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
<strong>From:</strong> <a href="mailto:JACOB_LIBERMAN_at_[hidden]?Subject=Re:%20[OMPI%20users]%20Openmpi%20and%20processor%20affinity"><em>JACOB_LIBERMAN_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-06-03 10:48:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9515.php">naveed: "[OMPI users] Hypre"</a>
<li><strong>Previous message:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<li><strong>In reply to:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Iftikhar,
<br>
<p>For HPL, try writing a bash script that pins processes to their local memory controllers using numactl before kicking off HPL.  This is particularly helpful when spawning more than 1 thread per process.  The last line of your script should look like &quot;numactl -c $cpu_bind -m $ mem_bind $*&quot;.  
<br>
<p>Believe it or not, I hit 94.5% HPL efficiency using this tactic on a 16 node cluster. Using processor affinity (various MPIs) my results were inconsistent and ranged between 88-93%
<br>
<p>Thanks, jacob
<br>
<p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
</span><br>
<span class="quotelev1">&gt; Behalf Of Iftikhar Rathore
</span><br>
<span class="quotelev1">&gt; Sent: Tuesday, June 02, 2009 10:25 PM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Openmpi and processor affinity
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Guss
</span><br>
<span class="quotelev1">&gt; Thanks for the reply and it was a typo (Im  sick). I have updated to
</span><br>
<span class="quotelev1">&gt; 1.3.2 since my last post and  have tried checking cpu affinity by using
</span><br>
<span class="quotelev1">&gt; f and j it shows processes spread on all 8 cores in the beginning, but
</span><br>
<span class="quotelev1">&gt; it does eventually shows all processes running on 0,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My P and Q's are made for an 890 run, I have done this run with other
</span><br>
<span class="quotelev1">&gt; mpi implementation before. I have made sure that I am using the right
</span><br>
<span class="quotelev1">&gt; mpirun, but as Jeff pointed out I may have a mixed build and I am
</span><br>
<span class="quotelev1">&gt; investigating it more and will post my findings.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-06-02 at 20:58 -0400, Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi Iftikhar
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Iftikhar Rathore wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hi
</span><br>
<span class="quotelev3">&gt; &gt; &gt; We are using openmpi version 1.2.8 (packaged with ofed-1.4). I am
</span><br>
<span class="quotelev1">&gt; trying
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to run hpl-2.0 (linpak). We have two intel quad core CPU's in all
</span><br>
<span class="quotelev1">&gt; our
</span><br>
<span class="quotelev3">&gt; &gt; &gt; server (8 total cores)  and all hosts in the hostfile have lines
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev3">&gt; &gt; &gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this a typo on your email or on your hostfile?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;  &gt; look like &quot;10.100.0.227 slots=8max_slots=8&quot;.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There should be blank space between the number of slots and max_slots:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; 10.100.0.227 slots=8 max_slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Another possibility is that you may be inadvertently using another
</span><br>
<span class="quotelev2">&gt; &gt; mpirun on the system.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A third possibility:
</span><br>
<span class="quotelev2">&gt; &gt; Does your HPL.dat file require 896 processors?
</span><br>
<span class="quotelev2">&gt; &gt; The product P x Q on each (P,Q) pair should match 896.
</span><br>
<span class="quotelev2">&gt; &gt; If it is less, HPL will run on less processors, i.e., on P x Q only.
</span><br>
<span class="quotelev2">&gt; &gt; (If it is more, HPL will issue an error message and stop.)
</span><br>
<span class="quotelev2">&gt; &gt; Is this what is happening?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; A fourth one ...:
</span><br>
<span class="quotelev2">&gt; &gt; Are you sure processor affinity is not correct?
</span><br>
<span class="quotelev2">&gt; &gt; Do the processes drift across the cores?
</span><br>
<span class="quotelev2">&gt; &gt; Typing 1 on top is not enough to clarify this.
</span><br>
<span class="quotelev2">&gt; &gt; To see the process-to-core map on top,
</span><br>
<span class="quotelev2">&gt; &gt; type &quot;f&quot; (for fields),
</span><br>
<span class="quotelev2">&gt; &gt; then &quot;j&quot; (to display the CPU/core number),
</span><br>
<span class="quotelev2">&gt; &gt; and wait for several minutes to see if processor/core (header &quot;P&quot;)
</span><br>
<span class="quotelev2">&gt; &gt; and the process ID (header &quot;PID&quot;),
</span><br>
<span class="quotelev2">&gt; &gt; drift or not.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Even when I launch less processes than the available/requested cores
</span><br>
<span class="quotelev2">&gt; &gt; &quot;--mca mpi_paffinity_alone 1&quot; works right here,
</span><br>
<span class="quotelev2">&gt; &gt; as I just checked, with P=4 and Q=1 on HPL.dat
</span><br>
<span class="quotelev2">&gt; &gt; and with -np 8 on mpiexec.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; **
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I recently ran a bunch of HPL tests with --mca mpi_paffinity_alone 1
</span><br>
<span class="quotelev2">&gt; &gt; and OpenMPI 1.3.2, built from source, and the processor affinity
</span><br>
<span class="quotelev1">&gt; seems
</span><br>
<span class="quotelev2">&gt; &gt; to work (i.e., the processes stick to the cores).
</span><br>
<span class="quotelev2">&gt; &gt; Building from source quite simple, and would give you the latest
</span><br>
<span class="quotelev1">&gt; OpenMPI.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I don't know if 1.2.8 (which you are using)
</span><br>
<span class="quotelev2">&gt; &gt; has a problem with mpi_paffinity_alone,
</span><br>
<span class="quotelev2">&gt; &gt; but the OpenMPI developers may clarify this.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I hope this helps,
</span><br>
<span class="quotelev2">&gt; &gt; Gus Correa
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; Gustavo Correa
</span><br>
<span class="quotelev2">&gt; &gt; Lamont-Doherty Earth Observatory - Columbia University
</span><br>
<span class="quotelev2">&gt; &gt; Palisades, NY, 10964-8000 - USA
</span><br>
<span class="quotelev2">&gt; &gt; ---------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now when I use mpirun (even with --mca mpi_paffinity_alone 1) it
</span><br>
<span class="quotelev1">&gt; does
</span><br>
<span class="quotelev3">&gt; &gt; &gt; not keep the affinity, the processes seem to gravitate towards
</span><br>
<span class="quotelev1">&gt; first
</span><br>
<span class="quotelev3">&gt; &gt; &gt; four cores (using top and hitting 1). I know I do have MCA
</span><br>
<span class="quotelev1">&gt; paffinity
</span><br>
<span class="quotelev3">&gt; &gt; &gt; available.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_devi DLR_WB_88]# ompi_info | grep paffinity
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [devi.cisco.com:26178] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; btl openib: file not found (ignored)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;            MCA paffinity: linux (MCA v1.0, API v1.0, Component
</span><br>
<span class="quotelev1">&gt; v1.2.8)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The command line I am using is:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; # mpirun -nolocal -np 896 -v  --mca mpi_paffinity_alone 1 -hostfile
</span><br>
<span class="quotelev1">&gt; /mnt/apps/hosts/896_8slots /mnt/apps/bin/xhpl
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Am I doing something wrong and is there a way to confirm cpu
</span><br>
<span class="quotelev1">&gt; affinity besides hitting &quot;1&quot; on top.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [root_at_devi DLR_WB_88]# mpirun -V
</span><br>
<span class="quotelev3">&gt; &gt; &gt; mpirun (Open MPI) 1.2.8
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Iftikhar Rathore
</span><br>
<span class="quotelev1">&gt; Technical Marketing Engineer
</span><br>
<span class="quotelev1">&gt; Server Access Virtualization BU.
</span><br>
<span class="quotelev1">&gt; Cisco Systems, Inc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phone:  +1 408 853 5322
</span><br>
<span class="quotelev1">&gt; Mobile: +1 636 675 2982
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9515.php">naveed: "[OMPI users] Hypre"</a>
<li><strong>Previous message:</strong> <a href="9513.php">tsilva_at_[hidden]: "Re: [OMPI users] top question"</a>
<li><strong>In reply to:</strong> <a href="9503.php">Iftikhar Rathore: "Re: [OMPI users] Openmpi and processor affinity"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
<li><strong>Reply:</strong> <a href="9518.php">Jeff Squyres: "Re: [OMPI users] Openmpi and processor affinity"</a>
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
