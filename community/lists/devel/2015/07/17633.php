<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 13 08:34:29 2015" -->
<!-- isoreceived="20150713123429" -->
<!-- sent="Mon, 13 Jul 2015 22:34:26 +1000" -->
<!-- isosent="20150713123426" -->
<!-- name="Chris Samuel" -->
<!-- email="samuel_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="2678227.k0Mx6L5zhj_at_quad" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="55A37419.7090907_at_rist.or.jp" -->
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
<strong>From:</strong> Chris Samuel (<em>samuel_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-13 08:34:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17632.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17632.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, 13 Jul 2015 05:17:29 PM Gilles Gouaillardet wrote:
<br>
<p><span class="quotelev1">&gt; Hi Chris,
</span><br>
<p>Hi Gilles,
<br>
<p><span class="quotelev1">&gt; i pushed my tarball into a gist :
</span><br>
<p>Thanks for that, I can confirm on our two x86-64 RHEL 6.6 boxes (one circa
<br>
2010, one circa 2013) with their included OFED I see:
<br>
<p>checking if ConnectX XRC support is enabled... no
<br>
checking if ConnectIB XRC support is enabled... yes
<br>
<p>I also got this set of (unrelated) compiler warnings too:
<br>
<p>&nbsp;&nbsp;FCLD     libmpi_usempif08.la
<br>
[...benign symlink related Slurm libpmi.la warnings elided...]
<br>
ifort: command line remark #10010: option '-pthread' is deprecated and will be removed in a future release. See '-help deprecated'
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical4' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical2' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical1' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real2' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2double_complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2integer' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2double_precision' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2real' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_double_complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex32' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex16' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_double_precision' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real16' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real4' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer16' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer8' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer4' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer2' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer1' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_character' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lb' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_ub' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_packed' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_byte' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_file_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_win_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_request_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_op_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_message_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errhandler_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_datatype_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_null' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_replace' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_minloc' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_maxloc' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bxor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lxor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lor' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_band' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_land' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_prod' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_sum' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_min' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_max' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_env' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_message_no_proc' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errors_return' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errors_are_fatal' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_empty' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_self' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_world' in .libs/constants.o is smaller than 8 in ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p><p>[samuel_at_barcoo ec20f77ec35533fa575a]$ ifort --version                                                                                                                                                                                       
<br>
ifort (IFORT) 15.0.3 20150407                                                                                                                                                                                                               
<br>
Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.   
<br>
<p>Hope those mean something to someone!
<br>
<p>All the best,
<br>
Chris
<br>
<pre>
-- 
 Christopher Samuel        Senior Systems Administrator
 VLSCI - Victorian Life Sciences Computation Initiative
 Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
 <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Previous message:</strong> <a href="17632.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17632.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>Reply:</strong> <a href="17634.php">Gilles Gouaillardet: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
