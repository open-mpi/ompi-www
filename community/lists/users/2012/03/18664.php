<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar  2 10:58:51 2012" -->
<!-- isoreceived="20120302155851" -->
<!-- sent="Fri, 02 Mar 2012 10:58:44 -0500" -->
<!-- isosent="20120302155844" -->
<!-- name="Prentice Bisbal" -->
<!-- email="prentice_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1" -->
<!-- id="4F50EE34.9080702_at_ias.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="8C5F3514-D043-4919-A767-1941B006E03F_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1<br>
<strong>From:</strong> Prentice Bisbal (<em>prentice_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-02 10:58:44
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18663.php">George Bosilca: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18617.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 02/29/2012 03:15 PM, Jeffrey Squyres wrote:
<br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 2:57 PM, Jingcha Joba wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So if I understand correctly, if a message size is smaller than it will use the MPI way (non-RDMA, 2 way communication), if its larger, then it would use the Open Fabrics, by using the ibverbs (and ofed stack) instead of using the MPI's stack?
</span><br>
<span class="quotelev1">&gt; Er... no.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; So let's talk MPI-over-OpenFabrics-verbs specifically.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; All MPI communication calls will use verbs under the covers.  They may use verbs send/receive semantics in some cases, and RDMA semantics in other cases.  &quot;It depends&quot; -- on a lot of things, actually.  It's hard to come up with a good rule of thumb for when it uses one or the other; this is one of the reasons that the openib BTL code is so complex.  :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The main points here are:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 1. you can trust the openib BTL to do the Best thing possible to get the message to the other side.  Regardless of whether that message is an MPI_SEND or an MPI_PUT (for example).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2. MPI_PUT does not necessarily == verbs RDMA write (and likewise, MPI_GET does not necessarily == verbs RDMA read).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; If so, could that be the reason why the MPI_Put &quot;hangs&quot; when sending a message more than 512KB (or may be 1MB)?
</span><br>
<span class="quotelev1">&gt; No.  I'm guessing that there's some kind of bug in the MPI_PUT implementation.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Also is there a way to know if for a particular MPI call, OF uses send/recv or RDMA exchange?
</span><br>
<span class="quotelev1">&gt; Not really.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; More specifically: all things being equal, you don't care which is used.  You just want your message to get to the receiver/target as fast as possible.  One of the main ideas of MPI is to hide those kinds of details from the user.  I.e., you call MPI_SEND.  A miracle occurs.  The message is received on the other side.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; :-)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Nice use of the &quot;A Miracle Occurs&quot; meme. We really need t-shirts that
<br>
say this for the OpenMPI BoF at SC12.
<br>
<p><pre>
--
Prentice
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18665.php">Prentice Bisbal: "Re: [OMPI users] ssh between nodes"</a>
<li><strong>Previous message:</strong> <a href="18663.php">George Bosilca: "Re: [OMPI users] compilation error with pgcc Unknown switch"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2012/02/18617.php">Jeffrey Squyres: "Re: [OMPI users] [EXTERNAL] Re: Question regarding osu-benchamarks 3.1.1"</a>
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
