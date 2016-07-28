<?
$subject_val = "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 12 12:03:11 2013" -->
<!-- isoreceived="20131212170311" -->
<!-- sent="Thu, 12 Dec 2013 17:03:09 +0000" -->
<!-- isosent="20131212170309" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing" -->
<!-- id="87r49i3stu.fsf_at_pc102091.liv.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1730EDE5-8A15-45FD-8BF9-BBBAC6AD4B20_at_cisco.com" -->
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
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-12 12:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23187.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&quot;Jeff Squyres (jsquyres)&quot; &lt;jsquyres_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; On Dec 10, 2013, at 10:42 AM, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This doesn't seem to have been fixed, and I think it's going to bite
</span><br>
<span class="quotelev2">&gt;&gt; here.  Is this the right change?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for reminding us.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --- openmpi-1.6.5/ompi/config/ompi_setup_mpi_fortran.m4~	2012-04-03 15:30:24.000000000 +0100
</span><br>
<span class="quotelev2">&gt;&gt; +++ openmpi-1.6.5/ompi/config/ompi_setup_mpi_fortran.m4	2013-12-10 12:23:54.232854527 +0000
</span><br>
<span class="quotelev2">&gt;&gt; @@ -127,8 +127,8 @@
</span><br>
<span class="quotelev2">&gt;&gt;         AC_MSG_RESULT([skipped (no Fortran bindings)])
</span><br>
<span class="quotelev2">&gt;&gt;     else
</span><br>
<span class="quotelev2">&gt;&gt;         bytes=`expr 4 \* $ac_cv_sizeof_int + $ac_cv_sizeof_size_t`
</span><br>
<span class="quotelev2">&gt;&gt; -        num_integers=`expr $bytes / $OMPI_SIZEOF_FORTRAN_INTEGER`
</span><br>
<span class="quotelev2">&gt;&gt; -        sanity=`expr $num_integers \* $OMPI_SIZEOF_FORTRAN_INTEGER`
</span><br>
<span class="quotelev2">&gt;&gt; +        num_integers=`expr $bytes / $ac_cv_sizeof_int`
</span><br>
<span class="quotelev2">&gt;&gt; +        sanity=`expr $num_integers \* $ac_cv_sizeof_int`
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I think this is right, but it is has different implications for different series:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. No more releases are planned for the v1.6 series.
</span><br>
<p>Yes, but I need it for compatibility.
<br>
<p>(In case anyone else tries:  for some reason I can't rebuild configure
<br>
with the autotools on RHEL6, though it has the specified versions or
<br>
above; I patched configure directly.)
<br>
<p><span class="quotelev1">&gt; We can commit this fix over there, and it will be available via nightly tarballs.  There are also ABI implications -- see #2, below.
</span><br>
<p>I'm building rpms with patches anyhow.
<br>
<p><span class="quotelev1">&gt; 2. This fix changes the ABI for the 1.5/1.6 and 1.7/1.8 series
</span><br>
<span class="quotelev1">&gt; (separately, of course).  As such, we will need to make this a
</span><br>
<span class="quotelev1">&gt; non-default configure option.  E.g., only do this new behavior if
</span><br>
<span class="quotelev1">&gt; --enable-abi-breaking-fortran-status-i8-fix is specified (or some name
</span><br>
<span class="quotelev1">&gt; like that).  By default, we have to keep the ABI for the entire
</span><br>
<span class="quotelev1">&gt; 1.5/1.6 and 1.7/1.8 series -- so if you specify this switch, you
</span><br>
<span class="quotelev1">&gt; acknowledge that you're breaking ABI for the -i8 case.
</span><br>
<p>OK, but I assumed that was a non-issue since the ABI is broken anyhow in
<br>
the case where it changes, as I understand it.
<br>
<p><span class="quotelev1">&gt; 3. For the v1.9 series (i.e., currently the SVN trunk), we can make this be the default, and the --enable-abi-breaking... switch will not exist.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sound ok?
</span><br>
<p>It doesn't matter to me as long as I know the change DTRT, but my OK
<br>
probably isn't relevant.  Thanks.
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23187.php">Jeff Squyres (jsquyres): "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>Previous message:</strong> <a href="23185.php">Ralph Castain: "Re: [OMPI users] environment variables and MPI_Comm_spawn"</a>
<li><strong>In reply to:</strong> <a href="23182.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23183.php">Jim Parker: "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit indexing"</a>
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
