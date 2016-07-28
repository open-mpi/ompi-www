<?
$subject_val = "[OMPI devel] MPI_Recv pre memory checks";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jul  7 16:35:31 2009" -->
<!-- isoreceived="20090707203531" -->
<!-- sent="Tue, 7 Jul 2009 08:35:26 -1200" -->
<!-- isosent="20090707203526" -->
<!-- name="Prasadcse Perera" -->
<!-- email="prasadcse0_at_[hidden]" -->
<!-- subject="[OMPI devel] MPI_Recv pre memory checks" -->
<!-- id="610ca1a30907071335p1108d3b0g46eec7a0705b8716_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] MPI_Recv pre memory checks<br>
<strong>From:</strong> Prasadcse Perera (<em>prasadcse0_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-07 16:35:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6387.php">George Bosilca: "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<li><strong>Reply:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
I'm new to open mpi and I'm currently studying the code and writing my own
<br>
simple parallel test programs. I wrote a simple program to send and receive
<br>
a character buffer using
<br>
MPI::COMM_WORLD.Send,   MPI::COMM_WORLD.Recv function calls. After playing
<br>
with some stupid parameters I could observe the following:
<br>
When I passed a buffer of length say 10, and set the receiving count to say
<br>
100, I could see that even the sending buffer (around 30 - 40)  exceeds  the
<br>
receiving buffer, the characters were successfully copied. And at some
<br>
points, after increasing  these values, the receiving buffer started to show
<br>
some garbage characters due to usage of unassigned memory. I took a look at
<br>
the implementation and saw that opal_memchecker_base_isaddressable is used
<br>
to check if the buffer is addressible and OMPI_WANT_MEMCHECKER is used as a
<br>
flag too. But unfortunately I couldnt find the impl of
<br>
opal_memchecker_base_isaddressable.
<br>
<p>So my questions is, Do we have to set OMPI_WANT_MEMCHECKER in order to
<br>
verify the recieving buffer internally? if it is, then shouldn't it be
<br>
always done ?
<br>
I know its a stupid thing to burden these functions to do this since its up
<br>
to the programmer to make the sanity checks or make sure not to feed up with
<br>
wrong parameters, yet since it leaves to dangerous memory allocation/usage,
<br>
doesn't it serve as a security threat ?
<br>
<p>Pardon me if I misunderstood things since I'm still learning and testing
<br>
with these codes...
<br>
<p>Thanks,
<br>
Prasad.
<br>
<pre>
-- 
<a href="http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381">http://www.codeproject.com/script/Articles/MemberArticles.aspx?amid=3489381</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-6386/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6387.php">George Bosilca: "[OMPI devel] [RFC] Move the datatype engine in the OPAL layer"</a>
<li><strong>Previous message:</strong> <a href="6385.php">George Bosilca: "Re: [OMPI devel] oob/btl tcp port range - missing htons?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
<li><strong>Reply:</strong> <a href="6388.php">Rainer Keller: "Re: [OMPI devel] MPI_Recv pre memory checks"</a>
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
