<?
$subject_val = "Re: [OMPI users] mpif90 error with different openmpi editions";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun 26 17:12:04 2013" -->
<!-- isoreceived="20130626211204" -->
<!-- sent="Wed, 26 Jun 2013 17:12:00 -0400" -->
<!-- isosent="20130626211200" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpif90 error with different openmpi editions" -->
<!-- id="51CB5920.7010007_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1372278151.84565.YahooMailNeo_at_web163801.mail.gq1.yahoo.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-26 17:12:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Previous message:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You say:
<br>
<p><span class="quotelev1"> &gt; one possiblity is use different mpif90 and mpicc, but I
</span><br>
<span class="quotelev1"> &gt; checked in my case they all use gcc 4.3.4
</span><br>
<p>Do you really mean gcc for both,
<br>
or is it gfortran for mpif90 perhaps?
<br>
<p>What is the output of:
<br>
<p>mpif90 --show
<br>
and
<br>
mpicc --show
<br>
<p>for each OMPI version?
<br>
<p>Maybe other list subscribers can help, but I'd suggest that
<br>
besides the information above, you send in your
<br>
configure command line for each OMPI version.
<br>
It is hard to guess what is the problem from the tidbits
<br>
of information that you sent.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p><p>On 06/26/2013 04:22 PM, xu wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No. I didn't mix environment variables. I run two editions seperately. I
</span><br>
<span class="quotelev1">&gt; searched online, one possiblity is use different mpif90 and mpicc, but I
</span><br>
<span class="quotelev1">&gt; checked in my case they all use gcc 4.3.4
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; *From:* Gus Correa &lt;gus_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; *Sent:* Tuesday, June 18, 2013 8:44 AM
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] mpif90 error with different openmpi editions
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 06/18/2013 12:28 AM, xu wrote:
</span><br>
<span class="quotelev2">&gt;  &gt; my code get this error under openmpi 1.6.4
</span><br>
<span class="quotelev2">&gt;  &gt; mpif90 -O2 -m64 -fbounds-check -ffree-line-length-0 -c -o 2dem_mpi.o
</span><br>
<span class="quotelev2">&gt;  &gt; 2dem_mpi.f90 Fatal Error: Reading module mpi at line 110 column 30:
</span><br>
<span class="quotelev2">&gt;  &gt; Expected string
</span><br>
<span class="quotelev2">&gt;  &gt; If I use mpif90: Open MPI 1.3.3
</span><br>
<span class="quotelev2">&gt;  &gt; It compiles ok. What the problem for this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Make sure you are not mixing environment variables (PATH and
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH) of the two OMPI versions you installed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22221.php">Jeff Squyres (jsquyres): "Re: [OMPI users] error: unknown type name 'ompi_jobid_t'"</a>
<li><strong>Previous message:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
<li><strong>In reply to:</strong> <a href="22219.php">xu: "Re: [OMPI users] mpif90 error with different openmpi editions"</a>
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
