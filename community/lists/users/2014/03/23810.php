<?
$subject_val = "[OMPI users] trying to use personal copy of 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 02:51:19 2014" -->
<!-- isoreceived="20140312065119" -->
<!-- sent="Tue, 11 Mar 2014 23:51:17 -0700" -->
<!-- isosent="20140312065117" -->
<!-- name="Ross Boylan" -->
<!-- email="ross_at_[hidden]" -->
<!-- subject="[OMPI users] trying to use personal copy of 1.7.4" -->
<!-- id="1394607077.25697.38.camel_at_localhost" -->
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
<strong>Subject:</strong> [OMPI users] trying to use personal copy of 1.7.4<br>
<strong>From:</strong> Ross Boylan (<em>ross_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 02:51:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23809.php">Victor: "[OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I took the advice here and built a personal copy of the current openmpi,
<br>
to see if the problems I was having with Rmpi were a result of the old
<br>
version on the system.
<br>
<p>When I do ldd on the relevant libraries (Rmpi.so is loaded dynamically
<br>
by R) everything looks fine; path references that should be local are.
<br>
But when I run the program and do lsof it shows that both the system and
<br>
personal versions of key libraries are opened.
<br>
<p>First, does anyone know which library will actually be used, or how to
<br>
tell which library is actually used, in this situation.  I'm running on
<br>
linux (Debian squeeze)?
<br>
<p>Second, it there some way to prevent the wrong/old/sytem libraries from
<br>
being loaded?
<br>
<p>FWIW I'm still seeing the old misbehavior when I run this way, but, as I
<br>
said, I'm really not sure which libraries are being used.  Since Rmpi
<br>
was built against the new/local ones, I think the fact that it doesn't
<br>
crash means I really am using the new ones.
<br>
<p>Here are highlights of lsof on the process running R:
<br>
COMMAND   PID USER   FD   TYPE             DEVICE SIZE/OFF      NODE NAME
<br>
R       17634 ross  cwd    DIR              254,2    12288 150773764 /home/ross/KHC/sunbelt
<br>
R       17634 ross  rtd    DIR                8,1     4096         2 /
<br>
R       17634 ross  txt    REG                8,1     5648   3058294 /usr/lib/R/bin/exec/R
<br>
R       17634 ross  DEL    REG                8,1            2416718 /tmp/openmpi-sessions-ross_at_n100_0/60429/1/shared_mem_pool.n100
<br>
R       17634 ross  mem    REG                8,1   335240   3105336 /usr/lib/openmpi/lib/libopen-pal.so.0.0.0
<br>
R       17634 ross  mem    REG                8,1   304576   3105337 /usr/lib/openmpi/lib/libopen-rte.so.0.0.0
<br>
R       17634 ross  mem    REG                8,1   679992   3105332 /usr/lib/openmpi/lib/libmpi.so.0.0.2
<br>
R       17634 ross  mem    REG                8,1    93936   2967826 /usr/lib/libz.so.1.2.3.4
<br>
R       17634 ross  mem    REG                8,1    10648   3187256 /lib/libutil-2.11.3.so
<br>
R       17634 ross  mem    REG                8,1    32320   2359631 /usr/lib/libpciaccess.so.0.10.8
<br>
R       17634 ross  mem    REG                8,1    33368   2359338 /usr/lib/libnuma.so.1
<br>
R       17634 ross  mem    REG              254,2   979113 152045740 /home/ross/install/lib/libopen-pal.so.6.1.0
<br>
R       17634 ross  mem    REG                8,1   183456   2359592 /usr/lib/libtorque.so.2.0.0
<br>
R       17634 ross  mem    REG              254,2  1058125 152045781 /home/ross/install/lib/libopen-rte.so.7.0.0
<br>
R       17634 ross  mem    REG                8,1    49936   2359341 /usr/lib/libibverbs.so.1.0.0
<br>
R       17634 ross  mem    REG              254,2  2802579 152045867 /home/ross/install/lib/libmpi.so.1.3.0
<br>
R       17634 ross  mem    REG              254,2   106626 152046481 /home/ross/Rlib-3.0.1/Rmpi/libs/Rmpi.so
<br>
<p>So libmpi, libopen-pal, and libopen-rte all are opened in two versions and two locations.
<br>
<p>Thanks.
<br>
Ross Boylan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23811.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23809.php">Victor: "[OMPI users] Cannot run a job with more than 3 nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
