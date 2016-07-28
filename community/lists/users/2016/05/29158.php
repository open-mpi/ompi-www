<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 12:02:54 2016" -->
<!-- isoreceived="20160510160254" -->
<!-- sent="Tue, 10 May 2016 12:02:44 -0400" -->
<!-- isosent="20160510160244" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="57320624.1000206_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAHXxYDhCUs4inyoYmFnO4ci6XpnZn5is8wVBCGc21k0_7V90nw_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 12:02:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>In reply to:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/09/2016 04:59 PM, dpchoudh . wrote:
<br>
<span class="quotelev1">&gt; Hi Gus
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your suggestion. But I am not using any resource manager
</span><br>
<span class="quotelev1">&gt; (i.e. I am launching mpirun from the bash shell.). In fact, both of the
</span><br>
<span class="quotelev1">&gt; two clusters I talked about run CentOS 7 and I launch the job the same
</span><br>
<span class="quotelev1">&gt; way on both of these, yet one of them creates standard core files and
</span><br>
<span class="quotelev1">&gt; the other creates the 'btr; files. Strange thing is, I could not find
</span><br>
<span class="quotelev1">&gt; anything on the .btr (= Backtrace?) files on Google, which is any I
</span><br>
<span class="quotelev1">&gt; asked on this forum.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards
</span><br>
<span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The surgeon general advises you to eat right, exercise regularly and
</span><br>
<span class="quotelev1">&gt; quit ageing.
</span><br>
<p>Hi Durga
<br>
<p>My search showed something, but quite weirdly related to databases.
<br>
Maybe the same file extension used for two different things?
<br>
Does &quot;file *.btr&quot; tell anything?
<br>
<p>Databases:
<br>
<p><a href="http://cs.pervasive.com/forums/p/14533/50237.aspx">http://cs.pervasive.com/forums/p/14533/50237.aspx</a>
<br>
<p>... more databases ...
<br>
<p><a href="http://www.openthefile.net/extension/btr">http://www.openthefile.net/extension/btr</a>
<br>
<p>... binary tree indexes ...
<br>
<p><a href="http://www.velocityreviews.com/threads/index-btr-file-in-windows-xp-help-please.307459/">http://www.velocityreviews.com/threads/index-btr-file-in-windows-xp-help-please.307459/</a>
<br>
<p>... and a catalog of buterflies!  :)
<br>
<p><a href="http://filext.com/file-extension/BTR">http://filext.com/file-extension/BTR</a>
<br>
<a href="http://review-tech.appspot.com/btr-file.html">http://review-tech.appspot.com/btr-file.html</a>
<br>
<p>Oh well ...
<br>
<p>... and finally a previous incarnation of an OpenMPI 1.6.5 question 
<br>
similar to yours (where .btr stands for backtrace):
<br>
<p><a href="http://stackoverflow.com/questions/25275450/cause-all-processes-running-under-openmpi-to-dump-core">http://stackoverflow.com/questions/25275450/cause-all-processes-running-under-openmpi-to-dump-core</a>
<br>
<p>Could this be due to a (unlikely) mix of OpenMPI 1.10 with 1.6.5?
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, May 9, 2016 at 12:04 PM, Gus Correa &lt;gus_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Just in case ...
</span><br>
<span class="quotelev1">&gt;     If you're using a resource manager to start the jobs (Torque, etc),
</span><br>
<span class="quotelev1">&gt;     you need to have them set the limits (for coredump size, stacksize,
</span><br>
<span class="quotelev1">&gt;     locked memory size, etc).
</span><br>
<span class="quotelev1">&gt;     This way the jobs will inherit the limits from the
</span><br>
<span class="quotelev1">&gt;     resource manager daemon.
</span><br>
<span class="quotelev1">&gt;     On Torque (which I use) I do this on the pbs_mom daemon
</span><br>
<span class="quotelev1">&gt;     init script (I am still before the systemd era, that lovely POS).
</span><br>
<span class="quotelev1">&gt;     And set the hard/soft limits on /etc/security/limits.conf as well.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I hope this helps,
</span><br>
<span class="quotelev1">&gt;     Gus Correa
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         I'm afraid I don't know what a .btr file is -- that is not
</span><br>
<span class="quotelev1">&gt;         something that is controlled by Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;         You might want to look into your OS settings to see if it has
</span><br>
<span class="quotelev1">&gt;         some kind of alternate corefile mechanism...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             On May 6, 2016, at 8:58 PM, dpchoudh . &lt;dpchoudh_at_[hidden]
</span><br>
<span class="quotelev1">&gt;             &lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Hello all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I run MPI jobs (for test purpose only) on two different
</span><br>
<span class="quotelev1">&gt;             'clusters'. Both 'clusters' have two nodes only, connected
</span><br>
<span class="quotelev1">&gt;             back-to-back. The two are very similar, but not identical,
</span><br>
<span class="quotelev1">&gt;             both software and hardware wise.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Both have ulimit -c set to unlimited. However, only one of
</span><br>
<span class="quotelev1">&gt;             the two creates core files when an MPI job crashes. The
</span><br>
<span class="quotelev1">&gt;             other creates a text file named something like
</span><br>
<span class="quotelev1">&gt;             &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             I'd much prefer a core file because that allows me to debug
</span><br>
<span class="quotelev1">&gt;             with a lot more options than a static text file with
</span><br>
<span class="quotelev1">&gt;             addresses. How do I get a core file in all situations? I am
</span><br>
<span class="quotelev1">&gt;             using MPI source from the master branch.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             Thanks in advance
</span><br>
<span class="quotelev1">&gt;             Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;             The surgeon general advises you to eat right, exercise
</span><br>
<span class="quotelev1">&gt;             regularly and quit ageing.
</span><br>
<span class="quotelev1">&gt;             _______________________________________________
</span><br>
<span class="quotelev1">&gt;             users mailing list
</span><br>
<span class="quotelev1">&gt;             users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;             Subscription:
</span><br>
<span class="quotelev1">&gt;             <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;             Link to this post:
</span><br>
<span class="quotelev1">&gt;             <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29145.php">http://www.open-mpi.org/community/lists/users/2016/05/29145.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29159.php">Ralph Castain: "Re: [OMPI users] Question about mpirun mca_oob_tcp_recv_handler error."</a>
<li><strong>Previous message:</strong> <a href="29157.php">Ilias Miroslav: "Re: [OMPI users] 'AINT' undeclared"</a>
<li><strong>In reply to:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
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
