<?
$subject_val = "[OMPI users] Is Datatype extent for INTEGER4 set incorrectly for files in OpenMPI 1.3?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 11 06:00:46 2009" -->
<!-- isoreceived="20090311100046" -->
<!-- sent="Wed, 11 Mar 2009 11:00:41 +0100" -->
<!-- isosent="20090311100041" -->
<!-- name="Manuel Holtgrewe" -->
<!-- email="holtgrewe_at_[hidden]" -->
<!-- subject="[OMPI users] Is Datatype extent for INTEGER4 set incorrectly for files in OpenMPI 1.3?" -->
<!-- id="beba99aa0903110300r1420427t56f4493c61ec427a_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Is Datatype extent for INTEGER4 set incorrectly for files in OpenMPI 1.3?<br>
<strong>From:</strong> Manuel Holtgrewe (<em>holtgrewe_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-11 06:00:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8394.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
<p>I think that the datatype extent for INTEGER4 is set incorrectly for files.
<br>
<p>Attached is a small program that shows the problem.  The juicy bits:
<br>
<p>&nbsp;&nbsp;MPI_Aint extent;
<br>
&nbsp;&nbsp;MPI_Type_extent(MPI_INTEGER, &amp;extent);
<br>
&nbsp;&nbsp;printf(&quot;MPI_Type_extent(MPI_INTEGER) == %d\n&quot;, extent);
<br>
&nbsp;&nbsp;MPI_Type_extent(MPI_INTEGER4, &amp;extent);
<br>
&nbsp;&nbsp;printf(&quot;MPI_Type_extent(MPI_INTEGER4) == %d\n&quot;, extent);
<br>
// ...
<br>
&nbsp;&nbsp;printf(&quot;f.Get_type_extent(MPI::INTEGER) == %d\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.Get_type_extent(MPI::INTEGER));
<br>
&nbsp;&nbsp;printf(&quot;f.Get_type_extent(MPI::INTEGER4) == %d\n&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;f.Get_type_extent(MPI::INTEGER4));
<br>
<p>The result is:
<br>
<p>MPI_Type_extent(MPI_INTEGER) == 4
<br>
MPI_Type_extent(MPI_INTEGER4) == 4
<br>
f.Get_type_extent(MPI::INTEGER) == 4
<br>
f.Get_type_extent(MPI::INTEGER4) == 2
<br>
<p>The program creates two files. This is the output when writing INTEGER values:
<br>
<p>$ hexdump -C test.integer.dat
<br>
00000000  44 00 00 00 41 00 00 00  41 00 00 00 01 00 00 00  |D...A...A.......|
<br>
00000010  00 00 00 00 00 00 00 00  00 00 00 00 00 00 00 00  |................|
<br>
<p>And this is the output when writing INTEGER4 values:
<br>
<p>$ hexdump -C test.integer4.dat
<br>
00000000  44 00 00 00 41 00 01 00  00 00 00 00 00 00 00 00  |D...A...........|
<br>
00000010  00 00 00 00 00 00 00 00  00 00 00 00 00 00 00 00  |................|
<br>
<p>Bests,
<br>
-- Manuel
<br>
<p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-8393/MpiFileBug.tar.gz">MpiFileBug.tar.gz</a>
</ul>
<!-- attachment="MpiFileBug.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8394.php">Yu Chen: "Re: [OMPI users] pcart_coords_f.c:74: error: lvalue required asdecrement operand"</a>
<li><strong>Previous message:</strong> <a href="8392.php">Jeff Squyres: "Re: [OMPI users] Upgrade from Open MPI 1.2 to 1.3"</a>
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
