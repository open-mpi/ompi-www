<?
$subject_val = "Re: [OMPI users] Problem with mpirun -preload-binary option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:41:18 2009" -->
<!-- isoreceived="20091110214118" -->
<!-- sent="Tue, 10 Nov 2009 14:41:07 -0700" -->
<!-- isosent="20091110214107" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun -preload-binary option" -->
<!-- id="59A53C6E-B32D-461D-A72F-844DF75B2A00_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4AF9D4F0.3010804_at_jsums.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with mpirun -preload-binary option<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 16:41:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11137.php">Glembek Ondřej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11159.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It -should- work, but you need password-less ssh setup. See our FAQ  
<br>
for how to do that, if you are unfamiliar with it.
<br>
<p><p>On Nov 10, 2009, at 2:02 PM, Qing Pang wrote:
<br>
<p><span class="quotelev1">&gt; I'm having problem getting the mpirun &quot;preload-binary&quot; option to work.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using ubutu8.10 with openmpi 1.3.3, nodes connected with  
</span><br>
<span class="quotelev1">&gt; Ethernet cable.
</span><br>
<span class="quotelev1">&gt; If I copy the executable to client nodes using scp, then do mpirun,  
</span><br>
<span class="quotelev1">&gt; everything works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I really want to avoid the copying, so I tried the -preload- 
</span><br>
<span class="quotelev1">&gt; binary option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I typed the command on my master node as below (gordon-desktop  
</span><br>
<span class="quotelev1">&gt; is my master node, and gordon-laptop is the client node):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$  mpirun
</span><br>
<span class="quotelev1">&gt; -machinefile machine.linux -np 2 --preload-binary $(pwd)/hello_c.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gordon_at_gordon-desktop's password:  (I entered my password here,  
</span><br>
<span class="quotelev1">&gt; why am I asked for the password? I am working under this account  
</span><br>
<span class="quotelev1">&gt; anyway)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; WARNING: Remote peer ([[18118,0],1]) failed to preload a file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Exit Status: 256
</span><br>
<span class="quotelev1">&gt; Local  File: /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/ 
</span><br>
<span class="quotelev1">&gt; hello_c.out
</span><br>
<span class="quotelev1">&gt; Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev1">&gt; Command:
</span><br>
<span class="quotelev1">&gt; scp  gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/ 
</span><br>
<span class="quotelev1">&gt; hello_c.out
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could  
</span><br>
<span class="quotelev1">&gt; not access
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev1">&gt; Node: node1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Had anyone succeeded with the 'preload-binary' option with the  
</span><br>
<span class="quotelev1">&gt; similar settings? I assume this mpirun option should work when  
</span><br>
<span class="quotelev1">&gt; compiling openmpi with default  options? Anything I need to set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --qing
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
<li><strong>Next message:</strong> <a href="11137.php">Glembek Ondřej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Previous message:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11159.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
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
