<?
$subject_val = "Re: [OMPI users] users Digest, Vol 1275, Issue 2; btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul  8 02:42:47 2009" -->
<!-- isoreceived="20090708064247" -->
<!-- sent="Wed, 08 Jul 2009 08:41:58 +0200" -->
<!-- isosent="20090708064158" -->
<!-- name="Jose Gracia" -->
<!-- email="gracia_at_[hidden]" -->
<!-- subject="Re: [OMPI users] users Digest, Vol 1275, Issue 2; btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp" -->
<!-- id="4A543FB6.7000708_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="mailman.17.1246464002.13982.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] users Digest, Vol 1275, Issue 2; btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp<br>
<strong>From:</strong> Jose Gracia (<em>gracia_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-08 02:41:58
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9879.php">Nobuyuki Yamaguchi: "[OMPI users] Is there any correctness tests for openmpi?"</a>
<li><strong>Previous message:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Today's Topics:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    1. Re: btl_openib_connect_oob.c:459:qp_create_one:	errorcreating
</span><br>
<span class="quotelev1">&gt;       qp (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt;    2. Re: [OMPI users]
</span><br>
<span class="quotelev1">&gt;       btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp
</span><br>
<span class="quotelev1">&gt;       (Jeff Squyres)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>------------------------------ Message: 2 Date: Wed, 1 Jul 2009 08:56:50 
<br>
-0400 From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt; Subject: Re: [OMPI users] 
<br>
btl_openib_connect_oob.c:459:qp_create_one:errorcreating qp To: &quot;Open 
<br>
MPI Users&quot; &lt;users_at_[hidden]&gt; Message-ID: 
<br>
&lt;DDC91A3F-AED7-4244-8FA4-A00D4A3454FD_at_[hidden]&gt; Content-Type: 
<br>
text/plain; charset=US-ASCII; format=flowed; delsp=yes On Jul 1, 2009, 
<br>
at 8:01 AM, Jeff Squyres (jsquyres) wrote:
<br>
<p><p>Thanks for the reply,
<br>
<p><p><p><span class="quotelev4"> &gt;&gt; &gt; &gt;[n100501][[40339,1],6][../../../../../ompi/mca/btl/openib/connect/
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; btl_openib_connect_oob.c:459:qp_create_one]
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; error creating qp errno says Cannot allocate memory
</span><br>
<p><p><span class="quotelev1"> &gt; What kind of communication pattern does the application use?  Does it
</span><br>
<span class="quotelev1"> &gt; use all-to-all?
</span><br>
I narrowed the location of the error down a bit. The application 
<br>
calculates gravitational interaction between particles based on a tree 
<br>
algorithm. The error is thrown in a loop over all levels, ie number of 
<br>
tasks. Inside the loop each task potentially communicates via a single 
<br>
call to MPI_Sendrecev, something like:
<br>
<p>for(level = 0; level &lt; nTasks; level++) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;sendTask = ThisTask
<br>
&nbsp;&nbsp;&nbsp;&nbsp;recvTask = ThisTask ^ level
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;if (need_to_exchange_data()) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Sendrecv(buf1, count1, MPI_BYTE, recvTask, tag,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;buf2, count2, MPI_BYTE, sendTask, tag, 	 
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_COMM_WORLD), &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
}
<br>
<p>Message sizes can be anything between 5KB and a couple of MB.
<br>
Typically, the error appears around level&gt;=1030 (out of 2048).
<br>
<p><span class="quotelev1"> &gt;Open MPI makes OpenFabrics verbs (i.e., IB in your
</span><br>
<span class="quotelev1"> &gt;case) connections lazily, so you might not see these problems until
</span><br>
<span class="quotelev1"> &gt;OMPI is trying to make connections -- well past MPI_INIT -- and then
</span><br>
<span class="quotelev1"> &gt;failing when it runs out of HCA QP resources.
</span><br>
<p><span class="quotelev4"> &gt;&gt; &gt; &gt; The cluster uses InfiniBand connections. I am aware only of the
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; following parameter changes (systemwide):
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; btl_openib_ib_min_rnr_timer = 25
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; btl_openib_ib_timeout = 20
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; $&gt; ulimit -l
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; unlimited
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt;
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; I attached:
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; 1) $&gt; ompi_info --all &gt; ompi_info.log
</span><br>
<span class="quotelev4"> &gt;&gt; &gt; &gt; 2) stderr from the PBS: stderr.log
</span><br>
<span class="quotelev2"> &gt; &gt;
</span><br>
<p><span class="quotelev1"> &gt;Open MPI v1.3 is actually quite flexible in how it creates and uses
</span><br>
<span class="quotelev1"> &gt;OpenFabrics QPs.  By default, it likely creates 4 QPs (of varying
</span><br>
<span class="quotelev1"> &gt;buffer sizes) between each pair of MPI processes that connect to each
</span><br>
<span class="quotelev1"> &gt;other.  You can tune this down to be 3, 2, or even 1 QP to reduce the
</span><br>
<span class="quotelev1"> &gt;number of QPs that are being opened (and therefore, presumably, not
</span><br>
<span class="quotelev1"> &gt;exhaust HCA QP resources).
</span><br>
<p><span class="quotelev1"> &gt;Alternatively / additionally, you may wish to enable XRC if you have
</span><br>
<span class="quotelev1"> &gt;recent enough Mellanox HCAs.  This should also save on QP resources.
</span><br>
<p><span class="quotelev1"> &gt;You can set both of these things via the mca_btl_openib_receive_queues
</span><br>
<span class="quotelev1"> &gt;MCA parameter.  It takes a colon-delimited list of receive queues
</span><br>
<span class="quotelev1"> &gt;(which directly imply how many QP's to create).  There are 3 kinds of
</span><br>
<span class="quotelev1"> &gt;entries: per-peer QPs, shared receive queues, and XRC receive queues.
</span><br>
<span class="quotelev1"> &gt;Here's a description of each:
</span><br>
<p>I played around with the number of queues, number of buffers, and buffer 
<br>
size, but nothing really helped.  The default is:
<br>
<p>$ ompi_info --param btl openib --parsable | grep receive_queues
<br>
<p>mca:btl:openib:param:btl_openib_receive_queues:value:
<br>
P,128,256,192,128:S,2048,256,128,32:S,12288,256,128,32:S,65536,256,128,32
<br>
<p>I thought that running with
<br>
$ mpirun -np 2048 -mca mca_btl_openib_receive_queues
<br>
&nbsp;&nbsp;&nbsp;P,128,3000:S,2048,3000:S,12288,3000:S,65536,3000
<br>
<p>would do the trick, but it doesn't.
<br>
<p>Any other idea?
<br>
<p><span class="quotelev1"> &gt; Hope this helps!
</span><br>
Yes, At least I understand the problem now ;-)
<br>
<p><p>Cheers,
<br>
Jose
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9879.php">Nobuyuki Yamaguchi: "[OMPI users] Is there any correctness tests for openmpi?"</a>
<li><strong>Previous message:</strong> <a href="9877.php">rahmani: "Re: [OMPI users] OpenMPI+SGE tight integration works on E6600 core duo systems but not on Q9550 quads"</a>
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
