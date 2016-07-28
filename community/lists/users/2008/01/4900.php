<?
$subject_val = "[OMPI users] mpirun, paths and xterm again";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 29 09:28:21 2008" -->
<!-- isoreceived="20080129142821" -->
<!-- sent="Tue, 29 Jan 2008 15:28:12 +0100" -->
<!-- isosent="20080129142812" -->
<!-- name="jody" -->
<!-- email="jody.xha_at_[hidden]" -->
<!-- subject="[OMPI users] mpirun, paths and xterm again" -->
<!-- id="9b0da5ce0801290628n4c57a500le9f05f92f5d436cc_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI users] mpirun, paths and xterm again<br>
<strong>From:</strong> jody (<em>jody.xha_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-01-29 09:28:12
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4899.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi
<br>
Sorry to bring this subject up again -
<br>
but i have a problem getting xterms
<br>
running for all of my processes (for debugging purposes).
<br>
There are actually two problem involved:
<br>
display, and paths.
<br>
<p><p>my ssh is set up so that X forwarding is allowed,
<br>
and, indeed,
<br>
&nbsp;&nbsp;ssh nano_00 xterm
<br>
opens an xterm from the remote machine nano_00.
<br>
<p>When i run my program normally, it works ok:
<br>
&nbsp;[jody]:/mnt/data1/neander:$mpirun -np 4 --hostfile testhosts ./MPITest
<br>
[aim-plankton.unizh.ch]I am #0/4 global
<br>
[aim-plankton.unizh.ch]I am #1/4 global
<br>
[aim-nano_00]I am #2/4 global
<br>
[aim-nano_00]I am #3/4 global
<br>
<p>But when i try to see it in xterms
<br>
[jody]:/mnt/data1/neander:$mpirun -np 4 --hostfile testhosts -x
<br>
DISPLAY xterm -hold -e  ./MPITest
<br>
xterm Xt error: Can't open display: :0.0
<br>
xterm Xt error: Can't open display: :0.0
<br>
<p>(same happens, if i set DISPLAY=plankton:0.0, or if i use plankton's
<br>
ip address;
<br>
and xhost is enabled for nano_00)
<br>
<p>the other two (the &quot;local&quot;) xterms open, but they display the message:
<br>
&nbsp;./MPITest: error while loading shared libraries: libmpi_cxx.so.0:
<br>
cannot open shared object file: No such file or directory
<br>
(This also happens if i only have local processes)
<br>
<p>So my first question is: what do i do to enable nano_00 to display an xterm
<br>
on plankton? Using normal ssh there seems to be no problem.
<br>
<p>Second question: why does the use of xterm &quot;hide&quot; the open-mpi libs?
<br>
Interestingly: if i use xterm with gdb to start my application, it works.
<br>
<p>Any ideas?
<br>
<p>Thank you
<br>
&nbsp;&nbsp;Jody
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4901.php">Thomas Ropars: "Re: [OMPI users] error with Vprotocol pessimist"</a>
<li><strong>Previous message:</strong> <a href="4899.php">Josh Hursey: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/02/4986.php">Tim Prins: "Re: [OMPI users] mpirun, paths and xterm again"</a>
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
