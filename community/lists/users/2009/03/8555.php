<?
$subject_val = "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 17:24:34 2009" -->
<!-- isoreceived="20090323212434" -->
<!-- sent="Mon, 23 Mar 2009 16:24:26 -0500" -->
<!-- isosent="20090323212426" -->
<!-- name="Rene Salmon" -->
<!-- email="salmr0_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers" -->
<!-- id="1237843466.5076.155.camel_at_holwrs01.amoco.com" -->
<!-- inreplyto="1A0D4A65-085C-46C1-B8C7-8FDA7EA50303_at_lanl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers<br>
<strong>From:</strong> Rene Salmon (<em>salmr0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 17:24:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks that works for me.
<br>
<p>Rene
<br>
<p><p><p>On Mon, 2009-03-23 at 19:40 +0000, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; Ah - guess the VampirTrace guys missed those. In the interim, you can 
</span><br>
<span class="quotelev1">&gt; disable that part of the code by adding
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --enable-contrib-no-build=vt
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; to your configure line
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 23, 2009, at 1:34 PM, Rene Salmon wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; In the release notes for openmpi-1.3.1 there was this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; - Fix a few places where we used PATH_MAX instead of OMPI_PATH_MAX,
</span><br>
<span class="quotelev2">&gt; &gt;   leading to compile problems on some platforms. Thanks to Andrea
</span><br>
<span class="quotelev1">&gt; Iob
</span><br>
<span class="quotelev2">&gt; &gt;   for the bug report.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I guess maybe all the places where PATH_MAX appears did not get
</span><br>
<span class="quotelev2">&gt; &gt; replaced?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Here is what i get when I try to compile openmpi 1.3.1 with intel
</span><br>
<span class="quotelev2">&gt; &gt; compilers l_cc_p_10.1.021:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/
</span><br>
<span class="quotelev2">&gt; &gt; otflib
</span><br>
<span class="quotelev2">&gt; &gt; -I../ex
</span><br>
<span class="quotelev2">&gt; &gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
</span><br>
<span class="quotelev2">&gt; &gt; \&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
</span><br>
<span class="quotelev2">&gt; &gt; bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/
</span><br>
<span class="quotelev2">&gt; &gt; vampirtrace\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -DRFG -
</span><br>
<span class="quotelev2">&gt; &gt; DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_error.o -MD
</span><br>
<span class="quotelev1">&gt; -MP
</span><br>
<span class="quotelev2">&gt; &gt; -MF .deps
</span><br>
<span class="quotelev2">&gt; &gt; /vt_error.Tpo -c -o vt_error.o vt_error.c
</span><br>
<span class="quotelev2">&gt; &gt; mv -f .deps/vt_error.Tpo .deps/vt_error.Po
</span><br>
<span class="quotelev2">&gt; &gt; icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/
</span><br>
<span class="quotelev2">&gt; &gt; otflib
</span><br>
<span class="quotelev2">&gt; &gt; -I../ex
</span><br>
<span class="quotelev2">&gt; &gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
</span><br>
<span class="quotelev2">&gt; &gt; \&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
</span><br>
<span class="quotelev2">&gt; &gt; bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/
</span><br>
<span class="quotelev2">&gt; &gt; vampirtrace\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -DRFG -
</span><br>
<span class="quotelev2">&gt; &gt; DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_metmap.o -MD
</span><br>
<span class="quotelev1">&gt; -
</span><br>
<span class="quotelev2">&gt; &gt; MP
</span><br>
<span class="quotelev2">&gt; &gt; -MF .dep
</span><br>
<span class="quotelev2">&gt; &gt; s/vt_metmap.Tpo -c -o vt_metmap.o vt_metmap.c
</span><br>
<span class="quotelev2">&gt; &gt; mv -f .deps/vt_metmap.Tpo .deps/vt_metmap.Po
</span><br>
<span class="quotelev2">&gt; &gt; icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/
</span><br>
<span class="quotelev2">&gt; &gt; otflib
</span><br>
<span class="quotelev2">&gt; &gt; -I../ex
</span><br>
<span class="quotelev2">&gt; &gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
</span><br>
<span class="quotelev2">&gt; &gt; \&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
</span><br>
<span class="quotelev2">&gt; &gt; bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/
</span><br>
<span class="quotelev2">&gt; &gt; vampirtrace\&quot;
</span><br>
<span class="quotelev2">&gt; &gt; -DRFG -
</span><br>
<span class="quotelev2">&gt; &gt; DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_otf_gen.o
</span><br>
<span class="quotelev1">&gt; -MD 
</span><br>
<span class="quotelev2">&gt; &gt; -MP
</span><br>
<span class="quotelev2">&gt; &gt; -MF .de
</span><br>
<span class="quotelev2">&gt; &gt; ps/vt_otf_gen.Tpo -c -o vt_otf_gen.o vt_otf_gen.c
</span><br>
<span class="quotelev2">&gt; &gt; vt_otf_gen.c(117): error: identifier &quot;PATH_MAX&quot; is undefined
</span><br>
<span class="quotelev2">&gt; &gt;    char                name[PATH_MAX];
</span><br>
<span class="quotelev2">&gt; &gt;                             ^
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; compilation aborted for vt_otf_gen.c (code 2)
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: *** [vt_otf_gen.o] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[5]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt/
</span><br>
<span class="quotelev2">&gt; &gt; vtlib'
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[4]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev2">&gt; &gt; make[3]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[2]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt'
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt; make[1]: Leaving directory `/tmp/openmpi-1.3.1/ompi'
</span><br>
<span class="quotelev2">&gt; &gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Seems like ompi/contrib/vt/vt/vtlib/vt_otf_gen.c and
</span><br>
<span class="quotelev2">&gt; &gt; ompi/contrib/vt/vt/vtlib/vt_thrd.c need to be updated as well.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I took the relevant parts of Andrea Iob's patch for the two files 
</span><br>
<span class="quotelev2">&gt; &gt; above
</span><br>
<span class="quotelev2">&gt; &gt; and tried again and things compiled fine.
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/community/lists/users/2009/01/7785.php">http://www.open-mpi.org/community/lists/users/2009/01/7785.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Rene
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8556.php">George Bosilca: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>Previous message:</strong> <a href="8554.php">Ralph Castain: "Re: [OMPI users] Collective operations and synchronization"</a>
<li><strong>In reply to:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
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
