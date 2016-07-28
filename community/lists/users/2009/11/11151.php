<?
$subject_val = "Re: [OMPI users] running multiple executables under Torque/PBS PRO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 19:48:08 2009" -->
<!-- isoreceived="20091111004808" -->
<!-- sent="Tue, 10 Nov 2009 16:48:06 -0800" -->
<!-- isosent="20091111004806" -->
<!-- name="Tom Rosmond" -->
<!-- email="rosmond_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running multiple executables under Torque/PBS PRO" -->
<!-- id="1257900486.7214.42.camel_at_alder.reachone.com" -->
<!-- inreplyto="EEB90F32-69AF-468C-A88B-70886A545F14_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] running multiple executables under Torque/PBS PRO<br>
<strong>From:</strong> Tom Rosmond (<em>rosmond_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 19:48:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Previous message:</strong> <a href="11150.php">Reuti: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Reply:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>I am using 1.3.2, so the relative node syntax certainly seems the way to
<br>
go.  However, I seem to be missing something.  On the 'orte_hosts' man
<br>
page near the top is the simple example:
<br>
<p>&nbsp;mpirun -pernode -host +n1,+n2 ./app1 : -host +n3,+n4 ./app2
<br>
<p>I set up my job to run on 4 nodes (4 processors/node), and slavishly
<br>
copied this line into my PBS script.  However, I got the following error
<br>
message:
<br>
<p>--------------------------------------------------------------------------
<br>
mpirun found multiple applications specified on the command line, with
<br>
at least one that failed to specify the number of processes to execute.
<br>
When specifying multiple applications, you must specify how many
<br>
processes of each to launch via the -np argument.
<br>
--------------------------------------------------------------------------
<br>
<p><p>I suspect an '-npernode 4' option, rather than '-pernode', is what I
<br>
really need, since I want 4 processes per node.  Either way, however, I
<br>
don't think that explains the above error message.  Correct?  Do I still
<br>
need to extract node-name information from the PBS_NODEFILE for this
<br>
approach, and replace n1, n2, etc, with the actual node-names?
<br>
<p>T. Rosmond
<br>
<p><p><p><p>On Tue, 2009-11-10 at 14:54 -0700, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; What version are you trying to do this with?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Reason I ask: in 1.3.x, we introduced relative node syntax for  
</span><br>
<span class="quotelev1">&gt; specifying hosts to use. This would eliminate the need to create the  
</span><br>
<span class="quotelev1">&gt; hostfiles.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You might do a &quot;man orte_hosts&quot; (assuming you installed the man pages)  
</span><br>
<span class="quotelev1">&gt; and see what it says.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 2:46 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I want to run a number of MPI executables simultaneously in a PBS job.
</span><br>
<span class="quotelev2">&gt; &gt; For example on my system I do 'cat $PBS_NODEFILE' and get a list like
</span><br>
<span class="quotelev2">&gt; &gt; this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; n04
</span><br>
<span class="quotelev2">&gt; &gt; n04
</span><br>
<span class="quotelev2">&gt; &gt; n04
</span><br>
<span class="quotelev2">&gt; &gt; n04
</span><br>
<span class="quotelev2">&gt; &gt; n06
</span><br>
<span class="quotelev2">&gt; &gt; n06
</span><br>
<span class="quotelev2">&gt; &gt; n06
</span><br>
<span class="quotelev2">&gt; &gt; n06
</span><br>
<span class="quotelev2">&gt; &gt; n07
</span><br>
<span class="quotelev2">&gt; &gt; n07
</span><br>
<span class="quotelev2">&gt; &gt; n07
</span><br>
<span class="quotelev2">&gt; &gt; n07
</span><br>
<span class="quotelev2">&gt; &gt; n09
</span><br>
<span class="quotelev2">&gt; &gt; n09
</span><br>
<span class="quotelev2">&gt; &gt; n09
</span><br>
<span class="quotelev2">&gt; &gt; n09
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; i.e, 16 processors on 4 nodes. from which I can parse into file(s) as
</span><br>
<span class="quotelev2">&gt; &gt; desired.  If I want to run prog1 on 1 node (4 processors), prog2 on 1
</span><br>
<span class="quotelev2">&gt; &gt; node (4 processors), and prog3 on 2 nodes (8 processors), I think the
</span><br>
<span class="quotelev2">&gt; &gt; syntax will be something like:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;  mpirun -np 4 --hostfile nodefile1 prog1: \
</span><br>
<span class="quotelev2">&gt; &gt;         -np 4 --hostfile nodefile2 prog2: \
</span><br>
<span class="quotelev2">&gt; &gt;         -np 8 --hostfile nodefile3 prog3
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Where nodefile1, nodefile2, and nodefile3 are the lists extracted from
</span><br>
<span class="quotelev2">&gt; &gt; PBS_NODEFILE.  Is this correct?  Any suggestion/advice, (e.g. syntax  
</span><br>
<span class="quotelev2">&gt; &gt; of
</span><br>
<span class="quotelev2">&gt; &gt; the 'nodefiles'), is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; T. Rosmond
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Previous message:</strong> <a href="11150.php">Reuti: "Re: [OMPI users] [sge] tight-integration	openmpi	and	sge:	opal_os_dirpath_create failure"</a>
<li><strong>In reply to:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>Reply:</strong> <a href="11152.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
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
