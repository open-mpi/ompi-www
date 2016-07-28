<?
$subject_val = "Re: [OMPI users] MPI on Docker";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Oct 18 03:48:07 2015" -->
<!-- isoreceived="20151018074807" -->
<!-- sent="Sun, 18 Oct 2015 16:48:03 +0900" -->
<!-- isosent="20151018074803" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI on Docker" -->
<!-- id="CAAkFZ5s6VzvGO5kpmmqUYCPGkhNLgKveKEObq0Rxo5m-Ev_54A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAHy=Z=xZ5yCZir2ihW-USMKirP-f3o3DGxMVw1emmYR8qB1=0w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI on Docker<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-18 03:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27895.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27893.php">Peter Davis: "[OMPI users] MPI on Docker"</a>
<li><strong>In reply to:</strong> <a href="27893.php">Peter Davis: "[OMPI users] MPI on Docker"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Peter,
<br>
<p>mpirun does fork&amp;exec the orted daemon on the remote nodes,
<br>
an then orted firm&amp;exec the MPI app (your shell script here)
<br>
the MPI app connects back to orted (1.6.5 might use tcp instead of unix
<br>
sockets,
<br>
but I do not recall if 127.0.0.1 is hardcoded, and if it is, what the
<br>
impact of having the MPI app in a container is)
<br>
the environment used by the MPI app starts with OMPI_, so you might want to
<br>
update your she'll script first.
<br>
<p>I wrote a high level overview of these mechanisms a few days ago at
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/10/18189.php">http://www.open-mpi.org/community/lists/devel/2015/10/18189.php</a>, feel free
<br>
to read it.
<br>
<p>at first glance, the way you are using containers look overly complicated.
<br>
<p>are you sure you want one MPI task per container ?
<br>
I mean, you could have one container per VM and several MPI tasks
<br>
per container.
<br>
<p>then, a simpler alternative could be to wrap mpirun, starts the containers
<br>
and then mpirun &quot;into&quot; these containers.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Sunday, October 18, 2015, Peter Davis &lt;peter.davis8_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am currently trying to get MPI working using docker containers across
</span><br>
<span class="quotelev1">&gt; networked virtual machines. The problem I have is that I don't seem to get
</span><br>
<span class="quotelev1">&gt; any output from a dockerized MPI program (a tutorial matrix multiply
</span><br>
<span class="quotelev1">&gt; program), but inspecting the nodes (docker containers) each process sits at
</span><br>
<span class="quotelev1">&gt; 98% cpu usage whilst mpirun does not seem to get any output, and nothing
</span><br>
<span class="quotelev1">&gt; complains or finishes. Running the same application on my laptop (with a
</span><br>
<span class="quotelev1">&gt; local mpirun call) the running time is less than a second.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Running a &#226;&#128;&#156;hello world&#226;&#128;&#157; program which just printed its &#226;&#128;&#156;rank&quot; seems to
</span><br>
<span class="quotelev1">&gt; work fine with this docker setup, with mpirun getting the stdout printf
</span><br>
<span class="quotelev1">&gt; calls. However, that example never had any inter-node communications.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Much of the system setup we have is based on the idea that environment
</span><br>
<span class="quotelev1">&gt; variables are what passes information from mpirun to the node processes
</span><br>
<span class="quotelev1">&gt; (under ssh), but I have not had any exposure to MPI prior to this, so
</span><br>
<span class="quotelev1">&gt; perhaps this is wrong.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A (relatively) quick description of the system;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - We have 3 virtual machines that are interconnected on an infiniband
</span><br>
<span class="quotelev1">&gt; network (however, in the hope of it being simpler, we currently use the
</span><br>
<span class="quotelev1">&gt; tcp/ip layer not infiniband)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - There is no resource manager (e.g. Slurm) running, everything is over
</span><br>
<span class="quotelev1">&gt; ssh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Each vm is running Centos 7, has openmpi 1.6.4 installed, and loads the
</span><br>
<span class="quotelev1">&gt; mpi environment module up via .bashrc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - We have docker installed on each vm.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - We have a container that is based on ubuntu 14:04, has openmpi version
</span><br>
<span class="quotelev1">&gt; 1.6.5 installed, and runs an mpi-based matrix_multiply program on startup.
</span><br>
<span class="quotelev1">&gt; Ompi_info output is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;    &gt; ompi_info -v ompi full --parsable
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      package:Open MPI buildd_at_allspice Distribution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ompi:version:full:1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ompi:version:svn:r28673
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ompi:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      orte:version:full:1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      orte:version:svn:r28673
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      orte:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal:version:full:1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal:version:svn:r28673
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      opal:version:release_date:Jun 26, 2013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpi-api:version:full:2.1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      ident:1.6.5
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - To start the mpi program(s), on one of the vms we call mpirun with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun --mca btl_tcp_port_min_v4 7950 --mca btl_tcp_port_range_v4 50
</span><br>
<span class="quotelev1">&gt; --mca btl tcp,self --mca mpi_base_verbose 30 -H
</span><br>
<span class="quotelev1">&gt; 10.3.2.41,10.3.2.42,10.3.2.43 /root/docker-machine-script.sh
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - This then runs our shell script on the vm, which collects environment
</span><br>
<span class="quotelev1">&gt; variables, filters out the vm mpi variables, and starts the docker
</span><br>
<span class="quotelev1">&gt; container with those env variables. Our shell script is:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; env | grep MPI | grep -v
</span><br>
<span class="quotelev1">&gt; 'MPI_INCLUDE\|MPI_PYTHON\|MPI_LIB\|MPI_BIN\|MPI_COMPILER\|MPI_SYSCONFIG\|MPI_SUFFIX\|MPI_MAN\|MPI_HOME\|MPI_FORTRAN_MOD_DIR'
</span><br>
<span class="quotelev2">&gt; &gt; /root/env.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; docker run --privileged --env-file /root/env.txt -p 7950-8000:7950-8000
</span><br>
<span class="quotelev1">&gt; mrmagooey/mpi-mm
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Finally, the container runs the mpi application (the matrix multiply)
</span><br>
<span class="quotelev1">&gt; using the environment variables.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  - Each container is capable of ssh&#226;&#128;&#153;ing into the other containers without
</span><br>
<span class="quotelev1">&gt; password.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a rather complicated setup, but the real application that we will
</span><br>
<span class="quotelev1">&gt; eventually run is a pain to compile from scratch and so docker is a very
</span><br>
<span class="quotelev1">&gt; appealing solution.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Attached is the &quot;ompi_info &#226;&#128;&#148;all&#226;&#128;&#157; and &#226;&#128;&#156;ifconfig&#226;&#128;&#157; called on one of the host
</span><br>
<span class="quotelev1">&gt; vm&#226;&#128;&#153;s (as per the forum support instructions). Also attached is the result
</span><br>
<span class="quotelev1">&gt; of /usr/bin/printenv on one of the containers.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Peter
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27894/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27895.php">John Marshall: "Re: [OMPI users] openib issue with 1.6.5 but not later releases"</a>
<li><strong>Previous message:</strong> <a href="27893.php">Peter Davis: "[OMPI users] MPI on Docker"</a>
<li><strong>In reply to:</strong> <a href="27893.php">Peter Davis: "[OMPI users] MPI on Docker"</a>
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
