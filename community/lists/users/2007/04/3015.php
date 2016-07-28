<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr  4 10:36:06 2007" -->
<!-- isoreceived="20070404143606" -->
<!-- sent="Wed, 4 Apr 2007 10:36:00 -0400" -->
<!-- isosent="20070404143600" -->
<!-- name="Durga Choudhury" -->
<!-- email="dpchoudh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???" -->
<!-- id="f869b68c0704040736q33bd0453t74c0fcbcd8a0637_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="15B77F97-1D9B-4120-98CF-E5BC17EF5BE6_at_cisco.com" -->
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
<strong>From:</strong> Durga Choudhury (<em>dpchoudh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-04 10:36:00
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Previous message:</strong> <a href="3014.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>In reply to:</strong> <a href="3014.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Reply:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Even simpler, you could just write a macro wrapper around MPI_Send (as
<br>
opposed to C code). However, if your calls are happening inside a
<br>
precompiled library (and you don't have source code for it or don't want to
<br>
recompile it) then this won't work and you'd want a real profiler. However,
<br>
I don't think you should be tracking PMPI_* calls anyway; those are
<br>
implementatiopn details and not user exposed APIs. Am I right, Jeff?
<br>
Durga
<br>
<p><p>On 4/4/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Apr 4, 2007, at 11:12 AM, pooja_at_[hidden] wrote:
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
<span class="quotelev1">&gt;     <a href="http://www.mpi-forum.org/docs/mpi-11-html/node152.html#Node152">http://www.mpi-forum.org/docs/mpi-11-html/node152.html#Node152</a>
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
<p><p><p><pre>
-- 
Its a battle between humans and communists;
Which side are you in?
.
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3015/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Previous message:</strong> <a href="3014.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>In reply to:</strong> <a href="3014.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
<li><strong>Reply:</strong> <a href="3016.php">Jeff Squyres: "Re: [OMPI users] Hi!! Can anybody tell me how to use open mpi profiling PMPI???"</a>
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
