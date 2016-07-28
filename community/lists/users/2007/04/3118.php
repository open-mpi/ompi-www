<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Apr 23 15:36:25 2007" -->
<!-- isoreceived="20070423193625" -->
<!-- sent="Mon, 23 Apr 2007 21:36:13 +0200" -->
<!-- isosent="20070423193613" -->
<!-- name="Bert Wesarg" -->
<!-- email="wesarg_at_[hidden]" -->
<!-- subject="[OMPI users] Call for Help: CPU topology needed!" -->
<!-- id="462D0AAD.70202_at_informatik.uni-halle.de" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Date:</strong> 2007-04-23 15:36:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3119.php">Mostyn Lewis: "[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Reply:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Reply:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello all,
<br>
<p>for a new development effort[1] in the PLPA sub project[2], we/I need
<br>
actual data from running machines. Concretely the cpu topology information
<br>
which the linux kernel &gt;= 2.6.16 exports per sysfs.
<br>
<p>Those who are willing to help please follow the instructions at the end of
<br>
the mail.
<br>
<p>Most interestingly are machines with multiple NUMA nodes, enabled
<br>
HyperThreading (HTT) and multi-cores.
<br>
<p>Thank you very much.
<br>
<p>Bert Wesarg
<br>
<p>Instructions:
<br>
<p># assume you have mounted the sysfs on /sys
<br>
$ cd /sys
<br>
$ tar cjf cpu-topology.tar.bz2
<br>
devices/system/{cpu/cpu*/topology/*,node/node*/cpu*}
<br>
<p>Please give a short description of the machine and send the
<br>
cpu-topology.tar.bz2 to the list.
<br>
<p>[1]: <a href="http://www.open-mpi.org/community/lists/plpa-users/2007/04/0035.php">http://www.open-mpi.org/community/lists/plpa-users/2007/04/0035.php</a>
<br>
[2]: <a href="http://www.open-mpi.org/software/plpa/">http://www.open-mpi.org/software/plpa/</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3119.php">Mostyn Lewis: "[OMPI users] Bug in orte/mca/pls/rsh/pls_rsh_module.c"</a>
<li><strong>Previous message:</strong> <a href="3117.php">Jeff Squyres: "Re: [OMPI users] How do you switch off paffinity?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Reply:</strong> <a href="3126.php">Bert Wesarg: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
<li><strong>Reply:</strong> <a href="3146.php">Peter Kjellstrom: "Re: [OMPI users] Call for Help: CPU topology needed!"</a>
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
