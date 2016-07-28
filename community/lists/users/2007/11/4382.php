<?
$subject_val = "Re: [OMPI users] How to construct a datatype over two different arrays?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 09:44:33 2007" -->
<!-- isoreceived="20071101134433" -->
<!-- sent="Thu, 1 Nov 2007 06:38:15 -0700" -->
<!-- isosent="20071101133815" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="64B8C59C-7E9D-4207-9129-27733447FD51_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="6ab5deaf0710311752l6bac7e1bsd0ef8242d8757f00_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-11-01 09:38:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4381.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 31, 2007, at 5:52 PM, Oleg Morajko wrote:
<br>
<p><span class="quotelev1">&gt; Let me clarify the context of the problem. I'm implementing a MPI  
</span><br>
<span class="quotelev1">&gt; piggyback mechanism that should allow for attaching extra data to  
</span><br>
<span class="quotelev1">&gt; any MPI message. The idea is to wrap MPI communication calls with  
</span><br>
<span class="quotelev1">&gt; PMPI interface (or with dynamic instrumentation or whatsoever) and  
</span><br>
<span class="quotelev1">&gt; add/receive extra data in a non expensive way. The best solution I  
</span><br>
<span class="quotelev1">&gt; have found so far is dynamic datatype wrapping. That is when a user  
</span><br>
<span class="quotelev1">&gt; calls MPI_Send (datatype, count) I create dynamically a new  
</span><br>
<span class="quotelev1">&gt; structure type that contains an array [count] of datatype and extra  
</span><br>
<span class="quotelev1">&gt; data. To avoid copying the original send buffer I use absolute  
</span><br>
<span class="quotelev1">&gt; addresses to define displacaments in the structure. This works fine  
</span><br>
<span class="quotelev1">&gt; for all P2P calls and MPI_Bcast. And definitely it has performance  
</span><br>
<span class="quotelev1">&gt; benefits when compared to copying bufferers or sending an  
</span><br>
<span class="quotelev1">&gt; additional message in a different communicator. Or would you expect  
</span><br>
<span class="quotelev1">&gt; something different?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The only problem are collective calls like MPI_Gather when a root  
</span><br>
<span class="quotelev1">&gt; process receives an array of data items. There is no problem to  
</span><br>
<span class="quotelev1">&gt; wrap the message on the sender side (for each task), but the  
</span><br>
<span class="quotelev1">&gt; question is how to define a datatype that points both to original  
</span><br>
<span class="quotelev1">&gt; receive buffer and extra buffer for piggybacked data AND has an  
</span><br>
<span class="quotelev1">&gt; adecuate extent to work as an array element.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The real problem is that a structure datatype { original data,  
</span><br>
<span class="quotelev1">&gt; extra data} does not have a constant displacement between the  
</span><br>
<span class="quotelev1">&gt; original data and extra data. Eg. consider original data = receive  
</span><br>
<span class="quotelev1">&gt; buffer in MPI_Gather and extra data is an array of ints somewhere  
</span><br>
<span class="quotelev1">&gt; in memory). So it cannot be directly used as an array datatype.
</span><br>
<p>I guess I don't see why this is a problem...?  If you're already  
<br>
making a specific datatype for this communication, MPI's datatype  
<br>
primitives are flexible enough to allow what you describe.  Keep in  
<br>
mind that you can nest datatypes (e.g., with TYPE_CREATE_STRUCT).
<br>
<p>But for collectives, I think you need to decide exactly what  
<br>
information you want to generate / save.  Specifically, if you're  
<br>
piggybacking on collectives, you are stuck using the same  
<br>
communication pattern as that collective.  I.e., if the application  
<br>
calls MPI_REDUCE with MPI_SUM, I imagine you'll have a difficult time  
<br>
piggybacking your data on that reduction without it being summed  
<br>
across all the processes.
<br>
<p>There are a few other canonical solutions to the &quot;need to save extra  
<br>
data about every communication&quot; technique:
<br>
<p>- for small messages, do what you're doing: a) make a new/specific  
<br>
datatype for p2p messages or b) memcpy the user+extra data into a  
<br>
small contiguous buffer and then just send that (and memcpy out on  
<br>
the receiver).  If making datatypes is cheap in MPI, then a) is  
<br>
effectively the same as b), and potentially more optimized/tuned.
<br>
<p>- for large messages, don't bother making a new datatype -- just send  
<br>
around another message with your extra data.  The performance impact  
<br>
will be minimal because it's already a long message; don't force the  
<br>
MPI do to additional copies with a non-contiguous datatype if you can  
<br>
avoid it.
<br>
<p>- for collectives, if you can't piggyback (e.g., REDUCE with SUM and  
<br>
others), just send around another short message.  Yes, you'll take a  
<br>
performance hit for this.
<br>
<p>- depending on what data you're piggybacking / collecting, it may be  
<br>
possible to implement a &quot;lazy&quot; collection scheme in the meta/PMPI  
<br>
layer.  E.g., for when you send separate messages with your meta  
<br>
data, always use non-blocking sends.  The receiver PMPI layer can  
<br>
lazily collect this data and match it with application sends/receives  
<br>
after the fact (i.e., don't be trapped into thinking that you have to  
<br>
do the match exactly when the application data is actually sent or  
<br>
received -- it could be done after that).
<br>
<p>Hope that helps.
<br>
<p><p><span class="quotelev1">&gt; Any solution? It could be complex, I don't mind ;)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 11/1/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote: The MPI  
</span><br>
<span class="quotelev1">&gt; standard defines the upper bound and the upper bound for
</span><br>
<span class="quotelev1">&gt; similar problems. However, even with all the functions in the MPI
</span><br>
<span class="quotelev1">&gt; standard we cannot describe all types of data. There is always a
</span><br>
<span class="quotelev1">&gt; solution, but sometimes one has to ask if the performance gain is
</span><br>
<span class="quotelev1">&gt; worth the complexity introduced.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; As I said there is always a solution. In fact there are 2 solution,
</span><br>
<span class="quotelev1">&gt; one somehow optimal the other ... as bad as you can imagine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bad approach:
</span><br>
<span class="quotelev1">&gt;   1. Use an MPI_Type_struct to create exactly what you want, element
</span><br>
<span class="quotelev1">&gt; by element (i.e single pair). This can work in all cases.  2. If  
</span><br>
<span class="quotelev1">&gt; the sizeof(int) == sizeof(double) then the displacement inside
</span><br>
<span class="quotelev1">&gt; each tuple (double_i, int_i) is constant. Therefore, you can start by
</span><br>
<span class="quotelev1">&gt; creating one &quot;single element&quot; type and then use for each send the
</span><br>
<span class="quotelev1">&gt; correct displacement in the array (added to the send buffer,
</span><br>
<span class="quotelev1">&gt; respectively to the receive one).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    george.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 1:40 PM, Oleg Morajko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hello,
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I have the following problem. There areI two arrays somewere in the
</span><br>
<span class="quotelev2">&gt; &gt; program:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; double weights [MAX_SIZE];
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt; int       values [MAX_SIZE];
</span><br>
<span class="quotelev2">&gt; &gt; ...
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I need to be able to send a single pair { weights [i], values [i] }
</span><br>
<span class="quotelev2">&gt; &gt; with a single MPI_Send call Or receive it directly into both arrays
</span><br>
<span class="quotelev2">&gt; &gt; at at given index i. How can I define a datatype that spans this
</span><br>
<span class="quotelev2">&gt; &gt; pair over both arrays?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only additional constraint it the fact that the memory location
</span><br>
<span class="quotelev2">&gt; &gt; of both arrays is fixed and cannot be changed and I should avoid
</span><br>
<span class="quotelev2">&gt; &gt; extra copies.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Is it possible?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any help welcome,
</span><br>
<span class="quotelev2">&gt; &gt; Oleg Morajko
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Previous message:</strong> <a href="4381.php">Jeff Squyres: "Re: [OMPI users] Re :Re:  OpenMP and OpenMPI Issue"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2007/10/4378.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>Reply:</strong> <a href="4383.php">Oleg Morajko: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
