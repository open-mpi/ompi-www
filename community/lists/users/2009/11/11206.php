<?
$subject_val = "Re: [OMPI users] Number of Sockets used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 19:03:19 2009" -->
<!-- isoreceived="20091116000319" -->
<!-- sent="Sun, 15 Nov 2009 19:03:15 -0500" -->
<!-- isosent="20091116000315" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of Sockets used by OpenMPI" -->
<!-- id="f869b68c0911151603x5a96233di3669bcf40d33671d_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="83D12301-CF35-45F2-AC52-9104CC14AFFD_at_eecs.utk.edu" -->
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
<strong>Date:</strong> 2009-11-15 19:03:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks, George
<br>
<p>This would be an invaluable reference to me.
<br>
<p>Best regards
<br>
Durga
<br>
<p>On Sun, Nov 15, 2009 at 6:53 PM, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Durga,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You can find the answer to your questions in
</span><br>
<span class="quotelev1">&gt; <a href="http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/scop3.pdf">http://www.netlib.org/netlib/utk/people/JackDongarra/PAPERS/scop3.pdf</a>.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &#160;george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 15, 2009, at 14:39 , Durga Choudhury wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I apologize for dragging in this conversation in a different
</span><br>
<span class="quotelev2">&gt;&gt; direction, but I'd be very interested to know why the behavior with
</span><br>
<span class="quotelev2">&gt;&gt; the Playstation is different from other architectures. The PS3 box has
</span><br>
<span class="quotelev2">&gt;&gt; a single gigabit ethernet and no exapansion ports, so I'd assume it's
</span><br>
<span class="quotelev2">&gt;&gt; behavior would be no different than, e.g. a regular PC using the TCP
</span><br>
<span class="quotelev2">&gt;&gt; BTL. Perhaps it has something to do with the Cell BE architecture,
</span><br>
<span class="quotelev2">&gt;&gt; then. What was the reasoning behind this decision?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am keen to know about such 'hybrid' parallel programming paradigm,
</span><br>
<span class="quotelev2">&gt;&gt; e.g. using Cell BE or NUMA or CUDA on top of an MPI (or even a grid
</span><br>
<span class="quotelev2">&gt;&gt; topology). I'd appreciate any pointers to any material in this
</span><br>
<span class="quotelev2">&gt;&gt; regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sun, Nov 15, 2009 at 4:48 PM, George Bosilca &lt;bosilca_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; By default only one socket per peer per physical network is opened.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Open MPI has the possibility to open multiple socket per peer per
</span><br>
<span class="quotelev3">&gt;&gt;&gt; network,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; based on some experiments with the Playstation (where having multiple
</span><br>
<span class="quotelev3">&gt;&gt;&gt; socket
</span><br>
<span class="quotelev3">&gt;&gt;&gt; allow for more bandwidth). The MCA parameter that allows such behavior is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; btl_tcp_links.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &#160;george.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 13, 2009, at 17:59 , Charles Salvia wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When using TCP, how many sockets does each process open per
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; peer-process?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &#160;Does each process open a single socket to connect to each peer-process,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; does it use TWO sockets, one for sending, one for receiving?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; -Charles Salvia
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11207.php">Christoph Rackwitz: "Re: [OMPI users] nonblocking MPI_File_iwrite() does block?"</a>
<li><strong>Previous message:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="11205.php">George Bosilca: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
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
