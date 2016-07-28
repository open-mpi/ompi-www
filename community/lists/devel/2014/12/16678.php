<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 14:10:16 2014" -->
<!-- isoreceived="20141218191016" -->
<!-- sent="Thu, 18 Dec 2014 14:10:14 -0500" -->
<!-- isosent="20141218191014" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="CAMJJpkWgWxtNMHTcZ1WyfYOtaXFakW-qKN7dCvYsVuRdO2V9Ag_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAAvDA16JLXRgWS27uCwF3-3sLOtpFYNBpAVJcu1BvjxGo3uKdg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [1.8.4rc5] preliminary results<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 14:10:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I also noticed a drastic increase in the number of linking warnings. This
<br>
is on 64 bits SciLinux Carbon (6.6) with using the Intel compilers 14.0.0
<br>
20130728. I run some tests and everything seems to work just fine, so this
<br>
might not be such a deal breaker.
<br>
<p>&nbsp;&nbsp;George.
<br>
<p>libtool: install: warning: relinking `libmpi_usempif08.la'
<br>
<p>ifort: command line remark #10010: option '-pthread' is deprecated and will
<br>
be removed in a future release. See '-help deprecated'
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical8' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical4' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical2' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical1' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real2' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2double_complex' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2complex' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2integer' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2double_precision' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_2real' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_double_complex' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex32' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex16' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex8' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_complex' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_double_precision' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real16' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real8' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real4' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_real' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer16' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer8' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer4' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer2' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer1' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_integer' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_logical' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_character' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lb' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_ub' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_packed' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_byte' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_file_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_win_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_request_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_op_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_message_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errhandler_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_datatype_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_null' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_replace' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_minloc' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_maxloc' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bxor' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lxor' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_bor' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_lor' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_band' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_land' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_prod' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_sum' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_min' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_max' in .libs/constants.o
<br>
is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_info_env' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_message_no_proc' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errors_return' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_errors_are_fatal' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>ld: Warning: alignment 4 of symbol `ompi_f08_mpi_group_empty' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_self' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
ld: Warning: alignment 4 of symbol `ompi_f08_mpi_comm_world' in
<br>
.libs/constants.o is smaller than 8 in
<br>
./.libs/libforce_usempif08_internal_modules_to_be_built.a(mpi-f08-types.o)
<br>
<p>On Thu, Dec 18, 2014 at 1:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See below for some failure details.
</span><br>
<span class="quotelev1">&gt; The look like different symptoms of the same issue.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open64 link failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ mpifort -g hello_mpifh.f -o hello_mpifh
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-open64/INST/lib/libmpi_mpifh.so:
</span><br>
<span class="quotelev1">&gt; undefined reference to `_Iso_c_binding'
</span><br>
<span class="quotelev1">&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev1">&gt; make[2]: *** [hello_mpifh] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gcc build failure:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; libtool: compile:  gfortran -DHAVE_CONFIG_H -I.
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/include -I../../../../orte/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/include -I../../../../oshmem/include
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
</span><br>
<span class="quotelev1">&gt; -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
</span><br>
<span class="quotelev1">&gt; -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5
</span><br>
<span class="quotelev1">&gt; -I../../../..
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/orte/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/oshmem/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/BLD/opal/mca/hwloc/hwloc191/hwloc/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/event/libevent2021/libevent
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/BLD/opal/mca/event/libevent2021/libevent/include
</span><br>
<span class="quotelev1">&gt; -I../../../../ompi/mpi/fortran/use-mpi-tkr -g -c
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90
</span><br>
<span class="quotelev1">&gt;  -fPIC -o .libs/libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.o
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:32
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;   1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/omp
</span><br>
<span class="quotelev1">&gt; i/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:38
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/omp
</span><br>
<span class="quotelev1">&gt; i/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:40
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SIGNED_CHAR), INTENT(IN) :: x
</span><br>
<span class="quotelev1">&gt;                                1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_signed_char' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:50
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:52
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SIGNED_CHAR), INTENT(IN) :: x(*)
</span><br>
<span class="quotelev1">&gt;                                1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_signed_char' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:66
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SHORT), INTENT(IN) :: x
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_short' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:76
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:78
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SHORT), INTENT(IN) :: x(*)
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_short' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:90
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:92
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_INT), INTENT(IN) :: x
</span><br>
<span class="quotelev1">&gt;                        1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_int' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:102
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file
</span><br>
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:104
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [...about 180 more lines of similar output...]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 18, 2014 at 9:30 AM, Jeff Squyres (jsquyres) &lt;
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 18, 2014, at 11:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev3">&gt;&gt; &gt; + NEW: I see Fortran bindings fail to link with Open64
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Paul -- you make me sad.  Sigh.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Send some details of these failures when you can.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16671.php">http://www.open-mpi.org/community/lists/devel/2014/12/16671.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Computer Languages &amp; Systems Software (CLaSS) Group
</span><br>
<span class="quotelev1">&gt; Computer Science Department               Tel: +1-510-495-2352
</span><br>
<span class="quotelev1">&gt; Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
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
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16677.php">http://www.open-mpi.org/community/lists/devel/2014/12/16677.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16678/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16679.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>Previous message:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
