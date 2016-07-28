<?
$subject_val = "Re: [OMPI users] running multiple executables under Torque/PBS PRO";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 19:56:49 2009" -->
<!-- isoreceived="20091111005649" -->
<!-- sent="Tue, 10 Nov 2009 17:56:40 -0700" -->
<!-- isosent="20091111005640" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] running multiple executables under Torque/PBS PRO" -->
<!-- id="779D252D-8A92-4229-94F6-03C693193DD7_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1257900486.7214.42.camel_at_alder.reachone.com" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 19:56:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11153.php">Martin Siegert: "[OMPI users] maximum value for count argument"</a>
<li><strong>Previous message:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>In reply to:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can use the relative host syntax, but you cannot use a &quot;pernode&quot;  
<br>
or &quot;npernode&quot; option when you have more than one application on the  
<br>
cmd line. You have to specify the number of procs for each  
<br>
application, as the error message says. :-)
<br>
<p>IIRC, the reason was that we couldn't decide on how to interpret the  
<br>
cmd line - though looking at this example, I think I could figure it  
<br>
out. Anyway, that is the problem.
<br>
<p>HTH
<br>
Ralph
<br>
<p>On Nov 10, 2009, at 5:48 PM, Tom Rosmond wrote:
<br>
<p><span class="quotelev1">&gt; Ralph,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using 1.3.2, so the relative node syntax certainly seems the  
</span><br>
<span class="quotelev1">&gt; way to
</span><br>
<span class="quotelev1">&gt; go.  However, I seem to be missing something.  On the 'orte_hosts' man
</span><br>
<span class="quotelev1">&gt; page near the top is the simple example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; mpirun -pernode -host +n1,+n2 ./app1 : -host +n3,+n4 ./app2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I set up my job to run on 4 nodes (4 processors/node), and slavishly
</span><br>
<span class="quotelev1">&gt; copied this line into my PBS script.  However, I got the following  
</span><br>
<span class="quotelev1">&gt; error
</span><br>
<span class="quotelev1">&gt; message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun found multiple applications specified on the command line, with
</span><br>
<span class="quotelev1">&gt; at least one that failed to specify the number of processes to  
</span><br>
<span class="quotelev1">&gt; execute.
</span><br>
<span class="quotelev1">&gt; When specifying multiple applications, you must specify how many
</span><br>
<span class="quotelev1">&gt; processes of each to launch via the -np argument.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suspect an '-npernode 4' option, rather than '-pernode', is what I
</span><br>
<span class="quotelev1">&gt; really need, since I want 4 processes per node.  Either way,  
</span><br>
<span class="quotelev1">&gt; however, I
</span><br>
<span class="quotelev1">&gt; don't think that explains the above error message.  Correct?  Do I  
</span><br>
<span class="quotelev1">&gt; still
</span><br>
<span class="quotelev1">&gt; need to extract node-name information from the PBS_NODEFILE for this
</span><br>
<span class="quotelev1">&gt; approach, and replace n1, n2, etc, with the actual node-names?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; T. Rosmond
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, 2009-11-10 at 14:54 -0700, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; What version are you trying to do this with?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reason I ask: in 1.3.x, we introduced relative node syntax for
</span><br>
<span class="quotelev2">&gt;&gt; specifying hosts to use. This would eliminate the need to create the
</span><br>
<span class="quotelev2">&gt;&gt; hostfiles.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might do a &quot;man orte_hosts&quot; (assuming you installed the man  
</span><br>
<span class="quotelev2">&gt;&gt; pages)
</span><br>
<span class="quotelev2">&gt;&gt; and see what it says.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2009, at 2:46 PM, Tom Rosmond wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to run a number of MPI executables simultaneously in a PBS  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For example on my system I do 'cat $PBS_NODEFILE' and get a list  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; like
</span><br>
<span class="quotelev3">&gt;&gt;&gt; this:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n04
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n06
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n07
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n07
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n07
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n07
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n09
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n09
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n09
</span><br>
<span class="quotelev3">&gt;&gt;&gt; n09
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; i.e, 16 processors on 4 nodes. from which I can parse into file(s)  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; desired.  If I want to run prog1 on 1 node (4 processors), prog2  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on 1
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node (4 processors), and prog3 on 2 nodes (8 processors), I think  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; syntax will be something like:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; mpirun -np 4 --hostfile nodefile1 prog1: \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -np 4 --hostfile nodefile2 prog2: \
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        -np 8 --hostfile nodefile3 prog3
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Where nodefile1, nodefile2, and nodefile3 are the lists extracted  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; from
</span><br>
<span class="quotelev3">&gt;&gt;&gt; PBS_NODEFILE.  Is this correct?  Any suggestion/advice, (e.g. syntax
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the 'nodefiles'), is appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; T. Rosmond
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
<li><strong>Next message:</strong> <a href="11153.php">Martin Siegert: "[OMPI users] maximum value for count argument"</a>
<li><strong>Previous message:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>In reply to:</strong> <a href="11151.php">Tom Rosmond: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
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
