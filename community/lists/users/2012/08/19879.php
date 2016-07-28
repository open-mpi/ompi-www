<?
$subject_val = "[OMPI users] Using MPI derived datatypes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug  3 07:37:10 2012" -->
<!-- isoreceived="20120803113710" -->
<!-- sent="Fri, 3 Aug 2012 13:36:35 +0200" -->
<!-- isosent="20120803113635" -->
<!-- name="Grzegorz Maj" -->
<!-- email="maju3_at_[hidden]" -->
<!-- subject="[OMPI users] Using MPI derived datatypes" -->
<!-- id="CAGYuqpZgWL15YrQeY2m7yTkGnCvLA07059xBCasH_0skhprwvg_at_mail.gmail.com" -->
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
<strong>From:</strong> Grzegorz Maj (<em>maju3_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-03 07:36:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19880.php">Jeff Squyres: "[OMPI users] MPI-3.0 public draft and call for comments"</a>
<li><strong>Previous message:</strong> <a href="19878.php">Reuti: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19893.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Reply:</strong> <a href="19893.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Reply:</strong> <a href="19897.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I would like my MPI processes to exchange some structural data. That
<br>
data is represented by plain structures containing basic datatypes. I
<br>
would like to use MPI derived datatypes, because of its portability
<br>
and good performance.
<br>
<p>I would like to be able to send/receive any of my structures in the
<br>
same part of code. In the low-level network programming it is usually
<br>
done by having each struct of this pattern:
<br>
struct S1 {
<br>
&nbsp;&nbsp;int structType;
<br>
&nbsp;&nbsp;...
<br>
}
<br>
And then you first read structType and know what bytes to expect next.
<br>
<p>Is there a good way to do it using MPI derived datatypes?
<br>
<p>I was thinking of having separate MPI_Request for each of my
<br>
structures and calling multiple MPI_Irecv + MPI_Waitany. But then, how
<br>
to do this for MPI_Bcast?
<br>
<p>My second question is about having arbitrary size structures, i.e. the
<br>
ones having 'char buf[0]' as the last field, where you allocate memory
<br>
of size 'sizeof(S) + bufLen'. Is there a way to convert such a struct
<br>
into MPI derived datatype?
<br>
<p>Thanks for any help,
<br>
Regards,
<br>
Grzegorz Maj
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19880.php">Jeff Squyres: "[OMPI users] MPI-3.0 public draft and call for comments"</a>
<li><strong>Previous message:</strong> <a href="19878.php">Reuti: "Re: [OMPI users] UC Permission denied, please try again."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19893.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Reply:</strong> <a href="19893.php">Jeff Squyres: "Re: [OMPI users] Using MPI derived datatypes"</a>
<li><strong>Reply:</strong> <a href="19897.php">George Bosilca: "Re: [OMPI users] Using MPI derived datatypes"</a>
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
