<?
$subject_val = "[OMPI users] What could cause a segfault in OpenMPI?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov  4 13:10:12 2014" -->
<!-- isoreceived="20141104181012" -->
<!-- sent="Tue, 4 Nov 2014 13:10:12 -0500" -->
<!-- isosent="20141104181012" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] What could cause a segfault in OpenMPI?" -->
<!-- id="CA+ssbKXhWKQqqNA4tv+HG3PW+Brcyorm2XN=RcmAzPRjcB3QBg_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] What could cause a segfault in OpenMPI?<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-11-04 13:10:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25667.php">Michael Di Domenico: "[OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am using OpenMPI 1.8.1 in a Linux cluster that we recently setup. It
<br>
builds fine, but when I try to run even the simplest hello.c program it'll
<br>
cause a segfault. Any suggestions on how to correct this?
<br>
<p>The steps I did and error message are below.
<br>
<p>1. Built OpenMPI 1.8.1 on the cluster. The ompi_info is attached.
<br>
2. cd to examples directory and mpicc hello_c.c
<br>
3. mpirun -np 2 ./a.out
<br>
4. Error text is attached.
<br>
<p>Please let me know if you need more info.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p><p><pre>
-- 
Saliya Ekanayake esaliya_at_[hidden]
Cell 812-391-4914 Home 812-961-6383
<a href="http://saliya.org">http://saliya.org</a>


</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25668/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25668/ompi_info.txt">ompi_info.txt</a>
</ul>
<!-- attachment="ompi_info.txt" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25668/error.txt">error.txt</a>
</ul>
<!-- attachment="error.txt" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Previous message:</strong> <a href="25667.php">Michael Di Domenico: "[OMPI users] ipath_userinit errors"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25669.php">Howard Pritchard: "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
<li><strong>Reply:</strong> <a href="25672.php">Jeff Squyres (jsquyres): "Re: [OMPI users] What could cause a segfault in OpenMPI?"</a>
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
