<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov 11 21:26:19 2005" -->
<!-- isoreceived="20051112022619" -->
<!-- sent="Fri, 11 Nov 2005 19:26:15 -0700 (MST)" -->
<!-- isosent="20051112022615" -->
<!-- name="Timothy S. Woodall" -->
<!-- email="twoodall_at_[hidden]" -->
<!-- subject="Re: [O-MPI users] 1.0rc5 is up" -->
<!-- id="49329.128.165.0.81.1131762375.squirrel_at_webmail.lanl.gov" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="op.sz3pefk4ies9li_at_rygel.lnxi.com" -->
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
<strong>From:</strong> Timothy S. Woodall (<em>twoodall_at_[hidden]</em>)<br>
<strong>Date:</strong> 2005-11-11 21:26:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Previous message:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Troy,
<br>
<p>We have very limited openib resources for testing at the moment. Can
<br>
you provide details on how to reproduce?
<br>
<p>Thanks,
<br>
Tim
<br>
<p><span class="quotelev1">&gt; On Fri, 11 Nov 2005 13:12:13 -0700, Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; At long last, 1.0rc5 is available for download.  It fixes all known
</span><br>
<span class="quotelev2">&gt;&gt; issues reported here on the mailing list.  We still have a few minor
</span><br>
<span class="quotelev2">&gt;&gt; issues to work out, but things appear to generally be working now.
</span><br>
<span class="quotelev2">&gt;&gt; Please try to break it:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 	<a href="http://www.open-mpi.org/software/v1.0/">http://www.open-mpi.org/software/v1.0/</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OK.  All tests were also recompiled against RC5.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Notes:
</span><br>
<span class="quotelev1">&gt; I haven't tested with the MVAPI or TCP interfaces yet; only GM, MX, and
</span><br>
<span class="quotelev1">&gt; OpenIB.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The good:  I don't have to use HPL_NO_MPI_DATATYPE to compile HPL or HPCC.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bad:
</span><br>
<span class="quotelev1">&gt; OpenIB frequently crashes with the error:
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib_endpoint.c:135:mca_btl_openib_endpoint_post_send] error
</span><br>
<span class="quotelev1">&gt; posting send request errno says Operation now in progress[0,1,2d
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_openib_endpoint.c:135:mca_btl_openib_endpoint_post_send] error
</span><br>
<span class="quotelev1">&gt; posting send request errno says Operation now in progress
</span><br>
<span class="quotelev1">&gt; [0,1,3][btl_openib_component.c:655:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error in posting pending send
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib_endpoint.c:135:mca_btl_openib_endpoint_post_send] error
</span><br>
<span class="quotelev1">&gt; posting send request errno says Operation now in progress
</span><br>
<span class="quotelev1">&gt; [0,1,2][btl_openib_component.c:655:mca_btl_openib_component_progress]
</span><br>
<span class="quotelev1">&gt; error in posting pending send
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; This is a new issue; the last SVN build I made (around 8058) didn't have
</span><br>
<span class="quotelev1">&gt; this problem.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MX still quits HPL code (as well as IMB) with errors to the tune of:
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt; MX: assertion: &lt;&lt;not yet implemented&gt;&gt;  failed at line 281, file
</span><br>
<span class="quotelev1">&gt; ./mx__shmem.c
</span><br>
<span class="quotelev1">&gt; ***************
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; GM Still wedges itself when executing HPL code, as well as during the
</span><br>
<span class="quotelev1">&gt; 'com' test of presta.  Although it is able to get one iteration further
</span><br>
<span class="quotelev1">&gt; in..._______________________________________________
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
<li><strong>Next message:</strong> <a href="0322.php">Brian Barrett: "Re: [O-MPI users] Tests with current version"</a>
<li><strong>Previous message:</strong> <a href="0320.php">Galen M. Shipman: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>In reply to:</strong> <a href="0317.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
<li><strong>Reply:</strong> <a href="0323.php">Troy Telford: "Re: [O-MPI users] 1.0rc5 is up"</a>
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
