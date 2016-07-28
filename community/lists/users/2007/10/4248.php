<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Oct 18 14:07:33 2007" -->
<!-- isoreceived="20071018180733" -->
<!-- sent="Thu, 18 Oct 2007 14:06:24 -0400" -->
<!-- isosent="20071018180624" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck" -->
<!-- id="D88C32AE-E48B-4DA7-A9EE-1FB9795FC410_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="47178B3C.3040708_at_yahoo.com" -->
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
<strong>Date:</strong> 2007-10-18 14:06:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4247.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Reply:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Yes, that's the normal progression.  For some reason, OMPI appears to  
<br>
have decided that it had not yet received the message.  Perhaps a  
<br>
memory bug in your application...?  Have you run it through valgrind,  
<br>
or some other memory-checking debugger, perchance?
<br>
<p>On Oct 18, 2007, at 12:35 PM, Daniel Rozenbaum wrote:
<br>
<p><span class="quotelev1">&gt; Unfortunately, so far I haven't even been able to reproduce it on a
</span><br>
<span class="quotelev1">&gt; different cluster. Since I had no success getting to the bottom of  
</span><br>
<span class="quotelev1">&gt; this
</span><br>
<span class="quotelev1">&gt; problem, I've been concentrating my efforts on changing the app so  
</span><br>
<span class="quotelev1">&gt; that
</span><br>
<span class="quotelev1">&gt; there's no need to send very large messages; I might be able to find
</span><br>
<span class="quotelev1">&gt; time later to create a short example that shows the problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; FWIW, when I was debugging it, I peeked a little into Open MPI  
</span><br>
<span class="quotelev1">&gt; code, and
</span><br>
<span class="quotelev1">&gt; found that the client's MPI_Recv gets stuck in mca_pml_ob1_recv(),  
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev1">&gt; it determines that &quot;recvreq- 
</span><br>
<span class="quotelev2">&gt; &gt;req_recv.req_base.req_ompi.req_complete ==
</span><br>
<span class="quotelev1">&gt; false&quot; and calls opal_condition_wait().
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Jeff Squyres wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you send a short test program that shows this problem, perchance?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 3, 2007, at 1:41 PM, Daniel Rozenbaum wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi again,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm trying to debug the problem I posted on several times recently;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I thought I'd try asking a more focused question:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I have the following sequence in the client code:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Status stat;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ret = MPI_Probe(0, MPI_ANY_TAG, MPI_COMM_WORLD, &amp;stat);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(ret == MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ret = MPI_Get_elements(&amp;stat, MPI_BYTE, &amp;count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(ret == MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; char *buffer = malloc(count);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(buffer != NULL);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ret = MPI_Recv((void *)buffer, count, MPI_BYTE, 0, stat.MPI_TAG,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_COMM_WORLD, MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; assert(ret == MPI_SUCCESS);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; fprintf(stderr, &quot;MPI_Recv done\n&quot;);
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;proceed to taking action on the received buffer, send response to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; server&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Each MPI_ call in the lines above is surrounded by debug prints
</span><br>
<span class="quotelev3">&gt;&gt;&gt; that print out the client's rank, current time, the action about to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; be taken with all its parameters' values, and the action's result.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; After the first cycle (receive message from server -- process it --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; send response -- wait for next message) works out as expected, the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; next cycle get stuck in MPI_Recv. What I get in my debug prints is
</span><br>
<span class="quotelev3">&gt;&gt;&gt; more or less the following:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Probe(source= 0, tag= MPI_ANY_TAG, comm= MPI_COMM_WORKD,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; status= &lt;address1&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Probe done, source= 0, tag= 2, error= 0
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Get_elements(status= &lt;address1&gt;, dtype= MPI_BYTE, count=
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;address2&gt;)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Get_elements done, count= 2731776
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_Recv(buf= &lt;address3&gt;, count= 2731776, dtype= MPI_BYTE, src= 0,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tag= 2, comm= MPI_COMM_WORLD, stat= MPI_STATUS_IGNORE)
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;nothing beyond this point. Some time afterwards there're &quot;readv
</span><br>
<span class="quotelev3">&gt;&gt;&gt; failed&quot; errors in server's stderr&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; My question then is this - what would cause MPI_Recv to not return,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; after the immediately preceding MPI_Probe and MPI_Get_elements
</span><br>
<span class="quotelev3">&gt;&gt;&gt; return properly?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Daniel
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
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
<li><strong>Next message:</strong> <a href="4249.php">Jeff Squyres: "Re: [OMPI users] which alternative to OpenMPI should I choose?"</a>
<li><strong>Previous message:</strong> <a href="4247.php">Jeff Squyres: "Re: [OMPI users] Compiling OpenMPI for i386 on a x86_64"</a>
<li><strong>In reply to:</strong> <a href="4245.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
<li><strong>Reply:</strong> <a href="4250.php">Daniel Rozenbaum: "Re: [OMPI users] MPI_Probe succeeds, but subsequent MPI_Recv gets stuck"</a>
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
