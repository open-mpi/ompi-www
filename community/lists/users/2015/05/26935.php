<?
$subject_val = "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 10:33:06 2015" -->
<!-- isoreceived="20150526143306" -->
<!-- sent="Tue, 26 May 2015 14:33:02 +0000" -->
<!-- isosent="20150526143302" -->
<!-- name="Rolf vandeVaart" -->
<!-- email="rvandevaart_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes" -->
<!-- id="110c8d9da5874a6b9f8f056834040849_at_HQMAIL102.nvidia.com" -->
<!-- charset="utf-8" -->
<!-- inreplyto="165FF419-3EF6-4354-8F8D-183384476E4A_at_icl.utk.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes<br>
<strong>From:</strong> Rolf vandeVaart (<em>rvandevaart_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 10:33:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26936.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26934.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>In reply to:</strong> <a href="26934.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I think we bumped up a default value in Open MPI 1.8.5.  To go back to the old 64Mbyte value try running with:
<br>

<br>
--mca mpool_sm_min_size 67108864
<br>

<br>
Rolf
<br>

<br>
From: users [mailto:users-bounces_at_[hidden]] On Behalf Of Aur&#195;&#169;lien Bouteiller
<br>
Sent: Tuesday, May 26, 2015 10:10 AM
<br>
To: Open MPI Users
<br>
Subject: Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes
<br>

<br>
* PGP Signed by an unknown key
<br>
You can also change the location of tmp files with the following mca option:
<br>
-mca orte_tmpdir_base /some/place
<br>

<br>
ompi_info --param all all -l 9 | grep tmp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_local_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_remote_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
<br>

<br>
--
<br>
Aur&#195;&#169;lien Bouteiller ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
<br>

<br>
Le 23 mai 2015 &#195;&#160; 03:55, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&lt;mailto:gilles.gouaillardet_at_[hidden]&gt;&gt; a &#195;&#169;crit :
<br>

<br>
Bill,
<br>

<br>
the root cause is likely there is not enough free space in /tmp.
<br>

<br>
the simplest, but slowest, option is to run mpirun --mac btl tcp ...
<br>
if you cannot make enough space under /tmp (maybe you run diskless)
<br>
there are some options to create these kind of files under /dev/shm
<br>

<br>
Cheers,
<br>

<br>
Gilles
<br>

<br>

<br>
On Saturday, May 23, 2015, Lane, William &lt;William.Lane_at_[hidden]&lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
<br>
I've compiled the linpack benchmark using openMPI 1.8.5 libraries
<br>
and include files on CentOS 6.4.
<br>

<br>
I've tested the binary on the one Intel node (some
<br>
sort of 4-core Xeon) and it runs, but when I try to run it on any of
<br>
the old Sunfire opteron compute nodes it appears to hang (although
<br>
top indicates CPU and memory usage) and eventually terminates
<br>
by itself. I'm also getting the following openMPI error messages/warnings:
<br>

<br>
mpirun -np 16 --report-bindings --hostfile hostfile --prefix /hpc/apps/mpi/openmpi/1.8.5-dev --mca btl_tcp_if_include eth0 xhpl
<br>

<br>
[cscld1-0-6:24370] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-3:24734] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-7:25152] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-4:18079] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-8:21443] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-2:19704] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-5:13481] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1-0-0:21884] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
<br>
[cscld1:24240] 7 more processes have sent help message help-opal-shmem-mmap.txt / target full
<br>

<br>
Note these errors also occur when I try to run the linpack benchmark on a single
<br>
node as well.
<br>

<br>
Does anyone know what's going on here? Google came up w/nothing and I have no
<br>
idea what a BTL coordinating structure is.
<br>

<br>
-Bill L.
<br>
IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
<br>
_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]&lt;mailto:users_at_[hidden]&gt;
<br>
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26907.php">http://www.open-mpi.org/community/lists/users/2015/05/26907.php</a>
<br>

<br>
* Unknown Key
<br>
* 0xBF250A1F
<br>

<br>
* PGP Unprotected
<br>
* text/plain body
<br>

<br>

<br>
-----------------------------------------------------------------------------------
<br>
This email message is for the sole use of the intended recipient(s) and may contain
<br>
confidential information.  Any unauthorized review, use, disclosure or distribution
<br>
is prohibited.  If you are not the intended recipient, please contact the sender by
<br>
reply email and destroy all copies of the original message.
<br>
-----------------------------------------------------------------------------------
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26935/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26936.php">David Shrader: "Re: [OMPI users] 1.8.5, mxm, and a spurious '-L' flag"</a>
<li><strong>Previous message:</strong> <a href="26934.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<li><strong>In reply to:</strong> <a href="26934.php">Aur&#195;&#169;lien Bouteiller: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
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
