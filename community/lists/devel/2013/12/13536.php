<?
$subject_val = "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 17:48:04 2013" -->
<!-- isoreceived="20131220224804" -->
<!-- sent="Fri, 20 Dec 2013 14:48:03 -0800" -->
<!-- isosent="20131220224803" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs" -->
<!-- id="CAAvDA1496FHnoPU6hnCYk30k+d-eszYWNc1jJPUC7xOLzA9MQw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="69A29AB53D57F54D81061A9E4E45B8FD566EFECF_at_EXMB01.srn.sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13537.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13535.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>In reply to:</strong> <a href="13534.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13539.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13539.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brian,
<br>
<p>Of course, I should have thought of that myself.
<br>
See below for backtrace from a singleton run.
<br>
<p>I'm starting an --enable-debug build to maybe get some line number info too.
<br>
<p>-Paul
<br>
<p>(gdb) where
<br>
#0  0x00000406457a9e3a in nanosleep () at &lt;stdin&gt;:2
<br>
#1  0x000004063947e2d4 in nanosleep (rqtp=0x7f7ffffeca30, rmtp=0x0)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;at /usr/src/lib/librthread/rthread_cancel.c:274
<br>
#2  0x0000040644a5a89b in orte_routed_base_register_sync ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
<br>
#3  0x00000406490d943c in init_routes ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/openmpi/mca_routed_binomial.so
<br>
#4  0x0000040644a3c37f in orte_ess_base_app_setup ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
<br>
#5  0x000004063eb1797d in rte_init ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/openmpi/mca_ess_env.so
<br>
#6  0x0000040644a1a3fe in orte_init ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libopen-rte.so.7.0
<br>
#7  0x00000406482c7976 in ompi_mpi_init ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libmpi.so.4.0
<br>
#8  0x00000406482eac92 in PMPI_Init ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/lib/libmpi.so.4.0
<br>
#9  0x0000040438c01093 in main (argc=1, argv=0x7f7ffffece60) at ring_c.c:19
<br>
Current language:  auto; currently asm
<br>
<p><p><p>On Fri, Dec 20, 2013 at 2:38 PM, Barrett, Brian W &lt;bwbarre_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  Paul -
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any chance you could grab a stack trace from the mpi app? That's probably
</span><br>
<span class="quotelev1">&gt; the fastest next step
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Brian
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sent with Good (www.good.com)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; *From: *Paul Hargrove [phhargrove_at_[hidden]]
</span><br>
<span class="quotelev1">&gt; *Sent: *Friday, December 20, 2013 03:33 PM Mountain Standard Time
</span><br>
<span class="quotelev1">&gt; *To: *Open MPI Developers
</span><br>
<span class="quotelev1">&gt; *Subject: *[EXTERNAL] [OMPI devel] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; With plenty of help from Jeff and Ralph's bug fixes in the past 24 hours,
</span><br>
<span class="quotelev1">&gt; I can now build OMPI for NetBSD.  However, running even a simple example
</span><br>
<span class="quotelev1">&gt; fails:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Having set PATH and LD_LIBARY_PATH:
</span><br>
<span class="quotelev1">&gt; $ mpirun -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; just hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Output from &quot;top&quot; shows idle procs:
</span><br>
<span class="quotelev1">&gt;    PID USERNAME PRI NICE  SIZE   RES STATE     WAIT      TIME    CPU
</span><br>
<span class="quotelev1">&gt; COMMAND
</span><br>
<span class="quotelev1">&gt; 31841 phargrov  10    0 2140K 3960K sleep/1   nanosle   0:00  0.00% ring_c
</span><br>
<span class="quotelev1">&gt; 13490 phargrov   2    0 2540K 4892K sleep/1   poll      0:00  0.00% orterun
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Distrusting then env vars and relying instead on the auto-prefix
</span><br>
<span class="quotelev1">&gt; behavior:
</span><br>
<span class="quotelev1">&gt; $ /home/phargrov/OMPI/openmpi-1.7-latest-openbsd5-amd64/INST/bin/mpirun
</span><br>
<span class="quotelev1">&gt; -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt; also hangs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Not sure exactly what to infer from this, but a &quot;bogus&quot; btl doesn't
</span><br>
<span class="quotelev1">&gt; produce any complaint, which may indicate how far startup got:
</span><br>
<span class="quotelev1">&gt; $ mpirun -mca btl bogus -np 1 examples/ring_c
</span><br>
<span class="quotelev1">&gt;  Still hangs, and no complaint about the blt selection
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  All three cases above are singleton (-np 1) runs, but the behavior with
</span><br>
<span class="quotelev1">&gt; &quot;-np 2&quot; is the same.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  This does NOT appear to be an ORTE problem:
</span><br>
<span class="quotelev1">&gt;  -bash-4.2$ orterun -np 1 date
</span><br>
<span class="quotelev1">&gt; Fri Dec 20 14:11:42 PST 2013
</span><br>
<span class="quotelev1">&gt; -bash-4.2$ orterun -np 2 date
</span><br>
<span class="quotelev1">&gt; Fri Dec 20 14:11:45 PST 2013
</span><br>
<span class="quotelev1">&gt; Fri Dec 20 14:11:45 PST 2013
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Let me know what sort of verbose mca parameters to set and I'll collect
</span><br>
<span class="quotelev1">&gt; the info.
</span><br>
<span class="quotelev1">&gt; Compressed output of &quot;ompi_info --all&quot; is attached.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  -Paul
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --
</span><br>
<span class="quotelev1">&gt; Paul H. Hargrove                          PHHargrove_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Future Technologies Group
</span><br>
<span class="quotelev1">&gt; Computer and Data Sciences Department     Tel: +1-510-495-2352
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13536/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13537.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Previous message:</strong> <a href="13535.php">Paul Hargrove: "[OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>In reply to:</strong> <a href="13534.php">Barrett, Brian W: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13539.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<li><strong>Reply:</strong> <a href="13539.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
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
