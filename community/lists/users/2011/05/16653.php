<?
$subject_val = "Re: [OMPI users] alltoall messages &gt; 2^26";
include("../../include/msg-header.inc");
?>
<!-- received="Sun May 29 08:49:50 2011" -->
<!-- isoreceived="20110529124950" -->
<!-- sent="Sun, 29 May 2011 15:49:41 +0300" -->
<!-- isosent="20110529124941" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alltoall messages &amp;gt; 2^26" -->
<!-- id="4DE240E5.6050300_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="BANLkTi=jxOSRCG3kbO_JhMCmvY1RnbW6yw_at_mail.gmail.com" -->
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
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-05-29 08:49:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16654.php">Yevgeny Kliteynik: "Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang"</a>
<li><strong>Previous message:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Michael,
<br>
<p>Could you try to run this again with &quot;--mca mpi_leave_pinned 0&quot; parameter?
<br>
I suspect that this might be due to a message size problem - MPI
<br>
tries to do RDMA with a message bigger than what HCA supports.
<br>
<p>-- YK
<br>
<p>On 11-Apr-11 7:44 PM, Michael Di Domenico wrote:
<br>
<span class="quotelev1">&gt; Here's a chunk of code that reproduces the error everytime on my cluster
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you call it with $((2**24)) as a parameter it should run fine, change it to $((2**27)) and it will stall
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Apr 5, 2011 at 11:24 AM, Terry Dontje &lt;terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     It was asked during the community concall whether the below may be related to ticket #2722 <a href="https://svn.open-mpi.org/trac/ompi/ticket/2722">https://svn.open-mpi.org/trac/ompi/ticket/2722</a>?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     --td
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     On 04/04/2011 10:17 PM, David Zhang wrote:
</span><br>
<span class="quotelev2">&gt;&gt;     Any error messages?  Maybe the nodes ran out of memory?  I know MPI implement some kind of buffering under the hood, so even though you're sending array's over 2^26 in size, it may require more than that for MPI to actually send it.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     On Mon, Apr 4, 2011 at 2:16 PM, Michael Di Domenico &lt;mdidomenico4_at_[hidden] &lt;mailto:mdidomenico4_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Has anyone seen an issue where OpenMPI/Infiniband hangs when sending
</span><br>
<span class="quotelev2">&gt;&gt;         messages over 2^26 in size?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         For a reason i have not determined just yet machines on my cluster
</span><br>
<span class="quotelev2">&gt;&gt;         (OpenMPI v1.5 and Qlogic Stack/QDR IB Adapters) is failing to send
</span><br>
<span class="quotelev2">&gt;&gt;         array's over 2^26 in size via the AllToAll collective. (user code)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Further testing seems to indicate that an MPI message over 2^26 fails
</span><br>
<span class="quotelev2">&gt;&gt;         (tested with IMB-MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Running the same test on a different older IB connected cluster seems
</span><br>
<span class="quotelev2">&gt;&gt;         to work, which would seem to indicate a problem with the infiniband
</span><br>
<span class="quotelev2">&gt;&gt;         drivers of some sort rather then openmpi (but i'm not sure).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         Any thoughts, directions, or tests?
</span><br>
<span class="quotelev2">&gt;&gt;         _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;         users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;         users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     -- 
</span><br>
<span class="quotelev2">&gt;&gt;     David Zhang
</span><br>
<span class="quotelev2">&gt;&gt;     University of California, San Diego
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;     -- 
</span><br>
<span class="quotelev1">&gt;     Oracle
</span><br>
<span class="quotelev1">&gt;     Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;     Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;     Oracle *- Performance Technologies*
</span><br>
<span class="quotelev1">&gt;     95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;     Email terry.dontje_at_[hidden] &lt;mailto:terry.dontje_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16654.php">Yevgeny Kliteynik: "Re: [OMPI users] Fwd:  gadget2 infiniband openmpi hang"</a>
<li><strong>Previous message:</strong> <a href="16652.php">Joshua Hursey: "Re: [OMPI users] BLCR support not building on 1.5.3"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/04/16194.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
