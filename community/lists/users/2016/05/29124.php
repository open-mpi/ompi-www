<?
$subject_val = "[OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May  6 20:58:25 2016" -->
<!-- isoreceived="20160507005825" -->
<!-- sent="Fri, 6 May 2016 20:58:25 -0400" -->
<!-- isosent="20160507005825" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="[OMPI users] No core dump in some cases" -->
<!-- id="CAHXxYDjST1p1q_L_7sZeto-Ky4r3b_BwZc-+BdSpwojKdU++7w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] No core dump in some cases<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-06 20:58:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all
<br>
<p>I run MPI jobs (for test purpose only) on two different 'clusters'. Both
<br>
'clusters' have two nodes only, connected back-to-back. The two are very
<br>
similar, but not identical, both software and hardware wise.
<br>
<p>Both have ulimit -c set to unlimited. However, only one of the two creates
<br>
core files when an MPI job crashes. The other creates a text file named
<br>
something like
<br>
&lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
<br>
<p>I'd much prefer a core file because that allows me to debug with a lot more
<br>
options than a static text file with addresses. How do I get a core file in
<br>
all situations? I am using MPI source from the master branch.
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29124/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29125.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>Previous message:</strong> <a href="29123.php">Gilles Gouaillardet: "Re: [OMPI users] Error building openmpi-dev-4010-g6c9d65c on Linux with Sun C"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
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
