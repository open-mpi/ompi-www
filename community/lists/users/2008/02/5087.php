<?
$subject_val = "[OMPI users] Cannot build 1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 27 14:51:44 2008" -->
<!-- isoreceived="20080227195144" -->
<!-- sent="Wed, 27 Feb 2008 14:51:38 -0500" -->
<!-- isosent="20080227195138" -->
<!-- name="Teige,  Scott W" -->
<!-- email="steige_at_[hidden]" -->
<!-- subject="[OMPI users] Cannot build 1.2.5" -->
<!-- id="20080227145138.gmei6ow7k8wg40og_at_webmail.iu.edu" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Cannot build 1.2.5<br>
<strong>From:</strong> Teige,  Scott W (<em>steige_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-27 14:51:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5086.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Reply:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>Attempting a build of 1.2.5 on a ppc machine, particulars:
<br>
<p><span class="quotelev1">&gt; uname -a
</span><br>
Linux s10c2b2 2.6.5-7.286-pseries64-lustre-1.4.10.1 #2 SMP Tue Jun 26 
<br>
11:36:04 EDT 2007 ppc64 ppc64 ppc64 GNU/Linux
<br>
<p>Error message (many times)
<br>
<p>../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x0): In function 
<br>
`__argz_next':
<br>
: multiple definition of `__argz_next'
<br>
../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x0): first 
<br>
defined here
<br>
<p>Output from ./configure  and make all is attached.
<br>
<p>Thanks for the help,
<br>
S.
<br>
<p>


<br><p>
<p><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5087/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5087/config.out.gz">config.out.gz</a>
</ul>
<!-- attachment="config.out.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5087/make.out.gz">make.out.gz</a>
</ul>
<!-- attachment="make.out.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Previous message:</strong> <a href="5086.php">George Bosilca: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with MPI_Reduce and MPI_Gather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<li><strong>Reply:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
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
