<?
$subject_val = "[OMPI users] segfault with -pernode on 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 18:27:51 2010" -->
<!-- isoreceived="20100607222751" -->
<!-- sent="Mon, 7 Jun 2010 18:27:44 -0400" -->
<!-- isosent="20100607222744" -->
<!-- name="S. Levent Yilmaz" -->
<!-- email="leventyilmaz_at_[hidden]" -->
<!-- subject="[OMPI users] segfault with -pernode on 1.4.2" -->
<!-- id="AANLkTillYEOXLZ2TIUNAqc6qlMtbUS9XKy2VwWnjNmgP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] segfault with -pernode on 1.4.2<br>
<strong>From:</strong> S. Levent Yilmaz (<em>leventyilmaz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 18:27:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13245.php">Ralph Castain: "Re: [OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13243.php">Jovana Knezevic: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13245.php">Ralph Castain: "Re: [OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13245.php">Ralph Castain: "Re: [OMPI users] segfault with -pernode on 1.4.2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
<p>I recently installed 1.4.2 version, and am having a problem specific to this
<br>
version only (or so it seems). Before I lay out the details please note that
<br>
&nbsp;I am building 1.4.2 *exactly* the same as I built 1.4.1: same compiler
<br>
options, same OpenIB and other system libraries, same configure options, and
<br>
same everything. Version 1.4.1 doesn't have this issue
<br>
<p>The error message is the following:
<br>
<p>&nbsp;$ mpirun -pernode ./hello
<br>
<p>[n90:21674] *** Process received signal ***
<br>
[n90:21674] Signal: Segmentation fault (11)
<br>
[n90:21674] Signal code: Address not mapped (1)
<br>
[n90:21674] Failing at address: 0x50
<br>
[n90:21674] [ 0] /lib64/libpthread.so.0 [0x3654a0e4c0]
<br>
[n90:21674] [ 1]
<br>
/opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xa7)
<br>
[0x2b6b2f299b87]
<br>
[n90:21674] [ 2]
<br>
/opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x3ce)
<br>
[0x2b6b2f2baefe]
<br>
[n90:21674] [ 3]
<br>
/opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xd5)
<br>
[0x2b6b2f2ce1e5]
<br>
[n90:21674] [ 4] /opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0
<br>
[0x2b6b2f2d17ee]
<br>
[n90:21674] [ 5] mpirun [0x404cff]
<br>
[n90:21674] [ 6] mpirun [0x403e48]
<br>
[n90:21674] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3653e1d974]
<br>
[n90:21674] [ 8] mpirun [0x403d79]
<br>
[n90:21674] *** End of error message ***
<br>
Segmentation fault
<br>
<p>[n74:21733] [[41942,0],1] routed:binomial: Connection to lifeline
<br>
[[41942,0],0] lost
<br>
<p>This last line is  from mpirun, not the executable. The executable is a
<br>
simple hello world. All is well without the -pernode flag. All is well even
<br>
when there is only one process per node (say, if so allocated over PBS) and
<br>
-pernode flag is not used.
<br>
<p>Attached are what is asked herein:
<br>
<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>  except
<br>
the Infiniband specific details. I'll be happy to provide if that is
<br>
necessary, but note that the failure is the same if I used -mca btl
<br>
self,tcp
<br>
<p>Thank you,
<br>
Levent
<br>
<p>

<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13244/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13244/config.log.gz">config.log.gz</a>
</ul>
<!-- attachment="config.log.gz" -->
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13244/ompi_info.all.gz">ompi_info.all.gz</a>
</ul>
<!-- attachment="ompi_info.all.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13245.php">Ralph Castain: "Re: [OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>Previous message:</strong> <a href="13243.php">Jovana Knezevic: "Re: [OMPI users] Behaviour of MPI_Cancel when using 'large' messages"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13245.php">Ralph Castain: "Re: [OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>Reply:</strong> <a href="13245.php">Ralph Castain: "Re: [OMPI users] segfault with -pernode on 1.4.2"</a>
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
