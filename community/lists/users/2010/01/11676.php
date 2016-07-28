<?
$subject_val = "[OMPI users] openib btl slows down application";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan  4 04:27:24 2010" -->
<!-- isoreceived="20100104092724" -->
<!-- sent="Mon, 4 Jan 2010 10:27:19 +0100" -->
<!-- isosent="20100104092719" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] openib btl slows down application" -->
<!-- id="5711d991001040127h74cc166u6bf8f1b80225198c_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
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
<strong>Subject:</strong> [OMPI users] openib btl slows down application<br>
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-04 04:27:19
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11677.php">Andreas Knüpfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Reply:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Reply:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi everyone,
<br>
<p>I'm seeing a very strange effect with the openib btl. It seems to slow
<br>
down my application even if not used at all. For my test, I am running
<br>
a simple application with 8 processes on a single node, so openib
<br>
should not be used at all. Still, the result with the btl enabled is
<br>
much worse:
<br>
<p>% /usr/lib64/openmpi/1.3.2-gcc/bin/mpirun -np 8 --mca btl
<br>
self,sm,openib ./a.out
<br>
11 tests with 2 x 2 x 2 processes: L0 = 32, L1xL2 = 256 DP spinors
<br>
Overlap over 8 processes: 271769.0 usec
<br>
Overlap over 8 processes: 298237.0 usec
<br>
Overlap over 8 processes: 261648.0 usec
<br>
Overlap over 8 processes: 369170.0 usec
<br>
Overlap over 8 processes: 383065.0 usec
<br>
Overlap over 8 processes: 280675.0 usec
<br>
Overlap over 8 processes: 270912.0 usec
<br>
Overlap over 8 processes: 198789.0 usec
<br>
Overlap over 8 processes: 339857.0 usec
<br>
Overlap over 8 processes: 192087.0 usec
<br>
Overlap over 8 processes: 209025.0 usec
<br>
Average of 10 measurements (skipped first) on 8 processes: 280.3 msec
<br>
<p>% /usr/lib64/openmpi/1.3.2-gcc/bin/mpirun -np 8 --mca btl self,sm ./a.out
<br>
11 tests with 2 x 2 x 2 processes: L0 = 32, L1xL2 = 256 DP spinors
<br>
Overlap over 8 processes: 7445.0 usec
<br>
Overlap over 8 processes: 7355.0 usec
<br>
Overlap over 8 processes: 7311.0 usec
<br>
Overlap over 8 processes: 7473.0 usec
<br>
Overlap over 8 processes: 7409.0 usec
<br>
Overlap over 8 processes: 7449.0 usec
<br>
Overlap over 8 processes: 7261.0 usec
<br>
Overlap over 8 processes: 7451.0 usec
<br>
Overlap over 8 processes: 7430.0 usec
<br>
Overlap over 8 processes: 7320.0 usec
<br>
Overlap over 8 processes: 7384.0 usec
<br>
Average of 10 measurements (skipped first) on 8 processes: 7384.3 usec
<br>
<p>This is the default openmpi as shipped with SL5.4 (based on RHEL5.4).
<br>
I have also tested openmpi 1.4, same result. The other mpi shipped by
<br>
Red Hat (mvapich2) does not show this problem. Any idea?
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.

</pre>
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-11676/tst-sendrecv-replace.c">tst-sendrecv-replace.c</a>
</ul>
<!-- attachment="tst-sendrecv-replace.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11677.php">Andreas Knüpfer: "Re: [OMPI users] VampirTrace: time not increasing"</a>
<li><strong>Previous message:</strong> <a href="11675.php">Eugene Loh: "Re: [OMPI users] Dual quad core Opteron hangs on Bcast."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Reply:</strong> <a href="11683.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
<li><strong>Reply:</strong> <a href="11685.php">Eugene Loh: "Re: [OMPI users] openib btl slows down application"</a>
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
