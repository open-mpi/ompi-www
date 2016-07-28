<?
$subject_val = "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Dec 21 19:27:18 2015" -->
<!-- isoreceived="20151222002718" -->
<!-- sent="Tue, 22 Dec 2015 09:27:16 +0900" -->
<!-- isosent="20151222002716" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris" -->
<!-- id="567898E4.4010404_at_rist.or.jp" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="FCE7CAF5-AEA2-4598-B663-2756BFD9F455_at_dkrz.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-21 19:27:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28200.php">Ben Menadue: "[OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thomas, Siegmar and all,
<br>
<p>there is a bug in configure, it is fixed in both master and v1.10 git 
<br>
repositories (v2.x coming soon)
<br>
FCFLAGS are incorrectly reset during configure, hence the various and 
<br>
random errors you got.
<br>
<p>This is a one line fix, but you need recent autotools and re-run 
<br>
autogen.pl after you applied it.
<br>
<p><a href="https://github.com/ggouaillardet/ompi-release/commit/bb0c5116e45f66ed8048c0772b9e1f0b178d0411.diff">https://github.com/ggouaillardet/ompi-release/commit/bb0c5116e45f66ed8048c0772b9e1f0b178d0411.diff</a>
<br>
<p>diff --git a/config/ompi_fortran_check_use_only.m4 b/config/ompi_fortran_check_use_only.m4
<br>
index 3028490..c147167 100644
<br>
--- a/config/ompi_fortran_check_use_only.m4
<br>
+++ b/config/ompi_fortran_check_use_only.m4
<br>
@@ -35,6 +35,7 @@ dnl ----------------------------------------------------
<br>
&nbsp;&nbsp;AC_DEFUN([OMPI_FORTRAN_CHECK_USE_ONLY],[
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AS_VAR_PUSHDEF([use_only_var], [ompi_cv_fortran_use_only])
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OPAL_VAR_SCOPE_PUSH([FCFLAGS_save])
<br>
+    FCFLAGS_save=$FCFLAGS
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FCFLAGS=&quot;-I. $FCFLAGS&quot;
<br>
&nbsp;&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;AC_CACHE_CHECK([if Fortran compiler supports USE...ONLY], use_only_var,
<br>
<p><p>you can also apply the attached patch to the configure of the 
<br>
openmpi-1.10.2rc1 tarball
<br>
<p><p>Sorry for the inconvenience,
<br>
<p><p>Gilles
<br>
<p>On 12/22/2015 8:53 AM, Thomas Jahns wrote:
<br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 21, 2015, at 12:46 , Siegmar Gross wrote:
</span><br>
<span class="quotelev2">&gt;&gt;  LDFLAGS=&quot;-m64&quot; CC=&quot;gcc&quot; CXX=&quot;g++&quot; FC=&quot;gfortran&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CFLAGS=&quot;-m64&quot; CXXFLAGS=&quot;-m64&quot; FCFLAGS=&quot;-m64&quot; \
</span><br>
<span class="quotelev2">&gt;&gt;  CPP=&quot;cpp&quot; CXXCPP=&quot;cpp&quot; \
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I might be wrong but are you perhaps missing FFLAGS and F77 settings here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards, Thomas
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Thomas Jahns
</span><br>
<span class="quotelev1">&gt; DKRZ GmbH, Department: Application software
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Deutsches Klimarechenzentrum
</span><br>
<span class="quotelev1">&gt; Bundesstra&#223;e 45a
</span><br>
<span class="quotelev1">&gt; D-20146 Hamburg
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Phone: +49-40-460094-151
</span><br>
<span class="quotelev1">&gt; Fax: +49-40-460094-270
</span><br>
<span class="quotelev1">&gt; Email: Thomas Jahns &lt;jahns_at_[hidden] &lt;mailto:jahns_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28198.php">http://www.open-mpi.org/community/lists/users/2015/12/28198.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28199/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28199/configure-1.10.2rc1.patch">configure-1.10.2rc1.patch</a>
</ul>
<!-- attachment="configure-1.10.2rc1.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28200.php">Ben Menadue: "[OMPI users] hcoll API in 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
<li><strong>In reply to:</strong> <a href="28198.php">Thomas Jahns: "Re: [OMPI users] openmpi-1.10.2rc1: wrong ELF class on Solaris"</a>
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
