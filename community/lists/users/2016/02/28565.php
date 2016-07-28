<?
$subject_val = "[OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 22 13:18:33 2016" -->
<!-- isoreceived="20160222181833" -->
<!-- sent="Mon, 22 Feb 2016 18:18:30 +0000" -->
<!-- isosent="20160222181830" -->
<!-- name="Mark Potter" -->
<!-- email="mpotter_at_[hidden]" -->
<!-- subject="[OMPI users] (no subject)" -->
<!-- id="22980C161B0F8D4EA7BEDBE328BC53600406722795_at_hou-ex01.pcpcdirect.com" -->
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
<strong>Subject:</strong> [OMPI users] (no subject)<br>
<strong>From:</strong> Mark Potter (<em>mpotter_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-02-22 13:18:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28566.php">Mike Dubman: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="28566.php">Mike Dubman: "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am usually able to find the answer to my problems by searching the archive but I've run up against one that I can't suss out.
<br>
<p>bison-opt: relocation error: /home/pbme002/opt/gcc-4.8.2-tpls/openmpi-1.8.4/lib/libmpi.so.1: symbol rdma_get_src_port, version RDMACM_1.0 not defined in file librdmacm.so.1 with link time reference
<br>
<p>There is the error I am getting, the problem is that it's not consistent. This happens to a random few jobs in a series of the same job on different data sets. The ones that fail and produce the error run fine when a second attempt is made. I am the admin for this cluster and the user is using their own compiled OpenMPI and not the system OpenMPI so I can't say for certain that it was compiled correctly but it strikes me as odd that jobs would fail with the above error but run perfectly fine when a second attempt is made.
<br>
<p>I'm looking for any help sussing out what could be causing this issue.
<br>
<p>Regards,
<br>
<p>Mark L. Potter
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28565/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28566.php">Mike Dubman: "Re: [OMPI users] (no subject)"</a>
<li><strong>Previous message:</strong> <a href="28564.php">Tyler Benster: "Re: [OMPI users] Open MPI fails to open CUDA libraries on OS X"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/04/1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/04/3031.php">JiaXing Cai: "Re: [OMPI users] (no subject)"</a>
<li><strong>Reply:</strong> <a href="28566.php">Mike Dubman: "Re: [OMPI users] (no subject)"</a>
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
