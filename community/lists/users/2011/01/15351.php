<?
$subject_val = "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 21:30:19 2011" -->
<!-- isoreceived="20110113023019" -->
<!-- sent="Wed, 12 Jan 2011 21:30:10 -0500" -->
<!-- isosent="20110113023010" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: LD_LIBRARY_PATH" -->
<!-- id="4D2E63B2.3030605_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="C9538A36.DCAE%tsakai_at_gallo.ucsf.edu" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-01-12 21:30:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Thank you, Gus.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I agree with what you say about location of OpenMPI software.
</span><br>
<span class="quotelev1">&gt; Indeed, /usr/local is nfs-mounted to all cluster nodes, albeit
</span><br>
<span class="quotelev1">&gt; a bit unfortunate name &quot;local.&quot;  If/when I have a chance to
</span><br>
<span class="quotelev1">&gt; Set up machines, I will make local really local to each node.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 1/12/11 4:20 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On a FAQ page ( 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; (under 1. What pre-requisites are necessary for running an Open MPI
</span><br>
<span class="quotelev3">&gt;&gt;&gt; job?), I see an example
</span><br>
<span class="quotelev3">&gt;&gt;&gt; of LD_LIBRARY_PATH environment variable:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    LD_LIBRARY_PATH: /opt/openmpi/lib
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; When I compiled the source, a directory /usr/local/lib/openmpi was
</span><br>
<span class="quotelev3">&gt;&gt;&gt; generated (with many
</span><br>
<span class="quotelev3">&gt;&gt;&gt; files in it).  Given that, do I set D_LIBRARY_PATH to /usr/local/lib or
</span><br>
<span class="quotelev3">&gt;&gt;&gt; do I set
</span><br>
<span class="quotelev3">&gt;&gt;&gt; it to /usr/local/lib/openmpi?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev3">&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; To /usr/local/lib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I would suggest not using the default /usr/local to install OpenMPI,
</span><br>
<span class="quotelev2">&gt;&gt; since it tends to be  really local to the machine where you built OpenMPI.
</span><br>
<span class="quotelev2">&gt;&gt; This will require that you install OpenMPI on all nodes/machines if
</span><br>
<span class="quotelev2">&gt;&gt; you want to run programs across a network.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Instead, a simpler way to get OpenMPI available to all nodes,
</span><br>
<span class="quotelev2">&gt;&gt; although installing only on one of them (say the head node of your
</span><br>
<span class="quotelev2">&gt;&gt; cluster) is to do it in a directory that is shared, typically via NFS.
</span><br>
<span class="quotelev2">&gt;&gt; To do so, use the --prefix=/my/shared/OpenMPI/directory option of
</span><br>
<span class="quotelev2">&gt;&gt; the configure script.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; There are FAQs about this too.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway, it may depend on your environment also, whether it is a cluster
</span><br>
<span class="quotelev2">&gt;&gt; with a private subnet (where my suggestion is typically used),
</span><br>
<span class="quotelev2">&gt;&gt; a bunch of separate computers on a LAN (where the suggestion won't work
</span><br>
<span class="quotelev2">&gt;&gt; unless you have a shared NFS directory), or other.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Gus Correa
</span><br>
Hi Tena
<br>
<p>Just out of curiosity, this is not really an OpenMPI issue,
<br>
and I don't know anything about Rmpi either:
<br>
<p>How do you intend to use Rmpi?
<br>
<p>Interactively without any resource manager control (Torque,SGI,etc),
<br>
as in a standalone PC, although utilizing several hosts via MPI?
<br>
<p>Interactively but under resource manager control?
<br>
(E.g., Torque has the -I directive for this type of thing,
<br>
and I guess other resource managers have similar mechanisms.)
<br>
<p>In batch mode, where a full R script runs and eventually exits?
<br>
(Which can be with or without a resource manager.)
<br>
<p>Maybe it is something else.
<br>
<p>Matlab (parallel or not), IDL, etc, just like R[mpi],
<br>
bring about the same type of questions for us here.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15352.php">Ralph Castain: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15350.php">Tena Sakai: "[OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="15355.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
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
