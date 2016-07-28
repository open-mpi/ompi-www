<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 07:56:36 2006" -->
<!-- isoreceived="20060720115636" -->
<!-- sent="Thu, 20 Jul 2006 07:56:25 -0400" -->
<!-- isosent="20060720115625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Summary of OMPI on OS X with Intel" -->
<!-- id="C0E4E7A9.A2B6%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0E47906.A1A6%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-07-20 07:56:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1666.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<li><strong>Previous message:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/20/06 12:04 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev2">&gt;&gt; Config #2: ./configure --disable-shared --enable-static --with-rsh=/
</span><br>
<span class="quotelev2">&gt;&gt; usr/bin/ssh
</span><br>
<span class="quotelev2">&gt;&gt; Successful Build = NO
</span><br>
<span class="quotelev2">&gt;&gt; Error:
</span><br>
<span class="quotelev2">&gt;&gt; g++ -O3 -DNDEBUG -finline-functions -Wl,-u -Wl,_munmap -Wl,-
</span><br>
<span class="quotelev2">&gt;&gt; multiply_defined -Wl,suppress -o ompi_info components.o ompi_info.o
</span><br>
<span class="quotelev2">&gt;&gt; output.o param.o version.o -Wl,-bind_at_load  ../../../ompi/.libs/
</span><br>
<span class="quotelev2">&gt;&gt; libmpi.a /Users/wyuen/mpi_src/openmpi-1.1/orte/.libs/liborte.a /Users/
</span><br>
<span class="quotelev2">&gt;&gt; wyuen/mpi_src/openmpi-1.1/opal/.libs/libopal.a -ldl
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev2">&gt;&gt; _mpi_fortran_status_ignore_
</span><br>
<span class="quotelev2">&gt;&gt; _mpi_fortran_statuses_ignore_
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Do you have a fortran compiler at all?  If so, which one?  Please send the
</span><br>
<span class="quotelev1">&gt; full output from configure, config.log, and the output from make (stdout and
</span><br>
<span class="quotelev1">&gt; stderr).
</span><br>
<p>I was able to replicate this one (which, even though I don't have the Intel
<br>
compilers for OSX/intel, I'm pretty sure is the same issue as #6).  I
<br>
believe that this error will occur regardless of whether you include F77
<br>
support or not.
<br>
<p>I'm pretty sure that I have a fix for this; I think it's an
<br>
OSX-linker-specific problem.  It'll probably hit the trunk and the v1.1
<br>
branch later today.
<br>
<p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1666.php">Jeff Squyres: "Re: [OMPI users] OPEN_MPI with Intel Compiler  -regards"</a>
<li><strong>Previous message:</strong> <a href="1664.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1657.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
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
