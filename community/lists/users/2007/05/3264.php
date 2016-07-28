<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon May 14 09:06:14 2007" -->
<!-- isoreceived="20070514130614" -->
<!-- sent="Mon, 14 May 2007 15:06:10 +0200" -->
<!-- isosent="20070514130610" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem running hpcc with a threaded BLAS" -->
<!-- id="5711d990705140606i5fc4ce96y77bf1093440568e4_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="5711d990705110419t77226513g9091dae2c11a084e_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-14 09:06:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3265.php">Rainer Keller: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3263.php">Jeff Squyres: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>In reply to:</strong> <a href="3246.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>here's the result of my examination. The stack size limit set by
<br>
Gridengine is the culprit. Somehow, the h_vmem limit I gave to my
<br>
Gridengine job translated into setting the stack size limit to this
<br>
value (ulimit -s). I've edited /etc/security/limits.conf on all my
<br>
nodes, adding a hard stack size limit of 10240 and the problem is
<br>
gone.
<br>
<p>Sorry for the noise, regards, G&#246;tz Waschk
<br>
<pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3265.php">Rainer Keller: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>Previous message:</strong> <a href="3263.php">Jeff Squyres: "Re: [OMPI users] profiling MPI - getting number of send and receive request made by the MPI libray"</a>
<li><strong>In reply to:</strong> <a href="3246.php">G&#246;tz Waschk: "Re: [OMPI users] Problem running hpcc with a threaded BLAS"</a>
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
