<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar 19 06:01:43 2007" -->
<!-- isoreceived="20070319100143" -->
<!-- sent="Mon, 19 Mar 2007 11:01:36 +0100" -->
<!-- isosent="20070319100136" -->
<!-- name="G&#246;tz Waschk" -->
<!-- email="goetz.waschk_at_[hidden]" -->
<!-- subject="[OMPI users] Build problem with the pgi compiler" -->
<!-- id="5711d990703190301q1766ebf8j85366d0ef2d426b7_at_mail.gmail.com" -->
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
<strong>From:</strong> G&#246;tz Waschk (<em>goetz.waschk_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-19 06:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2833.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>Previous message:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2839.php">Jeff Squyres: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Reply:</strong> <a href="2839.php">Jeff Squyres: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello everyone,
<br>
<p>I've stumbled upon the following problem trying to build openmpi 1.2
<br>
on RHEL4 with the Portland Group compiler  suite. The check for the
<br>
Fortran90 compiler fails if the compiler flags contain -g:
<br>
<p>configure: WARNING: *** Could not determine the f90 compiler flag to
<br>
indicate where modules reside
<br>
configure: error: *** Cannot continue
<br>
<p>config.log contains this:
<br>
<p>/tmp/pgf90Z2ohzWqopVcX.o(.debug_info+0x92): undefined reference to
<br>
`..Dm_ompi_mod_flag'
<br>
<p>This was the command executed by configure:
<br>
pgf90 -O2 -g conftest.f90 -Isubdir
<br>
<p>It will work if -g is not used or if the linking step is done separate
<br>
from the compilation of conftest.f90. The Portland Group support is
<br>
still trying to figure out if this is a bug in their compiler.
<br>
<p>Regards, G&#246;tz Waschk
<br>
<p><pre>
-- 
AL I:40: Do what thou wilt shall be the whole of the Law.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2833.php">Bala: "Re: [OMPI users] orted takes 100 percent cpu, how to avoid this??"</a>
<li><strong>Previous message:</strong> <a href="2831.php">David Burns: "Re: [OMPI users] remote execution problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2839.php">Jeff Squyres: "Re: [OMPI users] Build problem with the pgi compiler"</a>
<li><strong>Reply:</strong> <a href="2839.php">Jeff Squyres: "Re: [OMPI users] Build problem with the pgi compiler"</a>
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
