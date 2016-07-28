<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 09:33:09 2007" -->
<!-- isoreceived="20070416133309" -->
<!-- sent="Mon, 16 Apr 2007 10:32:33 -0400 (EDT)" -->
<!-- isosent="20070416143233" -->
<!-- name="pooja_at_[hidden]" -->
<!-- email="pooja_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="2176.69.180.16.130.1176733953.squirrel_at_webmail.cc.gatech.edu" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20070416081651.GY922_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> <a href="mailto:pooja_at_[hidden]?Subject=Re:%20[OMPI%20devel]%20SOS...%20help%20needed%20:("><em>pooja_at_[hidden]</em></a><br>
<strong>Date:</strong> 2007-04-16 10:32:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi!!!!
<br>
<p>I am Pooja.I am working with chaitali on this project.
<br>
We want to shift BTL transport to the higher levels.
<br>
So we are configuring MPi using all development header file .
<br>
This will enable us to call btl /Bml functions directly at the higher level.
<br>
So we will send a normal file across the network calling BTL btl_send
<br>
function directly .
<br>
Another option is not to use BTL_send but to send using TCp socket
<br>
(writing our own tcp_send code).
<br>
SO we just want to ask whether that is possible and if yes what we are
<br>
thinking ahead is right??
<br>
<p>Thanks a lot
<br>
Pooja
<br>
<p><p><p><p><p><p><p><p><p><span class="quotelev1">&gt; On Sun, Apr 15, 2007 at 10:25:06PM -0400, chaitali dherange wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hi!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; giving more priority to the MPI calls over the non MPI ones.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; static I mean.. we know that our clusters use Infiniband for MPI ...
</span><br>
<span class="quotelev2">&gt;&gt; so all the non MPI communication can be assumed to be TCP
</span><br>
<span class="quotelev2">&gt;&gt; communication using the 'mca_btl_tcp_send()' from the
</span><br>
<span class="quotelev2">&gt;&gt; ompi/mca/btl/tcp/btl_tcp.c file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I don't see why you call BTL/IB a MPI call, but BTL/TCP is non-MPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The BTL components are used to provide MPI data transport. Depending on
</span><br>
<span class="quotelev1">&gt; your installed hardware, this transport can be done via IB, Myrinet or
</span><br>
<span class="quotelev1">&gt; at least TCP. Open MPI is even able to mix multiple transports and do
</span><br>
<span class="quotelev1">&gt; message striping.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I suggest you read the comments in pml.h to make things clear. Don't get
</span><br>
<span class="quotelev1">&gt; confused, they still use the old terminology 'PTL' instead of 'BTL', but
</span><br>
<span class="quotelev1">&gt; just consider them to be equal.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Cluster and Metacomputing Working Group
</span><br>
<span class="quotelev1">&gt; Friedrich-Schiller-Universit&#228;t Jena, Germany
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1417.php">Adrian Knoth: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
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
