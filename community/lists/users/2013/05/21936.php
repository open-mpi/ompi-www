<?
$subject_val = "[OMPI users] minor change request";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 20 21:00:26 2013" -->
<!-- isoreceived="20130521010026" -->
<!-- sent="Mon, 20 May 2013 21:00:22 -0400" -->
<!-- isosent="20130521010022" -->
<!-- name="Alan Sayre" -->
<!-- email="ansayre62_at_[hidden]" -->
<!-- subject="[OMPI users] minor change request" -->
<!-- id="CAGzRjXZf4cF-YvvZQOgFy+i3pWxh_mnf9tgZVjEbUoHMft3nkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] minor change request<br>
<strong>From:</strong> Alan Sayre (<em>ansayre62_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-20 21:00:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Previous message:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Reply:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To quiet VS compile time warnings can the following (very) minor change be made:
<br>
<p>c:\program files
<br>
(x86)\openmpi_v1.6-x64\include\openmpi/ompi/mpi/cxx/op_inln.h(148):
<br>
warning C4800: 'int' : forcing value to bool 'true' or 'false'
<br>
(performance warning)
<br>
<p>from:
<br>
<p>inline bool
<br>
MPI::Op::Is_commutative(void) const
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int commute;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(void)MPI_Op_commutative(mpi_op, &amp;commute);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (bool) commute;
<br>
}
<br>
<p>to:
<br>
<p>inline bool
<br>
MPI::Op::Is_commutative(void) const
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int commute;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;(void)MPI_Op_commutative(mpi_op, &amp;commute);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return (commute != 0);
<br>
}
<br>
<p>Thanks,
<br>
<p>Alan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Previous message:</strong> <a href="21935.php">Rolf vandeVaart: "Re: [OMPI users] Compiling openmpi 1.6.4 without CUDA"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
<li><strong>Reply:</strong> <a href="21937.php">Jeff Squyres (jsquyres): "Re: [OMPI users] minor change request"</a>
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
