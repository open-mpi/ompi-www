<?
$subject_val = "Re: [OMPI docs] reorder mpi rank";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  9 21:14:48 2008" -->
<!-- isoreceived="20080110021448" -->
<!-- sent="Thu, 10 Jan 2008 11:14:36 +0900" -->
<!-- isosent="20080110021436" -->
<!-- name="e83aw6t02_at_[hidden]" -->
<!-- email="e83aw6t02_at_[hidden]" -->
<!-- subject="Re: [OMPI docs] reorder mpi rank" -->
<!-- id="609-56498_at_sneakemail.com" -->
<!-- charset="ISO-2022-JP" -->
<!-- inreplyto="5465FBE3-11AB-48BF-8D22-019D18761AFD_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI docs] reorder mpi rank<br>
<strong>From:</strong> <a href="mailto:e83aw6t02_at_[hidden]?Subject=Re:%20[OMPI%20docs]%20reorder%20mpi%20rank"><em>e83aw6t02_at_[hidden]</em></a><br>
<strong>Date:</strong> 2008-01-09 21:14:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Amit Kumar Saha: "Re: [OMPI docs] OOO environment"</a>
<li><strong>Previous message:</strong> <a href="0095.php">Sean Ross-Ross: "[OMPI docs] reorder mpi rank"</a>
<li><strong>In reply to:</strong> <a href="0095.php">Sean Ross-Ross: "[OMPI docs] reorder mpi rank"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi. I don't think that this is a support emailing list. That's
<br>
definitely better suited for users_at_open-mpi.org.
<br>
But, to answer your question, the fastest way I can think of is
<br>
something along the lines of
<br>
<p>MPI_Comm myNewComm;
<br>
MPI_Comm_split(MPI_COMM_WORLD,0,myNewRank,&amp;myNewComm);
<br>
<p>(see docs: <a href="http://www-unix.mcs.anl.gov/mpi/www/www3/MPI_Comm_split.html">http://www-unix.mcs.anl.gov/mpi/www/www3/MPI_Comm_split.html</a>)
<br>
That won't change the existing rank inside of MPI_COMM_WORLD (I don't
<br>
think that's possible), but it will create a new comm object (myNewComm)
<br>
you can use instead (where each node has a new rank that you helped
<br>
specify (though if two nodes specified the same key (myNewRank) then
<br>
there will be some tie-breaking and you'll have to lookup the new rank
<br>
using MPI_Comm_rank)).
<br>
<p>Sean Ross-Ross srossross-at-gmail.com |openmpi/Allow| wrote:
<br>
<span class="quotelev1">&gt; Is there a way to reorder the mpi rank at runtime or otherwise?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have a program that makes files on each local node in somewhat of a  
</span><br>
<span class="quotelev1">&gt; random fashion. I want to these files to correspond to a part of a  
</span><br>
<span class="quotelev1">&gt; PETSc Distributed array used in another software package. My problem  
</span><br>
<span class="quotelev1">&gt; is that PETSc expects these windows of data to be on a certain  
</span><br>
<span class="quotelev1">&gt; ranking node. It seems that an easy solution may be to change the  
</span><br>
<span class="quotelev1">&gt; rank of the nodes to correspond with the PETc array.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for your help
</span><br>
<span class="quotelev1">&gt; ~Sean
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; docs mailing list
</span><br>
<span class="quotelev1">&gt; docs_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/docs">http://www.open-mpi.org/mailman/listinfo.cgi/docs</a>
</span><br>
<p><p><pre>
-- 
--Kris
叶ってしまう瘢雹夢は本当の夢と言えん。
[A dream that comes true can't really be called a dream.]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0097.php">Amit Kumar Saha: "Re: [OMPI docs] OOO environment"</a>
<li><strong>Previous message:</strong> <a href="0095.php">Sean Ross-Ross: "[OMPI docs] reorder mpi rank"</a>
<li><strong>In reply to:</strong> <a href="0095.php">Sean Ross-Ross: "[OMPI docs] reorder mpi rank"</a>
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
