<?
$subject_val = "Re: [OMPI users] message truncated error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  1 03:08:15 2010" -->
<!-- isoreceived="20101101070815" -->
<!-- sent="Mon, 1 Nov 2010 08:08:08 +0100" -->
<!-- isosent="20101101070808" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] message truncated error" -->
<!-- id="AANLkTim9ME411mczh6W0JUxnQ0EOEr2EW5KGVWzrRYFz_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w284740F5DBC5086DB82282CB480_at_phx.gbl" -->
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
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-01 03:08:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14658.php">jody: "[OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14656.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<li><strong>In reply to:</strong> <a href="14656.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14664.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jack
<br>
<p>Usually MPI_ERR_TRUNCATE means that the buffer you use in MPI_Recv
<br>
(or MPI::COMM_WORLD.Recv) is too sdmall to hold the message coming in.
<br>
Check your code to make sure you assign enough memory to your buffers.
<br>
<p>regards
<br>
Jody
<br>
<p><p>On Mon, Nov 1, 2010 at 7:26 AM, Jack Bryan &lt;dtustudy68_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; HI,
</span><br>
<span class="quotelev1">&gt; In my MPI program, master send many msaages to another worker with the same
</span><br>
<span class="quotelev1">&gt; tag.
</span><br>
<span class="quotelev1">&gt; The worker uses
</span><br>
<span class="quotelev1">&gt; s
</span><br>
<span class="quotelev1">&gt; MPI::COMM_WORLD.Recv(&amp;message_para_to_one_worker, 1,
</span><br>
<span class="quotelev1">&gt; message_para_to_workers_type, 0, downStreamTaskTag);
</span><br>
<span class="quotelev1">&gt; to receive the messages
</span><br>
<span class="quotelev1">&gt; I got error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; n36:94880] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [n36:94880] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [n36:94880] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [n36:94880] *** MPI_ERRORS_ARE_FATAL (your MPI job will now abort)
</span><br>
<span class="quotelev1">&gt; [n36:94880] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n36:94880] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n36:94880] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is this (the same tag) the reason for the errors ?
</span><br>
<span class="quotelev1">&gt; ANy help is appreciated.
</span><br>
<span class="quotelev1">&gt; thanks
</span><br>
<span class="quotelev1">&gt; Jack
</span><br>
<span class="quotelev1">&gt; Oct. 31 2010
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14658.php">jody: "[OMPI users] link problem on 64bit platform"</a>
<li><strong>Previous message:</strong> <a href="14656.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<li><strong>In reply to:</strong> <a href="14656.php">Jack Bryan: "[OMPI users] message truncated error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14664.php">Jack Bryan: "Re: [OMPI users] message truncated error"</a>
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
