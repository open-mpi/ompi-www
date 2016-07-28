<?
$subject_val = "Re: [OMPI users] message truncated error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 13:41:07 2010" -->
<!-- isoreceived="20101101174107" -->
<!-- sent="Mon, 1 Nov 2010 11:41:01 -0600" -->
<!-- isosent="20101101174101" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="Re: [OMPI users] message truncated error" -->
<!-- id="SNT134-w5CDDB7DF7B81B2DD3F652CB480_at_phx.gbl" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="[OMPI users] message truncated error" -->
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
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 13:41:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14673.php">Carrasco, Cesar J.: "[OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="14671.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Maybe in reply to:</strong> <a href="14664.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14674.php">David Zhang: "Re: [OMPI users] message truncated error"</a>
<li><strong>Reply:</strong> <a href="14674.php">David Zhang: "Re: [OMPI users] message truncated error"</a>
<li><strong>Reply:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
thanks
<br>
I use 
<br>
double* recvArray  = new double[buffersize];
<br>
The receive buffer size 
<br>
MPI::COMM_WORLD.Recv(&amp;(recvDataArray[0]), xVSize, MPI_DOUBLE, 0, mytaskTag);
<br>
delete [] recvArray  ;
<br>
In first iteration, the receiver works well.
<br>
But, in second iteration , 
<br>
I got the 
<br>
MPI_ERR_TRUNCATE: message truncated
<br>
the buffersize is the same in two iterations. 
<br>
<p>ANy help is appreciated. 
<br>
thanks
<br>
Nov. 1 2010 
<br>
<p><span class="quotelev1">&gt; Date: Mon, 1 Nov 2010 08:08:08 +0100
</span><br>
<span class="quotelev1">&gt; From: jody.xha_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] message truncated error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Jack
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Usually MPI_ERR_TRUNCATE means that the buffer you use in MPI_Recv
</span><br>
<span class="quotelev1">&gt; (or MPI::COMM_WORLD.Recv) is too sdmall to hold the message coming in.
</span><br>
<span class="quotelev1">&gt; Check your code to make sure you assign enough memory to your buffers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; regards
</span><br>
<span class="quotelev1">&gt; Jody
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mon, Nov 1, 2010 at 7:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; HI,
</span><br>
<span class="quotelev2">&gt; &gt; In my MPI program, master send many msaages to another worker with the same
</span><br>
<span class="quotelev2">&gt; &gt; tag.
</span><br>
<span class="quotelev2">&gt; &gt; The worker uses
</span><br>
<span class="quotelev2">&gt; &gt; s
</span><br>
<span class="quotelev2">&gt; &gt; MPI::COMM_WORLD.Recv(&amp;message_para_to_one_worker, 1,
</span><br>
<span class="quotelev2">&gt; &gt; message_para_to_workers_type, 0, downStreamTaskTag);
</span><br>
<span class="quotelev2">&gt; &gt; to receive the messages
</span><br>
<span class="quotelev2">&gt; &gt; I got error:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; n36:94880] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev2">&gt; &gt; [n36:94880] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev2">&gt; &gt; [n36:94880] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev2">&gt; &gt; [n36:94880] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev2">&gt; &gt; [n36:94880] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt; &gt; [n36:94880] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev2">&gt; &gt; [n36:94880] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is this (the same tag) the reason for the errors ?
</span><br>
<span class="quotelev2">&gt; &gt; ANy help is appreciated.
</span><br>
<span class="quotelev2">&gt; &gt; thanks
</span><br>
<span class="quotelev2">&gt; &gt; Jack
</span><br>
<span class="quotelev2">&gt; &gt; Oct. 31 2010
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14672/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14673.php">Carrasco, Cesar J.: "[OMPI users] Configure error - ompi/mca/io/romio/romio/localdefs: No such file or directory"</a>
<li><strong>Previous message:</strong> <a href="14671.php">Terry Dontje: "Re: [OMPI users] cannot install Open MPI 1.5 on Solaris x86_64 withOracle/Sun C 5.11"</a>
<li><strong>Maybe in reply to:</strong> <a href="14664.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14674.php">David Zhang: "Re: [OMPI users] message truncated error"</a>
<li><strong>Reply:</strong> <a href="14674.php">David Zhang: "Re: [OMPI users] message truncated error"</a>
<li><strong>Reply:</strong> <a href="14676.php">jody: "Re: [OMPI users] message truncated error"</a>
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
