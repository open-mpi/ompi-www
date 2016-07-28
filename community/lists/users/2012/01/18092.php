<?
$subject_val = "Re: [OMPI users] MPI::Request::Test not working";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan  4 11:21:57 2012" -->
<!-- isoreceived="20120104162157" -->
<!-- sent="Wed, 4 Jan 2012 16:21:51 +0000 (GMT)" -->
<!-- isosent="20120104162151" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI::Request::Test not working" -->
<!-- id="1325694111.36513.YahooMailNeo_at_web29603.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="0B8C5A38-FB1A-482D-A295-4B2E638929E0_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI::Request::Test not working<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-01-04 11:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<li><strong>Previous message:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff

Thanks a lot. Yeah, I figured that out. Anyway, even in C++ program, I am using C interfaces for the MPI bit. For me, its lot easier to understand the documentation and help this way.

Thanks a lot once again.

Best,

Devendra



________________________________
 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
To: devendra rai &lt;rai.devendra_at_[hidden]&gt;; Open MPI Users &lt;users_at_[hidden]&gt; 
Sent: Wednesday, 4 January 2012, 13:21
Subject: Re: [OMPI users] MPI::Request::Test not working
 
It looks like you are using C++ improperly.&#194;&#160; I would suggest something like this (typed in email; not verified with a compiler):

MPI::Request Isend_request;
Isend_request = MPI::COMM_WORLD.Isend(...);

MPI::Status status;
if (Isend_request.Test(status)) {
&#194;&#160; &#194;&#160; // ...
}


On Dec 30, 2011, at 10:21 PM, devendra rai wrote:

&gt; Hello Everyone,
&gt; 
&gt; I wrote a small C++ MPI program to do an ISend:
&gt; 
&gt; /*some declarations here */
&gt; MPI::Request Isend_request_status;
&gt; ...
&gt; ...
&gt; 
&gt; /* do the transmission */
&gt; Isend_request_status = MPI::COMM_WORLD.Isend(this-&gt;transmitbuffer, this-&gt;transmissionsize, MPI_BYTE, (this-&gt;dbIterator)-&gt;first, std::get&lt;0&gt;(this-&gt;TransmissionDetails));
&gt; 
&gt; /* Check if the transmit was successful */
&gt; if (MPI::Request::Test(Isend_request_status))
&gt; {
&gt;&#194;&#160; &#194;&#160;  /* done :) */
&gt; }
&gt; 
&gt; However, building it gives the error:
&gt; 
&gt; no matching function for call to &#226;&#128;&#152;MPI::Request::Test(MPI::Request&amp;)&#226;&#128;&#153;
&gt; 
&gt; I am using gcc-4.6 on Linux, with OpenMPI- 1.4.3. 
&gt; 
&gt; I looked up the headers for the calls:
&gt; 
&gt; inline MPI::Request
&gt; MPI::Comm::Isend(const void *buf, int count,
&gt;&#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; &#194;&#160; const MPI::Datatype &amp; datatype, int dest, int tag) const
&gt; 
&gt; So, the MPI::COMM_WORLD::ISend(...) should return me variable of type MPI::Request.
&gt; 
&gt; And,
&gt; 
&gt; inline bool
&gt; MPI::Request::Test(MPI::Status &amp;status) 
&gt; 
&gt; This takes in the variable of type MPI::Status. 
&gt; 
&gt; 
&gt; So, two questions:
&gt; 
&gt; (1). Is there a problem due to incompatible types? If so, how do I fix it?
&gt; (2). Why would the MPI::Request::Test take in a different type than what is returned by MPI::COMM_WORLD::ISend(...)?
&gt; 
&gt; It would really help if you could help me fix the example that I have shown.
&gt; 
&gt; I understand it would be easier to do this in C, but there are project requirements that led me to C++. 
&gt; 
&gt; Can someone please help?
&gt; 
&gt; Thanks a lot.
&gt; 
&gt; 
&gt; Devendra
&gt; sd
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>


-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18092/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<li><strong>Previous message:</strong> <a href="18091.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>In reply to:</strong> <a href="18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
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
