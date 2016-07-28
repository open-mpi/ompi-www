<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 17:25:49 2009" -->
<!-- isoreceived="20090810212549" -->
<!-- sent="Mon, 10 Aug 2009 14:25:44 -0700" -->
<!-- isosent="20090810212544" -->
<!-- name="Jody Klymak" -->
<!-- email="jklymak_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="386EFAB9-E180-4D21-BFDF-BA478894240F_at_uvic.ca" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="83979F13-043D-4385-8E1F-51CBA54C43C1_at_open-mpi.org" -->
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
<strong>From:</strong> Jody Klymak (<em>jklymak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-10 17:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10272.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>On Aug 10, 2009, at  13:04 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; Umm...are you saying that your $PBS_NODEFILE contains the following:
</span><br>
<p>No, if I put cat $PBS_NODEFILE in the pbs script I get
<br>
xserve02.local
<br>
...
<br>
xserve02.local
<br>
xserve01.local
<br>
...
<br>
xserve01.local
<br>
<p>each repeated 8 times.  So that seems to be working....
<br>
<p><p><span class="quotelev2">&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If so, that could be part of the problem - it isn't the standard  
</span><br>
<span class="quotelev1">&gt; notation we are expecting to see in that file. What Torque normally  
</span><br>
<span class="quotelev1">&gt; provides is one line for each slot, so we would expect to see  
</span><br>
<span class="quotelev1">&gt; &quot;xserve01.local&quot; repeated 8 times, followed by &quot;xserve02.local&quot;  
</span><br>
<span class="quotelev1">&gt; repeated 8 times. Given the different syntax, we may not be parsing  
</span><br>
<span class="quotelev1">&gt; the file correctly. How was this file created?
</span><br>
<p>The file I am referring to above is the $TORQUEHOME/server_priv/nodes  
<br>
file, that I created it by hand based on my understanding of the docs  
<br>
at:
<br>
<p><a href="http://www.clusterresources.com/torquedocs/nodeconfig.shtml">http://www.clusterresources.com/torquedocs/nodeconfig.shtml</a>
<br>
<p><p><span class="quotelev1">&gt; Also, could you clarify what node mpirun is executing on?
</span><br>
<p>mpirun seems to only run on xserve02
<br>
<p>The job I'm running is just creating a file:
<br>
<p>#!/bin/bash
<br>
<p>H=`hostname`
<br>
echo $H
<br>
sleep 10
<br>
uptime &gt;&amp;  $H.txt
<br>
<p>In the stdout, the echo $H returns
<br>
&quot;xserve02.local&quot; 16 times and only xsever02.local.txt gets created...
<br>
<p>Again, if I run with &quot;ssh&quot; outside of pbs I get the expected response.
<br>
<p><p>Thanks,  Jody
<br>
<p><p><p><p><span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at 1:43 PM, Jody Klymak wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi All,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've been trying to get torque pbs to work on my OS X 10.5.7  
</span><br>
<span class="quotelev2">&gt;&gt; cluster with openMPI (after finding that Xgrid was pretty flaky  
</span><br>
<span class="quotelev2">&gt;&gt; about connections).  I *think* this is an MPI problem (perhaps via  
</span><br>
<span class="quotelev2">&gt;&gt; operator error!)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I submit openMPI with:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; mpirun MyProg
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;, and  
</span><br>
<span class="quotelev2">&gt;&gt; the job output.  But mpirun runs the whole job on the second of the  
</span><br>
<span class="quotelev2">&gt;&gt; two processors.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev2">&gt;&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; xserve01.local np=8
</span><br>
<span class="quotelev2">&gt;&gt; xserve02.local np=8
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what could be going wrong or how to debu this properly?  
</span><br>
<span class="quotelev2">&gt;&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for any help,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Jody
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jody Klymak
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<p><pre>
--
Jody Klymak
<a href="http://web.uvic.ca/~jklymak/">http://web.uvic.ca/~jklymak/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10272.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10271.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10274.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
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
