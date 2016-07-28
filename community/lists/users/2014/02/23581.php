<?
$subject_val = "[OMPI users] valgrind invalid reads for large self-sends using thread_multiple";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb 10 11:29:48 2014" -->
<!-- isoreceived="20140210162948" -->
<!-- sent="Mon, 10 Feb 2014 11:29:47 -0500" -->
<!-- isosent="20140210162947" -->
<!-- name="Daniel Ibanez" -->
<!-- email="dan.a.ibanez_at_[hidden]" -->
<!-- subject="[OMPI users] valgrind invalid reads for large self-sends using thread_multiple" -->
<!-- id="CADcFuaYSFsJtJiCZLpeAb-bHChqPksM__GJ=fjEr3vs4=YhYfQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] valgrind invalid reads for large self-sends using thread_multiple<br>
<strong>From:</strong> Daniel Ibanez (<em>dan.a.ibanez_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-10 11:29:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23582.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>Previous message:</strong> <a href="23580.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I have used OpenMPI in conjunction with Valgrind for a long time now, and
<br>
developed a list of suppressions for known false positives over time.
<br>
<p>Now I am developing a library for inter-thread communication that is based
<br>
on using OpenMPI with MPI_THREAD_MULTIPLE support. I have noticed that
<br>
sending large messages from one thread to another in the same process will
<br>
cause valgrind to complain about invalid reads. I have narrowed it down to
<br>
one function being executed on four threads in one process. Attached is a
<br>
tarball containing the error-reproducing program, valgrind suppression
<br>
file, and valgrind output.
<br>
<p>The strange thing is that the valgrind error message doesn't fit the
<br>
pattern of read-after-free or read-past-the-end. I'd like to know the
<br>
following:
<br>
<p>1) Should I even worry ? The code doesn't crash, only valgrind complains.
<br>
Is it a harmless false positive ?
<br>
2) If it is an issue, am I using MPI right?
<br>
3) If I'm using it right, then what causes this ? some kind of internal
<br>
buffering issue ?
<br>
<p>Note that I use Issend, so nothing should be freed until its completely
<br>
been read (in theory).
<br>
<p>Thank you,
<br>
<p><pre>
-- 
Dan Ibanez

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23581/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-tar attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23581/thread_test.tar">thread_test.tar</a>
</ul>
<!-- attachment="thread_test.tar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23582.php">Jeff Squyres (jsquyres): "Re: [OMPI users] simple	test	problem	hangs	on	mpi_finalize	and	consumes all	system resources"</a>
<li><strong>Previous message:</strong> <a href="23580.php">Siegmar Gross: "Re: [OMPI users] warnings and anachronisms in openmpi-1.7.4"</a>
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
