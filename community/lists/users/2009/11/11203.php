<?
$subject_val = "Re: [OMPI users] Number of Sockets used by OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Nov 15 16:48:15 2009" -->
<!-- isoreceived="20091115214815" -->
<!-- sent="Sun, 15 Nov 2009 13:48:05 -0800" -->
<!-- isosent="20091115214805" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Number of Sockets used by OpenMPI" -->
<!-- id="45041F89-2BE1-4180-A9E4-00BABF4CE61B_at_eecs.utk.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="afc7dbc60911131759r22a925dq8479883413cf8edb_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-11-15 16:48:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="11188.php">Charles Salvia: "[OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
By default only one socket per peer per physical network is opened.  
<br>
However, Open MPI has the possibility to open multiple socket per peer  
<br>
per network, based on some experiments with the Playstation (where  
<br>
having multiple socket allow for more bandwidth). The MCA parameter  
<br>
that allows such behavior is btl_tcp_links.
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Nov 13, 2009, at 17:59 , Charles Salvia wrote:
<br>
<p><span class="quotelev1">&gt; When using TCP, how many sockets does each process open per peer- 
</span><br>
<span class="quotelev1">&gt; process?  Does each process open a single socket to connect to each  
</span><br>
<span class="quotelev1">&gt; peer-process, or does it use TWO sockets, one for sending, one for  
</span><br>
<span class="quotelev1">&gt; receiving?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Charles Salvia
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
<li><strong>Next message:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="11202.php">Jeff Squyres: "Re: [OMPI users] Behavior of MPI_Send"</a>
<li><strong>In reply to:</strong> <a href="11188.php">Charles Salvia: "[OMPI users] Number of Sockets used by OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11204.php">Durga Choudhury: "Re: [OMPI users] Number of Sockets used by OpenMPI"</a>
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
