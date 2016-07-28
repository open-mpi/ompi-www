<?
$subject_val = "[OMPI devel] Hangs on master";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 27 15:39:45 2016" -->
<!-- isoreceived="20160527193945" -->
<!-- sent="Fri, 27 May 2016 12:39:42 -0700" -->
<!-- isosent="20160527193942" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Hangs on master" -->
<!-- id="F75DF378-3683-4795-8B2F-8B934BE0E6AC_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI devel] Hangs on master<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-27 15:39:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19047.php">Jeff Squyres (jsquyres): "[OMPI devel] Git .mailcap update"</a>
<li><strong>Previous message:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey folks
<br>
<p>MTT is reporting a massive wave of hangs on master from last night - they all look like this:
<br>
<p>libibverbs: Warning: couldn't load driver 'cxgb3': libcxgb3-rdmav2.so: cannot open shared object
<br>
file: No such file or directory
<br>
libibverbs: Warning: couldn't load driver 'mthca': libmthca-rdmav2.so: cannot open shared object
<br>
file: No such file or directory
<br>
libibverbs: Warning: couldn't load driver 'mlx4': libmlx4-rdmav2.so: cannot open shared object file:
<br>
No such file or directory
<br>
libibverbs: Warning: couldn't load driver 'usnic_verbs': libusnic_verbs-rdmav2.so: cannot open
<br>
shared object file: No such file or directory
<br>
libibverbs: Warning: couldn't load driver 'ipathverbs': libipathverbs-rdmav2.so: cannot open shared
<br>
object file: No such file or directory
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs2
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs1
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs0--------------------------------------------------------------------------
<br>
It appears as if there is not enough space for
<br>
/tmp/openmpi-sessions-1001_at_mpi012_0/41788/1/shared_mem_pool.mpi012 (the shared-memory backing
<br>
file). It is likely that your MPI job will now either abort or experience
<br>
performance degradation.
<br>
<p>&nbsp;&nbsp;Local host:  mpi012
<br>
&nbsp;&nbsp;Space Requested: 134217736 B
<br>
&nbsp;&nbsp;Space Available: 22097920 B
<br>
--------------------------------------------------------------------------[mpi012:28580]
<br>
create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728 
<br>
<p>[warn] Epoll ADD(4) on fd 81 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 71 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 90 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 82 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 80 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 68 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 79 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 85 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 87 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 83 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 88 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 86 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 77 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 74 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 84 failed.  Old events were 0; read change was 0 (none); write change was
<br>
1 (add): Bad file descriptor
<br>
[warn] Epoll ADD(4) on fd 89 failed.  Old events were 0; read change was 0 (none); write change was
<br>
<p><p>I realize that this indicates a problem on the Cisco MTT cluster, but we should handle it better than to just poll endlessly until timeout, yes?
<br>
Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19047.php">Jeff Squyres (jsquyres): "[OMPI devel] Git .mailcap update"</a>
<li><strong>Previous message:</strong> <a href="19045.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.10.3rc status"</a>
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
