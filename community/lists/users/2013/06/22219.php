<?
$subject_val = "Re: [OMPI users] mpif90 error with different openmpi editions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 26 16:22:36 2013" -->
<!-- isoreceived="20130626202236" -->
<!-- sent="Wed, 26 Jun 2013 13:22:31 -0700 (PDT)" -->
<!-- isosent="20130626202231" -->
<!-- name="xu" -->
<!-- email="linhaiyxs_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 error with different openmpi editions" -->
<!-- id="1372278151.84565.YahooMailNeo_at_web163801.mail.gq1.yahoo.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="51C06433.7040801_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpif90 error with different openmpi editions<br>
<strong>From:</strong> xu (<em>linhaiyxs_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-26 16:22:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Previous message:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22122.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Reply:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
No. I didn't mix environment variables. I run two editions seperately. I searched online, one possiblity is use different mpif90 and mpicc, but I checked in my case they all use gcc 4.3.4
<br>
<p><p><p><p>________________________________
<br>
&nbsp;From: Gus Correa &lt;gus_at_[hidden]&gt;
<br>
To: Open MPI Users &lt;users_at_[hidden]&gt; 
<br>
Sent: Tuesday, June 18, 2013 8:44 AM
<br>
Subject: Re: [OMPI users] mpif90 error with different openmpi editions
<br>
&nbsp;
<br>
<p>On 06/18/2013 12:28 AM, xu wrote:
<br>
<span class="quotelev1">&gt; my code get this error under openmpi 1.6.4
</span><br>
<span class="quotelev1">&gt; mpif90 -O2 -m64 -fbounds-check -ffree-line-length-0 -c -o 2dem_mpi.o
</span><br>
<span class="quotelev1">&gt; 2dem_mpi.f90 Fatal Error: Reading module mpi at line 110 column 30:
</span><br>
<span class="quotelev1">&gt; Expected string
</span><br>
<span class="quotelev1">&gt; If I use mpif90: Open MPI 1.3.3
</span><br>
<span class="quotelev1">&gt; It compiles ok. What the problem for this?
</span><br>
<p>Make sure you are not mixing environment variables (PATH and 
<br>
LD_LIBRARY_PATH) of the two OMPI versions you installed.
<br>
<p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22219/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Previous message:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>In reply to:</strong> <a href="22122.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>Reply:</strong> <a href="22220.php">Gus Correa: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
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
