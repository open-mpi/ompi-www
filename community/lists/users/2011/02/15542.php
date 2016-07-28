<?
$subject_val = "Re: [OMPI users] Default hostfile not being used by mpirun";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb  9 17:52:17 2011" -->
<!-- isoreceived="20110209225217" -->
<!-- sent="Wed, 9 Feb 2011 14:52:18 -0800" -->
<!-- isosent="20110209225218" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Default hostfile not being used by mpirun" -->
<!-- id="D67881E9-84A4-45C7-8379-8EBDB1898281_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D4ED1C4.9020205_at_norbl.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-02-09 17:52:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<li><strong>Previous message:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="15517.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You may have mentioned this in a prior mail, but what version are you using?
<br>
<p>I tested and am unable to replicate your problem -- my openmpi-mca-params.conf file is always read.
<br>
<p>Double check the value of your mca_param_files MCA parameter:
<br>
<p>shell$ ompi_info --param mca param_files
<br>
<p>Mine comes out as:
<br>
<p>/users/jsquyres/.openmpi/mca-params.conf:/home/jsquyres/bogus/etc/openmpi-mca-params.conf
<br>
<p>If I add an MCA param to either one of those files, it is definitely read and found.
<br>
<p>Remember, too, that the location of this file is relative to whatever nodes your MPI processes are running on.  So if you have local installs of Open MPI (vs. a network filesystem install), you might need to edit the system config file on every node.
<br>
<p><p><p>On Feb 6, 2011, at 8:52 AM, Barnet Wagman wrote:
<br>
<p><span class="quotelev1">&gt; Setting the orte_default_hostfile param in 
</span><br>
<span class="quotelev1">&gt; $HOME/.openmpi/mca-params.conf
</span><br>
<span class="quotelev1">&gt; works (with $HOME set, of course), but for some reason setting it in the system conf file,
</span><br>
<span class="quotelev1">&gt; $prefix/etc/openmpi-mca-params.conf
</span><br>
<span class="quotelev1">&gt; does not.  Using 'ompi_info --param  ...', it appear that the the system conf file isn't being read at all.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  It would be nice to figure out why the system conf file isn't being read, but I can easily get by with the user conf file.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 2/5/11 7:06 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; The easiest solution is to take advantage of the fact that the default hostfile is an MCA parameter - so you can specify it in several ways other than on the cmd line. It can be in your environment, in the default MCA parameter file, or in an MCA param file in your home directory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; See
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=tuning#setting-mca-params">http://www.open-mpi.org/faq/?category=tuning#setting-mca-params</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; for a full description on how to do this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Feb 5, 2011, at 3:14 PM, ETHAN DENEAULT wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Barnet,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This isn't the most straightforward solution, but as a workaround, create a bash script and run that script through npRmpi? Something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; !#/bin/bash
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openmpi -np 15 -hostfile /path/to/hostfile $1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ethan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dr. Ethan Deneault
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Assistant Professor of Physics
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The University of Tampa
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 401 W Kennedy Blvd
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tampa, FL 33606
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (813) 732-3718
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Barnet Wagman &lt;bw_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There have been many postings about openmpi-default-hostfile on the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; list, but I haven't found one that answers my question, so I hope you
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't mind one more.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I use mpirun, openmpi-default-hostfile does not appear to get used.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've added three lines to the default host file:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    node0 slots=3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    node1 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    node2 slots=4
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'node0' is the local (master) host.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I explicitly list the hostfile in the mpirun command, everything
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works correctly.  E.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -np 15 -hostfile /full/path/to/openmpi-default-hostfile hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works correctly - hello_c gets run using all three nodes.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However, if I don't specify the hostfile, only the local node, node0, is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; used. E.g.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    mpirun -np 15 hello_c
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creates all 15 processes on node0.  I was under the impression that all
</span><br>
<span class="quotelev3">&gt;&gt;&gt; machines listed in openmpi-default-hostfile should get used by default. 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is that correct?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Unfortunately I can't use the hostfile command line option.  I'm going
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be using a mpi app (npRmpi) that doesn't let me pass params to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun. So I need all my nodes used by default.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Configuration details:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    openmpi 1.4.3, built from source.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    OS: Debian lenny (but the Debian openmpi package is NOT installed).
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    Installation dir: /home/omu/openmpi
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    The default host file has pathname
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    /home/omu/openmpi/etc/openmpi-default-hostfile
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I've set two envirnmental variables to support open mpi:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        PATH=/home/omu/openmpi/bin:...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        LD_LIBRARY_PATH=/home/omu/openmpi/lib:...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Are there any other environmental variables that need to be set?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd appreciate any suggestions about this.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Barnet Wagman
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15543.php">Ralph Castain: "Re: [OMPI users] Mpirun --app option not working"</a>
<li><strong>Previous message:</strong> <a href="15541.php">Dennis McRitchie: "Re: [OMPI users] Totalview not showing main program on startup with OpenMPI 1.3.x and 1.4.x"</a>
<li><strong>In reply to:</strong> <a href="15517.php">Barnet Wagman: "Re: [OMPI users] Default hostfile not being used by mpirun"</a>
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
