<?
$subject_val = "[OMPI devel] Scaling down open mpi for embedded application";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Mar 19 02:10:55 2016" -->
<!-- isoreceived="20160319061055" -->
<!-- sent="Sat, 19 Mar 2016 11:40:53 +0530" -->
<!-- isosent="20160319061053" -->
<!-- name="Monika Hemnani" -->
<!-- email="hemnanimt1_at_[hidden]" -->
<!-- subject="[OMPI devel] Scaling down open mpi for embedded application" -->
<!-- id="CA+Lkxs+iZ_FKSWRGESGXTF--kgXCrb5sgSPZ6FdWQyJWL1TvOg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] Scaling down open mpi for embedded application<br>
<strong>From:</strong> Monika Hemnani (<em>hemnanimt1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-19 02:10:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Previous message:</strong> <a href="18713.php">Nathan Hjelm: "Re: [OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Reply:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am building a multiprocessor system with soft-core processor(Microblaze)
<br>
and operating system xilkernel(OS from xilinx). I want to scale down Open
<br>
mpi with the the functionality of mainly  sending and recieving only. Also
<br>
I want the MPI library to have a low memory footprint(in kBs).
<br>
<p>As my OS is not linux, I cannot install Open mpi. So I took all the .c and
<br>
.h files of of Open mpi 1.4.5 and started compiling it.
<br>
Then I was planning to remove the files which won't be used by me.So I will
<br>
be having only the files of desired functionality and also get lesser
<br>
memory footprint.
<br>
<p>But when I started building the full Open mpi. I got many errors which I'm
<br>
unable to solve.
<br>
<p>Can you please tell me, is my approach right?
<br>
If not, what should be my approach?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-18714/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Previous message:</strong> <a href="18713.php">Nathan Hjelm: "Re: [OMPI devel] mca_btl_&lt;name&gt;_prepare_dst"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
<li><strong>Reply:</strong> <a href="18715.php">Gilles Gouaillardet: "Re: [OMPI devel] Scaling down open mpi for embedded application"</a>
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
