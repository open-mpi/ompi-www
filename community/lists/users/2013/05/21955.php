<?
$subject_val = "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 23 09:50:44 2013" -->
<!-- isoreceived="20130523135044" -->
<!-- sent="Thu, 23 May 2013 13:50:20 +0000" -->
<!-- isosent="20130523135020" -->
<!-- name="Blosch, Edwin L" -->
<!-- email="edwin.l.blosch_at_[hidden]" -->
<!-- subject="Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI" -->
<!-- id="25AE6277FDC12F408393C11ACE6C400F0C9F5862_at_HDXDSP53.us.lmco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="519CF13C.5010505_at_aol.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI<br>
<strong>From:</strong> Blosch, Edwin L (<em>edwin.l.blosch_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-05-23 09:50:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Previous message:</strong> <a href="21954.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>In reply to:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Excellent.  Now I've read the FAQ and noticed that it doesn't mention the issue with the Fortran 90 .mod signatures.  Our applications are Fortran.  So your replies are very helpful -- now I know it really isn't practical for us to use the default OpenMPI shipped with RHEL6 since we use both Intel and PGI compilers and have several applications to accommodate.  Presumably if all the applications did INCLUDE 'mpif.h'  instead of 'USE MPI' then we could get things working, but it's not a great workaround.
<br>
<p>Thank you very much
<br>
<p>________________________________________
<br>
From: users-bounces_at_[hidden] [users-bounces_at_[hidden]] on behalf of Tim Prince [n8tm_at_[hidden]]
<br>
Sent: Wednesday, May 22, 2013 10:24 AM
<br>
To: users_at_[hidden]
<br>
Subject: EXTERNAL: Re: [OMPI users] basic questions about compiling OpenMPI
<br>
<p>On 5/22/2013 11:34 AM, Paul Kapinos wrote:
<br>
<span class="quotelev1">&gt; On 05/22/13 17:08, Blosch, Edwin L wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Apologies for not exploring the FAQ first.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; No comments =)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If I want to use Intel or PGI compilers but link against the OpenMPI
</span><br>
<span class="quotelev2">&gt;&gt; that ships with RedHat Enterprise Linux 6 (compiled with g++ I
</span><br>
<span class="quotelev2">&gt;&gt; presume), are there any issues to watch out for, during linking?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; At least, the Fortran-90 bindings (&quot;use mpi&quot;) won't work at all
</span><br>
<span class="quotelev1">&gt; (they're compiler-dependent.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So, our way is to compile a version of Open MPI with each compiler. I
</span><br>
<span class="quotelev1">&gt; think this is recommended.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note also that the version of Open MPI shipped with Linux is usuallu a
</span><br>
<span class="quotelev1">&gt; bit dusty.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
The gfortran build of Fortran library, as well as the .mod USE files,
<br>
won't work with ifort or PGI compilers.  g++ built libraries ought to
<br>
work with sufficiently recent versions of icpc.
<br>
As noted above, it's worth while to rebuild yourself, even if you use a
<br>
(preferably more up to date version of) gcc, which you can use along
<br>
with one of the commercial Fortran compilers for linux.
<br>
<p><pre>
--
Tim Prince
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21956.php">Siegmar Gross: "[OMPI users] 64-bit version of openmpi-1.6.5a1r28554 hangs"</a>
<li><strong>Previous message:</strong> <a href="21954.php">Eric Chamberland: "Re: [OMPI users] MPIIO max record size"</a>
<li><strong>In reply to:</strong> <a href="21950.php">Tim Prince: "Re: [OMPI users] basic questions about compiling OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
<li><strong>Reply:</strong> <a href="21961.php">Jeff Squyres (jsquyres): "Re: [OMPI users] EXTERNAL: Re: basic questions about compiling OpenMPI"</a>
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
