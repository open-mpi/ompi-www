<?
$subject_val = "Re: [OMPI users] problems with openmpi-dev-428-g983bd49";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec  5 02:22:04 2014" -->
<!-- isoreceived="20141205072204" -->
<!-- sent="Fri, 5 Dec 2014 08:21:34 +0100 (CET)" -->
<!-- isosent="20141205072134" -->
<!-- name="Siegmar Gross" -->
<!-- email="Siegmar.Gross_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with openmpi-dev-428-g983bd49" -->
<!-- id="201412050721.sB57LY7m028865_at_tyr.informatik.hs-fulda.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="[OMPI users] problems with openmpi-dev-428-g983bd49" -->
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
<strong>Subject:</strong> Re: [OMPI users] problems with openmpi-dev-428-g983bd49<br>
<strong>From:</strong> Siegmar Gross (<em>Siegmar.Gross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-05 02:21:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25917.php">John Bray: "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Maybe in reply to:</strong> <a href="25913.php">Siegmar Gross: "[OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p><span class="quotelev1">&gt; One thing I meant to ask: has this been happening for a long time?
</span><br>
<p>I'm sorry, I don't know. In the past I used Sun Fortran 95 8.6.
<br>
<p><p><span class="quotelev1">&gt;  Or did you just start building the Fortran bindings?
</span><br>
<p>No, I use the bindings from the beginning, but our admin installed the
<br>
new Oracle Solaris Studio 12.4 suite at the end of November and now I
<br>
use Sun Fortran 95 8.7. Perhaps the new compiler is more nit-picking or
<br>
this part wasn't used/built by the old one.
<br>
<p><p>Kind regards
<br>
<p>Siegmar
<br>
<p><p><p><p><p>&nbsp;
<br>
<span class="quotelev1">&gt; I ask because we haven't (intentionally) changed much in this
</span><br>
<span class="quotelev1">&gt; particular area recently.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2014, at 11:15 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Siegmar --
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Sorry for the delay; your c_funloc issue is definitely on my queue.
</span><br>
<span class="quotelev1">&gt;  Just haven't had a chance to get to it yet.  :-(
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 4, 2014, at 11:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; today I tried to install openmpi-dev-428-g983bd49 on my machines
</span><br>
<span class="quotelev3">&gt; &gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; x86_64) with gcc-4.9.2 and the new Solaris Studio 12.4 compilers.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I was able to build everything with gcc-4.9.2, but get the following
</span><br>
<span class="quotelev3">&gt; &gt;&gt; error for &quot;make check&quot; on both Solaris machines.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Assertion failed: 0, file 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ../../../openmpi-dev-428-g983bd49/test/datatype/opal_datatype_test.c,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; line 163, function local_copy_ddt_count
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I still get the error for Sun C 5.13 that I reported before.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr openmpi-dev-428-g983bd49-Linux.x86_64.64_cc 138 tail -15 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt;  fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev3">&gt; &gt;&gt;                ^                   
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &quot;../../../../../openmpi-dev-428-g983bd49/ompi/mpi/fortran/use-mpi-f08/comm_creat
</span><br>
<span class="quotelev3">&gt; &gt;&gt; e_errhandler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; must be a procedure that is interoperable or a procedure pointer associated with 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; an interoperable procedure.
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; f90comp: 186 SOURCE LINES
</span><br>
<span class="quotelev3">&gt; &gt;&gt; f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: *** [comm_create_errhandler_f08.lo] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `/export2/src/openmpi-1.9/openmpi-dev-428-g983bd49-Linux.x86_64.64_cc/ompi/mpi/f
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ortran/use-mpi-f08'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; `/export2/src/openmpi-1.9/openmpi-dev-428-g983bd49-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; tyr openmpi-dev-428-g983bd49-Linux.x86_64.64_cc 139 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Kind regards
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Siegmar
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25913.php">http://www.open-mpi.org/community/lists/users/2014/12/25913.php</a>
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; -- 
</span><br>
<span class="quotelev2">&gt; &gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt; &gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; For corporate legal information go to: 
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25914.php">http://www.open-mpi.org/community/lists/users/2014/12/25914.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: 
</span><br>
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25917.php">John Bray: "[OMPI users] Converting --cpus-per-proc to --map-by for a hybrid code"</a>
<li><strong>Previous message:</strong> <a href="25915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Maybe in reply to:</strong> <a href="25913.php">Siegmar Gross: "[OMPI users] problems with openmpi-dev-428-g983bd49"</a>
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
