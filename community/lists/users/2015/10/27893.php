<?
$subject_val = "[OMPI users] MPI on Docker";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 18 02:53:24 2015" -->
<!-- isoreceived="20151018065324" -->
<!-- sent="Sun, 18 Oct 2015 17:53:00 +1100" -->
<!-- isosent="20151018065300" -->
<!-- name="Peter Davis" -->
<!-- email="peter.davis8_at_[hidden]" -->
<!-- subject="[OMPI users] MPI on Docker" -->
<!-- id="CAHy=Z=xZ5yCZir2ihW-USMKirP-f3o3DGxMVw1emmYR8qB1=0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI on Docker<br>
<strong>From:</strong> Peter Davis (<em>peter.davis8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-18 02:53:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<li><strong>Previous message:</strong> <a href="27892.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<li><strong>Reply:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I am currently trying to get MPI working using docker containers across
<br>
networked virtual machines. The problem I have is that I don't seem to get
<br>
any output from a dockerized MPI program (a tutorial matrix multiply
<br>
program), but inspecting the nodes (docker containers) each process sits at
<br>
98% cpu usage whilst mpirun does not seem to get any output, and nothing
<br>
complains or finishes. Running the same application on my laptop (with a
<br>
local mpirun call) the running time is less than a second.
<br>
<p>Running a &#226;&#128;&#156;hello world&#226;&#128;&#157; program which just printed its &#226;&#128;&#156;rank&quot; seems to work
<br>
fine with this docker setup, with mpirun getting the stdout printf calls.
<br>
However, that example never had any inter-node communications.
<br>
<p>Much of the system setup we have is based on the idea that environment
<br>
variables are what passes information from mpirun to the node processes
<br>
(under ssh), but I have not had any exposure to MPI prior to this, so
<br>
perhaps this is wrong.
<br>
<p>A (relatively) quick description of the system;
<br>
<p>&nbsp;- We have 3 virtual machines that are interconnected on an infiniband
<br>
network (however, in the hope of it being simpler, we currently use the
<br>
tcp/ip layer not infiniband)
<br>
<p>&nbsp;- There is no resource manager (e.g. Slurm) running, everything is over
<br>
ssh.
<br>
<p>&nbsp;- Each vm is running Centos 7, has openmpi 1.6.4 installed, and loads the
<br>
mpi environment module up via .bashrc.
<br>
<p>&nbsp;- We have docker installed on each vm.
<br>
<p>&nbsp;- We have a container that is based on ubuntu 14:04, has openmpi version
<br>
1.6.5 installed, and runs an mpi-based matrix_multiply program on startup.
<br>
Ompi_info output is:
<br>
<p><span class="quotelev1">   &gt; ompi_info -v ompi full --parsable
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;package:Open MPI buildd_at_allspice Distribution
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi:version:full:1.6.5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi:version:svn:r28673
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ompi:version:release_date:Jun 26, 2013
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte:version:full:1.6.5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte:version:svn:r28673
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;orte:version:release_date:Jun 26, 2013
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal:version:full:1.6.5
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal:version:svn:r28673
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;opal:version:release_date:Jun 26, 2013
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpi-api:version:full:2.1
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ident:1.6.5
<br>
<p><p><p>&nbsp;- To start the mpi program(s), on one of the vms we call mpirun with:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;mpirun --mca btl_tcp_port_min_v4 7950 --mca btl_tcp_port_range_v4 50
<br>
--mca btl tcp,self --mca mpi_base_verbose 30 -H
<br>
10.3.2.41,10.3.2.42,10.3.2.43 /root/docker-machine-script.sh
<br>
<p>&nbsp;- This then runs our shell script on the vm, which collects environment
<br>
variables, filters out the vm mpi variables, and starts the docker
<br>
container with those env variables. Our shell script is:
<br>
<p>#!/bin/bash
<br>
<p>env | grep MPI | grep -v
<br>
'MPI_INCLUDE\|MPI_PYTHON\|MPI_LIB\|MPI_BIN\|MPI_COMPILER\|MPI_SYSCONFIG\|MPI_SUFFIX\|MPI_MAN\|MPI_HOME\|MPI_FORTRAN_MOD_DIR'
<br>
<span class="quotelev1">&gt; /root/env.txt
</span><br>
<p>docker run --privileged --env-file /root/env.txt -p 7950-8000:7950-8000
<br>
mrmagooey/mpi-mm
<br>
<p><p>&nbsp;- Finally, the container runs the mpi application (the matrix multiply)
<br>
using the environment variables.
<br>
<p>&nbsp;- Each container is capable of ssh&#226;&#128;&#153;ing into the other containers without
<br>
password.
<br>
<p>It is a rather complicated setup, but the real application that we will
<br>
eventually run is a pain to compile from scratch and so docker is a very
<br>
appealing solution.
<br>
<p>Attached is the &quot;ompi_info &#226;&#128;&#148;all&#226;&#128;&#157; and &#226;&#128;&#156;ifconfig&#226;&#128;&#157; called on one of the host
<br>
vm&#226;&#128;&#153;s (as per the forum support instructions). Also attached is the result
<br>
of /usr/bin/printenv on one of the containers.
<br>
<p>Thank you,
<br>
<p>Peter
<br>
<p>


<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27893/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27893/ifconfig-host.txt">ifconfig-host.txt</a>
</ul>
<!-- attachment="ifconfig-host.txt" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27893/ompi_info.tar.gz">ompi_info.tar.gz</a>
</ul>
<!-- attachment="ompi_info.tar.gz" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27893/docker-environment-variables.txt">docker-environment-variables.txt</a>
</ul>
<!-- attachment="docker-environment-variables.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<li><strong>Previous message:</strong> <a href="27892.php">Ray Sheppard: "Re: [OMPI users] Odd pipe error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
<li><strong>Reply:</strong> <a href="27894.php">Gilles Gouaillardet: "Re: [OMPI users] MPI on Docker"</a>
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
