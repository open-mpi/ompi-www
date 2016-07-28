<?
$subject_val = "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct  3 12:35:57 2014" -->
<!-- isoreceived="20141003163557" -->
<!-- sent="Fri, 3 Oct 2014 16:35:36 +0000" -->
<!-- isosent="20141003163536" -->
<!-- name="Nick Papior Andersen" -->
<!-- email="nickpapior_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT" -->
<!-- id="CAAbhqc7TXc+xHzhZLqHadeormhThyKecTN+UNs3knpoMEfYctw_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="CAG8o1y4wHcEgK+AbANjEyEZPh19=U99pZVwQJQpF=VaWKFDa1A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT<br>
<strong>From:</strong> Nick Papior Andersen (<em>nickpapior_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-10-03 12:35:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25457.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25457.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25457.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
2014-10-03 16:27 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
<br>
<p><span class="quotelev1">&gt; dear N.,
</span><br>
<span class="quotelev1">&gt; here my results:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 0.200000002980232
</span><br>
<span class="quotelev1">&gt;   0.200000000000000
</span><br>
<span class="quotelev1">&gt;    1.00000000000000
</span><br>
<span class="quotelev1">&gt;   0.200000002980232
</span><br>
<span class="quotelev1">&gt;   0.200000000000000
</span><br>
<span class="quotelev1">&gt;    1.00000000000000
</span><br>
<span class="quotelev1">&gt;    1.00000000000000
</span><br>
<span class="quotelev1">&gt;    1.00000000000000
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suppose that in case of 0.2 we have a real that is different in double
</span><br>
<span class="quotelev1">&gt; or in single precision. when I write 0.2_db I forced the program to fill
</span><br>
<span class="quotelev1">&gt; with 0 the empty space in the memory.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Correct. When doing &quot;dp = 0.2&quot; it casts the 0.2 to a double precision, see
<br>
below.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; In the second case we have and integer that the program treat as a real
</span><br>
<span class="quotelev1">&gt; and as a consequence, the program fill  automatically the empty space with
</span><br>
<span class="quotelev1">&gt; 0.
</span><br>
<span class="quotelev1">&gt;
</span><br>
Not correct (at least not in this example), a real 1. (and whole number up
<br>
to a certain integer) is perfectly represented in bytes. Hence conversion
<br>
between different precisions will not loose any precision, the 0.2 case is
<br>
&quot;approximately&quot; set to 0.2 in context of the precision. Hence conversion
<br>
from 0.2 to a double precision 0.2_dp will &quot;guess&quot; the last digits, not
<br>
exactly, but you get the point.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am I right?
</span><br>
<span class="quotelev1">&gt; What do you suggest as next step?
</span><br>
<span class="quotelev1">&gt;
</span><br>
??? The example I sent you worked perfectly.
<br>
Good luck!
<br>
<p><span class="quotelev1">&gt; I could create a type variable and try to send it from a processor to
</span><br>
<span class="quotelev1">&gt; another with MPI_SEND and MPI_RECV?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Again thank
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Diego
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 3 October 2014 18:04, Nick Papior Andersen &lt;nickpapior_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Dear Diego,
</span><br>
<span class="quotelev2">&gt;&gt; Instead of instantly going about using cartesian communicators you should
</span><br>
<span class="quotelev2">&gt;&gt; try and create a small test case, something like this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have successfully runned this small snippet on my machine.
</span><br>
<span class="quotelev2">&gt;&gt; As I state in the source, the culprit was the integer address size. It is
</span><br>
<span class="quotelev2">&gt;&gt; inherently of type long, whereas you used integer.
</span><br>
<span class="quotelev2">&gt;&gt; Running it (with ONLY 2 processors) should print:
</span><br>
<span class="quotelev2">&gt;&gt; 1 1.0000000000000000 1.0000000000000000 11.000000000000000
</span><br>
<span class="quotelev2">&gt;&gt; 11.000000000000000
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Please notice the other things I comment on, they can turn out to be
</span><br>
<span class="quotelev2">&gt;&gt; important!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For instance, try this:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real(dp) :: a
</span><br>
<span class="quotelev2">&gt;&gt; a = 0.2
</span><br>
<span class="quotelev2">&gt;&gt; print *,a
</span><br>
<span class="quotelev2">&gt;&gt; a=0.2_dp
</span><br>
<span class="quotelev2">&gt;&gt; print *,a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Try and understand why the output is not as expected!
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also try and understand why this has no problems:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; real(dp) :: a
</span><br>
<span class="quotelev2">&gt;&gt; a = 1.
</span><br>
<span class="quotelev2">&gt;&gt; print *,a
</span><br>
<span class="quotelev2">&gt;&gt; a=1._dp
</span><br>
<span class="quotelev2">&gt;&gt; print *,a
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 2014-10-03 15:41 GMT+00:00 Diego Avesani &lt;diego.avesani_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Dear Nick,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; thanks again, I am learning a lot and do not be afraid to be rude.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On 3 October 2014 17:38, Diego Avesani &lt;diego.avesani_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Dear Jeff, Dear Nick,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the question is about, inserting the FLAG for using -r8
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Now I have written a simple code with select_kind to avoid -r8. I get
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; the same error.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; You can find the code in the attachment.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; probably there is something wrong with ompi configuration
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What do you think?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Again, thanks and thanks a lot
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Diego
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On 3 October 2014 17:18, Jeff Squyres (jsquyres) &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; On Oct 3, 2014, at 10:55 AM, Diego Avesani &lt;diego.avesani_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; Dear Jeff,
</span><br>
<span class="quotelev2">&gt;&gt;&gt;&gt;&gt; &gt; how can I do that?
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Er... can you be more specific?  I mentioned several things in my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; email.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; If you're asking about how to re-install OMPI compiled with -r8,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; please first read Nick's email (essentially asking &quot;why are you using -r8,
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; anyway?&quot;).
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25450.php">http://www.open-mpi.org/community/lists/users/2014/10/25450.php</a>
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25453.php">http://www.open-mpi.org/community/lists/users/2014/10/25453.php</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Kind regards Nick
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25454.php">http://www.open-mpi.org/community/lists/users/2014/10/25454.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2014/10/25455.php">http://www.open-mpi.org/community/lists/users/2014/10/25455.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Kind regards Nick
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-25456/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="25457.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Previous message:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>In reply to:</strong> <a href="25455.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="25457.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
<li><strong>Reply:</strong> <a href="25457.php">Diego Avesani: "Re: [OMPI users] SENDRECV + MPI_TYPE_CREATE_STRUCT"</a>
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
