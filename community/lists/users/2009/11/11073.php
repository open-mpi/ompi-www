<?
$subject_val = "[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  5 15:19:41 2009" -->
<!-- isoreceived="20091105201941" -->
<!-- sent="Thu, 05 Nov 2009 14:19:12 -0600" -->
<!-- isosent="20091105201912" -->
<!-- name="qing pang" -->
<!-- email="qing.pang_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node" -->
<!-- id="4AF33340.70502_at_jsums.edu" -->
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
<strong>Subject:</strong> [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node<br>
<strong>From:</strong> qing pang (<em>qing.pang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-05 15:19:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Sir/Madam,
<br>
<p>I'm having problem running example program. Please kindly help --- I've 
<br>
been fooling with it for days, kind of getting lost.
<br>
<p>---------------------------------------------------------------------------------
<br>
MPIRUN fails on example hello prgram
<br>
-unable to launch the specified application on client node
<br>
---------------------------------------------------------------------------------
<br>
<p>1) I'm trying to run opemMPI with the following setting:
<br>
<p>1 PC (as master node) and 1 notebook (as client node) connected to an 
<br>
ethernet router through ethernet cable. Both running Ubuntu 8.10. 
<br>
There's no other connections. - Is this setting OK to run OpenMPI?
<br>
<p>2) Prerequisites
<br>
<p>SSH has been set up so that the master node can access the client node 
<br>
through passwordless ssh. I do notice that it takes 10~15 seconds 
<br>
between me entering '&gt;ssh &lt;slave ip address&gt;'command and getting onto 
<br>
the client node.
<br>
--- Could this be too slow for openmpi to run properlly?
<br>
<p>I do not have programs like network file system, network time protocol, 
<br>
resource management, scheduler, etc installed.
<br>
--- Does OpenMPI need any prerequites other than passwordless ssh?
<br>
<p>3) OpenMPI is installed on both nodes - downloaded from open-mpi.org, 
<br>
and do configure/make all using Default Settings.
<br>
<p>4) PATH and LD_LIBRARY_PATH
<br>
On both nodes,
<br>
PATH is 
<br>
/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games, 
<br>
which is the default setting in ubuntu.
<br>
LD_LIBRARY_PATH is set in ~/.bashrc - I added one line at the end of the 
<br>
file, 'export LD_LIBRARY_PATH=usr/local/lib:usr/lib'
<br>
So when I echo them on both nodes, I get:
<br>
<span class="quotelev1"> &gt;echo $PATH
</span><br>
<span class="quotelev1"> &gt;/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev1"> &gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1"> &gt;usr/local/lib:usr/lib
</span><br>
<p>But, if I do
<br>
<span class="quotelev1"> &gt;ssh &lt;client_ip&gt; 'echo $LD_LIBRARY_PATH'
</span><br>
nothing comes back.
<br>
<p>while
<br>
<span class="quotelev1"> &gt;ssh &lt;client_ip&gt; 'echo $PATH'
</span><br>
comes back with the right path.
<br>
<p>Is that a problem?
<br>
<p>4) Problem:
<br>
I compiled the example Hello_c using
<br>
<span class="quotelev1"> &gt;mpicc hello_c.c -o hello_c.out
</span><br>
and run them on both nodes locally, everything works fine.
<br>
<p>But when I tried to run it on 2 nodes (-np 2)
<br>
<span class="quotelev1"> &gt;mpirun -machinefile machine.linux -np 2 $(pwd)/hello_c.out
</span><br>
I got the following error:
<br>
<p>----------------------------------------------------------------------------
<br>
gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun 
<br>
--machinefile machine.linux -np 2 $(pwd)/hello_c.out
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
Node: 192.168.0.194
<br>
<p>while attempting to start process rank 1.
<br>
--------------------------------------------------------------------------
<br>
<p>Sometimes I get one other error message after that:
<br>
--------------------------------------------------------------------------
<br>
[gordon-desktop:30748] [[25975,0],0]-[[25975,1],0] mca_oob_tcp_msg_recv: 
<br>
readv failed: Connection reset by peer (104)
<br>
------------------------------------------------------------------------------
<br>
<p>5) Infomation attached:
<br>
ifconfig_masternode - output of ifconfig on masternode
<br>
ifconfig_slavenode - output of ifconfig on slavenode
<br>
ompi_info.txt - output of ompi_info -all
<br>
config.log - OpenMPI logfile
<br>
machine.linux - the machinefile used in mpirun command
<br>
<p><pre>
-- 
Sincerely,
Qing Pang
(601) 979 0270


