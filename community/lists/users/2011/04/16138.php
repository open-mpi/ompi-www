<?
$subject_val = "Re: [OMPI users] alltoall messages &gt; 2^26";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 08:31:19 2011" -->
<!-- isoreceived="20110405123119" -->
<!-- sent="Tue, 5 Apr 2011 08:31:13 -0400" -->
<!-- isosent="20110405123113" -->
<!-- name="Michael Di Domenico" -->
<!-- email="mdidomenico4_at_[hidden]" -->
<!-- subject="Re: [OMPI users] alltoall messages &amp;gt; 2^26" -->
<!-- id="BANLkTi=vkTzY02dhESfj8WybTdo0k8Efig_at_mail.gmail.com" -->
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
<strong>From:</strong> Michael Di Domenico (<em>mdidomenico4_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 08:31:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16139.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16137.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>In reply to:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There are no messages being spit out, but i'm not sure i have all the
<br>
correct debugs turn on.  I turned on -debug-devel -debug-daemons and
<br>
mca_verbose.  but it appears that the process just hangs.
<br>
<p>If it's memory exhaustion its not from the core memory these nodes
<br>
have 48GB of memory, it could be a buffer somewhere, but i'm not sure
<br>
where
<br>
<p>On Mon, Apr 4, 2011 at 10:17 PM, David Zhang &lt;solarbikedz_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Any error messages?&#160; Maybe the nodes ran out of memory?&#160; I know MPI
</span><br>
<span class="quotelev1">&gt; implement some kind of buffering under the hood, so even though you're
</span><br>
<span class="quotelev1">&gt; sending array's over 2^26 in size, it may require more than that for MPI to
</span><br>
<span class="quotelev1">&gt; actually send it.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Mon, Apr 4, 2011 at 2:16 PM, Michael Di Domenico &lt;mdidomenico4_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16139.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16137.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>In reply to:</strong> <a href="16130.php">David Zhang: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16144.php">Terry Dontje: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
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
