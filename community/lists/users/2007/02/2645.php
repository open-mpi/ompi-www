<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Feb  8 12:56:21 2007" -->
<!-- isoreceived="20070208175621" -->
<!-- sent="Thu, 8 Feb 2007 12:56:16 -0500" -->
<!-- isosent="20070208175616" -->
<!-- name="Mark Kosmowski" -->
<!-- email="mark.kosmowski_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but Re: first time user - can run mpi job SMP but not over cluster" -->
<!-- id="c84311bb0702080956w20a4e9e7of74954630fbf84e0_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="[OMPI users] first time user - can run mpi job SMP but Re: first time user - can run mpi job SMP but not over cluster" -->
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
<strong>From:</strong> Mark Kosmowski (<em>mark.kosmowski_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-08 12:56:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; Message: 1
</span><br>
<span class="quotelev1">&gt; Date: Wed, 7 Feb 2007 17:37:41 -0500
</span><br>
<span class="quotelev1">&gt; From: &quot;Alex Tumanov&quot; &lt;atumanov_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] first time user - can run mpi job SMP but
</span><br>
<span class="quotelev1">&gt;         not over        cluster
</span><br>
<span class="quotelev1">&gt; To: &quot;Open MPI Users&quot; &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Message-ID:
</span><br>
<span class="quotelev1">&gt;         &lt;2453e2900702071437k20a13e97g5014253aa97ccaba_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=ISO-8859-1; format=flowed
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun -np 2 myprogram inputfile &gt;outputfile
</span><br>
<span class="quotelev1">&gt; There can be a whole host of issues with the way you run your
</span><br>
<span class="quotelev1">&gt; executable and/or the way you have the environment setup. First of
</span><br>
<span class="quotelev1">&gt; all, when you ssh into the node, does the environment automatically
</span><br>
<span class="quotelev1">&gt; get updated with correct Open MPI paths? I.e. LD_LIBRARY_PATH should
</span><br>
<span class="quotelev1">&gt; be correctly set to the OMPI lib directory, PATH should contain OMPI's
</span><br>
<span class="quotelev1">&gt; bin dir, etc. If this is not the case, you have two options:
</span><br>
<span class="quotelev1">&gt; a. create small /etc/profile.d scripts to set up those env. variables
</span><br>
<span class="quotelev1">&gt; b. use --prefix version when you invoke mpirun on the headnode
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, it would be much more helpful if you provided the actual
</span><br>
<span class="quotelev1">&gt; output of running the commands you listed here.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile myhostfile -np 4 myprogram inputfile &gt;outputfile
</span><br>
<span class="quotelev1">&gt; Another issue I can think of is path specification to 'myprogram'. Do
</span><br>
<span class="quotelev1">&gt; you just cd into the directory where it resides and specify its name
</span><br>
<span class="quotelev1">&gt; only? Try to either specify an absolute path to the executable or path
</span><br>
<span class="quotelev1">&gt; relative to your homedir: ~/appdir/bin/appexec, assuming this location
</span><br>
<span class="quotelev1">&gt; is the same on all the nodes. If mpirun can't find your executable on
</span><br>
<span class="quotelev1">&gt; one of the nodes, it should report that as an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; which does not write to the output file.
</span><br>
<span class="quotelev1">&gt; Does it write anything to stderr? You could also try invoking mpirun
</span><br>
<span class="quotelev1">&gt; with '--mca pls_rsh_agent ssh'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; mpirun --hostfile myhostfile -np 4 `myprogram inputfile &gt;outputfile`
</span><br>
<span class="quotelev1">&gt; Are those backquotes?? I would recommend getting mpirun to invoke
</span><br>
<span class="quotelev1">&gt; something basic on all the participating nodes successfully first, try
</span><br>
<span class="quotelev1">&gt; mpirun --prefix /path/to/ompi/ --hostfile myhosfile --np 4 hostname
</span><br>
<span class="quotelev1">&gt; for instance. Nothing else will work until this does.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; These are just a few pointers to get you started. Hope this helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Alex.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Thanks for the suggestions - the mpirun ... hostname is helping me
<br>
narrow down the problem.
<br>
<p>Both systems have PATH and LD_LIBRARY_PATH setup properly by
<br>
definition - mpirun can launch successfully for an SMP job.
<br>
<p>Running mpirun --hostname myhostfile -np 4 hostname (with or without
<br>
-- prefix openmpi path) gives the following results:
<br>
<p>MASTERNODE
<br>
MASTERNODE
<br>
(system hangs here and I have to cntl-c to kill mpirun)
<br>
<p>I copied myhostfile to a shared directory and attempted the same
<br>
command from the slave node and got:
<br>
<p>SLAVENODE
<br>
SLAVENODE
<br>
an echo message from masternode .bashrc
<br>
(system hangs here and I have to cntl-c to kill mpirun)
<br>
<p>I'm thinking that either my ssh is misbehaving somehow or there is an
<br>
issue with having two network connections in each node (I haven't
<br>
unplugged the internet connection from my slave node yet and my master
<br>
node will always be having an internet connection in addition to the
<br>
gigabit cluster network).
<br>
<p>I hope this is helpful to try to help me troubleshoot my system.
<br>
<p>Thanks!
<br>
<p>Mark Kosmowski
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2646.php">Alex Tumanov: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
<li><strong>Previous message:</strong> <a href="2644.php">George Bosilca: "Re: [OMPI users] NetPipe benchmark &amp; spanning multiple interconnects"</a>
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
