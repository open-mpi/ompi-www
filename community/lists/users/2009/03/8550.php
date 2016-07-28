<?
$subject_val = "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 15:40:13 2009" -->
<!-- isoreceived="20090323194013" -->
<!-- sent="Mon, 23 Mar 2009 13:40:04 -0600" -->
<!-- isosent="20090323194004" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers" -->
<!-- id="1A0D4A65-085C-46C1-B8C7-8FDA7EA50303_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="1237836856.5076.153.camel_at_holwrs01.amoco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 15:40:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<li><strong>Previous message:</strong> <a href="8549.php">Rene Salmon: "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="8549.php">Rene Salmon: "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<li><strong>Reply:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah - guess the VampirTrace guys missed those. In the interim, you can  
<br>
disable that part of the code by adding
<br>
<p>--enable-contrib-no-build=vt
<br>
<p>to your configure line
<br>
<p>Ralph
<br>
<p><p>On Mar 23, 2009, at 1:34 PM, Rene Salmon wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the release notes for openmpi-1.3.1 there was this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Fix a few places where we used PATH_MAX instead of OMPI_PATH_MAX,
</span><br>
<span class="quotelev1">&gt;   leading to compile problems on some platforms. Thanks to Andrea Iob
</span><br>
<span class="quotelev1">&gt;   for the bug report.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess maybe all the places where PATH_MAX appears did not get
</span><br>
<span class="quotelev1">&gt; replaced?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Here is what i get when I try to compile openmpi 1.3.1 with intel
</span><br>
<span class="quotelev1">&gt; compilers l_cc_p_10.1.021:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib
</span><br>
<span class="quotelev1">&gt; -I../ex
</span><br>
<span class="quotelev1">&gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
</span><br>
<span class="quotelev1">&gt; \&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
</span><br>
<span class="quotelev1">&gt; bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/ 
</span><br>
<span class="quotelev1">&gt; vampirtrace\&quot;
</span><br>
<span class="quotelev1">&gt; -DRFG -
</span><br>
<span class="quotelev1">&gt; DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_error.o -MD -MP
</span><br>
<span class="quotelev1">&gt; -MF .deps
</span><br>
<span class="quotelev1">&gt; /vt_error.Tpo -c -o vt_error.o vt_error.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_error.Tpo .deps/vt_error.Po
</span><br>
<span class="quotelev1">&gt; icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib
</span><br>
<span class="quotelev1">&gt; -I../ex
</span><br>
<span class="quotelev1">&gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
</span><br>
<span class="quotelev1">&gt; \&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
</span><br>
<span class="quotelev1">&gt; bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/ 
</span><br>
<span class="quotelev1">&gt; vampirtrace\&quot;
</span><br>
<span class="quotelev1">&gt; -DRFG -
</span><br>
<span class="quotelev1">&gt; DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_metmap.o -MD - 
</span><br>
<span class="quotelev1">&gt; MP
</span><br>
<span class="quotelev1">&gt; -MF .dep
</span><br>
<span class="quotelev1">&gt; s/vt_metmap.Tpo -c -o vt_metmap.o vt_metmap.c
</span><br>
<span class="quotelev1">&gt; mv -f .deps/vt_metmap.Tpo .deps/vt_metmap.Po
</span><br>
<span class="quotelev1">&gt; icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/ 
</span><br>
<span class="quotelev1">&gt; otflib
</span><br>
<span class="quotelev1">&gt; -I../ex
</span><br>
<span class="quotelev1">&gt; tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
</span><br>
<span class="quotelev1">&gt; \&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
</span><br>
<span class="quotelev1">&gt; bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/ 
</span><br>
<span class="quotelev1">&gt; vampirtrace\&quot;
</span><br>
<span class="quotelev1">&gt; -DRFG -
</span><br>
<span class="quotelev1">&gt; DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_otf_gen.o -MD  
</span><br>
<span class="quotelev1">&gt; -MP
</span><br>
<span class="quotelev1">&gt; -MF .de
</span><br>
<span class="quotelev1">&gt; ps/vt_otf_gen.Tpo -c -o vt_otf_gen.o vt_otf_gen.c
</span><br>
<span class="quotelev1">&gt; vt_otf_gen.c(117): error: identifier &quot;PATH_MAX&quot; is undefined
</span><br>
<span class="quotelev1">&gt;    char                name[PATH_MAX];
</span><br>
<span class="quotelev1">&gt;                             ^
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; compilation aborted for vt_otf_gen.c (code 2)
</span><br>
<span class="quotelev1">&gt; make[5]: *** [vt_otf_gen.o] Error 2
</span><br>
<span class="quotelev1">&gt; make[5]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt/ 
</span><br>
<span class="quotelev1">&gt; vtlib'
</span><br>
<span class="quotelev1">&gt; make[4]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[4]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[3]: *** [all] Error 2
</span><br>
<span class="quotelev1">&gt; make[3]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt'
</span><br>
<span class="quotelev1">&gt; make[2]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[2]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt'
</span><br>
<span class="quotelev1">&gt; make[1]: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt; make[1]: Leaving directory `/tmp/openmpi-1.3.1/ompi'
</span><br>
<span class="quotelev1">&gt; make: *** [all-recursive] Error 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Seems like ompi/contrib/vt/vt/vtlib/vt_otf_gen.c and
</span><br>
<span class="quotelev1">&gt; ompi/contrib/vt/vt/vtlib/vt_thrd.c need to be updated as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I took the relevant parts of Andrea Iob's patch for the two files  
</span><br>
<span class="quotelev1">&gt; above
</span><br>
<span class="quotelev1">&gt; and tried again and things compiled fine.
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2009/01/7785.php">http://www.open-mpi.org/community/lists/users/2009/01/7785.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Rene
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8551.php">Olaf Lenz: "[OMPI users] dlopening openmpi libs (was: Re: Problems in 1.3 loading shared libs when	usingVampirServer)"</a>
<li><strong>Previous message:</strong> <a href="8549.php">Rene Salmon: "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>In reply to:</strong> <a href="8549.php">Rene Salmon: "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
<li><strong>Reply:</strong> <a href="8555.php">Rene Salmon: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 withintel compilers"</a>
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
