<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Jun  6 13:12:11 2007" -->
<!-- isoreceived="20070606171211" -->
<!-- sent="Wed, 6 Jun 2007 09:05:29 -0700" -->
<!-- isosent="20070606160529" -->
<!-- name="Lie-Quan Lee" -->
<!-- email="liequan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] how to identify openmpi in configure script" -->
<!-- id="7A7478A5-3EA0-4CE4-8E75-7D6571AFE46C_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="27E00109-764D-4B3C-97F7-9A4DD33A74BF_at_cisco.com" -->
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
<strong>From:</strong> Lie-Quan Lee (<em>liequan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-06 12:05:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>In reply to:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for willing to put more thought on it. Here is my simplified  
<br>
story. I have an accelerator physics code, Omega3P that is to perform  
<br>
complex eigenmode analysis. The algorithm for solving eigensystems  
<br>
makes use of a 3rd-party  sparse direct solver called MUMPS (http:// 
<br>
graal.ens-lyon.fr/MUMPS/). Omega3P is written in C++ with MPI. MUMPS  
<br>
is written in Fortran 95 with MPI fortran binding. And MUMPS requires  
<br>
ScaLAPACK and BLACS. (sometime the vendor provides a scientific  
<br>
library that includes BLACS and ScaLAPACK).  They are both written in  
<br>
Fortran 77 with MPI Fortran binding.
<br>
<p>I often need to compile them in various computer platforms with  
<br>
different compilers for variety of reasons.
<br>
As I mentioned before, I use C++ compiler to link the final  
<br>
executable. That will require MPI Fortran libraries and general  
<br>
Fortran libraries.
<br>
<p>What I did to solve the above problem is, I have a configure script  
<br>
in which I will detect the compiler and the platform, based on that I  
<br>
will add compiler and platform specific flags for the Fortran related  
<br>
stuff (libraries and library path). This does well until it hit next  
<br>
new platform/compiler...
<br>
<p>Some compilers made the above job slightly easier. For example in  
<br>
Pathscale compiler collection, it provides -lpathfortran for all what  
<br>
I need to link the executable using c++ compiler with fortran  
<br>
compiled libraries. So is IBM visual age compiler set if the wraper  
<br>
compilers (mpcc_r, mpf90_r) are used. The library name (-lxlf90_r) is  
<br>
different, though.
<br>
<p><p>best regards,
<br>
Rich Lee
<br>
<p><p>On Jun 6, 2007, at 4:16 AM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; On Jun 5, 2007, at 11:17 PM, Lie-Quan Lee wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; it is a quite of headache for each compiler/platform to deal with
</span><br>
<span class="quotelev2">&gt;&gt; mixed language
</span><br>
<span class="quotelev2">&gt;&gt; issues.  I have to compile my application on IBM visual age compiler,
</span><br>
<span class="quotelev2">&gt;&gt; Pathscale, Cray X1E compiler,
</span><br>
<span class="quotelev2">&gt;&gt; intel/openmpi, intel/mpich, PGI compiler ...
</span><br>
<span class="quotelev2">&gt;&gt; And of course, openmpi 1.1 is different on this comparing with
</span><br>
<span class="quotelev2">&gt;&gt; openmpi 1.2.2 (-lmpi_f77 is new to 1.2.2 version). :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You are right. MPI forum most like will not take care of this. I just
</span><br>
<span class="quotelev2">&gt;&gt; made a wish ... :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Understood; I know it's a pain.  :-(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What I want to understand, however, is what you need to do.  It seems
</span><br>
<span class="quotelev1">&gt; like your needs are a bit different than those of the mainstream --
</span><br>
<span class="quotelev1">&gt; is there a way that we can support you directly instead of forcing
</span><br>
<span class="quotelev1">&gt; you to a) identify openmpi, b) call mpi&lt;foo&gt; --showme:link to get the
</span><br>
<span class="quotelev1">&gt; relevant flags, and c) stitch them together in the manner that you  
</span><br>
<span class="quotelev1">&gt; need?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We take great pains to ensure that the mpi&lt;foo&gt; wrapper compilers
</span><br>
<span class="quotelev1">&gt; &quot;just work&quot; for all the common cases in order to avoid all the &quot;you
</span><br>
<span class="quotelev1">&gt; must identify which MPI you are using&quot; kinds of games.  Your case
</span><br>
<span class="quotelev1">&gt; sounds somewhat unusual, but perhaps there's a way we can get the
</span><br>
<span class="quotelev1">&gt; information to you in a more direct manner...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="3388.php">Tim Prins: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>Previous message:</strong> <a href="3386.php">Christopher D. Maestas: "Re: [OMPI users] MX MPI latency measurements"</a>
<li><strong>In reply to:</strong> <a href="3382.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
<li><strong>Reply:</strong> <a href="3410.php">Jeff Squyres: "Re: [OMPI users] how to identify openmpi in configure script"</a>
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
