<?
$subject_val = "[OMPI users] File locking in ADIO, OpenMPI 1.6.4";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  8 18:49:03 2014" -->
<!-- isoreceived="20140408224903" -->
<!-- sent="Tue, 8 Apr 2014 16:49:01 -0600" -->
<!-- isosent="20140408224901" -->
<!-- name="Daniel Milroy" -->
<!-- email="Daniel.Milroy_at_[hidden]" -->
<!-- subject="[OMPI users] File locking in ADIO, OpenMPI 1.6.4" -->
<!-- id="93B0BFDB4CD56A40BBAE7FB8D8984BF701211EEA13E2_at_EXC4.ad.colorado.edu" -->
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
<strong>Subject:</strong> [OMPI users] File locking in ADIO, OpenMPI 1.6.4<br>
<strong>From:</strong> Daniel Milroy (<em>Daniel.Milroy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-04-08 18:49:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24119.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="24117.php">Gus Correa: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Recently a couple of our users have experienced difficulties with compute jobs failing with OpenMPI 1.6.4 compiled against GCC 4.7.2, with the nodes running kernel 2.6.32-279.5.2.el6.x86_64.  The error is:
<br>
<p>File locking failed in ADIOI_Set_lock(fd 7,cmd F_SETLKW/7,type F_WRLCK/1,whence 0) with return value FFFFFFFF and errno 26.
<br>
- If the file system is NFS, you need to use NFS version 3, ensure that the lockd daemon is running on all the machines, and mount the directory with the 'noac' option (no attribute caching).
<br>
- If the file system is LUSTRE, ensure that the directory is mounted with the 'flock' option.
<br>
ADIOI_Set_lock:: Function not implemented
<br>
ADIOI_Set_lock:offset 0, length 8
<br>
<p>The file system in question is indeed Lustre, and mounting with flock isn't possible in our environment.  I recommended the following changes to the users' code:
<br>
<p>MPI_Info_set(info, &quot;collective_buffering&quot;, &quot;true&quot;);
<br>
MPI_Info_set(info, &quot;romio_lustre_ds_in_coll&quot;, &quot;disable&quot;);
<br>
MPI_Info_set(info, &quot;romio_ds_read&quot;, &quot;disable&quot;);
<br>
MPI_Info_set(info, &quot;romio_ds_write&quot;, &quot;disable&quot;);
<br>
<p>Which results in the same error as before.  Are there any other MPI options I can set?
<br>
<p><p>Thank you in advance for any advice,
<br>
<p>Dan Milroy
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24118/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24119.php">Anthony Alba: "Re: [OMPI users] mca_coll_hcoll.so: undefined symbol hcoll_group_destroy_notify"</a>
<li><strong>Previous message:</strong> <a href="24117.php">Gus Correa: "Re: [OMPI users] openmpi query"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="24153.php">Jeff Squyres (jsquyres): "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<li><strong>Reply:</strong> <a href="24189.php">Rob Latham: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
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
