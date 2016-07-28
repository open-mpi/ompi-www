<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 31 19:03:29 2007" -->
<!-- isoreceived="20071031230329" -->
<!-- sent="Wed, 31 Oct 2007 19:03:21 -0400" -->
<!-- isosent="20071031230321" -->
<!-- name="George Bosilca" -->
<!-- email="bosilca_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="4DC33DE7-84B1-4B10-82A4-BA679E66BA99_at_eecs.utk.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ab5deaf0710311040r60862e46l9074a5da270668dd_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-10-31 19:03:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4373.php">Tim Prins: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>In reply to:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The MPI standard defines the upper bound and the upper bound for  
<br>
similar problems. However, even with all the functions in the MPI  
<br>
standard we cannot describe all types of data. There is always a  
<br>
solution, but sometimes one has to ask if the performance gain is  
<br>
worth the complexity introduced.
<br>
<p>As I said there is always a solution. In fact there are 2 solution,  
<br>
one somehow optimal the other ... as bad as you can imagine.
<br>
<p>The bad approach:
<br>
&nbsp;&nbsp;1. Use an MPI_Type_struct to create exactly what you want, element  
<br>
by element (i.e single pair). This can work in all cases.
<br>
&nbsp;&nbsp;2. If the sizeof(int) == sizeof(double) then the displacement inside  
<br>
each tuple (double_i, int_i) is constant. Therefore, you can start by  
<br>
creating one &quot;single element&quot; type and then use for each send the  
<br>
correct displacement in the array (added to the send buffer,  
<br>
respectively to the receive one).
<br>
<p>&nbsp;&nbsp;&nbsp;george.
<br>
<p>On Oct 31, 2007, at 1:40 PM, Oleg Morajko wrote:
<br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have the following problem. There areI two arrays somewere in the  
</span><br>
<span class="quotelev1">&gt; program:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; double weights [MAX_SIZE];
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; int       values [MAX_SIZE];
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I need to be able to send a single pair { weights [i], values [i] }  
</span><br>
<span class="quotelev1">&gt; with a single MPI_Send call Or receive it directly into both arrays  
</span><br>
<span class="quotelev1">&gt; at at given index i. How can I define a datatype that spans this  
</span><br>
<span class="quotelev1">&gt; pair over both arrays?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only additional constraint it the fact that the memory location  
</span><br>
<span class="quotelev1">&gt; of both arrays is fixed and cannot be changed and I should avoid  
</span><br>
<span class="quotelev1">&gt; extra copies.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is it possible?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any help welcome,
</span><br>
<span class="quotelev1">&gt; Oleg Morajko
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
<p><p>
<br><hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4374/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4375.php">George Bosilca: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4373.php">Tim Prins: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>In reply to:</strong> <a href="4363.php">Oleg Morajko: "[OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
