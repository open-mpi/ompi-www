<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu May 10 20:19:25 2007" -->
<!-- isoreceived="20070511001925" -->
<!-- sent="Fri, 11 May 2007 12:19:21 +1200" -->
<!-- isosent="20070511001921" -->
<!-- name="Code Master" -->
<!-- email="cpp.codemaster_at_[hidden]" -->
<!-- subject="[OMPI users] debugging my program in openmpi" -->
<!-- id="1626092b0705101719u4bc07235m18224fd6dbac20f9_at_mail.gmail.com" -->
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
<strong>From:</strong> Code Master (<em>cpp.codemaster_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-05-10 20:19:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3242.php">Tim Prins: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Previous message:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3242.php">Tim Prins: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Reply:</strong> <a href="3242.php">Tim Prins: "Re: [OMPI users] debugging my program in openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am a newbie in openmpi.  I have just compiled a program with -g -pg (an
<br>
mpi program with a listener thread, which all MPI calls except
<br>
initialization and MPI_Finalize are placed within)  and I run it.  However
<br>
it crashes and I can't find any core dump, even I set the core dump max size
<br>
to 100000 by
<br>
<p>ulimit -c 100000
<br>
<p>Signal:11 info.si_errno:0(Success) si_code:1(SEGV_MAPERR)
<br>
Failing at addr:(nil)
<br>
[0] func:raytrace [0x8185581]
<br>
[1] func:[0xffffe440]
<br>
[2] func:raytrace [0x8056736]
<br>
[3] func:/lib/tls/libpthread.so.0 [0x40063b63]
<br>
[4] func:/lib/tls/libc.so.6(__clone+0x5a) [0x4014618a]
<br>
*** End of error message ***
<br>
I tried to use gdb and I ran:
<br>
gdb mpirun
<br>
<p>run --hostfile ../hostfile n 16 raytrace -finputs/car.env
<br>
<p>when I type
<br>
<p>backtrace
<br>
<p><p>after it crashes, it just said &quot;no stack&quot;
<br>
<p>I really want to find out what lines in what function are responsible for
<br>
the crash.  What can I do to find out the culprit?
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3241/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3242.php">Tim Prins: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Previous message:</strong> <a href="3240.php">Jeff Squyres: "Re: [OMPI users] Newbie question. Please help."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3242.php">Tim Prins: "Re: [OMPI users] debugging my program in openmpi"</a>
<li><strong>Reply:</strong> <a href="3242.php">Tim Prins: "Re: [OMPI users] debugging my program in openmpi"</a>
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
