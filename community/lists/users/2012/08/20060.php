<?
$subject_val = "[OMPI users] Accessing data member of MPI_File struct";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Aug 30 05:05:10 2012" -->
<!-- isoreceived="20120830090510" -->
<!-- sent="Thu, 30 Aug 2012 18:05:06 +0900" -->
<!-- isosent="20120830090506" -->
<!-- name="Ammar Ahmad Awan" -->
<!-- email="ammar.ahmad.awan_at_[hidden]" -->
<!-- subject="[OMPI users] Accessing data member of MPI_File struct" -->
<!-- id="CAGSPLMm_3dh5WDW2UQoVS3-hKvooJXwPguJ+d9WbxKAqX2__bw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Accessing data member of MPI_File struct<br>
<strong>From:</strong> Ammar Ahmad Awan (<em>ammar.ahmad.awan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-30 05:05:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Reply:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I am using a simple program to access MPI_File attributes. I know that the
<br>
API provides functions such as MPI_File_get_atomicity( ) but is there a way
<br>
to access them directly through code?
<br>
<p>Example:
<br>
<p>int atomicity;
<br>
<p>// method 1
<br>
printf(&quot;atomicity : %d&quot;, MPI_File_get_atomicity(fh,&amp;atomicity));
<br>
<p>// method 2
<br>
printf(&quot;atomicity : %d&quot;, fh-&gt;atomicity);
<br>
<p>Method 1 in the above code works fine as expected but method 2 give me the
<br>
following error
<br>
<p>error: dereferencing pointer to incomplete type
<br>
<p>Can anybody guide me on how to solve this problem.
<br>
<p>Kind Regards
<br>
-- Ammar
<br>
----------------------------------------------------------------------
<br>
Masters Student
<br>
Dept. Of Computer Engineering,
<br>
Kyung Hee University
<br>
----------------------------------------------------------------------
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20060/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20061.php">Shiqing Fan: "Re: [OMPI users] error compiling openmpi-1.6.1 on Windows 7"</a>
<li><strong>Previous message:</strong> <a href="20059.php">Randolph Pullen: "Re: [OMPI users] Infiniband performance Problem and stalling"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<li><strong>Reply:</strong> <a href="20064.php">Jeff Squyres: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
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
