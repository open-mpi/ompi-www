<?
$subject_val = "Re: [OMPI users] Can you set the gid of the processes created by mpirun?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Sep  7 09:53:05 2011" -->
<!-- isoreceived="20110907135305" -->
<!-- sent="Wed, 7 Sep 2011 07:52:57 -0600" -->
<!-- isosent="20110907135257" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Can you set the gid of the processes created by mpirun?" -->
<!-- id="72A33BF4-24DD-4F8D-BE5D-5DB76969434B_at_open-mpi.org" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="E9F276A0010AF44ABD2C03ED2EDAE7DB275C8BEF52_at_HDXMSPB.us.lmco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Can you set the gid of the processes created by mpirun?<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-07 09:52:57
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<li><strong>Previous message:</strong> <a href="17171.php">Blosch, Edwin L: "[OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17171.php">Blosch, Edwin L: "[OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sep 7, 2011, at 7:38 AM, Blosch, Edwin L wrote:
<br>
<p><span class="quotelev1">&gt; The mpirun command is invoked when the user&#146;s group is &#145;set group&#146; to group 650.  When the rank 0 process creates files, they have group ownership 650.  But the user&#146;s login group is group 1040. The child processes that get started on other nodes run with group 1040, and the files they create have group ownership 1040.
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Is there a way to tell mpirun to start the child processes with the same uid and gid as the rank 0 process?
</span><br>
<p>I'm afraid not - never came up before. Could be done, but probably not right away. What version are you using?
<br>
<p><span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17172/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17173.php">Jeff Squyres: "Re: [OMPI users] Open MPI 1.5.4/Intel XE make check failure (CentOS-5.6 x86_64) [FIXED]"</a>
<li><strong>Previous message:</strong> <a href="17171.php">Blosch, Edwin L: "[OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<li><strong>In reply to:</strong> <a href="17171.php">Blosch, Edwin L: "[OMPI users] Can you set the gid of the processes created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
<li><strong>Reply:</strong> <a href="17174.php">Blosch, Edwin L: "Re: [OMPI users] Can you set the gid of the processes created by	mpirun?"</a>
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
