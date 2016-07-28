<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Aug 25 10:38:56 2005" -->
<!-- isoreceived="20050825153856" -->
<!-- sent="Thu, 25 Aug 2005 08:38:49 -0700 (PDT)" -->
<!-- isosent="20050825153849" -->
<!-- name="Raul Mosquera" -->
<!-- email="raulysich2_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] How pass an structure" -->
<!-- id="20050825153849.10978.qmail_at_web50713.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="Pine.WNT.4.63.0508221214240.3372_at_blackbox" -->
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
<strong>From:</strong> Raul Mosquera (<em>raulysich2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-25 10:38:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Previous message:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0111.php">George Bosilca: "Re: [O-MPI users] How pass an array??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Reply:</strong> <a href="0122.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Reply:</strong> <a href="0123.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi:
<br>
<p>I'm trying to pass an structure which is defined like this 
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &quot;mpi.h&quot;
<br>
<p>#define NELEM 6
<br>
<p><p>&nbsp;struct{
<br>
&nbsp;&nbsp;&nbsp;int num_Rows;
<br>
&nbsp;&nbsp;&nbsp;int num_Cols;
<br>
&nbsp;&nbsp;&nbsp;int element[NELEM];
<br>
<p>&nbsp;&nbsp;&nbsp;}send_pack;
<br>
<p><p>//num_Rows and num_Cols identify the matrix being passed in the array element.
<br>
<p>// Variable declaration
<br>
&nbsp;&nbsp;&nbsp;int rank,size,tag=1,source=0,dest;
<br>
&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
<p>&nbsp;&nbsp;&nbsp;int lena[2] ; // This is for the length of the elements holding
<br>
&nbsp;&nbsp;&nbsp;MPI_Aint  loca[2], extent; //localization
<br>
&nbsp;&nbsp;&nbsp;MPI_Datatype typa[2];
<br>
&nbsp;&nbsp;&nbsp;MPI_Datatype MY_TYPE;
<br>
&nbsp;&nbsp;&nbsp;//MPI_Type_extent(MPI_INT,&amp;extent);
<br>
<p>&nbsp;&nbsp;&nbsp;typa[0]=MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;typa[1]=MPI_INT;
<br>
&nbsp;&nbsp;&nbsp;lena[0]=1;
<br>
&nbsp;&nbsp;&nbsp;lena[1]=NELEM;
<br>
&nbsp;&nbsp;&nbsp;loca[0]=0;
<br>
&nbsp;&nbsp;&nbsp;loca[1]= 2 * extent;
<br>
<p>&nbsp;
<br>
<p>The structure is being created like this
<br>
<p>&nbsp;MPI_Type_struct(1,lena,loca,typa,&amp;MY_TYPE);
<br>
&nbsp;MPI_Type_commit(&amp;MY_TYPE); //creates the structure
<br>
<p><p>When sending ...
<br>
<p>&nbsp;MPI_Send(&amp;send_pack,1,MY_TYPE,1,tag,MPI_COMM_WORLD);
<br>
<p>When Receiving 
<br>
<p>MPI_Recv(&amp;send_pack,1,MY_TYPE,0,tag,MPI_COMM_WORLD,&amp;status);
<br>
<p><p>The program sends the message but it shows errors on the other side.
<br>
<p>&nbsp;My guess is that the parameters in the MPI_Send are not declare in the proper way.
<br>
<p>Can you guys help me understandig what I'm doing wrong.
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-0121/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0122.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Previous message:</strong> <a href="0120.php">Jeff Squyres: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<li><strong>In reply to:</strong> <a href="0111.php">George Bosilca: "Re: [O-MPI users] How pass an array??"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0122.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Reply:</strong> <a href="0122.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
<li><strong>Reply:</strong> <a href="0123.php">George Bosilca: "Re: [O-MPI users] How pass an structure"</a>
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
