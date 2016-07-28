<?
$subject_val = "Re: [OMPI users] Need MPI algorithms, please help";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 22 04:35:54 2012" -->
<!-- isoreceived="20120522083554" -->
<!-- sent="Tue, 22 May 2012 01:35:50 -0700 (PDT)" -->
<!-- isosent="20120522083550" -->
<!-- name="Mudassar Majeed" -->
<!-- email="mudassarm30_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need MPI algorithms, please help" -->
<!-- id="1337675750.21756.YahooMailNeo_at_web121701.mail.ne1.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="3345E73C-7CC0-467F-90D2-A894A1CCEE14_at_cisco.com" -->
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
<strong>From:</strong> Mudassar Majeed (<em>mudassarm30_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-22 04:35:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19326.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19323.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19326.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Reply:</strong> <a href="19326.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Jeff, 
&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; The algorithms can be like implementation of sorting algorithms using OpenMPI. Secondly, can you name one such MPI-middleware that performs the tuning on runtime for selection of best algorithms (based on the parameters) and composition of parallel applications ?? You need to name atleast one so that I can pursue.

best regards,




________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: Mudassar Majeed &lt;mudassarm30_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Tuesday, May 22, 2012 1:45 AM
Subject: Re: [OMPI users] Need MPI algorithms, please help
 
You haven't really stated what kind of algorithms you want, other than the fact that they need to be parallel.&#160; :-)

Your best bet is Google.&#160; There's lots of high-quality MPI-based middleware out there such that you might not need re-invent the wheel.

Good luck.


On May 21, 2012, at 3:02 PM, Mudassar Majeed wrote:

&gt; Dear MPI people, 
&gt;&#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160; &#160;  I need a set of algorithms for calculating the same thing using different distributed (MPI) algorithms. The algorithms may need the different data distribution and their execution times are sensitive to the problem size, number of processes and data distribution used. We are working on composition of parallel programs over the clusters, so we need such distributed algorithms written in OpenMPI that take different execution time for different parameters (data distribution, problem size and number of processes). Like a variant (algorithm) A may be good for a certain data distribution and problem size and number of processes but at certain other parameter values some other variant is better. We will do the online selection of the best algorithm for the given parameters. But we need good algorithms for that. Please provide me a link where I can find different implementations of a certain computation
<br>
&nbsp;(distributed algorithms in OpenMPI/C or C++).
&gt; 
&gt; best regards
&gt; 
&gt; --Mudassar
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19325/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19326.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Previous message:</strong> <a href="19324.php">Jeff Squyres: "Re: [OMPI users] mpicc link shouldn't add -ldl and -lhwloc"</a>
<li><strong>In reply to:</strong> <a href="19323.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19326.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
<li><strong>Reply:</strong> <a href="19326.php">Jeff Squyres: "Re: [OMPI users] Need MPI algorithms, please help"</a>
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
