<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 03:16:55 2006" -->
<!-- isoreceived="20061102081655" -->
<!-- sent="Thu, 02 Nov 2006 01:16:46 -0700" -->
<!-- isosent="20061102081646" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support" -->
<!-- id="C16EF77E.252%rhc_at_lanl.gov" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="J83G0T$D59E9A409C8A812A304740B282A26DFE_at_aliceadsl.fr" -->
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
<strong>Date:</strong> 2006-11-02 03:16:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2110.php">calin pal: "[OMPI users] openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I gather you have access to bjs? Could you use bjs to get a node allocation,
<br>
and then send me a printout of the environment? All I need to see is what
<br>
your environment looks like - how does the system tell you what nodes you
<br>
have been allocated?
<br>
<p>Then we can make something that will solve your problem.
<br>
Ralph
<br>
<p><p><p>On 11/2/06 1:10 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Thank you for your support Ralf, I really appreciate.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have now a better understanding of your very first answer asking if I had a
</span><br>
<span class="quotelev1">&gt; NODES environment variable.
</span><br>
<span class="quotelev1">&gt; It was related to the fact that your platform is configured with LSF.
</span><br>
<span class="quotelev1">&gt; I have read some tutorials about LSF and it seems that LSF provides a &quot;llogin&quot;
</span><br>
<span class="quotelev1">&gt; command that creates an environment where the NODES variables is permanently
</span><br>
<span class="quotelev1">&gt; defined.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, under this &quot;llogin&quot; environment, all jobs are automatically allocated to
</span><br>
<span class="quotelev1">&gt; the nodes defined with NODES.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is why, I think,  the spawning works fine in this condition.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, LSF is commercial and then I am not able to install it on my
</span><br>
<span class="quotelev1">&gt; platform.
</span><br>
<span class="quotelev1">&gt; I whish I can not do anything more on my side now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You proposed to concoct something over the next few days. I look forward to
</span><br>
<span class="quotelev1">&gt; hearing from you.
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
<span class="quotelev1">&gt; Date: Tue, 31 Oct 2006 06:53:53 -0700
</span><br>
<span class="quotelev1">&gt; From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_Comm_spawn multiple bproc support
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;C16CA381.5759%rhc_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=&quot;ISO-8859-1&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Aha! Thanks for your detailed information - that helps identify the problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; See some thoughts below.
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 10/31/06 3:49 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for you quick reply Ralf,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As far as I know, the NODES environment variable is created when a job is
</span><br>
<span class="quotelev2">&gt;&gt; submitted to the bjs scheduler.
</span><br>
<span class="quotelev2">&gt;&gt; The only way I know (but I am a bproc newbe) is to use the bjssub command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; That is correct. However, Open MPI requires that ALL of the nodes you are
</span><br>
<span class="quotelev1">&gt; going to use must be allocated in advance. In other words, you have to get
</span><br>
<span class="quotelev1">&gt; an allocation large enough to run your entire job - both the initial
</span><br>
<span class="quotelev1">&gt; application and anything you comm_spawn.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wish I could help you with the proper bjs commands to get an allocation,
</span><br>
<span class="quotelev1">&gt; but I am not familiar with bjs and (even after multiple Google searches)
</span><br>
<span class="quotelev1">&gt; cannot find any documentation on that code. Try doing a &quot;bjs --help&quot; and see
</span><br>
<span class="quotelev1">&gt; what it says.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, I have retried my test with the following running command: &quot;bjssub -i
</span><br>
<span class="quotelev2">&gt;&gt; mpirun -np 1 main_exe&quot;.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;snip&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I guess, this problem comes from the way I set the parameters to the spawned
</span><br>
<span class="quotelev2">&gt;&gt; program. Instead of giving instructions to spawn the program on a specific
</span><br>
<span class="quotelev2">&gt;&gt; host, I should set parameters to spawn the program on a specific node.
</span><br>
<span class="quotelev2">&gt;&gt; But I do not know how to do it.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What you did was fine. &quot;host&quot; is the correct field to set. I suspect two
</span><br>
<span class="quotelev1">&gt; possible issues:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. The specified host may not be in the allocation. In the case you showed
</span><br>
<span class="quotelev1">&gt; here, I would expect it to be since you specified the same host we are
</span><br>
<span class="quotelev1">&gt; already on. However, you might try running mpirun with the &quot;--nolocal&quot;
</span><br>
<span class="quotelev1">&gt; option - this will force mpirun to launch the processes on a machine other
</span><br>
<span class="quotelev1">&gt; than the one you are on (typically you are on the head node. In many bproc
</span><br>
<span class="quotelev1">&gt; machines, this node is not included in an allocation as the system admins
</span><br>
<span class="quotelev1">&gt; don't want you running MPI jobs on it).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 2. We may have something wrong in our code for this case. I'm not sure how
</span><br>
<span class="quotelev1">&gt; well that has been tested, especially in the 1.1 code branch.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Then, I have a bunch of questions:
</span><br>
<span class="quotelev2">&gt;&gt; - when mpi is used together with bproc, is it necessary to use bjssub or bjs
</span><br>
<span class="quotelev2">&gt;&gt; in general ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You have to use some kind of resource manager to obtain a node allocation
</span><br>
<span class="quotelev1">&gt; for your use. At our site, we use LSF - other people use bjs. Anything that
</span><br>
<span class="quotelev1">&gt; sets the NODE variable is fine.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; - I was wondering if I had to submit to bjs the spawned program ? i.e do I
</span><br>
<span class="quotelev2">&gt;&gt; have to add 'bjssub' to the commands parameter of the MPI_Comm_spawn_mutliple
</span><br>
<span class="quotelev2">&gt;&gt; call ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You shouldn't have to do so. I suspect, however, that bjssub is not getting
</span><br>
<span class="quotelev1">&gt; a large enough allocation for your combined mpirun + spawned job. I'm not
</span><br>
<span class="quotelev1">&gt; familiar enough with bjs to know for certain.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; As you can see, I am still not able to spawn a program and need some more
</span><br>
<span class="quotelev2">&gt;&gt; help
</span><br>
<span class="quotelev2">&gt;&gt; ? 
</span><br>
<span class="quotelev2">&gt;&gt; Do you have a some examples describing how to do it ?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Unfortunately, not in the 1.1 branch, nor do I have one for
</span><br>
<span class="quotelev1">&gt; comm_spawn_multiple that uses the &quot;host&quot; field. I can try to concoct
</span><br>
<span class="quotelev1">&gt; something over the next few days, though, and verify that our code is
</span><br>
<span class="quotelev1">&gt; working correctly.
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
<li><strong>Next message:</strong> <a href="2110.php">calin pal: "[OMPI users] openmpi problem"</a>
<li><strong>Previous message:</strong> <a href="2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>In reply to:</strong> <a href="2108.php">hpetit_at_[hidden]: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
