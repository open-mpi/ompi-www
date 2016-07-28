<?
$subject_val = "[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  9 13:49:05 2009" -->
<!-- isoreceived="20090909174905" -->
<!-- sent="Wed, 9 Sep 2009 17:49:00 +0000 (GMT)" -->
<!-- isosent="20090909174900" -->
<!-- name="Jean Potsam" -->
<!-- email="jeanpotsam_at_[hidden]" -->
<!-- subject="[OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)" -->
<!-- id="816078.11906.qm_at_web28308.mail.ukl.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)<br>
<strong>From:</strong> Jean Potsam (<em>jeanpotsam_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-09 13:49:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10602.php">Ashika Umanga Umagiliya: "[OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Previous message:</strong> <a href="10600.php">Richard Treumann: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Reply:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Reply:</strong> <a href="10643.php">Josh Hursey: "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
&#160; &#160; &#160; &#160; &#160; &#160; &#160;&#160; I have installed openmpi 1.3.2 in my home directory ( /home/jean/openmpisof/ ) and BLCR in /usr/local/blcr. I have added the following in the .bashrc file
<br>
<p>export PATH=/home/jean/openmpisof/bin/:$PATH
<br>
export LD_LIBRARY_PATH=/home/jean/openmpisof/lib/:$LD_LIBRARY_PATH
<br>
<p>export PATH=/usr/local/blcr/bin/:$PATH
<br>
export LD_LIBRARY_PATH=/usr/local/blcr/lib:$LD_LIBRARY_PATH
<br>
<p>I am running my application as follows:
<br>
<p>mpirun -am ft-enable-cr -mca btl ^openib -mca snapc_base_global_snapshot_dir /tmp mpitest
<br>
<p>But I get the following error when i try to checkpoint the application. 
<br>
<p>###################################### &#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160; 
<br>
[sun06:20513] *** Process received signal ***
<br>
[sun06:20513] Signal: Segmentation fault (11)
<br>
[sun06:20513] Signal code: Address not mapped (1)
<br>
[sun06:20513] Failing at address: 0x4
<br>
[sun06:20513] [ 0] [0xb7fab40c]
<br>
[sun06:20513] [ 1] /lib/libc.so.6(cfree+0x3b) [0xb79e468b]
<br>
[sun06:20513] [ 2] /usr/local/blcr/lib/libcr.so.0(cri_info_free+0x2a) [0xb7b1725a]
<br>
[sun06:20513] [ 3] /usr/local/blcr/lib/libcr.so.0 [0xb7b18c72]
<br>
[sun06:20513] [ 4] /lib/libc.so.6(__libc_fork+0x186) [0xb7a0d266]
<br>
[sun06:20513] [ 5] /lib/libpthread.so.0(fork+0x14) [0xb7ac4b24]
<br>
[sun06:20513] [ 6] /home/jean/openmpisof/lib/libopen-pal.so.0 [0xb7bc2a01]
<br>
[sun06:20513] [ 7] /home/jean/openmpisof/lib/libopen-pal.so.0(opal_crs_blcr_checkpoint+0x187) [0xb7bc231b]
<br>
[sun06:20513] [ 8] /home/jean/openmpisof/lib/libopen-pal.so.0(opal_cr_inc_core+0xc3) [0xb7b8eb1d]
<br>
[sun06:20513] [ 9] /home/jean/openmpisof/lib/libopen-rte.so.0 [0xb7cab40f]
<br>
[sun06:20513] [10] /home/jean/openmpisof/lib/libopen-pal.so.0(opal_cr_test_if_checkpoint_ready+0x129) [0xb7b8ea2a]
<br>
[sun06:20513] [11] /home/jean/openmpisof/lib/libopen-pal.so.0 [0xb7b8f0f8]
<br>
[sun06:20513] [12] /lib/libpthread.so.0 [0xb7abbf3b]
<br>
[sun06:20513] [13] /lib/libc.so.6(clone+0x5e) [0xb7a42bee]
<br>
[sun06:20513] *** End of error message ***
<br>
#######################################
<br>
<p>Any help will be very appreciated.
<br>
<p>Regards,
<br>
<p>Jean
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10601/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10602.php">Ashika Umanga Umagiliya: "[OMPI users] undefined symbol error when built as a shared library"</a>
<li><strong>Previous message:</strong> <a href="10600.php">Richard Treumann: "Re: [OMPI users] Messages getting lost during transmission (?)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Reply:</strong> <a href="10607.php">Jason D. Gans: "[OMPI users] Disable use of Torque at run-time"</a>
<li><strong>Reply:</strong> <a href="10643.php">Josh Hursey: "Re: [OMPI users] Signal: Segmentation fault (11) Signal code: Address not mapped (1)"</a>
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
