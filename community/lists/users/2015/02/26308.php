<?
$subject_val = "Re: [OMPI users] Max Registerable Memory Warning";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Feb  8 16:41:49 2015" -->
<!-- isoreceived="20150208214149" -->
<!-- sent="Sun, 8 Feb 2015 13:41:47 -0800" -->
<!-- isosent="20150208214147" -->
<!-- name="Deva" -->
<!-- email="devendar.bureddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Max Registerable Memory Warning" -->
<!-- id="CABB+w0Rxa8ot3z5ytvbBZEQf+rmUHpmHvDYJ8uU4N6SFsoW7Og_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CA+ssbKVSRw-kNFfqRbB3+qkwh3J9kd5i_rumcq9-48C+wTYQvg_at_mail.gmail.com" -->
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
<strong>From:</strong> Deva (<em>devendar.bureddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-08 16:41:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26307.php">Saliya Ekanayake: "[OMPI users] Max Registerable Memory Warning"</a>
<li><strong>In reply to:</strong> <a href="26307.php">Saliya Ekanayake: "[OMPI users] Max Registerable Memory Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>Reply:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What OFED version you are running? If not latest, is it possible to upgrade
<br>
to latest OFED?.  Otherwise, Can you try latest OMPI release (&gt;= v1.8.4),
<br>
where this warning is ignored on older OFEDs
<br>
<p>-Devendar
<br>
<p>On Sun, Feb 8, 2015 at 12:37 PM, Saliya Ekanayake &lt;esaliya_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI reports that the OpebFabrics is allowing it to register only part
</span><br>
<span class="quotelev1">&gt; of the memory (error attached). I've looked at the suggested FAQ entry and
</span><br>
<span class="quotelev1">&gt; see that *ulimit *settings are all unlimited (pasted below). Could you
</span><br>
<span class="quotelev1">&gt; please give some suggestion to correct this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ulimit -a
</span><br>
<span class="quotelev1">&gt; core file size          (blocks, -c) 0
</span><br>
<span class="quotelev1">&gt; data seg size           (kbytes, -d) unlimited
</span><br>
<span class="quotelev1">&gt; scheduling priority             (-e) 0
</span><br>
<span class="quotelev1">&gt; file size               (blocks, -f) unlimited
</span><br>
<span class="quotelev1">&gt; pending signals                 (-i) 386359
</span><br>
<span class="quotelev1">&gt; max locked memory       (kbytes, -l) unlimited
</span><br>
<span class="quotelev1">&gt; max memory size         (kbytes, -m) unlimited
</span><br>
<span class="quotelev1">&gt; open files                      (-n) 1024
</span><br>
<span class="quotelev1">&gt; pipe size            (512 bytes, -p) 8
</span><br>
<span class="quotelev1">&gt; POSIX message queues     (bytes, -q) 819200
</span><br>
<span class="quotelev1">&gt; real-time priority              (-r) 0
</span><br>
<span class="quotelev1">&gt; stack size              (kbytes, -s) 10240
</span><br>
<span class="quotelev1">&gt; cpu time               (seconds, -t) unlimited
</span><br>
<span class="quotelev1">&gt; max user processes              (-u) 386359
</span><br>
<span class="quotelev1">&gt; virtual memory          (kbytes, -v) unlimited
</span><br>
<span class="quotelev1">&gt; file locks                      (-x) unlimited
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt; Saliya
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Saliya Ekanayake
</span><br>
<span class="quotelev1">&gt; Ph.D. Candidate | Research Assistant
</span><br>
<span class="quotelev1">&gt; School of Informatics and Computing | Digital Science Center
</span><br>
<span class="quotelev1">&gt; Indiana University, Bloomington
</span><br>
<span class="quotelev1">&gt; Cell 812-391-4914
</span><br>
<span class="quotelev1">&gt; <a href="http://saliya.org">http://saliya.org</a>
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/02/26307.php">http://www.open-mpi.org/community/lists/users/2015/02/26307.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
-Devendar
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26308/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26309.php">simona bellavista: "Re: [OMPI users] cross-compiling openmpi-1.8.4 with static linking"</a>
<li><strong>Previous message:</strong> <a href="26307.php">Saliya Ekanayake: "[OMPI users] Max Registerable Memory Warning"</a>
<li><strong>In reply to:</strong> <a href="26307.php">Saliya Ekanayake: "[OMPI users] Max Registerable Memory Warning"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
<li><strong>Reply:</strong> <a href="26310.php">Saliya Ekanayake: "Re: [OMPI users] Max Registerable Memory Warning"</a>
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
