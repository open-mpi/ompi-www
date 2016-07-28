<?
$subject_val = "Re: [OMPI users] alltoall messages &gt; 2^26";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Apr 11 12:45:04 2011" -->
<!-- isoreceived="20110411164504" -->
<!-- sent="Mon, 11 Apr 2011 12:44:56 -0400" -->
<!-- isosent="20110411164456" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alltoall messages &amp;gt; 2^26" -->
<!-- id="BANLkTi=jxOSRCG3kbO_JhMCmvY1RnbW6yw_at_mail.gmail.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4D9B3424.60900_at_oracle.com" -->
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
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-11 12:44:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Here's a chunk of code that reproduces the error everytime on my cluster
<br>
<p>If you call it with $((2**24)) as a parameter it should run fine, change it
<br>
to $((2**27)) and it will stall
<br>
<p>On Tue, Apr 5, 2011 at 11:24 AM, Terry Dontje &lt;terry.dontje_at_[hidden]&gt;wrote:
<br>
<p><span class="quotelev1">&gt;  It was asked during the community concall whether the below may be related
</span><br>
<span class="quotelev1">&gt; to ticket #2722 <a href="https://svn.open-mpi.org/trac/ompi/ticket/2722">https://svn.open-mpi.org/trac/ompi/ticket/2722</a>?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --td
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On 04/04/2011 10:17 PM, David Zhang wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any error messages?  Maybe the nodes ran out of memory?  I know MPI
</span><br>
<span class="quotelev1">&gt; implement some kind of buffering under the hood, so even though you're
</span><br>
<span class="quotelev1">&gt; sending array's over 2^26 in size, it may require more than that for MPI to
</span><br>
<span class="quotelev1">&gt; actually send it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 4, 2011 at 2:16 PM, Michael Di Domenico &lt;
</span><br>
<span class="quotelev1">&gt; mdidomenico4_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Has anyone seen an issue where OpenMPI/Infiniband hangs when sending
</span><br>
<span class="quotelev2">&gt;&gt; messages over 2^26 in size?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; For a reason i have not determined just yet machines on my cluster
</span><br>
<span class="quotelev2">&gt;&gt; (OpenMPI v1.5 and Qlogic Stack/QDR IB Adapters) is failing to send
</span><br>
<span class="quotelev2">&gt;&gt; array's over 2^26 in size via the AllToAll collective. (user code)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Further testing seems to indicate that an MPI message over 2^26 fails
</span><br>
<span class="quotelev2">&gt;&gt; (tested with IMB-MPI)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Running the same test on a different older IB connected cluster seems
</span><br>
<span class="quotelev2">&gt;&gt; to work, which would seem to indicate a problem with the infiniband
</span><br>
<span class="quotelev2">&gt;&gt; drivers of some sort rather then openmpi (but i'm not sure).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any thoughts, directions, or tests?
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
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
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [image: Oracle]
</span><br>
<span class="quotelev1">&gt; Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt; Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;  Oracle * - Performance Technologies*
</span><br>
<span class="quotelev1">&gt;  95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt; Email terry.dontje_at_[hidden]
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
<span class="quotelev1">&gt;
</span><br>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16194/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16194/mpia2a.c">mpia2a.c</a>
</ul>
<!-- attachment="mpia2a.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16195.php">Kevin.Buckley_at_[hidden]: "Re: [OMPI users] SGE and openmpi"</a>
<li><strong>Previous message:</strong> <a href="16193.php">Stergiou, Jonathan C CIV NSWCCD West Bethesda, 6640: "[OMPI users] OpenMPI 1.4.2 Hangs When Using More Than 1 Proc"</a>
<li><strong>In reply to:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2011/05/16653.php">Yevgeny Kliteynik: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
