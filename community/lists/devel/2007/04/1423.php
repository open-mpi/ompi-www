<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 17:13:02 2007" -->
<!-- isoreceived="20070416211302" -->
<!-- sent="Mon, 16 Apr 2007 17:12:47 -0400" -->
<!-- isosent="20070416211247" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="E6E15CC7-D795-4C72-A966-08B59807FA59_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6cc08a440704151925y49827242h6c48fcb99e240e73_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-04-16 17:12:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Previous message:</strong> <a href="1422.php">Ralph H Castain: "[OMPI devel] OpenRTE and &quot;malloc&quot;"</a>
<li><strong>In reply to:</strong> <a href="1416.php">chaitali dherange: "[OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 15, 2007, at 10:25 PM, chaitali dherange wrote:
<br>
<p><span class="quotelev1">&gt; To make things simple, we are making this scheduling static to some  
</span><br>
<span class="quotelev1">&gt; extent... by static I mean.. we know that our clusters use  
</span><br>
<span class="quotelev1">&gt; Infiniband for MPI ( from our study of the openmpi source code this  
</span><br>
<span class="quotelev1">&gt; precisely uses the 'mca_btl_openib_send()' from the ompi/mca/btl/ 
</span><br>
<span class="quotelev1">&gt; openib/btl_openib.c file) ... so all the non MPI communication can  
</span><br>
<span class="quotelev1">&gt; be assumed to be TCP communication using the 'mca_btl_tcp_send()'  
</span><br>
<span class="quotelev1">&gt; from the ompi/mca/btl/tcp/btl_tcp.c file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; To implement this we plan to implement the foll. simple algorithm:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - before calling the 'mca_btl_openib_send()' lock0(X);
</span><br>
<span class="quotelev1">&gt; - before calling the 'mca_btl_tcp_send()' lock1(X);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Algo:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. Allow Lock0(x) -&gt; Lock0(x);.. meaning Lock0(x) is followed by  
</span><br>
<span class="quotelev1">&gt; Lock0(x).
</span><br>
<span class="quotelev1">&gt; 2. Allow Lock1(x) -&gt; Lock1(x);
</span><br>
<span class="quotelev1">&gt; 3. Do not allow Lock0(x) -&gt; Lock1(x);
</span><br>
<span class="quotelev1">&gt; 4. If Lock1(x) -&gt; Lock0(x).... since MPI calls are to be higher  
</span><br>
<span class="quotelev1">&gt; priority over the non MPI ones.. in this case the non MPI  
</span><br>
<span class="quotelev1">&gt; communication should be paused and all the related data off course  
</span><br>
<span class="quotelev1">&gt; needs to be put into a queue(meaning the status of this should be  
</span><br>
<span class="quotelev1">&gt; saved in a queue). All other non MPI communications newer than this  
</span><br>
<span class="quotelev1">&gt; should also be added to this same queue. Now the MPI process trying  
</span><br>
<span class="quotelev1">&gt; to perform Lock0(x) should be allowed to complete and only when all  
</span><br>
<span class="quotelev1">&gt; the MPI communications are complete should the non MPI  
</span><br>
<span class="quotelev1">&gt; communication be allowed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Currently we are working on a simple scheduling algorithm without  
</span><br>
<span class="quotelev1">&gt; giving any priorities to the 'MPI_send' calls.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However to implement the project fully, we have the following  
</span><br>
<span class="quotelev1">&gt; queries :(
</span><br>
<span class="quotelev1">&gt; -Can we abort or pause the non-MPI/TCP communication in any way???
</span><br>
<p>Not really; the BTL interface was not really designed for that.   
<br>
Indeed, even if you wrote your own socket code to use TCP sockets  
<br>
outside of MPI / BTL / etc., you don't have full control of exactly  
<br>
what is sent (or when).  For example, if you write(fd, ...) and then  
<br>
decide you want to pause it, how would you do so?  You can stop  
<br>
calling write(), but that's not enough.  The kernel may have copied  
<br>
your buffer to a lower level and may be progressing the actual send  
<br>
behind the scenes.  So you haven't *guaranteed* that only one network  
<br>
interface is utilizing the host's resources (RAM, kernel, memory  
<br>
busses, etc.) at one time.
<br>
<p>Indeed, the BTL interface is designed to acknowledge this  
<br>
asynchronicity -- it *assumes* that all network actions are non- 
<br>
blocking such that a &quot;Send&quot; action only *begins* the send; completion  
<br>
occurs later.
<br>
<p>So even if you use the TCP BTL to queue up a bunch of writes, if you  
<br>
then get an IB BTL send request, there isn't a good way to tell the  
<br>
TCP BTL &quot;stop doing anything until I tell you otherwise&quot; (i.e., don't  
<br>
process incoming reads and don't progress any further writes).  :-\
<br>
<p><span class="quotelev1">&gt; -Given the assumption that the non-MPI communication is TCP, can we
</span><br>
<span class="quotelev1">&gt; make use of the built in structures (i mean the buffer already  
</span><br>
<span class="quotelev1">&gt; used) in
</span><br>
<span class="quotelev1">&gt; mca_btl_tcp_send() for the implementation of pt.4  in the above  
</span><br>
<span class="quotelev1">&gt; mentioned
</span><br>
<span class="quotelev1">&gt; algorithm??? and more importantly how?
</span><br>
<p>Not really :-(.  The BTLs, by design, are mutually unaware of each  
<br>
other.  In fact, the BTLs are quite dumb (as intended).  The design  
<br>
was to have the caller coordinate and perform any higher-level  
<br>
coordination and the BTLs are simple bit-movers between processes.
<br>
<p>Using the BTL's directly, the best you might be able to do is to stop  
<br>
queuing up new messages to a secondary BTL until you have completions  
<br>
from all pending traffic on a primary BTL.  That might still be  
<br>
interesting, but it may not give you everything that you want --  
<br>
especially since a) I'm guessing that your ultimate goal may be to  
<br>
multi-schedule multiple communication libraries across the *same*  
<br>
interconnect, and b) given the asynchronous nature of parallel  
<br>
computing, you might be able to do a half-decent job of *sending*  
<br>
scheduling, but you may not be able to predict the behavior of  
<br>
*receive* scheduling (e.g., how can you predict/schedule that a low  
<br>
priority receive would not be occurring at the same time on the same  
<br>
node as a high priority send?).
<br>
<p><span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Chaitali
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
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1424.php">Christian Kauhaus: "Re: [OMPI devel] ORTE scalability issues"</a>
<li><strong>Previous message:</strong> <a href="1422.php">Ralph H Castain: "[OMPI devel] OpenRTE and &quot;malloc&quot;"</a>
<li><strong>In reply to:</strong> <a href="1416.php">chaitali dherange: "[OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
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
