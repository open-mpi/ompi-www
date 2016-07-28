<?
$subject_val = "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May 29 15:51:36 2008" -->
<!-- isoreceived="20080529195136" -->
<!-- sent="Thu, 29 May 2008 15:50:27 -0400" -->
<!-- isosent="20080529195027" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI" -->
<!-- id="F5389F50-AB8C-4B77-9B30-59DCE5D687A9_at_umich.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="dd4eed670805291246r68e8821dq45e70ac89906deb1_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2008-05-29 15:50:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5756.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
That I don't know, we use lustre for this stuff now. And our users  
<br>
don't use parallel IO,  (though I hope to change that).
<br>
Sorry can't help more.  I would really use 'just' pvfs2 for your IO.   
<br>
The other reply pointed out you can have both and not use NFS at all  
<br>
for your IO but leave it mounted is thats what users are expecting.
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
<p><p><p>On May 29, 2008, at 3:46 PM, Davi Vercillo C. Garcia wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm already using &quot;noac&quot; option on my /etc/fstab but this error is
</span><br>
<span class="quotelev1">&gt; still happening. I need to put this in another file ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Thu, May 29, 2008 at 4:33 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Well don't run like this. Have PVFS have NFS,  don't mix them like  
</span><br>
<span class="quotelev2">&gt;&gt; that your
</span><br>
<span class="quotelev2">&gt;&gt; asking for pain, my 2 cents.
</span><br>
<span class="quotelev2">&gt;&gt; I get this error all the time also, you have to disable a large  
</span><br>
<span class="quotelev2">&gt;&gt; portion of
</span><br>
<span class="quotelev2">&gt;&gt; the caching that NFS does to make sure that all MPI-IO clients get  
</span><br>
<span class="quotelev2">&gt;&gt; true data
</span><br>
<span class="quotelev2">&gt;&gt; on the file they are all trying to access.  To make this work  
</span><br>
<span class="quotelev2">&gt;&gt; check in your
</span><br>
<span class="quotelev2">&gt;&gt; /etc/fstab and see if you have the 'noac'  option.  This
</span><br>
<span class="quotelev2">&gt;&gt; is attribute caching, this must be disabled.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On that note PVFS2 is made for doing MPI-IO to multiple hosts  
</span><br>
<span class="quotelev2">&gt;&gt; (thus no need
</span><br>
<span class="quotelev2">&gt;&gt; for NFS)  because it was made with MPI-IO in mind it should work  
</span><br>
<span class="quotelev2">&gt;&gt; out the
</span><br>
<span class="quotelev2">&gt;&gt; box.
</span><br>
<span class="quotelev2">&gt;&gt; Brock Palen
</span><br>
<span class="quotelev2">&gt;&gt; www.umich.edu/~brockp
</span><br>
<span class="quotelev2">&gt;&gt; Center for Advanced Computing
</span><br>
<span class="quotelev2">&gt;&gt; brockp_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; (734)936-1985
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On May 29, 2008, at 3:24 PM, Davi Vercillo C. Garcia wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to run my program in my environment and some problems are
</span><br>
<span class="quotelev2">&gt;&gt; happening. My environment is based on PVFS2 over NFS (PVFS is mounted
</span><br>
<span class="quotelev2">&gt;&gt; over NFS partition), OpenMPI and Ubuntu. My program uses MPI-IO and
</span><br>
<span class="quotelev2">&gt;&gt; BZ2 development libraries. When I tried to run, a message appears:
</span><br>
<span class="quotelev2">&gt;&gt; File locking failed in ADIOI_Set_lock. If the file system is NFS, you
</span><br>
<span class="quotelev2">&gt;&gt; need to use NFS version 3, ensure that the lockd daemon is running on
</span><br>
<span class="quotelev2">&gt;&gt; all the machines, and mount the directory with the 'noac' option (no
</span><br>
<span class="quotelev2">&gt;&gt; attribute caching).
</span><br>
<span class="quotelev2">&gt;&gt; [campogrande05.dcc.ufrj.br:05005] MPI_ABORT invoked on rank 0 in
</span><br>
<span class="quotelev2">&gt;&gt; communicator MPI_COMM_WORLD with errorcode 1
</span><br>
<span class="quotelev2">&gt;&gt; mpiexec noticed that job rank 1 with PID 5008 on node campogrande04
</span><br>
<span class="quotelev2">&gt;&gt; exited on signal 15 (Terminated).
</span><br>
<span class="quotelev2">&gt;&gt; Why ?!
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Davi Vercillo Carneiro Garcia
</span><br>
<span class="quotelev2">&gt;&gt; Universidade Federal do Rio de Janeiro
</span><br>
<span class="quotelev2">&gt;&gt; Departamento de Ci&#234;ncia da Computa&#231;&#227;o
</span><br>
<span class="quotelev2">&gt;&gt; DCC-IM/UFRJ - <a href="http://www.dcc.ufrj.br">http://www.dcc.ufrj.br</a>
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Good things come to those who... wait.&quot; - Debian Project
</span><br>
<span class="quotelev2">&gt;&gt; &quot;A computer is like air conditioning: it becomes useless when you  
</span><br>
<span class="quotelev2">&gt;&gt; open
</span><br>
<span class="quotelev2">&gt;&gt; windows.&quot; - Linus Torvalds
</span><br>
<span class="quotelev2">&gt;&gt; &quot;H&#225; duas coisas infinitas, o universo e a burrice humana. E eu estou
</span><br>
<span class="quotelev2">&gt;&gt; em d&#250;vida quanto o primeiro.&quot; - Albert
</span><br>
<span class="quotelev2">&gt;&gt; Einstein&lt;comprime.c&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt; em d&#250;vida quanto o primeiro.&quot; - Albert Einstein
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5760.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="5758.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<li><strong>In reply to:</strong> <a href="5757.php">Davi Vercillo C. Garcia: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5756.php">Robert Latham: "Re: [OMPI users] Problem with NFS + PVFS2 + OpenMPI"</a>
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
