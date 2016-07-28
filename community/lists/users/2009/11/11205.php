<?
$subject_val = "Re: [OMPI users] Number of Sockets used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 18:53:30 2009" -->
<!-- isoreceived="20091115235330" -->
<!-- sent="Sun, 15 Nov 2009 15:53:21 -0800" -->
<!-- isosent="20091115235321" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of Sockets used by OpenMPI" -->
<!-- id="83D12301-CF35-45F2-AC52-9104CC14AFFD_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f869b68c0911151439i65750c7j45a8ac0f925d365e_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Number of Sockets used by OpenMPI<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 18:53:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11206.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11206.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11206.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Durga,
<br>
<p>You can find the answer to your questions in <a href="http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/scop3.pdf">http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/scop3.pdf</a> 
<br>
.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Nov 15, 2009, at 14:39 , Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; I apologize for dragging in this conversation in a different
</span><br>
<span class="quotelev1">&gt; direction, but I'd be very interested to know why the behavior with
</span><br>
<span class="quotelev1">&gt; the Playstation is different from other architectures. The PS3 box has
</span><br>
<span class="quotelev1">&gt; a single gigabit ethernet and no exapansion ports, so I'd assume it's
</span><br>
<span class="quotelev1">&gt; behavior would be no different than, e.g. a regular PC using the TCP
</span><br>
<span class="quotelev1">&gt; BTL. Perhaps it has something to do with the Cell BE architecture,
</span><br>
<span class="quotelev1">&gt; then. What was the reasoning behind this decision?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am keen to know about such 'hybrid' parallel programming paradigm,
</span><br>
<span class="quotelev1">&gt; e.g. using Cell BE or NUMA or CUDA on top of an MPI (or even a grid
</span><br>
<span class="quotelev1">&gt; topology). I'd appreciate any pointers to any material in this
</span><br>
<span class="quotelev1">&gt; regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Nov 15, 2009 at 4:48 PM, George Bosilca  
</span><br>
<span class="quotelev1">&gt; &lt;bosilca_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; By default only one socket per peer per physical network is opened.  
</span><br>
<span class="quotelev2">&gt;&gt; However,
</span><br>
<span class="quotelev2">&gt;&gt; Open MPI has the possibility to open multiple socket per peer per  
</span><br>
<span class="quotelev2">&gt;&gt; network,
</span><br>
<span class="quotelev2">&gt;&gt; based on some experiments with the Playstation (where having  
</span><br>
<span class="quotelev2">&gt;&gt; multiple socket
</span><br>
<span class="quotelev2">&gt;&gt; allow for more bandwidth). The MCA parameter that allows such  
</span><br>
<span class="quotelev2">&gt;&gt; behavior is
</span><br>
<span class="quotelev2">&gt;&gt; btl_tcp_links.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;  george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 13, 2009, at 17:59 , Charles Salvia wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When using TCP, how many sockets does each process open per peer- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Does each process open a single socket to connect to each peer- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; process, or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; does it use TWO sockets, one for sending, one for receiving?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -Charles Salvia
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11206.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11206.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11206.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
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
