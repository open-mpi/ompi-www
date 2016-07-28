<?
$subject_val = "Re: [OMPI users] OMPI Connection Retry Policy";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  8 06:29:59 2009" -->
<!-- isoreceived="20090908102959" -->
<!-- sent="Tue, 8 Sep 2009 13:29:51 +0300" -->
<!-- isosent="20090908102951" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] OMPI Connection Retry Policy" -->
<!-- id="D71D3429-13F5-4FAB-B820-2CB2BE592414_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="afc7dbc60909080311u33fc9877rb20735eac277222c_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] OMPI Connection Retry Policy<br>
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-08 06:29:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10587.php">Attila Börcs: "[OMPI users] SVD with mpi"</a>
<li><strong>Previous message:</strong> <a href="10585.php">Charles Salvia: "[OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>In reply to:</strong> <a href="10585.php">Charles Salvia: "[OMPI users] OMPI Connection Retry Policy"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Charles,
<br>
<p>The listen is always posted on each MPI processes. This will fire when  
<br>
a remote is connecting, so we will setup the connection even if you  
<br>
didn't yet posted the receive.
<br>
<p>So, yes the first MPI_Send to each peer will always call connect(). On  
<br>
the remote process, the accept is called automatically, no need for  
<br>
MPI_Recv for this.
<br>
<p>For your second question there is no such answer, as what you describe  
<br>
is not what we do. If the connect fails for any reasons, we will try  
<br>
few times to establish the connection before giving up. However, if  
<br>
this happens (and usually it doesn't) it will only affect the first  
<br>
MPI_Send to each peer.
<br>
<p>I think you're right about the FAQ ;)
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Sep 8, 2009, at 13:11 , Charles Salvia wrote:
<br>
<p><span class="quotelev1">&gt; According to the OpenMPI FAQ, OpenMPI creates point-to-point socket  
</span><br>
<span class="quotelev1">&gt; connections &quot;lazily&quot;, i.e. only when needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have a few questions about this, and how it affect program  
</span><br>
<span class="quotelev1">&gt; performance.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1) Does this mean that MPI_Send will call connect() if necessary,  
</span><br>
<span class="quotelev1">&gt; and MPI_Recv will call accept()?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2) If so, what is the policy for dealing with the race condition  
</span><br>
<span class="quotelev1">&gt; where one process calls connect() before the destination process is  
</span><br>
<span class="quotelev1">&gt; listening with accept()?  Is there a retry interval?  And if so, how  
</span><br>
<span class="quotelev1">&gt; long is the interval and how many times will it retry?  I ask  
</span><br>
<span class="quotelev1">&gt; because I want to know how much of a performance impact this has.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 3) I'm confused as to something the FAQ says regarding this issue.   
</span><br>
<span class="quotelev1">&gt; The OpenMPI FAQ says &quot;Open MPI opens sockets as they are required --  
</span><br>
<span class="quotelev1">&gt; so the first time a process sends a message to a peer and there is a  
</span><br>
<span class="quotelev1">&gt; TCP connection between the two, Open MPI will automatically open a  
</span><br>
<span class="quotelev1">&gt; new socket.&quot;  Shouldn't this read &quot;so the first time a process sends  
</span><br>
<span class="quotelev1">&gt; a message to a peer and there is *NO* TCP connection between the  
</span><br>
<span class="quotelev1">&gt; two&quot;?  Or am I misunderstanding something here?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I appreciate any feed back regarding this issue.
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Charles Salvia
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
<li><strong>Next message:</strong> <a href="10587.php">Attila Börcs: "[OMPI users] SVD with mpi"</a>
<li><strong>Previous message:</strong> <a href="10585.php">Charles Salvia: "[OMPI users] OMPI Connection Retry Policy"</a>
<li><strong>In reply to:</strong> <a href="10585.php">Charles Salvia: "[OMPI users] OMPI Connection Retry Policy"</a>
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
