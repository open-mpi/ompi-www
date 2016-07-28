<?
$subject_val = "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 23 15:56:14 2010" -->
<!-- isoreceived="20101123205614" -->
<!-- sent="Tue, 23 Nov 2010 12:55:36 -0800" -->
<!-- isosent="20101123205536" -->
<!-- name="Eugene Loh" -->
<!-- email="eugene.loh_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang" -->
<!-- id="4CEC2A48.5010901_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1289946413.23022.10.camel_at_lw132" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang<br>
<strong>From:</strong> Eugene Loh (<em>eugene.loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-23 15:55:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add to Jeff's comments:
<br>
<p>S&#233;bastien Boisvert wrote:
<br>
<p><span class="quotelev1">&gt;The reason is that I am developping an MPI-based software, and I use
</span><br>
<span class="quotelev1">&gt;Open-MPI as it is the only implementation I am aware of that send
</span><br>
<span class="quotelev1">&gt;messages eagerly (powerful feature, that is).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
As wonderful as OMPI is, I am fairly sure other MPI implementations also 
<br>
support eager message passing.  That is, there is a capability for a 
<br>
sender to hand message data over to the MPI implementation, freeing the 
<br>
user send buffer and allowing an MPI_Send() call to complete, without 
<br>
the message reaching the receiver or the receiver being ready.
<br>
<p><span class="quotelev1">&gt;Each byte transfer layer has its default limit to send eagerly a
</span><br>
<span class="quotelev1">&gt;message. With shared memory (sm), the value is 4096 bytes. At least it
</span><br>
<span class="quotelev1">&gt;is according to ompi_info.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
Yes.  I think that 4096 bytes can be a little tricky... it may include 
<br>
some header information.  So, the amount of user data that could be sent 
<br>
would be a little bit less... e.g., 4,000 bytes or so.
<br>
<p><span class="quotelev1">&gt;To verify this limit, I implemented a very simple test. The source code
</span><br>
<span class="quotelev1">&gt;is test4096.cpp, which basically just send a single message of 4096
</span><br>
<span class="quotelev1">&gt;bytes from a rank to another (rank 1 to 0).
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;
</span><br>
I don't think the test says much at all.  It has one process post an 
<br>
MPI_Send and another post an MPI_Recv.  Such a test should complete 
<br>
under a very wide range of conditions.
<br>
<p>Here is perhaps a better test:
<br>
<p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int me;
<br>
&nbsp;&nbsp;char buf[N];
<br>
<p>&nbsp;&nbsp;MPI_Init(&amp;argc,&amp;argv);
<br>
&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD,&amp;me);
<br>
&nbsp;&nbsp;MPI_Send(buf,N,MPI_BYTE,1-me,343,MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;MPI_Recv(buf,N,MPI_BYTE,1-me,343,MPI_COMM_WORLD,MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;printf(&quot;%d of %d done\n&quot;, me, np);
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p>Compile with the preprocessor symbol N defined to, say, 64.  Run for 
<br>
--np 2.  Each process will try to send.  The code will complete for 
<br>
short, eager messages.  If the messages are long, nothing is sent 
<br>
eagerly and both processes stay hung in their sends.  Bump N up slowly.  
<br>
For N=4096, the code hangs.  For N slightly less -- say, 4000 -- it runs.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<li><strong>Previous message:</strong> <a href="8698.php">ananda.mudar_at_[hidden]: "[OMPI devel] Warning on fork() disappears if I use MPI threads!!"</a>
<li><strong>In reply to:</strong> <a href="8685.php">S&#233;bastien Boisvert: "[OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8700.php">Eugene Loh: "Re: [OMPI devel] Simple program (103 lines) makes Open-1.4.3 hang"</a>
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
