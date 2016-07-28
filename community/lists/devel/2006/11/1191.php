<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Nov 20 20:43:33 2006" -->
<!-- isoreceived="20061121014333" -->
<!-- sent="Mon, 20 Nov 2006 20:43:21 -0500" -->
<!-- isosent="20061121014321" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] MPI_ERR_TRUNCATE" -->
<!-- id="3DA02D32-666C-428C-8215-1486296C7A19_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="dda319300611201119j872ea61mc6ef4b480951a508_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2006-11-20 20:43:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1192.php">Brian W Barrett: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1190.php">Miquel Dotcom: "[OMPI devel] MPI_ERR_TRUNCATE"</a>
<li><strong>In reply to:</strong> <a href="1190.php">Miquel Dotcom: "[OMPI devel] MPI_ERR_TRUNCATE"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
What this error means is that you tried to send more data than you  
<br>
tried to receive.  Specifically, you sent N bytes and tried to  
<br>
receive M, where M&lt;N.  MPI does not allow that.
<br>
<p>As for the max size of messages that you can send, there are few  
<br>
limits other than the amount of memory that you can allocate to a  
<br>
single process.  Theoretically, you can send as large a message as  
<br>
you can have a buffer in your process (assuming that there's some  
<br>
memory left over for Open MPI's internal state and buffering).  Open  
<br>
MPI sends large messages in fragments, so in the common case, we only  
<br>
need to be able to have a bunch of fragments allocated at any time in  
<br>
order to keep the network busy.
<br>
<p><p>On Nov 20, 2006, at 2:19 PM, Miquel Dotcom wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt; I'm using openMPI for a paralelization of a fortran90 code. I came  
</span><br>
<span class="quotelev1">&gt; accross an error - when I try to send a matrix 400x450 of real*8  
</span><br>
<span class="quotelev1">&gt; (double) I get following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [masada:05620] *** An error occurred in MPI_Recv
</span><br>
<span class="quotelev1">&gt; [masada:05620] *** on communicator MPI_COMM_WORLD
</span><br>
<span class="quotelev1">&gt; [masada:05620] *** MPI_ERR_TRUNCATE: message truncated
</span><br>
<span class="quotelev1">&gt; [masada:05620] *** MPI_ERRORS_ARE_FATAL (goodbye)
</span><br>
<span class="quotelev1">&gt; forrtl: error (78): process killed (SIGTERM)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I understand that the amount of data that can be send by one  
</span><br>
<span class="quotelev1">&gt; MPI_SEND call is somehow limited - what is this limitation? can it  
</span><br>
<span class="quotelev1">&gt; be somehow augmented?
</span><br>
<span class="quotelev1">&gt;                                                                        
</span><br>
<span class="quotelev1">&gt;  best regards,
</span><br>
<span class="quotelev1">&gt;                                                                        
</span><br>
<span class="quotelev1">&gt;                        Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Visca Paisos Catalans!
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Server Virtualization Business Unit
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1192.php">Brian W Barrett: "Re: [OMPI devel] Building OpenMPI on windows"</a>
<li><strong>Previous message:</strong> <a href="1190.php">Miquel Dotcom: "[OMPI devel] MPI_ERR_TRUNCATE"</a>
<li><strong>In reply to:</strong> <a href="1190.php">Miquel Dotcom: "[OMPI devel] MPI_ERR_TRUNCATE"</a>
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
