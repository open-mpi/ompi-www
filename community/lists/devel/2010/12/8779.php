<?
$subject_val = "Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 15 20:53:02 2010" -->
<!-- isoreceived="20101216015302" -->
<!-- sent="Wed, 15 Dec 2010 20:52:56 -0500" -->
<!-- isosent="20101216015256" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_Send doesn't work if the data &amp;gt;= 2GB" -->
<!-- id="EF259D0A-DC44-4F73-8283-3DAF4E699121_at_cisco.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="AANLkTimEdB6WrmCVCdB_J6VtzrgNhywTgxxkFcOd3Ns6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-12-15 20:52:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>In reply to:</strong> <a href="8758.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I don't have any problem running your test program; see below.
<br>
<p>I think someone suggested in either this thread or a different thread that the ethernet drive you have might be faulty...? (I could be remembering that incorrectly)  Have you verified that your network stack is working properly for all cases?
<br>
<p>-----
<br>
[17:50] svbu-mpi:~/mpi % cat big-send.c 
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
#include &lt;stdlib.h&gt;
<br>
#include &lt;unistd.h&gt;
<br>
<p>int main(int argc, char** argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int localID;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int numOfPros;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;/* 2GB */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char* g = (char*)malloc(Gsize);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype MPI_Type_lkchar;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Type_commit(&amp;MPI_Type_lkchar);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;if (localID == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sending...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Sent!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;} else if (1 == localID) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Receiving...\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1,  
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Received!\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Rank %d all done\n&quot;, localID);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
[17:50] svbu-mpi:~/mpi % mpicc big-send.c -o big-send -g
<br>
[17:50] svbu-mpi:~/mpi % mpirun -np 2 --bynode hostname
<br>
svbu-mpi017
<br>
svbu-mpi018
<br>
[17:50] svbu-mpi:~/mpi % mpirun --mca btl tcp,self -np 2 --bynode big-send
<br>
Receiving...
<br>
Sending...
<br>
Sent!
<br>
Rank 0 all done
<br>
Received!
<br>
Rank 1 all done
<br>
[17:51] svbu-mpi:~/mpi % 
<br>
-----
<br>
<p>Note that it did take a few seconds to run over 1GB ethernet.
<br>
<p><p><p><p>On Dec 2, 2010, at 5:09 AM, &#229;&#173;&#159;&#229;&#174;&#170;&#229;&#134;&#155; wrote:
<br>
<p><span class="quotelev1">&gt; hi all,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I met a question recently when I tested the MPI_send and MPI_Recv functions.  When I run the following codes, the  processes hanged and I found there was not data transmission in my network at all. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; BTW: I finished this test on two X86-64 computers with 16GB memory and installed Linux.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   1 #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt;   2 #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;   3 #include &lt;stdlib.h&gt;
</span><br>
<span class="quotelev1">&gt;   4 #include &lt;unistd.h&gt;
</span><br>
<span class="quotelev1">&gt;   5 
</span><br>
<span class="quotelev1">&gt;   6 
</span><br>
<span class="quotelev1">&gt;   7 int main(int argc, char** argv)
</span><br>
<span class="quotelev1">&gt;   8 {
</span><br>
<span class="quotelev1">&gt;   9     int localID;
</span><br>
<span class="quotelev1">&gt;  10     int numOfPros;
</span><br>
<span class="quotelev1">&gt;  11     size_t Gsize = (size_t)2 * 1024 * 1024 * 1024;
</span><br>
<span class="quotelev1">&gt;  12 
</span><br>
<span class="quotelev1">&gt;  13     char* g = (char*)malloc(Gsize);
</span><br>
<span class="quotelev1">&gt;  14 
</span><br>
<span class="quotelev1">&gt;  15     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;  16     MPI_Comm_size(MPI_COMM_WORLD, &amp;numOfPros);
</span><br>
<span class="quotelev1">&gt;  17     MPI_Comm_rank(MPI_COMM_WORLD, &amp;localID);
</span><br>
<span class="quotelev1">&gt;  18 
</span><br>
<span class="quotelev1">&gt;  19     MPI_Datatype MPI_Type_lkchar;
</span><br>
<span class="quotelev1">&gt;  20     MPI_Type_contiguous(2048, MPI_BYTE, &amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev1">&gt;  21     MPI_Type_commit(&amp;MPI_Type_lkchar);
</span><br>
<span class="quotelev1">&gt;  22 
</span><br>
<span class="quotelev1">&gt;  23     if (localID == 0)
</span><br>
<span class="quotelev1">&gt;  24     {
</span><br>
<span class="quotelev1">&gt;  25         MPI_Send(g, 1024*1024, MPI_Type_lkchar, 1, 1, MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;  26     }
</span><br>
<span class="quotelev1">&gt;  27 
</span><br>
<span class="quotelev1">&gt;  28     if (localID != 0)
</span><br>
<span class="quotelev1">&gt;  29     {
</span><br>
<span class="quotelev1">&gt;  30         MPI_Status status;
</span><br>
<span class="quotelev1">&gt;  31         MPI_Recv(g, 1024*1024, MPI_Type_lkchar, 0, 1, \
</span><br>
<span class="quotelev1">&gt;  32                 MPI_COMM_WORLD, &amp;status);
</span><br>
<span class="quotelev1">&gt;  33     }
</span><br>
<span class="quotelev1">&gt;  34 
</span><br>
<span class="quotelev1">&gt;  35     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;  36 
</span><br>
<span class="quotelev1">&gt;  37     return 0;
</span><br>
<span class="quotelev1">&gt;  38 }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Jun
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<li><strong>Next message:</strong> <a href="8780.php">Jeff Squyres: "Re: [OMPI devel] OpenIB not functioning on 1.5.x (works on 1.4.3)"</a>
<li><strong>Previous message:</strong> <a href="8778.php">Jeff Squyres: "Re: [OMPI devel] memory binding"</a>
<li><strong>In reply to:</strong> <a href="8758.php">&#195;&#207;&#207;&#220;&#190;&#252;: "[OMPI devel] MPI_Send doesn't work if the data &gt;= 2GB"</a>
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
