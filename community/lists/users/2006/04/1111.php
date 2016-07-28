<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Apr 20 23:26:37 2006" -->
<!-- isoreceived="20060421032637" -->
<!-- sent="Thu, 20 Apr 2006 23:24:32 -0400" -->
<!-- isosent="20060421032432" -->
<!-- name="Sang Chul Choi" -->
<!-- email="goshng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="33f36270604202024s34b7e948i8399d63b1d460488_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="345583733.07818_at_nudt.edu.cn" -->
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
<strong>From:</strong> Sang Chul Choi (<em>goshng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-04-20 23:24:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1112.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>Previous message:</strong> <a href="1110.php">semper: "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>In reply to:</strong> <a href="1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think that you need to install Open MPI into other machine as well.
<br>
You might want to setup NSF (network file system) for the master (you are
<br>
saying your local machine) so that your slave nodes could see your
<br>
mpi executable.
<br>
<p><span class="quotelev1">&gt; bash line 1: orted : command not found
</span><br>
<p>This error might go away if you install Open MPI into all machines.
<br>
<p>Thank you,
<br>
<p>Sang Chul
<br>
<p><p>On 4/20/06, semper &lt;semper_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; No, the location of $HOME should not matter.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; What happens if you &quot;mpirun -np 2 uptime&quot;?  (i.e., use mpirun to launch
</span><br>
<span class="quotelev2">&gt; &gt; a non-MPI application)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; it returns right result!  but still only 2 local processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried again to add a hostfile option &quot;--hostfile
</span><br>
<span class="quotelev1">&gt; $HOME/openmpi/bin/hostfile&quot; to
</span><br>
<span class="quotelev1">&gt; mpirun, with the hostfile containning two items: IA64_node0 and IA64_node1
</span><br>
<span class="quotelev1">&gt; ,but
</span><br>
<span class="quotelev1">&gt; this time it complained:
</span><br>
<span class="quotelev1">&gt; [time returned by IA64_node0]
</span><br>
<span class="quotelev1">&gt; bash line 1: orted : command not found
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; oops,did I do a misconfig for openmpi?
</span><br>
<span class="quotelev1">&gt; btw,openmpi was installed under HOME directory of user semper on each node
</span><br>
<span class="quotelev1">&gt; of the
</span><br>
<span class="quotelev1">&gt; cluster. The 4 nodes can &quot;ssh&quot; or &quot;rsh&quot; login in each other without
</span><br>
<span class="quotelev1">&gt; password
</span><br>
<span class="quotelev1">&gt; prompt.
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-1111/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1112.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>Previous message:</strong> <a href="1110.php">semper: "Re: [OMPI users] OpenMPI and SLURM configuration ??"</a>
<li><strong>In reply to:</strong> <a href="1109.php">semper: "Re: [OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2006/07/1562.php">Jeff Squyres \(jsquyres\): "Re: [OMPI users] (no subject)"</a>
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
