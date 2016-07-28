<?
$subject_val = "Re: [OMPI users] How to construct a datatype over two different arrays?";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  1 11:19:08 2007" -->
<!-- isoreceived="20071101151908" -->
<!-- sent="Thu, 1 Nov 2007 16:19:03 +0100" -->
<!-- isosent="20071101151903" -->
<!-- name="Oleg Morajko" -->
<!-- email="olegmorajko_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to construct a datatype over two different arrays?" -->
<!-- id="6ab5deaf0711010819idb18246l6ee9a4c9fe945988_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="64B8C59C-7E9D-4207-9129-27733447FD51_at_cisco.com" -->
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
<strong>From:</strong> Oleg Morajko (<em>olegmorajko_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-11-01 11:19:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4384.php">Bruno Coutinho: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you Jeff for your opinion. It was really helpful.
<br>
<p>Concerning reduce operation in case of small messages: it is possible to
<br>
wrap also a reduction operator
<br>
and make it work with wrapped data. This operator could reduce only the
<br>
original data and simply collect the piggybacked data (instead of reducing
<br>
it). And as you say for big messages, I could be more appropriate to send
<br>
separate messages asynchronously to root.
<br>
<p>Thanks again,
<br>
--Oleg
<br>
<p>On 11/1/07, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Oct 31, 2007, at 5:52 PM, Oleg Morajko wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Let me clarify the context of the problem. I'm implementing a MPI
</span><br>
<span class="quotelev2">&gt; &gt; piggyback mechanism that should allow for attaching extra data to
</span><br>
<span class="quotelev2">&gt; &gt; any MPI message. The idea is to wrap MPI communication calls with
</span><br>
<span class="quotelev2">&gt; &gt; PMPI interface (or with dynamic instrumentation or whatsoever) and
</span><br>
<span class="quotelev2">&gt; &gt; add/receive extra data in a non expensive way. The best solution I
</span><br>
<span class="quotelev2">&gt; &gt; have found so far is dynamic datatype wrapping. That is when a user
</span><br>
<span class="quotelev2">&gt; &gt; calls MPI_Send (datatype, count) I create dynamically a new
</span><br>
<span class="quotelev2">&gt; &gt; structure type that contains an array [count] of datatype and extra
</span><br>
<span class="quotelev2">&gt; &gt; data. To avoid copying the original send buffer I use absolute
</span><br>
<span class="quotelev2">&gt; &gt; addresses to define displacaments in the structure. This works fine
</span><br>
<span class="quotelev2">&gt; &gt; for all P2P calls and MPI_Bcast. And definitely it has performance
</span><br>
<span class="quotelev2">&gt; &gt; benefits when compared to copying bufferers or sending an
</span><br>
<span class="quotelev2">&gt; &gt; additional message in a different communicator. Or would you expect
</span><br>
<span class="quotelev2">&gt; &gt; something different?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The only problem are collective calls like MPI_Gather when a root
</span><br>
<span class="quotelev2">&gt; &gt; process receives an array of data items. There is no problem to
</span><br>
<span class="quotelev2">&gt; &gt; wrap the message on the sender side (for each task), but the
</span><br>
<span class="quotelev2">&gt; &gt; question is how to define a datatype that points both to original
</span><br>
<span class="quotelev2">&gt; &gt; receive buffer and extra buffer for piggybacked data AND has an
</span><br>
<span class="quotelev2">&gt; &gt; adecuate extent to work as an array element.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The real problem is that a structure datatype { original data,
</span><br>
<span class="quotelev2">&gt; &gt; extra data} does not have a constant displacement between the
</span><br>
<span class="quotelev2">&gt; &gt; original data and extra data. Eg. consider original data = receive
</span><br>
<span class="quotelev2">&gt; &gt; buffer in MPI_Gather and extra data is an array of ints somewhere
</span><br>
<span class="quotelev2">&gt; &gt; in memory). So it cannot be directly used as an array datatype.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I guess I don't see why this is a problem...?  If you're already
</span><br>
<span class="quotelev1">&gt; making a specific datatype for this communication, MPI's datatype
</span><br>
<span class="quotelev1">&gt; primitives are flexible enough to allow what you describe.  Keep in
</span><br>
<span class="quotelev1">&gt; mind that you can nest datatypes (e.g., with TYPE_CREATE_STRUCT).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But for collectives, I think you need to decide exactly what
</span><br>
<span class="quotelev1">&gt; information you want to generate / save.  Specifically, if you're
</span><br>
<span class="quotelev1">&gt; piggybacking on collectives, you are stuck using the same
</span><br>
<span class="quotelev1">&gt; communication pattern as that collective.  I.e., if the application
</span><br>
<span class="quotelev1">&gt; calls MPI_REDUCE with MPI_SUM, I imagine you'll have a difficult time
</span><br>
<span class="quotelev1">&gt; piggybacking your data on that reduction without it being summed
</span><br>
<span class="quotelev1">&gt; across all the processes.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; There are a few other canonical solutions to the &quot;need to save extra
</span><br>
<span class="quotelev1">&gt; data about every communication&quot; technique:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - for small messages, do what you're doing: a) make a new/specific
</span><br>
<span class="quotelev1">&gt; datatype for p2p messages or b) memcpy the user+extra data into a
</span><br>
<span class="quotelev1">&gt; small contiguous buffer and then just send that (and memcpy out on
</span><br>
<span class="quotelev1">&gt; the receiver).  If making datatypes is cheap in MPI, then a) is
</span><br>
<span class="quotelev1">&gt; effectively the same as b), and potentially more optimized/tuned.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - for large messages, don't bother making a new datatype -- just send
</span><br>
<span class="quotelev1">&gt; around another message with your extra data.  The performance impact
</span><br>
<span class="quotelev1">&gt; will be minimal because it's already a long message; don't force the
</span><br>
<span class="quotelev1">&gt; MPI do to additional copies with a non-contiguous datatype if you can
</span><br>
<span class="quotelev1">&gt; avoid it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - for collectives, if you can't piggyback (e.g., REDUCE with SUM and
</span><br>
<span class="quotelev1">&gt; others), just send around another short message.  Yes, you'll take a
</span><br>
<span class="quotelev1">&gt; performance hit for this.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - depending on what data you're piggybacking / collecting, it may be
</span><br>
<span class="quotelev1">&gt; possible to implement a &quot;lazy&quot; collection scheme in the meta/PMPI
</span><br>
<span class="quotelev1">&gt; layer.  E.g., for when you send separate messages with your meta
</span><br>
<span class="quotelev1">&gt; data, always use non-blocking sends.  The receiver PMPI layer can
</span><br>
<span class="quotelev1">&gt; lazily collect this data and match it with application sends/receives
</span><br>
<span class="quotelev1">&gt; after the fact (i.e., don't be trapped into thinking that you have to
</span><br>
<span class="quotelev1">&gt; do the match exactly when the application data is actually sent or
</span><br>
<span class="quotelev1">&gt; received -- it could be done after that).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt; Any solution? It could be complex, I don't mind ;)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On 11/1/07, George Bosilca &lt;bosilca_at_[hidden]&gt; wrote: The MPI
</span><br>
<span class="quotelev2">&gt; &gt; standard defines the upper bound and the upper bound for
</span><br>
<span class="quotelev2">&gt; &gt; similar problems. However, even with all the functions in the MPI
</span><br>
<span class="quotelev2">&gt; &gt; standard we cannot describe all types of data. There is always a
</span><br>
<span class="quotelev2">&gt; &gt; solution, but sometimes one has to ask if the performance gain is
</span><br>
<span class="quotelev2">&gt; &gt; worth the complexity introduced.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; As I said there is always a solution. In fact there are 2 solution,
</span><br>
<span class="quotelev2">&gt; &gt; one somehow optimal the other ... as bad as you can imagine.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The bad approach:
</span><br>
<span class="quotelev2">&gt; &gt;   1. Use an MPI_Type_struct to create exactly what you want, element
</span><br>
<span class="quotelev2">&gt; &gt; by element (i.e single pair). This can work in all cases.  2. If
</span><br>
<span class="quotelev2">&gt; &gt; the sizeof(int) == sizeof(double) then the displacement inside
</span><br>
<span class="quotelev2">&gt; &gt; each tuple (double_i, int_i) is constant. Therefore, you can start by
</span><br>
<span class="quotelev2">&gt; &gt; creating one &quot;single element&quot; type and then use for each send the
</span><br>
<span class="quotelev2">&gt; &gt; correct displacement in the array (added to the send buffer,
</span><br>
<span class="quotelev2">&gt; &gt; respectively to the receive one).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;    george.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; On Oct 31, 2007, at 1:40 PM, Oleg Morajko wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Hello,
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I have the following problem. There areI two arrays somewere in the
</span><br>
<span class="quotelev3">&gt; &gt; &gt; program:
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; double weights [MAX_SIZE];
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt; int       values [MAX_SIZE];
</span><br>
<span class="quotelev3">&gt; &gt; &gt; ...
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; I need to be able to send a single pair { weights [i], values [i] }
</span><br>
<span class="quotelev3">&gt; &gt; &gt; with a single MPI_Send call Or receive it directly into both arrays
</span><br>
<span class="quotelev3">&gt; &gt; &gt; at at given index i. How can I define a datatype that spans this
</span><br>
<span class="quotelev3">&gt; &gt; &gt; pair over both arrays?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; The only additional constraint it the fact that the memory location
</span><br>
<span class="quotelev3">&gt; &gt; &gt; of both arrays is fixed and cannot be changed and I should avoid
</span><br>
<span class="quotelev3">&gt; &gt; &gt; extra copies.
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Is it possible?
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Any help welcome,
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Oleg Morajko
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-4383/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4384.php">Bruno Coutinho: "Re: [OMPI users] Too many open files Error"</a>
<li><strong>Previous message:</strong> <a href="4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
<li><strong>In reply to:</strong> <a href="4382.php">Jeff Squyres: "Re: [OMPI users] How to construct a datatype over two different arrays?"</a>
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
