<?
$subject_val = "Re: [OMPI users] Cannot build 1.2.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 28 11:48:11 2008" -->
<!-- isoreceived="20080228164811" -->
<!-- sent="Thu, 28 Feb 2008 11:48:11 -0500" -->
<!-- isosent="20080228164811" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot build 1.2.5" -->
<!-- id="47C6E5CB.8090103_at_open-mpi.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="47C5C609.9_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot build 1.2.5<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-28 11:48:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5094.php">John Markus Bjørndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
To clean this up for the web archives, we were able to get it to work by 
<br>
using '--disable-dlopen'
<br>
<p>Tim
<br>
<p>Tim Prins wrote:
<br>
<span class="quotelev1">&gt; Scott,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I can replicate this on big red. Seems to be a libtool problem. I'll 
</span><br>
<span class="quotelev1">&gt; investigate...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Teige, Scott W wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi all,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Attempting a build of 1.2.5 on a ppc machine, particulars:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; uname -a
</span><br>
<span class="quotelev2">&gt;&gt; Linux s10c2b2 2.6.5-7.286-pseries64-lustre-1.4.10.1 #2 SMP Tue Jun 26 
</span><br>
<span class="quotelev2">&gt;&gt; 11:36:04 EDT 2007 ppc64 ppc64 ppc64 GNU/Linux
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Error message (many times)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.a(dlopen.o)(.opd+0x0): In function 
</span><br>
<span class="quotelev2">&gt;&gt; `__argz_next':
</span><br>
<span class="quotelev2">&gt;&gt; : multiple definition of `__argz_next'
</span><br>
<span class="quotelev2">&gt;&gt; ../../../opal/.libs/libopen-pal.a(libltdlc_la-ltdl.o)(.opd+0x0): first 
</span><br>
<span class="quotelev2">&gt;&gt; defined here
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Output from ./configure  and make all is attached.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for the help,
</span><br>
<span class="quotelev2">&gt;&gt; S.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="5094.php">John Markus Bjørndalen: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>Previous message:</strong> <a href="5092.php">Gleb Natapov: "Re: [OMPI users] OpenMPI 1.2.5 race condition / core dump with	MPI_Reduce and MPI_Gather"</a>
<li><strong>In reply to:</strong> <a href="5088.php">Tim Prins: "Re: [OMPI users] Cannot build 1.2.5"</a>
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
