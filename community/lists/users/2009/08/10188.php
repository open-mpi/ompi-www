<?
$subject_val = "Re: [OMPI users] Two remote machines - asymmetric behavior";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 09:22:04 2009" -->
<!-- isoreceived="20090803132204" -->
<!-- sent="Mon, 03 Aug 2009 15:21:51 +0200" -->
<!-- isosent="20090803132151" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Two remote machines - asymmetric behavior" -->
<!-- id="4A76E46F.5080802_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="c19fcadc0908030559l746b74dct2af626afea8c7608_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Two remote machines - asymmetric behavior<br>
<strong>From:</strong> Tomislav Maric (<em>tomislav.maric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-03 09:21:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10186.php">David Doria: "[OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
David Doria wrote:
<br>
<span class="quotelev1">&gt; I have three machines: mine (daviddoria) and two identical remote
</span><br>
<span class="quotelev1">&gt; machines (cloud3 and cloud6). I can password-less ssh between any pair.
</span><br>
<span class="quotelev1">&gt; The machines are all 32bit running Fedora 11. OpenMPI was installed
</span><br>
<span class="quotelev1">&gt; identically on each. The .bashrc is identical on each. /etc/hosts is
</span><br>
<span class="quotelev1">&gt; identical on each.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I wrote a test &quot;hello world&quot; program to ensure OpenMPI is behaving
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The output is exactly as expected, each node seems to be alive.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [doriad_at_daviddoria MPITest]$ mpirun -H cloud6,daviddoria,cloud3 -np 3
</span><br>
<span class="quotelev1">&gt; hello-mpi
</span><br>
<span class="quotelev1">&gt; Process 1 on daviddoria out of 3
</span><br>
<span class="quotelev1">&gt; Process 2 on cloud3 out of 3
</span><br>
<span class="quotelev1">&gt; Process 0 on cloud6 out of 3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am trying to get a parallel application called Paraview working with
</span><br>
<span class="quotelev1">&gt; these three machines. Paraview is installed identically on each. As a
</span><br>
<span class="quotelev1">&gt; test, I wanted to get it working with two at a time first.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; With cloud3, everything goes smoothly, that is, I tell Paraview to start
</span><br>
<span class="quotelev1">&gt; the server with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh cloud3 mpirun -H cloud3 pvserver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and to connect to the server on cloud3, and I get the following
</span><br>
<span class="quotelev1">&gt; (expected) output:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Listen on port: 11111
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Waiting for client...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Client connected.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I try the same thing on cloud6, it again goes smoothly
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; (I tell Paraview to start the server with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh cloud6 mpirun -H cloud6 pvserver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and connect to the server on cloud6)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Now for the real test...
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I tell Paraview to start the server with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh cloud6 mpirun -H cloud6,cloud3 -np 2 pvserver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and connect to the server on cloud6
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This again connects successfully. However, if I do the reverse:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; ssh cloud3 mpirun -H cloud3,cloud6 -np 2 pvserver
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and connect to the server on cloud3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; it tries and tries for 60 seconds but it can't connect. I just see a
</span><br>
<span class="quotelev1">&gt; bunch of &quot;Failed to connect to server on cloud3&quot; errors.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea what could cause this asymmetric behavior?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; David
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>I'm a newbie, so forgive me if I ask something stupid:
<br>
<p>why are You running ssh command before mpirun command? I'm interested in
<br>
setting up a paraview server on a LAN to pos-tprocess OpenFOAM
<br>
simulation data.
<br>
<p>Just a total newbish comment: doesn't the mpirun in fact call for the
<br>
ssh anyway? And if pvserver is to be run on multiple machines and is
<br>
programmed in Open MPI shouldn't
<br>
<p>mpirun -np procNumber -H host1,host2,host3 pvserver
<br>
<p>be enough to get it going, as well as any other parallel program? Again,
<br>
please excuse my newbiness.
<br>
<p>Best regards,
<br>
<p>Tomislav
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Previous message:</strong> <a href="10187.php">jody: "Re: [OMPI users] fault tolerance in open mpi"</a>
<li><strong>In reply to:</strong> <a href="10186.php">David Doria: "[OMPI users] Two remote machines - asymmetric behavior"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
<li><strong>Reply:</strong> <a href="10189.php">David Doria: "Re: [OMPI users] Two remote machines - asymmetric behavior"</a>
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
