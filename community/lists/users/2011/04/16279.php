<?
$subject_val = "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 19 10:48:03 2011" -->
<!-- isoreceived="20110419144803" -->
<!-- sent="Tue, 19 Apr 2011 20:17:59 +0530" -->
<!-- isosent="20110419144759" -->
<!-- name="mohd naseem" -->
<!-- email="naseemshakeel_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun unsuccessful when run across multiple nodes" -->
<!-- id="BANLkTinpUEfSXfDN9Gks7pXYdQGbYD1hJg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A3BD2EFC-E2F0-456E-BCE1-6F8F10018DCB_at_staff.uni-marburg.de" -->
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
<strong>Date:</strong> 2011-04-19 10:47:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>In reply to:</strong> <a href="16272.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
sorry sir,
<br>
<p>i am unable to understand what u are saying ? becoz i am a new user of mpi.
<br>
<p>please tell me details about it and command also
<br>
<p>thanks
<br>
<p><p><p>On Tue, Apr 19, 2011 at 2:32 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Good, then please supply a hostfile with the names of the machines you want
</span><br>
<span class="quotelev1">&gt; to run for a particular run and give it as option to `mpiexec`. See options
</span><br>
<span class="quotelev1">&gt; -np and -machinefile.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 19.04.2011 um 06:38 schrieb mohd naseem:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; sir
</span><br>
<span class="quotelev2">&gt; &gt; when i give mpiexec hostname command.
</span><br>
<span class="quotelev2">&gt; &gt; it only give one hostname. rest are not shown.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Apr 18, 2011 at 7:46 PM, Reuti &lt;reuti_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Am 18.04.2011 um 15:40 schrieb chenjie gu:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am a green hand on Openmpi, I have the following Openmpi structure,
</span><br>
<span class="quotelev1">&gt; however it has problem when running across multiple nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am trying to build a Bewolf Cluster between 6 nodes of our serve (HP
</span><br>
<span class="quotelev1">&gt; Proliant G460 G7), I have installed the Openmpi on one node (assuming at
</span><br>
<span class="quotelev1">&gt; /mirror),
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ./configure --prefix=/mirror/openmpi CC=icc CXX=icpc F77=ifort FC=ifort
</span><br>
<span class="quotelev3">&gt; &gt; &gt; make all install
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; using NFS, the directory of /mirror was successfully exported to the
</span><br>
<span class="quotelev1">&gt; rest of 5 nodes. Now as I test the Openmpi, it runs very well on a single
</span><br>
<span class="quotelev1">&gt; node,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; however it hangs across multiple nodes.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Now one possible reason as I know is that Openmpi uses TCP to exchange
</span><br>
<span class="quotelev1">&gt; data between different nodes, so I am worried about
</span><br>
<span class="quotelev3">&gt; &gt; &gt; whether there are firewalls between each nodes, which can be factory
</span><br>
<span class="quotelev1">&gt; integrated at somewhere(switch/NIC). Could anyone give me some
</span><br>
<span class="quotelev3">&gt; &gt; &gt; information on this point?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; It's not only about MPI communcation. Before you need some means to allow
</span><br>
<span class="quotelev1">&gt; the startup of the local orte daemons on each machine by passphraseless
</span><br>
<span class="quotelev1">&gt; ssh-keys or better hostbased authentication
</span><br>
<span class="quotelev1">&gt; <a href="http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html">http://arc.liv.ac.uk/SGE/howto/hostbased-ssh.html</a> , or enable `rsh` on the
</span><br>
<span class="quotelev1">&gt; machines and tell Open MPI to use it. Is:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpiexec hostname
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; giving you a list of the involved machines?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Thanks a lot,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Regards,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ArchyGU
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Nanyang Technological University
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16279/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="16278.php">Ralph Castain: "Re: [OMPI users] mca_oob_tcp_msg_recv: readv failed:Unknown error (10054)"</a>
<li><strong>In reply to:</strong> <a href="16272.php">Reuti: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
<li><strong>Reply:</strong> <a href="16280.php">Ralph Castain: "Re: [OMPI users] mpirun unsuccessful when run across multiple nodes"</a>
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
