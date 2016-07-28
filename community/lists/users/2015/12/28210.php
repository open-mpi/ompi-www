<?
$subject_val = "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 31 18:10:47 2015" -->
<!-- isoreceived="20151231231047" -->
<!-- sent="Thu, 31 Dec 2015 18:10:17 -0500" -->
<!-- isosent="20151231231017" -->
<!-- name="Matt Thompson" -->
<!-- email="fortran_at_[hidden]" -->
<!-- subject="Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers" -->
<!-- id="CAFb48S-wP=0VezatcArGQ3juSi=O-qEbTb3ZdoFrGE0VN4us+A_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAGKz=uLo6FOd8HJS+rcxoFaipy+SvPPr74HNSxWA-NRJ+E=+Kw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers<br>
<strong>From:</strong> Matt Thompson (<em>fortran_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-31 18:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, Dec 31, 2015 at 4:37 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Try using the same LDFLAGS for PGI. I think you got exactly what you
</span><br>
<span class="quotelev1">&gt; asked for from PGI when you used -Bstatic_pgi.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm not sure what value there is to having mpirun be a static binary,
</span><br>
<span class="quotelev1">&gt; other than enabling users to be ignorant of how LD_LIBRARY_PATH works and
</span><br>
<span class="quotelev1">&gt;
</span><br>
wasting space in your filesystem. You should instead consider rpath.
<br>
<span class="quotelev1">&gt;
</span><br>
<p>Jeff,
<br>
<p>I found one excuse. On a desktop of mine I build Open MPI with gfortran,
<br>
PGI, and Intel. It turns out if I built Intel Fortran + Open MPI with
<br>
--enable-shared, it would not compile ESMF correctly. I'm going to try and
<br>
revisit it next week because I want Intel OpenMPI as shared so I can easily
<br>
use Allinea MAP.
<br>
<p>I'll try and make a good report for you/ESMF.
<br>
<p><pre>
-- 
Matt Thompson
Man Among Men
Fulcrum of History
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28210/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Previous message:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>In reply to:</strong> <a href="28209.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
<li><strong>Reply:</strong> <a href="28211.php">Jeff Hammond: "Re: [OMPI users] statically linked OpenMPI 1.10.1 with PGI compilers"</a>
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
