<?
$subject_val = "[OMPI users] OpenMPI LS-DYNA Connection refused";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 13:27:49 2011" -->
<!-- isoreceived="20110502172749" -->
<!-- sent="Mon, 2 May 2011 13:27:42 -0400" -->
<!-- isosent="20110502172742" -->
<!-- name="Robert Walters" -->
<!-- email="raw19896_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI LS-DYNA Connection refused" -->
<!-- id="DA4E99DF8B4E413E840F9735A11F6800_at_ce.ufl.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI LS-DYNA Connection refused<br>
<strong>From:</strong> Robert Walters (<em>raw19896_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 13:27:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16409.php">Terry Dontje: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open-MPI Users,
<br>
<p>&nbsp;
<br>
<p>I've been using OpenMPI for a while now and am very pleased with it. I use
<br>
the OpenMPI system across eight Red Hat Linux nodes (8 cores each) on 1 Gbps
<br>
Ethernet behind a dedicated switch. After working out kinks in the
<br>
beginning, we've been using it periodically anywhere from 8 cores to 64
<br>
cores. We use a finite element software named LS-DYNA. We do not have source
<br>
code for this program, it is compiled to work with OpenMPI 1.4.1 (I use
<br>
1.4.2) and we cannot make changes or request code to see how it performs
<br>
certain functions.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;From time to time, I will be simulating a particular &quot;job&quot; in LS-DYNA and
</span><br>
for some reason, it will quit OpenMPI issuing a MPI_ABORT command stating
<br>
that &quot;connect to address xx.xxx.xxx.xxx port xxx: Connection refused; trying
<br>
normal rsh (/usr/bin/rsh).&quot; This error comes after running for hours, which
<br>
means that connections to the node it's citing have already been made
<br>
previously. The particular node it names is random and changes from
<br>
simulation to simulation. We use SSH to communicate and we have the ports
<br>
open for node-to-node communications on any port. 
<br>
<p>&nbsp;
<br>
<p>Does any user have experience with this error where a connection is
<br>
established, and used for several hours, but after a seemingly random period
<br>
of time the program dies stating it can't make a connection?
<br>
<p>&nbsp;
<br>
<p>Thanks,
<br>
<p>Robert Walters 
<br>
<p><p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16410/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16409.php">Terry Dontje: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Reply:</strong> <a href="16411.php">Terry Dontje: "Re: [OMPI users] OpenMPI LS-DYNA Connection refused"</a>
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
