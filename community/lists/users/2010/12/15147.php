<?
$subject_val = "[OMPI users] Valgrind suppression not so suppressed";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 16:04:37 2010" -->
<!-- isoreceived="20101215210437" -->
<!-- sent="Wed, 15 Dec 2010 13:04:33 -0800" -->
<!-- isosent="20101215210433" -->
<!-- name="David Mathog" -->
<!-- email="mathog_at_[hidden]" -->
<!-- subject="[OMPI users] Valgrind suppression not so suppressed" -->
<!-- id="E1PSyWX-0000y8-9s_at_mendel.bio.caltech.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Valgrind suppression not so suppressed<br>
<strong>From:</strong> David Mathog (<em>mathog_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 16:04:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15148.php">Tom Rosmond: "[OMPI users] MPI-IO problem"</a>
<li><strong>Previous message:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
OMPI 1.4.3
<br>
Valgrind 3.5.0
<br>
<p>Trying to use valgrind on a program and getting a ton of MPI related
<br>
noise, totally swamping the memory problems in the program itself.  
<br>
<p>Looked at the FAQ and used the suppression file referred to there:
<br>
<p>mpirun -np 2 -host newsaf.cluster \
<br>
&nbsp;valgrind \
<br>
&nbsp;&nbsp;--leak-check=full \
<br>
&nbsp;&nbsp;--suppressions=/opt/ompi143/share/openmpi/openmpi-valgrind.supp \
<br>
&nbsp;hmmfetch \
<br>
&nbsp;&nbsp;&nbsp;--mpisplit \
<br>
&nbsp;&nbsp;&nbsp;/usr/common/BLASTDB/PFAMDIR3/Pfam-A.hmm CagE_TrbE_VirB
<br>
<p>To count up all of these messages, piped with:
<br>
&nbsp;&nbsp;&nbsp;2&gt;&amp;1 | grep PMPI_Init | wc
<br>
<p>which returned 92 for the command above.  Leaving off the 
<br>
<p>&nbsp;&nbsp;--leak-check=full 
<br>
<p>reduces the count to 4 (as well as the usefulness of valgrind for
<br>
finding memory leaks!)  Those counts are unchanged when 
<br>
<p>&nbsp;&nbsp;--suppressions=/opt/ompi143/share/openmpi/openmpi-valgrind.supp
<br>
<p>is omitted, suggesting that it is ineffective on this combination of
<br>
OMPI and Valgrind.
<br>
<p>Is there a suppression file for these versions that will shut down all
<br>
messages under PMPI_INit but still allow the messages from the program
<br>
being tested???
<br>
<p>Thanks,
<br>
<p>David Mathog
<br>
mathog_at_[hidden]
<br>
Manager, Sequence Analysis Facility, Biology Division, Caltech
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15148.php">Tom Rosmond: "[OMPI users] MPI-IO problem"</a>
<li><strong>Previous message:</strong> <a href="15146.php">Ralph Castain: "Re: [OMPI users] Issue with : mca_oob_tcp_peer_recv_connect_ack on SGI Altix"</a>
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
