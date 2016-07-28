<?
$subject_val = "Re: [OMPI users] mpi_comm_spawn have problems with group communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 13:05:18 2010" -->
<!-- isoreceived="20101004170518" -->
<!-- sent="Mon, 4 Oct 2010 11:05:10 -0600" -->
<!-- isosent="20101004170510" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_comm_spawn have problems with group communicators" -->
<!-- id="AEA62727-398E-4756-80CD-2110730718AD_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="19626.680.465558.845625_at_ala.cmm.ki.si" -->
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
<strong>Subject:</strong> Re: [OMPI users] mpi_comm_spawn have problems with group communicators<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 13:05:10
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14382.php">Doug Reeder: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14380.php">Storm Zhang: "[OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14385.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14385.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 4, 2010, at 10:36 AM, Milan Hodoscek wrote:
<br>
<p><span class="quotelev2">&gt;&gt;&gt;&gt;&gt;&gt; &quot;Ralph&quot; == Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;    Ralph&gt; I'm not sure why the group communicator would make a
</span><br>
<span class="quotelev1">&gt;    Ralph&gt; difference - the code area in question knows nothing about
</span><br>
<span class="quotelev1">&gt;    Ralph&gt; the mpi aspects of the job. It looks like you are hitting a
</span><br>
<span class="quotelev1">&gt;    Ralph&gt; race condition that causes a particular internal recv to
</span><br>
<span class="quotelev1">&gt;    Ralph&gt; not exist when we subsequently try to cancel it, which
</span><br>
<span class="quotelev1">&gt;    Ralph&gt; generates that error message.  How did you configure OMPI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you for the reply!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Must be some race problem, but I have no control of it, or do I?
</span><br>
<p>Not really. What I don't understand is why your code would work fine when using comm_world, but encounter a race condition when using comm groups. There shouldn't be any timing difference between the two cases.
<br>
<p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; These are the configure options that gentoo compiles openmpi-1.4.2 with:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/usr --build=x86_64-pc-linux-gnu --host=x86_64-pc-linux-gnu --mandir=/usr/share/man --infodir=/usr/share/info --datadir=/usr/share --sysconfdir=/etc --localstatedir=/var/lib --libdir=/usr/lib64 --sysconfdir=/etc/openmpi --without-xgrid --enable-pretty-print-stacktrace --enable-orterun-prefix-by-default --without-slurm --enable-contrib-no-build=vt --enable-mpi-cxx --disable-io-romio --disable-heterogeneous --without-tm --enable-ipv6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>This looks okay.
<br>
<p>I'll have to take a look and see if I can spot something in the code...
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14382.php">Doug Reeder: "Re: [OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14380.php">Storm Zhang: "[OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>In reply to:</strong> <a href="14379.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14385.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14385.php">Milan Hodoscek: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
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
