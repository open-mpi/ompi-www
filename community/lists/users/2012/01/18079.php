<?
$subject_val = "Re: [OMPI users] MPI::Request::Test not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 07:21:44 2012" -->
<!-- isoreceived="20120104122144" -->
<!-- sent="Wed, 4 Jan 2012 07:21:38 -0500" -->
<!-- isosent="20120104122138" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Request::Test not working" -->
<!-- id="0B8C5A38-FB1A-482D-A295-4B2E638929E0_at_cisco.com" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="1325301698.59909.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
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
<strong>Date:</strong> 2012-01-04 07:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18080.php">Jeff Squyres: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18078.php">Yvan Fournier: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues"</a>
<li><strong>In reply to:</strong> <a href="../../2011/12/18073.php">devendra rai: "[OMPI users] MPI::Request::Test not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18083.php">devendra rai: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>Reply:</strong> <a href="18083.php">devendra rai: "Re: [OMPI users] MPI::Request::Test not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It looks like you are using C++ improperly.  I would suggest something like this (typed in email; not verified with a compiler):
<br>
<p>MPI::Request Isend_request;
<br>
Isend_request = MPI::COMM_WORLD.Isend(...);
<br>
<p>MPI::Status status;
<br>
if (Isend_request.Test(status)) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;// ...
<br>
}
<br>
<p><p>On Dec 30, 2011, at 10:21 PM, devendra rai wrote:
<br>
<p><span class="quotelev1">&gt; Hello Everyone,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote a small C++ MPI program to do an ISend:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /*some declarations here */
</span><br>
<span class="quotelev1">&gt; MPI::Request Isend_request_status;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* do the transmission */
</span><br>
<span class="quotelev1">&gt; Isend_request_status = MPI::COMM_WORLD.Isend(this-&gt;transmitbuffer, this-&gt;transmissionsize, MPI_BYTE, (this-&gt;dbIterator)-&gt;first, std::get&lt;0&gt;(this-&gt;TransmissionDetails));
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /* Check if the transmit was successful */
</span><br>
<span class="quotelev1">&gt; if (MPI::Request::Test(Isend_request_status))
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     /* done :) */
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, building it gives the error:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; no matching function for call to &#145;MPI::Request::Test(MPI::Request&amp;)&#146;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using gcc-4.6 on Linux, with OpenMPI- 1.4.3. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked up the headers for the calls:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline MPI::Request
</span><br>
<span class="quotelev1">&gt; MPI::Comm::Isend(const void *buf, int count,
</span><br>
<span class="quotelev1">&gt;          const MPI::Datatype &amp; datatype, int dest, int tag) const
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, the MPI::COMM_WORLD::ISend(...) should return me variable of type MPI::Request.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; And,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; inline bool
</span><br>
<span class="quotelev1">&gt; MPI::Request::Test(MPI::Status &amp;status) 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This takes in the variable of type MPI::Status. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So, two questions:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (1). Is there a problem due to incompatible types? If so, how do I fix it?
</span><br>
<span class="quotelev1">&gt; (2). Why would the MPI::Request::Test take in a different type than what is returned by MPI::COMM_WORLD::ISend(...)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would really help if you could help me fix the example that I have shown.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I understand it would be easier to do this in C, but there are project requirements that led me to C++. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Can someone please help?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks a lot.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Devendra
</span><br>
<span class="quotelev1">&gt; sd
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
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18080.php">Jeff Squyres: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>Previous message:</strong> <a href="18078.php">Yvan Fournier: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues"</a>
<li><strong>In reply to:</strong> <a href="../../2011/12/18073.php">devendra rai: "[OMPI users] MPI::Request::Test not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18083.php">devendra rai: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>Reply:</strong> <a href="18083.php">devendra rai: "Re: [OMPI users] MPI::Request::Test not working"</a>
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
