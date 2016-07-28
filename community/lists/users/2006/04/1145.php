<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 26 09:30:12 2006" -->
<!-- isoreceived="20060426133012" -->
<!-- sent="Wed, 26 Apr 2006 09:30:11 -0400" -->
<!-- isosent="20060426133011" -->
<!-- name="Brian Barrett" -->
<!-- email="brbarret_at_[hidden]" -->
<!-- subject="Re: [OMPI users] config error" -->
<!-- id="003B7EA8-3DA9-40D2-BA01-F392DA129F2C_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="444F1619_at_webmail.colostate.edu" -->
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
<strong>From:</strong> Brian Barrett (<em>brbarret_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-26 09:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1146.php">Donald Kerr: "[OMPI users] Developer Workshop : Wednesday and Thursday slides?"</a>
<li><strong>Previous message:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>In reply to:</strong> <a href="1125.php">sdamjad: "[OMPI users] config error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 24, 2006, at 12:32 PM, sdamjad wrote:
<br>
<p><span class="quotelev1">&gt; Brain
</span><br>
<span class="quotelev1">&gt; sorry i am enclosing my config.log file  tar file here
</span><br>
<span class="quotelev1">&gt; I can not reach to make step
</span><br>
<span class="quotelev1">&gt; Hence can not include it
</span><br>
It looks like you are trying to use the IBM XLF compiler for your  
<br>
Fortran compiler on OS X 10.4  There are some special things you have  
<br>
to do in order to make that combination work (I don't know the  
<br>
details - a web search should find them).  The problem is that the  
<br>
Fortran compiler can't produce executables:
<br>
<p>configure:20852: f77  conftestf.f conftest.o -o conftest
<br>
** fsize   === End of Compilation 1 ===
<br>
1501-510  Compilation successful for file conftestf.f.
<br>
/usr/bin/ld: can't open: lSystemStubs (No such file or directory,  
<br>
errno = 2)
<br>
configure:20859: $? = 1
<br>
<p>Once you get your Fortran compiler working, you should be able to  
<br>
configure and build Open MPI without any issues.  If you don't need  
<br>
the Fortran bindings for MPI, you can configure Open MPI with the -- 
<br>
disable-mpi-f77 option, which should avoid the whole mess.  But if  
<br>
you ever intend to use MPI with Fortran, you'll need to fix your  
<br>
Fortran compiler first.
<br>
<p><p>Hope this helps,
<br>
<p>Brian
<br>
<p><pre>
-- 
   Brian Barrett
   Open MPI developer
   <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1146.php">Donald Kerr: "[OMPI users] Developer Workshop : Wednesday and Thursday slides?"</a>
<li><strong>Previous message:</strong> <a href="1144.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] f90 module files compile a lot faster"</a>
<li><strong>In reply to:</strong> <a href="1125.php">sdamjad: "[OMPI users] config error"</a>
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
