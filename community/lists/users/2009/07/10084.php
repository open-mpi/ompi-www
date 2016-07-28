<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 07:28:14 2009" -->
<!-- isoreceived="20090724112814" -->
<!-- sent="Fri, 24 Jul 2009 05:27:59 -0600" -->
<!-- isosent="20090724112759" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler" -->
<!-- id="E5D6B9A1-8EDD-48DF-8575-9581F3625592_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="EC9CBF07-2CCF-415F-B053-5D5FAAB9097D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 07:27:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10093.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10093.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Good point.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10083.php">Jeff Squyres: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10093.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10093.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/08/10525.php">Sims, James S. Dr.: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI	andintel	compiler"</a>
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
