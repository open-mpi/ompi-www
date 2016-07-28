<? include("../../include/msg-header.inc"); ?>
<!-- received="Sat May 12 10:43:42 2007" -->
<!-- isoreceived="20070512144342" -->
<!-- sent="Sat, 12 May 2007 10:43:29 -0400" -->
<!-- isosent="20070512144329" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] errors in stdin" -->
<!-- id="A9FE6391-B5CA-4B5E-860F-AE34D6ED42D6_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6762adfa0705120045n265d0ceh3d4182c0694b707d_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-12 10:43:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3256.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>In reply to:</strong> <a href="3248.php">anyi li: "[OMPI users] errors in stdin"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is unfortunately a known problem -- see:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="https://svn.open-mpi.org/trac/ompi/ticket/967">https://svn.open-mpi.org/trac/ompi/ticket/967</a>
<br>
<p>I mostly fixed the problem a few weeks ago, but was called away on  
<br>
other higher-priority items before fully finishing and testing the  
<br>
fix.  :-(
<br>
<p>The workaround until this is fixed is to read from a file instead of  
<br>
stdin.
<br>
<p><p>On May 12, 2007, at 3:45 AM, anyi li wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;   I am currently running the code by using
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      mpirun -np 4  abc.exe &lt; test.in&gt;out
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    abc.exe is my executed file, I list my input values in test.in as
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    AAA value1
</span><br>
<span class="quotelev1">&gt;    BBB value2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I run the same code by using intel mpi, it's fine, it can read
</span><br>
<span class="quotelev1">&gt; parameters from stdin. But when I use open mpi, it's incorrect. It
</span><br>
<span class="quotelev1">&gt; seems openmpi just put some strange character into the stdin, so my
</span><br>
<span class="quotelev1">&gt; code dosen't accept that parameters and it stops.
</span><br>
<span class="quotelev1">&gt;   Dose anyone has this kind of problems.
</span><br>
<span class="quotelev1">&gt;   thanks
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; brian
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3256.php">Rob: "Re: [OMPI users] AlphaServers &amp; OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="3254.php">Rainer Keller: "Re: [OMPI users] mpi_rank : use as function arguments, or find it again every time"</a>
<li><strong>In reply to:</strong> <a href="3248.php">anyi li: "[OMPI users] errors in stdin"</a>
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
