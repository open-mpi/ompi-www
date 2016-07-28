<?
$subject_val = "Re: [OMPI users] Proper way to throw an error to all nodes?";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug 18 20:17:33 2008" -->
<!-- isoreceived="20080819001733" -->
<!-- sent="Mon, 18 Aug 2008 20:16:15 -0400" -->
<!-- isosent="20080819001615" -->
<!-- name="Robert Kubrick" -->
<!-- email="robertkubrick_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Proper way to throw an error to all nodes?" -->
<!-- id="DF67CDEC-752D-4583-ABEA-9421547E7B51_at_gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="675EAF83-9D0F-4138-A61E-19677AAB9B6A_at_cisco.com" -->
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
<strong>From:</strong> Robert Kubrick (<em>robertkubrick_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-18 20:16:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
A question related to an old thread:
<br>
in case of solution 2), how do you broadcast 'flags' to the slaves if  
<br>
they're processing asynchronous data? I understand MPI_Bcast is a  
<br>
collective operation requiring all processes in a communicator to  
<br>
call it before it completes. If the slaves are processing a number of  
<br>
data events in a continuous loop, the only solution I see is to send  
<br>
a special exit message from the master through MPI_Send.
<br>
<p>Or is there a non-collective broadcast function I am missing?
<br>
<p>On Jun 4, 2008, at 2:51 PM, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; Yes -- MPI_Abort is the simplest way to get them all to die.  But
</span><br>
<span class="quotelev1">&gt; you'll also get error message(s) from OMPI.  So you have [at least] 2
</span><br>
<span class="quotelev1">&gt; options:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Exit with MPI error
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;    if (rank == process_who_does_the_checking &amp;&amp; !exists(filename)) {
</span><br>
<span class="quotelev1">&gt;       print(&quot;bad!&quot;);
</span><br>
<span class="quotelev1">&gt;       MPI_Abort(MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. Exit with your own error; MPI finalizes cleanly
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;    file_exists = 1;
</span><br>
<span class="quotelev1">&gt;    if (rank == process_who_does_the_checking &amp;&amp; !exists(filename)) {
</span><br>
<span class="quotelev1">&gt;       print(&quot;bad!&quot;);
</span><br>
<span class="quotelev1">&gt;       file_exists = 0;
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt;    MPI_Bcast(&amp;file_exists, 1, MPI_INT, process_who_does_the_checking,
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD);
</span><br>
<span class="quotelev1">&gt;    if (!file_exists) {
</span><br>
<span class="quotelev1">&gt;       MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;       exit(1);
</span><br>
<span class="quotelev1">&gt;    }
</span><br>
<span class="quotelev1">&gt; -----
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There's oodles of variants on this, of course, but you get the general
</span><br>
<span class="quotelev1">&gt; idea.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 3, 2008, at 11:00 PM, David Singleton wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is exactly what MPI_Abort is for.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Terry Frankcombe wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Calling MPI_Finalize in a single process won't ever do what you  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; want.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You need to get all the processes to call MPI_Finalize for the end
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to be
</span><br>
<span class="quotelev3">&gt;&gt;&gt; graceful.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; What you need to do is have some sort of special message to tell
</span><br>
<span class="quotelev3">&gt;&gt;&gt; everyone to die.  In my codes I have a rather dynamic master-slave
</span><br>
<span class="quotelev3">&gt;&gt;&gt; model
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with flags being broadcast by the master process to tell the slaves
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what
</span><br>
<span class="quotelev3">&gt;&gt;&gt; to expect next, so it's easy for me to send out an &quot;it's all over,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; please kill yourself&quot; message.  For a more rigid communication
</span><br>
<span class="quotelev3">&gt;&gt;&gt; pattern
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you could embed the die message in the data: something like if the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; first
</span><br>
<span class="quotelev3">&gt;&gt;&gt; element of the received data is negative, then that's the sign  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; things
</span><br>
<span class="quotelev3">&gt;&gt;&gt; have gone south and everyone should stop what they're doing and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Finalize.  The details depend on the details of your code.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Presumably you could also set something up using tags and message
</span><br>
<span class="quotelev3">&gt;&gt;&gt; polling.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hope this helps.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Tue, 2008-06-03 at 19:57 +0900, 8mj6tc902_at_[hidden] wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So I'm working on this program which has many ways it might
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; possibly die
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; at runtime, but one of them that happens frequently is the user
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; types a
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrong (non-existant) filename on the command prompt. As it is now,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; node looking for the file notices the file doesn't exist and tries
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; to
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; terminate the program. It tries to call MPI_Finalize(), but the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; other
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; nodes are all waiting for a message from the node doing the file
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; reading, so MPI_Finalize waits forever until the user realizes the
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; isn't doing anything and terminates it manually.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; So, my question is: what's the &quot;correct&quot; graceful way to handle
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; situations like this? Is there some MPI function which can  
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; basically
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; throw an exception to all other nodes telling them bail out now?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Or is
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; correct behaviour just to have the node that spotted the error die
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; quietly and wait for the others to notice?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any suggestions!
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
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
<li><strong>Next message:</strong> <a href="6389.php">Andy Georgi: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Previous message:</strong> <a href="6387.php">George Bosilca: "Re: [OMPI users] MPI_ERR_TRUNCATE with MPI_Revc without Infinipath"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2008/06/5812.php">Jeff Squyres: "Re: [OMPI users] Proper way to throw an error to all nodes?"</a>
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
