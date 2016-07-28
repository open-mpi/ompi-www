<?
$subject_val = "[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 23 15:34:24 2009" -->
<!-- isoreceived="20090323193424" -->
<!-- sent="Mon, 23 Mar 2009 14:34:16 -0500" -->
<!-- isosent="20090323193416" -->
<!-- name="Rene Salmon" -->
<!-- email="salmr0_at_[hidden]" -->
<!-- subject="[OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers" -->
<!-- id="1237836856.5076.153.camel_at_holwrs01.amoco.com" -->
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
<strong>Subject:</strong> [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers<br>
<strong>From:</strong> Rene Salmon (<em>salmr0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-23 15:34:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,  
<br>
<p>In the release notes for openmpi-1.3.1 there was this:
<br>
<p>- Fix a few places where we used PATH_MAX instead of OMPI_PATH_MAX, 
<br>
&nbsp;&nbsp;&nbsp;leading to compile problems on some platforms. Thanks to Andrea Iob 
<br>
&nbsp;&nbsp;&nbsp;for the bug report.
<br>
<p><p>I guess maybe all the places where PATH_MAX appears did not get
<br>
replaced?
<br>
<p>Here is what i get when I try to compile openmpi 1.3.1 with intel
<br>
compilers l_cc_p_10.1.021:
<br>
<p>icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib
<br>
-I../ex
<br>
tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
<br>
\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
<br>
bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/vampirtrace\&quot;
<br>
-DRFG -
<br>
DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_error.o -MD -MP
<br>
-MF .deps
<br>
/vt_error.Tpo -c -o vt_error.o vt_error.c
<br>
mv -f .deps/vt_error.Tpo .deps/vt_error.Po
<br>
icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib
<br>
-I../ex
<br>
tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
<br>
\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
<br>
bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/vampirtrace\&quot;
<br>
-DRFG -
<br>
DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_metmap.o -MD -MP
<br>
-MF .dep
<br>
s/vt_metmap.Tpo -c -o vt_metmap.o vt_metmap.c
<br>
mv -f .deps/vt_metmap.Tpo .deps/vt_metmap.Po
<br>
icc -DHAVE_CONFIG_H -I. -I.. -I../tools/opari/lib -I../extlib/otf/otflib
<br>
-I../ex
<br>
tlib/otf/otflib     -D_GNU_SOURCE -DBINDIR=
<br>
\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/
<br>
bin\&quot; -DDATADIR=\&quot;/hpc/soft/openmpi/x86_64/1.3.1/tcp/share/vampirtrace\&quot;
<br>
-DRFG -
<br>
DVT_BFD -DVT_MEMHOOK -DVT_IOWRAP  -static-intel -MT vt_otf_gen.o -MD -MP
<br>
-MF .de
<br>
ps/vt_otf_gen.Tpo -c -o vt_otf_gen.o vt_otf_gen.c
<br>
vt_otf_gen.c(117): error: identifier &quot;PATH_MAX&quot; is undefined
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char                name[PATH_MAX];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;^
<br>
<p>compilation aborted for vt_otf_gen.c (code 2)
<br>
make[5]: *** [vt_otf_gen.o] Error 2
<br>
make[5]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt/vtlib'
<br>
make[4]: *** [all-recursive] Error 1
<br>
make[4]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt'
<br>
make[3]: *** [all] Error 2
<br>
make[3]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt/vt'
<br>
make[2]: *** [all-recursive] Error 1
<br>
make[2]: Leaving directory `/tmp/openmpi-1.3.1/ompi/contrib/vt'
<br>
make[1]: *** [all-recursive] Error 1
<br>
make[1]: Leaving directory `/tmp/openmpi-1.3.1/ompi'
<br>
make: *** [all-recursive] Error 1
<br>
<p><p><p><p>Seems like ompi/contrib/vt/vt/vtlib/vt_otf_gen.c and
<br>
ompi/contrib/vt/vt/vtlib/vt_thrd.c need to be updated as well.
<br>
<p>I took the relevant parts of Andrea Iob's patch for the two files above
<br>
and tried again and things compiled fine. 
<br>
<a href="http://www.open-mpi.org/community/lists/users/2009/01/7785.php">http://www.open-mpi.org/community/lists/users/2009/01/7785.php</a>
<br>
<p><p><p>Rene
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>Previous message:</strong> <a href="8548.php">Ralph Castain: "Re: [OMPI users] mpirun/exec requires ssh?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
<li><strong>Reply:</strong> <a href="8550.php">Ralph Castain: "Re: [OMPI users] PATH_MAX error with compiling openmpi 1.3.1 with intel compilers"</a>
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
