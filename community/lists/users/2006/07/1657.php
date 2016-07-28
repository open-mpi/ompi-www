<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Jul 20 00:04:32 2006" -->
<!-- isoreceived="20060720040432" -->
<!-- sent="Thu, 20 Jul 2006 00:04:22 -0400" -->
<!-- isosent="20060720040422" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Summary of OMPI on OS X with Intel" -->
<!-- id="C0E47906.A1A6%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="F6480ED0-DD0E-4358-9733-5A6566EE0312_at_apple.com" -->
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
<strong>Date:</strong> 2006-07-20 00:04:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1658.php">shen T.T.: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1649.php">Warner Yuen: "[OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Reply:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7/18/06 7:33 PM, &quot;Warner Yuen&quot; &lt;wyuen_at_[hidden]&gt; wrote:
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; USING GCC 4.0.1 (build 5341) with and without Intel Fortran (build
</span><br>
<span class="quotelev1">&gt; 9.1.027):
</span><br>
<p>What version of Open MPI were you working with?  If it was a developer/SVN
<br>
checkout, what version of the GNU Auto tools were you using?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Config #2: ./configure --disable-shared --enable-static --with-rsh=/
</span><br>
<span class="quotelev1">&gt; usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; Successful Build = NO
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; g++ -O3 -DNDEBUG -finline-functions -Wl,-u -Wl,_munmap -Wl,-
</span><br>
<span class="quotelev1">&gt; multiply_defined -Wl,suppress -o ompi_info components.o ompi_info.o
</span><br>
<span class="quotelev1">&gt; output.o param.o version.o -Wl,-bind_at_load  ../../../ompi/.libs/
</span><br>
<span class="quotelev1">&gt; libmpi.a /Users/wyuen/mpi_src/openmpi-1.1/orte/.libs/liborte.a /Users/
</span><br>
<span class="quotelev1">&gt; wyuen/mpi_src/openmpi-1.1/opal/.libs/libopal.a -ldl
</span><br>
<span class="quotelev1">&gt; /usr/bin/ld: Undefined symbols:
</span><br>
<span class="quotelev1">&gt; _mpi_fortran_status_ignore_
</span><br>
<span class="quotelev1">&gt; _mpi_fortran_statuses_ignore_
</span><br>
<p>Do you have a fortran compiler at all?  If so, which one?  Please send the
<br>
full output from configure, config.log, and the output from make (stdout and
<br>
stderr).
<br>
<p><span class="quotelev1">&gt; USING Intel C (build 9.1.027) and with and without Intel Fortran
</span><br>
<span class="quotelev1">&gt; (build 9.1.027)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Config #4: ./configure --disable-mpi-f77 --disable-mpi-f90 --with-
</span><br>
<span class="quotelev1">&gt; rsh=/usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; Successful Build = NO
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; IPO link: can not find &quot;1&quot;
</span><br>
<span class="quotelev1">&gt; icc: error: problem during multi-file optimization compilation (code 1)
</span><br>
<span class="quotelev1">&gt; make[2]: *** [libopal.la] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<p>This *looks* like a libtool problem.  Can you send the full configure
<br>
output, config.log, and full output from &quot;make&quot;?
<br>
&nbsp;
<br>
<span class="quotelev1">&gt; Config #6: ./configure --disable-shared --enable-static --with-rsh=/
</span><br>
<span class="quotelev1">&gt; usr/bin/ssh
</span><br>
<span class="quotelev1">&gt; Successful Build = NO
</span><br>
<span class="quotelev1">&gt; Error:
</span><br>
<span class="quotelev1">&gt; _mpi_fortran_statuses_ignore_
</span><br>
<p>I suspect that this is the same problem as #2.
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
<li><strong>Next message:</strong> <a href="1658.php">shen T.T.: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>Previous message:</strong> <a href="1656.php">George Bosilca: "Re: [OMPI users] SEGV in libopal during MPI_Alltoall"</a>
<li><strong>In reply to:</strong> <a href="1649.php">Warner Yuen: "[OMPI users] Summary of OMPI on OS X with Intel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
<li><strong>Reply:</strong> <a href="1665.php">Jeff Squyres: "Re: [OMPI users] Summary of OMPI on OS X with Intel"</a>
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
