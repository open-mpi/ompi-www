<?
$subject_val = "Re: [OMPI users] OMPI vs. network socket communcation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon May  2 11:56:18 2011" -->
<!-- isoreceived="20110502155618" -->
<!-- sent="Mon, 02 May 2011 11:58:33 -0400" -->
<!-- isosent="20110502155833" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI vs. network socket communcation" -->
<!-- id="4DBED4A9.2020905_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="SNT134-w528E852A7A611085A3B00ACB9F0_at_phx.gbl" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI vs. network socket communcation<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-02 11:58:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16410.php">Robert Walters: "[OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16408.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>In reply to:</strong> <a href="16408.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/02/2011 11:30 AM, Jack Bryan wrote:
<br>
<span class="quotelev1">&gt; Thanks for your reply.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI is for academic purpose. How about business applications ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
There are quite a bit of non-academic MPI applications.  For example 
<br>
there are quite a bit of simulation codes from different vendors that 
<br>
support MPI (Nastran is one common one).
<br>
<span class="quotelev1">&gt; What kinds of parallel/distributed computing environment do the 
</span><br>
<span class="quotelev1">&gt; financial institutions
</span><br>
<span class="quotelev1">&gt; use for their high frequency trading ?
</span><br>
I personally know of a private trading shop that uses MPI, but that's as 
<br>
much as I can say.  I am not sure how common it is, however the direct 
<br>
communications to the trading servers is still via sockets or something 
<br>
similar as opposed to MPI.
<br>
<p>--td
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help is really appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; Date: Mon, 2 May 2011 08:34:33 -0400
</span><br>
<span class="quotelev1">&gt; From: terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt; To: users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] OMPI vs. network socket communcation
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/30/2011 08:52 PM, Jack Bryan wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi, All:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     What is the relationship between MPI communication and socket
</span><br>
<span class="quotelev1">&gt;     communication ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI may use socket communications to do communications between two 
</span><br>
<span class="quotelev1">&gt; processes.  Aside from that they are used for different purposes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Is the network socket programming better than MPI ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Depends on what you are trying to do.  If you are writing a parallel 
</span><br>
<span class="quotelev1">&gt; program that may run in multiple environments with different types of 
</span><br>
<span class="quotelev1">&gt; performing protocols available for its use then MPI is probably 
</span><br>
<span class="quotelev1">&gt; better.  If you are looking to do simple client/server type 
</span><br>
<span class="quotelev1">&gt; programming then socket program might have an advantage.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am a newbie of network socket programming.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I do not know which one is better for parallel/distributed
</span><br>
<span class="quotelev1">&gt;     computing ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; IMO MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I know that network socket is unix-based file communication
</span><br>
<span class="quotelev1">&gt;     between server and client.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     If they can also be used for parallel computing, how MPI can work
</span><br>
<span class="quotelev1">&gt;     better than them ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There is a lot of stuff that MPI does behind the curtain to make a 
</span><br>
<span class="quotelev1">&gt; parallel applications life a lot easier.  As far as performance MPI 
</span><br>
<span class="quotelev1">&gt; will not perform better than sockets if it is using sockets as the 
</span><br>
<span class="quotelev1">&gt; underlying model.  However, the performance difference should be 
</span><br>
<span class="quotelev1">&gt; negligible which makes all the other stuff MPI does for you a big win.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I know MPI is for homogeneous cluster system and network socket is
</span><br>
<span class="quotelev1">&gt;     based on internet TCP/IP.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; What do you mean by homogeneous cluster?  There are some MPIs that can 
</span><br>
<span class="quotelev1">&gt; work among different platforms and even different OSes (though some 
</span><br>
<span class="quotelev1">&gt; initial setup may be necessary).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope this helps,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Oracle
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt; Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt; 95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________ users mailing list 
</span><br>
<span class="quotelev1">&gt; users_at_[hidden] <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16409/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16409/02-part" alt="picture">
<!-- attachment="02-part" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16409/03-part" alt="picture">
<!-- attachment="03-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16410.php">Robert Walters: "[OMPI users] OpenMPI LS-DYNA Connection refused"</a>
<li><strong>Previous message:</strong> <a href="16408.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
<li><strong>In reply to:</strong> <a href="16408.php">Jack Bryan: "Re: [OMPI users] OMPI vs. network socket communcation"</a>
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
