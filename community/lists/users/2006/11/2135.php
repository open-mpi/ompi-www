<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 16:10:27 2006" -->
<!-- isoreceived="20061103211027" -->
<!-- sent="Fri, 03 Nov 2006 14:10:20 -0700" -->
<!-- isosent="20061103211020" -->
<!-- name="Ralph H Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support" -->
<!-- id="C170FE4C.59B3%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C16F44AB.263%rhc_at_lanl.gov" -->
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
<strong>From:</strong> Ralph H Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 16:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<li><strong>Previous message:</strong> <a href="2134.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier."</a>
<li><strong>In reply to:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Okay, I picked up some further info that may help you.
<br>
<p><span class="quotelev2">&gt;&gt; The &quot;bjsub -i /bin/env&quot; only sets up the NODES for the session of
</span><br>
<span class="quotelev2">&gt;&gt; /bin/env. Probably what he wants is &quot;bjssub -i /bin/bash&quot; and start
</span><br>
<span class="quotelev2">&gt;&gt; bpsh/mpirun from the new shell.
</span><br>
<p>I would recommend doing as they suggest. Also, they noted that you failed to
<br>
specify the number of nodes you wanted on the bjssub command line. As a
<br>
result, the system gave you only one node (hence the NODES=0 instead of
<br>
NODES=0, 1).
<br>
<p>If you do a &quot;man bjssub&quot;, or a &quot;bjssub --help&quot;, you should (hopefully) find
<br>
out how to specify the desired number of nodes.
<br>
<p>Hope that helps.
<br>
Ralph
<br>
<p><p>On 11/2/06 6:46 AM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I truly appreciate your patience. Let me talk to some of our Bproc folks and
</span><br>
<span class="quotelev1">&gt; see if they can tell me what is going on. I agree - I would have expected
</span><br>
<span class="quotelev1">&gt; the NODES to be 0,1. The fact that you are getting just 0 explains the
</span><br>
<span class="quotelev1">&gt; behavior you are seeing with Open MPI.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also know (though I don't the command syntax) that you can get a long-term
</span><br>
<span class="quotelev1">&gt; allocation from bjs (i.e., one that continues until you logout). Let me dig
</span><br>
<span class="quotelev1">&gt; a little and see how that is done.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Again, I appreciate your patience.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 11/2/06 6:32 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I again Ralf,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I gather you have access to bjs? Could you use bjs to get a node allocation,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and then send me a printout of the environment?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I have slightly changed my cluster configuration for something like:
</span><br>
<span class="quotelev2">&gt;&gt; master is running on a machine call: machine10
</span><br>
<span class="quotelev2">&gt;&gt; node 0 is running on a machine call: machine10 (same as master then)
</span><br>
<span class="quotelev2">&gt;&gt; node 1 is running on a machine call: machine14
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; node 0 and 1 are up
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; My bjs configration allocates node 0 and 1 to the default pool
</span><br>
<span class="quotelev2">&gt;&gt; &lt;---------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; pool default
</span><br>
<span class="quotelev2">&gt;&gt;       policy simple
</span><br>
<span class="quotelev2">&gt;&gt;       nodes 0-1
</span><br>
<span class="quotelev2">&gt;&gt; &lt;-----------------&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Be default, when I run &quot;env&quot; in a terminal, NODES variable is not present.
</span><br>
<span class="quotelev2">&gt;&gt; If I run env under a job submission command like &quot;bjsub -i env&quot;, then I can
</span><br>
<span class="quotelev2">&gt;&gt; see the following new environments variable.
</span><br>
<span class="quotelev2">&gt;&gt; NODES=0
</span><br>
<span class="quotelev2">&gt;&gt; JOBID=27 (for instance)
</span><br>
<span class="quotelev2">&gt;&gt; BPROC_RANK=0000000
</span><br>
<span class="quotelev2">&gt;&gt; BPROC_PROGNAME=/usr/bin/env
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When the command is over, NODES is unset again.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; What is strange is that I would have expected that NODES=0,1. I do not know
</span><br>
<span class="quotelev2">&gt;&gt; if
</span><br>
<span class="quotelev2">&gt;&gt; you bjs users have the same behaviour.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hopefully, it is the kind of information you were expecting.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Herve
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev2">&gt;&gt; Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants,
</span><br>
<span class="quotelev2">&gt;&gt; le
</span><br>
<span class="quotelev2">&gt;&gt; contr&#244;le parental d'Alice.
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
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
<li><strong>Next message:</strong> <a href="2136.php">pgarcia_at_[hidden]: "[OMPI users] Technical inquiry"</a>
<li><strong>Previous message:</strong> <a href="2134.php">Jose Quiroga: "[OMPI users] Suspected bug during MPI_Barrier."</a>
<li><strong>In reply to:</strong> <a href="2113.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
