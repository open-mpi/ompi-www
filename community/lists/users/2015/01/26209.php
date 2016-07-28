<?
$subject_val = "Re: [OMPI users] Problem with connecting to 3 or more nodes";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Jan 16 15:44:53 2015" -->
<!-- isoreceived="20150116204453" -->
<!-- sent="Fri, 16 Jan 2015 20:44:51 +0000" -->
<!-- isosent="20150116204451" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problem with connecting to 3 or more nodes" -->
<!-- id="507FE424-4CC1-452D-9B32-16E5836D6CA5_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="f4f51ccc084d4918badcb4837a1560c8_at_exch-mbx4.csuchico.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problem with connecting to 3 or more nodes<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-16 15:44:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26210.php">Gus Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26208.php">George Bosilca: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26207.php">Chan, Elbert: "[OMPI users] Problem with connecting to 3 or more nodes"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
It's because Open MPI uses a tree-based ssh startup pattern.
<br>
<p>(amusingly enough, I'm literally half way through writing up a blog entry about this exact same issue :-) )
<br>
<p>That is, not only does Open MPI ssh from your mpirun-server to host1, Open MPI may also ssh from host1 to host2 (or host1 to host3).
<br>
<p>In short, if you're not using a resource manager (such as Torque or SLURM), then you can't predict the ssh pattern, and you need passwordless/passphraseless ssh logins from each server to each other server.
<br>
<p>Make sense?
<br>
<p><p><span class="quotelev1">&gt; On Jan 16, 2015, at 3:29 PM, Chan, Elbert &lt;EChan_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Hi
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm hoping that someone will be able to help me figure out a problem with connecting to multiple nodes with v1.8.4. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently, I'm running into this issue:
</span><br>
<span class="quotelev1">&gt; $ mpirun --host host1 hostname
</span><br>
<span class="quotelev1">&gt; host1
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun --host host2,host3 hostname
</span><br>
<span class="quotelev1">&gt; host2
</span><br>
<span class="quotelev1">&gt; host3
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Running this command on 1 or 2 nodes generates the expected result. However:
</span><br>
<span class="quotelev1">&gt; $ mpirun --host host1,host2,host3 hostname
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; Permission denied, please try again.
</span><br>
<span class="quotelev1">&gt; Permission denied (publickey,password,keyboard-interactive).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; ORTE was unable to reliably start one or more daemons.
</span><br>
<span class="quotelev1">&gt; This usually is caused by:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * not finding the required libraries and/or binaries on
</span><br>
<span class="quotelev1">&gt;  one or more nodes. Please check your PATH and LD_LIBRARY_PATH
</span><br>
<span class="quotelev1">&gt;  settings, or configure OMPI with --enable-orterun-prefix-by-default
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * lack of authority to execute on one or more specified nodes.
</span><br>
<span class="quotelev1">&gt;  Please verify your allocation and authorities.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * the inability to write startup files into /tmp (--tmpdir/orte_tmpdir_base).
</span><br>
<span class="quotelev1">&gt;  Please check with your sys admin to determine the correct location to use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; *  compilation of the orted with dynamic libraries when static are required
</span><br>
<span class="quotelev1">&gt;  (e.g., on Cray). Please check your configure cmd line and consider using
</span><br>
<span class="quotelev1">&gt;  one of the contrib/platform definitions for your system type.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; * an inability to create a connection back to mpirun due to a
</span><br>
<span class="quotelev1">&gt;  lack of common network interfaces and/or no route found between
</span><br>
<span class="quotelev1">&gt;  them. Please check network connectivity (including firewalls
</span><br>
<span class="quotelev1">&gt;  and network routing requirements).
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is set up with passwordless logins with passphrases/ssh-agent. When I run passphraseless, I get the expected result. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What am I doing wrong? What can I look at to see where my problem could be?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Elbert
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ********************************
</span><br>
<span class="quotelev1">&gt; Elbert Chan
</span><br>
<span class="quotelev1">&gt; Operating Systems Analyst
</span><br>
<span class="quotelev1">&gt; College of ECC
</span><br>
<span class="quotelev1">&gt; CSU, Chico
</span><br>
<span class="quotelev1">&gt; 530-898-6481
</span><br>
<span class="quotelev1">&gt; ********************************
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26207.php">http://www.open-mpi.org/community/lists/users/2015/01/26207.php</a>
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
<li><strong>Next message:</strong> <a href="26210.php">Gus Correa: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>Previous message:</strong> <a href="26208.php">George Bosilca: "Re: [OMPI users] How to handle strides in MPI_Create_type_subarray - Re: MPI_type_create_struct + MPI_Type_vector + MPI_Type_contiguous"</a>
<li><strong>In reply to:</strong> <a href="26207.php">Chan, Elbert: "[OMPI users] Problem with connecting to 3 or more nodes"</a>
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
