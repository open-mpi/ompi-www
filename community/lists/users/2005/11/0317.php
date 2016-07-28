<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 11 19:10:13 2005" -->
<!-- isoreceived="20051112001013" -->
<!-- sent="Fri, 11 Nov 2005 17:09:41 -0700" -->
<!-- isosent="20051112000941" -->
<!-- name="Troy Telford" -->
<!-- email="ttelford_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="op.sz3pefk4ies9li_at_rygel.lnxi.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="45db6036d6bd9228e7d491edaf470fd5_at_open-mpi.org" -->
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
<strong>From:</strong> Troy Telford (<em>ttelford_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-11 19:09:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<li><strong>Previous message:</strong> <a href="0316.php">Jeff Squyres: "[O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0316.php">Jeff Squyres: "[O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Fri, 11 Nov 2005 13:12:13 -0700, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;  
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; At long last, 1.0rc5 is available for download.  It fixes all known
</span><br>
<span class="quotelev1">&gt; issues reported here on the mailing list.  We still have a few minor
</span><br>
<span class="quotelev1">&gt; issues to work out, but things appear to generally be working now.
</span><br>
<span class="quotelev1">&gt; Please try to break it:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 	<a href="http://www.open-mpi.org/software/v1.0/">http://www.open-mpi.org/software/v1.0/</a>
</span><br>
<p>OK.  All tests were also recompiled against RC5.
<br>
<p>Notes:
<br>
I haven't tested with the MVAPI or TCP interfaces yet; only GM, MX, and  
<br>
OpenIB.
<br>
<p>The good:  I don't have to use HPL_NO_MPI_DATATYPE to compile HPL or HPCC.
<br>
<p>The bad:
<br>
OpenIB frequently crashes with the error:
<br>
***************
<br>
[0,1,2][btl_openib_endpoint.c:135:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Operation now in progress[0,1,2d
<br>
[0,1,3][btl_openib_endpoint.c:135:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Operation now in progress
<br>
[0,1,3][btl_openib_component.c:655:mca_btl_openib_component_progress]  
<br>
error in posting pending send
<br>
[0,1,2][btl_openib_endpoint.c:135:mca_btl_openib_endpoint_post_send] error  
<br>
posting send request errno says Operation now in progress
<br>
[0,1,2][btl_openib_component.c:655:mca_btl_openib_component_progress]  
<br>
error in posting pending send
<br>
***************
<br>
This is a new issue; the last SVN build I made (around 8058) didn't have  
<br>
this problem.
<br>
<p>MX still quits HPL code (as well as IMB) with errors to the tune of:
<br>
***************
<br>
MX: assertion: &lt;&lt;not yet implemented&gt;&gt;  failed at line 281, file  
<br>
./mx__shmem.c
<br>
***************
<br>
<p>GM Still wedges itself when executing HPL code, as well as during the  
<br>
'com' test of presta.  Although it is able to get one iteration further  
<br>
in...
<br>

<br><p>
<p><hr>
<ul>
<li>application/bzip2 attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0317/OpenMPI_RC5.tar.bz2">OpenMPI_RC5.tar.bz2</a>
</ul>
<!-- attachment="OpenMPI_RC5.tar.bz2" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0318.php">Jonathan Day: "[O-MPI users] Tests with current version"</a>
<li><strong>Previous message:</strong> <a href="0316.php">Jeff Squyres: "[O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0316.php">Jeff Squyres: "[O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0321.php">Timothy S. Woodall: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
