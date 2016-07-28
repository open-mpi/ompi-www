<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 11:04:51 2007" -->
<!-- isoreceived="20070404150451" -->
<!-- sent="Wed, 4 Apr 2007 11:03:53 -0400" -->
<!-- isosent="20070404150353" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???" -->
<!-- id="027839DA-FE53-43EA-BC53-0F5C5838568B_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="f869b68c0704040736q33bd0453t74c0fcbcd8a0637_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-04 11:03:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Previous message:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>In reply to:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 4, 2007, at 10:36 AM, Durga Choudhury wrote:
<br>
<p><span class="quotelev1">&gt; Even simpler, you could just write a macro wrapper around MPI_Send  
</span><br>
<span class="quotelev1">&gt; (as opposed to C code). However, if your calls are happening inside  
</span><br>
<span class="quotelev1">&gt; a precompiled library (and you don't have source code for it or  
</span><br>
<span class="quotelev1">&gt; don't want to recompile it) then this won't work and you'd want a  
</span><br>
<span class="quotelev1">&gt; real profiler. However, I don't think you should be tracking PMPI_*  
</span><br>
<span class="quotelev1">&gt; calls anyway; those are implementatiopn details and not user  
</span><br>
<span class="quotelev1">&gt; exposed APIs. Am I right, Jeff?
</span><br>
<p>PMPI_Foo is what you are supposed to call inside the profiled MPI_Foo  
<br>
function.
<br>
<p>The intent of the PMPI interface is that it always exists and will  
<br>
represent the &quot;real&quot;/back-end functionality.  So you can provide your  
<br>
own MPI_Foo function that turns around and calls the &quot;real&quot; PMPI_Foo  
<br>
function.
<br>
<p><span class="quotelev1">&gt; Durga
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 4/4/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote: On Apr 4, 2007,  
</span><br>
<span class="quotelev1">&gt; at 11:12 AM, pooja_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; I want to see how profiling is done .I need to track open mpi _send
</span><br>
<span class="quotelev2">&gt; &gt; command.
</span><br>
<span class="quotelev2">&gt; &gt; And so need to see how profiling is done.I dont know how to use
</span><br>
<span class="quotelev2">&gt; &gt; PMPI_SEND.
</span><br>
<span class="quotelev2">&gt; &gt; Can anybody help me???
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Generally, you just write an MPI_Send function yourself, like this:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; my_send.c:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; include &quot;mpi.h&quot;
</span><br>
<span class="quotelev1">&gt; int MPI_Send(void *buf, int count, MPI_Datatype type, int dest,
</span><br>
<span class="quotelev1">&gt;              int tag, MPI_Comm comm) {
</span><br>
<span class="quotelev1">&gt;   int ret;
</span><br>
<span class="quotelev1">&gt;   /* ...gather whatever statistics you want ... */
</span><br>
<span class="quotelev1">&gt;   ret = PMPI_Send(buf, count, type, dest, tag, comm);
</span><br>
<span class="quotelev1">&gt;   /* ...gather whatever statistics you want ... */
</span><br>
<span class="quotelev1">&gt;   return ret;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Then compile my_send.c into your application (either as a standalone
</span><br>
<span class="quotelev1">&gt; library or as part of the application itself).  It'll naturally
</span><br>
<span class="quotelev1">&gt; intercept all calls to MPI_Send (as long as it is the rightmost
</span><br>
<span class="quotelev1">&gt; linker unit before -lmpi on the command line -- so, when using the
</span><br>
<span class="quotelev1">&gt; wrapper compilers, the last linker unit on the right, since &quot;-lmpi&quot;
</span><br>
<span class="quotelev1">&gt; is added automatically by the wrapper compilers), do your stats
</span><br>
<span class="quotelev1">&gt; gathering, invoke the back-end PMPI function, etc.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; See chapter 8 of the MPI-1 standard for more information:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.mpi-forum.org/docs/mpi-11-html/node152.html#Node152">http://www.mpi-forum.org/docs/mpi-11-html/node152.html#Node152</a>
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Its a battle between humans and communists;
</span><br>
<span class="quotelev1">&gt; Which side are you in?
</span><br>
<span class="quotelev1">&gt; .
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
<li><strong>Next message:</strong> <a href="3017.php">Eric Thibodeau: "[OMPI users] &quot;Address not mapped&quot; error on user defined MPI_OP function"</a>
<li><strong>Previous message:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>In reply to:</strong> <a href="3015.php">Durga Choudhury: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3005.php">Tim Mattox: "Re: [OMPI users] [Re: Memory leak in openmpi-1.2?]"</a>
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
