<?
$subject_val = "[OMPI users] Send data structures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 12:28:25 2010" -->
<!-- isoreceived="20101012162825" -->
<!-- sent="Tue, 12 Oct 2010 11:28:20 -0500" -->
<!-- isosent="20101012162820" -->
<!-- name="Ed Peddycoart" -->
<!-- email="EPeddycoart_at_[hidden]" -->
<!-- subject="[OMPI users] Send data structures" -->
<!-- id="C5FD53FFC7D1704890B0B1FE85A004F6037B4BD1_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> [OMPI users] Send data structures<br>
<strong>From:</strong> Ed Peddycoart (<em>EPeddycoart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 12:28:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14448.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14446.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14449.php">Jeff Squyres: "Re: [OMPI users] Send data structures"</a>
<li><strong>Reply:</strong> <a href="14449.php">Jeff Squyres: "Re: [OMPI users] Send data structures"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The data that I want to send via MPI is in the form of a struct:
<br>
&nbsp;
<br>
struct myDataStruct {
<br>
&nbsp;&nbsp;&nbsp;struct subData1 {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int position[2];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int length[2];
<br>
&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;&nbsp;struct subData2 {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *data1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *data2;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *data3;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *data4;
<br>
&nbsp;&nbsp;&nbsp;};
<br>
&nbsp;&nbsp;&nbsp;struct subData3 {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;float *data;
<br>
&nbsp;&nbsp;&nbsp;};
<br>
};
<br>
&nbsp;
<br>
&nbsp;
<br>
At first I thought I could simply send the data as follows:  
<br>
&nbsp;
<br>
struct myDataStruct data = new myDataStruct;
<br>
// allocate and fill in data for sub structs
<br>
&nbsp;
<br>
MPI_SEND(data, sizeof(data), MPI_BYTE, 0, 19, MPI_COMM_WORLD);
<br>
&nbsp;
<br>
but apparently, for several reasons, that isn't going to work.  What is the best way to accomplish this? MPI_PACK/MPI_UNPACK?
<br>
&nbsp;
<br>
Would I do something like this?
<br>
&nbsp;
<br>
MPI_PACK(data-&gt;subData1-&gt;position, 2, MPI_INT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
<br>
MPI_PACK(data-&gt;subData1-&gt;length,  2, MPI_INT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
<br>
MPI_PACK(data-&gt;subData2-&gt;data1,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
<br>
MPI_PACK(data-&gt;subData2-&gt;data2,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD); 
<br>
MPI_PACK(data-&gt;subData2-&gt;data3,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD); 
<br>
MPI_PACK(data-&gt;subData2-&gt;data4,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
<br>
MPI_PACK(data-&gt;subData3-&gt;data1,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE,  &amp;packSize, MPI_COMM_WORLD);
<br>
MPI_Send(packBuffer, packSize, MPI_PACKED, 1, 100, , MPI_COMM_WORLD);
<br>
&nbsp;
<br>
Ed
<br>
&nbsp;
<br>
&nbsp;
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14447/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14448.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>Previous message:</strong> <a href="14446.php">Reuti: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14449.php">Jeff Squyres: "Re: [OMPI users] Send data structures"</a>
<li><strong>Reply:</strong> <a href="14449.php">Jeff Squyres: "Re: [OMPI users] Send data structures"</a>
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
