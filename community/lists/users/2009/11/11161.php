<?
$subject_val = "Re: [OMPI users] Problem with mpirun -preload-binary option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 11:53:20 2009" -->
<!-- isoreceived="20091111165320" -->
<!-- sent="Wed, 11 Nov 2009 08:53:15 -0800" -->
<!-- isosent="20091111165315" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun -preload-binary option" -->
<!-- id="4A4722D1-C5C2-463D-9212-EE1DA09D05E2_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="43F8A8D5-280E-44FC-9E91-1586CDBDB4A1_at_open-mpi.org" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 11:53:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11162.php">Josh Hursey: "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<li><strong>Previous message:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Though the --preload-binary option was created while building the checkpoint/restart functionality it does not depend on checkpoint/restart function in any way (just a side effect of the initial development).
<br>
<p>The problem you are seeing is a result of the computing environment setup of password-less ssh. The --preload-binary command uses 'scp' (at the moment) to copy the files from the node running mpirun to the compute nodes. The compute nodes are the ones that call 'scp', so you will need to setup password-less ssh in both directions.
<br>
<p>-- Josh
<br>
<p>On Nov 11, 2009, at 8:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; I'm no expert on the preload-binary option - but I would suspect that is the case given your observations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That option was created to support checkpoint/restart, not for what you are attempting to do. Like I said, you -should- be able to use it for that purpose, but I expect you may hit a few quirks like this along the way.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2009, at 9:16 AM, Qing Pang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you very much for your help! I believe I do have password-less ssh set up, at least from master node to client node (desktop -&gt; laptop in my case). If I type &gt;ssh node1 on my desktop terminal, I am able to get to the laptop node without being asked for password. And as I mentioned, if I copy the example executable from desktop to the laptop node using scp, then I am able to run it from desktop using both nodes.
</span><br>
<span class="quotelev2">&gt;&gt; Back to the preload-binary problem - I am asked for the password of my master node - the node I am working on - not the remote client node. Do you mean that I should set up password-less ssh in both direction? Does the client node need to access master node through password-less ssh to make the preload-binary option work?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Ralph Castain Wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It -should- work, but you need password-less ssh setup. See our FAQ
</span><br>
<span class="quotelev2">&gt;&gt; for how to do that, if you are unfamiliar with it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2009, at 2:02 PM, Qing Pang wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I'm having problem getting the mpirun &quot;preload-binary&quot; option to work.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm using ubutu8.10 with openmpi 1.3.3, nodes connected with Ethernet cable.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I copy the executable to client nodes using scp, then do mpirun, everything works.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; But I really want to avoid the copying, so I tried the -preload-binary option.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I typed the command on my master node as below (gordon-desktop is my master node, and gordon-laptop is the client node):
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$  mpirun
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -machinefile machine.linux -np 2 --preload-binary $(pwd)/hello_c.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I got the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; gordon_at_gordon-desktop's password:  (I entered my password here, why am I asked for the password? I am working under this account anyway)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; WARNING: Remote peer ([[18118,0],1]) failed to preload a file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Exit Status: 256
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Local  File: /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Command:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; scp  gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun was unable to launch the specified application as it could not access
</span><br>
<span class="quotelev3">&gt;&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Node: node1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Had anyone succeeded with the 'preload-binary' option with the similar settings? I assume this mpirun option should work when compiling openmpi with default  options? Anything I need to set?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --qing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11162.php">Josh Hursey: "Re: [OMPI users] mpirun noticed that process rank 1 ... exited on signal 13 (Broken pipe)."</a>
<li><strong>Previous message:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>In reply to:</strong> <a href="11160.php">Ralph Castain: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
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
