<?
$subject_val = "[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 20 18:00:00 2013" -->
<!-- isoreceived="20131220230000" -->
<!-- sent="Fri, 20 Dec 2013 14:59:58 -0800" -->
<!-- isosent="20131220225958" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs" -->
<!-- id="CAAvDA1430ndW5ygW2-YY3MNBN5kshceTpNiN=5dapRPp_Vr4=Q_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-20 17:59:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13541.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Maybe reply:</strong> <a href="13541.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This case is not quite like my OpenBSD-5 report.
<br>
On FreeBSD-9 I *can* run singletons, but &quot;-np 2&quot; hangs.
<br>
<p>The following hangs:
<br>
$ mpirun -np 2 examples/ring_c
<br>
<p>The following complains about the &quot;bogus&quot; btl selection.
<br>
So this is not the same as my problem with OpenBSD-5:
<br>
$ mpirun -mca btl bogus -np 2 examples/ring_c
<br>
[freebsd9-amd64.qemu:05926] mca: base: components_open: component pml / bfo
<br>
open function failed
<br>
[freebsd9-amd64.qemu:05926] mca: base: components_open: component pml / ob1
<br>
open function failed
<br>
[freebsd9-amd64.qemu:05926] PML ob1 cannot be selected
<br>
--------------------------------------------------------------------------
<br>
A requested component was not found, or was unable to be opened.  This
<br>
means that this component is either not installed or is unable to be
<br>
used on your system (e.g., sometimes this means that shared libraries
<br>
that the component requires are unable to be found/loaded).  Note that
<br>
Open MPI stopped checking at the first component that it did not find.
<br>
<p>Host:      freebsd9-amd64.qemu
<br>
Framework: btl
<br>
Component: bogus
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
No available pml components were found!
<br>
<p>This means that there are no components of this type installed on your
<br>
system or all the components reported that they could not be used.
<br>
<p>This is a fatal error; your MPI process is likely to abort.  Check the
<br>
output of the &quot;ompi_info&quot; command and ensure that components of this
<br>
type are available on your system.  You may also wish to check the
<br>
value of the &quot;component_path&quot; MCA parameter and ensure that it has at
<br>
least one directory that contains valid MCA components.
<br>
--------------------------------------------------------------------------
<br>
<p><p>For the non-bogus case, &quot;top&quot; show one idle and one active ring_c process:
<br>
&nbsp;&nbsp;PID USERNAME  THR PRI NICE   SIZE    RES STATE   C   TIME   WCPU COMMAND
<br>
&nbsp;5933 phargrov    2  29    0    98M  6384K select  1   0:32 100.00% ring_c
<br>
&nbsp;5931 phargrov    2  20    0 77844K  4856K select  0   0:00  0.00% orterun
<br>
&nbsp;5932 phargrov    2  24    0 51652K  4960K select  0   0:00  0.00% ring_c
<br>
<p>A backtrace for the 100%-cpu ring_c process:
<br>
(gdb) where
<br>
#0  0x0000000800d9811c in poll () from /lib/libc.so.7
<br>
#1  0x0000000800ae37fe in poll () from /lib/libthr.so.3
<br>
#2  0x00000008013259aa in poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
<br>
#3  0x000000080131eb50 in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
<br>
#4  0x000000080106395d in orte_progress_thread_engine ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-rte.so.7
<br>
#5  0x0000000800ae10a4 in pthread_getprio () from /lib/libthr.so.3
<br>
#6  0x0000000000000000 in ?? ()
<br>
Error accessing memory address 0x7fffffbfe000: Bad address.
<br>
<p><p>And for the idle ring_c process:
<br>
(gdb) where
<br>
#0  0x0000000800d9811c in poll () from /lib/libc.so.7
<br>
#1  0x0000000800ae37fe in poll () from /lib/libthr.so.3
<br>
#2  0x00000008013259aa in poll_dispatch ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
<br>
#3  0x000000080131eb50 in opal_libevent2021_event_base_loop ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-pal.so.7
<br>
#4  0x000000080106395d in orte_progress_thread_engine ()
<br>
&nbsp;&nbsp;&nbsp;from
<br>
/home/phargrov/OMPI/openmpi-1.7-latest-freebsd9-amd64/INST/lib/libopen-rte.so.7
<br>
#5  0x0000000800ae10a4 in pthread_getprio () from /lib/libthr.so.3
<br>
#6  0x0000000000000000 in ?? ()
<br>
Error accessing memory address 0x7fffffbfe000: Bad address.
<br>
<p><p>They look to be the same, but I double checked that these are correct.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-13537/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13538.php">Dave Goodell (dgoodell): "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD mpirun warning"</a>
<li><strong>Previous message:</strong> <a href="13536.php">Paul Hargrove: "Re: [OMPI devel] [EXTERNAL] 1.7.4rc2r30031 - OpenBSD-5 mpirun hangs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13541.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
<li><strong>Maybe reply:</strong> <a href="13541.php">Paul Hargrove: "Re: [OMPI devel] 1.7.4rc2r30031 - FreeBSD-9 mpirun hangs"</a>
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
