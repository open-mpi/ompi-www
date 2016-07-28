<?
$subject_val = "Re: [OMPI users] Problem with mpirun -preload-binary option";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov 12 15:50:20 2009" -->
<!-- isoreceived="20091112205020" -->
<!-- sent="Thu, 12 Nov 2009 14:50:03 -0600" -->
<!-- isosent="20091112205003" -->
<!-- name="Qing Pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun -preload-binary option" -->
<!-- id="4AFC74FB.8020904_at_jsums.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] Problem with mpirun -preload-binary option" -->
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
<strong>Date:</strong> 2009-11-12 15:50:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11181.php">Douglas Guptill: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>Previous message:</strong> <a href="11179.php">RightCFD: "Re: [OMPI users] users Digest, Vol 1403, Issue 4"</a>
<li><strong>Maybe in reply to:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Now that I have passwordless-ssh set up both directions, and verified 
<br>
working - I still have the same problem.
<br>
I'm able to run ssh/scp on both master and client nodes - (at this 
<br>
point, they are pretty much the same), without being asked for password. 
<br>
And mpirun works fine if I have the executable put in the same directory 
<br>
on both nodes.
<br>
<p>But when I tried the preload-binary option, I still have the same 
<br>
problem - it asked me for the password of the node running mpirun, and 
<br>
then tells that scp failed.
<br>
<p>---------------------------------------------------------------------------------------------------------------
<br>
<p><p>Josh Wrote:
<br>
<p>Though the --preload-binary option was created while building the 
<br>
checkpoint/restart functionality it does not depend on 
<br>
checkpoint/restart function in any way (just a side effect of the 
<br>
initial development).
<br>
<p>The problem you are seeing is a result of the computing environment 
<br>
setup of password-less ssh. The --preload-binary command uses 'scp' (at 
<br>
the moment) to copy the files from the node running mpirun to the 
<br>
compute nodes. The compute nodes are the ones that call 'scp', so you 
<br>
will need to setup password-less ssh in both directions.
<br>
<p>-- Josh
<br>
<p>On Nov 11, 2009, at 8:38 AM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt;  I'm no expert on the preload-binary option - but I would suspect that 
</span><br>
is the case given your observations.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  That option was created to support checkpoint/restart, not for what 
</span><br>
you are attempting to do. Like I said, you -should- be able to use it 
<br>
for that purpose, but I expect you may hit a few quirks like this along 
<br>
the way.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  On Nov 11, 2009, at 9:16 AM, Qing Pang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thank you very much for your help! I believe I do have password-less 
</span><br>
ssh set up, at least from master node to client node (desktop -&gt; laptop 
<br>
in my case). If I type &gt;ssh node1 on my desktop terminal, I am able to 
<br>
get to the laptop node without being asked for password. And as I 
<br>
mentioned, if I copy the example executable from desktop to the laptop 
<br>
node using scp, then I am able to run it from desktop using both nodes.
<br>
<span class="quotelev2">&gt; &gt; Back to the preload-binary problem - I am asked for the password of 
</span><br>
my master node - the node I am working on - not the remote client node. 
<br>
Do you mean that I should set up password-less ssh in both direction? 
<br>
Does the client node need to access master node through password-less 
<br>
ssh to make the preload-binary option work?
<br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Ralph Castain Wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It -should- work, but you need password-less ssh setup. See our FAQ
</span><br>
<span class="quotelev2">&gt; &gt; for how to do that, if you are unfamiliar with it.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Nov 10, 2009, at 2:02 PM, Qing Pang wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I'm having problem getting the mpirun &quot;preload-binary&quot; option to work.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'm using ubutu8.10 with openmpi 1.3.3, nodes connected with 
</span><br>
Ethernet cable.
<br>
<span class="quotelev3">&gt; &gt;&gt; If I copy the executable to client nodes using scp, then do mpirun, 
</span><br>
everything works.
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; But I really want to avoid the copying, so I tried the 
</span><br>
-preload-binary option.
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; When I typed the command on my master node as below (gordon-desktop 
</span><br>
is my master node, and gordon-laptop is the client node):
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun
</span><br>
<span class="quotelev3">&gt; &gt;&gt; -machinefile machine.linux -np 2 --preload-binary $(pwd)/hello_c.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I got the following:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; gordon_at_gordon-desktop's password: (I entered my password here, 
</span><br>
why am I asked for the password? I am working under this account anyway)
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; WARNING: Remote peer ([[18118,0],1]) failed to preload a file.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Exit Status: 256
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Local File: 
</span><br>
/tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
<br>
<span class="quotelev3">&gt; &gt;&gt; Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Command:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; scp 
</span><br>
gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
<span class="quotelev3">&gt; &gt;&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt; mpirun was unable to launch the specified application as it could 
</span><br>
not access
<br>
<span class="quotelev3">&gt; &gt;&gt; or execute an executable:
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Node: node1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
--------------------------------------------------------------------------
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Had anyone succeeded with the 'preload-binary' option with the 
</span><br>
similar settings? I assume this mpirun option should work when compiling 
<br>
openmpi with default options? Anything I need to set?
<br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; --qing
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11181.php">Douglas Guptill: "Re: [OMPI users] Release date for 1.3.4?"</a>
<li><strong>Previous message:</strong> <a href="11179.php">RightCFD: "Re: [OMPI users] users Digest, Vol 1403, Issue 4"</a>
<li><strong>Maybe in reply to:</strong> <a href="11135.php">Qing Pang: "[OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/12/11479.php">Josh Hursey: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
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
