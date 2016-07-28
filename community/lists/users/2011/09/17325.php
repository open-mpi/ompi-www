<?
$subject_val = "[OMPI users] Open MPI and Objective C";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Sep 18 22:21:01 2011" -->
<!-- isoreceived="20110919022101" -->
<!-- sent="Sun, 18 Sep 2011 22:20:46 -0400" -->
<!-- isosent="20110919022046" -->
<!-- name="Scott Wilcox" -->
<!-- email="scott.a.wilcox_at_[hidden]" -->
<!-- subject="[OMPI users] Open MPI and Objective C" -->
<!-- id="8DF79BA0-DE78-4346-B749-CCA7B2F0BF8F_at_verizon.net" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Open MPI and Objective C<br>
<strong>From:</strong> Scott Wilcox (<em>scott.a.wilcox_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-18 22:20:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17326.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17324.php">Evghenii Gaburov: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have been asked to convert some C++ code using Open MPI to Objective C and I am having problems getting a simple Obj C program to compile.  I have searched through the FAQs and have not found anything specific.  Is it an incorrect assumption that the C interfaces work with Obj C, or am I missing something?
<br>
<p>Thanks in advance for your help!
<br>
Scott
<br>
&nbsp;&nbsp;
<br>
<p>open MPI version: 1.4.3
<br>
OSX 10.5.1
<br>
<p>file: main.m
<br>
<p>#import &lt;Foundation/Foundation.h&gt;
<br>
#import &quot;mpi.h&quot;
<br>
<p>int main (int argc, char** argv)
<br>
<p>{
<br>
&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;// Variable Declaration
<br>
&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;int theRank;
<br>
&nbsp;&nbsp;&nbsp;int theSize;
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;// Initializing Message Passing Interface
<br>
&nbsp;&nbsp;&nbsp;//***
<br>
&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);   
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD,&amp;theSize);   
<br>
&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;theRank);
<br>
&nbsp;&nbsp;&nbsp;//*** end
<br>
&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;NSLog(@&quot;Executing open MPI Objective C&quot;);
<br>
<p>}
<br>
<p>Compile:
<br>
<p>[87]UNC ONLY: SAW&gt;mpicc main.m -o test
<br>
Undefined symbols:
<br>
&nbsp;&nbsp;&quot;___CFConstantStringClassReference&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;cfstring=Executing open MPI Objective C in ccj1AlL9.o
<br>
&nbsp;&nbsp;&quot;_NSLog&quot;, referenced from:
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;_main in ccj1AlL9.o
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17326.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17324.php">Evghenii Gaburov: "Re: [OMPI users] custom sparse collective non-reproducible deadlock, MPI_Sendrecv, MPI_Isend/MPI_Irecv or MPI_Send/MPI_Recv 	question"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
<li><strong>Reply:</strong> <a href="17333.php">Ralph Castain: "Re: [OMPI users] Open MPI and Objective C"</a>
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
