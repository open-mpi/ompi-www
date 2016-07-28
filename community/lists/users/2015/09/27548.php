<?
$subject_val = "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 09:37:45 2015" -->
<!-- isoreceived="20150908133745" -->
<!-- sent="Tue, 8 Sep 2015 06:37:42 -0700" -->
<!-- isosent="20150908133742" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi-dev-2453-g1989999: missing file" -->
<!-- id="1F07F6E1-340C-49DB-8B4A-751699D0229E_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="55EE96B6.4050608_at_informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi-dev-2453-g1989999: missing file<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-08 09:37:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27549.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27547.php">Ralph Castain: "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<li><strong>In reply to:</strong> <a href="27544.php">Siegmar Gross: "[OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hmmm&#226;&#128;&#166;best send us the configure stuff, Siegmar. Looks like you are missing a CPPFLAG
<br>
<p>Ralph
<br>
<p><span class="quotelev1">&gt; On Sep 8, 2015, at 1:05 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; yesterday I tried to build openmpi-dev-2453-g1989999 on my
</span><br>
<span class="quotelev1">&gt; machines (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE
</span><br>
<span class="quotelev1">&gt; Linux 12.1 x86_64) with gcc-5.1.0 and Sun C 5.13. I got the
</span><br>
<span class="quotelev1">&gt; following error on all machines with the GNU compiler and
</span><br>
<span class="quotelev1">&gt; on my Linux box also with the Sun compiler.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[4]: Entering directory `/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt;  CC       src/class/pmix_object.lo
</span><br>
<span class="quotelev1">&gt;  CC       src/class/pmix_list.lo
</span><br>
<span class="quotelev1">&gt;  CC       src/class/pmix_pointer_array.lo
</span><br>
<span class="quotelev1">&gt;  CC       src/class/pmix_hash_table.lo
</span><br>
<span class="quotelev1">&gt;  CC       src/include/pmix_globals.lo
</span><br>
<span class="quotelev1">&gt; In file included from ../../../../../../openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/src/include/pmix_globals.c:19:0:
</span><br>
<span class="quotelev1">&gt; /export2/src/openmpi-master/openmpi-dev-2453-g1989999/opal/mca/pmix/pmix1xx/pmix/include/private/types.h:43:27: fatal error: opal/mca/event/libevent2022/libevent2022.h: No such file or directory
</span><br>
<span class="quotelev1">&gt; compilation terminated.
</span><br>
<span class="quotelev1">&gt; make[4]: *** [src/include/pmix_globals.lo] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/export2/src/openmpi-master/openmpi-dev-2453-g1989999-SunOS.sparc.64_gcc/opal/mca/pmix/pmix1xx/pmix'
</span><br>
<span class="quotelev1">&gt; ...
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/09/27544.php">http://www.open-mpi.org/community/lists/users/2015/09/27544.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27549.php">Gilles Gouaillardet: "Re: [OMPI users] openmpi-v1.10.0-5-ge0b85ea: problem with Java"</a>
<li><strong>Previous message:</strong> <a href="27547.php">Ralph Castain: "Re: [OMPI users] openmpi-v2.x-dev-325-g8ae44ea: some warnings"</a>
<li><strong>In reply to:</strong> <a href="27544.php">Siegmar Gross: "[OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
<li><strong>Reply:</strong> <a href="27550.php">Siegmar Gross: "Re: [OMPI users] openmpi-dev-2453-g1989999: missing file"</a>
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
