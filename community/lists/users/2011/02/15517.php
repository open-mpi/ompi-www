<?
$subject_val = "Re: [OMPI users] Default hostfile not being used by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  6 11:52:26 2011" -->
<!-- isoreceived="20110206165226" -->
<!-- sent="Sun, 06 Feb 2011 10:52:20 -0600" -->
<!-- isosent="20110206165220" -->
<!-- name="Barnet Wagman" -->
<!-- email="bw_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default hostfile not being used by mpirun" -->
<!-- id="4D4ED1C4.9020205_at_norbl.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="A39E6075-72D5-4BB0-A030-48A4FF0405FB_at_open-mpi.org" -->
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
<strong>From:</strong> Barnet Wagman (<em>bw_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-06 11:52:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15518.php">jody: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Previous message:</strong> <a href="15516.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15542.php">Jeff Squyres: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15542.php">Jeff Squyres: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Setting the orte_default_hostfile param in
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;*$HOME/.openmpi/mca-params.conf*
<br>
<p>works (with $HOME set, of course), but for some reason setting it in the
<br>
system conf file,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;*$prefix/etc/openmpi-mca-params.conf*
<br>
<p>does not.  Using 'ompi_info --param  ...', it appear that the the system
<br>
conf file isn't being read at all.
<br>
<p>&nbsp;It would be nice to figure out why the system conf file isn't being
<br>
read, but I can easily get by with the user conf file.
<br>
<p>Thanks
<br>
<p>On 2/5/11 7:06 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; The easiest solution is to take advantage of the fact that the default
</span><br>
<span class="quotelev1">&gt; hostfile is an MCA parameter - so you can specify it in several ways
</span><br>
<span class="quotelev1">&gt; other than on the cmd line. It can be in your environment, in the
</span><br>
<span class="quotelev1">&gt; default MCA parameter file, or in an MCA param file in your home
</span><br>
<span class="quotelev1">&gt; directory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; for a full description on how to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 5, 2011, at 3:14 PM, ETHAN DENEAULT wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Barnet,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This isn't the most straightforward solution, but as a workaround,
</span><br>
<span class="quotelev2">&gt;&gt; create a bash script and run that script through npRmpi? Something like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; !#/bin/bash
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; openmpi -np 15 -hostfile /path/to/hostfile $1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; Ethan
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Dr. Ethan Deneault
</span><br>
<span class="quotelev2">&gt;&gt; Assistant Professor of Physics
</span><br>
<span class="quotelev2">&gt;&gt; The University of Tampa
</span><br>
<span class="quotelev2">&gt;&gt; 401 W Kennedy Blvd
</span><br>
<span class="quotelev2">&gt;&gt; Tampa, FL 33606
</span><br>
<span class="quotelev2">&gt;&gt; (813) 732-3718
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Barnet Wagman &lt;bw_at_[hidden] &lt;mailto:bw_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There have been many postings about openmpi-default-hostfile on the
</span><br>
<span class="quotelev2">&gt;&gt; list, but I haven't found one that answers my question, so I hope you
</span><br>
<span class="quotelev2">&gt;&gt; won't mind one more.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use mpirun, openmpi-default-hostfile does not appear to get used.
</span><br>
<span class="quotelev2">&gt;&gt; I've added three lines to the default host file:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    node0 slots=3
</span><br>
<span class="quotelev2">&gt;&gt;    node1 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;    node2 slots=4
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 'node0' is the local (master) host.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I explicitly list the hostfile in the mpirun command, everything
</span><br>
<span class="quotelev2">&gt;&gt; works correctly.  E.g.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -np 15 -hostfile /full/path/to/openmpi-default-hostfile hello_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; works correctly - hello_c gets run using all three nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However, if I don't specify the hostfile, only the local node, node0, is
</span><br>
<span class="quotelev2">&gt;&gt; used. E.g.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun -np 15 hello_c
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; creates all 15 processes on node0.  I was under the impression that all
</span><br>
<span class="quotelev2">&gt;&gt; machines listed in openmpi-default-hostfile should get used by default.
</span><br>
<span class="quotelev2">&gt;&gt; Is that correct?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Unfortunately I can't use the hostfile command line option.  I'm going
</span><br>
<span class="quotelev2">&gt;&gt; to be using a mpi app (npRmpi) that doesn't let me pass params to
</span><br>
<span class="quotelev2">&gt;&gt; mpirun. So I need all my nodes used by default.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Configuration details:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    openmpi 1.4.3, built from source.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    OS: Debian lenny (but the Debian openmpi package is NOT installed).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    Installation dir: /home/omu/openmpi
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    The default host file has pathname
</span><br>
<span class="quotelev2">&gt;&gt;    /home/omu/openmpi/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    I've set two envirnmental variables to support open mpi:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;        PATH=/home/omu/openmpi/bin:...
</span><br>
<span class="quotelev2">&gt;&gt;        LD_LIBRARY_PATH=/home/omu/openmpi/lib:...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Are there any other environmental variables that need to be set?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd appreciate any suggestions about this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Barnet Wagman
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15517/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15518.php">jody: "Re: [OMPI users] calling a customized MPI_Allreduce with MPI_PACKED datatype"</a>
<li><strong>Previous message:</strong> <a href="15516.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>In reply to:</strong> <a href="15514.php">Ralph Castain: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15542.php">Jeff Squyres: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<li><strong>Reply:</strong> <a href="15542.php">Jeff Squyres: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
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
