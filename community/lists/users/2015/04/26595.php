<?
$subject_val = "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr  2 10:33:23 2015" -->
<!-- isoreceived="20150402143323" -->
<!-- sent="Thu, 2 Apr 2015 16:33:22 +0200" -->
<!-- isosent="20150402143322" -->
<!-- name="Thomas Klimpel" -->
<!-- email="jacques.gentzen_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5" -->
<!-- id="CAAowFmOg8cJEXG-m8fY4QN+Mu=Bp3C5Suj+5K2q5HJpmrXWrMg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAMD57ocYjtABSBDB8-U0UaS93r2P8qoV2U8VH45yfEbKPOf6Tg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5<br>
<strong>From:</strong> Thomas Klimpel (<em>jacques.gentzen_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-04-02 10:33:22
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26596.php">Lei Shi: "[OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26594.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26594.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26642.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26642.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The normal crash without crtl-Z can produce different stackdumps. With
<br>
ctrl-Z, the stackdump looks nearly always as follows: (In the debugger, I
<br>
get source files and line-numbers, so I guess it is built with debug-info)
<br>
<p>&#226;&#128;&#139;[wam-r02c01b02:19183] *** Process received signal ***
<br>
[wam-r02c01b02:19183] Signal: Segmentation fault (11)
<br>
[wam-r02c01b02:19183] Signal code: Address not mapped (1)
<br>
[wam-r02c01b02:19183] Failing at address: 0x100000010
<br>
[wam-r02c01b02:19183] [ 0] /lib64/libc.so.6() [0x366aa326a0]
<br>
[wam-r02c01b02:19183] [ 1] /lib64/libc.so.6() [0x366aa79252]
<br>
[wam-r02c01b02:19183] [ 2] /lib64/libc.so.6() [0x366aa7b7da]
<br>
[wam-r02c01b02:19183] [ 3] /lib64/libc.so.6(realloc+0xe5) [0x366aa7baf5]
<br>
[wam-r02c01b02:19183] [ 4]
<br>
/home/klimpel/test13/openmpi-1.6.5/lib/libmpi.so.1(+0xeebca)
<br>
[0x7f15960a5bca]
<br>
[wam-r02c01b02:19183] [ 5]
<br>
/home/klimpel/test13/openmpi-1.6.5/lib/libmpi.so.1(opal_event_base_loop+0x113)
<br>
[0x7f15960a77f3]
<br>
[wam-r02c01b02:19183] [ 6]
<br>
/home/klimpel/test13/openmpi-1.6.5/lib/libmpi.so.1(opal_progress+0xab)
<br>
[0x7f15960ccf8b]
<br>
[wam-r02c01b02:19183] [ 7]
<br>
/home/klimpel/test13/openmpi-1.6.5/lib/openmpi/mca_pml_ob1.so(mca_pml_ob1_iprobe+0x26f)
<br>
[0x7f157f7aaecf]
<br>
[wam-r02c01b02:19183] [ 8]
<br>
/home/klimpel/test13/openmpi-1.6.5/lib/libmpi.so.1(PMPI_Iprobe+0x101)
<br>
[0x7f159602e501]
<br>
[wam-r02c01b02:19183] [ 9]
<br>
/home/klimpel/test13/lib/libgtransaction.so(_ZN14OMPIConnection7ReceiveERSt6vectorIhSaIhEERii+0x6c)
<br>
[0x7f159f6f8abc]
<br>
...
<br>
[wam-r02c01b02:19183] [13]
<br>
/home/klimpel/test13/lib/libgenginebase.so(_ZN15ThreadScheduler11SpawnThreadEi+0x32d)
<br>
[0x7f15a051a3dd]
<br>
[wam-r02c01b02:19183] [14]
<br>
/home/klimpel/test13/lib/libboost_thread.so.1.55.0(+0xcaa3) [0x7f159baedaa3]
<br>
[wam-r02c01b02:19183] [15] /lib64/libpthread.so.0() [0x366ae079d1]
<br>
[wam-r02c01b02:19183] [16] /lib64/libc.so.6(clone+0x6d) [0x366aae89dd]
<br>
[wam-r02c01b02:19183] *** End of error message ***
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26595/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26596.php">Lei Shi: "[OMPI users] Can I just use non-blocking send/receive without calling MPI_Wait ever"</a>
<li><strong>Previous message:</strong> <a href="26594.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>In reply to:</strong> <a href="26594.php">Ralph Castain: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26642.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
<li><strong>Reply:</strong> <a href="26642.php">Thomas Klimpel: "Re: [OMPI users] 1.8.4 behaves completely different from 1.6.5"</a>
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
