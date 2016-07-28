<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Jun 26 14:16:54 2007" -->
<!-- isoreceived="20070626181654" -->
<!-- sent="Tue, 26 Jun 2007 11:15:45 -0700" -->
<!-- isosent="20070626181545" -->
<!-- name="Karol Mroz" -->
<!-- email="kmroz_at_[hidden]" -->
<!-- subject="[OMPI devel] SCTP BTL Development for Open MPI" -->
<!-- id="468157D1.70102_at_cs.ubc.ca" -->
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
<strong>From:</strong> Karol Mroz (<em>kmroz_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-06-26 14:15:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>Previous message:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Reply:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello... I'm a student at the University of British Columbia working on 
<br>
creating an SCTP BTL for Open MPI. I have a simple implementation 
<br>
working that uses SCTPs one-to-one style sockets for sending messages. 
<br>
The same writev()/readv() calls that are used in the TCP BTL are used in 
<br>
this new BTL.
<br>
<p>The next step is to allow large messages (300K +) to be sent over the 
<br>
SCTP socket. Right now, I'm fragmenting the iovec pointing to the 
<br>
message at the BTL level. Repeated calls to writev() are then made, with 
<br>
the first call sending header information and a part of the message, 
<br>
followed by sends of nothing but message data.
<br>
<p>My concern is that if the send is interrupted partly through the message 
<br>
and then resumed, it will attempt to resend the vector containing the 
<br>
message data from the beginning as mca_btl_sctp_frag_t pointer is only 
<br>
aware of the original, un-fragmented iovec. I'm wondering if extending 
<br>
the array of iovec structures contained within the frag pointer to 
<br>
contain the properly fragmented message would cause havoc on the 
<br>
middleware. Currently the array is of size 5 (as is the case for the TCP 
<br>
BTL). Would extending this beyond 5 to allow for proper book keeping in 
<br>
the event of an interrupted send create problems?
<br>
<p>Any ideas on this matter would be greatly appreciated.
<br>
<p><pre>
-- 
Karol Mroz
kmroz_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1769.php">Jelena Pjesivac-Grbovic: "Re: [OMPI devel] Allgatherv performance anomaly"</a>
<li><strong>Previous message:</strong> <a href="1767.php">Gleb Natapov: "Re: [OMPI devel] PML/BTL MCA params review"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
<li><strong>Reply:</strong> <a href="1770.php">George Bosilca: "Re: [OMPI devel] SCTP BTL Development for Open MPI"</a>
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
