<?
$subject_val = "[OMPI users] Sending an objects vector via MPI C++";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  7 05:07:08 2010" -->
<!-- isoreceived="20100707090708" -->
<!-- sent="Wed, 7 Jul 2010 12:07:01 +0300" -->
<!-- isosent="20100707090701" -->
<!-- name="Saygin Arkan" -->
<!-- email="saygenius_at_[hidden]" -->
<!-- subject="[OMPI users] Sending an objects vector via MPI C++" -->
<!-- id="AANLkTilSQ5i-h30lHlcoNyaBcsDAEvPxHT9mxd8wodlw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] Sending an objects vector via MPI C++<br>
<strong>From:</strong> Saygin Arkan (<em>saygenius_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-07 05:07:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>Reply:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>I'm a newbie on MPI, just playing around with the things.
<br>
I've searched through the internet but couldn't find an appropriate code
<br>
example for my problem.
<br>
<p>I'm making comparisons, correlations on my cluster, and gaining the results
<br>
like this:
<br>
vector&lt;ComparisonResult&gt; results;
<br>
<p>In every node, they calculate and create the results array, in their local
<br>
storage.
<br>
And then I'd like to collect these vectors in my server node, rank (0).
<br>
<p>I had done this with MPI gather but just for double arrays, not with objects
<br>
or vectors.
<br>
<p>I have some guess about MPI::Create_contiguous, or MPI::Create_vector
<br>
functions,
<br>
but all these ask for another associated MPI type, such as CHAR or INT or
<br>
etc.
<br>
And I don't know if I should use packing somehow...
<br>
<p>is there a way to collect these vectors in my server node with Gather
<br>
function?
<br>
or even with send &amp; recv?
<br>
<p>Thanks a lot,
<br>
<p><pre>
-- 
Saygin
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13492/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13493.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<li><strong>Previous message:</strong> <a href="13491.php">Reuti: "Re: [OMPI users] OpenMPI Hangs, No Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
<li><strong>Reply:</strong> <a href="13494.php">Jeff Squyres: "Re: [OMPI users] Sending an objects vector via MPI C++"</a>
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
