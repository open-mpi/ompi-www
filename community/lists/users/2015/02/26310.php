<?
$subject_val = "Re: [OMPI users] Max Registerable Memory Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Feb  9 17:01:37 2015" -->
<!-- isoreceived="20150209220137" -->
<!-- sent="Mon, 9 Feb 2015 17:01:36 -0500" -->
<!-- isosent="20150209220136" -->
<!-- name="Saliya Ekanayake" -->
<!-- email="esaliya_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Max Registerable Memory Warning" -->
<!-- id="CA+ssbKX6B2rMKo-+1FsxMf2knAmjTO+NuhGhWbUBZo4kOQvh_g_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CABB+w0Rxa8ot3z5ytvbBZEQf+rmUHpmHvDYJ8uU4N6SFsoW7Og_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Max Registerable Memory Warning<br>
<strong>From:</strong> Saliya Ekanayake (<em>esaliya_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-09 17:01:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>In reply to:</strong> <a href="26308.php">Deva: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This is what I got from our sys admins,
<br>
<p>Installed Packages
<br>
Name       : openib
<br>
Arch       : noarch
<br>
Version    : 1.5.4.1
<br>
Release    : 4.el5
<br>
Size       : 0.0
<br>
Repo       : installed
<br>
Summary    : OpenIB Infiniband Driver Stack
<br>
URL        : <a href="http://www.openfabrics.org/">http://www.openfabrics.org/</a>
<br>
License    : GPL/BSD
<br>
Description: InfiniBand &quot;verbs&quot;, Access Layer  and ULPs
<br>
<p>They are planning to set,
<br>
<p>*options mlx4_core log_num_mtt=12*
<br>
<p>in  */etc/modprobe.d/mlx4_core.**conf*
<br>
<p>I'll let you know how this goes on.
<br>
<p>Thank you,
<br>
Saliya
<br>
<p>On Sun, Feb 8, 2015 at 4:41 PM, Deva &lt;devendar.bureddy_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; What OFED version you are running? If not latest, is it possible to
</span><br>
<span class="quotelev1">&gt; upgrade to latest OFED?.  Otherwise, Can you try latest OMPI release (&gt;=
</span><br>
<span class="quotelev1">&gt; v1.8.4), where this warning is ignored on older OFEDs
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Sun, Feb 8, 2015 at 12:37 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; OpenMPI reports that the OpebFabrics is allowing it to register only part
</span><br>
<span class="quotelev2">&gt;&gt; of the memory (error attached). I've looked at the suggested FAQ entry and
</span><br>
<span class="quotelev2">&gt;&gt; see that *ulimit *settings are all unlimited (pasted below). Could you
</span><br>
<span class="quotelev2">&gt;&gt; please give some suggestion to correct this?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ulimit -a
</span><br>
<span class="quotelev2">&gt;&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev2">&gt;&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev2">&gt;&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; pending signals                 (-i) 386359
</span><br>
<span class="quotelev2">&gt;&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev2">&gt;&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev2">&gt;&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev2">&gt;&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev2">&gt;&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev2">&gt;&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; max user processes              (-u) 386359
</span><br>
<span class="quotelev2">&gt;&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev2">&gt;&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you,
</span><br>
<span class="quotelev2">&gt;&gt; Saliya
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Saliya Ekanayake
</span><br>
<span class="quotelev2">&gt;&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev2">&gt;&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev2">&gt;&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev2">&gt;&gt; Cell 812-391-4914
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://saliya.org">http://saliya.org</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26307.php">http://www.open-mpi.org/community/lists/users/2015/02/26307.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26308.php">http://www.open-mpi.org/community/lists/users/2015/02/26308.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Saliya Ekanayake
Ph.D. Candidate | Research Assistant
School of Informatics and Computing | Digital Science Center
Indiana University, Bloomington
Cell 812-391-4914
<a href="http://saliya.org">http://saliya.org</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26310/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26311.php">Gilles Gouaillardet: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>In reply to:</strong> <a href="26308.php">Deva: "Re: [OMPI users] Max Registerable Memory Warning"</a>
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
