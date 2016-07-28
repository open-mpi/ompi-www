<?
$subject_val = "Re: [OMPI users] Regarding the execution time";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May  9 11:29:55 2012" -->
<!-- isoreceived="20120509152955" -->
<!-- sent="Wed, 9 May 2012 08:29:28 -0700" -->
<!-- isosent="20120509152928" -->
<!-- name="Jingcha Joba" -->
<!-- email="pukkimonkey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Regarding the execution time" -->
<!-- id="CAOf_+-VcOJ5bW9YzevVVFtFsFotdC+3p-UJ+UnY=YtZhjQPONw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="DA09E02E-0C16-4A6D-AF88-46C5415BBEFD_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Regarding the execution time<br>
<strong>From:</strong> Jingcha Joba (<em>pukkimonkey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-09 11:29:28
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19234.php">Eduardo Morras: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>In reply to:</strong> <a href="19231.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To add to what Jeff said, there are also bunch of tools out there, which
<br>
can help you in finding the performance bottleneck in your application.
<br>
Look for TAU, Scalasca or Paraver to name a few.
<br>
You might find them helpful.
<br>
<pre>
--
Joba
On Wed, May 9, 2012 at 6:52 AM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
&gt; Google around / check textbooks, but you need to check how much time is
&gt; being spent by each part of your application.
&gt;
&gt; E.g., if just reading from disk / writing back to disk takes 6.5 seconds,
&gt; then the parallel part is trivial.
&gt;
&gt; You should time the parts of your program and see what part(s) is(are)
&gt; taking the longest, and see how to improve them.
&gt;
&gt; A general rule of thumb: remember that MPI_SEND / MPI_RECV are &quot;fast&quot;, but
&gt; are both limited by your underlying network (among other reasons), and are
&gt; considerably slower than CPU speeds.  Hence, the work required to split up
&gt; your problem into multiple parts and use MPI to communicate those parts to
&gt; the remote workers can be considered overhead -- you should minimize all
&gt; that overhead in comparison to CPU computation whenever possible.  For
&gt; example, ensure that the amount of computation work that you're giving to
&gt; each MPI process is large enough to outweigh the cost of communicating with
&gt; that MPI process.
&gt;
&gt; As a corollary to that: if you have too little work to do, the overhead of
&gt; parallelization can quickly overtake any performance benefits (e.g., wall
&gt; clock execution time).  Concrete example: if you're only sorting a small
&gt; number of integers (e.g., 100 integers), it's quite possible that
&gt; parallelizing that will be *slower* than just doing it serially.
&gt;
&gt;
&gt;
&gt; On May 9, 2012, at 8:56 AM, seshendra seshu wrote:
&gt;
&gt; &gt; Hi,
&gt; &gt; Iam very new to parallel computing and MPI, with intested i have written
&gt; an sorting algorithm with MPI. The problem is i tried reduce the execution
&gt; time i.e sorting with increase in nodes but the problem is iam unable
&gt; drease the time and i was getting like for 4nodes(1Master and 2 slaves) was
&gt; getting an avg of 6.56 sec , for  8nodes(1Master and 7 slaves) was getting
&gt; an avg of 6.62 sec and for 15nodes(1Master and 15 slaves) was getting an
&gt; avg of 6.63 sec. i am unable for  find out an clue according to theory time
&gt; has been decreased for the increase in nodes but iwas getting an increase
&gt; or constant. Please help me solving this.
&gt; &gt;
&gt; &gt;
&gt; &gt; thanking you
&gt; &gt;
&gt; &gt; --
&gt; &gt;  WITH REGARDS
&gt; &gt; M.L.N.Seshendra
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
&gt;
&gt; --
&gt; Jeff Squyres
&gt; jsquyres_at_[hidden]
&gt; For corporate legal information go to:
&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19235/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19236.php">Eduardo Morras: "Re: [OMPI users] MPI_Recv hangs"</a>
<li><strong>Previous message:</strong> <a href="19234.php">Eduardo Morras: "Re: [OMPI users] GPU and CPU timing - OpenMPI and Thrust"</a>
<li><strong>In reply to:</strong> <a href="19231.php">Jeff Squyres: "Re: [OMPI users] Regarding the execution time"</a>
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
