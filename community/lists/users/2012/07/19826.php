<?
$subject_val = "Re: [OMPI users] Fortran90 Bindings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 26 04:22:42 2012" -->
<!-- isoreceived="20120726082242" -->
<!-- sent="Thu, 26 Jul 2012 10:24:12 +0200" -->
<!-- isosent="20120726082412" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fortran90 Bindings" -->
<!-- id="5010FEAC.1080608_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8A9547392E2EB443894AF275470DF5E31A329370_at_hou150w8xmbx02.hou150.chevrontexaco.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fortran90 Bindings<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-07-26 04:24:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19827.php">Shiqing Fan: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Previous message:</strong> <a href="19825.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>In reply to:</strong> <a href="19823.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Sudhir,
<br>
<p>Damien is correct. For f77 bindings both 32 and 64 bits are supported. 
<br>
The thread you mentioned is something different.
<br>
<p>Shiqing
<br>
<p>On 2012-07-25 6:11 PM, Kumar, Sudhir wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am new to Open MPI so please pardon my ignorance, I just came across 
</span><br>
<span class="quotelev1">&gt; an article which refers to F77 bindings available for 32 bit windows 
</span><br>
<span class="quotelev1">&gt; only, It was as of June. Has something changed since then,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2012/06/19525.php">http://www.open-mpi.org/community/lists/users/2012/06/19525.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks so much.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; *From:*users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] 
</span><br>
<span class="quotelev1">&gt; *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt; *Sent:* Wednesday, July 25, 2012 10:52 AM
</span><br>
<span class="quotelev1">&gt; *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt; *Subject:* Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sudhir,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; F77 works on both.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 25/07/2012 8:55 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I have one more related question. Is the F77 bindings available
</span><br>
<span class="quotelev1">&gt;     for both 64bit and 32 bit windows environments or just for the 32
</span><br>
<span class="quotelev1">&gt;     bit environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;     &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt;     *Sent:* Wednesday, July 18, 2012 10:11 AM
</span><br>
<span class="quotelev1">&gt;     *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;     *Subject:* Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hmmm.  6 months ago there weren't F90 bindings in the Windows
</span><br>
<span class="quotelev1">&gt;     version (the F90 bindings are large and tricky).  It's an option
</span><br>
<span class="quotelev1">&gt;     you can select when you compile it yourself, but looking at the
</span><br>
<span class="quotelev1">&gt;     one I just did a month ago, there's still no mpif90.exe built, so
</span><br>
<span class="quotelev1">&gt;     I'd say that's still not supported on Windows. :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Damien
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 18/07/2012 9:00 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Hi had meant to say if Fortran90 bindings for Windows
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         *Sudhir Kumar*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         *From:*users-bounces_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         &lt;mailto:users-bounces_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;         [mailto:users-bounces_at_[hidden]] *On Behalf Of *Damien
</span><br>
<span class="quotelev1">&gt;         *Sent:* Wednesday, July 18, 2012 9:56 AM
</span><br>
<span class="quotelev1">&gt;         *To:* Open MPI Users
</span><br>
<span class="quotelev1">&gt;         *Subject:* Re: [OMPI users] Fortran90 Bindings
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         Yep.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         On 18/07/2012 8:53 AM, Kumar, Sudhir wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Just wondering if Fortran90 bindings are available for
</span><br>
<span class="quotelev1">&gt;             OpemMPI 1.6
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             *Sudhir Kumar*
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
---------------------------------------------------------------
Shiqing Fan
High Performance Computing Center Stuttgart (HLRS)
Tel: ++49(0)711-685-87234      Nobelstrasse 19
Fax: ++49(0)711-685-65832      70569 Stuttgart
<a href="http://www.hlrs.de/organization/people/shiqing-fan/">http://www.hlrs.de/organization/people/shiqing-fan/</a>
email: fan_at_[hidden]
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-19826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19827.php">Shiqing Fan: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>Previous message:</strong> <a href="19825.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
<li><strong>In reply to:</strong> <a href="19823.php">Kumar, Sudhir: "Re: [OMPI users] Fortran90 Bindings"</a>
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
