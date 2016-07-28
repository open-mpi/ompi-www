<?
$subject_val = "Re: [OMPI users] System hang-up on MPI_Reduce";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 11 05:00:15 2009" -->
<!-- isoreceived="20091111100015" -->
<!-- sent="Wed, 11 Nov 2009 11:00:09 +0100" -->
<!-- isosent="20091111100009" -->
<!-- name="Glembek Ond&#197;&#153;ej" -->
<!-- email="glembek_at_[hidden]" -->
<!-- subject="Re: [OMPI users] System hang-up on MPI_Reduce" -->
<!-- id="20091111110009.182766nbogcy9fzd_at_email.fit.vutbr.cz" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="C3ED5188-4848-495A-AD99-7D5A21AA4622_at_open-mpi.org" -->
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
<strong>From:</strong> Glembek Ond&#197;&#153;ej (<em>glembek_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-11-11 05:00:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11156.php">Yogesh Aher: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanx for your reply...
<br>
<p>My coll_sync_priority is set to 50. See the dump of ompi_info --param  
<br>
coll sync below...
<br>
<p>Does sticking barriers hurt anything or is it just a cosmetic thing???  
<br>
I'm fine with this solution...
<br>
<p>Thanx
<br>
Ondrej
<br>
<p><p>$ompi_info --param coll sync
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll&quot; (current value: &lt;none&gt;,  
<br>
data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Default selection set of components for the  
<br>
coll framework (&lt;none&gt; means use all components that can be found)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_base_verbose&quot; (current  
<br>
value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Verbosity level for the coll framework (0 =  
<br>
no verbosity)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sync_priority&quot; (current  
<br>
value: &quot;50&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Priority of the sync coll component; only  
<br>
relevant if barrier_before or barrier_after is &gt; 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sync_barrier_before&quot;  
<br>
(current value: &quot;1000&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do a synchronization before each Nth collective
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA coll: parameter &quot;coll_sync_barrier_after&quot;  
<br>
(current value: &quot;0&quot;, data source: default value)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Do a synchronization after each Nth collective
<br>
<p><p>Quoting &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; Yeah, that is &quot;normal&quot;. It has to do with unexpected messages.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; When you have procs running at significantly different speeds, the  
</span><br>
<span class="quotelev1">&gt; various operations get far enough out of sync that the memory  
</span><br>
<span class="quotelev1">&gt; consumed by recvd messages not yet processed grows too large.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instead of sticking barriers into your code, you can have OMPI do an  
</span><br>
<span class="quotelev1">&gt; internal sync after every so many operations to avoid the problem.  
</span><br>
<span class="quotelev1">&gt; This is done by enabling the &quot;sync&quot; collective component, and then  
</span><br>
<span class="quotelev1">&gt; adjusting the number of operations between forced syncs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Do an &quot;ompi_info --params coll sync&quot; to see the options. Then set  
</span><br>
<span class="quotelev1">&gt; the coll_sync_priority to something like 100 and it should work for  
</span><br>
<span class="quotelev1">&gt; you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 10, 2009, at 2:45 PM, Glembek Ond&#197;&#153;ej wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I am using MPI_Reduce operation on 122880x400 matrix of doubles.  
</span><br>
<span class="quotelev2">&gt;&gt; The parallel job runs on 32 machines, each having different  
</span><br>
<span class="quotelev2">&gt;&gt; processor in terms of speed, but the architecture and OS is the  
</span><br>
<span class="quotelev2">&gt;&gt; same on all machines (x86_64). The task is a typical  
</span><br>
<span class="quotelev2">&gt;&gt; map-and-reduce, i.e. each of the processes collects some data,  
</span><br>
<span class="quotelev2">&gt;&gt; which is then summed (MPI_Reduce w. MPI_SUM).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Having different processors, each of the jobs comes to the  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce in different time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The *first problem* came when I called MPI_Reduce on the whole  
</span><br>
<span class="quotelev2">&gt;&gt; matrix. The system ended up with *MPI_ERR_OTHER error*, each time  
</span><br>
<span class="quotelev2">&gt;&gt; on different rank. I fixed this problem by chunking up the matrix  
</span><br>
<span class="quotelev2">&gt;&gt; into 2048 submatrices, calling MPI_Reduce in cycle.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; However *second problem* arose --- MPI_Reduce hangs up... It  
</span><br>
<span class="quotelev2">&gt;&gt; apparently gets stuck in some kind of dead-lock or something like  
</span><br>
<span class="quotelev2">&gt;&gt; that. It seems that if the processors are of similar speed, the  
</span><br>
<span class="quotelev2">&gt;&gt; problem disappears, however I cannot provide this condition all the  
</span><br>
<span class="quotelev2">&gt;&gt; time.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I managed to get rid of the problem (at least after few  
</span><br>
<span class="quotelev2">&gt;&gt; non-problematic iterations) by sticking MPI_Barrier before the  
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Reduce line.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The questions are:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 1) is this a usual behavior???
</span><br>
<span class="quotelev2">&gt;&gt; 2) is there some kind of timeout for MPI_Reduce???
</span><br>
<span class="quotelev2">&gt;&gt; 3) why does MPI_Reduce die on large amount of data if the system  
</span><br>
<span class="quotelev2">&gt;&gt; has enough address space (64 bit compilation)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanx
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej Glembek
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
</span><br>
<span class="quotelev2">&gt;&gt; Bozetechova 2, 612 66        Phone:  +420 54114-1292
</span><br>
<span class="quotelev2">&gt;&gt; Brno, Czech Republic         Fax:    +420 54114-1290
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; ICQ: 93233896
</span><br>
<span class="quotelev2">&gt;&gt; GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><p><pre>
-- 
   Ondrej Glembek, PhD student  E-mail: glembek_at_[hidden]
   UPGM FIT VUT Brno, L226      Web:    <a href="http://www.fit.vutbr.cz/~glembek">http://www.fit.vutbr.cz/~glembek</a>
   Bozetechova 2, 612 66        Phone:  +420 54114-1292
   Brno, Czech Republic         Fax:    +420 54114-1290
   ICQ: 93233896
   GPG: C050 A6DC 7291 6776 9B69 BB11 C033 D756 6F33 DE3C
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11156.php">Yogesh Aher: "Re: [OMPI users] users Digest, Vol 1401, Issue 2"</a>
<li><strong>Previous message:</strong> <a href="11154.php">vasilis gkanis: "Re: [OMPI users] ipo: warning #11009: file format notrecognized	for /Libraries_intel/openmpi/lib/libmpi.so"</a>
<li><strong>In reply to:</strong> <a href="11140.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
<li><strong>Reply:</strong> <a href="11157.php">Ralph Castain: "Re: [OMPI users] System hang-up on MPI_Reduce"</a>
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
