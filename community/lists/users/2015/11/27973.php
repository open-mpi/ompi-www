<?
$subject_val = "Re: [OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov  2 10:01:13 2015" -->
<!-- isoreceived="20151102150113" -->
<!-- sent="Mon, 02 Nov 2015 15:01:09 +0000" -->
<!-- isosent="20151102150109" -->
<!-- name="Dave Love" -->
<!-- email="d.love_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="87y4egqwcq.fsf_at_pc102091.liv.ac.uk" -->
<!-- inreplyto="CAPj7QkmjCcrJMnQYj0cXKsCG_1ADjKBXYxDSGLFwYVRV=fn9Cg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Rebuild RPM for CentOS 7.1<br>
<strong>From:</strong> Dave Love (<em>d.love_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-11-02 10:01:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27972.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">Oliver: "[OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Oliver &lt;python152_at_[hidden]&gt; writes:
<br>
<p><span class="quotelev1">&gt; hi all
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am trying to rebuild 1.10 RPM from the src rpm on Cent OS 7.
</span><br>
<p>I assume that's an OMPI-distributed one.  For an RHEL-like system, you
<br>
either want to take the Fedora source of the appropriate version and
<br>
make any necessary fixes for EPEL7, or adapt the native source to the
<br>
new version.  I've done both for EPEL6 systems, and any changes for
<br>
EPEL7 are probably smaller.
<br>
<p><span class="quotelev1">&gt; The build
</span><br>
<span class="quotelev1">&gt; process went fine without problem. Whiling trying to install the rpm, I
</span><br>
<span class="quotelev1">&gt; encountered the following error:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Examining openmpi-1.10.0-1.x86_64.rpm: openmpi-1.10.0-1.x86_64
</span><br>
<span class="quotelev1">&gt; Marking openmpi-1.10.0-1.x86_64.rpm to be installed
</span><br>
<span class="quotelev1">&gt; Resolving Dependencies
</span><br>
<span class="quotelev1">&gt; --&gt; Running transaction check
</span><br>
<span class="quotelev1">&gt; ---&gt; Package openmpi.x86_64 0:1.10.0-1 will be installed
</span><br>
<span class="quotelev1">&gt; --&gt; Finished Dependency Resolution
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Transaction check error:
</span><br>
<span class="quotelev1">&gt;   file /usr/bin from install of openmpi-1.10.0-1.x86_64 conflicts with file
</span><br>
<span class="quotelev1">&gt; from package filesystem-3.2-18.el7.x86_64
</span><br>
<span class="quotelev1">&gt;   file /usr/lib64 from install of openmpi-1.10.0-1.x86_64 conflicts with
</span><br>
<span class="quotelev1">&gt; file from package filesystem-3.2-18.el7.x86_64
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; what am I missing, is there a fix?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; TIA
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27974.php">Lloyd Brown: "Re: [OMPI users] Setting bind-to none as default via environment?"</a>
<li><strong>Previous message:</strong> <a href="27972.php">Dave Love: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>In reply to:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/10/27965.php">Oliver: "[OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
