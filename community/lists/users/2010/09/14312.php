<?
$subject_val = "[OMPI users] Shared memory";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 24 03:47:28 2010" -->
<!-- isoreceived="20100924074728" -->
<!-- sent="Fri, 24 Sep 2010 09:46:14 +0200" -->
<!-- isosent="20100924074614" -->
<!-- name="Andrei Fokau" -->
<!-- email="andrei.fokau_at_[hidden]" -->
<!-- subject="[OMPI users] Shared memory" -->
<!-- id="AANLkTimErUNpgSzY2qKhEedWVavHFj_y0Q++fUvw643G_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Shared memory<br>
<strong>From:</strong> Andrei Fokau (<em>andrei.fokau_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-24 03:46:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14313.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14313.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14313.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14314.php">John Hearns: "Re: [OMPI users] Shared memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We use a C-program which consumes a lot of memory per process (up to few
<br>
GB), 99% of the data being the same for each process. So for us it would be
<br>
quite reasonable to put that part of data in a shared memory.
<br>
<p>In the source code, the memory is allocated via malloc() function. What
<br>
would it require for us to change in the source code to be able to put that
<br>
repeating data in a shared memory?
<br>
<p>The code is normally run on several nodes.
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-14312/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14313.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Previous message:</strong> <a href="14311.php">Andrei Fokau: "Re: [OMPI users] Running on crashing nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14313.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14313.php">Durga Choudhury: "Re: [OMPI users] Shared memory"</a>
<li><strong>Reply:</strong> <a href="14314.php">John Hearns: "Re: [OMPI users] Shared memory"</a>
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
