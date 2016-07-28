<?
$subject_val = "[OMPI users] MPI::Request::Test not working";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Dec 30 22:21:43 2011" -->
<!-- isoreceived="20111231032143" -->
<!-- sent="Sat, 31 Dec 2011 03:21:38 +0000 (GMT)" -->
<!-- isosent="20111231032138" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] MPI::Request::Test not working" -->
<!-- id="1325301698.59909.YahooMailNeo_at_web29602.mail.ird.yahoo.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="294B099E-669A-493F-874B-8266C826D3E8_at_cisco.com" -->
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
<strong>Subject:</strong> [OMPI users] MPI::Request::Test not working<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-12-30 22:21:38
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18083.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18081.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17780.php">Jeff Squyres: "[OMPI users] Open MPI SC'11 BOF slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Everyone,

I wrote a small C++ MPI program to do an ISend:

/*some declarations here */
MPI::Request Isend_request_status;
...
...

/* do the transmission */
Isend_request_status = MPI::COMM_WORLD.Isend(this-&gt;transmitbuffer, this-&gt;transmissionsize, MPI_BYTE, (this-&gt;dbIterator)-&gt;first, std::get&lt;0&gt;(this-&gt;TransmissionDetails));

/* Check if the transmit was successful */
if (MPI::Request::Test(Isend_request_status))
{
&#194;&#160;&#194;&#160;&#194;&#160; /* done :) */
}

However, building it gives the error:

no matching function for call to &#226;&#128;&#152;MPI::Request::Test(MPI::Request&amp;)&#226;&#128;&#153;

I am using gcc-4.6 on Linux, with OpenMPI- 1.4.3. 

I looked up the headers for the calls:

inline MPI::Request
MPI::Comm::Isend(const void *buf, int count,
&#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;&#194;&#160;&#194;&#160; &#194;&#160;const MPI::Datatype &amp; datatype, int dest, int tag) const

So, the MPI::COMM_WORLD::ISend(...) should return me variable of type MPI::Request.

And,

inline bool
MPI::Request::Test(MPI::Status &amp;status) 

This takes in the variable of type MPI::Status. 


So, two questions:

(1). Is there a problem due to incompatible types? If so, how do I fix it?
(2). Why would the MPI::Request::Test take in a different type than what is returned by MPI::COMM_WORLD::ISend(...)?

It would really help if you could help me fix the example that I have shown.

I understand it would be easier to do this in C, but there are project requirements that led me to C++. 

Can someone please help?

Thanks a lot.


Devendra
sd

<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-18082/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18083.php">Richard Walsh: "Re: [OMPI users] Latest Intel Compilers (ICS, version 12.1.0.233 Build 20110811) issues ..."</a>
<li><strong>Previous message:</strong> <a href="18081.php">Ralph Castain: "Re: [OMPI users] possibly undefined macro: AC_PROG_LIBTOOL"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/11/17780.php">Jeff Squyres: "[OMPI users] Open MPI SC'11 BOF slides"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18088.php">Jeff Squyres: "Re: [OMPI users] MPI::Request::Test not working"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/01/18093.php">devendra rai: "[OMPI users] Can we avoid derived datatypes?"</a>
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
