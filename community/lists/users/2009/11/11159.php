<?
$subject_val = "Re: [OMPI users] Problem with mpirun -preload-binary option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 11:17:10 2009" -->
<!-- isoreceived="20091111161710" -->
<!-- sent="Wed, 11 Nov 2009 10:16:47 -0600" -->
<!-- isosent="20091111161647" -->
<!-- name="Qing Pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun -preload-binary option" -->
<!-- id="4AFAE36F.7090309_at_jsums.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Qing Pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 11:16:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>In reply to:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you very much for your help! I believe I do have password-less ssh 
<br>
set up, at least from master node to client node (desktop -&gt; laptop in 
<br>
my case). If I type &gt;ssh node1 on my desktop terminal, I am able to get 
<br>
to the laptop node without being asked for password. And as I mentioned, 
<br>
if I copy the example executable from desktop to the laptop node using 
<br>
scp, then I am able to run it from desktop using both nodes.
<br>
Back to the preload-binary problem - I am asked for the password of my 
<br>
master node - the node I am working on - not the remote client node. Do 
<br>
you mean that I should set up password-less ssh in both direction? Does 
<br>
the client node need to access master node through password-less ssh to 
<br>
make the preload-binary option work?
<br>
<p><p>Ralph Castain Wrote:
<br>
<p>It -should- work, but you need password-less ssh setup. See our FAQ
<br>
for how to do that, if you are unfamiliar with it.
<br>
<p>On Nov 10, 2009, at 2:02 PM, Qing Pang wrote:
<br>
<p>I'm having problem getting the mpirun &quot;preload-binary&quot; option to work.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using ubutu8.10 with openmpi 1.3.3, nodes connected with Ethernet 
</span><br>
<span class="quotelev1">&gt; cable.
</span><br>
<span class="quotelev1">&gt; If I copy the executable to client nodes using scp, then do mpirun, 
</span><br>
<span class="quotelev1">&gt; everything works.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But I really want to avoid the copying, so I tried the -preload-binary 
</span><br>
<span class="quotelev1">&gt; option.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I typed the command on my master node as below (gordon-desktop is 
</span><br>
<span class="quotelev1">&gt; my master node, and gordon-laptop is the client node):
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$  mpirun
</span><br>
<span class="quotelev1">&gt; -machinefile machine.linux -np 2 --preload-binary $(pwd)/hello_c.out
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; gordon_at_gordon-desktop's password:  (I entered my password here, why 
</span><br>
<span class="quotelev1">&gt; am I asked for the password? I am working under this account anyway)
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
<span class="quotelev1">&gt; Local  File: 
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev1">&gt; Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev1">&gt; Command:
</span><br>
<span class="quotelev1">&gt;  scp  
</span><br>
<span class="quotelev1">&gt; gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not 
</span><br>
<span class="quotelev1">&gt; access
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Had anyone succeeded with the 'preload-binary' option with the similar 
</span><br>
<span class="quotelev1">&gt; settings? I assume this mpirun option should work when compiling 
</span><br>
<span class="quotelev1">&gt; openmpi with default  options? Anything I need to set?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --qing
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Previous message:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>In reply to:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
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
