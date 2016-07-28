<?
$subject_val = "Re: [OMPI users] Help on getting CMA works";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 19 11:57:01 2015" -->
<!-- isoreceived="20150219165701" -->
<!-- sent="Thu, 19 Feb 2015 09:56:59 -0700" -->
<!-- isosent="20150219165659" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help on getting CMA works" -->
<!-- id="20150219165659.GA1830_at_pn1246003.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="54E609F1.5000503_at_giref.ulaval.ca" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help on getting CMA works<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-02-19 11:56:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26353.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26351.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26351.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26353.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26353.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
If you have yama installed you can try:
<br>
<p>echo 1 &gt; /proc/sys/kernel/yama/ptrace_scope
<br>
<p>as root.
<br>
<p>-Nathan
<br>
<p>On Thu, Feb 19, 2015 at 11:06:09AM -0500, Eric Chamberland wrote:
<br>
<span class="quotelev1">&gt; By the way,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I have tried two others things:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #1- I launched it as root:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; mpiexec --mca mca_btl_vader_single_copy_mechanism cma --allow-run-as-root
</span><br>
<span class="quotelev1">&gt; -np 2 ./hw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; #2- Found this (<a href="http://askubuntu.com/questions/146160/what-is-the-ptrace-scope-workaround-for-wine-programs-and-are-there-any-risks">http://askubuntu.com/questions/146160/what-is-the-ptrace-scope-workaround-for-wine-programs-and-are-there-any-risks</a>)
</span><br>
<span class="quotelev1">&gt; and tried this:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; sudo setcap cap_sys_ptrace=eip /tmp/hw
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On both RedHat 6.5 and OpenSuse 12.3 and still get the same error message!!!
</span><br>
<span class="quotelev1">&gt; :-/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sorry, I am not a kernel expert...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What's wrong?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Eric
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 02/18/2015 04:48 PM, &#201;ric Chamberland wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Le 2015-02-18 15:14, Nathan Hjelm a &#233;crit :
</span><br>
<span class="quotelev3">&gt; &gt;&gt;I recommend using vader for CMA. It has code to get around the ptrace
</span><br>
<span class="quotelev3">&gt; &gt;&gt;setting. Run with mca_btl_vader_single_copy_mechanism cma (should be the
</span><br>
<span class="quotelev3">&gt; &gt;&gt;default).
</span><br>
<span class="quotelev2">&gt; &gt;Ok, I tried it, but it gives exactly the same error message!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;Eric
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;-Nathan
</span><br>
<span class="quotelev3">&gt; &gt;&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;On Wed, Feb 18, 2015 at 02:56:01PM -0500, Eric Chamberland wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Hi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;I have configured with &quot;--with-cma&quot; on 2 differents OS (RedHat 6.6 and
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;OpenSuse 12.3), but in both case, I have the following error when
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;launching
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;a simple mpi_hello_world.c example:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;/opt/openmpi-1.8.4_cma/bin/mpiexec --mca btl_sm_use_cma 1 -np 2 /tmp/hw
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;WARNING: Linux kernel CMA support was requested via the
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;btl_vader_single_copy_mechanism MCA variable, but CMA support is
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;not available due to restrictive ptrace settings.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;The vader shared memory BTL will fall back on another single-copy
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;mechanism if one is available. This may result in lower performance.
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;   Local host: compile
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;--------------------------------------------------------------------------
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Hello world from process 0 of 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Hello world from process 1 of 2
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;[compile:23874] 1 more process has sent help message
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;help-btl-vader.txt /
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;cma-permission-denied
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;[compile:23874] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;see all
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;help / error messages
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;After I googled the subject, it seems there is a kernel parameter to
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;modify,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;but I can't find it for OpenSuse 12.3 or RedHat 6.6...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Here is the &quot;config.log&quot; issued from RedHat 6.6...
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;<a href="http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184_cma.gz">http://www.giref.ulaval.ca/~ericc/ompi_bug/config.184_cma.gz</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Thanks,
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Eric
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;Link to this post:
</span><br>
<span class="quotelev4">&gt; &gt;&gt;&gt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26339.php">http://www.open-mpi.org/community/lists/users/2015/02/26339.php</a>
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;Link to this post:
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/community/lists/users/2015/02/26342.php">http://www.open-mpi.org/community/lists/users/2015/02/26342.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/02/26351.php">http://www.open-mpi.org/community/lists/users/2015/02/26351.php</a>
</span><br>
<p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26352/01-part">stored</a>
</ul>
<!-- attachment="01-part" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26353.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Previous message:</strong> <a href="26351.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>In reply to:</strong> <a href="26351.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26353.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
<li><strong>Reply:</strong> <a href="26353.php">Eric Chamberland: "Re: [OMPI users] Help on getting CMA works"</a>
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
