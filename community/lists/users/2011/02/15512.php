<?
$subject_val = "[OMPI users] Default hostfile not being used by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  5 16:54:11 2011" -->
<!-- isoreceived="20110205215411" -->
<!-- sent="Sat, 05 Feb 2011 15:54:01 -0600" -->
<!-- isosent="20110205215401" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="[OMPI users] Default hostfile not being used by mpirun" -->
<!-- id="4D4DC6F9.8010208_at_norbl.com" -->
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
<strong>Subject:</strong> [OMPI users] Default hostfile not being used by mpirun<br>
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-05 16:54:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Previous message:</strong> <a href="15511.php">Massimo Cafaro: "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There have been many postings about openmpi-default-hostfile on the
<br>
list, but I haven't found one that answers my question, so I hope you
<br>
won't mind one more.
<br>
<p>When I use mpirun, openmpi-default-hostfile does not appear to get used.
<br>
I've added three lines to the default host file:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;node0 slots=3
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node1 slots=4
<br>
&nbsp;&nbsp;&nbsp;&nbsp;node2 slots=4
<br>
<p>'node0' is the local (master) host.
<br>
<p>If I explicitly list the hostfile in the mpirun command, everything
<br>
works correctly.  E.g.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 15 -hostfile /full/path/to/openmpi-default-hostfile hello_c
<br>
<p>works correctly - hello_c gets run using all three nodes.
<br>
<p>However, if I don't specify the hostfile, only the local node, node0, is
<br>
used. E.g.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;mpirun -np 15 hello_c
<br>
<p>creates all 15 processes on node0.  I was under the impression that all
<br>
machines listed in openmpi-default-hostfile should get used by default. 
<br>
Is that correct?
<br>
<p>Unfortunately I can't use the hostfile command line option.  I'm going
<br>
to be using a mpi app (npRmpi) that doesn't let me pass params to
<br>
mpirun. So I need all my nodes used by default.
<br>
<p>Configuration details:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;openmpi 1.4.3, built from source.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;OS: Debian lenny (but the Debian openmpi package is NOT installed).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Installation dir: /home/omu/openmpi
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;The default host file has pathname
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/home/omu/openmpi/etc/openmpi-default-hostfile
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;I've set two envirnmental variables to support open mpi:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PATH=/home/omu/openmpi/bin:...
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LD_LIBRARY_PATH=/home/omu/openmpi/lib:...
<br>
<p><p>Are there any other environmental variables that need to be set?
<br>
<p>I'd appreciate any suggestions about this.
<br>
<p>thanks,
<br>
<p>Barnet Wagman
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15512/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Previous message:</strong> <a href="15511.php">Massimo Cafaro: "[OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Maybe reply:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
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
