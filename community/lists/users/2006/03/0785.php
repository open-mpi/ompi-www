<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Mar  6 13:22:33 2006" -->
<!-- isoreceived="20060306182233" -->
<!-- sent="Mon, 6 Mar 2006 13:22:23 -0500" -->
<!-- isosent="20060306182223" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_IN_PLACE" -->
<!-- id="DB29D881-C06F-4016-B917-F07ED67B1CF1_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="C031AF8B.9100%xyang_at_lanl.gov" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-03-06 13:22:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Generally, yes.  There are some corner cases where we have to  
<br>
allocate additional buffers, but that's the main/easiest benefit to  
<br>
describe.  :-)
<br>
<p><p>On Mar 6, 2006, at 11:21 AM, Xiaoning (David) Yang wrote:
<br>
<p><span class="quotelev1">&gt; Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thank you for the reply. In other words, MPI_IN_PLACE only  
</span><br>
<span class="quotelev1">&gt; eliminates data
</span><br>
<span class="quotelev1">&gt; movement on root, right?
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
<span class="quotelev2">&gt;&gt; Date: Fri, 3 Mar 2006 19:18:52 -0500
</span><br>
<span class="quotelev2">&gt;&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subject: Re: [OMPI users] MPI_IN_PLACE
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 3, 2006, at 6:42 PM, Xiaoning (David) Yang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;       call MPI_REDUCE(mypi,pi,1,MPI_DOUBLE_PRECISION,MPI_SUM,0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      &amp;                  MPI_COMM_WORLD,ierr)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Can I use MPI_IN_PLACE in the MPI_REDUCE call? If I can, how?
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks for any help!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; MPI_IN_PLACE is an MPI-2 construct, and is defined in the MPI-2
</span><br>
<span class="quotelev2">&gt;&gt; standard.  Its use in MPI_REDUCE is defined in section 7.3.3:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150">http://www.mpi-forum.org/docs/mpi-20-html/node150.htm#Node150</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; It says:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; &quot;The ``in place'' option for intracommunicators is specified by
</span><br>
<span class="quotelev2">&gt;&gt; passing the value MPI_IN_PLACE to the argument sendbuf at the root.
</span><br>
<span class="quotelev2">&gt;&gt; In such case, the input data is taken at the root from the receive
</span><br>
<span class="quotelev2">&gt;&gt; buffer, where it will be replaced by the output data.&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; In the simple pi example program, it doesn't make much sense to use
</span><br>
<span class="quotelev2">&gt;&gt; MPI_IN_PLACE except as an example to see how it is used (i.e., it
</span><br>
<span class="quotelev2">&gt;&gt; won't gain much in terms of efficiency because you're only dealing
</span><br>
<span class="quotelev2">&gt;&gt; with a single MPI_DOUBLE_PRECISION).  But you would want to put an
</span><br>
<span class="quotelev2">&gt;&gt; &quot;if&quot; statement around the call to MPI_REDUCE and pass MPI_IN_PLACE as
</span><br>
<span class="quotelev2">&gt;&gt; the first argument, and mypi as the second argument for the root.
</span><br>
<span class="quotelev2">&gt;&gt; For all other processes, use the same MPI_REDUCE that you're using  
</span><br>
<span class="quotelev2">&gt;&gt; now.
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
<p><p><pre>
-- 
{+} Jeff Squyres
{+} The Open MPI Project
{+} <a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Previous message:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>In reply to:</strong> <a href="0784.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
<li><strong>Reply:</strong> <a href="0786.php">Xiaoning (David) Yang: "Re: [OMPI users] MPI_IN_PLACE"</a>
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
