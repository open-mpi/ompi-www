<?
$subject_val = "Re: [OMPI users] problems with openmpi-dev-428-g983bd49";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec  4 11:17:15 2014" -->
<!-- isoreceived="20141204161715" -->
<!-- sent="Thu, 4 Dec 2014 16:17:13 +0000" -->
<!-- isosent="20141204161713" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problems with openmpi-dev-428-g983bd49" -->
<!-- id="C2A6144B-A55A-468F-B5AF-4DCB599A8AB5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="EEAC5E5A-4742-4BF0-B447-4FEA30D63951_at_cisco.com" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-04 11:17:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Previous message:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>In reply to:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
One thing I meant to ask: has this been happening for a long time?  Or did you just start building the Fortran bindings?
<br>
<p>I ask because we haven't (intentionally) changed much in this particular area recently.
<br>
<p><p>On Dec 4, 2014, at 11:15 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Siegmar --
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the delay; your c_funloc issue is definitely on my queue.  Just haven't had a chance to get to it yet.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Dec 4, 2014, at 11:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; today I tried to install openmpi-dev-428-g983bd49 on my machines
</span><br>
<span class="quotelev2">&gt;&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev2">&gt;&gt; x86_64) with gcc-4.9.2 and the new Solaris Studio 12.4 compilers.
</span><br>
<span class="quotelev2">&gt;&gt; I was able to build everything with gcc-4.9.2, but get the following
</span><br>
<span class="quotelev2">&gt;&gt; error for &quot;make check&quot; on both Solaris machines.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Assertion failed: 0, file 
</span><br>
<span class="quotelev2">&gt;&gt; ../../../openmpi-dev-428-g983bd49/test/datatype/opal_datatype_test.c,
</span><br>
<span class="quotelev2">&gt;&gt; line 163, function local_copy_ddt_count
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I still get the error for Sun C 5.13 that I reported before.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-dev-428-g983bd49-Linux.x86_64.64_cc 138 tail -15 
</span><br>
<span class="quotelev2">&gt;&gt; log.make.Linux.x86_64.64_cc
</span><br>
<span class="quotelev2">&gt;&gt; PPFC     comm_compare_f08.lo
</span><br>
<span class="quotelev2">&gt;&gt; PPFC     comm_connect_f08.lo
</span><br>
<span class="quotelev2">&gt;&gt; PPFC     comm_create_errhandler_f08.lo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;  fn = c_funloc(comm_errhandler_fn)
</span><br>
<span class="quotelev2">&gt;&gt;                ^                   
</span><br>
<span class="quotelev2">&gt;&gt; &quot;../../../../../openmpi-dev-428-g983bd49/ompi/mpi/fortran/use-mpi-f08/comm_creat
</span><br>
<span class="quotelev2">&gt;&gt; e_errhandler_f08.F90&quot;, Line = 22, Column = 18: ERROR: C_FUNLOC function argument 
</span><br>
<span class="quotelev2">&gt;&gt; must be a procedure that is interoperable or a procedure pointer associated with 
</span><br>
<span class="quotelev2">&gt;&gt; an interoperable procedure.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; f90comp: 186 SOURCE LINES
</span><br>
<span class="quotelev2">&gt;&gt; f90comp: 1 ERRORS, 0 WARNINGS, 0 OTHER MESSAGES, 0 ANSI
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: *** [comm_create_errhandler_f08.lo] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-1.9/openmpi-dev-428-g983bd49-Linux.x86_64.64_cc/ompi/mpi/f
</span><br>
<span class="quotelev2">&gt;&gt; ortran/use-mpi-f08'
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev2">&gt;&gt; `/export2/src/openmpi-1.9/openmpi-dev-428-g983bd49-Linux.x86_64.64_cc/ompi'
</span><br>
<span class="quotelev2">&gt;&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt;&gt; tyr openmpi-dev-428-g983bd49-Linux.x86_64.64_cc 139 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Siegmar
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
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25913.php">http://www.open-mpi.org/community/lists/users/2014/12/25913.php</a>
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/12/25914.php">http://www.open-mpi.org/community/lists/users/2014/12/25914.php</a>
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
<li><strong>Next message:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>Previous message:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<li><strong>In reply to:</strong> <a href="25914.php">Jeff Squyres (jsquyres): "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25916.php">Siegmar Gross: "Re: [OMPI users] problems with openmpi-dev-428-g983bd49"</a>
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
