<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 19 06:03:39 2014" -->
<!-- isoreceived="20141219110339" -->
<!-- sent="Fri, 19 Dec 2014 20:03:39 +0900" -->
<!-- isosent="20141219110339" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="5494060B.4090206_at_iferc.org" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-19 06:03:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16686.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>Previous message:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16692.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16692.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul,
<br>
<p>i faced the very same issue with open64-5.0
<br>
<p>here is attached a simple reproducer.
<br>
<p>main2 can be built, but main cannot be built.
<br>
the only difference is than unlike main.F90, main2.F90 contains a line :
<br>
use, intrinsic :: iso_c_binding
<br>
/* and they both link with libfoo.so, and foo.F90 *does* contain the
<br>
same line */
<br>
<p><p>at this stage, all i can conclude is this is an open64 compiler issue.
<br>
<p><p>i am unable to reproduce the issue with gcc, could you please detail :
<br>
- your configure command line
<br>
- the version of the gnu compilers you are using
<br>
<p><p>i hit a glitch with solarisstudio 12.4 compilers on linux if i configure
<br>
with FC=f77 :
<br>
f77 does not recognize the 'present' keyword and fails, which raises the
<br>
question :
<br>
why is there some f90 code in the mpif-h directory ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>make[2]: Entering directory
<br>
`/csc/home1/gouaillardet/build/openmpi-1.8.4rc5-os124/ompi/mpi/fortran/mpif-h'
<br>
&nbsp;&nbsp;PPFC     libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.lo
<br>
&nbsp;&nbsp;&nbsp;&nbsp;mpi_f08_sizeof:
<br>
<p>MODULE mpi_f08_sizeof
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^             
<br>
&quot;../../../../../../src/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90&quot;,
<br>
Line = 31, Column = 8: ERROR: The compiler has detected errors in module
<br>
&quot;MPI_F08_SIZEOF&quot;.  No module information file will be created for this
<br>
module.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (present(ierror)) ierror = 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^                          
<br>
&quot;../../../../../../src/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90&quot;,
<br>
Line = 45, Column = 11: ERROR: IMPLICIT NONE is specified in the local
<br>
scope, therefore an explicit type must be specified for function &quot;PRESENT&quot;.
<br>
<p><p>On 2014/12/19 3:40, Paul Hargrove wrote:
<br>
<span class="quotelev1">&gt; Jeff,
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
<span class="quotelev1">&gt; On Thu, Dec 18, 2014 at 9:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 18, 2014, at 11:55 AM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + NEW: I see Fortran bindings failing to compile w/ gfortran
</span><br>
<span class="quotelev3">&gt;&gt;&gt; + NEW: I see Fortran bindings fail to link with Open64
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16677.php">http://www.open-mpi.org/community/lists/devel/2014/12/16677.php</a>
</span><br>
<p><p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16685/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/gzip attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-16685/test-open64.tar.gz">test-open64.tar.gz</a>
</ul>
<!-- attachment="test-open64.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16686.php">Jeff Squyres (jsquyres): "[OMPI devel] Still getting DDT test assert fails"</a>
<li><strong>Previous message:</strong> <a href="16684.php">Gilles Gouaillardet: "Re: [OMPI devel] libfabric, config.h and hwloc"</a>
<li><strong>In reply to:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16692.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Reply:</strong> <a href="16692.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
