<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 16 04:16:42 2007" -->
<!-- isoreceived="20070416081642" -->
<!-- sent="Mon, 16 Apr 2007 10:16:51 +0200" -->
<!-- isosent="20070416081651" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SOS... help needed :(" -->
<!-- id="20070416081651.GY922_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-16 04:16:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1418.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1416.php">chaitali dherange: "[OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1416.php">chaitali dherange: "[OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1418.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1418.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Sun, Apr 15, 2007 at 10:25:06PM -0400, chaitali dherange wrote:
<br>
<p><span class="quotelev1">&gt; Hi,
</span><br>
<p>Hi!
<br>
<p><span class="quotelev1">&gt; giving more priority to the MPI calls over the non MPI ones.
</span><br>
&nbsp;
<br>
<span class="quotelev1">&gt; static I mean.. we know that our clusters use Infiniband for MPI ...
</span><br>
<span class="quotelev1">&gt; so all the non MPI communication can be assumed to be TCP
</span><br>
<span class="quotelev1">&gt; communication using the 'mca_btl_tcp_send()' from the
</span><br>
<span class="quotelev1">&gt; ompi/mca/btl/tcp/btl_tcp.c file.
</span><br>
<p>I don't see why you call BTL/IB a MPI call, but BTL/TCP is non-MPI.
<br>
<p>The BTL components are used to provide MPI data transport. Depending on
<br>
your installed hardware, this transport can be done via IB, Myrinet or
<br>
at least TCP. Open MPI is even able to mix multiple transports and do
<br>
message striping.
<br>
<p>I suggest you read the comments in pml.h to make things clear. Don't get
<br>
confused, they still use the old terminology 'PTL' instead of 'BTL', but
<br>
just consider them to be equal.
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1418.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Previous message:</strong> <a href="1416.php">chaitali dherange: "[OMPI devel] SOS... help needed :("</a>
<li><strong>In reply to:</strong> <a href="1416.php">chaitali dherange: "[OMPI devel] SOS... help needed :("</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1418.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1418.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
<li><strong>Reply:</strong> <a href="1419.php">pooja_at_[hidden]: "Re: [OMPI devel] SOS... help needed :("</a>
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
