<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Mar 21 09:55:50 2011" -->
<!-- isoreceived="20110321135550" -->
<!-- sent="Mon, 21 Mar 2011 09:55:39 -0400" -->
<!-- isosent="20110321135539" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.x segfault as regular user" -->
<!-- id="4D8758DB.2020303_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="cbb788e6246e27a00256a0b743c78e03.squirrel_at_mail.ecs.vuw.ac.nz" -->
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
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-03-21 09:55:39
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15926.php">Peter Kjellström: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Previous message:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15973.php">Youri LACAN-BARTLEY: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15973.php">Youri LACAN-BARTLEY: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 03/20/2011 06:22 PM, Kevin.Buckley_at_[hidden] wrote:
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
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15926.php">Peter Kjellström: "Re: [OMPI users] bizarre failure with IMB/openib"</a>
<li><strong>Previous message:</strong> <a href="15924.php">Tim Prince: "Re: [OMPI users] intel compiler linking issue and issue of environment variable on remote node, with open mpi 1.4.3"</a>
<li><strong>In reply to:</strong> <a href="15916.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15973.php">Youri LACAN-BARTLEY: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15973.php">Youri LACAN-BARTLEY: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
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
