<?
$subject_val = "Re: [OMPI users] Runtime replacement of mpi libraries?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 11 15:18:06 2014" -->
<!-- isoreceived="20140911191806" -->
<!-- sent="Thu, 11 Sep 2014 13:18:06 -0600" -->
<!-- isosent="20140911191806" -->
<!-- name="Howard Pritchard" -->
<!-- email="hppritcha_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Runtime replacement of mpi libraries?" -->
<!-- id="CAF1Cqj6P9n=HOf43PhYSicdFKgpvni4hyAiXWeqS8WrCAp=5Pg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5411EEBE.7030809_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Runtime replacement of mpi libraries?<br>
<strong>From:</strong> Howard Pritchard (<em>hppritcha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-11 15:18:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Folks,
<br>
<p>See
<br>
<p><a href="http://www.mpich.org/abi/">http://www.mpich.org/abi/</a>
<br>
<p>I'd recommend if you are using this approach to build with dynamic linking
<br>
using MPICH
<br>
from Argonne, then you should be able to run on a cray XE or XC with the
<br>
mpt 7.X or higher
<br>
module loaded, and with some luck, things will work.
<br>
<p>Doesn't look like SGI MPI is on the list.  But perhaps the Intel MPI runs
<br>
well on the SGI.
<br>
<p>Howard
<br>
<p><p>2014-09-11 12:49 GMT-06:00 Rob Latham &lt;robl_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Oh no, you fell into the MPI ABI pit!  The great and powerful sarlaac will
</span><br>
<span class="quotelev1">&gt; now digest you for a thousand millennium...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; (although after a few trips to the MPI ABI pit, no one seems quite as
</span><br>
<span class="quotelev1">&gt; eager to enter into that discussion recently.)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is an MPICH ABI, so one might, with some very recent versions, take
</span><br>
<span class="quotelev1">&gt; a binary for Intel-MPI, IBM-MPI, and MPICH and use different libraries.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's almost no hope of being able to take MPICH and swap it out for
</span><br>
<span class="quotelev1">&gt; OpenMPI.  MorphMPI might get you a bit of the way, but there are some
</span><br>
<span class="quotelev1">&gt; restrictions on what you can and cannot do with that.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 09/11/2014 01:28 PM, JR Cary wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; We need to build an application on our machine with one mpi (e.g.
</span><br>
<span class="quotelev2">&gt;&gt; openmpi),
</span><br>
<span class="quotelev2">&gt;&gt; but for performance reasons, upon installation, we would like to runtime
</span><br>
<span class="quotelev2">&gt;&gt; link to a different, specialized mpi, such as an SGI implementation
</span><br>
<span class="quotelev2">&gt;&gt; provided
</span><br>
<span class="quotelev2">&gt;&gt; for their systems.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Can one expect this to work?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I tried this with openmpi and mpich, building the code against shared
</span><br>
<span class="quotelev2">&gt;&gt; openmpi
</span><br>
<span class="quotelev2">&gt;&gt; and then changing the LD_LIBRARY_PATH to point to the shared mpich.  This
</span><br>
<span class="quotelev2">&gt;&gt; failed due to the sonames being different.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ ldd foo  | grep mpi
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi_usempi.so.1 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi_mpifh.so.2 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi.so.1 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;      libmpi_cxx.so.1 =&gt; not found
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; but in the mpich distribution one has different sonames
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.so.12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; so the runtime loader will not load the mpich libraries instead.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; and the fortran libraries (which may not matter to us) have different
</span><br>
<span class="quotelev2">&gt;&gt; names,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; $ \ls /contrib/mpich-shared/lib/*.so.12
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/mpich-shared/lib/libmpicxx.so.12
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/mpich-shared/lib/libmpifort.so.12
</span><br>
<span class="quotelev2">&gt;&gt; /contrib/mpich-shared/lib/libmpi.so.12
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there a general approach to this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Or in practice, must one build on a machine to use that machine's MPI?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thx.....John Cary
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/">http://www.open-mpi.org/community/lists/users/2014/09/</a>
</span><br>
<span class="quotelev2">&gt;&gt; 25311.php
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Rob Latham
</span><br>
<span class="quotelev1">&gt; Mathematics and Computer Science Division
</span><br>
<span class="quotelev1">&gt; Argonne National Lab, IL USA
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/09/">http://www.open-mpi.org/community/lists/users/2014/09/</a>
</span><br>
<span class="quotelev1">&gt; 25313.php
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>Previous message:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<li><strong>In reply to:</strong> <a href="25313.php">Rob Latham: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25315.php">Michael Raymond: "Re: [OMPI users] Runtime replacement of mpi libraries?"</a>
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
