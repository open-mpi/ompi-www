<?
$subject_val = "Re: [OMPI users] resolution of MPI_Wtime";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 10:46:29 2016" -->
<!-- isoreceived="20160405144629" -->
<!-- sent="Tue, 5 Apr 2016 10:46:26 -0400" -->
<!-- isosent="20160405144626" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] resolution of MPI_Wtime" -->
<!-- id="CC082DBB-C76A-4C9C-B9A8-8211F18F1CB5_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="87y48s163e.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] resolution of MPI_Wtime<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-04-05 10:46:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28887.php">Dave Love: "[OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28887.php">Dave Love: "[OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Open MPI uses clock_gettime when it is available, and defaults to gettimeofday only when this better option can't be found. Check that your system has clock_gettime and the resolution of this timer. 
<br>
<p>Aur&#195;&#169;lien 
<br>
<pre>
--
Aur&#195;&#169;lien Bouteiller, Ph.D. ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
&gt; Le 5 avr. 2016 &#195;&#160; 10:29, Dave Love &lt;d.love_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; I can't immediately find a reference, but I thought it had been agreed
&gt; some time ago that MPI_Wtime should use high resolution clocks where
&gt; they're available.  However, 1.10 is still using gettimeofday on
&gt; GNU/Linux.  Is there a good reason for that?
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/04/28887.php">http://www.open-mpi.org/community/lists/users/2016/04/28887.php</a>

</pre>
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28888/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Previous message:</strong> <a href="28887.php">Dave Love: "[OMPI users] resolution of MPI_Wtime"</a>
<li><strong>In reply to:</strong> <a href="28887.php">Dave Love: "[OMPI users] resolution of MPI_Wtime"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28889.php">Mark Santcroos: "Re: [OMPI users] resolution of MPI_Wtime"</a>
<li><strong>Reply:</strong> <a href="28890.php">Dave Love: "Re: [OMPI users] resolution of MPI_Wtime"</a>
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
