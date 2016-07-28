<?
$subject_val = "[OMPI users] openmpi-1.4.1 Debian-Live Cd";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 10 01:38:08 2010" -->
<!-- isoreceived="20100310063808" -->
<!-- sent="Wed, 10 Mar 2010 07:37:32 +0100" -->
<!-- isosent="20100310063732" -->
<!-- name="piening" -->
<!-- email="piening_at_[hidden]" -->
<!-- subject="[OMPI users] openmpi-1.4.1 Debian-Live Cd" -->
<!-- id="4B973E2C.9090508_at_geowiss.uni-hamburg.de" -->
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
<strong>Subject:</strong> [OMPI users] openmpi-1.4.1 Debian-Live Cd<br>
<strong>From:</strong> piening (<em>piening_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-03-10 01:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12294.php">马少杰: "[OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>Previous message:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12357.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
<li><strong>Reply:</strong> <a href="12357.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I set up a Linux Cluster with differnt Distributions ( 1x Debian Lenny,
<br>
4x OpenSuse11.2 ) and openmpi-1.4.1 , all my test applications ran perfekt.
<br>
<p>Now I decided to create a Debian-Live System (Lenny) with openmpi-1.4.1,
<br>
to include some more Pc's in our Student-Pool, and always get the
<br>
folowing errors:
<br>
<p><p>#:  mpirun --hostfile my_hostfile -np 4 hello_c
<br>
<p>Hello, world, I am    2 of    4         Dell-19  (256)
<br>
Hello, world, I am    0 of    4         Dell-19  (256)
<br>
Hello, world, I am    3 of    4         Dlive  (256)
<br>
Hello, world, I am    1 of    4         Dlive  (256)
<br>
[Dell-19:9199] *** An error occurred in MPI_Barrier
<br>
[Dell-19:9199] *** on communicator MPI_COMM_WORLD
<br>
[Dell-19:9199] *** MPI_ERR_IN_STATUS: error code in status
<br>
[Dell-19:9199] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 2 with PID 9199 on
<br>
node Dell-19 exiting without calling &quot;finalize&quot;. This may
<br>
have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
[Dell-19:09196] 1 more process has sent help message help-mpi-errors.txt
<br>
/ mpi_errors_are_fatal
<br>
[Dell-19:09196] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see
<br>
all help / error messages
<br>
<p>I've got no more idea how to fix this.
<br>
<p>Thanks in advance
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;horst.
<br>
<p><p><pre>
-- 
 Horst Piening
 IT-Administrator Fb15
 Universitaet Hamburg
 Bundesstr. 55
 20146 Hamburg
 Email: piening_at_[hidden]
 Tel.: (040) 42838-7015
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12294.php">马少杰: "[OMPI users] can torque support  openmpi checkpoint?"</a>
<li><strong>Previous message:</strong> <a href="12292.php">Terry Frankcombe: "Re: [OMPI users] newbe question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12357.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
<li><strong>Reply:</strong> <a href="12357.php">Jeff Squyres: "Re: [OMPI users] openmpi-1.4.1 Debian-Live Cd"</a>
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
