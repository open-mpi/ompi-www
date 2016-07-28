<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Aug 13 17:03:25 2007" -->
<!-- isoreceived="20070813210325" -->
<!-- sent="Mon, 13 Aug 2007 16:03:34 -0500" -->
<!-- isosent="20070813210334" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="[OMPI users] segmentation faults" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1DABD65_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-08-13 17:03:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="3842.php">Code Master: "[OMPI users] source code of MPI Othello (Draught) engines on the internet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<li><strong>Reply:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I tried to run a code that I have running for a while now this morning,
<br>
but for some reason it is causing segmentation faults.  I can't really
<br>
think of anything that I have done recently that would be causing these
<br>
errors.  Does anyone have any idea?
<br>
<p>I get this running it on more than one processor......
<br>
[sam_at_prodnode1 all]$ mpirun -np 2 --prefix
<br>
/usr/local/profiles/gcc-openmpi/ /home/sam/code/fdtd/fdtd_0.3/fdtd -t
<br>
/home/sam/code/fdtd/fdtd_0.3/test_files/tissue.txt -r
<br>
/home/sam/code/fdtd/fdtd_0.3/test_files/tester_x002y002z004.raw -v -f
<br>
3000 --pw 90,0,1,0 -l test_log.out -a 1
<br>
[prodnode1:04400] *** Process received signal ***
<br>
[prodnode1:04400] Signal: Segmentation fault (11)
<br>
[prodnode1:04400] Signal code: Invalid permissions (2)
<br>
[prodnode1:04400] Failing at address: 0x2aaaab000048
<br>
[prodnode1:04399] *** Process received signal ***
<br>
[prodnode1:04399] Signal: Segmentation fault (11)
<br>
[prodnode1:04399] Signal code: Invalid permissions (2)
<br>
[prodnode1:04399] Failing at address: 0x2aaaab0a0a48
<br>
[prodnode1:04400] [ 0] /lib64/libpthread.so.0 [0x3aa840dd40]
<br>
[prodnode1:04400] [ 1]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(_int_malloc+0x2a5)
<br>
[0x2aaaaafda345]
<br>
[prodnode1:04400] [ 2]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(calloc+0xaa)
<br>
[0x2aaaaafdbd8a]
<br>
[prodnode1:04400] [ 3]
<br>
/home/sam/code/fdtd/fdtd_0.3/fdtd(parseTissues+0x23) [0x40c9d3]
<br>
[prodnode1:04400] [ 4]
<br>
/home/sam/code/fdtd/fdtd_0.3/fdtd(parseArgs+0x489) [0x404b09]
<br>
[prodnode1:04400] [ 5] /home/sam/code/fdtd/fdtd_0.3/fdtd(main+0x41)
<br>
[0x404eb1]
<br>
[prodnode1:04400] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x3aa781d8a4]
<br>
[prodnode1:04400] [ 7] /home/sam/code/fdtd/fdtd_0.3/fdtd [0x4034b9]
<br>
[prodnode1:04400] *** End of error message ***
<br>
[prodnode1:04399] [ 0] /lib64/libpthread.so.0 [0x3aa840dd40]
<br>
[prodnode1:04399] [ 1]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(_int_malloc+0x2a5)
<br>
[0x2aaaaafda345]
<br>
[prodnode1:04399] [ 2]
<br>
/usr/local/profiles/gcc-openmpi/lib/libopen-pal.so.0(calloc+0xaa)
<br>
[0x2aaaaafdbd8a]
<br>
[prodnode1:04399] [ 3]
<br>
/home/sam/code/fdtd/fdtd_0.3/fdtd(parseTissues+0x23) [0x40c9d3]
<br>
[prodnode1:04399] [ 4]
<br>
/home/sam/code/fdtd/fdtd_0.3/fdtd(parseArgs+0x489) [0x404b09]
<br>
[prodnode1:04399] [ 5] /home/sam/code/fdtd/fdtd_0.3/fdtd(main+0x41)
<br>
[0x404eb1]
<br>
[prodnode1:04399] [ 6] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x3aa781d8a4]
<br>
[prodnode1:04399] [ 7] /home/sam/code/fdtd/fdtd_0.3/fdtd [0x4034b9]
<br>
[prodnode1:04399] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 4399 on node
<br>
prodnode1.brooks.af.mil exited on signal 11 (Segmentation fault). 
<br>
1 additional process aborted (not shown)
<br>
<p>--Or I get this if I run it on just one processor.
<br>
[sam_at_prodnode1 all]$ ./script2.sh [prodnode1:04405] *** Process received
<br>
signal ***
<br>
[prodnode1:04405] Signal: Segmentation fault (11)
<br>
[prodnode1:04405] Signal code: Address not mapped (1)
<br>
[prodnode1:04405] Failing at address: 0x18
<br>
[prodnode1:04405] [ 0] /lib64/libpthread.so.0 [0x3aa840dd40]
<br>
[prodnode1:04405] [ 1] /home/sam/code/fdtd/fdtd_0.3/fdtd(calcMass+0xac)
<br>
[0x40443c]
<br>
[prodnode1:04405] [ 2]
<br>
/home/sam/code/fdtd/fdtd_0.3/fdtd(parseArgs+0x5a1) [0x404c21]
<br>
[prodnode1:04405] [ 3] /home/sam/code/fdtd/fdtd_0.3/fdtd(main+0x41)
<br>
[0x404eb1]
<br>
[prodnode1:04405] [ 4] /lib64/libc.so.6(__libc_start_main+0xf4)
<br>
[0x3aa781d8a4]
<br>
[prodnode1:04405] [ 5] /home/sam/code/fdtd/fdtd_0.3/fdtd [0x4034b9]
<br>
[prodnode1:04405] *** End of error message ***
<br>
mpirun noticed that job rank 0 with PID 4405 on node
<br>
prodnode1.brooks.af.mil exited on signal 11 (Segmentation fault). 
<br>
[sam_at_prodnode1 all]$ 
<br>
<p><p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<li><strong>Previous message:</strong> <a href="3842.php">Code Master: "[OMPI users] source code of MPI Othello (Draught) engines on the internet"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
<li><strong>Reply:</strong> <a href="3844.php">Jeff Squyres: "Re: [OMPI users] segmentation faults"</a>
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
