<?
$subject_val = "[OMPI users] Symbol not found: _evsignal_base";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 24 16:05:32 2011" -->
<!-- isoreceived="20110524200532" -->
<!-- sent="Tue, 24 May 2011 14:05:08 -0600" -->
<!-- isosent="20110524200508" -->
<!-- name="charles reid" -->
<!-- email="charlesreid1_at_[hidden]" -->
<!-- subject="[OMPI users] Symbol not found: _evsignal_base" -->
<!-- id="BANLkTikc5Lewcra6RSVcdZgwvbB2HG6Ecw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Symbol not found: _evsignal_base<br>
<strong>From:</strong> charles reid (<em>charlesreid1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-24 16:05:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16620.php">sai sudheesh: "[OMPI users] I added you as a friend on Quepasa.com"</a>
<li><strong>Previous message:</strong> <a href="16618.php">Faisal: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Reply:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi -
<br>
<p>I'm trying to compile a simple hello world program with mpicc,
<br>
<p>$ cat test.c
<br>
#include &lt;stdio.h&gt;
<br>
<p>main()
<br>
{
<br>
&nbsp;&nbsp;printf (&quot;Hello World!\n&quot;);
<br>
}
<br>
<p><p>but I'm seeing this issue:
<br>
<p>$ ~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
<br>
dyld: Symbol not found: _evsignal_base
<br>
&nbsp;&nbsp;Referenced from: /uufs/
<br>
chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /uufs/
<br>
chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
<br>
Trace/BPT trap
<br>
<p><p>I found this previous thread,
<br>
<a href="http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033">http://comments.gmane.org/gmane.comp.clustering.open-mpi.user/13033</a> , which
<br>
suggested adding the installation directory's lib/ to LD_LIBRARY_PATH would
<br>
fix things, but it did not:
<br>
<p>$ export
<br>
LD_LIBRARY_PATH=&quot;${HOME}/pkg/openmpi/1.4.3_bigmac/lib:${LD_LIBRARY_PATH}&quot;;
<br>
~/pkg/openmpi/1.4.3_bigmac/bin/mpicc test.c
<br>
dyld: Symbol not found: _evsignal_base
<br>
&nbsp;&nbsp;Referenced from: /uufs/
<br>
chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
<br>
&nbsp;&nbsp;Expected in: flat namespace
<br>
&nbsp;in /uufs/
<br>
chpc.utah.edu/common/home/u0552682/pkg/openmpi/1.4.3_bigmac/lib/libopen-pal.0.dylib
<br>
Trace/BPT trap
<br>
<p><p>Any suggestions on what I might be doing wrong?
<br>
<p><p>Charles
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16619/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16620.php">sai sudheesh: "[OMPI users] I added you as a friend on Quepasa.com"</a>
<li><strong>Previous message:</strong> <a href="16618.php">Faisal: "Re: [OMPI users] openmpi self checkpointing - error while running	example"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
<li><strong>Reply:</strong> <a href="16631.php">Jeff Squyres: "Re: [OMPI users] Symbol not found: _evsignal_base"</a>
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
