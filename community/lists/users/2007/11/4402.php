<?
$subject_val = "[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  5 16:13:05 2007" -->
<!-- isoreceived="20071105211305" -->
<!-- sent="Mon, 5 Nov 2007 16:12:53 -0500" -->
<!-- isosent="20071105211253" -->
<!-- name="Benjamin, Ted G." -->
<!-- email="TGBENJAMIN_at_[hidden]" -->
<!-- subject="[OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0" -->
<!-- id="79BDD390E7C6B14CB2118191A775B3D6500455_at_NTEXCHANGE.bapm.com" -->
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
<strong>From:</strong> Benjamin, Ted G. (<em>TGBENJAMIN_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-05 16:12:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4403.php">Robert Latham: "Re: [OMPI users] MPI_Request and attributes"</a>
<li><strong>Previous message:</strong> <a href="4401.php">Karsten Bolding: "[OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>Reply:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I have a code that runs with both Portland and Intel compilers on
<br>
X86, AMD64 and Intel EM64T running various flavors of Linux on clusters.
<br>
I am trying to port it to a 2-CPU Itanium2 (ia64) running Red Hat
<br>
Enterprise Linux 4.0; it has gcc 3.4.6-8 and the Intel Fortran compiler
<br>
10.0.026 installed.  I have built Open MPI 1.2.4 using these compilers.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When I built the Open MPI, I didn't do anything special.  I enabled
<br>
debug, but that was really all.  Of course, you can see that in the
<br>
config file that is attached.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;This system is not part of a cluster.  The two onboard CPUs (an HP
<br>
zx6000) are the only processors on which the job runs.  The code must
<br>
run on MPI because the source calls it.  I compiled the target software
<br>
using the Fortran90 compiler (mpif90).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I've been running the code in the foreground so that I could keep
<br>
an eye on its behavior.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;When I try to run the compiled and linked code [mpirun -np #
<br>
{executable file}], it performs as shown below:
<br>
<p>&nbsp;
<br>
<p>(1) With the source compiled at optimization -O0 and -np 1, the job runs
<br>
very slowly (6 days on the wall clock) to the correct answer on the
<br>
benchmark;
<br>
<p>(2) With the source compiled at optimization -O0 and -np 2, the
<br>
benchmark job fails with a segmentation violation;
<br>
<p>(3) With the source compiled at all other optimization (-O1, -O2, -O3)
<br>
and processor combinations (-np1 and -np 2), it fails in what I would
<br>
call a &quot;quiescent&quot; manner.  What I mean by this is that it does not
<br>
produce any error messages.  When I submit the job, it produces a little
<br>
standard output and it quits after 2-3 seconds.
<br>
<p>&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In an attempt to find the problem, the technical support agent at
<br>
Intel has had me run some simple &quot;Hello&quot; problems.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The first one is an MPI hello code that is the attached
<br>
hello_mpi.f.  This ran as expected, and it echoed one &quot;Hello&quot; for each
<br>
of the two processors.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The second one is a non-MPI hello that is the attached hello.f90.
<br>
Since it is a non-MPI source, I was told that running it on a
<br>
workstation with a properly configured MPI should only echo one &quot;Hello&quot;;
<br>
the Intel agent told me that two such echoes indicate a problem with
<br>
Open MPI.  It echoed twice, so now I have come to you for help.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The other three attached files are the output requested on the
<br>
&quot;Getting Help&quot; page - (1) the output of /sbin/ifconfig, (2) the output
<br>
of ompt_info -all and (3) the config.log file.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;The installation of the Open MPI itself was as easy as could be.  I
<br>
am really ignorant of how it works beyond what I've read from the FAQs
<br>
and learned in a little digging, so I hope it's a simple solution.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I don't recognize the network types, so I assume TCP-based is what
<br>
I have.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I look forward to your help.
<br>
<p>&nbsp;
<br>
<p><p><p>
<p>




<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4402/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4402/hello.f90">hello.f90</a>
</ul>
<!-- attachment="hello.f90" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4402/ifconfig_output.txt">ifconfig_output.txt</a>
</ul>
<!-- attachment="ifconfig_output.txt" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4402/ompi_info_Output.txt.gz">ompi_info_Output.txt.gz</a>
</ul>
<!-- attachment="ompi_info_Output.txt.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4402/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4402/hello_mpi.f">hello_mpi.f</a>
</ul>
<!-- attachment="hello_mpi.f" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4403.php">Robert Latham: "Re: [OMPI users] MPI_Request and attributes"</a>
<li><strong>Previous message:</strong> <a href="4401.php">Karsten Bolding: "[OMPI users] machinefile and rank"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
<li><strong>Reply:</strong> <a href="4435.php">Jeff Squyres: "Re: [OMPI users] Double Standard Output for Non-MPI on Itanium Running Red Hat Enterprise Linux 4.0"</a>
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
