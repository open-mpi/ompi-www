<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 10:29:36 2015" -->
<!-- isoreceived="20150713142936" -->
<!-- sent="Mon, 13 Jul 2015 07:29:30 -0700" -->
<!-- isosent="20150713142930" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="E96F3790-7BA1-4CFA-8959-6F7A121771EA_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5tcU1dacgQeggR4bvYe0A=S2yLLgkXH69ME7-H0x2gG6w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] 1.8.7rc1 testing results<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-13 10:29:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17636.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17636.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17636.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Gilles - just to confirm, the patch you provided here is the one in the updated PRs, yes? If so, I&#226;&#128;&#153;ll consider those PRs as confirmed and commit them
<br>
<p><p><span class="quotelev1">&gt; On Jul 13, 2015, at 7:20 AM, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Chris,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; thanks for the report.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; recently, we start getting rid of uninitialized common symbols
</span><br>
<span class="quotelev1">&gt; aka uninitialized global variables.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; a side effect is the bunch of warnings issued by the linker when linking with fortran (2008 ?) MPI library.
</span><br>
<span class="quotelev1">&gt; I guess I can do something for that, at least with gnu and intel compilers.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; generally speaking, should we revert the fortran initialization part and let these common symbols uninitialized ?
</span><br>
<span class="quotelev1">&gt; I realize this is very confusing for end users ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I think Jeff is the one who understand this part best, but he might not be available this week.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Cheers,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gilles
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Monday, July 13, 2015, Chris Samuel &lt;samuel_at_[hidden] &lt;mailto:samuel_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Mon, 13 Jul 2015 05:17:29 PM Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi Chris,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi Gilles,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; i pushed my tarball into a gist :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks for that, I can confirm on our two x86-64 RHEL 6.6 boxes (one circa
</span><br>
<span class="quotelev1">&gt; 2010, one circa 2013) with their included OFED I see:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev1">&gt; checking if ConnectIB XRC support is enabled... yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I also got this set of (unrelated) compiler warnings too:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;   FCLD     libmpi_usempif08.la &lt;<a href="http://libmpi_usempif08.la/">http://libmpi_usempif08.la/</a>&gt;
</span><br>
<span class="quotelev1">&gt; [...benign symlink related Slurm libpmi.la &lt;<a href="http://libpmi.la/">http://libpmi.la/</a>&gt; warnings elided...]
</span><br>
<span class="quotelev1">&gt; ifort: command line remark #10010: option '-pthread' is deprecated and will be removed in a future release. See '-help deprecated'
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical4' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical2' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical1' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real2' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2double_complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2integer' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2double_precision' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2real' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_double_complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex32' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex16' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_double_precision' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real16' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real4' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer16' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer4' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer2' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer1' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_character' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lb' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_ub' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_packed' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_byte' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_file_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_win_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_request_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_op_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_message_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errhandler_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_datatype_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_replace' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_minloc' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_maxloc' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bxor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lxor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_band' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_land' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_prod' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_sum' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_min' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_max' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_env' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_message_no_proc' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errors_return' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errors_are_fatal' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_empty' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_self' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_world' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [samuel_at_barcoo ec20f77ec35533fa575a]$ ifort --version
</span><br>
<span class="quotelev1">&gt; ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev1">&gt; Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hope those mean something to someone!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; All the best,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] &lt;javascript:;&gt; Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a> &lt;<a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>&gt;      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a> &lt;<a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a> &lt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>&gt;
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17633.php">http://www.open-mpi.org/community/lists/devel/2015/07/17633.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/devel/2015/07/17633.php">http://www.open-mpi.org/community/lists/devel/2015/07/17633.php</a>&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17634.php">http://www.open-mpi.org/community/lists/devel/2015/07/17634.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17635/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17636.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17636.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17636.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
