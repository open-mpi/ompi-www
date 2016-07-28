<?
$subject_val = "Re: [OMPI users] trying to use personal copy of 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 06:39:18 2014" -->
<!-- isoreceived="20140312103918" -->
<!-- sent="Wed, 12 Mar 2014 10:39:17 +0000" -->
<!-- isosent="20140312103917" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trying to use personal copy of 1.7.4" -->
<!-- id="061F3163-B032-47F8-898D-AB566C8FA870_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="1394607077.25697.38.camel_at_localhost" -->
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
<strong>Subject:</strong> Re: [OMPI users] trying to use personal copy of 1.7.4<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 06:39:17
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23810.php">Ross Boylan: "[OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23822.php">Dave Goodell (dgoodell): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Generally, all you need to ensure that your personal copy of OMPI is used is to set the PATH and LD_LIBRARY_PATH to point to your new Open MPI installation.  I do this all the time on my development cluster (where I have something like 6 billion different installations of OMPI available... mmm... should probably clean that up...)
<br>
<p>export LD_LIBRARY_PATH=path_to_my_ompi/lib:$LD_LIBRARY_PATH
<br>
export PATH=path-to-my-ompi/bin:$PATH
<br>
<p>It should be noted that:
<br>
<p>1. you need to *prefix* your PATH and LD_LIBRARY_PATH with these values
<br>
2. you need to set these values in a way that will be picked up on all servers that you use in your job.  The safest way to do this is in your shell startup files (e.g., $HOME/.bashrc or whatever is relevant for your shell).
<br>
<p>See <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>, <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>, and <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>.
<br>
<p>Note the --prefix option that is described in the 3rd FAQ item I cited -- that can be a bit easier, too.
<br>
<p><p><p>On Mar 12, 2014, at 2:51 AM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; I took the advice here and built a personal copy of the current openmpi,
</span><br>
<span class="quotelev1">&gt; to see if the problems I was having with Rmpi were a result of the old
</span><br>
<span class="quotelev1">&gt; version on the system.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; When I do ldd on the relevant libraries (Rmpi.so is loaded dynamically
</span><br>
<span class="quotelev1">&gt; by R) everything looks fine; path references that should be local are.
</span><br>
<span class="quotelev1">&gt; But when I run the program and do lsof it shows that both the system and
</span><br>
<span class="quotelev1">&gt; personal versions of key libraries are opened.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; First, does anyone know which library will actually be used, or how to
</span><br>
<span class="quotelev1">&gt; tell which library is actually used, in this situation.  I'm running on
</span><br>
<span class="quotelev1">&gt; linux (Debian squeeze)?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Second, it there some way to prevent the wrong/old/sytem libraries from
</span><br>
<span class="quotelev1">&gt; being loaded?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; FWIW I'm still seeing the old misbehavior when I run this way, but, as I
</span><br>
<span class="quotelev1">&gt; said, I'm really not sure which libraries are being used.  Since Rmpi
</span><br>
<span class="quotelev1">&gt; was built against the new/local ones, I think the fact that it doesn't
</span><br>
<span class="quotelev1">&gt; crash means I really am using the new ones.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Here are highlights of lsof on the process running R:
</span><br>
<span class="quotelev1">&gt; COMMAND   PID USER   FD   TYPE             DEVICE SIZE/OFF      NODE NAME
</span><br>
<span class="quotelev1">&gt; R       17634 ross  cwd    DIR              254,2    12288 150773764 /home/ross/KHC/sunbelt
</span><br>
<span class="quotelev1">&gt; R       17634 ross  rtd    DIR                8,1     4096         2 /
</span><br>
<span class="quotelev1">&gt; R       17634 ross  txt    REG                8,1     5648   3058294 /usr/lib/R/bin/exec/R
</span><br>
<span class="quotelev1">&gt; R       17634 ross  DEL    REG                8,1            2416718 /tmp/openmpi-sessions-ross_at_n100_0/60429/1/shared_mem_pool.n100
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1   335240   3105336 /usr/lib/openmpi/lib/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1   304576   3105337 /usr/lib/openmpi/lib/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1   679992   3105332 /usr/lib/openmpi/lib/libmpi.so.0.0.2
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1    93936   2967826 /usr/lib/libz.so.1.2.3.4
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1    10648   3187256 /lib/libutil-2.11.3.so
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1    32320   2359631 /usr/lib/libpciaccess.so.0.10.8
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1    33368   2359338 /usr/lib/libnuma.so.1
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG              254,2   979113 152045740 /home/ross/install/lib/libopen-pal.so.6.1.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1   183456   2359592 /usr/lib/libtorque.so.2.0.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG              254,2  1058125 152045781 /home/ross/install/lib/libopen-rte.so.7.0.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG                8,1    49936   2359341 /usr/lib/libibverbs.so.1.0.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG              254,2  2802579 152045867 /home/ross/install/lib/libmpi.so.1.3.0
</span><br>
<span class="quotelev1">&gt; R       17634 ross  mem    REG              254,2   106626 152046481 /home/ross/Rlib-3.0.1/Rmpi/libs/Rmpi.so
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So libmpi, libopen-pal, and libopen-rte all are opened in two versions and two locations.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks.
</span><br>
<span class="quotelev1">&gt; Ross Boylan
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Previous message:</strong> <a href="23817.php">tmishima_at_[hidden]: "Re: [OMPI users] ctrl+c to abort a job with openmpi-1.7.5rc2"</a>
<li><strong>In reply to:</strong> <a href="23810.php">Ross Boylan: "[OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23819.php">Reuti: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23822.php">Dave Goodell (dgoodell): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
