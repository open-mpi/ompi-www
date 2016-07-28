<?
$subject_val = "Re: [OMPI users] writev error: Bad address";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 31 16:48:09 2014" -->
<!-- isoreceived="20140131214809" -->
<!-- sent="Fri, 31 Jan 2014 22:48:03 +0100" -->
<!-- isosent="20140131214803" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] writev error: Bad address" -->
<!-- id="9BB66F67-9AA5-4378-971D-4467B7091812_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="52EC10D9.2060400_at_biostat.ucsf.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] writev error: Bad address<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-01-31 16:48:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23520.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23556.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 31.01.2014 um 22:08 schrieb Ross Boylan:
<br>
<p><span class="quotelev1">&gt; I am getting the following error, amidst many successful message sends:
</span><br>
<span class="quotelev1">&gt; [n10][[50048,1],1][../../../../../../ompi/mca/btl/tcp/btl_tcp_frag.c:118:mca_btl_tcp_frag_send] mca_btl_tcp_frag_send: writev error (0x7f6155970038, 578659815)
</span><br>
<span class="quotelev1">&gt;         Bad address(1)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Any ideas about what is going on or what I can do to fix it?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I am using the openmpi-bin 1.4.2-4 Debian package on a cluster running Debian squeeze.
</span><br>
<p>I suggest to move to a newer version, either stable 1.6.5 or feature 1.7.3 before doing further investigation.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; I couldn't find a config.log file; there is /etc/openmpi/openmpi-mca-params.conf, which is completely commented out.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Invocation is from R 3.0.1 (debian package) with Rmpi 0.6.3 built by me from source in a local directory. My sends all use mpi.isend.Robj and the receives use mpi.recv.Robj, both from the Rmpi library.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The jobs were started with rmpilaunch; it and the hosts file are included in the attachments. TCP connections.  rmpilaunch leaves me     in an R session on the master.  I invoked the code inside the toplevel() function toward the bottom of dbox-master.R. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The program source files and other background information is in the attached file.    n10 has the output of ompi_info --all, and n1011 has other info for both nodes that were active (n10 was master; n11 had some slaves).
</span><br>
<span class="quotelev1">&gt; &lt;mpi.tar.bz2&gt;_______________________________________________
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
<li><strong>Next message:</strong> <a href="23520.php">Reuti: "Re: [OMPI users] Compiling OpenMPI with PGI pgc++"</a>
<li><strong>Previous message:</strong> <a href="23518.php">Doug Roberts: "Re: [OMPI users] Connection timed out with multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="23517.php">Ross Boylan: "[OMPI users] writev error: Bad address"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2014/02/23556.php">Ross Boylan: "Re: [OMPI users] writev error: Bad address"</a>
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
