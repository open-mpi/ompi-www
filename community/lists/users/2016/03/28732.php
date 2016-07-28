<?
$subject_val = "Re: [OMPI users] locked memory and queue pairs";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 17 10:20:31 2016" -->
<!-- isoreceived="20160317142031" -->
<!-- sent="Thu, 17 Mar 2016 23:20:29 +0900" -->
<!-- isosent="20160317142029" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles.gouaillardet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] locked memory and queue pairs" -->
<!-- id="CAAkFZ5vA_7bfXWuOohfCF9if5kN6Datpt=QqyeFqgMc_32poSg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="87egb9i4e5.fsf_at_pc102091.liv.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] locked memory and queue pairs<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles.gouaillardet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-03-17 10:20:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28728.php">Dave Love: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
also, limits.conf is set when starting a ssh session.
<br>
it is not useful for services started at boot time, and
<br>
ulimit -l unlimited
<br>
should be added in the startup script
<br>
/etc/init.d/xxx
<br>
or
<br>
/etc/sysconfig/xxx
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On Thursday, March 17, 2016, Dave Love &lt;d.love_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Michael Di Domenico &lt;mdidomenico4_at_[hidden] &lt;javascript:;&gt;&gt; writes:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Wed, Mar 16, 2016 at 12:12 PM, Elken, Tom &lt;tom.elken_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;javascript:;&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi Mike,
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; In this file,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; $ cat /etc/security/limits.conf
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ...
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &lt; do you see at the end ... &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * hard memlock unlimited
</span><br>
<span class="quotelev3">&gt; &gt;&gt; * soft memlock unlimited
</span><br>
<span class="quotelev3">&gt; &gt;&gt; # -- All InfiniBand Settings End here --
</span><br>
<span class="quotelev3">&gt; &gt;&gt; ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Yes.  I double checked that it's set on all compute nodes in the
</span><br>
<span class="quotelev2">&gt; &gt; actual file and through the ulimit command
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is limits.conf actualy relevant to your job launch?  It's normally used
</span><br>
<span class="quotelev1">&gt; by pam_limits (on GNU/Linux) which won't necessarily be run.  [In the
</span><br>
<span class="quotelev1">&gt; case of SGE, you specify the resource limit as a parameter of the
</span><br>
<span class="quotelev1">&gt; execution daemon (execd), at least with &quot;builtin&quot; remote startup.]
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'd verify it by executing something like &quot;procenv -l&quot; under mpirun.
</span><br>
<span class="quotelev1">&gt; (procenv is packaged for the major GNU/Linux distributions.)
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] &lt;javascript:;&gt;
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/03/28728.php">http://www.open-mpi.org/community/lists/users/2016/03/28728.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28732/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28733.php">Bland, Wesley: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>Previous message:</strong> <a href="28731.php">Ralph Castain: "Re: [OMPI users] Fault tolerant feature in Open MPI"</a>
<li><strong>In reply to:</strong> <a href="28728.php">Dave Love: "Re: [OMPI users] locked memory and queue pairs"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="28716.php">Cabral, Matias A: "Re: [OMPI users] locked memory and queue pairs"</a>
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
