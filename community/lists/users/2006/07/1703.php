<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul 31 18:36:44 2006" -->
<!-- isoreceived="20060731223644" -->
<!-- sent="Mon, 31 Jul 2006 18:36:25 -0400" -->
<!-- isosent="20060731223625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] minor program build problem" -->
<!-- id="C0F3FE29.BF14%jsquyres_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C0F3957F.BDEA%jsquyres_at_cisco.com" -->
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
<strong>Date:</strong> 2006-07-31 18:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1704.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I just released 1.1.1b4 with this update.  Could you give this tarball a
<br>
whirl and let me know if it fixes your problem?
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/software/ompi/v1.1/">http://www.open-mpi.org/software/ompi/v1.1/</a>
<br>
<p><p>On 7/31/06 11:09 AM, &quot;Jeff Squyres&quot; &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 7/26/06 10:51 AM, &quot;Borenstein, Bernard S&quot; &lt;bernard.s.borenstein_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ld: Warning: size of symbol `mpi_fortran_argv_null_' changed from 1 in
</span><br>
<span class="quotelev2">&gt;&gt; chimera/discmo.o to 16 in
</span><br>
<span class="quotelev2">&gt;&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev2">&gt;&gt; ld: Warning: size of symbol `mpi_fortran_argvs_null_' changed from 4 in
</span><br>
<span class="quotelev2">&gt;&gt; chimera/discmo.o to 16 in
</span><br>
<span class="quotelev2">&gt;&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev2">&gt;&gt; ld: Warning: size of symbol `mpi_fortran_status_ignore_' changed from 20
</span><br>
<span class="quotelev2">&gt;&gt; in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev2">&gt;&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev2">&gt;&gt; ld: Warning: size of symbol `mpi_fortran_errcodes_ignore_' changed from
</span><br>
<span class="quotelev2">&gt;&gt; 4 in chimera/discmo.o to 16 in
</span><br>
<span class="quotelev2">&gt;&gt; /home/bsb3227/openmpi_1.1.1b3/lib/libmpi.a(test_constants_f.o)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Rats.  It took me several days of hunting, but I finally figured this one out.
</span><br>
<span class="quotelev1">&gt; It seems like this only showed up in static builds of some compilers (intel
</span><br>
<span class="quotelev1">&gt; and gfortran, in my testing).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is due to something we introduced in 1.1b3 as a fix for OSX.  It's a
</span><br>
<span class="quotelev1">&gt; long, horrid story of Fortran, linkers, and bears.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I committed a fix to the trunk at r11057, and included a lengthy log message
</span><br>
<span class="quotelev1">&gt; explaining what I did to fix the problem
</span><br>
<span class="quotelev1">&gt; (<a href="https://svn.open-mpi.org/trac/ompi/changeset/11057">https://svn.open-mpi.org/trac/ompi/changeset/11057</a>).  It works on all the
</span><br>
<span class="quotelev1">&gt; configurations that I could try -- could you verify that it works for you?
</span><br>
<span class="quotelev1">&gt; Here's what I tested (static and dynamic builds for all):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; - Linux
</span><br>
<span class="quotelev1">&gt;   - AMD, gfortran 4.0
</span><br>
<span class="quotelev1">&gt;   - AMD, intel 9.0
</span><br>
<span class="quotelev1">&gt;   - AMD, pgi 6.1
</span><br>
<span class="quotelev1">&gt;   - AMD, pathscale 2.3
</span><br>
<span class="quotelev1">&gt; - OSX
</span><br>
<span class="quotelev1">&gt;   - x86, gfortran 4.2
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/08/1704.php">Jeff Squyres: "Re: [OMPI users] Error sending large number of small messages"</a>
<li><strong>Previous message:</strong> <a href="1702.php">James McManus: "Re: [OMPI users] Compiling MPI with pgf90"</a>
<li><strong>In reply to:</strong> <a href="1698.php">Jeff Squyres: "Re: [OMPI users] minor program build problem"</a>
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
