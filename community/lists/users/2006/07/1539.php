<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 07:19:00 2006" -->
<!-- isoreceived="20060704111900" -->
<!-- sent="Tue, 4 Jul 2006 13:18:55 +0200" -->
<!-- isosent="20060704111855" -->
<!-- name="kefeng chen" -->
<!-- email="kefeng.chen.cn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] error in running openmpi on remote node" -->
<!-- id="41efaeb40607040418n71f02219i9ae989e760cf5866_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c5e12fe60607040053s5c91a99j54c47624d974d391_at_mail.gmail.com" -->
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
<strong>From:</strong> kefeng chen (<em>kefeng.chen.cn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-07-04 07:18:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1540.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
See the following section in FAQ.
<br>
<p><a href="http://www.open-mpi.org/faq/?category=rsh#ssh-keys">http://www.open-mpi.org/faq/?category=rsh#ssh-keys</a>
<br>
<p>and you should copy your application onto every node, if you are not logged
<br>
in using NFS.
<br>
<p><p>On 7/4/06, Chengwen Chen &lt;chenchengwen_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Dear openmpi users,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using openmpi-1.0.2 on Redhat linux. I can succussfully run mpirun in
</span><br>
<span class="quotelev1">&gt; single PC with 2 np. But fail in remote node. Can you give me some advices?
</span><br>
<span class="quotelev1">&gt; thank you very much in advance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [say_at_wolf45 tmp]$ mpirun -np 2 /tmp/test.x
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [say_at_wolf45 tmp]$ mpirun -np 2 --host wolf45,wolf46 /tmp/test.x
</span><br>
<span class="quotelev1">&gt; say_at_wolf46's &lt;say_at_wolf46%27s&gt; password:
</span><br>
<span class="quotelev1">&gt; orted: Command not found.
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: A daemon on node wolf46 failed to start as expected.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: There may be more information available from
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: the remote shell (see above).
</span><br>
<span class="quotelev1">&gt; [wolf45:11357] ERROR: The daemon exited unexpectedly with status 1.
</span><br>
<span class="quotelev1">&gt;
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
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1539/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1540.php">Terry D. Dontje: "Re: [OMPI users] OpenMPI 1.1: Signal:10, info.si_errno:0(Unknown, error:0), si_code:1(BUS_ADRALN) (Terry D., Dontje)"</a>
<li><strong>Previous message:</strong> <a href="1538.php">Manal Helal: "[OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="1537.php">Chengwen Chen: "[OMPI users] error in running openmpi on remote node"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1544.php">Brian Barrett: "Re: [OMPI users] error in running openmpi on remote node"</a>
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
