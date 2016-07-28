<?
$subject_val = "Re: [OMPI users] 1.7 hangs with --preload-binary";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  9 21:04:39 2013" -->
<!-- isoreceived="20130410010439" -->
<!-- sent="Tue, 9 Apr 2013 18:04:32 -0700" -->
<!-- isosent="20130410010432" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] 1.7 hangs with --preload-binary" -->
<!-- id="8CEBB9B4-7A71-4927-BC75-18CCB3E20A06_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAPAaA558wy94sno1Qu1W4qySp=Lx9EymG5D=TEvRhLHJtsZOkQ_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] 1.7 hangs with --preload-binary<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-04-09 21:04:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="21696.php">Thomas Vacek: "[OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="21696.php">Thomas Vacek: "[OMPI users] 1.7 hangs with --preload-binary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Reply:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Unfortunately, that functionality fell into disrepair - it is scheduled to be repaired/replaced in v1.7.2.
<br>
<p><p>On Apr 9, 2013, at 4:30 PM, Thomas Vacek &lt;vacek008_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I just built 1.7.  If I distribute the binary, it works fine.  If I use the --preload-binary option, it prints
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [warn] opal_libevent2019_event_base_loop: reentrant invocation.  Only one event_base_loop can run on each event_base at once.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; many times per second.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have bit of an odd configuration: The admins in my organization are too busy to support us, so the installation is in a home folder rather than in the system folders.  That also means no NFS, so it's kind of nice to have the binary distributed by the root node.  I configured with --disable-dlopen, and use -x PATH -x LD_LIBRARY_PATH in the mpirun invocation.  As I said, it works fine if the binary is pre-distributed, but the --preload-binary and ---preload-files options both cause this problem.  This problem occurs with the head node and one slave---I haven't tried larger configurations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tom
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
<li><strong>Next message:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Previous message:</strong> <a href="21696.php">Thomas Vacek: "[OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>In reply to:</strong> <a href="21696.php">Thomas Vacek: "[OMPI users] 1.7 hangs with --preload-binary"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
<li><strong>Reply:</strong> <a href="21698.php">Thomas Vacek: "Re: [OMPI users] 1.7 hangs with --preload-binary"</a>
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
