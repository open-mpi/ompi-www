<?
$subject_val = "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 22:21:06 2011" -->
<!-- isoreceived="20110113032106" -->
<!-- sent="Wed, 12 Jan 2011 19:16:26 -0800" -->
<!-- isosent="20110113031626" -->
<!-- name="Tena Sakai" -->
<!-- email="tsakai_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: LD_LIBRARY_PATH" -->
<!-- id="C953AE8A.DCC0%tsakai_at_gallo.ucsf.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D2E63B2.3030605_at_ldeo.columbia.edu" -->
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
<strong>Date:</strong> 2011-01-12 22:16:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Gus,
<br>
<p><span class="quotelev1">&gt; How do you intend to use Rmpi?
</span><br>
<p>The problem I want to solve/attack is in highly embarrasingly parallel
<br>
nature.  According to a couple of brief tutorials I read, Rmpi favors
<br>
LamMpi and, as I understand, even with emergence of openMPI it hasn't
<br>
been modified in the way to work with openMPI.  What I want to do, in
<br>
concept, is to spawn a master and a bunch of slaves, and have master
<br>
issue appropriate R commands/functions to slaves.
<br>
<p>I have read some R users (including Rmpi author) tell that it does work
<br>
with openMPI, though I cannot get really critical information.  In some
<br>
cases, I find completely erroneous information as well.  That's a bit
<br>
discouraging, but...
<br>
<p>If I cannot get Rmpi to work with openMPI, I am planning to do MPMD with
<br>
openMPI via mpirun command.
<br>
<p>There is an open-source software called r (pronounced little-r) which
<br>
provides hash-bang capability for R and it is nice for command line
<br>
and piping use.  I am hoping that I can use r with mpirun.
<br>
<p>My long-term goal is to launch a bunch of instances on cloud and do the
<br>
(embarrasingly) parallel computing.  Ie., master issues R directives to
<br>
slaves and when all slaves finish it (the master) collects output from
<br>
each slave run and put them together.  The cost of using Amazon's HPC
<br>
cluster is much higher than that of non-hpc machines and since my problem
<br>
is embarrassingly parallel, I don't really need high-speed inter-node
<br>
communications.
<br>
<p>I have heard words like Torque, Slurg(?) that I can use to do mpi resource
<br>
control, but I don't know enough about mpi and don't want to bite more
<br>
than I can chew.  What I want to do at the moment is to get to know openMpi
<br>
to the best I can.
<br>
<p>Tena Sakai
<br>
tsakai_at_[hidden]
<br>
<p>On 1/12/11 6:30 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Thank you, Gus.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I agree with what you say about location of OpenMPI software.
</span><br>
<span class="quotelev2">&gt;&gt; Indeed, /usr/local is nfs-mounted to all cluster nodes, albeit
</span><br>
<span class="quotelev2">&gt;&gt; a bit unfortunate name &quot;local.&quot;  If/when I have a chance to
</span><br>
<span class="quotelev2">&gt;&gt; Set up machines, I will make local really local to each node.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev2">&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On 1/12/11 4:20 PM, &quot;Gus Correa&quot; &lt;gus_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Tena Sakai wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On a FAQ page (
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>),
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; (under 1. What pre-requisites are necessary for running an Open MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; job?), I see an example
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; of LD_LIBRARY_PATH environment variable:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;    LD_LIBRARY_PATH: /opt/openmpi/lib
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; When I compiled the source, a directory /usr/local/lib/openmpi was
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; generated (with many
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; files in it).  Given that, do I set D_LIBRARY_PATH to /usr/local/lib or
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; do I set
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; it to /usr/local/lib/openmpi?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thank you.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Tena Sakai
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To /usr/local/lib.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I would suggest not using the default /usr/local to install OpenMPI,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; since it tends to be  really local to the machine where you built OpenMPI.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; This will require that you install OpenMPI on all nodes/machines if
</span><br>
<span class="quotelev3">&gt;&gt;&gt; you want to run programs across a network.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Instead, a simpler way to get OpenMPI available to all nodes,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; although installing only on one of them (say the head node of your
</span><br>
<span class="quotelev3">&gt;&gt;&gt; cluster) is to do it in a directory that is shared, typically via NFS.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; To do so, use the --prefix=/my/shared/OpenMPI/directory option of
</span><br>
<span class="quotelev3">&gt;&gt;&gt; the configure script.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; There are FAQs about this too.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Anyway, it may depend on your environment also, whether it is a cluster
</span><br>
<span class="quotelev3">&gt;&gt;&gt; with a private subnet (where my suggestion is typically used),
</span><br>
<span class="quotelev3">&gt;&gt;&gt; a bunch of separate computers on a LAN (where the suggestion won't work
</span><br>
<span class="quotelev3">&gt;&gt;&gt; unless you have a shared NFS directory), or other.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Gus Correa
</span><br>
<span class="quotelev1">&gt; Hi Tena
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Just out of curiosity, this is not really an OpenMPI issue,
</span><br>
<span class="quotelev1">&gt; and I don't know anything about Rmpi either:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; How do you intend to use Rmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interactively without any resource manager control (Torque,SGI,etc),
</span><br>
<span class="quotelev1">&gt; as in a standalone PC, although utilizing several hosts via MPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Interactively but under resource manager control?
</span><br>
<span class="quotelev1">&gt; (E.g., Torque has the -I directive for this type of thing,
</span><br>
<span class="quotelev1">&gt; and I guess other resource managers have similar mechanisms.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In batch mode, where a full R script runs and eventually exits?
</span><br>
<span class="quotelev1">&gt; (Which can be with or without a resource manager.)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Maybe it is something else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Matlab (parallel or not), IDL, etc, just like R[mpi],
</span><br>
<span class="quotelev1">&gt; bring about the same type of questions for us here.
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
<li><strong>Next message:</strong> <a href="15356.php">Tena Sakai: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>Previous message:</strong> <a href="15354.php">Gus Correa: "Re: [OMPI users] More newbie question: --hostfile option"</a>
<li><strong>In reply to:</strong> <a href="15351.php">Gus Correa: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
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
