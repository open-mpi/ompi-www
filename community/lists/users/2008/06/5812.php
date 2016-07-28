<?
$subject_val = "Re: [OMPI users] Proper way to throw an error to all nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jun  4 14:51:26 2008" -->
<!-- isoreceived="20080604185126" -->
<!-- sent="Wed, 4 Jun 2008 14:51:13 -0400" -->
<!-- isosent="20080604185113" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to throw an error to all nodes?" -->
<!-- id="675EAF83-9D0F-4138-A61E-19677AAB9B6A_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="48460531.1070109_at_anu.edu.au" -->
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
<strong>Subject:</strong> Re: [OMPI users] Proper way to throw an error to all nodes?<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-06-04 14:51:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5785.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6388.php">Robert Kubrick: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6388.php">Robert Kubrick: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes -- MPI_Abort is the simplest way to get them all to die.  But  
<br>
you'll also get error message(s) from OMPI.  So you have [at least] 2  
<br>
options:
<br>
<p>1. Exit with MPI error
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;if (rank == process_who_does_the_checking &amp;&amp; !exists(filename)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;bad!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Abort(MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
-----
<br>
<p>2. Exit with your own error; MPI finalizes cleanly
<br>
<p>-----
<br>
&nbsp;&nbsp;&nbsp;file_exists = 1;
<br>
&nbsp;&nbsp;&nbsp;if (rank == process_who_does_the_checking &amp;&amp; !exists(filename)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;print(&quot;bad!&quot;);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file_exists = 0;
<br>
&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;MPI_Bcast(&amp;file_exists, 1, MPI_INT, process_who_does_the_checking,  
<br>
MPI_COMM_WORLD);
<br>
&nbsp;&nbsp;&nbsp;if (!file_exists) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;exit(1);
<br>
&nbsp;&nbsp;&nbsp;}
<br>
-----
<br>
<p>There's oodles of variants on this, of course, but you get the general  
<br>
idea.
<br>
<p><p><p>On Jun 3, 2008, at 11:00 PM, David Singleton wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; This is exactly what MPI_Abort is for.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Calling MPI_Finalize in a single process won't ever do what you want.
</span><br>
<span class="quotelev2">&gt;&gt; You need to get all the processes to call MPI_Finalize for the end  
</span><br>
<span class="quotelev2">&gt;&gt; to be
</span><br>
<span class="quotelev2">&gt;&gt; graceful.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; What you need to do is have some sort of special message to tell
</span><br>
<span class="quotelev2">&gt;&gt; everyone to die.  In my codes I have a rather dynamic master-slave  
</span><br>
<span class="quotelev2">&gt;&gt; model
</span><br>
<span class="quotelev2">&gt;&gt; with flags being broadcast by the master process to tell the slaves  
</span><br>
<span class="quotelev2">&gt;&gt; what
</span><br>
<span class="quotelev2">&gt;&gt; to expect next, so it's easy for me to send out an &quot;it's all over,
</span><br>
<span class="quotelev2">&gt;&gt; please kill yourself&quot; message.  For a more rigid communication  
</span><br>
<span class="quotelev2">&gt;&gt; pattern
</span><br>
<span class="quotelev2">&gt;&gt; you could embed the die message in the data: something like if the  
</span><br>
<span class="quotelev2">&gt;&gt; first
</span><br>
<span class="quotelev2">&gt;&gt; element of the received data is negative, then that's the sign things
</span><br>
<span class="quotelev2">&gt;&gt; have gone south and everyone should stop what they're doing and
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Finalize.  The details depend on the details of your code.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Presumably you could also set something up using tags and message
</span><br>
<span class="quotelev2">&gt;&gt; polling.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hope this helps.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Tue, 2008-06-03 at 19:57 +0900, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So I'm working on this program which has many ways it might  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; possibly die
</span><br>
<span class="quotelev3">&gt;&gt;&gt; at runtime, but one of them that happens frequently is the user  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; types a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; wrong (non-existant) filename on the command prompt. As it is now,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; node looking for the file notices the file doesn't exist and tries  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; terminate the program. It tries to call MPI_Finalize(), but the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; other
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nodes are all waiting for a message from the node doing the file
</span><br>
<span class="quotelev3">&gt;&gt;&gt; reading, so MPI_Finalize waits forever until the user realizes the  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job
</span><br>
<span class="quotelev3">&gt;&gt;&gt; isn't doing anything and terminates it manually.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; So, my question is: what's the &quot;correct&quot; graceful way to handle
</span><br>
<span class="quotelev3">&gt;&gt;&gt; situations like this? Is there some MPI function which can basically
</span><br>
<span class="quotelev3">&gt;&gt;&gt; throw an exception to all other nodes telling them bail out now?  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Or is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; correct behaviour just to have the node that spotted the error die
</span><br>
<span class="quotelev3">&gt;&gt;&gt; quietly and wait for the others to notice?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any suggestions!
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
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5813.php">Jeff Squyres: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>Previous message:</strong> <a href="5811.php">Scott Shaw: "Re: [OMPI users] OpenMPI scaling &gt; 512 cores"</a>
<li><strong>In reply to:</strong> <a href="5785.php">David Singleton: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6388.php">Robert Kubrick: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/08/6388.php">Robert Kubrick: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
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
