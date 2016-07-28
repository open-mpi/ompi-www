<?
$subject_val = "Re: [OMPI users] After OS Update MPI_Init fails on one host";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 20 16:14:57 2013" -->
<!-- isoreceived="20130720201457" -->
<!-- sent="Sat, 20 Jul 2013 13:14:49 -0700" -->
<!-- isosent="20130720201449" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] After OS Update MPI_Init fails on one host" -->
<!-- id="BCDC5B59-6678-4679-B416-87DD359A5DD7_at_open-mpi.org" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="51EAEE09.1030107_at_ohio.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] After OS Update MPI_Init fails on one host<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-20 16:14:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22357.php">Saliya Ekanayake: "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Previous message:</strong> <a href="22355.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22355.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ah! That would indicate an issue with the external hwloc package they provided, which is the big reason we don't recommend installing from packages. We have internal copies of hwloc and libevent that ensure (a) they are at the proper level, and (b) they are configured properly for OMPI's use.
<br>
<p>We've had that debate with the Fedora folks recently - they won't take our advice, so I'm afraid you'll just need to build from source to have something usable.
<br>
<p>On Jul 20, 2013, at 1:07 PM, &quot;Kevin H. Hobbs&quot; &lt;hobbsk_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; On 07/20/2013 10:28 AM, Ralph Castain wrote:
</span><br>
<span class="quotelev2">&gt;&gt; avoid the packages as you have no idea how they were built
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So I built openmpi-1.6.5 from the tar ball and of course
</span><br>
<span class="quotelev1">&gt; everything works fine.... well my simple program got through
</span><br>
<span class="quotelev1">&gt; Mpi_init and printed its rank.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I configured it very simply :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure --prefix=/opt/openmpi-1.6.5
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and I noticed that the generated program does not link hwloc like
</span><br>
<span class="quotelev1">&gt; the program did when I used the system mpicc.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I looked at the installed the openmpi source rpm and took a look
</span><br>
<span class="quotelev1">&gt; at the configure section and it uses --with-hwloc=/usr so I
</span><br>
<span class="quotelev1">&gt; reconfigured the openmpi-1.6.5 source with :
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  ./configure \
</span><br>
<span class="quotelev1">&gt;    --prefix=/opt/openmpi-1.6.5 \
</span><br>
<span class="quotelev1">&gt;    --with-hwloc=/usr
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and when I rebuilt my program with the generated openmpi my error
</span><br>
<span class="quotelev1">&gt; returns.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22357.php">Saliya Ekanayake: "[OMPI users] UnsatisfiedLinkError - libmpi_java.so.0.0.0"</a>
<li><strong>Previous message:</strong> <a href="22355.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>In reply to:</strong> <a href="22355.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
<li><strong>Reply:</strong> <a href="22358.php">Kevin H. Hobbs: "Re: [OMPI users] After OS Update MPI_Init fails on one host"</a>
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
