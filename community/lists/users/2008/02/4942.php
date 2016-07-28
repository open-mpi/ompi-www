<?
$subject_val = "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Feb  1 01:58:06 2008" -->
<!-- isoreceived="20080201065806" -->
<!-- sent="Fri, 01 Feb 2008 07:57:52 +0100" -->
<!-- isosent="20080201065752" -->
<!-- name="&#197;ke Sandgren" -->
<!-- email="ake.sandgren_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6" -->
<!-- id="1201849072.22897.193.camel_at_skalman.hpc2n.umu.se" -->
<!-- inreplyto="47A26159.4070001_at_llnl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI	v7.0-6<br>
<strong>From:</strong> &#197;ke Sandgren (<em>ake.sandgren_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-01 01:57:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Thu, 2008-01-31 at 16:01 -0800, Adam Moody wrote:
<br>
<span class="quotelev1">&gt; Here is some more info.  The build works if I do either of:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1)  Build with PGI v7.1-3 instead of PGI v7.0-3
</span><br>
<span class="quotelev1">&gt; (2)  Or, drop the &quot;-g&quot; option in CXXFLAGS, i.e.,
</span><br>
<span class="quotelev1">&gt; change:
</span><br>
<span class="quotelev1">&gt;     CXXFLAGS=&quot;-Msignextend -g -O2&quot;
</span><br>
<span class="quotelev1">&gt; to just:
</span><br>
<span class="quotelev1">&gt;     CXXFLAGS=&quot;-Msignextend -O2&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'd still like to know if there is a better fix (I need a 7.0-3 build 
</span><br>
<span class="quotelev1">&gt; and would prefer to have -g set).  Anyone know a better fix?
</span><br>
<span class="quotelev1">&gt; Thanks again,
</span><br>
<p>I haven't seen that problem, but if you want to build with pgi and -g
<br>
you need to patch the configure script like this.
<br>
<p>It's where it tests for building f90 modules,
<br>
without it it build the module with -g, the main program with -g and
<br>
fails the link due to missing symbols.
<br>
<p>diff -ru site/configure amd64_ubuntu606-pgi/configure
<br>
--- site/configure      2007-10-20 03:06:03.000000000 +0200
<br>
+++ amd64_ubuntu606-pgi/configure       2007-11-29 13:57:46.000000000
<br>
+0100
<br>
@@ -37286,7 +37286,7 @@
<br>
&nbsp;# 2 is actions to do if success
<br>
&nbsp;# 3 is actions to do if fail
<br>
&nbsp;echo &quot;configure:37288: $FC $FCFLAGS $FCFLAGS_f90 conftest.f90
<br>
${flag}subdir $LDFLAGS $LIBS&quot; &gt;&amp;5
<br>
-$FC $FCFLAGS $FCFLAGS_f90 conftest.f90 ${flag}subdir $LDFLAGS $LIBS
<br>
1&gt;&amp;5 2&gt;&amp;1
<br>
+$FC $FCFLAGS $FCFLAGS_f90 conftest.f90 ${flag}subdir
<br>
subdir/conftest-module.o $LDFLAGS $LIBS 1&gt;&amp;5 2&gt;&amp;1
<br>
&nbsp;ompi_status=$?
<br>
<p>&nbsp;# 1 is the message
<br>
<p><p><pre>
-- 
Ake Sandgren, HPC2N, Umea University, S-90187 Umea, Sweden
Internet: ake_at_[hidden]   Phone: +46 90 7866134 Fax: +46 90 7866126
Mobile: +46 70 7716134 WWW: <a href="http://www.hpc2n.umu.se">http://www.hpc2n.umu.se</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/01/4941.php">Adam Moody: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4943.php">Jeff Squyres: "Re: [OMPI users] Help: Trouble building OpenMPI v1.2.4 with PGI v7.0-6"</a>
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
