<?
$subject_val = "Re: [OMPI users] Accessing data member of MPI_File struct";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Aug 31 06:00:17 2012" -->
<!-- isoreceived="20120831100017" -->
<!-- sent="Fri, 31 Aug 2012 05:59:22 -0400" -->
<!-- isosent="20120831095922" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Accessing data member of MPI_File struct" -->
<!-- id="61331F42-99B4-4682-98AC-D5E6AD829DBD_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAGSPLM=VsbxUUrwkU9Wrd+2V--igsbbP2XJ_mVkbL+56Y3yJwA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Accessing data member of MPI_File struct<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-08-31 05:59:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20081.php">Mudassar Majeed: "[OMPI users] [SPAM:### 83%] Re:"</a>
<li><strong>Previous message:</strong> <a href="20079.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 30, 2012, at 11:35 PM, Ammar Ahmad Awan wrote:
<br>
<p><span class="quotelev1">&gt; My real problem is that I want to access the fields from the MPI_File structure other than the ones provided by the API e.g. the fd_sys.  
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Atomicity was just one example I used to explain my problem. If MPI_File is an opaque structure, is there any other way or any other structure through which I can reach the fields?
</span><br>
<p>Nope.  The whole point is that MPI_File is a handle to an opaque data structure on the back end.  Using the API functions is the only portable way to get to the data.
<br>
<p>I see that you asked exactly the same question on both the Open MPI and MPICH2 lists at the same time -- know that our back-end data structures are different.  Hence, even if you could access the fields of Open MPI, that wouldn't help you with MPICH2.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20081.php">Mudassar Majeed: "[OMPI users] [SPAM:### 83%] Re:"</a>
<li><strong>Previous message:</strong> <a href="20079.php">Randolph Pullen: "[OMPI users] Infiniband performance Problem and stalling"</a>
<li><strong>In reply to:</strong> <a href="20078.php">Ammar Ahmad Awan: "Re: [OMPI users] Accessing data member of MPI_File struct"</a>
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
