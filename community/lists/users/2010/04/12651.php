<?
$subject_val = "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr 16 06:28:17 2010" -->
<!-- isoreceived="20100416102817" -->
<!-- sent="Fri, 16 Apr 2010 06:28:11 -0400" -->
<!-- isosent="20100416102811" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5" -->
<!-- id="D8C3B345-360F-4578-870A-C91B3E64DC49_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="g2ta5d7282e1004151909x51f718b7y2d7b15dd7807a94f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-16 06:28:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12652.php">E.T.A.vanderWeide_at_[hidden]: "[OMPI users] Weird behavior of the MPI-IO routines"</a>
<li><strong>Previous message:</strong> <a href="12650.php">Jeff Squyres: "Re: [OMPI users] mpi programs"</a>
<li><strong>In reply to:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2010, at 10:09 PM, Baowei Liu wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot for your reply, Jeff!  I think I figure out why I got this trouble but am still looking for a way to work around it. The Mac I have has a 64-bit processor but its kernel is 32-bit. When I installed gnu-gcc, it identified the architecture as x86_64--I cannot install it if I force it to be i386. But the OMPI treat the arch as i386. If I try to force it to be x86_64, I got the problem I mentioned before....
</span><br>
<p>I'm not sure I understand the issue -- are you saying that gcc can't create executables?  I.e., does this not work:
<br>
<p>-----
<br>
% cat &gt; hello.c &lt;&lt;EOF
<br>
#include &lt;stdio.h&gt;
<br>
int main(int argc, char* argv[]) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;Hello world\n&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
EOF
<br>
% gcc hello.c -o hello
<br>
% ./hello
<br>
Hello world
<br>
%
<br>
-----
<br>
<p>If that works, then you should just be able to do a default configure/make of Open MPI.  If it doesn't work -- e.g., if the &quot;hello&quot; executable that is produced is not runnable on your machine, then you probably need to supply some additional flags to gcc.  Once you figure out what those flags are, pass the same flags to Open MPI's configure.
<br>
<p>I'd be pretty surprised if the default gcc build doesn't work for you (e.g., the &quot;hello world&quot; example, above), though.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12652.php">E.T.A.vanderWeide_at_[hidden]: "[OMPI users] Weird behavior of the MPI-IO routines"</a>
<li><strong>Previous message:</strong> <a href="12650.php">Jeff Squyres: "Re: [OMPI users] mpi programs"</a>
<li><strong>In reply to:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Reply:</strong> <a href="12655.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Macwithgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
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
