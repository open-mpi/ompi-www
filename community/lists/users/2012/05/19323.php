<?
$subject_val = "Re: [OMPI users] Need MPI algorithms, please help";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May 21 19:45:26 2012" -->
<!-- isoreceived="20120521234526" -->
<!-- sent="Mon, 21 May 2012 17:45:20 -0600" -->
<!-- isosent="20120521234520" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need MPI algorithms, please help" -->
<!-- id="3345E73C-7CC0-467F-90D2-A894A1CCEE14_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="1337634148.16690.YahooMailNeo_at_web121703.mail.ne1.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need MPI algorithms, please help<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-21 19:45:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19319.php">Mudassar Majeed: "[OMPI users] Need MPI algorithms, please help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19325.php">Mudassar Majeed: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Reply:</strong> <a href="19325.php">Mudassar Majeed: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You haven't really stated what kind of algorithms you want, other than the fact that they need to be parallel.  :-)
<br>
<p>Your best bet is Google.  There's lots of high-quality MPI-based middleware out there such that you might not need re-invent the wheel.
<br>
<p>Good luck.
<br>
<p><p>On May 21, 2012, at 3:02 PM, Mudassar Majeed wrote:
<br>
<p><span class="quotelev1">&gt; Dear MPI people, 
</span><br>
<span class="quotelev1">&gt;                                       I need a set of algorithms for calculating the same thing using different distributed (MPI) algorithms. The algorithms may need the different data distribution and their execution times are sensitive to the problem size, number of processes and data distribution used. We are working on composition of parallel programs over the clusters, so we need such distributed algorithms written in OpenMPI that take different execution time for different parameters (data distribution, problem size and number of processes). Like a variant (algorithm) A may be good for a certain data distribution and problem size and number of processes but at certain other parameter values some other variant is better. We will do the online selection of the best algorithm for the given parameters. But we need good algorithms for that. Please provide me a link where I can find different implementations of a certain computation (distributed algorithms in OpenMPI/C or C++).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; best regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Mudassar
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>Previous message:</strong> <a href="19322.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19319.php">Mudassar Majeed: "[OMPI users] Need MPI algorithms, please help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19325.php">Mudassar Majeed: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Reply:</strong> <a href="19325.php">Mudassar Majeed: "Re: [OMPI users] Need MPI algorithms, please help"</a>
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
