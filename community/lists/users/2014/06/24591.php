<?
$subject_val = "Re: [OMPI users] --preload-binary does not work";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jun  6 18:44:09 2014" -->
<!-- isoreceived="20140606224409" -->
<!-- sent="Fri, 6 Jun 2014 18:44:08 -0400" -->
<!-- isosent="20140606224408" -->
<!-- name="E.O." -->
<!-- email="ooyama.eiichi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] --preload-binary does not work" -->
<!-- id="CANhoU+jNjncY6vUZ24LpSDZVLPQcZW4TciQ-HJHsk72tw8Dcvg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="66E07046-314D-4B0B-92F1-F1C626C53137_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] --preload-binary does not work<br>
<strong>From:</strong> E.O. (<em>ooyama.eiichi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-06 18:44:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24592.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Previous message:</strong> <a href="24590.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24589.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24592.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Reply:</strong> <a href="24592.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you!
<br>
With the patch, --preload-binary option is working fine.
<br>
However, if I add &quot;--gmca plm_rsh_no_tree_spawn 1&quot; as a mpirun command line
<br>
option, it hangs.
<br>
<p># /mpi/bin/mpirun --allow-run-as-root --gmca plm_rsh_no_tree_spawn 1
<br>
--preload-binary --hostfile /root/.hosts --prefix /mpi --np 120 a.out
<br>
<p>If I ran the command without --preload-binary, it works fine (have to copy
<br>
the binary to each node beforehand of course). I guess this is a different
<br>
issue?
<br>
<p>Eiichi
<br>
<p><p>eiichi
<br>
<p><p><p>On Fri, Jun 6, 2014 at 5:35 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Okay, I found the problem and think I have a fix that I posted (copied EO
</span><br>
<span class="quotelev1">&gt; on it). You are welcome to download the patch and try it. Scheduled for
</span><br>
<span class="quotelev1">&gt; release in 1.8.2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; Ralph
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 1:01 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Yeah, it doesn't require ssh any more - but I haven't tested it in a bit,
</span><br>
<span class="quotelev1">&gt; and so it's possible something crept in there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 12:27 PM, Reuti &lt;reuti_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Am 06.06.2014 um 21:04 schrieb Ralph Castain:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Supposed to, yes - but I don't know how much testing it has seen. I can
</span><br>
<span class="quotelev1">&gt; try to take a look
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Wasn't it on the list recently, that 1.8.1 should do it even without
</span><br>
<span class="quotelev1">&gt; passphraseless SSH between the nodes?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jun 6, 2014, at 12:02 PM, E.O. &lt;ooyama.eiichi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Hello
</span><br>
<span class="quotelev1">&gt; I am using OpenMPI ver 1.8.1 on a cluster of 4 machines.
</span><br>
<span class="quotelev1">&gt; One Redhat 6.2 and three busybox machine. They are all 64bit environment.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I want to use --preload-binary option to send the binary file to hosts but
</span><br>
<span class="quotelev1">&gt; it's not working.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # /mpi/bin/mpirun --prefix /mpi --preload-files ./a.out
</span><br>
<span class="quotelev1">&gt; --allow-run-as-root --np 4 --host box0101,box0103 --preload-binary ./a.out
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; mpirun was unable to launch the specified application as it could not
</span><br>
<span class="quotelev1">&gt; access
</span><br>
<span class="quotelev1">&gt; or execute an executable:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Executable: ./a.out
</span><br>
<span class="quotelev1">&gt; Node: box0101
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; while attempting to start process rank 17.
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 17 total processes failed to start
</span><br>
<span class="quotelev1">&gt; #
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; If I sent the binary by SCP beforehand, the command works fine. SCP is
</span><br>
<span class="quotelev1">&gt; working fine without password between the hosts.
</span><br>
<span class="quotelev1">&gt; Is the option supposed to work?
</span><br>
<span class="quotelev1">&gt; Thank you,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Eiichi
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
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24591/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24592.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Previous message:</strong> <a href="24590.php">Tim Miller: "Re: [OMPI users] OPENIB unknown transport errors"</a>
<li><strong>In reply to:</strong> <a href="24589.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24592.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
<li><strong>Reply:</strong> <a href="24592.php">Ralph Castain: "Re: [OMPI users] --preload-binary does not work"</a>
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
