<?
$subject_val = "Re: [OMPI users] mpi_comm_spawn have problems with group communicators";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Oct  4 12:37:01 2010" -->
<!-- isoreceived="20101004163701" -->
<!-- sent="Mon, 4 Oct 2010 18:36:56 +0200" -->
<!-- isosent="20101004163656" -->
<!-- name="Milan Hodoscek" -->
<!-- email="milan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] mpi_comm_spawn have problems with group communicators" -->
<!-- id="19626.680.465558.845625_at_ala.cmm.ki.si" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="8EFE65FC-76D2-4882-8893-0AA8612574C3_at_open-mpi.org" -->
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
<strong>From:</strong> Milan Hodoscek (<em>milan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-04 12:36:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14380.php">Storm Zhang: "[OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14378.php">Nico Mittenzwey: "Re: [OMPI users] new open mpi user questions"</a>
<li><strong>In reply to:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;Ralph&quot; == Ralph Castain &lt;rhc_at_[hidden]&gt; writes:
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; I'm not sure why the group communicator would make a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; difference - the code area in question knows nothing about
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; the mpi aspects of the job. It looks like you are hitting a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; race condition that causes a particular internal recv to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; not exist when we subsequently try to cancel it, which
<br>
&nbsp;&nbsp;&nbsp;&nbsp;Ralph&gt; generates that error message.  How did you configure OMPI?
<br>
<p>Thank you for the reply!
<br>
<p>Must be some race problem, but I have no control of it, or do I?
<br>
<p>These are the configure options that gentoo compiles openmpi-1.4.2 with:
<br>
<p>./configure --prefix=/usr --build=x86_64-pc-linux-gnu --host=x86_64-pc-linux-gnu --mandir=/usr/share/man --infodir=/usr/share/info --datadir=/usr/share --sysconfdir=/etc --localstatedir=/var/lib --libdir=/usr/lib64 --sysconfdir=/etc/openmpi --without-xgrid --enable-pretty-print-stacktrace --enable-orterun-prefix-by-default --without-slurm --enable-contrib-no-build=vt --enable-mpi-cxx --disable-io-romio --disable-heterogeneous --without-tm --enable-ipv6
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14380.php">Storm Zhang: "[OMPI users] Bad performance when scattering big size of data?"</a>
<li><strong>Previous message:</strong> <a href="14378.php">Nico Mittenzwey: "Re: [OMPI users] new open mpi user questions"</a>
<li><strong>In reply to:</strong> <a href="14373.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
<li><strong>Reply:</strong> <a href="14381.php">Ralph Castain: "Re: [OMPI users] mpi_comm_spawn have problems with group communicators"</a>
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
