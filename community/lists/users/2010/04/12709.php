<?
$subject_val = "Re: [OMPI users] MPI Program hangs when runs on more than one host";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr 20 04:55:09 2010" -->
<!-- isoreceived="20100420085509" -->
<!-- sent="Tue, 20 Apr 2010 16:54:45 +0800" -->
<!-- isosent="20100420085445" -->
<!-- name="Changsheng Jiang" -->
<!-- email="jiangzuoyan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI Program hangs when runs on more than one host" -->
<!-- id="n2seafc0afe1004200154je0ce08cbz34419d22492720c6_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="r2l6f5f9bfc1004192339lc6ee1953o2683da73f70eee64_at_mail.gmail.com" -->
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
<strong>From:</strong> Changsheng Jiang (<em>jiangzuoyan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-20 04:54:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Previous message:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<li><strong>In reply to:</strong> <a href="12706.php">long thai: "[OMPI users] MPI Program hangs when runs on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Reply:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have encountered the same problem too.
<br>
<p>By gdb attached, it's show that the processes are in a loop of (e)poll.
<br>
After configuring the network interface in ~/.openmpi/mca-params.conf using
<br>
btl_tcp_if_include, all hosts work fine.
<br>
<p>just fyi.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Changsheng Jiang
<br>
<p><p>On Tue, Apr 20, 2010 at 14:39, long thai &lt;thaithanhlong2501_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt; Hi all.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm just using OpenMPI for few days. I'll try to run a simple MPI program,
</span><br>
<span class="quotelev1">&gt; the program is ProcessColors which I get from CI-Tutor&lt;<a href="http://ci-tutor.ncsa.illinois.edu/content.php?cid=1091">http://ci-tutor.ncsa.illinois.edu/content.php?cid=1091</a>&gt;.
</span><br>
<span class="quotelev1">&gt; I have 2 hosts, if I run the program separately on each one, it runs well.
</span><br>
<span class="quotelev1">&gt; However, if I run it on two hosts using following command: *mpirun --host
</span><br>
<span class="quotelev1">&gt; host1,host2 --preload-binary -np 8 ProcessColors*. The program hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When I use command *ps -A* to check running process, I find out that there
</span><br>
<span class="quotelev1">&gt; is 4 processes running on each host. So, I think that there is a deadlock on
</span><br>
<span class="quotelev1">&gt; my program, but why it runs well with single host?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All those following commands run without any problem on both machine:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    - mpirun -np 8 ProcessColors
</span><br>
<span class="quotelev1">&gt;    - mpirun --host host1 -np 8 ProcessColors
</span><br>
<span class="quotelev1">&gt;    - mpirun --host host2 -np 8 ProcessColors
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Later, I found out that the problem comes when the remote host try to send
</span><br>
<span class="quotelev1">&gt; message to the host which root process (process 0) is running, which is the
</span><br>
<span class="quotelev1">&gt; host that I run the command. I don't know why the process is blocked at
</span><br>
<span class="quotelev1">&gt; sending task.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help from you is precious to me.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Long Thai.
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
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-12709/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Previous message:</strong> <a href="12708.php">E.T.A.vanderWeide_at_[hidden]: "Re: [OMPI users] Incorrect results with MPI-IO with OpenMPI v1.3.0 andbeyond"</a>
<li><strong>In reply to:</strong> <a href="12706.php">long thai: "[OMPI users] MPI Program hangs when runs on more than one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
<li><strong>Reply:</strong> <a href="12710.php">long thai: "Re: [OMPI users] MPI Program hangs when runs on more than one host"</a>
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
