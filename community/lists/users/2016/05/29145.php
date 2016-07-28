<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 16:59:38 2016" -->
<!-- isoreceived="20160509205938" -->
<!-- sent="Mon, 9 May 2016 16:59:37 -0400" -->
<!-- isosent="20160509205937" -->
<!-- name="dpchoudh ." -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="CAHXxYDhCUs4inyoYmFnO4ci6XpnZn5is8wVBCGc21k0_7V90nw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="5730B4FD.1000404_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] No core dump in some cases<br>
<strong>From:</strong> dpchoudh . (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-09 16:59:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29146.php">Devon Hollowood: "[OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29141.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29154.php">Hjelm, Nathan Thomas: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29154.php">Hjelm, Nathan Thomas: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29158.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus
<br>
<p>Thanks for your suggestion. But I am not using any resource manager (i.e. I
<br>
am launching mpirun from the bash shell.). In fact, both of the two
<br>
clusters I talked about run CentOS 7 and I launch the job the same way on
<br>
both of these, yet one of them creates standard core files and the other
<br>
creates the 'btr; files. Strange thing is, I could not find anything on the
<br>
.btr (= Backtrace?) files on Google, which is any I asked on this forum.
<br>
<p>Best regards
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit
<br>
ageing.
<br>
<p>On Mon, May 9, 2016 at 12:04 PM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Just in case ...
</span><br>
<span class="quotelev1">&gt; If you're using a resource manager to start the jobs (Torque, etc),
</span><br>
<span class="quotelev1">&gt; you need to have them set the limits (for coredump size, stacksize, locked
</span><br>
<span class="quotelev1">&gt; memory size, etc).
</span><br>
<span class="quotelev1">&gt; This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev1">&gt; resource manager daemon.
</span><br>
<span class="quotelev1">&gt; On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev1">&gt; init script (I am still before the systemd era, that lovely POS).
</span><br>
<span class="quotelev1">&gt; And set the hard/soft limits on /etc/security/limits.conf as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope this helps,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm afraid I don't know what a .btr file is -- that is not something that
</span><br>
<span class="quotelev2">&gt;&gt; is controlled by Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to look into your OS settings to see if it has some kind
</span><br>
<span class="quotelev2">&gt;&gt; of alternate corefile mechanism...?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hello all
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I run MPI jobs (for test purpose only) on two different 'clusters'. Both
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'clusters' have two nodes only, connected back-to-back. The two are very
</span><br>
<span class="quotelev3">&gt;&gt;&gt; similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Both have ulimit -c set to unlimited. However, only one of the two
</span><br>
<span class="quotelev3">&gt;&gt;&gt; creates core files when an MPI job crashes. The other creates a text file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; named something like
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'd much prefer a core file because that allows me to debug with a lot
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more options than a static text file with addresses. How do I get a core
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file in all situations? I am using MPI source from the master branch.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Durga
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quit ageing.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29145/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29146.php">Devon Hollowood: "[OMPI users] Incorrect function call in simple C program"</a>
<li><strong>Previous message:</strong> <a href="29144.php">dpchoudh .: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>In reply to:</strong> <a href="29141.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29154.php">Hjelm, Nathan Thomas: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29154.php">Hjelm, Nathan Thomas: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29158.php">Gus Correa: "Re: [OMPI users] No core dump in some cases"</a>
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
