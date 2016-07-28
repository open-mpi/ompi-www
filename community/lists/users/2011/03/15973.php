<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 23 10:13:32 2011" -->
<!-- isoreceived="20110323141332" -->
<!-- sent="Wed, 23 Mar 2011 15:10:20 +0100" -->
<!-- isosent="20110323141020" -->
<!-- name="Youri LACAN-BARTLEY" -->
<!-- email="youri.lacan-bartley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.x segfault as regular user" -->
<!-- id="9113A52E1096EB41B1F88DD94C4369D5B67D8A_at_EXCHSRV.transvalor.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D8758DB.2020303_at_ias.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] OpenMPI 1.2.x segfault as regular user<br>
<strong>From:</strong> Youri LACAN-BARTLEY (<em>youri.lacan-bartley_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-23 10:10:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15972.php">Abdul Rahman Riza: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>In reply to:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>Thanks for your feedback and advice.
<br>
<p>SELinux is currently disabled at runtime on all nodes as well as on the head node.
<br>
So I don't believe this might be the issue here.
<br>
<p>I have indeed compiled Open MPI myself and haven't specified anything peculiar other than a --prefix and --enable-mpirun-prefix-by-default.
<br>
Have I overlooked something?
<br>
<p>The problem doesn't occur with Open MPI 1.4.
<br>
I've tried running simple jobs directly on the head node to eliminate any networking or IB wizardry and mpirun systematically segfaults as a non-root user.
<br>
<p>Here's one part of a strace call on mpirun that might be of some significance:
<br>
mmap(NULL, 4294967296, PROT_READ|PROT_WRITE, MAP_PRIVATE|MAP_ANONYMOUS, -1, 0) = -1 ENOMEM (Cannot allocate memory)
<br>
<p>For further information you can refer to the strace files attached to this email.
<br>
<p>Youri LACAN-BARTLEY
<br>
<p>-----Message d'origine-----
<br>
De&#160;: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] De la part de Prentice Bisbal
<br>
Envoy&#233;&#160;: lundi 21 mars 2011 14:56
<br>
&#192;&#160;: Open MPI Users
<br>
Objet&#160;: Re: [OMPI users] OpenMPI 1.2.x segfault as regular user
<br>
<p>On 03/20/2011 06:22 PM, Kevin.Buckley_at_[hidden] wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It's not hard to test whether or not SELinux is the problem. You can
</span><br>
<span class="quotelev2">&gt;&gt; turn SELinux off on the command-line with this command:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenforce 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Of course, you need to be root in order to do this.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; After turning SELinux off, you can try reproducing the error. If it
</span><br>
<span class="quotelev2">&gt;&gt; still occurs, it's SELinux, if it doesn't the problem is elswhere. When
</span><br>
<span class="quotelev2">&gt;&gt; your done, you can reenable SELinux with
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; setenforce 1
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If you're running your job across multiple nodes, you should disable
</span><br>
<span class="quotelev2">&gt;&gt; SELinux on all of them for testing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are not actually disabling SELinux with setenforce 0, just
</span><br>
<span class="quotelev1">&gt; putting it into &quot;permissive&quot; mode: SELinux is still active.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>That's correct. Thanks for catching my inaccurate choice of words.
<br>
<p><span class="quotelev1">&gt; Running SELinux in its permissive mode, as opposed to disabling it
</span><br>
<span class="quotelev1">&gt; at boot time, sees SELinux making a log of things that would cause
</span><br>
<span class="quotelev1">&gt; it to dive in, were it running in &quot;enforcing&quot; mode.
</span><br>
<p>I forgot about that. Checking those logs will make debugging even easier
<br>
for the original poster.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's then a tool you can run over that log that will suggest
</span><br>
<span class="quotelev1">&gt; the ACL changes you need to make to fix the issue from an SELinux
</span><br>
<span class="quotelev1">&gt; perspective.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><pre>
-- 
Prentice
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>

</pre>
<hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-15973/mpirun-strace.tar.gz">mpirun-strace.tar.gz</a>
</ul>
<!-- attachment="mpirun-strace.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15974.php">Gus Correa: "Re: [OMPI users] Is there an mca parameter equivalent to	-bind-to-core?"</a>
<li><strong>Previous message:</strong> <a href="15972.php">Abdul Rahman Riza: "Re: [OMPI users] Parallel Computation under WiFi for Beginners"</a>
<li><strong>In reply to:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
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
