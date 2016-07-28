<?
$subject_val = "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun 28 15:54:10 2013" -->
<!-- isoreceived="20130628195410" -->
<!-- sent="Fri, 28 Jun 2013 19:54:04 +0000" -->
<!-- isosent="20130628195404" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1" -->
<!-- id="EF66BBEB19BADC41AC8CCF5F684F07FC4F6C5273_at_xmb-rcd-x01.cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57odJb034csPmy+7_2WbPiYqy0gM6io1TwsxC10y5=xiBQw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-06-28 15:54:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22235.php">Alan Wild: "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>Previous message:</strong> <a href="22233.php">marco atzeri: "Re: [OMPI users] problem compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22239.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22239.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph and I talked about this issue this afternoon.  We're still struggling to understand the details of your configuration, in part because this thread was hijacked twice with issues unrelated to this 127.0.1.1 issue.  Here's what we think we know (I'm using the name &quot;foo&quot; instead of your actual hostname because it's easier to type):
<br>
<p>1. When you run &quot;hostname&quot;, you get foo.local back
<br>
<p>2. In your /etc/hosts file, foo.local is listed on two lines:
<br>
&nbsp;&nbsp;&nbsp;127.0.1.1
<br>
&nbsp;&nbsp;&nbsp;10.1.255.201
<br>
<p>3. When you login to the &quot;foo&quot; server and execute mpirun with a hostfile that contains &quot;foo&quot;, Open MPI incorrectly thinks that the local machine is not foo, and therefore tries to ssh to it (and things go downhill from there).
<br>
<p>4. When you login to the &quot;foo&quot; server and execute mpirun with a hostfile that contains &quot;foo.local&quot; (you said &quot;FQDN&quot;, but never said exactly what you meant by that -- I'm assuming &quot;foo.local&quot;, not &quot;foo.yourdomain.com&quot;), then Open MPI behaves properly.
<br>
<p>Is that all correct?
<br>
<p>We have some followup questions for you:
<br>
<p>1. What happens when you try to resolve &quot;foo&quot;? (e.g., via the &quot;dig&quot; program -- &quot;dig foo&quot;)
<br>
2. What happens when you try to resolve &quot;foo.local&quot;? (e.g., &quot;dig foo.local&quot;)
<br>
3. What happens when you try to resolve &quot;foo.yourdomain.com&quot;? (e.g., &quot;dig foo.yourdomain.com&quot;)
<br>
4. Please apply the attached patch to your Open MPI 1.6.5 build (please note that it adds diagnostic output; do *not* put this patch into production) and:
<br>
&nbsp;&nbsp;&nbsp;4a. Run with one of your &quot;bad&quot; cases and send us the output
<br>
&nbsp;&nbsp;&nbsp;4b. Run with one of your &quot;good&quot; cases and send us the output
<br>
<p><p><p><p>On Jun 26, 2013, at 7:38 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; The root cause of the problem is that you are assigning your host name to the loopback device. This is rather unusual, but not forbidden. Normally, people would name that interface something like &quot;localhost&quot; since it cannot be used to communicate off-node.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doing it the way you have could cause problems for you as programs that do a lookup to communicate will get the loopback address when they might have expected something else. Still, we should handle this case.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'll see what we can do
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Wed, Jun 26, 2013 at 2:26 AM, Riccardo Murri &lt;riccardo.murri_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 26 June 2013 03:11, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; I've been reviewing the code, and I think I'm getting a handle on
</span><br>
<span class="quotelev2">&gt; &gt; the issue.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Just to be clear - your hostname resolves to the 127 address? And you are on
</span><br>
<span class="quotelev2">&gt; &gt; a Linux (not one of the BSD flavors out there)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yes (but resolves to 127.0.1.1 -- not the usual 127.0.0.1), and yes
</span><br>
<span class="quotelev1">&gt; (Rocks 5.3 ~= CentOS 5.3).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; If the answer to both is &quot;yes&quot;, then the problem is that we ignore loopback
</span><br>
<span class="quotelev2">&gt; &gt; devices if anything else is present. When we check to see if the hostname we
</span><br>
<span class="quotelev2">&gt; &gt; were given is the local node, we resolve the name to the address and then
</span><br>
<span class="quotelev2">&gt; &gt; check our list of interfaces. The loopback device is ignored and therefore
</span><br>
<span class="quotelev2">&gt; &gt; not on the list. So if you resolve to the 127 address, we will decide this
</span><br>
<span class="quotelev2">&gt; &gt; is a different node than the one we are on.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can modify that logic, but want to ensure this accurately captures the
</span><br>
<span class="quotelev2">&gt; &gt; problem. I'll also have to discuss the change with the other developers to
</span><br>
<span class="quotelev2">&gt; &gt; ensure we don't shoot ourselves in the foot if we make it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ok, thanks -- I'll keep an eye on your replies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Riccardo
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
--
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22234/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22234/islocal-debug.patch">islocal-debug.patch</a>
</ul>
<!-- attachment="islocal-debug.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22235.php">Alan Wild: "[OMPI users] Fixing Intel Compiler and OpenMPI 1.6.X (or any version)"</a>
<li><strong>Previous message:</strong> <a href="22233.php">marco atzeri: "Re: [OMPI users] problem compiling openmpi"</a>
<li><strong>In reply to:</strong> <a href="22218.php">Ralph Castain: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22239.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/07/22239.php">Riccardo Murri: "Re: [OMPI users] openmpi 1.6.3 fails to identify local host if its IP is 127.0.1.1"</a>
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
