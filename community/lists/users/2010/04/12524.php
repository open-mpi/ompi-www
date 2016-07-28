<?
$subject_val = "Re: [OMPI users] mpiblast only run in one node";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Apr  2 07:36:31 2010" -->
<!-- isoreceived="20100402113631" -->
<!-- sent="Fri, 2 Apr 2010 07:36:25 -0400" -->
<!-- isosent="20100402113625" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpiblast only run in one node" -->
<!-- id="509355EE-384D-493F-80F5-FDED8B60228D_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="q2r148acf931004011952z6f744c37zd1005062a06efc84_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpiblast only run in one node<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-02 07:36:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12520.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 1, 2010, at 10:52 PM, longbow leo wrote:
<br>
<p><span class="quotelev1">&gt; Thanks a lot for your reply.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now the mpiblast run in only one node both inside and outside a torque job. 
</span><br>
<p>If you're inside a torque job and still seeing everything running on a single host, then something isn't quite right.  Try running a simple diagnostic in a torque job:
<br>
<p>mpirun hostname
<br>
<p>Where &quot;hostname&quot; is just the normal Linux &quot;hostname&quot; command.  It should show you all the hosts that it was launched on.
<br>
<p><span class="quotelev1">&gt; How could I setup a hostlist for open mpi? I haven't found this in the open mpi faq. Thanks.
</span><br>
<p>It's in there somewhere.  Just put one host per line in a file, like this:
<br>
<p>$ cat myhostfile
<br>
host1
<br>
host2
<br>
host3
<br>
host4
<br>
$ mpirun --hostfile myhostfile ...
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12525.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>Previous message:</strong> <a href="12523.php">Ralph Castain: "Re: [OMPI users] Hide Abort output"</a>
<li><strong>In reply to:</strong> <a href="12520.php">longbow leo: "Re: [OMPI users] mpiblast only run in one node"</a>
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
