<?
$subject_val = "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 16:15:45 2009" -->
<!-- isoreceived="20091105211545" -->
<!-- sent="Thu, 05 Nov 2009 15:15:33 -0600" -->
<!-- isosent="20091105211533" -->
<!-- name="Qing Pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node" -->
<!-- id="4AF34075.7030004_at_jsums.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="FC54FFFE-C539-4926-AF8A-AD52F92907A1_at_cisco.com" -->
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
<strong>From:</strong> Qing Pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 16:15:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff! That solves the problem. :-) You are the lifesaver!
<br>
So does that means I always need to copy my application to all the 
<br>
nodes? Or should I give the pathname of the my executable in a different 
<br>
way to avoid this? Do I need a network file system for that?
<br>
<p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; The short version of the answer is to check to see that the executable 
</span><br>
<span class="quotelev1">&gt; is in the same location on both nodes (apparently: 
</span><br>
<span class="quotelev1">&gt; /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out).  Open MPI is 
</span><br>
<span class="quotelev1">&gt; complaining that it can't find that specific executable on the .194 node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See below for more detail.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 5, 2009, at 3:19 PM, qing pang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) I'm trying to run opemMPI with the following setting:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1 PC (as master node) and 1 notebook (as client node) connected to an
</span><br>
<span class="quotelev2">&gt;&gt; ethernet router through ethernet cable. Both running Ubuntu 8.10.
</span><br>
<span class="quotelev2">&gt;&gt; There's no other connections. - Is this setting OK to run OpenMPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2) Prerequisites
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; SSH has been set up so that the master node can access the client node
</span><br>
<span class="quotelev2">&gt;&gt; through passwordless ssh. I do notice that it takes 10~15 seconds
</span><br>
<span class="quotelev2">&gt;&gt; between me entering '&gt;ssh &lt;slave ip address&gt;'command and getting onto
</span><br>
<span class="quotelev2">&gt;&gt; the client node.
</span><br>
<span class="quotelev2">&gt;&gt; --- Could this be too slow for openmpi to run properlly?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nope -- should be ok.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I do not have programs like network file system, network time protocol,
</span><br>
<span class="quotelev2">&gt;&gt; resource management, scheduler, etc installed.
</span><br>
<span class="quotelev2">&gt;&gt; --- Does OpenMPI need any prerequites other than passwordless ssh?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Not in this case, no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3) OpenMPI is installed on both nodes - downloaded from open-mpi.org,
</span><br>
<span class="quotelev2">&gt;&gt; and do configure/make all using Default Settings.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; On both nodes,
</span><br>
<span class="quotelev2">&gt;&gt; PATH is
</span><br>
<span class="quotelev2">&gt;&gt; /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games,
</span><br>
<span class="quotelev2">&gt;&gt; which is the default setting in ubuntu.
</span><br>
<span class="quotelev2">&gt;&gt; LD_LIBRARY_PATH is set in ~/.bashrc - I added one line at the end of the
</span><br>
<span class="quotelev2">&gt;&gt; file, 'export LD_LIBRARY_PATH=usr/local/lib:usr/lib'
</span><br>
<span class="quotelev2">&gt;&gt; So when I echo them on both nodes, I get:
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;echo $PATH
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;usr/local/lib:usr/lib
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But, if I do
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;ssh &lt;client_ip&gt; 'echo $LD_LIBRARY_PATH'
</span><br>
<span class="quotelev2">&gt;&gt; nothing comes back.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; while
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;ssh &lt;client_ip&gt; 'echo $PATH'
</span><br>
<span class="quotelev2">&gt;&gt; comes back with the right path.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is that a problem?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 4) Problem:
</span><br>
<span class="quotelev2">&gt;&gt; I compiled the example Hello_c using
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;mpicc hello_c.c -o hello_c.out
</span><br>
<span class="quotelev2">&gt;&gt; and run them on both nodes locally, everything works fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; But when I tried to run it on 2 nodes (-np 2)
</span><br>
<span class="quotelev3">&gt;&gt;  &gt;mpirun -machinefile machine.linux -np 2 $(pwd)/hello_c.out
</span><br>
<span class="quotelev2">&gt;&gt; I got the following error:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun
</span><br>
<span class="quotelev2">&gt;&gt; --machinefile machine.linux -np 2 $(pwd)/hello_c.out
</span><br>
<span class="quotelev2">&gt;&gt; -------------------------------------------------------------------------- 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun was unable to launch the specified application as it could not 
</span><br>
<span class="quotelev2">&gt;&gt; access
</span><br>
<span class="quotelev2">&gt;&gt; or execute an executable:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
</span><br>
<span class="quotelev2">&gt;&gt; Node: 192.168.0.194
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are giving an absolute pathname in the mpirun command line:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -machinefile machine.linux -np 2 $(pwd)/hello_c.out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hence, it's looking for exactly 
</span><br>
<span class="quotelev1">&gt; /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out on both 
</span><br>
<span class="quotelev1">&gt; nodes.  If the executable is in a different directory on the other 
</span><br>
<span class="quotelev1">&gt; node, that's where you're probably running into the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>In reply to:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11076.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11077.php">Douglas Guptill: "Re: [OMPI users] mpirun example program fail on multiple nodes -	unable to launch specified application on client node"</a>
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
