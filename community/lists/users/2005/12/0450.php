<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Dec 23 09:52:08 2005" -->
<!-- isoreceived="20051223145208" -->
<!-- sent="Fri, 23 Dec 2005 09:52:03 -0500 (EST)" -->
<!-- isosent="20051223145203" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet" -->
<!-- id="Pine.GSO.4.62.0512230949030.1629_at_enterprise" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="Pine.OSF.4.58.0512231407280.301464_at_gwdu70.gwdg.de" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-12-23 09:52:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<li><strong>Previous message:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0691.php">Pierre Valiron: "[OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Carsten
<br>
<p><span class="quotelev1">&gt; I have also tried the tuned alltoalls and they are really great!! Only for
</span><br>
<span class="quotelev1">&gt; very few message sizes in the case of 4 CPUs on a node one of my alltoalls
</span><br>
<span class="quotelev1">&gt; performed better. Are these tuned collectives ready to be used for
</span><br>
<span class="quotelev1">&gt; production runs?
</span><br>
<p>We are actively testing them on larger systems to get better decision 
<br>
functions.. can you send me the list of which sizes they do better and 
<br>
worse for? (that way I can alter the decision functions). But the real 
<br>
question is do they exhibit the strange performance behaviour that you 
<br>
have with the other alltoall versions? (Noting that in my previous email 
<br>
to you I stated that one of the alltoalls is a sendrecv pairbased 
<br>
implementation).
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Carsten
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0451.php">Brian Barrett: "Re: [O-MPI users] High Virtual Memory"</a>
<li><strong>Previous message:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>In reply to:</strong> <a href="0449.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/01/0459.php">Carsten Kutzner: "Re: [O-MPI users] Performance of all-to-all on Gbit Ethernet"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/02/0691.php">Pierre Valiron: "[OMPI users] Configure failure on Solaris Opteron with Sun Studio 11"</a>
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
