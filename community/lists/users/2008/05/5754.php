<?
$subject_val = "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 15:34:48 2008" -->
<!-- isoreceived="20080529193448" -->
<!-- sent="Thu, 29 May 2008 15:33:38 -0400" -->
<!-- isosent="20080529193338" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="12707756-5D71-4ED5-AB10-3DBB44A703E7_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="dd4eed670805291224j4783198emc4f6baacb5ee2ab7_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-05-29 15:33:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5755.php">twurgl_at_[hidden]: "[OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<li><strong>Previous message:</strong> <a href="5753.php">Davi Vercillo C. Garcia: "[OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5753.php">Davi Vercillo C. Garcia: "[OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well don't run like this. Have PVFS have NFS,  don't mix them like  
<br>
that your asking for pain, my 2 cents.
<br>
<p>I get this error all the time also, you have to disable a large  
<br>
portion of the caching that NFS does to make sure that all MPI-IO  
<br>
clients get true data on the file they are all trying to access.  To  
<br>
make this work check in your /etc/fstab and see if you have the  
<br>
'noac'  option.  This is attribute caching, this must be disabled.
<br>
<p>On that note PVFS2 is made for doing MPI-IO to multiple hosts (thus  
<br>
no need for NFS)  because it was made with MPI-IO in mind it should  
<br>
work out the box.
<br>
<p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
Center for Advanced Computing
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p>On May 29, 2008, at 3:24 PM, Davi Vercillo C. Garcia wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to run my program in my environment and some problems are
</span><br>
<span class="quotelev1">&gt; happening. My environment is based on PVFS2 over NFS (PVFS is mounted
</span><br>
<span class="quotelev1">&gt; over NFS partition), OpenMPI and Ubuntu. My program uses MPI-IO and
</span><br>
<span class="quotelev1">&gt; BZ2 development libraries. When I tried to run, a message appears:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; File locking failed in ADIOI_Set_lock. If the file system is NFS, you
</span><br>
<span class="quotelev1">&gt; need to use NFS version 3, ensure that the lockd daemon is running on
</span><br>
<span class="quotelev1">&gt; all the machines, and mount the directory with the 'noac' option (no
</span><br>
<span class="quotelev1">&gt; attribute caching).
</span><br>
<span class="quotelev1">&gt; [campogrande05.dcc.ufrj.br:05005] MPI_ABORT invoked on rank 0 in
</span><br>
<span class="quotelev1">&gt; communicator MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev1">&gt; mpiexec noticed that job rank 1 with PID 5008 on node campogrande04
</span><br>
<span class="quotelev1">&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Why ?!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev1">&gt; Departamento de Ci&#234;ncia da Computa&#231;&#227;o
</span><br>
<span class="quotelev1">&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;Good things come to those who... wait.&quot; - Debian Project
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;A computer is like air conditioning: it becomes useless when you open
</span><br>
<span class="quotelev1">&gt; windows.&quot; - Linus Torvalds
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
</span><br>
<span class="quotelev1">&gt; em d&#250;vida quanto o primeiro.&quot; - Albert  
</span><br>
<span class="quotelev1">&gt; Einstein&lt;comprime.c&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5754/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5755.php">twurgl_at_[hidden]: "[OMPI users] ulimit question from video open-fabrics-concepts..."</a>
<li><strong>Previous message:</strong> <a href="5753.php">Davi Vercillo C. Garcia: "[OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5753.php">Davi Vercillo C. Garcia: "[OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Reply:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
