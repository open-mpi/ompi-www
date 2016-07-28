<?
$subject_val = "[OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 20 05:51:09 2012" -->
<!-- isoreceived="20120820095109" -->
<!-- sent="Mon, 20 Aug 2012 10:51:03 +0100 (BST)" -->
<!-- isosent="20120820095103" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_Irecv: Confusion with &amp;lt;&amp;lt;int count&amp;gt;&amp;gt; inputy parameter" -->
<!-- id="1345456263.30925.YahooMailNeo_at_web29606.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="706096FE-DB69-4F95-B141-8E04FCC3F5A3_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-20 05:51:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>Previous message:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>In reply to:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Community,

I have a problem understanding the API for MPI_Irecv:

int MPI_Irecv( void *buf, int count, MPI_Datatype datatype, int source, int tag, MPI_Comm comm, MPI_Request *request );  
Parameters
buf 
[in] initial address of receive buffer (choice) 
count 
[in] number of elements in receive buffer (integer) 
datatype 
[in] datatype of each receive buffer element (handle) 
source 
[in] rank of source (integer) 
tag 
[in] message tag (integer) 
comm 
[in] communicator (handle) 
request 
[out] communication request (handle) 

What exactly does &quot;count&quot; mean here? 

Is it the number of elements that have been received *thus far* in the buffer?
Or is it the number of elements that are expected to be received, and hence MPI_Test will tell me that the receive is not complete untill &quot;count&quot; number of elements have not been received?

Here's the reason why I have a problem (and I think I may be completely stupid here, I'd appreciate your patience):

I have node 1 transmit data to node 2, in a pack of 80 bytes:

Mon Aug 20 11:09:04 2012[1,1]&lt;stdout&gt;:&#160;&#160;&#160; Finished transmitting 80 bytes to 2 node with Tag 1000

On the receiving end:

MPI_Irecv(
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; (void*)this-&gt;receivebuffer,/* the receive buffer */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;receive_packetsize,&#160; /* 80 */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_BYTE,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* The data type expected */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;transmittingnode,&#160;&#160;&#160; /* The node from which to receive */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; this-&gt;uniquetag,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Tag */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_COMM_WORLD,&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* Communicator */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; &amp;Irecv_request&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; /* request handle */
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; );

I see that node 1 tells me that the transmit was successful using the MPI_Test:

MPI_Test(&amp;Isend_request, &amp;SendComplete, &amp;ISend_status);

which returns me &quot;true&quot; on Node 1 (sender).

However, I am never able to receive the payload on Node 2:

Mon Aug 20 11:09:04 2012[1,2]&lt;stdout&gt;:Attemting to receive payload from node 1 with tag 1000, receivepacketsize: 80


I am using MPI_Issend to send payload between node 1 and node 2.

Does anyone see what could be going wrong?

Thanks a lot

Devendra
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19959/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19960.php">EatDirt: "Re: [OMPI users] hangs of MPI_WIN_LOCK/UNLOCK (gfortran)"</a>
<li><strong>Previous message:</strong> <a href="19958.php">Christian Perrier: "Re: [OMPI users] issue with column type in language C"</a>
<li><strong>In reply to:</strong> <a href="19953.php">Jeff Squyres: "Re: [OMPI users] Openmpi ./configure error - Fortran compiling error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
<li><strong>Reply:</strong> <a href="19964.php">Jeff Squyres: "Re: [OMPI users] MPI_Irecv: Confusion with &lt;&lt;int count&gt;&gt; inputy parameter"</a>
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
