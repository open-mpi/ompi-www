<?
$subject_val = "Re: [OMPI users] message truncated error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 17:35:45 2010" -->
<!-- isoreceived="20101101213545" -->
<!-- sent="Mon, 1 Nov 2010 14:35:19 -0700" -->
<!-- isosent="20101101213519" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] message truncated error" -->
<!-- id="AANLkTiniUVZwEouJMgjf5m1o1wuC0ompMsLZQWQ5PKsj_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w5CDDB7DF7B81B2DD3F652CB480_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] message truncated error<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 17:35:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14675.php">jody: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14673.php">Carrasco, Cesar J.: "[OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="14672.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jack, in order to see what the problem is, you need to post a more complete
<br>
code, such as the code you used for the send, and any manipulation you did
<br>
to your recvArray.
<br>
<p>On Mon, Nov 1, 2010 at 10:41 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I use
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double* recvArray  = new double[buffersize];
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The receive buffer size
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Recv(&amp;(recvDataArray[0]), xVSize, MPI_DOUBLE, 0,
</span><br>
<span class="quotelev1">&gt; mytaskTag);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; delete [] recvArray  ;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In first iteration, the receiver works well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But, in second iteration ,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I got the
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; the buffersize is the same in two iterations.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ANy help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Nov. 1 2010
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Date: Mon, 1 Nov 2010 08:08:08 +0100
</span><br>
<span class="quotelev2">&gt; &gt; From: jody.xha_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; To: users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subject: Re: [OMPI users] message truncated error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hi Jack
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Usually MPI_ERR_TRUNCATE means that the buffer you use in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; (or MPI::COMM_WORLD.Recv) is too sdmall to hold the message coming in.
</span><br>
<span class="quotelev2">&gt; &gt; Check your code to make sure you assign enough memory to your buffers.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; regards
</span><br>
<span class="quotelev2">&gt; &gt; Jody
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Mon, Nov 1, 2010 at 7:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt; &gt; HI,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; In my MPI program, master send many msaages to another worker with the
</span><br>
<span class="quotelev1">&gt; same
</span><br>
<span class="quotelev3">&gt; &gt; &gt; tag.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The worker uses
</span><br>
<span class="quotelev3">&gt; &gt; &gt; s
</span><br>
<span class="quotelev3">&gt; &gt; &gt; MPI::COMM_WORLD.Recv(&amp;message_para_to_one_worker, 1,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; message_para_to_workers_type, 0, downStreamTaskTag);
</span><br>
<span class="quotelev3">&gt; &gt; &gt; to receive the messages
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I got error:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; n36:94880] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n36:94880] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n36:94880] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n36:94880] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n36:94880] *** Process received signal ***
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n36:94880] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev3">&gt; &gt; &gt; [n36:94880] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is this (the same tag) the reason for the errors ?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ANy help is appreciated.
</span><br>
<span class="quotelev3">&gt; &gt; &gt; thanks
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Jack
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oct. 31 2010
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14674/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14675.php">jody: "Re: [OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14673.php">Carrasco, Cesar J.: "[OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<li><strong>In reply to:</strong> <a href="14672.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
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
