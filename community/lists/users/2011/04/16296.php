<?
$subject_val = "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 10:48:17 2011" -->
<!-- isoreceived="20110420144817" -->
<!-- sent="Wed, 20 Apr 2011 10:48:10 -0400" -->
<!-- isosent="20110420144810" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun unsuccessful when run across multiple nodes" -->
<!-- id="04DD5120-6709-4B2A-A09E-D72A911AAD1A_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="BANLkTik2Tg088W9xn44jewePCYXEqOV=JQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpirun unsuccessful when run across multiple nodes<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-20 10:48:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Previous message:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16294.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You need to compile your cpi.c to get an executable.  This is not an MPI issue.  :-)
<br>
<p>Also, mpdboot is part of a different MPI implementation named MPICH; you don't need to run mpdboot with Open MPI.  If you have further questions about MPICH, you'll need to ping them on their mailing list -- we aren't able to answer MPICH questions here, sorry!
<br>
<p>(background: MPI = a book.  It's a specification.  There's a bunch of different implementations of that specification available; Open MPI is one [great] one.  :-)  MPICH is another.  There are also others.)
<br>
<p><p>On Apr 20, 2011, at 10:24 AM, mohd naseem wrote:
<br>
<p><span class="quotelev1">&gt; folloeing error shows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_f2 programrun]$ mpiexec -np 4 ./cpi.c
</span><br>
<span class="quotelev1">&gt; problem with execution of ./cpi.c  on  f2:  [Errno 13] Permission denied 
</span><br>
<span class="quotelev1">&gt; problem with execution of ./cpi.c  on  f2:  [Errno 13] Permission denied 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_f2 programrun]$ mpdboot -n 2 -v
</span><br>
<span class="quotelev1">&gt; totalnum=2  numhosts=1
</span><br>
<span class="quotelev1">&gt; there are not enough hosts on which to start all processes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Apr 20, 2011 at 7:51 PM, mohd naseem &lt;naseemshakeel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; sir i m still not able to trace all the hosts
</span><br>
<span class="quotelev1">&gt; following error shows
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [mpiuser_at_f2 programrun]$ mpiexec -np 4 ./cpi.c
</span><br>
<span class="quotelev1">&gt; problem with execution of ./cpi.c  on  f2:  [Errno 13] Permission denied 
</span><br>
<span class="quotelev1">&gt; problem with execution of ./cpi.c  on  f2:  [Errno 13] Permission denied 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 19, 2011 at 8:25 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; You have to tell mpiexec what nodes you want to use for your application. This is typically done either on the command line or in a file. For now, you could just do this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec -host node1,node2,node3 -np N ./my_app
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; where node1,node2,node3,...  are the names or IP addresses of the nodes you want to run on, and N is the number of total processes you want executed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Apr 19, 2011, at 8:47 AM, mohd naseem wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; sorry sir,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; i am unable to understand what u are saying ? becoz i am a new user of mpi.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; please tell me details about it and command also
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, Apr 19, 2011 at 2:32 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Good, then please supply a hostfile with the names of the machines you want to run for a particular run and give it as option to `mpiexec`. See options -np and -machinefile.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- Reuti
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Am 19.04.2011 um 06:38 schrieb mohd naseem:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt; &gt; sir
</span><br>
<span class="quotelev3">&gt;&gt; &gt; when i give mpiexec hostname command.
</span><br>
<span class="quotelev3">&gt;&gt; &gt; it only give one hostname. rest are not shown.
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; On Mon, Apr 18, 2011 at 7:46 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt; &gt; Am 18.04.2011 um 15:40 schrieb chenjie gu:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I am a green hand on Openmpi, I have the following Openmpi structure, however it has problem when running across multiple nodes.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; I am trying to build a Bewolf Cluster between 6 nodes of our serve (HP Proliant G460 G7), I have installed the Openmpi on one node (assuming at /mirror),
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ./configure --prefix=/mirror/openmpi CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; make all install
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; using NFS, the directory of /mirror was successfully exported to the rest of 5 nodes. Now as I test the Openmpi, it runs very well on a single node,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; however it hangs across multiple nodes.
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Now one possible reason as I know is that Openmpi uses TCP to exchange data between different nodes, so I am worried about
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; whether there are firewalls between each nodes, which can be factory integrated at somewhere(switch/NIC). Could anyone give me some
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; information on this point?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; It's not only about MPI communcation. Before you need some means to allow the startup of the local orte daemons on each machine by passphraseless ssh-keys or better hostbased authentication <a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a> , or enable `rsh` on the machines and tell Open MPI to use it. Is:
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; mpiexec hostname
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; giving you a list of the involved machines?
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Thanks a lot,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; ArchyGU
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; Nanyang Technological University
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt; &gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; 
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16297.php">Gus Correa: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Previous message:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>In reply to:</strong> <a href="16294.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
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
