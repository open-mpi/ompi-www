<?
$subject_val = "[OMPI users] MPI_Lookup_name";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun  9 11:58:36 2009" -->
<!-- isoreceived="20090609155836" -->
<!-- sent="Tue, 09 Jun 2009 17:58:31 +0200" -->
<!-- isosent="20090609155831" -->
<!-- name="Yann JOBIC" -->
<!-- email="jobic_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Lookup_name" -->
<!-- id="4A2E86A7.2020802_at_polytech.univ-mrs.fr" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Lookup_name<br>
<strong>From:</strong> Yann JOBIC (<em>jobic_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-06-09 11:58:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9579.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Previous message:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9579.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Reply:</strong> <a href="9579.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I'm trying to get MPI_Lookup_name working.
<br>
The codes are working fine with mpich2.
<br>
I'm using ompi-1.3.2 (r21054, from the tar version)
<br>
<p>Here's the error message :
<br>
[homard:26336] *** An error occurred in MPI_Lookup_name
<br>
[homard:26336] *** on communicator MPI_COMM_WORLD
<br>
[homard:26336] *** MPI_ERR_NAME: invalid name argument
<br>
[homard:26336] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
<p>The method i used :
<br>
TERM1 : ompi-server -d --report-uri test
<br>
TERM2 : mpirun -ompi-server test -np 1 server
<br>
TERM3 : mpirun -ompi-server test -np 1 client
<br>
Then i've got the error.
<br>
<p>Here's the codes :
<br>
<a href="http://www.latp.univ-mrs.fr/~jobic/server.c">http://www.latp.univ-mrs.fr/~jobic/server.c</a>
<br>
<a href="http://www.latp.univ-mrs.fr/~jobic/client.c">http://www.latp.univ-mrs.fr/~jobic/client.c</a>
<br>
<p>I also have some strange errors, like :
<br>
[homard:26319] [[34061,0],0] ORTE_ERROR_LOG: Bad parameter in file 
<br>
base/rml_base_contact.c at line 153
<br>
[homard:26319] [[34061,0],0] ORTE_ERROR_LOG: Bad parameter in file 
<br>
rml_oob_contact.c at line 55
<br>
[homard:26319] [[34061,0],0] ORTE_ERROR_LOG: Bad parameter in file 
<br>
base/rml_base_contact.c at line 91
<br>
<p>Have you succeed in making MPI_Lookup_name work ??
<br>
<p>Thanks,
<br>
<p>Yann
<br>
<p><p><p><pre>
-- 
___________________________
Yann JOBIC
HPC engineer
Polytech Marseille DME
IUSTI-CNRS UMR 6595
Technop&#244;le de Ch&#226;teau Gombert
5 rue Enrico Fermi
13453 Marseille cedex 13
Tel : (33) 4 91 10 69 39
  ou  (33) 4 91 10 69 43
Fax : (33) 4 91 10 69 69 
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9579.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Previous message:</strong> <a href="9577.php">Scott Atchley: "Re: [OMPI users] Problem with OpenMPI (MX btl and mtl) and threads"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9579.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name"</a>
<li><strong>Reply:</strong> <a href="9579.php">Ralph Castain: "Re: [OMPI users] MPI_Lookup_name"</a>
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
