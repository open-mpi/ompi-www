<?
$subject_val = "[OMPI users] Help with Specific Binding";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Sep 12 22:39:22 2015" -->
<!-- isoreceived="20150913023922" -->
<!-- sent="Sat, 12 Sep 2015 22:39:21 -0400" -->
<!-- isosent="20150913023921" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="[OMPI users] Help with Specific Binding" -->
<!-- id="CA+ssbKX1FTcbVpvjfS9RXWT3JoU+D89aEf0SM43MzdWaLqWoAg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Help with Specific Binding<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-12 22:39:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>We've a machine as in the following picture. I'd like to run 12 MPI procs
<br>
per node each bound to 1 core, but like shown in blue dots in the pictures.
<br>
I can use the following command to run 12 procs per node, but PE=1 makes
<br>
all the 12 processes will run in just 1 socket. PE=2 will make a process
<br>
bind to 2 cores, which is not what I want.
<br>
<p>--map-by ppr:12:node:PE=1,SPAN
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>[image: Inline image 1]
<br>
<p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27558/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-27558/image.png" alt="image.png">
<!-- attachment="image.png" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Previous message:</strong> <a href="27557.php">Jeff Squyres (jsquyres): "Re: [OMPI users] As one MPI process executes MPI_Barrier(), other processes hang"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
<li><strong>Reply:</strong> <a href="27559.php">Ralph Castain: "Re: [OMPI users] Help with Specific Binding"</a>
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
