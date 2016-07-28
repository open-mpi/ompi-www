<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec 11 09:01:40 2013" -->
<!-- isoreceived="20131211140140" -->
<!-- sent="Wed, 11 Dec 2013 14:01:23 +0000" -->
<!-- isosent="20131211140123" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="1730EDE5-8A15-45FD-8BF9-BBBAC6AD4B20_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="87wqjc64jw.fsf_-__at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-11 09:01:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="23181.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23171.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23186.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="23186.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Dec 10, 2013, at 10:42 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; This doesn't seem to have been fixed, and I think it's going to bite
</span><br>
<span class="quotelev1">&gt; here.  Is this the right change?
</span><br>
<p>Thanks for reminding us.
<br>
<p><span class="quotelev1">&gt; --- openmpi-1.6.5/ompi/config/ompi_setup_mpi_fortran.m4~	2012-04-03 15:30:24.000000000 +0100
</span><br>
<span class="quotelev1">&gt; +++ openmpi-1.6.5/ompi/config/ompi_setup_mpi_fortran.m4	2013-12-10 12:23:54.232854527 +0000
</span><br>
<span class="quotelev1">&gt; @@ -127,8 +127,8 @@
</span><br>
<span class="quotelev1">&gt;         AC_MSG_RESULT([skipped (no Fortran bindings)])
</span><br>
<span class="quotelev1">&gt;     else
</span><br>
<span class="quotelev1">&gt;         bytes=`expr 4 \* $ac_cv_sizeof_int + $ac_cv_sizeof_size_t`
</span><br>
<span class="quotelev1">&gt; -        num_integers=`expr $bytes / $OMPI_SIZEOF_FORTRAN_INTEGER`
</span><br>
<span class="quotelev1">&gt; -        sanity=`expr $num_integers \* $OMPI_SIZEOF_FORTRAN_INTEGER`
</span><br>
<span class="quotelev1">&gt; +        num_integers=`expr $bytes / $ac_cv_sizeof_int`
</span><br>
<span class="quotelev1">&gt; +        sanity=`expr $num_integers \* $ac_cv_sizeof_int`
</span><br>
<p>I think this is right, but it is has different implications for different series:
<br>
<p>1. No more releases are planned for the v1.6 series.  We can commit this fix over there, and it will be available via nightly tarballs.  There are also ABI implications -- see #2, below.
<br>
<p>2. This fix changes the ABI for the 1.5/1.6 and 1.7/1.8 series (separately, of course).  As such, we will need to make this a non-default configure option.  E.g., only do this new behavior if --enable-abi-breaking-fortran-status-i8-fix is specified (or some name like that).  By default, we have to keep the ABI for the entire 1.5/1.6 and 1.7/1.8 series -- so if you specify this switch, you acknowledge that you're breaking ABI for the -i8 case.
<br>
<p>3. For the v1.9 series (i.e., currently the SVN trunk), we can make this be the default, and the --enable-abi-breaking... switch will not exist.
<br>
<p>Sound ok?
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<li><strong>Previous message:</strong> <a href="23181.php">tmishima_at_[hidden]: "Re: [OMPI users] openmpi-1.7.4a1r29646	with	-hostfile	option	under	Torque manager"</a>
<li><strong>In reply to:</strong> <a href="23171.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23186.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Reply:</strong> <a href="23186.php">Dave Love: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
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
