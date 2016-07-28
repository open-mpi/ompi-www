<?
$subject_val = "Re: [OMPI users] Send data structures";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Oct 12 13:15:40 2010" -->
<!-- isoreceived="20101012171540" -->
<!-- sent="Tue, 12 Oct 2010 12:15:34 -0500" -->
<!-- isosent="20101012171534" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Send data structures" -->
<!-- id="B8F8E182-9889-4554-9D01-D4FF1A84ADF7_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C5FD53FFC7D1704890B0B1FE85A004F6037B4BD1_at_cyclone.aegis.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Send data structures<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-12 13:15:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14450.php">Jeremiah Willcock: "[OMPI users] Bug in MPI_Allreduce man page"</a>
<li><strong>Previous message:</strong> <a href="14448.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>In reply to:</strong> <a href="14447.php">Ed Peddycoart: "[OMPI users] Send data structures"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Have a look at MPI_Type_create_struct().
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php">http://www.open-mpi.org/doc/v1.5/man3/MPI_Type_create_struct.3.php</a>
<br>
<p><p>On Oct 12, 2010, at 11:28 AM, Ed Peddycoart wrote:
<br>
<p><span class="quotelev1">&gt; The data that I want to send via MPI is in the form of a struct:
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; struct myDataStruct {
</span><br>
<span class="quotelev1">&gt;    struct subData1 {
</span><br>
<span class="quotelev1">&gt;       int position[2];
</span><br>
<span class="quotelev1">&gt;       int length[2];
</span><br>
<span class="quotelev1">&gt;    };
</span><br>
<span class="quotelev1">&gt;    struct subData2 {
</span><br>
<span class="quotelev1">&gt;       float *data1;
</span><br>
<span class="quotelev1">&gt;       float *data2;
</span><br>
<span class="quotelev1">&gt;       float *data3;
</span><br>
<span class="quotelev1">&gt;       float *data4;
</span><br>
<span class="quotelev1">&gt;    };
</span><br>
<span class="quotelev1">&gt;    struct subData3 {
</span><br>
<span class="quotelev1">&gt;       float *data;
</span><br>
<span class="quotelev1">&gt;    };
</span><br>
<span class="quotelev1">&gt; };
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; At first I thought I could simply send the data as follows: 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; struct myDataStruct data = new myDataStruct;
</span><br>
<span class="quotelev1">&gt; // allocate and fill in data for sub structs
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPI_SEND(data, sizeof(data), MPI_BYTE, 0, 19, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; but apparently, for several reasons, that isn't going to work.  What is the best way to accomplish this? MPI_PACK/MPI_UNPACK?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Would I do something like this?
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData1-&gt;position, 2, MPI_INT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData1-&gt;length,  2, MPI_INT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData2-&gt;data1,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData2-&gt;data2,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData2-&gt;data3,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData2-&gt;data4,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE, &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_PACK(data-&gt;subData3-&gt;data1,  sizeof(data-&gt;subDat2-&gt;data1), MPI_FLOAT, packBuffer, PACKBUFFER_SIZE,  &amp;packSize, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt; MPI_Send(packBuffer, packSize, MPI_PACKED, 1, 100, , MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Ed
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14450.php">Jeremiah Willcock: "[OMPI users] Bug in MPI_Allreduce man page"</a>
<li><strong>Previous message:</strong> <a href="14448.php">Jeff Squyres: "Re: [OMPI users] nonblocking send/receive question"</a>
<li><strong>In reply to:</strong> <a href="14447.php">Ed Peddycoart: "[OMPI users] Send data structures"</a>
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
