<?
$subject_val = "Re: [OMPI devel] 1.8.7rc1 testing results";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul 14 03:42:41 2015" -->
<!-- isoreceived="20150714074241" -->
<!-- sent="Tue, 14 Jul 2015 16:42:34 +0900" -->
<!-- isosent="20150714074234" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] 1.8.7rc1 testing results" -->
<!-- id="55A4BD6A.1090305_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="916B108D-3609-4F56-B2DB-4FD4861D99CF_at_open-mpi.org" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-07-14 03:42:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17640.php">Nathan Hjelm: "[OMPI devel] RFC: kill alpha asm support"</a>
<li><strong>Previous message:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17637.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>you are right.
<br>
the f08 warnings have kind of always been there.
<br>
master has a few extra warnings (caused by initialization of common 
<br>
symbols) but the changes have not been PR'ed to v1.8
<br>
<p>i made PR 719 <a href="https://github.com/open-mpi/ompi/pull/719">https://github.com/open-mpi/ompi/pull/719</a> to fix this.
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 7/13/2015 11:42 PM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Yes, I&#146;ll release a new rc once I get it all merged.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the linker warnings a change in behavior from 1.8.6? I confess 
</span><br>
<span class="quotelev1">&gt; I&#146;ve been seeing them in the master for so long that I&#146;ve been 
</span><br>
<span class="quotelev1">&gt; &#147;inoculated&#148; to ignore them.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Jul 13, 2015, at 7:34 AM, Gilles Gouaillardet 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;gilles.gouaillardet_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yes it is.
</span><br>
<span class="quotelev2">&gt;&gt; will you release rc2 after the PR is merged ?
</span><br>
<span class="quotelev2">&gt;&gt; it seems rhel 6.6 ibverbs devel headers are fine, so it would be 
</span><br>
<span class="quotelev2">&gt;&gt; ideal to confirm the patch works as expected with broken headers...
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; what about the linker warnings with the fortran library ?
</span><br>
<span class="quotelev2">&gt;&gt; should we do something before releasing 1.8.7 ?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Cheers,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gilles
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Monday, July 13, 2015, Ralph Castain &lt;rhc_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:rhc_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Gilles - just to confirm, the patch you provided here is the one
</span><br>
<span class="quotelev2">&gt;&gt;     in the updated PRs, yes? If so, I&#146;ll consider those PRs as
</span><br>
<span class="quotelev2">&gt;&gt;     confirmed and commit them
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Jul 13, 2015, at 7:20 AM, Gilles Gouaillardet
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;gilles.gouaillardet_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','gilles.gouaillardet_at_[hidden]');&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Chris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     thanks for the report.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     recently, we start getting rid of uninitialized common symbols
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     aka uninitialized global variables.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     a side effect is the bunch of warnings issued by the linker when
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     linking with fortran (2008 ?) MPI library.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I guess I can do something for that, at least with gnu and intel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     compilers.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     generally speaking, should we revert the fortran initialization
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     part and let these common symbols uninitialized ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I realize this is very confusing for end users ...
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I think Jeff is the one who understand this part best, but he
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     might not be available this week.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Cheers,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Gilles
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     On Monday, July 13, 2015, Chris Samuel &lt;samuel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','samuel_at_[hidden]');&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         On Mon, 13 Jul 2015 05:17:29 PM Gilles Gouaillardet wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; Hi Chris,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hi Gilles,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;         &gt; i pushed my tarball into a gist :
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Thanks for that, I can confirm on our two x86-64 RHEL 6.6
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         boxes (one circa
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         2010, one circa 2013) with their included OFED I see:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         checking if ConnectX XRC support is enabled... no
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         checking if ConnectIB XRC support is enabled... yes
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         I also got this set of (unrelated) compiler warnings too:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;           FCLD libmpi_usempif08.la &lt;<a href="http://libmpi_usempif08.la/">http://libmpi_usempif08.la/</a>&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [...benign symlink related Slurm libpmi.la
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         &lt;<a href="http://libpmi.la/">http://libpmi.la/</a>&gt; warnings elided...]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ifort: command line remark #10010: option '-pthread' is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         deprecated and will be removed in a future release. See
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         '-help deprecated'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical8'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical4'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real2' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_2double_complex' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2complex'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2integer'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_2double_precision' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2real' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_double_complex' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex32'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex16'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex8'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_double_precision' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real16' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real8' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real4' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer16'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer8'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer4'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer2'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer1'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_character'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lb' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_ub' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_packed' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_byte' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_file_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_win_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_request_null' in .libs/constants.o is smaller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_op_null' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_message_null' in .libs/constants.o is smaller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_errhandler_null' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_datatype_null' in .libs/constants.o is smaller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_null'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_replace' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_minloc' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_maxloc' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bxor' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lxor' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bor' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lor' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_band' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_land' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_prod' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_sum' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_min' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_max' in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_env'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_message_no_proc' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_errors_return' in .libs/constants.o is smaller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_errors_are_fatal' in .libs/constants.o is
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         `ompi_f08_mpi_group_empty' in .libs/constants.o is smaller
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_self'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_world'
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         in .libs/constants.o is smaller than 8 in
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         [samuel_at_barcoo ec20f77ec35533fa575a]$ ifort --version
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         ifort (IFORT) 15.0.3 20150407
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Copyright (C) 1985-2015 Intel Corporation.  All rights reserved.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Hope those mean something to someone!
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         All the best,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Chris
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         --
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev3">&gt;&gt;&gt;          Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a> <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;         <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17633.php">http://www.open-mpi.org/community/lists/devel/2015/07/17633.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     devel_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &lt;javascript:_e(%7B%7D,'cvml','devel_at_[hidden]');&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17634.php">http://www.open-mpi.org/community/lists/devel/2015/07/17634.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden] &lt;mailto:devel_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17636.php">http://www.open-mpi.org/community/lists/devel/2015/07/17636.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/07/17637.php">http://www.open-mpi.org/community/lists/devel/2015/07/17637.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17639/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17640.php">Nathan Hjelm: "[OMPI devel] RFC: kill alpha asm support"</a>
<li><strong>Previous message:</strong> <a href="17638.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
<li><strong>In reply to:</strong> <a href="17637.php">Ralph Castain: "Re: [OMPI devel] 1.8.7rc1 testing results"</a>
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
