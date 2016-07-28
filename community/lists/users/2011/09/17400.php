<?
$subject_val = "[OMPI users] maximum size for read buffer in  MPI_File_read/write";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 22 17:43:05 2011" -->
<!-- isoreceived="20110922214305" -->
<!-- sent="Thu, 22 Sep 2011 23:37:10 +0200" -->
<!-- isosent="20110922213710" -->
<!-- name="German Hoecht" -->
<!-- email="german.hoecht_at_[hidden]" -->
<!-- subject="[OMPI users] maximum size for read buffer in  MPI_File_read/write" -->
<!-- id="4E7BAA86.50105_at_googlemail.com" -->
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
<strong>Subject:</strong> [OMPI users] maximum size for read buffer in  MPI_File_read/write<br>
<strong>From:</strong> German Hoecht (<em>german.hoecht_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-22 17:37:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17401.php">Tom Hilinski: "[OMPI users] on cluster job slowdown near end"</a>
<li><strong>Previous message:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Reply:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>MPI_File_read/write functions uses  an integer to specify the size of
<br>
the buffer, for instance:
<br>
int MPI_File_read(MPI_File fh, void *buf, int count, MPI_Datatype
<br>
datatype, MPI_Status *status)
<br>
with:
<br>
count     Number of elements in buffer (integer).
<br>
datatype  Data type of each buffer element (handle).
<br>
<p>However, using the maximum value of 32 bytes integers:
<br>
count = 2^31-1 = 2147483647 (and datatype = MPI_BYTE)
<br>
MPI_file_read only reads  2^31-2^12 = 2147479552 bytes.
<br>
This means that 4095 bytes are ignored.
<br>
<p>I am not aware of this specific limit for integers in (Open) MPI
<br>
function calls. Is this supposed to be correct?
<br>
<p>MPI_File_read/write does not return an error (but MPI_Get_count states
<br>
that only 2147479552 bytes are considered). Find attached a C++ code
<br>
example which tries to write and read 2^31-1 bytes.
<br>
<p>I am using Open MPI 1.4.2 compiled with the Intel compiler.
<br>
<p>Best regards,
<br>
German
<br>
<p>
<br><hr>
<ul>
<li>text/x-c++src attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17400/main.cpp">main.cpp</a>
</ul>
<!-- attachment="main.cpp" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17401.php">Tom Hilinski: "[OMPI users] on cluster job slowdown near end"</a>
<li><strong>Previous message:</strong> <a href="17399.php">Jeff Squyres: "Re: [OMPI users] openmpi -cc=&lt;compiler name&gt; option"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
<li><strong>Reply:</strong> <a href="17453.php">Rob Latham: "Re: [OMPI users] maximum size for read buffer in MPI_File_read/write"</a>
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
