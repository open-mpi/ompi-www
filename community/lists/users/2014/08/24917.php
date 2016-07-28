<?
$subject_val = "Re: [OMPI users] How to keep multiple installations at same time";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug  5 12:10:44 2014" -->
<!-- isoreceived="20140805161044" -->
<!-- sent="Tue, 5 Aug 2014 09:10:21 -0700" -->
<!-- isosent="20140805161021" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] How to keep multiple installations at same time" -->
<!-- id="BFBE98D9-A07F-4BC4-8D16-9AE5582237A5_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="53E10078.4070203_at_ldeo.columbia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-05 12:10:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24918.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24916.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24916.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24918.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Reply:</strong> <a href="24918.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Since modules isn't a supported s/w package any more, you might consider using LMOD instead:
<br>
<p><a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
<br>
<p><p>On Aug 5, 2014, at 9:04 AM, Gus Correa &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Hi Ahsan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Besides Andrew's excellent suggestion for the runtime environment.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; For the installation, Open MPI configuration scripts
</span><br>
<span class="quotelev1">&gt; and Makefiles support VPATH.
</span><br>
<span class="quotelev1">&gt; Hence, you can create two separate directories to
</span><br>
<span class="quotelev1">&gt; *build* it with Gnu and Intel compilers.
</span><br>
<span class="quotelev1">&gt; Then you launch configure, make, make install from
</span><br>
<span class="quotelev1">&gt; each of these dirctories, using the appropriate compilers,
</span><br>
<span class="quotelev1">&gt; and pointing to two distinct *installation directories*
</span><br>
<span class="quotelev1">&gt; (with configure -prefix).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; My two cents,
</span><br>
<span class="quotelev1">&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 08/04/2014 11:54 PM, Andrew Caird wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi Ahsan,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We, and I think many people, use the Environment Modules software,
</span><br>
<span class="quotelev1">&gt; <a href="http://modules.sourceforge.net">http://modules.sourceforge.net</a> , to do this.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I hope that helps.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --andy
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Aug 4, 2014, at 11:47 PM, Syed Ahsan Ali &lt;ahsanshah01_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I want to compile openmpi with both intel and gnu compilers. How can I install both at the same time and then specify which one to use during job submission.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Regards
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ahsan
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24905.php">http://www.open-mpi.org/community/lists/users/2014/08/24905.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24906.php">http://www.open-mpi.org/community/lists/users/2014/08/24906.php</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/08/24916.php">http://www.open-mpi.org/community/lists/users/2014/08/24916.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24918.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Previous message:</strong> <a href="24916.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>In reply to:</strong> <a href="24916.php">Gus Correa: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24918.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
<li><strong>Reply:</strong> <a href="24918.php">Fabricio Cannini: "Re: [OMPI users] How to keep multiple installations at same time"</a>
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
