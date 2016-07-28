<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 31 14:45:19 2009" -->
<!-- isoreceived="20090831184519" -->
<!-- sent="Mon, 31 Aug 2009 14:42:07 -0400" -->
<!-- isosent="20090831184207" -->
<!-- name="Sims, James S. Dr." -->
<!-- email="james.sims_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler" -->
<!-- id="D7A0423E5E193F40BE6E94126930C49307870F35D0_at_MBCLUSTER.xchange.nist.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="E5D6B9A1-8EDD-48DF-8575-9581F3625592_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler<br>
<strong>From:</strong> Sims, James S. Dr. (<em>james.sims_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-31 14:42:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After much more work on this problem, and isolating it better, I finally found a torque user who recognized the problem
<br>
and supplied the solution. Thanks to everyone on this list who responded to my request for help. Here is my revised statement
<br>
of the problem and the solution:
<br>
<p>On Fri, Aug 28, 2009 at 12:37 PM, Sims, James S. Dr.&lt;james.sims_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; I have a working 32 bit MPI code which works with either lam or openmpi. However
</span><br>
<span class="quotelev1">&gt; I have not been able to run this code in 64 bit mode. In attempting to isolate the
</span><br>
<span class="quotelev1">&gt; problem, I have replaced the MPI code with stubs so I can run it using mpirun -np 1 program
</span><br>
<span class="quotelev1">&gt; on a single processor. The code works fine as long as I don't run it within torque, and
</span><br>
<span class="quotelev1">&gt; dies with a segv early in the code if I run it within torque.
</span><br>
<p>jim,
<br>
<p>the pbs_mom inherits the limitations from the superuser at bootup.
<br>
<p>we had similar problems and just put:
<br>
<p># max locked memory, soft and hard limits for all PBS children
<br>
ulimit -H -l unlimited
<br>
ulimit -S -l 4096000
<br>
# stack size, soft and hard limits for all PBS children
<br>
ulimit -H -s unlimited
<br>
ulimit -S -s 1024000
<br>
<p>the following into /etc/rc.d/init.d/pbs_mom
<br>
<p>and had no more problems.
<br>
<p>cheers,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;axel.
<br>
<p><p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On Behalf Of Ralph Castain [rhc_at_[hidden]]
<br>
Sent: Friday, July 24, 2009 7:27 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Open MPI:Problem with 64-bit openMPI  andintel        compiler
<br>
<p>Good point.
<br>
<p>Other thing you might consider (though it is unlikely to be part of
<br>
this problem) is upgrading to 1.3.3. It probably isn't a good idea to
<br>
be using a release candidate for anything serious.
<br>
<p><p>On Jul 24, 2009, at 5:21 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jul 23, 2009, at 11:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 3. get a multi-node allocation and run &quot;pbsdsh echo $LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev2">&gt;&gt; and see what libs you are defaulting to on the other nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Be careful with this one; you want to ensure that your local shell
</span><br>
<span class="quotelev1">&gt; doesn't expand $LD_LIBRARY_PATH and simply display the same value on
</span><br>
<span class="quotelev1">&gt; all nodes.  It might be easiest to write a 2 line script and run that:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ cat myscript
</span><br>
<span class="quotelev1">&gt; #!/bin/sh
</span><br>
<span class="quotelev1">&gt; echo LD_LIB_PATH on `hostname` is: $LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; $ chmod +x myscript
</span><br>
<span class="quotelev1">&gt; $ pdsh myscript
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
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
<p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10526.php">Shaun Jackman: "Re: [OMPI users] mca_pml_ob1_send blocks"</a>
<li><strong>Previous message:</strong> <a href="10524.php">Ralph Castain: "Re: [OMPI users] rankfile error on openmpi/1.3.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/09/10549.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler"</a>
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
