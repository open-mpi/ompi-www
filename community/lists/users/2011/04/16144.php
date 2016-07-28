<?
$subject_val = "Re: [OMPI users] alltoall messages &gt; 2^26";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 11:22:19 2011" -->
<!-- isoreceived="20110405152219" -->
<!-- sent="Tue, 05 Apr 2011 11:24:20 -0400" -->
<!-- isosent="20110405152420" -->
<!-- name="Terry Dontje" -->
<!-- email="terry.dontje_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alltoall messages &amp;gt; 2^26" -->
<!-- id="4D9B3424.60900_at_oracle.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTinYLjua18FEXjGTC9m0xHd5_0+9GQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] alltoall messages &gt; 2^26<br>
<strong>From:</strong> Terry Dontje (<em>terry.dontje_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 11:24:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Previous message:</strong> <a href="16143.php">Warnett, Jason: "[OMPI users] Not pointing to correct libraries"</a>
<li><strong>In reply to:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It was asked during the community concall whether the below may be 
<br>
related to ticket #2722 <a href="https://svn.open-mpi.org/trac/ompi/ticket/2722">https://svn.open-mpi.org/trac/ompi/ticket/2722</a>?
<br>
<p>--td
<br>
<p>On 04/04/2011 10:17 PM, David Zhang wrote:
<br>
<span class="quotelev1">&gt; Any error messages?  Maybe the nodes ran out of memory?  I know MPI 
</span><br>
<span class="quotelev1">&gt; implement some kind of buffering under the hood, so even though you're 
</span><br>
<span class="quotelev1">&gt; sending array's over 2^26 in size, it may require more than that for 
</span><br>
<span class="quotelev1">&gt; MPI to actually send it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 4, 2011 at 2:16 PM, Michael Di Domenico 
</span><br>
<span class="quotelev1">&gt; &lt;mdidomenico4_at_[hidden] &lt;mailto:mdidomenico4_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Has anyone seen an issue where OpenMPI/Infiniband hangs when sending
</span><br>
<span class="quotelev1">&gt;     messages over 2^26 in size?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     For a reason i have not determined just yet machines on my cluster
</span><br>
<span class="quotelev1">&gt;     (OpenMPI v1.5 and Qlogic Stack/QDR IB Adapters) is failing to send
</span><br>
<span class="quotelev1">&gt;     array's over 2^26 in size via the AllToAll collective. (user code)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Further testing seems to indicate that an MPI message over 2^26 fails
</span><br>
<span class="quotelev1">&gt;     (tested with IMB-MPI)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Running the same test on a different older IB connected cluster seems
</span><br>
<span class="quotelev1">&gt;     to work, which would seem to indicate a problem with the infiniband
</span><br>
<span class="quotelev1">&gt;     drivers of some sort rather then openmpi (but i'm not sure).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Any thoughts, directions, or tests?
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; David Zhang
</span><br>
<span class="quotelev1">&gt; University of California, San Diego
</span><br>
<span class="quotelev1">&gt;
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
<p><p><pre>
-- 
Oracle
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle *- Performance Technologies*
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</pre>
<p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16144/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16144/02-part" alt="picture">
<!-- attachment="02-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16145.php">Terry Dontje: "Re: [OMPI users] Not pointing to correct libraries"</a>
<li><strong>Previous message:</strong> <a href="16143.php">Warnett, Jason: "[OMPI users] Not pointing to correct libraries"</a>
<li><strong>In reply to:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
