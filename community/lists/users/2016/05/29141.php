<?
$subject_val = "Re: [OMPI users] No core dump in some cases";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  9 12:04:21 2016" -->
<!-- isoreceived="20160509160421" -->
<!-- sent="Mon, 9 May 2016 12:04:13 -0400" -->
<!-- isosent="20160509160413" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] No core dump in some cases" -->
<!-- id="5730B4FD.1000404_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E400512E-F047-4DEE-99CC-CAEBF3444BE1_at_cisco.com" -->
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
<strong>Date:</strong> 2016-05-09 12:04:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29142.php">Ilias Miroslav: "[OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Durga
<br>
<p>Just in case ...
<br>
If you're using a resource manager to start the jobs (Torque, etc),
<br>
you need to have them set the limits (for coredump size, stacksize, 
<br>
locked memory size, etc).
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
<span class="quotelev1">&gt; I'm afraid I don't know what a .btr file is -- that is not something that is controlled by Open MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to look into your OS settings to see if it has some kind of alternate corefile mechanism...?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 6, 2016, at 8:58 PM, dpchoudh . &lt;dpchoudh_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hello all
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I run MPI jobs (for test purpose only) on two different 'clusters'. Both 'clusters' have two nodes only, connected back-to-back. The two are very similar, but not identical, both software and hardware wise.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Both have ulimit -c set to unlimited. However, only one of the two creates core files when an MPI job crashes. The other creates a text file named something like
</span><br>
<span class="quotelev2">&gt;&gt; &lt;program_name_that_crashed&gt;.80s-&lt;a-number-that-looks-like-a-PID&gt;,&lt;hostname-where-the-crash-happened&gt;.btr
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'd much prefer a core file because that allows me to debug with a lot more options than a static text file with addresses. How do I get a core file in all situations? I am using MPI source from the master branch.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks in advance
</span><br>
<span class="quotelev2">&gt;&gt; Durga
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The surgeon general advises you to eat right, exercise regularly and quit ageing.
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2016/05/29124.php">http://www.open-mpi.org/community/lists/users/2016/05/29124.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29142.php">Ilias Miroslav: "[OMPI users] 'AINT' undeclared"</a>
<li><strong>Previous message:</strong> <a href="29140.php">Zhen Wang: "Re: [OMPI users] Isend, Recv and Test"</a>
<li><strong>In reply to:</strong> <a href="29136.php">Jeff Squyres (jsquyres): "Re: [OMPI users] No core dump in some cases"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
<li><strong>Reply:</strong> <a href="29145.php">dpchoudh .: "Re: [OMPI users] No core dump in some cases"</a>
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
