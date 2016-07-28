<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 11:10:05 2006" -->
<!-- isoreceived="20060731151005" -->
<!-- sent="Mon, 31 Jul 2006 11:09:51 -0400" -->
<!-- isosent="20060731150951" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] minor program build problem" -->
<!-- id="C0F3957F.BDEA%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="52B7AD4481DAB448AA2A477E44A609F202C928FC_at_XCH-SW-1V1.sw.nos.boeing.com" -->
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
<strong>Date:</strong> 2006-07-31 11:09:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1697.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>In reply to:</strong> <a href="1680.php">Borenstein, Bernard S: "[OMPI users] minor program build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>Reply:</strong> <a href="1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/26/06 10:51 AM, &quot;Borenstein, Bernard S&quot;
<br>
&lt;bernard.s.borenstein_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_argv_null_' changed from 1 in
</span><br>
<span class="quotelev1">&gt; chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_argvs_null_' changed from 4 in
</span><br>
<span class="quotelev1">&gt; chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_status_ignore_' changed from 20
</span><br>
<span class="quotelev1">&gt; in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_' changed from
</span><br>
<span class="quotelev1">&gt; 4 in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev1">&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<p>Rats.  It took me several days of hunting, but I finally figured this one
<br>
out.  It seems like this only showed up in static builds of some compilers
<br>
(intel and gfortran, in my testing).
<br>
<p>This is due to something we introduced in 1.1b3 as a fix for OSX.  It's a
<br>
long, horrid story of Fortran, linkers, and bears.
<br>
<p>I committed a fix to the trunk at r11057, and included a lengthy log message
<br>
explaining what I did to fix the problem
<br>
(<a href="https://svn.open-mpi.org/trac/ompi/changeset/11057">https://svn.open-mpi.org/trac/ompi/changeset/11057</a>).  It works on all the
<br>
configurations that I could try -- could you verify that it works for you?
<br>
Here's what I tested (static and dynamic builds for all):
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1699.php">James McManus: "[OMPI users] Compiling MPI with pgf90"</a>
<li><strong>Previous message:</strong> <a href="1697.php">Marcelo Stival: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>In reply to:</strong> <a href="1680.php">Borenstein, Bernard S: "[OMPI users] minor program build problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<li><strong>Reply:</strong> <a href="1703.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
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
