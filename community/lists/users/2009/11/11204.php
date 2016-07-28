<?
$subject_val = "Re: [OMPI users] Number of Sockets used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 17:39:44 2009" -->
<!-- isoreceived="20091115223944" -->
<!-- sent="Sun, 15 Nov 2009 17:39:40 -0500" -->
<!-- isosent="20091115223940" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of Sockets used by OpenMPI" -->
<!-- id="f869b68c0911151439i65750c7j45a8ac0f925d365e_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="45041F89-2BE1-4180-A9E4-00BABF4CE61B_at_eecs.utk.edu" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-15 17:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I apologize for dragging in this conversation in a different
<br>
direction, but I'd be very interested to know why the behavior with
<br>
the Playstation is different from other architectures. The PS3 box has
<br>
a single gigabit ethernet and no exapansion ports, so I'd assume it's
<br>
behavior would be no different than, e.g. a regular PC using the TCP
<br>
BTL. Perhaps it has something to do with the Cell BE architecture,
<br>
then. What was the reasoning behind this decision?
<br>
<p>I am keen to know about such 'hybrid' parallel programming paradigm,
<br>
e.g. using Cell BE or NUMA or CUDA on top of an MPI (or even a grid
<br>
topology). I'd appreciate any pointers to any material in this
<br>
regards.
<br>
<p>Durga
<br>
<p>On Sun, Nov 15, 2009 at 4:48 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; By default only one socket per peer per physical network is opened. However,
</span><br>
<span class="quotelev1">&gt; Open MPI has the possibility to open multiple socket per peer per network,
</span><br>
<span class="quotelev1">&gt; based on some experiments with the Playstation (where having multiple socket
</span><br>
<span class="quotelev1">&gt; allow for more bandwidth). The MCA parameter that allows such behavior is
</span><br>
<span class="quotelev1">&gt; btl_tcp_links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 13, 2009, at 17:59 , Charles Salvia wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When using TCP, how many sockets does each process open per peer-process?
</span><br>
<span class="quotelev2">&gt;&gt; &#160;Does each process open a single socket to connect to each peer-process, or
</span><br>
<span class="quotelev2">&gt;&gt; does it use TWO sockets, one for sending, one for receiving?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Charles Salvia
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
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11203.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
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
