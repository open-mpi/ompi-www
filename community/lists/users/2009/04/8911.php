<?
$subject_val = "Re: [OMPI users] PGI Fortran pthread support";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 14 13:09:12 2009" -->
<!-- isoreceived="20090414170912" -->
<!-- sent="Tue, 14 Apr 2009 13:09:03 -0400" -->
<!-- isosent="20090414170903" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PGI Fortran pthread support" -->
<!-- id="49E4C32F.2070506_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="49E4BC4A.4040408_at_cora.nwra.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PGI Fortran pthread support<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-14 13:09:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<li><strong>Previous message:</strong> <a href="8910.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8910.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Orion Poplawski wrote:
<br>
<span class="quotelev1">&gt; Gus Correa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Orion, Prentice, list
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I had a related problem recently,
</span><br>
<span class="quotelev2">&gt;&gt; building OpenMPI with gcc, g++ and pgf90 8.0-4 on CentOS 5.2.
</span><br>
<span class="quotelev2">&gt;&gt; Configure would complete, but not make.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Easier solution is to set FC to &quot;pgf90 -noswitcherror&quot;.  Does not appear 
</span><br>
<span class="quotelev1">&gt; to interfere with any configure tests.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thank you, Orion!
<br>
<p>That will also solve the problem,
<br>
and is certainly neater than stripping off the &quot;-pthread&quot; flag
<br>
with a fake compiler script.
<br>
<p>I didn't know about &quot;-noswitcherror&quot;, so many switches there are,
<br>
not all of them very clear, and the number is growing ...
<br>
<p>The only problem I can think of would be if you misspell another switch,
<br>
one that you really want to use.
<br>
Man pgf90 says it will accept the misspell/mistake
<br>
with a warning message.
<br>
So, to be safe with &quot;-noswitcherror&quot;,
<br>
one has to grep the make log for PGI warning messages, I suppose,
<br>
which is no big deal anyway.
<br>
<p>Gus Correa
<br>
---------------------------------------------------------------------
<br>
Gustavo Correa
<br>
Lamont-Doherty Earth Observatory - Columbia University
<br>
Palisades, NY, 10964-8000 - USA
<br>
---------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8912.php">Jeff Squyres: "Re: [OMPI users] all2all algorithms"</a>
<li><strong>Previous message:</strong> <a href="8910.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
<li><strong>In reply to:</strong> <a href="8910.php">Orion Poplawski: "Re: [OMPI users] PGI Fortran pthread support"</a>
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
