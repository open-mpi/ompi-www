<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Nov 29 13:44:00 2005" -->
<!-- isoreceived="20051129184400" -->
<!-- sent="Tue, 29 Nov 2005 10:43:56 -0800" -->
<!-- isosent="20051129184356" -->
<!-- name="Dale Harris" -->
<!-- email="rodmur_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] problems with bproc cluster" -->
<!-- id="20051129184356.GU13600_at_maybe.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="200511290952.19206.ouellet_at_amnh.org" -->
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
<strong>From:</strong> Dale Harris (<em>rodmur_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-29 13:43:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>Previous message:</strong> <a href="0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0412.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 2005-11-29 at 09:52, John Ouellette &lt;ouellet_at_[hidden]&gt; elucidated:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ldd /usr/local/intel-libs/9.0/bin/orted
</span><br>
<span class="quotelev1">&gt; /proc/self/fd/3: line 125: cat: command not found
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>ldd is a shell script and therefore there could be problems on bproc.
<br>
The shell script gets loaded into the process space and that is how it
<br>
is accessed on the slave node is via the fd/3 file descriptor
<br>
<p>If you modify ldd and put in a /bin/cat for cat, it might work... but
<br>
I'm not sure my memory of bproc is lapsing.
<br>
<p><p>Dale
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0407.php">Jeff Squyres: "Re: [O-MPI users] MPI_Offset and C++ interface"</a>
<li><strong>Previous message:</strong> <a href="0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
<li><strong>In reply to:</strong> <a href="0405.php">John Ouellette: "Re: [O-MPI users] problems with bproc cluster"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2005/12/0412.php">Tim S. Woodall: "Re: [O-MPI users] problems with bproc cluster"</a>
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
