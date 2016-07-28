<?
$subject_val = "Re: [OMPI users] Problem with mpirun -preload-binary option";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  9 13:15:23 2009" -->
<!-- isoreceived="20091209181523" -->
<!-- sent="Wed, 9 Dec 2009 13:15:20 -0500" -->
<!-- isosent="20091209181520" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with mpirun -preload-binary option" -->
<!-- id="66266648-720C-4EAF-B6D4-0C0EF2373436_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AFC74FB.8020904_at_jsums.edu" -->
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
<strong>Date:</strong> 2009-12-09 13:15:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11480.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I verified that the preload functionality works on the trunk. It seems  
<br>
to be broken on the v1.3/v1.4 branches. The version of this code has  
<br>
changed significantly between the v1.3/v1.4 and the trunk/v1.5  
<br>
versions. I filed a bug about this so it does not get lost:
<br>
&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/2139">https://svn.open-mpi.org/trac/ompi/ticket/2139</a>
<br>
<p>Can you try this again with either the trunk or v1.5 to see if that  
<br>
helps with the preloading?
<br>
<p>However you need to fix the password-less login issue before anything  
<br>
else will work. If mpirun is prompting you for a password, then it  
<br>
will work properly.
<br>
<p>-- Josh
<br>
<p>On Nov 12, 2009, at 3:50 PM, Qing Pang wrote:
<br>
<p><span class="quotelev1">&gt; Now that I have passwordless-ssh set up both directions, and  
</span><br>
<span class="quotelev1">&gt; verified working - I still have the same problem.
</span><br>
<span class="quotelev1">&gt; I'm able to run ssh/scp on both master and client nodes - (at this  
</span><br>
<span class="quotelev1">&gt; point, they are pretty much the same), without being asked for  
</span><br>
<span class="quotelev1">&gt; password. And mpirun works fine if I have the executable put in the  
</span><br>
<span class="quotelev1">&gt; same directory on both nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I tried the preload-binary option, I still have the same  
</span><br>
<span class="quotelev1">&gt; problem - it asked me for the password of the node running mpirun,  
</span><br>
<span class="quotelev1">&gt; and then tells that scp failed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Josh Wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Though the --preload-binary option was created while building the  
</span><br>
<span class="quotelev1">&gt; checkpoint/restart functionality it does not depend on checkpoint/ 
</span><br>
<span class="quotelev1">&gt; restart function in any way (just a side effect of the initial  
</span><br>
<span class="quotelev1">&gt; development).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The problem you are seeing is a result of the computing environment  
</span><br>
<span class="quotelev1">&gt; setup of password-less ssh. The --preload-binary command uses  
</span><br>
<span class="quotelev1">&gt; 'scp' (at the moment) to copy the files from the node running mpirun  
</span><br>
<span class="quotelev1">&gt; to the compute nodes. The compute nodes are the ones that call  
</span><br>
<span class="quotelev1">&gt; 'scp', so you will need to setup password-less ssh in both directions.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Josh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 11, 2009, at 8:38 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm no expert on the preload-binary option - but I would suspect that
</span><br>
<span class="quotelev1">&gt; is the case given your observations.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; That option was created to support checkpoint/restart, not for what
</span><br>
<span class="quotelev1">&gt; you are attempting to do. Like I said, you -should- be able to use  
</span><br>
<span class="quotelev1">&gt; it for that purpose, but I expect you may hit a few quirks like this  
</span><br>
<span class="quotelev1">&gt; along the way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 11, 2009, at 9:16 AM, Qing Pang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Thank you very much for your help! I believe I do have password- 
</span><br>
<span class="quotelev2">&gt;&gt; less
</span><br>
<span class="quotelev1">&gt; ssh set up, at least from master node to client node (desktop -&gt;  
</span><br>
<span class="quotelev1">&gt; laptop in my case). If I type &gt;ssh node1 on my desktop terminal, I  
</span><br>
<span class="quotelev1">&gt; am able to get to the laptop node without being asked for password.  
</span><br>
<span class="quotelev1">&gt; And as I mentioned, if I copy the example executable from desktop to  
</span><br>
<span class="quotelev1">&gt; the laptop node using scp, then I am able to run it from desktop  
</span><br>
<span class="quotelev1">&gt; using both nodes.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Back to the preload-binary problem - I am asked for the password of
</span><br>
<span class="quotelev1">&gt; my master node - the node I am working on - not the remote client  
</span><br>
<span class="quotelev1">&gt; node. Do you mean that I should set up password-less ssh in both  
</span><br>
<span class="quotelev1">&gt; direction? Does the client node need to access master node through  
</span><br>
<span class="quotelev1">&gt; password-less ssh to make the preload-binary option work?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Ralph Castain Wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It -should- work, but you need password-less ssh setup. See our FAQ
</span><br>
<span class="quotelev3">&gt;&gt; &gt; for how to do that, if you are unfamiliar with it.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Nov 10, 2009, at 2:02 PM, Qing Pang wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I'm having problem getting the mpirun &quot;preload-binary&quot; option to  
</span><br>
<span class="quotelev2">&gt;&gt; work.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I'm using ubutu8.10 with openmpi 1.3.3, nodes connected with
</span><br>
<span class="quotelev1">&gt; Ethernet cable.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; If I copy the executable to client nodes using scp, then do  
</span><br>
<span class="quotelev2">&gt;&gt; mpirun,
</span><br>
<span class="quotelev1">&gt; everything works.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; But I really want to avoid the copying, so I tried the
</span><br>
<span class="quotelev1">&gt; -preload-binary option.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; When I typed the command on my master node as below (gordon- 
</span><br>
<span class="quotelev2">&gt;&gt; desktop
</span><br>
<span class="quotelev1">&gt; is my master node, and gordon-laptop is the client node):
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; -machinefile machine.linux -np 2 --preload-binary $(pwd)/ 
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; I got the following:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; gordon_at_gordon-desktop's password: (I entered my password here,
</span><br>
<span class="quotelev1">&gt; why am I asked for the password? I am working under this account  
</span><br>
<span class="quotelev1">&gt; anyway)
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; WARNING: Remote peer ([[18118,0],1]) failed to preload a file.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Exit Status: 256
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Local File:
</span><br>
<span class="quotelev1">&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/hello_c.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Remote File: /home/gordon/Desktop/openmpi-1.3.3/examples/ 
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Command:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; scp
</span><br>
<span class="quotelev1">&gt; gordon-desktop:/home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; /tmp/openmpi-sessions-gordon_at_gordon-laptop_0/18118/0/ 
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Will continue attempting to launch the process(es).
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; mpirun was unable to launch the specified application as it could
</span><br>
<span class="quotelev1">&gt; not access
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; or execute an executable:
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/ 
</span><br>
<span class="quotelev2">&gt;&gt; hello_c.out
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Node: node1
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; while attempting to start process rank 1.
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; Had anyone succeeded with the 'preload-binary' option with the
</span><br>
<span class="quotelev1">&gt; similar settings? I assume this mpirun option should work when  
</span><br>
<span class="quotelev1">&gt; compiling openmpi with default options? Anything I need to set?
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt; --qing
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt;&gt;
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
<li><strong>Next message:</strong> <a href="11480.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4"</a>
<li><strong>Previous message:</strong> <a href="11478.php">Matthew MacManes: "Re: [OMPI users] mpirun only works when -np &lt;4 (Gus Correa)"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/11/11180.php">Qing Pang: "Re: [OMPI users] Problem with mpirun -preload-binary option"</a>
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
