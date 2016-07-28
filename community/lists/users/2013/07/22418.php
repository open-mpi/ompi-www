<?
$subject_val = "Re: [OMPI users] requirement on ssh when run openmpi";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jul 31 18:45:50 2013" -->
<!-- isoreceived="20130731224550" -->
<!-- sent="Thu, 1 Aug 2013 06:45:31 +0800 (CST)" -->
<!-- isosent="20130731224531" -->
<!-- name="meng " -->
<!-- email="qsmeng_at_[hidden]" -->
<!-- subject="Re: [OMPI users] requirement on ssh when run openmpi" -->
<!-- id="30c2f966.1831.14036e85a8c.Coremail.qsmeng_at_126.com" -->
<!-- charset="GBK" -->
<!-- inreplyto="82239E2F-6BEE-490B-9DBC-1B458AC50BAF_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] requirement on ssh when run openmpi<br>
<strong>From:</strong> meng  (<em>qsmeng_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-07-31 18:45:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22419.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>In reply to:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22419.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22419.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Dear Dani and Reuti,
<br>
&nbsp;
<br>
<p><span class="quotelev2">&gt;&gt; either install openmpi on each node, and setup  /etc/profile.d/openmpi.{c,}sh and /etc/ld.so.conf.d/openmpi.conf files on both (preferred) or install to a common file system (e.g. nfs mount) and still use profile and ldconfig to setup environment. &gt;
</span><br>
&nbsp;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I choose to install openmpi on each mode. 
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;But I dont know the difference between the following the two methods in setting PATH. First method, I set PATH ans LD_LIBRARY_PATH in .bashrc and then source .bashrc. The second as Dani suggested. But it seems not easy to set openmpi.csh.
<br>
<p><span class="quotelev1">&gt;Where was Open MPI installed to? Maybe you need to set the $PATH for a non-interactive login in your ~/.bashrc to include this location on the slave node.
</span><br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I install openmpi at /usr/local/openmpi-1.6.5 on both computers. and the two computers now can access each other without passwd required. I set the path and ld_library_path in .bashrc and source it.
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;I still get the problems as before. In detail, the problem is as follows:
<br>
<p>&nbsp;bash: orted: command not found
<br>
--------------------------------------------------------------------------
<br>
A daemon (pid 9118) died unexpectedly with status 127 while attempting
<br>
to launch so we are aborting.
<br>
<p>There may be more information reported by the environment (see above).
<br>
<p>This may be because the daemon was unable to find all the needed shared
<br>
libraries on the remote node. You may set your LD_LIBRARY_PATH to have the
<br>
location of the shared libraries on the remote nodes and this will
<br>
automatically be forwarded to the remote nodes.
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
mpiexec noticed that the job aborted, but has no info as to the process
<br>
that caused that situation.
<br>
Thank you.
<br>
Best regards,
<br>
meng
<br>
<p><p>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-22418/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22419.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Previous message:</strong> <a href="22417.php">christian schmitt: "Re: [OMPI users] openmpi+infiniband"</a>
<li><strong>In reply to:</strong> <a href="22405.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22419.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="22419.php">Jeff Squyres (jsquyres): "Re: [OMPI users] requirement on ssh when run openmpi"</a>
<li><strong>Reply:</strong> <a href="http://www.open-mpi.org/community/lists/users/2013/08/22421.php">Reuti: "Re: [OMPI users] requirement on ssh when run openmpi"</a>
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
