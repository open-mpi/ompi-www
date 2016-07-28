<?
$subject_val = "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 20 18:22:16 2011" -->
<!-- isoreceived="20110320222216" -->
<!-- sent="Mon, 21 Mar 2011 11:22:08 +1300" -->
<!-- isosent="20110320222208" -->
<!-- name="Kevin.Buckley_at_[hidden]" -->
<!-- email="Kevin.Buckley_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OpenMPI 1.2.x segfault as regular user" -->
<!-- id="cbb788e6246e27a00256a0b743c78e03.squirrel_at_mail.ecs.vuw.ac.nz" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4D8358BC.2040905_at_ias.edu" -->
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
<strong>From:</strong> <a href="mailto:Kevin.Buckley_at_[hidden]?Subject=Re:%20[OMPI%20users]%20OpenMPI%201.2.x%20segfault%20as%20regular%20user"><em>Kevin.Buckley_at_[hidden]</em></a><br>
<strong>Date:</strong> 2011-03-20 18:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15915.php">Tru Huynh: "[OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>In reply to:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; It's not hard to test whether or not SELinux is the problem. You can
</span><br>
<span class="quotelev1">&gt; turn SELinux off on the command-line with this command:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenforce 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Of course, you need to be root in order to do this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; After turning SELinux off, you can try reproducing the error. If it
</span><br>
<span class="quotelev1">&gt; still occurs, it's SELinux, if it doesn't the problem is elswhere. When
</span><br>
<span class="quotelev1">&gt; your done, you can reenable SELinux with
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; setenforce 1
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you're running your job across multiple nodes, you should disable
</span><br>
<span class="quotelev1">&gt; SELinux on all of them for testing.
</span><br>
<p>You are not actually disabling SELinux with setenforce 0, just
<br>
putting it into &quot;permissive&quot; mode: SELinux is still active.
<br>
<p>Running SELinux in its permissive mode, as opposed to disabling it
<br>
at boot time, sees SELinux making a log of things that would cause
<br>
it to dive in, were it running in &quot;enforcing&quot; mode.
<br>
<p>There's then a tool you can run over that log that will suggest
<br>
the ACL changes you need to make to fix the issue from an SELinux
<br>
perspective.
<br>
<p><pre>
-- 
Kevin M. Buckley                                  Room:  CO327
School of Engineering and                         Phone: +64 4 463 5971
 Computer Science
Victoria University of Wellington
New Zealand
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15917.php">Amos Leffler: "[OMPI users] Problems with openmpi-1.4.3"</a>
<li><strong>Previous message:</strong> <a href="15915.php">Tru Huynh: "[OMPI users] Open MPI 1.5.3/Intel XE make check failure (CentOS-5.5 x86_64)"</a>
<li><strong>In reply to:</strong> <a href="15912.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
<li><strong>Reply:</strong> <a href="15925.php">Prentice Bisbal: "Re: [OMPI users] OpenMPI 1.2.x segfault as regular user"</a>
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
