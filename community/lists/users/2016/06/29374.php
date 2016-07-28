<?
$subject_val = "Re: [OMPI users] max buffer size";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun  5 16:48:45 2016" -->
<!-- isoreceived="20160605204845" -->
<!-- sent="Sun, 5 Jun 2016 22:48:52 +0200" -->
<!-- isosent="20160605204852" -->
<!-- name="Alexander Droste" -->
<!-- email="alexander.ra.droste_at_[hidden]" -->
<!-- subject="Re: [OMPI users] max buffer size" -->
<!-- id="1224f52a-df1a-1999-6dec-d14ae85c3619_at_googlemail.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAGKz=uLPK2Gg7saouh_LakzCP+pRJsNU3vVCnxdKCmO+HhBmJw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] max buffer size<br>
<strong>From:</strong> Alexander Droste (<em>alexander.ra.droste_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-05 16:48:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29375.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>thanks for the material!
<br>
Meanwhile, I tested sending INT_MAX elements
<br>
of an int64_t pair and Open MPI seems to be
<br>
fine with sending 2^31 * (2 * 8) bytes.
<br>
<p>-Alex
<br>
<p>-------------------------------------------
<br>
Googletest-Testcase:
<br>
<p>TEST(MPImaxBufferSize, maxSendBufferSizeInt) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Datatype type;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;setup_packed_datatype(&amp;type); // int64_t pair
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int sendCount = std::numeric_limits&lt;int&gt;::max();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int rank;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Comm_rank(MPI_COMM_WORLD, &amp;rank);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (rank == 0) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;packed_type *buffer = new packed_type[sendCount];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; sendCount; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer[i].x = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buffer[i].y = 1;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Send(buffer, sendCount, type, 1, 0, MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete[] buffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else if (rank == 1) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;packed_type *buffer = new packed_type[sendCount];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status s;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Probe(0, 0, MPI_COMM_WORLD, &amp;s);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int receiveCount;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Get_count(&amp;s, type, &amp;receiveCount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Recv(buffer, receiveCount, type, 0, 0, MPI_COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPECT_EQ(receiveCount, sendCount);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for (int i = 0; i &lt; receiveCount; ++i) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPECT_EQ(buffer[i].x, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXPECT_EQ(buffer[i].y, 1);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;delete[] buffer;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p><p><p>On 05.06.16 19:07, Jeff Hammond wrote:
<br>
<span class="quotelev1">&gt; Check out the BigMPI project for details on this topic.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some (many?) MPI implementations still have internal limitations that prevent
</span><br>
<span class="quotelev1">&gt; one from sending more than 2 gigabytes using MPI datatypes. You can use the
</span><br>
<span class="quotelev1">&gt; BigMPI tests to identify these.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/jeffhammond/BigMPI">https://github.com/jeffhammond/BigMPI</a>
</span><br>
<span class="quotelev1">&gt; <a href="https://github.com/jeffhammond/BigMPI-paper">https://github.com/jeffhammond/BigMPI-paper</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sunday, June 5, 2016, Alexander Droste &lt;alexander.ra.droste_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:alexander.ra.droste_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Gus,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     thanks a lot for the intro, that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Best regards,
</span><br>
<span class="quotelev1">&gt;     Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05.06.16 18:30, Gustavo Correa wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On Jun 5, 2016, at 12:03 PM, Alexander Droste wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi everyone,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I'd like to know what the maximum buffer size
</span><br>
<span class="quotelev1">&gt;             for sends/receives is. Besides the count being limited
</span><br>
<span class="quotelev1">&gt;             to INT_MAX, how is the max buffer size limited?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Best regards,
</span><br>
<span class="quotelev1">&gt;             Alex
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi Alexander
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         As far as I know, the usual solution to circumvent
</span><br>
<span class="quotelev1">&gt;         this type of large count problem is to declare an MPI user type to hold
</span><br>
<span class="quotelev1">&gt;         a large number of MPI native types (say,
</span><br>
<span class="quotelev1">&gt;         an MPI_Type_Contiguous or MPI_Type_Vector to hold a bunch of floating
</span><br>
<span class="quotelev1">&gt;         point numbers).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php">https://www.open-mpi.org/doc/v1.8/man3/MPI_Type_contiguous.3.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Also, an OMPI pro may correct me for saying foolish things on the list,
</span><br>
<span class="quotelev1">&gt;         but AFAIK, not all sends/receives are buffered, and the buffer size is
</span><br>
<span class="quotelev1">&gt;         set by the default eager/rendevous message threshold (or the value that
</span><br>
<span class="quotelev1">&gt;         you set it to be at runtime with OMPI mca parameters). That buffer size
</span><br>
<span class="quotelev1">&gt;         may also vary according to the btl (sm,vader, tcp, openib, etc).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Search for &quot;eager&quot; and &quot;rendevous&quot; on the FAQ:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="https://www.open-mpi.org/faq/?category=all">https://www.open-mpi.org/faq/?category=all</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I hope this helps,
</span><br>
<span class="quotelev1">&gt;         Gus Correa
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;         Link to this post:
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/community/lists/users/2016/06/29371.php">http://www.open-mpi.org/community/lists/users/2016/06/29371.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/06/29372.php">http://www.open-mpi.org/community/lists/users/2016/06/29372.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Hammond
</span><br>
<span class="quotelev1">&gt; jeff.science_at_[hidden] &lt;mailto:jeff.science_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://jeffhammond.github.io/">http://jeffhammond.github.io/</a>
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
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/06/29373.php">http://www.open-mpi.org/community/lists/users/2016/06/29373.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29375.php">Du, Fan: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>Previous message:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
<li><strong>In reply to:</strong> <a href="29373.php">Jeff Hammond: "Re: [OMPI users] max buffer size"</a>
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
