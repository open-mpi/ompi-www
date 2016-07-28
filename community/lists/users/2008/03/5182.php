<?
$subject_val = "Re: [OMPI users] RE : MPI_Comm_connect() fails";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 13 03:21:56 2008" -->
<!-- isoreceived="20080313072156" -->
<!-- sent="Thu, 13 Mar 2008 08:21:51 +0100" -->
<!-- isosent="20080313072151" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] RE : MPI_Comm_connect() fails" -->
<!-- id="9b0da5ce0803130021l4ead0f91qaf43e4ac7d332c93_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="9D96C3B9C12B4C4A9BD31761B4F8241028835B2B6F_at_imibou-nt-1-ex.IMI.LOCAL" -->
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
<strong>Subject:</strong> Re: [OMPI users] RE : MPI_Comm_connect() fails<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-13 03:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5183.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5181.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5179.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5183.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5183.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
HI
<br>
I think the recvcount argument you pass to MPI_Allgather should not be
<br>
1 but instead
<br>
the number of MPI_INTs your buffer rem_rank_tbl can contain.
<br>
As it stands now, you tell MPI_Allgather that it may only receive 1 MPI_INT.
<br>
<p>Furthermore, i'm not sure, but i think your receive buffer should be
<br>
large enough
<br>
to contain messages from *all* processes, and not just from the &quot;far side&quot;
<br>
<p>Jody
<br>
<p>.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5183.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Previous message:</strong> <a href="5181.php">Aur&#233;lien Bouteiller: "Re: [OMPI users] MPI_Allreduce()"</a>
<li><strong>In reply to:</strong> <a href="5179.php">Audet, Martin: "[OMPI users] RE : MPI_Comm_connect() fails"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5183.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
<li><strong>Reply:</strong> <a href="5183.php">jody: "Re: [OMPI users] RE : MPI_Comm_connect() fails"</a>
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
