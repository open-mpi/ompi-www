<?
$subject_val = "[OMPI users] Type struct question";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 11 06:20:47 2011" -->
<!-- isoreceived="20111111112047" -->
<!-- sent="Fri, 11 Nov 2011 19:20:42 +0800" -->
<!-- isosent="20111111112042" -->
<!-- name="Thomas Anderson" -->
<!-- email="t.dt.aanderson_at_[hidden]" -->
<!-- subject="[OMPI users] Type struct question" -->
<!-- id="CAGnxGJ069-rshxfMPrvbN4MdLhDzFQzJ+T+Y-QrFCY9kMrfbbQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Type struct question<br>
<strong>From:</strong> Thomas Anderson (<em>t.dt.aanderson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-11-11 06:20:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17758.php">George Bosilca: "Re: [OMPI users] Type struct question"</a>
<li><strong>Previous message:</strong> <a href="17756.php">Mudassar Majeed: "Re: [OMPI users] users Digest, Vol 2064, Issue 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17758.php">George Bosilca: "Re: [OMPI users] Type struct question"</a>
<li><strong>Reply:</strong> <a href="17758.php">George Bosilca: "Re: [OMPI users] Type struct question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I read doc explaining struct at
<br>
<a href="http://www.open-mpi.org/doc/v1.4/man3/MPI_Type_struct.3.php">http://www.open-mpi.org/doc/v1.4/man3/MPI_Type_struct.3.php</a>
<br>
<p>I haven't used mpi so I have a newbie question.
<br>
<p>In the example function MPI_Type_struct(3, {2, 1, 3}, {0, 16, 26},
<br>
{MPI_FLOAT, type1, MPI_CHAR} ) is executed where type1 is consisted of
<br>
{(double,0)(char,8)}. The user defined datatype has extent 16 with
<br>
displacement at 16. However, the third block starts from displacement
<br>
26. This seems to me the end of type1 (at 32) would overlap the
<br>
displacement of MPI_CHAR (at 26). How does MPI solve this issue? Do
<br>
they simply ignore the rest space because it is only char type in
<br>
type1? Or if the type1 is defined by {(double, 0) (double, 8)}, won't
<br>
the data in the second block be truncated?
<br>
<p>Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17758.php">George Bosilca: "Re: [OMPI users] Type struct question"</a>
<li><strong>Previous message:</strong> <a href="17756.php">Mudassar Majeed: "Re: [OMPI users] users Digest, Vol 2064, Issue 3"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17758.php">George Bosilca: "Re: [OMPI users] Type struct question"</a>
<li><strong>Reply:</strong> <a href="17758.php">George Bosilca: "Re: [OMPI users] Type struct question"</a>
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
