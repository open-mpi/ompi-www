<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 25 00:22:14 2009" -->
<!-- isoreceived="20090725042214" -->
<!-- sent="Sat, 25 Jul 2009 00:21:08 -0400" -->
<!-- isosent="20090725042108" -->
<!-- name="Sims, James S. Dr." -->
<!-- email="james.sims_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler" -->
<!-- id="D7A0423E5E193F40BE6E94126930C49307852451B2_at_MBCLUSTER.xchange.nist.gov" -->
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
<strong>Date:</strong> 2009-07-25 00:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10094.php">Gijsbert Wiesenekker: "[OMPI users] GFS2 and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10092.php">Ralph Castain: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>In reply to:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks to all the responses. I've checked and I am using the proper 64-bit libs on all nodes. I'll
<br>
try upgrading to 1.3.3
<br>
<p>Jim
<br>
<p>________________________________________
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
<li><strong>Next message:</strong> <a href="10094.php">Gijsbert Wiesenekker: "[OMPI users] GFS2 and OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="10092.php">Ralph Castain: "Re: [OMPI users] Backwards compatibility?"</a>
<li><strong>In reply to:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
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
