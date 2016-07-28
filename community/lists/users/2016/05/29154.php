<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 10 10:02:21 2016" -->
<!-- isoreceived="20160510140221" -->
<!-- sent="Tue, 10 May 2016 14:02:18 +0000" -->
<!-- isosent="20160510140218" -->
<!-- name="Hjelm, Nathan Thomas" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="AE45F2F55FE69B4F99BB3455E821D7155FFBFAE3_at_ECS-EXG-P-MB01.win.lanl.gov" -->
<!-- charset="us-ascii" -->
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
<strong>From:</strong> Hjelm, Nathan Thomas (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-05-10 10:02:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29153.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
btr files are indeed created by open mpi's backtrace mechanism. I think we should revisit it at some point but for now the only effective way i have found to prevent it is to restore the default signal handlers after MPI_Init.
<br>
<p>Excuse the quoting style. Good sucks.
<br>
<p><p>________________________________________
<br>
From: users on behalf of dpchoudh .
<br>
Sent: Monday, May 09, 2016 2:59:37 PM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] No core dump in some cases
<br>
<p>Hi Gus
<br>
<p>Thanks for your suggestion. But I am not using any resource manager (i.e. I am launching mpirun from the bash shell.). In fact, both of the two clusters I talked about run CentOS 7 and I launch the job the same way on both of these, yet one of them creates standard core files and the other creates the 'btr; files. Strange thing is, I could not find anything on the .btr (= Backtrace?) files on Google, which is any I asked on this forum.
<br>
<p>Best regards
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit ageing.
<br>
<p>On Mon, May 9, 2016 at 12:04 PM, Gus Correa &lt;gus_at_[hidden]&lt;mailto:gus_at_[hidden]&gt;&gt; wrote:
<br>
Hi Durga
<br>
<p>Just in case ...
<br>
If you're using a resource manager to start the jobs (Torque, etc),
<br>
you need to have them set the limits (for coredump size, stacksize, locked memory size, etc).
<br>
This way the jobs will inherit the limits from the
<br>
resource manager daemon.
<br>
On Torque (which I use) I do this on the pbs_mom daemon
<br>
init script (I am still before the systemd era, that lovely POS).
<br>
And set the hard/soft limits on /etc/security/limits.conf as well.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 05/07/2016 12:27 PM, Jeff Squyres (jsquyres) wrote:
<br>
I'm afraid I don't know what a .btr file is -- that is not something that is controlled by Open MPI.
<br>
<p>You might want to look into your OS settings to see if it has some kind of alternate corefile mechanism...?
<br>
<p><p>On May 6, 2016, at 8:58 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&lt;mailto:dpchoudh_at_[hidden]&gt;&gt; wrote:
<br>
<p>Hello all
<br>
<p>I run MPI jobs (for test purpose only) on two different 'clusters'. Both 'clusters' have two nodes only, connected back-to-back. The two are very similar, but not identical, both software and hardware wise.
<br>
<p>Both have ulimit -c set to unlimited. However, only one of the two creates core files when an MPI job crashes. The other creates a text file named something like
<br>
&lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
<br>
<p>I'd much prefer a core file because that allows me to debug with a lot more options than a static text file with addresses. How do I get a core file in all situations? I am using MPI source from the master branch.
<br>
<p>Thanks in advance
<br>
Durga
<br>
<p>The surgeon general advises you to eat right, exercise regularly and quit ageing.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
<br>
<p><p><p>_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29141.php">http://www.open-mpi.org/community/lists/users/2016/05/29141.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29155.php">Llolsten Kaonga: "Re: [OMPI users] mpirun command won't run unless the firewalld daemon is disabled"</a>
<li><strong>Previous message:</strong> <a href="29153.php">Gilles Gouaillardet: "Re: [OMPI users] Incorrect function call in simple C program"</a>
<li><strong>In reply to:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29169.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
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
