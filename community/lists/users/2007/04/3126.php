<? include("../../include/msg-header.inc"); ?>
<!-- received="Tue Apr 24 10:00:47 2007" -->
<!-- isoreceived="20070424140047" -->
<!-- sent="Tue, 24 Apr 2007 16:00:20 +0200 (MEST)" -->
<!-- isosent="20070424140020" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Call for Help: CPU topology needed!" -->
<!-- id="Pine.GSO.4.56.0704241538480.5512_at_turing" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="462D0AAD.70202_at_informatik.uni-halle.de" -->
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
<strong>From:</strong> Bert Wesarg (<em>wesarg_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-24 10:00:20
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3127.php">Jeff Squyres: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>In reply to:</strong> <a href="3118.php">Bert Wesarg: "[OMPI users] Call for Help: CPU topology needed!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>On Mon, 23 Apr 2007, Bert Wesarg wrote:
<br>
<p><span class="quotelev1">&gt; Hello all,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Instructions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; # assume you have mounted the sysfs on /sys
</span><br>
<span class="quotelev1">&gt; $ cd /sys
</span><br>
<span class="quotelev1">&gt; $ tar cjf cpu-topology.tar.bz2
</span><br>
<span class="quotelev1">&gt; devices/system/{cpu/cpu*/topology/*,node/node*/cpu*}
</span><br>
Because of different kernel version, or old versions, not all files are
<br>
found, so here is an update to the instructions for getting the cpu
<br>
topology:
<br>
<p>NOTE: the tar will spillout a bunch off messages like:
<br>
<p>tar: devices/system/cpu/cpu0/topology/core_id: File shrank by 4094 bytes;
<br>
padding with zeros
<br>
<p>this shouldn't be problem
<br>
<p>0) change to your sysfs mount directory (mostly /sys)
<br>
<p>1) if you don't have devices/system/cpu/cpu0/topology, sorry you can stop,
<br>
&nbsp;&nbsp;&nbsp;your kernel is to old
<br>
<p>2) if you don't have a devices/system/node directory, goto point 3). else
<br>
&nbsp;&nbsp;&nbsp;do:
<br>
<p>&nbsp;&nbsp;&nbsp;$ tar -r -f /tmp/cpu-topology.tar devices/system/node/node*/cpu*
<br>
<p>3) do:
<br>
<p>&nbsp;&nbsp;&nbsp;$ tar -r -f /tmp/cpu-topology.tar devices/system/cpu/cpu*/topology/*
<br>
<p>4) do:
<br>
<p>&nbsp;&nbsp;&nbsp;$ bzip /tmp/cpu-topology.tar
<br>
<p>Thank you
<br>
<p>Bert Wesarg
<br>
<p><p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Please give a short description of the machine and send the
</span><br>
<span class="quotelev1">&gt; cpu-topology.tar.bz2 to the list.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [1]: <a href="http://www.open-mpi.org/community/lists/plpa-users/2007/04/0035.php">http://www.open-mpi.org/community/lists/plpa-users/2007/04/0035.php</a>
</span><br>
<span class="quotelev1">&gt; [2]: <a href="http://www.open-mpi.org/software/plpa/">http://www.open-mpi.org/software/plpa/</a>
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3127.php">Jeff Squyres: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>Previous message:</strong> <a href="3125.php">Edmund Sumbar: "Re: [OMPI users] Using mpiexec to run multiple non-mpi processes"</a>
<li><strong>In reply to:</strong> <a href="3118.php">Bert Wesarg: "[OMPI users] Call for Help: CPU topology needed!"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
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
