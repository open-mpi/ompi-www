<?
$subject_val = "Re: [OMPI users] System hang-up on MPI_Reduce";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Nov 10 16:57:41 2009" -->
<!-- isoreceived="20091110215741" -->
<!-- sent="Tue, 10 Nov 2009 14:57:31 -0700" -->
<!-- isosent="20091110215731" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System hang-up on MPI_Reduce" -->
<!-- id="C3ED5188-4848-495A-AD99-7D5A21AA4622_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20091110224531.12274ulrj6ra49h7_at_email.fit.vutbr.cz" -->
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
<strong>Subject:</strong> Re: [OMPI users] System hang-up on MPI_Reduce<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-10 16:57:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>In reply to:</strong> <a href="11137.php">Glembek Ond&#197;&#153;ej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11155.php">Glembek Ondřej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="11155.php">Glembek Ondřej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yeah, that is &quot;normal&quot;. It has to do with unexpected messages.
<br>
<p>When you have procs running at significantly different speeds, the  
<br>
various operations get far enough out of sync that the memory consumed  
<br>
by recvd messages not yet processed grows too large.
<br>
<p>Instead of sticking barriers into your code, you can have OMPI do an  
<br>
internal sync after every so many operations to avoid the problem.  
<br>
This is done by enabling the &quot;sync&quot; collective component, and then  
<br>
adjusting the number of operations between forced syncs.
<br>
<p>Do an &quot;ompi_info --params coll sync&quot; to see the options. Then set the  
<br>
coll_sync_priority to something like 100 and it should work for you.
<br>
<p>Ralph
<br>
<p>On Nov 10, 2009, at 2:45 PM, Glembek Ond&#197;&#153;ej wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am using MPI_Reduce operation on 122880x400 matrix of doubles. The  
</span><br>
<span class="quotelev1">&gt; parallel job runs on 32 machines, each having different processor in  
</span><br>
<span class="quotelev1">&gt; terms of speed, but the architecture and OS is the same on all  
</span><br>
<span class="quotelev1">&gt; machines (x86_64). The task is a typical map-and-reduce, i.e. each  
</span><br>
<span class="quotelev1">&gt; of the processes collects some data, which is then summed  
</span><br>
<span class="quotelev1">&gt; (MPI_Reduce w. MPI_SUM).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Having different processors, each of the jobs comes to the  
</span><br>
<span class="quotelev1">&gt; MPI_Reduce in different time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The *first problem* came when I called MPI_Reduce on the whole  
</span><br>
<span class="quotelev1">&gt; matrix. The system ended up with *MPI_ERR_OTHER error*, each time on  
</span><br>
<span class="quotelev1">&gt; different rank. I fixed this problem by chunking up the matrix into  
</span><br>
<span class="quotelev1">&gt; 2048 submatrices, calling MPI_Reduce in cycle.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However *second problem* arose --- MPI_Reduce hangs up... It  
</span><br>
<span class="quotelev1">&gt; apparently gets stuck in some kind of dead-lock or something like  
</span><br>
<span class="quotelev1">&gt; that. It seems that if the processors are of similar speed, the  
</span><br>
<span class="quotelev1">&gt; problem disappears, however I cannot provide this condition all the  
</span><br>
<span class="quotelev1">&gt; time.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I managed to get rid of the problem (at least after few non- 
</span><br>
<span class="quotelev1">&gt; problematic iterations) by sticking MPI_Barrier before the  
</span><br>
<span class="quotelev1">&gt; MPI_Reduce line.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The questions are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) is this a usual behavior???
</span><br>
<span class="quotelev1">&gt; 2) is there some kind of timeout for MPI_Reduce???
</span><br>
<span class="quotelev1">&gt; 3) why does MPI_Reduce die on large amount of data if the system has  
</span><br>
<span class="quotelev1">&gt; enough address space (64 bit compilation)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
</span><br>
<span class="quotelev1">&gt; Ondrej Glembek
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt;  Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev1">&gt;  UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev1">&gt;  Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev1">&gt;  Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  ICQ: 93233896
</span><br>
<span class="quotelev1">&gt;  GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11141.php">Jeff Squyres: "Re: [OMPI users] How do you get static linkage for Intel compiler libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11139.php">Ralph Castain: "Re: [OMPI users] running multiple executables under Torque/PBS PRO"</a>
<li><strong>In reply to:</strong> <a href="11137.php">Glembek Ond&#197;&#153;ej: "[OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11155.php">Glembek Ondřej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="11155.php">Glembek Ondřej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
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
