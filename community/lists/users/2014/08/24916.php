<?
$subject_val = "Re: [OMPI users] How to keep multiple installations at same time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 12:03:07 2014" -->
<!-- isoreceived="20140805160307" -->
<!-- sent="Tue, 05 Aug 2014 12:04:08 -0400" -->
<!-- isosent="20140805160408" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to keep multiple installations at same time" -->
<!-- id="53E10078.4070203_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="66E9C5F1-1906-4029-A6AA-0F7695371360_at_umich.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] How to keep multiple installations at same time<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 12:04:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24917.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24906.php">Andrew Caird: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24917.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Reply:</strong> <a href="24917.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ahsan
<br>
<p>Besides Andrew's excellent suggestion for the runtime environment.
<br>
<p>For the installation, Open MPI configuration scripts
<br>
and Makefiles support VPATH.
<br>
Hence, you can create two separate directories to
<br>
*build* it with Gnu and Intel compilers.
<br>
Then you launch configure, make, make install from
<br>
each of these dirctories, using the appropriate compilers,
<br>
and pointing to two distinct *installation directories*
<br>
(with configure -prefix).
<br>
<p><p>My two cents,
<br>
Gus Correa
<br>
<p>On 08/04/2014 11:54 PM, Andrew Caird wrote:
<br>
<span class="quotelev1">&gt; Hi Ahsan,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; We, and I think many people, use the Environment Modules software,
</span><br>
<a href="http://modules.sourceforge.net">http://modules.sourceforge.net</a> , to do this.
<br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I hope that helps.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --andy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Aug 4, 2014, at 11:47 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to compile openmpi with both intel and gnu compilers. How can I install both at the same time and then specify which one to use during job submission.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards
</span><br>
<span class="quotelev2">&gt;&gt; Ahsan
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24905.php">http://www.open-mpi.org/community/lists/users/2014/08/24905.php</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24906.php">http://www.open-mpi.org/community/lists/users/2014/08/24906.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24917.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24915.php">Jeff Squyres (jsquyres): "Re: [OMPI users] openmpi 1.8.1 gfortran not working"</a>
<li><strong>In reply to:</strong> <a href="24906.php">Andrew Caird: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24917.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Reply:</strong> <a href="24917.php">Ralph Castain: "Re: [OMPI users] How to keep multiple installations at same time"</a>
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
