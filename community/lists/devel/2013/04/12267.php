<?
$subject_val = "[OMPI devel] Problem when using struct types at specific offsets";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr  8 10:08:14 2013" -->
<!-- isoreceived="20130408140814" -->
<!-- sent="Mon, 08 Apr 2013 16:08:07 +0200" -->
<!-- isosent="20130408140807" -->
<!-- name="Thomas Jahns" -->
<!-- email="jahns_at_[hidden]" -->
<!-- subject="[OMPI devel] Problem when using struct types at specific offsets" -->
<!-- id="5162CF47.5030407_at_dkrz.de" -->
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
<strong>Subject:</strong> [OMPI devel] Problem when using struct types at specific offsets<br>
<strong>From:</strong> Thomas Jahns (<em>jahns_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-08 10:08:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12268.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Previous message:</strong> <a href="12266.php">George Bosilca: "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12268.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Reply:</strong> <a href="12268.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>a colleague of mine has investigated a difficult problem we traced to OpenMPI
<br>
giving incorrectly delivered data on some struct datatypes which use specific
<br>
offsets (on the stack in our case but the problem can be reproduced when using
<br>
specifically chosen slices of an array). Our library is used to aggregate
<br>
several MPI communications in a generic and transparent manner and therefore we
<br>
need to be able to handle any combination of properly aligned offsets and
<br>
component types.
<br>
<p>The attached example program contains the necessary steps to reproduce the problem:
<br>
<p>1. create the struct types in question
<br>
2. send/recv the data
<br>
3. compare to reference (said comparison works on several MPICH2 versions)
<br>
<p>The code prints than any array indices/values not matching the reference.
<br>
<p>Our platform is linux x86_64 with Debian squeeze, the tested versions of OpenMPI
<br>
are the 1.4.2 version supplied with squeeze and 1.6.4 compiled ourselves. For
<br>
1.4.2 I also did a quick test in a i386 chroot and the code fails there too. gcc
<br>
4.6.1 was used for the x86_64 cases and gcc 4.3.5 for the i386 chroot.
<br>
<p>Sorry if the test is not of minimal size, but we were happy once he got this
<br>
down from several 10000 lines Fortran+C and even that took more than a day once
<br>
we understood the problem was unrelated to the Fortran program it originally
<br>
occurred in.
<br>
<p>When running the program with OpenMPI:
<br>
<p>$ mpicc -std=gnu99 ./mpi_test.c &amp;&amp; ./a.out
<br>
first tests:
<br>
second tests:
<br>
results_2[6]     = 8
<br>
ref_results_2[6] = 12
<br>
results_2[7]     = 9
<br>
ref_results_2[7] = 13
<br>
<p>MPICH gives the expected result:
<br>
$ /sw/squeeze-x64/mpi/mpich2-1.4.1p1-gccsys/bin/mpicc -std=gnu99 ./mpi_test.c &amp;&amp;
<br>
./a.out
<br>
first tests:
<br>
second tests:
<br>
<p>Regards, Thomas
<br>
<pre>
-- 
Thomas Jahns
DKRZ GmbH, Department: Application software
Deutsches Klimarechenzentrum
Bundesstra&#223;e 45a
D-20146 Hamburg
Phone: +49-40-460094-151
Fax: +49-40-460094-270
Email: Thomas Jahns &lt;jahns_at_[hidden]&gt;

</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12267/mpi_test.c">mpi_test.c</a>
</ul>
<!-- attachment="mpi_test.c" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12267/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12268.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Previous message:</strong> <a href="12266.php">George Bosilca: "Re: [OMPI devel] assert in opal_datatype_is_contiguous_memory_layout"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12268.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Reply:</strong> <a href="12268.php">George Bosilca: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2013/06/12479.php">Thomas Jahns: "Re: [OMPI devel] Problem when using struct types at specific offsets"</a>
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
