<?
$subject_val = "[OMPI users] error no=110 (Connection timeout)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Apr 26 23:50:13 2009" -->
<!-- isoreceived="20090427035013" -->
<!-- sent="Mon, 27 Apr 2009 09:20:04 +0530 (IST)" -->
<!-- isosent="20090427035004" -->
<!-- name="Rangesh Gupta" -->
<!-- email="rangeshgupta1_at_[hidden]" -->
<!-- subject="[OMPI users] error no=110 (Connection timeout)" -->
<!-- id="46542.24762.qm_at_web95410.mail.in2.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] error no=110 (Connection timeout)<br>
<strong>From:</strong> Rangesh Gupta (<em>rangeshgupta1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-26 23:50:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="9094.php">jan: "Re: [OMPI users] users Digest, Vol 1212, Issue 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9245.php">Jeff Squyres: "Re: [OMPI users] error no=110 (Connection timeout)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9245.php">Jeff Squyres: "Re: [OMPI users] error no=110 (Connection timeout)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I m facing problem while running Openfoam1.5&#160; the executable is
sonicTurbFoam with the help of openmpi it hang after some time, every
time it hang at different place. The Mpi command is
<br>
<p>&#160;mpirun
--mca btl_openib_if_include ib0 -mca btl_tcp_if_exclude lo,eth0,eth1
--mca btl_openib_ib_timeout 40 -n $NO_OF_PROCESS -machinefile $MYHOSTS
$1 -parallel
<br>
<p>We are using 64 processor on 8 nodes.
<br>
<p>I m submitting it with the help of lsf scheduler and internally it usage SLURM as a resource manager.  
<br>
<p>Error :
<br>
[n112][0,1,41][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
<p>[n112][0,1,43][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
<p>[n112][0,1,44][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
<p>[n112][0,1,44][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
<p>[n121][0,1,58][btl_tcp_frag.c:202:mca_btl_tcp_frag_recv] mca_btl_tcp_frag_recv: readv failed with errno=110
<br>
<p><p><p>I have seen all the blog but there is solution given.
<br>
<p>Thanks and Regards
<br>
Rangesh Gupta


      Now surf faster and smarter ! Check out the new Firefox 3 - Yahoo! Edition <a href="http://downloads.yahoo.com/in/firefox/">http://downloads.yahoo.com/in/firefox/</a>
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9095/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9096.php">Josh Hursey: "Re: [OMPI users] Checkpointing hangs with OpenMPI-1.3.1"</a>
<li><strong>Previous message:</strong> <a href="9094.php">jan: "Re: [OMPI users] users Digest, Vol 1212, Issue 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9245.php">Jeff Squyres: "Re: [OMPI users] error no=110 (Connection timeout)"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2009/05/9245.php">Jeff Squyres: "Re: [OMPI users] error no=110 (Connection timeout)"</a>
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
