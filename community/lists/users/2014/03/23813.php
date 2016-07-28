<?
$subject_val = "Re: [OMPI users] Cannot run a job with more than 3 nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 04:07:32 2014" -->
<!-- isoreceived="20140312080732" -->
<!-- sent="Wed, 12 Mar 2014 16:07:31 +0800" -->
<!-- isosent="20140312080731" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run a job with more than 3 nodes" -->
<!-- id="CAJTHAucrZ-faHRo4Tz0HZRp9nGZB5AjLoMm5ULx9cJESniynBA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="AC8FDE94-C331-4C00-A7EE-86F469588D0E_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Cannot run a job with more than 3 nodes<br>
<strong>From:</strong> Victor (<em>victor.major_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 04:07:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23812.php">Reuti: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23812.php">Reuti: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hostname.... no I use lower case, but for some reason while I was writing
<br>
the email I thought that upper case is clearer...
<br>
<p>The same version of Ubuntu (12.04 x64) is on all nodes and openmpi and the
<br>
executable are shared via nfs.
<br>
<p><p>On 12 March 2014 16:01, Reuti &lt;reuti_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 12.03.2014 um 07:37 schrieb Victor:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I am using openmpi 1.7.4 on Ubuntu 12.04 x64 and I have a very odd
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have 4 nodes, all of which are defined in the hostfile and in
</span><br>
<span class="quotelev1">&gt; /etc/hosts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can log into each node using ssh and certificate method from the shell
</span><br>
<span class="quotelev1">&gt; that is running the mpi job, by sing their name as defined in /etc/hosts.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I can run an mpi job if I include only 3 nodes in the hostfile, for
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You are using an uppercase name here by intention - this is the one the
</span><br>
<span class="quotelev1">&gt; host returns by `hostname`? Although it is allowed and should be mangled to
</span><br>
<span class="quotelev1">&gt; lowercase resp. ignored for hostname resolution, I found that not all
</span><br>
<span class="quotelev1">&gt; programs are doing it. Best is to use only lowercase characters is my
</span><br>
<span class="quotelev1">&gt; experience.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The same version of your Ubuntu Linux is installed on all machines?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; But if I add a fourth node into the hostfile eg:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I get this error after attempting mpirun -np 32 --hostfile hostfile
</span><br>
<span class="quotelev1">&gt; a.out:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ssh: Could not resolve hostname Node4: Name or service not known.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; But, I can log into Node4 using ssh from the same shell by using ssh
</span><br>
<span class="quotelev1">&gt; Node4.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Also if I mix up the hostfile like this for example and place Node1 to
</span><br>
<span class="quotelev1">&gt; the last spot:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error becomes
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; ssh: Could not resolve hostname Node1: Name or service not known.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; If I then go back to the three node hostfile like this:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; There is no error with three nodes even though both Node1 and Node4
</span><br>
<span class="quotelev1">&gt; &quot;cannot be found&quot; if they are present in a 4 node hostfile in the last
</span><br>
<span class="quotelev1">&gt; spot. The last slot seems to be bugged.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What is going on? How do I fix this?
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23813/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23814.php">tmishima_at_[hidden]: "[OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>Previous message:</strong> <a href="23812.php">Reuti: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>In reply to:</strong> <a href="23812.php">Reuti: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
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
