<?
$subject_val = "[OMPI users] Rebuild RPM for CentOS 7.1";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Oct 31 08:09:19 2015" -->
<!-- isoreceived="20151031120919" -->
<!-- sent="Sat, 31 Oct 2015 08:09:14 -0400" -->
<!-- isosent="20151031120914" -->
<!-- name="Oliver" -->
<!-- email="python152_at_[hidden]" -->
<!-- subject="[OMPI users] Rebuild RPM for CentOS 7.1" -->
<!-- id="CAPj7QkmjCcrJMnQYj0cXKsCG_1ADjKBXYxDSGLFwYVRV=fn9Cg_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] Rebuild RPM for CentOS 7.1<br>
<strong>From:</strong> Oliver (<em>python152_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-10-31 08:09:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27964.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
hi all
<br>
<p>I am trying to rebuild 1.10 RPM from the src rpm on Cent OS 7. The build
<br>
process went fine without problem. Whiling trying to install the rpm, I
<br>
encountered the following error:
<br>
<p><p>Examining openmpi-1.10.0-1.x86_64.rpm: openmpi-1.10.0-1.x86_64
<br>
Marking openmpi-1.10.0-1.x86_64.rpm to be installed
<br>
Resolving Dependencies
<br>
--&gt; Running transaction check
<br>
---&gt; Package openmpi.x86_64 0:1.10.0-1 will be installed
<br>
--&gt; Finished Dependency Resolution
<br>
<p>...
<br>
<p>Transaction check error:
<br>
&nbsp;&nbsp;file /usr/bin from install of openmpi-1.10.0-1.x86_64 conflicts with file
<br>
from package filesystem-3.2-18.el7.x86_64
<br>
&nbsp;&nbsp;file /usr/lib64 from install of openmpi-1.10.0-1.x86_64 conflicts with
<br>
file from package filesystem-3.2-18.el7.x86_64
<br>
<p>what am I missing, is there a fix?
<br>
<p>TIA
<br>
<p><pre>
-- 
Oliver
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-27965/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27966.php">Fabian Wein: "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<li><strong>Previous message:</strong> <a href="27964.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Unable to compile for libnumactl and libnumactl-devel"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27969.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27970.php">Gilles Gouaillardet: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2015/11/27973.php">Dave Love: "Re: [OMPI users] Rebuild RPM for CentOS 7.1"</a>
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
