<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Nov  2 03:10:15 2006" -->
<!-- isoreceived="20061102081015" -->
<!-- sent="Thu,  2 Nov 2006 09:10:05 +0100" -->
<!-- isosent="20061102081005" -->
<!-- name="hpetit_at_[hidden]" -->
<!-- email="hpetit_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Comm_spawn multiple bproc support" -->
<!-- id="J83G0T$D59E9A409C8A812A304740B282A26DFE_at_aliceadsl.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] MPI_Comm_spawn multiple bproc support" -->
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
<strong>From:</strong> <a href="mailto:hpetit_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI_Comm_spawn%20multiple%20bproc%20support"><em>hpetit_at_[hidden]</em></a><br>
<strong>Date:</strong> 2006-11-02 03:10:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2087.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your support Ralf, I really appreciate.
<br>

<br>
I have now a better understanding of your very first answer asking if I had a NODES environment variable.
<br>
It was related to the fact that your platform is configured with LSF. 
<br>
I have read some tutorials about LSF and it seems that LSF provides a &quot;llogin&quot; command that creates an environment where the NODES variables is permanently defined.
<br>

<br>
Then, under this &quot;llogin&quot; environment, all jobs are automatically allocated to the nodes defined with NODES.
<br>

<br>
This is why, I think,  the spawning works fine in this condition.
<br>

<br>
Unfortunately, LSF is commercial and then I am not able to install it on my platform.
<br>
I whish I can not do anything more on my side now.
<br>

<br>
You proposed to concoct something over the next few days. I look forward to hearing from you.
<br>

<br>
Regards.
<br>

<br>
Herve
<br>

<br>

<br>

<br>
Date: Tue, 31 Oct 2006 06:53:53 -0700
<br>
From: Ralph H Castain &lt;rhc_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] MPI_Comm_spawn multiple bproc support
<br>
To: &quot;Open MPI Users &lt;users_at_[hidden]&gt;&quot; &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;C16CA381.5759%rhc_at_[hidden]&gt;
<br>
Content-Type: text/plain; charset=&quot;ISO-8859-1&quot;
<br>

<br>
Aha! Thanks for your detailed information - that helps identify the problem.
<br>

<br>
See some thoughts below.
<br>
Ralph
<br>

<br>

<br>
On 10/31/06 3:49 AM, &quot;hpetit_at_[hidden]&quot; &lt;hpetit_at_[hidden]&gt; wrote:
<br>

<br>
<span class="quotelev1">&gt; Thank you for you quick reply Ralf,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As far as I know, the NODES environment variable is created when a job is
</span><br>
<span class="quotelev1">&gt; submitted to the bjs scheduler.
</span><br>
<span class="quotelev1">&gt; The only way I know (but I am a bproc newbe) is to use the bjssub command.
</span><br>

<br>
That is correct. However, Open MPI requires that ALL of the nodes you are
<br>
going to use must be allocated in advance. In other words, you have to get
<br>
an allocation large enough to run your entire job - both the initial
<br>
application and anything you comm_spawn.
<br>

<br>
I wish I could help you with the proper bjs commands to get an allocation,
<br>
but I am not familiar with bjs and (even after multiple Google searches)
<br>
cannot find any documentation on that code. Try doing a &quot;bjs --help&quot; and see
<br>
what it says.
<br>

<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Then, I have retried my test with the following running command: &quot;bjssub -i
</span><br>
<span class="quotelev1">&gt; mpirun -np 1 main_exe&quot;.
</span><br>
<span class="quotelev1">&gt; 
</span><br>

<br>
&lt;snip&gt;
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I guess, this problem comes from the way I set the parameters to the spawned
</span><br>
<span class="quotelev1">&gt; program. Instead of giving instructions to spawn the program on a specific
</span><br>
<span class="quotelev1">&gt; host, I should set parameters to spawn the program on a specific node.
</span><br>
<span class="quotelev1">&gt; But I do not know how to do it.
</span><br>
<span class="quotelev1">&gt; 
</span><br>

<br>
What you did was fine. &quot;host&quot; is the correct field to set. I suspect two
<br>
possible issues:
<br>

<br>
1. The specified host may not be in the allocation. In the case you showed
<br>
here, I would expect it to be since you specified the same host we are
<br>
already on. However, you might try running mpirun with the &quot;--nolocal&quot;
<br>
option - this will force mpirun to launch the processes on a machine other
<br>
than the one you are on (typically you are on the head node. In many bproc
<br>
machines, this node is not included in an allocation as the system admins
<br>
don't want you running MPI jobs on it).
<br>

<br>
2. We may have something wrong in our code for this case. I'm not sure how
<br>
well that has been tested, especially in the 1.1 code branch.
<br>

<br>
<span class="quotelev1">&gt; Then, I have a bunch of questions:
</span><br>
<span class="quotelev1">&gt; - when mpi is used together with bproc, is it necessary to use bjssub or bjs
</span><br>
<span class="quotelev1">&gt; in general ?
</span><br>

<br>
You have to use some kind of resource manager to obtain a node allocation
<br>
for your use. At our site, we use LSF - other people use bjs. Anything that
<br>
sets the NODE variable is fine.
<br>

<br>
<span class="quotelev1">&gt; - I was wondering if I had to submit to bjs the spawned program ? i.e do I
</span><br>
<span class="quotelev1">&gt; have to add 'bjssub' to the commands parameter of the MPI_Comm_spawn_mutliple
</span><br>
<span class="quotelev1">&gt; call ?
</span><br>

<br>
You shouldn't have to do so. I suspect, however, that bjssub is not getting
<br>
a large enough allocation for your combined mpirun + spawned job. I'm not
<br>
familiar enough with bjs to know for certain.
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; As you can see, I am still not able to spawn a program and need some more help
</span><br>
<span class="quotelev1">&gt; ? 
</span><br>
<span class="quotelev1">&gt; Do you have a some examples describing how to do it ?
</span><br>

<br>
Unfortunately, not in the 1.1 branch, nor do I have one for
<br>
comm_spawn_multiple that uses the &quot;host&quot; field. I can try to concoct
<br>
something over the next few days, though, and verify that our code is
<br>
working correctly.
<br>

<br>
<p><p>--------------------- ALICE SECURITE ENFANTS ---------------------
<br>
Prot&#233;gez vos enfants des dangers d'Internet en installant S&#233;curit&#233; Enfants, le contr&#244;le parental d'Alice.
<br>
<a href="http://www.aliceadsl.fr/securitepc/default_copa.asp">http://www.aliceadsl.fr/securitepc/default_copa.asp</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2107.php">Brian W. Barrett: "Re: [OMPI users] Error or warning message when launching job"</a>
<li><strong>Maybe in reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/10/2087.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Reply:</strong> <a href="2109.php">Ralph Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
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
