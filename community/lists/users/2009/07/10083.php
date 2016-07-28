<?
$subject_val = "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jul 24 07:21:56 2009" -->
<!-- isoreceived="20090724112156" -->
<!-- sent="Fri, 24 Jul 2009 07:21:51 -0400" -->
<!-- isosent="20090724112151" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler" -->
<!-- id="EC9CBF07-2CCF-415F-B053-5D5FAAB9097D_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C6B79287-3DCB-49F4-86D7-BC8AA96842A1_at_open-mpi.org" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-24 07:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Jul 23, 2009, at 11:14 PM, Ralph Castain wrote:
<br>
<p><span class="quotelev1">&gt; 3. get a multi-node allocation and run &quot;pbsdsh echo $LD_LIBRARY_PATH&quot;
</span><br>
<span class="quotelev1">&gt; and see what libs you are defaulting to on the other nodes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p>Be careful with this one; you want to ensure that your local shell  
<br>
doesn't expand $LD_LIBRARY_PATH and simply display the same value on  
<br>
all nodes.  It might be easiest to write a 2 line script and run that:
<br>
<p>$ cat myscript
<br>
#!/bin/sh
<br>
echo LD_LIB_PATH on `hostname` is: $LD_LIBRARY_PATH
<br>
$ chmod +x myscript
<br>
$ pdsh myscript
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Previous message:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<li><strong>In reply to:</strong> <a href="10082.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI and intel	compiler"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10084.php">Ralph Castain: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPI andintel	compiler"</a>
<li><strong>Reply:</strong> <a href="10085.php">jimkress_58: "Re: [OMPI users] Open MPI:Problem with 64-bit openMPIandintel	compiler"</a>
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
