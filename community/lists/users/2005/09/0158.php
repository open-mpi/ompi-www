<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Sep 26 18:31:08 2005" -->
<!-- isoreceived="20050926233108" -->
<!-- sent="Mon, 26 Sep 2005 16:30:51 -0700 (PDT)" -->
<!-- isosent="20050926233051" -->
<!-- name="Jonathan Day" -->
<!-- email="imipak_at_[hidden]" -->
<!-- subject="[O-MPI users] Still working on MIPS64 port." -->
<!-- id="20050926233051.86034.qmail_at_web31502.mail.mud.yahoo.com" -->
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
<strong>Date:</strong> 2005-09-26 18:30:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Borenstein, Bernard S: "[O-MPI users] more information on my overflow problem"</a>
<li><strong>Previous message:</strong> <a href="0157.php">Borenstein, Bernard S: "[O-MPI users] problem running on a myrinet linux cluster"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'll get a patch to the list as soon as I have one
<br>
that works. In the meantime, here are a few of the
<br>
things I've turned up.
<br>
<p>1. The MIPS.asm file needs to load asm/asm.h on Linux
<br>
boxes, so the config script needs to grab the OS for
<br>
the MIPS box to identify what header to use.
<br>
<p>2. MIPS.asm, in the subroutine opal_atomic_cmpset_32,
<br>
there is a bne with the jump going to Lretry1. The L
<br>
needs to be dropped on GCC, and since the other jumps
<br>
don't have that, I'm guessing it'll work fine without
<br>
it on other compilers.
<br>
<p>3. GCC requires the assembler file to be compiled
<br>
EITHER with a .S extension, OR with the flag &quot;-x
<br>
assembler-with-cpp&quot; passed to GCC. Otherwise, it
<br>
doesn't expand any macros. I'd suggest having an extra
<br>
define set in the configure, which includes this flag
<br>
if it's a Linux MIPS box, and where the define is
<br>
appended to the compile flags ONLY in the opal/asm
<br>
Makefile. (You don't want to accidently identify
<br>
everything as assembly!)
<br>
<p>4. opal/class/opal_list.c is giving an error, saying
<br>
that &quot;retry&quot; and &quot;done&quot; are already defined. Still
<br>
looking into what is going on there.
<br>
<p>5. The ROMIO turns out not to be as bad as I'd thought
<br>
- it just needs to detect if it's MIPS in the
<br>
configure and then set the MIPS flag.
<br>
<p><p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
__________________________________ 
<br>
Yahoo! Mail - PC Magazine Editors' Choice 2005 
<br>
<a href="http://mail.yahoo.com">http://mail.yahoo.com</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0159.php">Borenstein, Bernard S: "[O-MPI users] more information on my overflow problem"</a>
<li><strong>Previous message:</strong> <a href="0157.php">Borenstein, Bernard S: "[O-MPI users] problem running on a myrinet linux cluster"</a>
<!-- nextthread="start" -->
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
