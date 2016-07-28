<?
$subject_val = "Re: [OMPI users] MPI Program hangs when runs on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 05:57:24 2010" -->
<!-- isoreceived="20100420095724" -->
<!-- sent="Tue, 20 Apr 2010 16:56:59 +0700" -->
<!-- isosent="20100420095659" -->
<!-- name="long thai" -->
<!-- email="thaithanhlong2501_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Program hangs when runs on more than one host" -->
<!-- id="o2r6f5f9bfc1004200256pdbbdcab3qef587fe8abd8bb6f_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="n2seafc0afe1004200154je0ce08cbz34419d22492720c6_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI Program hangs when runs on more than one host<br>
<strong>From:</strong> long thai (<em>thaithanhlong2501_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 05:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>In reply to:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Changsheng
<br>
<p>Thank you very much for your solution. The program runs well now :)
<br>
<p>Regards.
<br>
<p>On Tue, Apr 20, 2010 at 3:54 PM, Changsheng Jiang &lt;jiangzuoyan_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; I have encountered the same problem too.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; By gdb attached, it's show that the processes are in a loop of (e)poll.
</span><br>
<span class="quotelev1">&gt; After configuring the network interface in ~/.openmpi/mca-params.conf using
</span><br>
<span class="quotelev1">&gt; btl_tcp_if_include, all hosts work fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; just fyi.
</span><br>
<span class="quotelev1">&gt;                                                      Changsheng Jiang
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 20, 2010 at 14:39, long thai &lt;thaithanhlong2501_at_[hidden]&gt;wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi all.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm just using OpenMPI for few days. I'll try to run a simple MPI program,
</span><br>
<span class="quotelev2">&gt;&gt; the program is ProcessColors which I get from CI-Tutor&lt;<a href="http://ci-tutor.ncsa.illinois.edu/content.php?cid=1091">http://ci-tutor.ncsa.illinois.edu/content.php?cid=1091</a>&gt;.
</span><br>
<span class="quotelev2">&gt;&gt; I have 2 hosts, if I run the program separately on each one, it runs well.
</span><br>
<span class="quotelev2">&gt;&gt; However, if I run it on two hosts using following command: *mpirun --host
</span><br>
<span class="quotelev2">&gt;&gt; host1,host2 --preload-binary -np 8 ProcessColors*. The program hangs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I use command *ps -A* to check running process, I find out that
</span><br>
<span class="quotelev2">&gt;&gt; there is 4 processes running on each host. So, I think that there is a
</span><br>
<span class="quotelev2">&gt;&gt; deadlock on my program, but why it runs well with single host?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; All those following commands run without any problem on both machine:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    - mpirun -np 8 ProcessColors
</span><br>
<span class="quotelev2">&gt;&gt;    - mpirun --host host1 -np 8 ProcessColors
</span><br>
<span class="quotelev2">&gt;&gt;    - mpirun --host host2 -np 8 ProcessColors
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Later, I found out that the problem comes when the remote host try to send
</span><br>
<span class="quotelev2">&gt;&gt; message to the host which root process (process 0) is running, which is the
</span><br>
<span class="quotelev2">&gt;&gt; host that I run the command. I don't know why the process is blocked at
</span><br>
<span class="quotelev2">&gt;&gt; sending task.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any help from you is precious to me.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Long Thai.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12710/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12711.php">Jeff Squyres: "Re: [OMPI users] unresolved symbol mca_base_param_reg_int"</a>
<li><strong>Previous message:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>In reply to:</strong> <a href="12709.php">Changsheng Jiang: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
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
