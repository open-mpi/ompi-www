<?
$subject_val = "Re: [OMPI users] torque pbs behaviour...";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 10 16:05:10 2009" -->
<!-- isoreceived="20090810200510" -->
<!-- sent="Mon, 10 Aug 2009 14:04:58 -0600" -->
<!-- isosent="20090810200458" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] torque pbs behaviour..." -->
<!-- id="83979F13-043D-4385-8E1F-51CBA54C43C1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9A73783D-8D77-431C-AD0A-4354636D15C1_at_uvic.ca" -->
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
<strong>Date:</strong> 2009-08-10 16:04:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10272.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10269.php">Jody Klymak: "[OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Umm...are you saying that your $PBS_NODEFILE contains the following:
<br>
<p><span class="quotelev1">&gt; xserve01.local np=8
</span><br>
<span class="quotelev1">&gt; xserve02.local np=8
</span><br>
<p>If so, that could be part of the problem - it isn't the standard  
<br>
notation we are expecting to see in that file. What Torque normally  
<br>
provides is one line for each slot, so we would expect to see  
<br>
&quot;xserve01.local&quot; repeated 8 times, followed by &quot;xserve02.local&quot;  
<br>
repeated 8 times. Given the different syntax, we may not be parsing  
<br>
the file correctly. How was this file created?
<br>
<p>Also, could you clarify what node mpirun is executing on?
<br>
<p>Ralph
<br>
<p>On Aug 10, 2009, at 1:43 PM, Jody Klymak wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've been trying to get torque pbs to work on my OS X 10.5.7 cluster  
</span><br>
<span class="quotelev1">&gt; with openMPI (after finding that Xgrid was pretty flaky about  
</span><br>
<span class="quotelev1">&gt; connections).  I *think* this is an MPI problem (perhaps via  
</span><br>
<span class="quotelev1">&gt; operator error!)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I submit openMPI with:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #PBS -l nodes=2:ppn=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun MyProg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; pbs locks off two of the processors, checked via &quot;pbsnodes -a&quot;, and  
</span><br>
<span class="quotelev1">&gt; the job output.  But mpirun runs the whole job on the second of the  
</span><br>
<span class="quotelev1">&gt; two processors.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I run the same job w/o qsub (i.e. using ssh)
</span><br>
<span class="quotelev1">&gt; mpirun -n 16 -host xserve01,xserve02 MyProg
</span><br>
<span class="quotelev1">&gt; it runs fine on all the nodes....
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My /var/spool/toque/server_priv/nodes file looks like:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; xserve01.local np=8
</span><br>
<span class="quotelev1">&gt; xserve02.local np=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what could be going wrong or how to debu this properly?  
</span><br>
<span class="quotelev1">&gt; There is nothing suspicious in the server or mom logs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for any help,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="10272.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Previous message:</strong> <a href="10270.php">Gus Correa: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10269.php">Jody Klymak: "[OMPI users] torque pbs behaviour..."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>Reply:</strong> <a href="10273.php">Jody Klymak: "Re: [OMPI users] torque pbs behaviour..."</a>
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
