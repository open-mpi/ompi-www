<? include("../../include/msg-header.inc"); ?>
<!-- received="Thu Mar 22 19:10:28 2007" -->
<!-- isoreceived="20070322231028" -->
<!-- sent="Thu, 22 Mar 2007 19:10:17 -0400" -->
<!-- isosent="20070322231017" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Buffered sends" -->
<!-- id="DAE0D0AE-6691-4EFB-808E-712023AA94A0_at_cs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="3071ED1A-3638-483E-93D3-8EF854A5D530_at_ieee.org" -->
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
<strong>From:</strong> George Bosilca (<em>bosilca_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-22 19:10:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2890.php">Brock Palen: "[OMPI users] Fwd: [Allinea #6458] message queues"</a>
<li><strong>Previous message:</strong> <a href="2888.php">Michael: "[OMPI users] Buffered sends"</a>
<li><strong>In reply to:</strong> <a href="2888.php">Michael: "[OMPI users] Buffered sends"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
This problem is not related to Open MPI. Is related to the way you  
<br>
use MPI. In fact there are 2 problems:
<br>
<p>1.  Buffered sends will copy the data into the attached buffer. In  
<br>
your case, I think this only add one more memcpy operation to the  
<br>
critical path, which might partially explain the impressive slow-down  
<br>
(but I don't think this is the main reason). Buffering an MPI_PACKED  
<br>
data seems like a non optimal solution. You want to keep the critical  
<br>
path as short as possible and avoid any extra/useless memcopy. Using  
<br>
a double buffering technique (which will effectively double the  
<br>
amount of memory required for your communications) can give you some  
<br>
benefit.
<br>
<p>2. Once the data is buffered, the Bsend (and the Ibsend) return to  
<br>
the user application without progressing the communication. With few  
<br>
exceptions (based on the available networks, which is not the case  
<br>
for TCP nor shared memory) the point-to-point communication will only  
<br>
be progressed on the next MPI call. If you look in the MPI standard  
<br>
to see what exactly means to return from a blocking send, you will  
<br>
realize that the only requirement is that the user can touch the send  
<br>
buffer. From this perspective, the major difference between a  
<br>
MPI_Send and an MPI_Bsend operation is that the MPI_Send will return  
<br>
once the data is delivered to the NIC (which then can then complete  
<br>
the communication asynchronously), while at the end of the MPI_Bsend  
<br>
the data is still in the application memory. The only way to get any  
<br>
benefit from the MPI_Bsend is to have a progress thread which take  
<br>
care of the pending communications in the background. Such thread is  
<br>
not enabled by default in Open MPI.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p><p>On Mar 22, 2007, at 5:18 PM, Michael wrote:
<br>
<p><span class="quotelev1">&gt; Is there known issue with buffered sends in OpenMPI 1.1.4?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I changed a single send which is called thousands of times from
</span><br>
<span class="quotelev1">&gt; MPI_SEND (&amp; MPI_ISEND) to MPI_BSEND (&amp; MPI_IBSEND) and my Fortran 90
</span><br>
<span class="quotelev1">&gt; code slowed down by a factor of 10.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've looked at several references and I can't see where I'm making a
</span><br>
<span class="quotelev1">&gt; mistake.  The MPI_SEND is for MPI_PACKED data, so it's first
</span><br>
<span class="quotelev1">&gt; parameter is an allocated character array.  I also allocated a
</span><br>
<span class="quotelev1">&gt; character array for the buffer passed to MPI_BUFFER_ATTACH.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looking at the model implementation in a reference they give a model
</span><br>
<span class="quotelev1">&gt; of using MPI_PACKED inside MPI_BSEND, I was wondering if this could
</span><br>
<span class="quotelev1">&gt; be a problem, i.e. packing packed data?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Michael
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ps. I have to use OpenMPI 1.1.4 to maintain compatibility with a
</span><br>
<span class="quotelev1">&gt; major HPC center.
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2890.php">Brock Palen: "[OMPI users] Fwd: [Allinea #6458] message queues"</a>
<li><strong>Previous message:</strong> <a href="2888.php">Michael: "[OMPI users] Buffered sends"</a>
<li><strong>In reply to:</strong> <a href="2888.php">Michael: "[OMPI users] Buffered sends"</a>
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
