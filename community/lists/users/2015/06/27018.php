<?
$subject_val = "Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  1 15:32:31 2015" -->
<!-- isoreceived="20150601193231" -->
<!-- sent="Mon, 1 Jun 2015 12:32:27 -0700" -->
<!-- isosent="20150601193227" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672" -->
<!-- id="5B53FE5A-9A2D-4DBD-82C3-46F0522D29FF_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="201506011106.t51B6oqQ008925_at_tyr.informatik.hs-fulda.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error building openmpi-v1.8.5-40-g7b9e672<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-06-01 15:32:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>In reply to:</strong> <a href="27009.php">Siegmar Gross: "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
how was this configured? We aren&#226;&#128;&#153;t seeing this problem elsewhere.
<br>
<p><p><span class="quotelev1">&gt; On Jun 1, 2015, at 4:06 AM, Siegmar Gross &lt;Siegmar.Gross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; today I tried to build openmpi-v1.8.5-40-g7b9e672 on my machines
</span><br>
<span class="quotelev1">&gt; (Solaris 10 Sparc, Solaris 10 x86_64, and openSUSE Linux 12.1
</span><br>
<span class="quotelev1">&gt; x86_64) with gcc-4.9.2 and Sun C 5.13 and I got the same error
</span><br>
<span class="quotelev1">&gt; on all three platforms with both compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; make[2]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; make  all-am
</span><br>
<span class="quotelev1">&gt; make[3]: Entering directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-v1.8.5-40-g7b9e672/ompi/mpi/fortran/base/gen-mpi-sizeof.pl \
</span><br>
<span class="quotelev1">&gt;    --header=mpif-sizeof.h --ierror=mandatory \
</span><br>
<span class="quotelev1">&gt;    --maxrank=7 \
</span><br>
<span class="quotelev1">&gt;    --generate=1 \
</span><br>
<span class="quotelev1">&gt;    --real16=1 \
</span><br>
<span class="quotelev1">&gt;    --complex32=1
</span><br>
<span class="quotelev1">&gt; ln -s 
</span><br>
<span class="quotelev1">&gt; ../../../openmpi-v1.8.5-40-g7b9e672/opal/include/opal/opal_portable_platform.h 
</span><br>
<span class="quotelev1">&gt; mpi_portable_platform.h
</span><br>
<span class="quotelev1">&gt; ln: failed to create symbolic link `mpi_portable_platform.h': File exists
</span><br>
<span class="quotelev1">&gt; make[3]: *** [mpi_portable_platform.h] Error 1
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi/include'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory 
</span><br>
<span class="quotelev1">&gt; `/export2/src/openmpi-1.8.6/openmpi-1.8.6-Linux.x86_64.64_gcc/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; linpc1 openmpi-1.8.6-Linux.x86_64.64_gcc 232 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would be grateful, if somebody could fix the problem. Thank
</span><br>
<span class="quotelev1">&gt; you very much for any help in advance.
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/06/27008.php">http://www.open-mpi.org/community/lists/users/2015/06/27008.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27019.php">Nathan Hjelm: "Re: [OMPI users] problem starting a ompi job in a mix BE/LE cluster"</a>
<li><strong>Previous message:</strong> <a href="27017.php">Nathan Hjelm: "Re: [OMPI users] gcc: Error building openmpi-v1.10-dev-41-g57faa88"</a>
<li><strong>In reply to:</strong> <a href="27009.php">Siegmar Gross: "[OMPI users] Error building openmpi-v1.8.5-40-g7b9e672"</a>
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
