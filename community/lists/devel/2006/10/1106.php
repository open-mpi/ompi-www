<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Oct 11 19:37:10 2006" -->
<!-- isoreceived="20061011233710" -->
<!-- sent="Wed, 11 Oct 2006 23:28:13 +0200" -->
<!-- isosent="20061011212813" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] IPv6 in btl/tcp" -->
<!-- id="20061011212813.GX31927_at_drcomp.erfurt.thur.de" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-10-11 17:28:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1107.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<li><strong>Previous message:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>this mail starts like all the others before ;):
<br>
<p>I'm glad to announce a first working version of btl/tcp
<br>
with both, IPv4 and IPv6 support.
<br>
<p>adi_at_ipc654:~/ompi/trunk/test$ ruby ringtest.rb 
<br>
Loaded suite ringtest
<br>
Started
<br>
0: sending message (0) to 1
<br>
1: got message (1) from 0, sending to 2
<br>
2: got message (2) from 1, sending to 0
<br>
0: got message (2) from 2
<br>
3 additional processes aborted (not shown)
<br>
<p>This ringtest was done in an IPv6-only environment, so
<br>
process launching (orte) and MPI communication were
<br>
done via IPv6.
<br>
<p>Unfortunately, the process crashed afterwards, but as
<br>
mentioned above, it's the very first version. (when I write
<br>
these lines, the svn checkin is only three minutes old)
<br>
<p>The ringtest also works fine in plain IPv4 environments and
<br>
mixed environments within the same cluster. It fails on
<br>
mixed multi-cluster setups and heterogenous OSs, but I'm
<br>
going to fix these issues on Saturday (or next week).
<br>
<p>(I'm currently passing complete struct sockaddr_storages
<br>
&nbsp;from btl_tcp_addr.h to the pml, thus giving different
<br>
&nbsp;sizeof (mca_btl_tcp_addr_t) in btl_tcp_proc.c:
<br>
&nbsp;(if(0 != (size % sizeof(mca_btl_tcp_addr_t))))
<br>
&nbsp;That's obviously wrong.)
<br>
<p><p>Let's see...
<br>
<p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Q: Was k&#246;nnen Frauen, was M&#228;nner nicht k&#246;nnen?
A: Kinder kriegen, Periode kriegen, nach dem Tod noch Sex haben
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1107.php">Ralph Castain: "Re: [OMPI devel] [OMPI svn] svn:open-mpi r12092"</a>
<li><strong>Previous message:</strong> <a href="1105.php">George Bosilca: "Re: [OMPI devel] Shared memory file changes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
<li><strong>Reply:</strong> <a href="1119.php">Adrian Knoth: "Re: [OMPI devel] IPv6 in btl/tcp"</a>
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
