<?
$subject_val = "[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar  4 12:56:40 2015" -->
<!-- isoreceived="20150304175640" -->
<!-- sent="Wed, 4 Mar 2015 09:56:36 -0800" -->
<!-- isosent="20150304175636" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node" -->
<!-- id="CAAvDA16mYUXz3KUhBWKc3xQezZUxd=PWWb6FV+grfcnHCLz9Lg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for non-IB login node<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-03-04 12:56:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] master tarball broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a system with InifniPath HCAs, where I've historically tested
<br>
mtl:psm.
<br>
For some reason, that appears to have ceased working some time in the past
<br>
4 months.
<br>
However, this report is about something else.
<br>
I am using the current master tarball: openmpi-dev-1203-g171d674.tar.bz2
<br>
<p>When I ran configure, verbs support was found even though it was not my
<br>
intent to use it.
<br>
So, I am running with an explicit blt list that omits verbs and am
<br>
disabling the broken mtl:psm and mtl:ofi as well.
<br>
However, I am getting complaints from some verbs-related code:
<br>
<p>$ mpirun -mca btl sm,self,tcp -mca mtl ^psm,ofi -np 2 -host n15,n16
<br>
&nbsp;examples/ring_c
<br>
libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs0
<br>
--------------------------------------------------------------------------
<br>
Fork support was requested but the library call ibv_fork_init() failed.
<br>
<p>&nbsp;&nbsp;Hostname:    n16
<br>
&nbsp;&nbsp;Error (22):  Invalid argument
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Fork support was requested but the library call ibv_fork_init() failed.
<br>
<p>&nbsp;&nbsp;Hostname:    n15
<br>
&nbsp;&nbsp;Error (22):  Invalid argument
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Fork support was requested but the library call ibv_fork_init() failed.
<br>
<p>&nbsp;&nbsp;Hostname:    n16
<br>
&nbsp;&nbsp;Error (22):  Invalid argument
<br>
--------------------------------------------------------------------------
<br>
--------------------------------------------------------------------------
<br>
Fork support was requested but the library call ibv_fork_init() failed.
<br>
<p>&nbsp;&nbsp;Hostname:    n15
<br>
&nbsp;&nbsp;Error (22):  Invalid argument
<br>
--------------------------------------------------------------------------
<br>
<p>Process 0 sending 10 to 1, tag 201 (2 processes in ring)
<br>
Process 0 sent to 1
<br>
Process 0 decremented value: 9
<br>
Process 0 decremented value: 8
<br>
Process 0 decremented value: 7
<br>
Process 0 decremented value: 6
<br>
Process 0 decremented value: 5
<br>
Process 0 decremented value: 4
<br>
Process 0 decremented value: 3
<br>
Process 0 decremented value: 2
<br>
Process 0 decremented value: 1
<br>
Process 0 decremented value: 0
<br>
Process 0 exiting
<br>
Process 1 exiting
<br>
<p><p><p>There are at least THREE things &quot;wrong&quot; in my opinion.
<br>
<p>The first is the following two lines:
<br>
<p>libibverbs: Warning: couldn't open config directory '/etc/libibverbs.d'.
<br>
libibverbs: Warning: no userspace device-specific driver found for
<br>
/sys/class/infiniband_verbs/uverbs0
<br>
<p>However, I can run ibv_devinfo (and see ACTIVE ports) on both of the
<br>
compute nodes.
<br>
So, these appear to me to be a complaint about the login node (which is
<br>
simply not on the IB network).
<br>
I did not ask for ibv, and even if I did the message about a non-IB login
<br>
node is just an annoyance.
<br>
<p>The second is the &quot;ibv_fork_init()&quot; message twice per host, again when I
<br>
have NOT requested btl:verbs.
<br>
<p>The third is that I had to pass so many mca params just to get as far as
<br>
this!
<br>
<p>I did find that adding &quot;-mca oob tcp&quot; eliminated all the messages.
<br>
So, I am assuming oob:ud is responsible for this mess.
<br>
<p>This does not appear to be a very good default behavior.
<br>
+ I believe oob:ud should *silently* disqualify itself when the node
<br>
running &quot;mpirun&quot; is not on the IB network.
<br>
+ I don't know why/when the ibv_fork_init() messages came about but they
<br>
are quite annoying when I don't even intend to *use* ibv.
<br>
<p>-Paul
<br>
<p><p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Computer Languages &amp; Systems Software (CLaSS) Group
Computer Science Department               Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-17093/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>Previous message:</strong> <a href="17092.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] master tarball broken"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17094.php">Jeff Squyres (jsquyres): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
<li><strong>Reply:</strong> <a href="17097.php">Dave Goodell (dgoodell): "Re: [OMPI devel] Unwanted ibv_fork_init() mess(ages) and complaint for	non-IB login node"</a>
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
