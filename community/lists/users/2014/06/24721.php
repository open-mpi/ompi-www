<?
$subject_val = "[OMPI users] Problem moving from 1.4 to 1.6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 27 12:53:35 2014" -->
<!-- isoreceived="20140627165335" -->
<!-- sent="Fri, 27 Jun 2014 12:53:33 -0400" -->
<!-- isosent="20140627165333" -->
<!-- name="Jeffrey A Cummings" -->
<!-- email="Jeffrey.A.Cummings_at_[hidden]" -->
<!-- subject="[OMPI users] Problem moving from 1.4 to 1.6" -->
<!-- id="OFD17A78AF.85C30A44-ON85257D04.005C1A58-85257D04.005CCB25_at_notes.aero.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="20140530193156.GE44233_at_pn1246003.lanl.gov" -->
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
<strong>Subject:</strong> [OMPI users] Problem moving from 1.4 to 1.6<br>
<strong>From:</strong> Jeffrey A Cummings (<em>Jeffrey.A.Cummings_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-27 12:53:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24727.php">Ralph Castain: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have recently upgraded our cluster to a version of Linux which comes 
<br>
with openMPI version 1.6.2.
<br>
<p>An application which ran previously (using some version of 1.4) now errors 
<br>
out with the following messages:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librdmacm: Fatal: no RDMA devices found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librdmacm: Fatal: no RDMA devices found
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;librdmacm: Fatal: no RDMA devices found
<br>
&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WARNING: Failed to open &quot;OpenIB-cma&quot; [DAT_INTERNAL_ERROR:].
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This may be a real error or it may be an invalid entry in the 
<br>
uDAPL
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Registry which is contained in the dat.conf file. Contact your 
<br>
local
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;System Administrator to confirm the availability of the interfaces 
<br>
in
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the dat.conf file.
<br>
&nbsp;
<br>
--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tupile:25363] 2 more processes have sent help message 
<br>
help-mpi-btl-udapl.txt / dat_ia_open fail
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[tupile:25363] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 
<br>
to see all help / error messages
<br>
<p>The mpirun command line contains the argument '--mca btl ^openib', which I 
<br>
thought told mpi to not look for the ib interface.
<br>
<p>Can anyone suggest what the problem might be?  Did the relevant syntax 
<br>
change between versions 1.4 and 1.6?
<br>
<p><p>Jeffrey A. Cummings
<br>
Engineering Specialist
<br>
Performance Modeling and Analysis Department
<br>
Systems Analysis and Simulation Subdivision
<br>
Systems Engineering Division
<br>
Engineering and Technology Group
<br>
The Aerospace Corporation
<br>
571-307-4220
<br>
jeffrey.a.cummings_at_[hidden]
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24721/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Previous message:</strong> <a href="24720.php">Dave Goodell (dgoodell): "Re: [OMPI users] importing to MPI data already in memory from another	process"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/05/24520.php">Nathan Hjelm: "Re: [OMPI users] Valgrind reports lots of memory leakage"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24722.php">Gus Correa: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
<li><strong>Reply:</strong> <a href="24727.php">Ralph Castain: "Re: [OMPI users] Problem moving from 1.4 to 1.6"</a>
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
