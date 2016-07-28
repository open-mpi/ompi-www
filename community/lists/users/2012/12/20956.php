<?
$subject_val = "[OMPI users] Possible memory error";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 14 16:34:47 2012" -->
<!-- isoreceived="20121214213447" -->
<!-- sent="Fri, 14 Dec 2012 22:31:40 +0100" -->
<!-- isosent="20121214213140" -->
<!-- name="Handerson, Steven" -->
<!-- email="steven.handerson_at_[hidden]" -->
<!-- subject="[OMPI users] Possible memory error" -->
<!-- id="5B7E19405479894CB319783A4F404E4802B522494F_at_RNUMSEM722.nala.roche.com" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Possible memory error<br>
<strong>From:</strong> Handerson, Steven (<em>steven.handerson_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-12-14 16:31:40
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Reply:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Folks,
<br>
<p>I'm trying to track down an instance of openMPI writing to a freed block of memory.
<br>
This occurs with the most recent release (1.6.3) as well as 1.6, on a 64 bit intel architecture, fedora 14.
<br>
It occurs with a very simple reduction (allreduce minimum), over a single int value.
<br>
<p>Has anyone had any recent problems like this?  It may be showing up as an intermittent error
<br>
(i.e. there's no problem as long as the allocated block hasn't been re-allocated, which depends upon malloc).
<br>
You may not know about it unless you've been debugging malloc with valgrind or dmalloc or the like.
<br>
<p>I'm wondering if the openMPI developers use power tools such as valgrind / dmalloc / etc
<br>
on the releases to try to catch these things via exhaustive testing -
<br>
but I understand memory problems in C are of the nature that anyone making a mistake can propogate,
<br>
so I haven't ruled out problems in our own code.
<br>
Also, I'm wondering if anyone has suggestions on how to track this down further.
<br>
<p>I'm using allinea DDT and their builtin dmalloc, which catches the error, which appears in
<br>
the second memcpy in  opal_convertor_pack(), but I don't have more details than that at the moment.
<br>
All I know so far is that one of those values has been freed.
<br>
Obviously, I haven't seen anything in earlier parts of the code which might have triggered memory corruption,
<br>
although both openMPI and intel IPP do things with uninitialized values before this (according to Valgrind).
<br>
<p>Steve H.
<br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20956/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20957.php">Daniel Davidson: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<li><strong>Previous message:</strong> <a href="20955.php">Ralph Castain: "Re: [OMPI users] mpi problems/many cpus per node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
<li><strong>Reply:</strong> <a href="20963.php">Jeff Squyres: "Re: [OMPI users] Possible memory error"</a>
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
