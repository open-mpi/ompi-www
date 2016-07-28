<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 07:37:25 2008" -->
<!-- isoreceived="20080129123725" -->
<!-- sent="Tue, 29 Jan 2008 07:37:23 -0500" -->
<!-- isosent="20080129123723" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="479F1E03.7080708_at_cs.indiana.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="200801291111.32489.andreas.knuepfer_at_tu-dresden.de" -->
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
<strong>Subject:</strong> Re: [OMPI devel] Trunk borked<br>
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 07:37:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Previous message:</strong> <a href="3069.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3069.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3075.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3075.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
We have run into another issue with the vt integration. Configuring with 
<br>
'--disable-mpi-io' results in:
<br>
<p>vt_mpiwrap.c:3565: error: `fh' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3565: error: `buf' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3565: error: `count' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3565: error: `datatype' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3565: error: `status' undeclared (first use in this function)
<br>
vt_mpiwrap.c: At top level:
<br>
vt_mpiwrap.c:3582: error: syntax error before &quot;fh&quot;
<br>
vt_mpiwrap.c: In function `MPI_File_seek_shared':
<br>
vt_mpiwrap.c:3596: error: `fh' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3596: error: `offset' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3596: error: `whence' undeclared (first use in this function)
<br>
vt_mpiwrap.c: At top level:
<br>
vt_mpiwrap.c:3613: error: syntax error before &quot;fh&quot;
<br>
vt_mpiwrap.c: In function `MPI_File_write_ordered':
<br>
vt_mpiwrap.c:3629: error: `fh' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3629: error: `buf' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3629: error: `count' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3629: error: `datatype' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3629: error: `status' undeclared (first use in this function)
<br>
vt_mpiwrap.c: At top level:
<br>
vt_mpiwrap.c:3646: error: syntax error before &quot;fh&quot;
<br>
vt_mpiwrap.c: In function `MPI_File_write_shared':
<br>
vt_mpiwrap.c:3662: error: `fh' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3662: error: `buf' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3662: error: `count' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3662: error: `datatype' undeclared (first use in this function)
<br>
vt_mpiwrap.c:3662: error: `status' undeclared (first use in this function)
<br>
rm -f libvt.a
<br>
mv -f .deps/libvt_mpi_a-vt_user_region.Tpo 
<br>
.deps/libvt_mpi_a-vt_user_region.Po
<br>
ar cru libvt.a  vt_comp_gnu.o       vt_memhook.o vt_memreg.o vt_iowrap.o 
<br>
vt_iowrap_helper.o
<br>
rfg_regions.o rfg_filter.o rfg_groups.o vt_env.o vt_error.o vt_metmap.o 
<br>
vt_otf_gen.o vt_otf_sum.o
<br>
vt_otf_trc.o vt_pform_linux.o vt_pomp_base.o vt_strdup.o vt_thrd.o 
<br>
vt_user_comment.o
<br>
vt_user_count.o vt_user_region.o pomp_fwrapper_base.o
<br>
mv -f .deps/libvt_mpi_a-vt_mpireq.Tpo .deps/libvt_mpi_a-vt_mpireq.Po
<br>
vt_fmpiwrap.c: In function `vt_mpi_file_close_f':
<br>
vt_fmpiwrap.c:2080: error: `MPI_File' undeclared (first use in this 
<br>
function)
<br>
vt_fmpiwrap.c:2080: error: (Each undeclared identifier is reported only once
<br>
vt_fmpiwrap.c:2080: error: for each function it appears in.)
<br>
vt_fmpiwrap.c:2080: error: syntax error before &quot;l_fh&quot;
<br>
vt_fmpiwrap.c:2081: error: `l_fh' undeclared (first use in this function)
<br>
vt_fmpiwrap.c: In function `vt_mpi_file_open_f':
<br>
vt_fmpiwrap.c:2095: error: `MPI_File' undeclared (first use in this 
<br>
function)
<br>
vt_fmpiwrap.c:2095: error: syntax error before &quot;l_fh&quot;
<br>
vt_fmpiwrap.c:2103: error: `l_fh' undeclared (first use in this function)
<br>
make[5]: *** [libvt_mpi_a-vt_mpiwrap.o] Error 1
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
ranlib libvt.a
<br>
make[5]: *** Waiting for unfinished jobs....
<br>
make[5]: *** [libvt_fmpi_a-vt_fmpiwrap.o] Error 1
<br>
mv -f .deps/libvt_mpi_a-vt_iowrap.Tpo .deps/libvt_mpi_a-vt_iowrap.Po
<br>
make[5]: Leaving directory
<br>
`/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory
<br>
`/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory
<br>
`/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory
<br>
`/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory
<br>
`/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p>Sorry for the messy output, we use make -j 6.
<br>
<p>Thanks,
<br>
<p>Tim
<br>
<p>Andreas Kn&#252;pfer wrote:
<br>
<span class="quotelev1">&gt; On Tuesday 29 January 2008, George Bosilca wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Look like VT do not correctly compute dependencies. A static build
</span><br>
<span class="quotelev2">&gt;&gt; will fails if libz.a is not installed on the system.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; /usr/bin/ld: cannot find -lz
</span><br>
<span class="quotelev2">&gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev2">&gt;&gt; make[5]: *** [vtfilter] Error 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    george.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; this issue should be fixed now, even without additional configure parameters.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3071.php">Jeff Squyres: "Re: [OMPI devel] Configure error/warning in nightly tarball"</a>
<li><strong>Previous message:</strong> <a href="3069.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>In reply to:</strong> <a href="3069.php">Andreas Kn&#252;pfer: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3075.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
<li><strong>Reply:</strong> <a href="3075.php">Matthias Jurenz: "Re: [OMPI devel] Trunk borked"</a>
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
