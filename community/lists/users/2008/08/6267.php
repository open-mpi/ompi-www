<?
$subject_val = "[OMPI users] Heap profiling with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 11:21:48 2008" -->
<!-- isoreceived="20080805152148" -->
<!-- sent="Tue, 5 Aug 2008 17:21:35 +0200" -->
<!-- isosent="20080805152135" -->
<!-- name="Jan Ploski" -->
<!-- email="Jan.Ploski_at_[hidden]" -->
<!-- subject="[OMPI users] Heap profiling with OpenMPI" -->
<!-- id="OF21E4FDE2.C51BBE9E-ONC125749C.0053C677-C125749C.0054600C_at_offis.uni-oldenburg.de" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] Heap profiling with OpenMPI<br>
<strong>From:</strong> Jan Ploski (<em>Jan.Ploski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-05 11:21:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I wanted to determine the peak heap memory usage of each MPI process in my 
<br>
application. Using MVAPICH it can be done by simply substituting a wrapper 
<br>
shell script for the MPI executable and from that wrapper script starting 
<br>
&quot;valgrind --tool=massif ./prog.exe&quot;. However, when I tried the same 
<br>
approach with OpenMPI, I got no output from massif (empty output file), 
<br>
even though the MPI process ran and finished as expected. Can someone 
<br>
explain this or provide an alternative way of obtaining the same 
<br>
information (preferably one that does not require source code 
<br>
instrumentation and recompiling)?
<br>
<p>Best regards,
<br>
Jan Ploski
<br>
<p><pre>
--
Dipl.-Inform. (FH) Jan Ploski
OFFIS
FuE Bereich Energie | R&amp;D Division Energy
Escherweg 2  - 26121 Oldenburg - Germany
Phone/Fax: +49 441 9722 - 184 / 202
E-Mail: Jan.Ploski_at_[hidden]
URL: <a href="http://www.offis.de">http://www.offis.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="6266.php">Jeff Squyres: "Re: [OMPI users] How to specify hosts for MPI_Comm_spawn"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="6268.php">George Bosilca: "Re: [OMPI users] Heap profiling with OpenMPI"</a>
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
