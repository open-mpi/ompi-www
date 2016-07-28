<?
$subject_val = "Re: [OMPI users] libmpi.so.0 not found during gdb debugging";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb 11 08:44:44 2011" -->
<!-- isoreceived="20110211134444" -->
<!-- sent="Fri, 11 Feb 2011 08:44:36 -0500" -->
<!-- isosent="20110211134436" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi.so.0 not found during gdb debugging" -->
<!-- id="4D553D44.70006_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AANLkTimr5RAUnqixehDGLD6uPWNDETOMmXXXJb2N2hXc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi.so.0 not found during gdb debugging<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-11 08:44:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Previous message:</strong> <a href="15570.php">Patrick Le Dot: "[OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>In reply to:</strong> <a href="15554.php">swagat mishra: "[OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Reply:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
swagat mishra wrote:
<br>
<span class="quotelev1">&gt; hello everyone,
</span><br>
<span class="quotelev1">&gt; i have a network of systems connected over lan with each computer
</span><br>
<span class="quotelev1">&gt; running ubuntu. openmpi 1.4.x is installed on 1 machine and the
</span><br>
<span class="quotelev1">&gt; installation is mounted on other nodes through Networking File
</span><br>
<span class="quotelev1">&gt; System(NFS). the source program and compiled file(a.out) are present in
</span><br>
<span class="quotelev1">&gt; the mounted directory
</span><br>
<span class="quotelev1">&gt; i run my programs by the following command:
</span><br>
<span class="quotelev1">&gt; /opt/project/bin/mpirun -np 4 --prefix  /opt/project/ --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile a.out
</span><br>
<span class="quotelev1">&gt; i have not set LD_LIBRARY_PATH but as i use --prefix mpirun works
</span><br>
<span class="quotelev1">&gt; successfully
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; however as per the open mpi debugging faq:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=debugging">http://www.open-mpi.org/faq/?category=debugging</a>
</span><br>
<span class="quotelev1">&gt; when i run
</span><br>
<span class="quotelev1">&gt; /opt/project/bin/mpirun -np 4 --prefix  /opt/project/ --hostfile
</span><br>
<span class="quotelev1">&gt; hostfile -x DISPLAY=10.0.0.1:0.0 xterm -e gdb a.out
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; 4 xterm windows are opened with gdb running as expected. however when i
</span><br>
<span class="quotelev1">&gt; give the command start to gdb in the windows corresponding to remote
</span><br>
<span class="quotelev1">&gt; nodes, i get the error:
</span><br>
<span class="quotelev1">&gt; libmpi.so.0 not found: no such file/directory
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; as mentioned other mpi jobs run fine with mpirun
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; when i execute
</span><br>
<span class="quotelev1">&gt; /opt/project/bin/mpirun -np 4 --prefix  /opt/project/ -x
</span><br>
<span class="quotelev1">&gt; DISPLAY=10.0.0.1:0.0 xterm -e gdb a.out ,the debugging continues succesfully
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; please help
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>You need to set LD_LIBRARY_PATH to include the path to the OpenMPI
<br>
libraries. The --prefix option works for OpenMPI only; it has no effect
<br>
on other programs. You also need to make sure that the LD_LIBRARY_PATH
<br>
variable is correctly passed along to the other OpenMPI programs. For
<br>
processes on other hosts, this is usually done by editing your shell's
<br>
rc file for non-interactive logins (.bash_profile for bash).
<br>
<p><pre>
-- 
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Previous message:</strong> <a href="15570.php">Patrick Le Dot: "[OMPI users] MPI_Win_create with size=0 expose memory anyway"</a>
<li><strong>In reply to:</strong> <a href="15554.php">swagat mishra: "[OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
<li><strong>Reply:</strong> <a href="15572.php">swagat mishra: "Re: [OMPI users] libmpi.so.0 not found during gdb debugging"</a>
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
