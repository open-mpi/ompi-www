<?
$subject_val = "Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 28 12:54:54 2013" -->
<!-- isoreceived="20130128175454" -->
<!-- sent="Mon, 28 Jan 2013 17:54:25 +0000" -->
<!-- isosent="20130128175425" -->
<!-- name="Barrett, Brian W" -->
<!-- email="bwbarre_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script" -->
<!-- id="69A29AB53D57F54D81061A9E4E45B8FD317D7D67_at_EXMB01.srn.sandia.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAFUQeZ23whazzMp7viFY0Ue0UB32y3RktASuuYHJp9HHjMr2=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] [EXTERNAL]  Open MPI Configure Script<br>
<strong>From:</strong> Barrett, Brian W (<em>bwbarre_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-01-28 12:54:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12023.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12021.php">David Beer: "[OMPI devel] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12021.php">David Beer: "[OMPI devel] Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 1/28/13 10:50 AM, &quot;David Beer&quot; &lt;dbeer_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; By way of introduction, I'm a TORQUE developer and I probably should've joined
</span><br>
<span class="quotelev1">&gt; this list - even if only to keep myself informed - years ago.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; At any rate, we're in the process of changing TORQUE so that it compiles using
</span><br>
<span class="quotelev1">&gt; g++ instead of gcc. We're starting to use some C++ constructs to make our
</span><br>
<span class="quotelev1">&gt; lives easier. In doing this, we've noticed that OpenMPI doesn't like TORQUE's
</span><br>
<span class="quotelev1">&gt; libraries when built by gcc, it fails at the configure time claiming in can't
</span><br>
<span class="quotelev1">&gt; find tm_init() in libtorque.so. I've been trying to track down exactly why,
</span><br>
<span class="quotelev1">&gt; and where I am now is making me think that something in the configure script
</span><br>
<span class="quotelev1">&gt; is assuming that TORQUE's libraries are compiled by gcc. Is there someone who
</span><br>
<span class="quotelev1">&gt; could advise me on how to resolve this issue?
</span><br>
<p>We assume that we can link lib torque into a C application (if this is a
<br>
problem for you, it's a huge deal breaker for us, since OMPI is a C
<br>
library).  What does config.log say when checking for tm_init?
<br>
<p>Brian
<br>
<p><pre>
--
  Brian W. Barrett
  Scalable System Software Group
  Sandia National Laboratories
</pre>
<p>
<p>
<br><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12022/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-12022/smime.p7s">smime.p7s</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12023.php">Steve Wise: "Re: [OMPI devel] openib unloaded before last mem dereg"</a>
<li><strong>Previous message:</strong> <a href="12021.php">David Beer: "[OMPI devel] Open MPI Configure Script"</a>
<li><strong>In reply to:</strong> <a href="12021.php">David Beer: "[OMPI devel] Open MPI Configure Script"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
<li><strong>Reply:</strong> <a href="12025.php">David Beer: "Re: [OMPI devel] [EXTERNAL] Open MPI Configure Script"</a>
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
