<?
$subject_val = "[OMPI devel] open mpi error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 22 02:05:15 2015" -->
<!-- isoreceived="20150122070515" -->
<!-- sent="Thu, 22 Jan 2015 12:35:14 +0530" -->
<!-- isosent="20150122070514" -->
<!-- name="khushi popat" -->
<!-- email="popat.khushi_at_[hidden]" -->
<!-- subject="[OMPI devel] open mpi error" -->
<!-- id="CALQyCD=tZx74VisE_F=26H-9aG1HhxiZ-+F0X6ytkZ05X0upxA_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI devel] open mpi error<br>
<strong>From:</strong> khushi popat (<em>popat.khushi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-22 02:05:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16817.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] open mpi error"</a>
<li><strong>Previous message:</strong> <a href="16815.php">George Bosilca: "Re: [OMPI devel] One sided tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16817.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] open mpi error"</a>
<li><strong>Reply:</strong> <a href="16817.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] open mpi error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hello everyone,
<br>
<p><p>I have set up one cluster with two nodes.one node is having two network
<br>
intewrface both are up...i have defined one of them ip address with
<br>
interface eno1 in /etc/hosts file and when i try to run send recv program
<br>
with mpirun it works welll..
<br>
<p>but when i off eno1 interface it works well with another ip address with
<br>
interface eno2....but when i again on eno1 and try to run program it will
<br>
get hanged at connecting point...
<br>
<p><p>here i m putting output where i stuck..
<br>
please help me..
<br>
output::
<br>
<p><p><p>*hello U are in MPI_init.....U are leaving MPI_init now....&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;&#239;&#191;&#189;msg from
<br>
sender::::Hello world: processor 0 of 2 of n0cc29[n0cc29:24114] btl: tcp:
<br>
attempting to connect() to [[14813,1],1] address 172.16.15.73 on port 1024*
<br>
<p>after this nothing is happening...
<br>
<p><p><p>with regards,
<br>
khushi.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16816/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16817.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] open mpi error"</a>
<li><strong>Previous message:</strong> <a href="16815.php">George Bosilca: "Re: [OMPI devel] One sided tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16817.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] open mpi error"</a>
<li><strong>Reply:</strong> <a href="16817.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] open mpi error"</a>
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
