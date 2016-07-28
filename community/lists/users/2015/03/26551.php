<?
$subject_val = "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Mar 27 13:15:44 2015" -->
<!-- isoreceived="20150327171544" -->
<!-- sent="Fri, 27 Mar 2015 17:15:42 +0000" -->
<!-- isosent="20150327171542" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2" -->
<!-- id="7830CC9C-5C49-4EA8-B52F-D04EB6DC4C79_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="7D435AE2-FD89-4018-BB26-758BE0829C81_at_gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-27 13:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>In reply to:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Reply:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It might be helpful to send all the information listed here:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p><span class="quotelev1">&gt; On Mar 26, 2015, at 10:55 PM, Ralph Castain &lt;rhc.openmpi_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Could you please send us your configure line?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Mar 26, 2015, at 4:47 PM, Hammond, Simon David (-EXP) &lt;sdhammo_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi everyone,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We are trying to compile custom installs of OpenMPI 1.8.4 on our POWER8 Ubuntu system. We can configure and build correctly but when running ompi_info we see many errors like those listed below. It appears that all of the libraries in the ./lib are static (.a) files. It appears that we are unable to get our IB system working as a result.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Can you recommend what we should be doing to ensure this works correctly? 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [node11:104711] mca: base: component_find: unable to open /home/projects/power8/openmpi/1.8.4/gnu/4.8.2/cuda/none/lib/openmpi/mca_compress_bzip: lt_dlerror() returned NULL! (ignored)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks for your help,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Simon Hammond
</span><br>
<span class="quotelev2">&gt;&gt; Center for Computing Research (Scalable Computer Architectures)
</span><br>
<span class="quotelev2">&gt;&gt; Sandia National Laboratories, NM
</span><br>
<span class="quotelev2">&gt;&gt; [Sent from remote connection, please excuse typing errors]
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26547.php">http://www.open-mpi.org/community/lists/users/2015/03/26547.php</a>
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/03/26550.php">http://www.open-mpi.org/community/lists/users/2015/03/26550.php</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Previous message:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>In reply to:</strong> <a href="26550.php">Ralph Castain: "Re: [OMPI users] Errors on POWER8 Ubuntu 14.04u2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
<li><strong>Reply:</strong> <a href="26552.php">Hammond, Simon David (-EXP): "Re: [OMPI users] [EXTERNAL] Re:  Errors on POWER8 Ubuntu 14.04u2"</a>
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
