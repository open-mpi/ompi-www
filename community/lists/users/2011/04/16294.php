<?
$subject_val = "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Apr 20 10:24:58 2011" -->
<!-- isoreceived="20110420142458" -->
<!-- sent="Wed, 20 Apr 2011 19:54:52 +0530" -->
<!-- isosent="20110420142452" -->
<!-- name="mohd naseem" -->
<!-- email="naseemshakeel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun unsuccessful when run across multiple nodes" -->
<!-- id="BANLkTik2Tg088W9xn44jewePCYXEqOV=JQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinjVwvZ3bdN6XSPXEWCbQBhPfnxhA_at_mail.gmail.com" -->
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
<strong>From:</strong> mohd naseem (<em>naseemshakeel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-20 10:24:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Previous message:</strong> <a href="16293.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16293.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
folloeing error shows
<br>
<p>[mpiuser_at_f2 programrun]$ mpiexec -np 4 ./cpi.c
<br>
problem with execution of ./cpi.c  on  f2:  [Errno 13] Permission denied
<br>
problem with execution of ./cpi.c  on  f2:  [Errno 13] Permission denied
<br>
[mpiuser_at_f2 programrun]$ mpdboot -n 2 -v
<br>
totalnum=2  numhosts=1
<br>
there are not enough hosts on which to start all processes
<br>
<p><p><p>On Wed, Apr 20, 2011 at 7:51 PM, mohd naseem &lt;naseemshakeel_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; sir i m still not able to trace all the hosts
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You have to tell mpiexec what nodes you want to use for your application.
</span><br>
<span class="quotelev2">&gt;&gt; This is typically done either on the command line or in a file. For now, you
</span><br>
<span class="quotelev2">&gt;&gt; could just do this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec -host node1,node2,node3 -np N ./my_app
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; where node1,node2,node3,...  are the names or IP addresses of the nodes
</span><br>
<span class="quotelev2">&gt;&gt; you want to run on, and N is the number of total processes you want
</span><br>
<span class="quotelev2">&gt;&gt; executed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Apr 19, 2011, at 8:47 AM, mohd naseem wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; sorry sir,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; i am unable to understand what u are saying ? becoz i am a new user of
</span><br>
<span class="quotelev2">&gt;&gt; mpi.
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
<span class="quotelev2">&gt;&gt; On Tue, Apr 19, 2011 at 2:32 PM, Reuti &lt;reuti_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Good, then please supply a hostfile with the names of the machines you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want to run for a particular run and give it as option to `mpiexec`. See
</span><br>
<span class="quotelev3">&gt;&gt;&gt; options -np and -machinefile.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- Reuti
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Am 19.04.2011 um 06:38 schrieb mohd naseem:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; sir
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; when i give mpiexec hostname command.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; it only give one hostname. rest are not shown.
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; On Mon, Apr 18, 2011 at 7:46 PM, Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; Am 18.04.2011 um 15:40 schrieb chenjie gu:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I am a green hand on Openmpi, I have the following Openmpi structure,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; however it has problem when running across multiple nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; I am trying to build a Bewolf Cluster between 6 nodes of our serve
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (HP Proliant G460 G7), I have installed the Openmpi on one node (assuming at
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /mirror),
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ./configure --prefix=/mirror/openmpi CC=icc CXX=icpc F77=ifort
</span><br>
<span class="quotelev3">&gt;&gt;&gt; FC=ifort
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; make all install
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; using NFS, the directory of /mirror was successfully exported to the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; rest of 5 nodes. Now as I test the Openmpi, it runs very well on a single
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; however it hangs across multiple nodes.
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Now one possible reason as I know is that Openmpi uses TCP to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; exchange data between different nodes, so I am worried about
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; whether there are firewalls between each nodes, which can be factory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; integrated at somewhere(switch/NIC). Could anyone give me some
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; information on this point?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; It's not only about MPI communcation. Before you need some means to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow the startup of the local orte daemons on each machine by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passphraseless ssh-keys or better hostbased authentication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a> , or enable `rsh` on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the machines and tell Open MPI to use it. Is:
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; mpiexec hostname
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; giving you a list of the involved machines?
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; -- Reuti
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Thanks a lot,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; ArchyGU
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; Nanyang Technological University
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16294/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16295.php">Ormiston, Scott J.: "Re: [OMPI users] Need help buiding OpenMPI with Intel v12.0 compilers on Linux"</a>
<li><strong>Previous message:</strong> <a href="16293.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="16293.php">mohd naseem: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16296.php">Jeff Squyres: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
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
