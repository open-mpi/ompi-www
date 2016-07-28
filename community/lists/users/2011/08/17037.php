<?
$subject_val = "[OMPI users] CMAQ crashes with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  9 16:49:45 2011" -->
<!-- isoreceived="20110809204945" -->
<!-- sent="Tue, 9 Aug 2011 16:49:41 -0400" -->
<!-- isosent="20110809204941" -->
<!-- name="Matthew Russell" -->
<!-- email="mrussel2_at_[hidden]" -->
<!-- subject="[OMPI users] CMAQ crashes with OpenMPI" -->
<!-- id="CAFmqpWoow9ZUFTu2CMYyobsN749mPGaPyTuF7-h3H=38+AE8xg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] CMAQ crashes with OpenMPI<br>
<strong>From:</strong> Matthew Russell (<em>mrussel2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-08-09 16:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17036.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I'm trying to run CMAQ - an air quality model developed by the US EPA - on a
<br>
Mac (Lion) using OpenMPI (1.5.3) installed with MacPorts.
<br>
<p>I am able to run CMAQ in parallel, and am able to run small programs that
<br>
use OpenMPI.
<br>
<p>I set the OpenMPI environment variables to use pgf90/pgcc (10.9) as my
<br>
compiler.  Using PGI because some of the code I need to build is fortran 77
<br>
( *sigh* ), and for some other reasons.
<br>
<p>The error I get is:
<br>
<p>/opt/local/lib/openmpi/bin/mpirun -v -machinefile
<br>
/Users/matt/cmaq/darwin11/scripts/cctm/machines8 -np 2
<br>
/Users/matt/cmaq/darwin11/scripts/cctm/CCTM_e1a_Darwin11_x86_64pg
<br>
[pontus:72547] *** Process received signal ***
<br>
[pontus:72547] Signal: Segmentation fault: 11 (11)
<br>
[pontus:72547] Signal code: Address not mapped (1)
<br>
[pontus:72547] Failing at address: 0x0
<br>
[pontus:72547] [ 0] 2   libsystem_c.dylib
<br>
0x00007fff91065cfa _sigtramp + 26
<br>
[pontus:72547] [ 1] 3   ???
<br>
0x00007fff5fbe58ab 0x0 + 140734799698091
<br>
[pontus:72547] [ 2] 4   CCTM_e1a_Darwin11_x86_64pg
<br>
&nbsp;0x000000010003c89b distr_env_ + 971
<br>
[pontus:72547] [ 3] 5   CCTM_e1a_Darwin11_x86_64pg
<br>
&nbsp;0x000000010003cbe5 par_init_ + 565
<br>
[pontus:72547] [ 4] 6   CCTM_e1a_Darwin11_x86_64pg
<br>
&nbsp;0x0000000100032e1b MAIN_ + 219
<br>
[pontus:72547] [ 5] 7   CCTM_e1a_Darwin11_x86_64pg
<br>
&nbsp;0x00000001000016f6 main + 70
<br>
[pontus:72547] [ 6] 8   CCTM_e1a_Darwin11_x86_64pg
<br>
&nbsp;0x000000010000163a _start + 248
<br>
[pontus:72547] [ 7] 9   CCTM_e1a_Darwin11_x86_64pg
<br>
&nbsp;0x0000000100001541 start + 33
<br>
[pontus:72547] [ 8] 10  ???
<br>
0x0000000000000001 0x0 + 1
<br>
[pontus:72547] *** End of error message ***
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 1 with PID 72547 on node
<br>
pontus.cee.carleton.ca exited on signal 11 (Segmentation fault: 11).
<br>
--------------------------------------------------------------------------
<br>
<p>I don't expect anyone to know the solution from this brief error message,
<br>
however I was wondering if anyone has insight on how I might debug this?  I
<br>
am too new to both OpenMPI and CMAQ to be served that well from this
<br>
traceback.
<br>
<p>I'm told by others in my research group that CMAQ with OpenMPI on Linux
<br>
works fine, and that the error I'm getting is very similar to the error
<br>
others got when trying this on a Mac (Snow Leopard) with ifort.. before they
<br>
gave up...
<br>
<p>OpenMPI was configured with:
<br>
configure.args  --sysconfdir=${prefix}/etc/${name} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--includedir=${prefix}/include/${name} \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--bindir=${prefix}/lib/${name}/bin \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--mandir=${prefix}/share/man \
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--with-memory-manager=none
<br>
<p># enable build on Lion
<br>
if {$os.major} &gt;= 11} {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;configure.compiler       gcc-4.2
<br>
}
<br>
<p>The --with-memory-manager is there because I saw it fix potentially similar
<br>
problems in other postings to this Mailing list.  It didn't make a
<br>
difference though.
<br>
<p>Thanks!
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17037/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="17036.php">CB: "Re: [OMPI users] scaling issue beyond 1024 processes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="17038.php">Doug Reeder: "Re: [OMPI users] CMAQ crashes with OpenMPI"</a>
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
