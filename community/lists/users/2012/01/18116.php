<?
$subject_val = "[OMPI users] SIGV at MPI_Cart_sub";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 10 05:05:48 2012" -->
<!-- isoreceived="20120110100548" -->
<!-- sent="Tue, 10 Jan 2012 11:05:45 +0100" -->
<!-- isosent="20120110100545" -->
<!-- name="Anas Al-Trad" -->
<!-- email="anas.altrad_at_[hidden]" -->
<!-- subject="[OMPI users] SIGV at MPI_Cart_sub" -->
<!-- id="CA+H1izOfv0ace1dT5GXCROJwd8uga9iBKQ1wnht8uXwAz6uh4Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CA+H1izNPBZmBwprRhaP5oSY2CeHjhmaYFr8BpmEQb1_nYgbZOg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] SIGV at MPI_Cart_sub<br>
<strong>From:</strong> Anas Al-Trad (<em>anas.altrad_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-10 05:05:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18117.php">Paul Kapinos: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18117.php">Paul Kapinos: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18117.php">Paul Kapinos: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear people,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;In my application, I have the segmentation fault of Integer
<br>
Divide-by-zero when calling MPI_cart_sub routine. My program is as follows,
<br>
I have 128 ranks, I make a new communicator of the first 96 ranks via
<br>
MPI_Comm_creat. Then I create a grid of 8X12 by calling MPI_Cart_create.
<br>
After creating the grid if I call MPI_Cart_sub then I have that error.
<br>
<p>This error happens also when I use a communicator of 24 ranks and create a
<br>
grid of 4X6. Can you please help me in solving this?
<br>
<p>Regards,
<br>
Anas
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18116/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18117.php">Paul Kapinos: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Previous message:</strong> <a href="18115.php">Ralph Castain: "Re: [OMPI users] How do I run several mpi jobs in a single allocation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18117.php">Paul Kapinos: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
<li><strong>Reply:</strong> <a href="18117.php">Paul Kapinos: "Re: [OMPI users] SIGV at MPI_Cart_sub"</a>
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
