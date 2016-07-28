<?
$subject_val = "Re: [OMPI users] ssh MPi and program tests";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  7 05:47:56 2009" -->
<!-- isoreceived="20090407094756" -->
<!-- sent="Tue, 07 Apr 2009 19:47:45 +1000" -->
<!-- isosent="20090407094745" -->
<!-- name="Terry Frankcombe" -->
<!-- email="terry_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ssh MPi and program tests" -->
<!-- id="1239097665.5790.26.camel_at_rscpc28.anu.edu.au" -->
<!-- inreplyto="b87c422a0904070239v1fee8ab1o116e6b479e06568f_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] ssh MPi and program tests<br>
<strong>From:</strong> Terry Frankcombe (<em>terry_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-04-07 05:47:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Tue, 2009-04-07 at 11:39 +0200, Francesco Pietra wrote:
<br>
<span class="quotelev1">&gt; Hi Gus:
</span><br>
<span class="quotelev1">&gt; I should have set clear at the beginning that on the Zyxel router
</span><br>
<span class="quotelev1">&gt; (connected to Internet by dynamic IP afforded by the provider)  there
</span><br>
<span class="quotelev1">&gt; are three computers. Their host names:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; deb32 (desktop debian i386)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; deb64 (multisocket debian amd 64 lenny)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; tya64 (multisocket debian amd 64 lenny)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The three are ssh passwordless interconnected from the same user
</span><br>
<span class="quotelev1">&gt; (myself). I never established connections as root user because I have
</span><br>
<span class="quotelev1">&gt; direct access to all tree computers. So, if I slogin as user,
</span><br>
<span class="quotelev1">&gt; passwordless connection is established. If I try to slogin as root
</span><br>
<span class="quotelev1">&gt; user, it says that the authenticity of the host to which I intended to
</span><br>
<span class="quotelev1">&gt; connect can't be established, RSA key fingerprint .. Connect?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Moreover, I appended to the pub keys know to deb64 those that deb64
</span><br>
<span class="quotelev1">&gt; had sent to either deb32 or tya64. Whereby, when i command.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With certain programs (conceived for batch run), the execution on
</span><br>
<span class="quotelev1">&gt; deb64 is launched from deb32.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh 192.168.#.## date (where the numbers stand for hostname)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I copied /examples to my deb64 home, chown to me, compiled as user and
</span><br>
<span class="quotelev1">&gt; run as user &quot;connectivity&quot;.  (I have not compild in the openmpi
</span><br>
<span class="quotelev1">&gt; directory as this is to root user, while ssh has been adjusted for me
</span><br>
<span class="quotelev1">&gt; as user.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running as user in my home
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/mpirun -deb64 -1 connectivity_c 2&gt;&amp;1 | tee n=1.connectivity.out
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it asked to add the host (himself) to the list on known hosts (on
</span><br>
<span class="quotelev1">&gt; repeating the command, that was no more asked). The unabridged output:
</span><br>
<p>The easiest setup is for the executable to be accessible on all nodes,
<br>
either copied or on a shared filesystem.  Is that the case here?
<br>
<p>(I haven't read the whole thread, so apologies if this has already been
<br>
covered.)
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>Previous message:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<li><strong>In reply to:</strong> <a href="8801.php">Francesco Pietra: "Re: [OMPI users] ssh MPi and program tests"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8803.php">jody: "Re: [OMPI users] ssh MPi and program tests"</a>
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
