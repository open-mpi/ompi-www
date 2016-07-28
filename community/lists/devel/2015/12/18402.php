<?
$subject_val = "Re: [OMPI devel] Problem with the 1.8.8 version";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  4 09:52:41 2015" -->
<!-- isoreceived="20151204145241" -->
<!-- sent="Fri, 4 Dec 2015 15:52:32 +0100" -->
<!-- isosent="20151204145232" -->
<!-- name="Baldassari Caroline" -->
<!-- email="carolineb_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Problem with the 1.8.8 version" -->
<!-- id="5661A8B0.5020704_at_sgi.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="5661A760.80609_at_sgi.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Problem with the 1.8.8 version<br>
<strong>From:</strong> Baldassari Caroline (<em>carolineb_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-04 09:52:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18403.php">Christopher Samuel: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Previous message:</strong> <a href="18401.php">Gilles Gouaillardet: "[OMPI devel] issue with MPI_DISPLACEMENT_CURRENT and use mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18403.php">Christopher Samuel: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Reply:</strong> <a href="18403.php">Christopher Samuel: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Maybe reply:</strong> <a href="18406.php">Baldassari Caroline: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have installed OpenMPI 1.8.8 (the last version 1.8.8 downloaded on 
<br>
your site) on a cluster using SLES 11 SP3 with OFED 1.5.4 and I have the 
<br>
problem:
<br>
XRC error: bad XRC API (require XRC from OFED pre 3.12) like described in:
<br>
<a href="http://www.open-mpi.org/community/lists/users/2015/08/27407.php">http://www.open-mpi.org/community/lists/users/2015/08/27407.php</a>
<br>
and
<br>
<a href="http://www.open-mpi.org/community/lists/devel/2015/08/17729.php">http://www.open-mpi.org/community/lists/devel/2015/08/17729.php</a>
<br>
<p>I saw the fix of Gilles in <a href="https://github.com/open-mpi/ompi/pull/782">https://github.com/open-mpi/ompi/pull/782</a> but 
<br>
the problem is that I don't have the files:
<br>
config/opal_check_openfabrics.m4
<br>
and
<br>
opal/mca/btl/openib/btl_open_xrc.c
<br>
<p>I have, instead, this two files:
<br>
config/ompi_check_openfabrics.m4
<br>
and
<br>
ompi/mca/btl/openib/btl_open_xrc.c
<br>
<p>I tried to simply modify this two files like in the fix but I didn't 
<br>
manage to do the make all...
<br>
<p>So I have 2 questions:
<br>
Is it the good version that I have donwloaded?
<br>
How can I have the fix?
<br>
<p>Thanks in advance.
<br>
Best regards.
<br>
Caroline Baldassari (SGI)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18403.php">Christopher Samuel: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Previous message:</strong> <a href="18401.php">Gilles Gouaillardet: "[OMPI devel] issue with MPI_DISPLACEMENT_CURRENT and use mpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18403.php">Christopher Samuel: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Reply:</strong> <a href="18403.php">Christopher Samuel: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
<li><strong>Maybe reply:</strong> <a href="18406.php">Baldassari Caroline: "Re: [OMPI devel] Problem with the 1.8.8 version"</a>
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
