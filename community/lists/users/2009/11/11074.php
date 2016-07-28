<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 15:53:43 2009" -->
<!-- isoreceived="20091105205343" -->
<!-- sent="Thu, 5 Nov 2009 15:53:38 -0500" -->
<!-- isosent="20091105205338" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node" -->
<!-- id="FC54FFFE-C539-4926-AF8A-AD52F92907A1_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4AF33340.70502_at_jsums.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 15:53:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11073.php">qing pang: "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11073.php">qing pang: "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The short version of the answer is to check to see that the executable  
<br>
is in the same location on both nodes (apparently: /home/gordon/ 
<br>
Desktop/openmpi-1.3.3/examples/hello_c.out).  Open MPI is complaining  
<br>
that it can't find that specific executable on the .194 node.
<br>
<p>See below for more detail.
<br>
<p><p>On Nov 5, 2009, at 3:19 PM, qing pang wrote:
<br>
<p><span class="quotelev1">&gt; 1) I'm trying to run opemMPI with the following setting:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1 PC (as master node) and 1 notebook (as client node) connected to an
</span><br>
<span class="quotelev1">&gt; ethernet router through ethernet cable. Both running Ubuntu 8.10.
</span><br>
<span class="quotelev1">&gt; There's no other connections. - Is this setting OK to run OpenMPI?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Yes.
<br>
<p><span class="quotelev1">&gt; 2) Prerequisites
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SSH has been set up so that the master node can access the client node
</span><br>
<span class="quotelev1">&gt; through passwordless ssh. I do notice that it takes 10~15 seconds
</span><br>
<span class="quotelev1">&gt; between me entering '&gt;ssh &lt;slave ip address&gt;'command and getting onto
</span><br>
<span class="quotelev1">&gt; the client node.
</span><br>
<span class="quotelev1">&gt; --- Could this be too slow for openmpi to run properlly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nope -- should be ok.
<br>
<p><span class="quotelev1">&gt; I do not have programs like network file system, network time  
</span><br>
<span class="quotelev1">&gt; protocol,
</span><br>
<span class="quotelev1">&gt; resource management, scheduler, etc installed.
</span><br>
<span class="quotelev1">&gt; --- Does OpenMPI need any prerequites other than passwordless ssh?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Not in this case, no.
<br>
<p><span class="quotelev1">&gt; 3) OpenMPI is installed on both nodes - downloaded from open-mpi.org,
</span><br>
<span class="quotelev1">&gt; and do configure/make all using Default Settings.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 4) PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; On both nodes,
</span><br>
<span class="quotelev1">&gt; PATH is
</span><br>
<span class="quotelev1">&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; games,
</span><br>
<span class="quotelev1">&gt; which is the default setting in ubuntu.
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH is set in ~/.bashrc - I added one line at the end of  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; file, 'export LD_LIBRARY_PATH=usr/local/lib:usr/lib'
</span><br>
<span class="quotelev1">&gt; So when I echo them on both nodes, I get:
</span><br>
<span class="quotelev2">&gt;  &gt;echo $PATH
</span><br>
<span class="quotelev2">&gt;  &gt;/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/ 
</span><br>
<span class="quotelev1">&gt; games
</span><br>
<span class="quotelev2">&gt;  &gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;  &gt;usr/local/lib:usr/lib
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, if I do
</span><br>
<span class="quotelev2">&gt;  &gt;ssh &lt;client_ip&gt; 'echo $LD_LIBRARY_PATH'
</span><br>
<span class="quotelev1">&gt; nothing comes back.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while
</span><br>
<span class="quotelev2">&gt;  &gt;ssh &lt;client_ip&gt; 'echo $PATH'
</span><br>
<span class="quotelev1">&gt; comes back with the right path.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is that a problem?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>No.
<br>
<p><span class="quotelev1">&gt; 4) Problem:
</span><br>
<span class="quotelev1">&gt; I compiled the example Hello_c using
</span><br>
<span class="quotelev2">&gt;  &gt;mpicc hello_c.c -o hello_c.out
</span><br>
<span class="quotelev1">&gt; and run them on both nodes locally, everything works fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But when I tried to run it on 2 nodes (-np 2)
</span><br>
<span class="quotelev2">&gt;  &gt;mpirun -machinefile machine.linux -np 2 $(pwd)/hello_c.out
</span><br>
<span class="quotelev1">&gt; I got the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun
</span><br>
<span class="quotelev1">&gt; --machinefile machine.linux -np 2 $(pwd)/hello_c.out
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
<span class="quotelev1">&gt; Node: 192.168.0.194
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>You are giving an absolute pathname in the mpirun command line:
<br>
<p>mpirun -machinefile machine.linux -np 2 $(pwd)/hello_c.out
<br>
<p><p>Hence, it's looking for exactly /home/gordon/Desktop/openmpi-1.3.3/ 
<br>
examples/hello_c.out on both nodes.  If the executable is in a  
<br>
different directory on the other node, that's where you're probably  
<br>
running into the problem.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11073.php">qing pang: "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11073.php">qing pang: "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11075.php">Qing Pang: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
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
