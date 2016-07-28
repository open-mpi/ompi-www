<?
$subject_val = "Re: [OMPI users] singleton spawn regression";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 17 14:14:56 2012" -->
<!-- isoreceived="20121017181456" -->
<!-- sent="Wed, 17 Oct 2012 11:14:49 -0700" -->
<!-- isosent="20121017181449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] singleton spawn regression" -->
<!-- id="A3C8B022-C0B9-4F8A-BF9D-695B45E8466E_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CANjXV69fBRw0wq5UWY4UypdoqQFg+DT6758MVpsje5BmRnf4BA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] singleton spawn regression<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-10-17 14:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="20503.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20501.php">Brian Budge: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>In reply to:</strong> <a href="20501.php">Brian Budge: "Re: [OMPI users] singleton spawn regression"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Huh - that is totally weird. I'll take a look
<br>
<p>On Oct 17, 2012, at 9:02 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ralph -
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; No, it appears that 1.6.3rc1 does not work either.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt;  Brian
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Oct 17, 2012 at 8:31 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Can you please check the 1.6.3 release candidate and see if it is there? I suspect that the issue here is that the patch didn't get into the 1.6.2 official release, and the version numbers in the repo didn't immediately get updated - so the nightly build was still labeled as 1.6.2 even after the official release came out.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Oct 16, 2012, at 10:46 AM, Brian Budge &lt;brian.budge_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all -
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There was a bug in version 1.6.1 that caused singleton spawn not to
</span><br>
<span class="quotelev3">&gt;&gt;&gt; work correctly with multi-machine configurations.  I verified that a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly build of 1.6.2 fixed this issue, in particular 1.6.2a1r27234
</span><br>
<span class="quotelev3">&gt;&gt;&gt; works.  I just grabbed the 1.6.2 official release, and it appears that
</span><br>
<span class="quotelev3">&gt;&gt;&gt; somehow the fix has been removed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I am testing with the simple_spawn.c example.  Instead of passing
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MPI_INFO_NULL to the spawn call, I create an Info object, and set the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &quot;add-host&quot; to a comma delimited list of nodes.  When I run this in the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; nightly mentioned above, without mpirun, everything works as expected
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (the nodes I list in the &quot;add-host&quot; are in the output text of the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; program).  When I run the same code with the released 1.6.2, I get the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; old behavior from 1.6.1 where all slaves run on localhost.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Brian
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<li><strong>Next message:</strong> <a href="20503.php">Ralph Castain: "Re: [OMPI users] Question on ssh search path"</a>
<li><strong>Previous message:</strong> <a href="20501.php">Brian Budge: "Re: [OMPI users] singleton spawn regression"</a>
<li><strong>In reply to:</strong> <a href="20501.php">Brian Budge: "Re: [OMPI users] singleton spawn regression"</a>
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
