<?
$subject_val = "Re: [OMPI devel] Trunk borked";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 09:31:14 2008" -->
<!-- isoreceived="20080129143114" -->
<!-- sent="Tue, 29 Jan 2008 15:31:04 +0100" -->
<!-- isosent="20080129143104" -->
<!-- name="Matthias Jurenz" -->
<!-- email="matthias.jurenz_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] Trunk borked" -->
<!-- id="1201617064.30802.35.camel_at_ricolap" -->
<!-- charset="utf-8" -->
<!-- inreplyto="479F1E03.7080708_at_cs.indiana.edu" -->
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
<strong>From:</strong> Matthias Jurenz (<em>matthias.jurenz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 09:31:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3076.php">Jeff Squyres: "[OMPI devel] Absoft is running OMPI MTT"</a>
<li><strong>Previous message:</strong> <a href="3074.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tim,
<br>
<p>the configure script of the vt-integration don't check whether MPI I/O
<br>
is disabled, so 
<br>
the VT's MPI_File_* wrapper functions will be built. A quick solution
<br>
for this problem should be 
<br>
to add the option &quot;--with-contrib-vt-flags=--without-mpi-io&quot; to the
<br>
configure script.
<br>
I'm working on a better solution...
<br>
<p>To disable the vt-integration completely add the following option to the
<br>
configure script:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;configure --enable-contrib-no-build=vt ...
<br>
<p><p>Sorry again for this trouble!
<br>
<p>Regards,
<br>
Matthias
<br>
<p><p>On Di, 2008-01-29 at 07:37 -0500, Tim Prins wrote:
<br>
<p><span class="quotelev1">&gt; We have run into another issue with the vt integration. Configuring with 
</span><br>
<span class="quotelev1">&gt; '--disable-mpi-io' results in:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3565: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3565: error: `buf' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3565: error: `count' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3565: error: `datatype' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3565: error: `status' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c: At top level:
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3582: error: syntax error before &quot;fh&quot;
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c: In function `MPI_File_seek_shared':
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3596: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3596: error: `offset' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3596: error: `whence' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c: At top level:
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3613: error: syntax error before &quot;fh&quot;
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c: In function `MPI_File_write_ordered':
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3629: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3629: error: `buf' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3629: error: `count' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3629: error: `datatype' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3629: error: `status' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c: At top level:
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3646: error: syntax error before &quot;fh&quot;
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c: In function `MPI_File_write_shared':
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3662: error: `fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3662: error: `buf' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3662: error: `count' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3662: error: `datatype' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_mpiwrap.c:3662: error: `status' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; rm -f libvt.a
</span><br>
<span class="quotelev1">&gt; mv -f .deps/libvt_mpi_a-vt_user_region.Tpo 
</span><br>
<span class="quotelev1">&gt; .deps/libvt_mpi_a-vt_user_region.Po
</span><br>
<span class="quotelev1">&gt; ar cru libvt.a  vt_comp_gnu.o       vt_memhook.o vt_memreg.o vt_iowrap.o 
</span><br>
<span class="quotelev1">&gt; vt_iowrap_helper.o
</span><br>
<span class="quotelev1">&gt; rfg_regions.o rfg_filter.o rfg_groups.o vt_env.o vt_error.o vt_metmap.o 
</span><br>
<span class="quotelev1">&gt; vt_otf_gen.o vt_otf_sum.o
</span><br>
<span class="quotelev1">&gt; vt_otf_trc.o vt_pform_linux.o vt_pomp_base.o vt_strdup.o vt_thrd.o 
</span><br>
<span class="quotelev1">&gt; vt_user_comment.o
</span><br>
<span class="quotelev1">&gt; vt_user_count.o vt_user_region.o pomp_fwrapper_base.o
</span><br>
<span class="quotelev1">&gt; mv -f .deps/libvt_mpi_a-vt_mpireq.Tpo .deps/libvt_mpi_a-vt_mpireq.Po
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c: In function `vt_mpi_file_close_f':
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2080: error: `MPI_File' undeclared (first use in this 
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2080: error: (Each undeclared identifier is reported only once
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2080: error: for each function it appears in.)
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2080: error: syntax error before &quot;l_fh&quot;
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2081: error: `l_fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c: In function `vt_mpi_file_open_f':
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2095: error: `MPI_File' undeclared (first use in this 
</span><br>
<span class="quotelev1">&gt; function)
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2095: error: syntax error before &quot;l_fh&quot;
</span><br>
<span class="quotelev1">&gt; vt_fmpiwrap.c:2103: error: `l_fh' undeclared (first use in this function)
</span><br>
<span class="quotelev1">&gt; make[5]: *** [libvt_mpi_a-vt_mpiwrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; ranlib libvt.a
</span><br>
<span class="quotelev1">&gt; make[5]: *** Waiting for unfinished jobs....
</span><br>
<span class="quotelev1">&gt; make[5]: *** [libvt_fmpi_a-vt_fmpiwrap.o] Error 1
</span><br>
<span class="quotelev1">&gt; mv -f .deps/libvt_mpi_a-vt_iowrap.Tpo .deps/libvt_mpi_a-vt_iowrap.Po
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt/vt/vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory
</span><br>
<span class="quotelev1">&gt; `/san/homedirs/mpiteam/mtt-runs/odin/20080128-Nightly/pb_5/installs/VUuZ/src/openmpi-1.3a1r17289/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry for the messy output, we use make -j 6.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tim
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Andreas Kn&#195;&#188;pfer wrote:
</span><br>
<span class="quotelev2">&gt; &gt; On Tuesday 29 January 2008, George Bosilca wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Look like VT do not correctly compute dependencies. A static build
</span><br>
<span class="quotelev3">&gt; &gt;&gt; will fails if libz.a is not installed on the system.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; /usr/bin/ld: cannot find -lz
</span><br>
<span class="quotelev3">&gt; &gt;&gt; collect2: ld returned 1 exit status
</span><br>
<span class="quotelev3">&gt; &gt;&gt; make[5]: *** [vtfilter] Error 1
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;    george.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; this issue should be fixed now, even without additional configure parameters.
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; devel mailing list
</span><br>
<span class="quotelev2">&gt; &gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
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
<p><pre>
--
Matthias Jurenz,
Center for Information Services and 
High Performance Computing (ZIH), TU Dresden, 
Willersbau A106, Zellescher Weg 12, 01062 Dresden
phone +49-351-463-31945, fax +49-351-463-37773
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3075/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-3075/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3076.php">Jeff Squyres: "[OMPI devel] Absoft is running OMPI MTT"</a>
<li><strong>Previous message:</strong> <a href="3074.php">Tim Prins: "Re: [OMPI devel] vt compiler warnings and errors"</a>
<li><strong>In reply to:</strong> <a href="3070.php">Tim Prins: "Re: [OMPI devel] Trunk borked"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3059.php">Jeff Squyres: "Re: [OMPI devel] Trunk borked"</a>
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
