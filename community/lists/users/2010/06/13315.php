<?
$subject_val = "Re: [OMPI users] Master / Slave with Fortran / C languages";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 11 11:09:24 2010" -->
<!-- isoreceived="20100611150924" -->
<!-- sent="Fri, 11 Jun 2010 08:08:56 -0700" -->
<!-- isosent="20100611150856" -->
<!-- name="David Zhang" -->
<!-- email="solarbikedz_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Master / Slave with Fortran / C languages" -->
<!-- id="AANLkTikIWwmmCWkHP2Xa17l-DRfmKgdXM8TJ9v9YpvYm_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C122A8A.1050706_at_free.fr" -->
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
<strong>Subject:</strong> Re: [OMPI users] Master / Slave with Fortran / C languages<br>
<strong>From:</strong> David Zhang (<em>solarbikedz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-11 11:08:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13316.php">Zhang Linbo: "[OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>In reply to:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think if you're also using fortran compiler that support iso_c_binding (a
<br>
fortran 2003 standard) that may also help ensuring the data types are the
<br>
same.  The latest gfortran supports this.
<br>
<p>On Fri, Jun 11, 2010 at 5:22 AM, Giraudon Cyril &lt;cyril.giraudon_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Le 11/06/2010 13:12, Jeff Squyres a &#233;crit :
</span><br>
<span class="quotelev2">&gt; &gt; On Jun 11, 2010, at 5:59 AM, Giraudon Cyril wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I'd like to know if it is possible to make communicate fortran and C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; programs with MPI-2/Open MPI using the master / slave mode ?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The master is in Fortran
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The slave is in C
</span><br>
<span class="quotelev3">&gt; &gt;&gt; The exchanged Data are real, integer and character scalars and arrays.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes, it should be no problem.  It is easiest when the representations of
</span><br>
<span class="quotelev1">&gt; the data by your two compilers are the same (e.g., REAL == float, INTEGER ==
</span><br>
<span class="quotelev1">&gt; int).  It may be easiest to use compilers from the same vendor / family for
</span><br>
<span class="quotelev1">&gt; linkage purposes, but it probably isn't 100% necessary.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Thanks a lot jeff.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
David Zhang
University of California, San Diego
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13315/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13316.php">Zhang Linbo: "[OMPI users] A problem with 'mpiexec -launch-agent'"</a>
<li><strong>Previous message:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
<li><strong>In reply to:</strong> <a href="13314.php">Giraudon Cyril: "Re: [OMPI users] Master / Slave with Fortran / C languages"</a>
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
