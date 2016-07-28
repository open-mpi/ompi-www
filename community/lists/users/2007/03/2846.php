<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Mar 20 07:55:09 2007" -->
<!-- isoreceived="20070320115509" -->
<!-- sent="Tue, 20 Mar 2007 07:55:08 -0400" -->
<!-- isosent="20070320115508" -->
<!-- name="Tim Prins" -->
<!-- email="tprins_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpirun exit status for non-existent executable" -->
<!-- id="99923E9E-1FE4-4185-90E3-1DD2738EB379_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="756D1DEF-92B7-4305-BAFD-54B93F992042_at_numenta.com" -->
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
<strong>From:</strong> Tim Prins (<em>tprins_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-20 07:55:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2847.php">Ron Brightwell: "[OMPI users] CFP: 2007 IEEE International Conference on Cluster Computing (Cluster2007)"</a>
<li><strong>Previous message:</strong> <a href="2845.php">Bill Saphir: "[OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>In reply to:</strong> <a href="2845.php">Bill Saphir: "[OMPI users] mpirun exit status for non-existent executable"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Well that's not a good thing. I have filed a bug about this (https:// 
<br>
svn.open-mpi.org/trac/ompi/ticket/954) and will try to look into it  
<br>
soon, but don't know when it will get fixed.
<br>
<p>Thanks for bringing this to our attention!
<br>
<p>Tim
<br>
<p>On Mar 20, 2007, at 1:39 AM, Bill Saphir wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If you ask mpirun to launch an executable that does not exist, it
</span><br>
<span class="quotelev1">&gt; fails, but returns an exit status of 0.
</span><br>
<span class="quotelev1">&gt; This makes it difficult to write scripts that invoke mpirun and need
</span><br>
<span class="quotelev1">&gt; to check for errors.
</span><br>
<span class="quotelev1">&gt; I'm wondering if a) this is considered a bug and b) whether it might
</span><br>
<span class="quotelev1">&gt; be fixed in a near term release.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Example:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; orterun -np 2 asdflkj
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Failed to find the following executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Host:       build-linux64
</span><br>
<span class="quotelev1">&gt; Executable: asdflkj
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Cannot continue.
</span><br>
<span class="quotelev1">&gt; ---------------------------------------------------------------------- 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; echo $?
</span><br>
<span class="quotelev1">&gt; 0
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I see this behavior for both 1.2 and 1.1.x.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks for your help.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Bill
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
<li><strong>Next message:</strong> <a href="2847.php">Ron Brightwell: "[OMPI users] CFP: 2007 IEEE International Conference on Cluster Computing (Cluster2007)"</a>
<li><strong>Previous message:</strong> <a href="2845.php">Bill Saphir: "[OMPI users] mpirun exit status for non-existent executable"</a>
<li><strong>In reply to:</strong> <a href="2845.php">Bill Saphir: "[OMPI users] mpirun exit status for non-existent executable"</a>
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
