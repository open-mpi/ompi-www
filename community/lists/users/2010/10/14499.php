<?
$subject_val = "[OMPI users] Open MPI dynamic data structure error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 19 16:40:54 2010" -->
<!-- isoreceived="20101019204054" -->
<!-- sent="Tue, 19 Oct 2010 14:40:50 -0600" -->
<!-- isosent="20101019204050" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI dynamic data structure error" -->
<!-- id="SNT134-w4617C2DC29C6B6C6EEB7C1CB5B0_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI dynamic data structure error<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-19 16:40:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14500.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Previous message:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>Reply:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
I need to design a data structure to transfer data between nodes on Open MPI system. 
<br>
Some elements of the the structure has dynamic size. 
<br>
For example, 
<br>
typedef struct{
<br>
double data1;vector&lt;double&gt; dataVec; 
<br>
} myDataType;
<br>
The size of the dataVec depends on some intermidiate computing results.
<br>
If I only declear it as the above myDataType, I think, only a pointer is transfered. 
<br>
When the data receiver try to access the elements of vector&lt;double&gt; dataVec, it got segmentation fault error.
<br>
But, I also need to use the myDataType to declear other data structures. 
<br>
such as vector&lt;myDataType&gt; newDataVec;
<br>
I cannot declear myDataType in a function , sucjh as main(), I got errors: 
<br>
&nbsp;main.cpp:200: error: main(int, char**)::myDataType; uses local type main(int, char**)::myDataType;
<br>
<p>Any help is really appreciated. 
<br>
thanks
<br>
Jack
<br>
Oct. 19 2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14499/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14500.php">Jeff Squyres: "Re: [OMPI users] openmpi 1.5 build from rpm fails: --program-prefix now checked in configure"</a>
<li><strong>Previous message:</strong> <a href="14498.php">Richard Treumann: "Re: [OMPI users] a question about [MPI]IO on systems	without network filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
<li><strong>Reply:</strong> <a href="14511.php">Jeff Squyres: "Re: [OMPI users] Open MPI dynamic data structure error"</a>
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
