<?
$subject_val = "[OMPI users] --prefix, segfaulting";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep 17 19:01:59 2014" -->
<!-- isoreceived="20140917230159" -->
<!-- sent="Thu, 18 Sep 2014 01:01:39 +0200" -->
<!-- isosent="20140917230139" -->
<!-- name="Nico Schl&#195;&#182;mer" -->
<!-- email="nico.schloemer_at_[hidden]" -->
<!-- subject="[OMPI users] --prefix, segfaulting" -->
<!-- id="CAK6Z60eFC=deMCbHhAR-B3mrDsRbj_iRyEqzk6gkU=R2ZKpyQw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] --prefix, segfaulting<br>
<strong>From:</strong> Nico Schl&#195;&#182;mer (<em>nico.schloemer_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-09-17 19:01:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25339.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<li><strong>Previous message:</strong> <a href="25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25339.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<li><strong>Reply:</strong> <a href="25339.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all!
<br>
<p>Today, I observed a really funky behavior of my stock
<br>
```
<br>
$ mpiexec --version
<br>
mpiexec (OpenRTE) 1.6.5
<br>
<p>Report bugs to <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
```
<br>
on Ubuntu 14.04. When running one of my test codes with
<br>
```
<br>
$ mpiexec -n 2 ioTest
<br>
[...]
<br>
```
<br>
all is fine. If instead I use the full path of mpiexec, I get a
<br>
different behavior
<br>
```
<br>
$ /usr/bin/mpiexec -n 2 ioTest
<br>
[...]
<br>
(exception thrown)
<br>
```
<br>
I was puzzled, so skimmed the manpage and found that the `--prefix`
<br>
option might have something to do with it. I played around and got
<br>
```
<br>
$ /usr/bin/mpiexec --prefix . -n 2 ioTest
<br>
[fuji:21003] *** Process received signal ***
<br>
[fuji:21003] Signal: Segmentation fault (11)
<br>
[fuji:21003] Signal code: Address not mapped (1)
<br>
[fuji:21003] Failing at address: 0x1000000dd
<br>
[fuji:21003] [ 0] /lib/x86_64-linux-gnu/libpthread.so.0(+0x10340)
<br>
[0x7f12e4069340]
<br>
[fuji:21003] [ 1] /lib/x86_64-linux-gnu/libc.so.6(_IO_vfprintf+0x1d13)
<br>
[0x7f12e3cde8f3]
<br>
[fuji:21003] [ 2]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__vasprintf_chk+0xb5) [0x7f12e3d9e035]
<br>
[fuji:21003] [ 3]
<br>
/usr/lib/libopen-rte.so.4(opal_show_help_vstring+0x343)
<br>
[0x7f12e43043e3]
<br>
[fuji:21003] [ 4] /usr/lib/libopen-rte.so.4(orte_show_help+0xaf)
<br>
[0x7f12e42a5faf]
<br>
[fuji:21003] [ 5] /usr/bin/mpiexec() [0x403ab3]
<br>
[fuji:21003] [ 6] /usr/bin/mpiexec() [0x40347d]
<br>
[fuji:21003] [ 7]
<br>
/lib/x86_64-linux-gnu/libc.so.6(__libc_start_main+0xf5)
<br>
[0x7f12e3cb4ec5]
<br>
[fuji:21003] [ 8] /usr/bin/mpiexec() [0x403399]
<br>
[fuji:21003] *** End of error message ***
<br>
Segmentation fault (core dumped)
<br>
```
<br>
That's tough!
<br>
<p>Should I try to reproduce this with a more recent version? Any idea
<br>
what the reason for the different behavior of `mpiexec` and
<br>
`/usr/bin/mpiexec` might be?
<br>
<p>Cheers,
<br>
Nico
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25339.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<li><strong>Previous message:</strong> <a href="25337.php">Beichuan Yan: "Re: [OMPI users] File locking in ADIO, OpenMPI 1.6.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25339.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
<li><strong>Reply:</strong> <a href="25339.php">Ralph Castain: "Re: [OMPI users] --prefix, segfaulting"</a>
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
