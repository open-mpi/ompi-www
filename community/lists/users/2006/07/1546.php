<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jul  4 11:28:07 2006" -->
<!-- isoreceived="20060704152807" -->
<!-- sent="Tue, 4 Jul 2006 11:27:55 -0400" -->
<!-- isosent="20060704152755" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Where can I get mpi api reference" -->
<!-- id="52F26BB4-DD13-4407-812C-4D97E6A37047_at_cs.utk.edu" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="1151995872.4956.8.camel_at_localhost" -->
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
<strong>Date:</strong> 2006-07-04 11:27:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<li><strong>Previous message:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="1536.php">Manal Helal: "[OMPI users] Where can I get mpi api reference"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
MPI is a standard. All MPI libraries, including MPICH, Open MPI and  
<br>
LAM, follow this standard. There is no difference between their API.  
<br>
That's one of the most interesting features of MPI, providing a  
<br>
standard interface for message passing on all architectures.
<br>
<p>Now your warning is real, but it does not have anything to do with a  
<br>
non respect of the MPI standard by the MPI library. It happens  
<br>
because of non respect of the MPI standard by the user. In fact, you  
<br>
can read all the MPI standard and you will see that nowhere inside it  
<br>
is stated that an MPI_Datatype is an integer. At least not for C.  
<br>
Now, it happens that MPICH define the MPI_Datatype as being an  
<br>
integer. But it is not the case with Open MPI nor LAM. Your constants  
<br>
have to be of the type MPI_Datatype not integers in order to be fully  
<br>
compliant with the MPI standard and therefore with all available MPI  
<br>
libraries.
<br>
<p>&nbsp;&nbsp;&nbsp;Thanks,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Jul 4, 2006, at 2:51 AM, Manal Helal wrote:
<br>
<p><span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to compile a code that was done for MPICH2 to openmpi 1.1,
</span><br>
<span class="quotelev1">&gt; and I am getting a warning:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  warning: passing argument 3 of &#145;MPI_Irecv&#146; makes pointer from integer
</span><br>
<span class="quotelev1">&gt; without a cast
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MPI_Irecv takes the third parameter (the buffer type) as integer
</span><br>
<span class="quotelev1">&gt; (MPI_Datatype), and I am using constants declared with (#define) and
</span><br>
<span class="quotelev1">&gt; these used to work fine with me on MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Are the MPI APIs interfaces different in open-mpi? if so, where can I
</span><br>
<span class="quotelev1">&gt; get this reference?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am afraid I might be wrong about something else,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; thanks again,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Manal
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
<li><strong>Next message:</strong> <a href="1547.php">Samuel Wieczorek: "Re: [OMPI users] Compilation problem"</a>
<li><strong>Previous message:</strong> <a href="1545.php">Brian Barrett: "Re: [OMPI users] runtime error"</a>
<li><strong>In reply to:</strong> <a href="1536.php">Manal Helal: "[OMPI users] Where can I get mpi api reference"</a>
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
