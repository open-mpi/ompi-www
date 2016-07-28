<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  2 00:17:53 2009" -->
<!-- isoreceived="20090902041753" -->
<!-- sent="Wed, 2 Sep 2009 07:17:37 +0300" -->
<!-- isosent="20090902041737" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler" -->
<!-- id="55F71359-D972-493C-8EB7-BB637E7CCCEA_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="D7A0423E5E193F40BE6E94126930C49307870F35D0_at_MBCLUSTER.xchange.nist.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bitopenMPI	andintel	compiler<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-02 00:17:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Previous message:</strong> <a href="10548.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting.  So to recap, just so that I understand, was the problem  
<br>
that Torque was restricting the stack size of your application  
<br>
processes (which apparently was only problematic in 64 bit mode  
<br>
applications)?
<br>
<p><p>On Aug 31, 2009, at 9:42 PM, Sims, James S. Dr. wrote:
<br>
<p><span class="quotelev1">&gt; After much more work on this problem, and isolating it better, I  
</span><br>
<span class="quotelev1">&gt; finally found a torque user who recognized the problem
</span><br>
<span class="quotelev1">&gt; and supplied the solution. Thanks to everyone on this list who  
</span><br>
<span class="quotelev1">&gt; responded to my request for help. Here is my revised statement
</span><br>
<span class="quotelev1">&gt; of the problem and the solution:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, Aug 28, 2009 at 12:37 PM, Sims, James S. Dr.&lt;james.sims_at_[hidden] 
</span><br>
<span class="quotelev2">&gt; &gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I have a working 32 bit MPI code which works with either lam or  
</span><br>
<span class="quotelev1">&gt; openmpi. However
</span><br>
<span class="quotelev2">&gt; &gt; I have not been able to run this code in 64 bit mode. In  
</span><br>
<span class="quotelev1">&gt; attempting to isolate the
</span><br>
<span class="quotelev2">&gt; &gt; problem, I have replaced the MPI code with stubs so I can run it  
</span><br>
<span class="quotelev1">&gt; using mpirun -np 1 program
</span><br>
<span class="quotelev2">&gt; &gt; on a single processor. The code works fine as long as I don't run  
</span><br>
<span class="quotelev1">&gt; it within torque, and
</span><br>
<span class="quotelev2">&gt; &gt; dies with a segv early in the code if I run it within torque.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; jim,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the pbs_mom inherits the limitations from the superuser at bootup.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; we had similar problems and just put:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # max locked memory, soft and hard limits for all PBS children
</span><br>
<span class="quotelev1">&gt; ulimit -H -l unlimited
</span><br>
<span class="quotelev1">&gt; ulimit -S -l 4096000
</span><br>
<span class="quotelev1">&gt; # stack size, soft and hard limits for all PBS children
</span><br>
<span class="quotelev1">&gt; ulimit -H -s unlimited
</span><br>
<span class="quotelev1">&gt; ulimit -S -s 1024000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the following into /etc/rc.d/init.d/pbs_mom
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and had no more problems.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt;     axel.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ________________________________________
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] On  
</span><br>
<span class="quotelev1">&gt; Behalf Of Ralph Castain [rhc_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; Sent: Friday, July 24, 2009 7:27 AM
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] Open MPI:Problem with 64-bit openMPI   
</span><br>
<span class="quotelev1">&gt; andintel        compiler
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Good point.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Other thing you might consider (though it is unlikely to be part of
</span><br>
<span class="quotelev1">&gt; this problem) is upgrading to 1.3.3. It probably isn't a good idea to
</span><br>
<span class="quotelev1">&gt; be using a release candidate for anything serious.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jul 24, 2009, at 5:21 AM, Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Jul 23, 2009, at 11:14 PM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 3. get a multi-node allocation and run &quot;pbsdsh echo  
</span><br>
<span class="quotelev1">&gt; $LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; and see what libs you are defaulting to on the other nodes.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Be careful with this one; you want to ensure that your local shell
</span><br>
<span class="quotelev2">&gt; &gt; doesn't expand $LD_LIBRARY_PATH and simply display the same value on
</span><br>
<span class="quotelev2">&gt; &gt; all nodes.  It might be easiest to write a 2 line script and run  
</span><br>
<span class="quotelev1">&gt; that:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; $ cat myscript
</span><br>
<span class="quotelev2">&gt; &gt; #!/bin/sh
</span><br>
<span class="quotelev2">&gt; &gt; echo LD_LIB_PATH on `hostname` is: $LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt; &gt; $ chmod +x myscript
</span><br>
<span class="quotelev2">&gt; &gt; $ pdsh myscript
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10550.php">Jeff Squyres: "Re: [OMPI users] OpenMPI code snippet causes a dead loop"</a>
<li><strong>Previous message:</strong> <a href="10548.php">Jeff Squyres: "Re: [OMPI users] OpenMPI 1.3.3 with Boost.MPI ?"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/07/10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
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
