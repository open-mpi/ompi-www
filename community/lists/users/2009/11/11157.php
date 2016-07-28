<?
$subject_val = "Re: [OMPI users] System hang-up on MPI_Reduce";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 08:25:56 2009" -->
<!-- isoreceived="20091111132556" -->
<!-- sent="Wed, 11 Nov 2009 06:25:44 -0700" -->
<!-- isosent="20091111132544" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System hang-up on MPI_Reduce" -->
<!-- id="16365258-8797-498F-AD51-B753718E7C12_at_open-mpi.org" -->
<!-- charset="utf-8" -->
<!-- inreplyto="20091111110009.182766nbogcy9fzd_at_email.fit.vutbr.cz" -->
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
<strong>Date:</strong> 2009-11-11 08:25:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11156.php">Yogesh Aher: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="11155.php">Glembek Ond&#197;&#153;ej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are welcome to stick barriers in - doesn't hurt anything other  
<br>
than performance.
<br>
<p>On Nov 11, 2009, at 3:00 AM, Glembek Ond&#197;&#153;ej wrote:
<br>
<p><span class="quotelev1">&gt; Thanx for your reply...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My coll_sync_priority is set to 50. See the dump of ompi_info -- 
</span><br>
<span class="quotelev1">&gt; param coll sync below...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Does sticking barriers hurt anything or is it just a cosmetic  
</span><br>
<span class="quotelev1">&gt; thing??? I'm fine with this solution...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanx
</span><br>
<span class="quotelev1">&gt; Ondrej
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; $ompi_info --param coll sync
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;,  
</span><br>
<span class="quotelev1">&gt; data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Default selection set of components for the  
</span><br>
<span class="quotelev1">&gt; coll framework (&lt;none&gt; means use all components that can be found)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_base_verbose&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;0&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Verbosity level for the coll framework (0 =  
</span><br>
<span class="quotelev1">&gt; no verbosity)
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter &quot;coll_sync_priority&quot; (current  
</span><br>
<span class="quotelev1">&gt; value: &quot;50&quot;, data source: default value)
</span><br>
<span class="quotelev1">&gt;                          Priority of the sync coll component; only  
</span><br>
<span class="quotelev1">&gt; relevant if barrier_before or barrier_after is &gt; 0
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sync_barrier_before&quot; (current value: &quot;1000&quot;, data source:  
</span><br>
<span class="quotelev1">&gt; default value)
</span><br>
<span class="quotelev1">&gt;                          Do a synchronization before each Nth  
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt;                MCA coll: parameter  
</span><br>
<span class="quotelev1">&gt; &quot;coll_sync_barrier_after&quot; (current value: &quot;0&quot;, data source: default  
</span><br>
<span class="quotelev1">&gt; value)
</span><br>
<span class="quotelev1">&gt;                          Do a synchronization after each Nth  
</span><br>
<span class="quotelev1">&gt; collective
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Quoting &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Yeah, that is &quot;normal&quot;. It has to do with unexpected messages.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When you have procs running at significantly different speeds, the  
</span><br>
<span class="quotelev2">&gt;&gt; various operations get far enough out of sync that the memory  
</span><br>
<span class="quotelev2">&gt;&gt; consumed by recvd messages not yet processed grows too large.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead of sticking barriers into your code, you can have OMPI do  
</span><br>
<span class="quotelev2">&gt;&gt; an internal sync after every so many operations to avoid the  
</span><br>
<span class="quotelev2">&gt;&gt; problem. This is done by enabling the &quot;sync&quot; collective component,  
</span><br>
<span class="quotelev2">&gt;&gt; and then adjusting the number of operations between forced syncs.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Do an &quot;ompi_info --params coll sync&quot; to see the options. Then set  
</span><br>
<span class="quotelev2">&gt;&gt; the coll_sync_priority to something like 100 and it should work for  
</span><br>
<span class="quotelev2">&gt;&gt; you.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 10, 2009, at 2:45 PM, Glembek Ond&#197;&#153;ej wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am using MPI_Reduce operation on 122880x400 matrix of doubles.  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The parallel job runs on 32 machines, each having different  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; processor in terms of speed, but the architecture and OS is the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; same on all machines (x86_64). The task is a typical map-and- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reduce, i.e. each of the processes collects some data, which is  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; then summed (MPI_Reduce w. MPI_SUM).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Having different processors, each of the jobs comes to the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Reduce in different time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The *first problem* came when I called MPI_Reduce on the whole  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; matrix. The system ended up with *MPI_ERR_OTHER error*, each time  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on different rank. I fixed this problem by chunking up the matrix  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; into 2048 submatrices, calling MPI_Reduce in cycle.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; However *second problem* arose --- MPI_Reduce hangs up... It  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; apparently gets stuck in some kind of dead-lock or something like  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that. It seems that if the processors are of similar speed, the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problem disappears, however I cannot provide this condition all  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the time.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I managed to get rid of the problem (at least after few non- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; problematic iterations) by sticking MPI_Barrier before the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Reduce line.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The questions are:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 1) is this a usual behavior???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 2) is there some kind of timeout for MPI_Reduce???
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 3) why does MPI_Reduce die on large amount of data if the system  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; has enough address space (64 bit compilation)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanx
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ondrej Glembek
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/">http://www.fit.vutbr.cz/</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ~glembek
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ICQ: 93233896
</span><br>
<span class="quotelev3">&gt;&gt;&gt; GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev1">&gt;
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
<li><strong>Next message:</strong> <a href="11158.php">Blosch, Edwin L: "Re: [OMPI users] How do you get static linkage for Intel compiler	libsfor the orterun executable?"</a>
<li><strong>Previous message:</strong> <a href="11156.php">Yogesh Aher: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>In reply to:</strong> <a href="11155.php">Glembek Ond&#197;&#153;ej: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
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
