<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 13:40:48 2014" -->
<!-- isoreceived="20141218184048" -->
<!-- sent="Thu, 18 Dec 2014 10:40:43 -0800" -->
<!-- isosent="20141218184043" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="CAAvDA16JLXRgWS27uCwF3-3sLOtpFYNBpAVJcu1BvjxGo3uKdg_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6D37502F-0AD7-4D0D-93EF-E324B92A02BE_at_cisco.com" -->
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
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 13:40:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] commit be6d4649"</a>
<li><strong>In reply to:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16681.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff,
<br>
<p>See below for some failure details.
<br>
The look like different symptoms of the same issue.
<br>
<p>-Paul
<br>
<p>Open64 link failure:
<br>
<p>$ mpifort -g hello_mpifh.f -o hello_mpifh
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-open64/INST/lib/libmpi_mpifh.so:
<br>
undefined reference to `_Iso_c_binding'
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [hello_mpifh] Error 1
<br>
<p>Gcc build failure:
<br>
<p>libtool: compile:  gfortran -DHAVE_CONFIG_H -I.
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h
<br>
-I../../../../opal/include -I../../../../orte/include
<br>
-I../../../../ompi/include -I../../../../oshmem/include
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen
<br>
-I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen
<br>
-DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5
<br>
-I../../../..
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/orte/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/oshmem/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/BLD/opal/mca/hwloc/hwloc191/hwloc/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/event/libevent2021/libevent
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/event/libevent2021/libevent/include
<br>
-I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/BLD/opal/mca/event/libevent2021/libevent/include
<br>
-I../../../../ompi/mpi/fortran/use-mpi-tkr -g -c
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90
<br>
&nbsp;-fPIC -o .libs/libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.o
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:32
<br>
<p>&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/omp
<br>
i/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:38
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/omp
<br>
i/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:40
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER(KIND=C_SIGNED_CHAR), INTENT(IN) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'c_signed_char' at (1) has no IMPLICIT type
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:50
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:52
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER(KIND=C_SIGNED_CHAR), INTENT(IN) :: x(*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'c_signed_char' at (1) has no IMPLICIT type
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:64
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:66
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER(KIND=C_SHORT), INTENT(IN) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'c_short' at (1) has no IMPLICIT type
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:76
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:78
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER(KIND=C_SHORT), INTENT(IN) :: x(*)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'c_short' at (1) has no IMPLICIT type
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:90
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:92
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INTEGER(KIND=C_INT), INTENT(IN) :: x
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Symbol 'c_int' at (1) has no IMPLICIT type
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:102
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;use, intrinsic :: ISO_C_BINDING
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1
<br>
Error: Unclassifiable statement at (1)
<br>
&nbsp;In file
<br>
/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:104
<br>
<p>[...about 180 more lines of similar output...]
<br>
<p>On Thu, Dec 18, 2014 at 9:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
<br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Dec 18, 2014, at 11:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev2">&gt; &gt; + NEW: I see Fortran bindings fail to link with Open64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Paul -- you make me sad.  Sigh.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Send some details of these failures when you can.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16671.php">http://www.open-mpi.org/community/lists/devel/2014/12/16671.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16677/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16676.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] commit be6d4649"</a>
<li><strong>In reply to:</strong> <a href="16671.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16678.php">George Bosilca: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16681.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
