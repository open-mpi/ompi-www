<?
$subject_val = "Re: [OMPI users] Crash in _int_malloc via MPI_Init";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jun 15 16:20:55 2008" -->
<!-- isoreceived="20080615202055" -->
<!-- sent="Sun, 15 Jun 2008 15:20:45 -0500" -->
<!-- isosent="20080615202045" -->
<!-- name="Dirk Eddelbuettel" -->
<!-- email="edd_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Crash in _int_malloc via MPI_Init" -->
<!-- id="18517.31133.88459.978309_at_ron.nulle.part" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="200806151553.23126.lists_at_informa.tiker.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Crash in _int_malloc via MPI_Init<br>
<strong>From:</strong> Dirk Eddelbuettel (<em>edd_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-15 16:20:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5876.php">Andreas Kl&#195;&#182;ckner: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="5876.php">Andreas Kl&#195;&#182;ckner: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Reply:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 15 June 2008 at 15:53, Andreas Kl&#246;ckner wrote:
<br>
| On Mittwoch 14 Mai 2008, Andreas Kl&#246;ckner wrote:
<br>
| &gt; Hi there,
<br>
| &gt;
<br>
| &gt; I would like to put this crash bug [1] that Sam Adams pointed out back on
<br>
| &gt; the radar--I ran into this, and there's also an Ubuntu bug [2] (which also
<br>
| &gt; contains my stack trace).
<br>
| &gt;
<br>
| &gt; Anybody have an idea what could cause this?
<br>
| &gt;
<br>
| &gt; Thanks,
<br>
| &gt; Andreas
<br>
| &gt;
<br>
| &gt; [1] <a href="http://www.open-mpi.org/community/lists/users/2007/08/3844.php">http://www.open-mpi.org/community/lists/users/2007/08/3844.php</a>
<br>
| &gt; [2] <a href="https://bugs.launchpad.net/bugs/210273">https://bugs.launchpad.net/bugs/210273</a>
<br>
| 
<br>
| Dirk Eddelbuettel has pinpointed this to (likely) be a binutils issue (in 
<br>
| Ubuntu, among others, not in Debian)
<br>
| 
<br>
| See <a href="https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837">https://bugs.launchpad.net/ubuntu/+source/binutils/+bug/234837</a>
<br>
<p>Yup: I still suspect compiler / linker changes in Ubuntu between Gutsy
<br>
(released Oct 2007) and Hardy (April 2008).
<br>
<p>Why? Because the exactly same source package for Open MPI (as maintained by
<br>
Manuel and myself for Debian) works for me on Ubuntu Hardy __if I compile it
<br>
on Ubuntu Gutsy__.
<br>
<p>Now, I reported this to Ubuntu ... for no answer.  Lucas and Christoph at
<br>
Debian today released a feature allowing us Debian maintainers to see which
<br>
our packages have bugreports in Ubuntu.  It was only through this mechanism
<br>
that I learned that the segfault I saw with Rmpi (using Open MPI) had been
<br>
experienced by someone else, and that a similar bug occurs with Python use on
<br>
top of Open MPI.
<br>
<p>But still no tangible answer from Canonical / Ubuntu other that some
<br>
reshuffling of bug reports titles and numbers.  Very disappointing.
<br>
<p>I am CCing Steffen and Andreas who've seen similar bugs and are awaiting
<br>
answers too.  I am also CCing Cesare at Ubuntu who did the bug rearrangement,
<br>
maybe he will find a moment to share their plans with us.
<br>
<p>Tschoe,  Dirk
<br>
<p><p>| Andreas
<br>
| 
<br>
| _______________________________________________
<br>
| users mailing list
<br>
| users_at_[hidden]
<br>
| <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<pre>
-- 
Three out of two people have difficulties with fractions.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Previous message:</strong> <a href="5876.php">Andreas Kl&#195;&#182;ckner: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>In reply to:</strong> <a href="5876.php">Andreas Kl&#195;&#182;ckner: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
<li><strong>Reply:</strong> <a href="5878.php">Brian Barrett: "Re: [OMPI users] Crash in _int_malloc via MPI_Init"</a>
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
