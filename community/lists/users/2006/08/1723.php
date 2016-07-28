<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Aug  6 12:36:59 2006" -->
<!-- isoreceived="20060806163659" -->
<!-- sent="Sun, 6 Aug 2006 09:36:24 -0700" -->
<!-- isosent="20060806163624" -->
<!-- name="Borenstein, Bernard S" -->
<!-- email="bernard.s.borenstein_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 346, Issue 1" -->
<!-- id="52B7AD4481DAB448AA2A477E44A609F202C92925_at_XCH-SW-1V1.sw.nos.boeing.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] users Digest, Vol 346, Issue 1" -->
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
<strong>From:</strong> Borenstein, Bernard S (<em>bernard.s.borenstein_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-08-06 12:36:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Previous message:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Building with 1.1.1b4 fixed the problems.  Thanx for the excellent
<br>
detective work Jeff.
<br>
<p>Bernie Borenstein
<br>
The Boeing Company
<br>
<p>-----Original Message-----
<br>
From: users-request_at_[hidden] [mailto:users-request_at_[hidden]] 
<br>
Sent: Monday, July 31, 2006 9:00 AM
<br>
To: users_at_[hidden]
<br>
Subject: users Digest, Vol 346, Issue 1
<br>
<p><p>Send users mailing list submissions to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users_at_[hidden]
<br>
<p>To subscribe or unsubscribe via the World Wide Web, visit
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
or, via email, send a message with subject or body 'help' to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-request_at_[hidden]
<br>
<p>You can reach the person managing the list at
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;users-owner_at_[hidden]
<br>
<p>When replying, please edit your Subject line so it is more specific than
<br>
&quot;Re: Contents of users digest...&quot;
<br>
<p><p>Today's Topics:
<br>
<p>&nbsp;&nbsp;&nbsp;1. Re: minor program build problem (Jeff Squyres)
<br>
<p><p>----------------------------------------------------------------------
<br>
<p>Message: 1
<br>
Date: Mon, 31 Jul 2006 11:09:51 -0400
<br>
From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
<br>
Subject: Re: [OMPI users] minor program build problem
<br>
To: Open users &lt;users_at_[hidden]&gt;
<br>
Message-ID: &lt;C0F3957F.BDEA%jsquyres_at_[hidden]&gt;
<br>
Content-Type: text/plain;	charset=&quot;US-ASCII&quot;
<br>
<p>On 7/26/06 10:51 AM, &quot;Borenstein, Bernard S&quot;
<br>
&lt;bernard.s.borenstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_argv_null_' changed from 1 in
</span><br>
<p><span class="quotelev1">&gt; chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_argvs_null_' changed from 4 
</span><br>
<span class="quotelev1">&gt; in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_status_ignore_' changed from 
</span><br>
<span class="quotelev1">&gt; 20 in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_' changed 
</span><br>
<span class="quotelev1">&gt; from 4 in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<p>Rats.  It took me several days of hunting, but I finally figured this
<br>
one out.  It seems like this only showed up in static builds of some
<br>
compilers (intel and gfortran, in my testing).
<br>
<p>This is due to something we introduced in 1.1b3 as a fix for OSX.  It's
<br>
a long, horrid story of Fortran, linkers, and bears.
<br>
<p>I committed a fix to the trunk at r11057, and included a lengthy log
<br>
message explaining what I did to fix the problem
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/changeset/11057">https://svn.open-mpi.org/trac/ompi/changeset/11057</a>).  It works on all
<br>
the configurations that I could try -- could you verify that it works
<br>
for you? Here's what I tested (static and dynamic builds for all):
<br>
<p>- Linux
<br>
&nbsp;&nbsp;- AMD, gfortran 4.0
<br>
&nbsp;&nbsp;- AMD, intel 9.0
<br>
&nbsp;&nbsp;- AMD, pgi 6.1
<br>
&nbsp;&nbsp;- AMD, pathscale 2.3
<br>
- OSX
<br>
&nbsp;&nbsp;- x86, gfortran 4.2
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
------------------------------
_______________________________________________
users mailing list
users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
End of users Digest, Vol 346, Issue 1
*************************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1724.php">Benjamin Allan: "Re: [OMPI users] compilation error in c++ debug mode"</a>
<li><strong>Previous message:</strong> <a href="1722.php">Jeff Squyres: "Re: [OMPI users] compilation error in c++ debug mode"</a>
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
