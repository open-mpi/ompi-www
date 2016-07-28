<?
$subject_val = "Re: [OMPI users] MPI_Send over 2 GB";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 18 19:21:00 2009" -->
<!-- isoreceived="20090219002100" -->
<!-- sent="Wed, 18 Feb 2009 17:20:33 -0700" -->
<!-- isosent="20090219002033" -->
<!-- name="Justin" -->
<!-- email="luitjens_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Send over 2 GB" -->
<!-- id="499CA5D1.7050407_at_cs.utah.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4de51c660902181605n4dc3c212te730c6480ddb0308_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_Send over 2 GB<br>
<strong>From:</strong> Justin (<em>luitjens_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-02-18 19:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8100.php">Jeff Squyres: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Previous message:</strong> <a href="8098.php">Vittorio: "[OMPI users] MPI_Send over 2 GB"</a>
<li><strong>In reply to:</strong> <a href="8098.php">Vittorio: "[OMPI users] MPI_Send over 2 GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8100.php">Jeff Squyres: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Reply:</strong> <a href="8100.php">Jeff Squyres: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
My guess would be that your count argument is overflowing.  Is the count 
<br>
a signed 32 bit integer?  If so it will overflow around 2GB.  Try 
<br>
outputting the size that you are sending and see if you get large 
<br>
negative number.
<br>
<p>Justin
<br>
<p>Vittorio wrote:
<br>
<span class="quotelev1">&gt; Hi! I'm doing a test to measure the transfer rates and latency of ompi 
</span><br>
<span class="quotelev1">&gt; over infiniband
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; starting from 1 kB everything was doing fine until i wanted to 
</span><br>
<span class="quotelev1">&gt; transfer 2 GB and i received this error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [tatami:02271] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [tatami:02271] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [tatami:02271] *** MPI_ERR_COUNT: invalid count argument
</span><br>
<span class="quotelev1">&gt; [tatami:02271] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; [randori:12166] *** An error occurred in MPI_Send
</span><br>
<span class="quotelev1">&gt; [randori:12166] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [randori:12166] *** MPI_ERR_COUNT: invalid count argument
</span><br>
<span class="quotelev1">&gt; [randori:12166] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; this error appears if i run the program either on the same node or both
</span><br>
<span class="quotelev1">&gt; is 2 GB the intrinsic limit of MPI_Send/MPI_Recv?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks a lot
</span><br>
<span class="quotelev1">&gt; Vittorio
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8100.php">Jeff Squyres: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Previous message:</strong> <a href="8098.php">Vittorio: "[OMPI users] MPI_Send over 2 GB"</a>
<li><strong>In reply to:</strong> <a href="8098.php">Vittorio: "[OMPI users] MPI_Send over 2 GB"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8100.php">Jeff Squyres: "Re: [OMPI users] MPI_Send over 2 GB"</a>
<li><strong>Reply:</strong> <a href="8100.php">Jeff Squyres: "Re: [OMPI users] MPI_Send over 2 GB"</a>
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
