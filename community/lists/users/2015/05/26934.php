<?
$subject_val = "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Tue May 26 10:09:55 2015" -->
<!-- isoreceived="20150526140955" -->
<!-- sent="Tue, 26 May 2015 10:10:01 -0400" -->
<!-- isosent="20150526141001" -->
<!-- name="Aur&#195;&#169;lien Bouteiller" -->
<!-- email="bouteill_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes" -->
<!-- id="165FF419-3EF6-4354-8F8D-183384476E4A_at_icl.utk.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="CAAkFZ5sNU_HrtKCA2WV4wrcqa__4+Uf3OafjgEF-dr92D2onRg_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes<br>
<strong>From:</strong> Aur&#195;&#169;lien Bouteiller (<em>bouteill_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-05-26 10:10:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<li><strong>Previous message:</strong> <a href="26933.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<li><strong>Reply:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You can also change the location of tmp files with the following mca option:
<br>
-mca orte_tmpdir_base /some/place
<br>
<p>ompi_info --param all all -l 9 | grep tmp
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_local_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA orte: parameter &quot;orte_remote_tmpdir_base&quot; (current value: &quot;&quot;, data source: default, level: 9 dev/all, type: string)
<br>
<p><pre>
--
Aur&#195;&#169;lien Bouteiller ~~ <a href="https://icl.cs.utk.edu/~bouteill/">https://icl.cs.utk.edu/~bouteill/</a>
&gt; Le 23 mai 2015 &#195;&#160; 03:55, Gilles Gouaillardet &lt;gilles.gouaillardet_at_[hidden]&gt; a &#195;&#169;crit :
&gt; 
&gt; Bill,
&gt; 
&gt; the root cause is likely there is not enough free space in /tmp.
&gt; 
&gt; the simplest, but slowest, option is to run mpirun --mac btl tcp ...
&gt; if you cannot make enough space under /tmp (maybe you run diskless)
&gt; there are some options to create these kind of files under /dev/shm
&gt; 
&gt; Cheers,
&gt; 
&gt; Gilles
&gt; 
&gt; 
&gt; On Saturday, May 23, 2015, Lane, William &lt;William.Lane_at_[hidden] &lt;mailto:William.Lane_at_[hidden]&gt;&gt; wrote:
&gt; I've compiled the linpack benchmark using openMPI 1.8.5 libraries
&gt; and include files on CentOS 6.4.
&gt; 
&gt; I've tested the binary on the one Intel node (some
&gt; sort of 4-core Xeon) and it runs, but when I try to run it on any of
&gt; the old Sunfire opteron compute nodes it appears to hang (although
&gt; top indicates CPU and memory usage) and eventually terminates
&gt; by itself. I'm also getting the following openMPI error messages/warnings:
&gt; 
&gt; mpirun -np 16 --report-bindings --hostfile hostfile --prefix /hpc/apps/mpi/openmpi/1.8.5-dev --mca btl_tcp_if_include eth0 xhpl
&gt; 
&gt; [cscld1-0-6:24370] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-3:24734] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-7:25152] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-4:18079] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-8:21443] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-2:19704] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-5:13481] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1-0-0:21884] create_and_attach: unable to create shared memory BTL coordinating structure :: size 134217728
&gt; [cscld1:24240] 7 more processes have sent help message help-opal-shmem-mmap.txt / target full
&gt; 
&gt; Note these errors also occur when I try to run the linpack benchmark on a single
&gt; node as well.
&gt; 
&gt; Does anyone know what's going on here? Google came up w/nothing and I have no
&gt; idea what a BTL coordinating structure is.
&gt; 
&gt; -Bill L.
&gt; 
&gt; IMPORTANT WARNING: This message is intended for the use of the person or entity to which it is addressed and may contain information that is privileged and confidential, the disclosure of which is governed by applicable law. If the reader of this message is not the intended recipient, or the employee or agent responsible for delivering it to the intended recipient, you are hereby notified that any dissemination, distribution or copying of this information is strictly prohibited. Thank you for your cooperation.
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/05/26907.php">http://www.open-mpi.org/community/lists/users/2015/05/26907.php</a> &lt;<a href="http://www.open-mpi.org/community/lists/users/2015/05/26907.php">http://www.open-mpi.org/community/lists/users/2015/05/26907.php</a>&gt;
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26934/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26934/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<li><strong>Previous message:</strong> <a href="26933.php">Timur Ismagilov: "Re: [OMPI users] MXM problem"</a>
<li><strong>In reply to:</strong> <a href="26907.php">Gilles Gouaillardet: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire opteron nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
<li><strong>Reply:</strong> <a href="26935.php">Rolf vandeVaart: "Re: [OMPI users] Problems running linpack benchmark on old Sunfire	opteron nodes"</a>
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
