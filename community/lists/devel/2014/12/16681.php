<?
$subject_val = "Re: [OMPI devel] [1.8.4rc5] preliminary results";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 18 14:28:15 2014" -->
<!-- isoreceived="20141218192815" -->
<!-- sent="Thu, 18 Dec 2014 19:28:13 +0000" -->
<!-- isosent="20141218192813" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [1.8.4rc5] preliminary results" -->
<!-- id="9A7758D9-67DF-4445-84AD-DA8816F2B503_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-12-18 14:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16682.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Paul --
<br>
<p>Can you send me the config.log and output from configure for these 2 builds?  For open64, if you could send the output of &quot;ompi_info --all&quot;, that would also be helpful.
<br>
<p>Thanks.
<br>
<p>On Dec 18, 2014, at 1:40 PM, Paul Hargrove &lt;phhargrove_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-open64/INST/lib/libmpi_mpifh.so: undefined reference to `_Iso_c_binding'
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
<span class="quotelev1">&gt; libtool: compile:  gfortran -DHAVE_CONFIG_H -I. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h -I../../../../opal/include -I../../../../orte/include -I../../../../ompi/include -I../../../../oshmem/include -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/private/autogen -I../../../../opal/mca/hwloc/hwloc191/hwloc/include/hwloc/autogen -DOMPI_PROFILE_LAYER=0 -DOMPI_COMPILING_FORTRAN_WRAPPERS=1 -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5 -I../../../.. -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/orte/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/oshmem/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/BLD/opal/mca/hwloc/hwloc191/hwloc/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/event/libevent2021/libevent -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/opal/mca/event/libevent2021/libevent/include -I/global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/BLD/opal/mca/event/libevent2021/libevent/include -I../../../../ompi/mpi/fortran/use-mpi-tkr -g -c /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90  -fPIC -o .libs/libmpi_mpifh_sizeof_la-sizeof-mpif08-pre-1.8.4_f.o
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:32
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;   1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/omp
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
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/omp
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
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:50
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:52
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SIGNED_CHAR), INTENT(IN) :: x(*)
</span><br>
<span class="quotelev1">&gt;                                1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_signed_char' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:64
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:66
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SHORT), INTENT(IN) :: x
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_short' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:76
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:78
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_SHORT), INTENT(IN) :: x(*)
</span><br>
<span class="quotelev1">&gt;                          1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_short' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:90
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:92
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       INTEGER(KIND=C_INT), INTENT(IN) :: x
</span><br>
<span class="quotelev1">&gt;                        1
</span><br>
<span class="quotelev1">&gt; Error: Symbol 'c_int' at (1) has no IMPLICIT type
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:102
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;       use, intrinsic :: ISO_C_BINDING
</span><br>
<span class="quotelev1">&gt;      1
</span><br>
<span class="quotelev1">&gt; Error: Unclassifiable statement at (1)
</span><br>
<span class="quotelev1">&gt;  In file /global/homes/h/hargrove/GSCRATCH/OMPI/openmpi-1.8.4rc5-linux-x86_64-gcc-atomics/openmpi-1.8.4rc5/ompi/mpi/fortran/mpif-h/sizeof-mpif08-pre-1.8.4_f.F90:104
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [...about 180 more lines of similar output...]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Thu, Dec 18, 2014 at 9:30 AM, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
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
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2014/12/16671.php">http://www.open-mpi.org/community/lists/devel/2014/12/16671.php</a>
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16682.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>Previous message:</strong> <a href="16680.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<li><strong>In reply to:</strong> <a href="16677.php">Paul Hargrove: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16685.php">Gilles Gouaillardet: "Re: [OMPI devel] [1.8.4rc5] preliminary results"</a>
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
