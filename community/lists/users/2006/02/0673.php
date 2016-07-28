<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Feb 19 11:26:06 2006" -->
<!-- isoreceived="20060219162606" -->
<!-- sent="Sun, 19 Feb 2006 11:26:02 -0500" -->
<!-- isosent="20060219162602" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Recv question" -->
<!-- id="03BBBB27-BD6E-4FC7-AA5A-0E31C3B2A9E9_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="BAY112-F3751D4C30FF60739F8FF5B9EFB0_at_phx.gbl" -->
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
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-02-19 11:26:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0674.php">Michael Creel: "[OMPI users] openMPI 1.0.1 on parallelknoppix"</a>
<li><strong>Previous message:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<li><strong>In reply to:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Abhishek,
<br>
<p>What you are trying to do is not exactly supported by the MPI  
<br>
standard. If a process in a MPI communicator is killed (by a node  
<br>
failure, 'kill' command, segmentation fault, or other unexpected  
<br>
failure) and you are blocking on a MPI call, you are not always  
<br>
guaranteed to receive an error. So in the case you cite:
<br>
<p><span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; val = MPI_Recv(&amp;ans, 1, MPI_DOUBLE, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt;                                        newcomm[i], &amp;stat[i]);
</span><br>
<span class="quotelev1">&gt;       if (val != MPI_SUCCESS )
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Manager: error in Recv\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<p>You are using MPI_ANY_SOURCE and MPI_ANY_TAG, so it is reasonable for  
<br>
the MPI_RECV to continue blocking, since we could receive a message  
<br>
from another process in the communicator.
<br>
<p>Since fault tolerance is not in the MPI standard, when a process  
<br>
exits unexpectedly the state of the MPI library is undefined by the  
<br>
standard. Some MPI implementations will not allow you to call back  
<br>
into them, others will allow you to with very limited functionality  
<br>
(you may be able to only call MPI_FINALIZE), and others will allow  
<br>
you to use it with no limitations.
<br>
<p>There are implementations of MPI that allow for various degrees of  
<br>
process fault tolerance (many of them are active contributors to the  
<br>
Open MPI project). For instance, the FT-MPI style of fault tolerance  
<br>
(<a href="http://icl.cs.utk.edu/ftmpi/">http://icl.cs.utk.edu/ftmpi/</a>) allows an MPI program to continue  
<br>
execution even if one process in the communicator fails. We are  
<br>
working on integrating this style (and a few other styles) of fault  
<br>
tolerance into Open MPI.
<br>
<p>There is another model of fault tolerance in which you would use  
<br>
MPI_COMM_SPAWN to dynamically create communication groups and use  
<br>
those communicators for a form of process fault tolerance. William  
<br>
Gropp and Ewing Lusk wrote a good description of this in their 2004  
<br>
paper &quot;Fault Tolerance in Message Passing Interface Programs&quot; (http:// 
<br>
dx.doi.org/10.1177/1094342004046045), if you are interested in  
<br>
pursuing this type of program.
<br>
<p><p>So in short, MPI_Recv is behaving as it should in this situation  
<br>
since it could be waiting for other processes in the communication  
<br>
group to send a message. If you need to support program continuation  
<br>
even in the face of single process failures take a look at the  
<br>
dynamic process manager-worker model or you might explore FT-MPI's  
<br>
API for dealing with process loss in a communication group.
<br>
<p>I hope this helps, good luck!
<br>
<p>Josh
<br>
<p><p>On Feb 16, 2006, at 10:11 AM, Abhishek Agarwal wrote:
<br>
<p><span class="quotelev1">&gt; Hello All,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to use the MPI_Recv of the open-mpi, but met some  
</span><br>
<span class="quotelev1">&gt; problems with
</span><br>
<span class="quotelev1">&gt; MPI_Recv.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have two processes in master slave mode and I killed the slave  
</span><br>
<span class="quotelev1">&gt; process but
</span><br>
<span class="quotelev1">&gt; my MPI_Recv process is still waiting to get a response from slave  
</span><br>
<span class="quotelev1">&gt; and never
</span><br>
<span class="quotelev1">&gt; times out with any error. I am checking the MPI_SUCCESS but it  
</span><br>
<span class="quotelev1">&gt; seems to wait
</span><br>
<span class="quotelev1">&gt; for ever and hence the program hangs.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am attaching the secition of code which i have used in my program.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt; val = MPI_Recv(&amp;ans, 1, MPI_DOUBLE, MPI_ANY_SOURCE, MPI_ANY_TAG,
</span><br>
<span class="quotelev1">&gt;                                        newcomm[i], &amp;stat[i]);
</span><br>
<span class="quotelev1">&gt;       if (val != MPI_SUCCESS )
</span><br>
<span class="quotelev1">&gt;         printf(&quot;Manager: error in Recv\n&quot;);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any advice?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Abhishek Agarwal
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
<p><pre>
----
Josh Hursey
jjhursey_at_[hidden]
<a href="http://www.open-mpi.org/">http://www.open-mpi.org/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0674.php">Michael Creel: "[OMPI users] openMPI 1.0.1 on parallelknoppix"</a>
<li><strong>Previous message:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
<li><strong>In reply to:</strong> <a href="0672.php">Abhishek Agarwal: "[OMPI users] MPI_Recv question"</a>
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
