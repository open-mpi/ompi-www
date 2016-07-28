<?
$subject_val = "[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  2 05:08:02 2014" -->
<!-- isoreceived="20140102100802" -->
<!-- sent="Thu, 2 Jan 2014 18:08:01 +0800" -->
<!-- isosent="20140102100801" -->
<!-- name="Hongyi Zhao" -->
<!-- email="hongyi.zhao_at_[hidden]" -->
<!-- subject="[OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred" -->
<!-- id="CAGP6POJyDG=dLPdCjh6ieS2rEPpxgTf5urqACqRRmTs2CQmp_w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred<br>
<strong>From:</strong> Hongyi Zhao (<em>hongyi.zhao_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-02 05:08:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23309.php">흆e Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Previous message:</strong> <a href="23307.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23309.php">흆e Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Reply:</strong> <a href="23309.php">흆e Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all,
<br>
<p>I compiled openmpi-1.6.5 with ifort-14.0.0, then I use the mpif90
<br>
wrapper of  openmpi to compile the siesta package - a DFT package,
<br>
obtain from here:<a href="http://departments.icmab.es/leem/siesta/">http://departments.icmab.es/leem/siesta/</a>  .
<br>
<p>After I successfully compile the   siesta package, then I use it to do
<br>
some compuations like this:
<br>
<p>$ mpirun -np 2 transiesta &lt; INPUT.fdf &gt; OUTPUT.fdf
<br>
<p>In this phase, I meet the followig error:
<br>
<p>****************
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line
<br>
Source
<br>
transiesta         00000000019A8A59  Unknown               Unknown  Unknown
<br>
transiesta         00000000019A73D0  Unknown               Unknown  Unknown
<br>
transiesta         00000000019578F2  Unknown               Unknown  Unknown
<br>
transiesta         000000000190A063  Unknown               Unknown  Unknown
<br>
transiesta         000000000190F9BB  Unknown               Unknown  Unknown
<br>
libpthread.so.0    00002AD0C3005030  Unknown               Unknown  Unknown
<br>
transiesta         00000000008109CD  Unknown               Unknown  Unknown
<br>
transiesta         000000000068607F  Unknown               Unknown  Unknown
<br>
transiesta         000000000069F134  Unknown               Unknown  Unknown
<br>
transiesta         00000000006D5971  Unknown               Unknown  Unknown
<br>
transiesta         00000000006D5A45  Unknown               Unknown  Unknown
<br>
transiesta         000000000047FE56  Unknown               Unknown  Unknown
<br>
libc.so.6          00002AD0C44BCEAD  Unknown               Unknown  Unknown
<br>
transiesta         000000000047FD29  Unknown               Unknown  Unknown
<br>
forrtl: severe (174): SIGSEGV, segmentation fault occurred
<br>
Image              PC                Routine            Line
<br>
Source
<br>
transiesta         00000000019A8A59  Unknown               Unknown  Unknown
<br>
transiesta         00000000019A73D0  Unknown               Unknown  Unknown
<br>
transiesta         00000000019578F2  Unknown               Unknown  Unknown
<br>
transiesta         000000000190A063  Unknown               Unknown  Unknown
<br>
transiesta         000000000190F9BB  Unknown               Unknown  Unknown
<br>
libpthread.so.0    00002B302BFB3030  Unknown               Unknown  Unknown
<br>
transiesta         00000000008109CD  Unknown               Unknown  Unknown
<br>
transiesta         000000000068607F  Unknown               Unknown  Unknown
<br>
transiesta         000000000069F134  Unknown               Unknown  Unknown
<br>
transiesta         00000000006D5971  Unknown               Unknown  Unknown
<br>
transiesta         00000000006D5A45  Unknown               Unknown  Unknown
<br>
transiesta         000000000047FE56  Unknown               Unknown  Unknown
<br>
libc.so.6          00002B302D46AEAD  Unknown               Unknown  Unknown
<br>
transiesta         000000000047FD29  Unknown               Unknown  Unknown
<br>
--------------------------------------------------------------------------
<br>
mpirun has exited due to process rank 0 with PID 12205 on
<br>
node debian-asus exiting improperly. There are two reasons this could occur:
<br>
<p>1. this process did not call &quot;init&quot; before exiting, but others in
<br>
the job did. This can cause a job to hang indefinitely while it waits
<br>
for all processes to call &quot;init&quot;. By rule, if one process calls &quot;init&quot;,
<br>
then ALL processes must call &quot;init&quot; prior to termination.
<br>
<p>2. this process called &quot;init&quot;, but exited without calling &quot;finalize&quot;.
<br>
By rule, all processes that call &quot;init&quot; MUST call &quot;finalize&quot; prior to
<br>
exiting or it will be considered an &quot;abnormal termination&quot;
<br>
<p>This may have caused other processes in the application to be
<br>
terminated by signals sent by mpirun (as reported here).
<br>
--------------------------------------------------------------------------
<br>
<p>****************
<br>
<p>I cann't figure out the reason for this issue,  any hints will be
<br>
highly appreciated.
<br>
<p>Regards
<br>
<pre>
-- 
Hongyi Zhao &lt;hongyi.zhao_at_[hidden]&gt;
Xinjiang Technical Institute of Physics and Chemistry
Chinese Academy of Sciences
GnuPG DSA: 0xD108493
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23309.php">흆e Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Previous message:</strong> <a href="23307.php">Barrett, Brian W: "Re: [OMPI users] [EXTERNAL] Re: Segmentation fault on OMPI 1.6.5 built with gcc 4.4.7 and PGI pgfortran 11.10"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23309.php">흆e Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
<li><strong>Reply:</strong> <a href="23309.php">흆e Sandgren: "Re: [OMPI users] forrtl: severe (174): SIGSEGV, segmentation fault occurred"</a>
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
