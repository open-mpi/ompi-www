<?
$subject_val = "Re: [OMPI users] mpirun self,sm";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  9 04:16:19 2009" -->
<!-- isoreceived="20090409081619" -->
<!-- sent="Thu, 9 Apr 2009 02:16:08 -0600" -->
<!-- isosent="20090409081608" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun self,sm" -->
<!-- id="FF3FCDB6-3E23-41F6-88BC-7D4F327E40DC_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="99AB3654-DD6A-4E96-94AC-B741073821ED_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun self,sm<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-09 04:16:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8847.php">Francesco Pietra: "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8845.php">Robert Kubrick: "[OMPI users] mpirun self,sm"</a>
<li><strong>In reply to:</strong> <a href="8845.php">Robert Kubrick: "[OMPI users] mpirun self,sm"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hostname never calls MPI_Init, and therefore never initializes the BTL  
<br>
subsystem. Therefore, hostname will always run correctly.
<br>
<p>mpirun is not an MPI process, nor are the daemons used by OMPI to  
<br>
launch the MPI job. Thus, they also do not call MPI_Init, and  
<br>
therefore do not see the BTL subsystem.
<br>
<p>So this example will run just fine. You need to run an MPI application  
<br>
to cause it to fail.
<br>
<p>Ralph
<br>
<p><p>On Apr 8, 2009, at 10:15 PM, Robert Kubrick wrote:
<br>
<p><span class="quotelev1">&gt; How is this possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dx:~&gt; mpirun -v -np 2 --mca btl self,sm --host dx,sx hostname
</span><br>
<span class="quotelev1">&gt; dx
</span><br>
<span class="quotelev1">&gt; sx
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; dx:~&gt; netstat -i
</span><br>
<span class="quotelev1">&gt; Kernel Interface table
</span><br>
<span class="quotelev1">&gt; Iface   MTU Met   RX-OK RX-ERR RX-DRP RX-OVR   TX-OK TX-ERR TX-DRP  
</span><br>
<span class="quotelev1">&gt; TX-OVR Flg
</span><br>
<span class="quotelev1">&gt; eth0   1500   0  998755      0      0      0 1070323      0       
</span><br>
<span class="quotelev1">&gt; 0      0 BMRU
</span><br>
<span class="quotelev1">&gt; eth1   1500   0   85352      0      0      0  379993      0       
</span><br>
<span class="quotelev1">&gt; 0      0 BMRU
</span><br>
<span class="quotelev1">&gt; ib0   65520   0     204      0      0      0     155      0       
</span><br>
<span class="quotelev1">&gt; 5      0 BMRU
</span><br>
<span class="quotelev1">&gt; lo    16436   0 1648874      0      0      0 1648874      0       
</span><br>
<span class="quotelev1">&gt; 0      0 LRU
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to force an error with the first command above to make sure  
</span><br>
<span class="quotelev1">&gt; that my btl parameters are used correctly, but it looks like ompi  
</span><br>
<span class="quotelev1">&gt; runs hostname on the remote machine regardless.
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
<li><strong>Next message:</strong> <a href="8847.php">Francesco Pietra: "[OMPI users] shared libraries issue compiling 1.3.1/intel 10.1.022"</a>
<li><strong>Previous message:</strong> <a href="8845.php">Robert Kubrick: "[OMPI users] mpirun self,sm"</a>
<li><strong>In reply to:</strong> <a href="8845.php">Robert Kubrick: "[OMPI users] mpirun self,sm"</a>
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
