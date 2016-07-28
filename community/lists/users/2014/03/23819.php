<?
$subject_val = "Re: [OMPI users] trying to use personal copy of 1.7.4";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Mar 12 06:50:58 2014" -->
<!-- isoreceived="20140312105058" -->
<!-- sent="Wed, 12 Mar 2014 11:50:48 +0100" -->
<!-- isosent="20140312105048" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] trying to use personal copy of 1.7.4" -->
<!-- id="F9449A82-A254-4785-8CB1-5014580FC4CF_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="061F3163-B032-47F8-898D-AB566C8FA870_at_cisco.com" -->
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
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-03-12 06:50:48
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23820.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23824.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23824.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 12.03.2014 um 11:39 schrieb Jeff Squyres (jsquyres):
<br>
<p><span class="quotelev1">&gt; Generally, all you need to ensure that your personal copy of OMPI is used is to set the PATH and LD_LIBRARY_PATH to point to your new Open MPI installation.  I do this all the time on my development cluster (where I have something like 6 billion different installations of OMPI available... mmm... should probably clean that up...)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; export LD_LIBRARY_PATH=path_to_my_ompi/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt; export PATH=path-to-my-ompi/bin:$PATH
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It should be noted that:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 1. you need to *prefix* your PATH and LD_LIBRARY_PATH with these values
</span><br>
<span class="quotelev1">&gt; 2. you need to set these values in a way that will be picked up on all servers that you use in your job.  The safest way to do this is in your shell startup files (e.g., $HOME/.bashrc or whatever is relevant for your shell).
</span><br>
<p>I see &quot;libtorque&quot; in the output below - were these jobs running inside a queuing system? The set paths might be different therein, and need to be set in the job script in this case.
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev1">&gt; See <a href="http://www.open-mpi.org/faq/?category=running#run-prereqs">http://www.open-mpi.org/faq/?category=running#run-prereqs</a>, <a href="http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path">http://www.open-mpi.org/faq/?category=running#adding-ompi-to-path</a>, and <a href="http://www.open-mpi.org/faq/?category=running#mpirun-prefix">http://www.open-mpi.org/faq/?category=running#mpirun-prefix</a>.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note the --prefix option that is described in the 3rd FAQ item I cited -- that can be a bit easier, too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Mar 12, 2014, at 2:51 AM, Ross Boylan &lt;ross_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I took the advice here and built a personal copy of the current openmpi,
</span><br>
<span class="quotelev2">&gt;&gt; to see if the problems I was having with Rmpi were a result of the old
</span><br>
<span class="quotelev2">&gt;&gt; version on the system.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; When I do ldd on the relevant libraries (Rmpi.so is loaded dynamically
</span><br>
<span class="quotelev2">&gt;&gt; by R) everything looks fine; path references that should be local are.
</span><br>
<span class="quotelev2">&gt;&gt; But when I run the program and do lsof it shows that both the system and
</span><br>
<span class="quotelev2">&gt;&gt; personal versions of key libraries are opened.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; First, does anyone know which library will actually be used, or how to
</span><br>
<span class="quotelev2">&gt;&gt; tell which library is actually used, in this situation.  I'm running on
</span><br>
<span class="quotelev2">&gt;&gt; linux (Debian squeeze)?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Second, it there some way to prevent the wrong/old/sytem libraries from
</span><br>
<span class="quotelev2">&gt;&gt; being loaded?
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; FWIW I'm still seeing the old misbehavior when I run this way, but, as I
</span><br>
<span class="quotelev2">&gt;&gt; said, I'm really not sure which libraries are being used.  Since Rmpi
</span><br>
<span class="quotelev2">&gt;&gt; was built against the new/local ones, I think the fact that it doesn't
</span><br>
<span class="quotelev2">&gt;&gt; crash means I really am using the new ones.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Here are highlights of lsof on the process running R:
</span><br>
<span class="quotelev2">&gt;&gt; COMMAND   PID USER   FD   TYPE             DEVICE SIZE/OFF      NODE NAME
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  cwd    DIR              254,2    12288 150773764 /home/ross/KHC/sunbelt
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  rtd    DIR                8,1     4096         2 /
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  txt    REG                8,1     5648   3058294 /usr/lib/R/bin/exec/R
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  DEL    REG                8,1            2416718 /tmp/openmpi-sessions-ross_at_n100_0/60429/1/shared_mem_pool.n100
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1   335240   3105336 /usr/lib/openmpi/lib/libopen-pal.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1   304576   3105337 /usr/lib/openmpi/lib/libopen-rte.so.0.0.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1   679992   3105332 /usr/lib/openmpi/lib/libmpi.so.0.0.2
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1    93936   2967826 /usr/lib/libz.so.1.2.3.4
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1    10648   3187256 /lib/libutil-2.11.3.so
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1    32320   2359631 /usr/lib/libpciaccess.so.0.10.8
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1    33368   2359338 /usr/lib/libnuma.so.1
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG              254,2   979113 152045740 /home/ross/install/lib/libopen-pal.so.6.1.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1   183456   2359592 /usr/lib/libtorque.so.2.0.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG              254,2  1058125 152045781 /home/ross/install/lib/libopen-rte.so.7.0.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG                8,1    49936   2359341 /usr/lib/libibverbs.so.1.0.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG              254,2  2802579 152045867 /home/ross/install/lib/libmpi.so.1.3.0
</span><br>
<span class="quotelev2">&gt;&gt; R       17634 ross  mem    REG              254,2   106626 152046481 /home/ross/Rlib-3.0.1/Rmpi/libs/Rmpi.so
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; So libmpi, libopen-pal, and libopen-rte all are opened in two versions and two locations.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt; Ross Boylan
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev1">&gt; For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23820.php">Victor: "Re: [OMPI users] Cannot run a job with more than 3 nodes"</a>
<li><strong>Previous message:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>In reply to:</strong> <a href="23818.php">Jeff Squyres (jsquyres): "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="23824.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
<li><strong>Reply:</strong> <a href="23824.php">Ross Boylan: "Re: [OMPI users] trying to use personal copy of 1.7.4"</a>
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
