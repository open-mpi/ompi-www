<?
$subject_val = "Re: [OMPI users] ERROR: C_FUNLOC function";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 17 06:17:00 2014" -->
<!-- isoreceived="20141217111700" -->
<!-- sent="Wed, 17 Dec 2014 11:16:57 +0000" -->
<!-- isosent="20141217111657" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ERROR: C_FUNLOC function" -->
<!-- id="6C37BF00-9D3B-4EA1-B86B-DDDABD333F23_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="201412150622.sBF6MeHB014241_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] ERROR: C_FUNLOC function<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-17 06:16:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26010.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<li><strong>In reply to:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26012.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Siegmar --
<br>
<p>This fix was just pushed to the OMPI master.  A new master tarball should be available shortly (probably within an hour or so -- look for a tarball dated Dec 17 at <a href="http://www.open-mpi.org/nightly/master/">http://www.open-mpi.org/nightly/master/</a>).
<br>
<p>I anticipate that this fix will also make it in for the v1.8.4 release (see <a href="https://github.com/open-mpi/ompi-release/pull/136">https://github.com/open-mpi/ompi-release/pull/136</a>); Ralph will be making a new RC tarball sometime this morning.
<br>
<p><p>On Dec 15, 2014, at 1:22 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; a similar issue was reported in mpich with xlf compilers :
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://trac.mpich.org/projects/mpich/ticket/2144">http://trac.mpich.org/projects/mpich/ticket/2144</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; They concluded this is a compiler issue (e.g. the compiler does not
</span><br>
<span class="quotelev2">&gt;&gt; implement TS 29113 subclause 8.1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much. I'll report the problem to Oracle and perhaps
</span><br>
<span class="quotelev1">&gt; they can and will fix their compiler problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Kind regards
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Siegmar
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; i made PR 315 <a href="https://github.com/open-mpi/ompi/pull/315">https://github.com/open-mpi/ompi/pull/315</a>
</span><br>
<span class="quotelev2">&gt;&gt; f08 binding support is disabled if TS29113 subclause 8.1 is not implemented
</span><br>
<span class="quotelev2">&gt;&gt; could you please review/comment on this ?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 2014/12/12 2:28, Siegmar Gross wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; will you have the time to fix the Fortran problem for the new Oracle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Solaris Studio 12.4 compiler suite in openmpi-1.8.4?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tyr openmpi-1.8.4rc2-SunOS.sparc.64_cc 103 tail -15 
</span><br>
<span class="quotelev1">&gt; log.make.SunOS.sparc.64_cc 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt;  PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt;   fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;                 ^                   
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &quot;../../../../../openmpi-1.8.4rc2/ompi/mpi/fortran/use-mpi-f08/comm_create_errhan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; dler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
</span><br>
<span class="quotelev1">&gt; must be 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a procedure that is interoperable or a procedure pointer associated with an 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; interoperable procedure.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/12/25963.php">http://www.open-mpi.org/community/lists/users/2014/12/25963.php</a>
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25993.php">http://www.open-mpi.org/community/lists/users/2014/12/25993.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26010.php">Alex A. Schmidt: "Re: [OMPI users] OMPI users] OMPI users] OMPI users] MPI inside MPI (still)"</a>
<li><strong>Previous message:</strong> <a href="26008.php">Jeff Squyres (jsquyres): "Re: [OMPI users] disable library interposition?"</a>
<li><strong>In reply to:</strong> <a href="25993.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26012.php">Siegmar Gross: "Re: [OMPI users] ERROR: C_FUNLOC function"</a>
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
