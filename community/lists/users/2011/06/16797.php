<?
$subject_val = "[OMPI users] Open-MPI maffinity policy";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jun 30 21:31:13 2011" -->
<!-- isoreceived="20110701013113" -->
<!-- sent="Thu, 30 Jun 2011 18:31:09 -0700" -->
<!-- isosent="20110701013109" -->
<!-- name="Qasim Ali" -->
<!-- email="qasimali_at_[hidden]" -->
<!-- subject="[OMPI users] Open-MPI maffinity policy" -->
<!-- id="BANLkTik53gB1mnAaohmKGi0EvqAWJKLNYQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Open-MPI maffinity policy<br>
<strong>From:</strong> Qasim Ali (<em>qasimali_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-06-30 21:31:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16798.php">zhuangchao: "[OMPI users] The hostfile  could not be found"</a>
<li><strong>Previous message:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16847.php">Jeff Squyres: "Re: [OMPI users] Open-MPI maffinity policy"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi folks,
<br>
<p>I installed open-mpi with the libnuma library using the --with-libnuma.
<br>
Everything installed fine. When I do
<br>
<p>./ompi_info |grep maffinity
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: first_use (MCA v2.0, API v2.0, Component v1.4.2)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA maffinity: libnuma (MCA v2.0, API v2.0, Component v1.4.2)
<br>
<p>I see two policies here. first_use and libnuma
<br>
<p>I have two questions regarding these:
<br>
1. Which policy will be used in my MPI application?
<br>
2. Do I have to specify maffinity when using mpirun command or the open-mpi
<br>
runtime will automatically use the allocation policy (first_use or libnuma?)
<br>
<p><p>Thanks,
<br>
Qasim
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16797/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16798.php">zhuangchao: "[OMPI users] The hostfile  could not be found"</a>
<li><strong>Previous message:</strong> <a href="16796.php">Prentice Bisbal: "Re: [OMPI users] Anyone with Visual Studio + MPI Experience"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16805.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Open-MPI maffinity policy"</a>
<li><strong>Maybe reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/07/16847.php">Jeff Squyres: "Re: [OMPI users] Open-MPI maffinity policy"</a>
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
