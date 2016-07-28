<?
$subject_val = "Re: [OMPI users] Default hostfile not being used by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  5 17:14:39 2011" -->
<!-- isoreceived="20110205221439" -->
<!-- sent="Sat, 05 Feb 2011 17:14:44 -0500" -->
<!-- isosent="20110205221444" -->
<!-- name="ETHAN DENEAULT" -->
<!-- email="EDENEAULT_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default hostfile not being used by mpirun" -->
<!-- id="1e9f001cbc582$11831fac$270b030a_at_spartans.ut" -->
<!-- charset="utf-8" -->
<!-- inreplyto="[OMPI users] Default hostfile not being used by mpirun" -->
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
<strong>Subject:</strong> Re: [OMPI users] Default hostfile not being used by mpirun<br>
<strong>From:</strong> ETHAN DENEAULT (<em>EDENEAULT_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-05 17:14:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Previous message:</strong> <a href="15512.php">Barnet Wagman: "[OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="15512.php">Barnet Wagman: "[OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Barnet,
<br>
<p>This isn't the most straightforward solution, but as a workaround, create a bash script and run that script through npRmpi? Something like:
<br>
<p>!#/bin/bash
<br>
<p>openmpi -np 15 -hostfile /path/to/hostfile $1
<br>
<p>Cheers,
<br>
Ethan
<br>
<p><pre>
--
Dr. Ethan Deneault
Assistant Professor of Physics
The University of Tampa
401 W Kennedy Blvd
Tampa, FL 33606
(813) 732-3718
Barnet Wagman &lt;bw_at_[hidden]&gt; wrote:
There have been many postings about openmpi-default-hostfile on the
list, but I haven't found one that answers my question, so I hope you
won't mind one more.
When I use mpirun, openmpi-default-hostfile does not appear to get used.
I've added three lines to the default host file:
    node0 slots=3
    node1 slots=4
    node2 slots=4
'node0' is the local (master) host.
If I explicitly list the hostfile in the mpirun command, everything
works correctly.  E.g.
    mpirun -np 15 -hostfile /full/path/to/openmpi-default-hostfile hello_c
works correctly - hello_c gets run using all three nodes.
However, if I don't specify the hostfile, only the local node, node0, is
used. E.g.
    mpirun -np 15 hello_c
creates all 15 processes on node0.  I was under the impression that all
machines listed in openmpi-default-hostfile should get used by default. 
Is that correct?
Unfortunately I can't use the hostfile command line option.  I'm going
to be using a mpi app (npRmpi) that doesn't let me pass params to
mpirun. So I need all my nodes used by default.
Configuration details:
    openmpi 1.4.3, built from source.
    OS: Debian lenny (but the Debian openmpi package is NOT installed).
    Installation dir: /home/omu/openmpi
    The default host file has pathname
    /home/omu/openmpi/etc/openmpi-default-hostfile
    I've set two envirnmental variables to support open mpi:
        PATH=/home/omu/openmpi/bin:...
        LD_LIBRARY_PATH=/home/omu/openmpi/lib:...
Are there any other environmental variables that need to be set?
I'd appreciate any suggestions about this.
thanks,
Barnet Wagman
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Previous message:</strong> <a href="15512.php">Barnet Wagman: "[OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Maybe in reply to:</strong> <a href="15512.php">Barnet Wagman: "[OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
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
