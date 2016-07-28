<?
$subject_val = "[OMPI users] OpenMPI Segmentation fault (11)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Jul 25 22:08:12 2010" -->
<!-- isoreceived="20100726020812" -->
<!-- sent="Sun, 25 Jul 2010 20:08:05 -0600" -->
<!-- isosent="20100726020805" -->
<!-- name="Jack Bryan" -->
<!-- email="dtustudy68_at_[hidden]" -->
<!-- subject="[OMPI users] OpenMPI Segmentation fault (11)" -->
<!-- id="SNT134-w33FAA211B54B15BC132BF6CBA60_at_phx.gbl" -->
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
<strong>Subject:</strong> [OMPI users] OpenMPI Segmentation fault (11)<br>
<strong>From:</strong> Jack Bryan (<em>dtustudy68_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-07-25 22:08:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13773.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13782.php">David Zhang: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear All,
<br>
I run a 6 parallel processes on OpenMPI. 
<br>
When the run-time of the program is short, it works well.
<br>
But, if the run-time is long, I got errors: 
<br>
[n124:45521] *** Process received signal ***[n124:45521] Signal: Segmentation fault (11)[n124:45521] Signal code: Address not mapped (1)[n124:45521] Failing at address: 0x44[n124:45521] [ 0] /lib64/libpthread.so.0 [0x3c50e0e4c0][n124:45521] [ 1] /lib64/libc.so.6(strlen+0x10) [0x3c50278d60][n124:45521] [ 2] /lib64/libc.so.6(_IO_vfprintf+0x4479) [0x3c50246b19][n124:45521] [ 3] /lib64/libc.so.6(_IO_printf+0x9a) [0x3c5024d3aa][n124:45521] [ 4] /home/path/exec [0x40ec9a][n124:45521] [ 5] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3c5021d974][n124:45521] [ 6] /home/path/exec [0x401139][n124:45521] *** End of error message ***
<br>
It seems that there may be some problems about memory management. 
<br>
But, I cannot find the reason. 
<br>
My program needs to write results to some files. 
<br>
If I open the files too many without closing them, I may get the above errors. 
<br>
But, I have removed the writing files from my program. 
<br>
The problem appears again when the program runs longer time. 
<br>
Any help is appreciated. 
<br>
Jack
<br>
July 25  2010
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
_________________________________________________________________
<br>
Hotmail is redefining busy with tools for the New Busy. Get more from your inbox.
<br>
<a href="http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_2">http://www.windowslive.com/campaign/thenewbusy?ocid=PID28326::T:WLMTAGL:ON:WL:en-US:WM_HMP:042010_2</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13774/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13775.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] mpiexec hangs - new install"</a>
<li><strong>Previous message:</strong> <a href="13773.php">James: "Re: [OMPI users] mpiexec hangs - new install"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13777.php">jody: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13782.php">David Zhang: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
<li><strong>Reply:</strong> <a href="13783.php">Jeff Squyres: "Re: [OMPI users] OpenMPI Segmentation fault (11)"</a>
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
