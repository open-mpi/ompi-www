<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 15:38:46 2006" -->
<!-- isoreceived="20060306203846" -->
<!-- sent="Mon, 06 Mar 2006 13:38:43 -0700" -->
<!-- isosent="20060306203843" -->
<!-- name="Xiaoning (David) Yang" -->
<!-- email="xyang_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE" -->
<!-- id="C031EBE3.9113%xyang_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="DB29D881-C06F-4016-B917-F07ED67B1CF1_at_open-mpi.org" -->
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
<strong>From:</strong> Xiaoning (David) Yang (<em>xyang_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-06 15:38:43
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0785.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0785.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0788.php">Graham E Fagg: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not quite sure how collective computation calls work. For example, for
<br>
an MPI_REDUCE with MPI_SUM, do all the processes collect values from all the
<br>
processes and calculate the sum and put result in recvbuf on root? Sounds
<br>
strange.
<br>
<p>David
<br>
<p>***** Correspondence *****
<br>
<p><p><p><span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Date: Mon, 6 Mar 2006 13:22:23 -0500
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] MPI_IN_PLACE
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Generally, yes.  There are some corner cases where we have to
</span><br>
<span class="quotelev1">&gt; allocate additional buffers, but that's the main/easiest benefit to
</span><br>
<span class="quotelev1">&gt; describe.  :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 6, 2006, at 11:21 AM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Jeff,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for the reply. In other words, MPI_IN_PLACE only
</span><br>
<span class="quotelev2">&gt;&gt; eliminates data
</span><br>
<span class="quotelev2">&gt;&gt; movement on root, right?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; David
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ***** Correspondence *****
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Date: Fri, 3 Mar 2006 19:18:52 -0500
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subject: Re: [OMPI users] MPI_IN_PLACE
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Mar 3, 2006, at 6:42 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;       call MPI_REDUCE(mypi,pi,1,MPI_DOUBLE_PRECISION,MPI_SUM,0,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;      &amp;                  MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Can I use MPI_IN_PLACE in the MPI_REDUCE call? If I can, how?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks for any help!
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_IN_PLACE is an MPI-2 construct, and is defined in the MPI-2
</span><br>
<span class="quotelev3">&gt;&gt;&gt; standard.  Its use in MPI_REDUCE is defined in section 7.3.3:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150">http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; It says:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;The ``in place'' option for intracommunicators is specified by
</span><br>
<span class="quotelev3">&gt;&gt;&gt; passing the value MPI_IN_PLACE to the argument sendbuf at the root.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In such case, the input data is taken at the root from the receive
</span><br>
<span class="quotelev3">&gt;&gt;&gt; buffer, where it will be replaced by the output data.&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; In the simple pi example program, it doesn't make much sense to use
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_IN_PLACE except as an example to see how it is used (i.e., it
</span><br>
<span class="quotelev3">&gt;&gt;&gt; won't gain much in terms of efficiency because you're only dealing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a single MPI_DOUBLE_PRECISION).  But you would want to put an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;if&quot; statement around the call to MPI_REDUCE and pass MPI_IN_PLACE as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the first argument, and mypi as the second argument for the root.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; For all other processes, use the same MPI_REDUCE that you're using
</span><br>
<span class="quotelev3">&gt;&gt;&gt; now.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; -- 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev3">&gt;&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev1">&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev1">&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<li><strong>Next message:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0785.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0785.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0788.php">Graham E Fagg: "Re: [OMPI users] MPI_IN_PLACE"</a>
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
