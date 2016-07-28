<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  1 08:17:32 2006" -->
<!-- isoreceived="20060901121732" -->
<!-- sent="Fri, 1 Sep 2006 14:17:51 +0200" -->
<!-- isosent="20060901121751" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] [IPv6] new component oob/tcp6" -->
<!-- id="20060901121751.GM6454_at_drcomp.erfurt.thur.de" -->
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
<strong>Date:</strong> 2006-09-01 08:17:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>yesterday I felt impelled to create a new ORTE oob component: tcp6.
<br>
<p>I was able to either compile the library with IPv4 or IPv6 support,
<br>
but not with both (so to say: two different ompi installations or
<br>
at least two different DSO versions).
<br>
<p>As far as I can see, many functions use mca_oob_tcp_component.tcp_listen_sd.
<br>
Unfortunately, as I am not allowed to use v4mapped addresses (not supported
<br>
by the Windows IPv6 stack, disabled by default on *BSD), this socket
<br>
is either AF_INET or AF_INET6, but not both (both means AF_INET6 *and*
<br>
accepting v4mapped addresses).
<br>
<p>Do you agree to go on with two oob components, tcp and tcp6?
<br>
There is a lot of duplicated code, but we might refactor this
<br>
when everything else will be done.
<br>
<p>On the other hand, this whole procedure might be totally useless:
<br>
two nodes may exchange IPv4-URIs via IPv6 containing identical
<br>
RFC1918 networks. One would prefer IPv4 due to less overhead,
<br>
but with IPv6, these v4-addresses might be at different locations
<br>
anywhere in the world.
<br>
<p>In other words: IPv6 must be tried first or mixing with IPv4
<br>
cannot be reliable. In this case, a lot of code may be removed
<br>
and we'll end up with either two installations/DSOs (a mentioned
<br>
above) or with runtime detection of af_family (i.e. look for
<br>
global IPv6 addresses and iff found, disable IPv4 completely)
<br>
<p>What do you think - which way is best? Use cases?
<br>
<p><p><pre>
-- 
mail: adi_at_[hidden]  	<a href="http://adi.thur.de">http://adi.thur.de</a>	PGP: v2-key via keyserver
Was du tun willst, tue ganz! Oder halb. Oder la&#223; es bleiben.
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Previous message:</strong> <a href="http://www.open-mpi.org/community/lists/devel/2006/08/1022.php">Brian Barrett: "Re: [OMPI devel] Buffer Overflow Error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
<li><strong>Reply:</strong> <a href="1024.php">Ralph Castain: "Re: [OMPI devel] [IPv6] new component oob/tcp6"</a>
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
