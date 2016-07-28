<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Aug 23 19:36:04 2005" -->
<!-- isoreceived="20050824003604" -->
<!-- sent="Tue, 23 Aug 2005 17:35:52 -0700 (PDT)" -->
<!-- isosent="20050824003552" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] MIPS64 question" -->
<!-- id="20050824003552.14517.qmail_at_web31507.mail.mud.yahoo.com" -->
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
<strong>From:</strong> Jonathan Day (<em>imipak_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-08-23 19:35:52
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<li><strong>Reply:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I notice that MIPS is not listed amongst the &quot;known&quot;
<br>
architectures in the README, and on trying to compile
<br>
OpenMPI on a Linux/MIPS64 platform it blew up in the
<br>
configuration code.
<br>
<p>Having said that, there does seem to be MIPS stuff in
<br>
those directories listing assembly code, but I do NOT
<br>
know if this includes MIPS64 support.
<br>
<p>The exact error message I'm getting is:
<br>
<p>configure: error: No atomic primitives available for
<br>
mips64-unknown-linux-gnu
<br>
<p>Other useful information:
<br>
<p>GCC -V shows I'm using 4.0.0
<br>
as -v shows I'm using GNU assembler version 2.15
<br>
ar -V shows I'm using GNU ar 2.15
<br>
<p>The full GNU toolchain is compiled for the correct
<br>
architecture and although other programs seem to
<br>
compile, some don't, which means that I can't rule out
<br>
a bug in the way the toolchain is working.
<br>
<p>Has anyone else had success with GCC 4.0.0 on a MIPS64
<br>
box?
<br>
<p><p>__________________________________________________
<br>
Do You Yahoo!?
<br>
Tired of spam?  Yahoo! Mail has the best spam protection around 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a> 
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<li><strong>Previous message:</strong> <a href="0117.php">Galen M. Shipman: "Re: [O-MPI users] how do you select which network/trasport to use at run-time?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
<li><strong>Reply:</strong> <a href="0119.php">Brian Barrett: "Re: [O-MPI users] MIPS64 question"</a>
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
