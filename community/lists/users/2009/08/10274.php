<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 17:39:53 2009" -->
<!-- isoreceived="20090810213953" -->
<!-- sent="Mon, 10 Aug 2009 15:39:40 -0600" -->
<!-- isosent="20090810213940" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="B5417204-09FE-4BC7-9004-2632E049FB83_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="386EFAB9-E180-4D21-BFDF-BA478894240F_at_uvic.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] torque pbs behaviour...<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 17:39:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10276.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10276.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2009, at 3:25 PM, Jody Klymak wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at  13:04 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Umm...are you saying that your $PBS_NODEFILE contains the following:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No, if I put cat $PBS_NODEFILE in the pbs script I get
</span><br>
<span class="quotelev1">&gt; xserve02.local
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; xserve02.local
</span><br>
<span class="quotelev1">&gt; xserve01.local
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; xserve01.local
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; each repeated 8 times.  So that seems to be working....
</span><br>
<p>Good!
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, that could be part of the problem - it isn't the standard  
</span><br>
<span class="quotelev2">&gt;&gt; notation we are expecting to see in that file. What Torque normally  
</span><br>
<span class="quotelev2">&gt;&gt; provides is one line for each slot, so we would expect to see  
</span><br>
<span class="quotelev2">&gt;&gt; &quot;xserve01.local&quot; repeated 8 times, followed by &quot;xserve02.local&quot;  
</span><br>
<span class="quotelev2">&gt;&gt; repeated 8 times. Given the different syntax, we may not be parsing  
</span><br>
<span class="quotelev2">&gt;&gt; the file correctly. How was this file created?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file I am referring to above is the $TORQUEHOME/server_priv/ 
</span><br>
<span class="quotelev1">&gt; nodes file, that I created it by hand based on my understanding of  
</span><br>
<span class="quotelev1">&gt; the docs at:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.clusterresources.com/torquedocs/nodeconfig.shtml">http://www.clusterresources.com/torquedocs/nodeconfig.shtml</a>
</span><br>
<p>OMPI doesn't care about that file - only Torque looks at it.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also, could you clarify what node mpirun is executing on?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun seems to only run on xserve02
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The job I'm running is just creating a file:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #!/bin/bash
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; H=`hostname`
</span><br>
<span class="quotelev1">&gt; echo $H
</span><br>
<span class="quotelev1">&gt; sleep 10
</span><br>
<span class="quotelev1">&gt; uptime &gt;&amp;  $H.txt
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the stdout, the echo $H returns
</span><br>
<span class="quotelev1">&gt; &quot;xserve02.local&quot; 16 times and only xsever02.local.txt gets created...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again, if I run with &quot;ssh&quot; outside of pbs I get the expected response.
</span><br>
<p>Try running:
<br>
<p>mpirun --display-allocation -pernode --display-map hostname
<br>
<p>This will tell us what OMPI is seeing in terms of the nodes available  
<br>
to it. Based on what you show above, it should see both of your nodes.  
<br>
By forcing OMPI to put one proc/node, you'll be directing it to use  
<br>
both nodes for the job. You should see this in the reported map.
<br>
<p>If we then see both procs run on the same node, I would suggest  
<br>
reconfiguring OMPI with --enable-debug, and then rerunning the above  
<br>
command with an additional flag:
<br>
<p>-mca plm_base_verbose 5
<br>
<p>which will show us all the ugly details of what OMPI is telling Torque  
<br>
to do. Since OMPI works fine with Torque on Linux, my guess is that  
<br>
there is something about the Torque for Mac that is a little different  
<br>
and thus causing problems.
<br>
<p>Ralph
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,  Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 10, 2009, at 1:43 PM, Jody Klymak wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi All,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I've been trying to get torque pbs to work on my OS X 10.5.7  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster with openMPI (after finding that Xgrid was pretty flaky  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; about connections).  I *think* this is an MPI problem (perhaps via  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; operator error!)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and the job output.  But mpirun runs the whole job on the second  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of the two processors.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Any idea what could be going wrong or how to debu this properly?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jody Klymak
</span><br>
<span class="quotelev1">&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10275.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10276.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10276.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
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
