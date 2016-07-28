<?
$subject_val = "Re: [OMPI users] Problem with gateway between 2 hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun 30 12:27:48 2008" -->
<!-- isoreceived="20080630162748" -->
<!-- sent="Mon, 30 Jun 2008 18:27:32 +0200" -->
<!-- isosent="20080630162732" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with gateway between 2 hosts" -->
<!-- id="3BE9C20B-9633-4AF8-AE7A-CEEF9CE54C6A_at_staff.uni-marburg.de" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="b4f9bf870806300829p4d147875v1ecc6521aa4985a4_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with gateway between 2 hosts<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-30 12:27:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6005.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
<li><strong>Previous message:</strong> <a href="6003.php">Geoffroy Pignot: "[OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="6003.php">Geoffroy Pignot: "[OMPI users] Problem with gateway between 2 hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6009.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Am 30.06.2008 um 17:29 schrieb Geoffroy Pignot:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does anybody face problems running Openmpi on two hosts with  
</span><br>
<span class="quotelev1">&gt; different networks (gateway to reach the other) ?
</span><br>
<span class="quotelev1">&gt; Let say compil02 ip adress is 172.3.9.10 and r009n001 is 10.160.4.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is no problem with MPI_init free executables (for example  
</span><br>
<span class="quotelev1">&gt; hostname)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compil02% /tmp/HALMPI/openmpi-1.2.2/bin/mpirun --prefix /tmp/HALMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2 -np 1 -host compil02 hostname : -np 1 -host r009n001  
</span><br>
<span class="quotelev1">&gt; hostname
</span><br>
<span class="quotelev1">&gt; r009n001
</span><br>
<span class="quotelev1">&gt; compil02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But as soon as I try a simple hello world , it 's crashing with the  
</span><br>
<span class="quotelev1">&gt; following error message.
</span><br>
<span class="quotelev1">&gt; Please note that when I try to run hello between r009n001  
</span><br>
<span class="quotelev1">&gt; (10.160.4.1) and r009n002 (10.160.4.2), it works fine
</span><br>
<p>are the 172.x.y.z nodes behind a NAT (hence the communication back  
<br>
isn't possible - only the stdout from the rsh/ssh is working in this  
<br>
case)?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; Thanks in advance for your help.
</span><br>
<span class="quotelev1">&gt; Regards
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Geoffroy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; PS: same error with openmpi v1.2.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compil02% /tmp/HALMPI/openmpi-1.2.2/bin/mpirun --prefix /tmp/HALMPI/ 
</span><br>
<span class="quotelev1">&gt; openmpi-1.2.2 -np 1 -host compil02 /tmp/hello : -np 1 -host  
</span><br>
<span class="quotelev1">&gt; r009n001 /tmp/hello
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Process 0.1.0 is unable to reach 0.1.1 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; Process 0.1.1 is unable to reach 0.1.0 for MPI communication.
</span><br>
<span class="quotelev1">&gt; If you specified the use of a BTL component, you may have
</span><br>
<span class="quotelev1">&gt; forgotten a component (such as &quot;self&quot;) in the list of
</span><br>
<span class="quotelev1">&gt; usable components.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; It looks like MPI_INIT failed for some reason; your parallel  
</span><br>
<span class="quotelev1">&gt; process is
</span><br>
<span class="quotelev1">&gt; likely to abort.  There are many reasons that a parallel process can
</span><br>
<span class="quotelev1">&gt; fail during MPI_INIT; some of which are due to configuration or  
</span><br>
<span class="quotelev1">&gt; environment
</span><br>
<span class="quotelev1">&gt; problems.  This failure appears to be an internal failure; here's some
</span><br>
<span class="quotelev1">&gt; additional information (which may only be relevant to an Open MPI
</span><br>
<span class="quotelev1">&gt; developer):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   PML add procs failed
</span><br>
<span class="quotelev1">&gt;   --&gt; Returned &quot;Unreachable&quot; (-12) instead of &quot;Success&quot; (0)
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; ----
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; *** An error occurred in MPI_Init
</span><br>
<span class="quotelev1">&gt; *** before MPI was initialized
</span><br>
<span class="quotelev1">&gt; *** MPI_ERRORS_ARE_FATAL (goodbye)
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
<li><strong>Next message:</strong> <a href="6005.php">Doug Roberts: "Re: [OMPI users] Code Seg Faults in Devel Series"</a>
<li><strong>Previous message:</strong> <a href="6003.php">Geoffroy Pignot: "[OMPI users] Problem with gateway between 2 hosts"</a>
<li><strong>In reply to:</strong> <a href="6003.php">Geoffroy Pignot: "[OMPI users] Problem with gateway between 2 hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/07/6009.php">Geoffroy Pignot: "Re: [OMPI users] Problem with gateway between 2 hosts"</a>
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
