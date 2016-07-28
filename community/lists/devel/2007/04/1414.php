<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 15 13:40:06 2007" -->
<!-- isoreceived="20070415174006" -->
<!-- sent="Sun, 15 Apr 2007 13:40:01 -0400" -->
<!-- isosent="20070415174001" -->
<!-- name="chaitali dherange" -->
<!-- email="chaitali.dherange_at_[hidden]" -->
<!-- subject="[OMPI devel] SOS!! Run-time error" -->
<!-- id="6cc08a440704151040r2e84ca9bi25e5cb4f15a977fb_at_mail.gmail.com" -->
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
<strong>From:</strong> chaitali dherange (<em>chaitali.dherange_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-15 13:40:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<li><strong>Previous message:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<li><strong>Reply:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<li><strong>Reply:</strong> <a href="1420.php">Brian Barrett: "Re: [OMPI devel] SOS!! Run-time error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;I have downloaded the developer version of source code by downloading a
<br>
nightly Subversion snapshot tarball.And have installed the openmpi.
<br>
Using
<br>
<p>./configure --prefix=/net/hc293/chaitali/openmpi_dev
<br>
(lots of output... without errors)
<br>
make all install.
<br>
(lots of output... without errors)
<br>
<p>then I have tried to run the example provided in this version of source
<br>
code... the ring_c.c file... I first copied it to my home directory...
<br>
/net/hc293/chaitali
<br>
now when inside my home directory... i did
<br>
<p>set path=($path /net.hc293/chaitali/openmpi_dev/bin)
<br>
set $LD_LIBRARY_PATH = ( /net/hc293/chaitali/dev_openmpi/lib )
<br>
mpicc -o chaitali_test ring_c.c
<br>
(This gave no errors at all)
<br>
mpirun --prefix /net/hc293/chaitali/openmpi_dev -np 3 --hostfile
<br>
/net/hc293/chaitali/machinefile ./test_chaitali
<br>
(This gave foll errors..)
<br>
[oolong:09783] *** Process received signal ***
<br>
[oolong:09783] Signal: Segmentation fault (11)
<br>
[oolong:09783] Signal code:  (128)
<br>
[oolong:09783] Failing at address: (nil)
<br>
[oolong:09783] [ 0] /lib64/tls/libpthread.so.0 [0x2a95e01430]
<br>
[oolong:09783] [ 1]
<br>
/net/hc293/chaitali/openmpi_dev/lib/libopen-pal.so.0(opal_event_init+0x166)
<br>
[0x2a957d9e16]
<br>
[oolong:09783] [ 2]
<br>
/net/hc293/chaitali/openmpi_dev/lib/libopen-rte.so.0(orte_init_stage1+0x168)
<br>
[0x2a95680638]
<br>
[oolong:09783] [ 3]
<br>
/net/hc293/chaitali/openmpi_dev/lib/libopen-rte.so.0(orte_system_init+0xa)
<br>
[0x2a9568375a]
<br>
[oolong:09783] [ 4]
<br>
/net/hc293/chaitali/openmpi_dev/lib/libopen-rte.so.0(orte_init+0x49)
<br>
[0x2a95680329]
<br>
[oolong:09783] [ 5] mpirun(orterun+0x155) [0x4029fd]
<br>
[oolong:09783] [ 6] mpirun(main+0x1b) [0x4028a3]
<br>
[oolong:09783] [ 7] /lib64/tls/libc.so.6(__libc_start_main+0xdb)
<br>
[0x2a95f273fb]
<br>
[oolong:09783] [ 8] mpirun [0x4027fa]
<br>
[oolong:09783] *** End of error message ***
<br>
Segmentation fault
<br>
<p>I understand that the [5] and [6] are the actual errors. But dont understand
<br>
why? or how to overcome this error?
<br>
<p>Please find attached the foll files:
<br>
- 'ring_c.c' file which I am trying to run.
<br>
- 'config.log' file from the openmpi-1.2.1a0r14362 folder
<br>
- 'ompi_info --all.txt' which is the the output of ompi_info --all... This
<br>
contains the above mentioned errors.
<br>
<p>Thanks and Regards,
<br>
Chaitali
<br>
<p><p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1414/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1414/doubt.rar">doubt.rar</a>
</ul>
<!-- attachment="doubt.rar" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<li><strong>Previous message:</strong> <a href="1413.php">pooja_at_[hidden]: "Re: [OMPI devel] Is it possible to get BTL transport work directly with MPI level"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<li><strong>Reply:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<li><strong>Reply:</strong> <a href="1420.php">Brian Barrett: "Re: [OMPI devel] SOS!! Run-time error"</a>
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
