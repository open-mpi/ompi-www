<?
$subject_val = "Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Apr 26 09:06:47 2008" -->
<!-- isoreceived="20080426130647" -->
<!-- sent="Sat, 26 Apr 2008 09:06:35 -0400" -->
<!-- isosent="20080426130635" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn" -->
<!-- id="87D5A98C-E734-45E2-8BD7-37A327029F85_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="E2050E86-DFF9-4F2B-8BA1-6186DB446596_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-04-26 09:06:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5539.php">Aurélien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Previous message:</strong> <a href="5537.php">Alberto Giannetti: "[OMPI users] Client/Server test"</a>
<li><strong>In reply to:</strong> <a href="5535.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, there can be all kinds of hidden dependencies and/or bootstrap  
<br>
issues with linking Fortran codes with the C compilers.  We've  
<br>
typically used the table in the Automake docs to determine which  
<br>
linker is used to understand this stuff (well, it *used* to be a  
<br>
table, but I think AM now supports too many languages/compilers to  
<br>
make it a simple table -- in the AM 1.10 docs, it's 8.13.3.1: &quot;How the  
<br>
Linker is Chosen&quot;).
<br>
<p><p><p>On Apr 25, 2008, at 9:10 PM, Barry Smith wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    A smarter colleague then I, has reminded me that is very difficult
</span><br>
<span class="quotelev1">&gt; to obtain all the
</span><br>
<span class="quotelev1">&gt; Fortran libraries and linker options that would be needed to allow the
</span><br>
<span class="quotelev1">&gt; mpicc compiler to
</span><br>
<span class="quotelev1">&gt; also link against the MPI fortran libraries successfully. I therefor
</span><br>
<span class="quotelev1">&gt; withdraw my
</span><br>
<span class="quotelev1">&gt; original question?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    Barry
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Begin forwarded message:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Barry Smith &lt;bsmith_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: April 25, 2008 3:14:06 PM CDT
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cc: Satish Balay &lt;balay_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Fwd: mpicc does not link against Fortran libraries?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is it considered a feature that mpicc does not automatically link
</span><br>
<span class="quotelev3">&gt;&gt;&gt; against the Fortran libraries?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I have a C main that uses a few Fortran functions down in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; guts I like to link with the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; C linker, but mpicc does not appear to automatically link against
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the Fortran libraries (mpif90 does
</span><br>
<span class="quotelev3">&gt;&gt;&gt; link against the C MPI libraries :-)).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is this something that could get changed?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  Barry
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5539.php">Aurélien Bouteiller: "Re: [OMPI users] Client/Server test"</a>
<li><strong>Previous message:</strong> <a href="5537.php">Alberto Giannetti: "[OMPI users] Client/Server test"</a>
<li><strong>In reply to:</strong> <a href="5535.php">Barry Smith: "[OMPI users] Fwd: mpicc does not link against Fortran libraries? Withdrawn"</a>
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
