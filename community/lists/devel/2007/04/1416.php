<? include("../../include/msg-header.inc"); ?>
<!-- received="Sun Apr 15 22:25:12 2007" -->
<!-- isoreceived="20070416022512" -->
<!-- sent="Sun, 15 Apr 2007 22:25:06 -0400" -->
<!-- isosent="20070416022506" -->
<!-- name="chaitali dherange" -->
<!-- email="chaitali.dherange_at_[hidden]" -->
<!-- subject="[OMPI devel] SOS... help needed :(" -->
<!-- id="6cc08a440704151925y49827242h6c48fcb99e240e73_at_mail.gmail.com" -->
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
<strong>From:</strong> chaitali dherange (<em>chaitali.dherange_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-15 22:25:06
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1423.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>&nbsp;&nbsp;Pooja and I are actually working on this course project where we our main
<br>
aim is
<br>
schedule MPI and non MPI calls... giving more priority to the MPI calls over
<br>
the non
<br>
MPI ones.
<br>
<p>To make things simple, we are making this scheduling static to some
<br>
extent... by
<br>
static I mean.. we know that our clusters use Infiniband for MPI ( from our
<br>
study of
<br>
the openmpi source code this precisely uses the 'mca_btl_openib_send()' from
<br>
<p>the ompi/mca/btl/openib/btl_openib.c file) ... so all the non MPI
<br>
communication can
<br>
be assumed to be TCP communication using the 'mca_btl_tcp_send()' from the
<br>
ompi/mca/btl/tcp/btl_tcp.c file.
<br>
<p><p>To implement this we plan to implement the foll. simple algorithm:
<br>
<p>- before calling the 'mca_btl_openib_send()' lock0(X);
<br>
- before calling the 'mca_btl_tcp_send()' lock1(X);
<br>
<p>Algo:
<br>
<p>1. Allow Lock0(x) -&gt; Lock0(x);.. meaning Lock0(x) is followed by Lock0(x).
<br>
2. Allow Lock1(x) -&gt; Lock1(x);
<br>
3. Do not allow Lock0(x) -&gt; Lock1(x);
<br>
4. If Lock1(x) -&gt; Lock0(x).... since MPI calls are to be higher priority
<br>
over the non
<br>
MPI ones.. in this case the non MPI communication should be paused and all
<br>
the
<br>
related data off course needs to be put into a queue(meaning the status of
<br>
this
<br>
should be saved in a queue). All other non MPI communications newer than
<br>
this
<br>
should also be added to this same queue. Now the MPI process trying to
<br>
perform Lock0(x) should be allowed to complete and only when all the MPI
<br>
communications are complete should the non MPI communication be allowed.
<br>
<p>Currently we are working on a simple scheduling algorithm without giving any
<br>
<p>priorities to the 'MPI_send' calls.
<br>
<p>However to implement the project fully, we have the following queries :(
<br>
-Can we abort or pause the non-MPI/TCP communication in any way???
<br>
-Given the assumption that the non-MPI communication is TCP, can we
<br>
make use of the built in structures (i mean the buffer already used) in
<br>
mca_btl_tcp_send() for the implementation of pt.4  in the above mentioned
<br>
algorithm??? and more importantly how?
<br>
<p>Regards,
<br>
Chaitali
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1416/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1415.php">Adrian Knoth: "Re: [OMPI devel] SOS!! Run-time error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1423.php">Jeff Squyres: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1448.php">Christian Leber: "Re: [OMPI devel] SOS... help needed :("</a>
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
