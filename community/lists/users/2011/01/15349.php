<?
$subject_val = "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 19:46:09 2011" -->
<!-- isoreceived="20110113004609" -->
<!-- sent="Wed, 12 Jan 2011 16:41:26 -0800" -->
<!-- isosent="20110113004126" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: LD_LIBRARY_PATH" -->
<!-- id="C9538A36.DCAE%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D2E4551.7010701_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] More newbie question: LD_LIBRARY_PATH<br>
<strong>From:</strong> Tena Sakai (<em>tsakai_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 19:41:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15348.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15348.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thank you, Gus.
<br>
<p>I agree with what you say about location of OpenMPI software.
<br>
Indeed, /usr/local is nfs-mounted to all cluster nodes, albeit
<br>
a bit unfortunate name &quot;local.&quot;  If/when I have a chance to
<br>
Set up machines, I will make local really local to each node.
<br>
<p>Regards,
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p><p>On 1/12/11 4:20 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On a FAQ page ( 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>),
</span><br>
<span class="quotelev2">&gt;&gt; (under 1. What pre-requisites are necessary for running an Open MPI
</span><br>
<span class="quotelev2">&gt;&gt; job?), I see an example
</span><br>
<span class="quotelev2">&gt;&gt; of LD_LIBRARY_PATH environment variable:
</span><br>
<span class="quotelev2">&gt;&gt;    LD_LIBRARY_PATH: /opt/openmpi/lib
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I compiled the source, a directory /usr/local/lib/openmpi was
</span><br>
<span class="quotelev2">&gt;&gt; generated (with many
</span><br>
<span class="quotelev2">&gt;&gt; files in it).  Given that, do I set D_LIBRARY_PATH to /usr/local/lib or
</span><br>
<span class="quotelev2">&gt;&gt; do I set
</span><br>
<span class="quotelev2">&gt;&gt; it to /usr/local/lib/openmpi?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thank you.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; To /usr/local/lib.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I would suggest not using the default /usr/local to install OpenMPI,
</span><br>
<span class="quotelev1">&gt; since it tends to be  really local to the machine where you built OpenMPI.
</span><br>
<span class="quotelev1">&gt; This will require that you install OpenMPI on all nodes/machines if
</span><br>
<span class="quotelev1">&gt; you want to run programs across a network.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Instead, a simpler way to get OpenMPI available to all nodes,
</span><br>
<span class="quotelev1">&gt; although installing only on one of them (say the head node of your
</span><br>
<span class="quotelev1">&gt; cluster) is to do it in a directory that is shared, typically via NFS.
</span><br>
<span class="quotelev1">&gt; To do so, use the --prefix=/my/shared/OpenMPI/directory option of
</span><br>
<span class="quotelev1">&gt; the configure script.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There are FAQs about this too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Anyway, it may depend on your environment also, whether it is a cluster
</span><br>
<span class="quotelev1">&gt; with a private subnet (where my suggestion is typically used),
</span><br>
<span class="quotelev1">&gt; a bunch of separate computers on a LAN (where the suggestion won't work
</span><br>
<span class="quotelev1">&gt; unless you have a shared NFS directory), or other.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Gus Correa
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
<li><strong>Next message:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15348.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>In reply to:</strong> <a href="15348.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
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
