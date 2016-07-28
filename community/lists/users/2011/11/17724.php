<?
$subject_val = "[OMPI users]  Socket ports";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  8 13:30:45 2011" -->
<!-- isoreceived="20111108183045" -->
<!-- sent="Tue, 8 Nov 2011 13:31:47 -0500" -->
<!-- isosent="20111108183147" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="[OMPI users]  Socket ports" -->
<!-- id="OF1318CA4D.1F61DBB4-ON85257942.006520D8-85257942.0065CCC0_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E0355DF3-2281-4DD4-BEB3-A30B77AD03FE_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users]  Socket ports<br>
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-08 13:31:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17725.php">Gustavo Correa: "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17723.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17723.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17732.php">Jeff Squyres: "Re: [OMPI users] Socket ports"</a>
<li><strong>Reply:</strong> <a href="17732.php">Jeff Squyres: "Re: [OMPI users] Socket ports"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm attempting to launch my app via mpirun and a host file to use nodes on 
<br>
multiple 'stand-alone' servers.  mpirun is able to launch my app on all 
<br>
requested nodes on all servers, but my app doesn't seem to be able to 
<br>
communicate via the standard MPI api calls (send , recv, etc).  The 
<br>
problem seems to be that my sysadmin dept has locked down most/all ports 
<br>
for simple socket connections.  They are asking me which specific ports 
<br>
(or range of ports) are required by mpi.  I'm assuming that mpirun used 
<br>
secure sockets to launch my app on all nodes but that my app is not using 
<br>
secure sockets via the MPI calls.  Does any of this make sense?  I'm using 
<br>
version 1.4.0 I think.
<br>
<p>- Jeff Cummings
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17724/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17725.php">Gustavo Correa: "[OMPI users] Problem building OpenMPI 1.4.4 with PGI 11.7 compilers"</a>
<li><strong>Previous message:</strong> <a href="17723.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<li><strong>In reply to:</strong> <a href="17723.php">Jeff Squyres: "Re: [OMPI users] EXTERNAL: Re: How to set up state-less node	/tmp for OpenMPI usage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17732.php">Jeff Squyres: "Re: [OMPI users] Socket ports"</a>
<li><strong>Reply:</strong> <a href="17732.php">Jeff Squyres: "Re: [OMPI users] Socket ports"</a>
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
