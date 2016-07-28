<?
$subject_val = "Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Dec 17 19:24:53 2015" -->
<!-- isoreceived="20151218002453" -->
<!-- sent="Fri, 18 Dec 2015 09:24:47 +0900" -->
<!-- isosent="20151218002447" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Need help resolving &amp;quot;error obtaining device context for mlx4_0&amp;quot;" -->
<!-- id="5673524F.5070907_at_rist.or.jp" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CBFE59B2-CFAB-44DD-B3BF-EDE9B932E2ED_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] Need help resolving &quot;error obtaining device context for mlx4_0&quot;<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-12-17 19:24:47
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28181.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<li><strong>In reply to:</strong> <a href="28181.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
There is some stuff in /dev, and also in /sys
<br>
<p>on my system :
<br>
<p>ls -al /dev/infiniband/
<br>
drwxr-xr-x  2 root root      120 Nov 10 17:08 .
<br>
drwxr-xr-x 21 root root     3980 Dec 13 03:09 ..
<br>
crw-rw----  1 root root 231,  64 Nov 10 17:08 issm0
<br>
crw-rw-rw-  1 root root  10,  56 Nov 10 17:08 rdma_cm
<br>
crw-rw----  1 root root 231,   0 Nov 10 17:08 umad0
<br>
crw-rw-rw-  1 root root 231, 192 Nov 10 17:08 uverbs0
<br>
<p><p>here is what you can do to find out what is going wrong on your system
<br>
/* note if you are running selinux, that might also cause some issue */
<br>
<p><p>$ mpirun -np 1 strace -e open,stat -o /tmp/hello.strace -- ./hello_c
<br>
Hello, world, I am 0 of 1, (Open MPI v3.0.0a1, package: Open MPI 
<br>
gilles_at_xxx Distribution, ident: 3.0.0a1, repo rev: dev-3197-g4323016, 
<br>
Unreleased developer copy, 160)
<br>
<p>$ grep -v ENOENT /tmp/hello.strace  | grep /dev/
<br>
open(&quot;/dev/shm/open_mpi.0000&quot;, 
<br>
O_RDWR|O_CREAT|O_EXCL|O_NOFOLLOW|O_CLOEXEC, 0600) = 6
<br>
open(&quot;/dev/infiniband/uverbs0&quot;, O_RDWR) = 17
<br>
open(&quot;/dev/infiniband/uverbs0&quot;, O_RDWR) = 19
<br>
open(&quot;/dev/infiniband/rdma_cm&quot;, O_RDWR) = 21
<br>
open(&quot;/dev/infiniband/rdma_cm&quot;, O_RDWR) = 21
<br>
open(&quot;/dev/infiniband/rdma_cm&quot;, O_RDWR) = 21
<br>
open(&quot;/dev/infiniband/rdma_cm&quot;, O_RDWR) = 21
<br>
<p>$ grep -v ENOENT /tmp/hello.strace  | grep /sys/
<br>
open(&quot;/sys/devices/system/cpu/possible&quot;, O_RDONLY) = 18
<br>
stat(&quot;/sys/class/infiniband&quot;, {st_mode=S_IFDIR|0755, st_size=0, ...}) = 0
<br>
open(&quot;/sys/class/infiniband&quot;, O_RDONLY|O_NONBLOCK|O_DIRECTORY|O_CLOEXEC) 
<br>
= 17
<br>
open(&quot;/sys/class/infiniband_verbs/abi_version&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs&quot;, 
<br>
O_RDONLY|O_NONBLOCK|O_DIRECTORY|O_CLOEXEC) = 17
<br>
stat(&quot;/sys/class/infiniband_verbs/abi_version&quot;, {st_mode=S_IFREG|0444, 
<br>
st_size=4096, ...}) = 0
<br>
stat(&quot;/sys/class/infiniband_verbs/uverbs0&quot;, {st_mode=S_IFDIR|0755, 
<br>
st_size=0, ...}) = 0
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/ibdev&quot;, O_RDONLY) = 18
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/abi_version&quot;, O_RDONLY) = 18
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/vendor&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/device&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/vendor&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/device&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/vendor&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/device&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/vendor&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/device&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/vendor&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/device&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/vendor&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband_verbs/uverbs0/device/device&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband/mlx4_0/node_type&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband/mlx4_0/device/local_cpus&quot;, O_RDONLY) = 17
<br>
open(&quot;/sys/class/infiniband/mlx4_0/ports/1/gids/0&quot;, O_RDONLY) = 19
<br>
open(&quot;/sys/class/misc/rdma_cm/abi_version&quot;, O_RDONLY) = 19
<br>
open(&quot;/sys/class/infiniband/mlx4_0/node_guid&quot;, O_RDONLY) = 19
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<p>On 12/18/2015 9:11 AM, Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; To be honest, it&#146;s been a very long time since I had an IB machine. 
</span><br>
<span class="quotelev1">&gt; Howard, Nathan, or someone who has one - can you answer?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Dec 17, 2015, at 3:53 PM, Bathke, Chuck &lt;bathke_at_[hidden] 
</span><br>
<span class="quotelev2">&gt;&gt; &lt;mailto:bathke_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Ralph,
</span><br>
<span class="quotelev2">&gt;&gt; Where would these be, in /dev?
</span><br>
<span class="quotelev2">&gt;&gt; Chuck
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *From*: Ralph Castain [mailto:rhc_at_[hidden]]
</span><br>
<span class="quotelev2">&gt;&gt; *Sent*: Thursday, December 17, 2015 04:13 PM
</span><br>
<span class="quotelev2">&gt;&gt; *To*: Open MPI Users &lt;users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; *Subject*: Re: [OMPI users] Need help resolving &quot;error obtaining 
</span><br>
<span class="quotelev2">&gt;&gt; device context for mlx4_0&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; You might want to check the permissions on the MLX device directory - 
</span><br>
<span class="quotelev2">&gt;&gt; according to that error message, the permissions are preventing you 
</span><br>
<span class="quotelev2">&gt;&gt; from accessing the device. Without getting access, we don&#146;t have a 
</span><br>
<span class="quotelev2">&gt;&gt; way to communicate across nodes - you can run on one node using 
</span><br>
<span class="quotelev2">&gt;&gt; shared memory, but not multiple nodes.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; So it looks like there is some device-level permissions issue in play.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Dec 17, 2015, at 2:39 PM, Bathke, Chuck &lt;bathke_at_[hidden] 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;mailto:bathke_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;    I have a system of AMD blades that I am trying to run MCNP6 on 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; using OPENMPI. I installed openmpi-1.6.5. I also have installed 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Intel FORTRAN and C compiles. I compiled MCNP6 using FC=&quot;mpif90&quot; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; CC=&quot;mpicc&quot; &#133; It runs just fine when I run it on a 1-hour test case 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on just one blade. I need to run it on several blades, but it issues 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; an error and crashes and burns. I have sought help here, but no one 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; seems to know how to fix it. I have mounted /opt and /home on bud 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; and bud6 on the corresponding /opt and /home on bud4, at their 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; suggestion. That did not fix anything. Please look at the attached 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; file (created with bud4&gt;tar -zcf info.tgz mpihT3) that holds the 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; data that is requested at<a href="https://www.open-mpi.org/community/help/and">https://www.open-mpi.org/community/help/and</a> 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; in bullet 13 on<a href="https://www.open-mpi.org/community/help/">https://www.open-mpi.org/community/help/</a>. Can you 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; look at it and suggest a solution? I suspect that it is something 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; trivial that does not stand out and say, &#147;look here you idiot.&#148; Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Charles &quot;Chuck&quot; Bathke
</span><br>
<span class="quotelev3">&gt;&gt;&gt; MS-C921
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos National Laboratory
</span><br>
<span class="quotelev3">&gt;&gt;&gt; P.O. Box 1663
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Los Alamos, NM 87545
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Phone:(505)667-7214
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Cell:(505)695-5709
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Fax: 505-665-2897
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Location: TA-16, Building 0200, Room 125
</span><br>
<span class="quotelev3">&gt;&gt;&gt; NEN-5 Group Office: 505-667-0914
</span><br>
<span class="quotelev3">&gt;&gt;&gt; &lt;info.tgz&gt;_______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Subscription:<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Link to this 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; post:<a href="http://www.open-mpi.org/community/lists/users/2015/12/28178.php">http://www.open-mpi.org/community/lists/users/2015/12/28178.php</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/12/28180.php">http://www.open-mpi.org/community/lists/users/2015/12/28180.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/12/28181.php">http://www.open-mpi.org/community/lists/users/2015/12/28181.php</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-28182/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="28183.php">Jingchao Zhang: "Re: [OMPI users] performance issue with OpenMPI 1.10.1"</a>
<li><strong>Previous message:</strong> <a href="28181.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<li><strong>In reply to:</strong> <a href="28181.php">Ralph Castain: "Re: [OMPI users] Need help resolving &quot;error obtaining device	context for mlx4_0&quot;"</a>
<!-- nextthread="start" -->
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
