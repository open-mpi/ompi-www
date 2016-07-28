<?
$subject_val = "[OMPI users] MCA parameter";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 04:57:56 2008" -->
<!-- isoreceived="20081205095756" -->
<!-- sent="Fri, 5 Dec 2008 09:57:51 +0000 (GMT)" -->
<!-- isosent="20081205095751" -->
<!-- name="Yasmine Yacoub" -->
<!-- email="sikasoka_8_at_[hidden]" -->
<!-- subject="[OMPI users] MCA parameter" -->
<!-- id="856162.36051.qm_at_web28401.mail.ukl.yahoo.com" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI users] MCA parameter<br>
<strong>From:</strong> Yasmine Yacoub (<em>sikasoka_8_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-12-05 04:57:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7402.php">Jens: "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you for your response, and these are the details for my problem:

I have installed pwscf and then I have tried to run scf calculations, but before having the output I got this warning message:
&#194;&#160;
&#194;&#160;
WARNING: There are more than one active ports on host 'stallo-2.local', but the
default subnet GID prefix was detected on more than one of these
ports.&#194;&#160; If these ports are connected to different physical IB
networks, this configuration will fail in Open MPI.&#194;&#160; This version of
Open MPI requires that every physically separate IB subnet that is
used between connected MPI processes must have different subnet ID
values.
&#194;&#160;
Please see this FAQ entry for more details:
&#194;&#160;
&#194;&#160; <a href="http://www..open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid">http://www..open-mpi.org/faq/?category=openfabrics#ofa-default-subnet-gid</a>
&#194;&#160;
NOTE: You can turn off this warning by setting the MCA parameter
&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160;&#194;&#160; btl_openib_warn_default_gid_prefix to 0.
&#194;&#160;
So the question is how can I turn off this warning or how can I change MCA parameter from 1 to 0? which command I have to use?&#194;&#160;I have tried with the link above but it doesn't work. perhaps I'm not using the right command.
&#194;&#160;
&#194;&#160;
Thanks,


      
<br>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-7403/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7404.php">Jeff Squyres: "Re: [OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
<li><strong>Previous message:</strong> <a href="7402.php">Jens: "[OMPI users] Fortran90 functions missing: MPI_COMM_GET_ATTR / MPI_ATTR_GET()"</a>
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
