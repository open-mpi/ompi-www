<?
$subject_val = "Re: [OMPI users] Cannot run a job with more than 3 nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 07:34:12 2014" -->
<!-- isoreceived="20140312113412" -->
<!-- sent="Wed, 12 Mar 2014 19:34:11 +0800" -->
<!-- isosent="20140312113411" -->
<!-- name="Victor" -->
<!-- email="victor.major_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Cannot run a job with more than 3 nodes" -->
<!-- id="CAJTHAudQb03HCMAC1fOzvKOvtXZQr5=vGnJmniHTBnxJ_f-AzA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="582F763E-B691-4073-AEBF-681A7EF2C7B3_at_cisco.com" -->
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
<strong>Date:</strong> 2014-03-12 07:34:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes they are. Can resolve and log into each node, from each node, using
<br>
their &quot;friendly&quot; name, not IP.
<br>
<p><p>On 12 March 2014 18:15, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Are all names resolvable from all servers?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I.e., if you &quot;ssh Node4&quot; from Node1, Node2, and Node3, does it work?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2014, at 4:07 AM, Victor &lt;victor.major_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hostname.... no I use lower case, but for some reason while I was
</span><br>
<span class="quotelev1">&gt; writing the email I thought that upper case is clearer...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same version of Ubuntu (12.04 x64) is on all nodes and openmpi and
</span><br>
<span class="quotelev1">&gt; the executable are shared via nfs.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 12 March 2014 16:01, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Am 12.03.2014 um 07:37 schrieb Victor:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I am using openmpi 1.7.4 on Ubuntu 12.04 x64 and I have a very odd
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have 4 nodes, all of which are defined in the hostfile and in
</span><br>
<span class="quotelev1">&gt; /etc/hosts.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can log into each node using ssh and certificate method from the
</span><br>
<span class="quotelev1">&gt; shell that is running the mpi job, by sing their name as defined in
</span><br>
<span class="quotelev1">&gt; /etc/hosts.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I can run an mpi job if I include only 3 nodes in the hostfile, for
</span><br>
<span class="quotelev1">&gt; example:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; You are using an uppercase name here by intention - this is the one the
</span><br>
<span class="quotelev1">&gt; host returns by `hostname`? Although it is allowed and should be mangled to
</span><br>
<span class="quotelev1">&gt; lowercase resp. ignored for hostname resolution, I found that not all
</span><br>
<span class="quotelev1">&gt; programs are doing it. Best is to use only lowercase characters is my
</span><br>
<span class="quotelev1">&gt; experience.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The same version of your Ubuntu Linux is installed on all machines?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; -- Reuti
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But if I add a fourth node into the hostfile eg:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I get this error after attempting mpirun -np 32 --hostfile hostfile
</span><br>
<span class="quotelev1">&gt; a.out:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ssh: Could not resolve hostname Node4: Name or service not known.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; But, I can log into Node4 using ssh from the same shell by using ssh
</span><br>
<span class="quotelev1">&gt; Node4.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Also if I mix up the hostfile like this for example and place Node1 to
</span><br>
<span class="quotelev1">&gt; the last spot:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node3 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The error becomes
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ssh: Could not resolve hostname Node1: Name or service not known.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; If I then go back to the three node hostfile like this:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node1 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node4 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Node2 slots=8 max-slots=8
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; There is no error with three nodes even though both Node1 and Node4
</span><br>
<span class="quotelev1">&gt; &quot;cannot be found&quot; if they are present in a 4 node hostfile in the last
</span><br>
<span class="quotelev1">&gt; spot. The last slot seems to be bugged.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; What is going on? How do I fix this?
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23820/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23815.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Reply:</strong> <a href="23821.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
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
