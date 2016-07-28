<?
$subject_val = "Re: [OMPI users] Default hostfile not being used by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Feb  5 20:06:48 2011" -->
<!-- isoreceived="20110206010648" -->
<!-- sent="Sat, 5 Feb 2011 18:06:37 -0700" -->
<!-- isosent="20110206010637" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default hostfile not being used by mpirun" -->
<!-- id="A39E6075-72D5-4BB0-A030-48A4FF0405FB_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1e9f001cbc582$11831fac$270b030a_at_spartans.ut" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-05 20:06:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15515.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15516.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15516.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15517.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The easiest solution is to take advantage of the fact that the default hostfile is an MCA parameter - so you can specify it in several ways other than on the cmd line. It can be in your environment, in the default MCA parameter file, or in an MCA param file in your home directory.
<br>
<p>See
<br>
<p><a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
<br>
<p>for a full description on how to do this.
<br>
<p><p>On Feb 5, 2011, at 3:14 PM, ETHAN DENEAULT wrote:
<br>
<p><span class="quotelev1">&gt; Barnet,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This isn't the most straightforward solution, but as a workaround, create a bash script and run that script through npRmpi? Something like:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; !#/bin/bash
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; openmpi -np 15 -hostfile /path/to/hostfile $1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; Ethan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Dr. Ethan Deneault
</span><br>
<span class="quotelev1">&gt; Assistant Professor of Physics
</span><br>
<span class="quotelev1">&gt; The University of Tampa
</span><br>
<span class="quotelev1">&gt; 401 W Kennedy Blvd
</span><br>
<span class="quotelev1">&gt; Tampa, FL 33606
</span><br>
<span class="quotelev1">&gt; (813) 732-3718
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barnet Wagman &lt;bw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There have been many postings about openmpi-default-hostfile on the
</span><br>
<span class="quotelev1">&gt; list, but I haven't found one that answers my question, so I hope you
</span><br>
<span class="quotelev1">&gt; won't mind one more.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I use mpirun, openmpi-default-hostfile does not appear to get used.
</span><br>
<span class="quotelev1">&gt; I've added three lines to the default host file:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    node0 slots=3
</span><br>
<span class="quotelev1">&gt;    node1 slots=4
</span><br>
<span class="quotelev1">&gt;    node2 slots=4
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 'node0' is the local (master) host.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If I explicitly list the hostfile in the mpirun command, everything
</span><br>
<span class="quotelev1">&gt; works correctly.  E.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun -np 15 -hostfile /full/path/to/openmpi-default-hostfile hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; works correctly - hello_c gets run using all three nodes.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, if I don't specify the hostfile, only the local node, node0, is
</span><br>
<span class="quotelev1">&gt; used. E.g.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    mpirun -np 15 hello_c
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; creates all 15 processes on node0.  I was under the impression that all
</span><br>
<span class="quotelev1">&gt; machines listed in openmpi-default-hostfile should get used by default. 
</span><br>
<span class="quotelev1">&gt; Is that correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately I can't use the hostfile command line option.  I'm going
</span><br>
<span class="quotelev1">&gt; to be using a mpi app (npRmpi) that doesn't let me pass params to
</span><br>
<span class="quotelev1">&gt; mpirun. So I need all my nodes used by default.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Configuration details:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    openmpi 1.4.3, built from source.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    OS: Debian lenny (but the Debian openmpi package is NOT installed).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Installation dir: /home/omu/openmpi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    The default host file has pathname
</span><br>
<span class="quotelev1">&gt;    /home/omu/openmpi/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    I've set two envirnmental variables to support open mpi:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;        PATH=/home/omu/openmpi/bin:...
</span><br>
<span class="quotelev1">&gt;        LD_LIBRARY_PATH=/home/omu/openmpi/lib:...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Are there any other environmental variables that need to be set?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd appreciate any suggestions about this.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Barnet Wagman
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15514/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15515.php">Michael Curtis: "Re: [OMPI users] Segmentation fault with SLURM and non-local nodes"</a>
<li><strong>Previous message:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15513.php">ETHAN DENEAULT: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15516.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15516.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15517.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
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
