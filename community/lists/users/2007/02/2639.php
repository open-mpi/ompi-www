<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Feb  7 17:37:56 2007" -->
<!-- isoreceived="20070207223756" -->
<!-- sent="Wed, 7 Feb 2007 17:37:41 -0500" -->
<!-- isosent="20070207223741" -->
<!-- name="Alex Tumanov" -->
<!-- email="atumanov_at_[hidden]" -->
<!-- subject="Re: [OMPI users] first time user - can run mpi job SMP but not over cluster" -->
<!-- id="2453e2900702071437k20a13e97g5014253aa97ccaba_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c84311bb0702071243hdbe6077r52a263f20ae1f74f_at_mail.gmail.com" -->
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
<strong>From:</strong> Alex Tumanov (<em>atumanov_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-02-07 17:37:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2640.php">Alok G Singh: "[OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>Previous message:</strong> <a href="2638.php">Michael: "[OMPI users] install script issue"</a>
<li><strong>In reply to:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p><span class="quotelev1">&gt; mpirun -np 2 myprogram inputfile &gt;outputfile
</span><br>
There can be a whole host of issues with the way you run your
<br>
executable and/or the way you have the environment setup. First of
<br>
all, when you ssh into the node, does the environment automatically
<br>
get updated with correct Open MPI paths? I.e. LD_LIBRARY_PATH should
<br>
be correctly set to the OMPI lib directory, PATH should contain OMPI's
<br>
bin dir, etc. If this is not the case, you have two options:
<br>
a. create small /etc/profile.d scripts to set up those env. variables
<br>
b. use --prefix version when you invoke mpirun on the headnode
<br>
<p>Generally, it would be much more helpful if you provided the actual
<br>
output of running the commands you listed here.
<br>
<p><span class="quotelev1">&gt; mpirun --hostfile myhostfile -np 4 myprogram inputfile &gt;outputfile
</span><br>
Another issue I can think of is path specification to 'myprogram'. Do
<br>
you just cd into the directory where it resides and specify its name
<br>
only? Try to either specify an absolute path to the executable or path
<br>
relative to your homedir: ~/appdir/bin/appexec, assuming this location
<br>
is the same on all the nodes. If mpirun can't find your executable on
<br>
one of the nodes, it should report that as an error.
<br>
<p><span class="quotelev1">&gt; which does not write to the output file.
</span><br>
Does it write anything to stderr? You could also try invoking mpirun
<br>
with '--mca pls_rsh_agent ssh'
<br>
<p><span class="quotelev1">&gt; mpirun --hostfile myhostfile -np 4 `myprogram inputfile &gt;outputfile`
</span><br>
Are those backquotes?? I would recommend getting mpirun to invoke
<br>
something basic on all the participating nodes successfully first, try
<br>
mpirun --prefix /path/to/ompi/ --hostfile myhosfile --np 4 hostname
<br>
for instance. Nothing else will work until this does.
<br>
<p>These are just a few pointers to get you started. Hope this helps.
<br>
<p>Alex.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2640.php">Alok G Singh: "[OMPI users] OpenMPI C++ serialisation"</a>
<li><strong>Previous message:</strong> <a href="2638.php">Michael: "[OMPI users] install script issue"</a>
<li><strong>In reply to:</strong> <a href="2637.php">Mark Kosmowski: "[OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2649.php">Mark Kosmowski: "Re: [OMPI users] first time user - can run mpi job SMP but not over cluster"</a>
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
