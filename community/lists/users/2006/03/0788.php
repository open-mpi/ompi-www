<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 16:44:38 2006" -->
<!-- isoreceived="20060306214438" -->
<!-- sent="Mon, 6 Mar 2006 16:44:25 -0500 (EST)" -->
<!-- isosent="20060306214425" -->
<!-- name="Graham E Fagg" -->
<!-- email="fagg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE" -->
<!-- id="Pine.LNX.4.62.0603061635360.4346_at_reliant.cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C031EBE3.9113%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Graham E Fagg (<em>fagg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-06 16:44:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Àµ¿¡½Ü: "[OMPI users] MPI for DSP"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi David
<br>
&nbsp;&nbsp;yep they do (reduce the values to a single location) and in a tree 
<br>
topology it would look something like the following:
<br>
<p><p>proc                   3          4              5           6
<br>
local values           30         40             50          60
<br>
partial sums           -          -              -           -
<br>
<p><p>proc                        1                          2
<br>
local values                10                         20
<br>
partial sums                10+30+40 (80)              20+50+60 (130)
<br>
<p><p>proc                                     0
<br>
local values                             0
<br>
partial sums                             0+80+130 = 210
<br>
<p>result at root (0)                       210
<br>
<p>For in place the value (0) at the root would be in its Send buffer
<br>
<p>The MPI_IN_PLACE option is more important for allreduce as it saves lots 
<br>
of potential local data movement.
<br>
<p>I suggest that you look on the web for a MPI primer or tutorial to gain 
<br>
more understanding.
<br>
<p>G.
<br>
<p><p>On Mon, 6 Mar 2006, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; I'm not quite sure how collective computation calls work. For example, for
</span><br>
<span class="quotelev1">&gt; an MPI_REDUCE with MPI_SUM, do all the processes collect values from all the
</span><br>
<span class="quotelev1">&gt; processes and calculate the sum and put result in recvbuf on root? Sounds
</span><br>
<span class="quotelev1">&gt; strange.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ***** Correspondence *****
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Date: Mon, 6 Mar 2006 13:22:23 -0500
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_IN_PLACE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Generally, yes.  There are some corner cases where we have to
</span><br>
<span class="quotelev2">&gt;&gt; allocate additional buffers, but that's the main/easiest benefit to
</span><br>
<span class="quotelev2">&gt;&gt; describe.  :-)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 6, 2006, at 11:21 AM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jeff,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you for the reply. In other words, MPI_IN_PLACE only
</span><br>
<span class="quotelev3">&gt;&gt;&gt; eliminates data
</span><br>
<span class="quotelev3">&gt;&gt;&gt; movement on root, right?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; David
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ***** Correspondence *****
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Reply-To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Date: Fri, 3 Mar 2006 19:18:52 -0500
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] MPI_IN_PLACE
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Mar 3, 2006, at 6:42 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;       call MPI_REDUCE(mypi,pi,1,MPI_DOUBLE_PRECISION,MPI_SUM,0,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;      &amp;                  MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Can I use MPI_IN_PLACE in the MPI_REDUCE call? If I can, how?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Thanks for any help!
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_IN_PLACE is an MPI-2 construct, and is defined in the MPI-2
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; standard.  Its use in MPI_REDUCE is defined in section 7.3.3:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150">http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; It says:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;The ``in place'' option for intracommunicators is specified by
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; passing the value MPI_IN_PLACE to the argument sendbuf at the root.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In such case, the input data is taken at the root from the receive
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; buffer, where it will be replaced by the output data.&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; In the simple pi example program, it doesn't make much sense to use
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; MPI_IN_PLACE except as an example to see how it is used (i.e., it
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; won't gain much in terms of efficiency because you're only dealing
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; with a single MPI_DOUBLE_PRECISION).  But you would want to put an
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;if&quot; statement around the call to MPI_REDUCE and pass MPI_IN_PLACE as
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the first argument, and mypi as the second argument for the root.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; For all other processes, use the same MPI_REDUCE that you're using
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; now.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; {+} Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; {+} The Open MPI Project
</span><br>
<span class="quotelev2">&gt;&gt; {+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
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
<span class="quotelev1">&gt;
</span><br>
<p><p>Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graham.
<br>
----------------------------------------------------------------------
<br>
Dr Graham E. Fagg       | Distributed, Parallel and Meta-Computing
<br>
Innovative Computing Lab. PVM3.4, HARNESS, FT-MPI, SNIPE &amp; Open MPI
<br>
Computer Science Dept   | Suite 203, 1122 Volunteer Blvd,
<br>
University of Tennessee | Knoxville, Tennessee, USA. TN 37996-3450
<br>
Email: fagg_at_[hidden]  | Phone:+1(865)974-5790 | Fax:+1(865)974-8296
<br>
Broken complex systems are always derived from working simple systems
<br>
----------------------------------------------------------------------
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0789.php">Àµ¿¡½Ü: "[OMPI users] MPI for DSP"</a>
<li><strong>Previous message:</strong> <a href="0787.php">Jeff Squyres: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
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
