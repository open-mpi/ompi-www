<?
$subject_val = "[OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 12 21:11:40 2015" -->
<!-- isoreceived="20150313011140" -->
<!-- sent="Thu, 12 Mar 2015 18:11:36 -0700" -->
<!-- isosent="20150313011136" -->
<!-- name="Chris Paciorek" -->
<!-- email="paciorek_at_[hidden]" -->
<!-- subject="[OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4" -->
<!-- id="CAG=M9LqqEbp8rUv5fV-c4gFe8nvPFkLkiEvi9hwaCqsmPwHLtw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4<br>
<strong>From:</strong> Chris Paciorek (<em>paciorek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-12 21:11:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Reply:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Reply:</strong> <a href="26468.php">Chris Paciorek: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm having an issue with MPI_Comm_spawn not starting workers on the
<br>
nodes provided via -machinefile or -host. This is occurring on Ubuntu
<br>
14.04/14.10 with openMPI 1.6.5. However, I do not have the problem on
<br>
Ubuntu 12.04 with openMPI 1.4.3 nor is there a problem when I install
<br>
openMPI 1.8.4 from source on Ubuntu 14.04.
<br>
<p>Any suggestions as to what is going on? We can install from source to
<br>
deal with this, but Ubuntu 14.04/14.10/15.04 (and I think the current
<br>
Debian) are all relying on 1.6.5 so this issue might affect many
<br>
others.
<br>
<p>As far as I can tell there aren't any threads on the mailing lists or
<br>
info in the NEWS file that relate to this.
<br>
<p>Here's a reproducible test case. In the attached zip file, parent.cpp
<br>
generates an executable that simply tries to spawn workers using
<br>
MPI_Comm_spawn and the child executable simply reports what nodes the
<br>
workers are operating on.
<br>
<p>I compile and run the program as:
<br>
mpicxx -o child child.cpp
<br>
mpicxx -o parent parent.cpp
<br>
mpirun -host smeagol,arwen,smeagol,arwen -np 1 parent
<br>
<p>And the result is as follows with all children on the original node:
<br>
Starting: I'm process 0 and we are 1
<br>
Finishing: I'm process 0 and we are 1
<br>
I'm child process 0 on smeagol and we are 3
<br>
I'm child process 1 on smeagol and we are 3
<br>
My parent communicator size is: 3
<br>
I'm child process 2 on smeagol and we are 3
<br>
My parent communicator size is: 3
<br>
My parent communicator size is: 3
<br>
<p>This is all on pretty standard Ubuntu 14.04, with openMPI installed
<br>
from Ubuntu (libopenmpi-dev, libopenmpi1.6, openmpi-bin)
<br>
<p>I've included in the zip file:
<br>
* parent.cpp and child.cpp
<br>
* ompi_info --all on the master
<br>
* ompi_info -v ompi full --parsable on all nodes
<br>
* PATH and LD_LIBRARY_PATH info
<br>
* ifconfig information
<br>
<p>-Chris
<br>
<p>----------------------------------------------------------------------------------------------
<br>
Chris Paciorek
<br>
<p>Statistical Computing Consultant
<br>
Statistical Computing Facility, Econometrics Laboratory, Berkeley
<br>
Research Computing
<br>
<p>Office: 495 Evans Hall                      Email: paciorek_at_[hidden]
<br>
Mailing Address:                            Voice: 510-842-9056
<br>
Department of Statistics                    Fax:   510-642-7892
<br>
367 Evans Hall                              Skype: cjpaciorek
<br>
University of California, Berkeley          WWW:
<br>
www.stat.berkeley.edu/~paciorek
<br>
Berkeley, CA 94720 USA                      Permanent forward:
<br>
paciorek_at_[hidden]
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Previous message:</strong> <a href="26462.php">Fabricio Cannini: "Re: [OMPI users] Cannot compile 1.8.x with intel 12.1 and 'io-romio' enabled"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Reply:</strong> <a href="26464.php">Ralph Castain: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
<li><strong>Reply:</strong> <a href="26468.php">Chris Paciorek: "Re: [OMPI users] problem with MPI_Comm_spawn in 1.6.5 but not 1.4.3 or 1.8.4"</a>
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
