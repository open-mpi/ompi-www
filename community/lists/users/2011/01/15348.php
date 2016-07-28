<?
$subject_val = "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 12 19:20:43 2011" -->
<!-- isoreceived="20110113002043" -->
<!-- sent="Wed, 12 Jan 2011 19:20:33 -0500" -->
<!-- isosent="20110113002033" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] More newbie question: LD_LIBRARY_PATH" -->
<!-- id="4D2E4551.7010701_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="C9537E15.DCA2%tsakai_at_gallo.ucsf.edu" -->
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
<strong>Date:</strong> 2011-01-12 19:20:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15346.php">Tena Sakai: "[OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Tena Sakai wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On a FAQ page ( 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>),
</span><br>
<span class="quotelev1">&gt; (under 1. What pre-requisites are necessary for running an Open MPI 
</span><br>
<span class="quotelev1">&gt; job?), I see an example
</span><br>
<span class="quotelev1">&gt; of LD_LIBRARY_PATH environment variable:
</span><br>
<span class="quotelev1">&gt;    LD_LIBRARY_PATH: /opt/openmpi/lib
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I compiled the source, a directory /usr/local/lib/openmpi was 
</span><br>
<span class="quotelev1">&gt; generated (with many
</span><br>
<span class="quotelev1">&gt; files in it).  Given that, do I set D_LIBRARY_PATH to /usr/local/lib or 
</span><br>
<span class="quotelev1">&gt; do I set
</span><br>
<span class="quotelev1">&gt; it to /usr/local/lib/openmpi?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Tena Sakai
</span><br>
<span class="quotelev1">&gt; tsakai_at_[hidden]
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>To /usr/local/lib.
<br>
<p>I would suggest not using the default /usr/local to install OpenMPI,
<br>
since it tends to be  really local to the machine where you built OpenMPI.
<br>
This will require that you install OpenMPI on all nodes/machines if
<br>
you want to run programs across a network.
<br>
<p>Instead, a simpler way to get OpenMPI available to all nodes,
<br>
although installing only on one of them (say the head node of your 
<br>
cluster) is to do it in a directory that is shared, typically via NFS.
<br>
To do so, use the --prefix=/my/shared/OpenMPI/directory option of
<br>
the configure script.
<br>
<p>There are FAQs about this too.
<br>
<p>Anyway, it may depend on your environment also, whether it is a cluster
<br>
with a private subnet (where my suggestion is typically used),
<br>
a bunch of separate computers on a LAN (where the suggestion won't work 
<br>
unless you have a shared NFS directory), or other.
<br>
<p>Gus Correa
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Previous message:</strong> <a href="15347.php">Tena Sakai: "Re: [OMPI users] Error from mpirun command"</a>
<li><strong>In reply to:</strong> <a href="15346.php">Tena Sakai: "[OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
<li><strong>Reply:</strong> <a href="15349.php">Tena Sakai: "Re: [OMPI users] More newbie question: LD_LIBRARY_PATH"</a>
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
