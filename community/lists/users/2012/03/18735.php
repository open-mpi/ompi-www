<?
$subject_val = "Re: [OMPI users] InfiniBand path migration not working";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Mar 11 04:05:33 2012" -->
<!-- isoreceived="20120311080533" -->
<!-- sent="Sun, 11 Mar 2012 10:05:23 +0200" -->
<!-- isosent="20120311080523" -->
<!-- name="Yevgeny Kliteynik" -->
<!-- email="kliteyn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] InfiniBand path migration not working" -->
<!-- id="4F5C5CC3.4060302_at_dev.mellanox.co.il" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4C9FF481-2934-4888-926C-25B462BD5A4C_at_ornl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] InfiniBand path migration not working<br>
<strong>From:</strong> Yevgeny Kliteynik (<em>kliteyn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-03-11 04:05:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Previous message:</strong> <a href="18734.php">Timothy Stitt: "[OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18713.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I just noticed that my previous mail bounced,
<br>
but it doesn't matter. Please ignore it if
<br>
you got it anyway - I re-read the thread and
<br>
there is a much simpler way to do it.
<br>
<p>If you want to check whether LID L is reachable
<br>
through HCA H from port P, you can run this command:
<br>
<p>&nbsp;&nbsp;&nbsp;smpquery --Ca H --Port P NodeInfo L
<br>
<p>Example:
<br>
<p>&nbsp;&nbsp;&nbsp;smpquery --Ca mlx4_0 --Port 2 NodeInfo 4
<br>
<p>If you don't get response or you get info of
<br>
the device different that what you would expect,
<br>
then the two ports are not part of the same
<br>
subnet, and APN is expected to fail.
<br>
Otherwise - it's probably a bug.
<br>
<p>-- YK
<br>
<p><p>On 08-Mar-12 5:44 PM, Shamis, Pavel wrote:
<br>
<span class="quotelev1">&gt; Jeremy,
</span><br>
<span class="quotelev1">&gt; Finally I had a chance to look at log file.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Initially all qps are created on port 1, and in the same time alternative path loaded (ports 2, lids 4 and 2 ). I guess in some point you switch off port 1, APM even is reported because the alternative path is active now, and from some reason IB message is dropped.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may ignore the APM warning. Essentially since the alternative path is active now, it is trying to see if OMPI may pre-load next good path for potential future failure on port 2. Since port 3 does not exist it reports the warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My educated guess is that from some reason it is no direct connection path between lid-2 and lid-4. To prove it we have to look and the OpenSM routing information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On the mail list we have a representative from Mellanox that should be able to help us extract the routing information.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Evgeny,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Can you please help ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Pavel (Pasha) Shamis
</span><br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev1">&gt; Application Performance Tools Group
</span><br>
<span class="quotelev1">&gt; Computer Science and Math Division
</span><br>
<span class="quotelev1">&gt; Oak Ridge National Laboratory
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Feb 29, 2012, at 5:38 PM, Jeremy wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Hi Pasha,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Wed, Feb 29, 2012 at 11:02 AM, Shamis, Pavel&lt;shamisp_at_[hidden]&gt;  wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would like to see all the file.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 28MB is it the size after compression ?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I think gmail supports up to 25Mb.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You may try to create gzip file and then slice it using &quot;split&quot; command.
</span><br>
<span class="quotelev2">&gt;&gt; See attached. At about line 151311 is when I unplugged the cable from
</span><br>
<span class="quotelev2">&gt;&gt; Port 1. Then I see the APM error message at about line 178905.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -Jeremy
</span><br>
<span class="quotelev2">&gt;&gt; &lt;debug.txt.bz2&gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="18736.php">Eric Chamberland: "Re: [OMPI users] Newbi question about MPI_wait vs MPI_wait any"</a>
<li><strong>Previous message:</strong> <a href="18734.php">Timothy Stitt: "[OMPI users] MPI_TAG_UB printing zero with Intel Compiler"</a>
<li><strong>In reply to:</strong> <a href="18713.php">Shamis, Pavel: "Re: [OMPI users] InfiniBand path migration not working"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
<li><strong>Reply:</strong> <a href="18737.php">Jeremy: "Re: [OMPI users] InfiniBand path migration not working"</a>
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