</pre>
<p>
---------------------------------------------------------------------------------
<br>
MPIRUN fails on example hello prgram 
<br>
-unable to launch the specified application on client node 
<br>
---------------------------------------------------------------------------------
<br>
<p><p>1) I'm trying to run opemMPI with the following setting:
<br>
<p>1 PC (as master node) and 1 notebook (as client node) connected to an ethernet router through ethernet cable. Both running Ubuntu 8.10. There's no other connections. - Is this setting OK to run OpenMPI?
<br>
<p>2) Prerequisites
<br>
<p>SSH has been set up so that the master node can access the client node through passwordless ssh. I do notice that it takes 10~15 seconds between me entering '&gt;ssh &lt;slave ip address&gt;'command and getting onto the client node. - Can this be too slow for openmpi to run properlly? 
<br>
<p>I do not have programs like network file system, network time protocol, resource management, scheduler, etc installed. - Does OpenMPI have any prerequites other than passwordless ssh?
<br>
<p>3) OpenMPI is installed on both nodes - downloaded from open-mpi.org, and do configure/make all using Default Settings.
<br>
<p>4) PATH and LD_LIBRARY_PATH
<br>
On both nodes,
<br>
PATH is /usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games, which is the default setting in ubuntu.
<br>
LD_LIBRARY_PATH is set in ~/.bashrc - I added one line at the end of the file, 'export LD_LIBRARY_PATH=usr/local/lib:usr/lib'
<br>
So when I echo them on both nodes, I get:
<br>
<span class="quotelev1">&gt;echo $PATH 
</span><br>
<span class="quotelev1">&gt;/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin:/usr/games
</span><br>
<span class="quotelev1">&gt;echo $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;usr/local/lib:usr/lib
</span><br>
<p>But, if I do a 
<br>
<span class="quotelev1">&gt;ssh &lt;client_ip&gt; 'echo $LD_LIBRARY_PATH'
</span><br>
nothing comes back. 
<br>
<p>while
<br>
<span class="quotelev1">&gt;ssh &lt;client_ip&gt; 'echo $PATH'
</span><br>
comes back with the right path.
<br>
<p>Is that a problem?
<br>
<p><p>4) Problem:
<br>
I compiled the example Hello_c using 
<br>
<span class="quotelev1">&gt;mpicc hello_c.c -o hello_c.out
</span><br>
and run them on both nodes locally, everything was fine. 
<br>
<p>But when I tried to run it on 2 nodes (-np 2)
<br>
<span class="quotelev1">&gt;mpirun -machinefile machine.linux -np 2 $(pwd)/hello_c.out
</span><br>
I got the following error:
<br>
<p>----------------------------------------------------------------------------
<br>
gordon_at_gordon-desktop:~/Desktop/openmpi-1.3.3/examples$ mpirun --machinefile machine.linux -np 2 $(pwd)/hello_c.out
<br>
--------------------------------------------------------------------------
<br>
mpirun was unable to launch the specified application as it could not access
<br>
or execute an executable:
<br>
<p>Executable: /home/gordon/Desktop/openmpi-1.3.3/examples/hello_c.out
<br>
Node: 192.168.0.194
<br>
<p>while attempting to start process rank 1.
<br>
--------------------------------------------------------------------------
<br>
<p>Sometimes I get other error message after that:
<br>
--------------------------------------------------------------------------
<br>
[gordon-desktop:30748] [[25975,0],0]-[[25975,1],0] mca_oob_tcp_msg_recv: readv failed: Connection reset by peer (104)
<br>
------------------------------------------------------------------------------
<br>
<p>5) Infomation attached:
<br>
ifconfig_masternode - output of ifconfig on masternode
<br>
ifconfig_slavenode - output of ifconfig on slavenode
<br>
ompi_info.txt - output of ompi_info -all 
<br>
config.log - OpenMPI logfile 
<br>
machine.linux - the machinefile used in mpirun command
<br>
<p><p><hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11073/mpirun_info.tar.gz">mpirun_info.tar.gz</a>
</ul>
<!-- attachment="mpirun_info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Previous message:</strong> <a href="11072.php">Pallab Datta: "Re: [OMPI users] Openmpi on Heterogeneous environment"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
<li><strong>Reply:</strong> <a href="11074.php">Jeff Squyres: "Re: [OMPI users] mpirun example program fail on multiple nodes - unable to launch specified application on client node"</a>
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
