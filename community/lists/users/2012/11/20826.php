<?
$subject_val = "Re: [OMPI users] (no subject)";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Nov 30 11:32:51 2012" -->
<!-- isoreceived="20121130163251" -->
<!-- sent="Fri, 30 Nov 2012 10:32:47 -0600" -->
<!-- isosent="20121130163247" -->
<!-- name="Josh Hursey" -->
<!-- email="jjhursey_at_[hidden]" -->
<!-- subject="Re: [OMPI users] (no subject)" -->
<!-- id="CAANzjEkuD5N9g3ewh5exuJGm4HDLvp3_Y4pDLhGtwAbf1BQTfQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1353337145.7331.YahooMailClassic_at_web190803.mail.sg3.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] (no subject)<br>
<strong>From:</strong> Josh Hursey (<em>jjhursey_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-11-30 11:32:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20827.php">Josh Hursey: "Re: [OMPI users] MCA crs: none (MCA v2.0, API v2.0, Component v1.6.3)"</a>
<li><strong>Previous message:</strong> <a href="20825.php">Jeff Squyres: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20738.php">sri pramoda: "[OMPI users] (no subject)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Pramoda,
<br>
<p>That paper was exploring an application of a proposed extension to the MPI
<br>
standard for fault tolerance purposes. By default this proposed interface
<br>
is not provided by Open MPI. We have created a prototype version of Open
<br>
MPI that includes this extension, and it can be found at the following
<br>
website:
<br>
&nbsp;&nbsp;<a href="http://fault-tolerance.org/">http://fault-tolerance.org/</a>
<br>
<p>You should look at the interfaces in the new proposal (ULFM Specification)
<br>
since MPI_Comm_validate_rank is no longer part of the proposal. You can get
<br>
the same functionality through some of the new interfaces that replace it.
<br>
There are some examples on that website, and in the proposal that should
<br>
help you as well.
<br>
<p>Best,
<br>
Josh
<br>
<p>On Mon, Nov 19, 2012 at 8:59 AM, sri pramoda &lt;sri_pramoda_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Dear Sir,
</span><br>
<span class="quotelev1">&gt;                 I am Pramoda,PG scholar from Jadavpur Univesity,India.
</span><br>
<span class="quotelev1">&gt;  I've gone through a paper &quot;Building a Fault Tolerant MPI Application:
</span><br>
<span class="quotelev1">&gt;  A Ring Communication Example&quot;.In this I found MPI_Comm_validate_rank
</span><br>
<span class="quotelev1">&gt; command.
</span><br>
<span class="quotelev1">&gt;  But I didn't found this command in mpi. Hence I request you to please
</span><br>
<span class="quotelev1">&gt; send me    the implementation of this command.
</span><br>
<span class="quotelev1">&gt;                 Thank you,
</span><br>
<span class="quotelev1">&gt;                               Pramoda.
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
<p><p><p><pre>
-- 
Joshua Hursey
Assistant Professor of Computer Science
University of Wisconsin-La Crosse
<a href="http://cs.uwlax.edu/~jjhursey">http://cs.uwlax.edu/~jjhursey</a>
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-20826/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20827.php">Josh Hursey: "Re: [OMPI users] MCA crs: none (MCA v2.0, API v2.0, Component v1.6.3)"</a>
<li><strong>Previous message:</strong> <a href="20825.php">Jeff Squyres: "Re: [OMPI users] cluster with iOS or Android devices?"</a>
<li><strong>In reply to:</strong> <a href="20738.php">sri pramoda: "[OMPI users] (no subject)"</a>
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
