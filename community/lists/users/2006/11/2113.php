<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 08:46:13 2006" -->
<!-- isoreceived="20061102134613" -->
<!-- sent="Thu, 02 Nov 2006 06:46:03 -0700" -->
<!-- isosent="20061102134603" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support" -->
<!-- id="C16F44AB.263%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="J83UXC$0CC4FA692812697B62B92FC57EC99FDA_at_aliceadsl.fr" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-02 08:46:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2114.php">Pierre Valiron: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="2112.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2112.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I truly appreciate your patience. Let me talk to some of our Bproc folks and
<br>
see if they can tell me what is going on. I agree - I would have expected
<br>
the NODES to be 0,1. The fact that you are getting just 0 explains the
<br>
behavior you are seeing with Open MPI.
<br>
<p>I also know (though I don't the command syntax) that you can get a long-term
<br>
allocation from bjs (i.e., one that continues until you logout). Let me dig
<br>
a little and see how that is done.
<br>
<p>Again, I appreciate your patience.
<br>
Ralph
<br>
<p><p>On 11/2/06 6:32 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I again Ralf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I gather you have access to bjs? Could you use bjs to get a node allocation,
</span><br>
<span class="quotelev2">&gt;&gt; and then send me a printout of the environment?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have slightly changed my cluster configuration for something like:
</span><br>
<span class="quotelev1">&gt; master is running on a machine call: machine10
</span><br>
<span class="quotelev1">&gt; node 0 is running on a machine call: machine10 (same as master then)
</span><br>
<span class="quotelev1">&gt; node 1 is running on a machine call: machine14
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; node 0 and 1 are up
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My bjs configration allocates node 0 and 1 to the default pool
</span><br>
<span class="quotelev1">&gt; &lt;---------------&gt;
</span><br>
<span class="quotelev1">&gt; pool default
</span><br>
<span class="quotelev1">&gt;       policy simple
</span><br>
<span class="quotelev1">&gt;       nodes 0-1
</span><br>
<span class="quotelev1">&gt; &lt;-----------------&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Be default, when I run &quot;env&quot; in a terminal, NODES variable is not present.
</span><br>
<span class="quotelev1">&gt; If I run env under a job submission command like &quot;bjsub -i env&quot;, then I can
</span><br>
<span class="quotelev1">&gt; see the following new environments variable.
</span><br>
<span class="quotelev1">&gt; NODES=0
</span><br>
<span class="quotelev1">&gt; JOBID=27 (for instance)
</span><br>
<span class="quotelev1">&gt; BPROC_RANK=0000000
</span><br>
<span class="quotelev1">&gt; BPROC_PROGNAME=/usr/bin/env
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When the command is over, NODES is unset again.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What is strange is that I would have expected that NODES=0,1. I do not know if
</span><br>
<span class="quotelev1">&gt; you bjs users have the same behaviour.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hopefully, it is the kind of information you were expecting.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Herve
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --------------------- ALICE SECURITE ENFANTS ---------------------
</span><br>
<span class="quotelev1">&gt; Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le
</span><br>
<span class="quotelev1">&gt; contr&#244;le parental d'Alice.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
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
<li><strong>Next message:</strong> <a href="2114.php">Pierre Valiron: "Re: [OMPI users] OMPI Collectives"</a>
<li><strong>Previous message:</strong> <a href="2112.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2112.php">hpetit_at_[hidden]: "[OMPI users]  Re: Re: Re: Re: Re:MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
