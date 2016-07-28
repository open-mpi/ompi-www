<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 17 17:25:47 2007" -->
<!-- isoreceived="20071017212547" -->
<!-- sent="Wed, 17 Oct 2007 17:25:25 -0400" -->
<!-- isosent="20071017212525" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck" -->
<!-- id="B4F817F7-22FB-4BDE-B95F-697D406FEAA7_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4703D463.5020203_at_yahoo.com" -->
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
<strong>Date:</strong> 2007-10-17 17:25:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Previous message:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<li><strong>In reply to:</strong> <a href="4144.php">Daniel Rozenbaum: "[OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Reply:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Can you send a short test program that shows this problem, perchance?
<br>
<p><p>On Oct 3, 2007, at 1:41 PM, Daniel Rozenbaum wrote:
<br>
<p><span class="quotelev1">&gt; Hi again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm trying to debug the problem I posted on several times recently;  
</span><br>
<span class="quotelev1">&gt; I thought I'd try asking a more focused question:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following sequence in the client code:
</span><br>
<span class="quotelev1">&gt; MPI_Status stat;
</span><br>
<span class="quotelev1">&gt; ret = MPI_Probe(0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev1">&gt; assert(ret == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; ret = MPI_Get_elements(&amp;stat, MPI_BYTE, &amp;count);
</span><br>
<span class="quotelev1">&gt; assert(ret == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; char *buffer = malloc(count);
</span><br>
<span class="quotelev1">&gt; assert(buffer != NULL);
</span><br>
<span class="quotelev1">&gt; ret = MPI_Recv((void *)buffer, count, MPI_BYTE, 0, stat.MPI_TAG,  
</span><br>
<span class="quotelev1">&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt; assert(ret == MPI_SUCCESS);
</span><br>
<span class="quotelev1">&gt; fprintf(stderr, &quot;MPI_Recv done\n&quot;);
</span><br>
<span class="quotelev1">&gt; &lt;proceed to taking action on the received buffer, send response to  
</span><br>
<span class="quotelev1">&gt; server&gt;
</span><br>
<span class="quotelev1">&gt; Each MPI_ call in the lines above is surrounded by debug prints  
</span><br>
<span class="quotelev1">&gt; that print out the client's rank, current time, the action about to  
</span><br>
<span class="quotelev1">&gt; be taken with all its parameters' values, and the action's result.  
</span><br>
<span class="quotelev1">&gt; After the first cycle (receive message from server -- process it --  
</span><br>
<span class="quotelev1">&gt; send response -- wait for next message) works out as expected, the  
</span><br>
<span class="quotelev1">&gt; next cycle get stuck in MPI_Recv. What I get in my debug prints is  
</span><br>
<span class="quotelev1">&gt; more or less the following:
</span><br>
<span class="quotelev1">&gt; MPI_Probe(source= 0, tag= MPI_ANY_TAG, comm= MPI_COMM_WORKD,  
</span><br>
<span class="quotelev1">&gt; status= &lt;address1&gt;)
</span><br>
<span class="quotelev1">&gt; MPI_Probe done, source= 0, tag= 2, error= 0
</span><br>
<span class="quotelev1">&gt; MPI_Get_elements(status= &lt;address1&gt;, dtype= MPI_BYTE, count=  
</span><br>
<span class="quotelev1">&gt; &lt;address2&gt;)
</span><br>
<span class="quotelev1">&gt; MPI_Get_elements done, count= 2731776
</span><br>
<span class="quotelev1">&gt; MPI_Recv(buf= &lt;address3&gt;, count= 2731776, dtype= MPI_BYTE, src= 0,  
</span><br>
<span class="quotelev1">&gt; tag= 2, comm= MPI_COMM_WORLD, stat= MPI_STATUS_IGNORE)
</span><br>
<span class="quotelev1">&gt; &lt;nothing beyond this point. Some time afterwards there're &quot;readv  
</span><br>
<span class="quotelev1">&gt; failed&quot; errors in server's stderr&gt;
</span><br>
<span class="quotelev1">&gt; My question then is this - what would cause MPI_Recv to not return,  
</span><br>
<span class="quotelev1">&gt; after the immediately preceding MPI_Probe and MPI_Get_elements  
</span><br>
<span class="quotelev1">&gt; return properly?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Daniel
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
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4237.php">Vittorio Zaccaria: "Re: [OMPI users] OpenMPI + SGE Problem"</a>
<li><strong>Previous message:</strong> <a href="4235.php">Jeff Squyres: "Re: [OMPI users] OMPI not work with Intel '-fast' option"</a>
<li><strong>In reply to:</strong> <a href="4144.php">Daniel Rozenbaum: "[OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Reply:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
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
