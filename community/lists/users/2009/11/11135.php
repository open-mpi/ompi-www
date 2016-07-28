<?
$subject_val = "[OMPI users] Problem with mpirun -preload-binary option";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:02:58 2009" -->
<!-- isoreceived="20091110210258" -->
<!-- sent="Tue, 10 Nov 2009 15:02:40 -0600" -->
<!-- isosent="20091110210240" -->
<!-- name="Qing Pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="[OMPI users] Problem with mpirun -preload-binary option" -->
<!-- id="4AF9D4F0.3010804_at_jsums.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problem with mpirun -preload-binary option<br>
<strong>From:</strong> Qing Pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 16:02:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="11159.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Maybe reply:</strong> <a href="11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having problem getting the mpirun &quot;preload-binary&quot; option to work.
<br>
<p>I'm using ubutu8.10 with openmpi 1.3.3, nodes connected with Ethernet cable.
<br>
If I copy the executable to client nodes using scp, then do mpirun, 
<br>
everything works.
<br>
<p>But I really want to avoid the copying, so I tried the -preload-binary 
<br>
option.
<br>
<p>When I typed the command on my master node as below (gordon-desktop is 
<br>
my master node, and gordon-laptop is the client node):
<br>
<p>--------------------------------------------------------------------------
<br>
gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$  mpirun
<br>
-machinefile machine.linux -np 2 --preload-binary $(pwd)/hello_c.out
<br>
--------------------------------------------------------------------------
<br>
<p>I got the following:
<br>
<p>gordon_at_gordon-desktop's password:  (I entered my password here, why 
<br>
am I asked for the password? I am working under this account anyway)
<br>
<p><p>WARNING: Remote peer ([[18118,0],1]) failed to preload a file.
<br>
<p>Exit Status: 256
<br>
Local  File: 
<br>
/tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
<br>
Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
Command:
<br>
&nbsp;&nbsp;scp  
<br>
gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
/tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
<br>
<p>Will continue attempting to launch the process(es).
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not 
<br>
access
<br>
or execute an executable:
<br>
<p>Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
Node: node1
<br>
<p>while attempting to start process rank 1.
<br>
--------------------------------------------------------------------------
<br>
<p>Had anyone succeeded with the 'preload-binary' option with the similar 
<br>
settings? I assume this mpirun option should work when compiling openmpi 
<br>
with default  options? Anything I need to set?
<br>
<p>--qing
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11134.php">Eugene Loh: "Re: [OMPI users] Coding help requested"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="11136.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="11159.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Maybe reply:</strong> <a href="11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
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
