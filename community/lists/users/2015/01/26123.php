<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan  8 02:55:27 2015" -->
<!-- isoreceived="20150108075527" -->
<!-- sent="Thu, 8 Jan 2015 07:52:29 +0000" -->
<!-- isosent="20150108075229" -->
<!-- name="Waleed Lotfy" -->
<!-- email="Waleed.Lotfy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="72AAB83113C15C4CBB7CDE3037A199CB8B45E8FB_at_BEXGW-H20514.local.bibalex.dom" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="54AC3354.2080709_at_ldeo.columbia.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] Icreasing OFED registerable memory<br>
<strong>From:</strong> Waleed Lotfy (<em>Waleed.Lotfy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-08 02:52:29
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26124.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26122.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26111.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You are right.

I didn't know that SGE used limits other than '/etc/security/limits.conf', even though you explained it :/

The resolution is by adding 'H_MEMORYLOCKED=unlimited' in the execd_params.

Thank you all for your time and efforts and keep up the great work :)

Waleed Lotfy
Bibliotheca Alexandrina
________________________________________
From: users [users-bounces_at_[hidden]] on behalf of Gus Correa [gus_at_[hidden]]
Sent: Tuesday, January 06, 2015 9:11 PM
To: Open MPI Users
Subject: Re: [OMPI users] Icreasing OFED registerable memory

Hi Waleed

As Devendar said (and I tried to explain before),
you need to allow the locked memory limit to be unlimited for
user processes (in /etc/security/limits.conf),
*AND* somehow the daemon/job_script/whatever that launches the mpiexec
command must request &quot;ulimit -l unlimited&quot; (directly or indirectly).
The latter part depends on how your system's details.
I am not familiar to SGE (I use Torque), but presumably you can
add &quot;ulimit -l unlimited&quot; when you launch
the SGE daemons on the nodes.
Presumably this will make the processes launched by that daemon
(i.e. your mpiexec) inherit those limits,
and that is how I do it on Torque.
A more brute force way is just to include &quot;ulimit -l unlimited&quot;
in you job script before mpiexec.
Inserting a &quot;ulimit -a&quot; in your jobscript may help diagnose what you
actually have.
Please, see the OMPI FAQ that I sent you before for more details.

I hope this helps,
Gus Correa

On 01/06/2015 01:37 PM, Deva wrote:
&gt; Hi Waleed,
&gt;
&gt; ----------
&gt;    Memlock limit: 65536
&gt; ----------
&gt;
&gt; such a low limit should be due to per-user lock memory limit . Can you
&gt; make sure it is  set to &quot;unlimited&quot; on all nodes ( &quot;ulimit -l unlimited&quot;)?
&gt;
&gt; -Devendar
&gt;
&gt; On Tue, Jan 6, 2015 at 3:42 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]
&gt; &lt;mailto:Waleed.Lotfy_at_[hidden]&gt;&gt; wrote:
&gt;
&gt;     Hi guys,
&gt;
&gt;     Sorry for getting back so late, but we ran into some problems during
&gt;     the installation process and as soon as the system came up I tested
&gt;     the new versions for the problem but it showed another memory
&gt;     related warning.
&gt;
&gt;     --------------------------------------------------------------------------
&gt;     The OpenFabrics (openib) BTL failed to initialize while trying to
&gt;     allocate some locked memory.  This typically can indicate that the
&gt;     memlock limits are set too low.  For most HPC installations, the
&gt;     memlock limits should be set to &quot;unlimited&quot;.  The failure occured
&gt;     here:
&gt;
&gt;        Local host:    comp003.local
&gt;        OMPI source:   btl_openib_component.c:1200
&gt;        Function:      ompi_free_list_init_ex_new()
&gt;        Device:        mlx4_0
&gt;        Memlock limit: 65536
&gt;
&gt;     You may need to consult with your system administrator to get this
&gt;     problem fixed.  This FAQ entry on the Open MPI web site may also be
&gt;     helpful:
&gt;
&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
&gt;     --------------------------------------------------------------------------
&gt;     --------------------------------------------------------------------------
&gt;     WARNING: There was an error initializing an OpenFabrics device.
&gt;
&gt;        Local host:   comp003.local
&gt;        Local device: mlx4_0
&gt;     --------------------------------------------------------------------------
&gt;
&gt;     &lt;&lt;&lt;Then the output of the program follows.&gt;&gt;&gt;
&gt;
&gt;     My current running versions:
&gt;
&gt;     OpenMPI: 1.6.4
&gt;     OFED-internal-2.3-2
&gt;
&gt;     I checked /etc/security/limits.d/, the scheduler's configurations
&gt;     (grid engine) and tried adding the following line to
&gt;     /etc/modprobe.d/mlx4_core: 'options mlx4_core log_num_mtt=22
&gt;     log_mtts_per_seg=1' as suggested by Gus.
&gt;
&gt;     I am running out of ideas here, so please any help is appreciated.
&gt;
&gt;     P.S. I am not sure if I should open a new thread with this issue or
&gt;     continue with the current one, so please advice.
&gt;
&gt;     Waleed Lotfy
&gt;     Bibliotheca Alexandrina
&gt;     _______________________________________________
&gt;     users mailing list
&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt;     Link to this post:
&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">http://www.open-mpi.org/community/lists/users/2015/01/26107.php</a>
&gt;
&gt;
&gt;
&gt;
&gt; --
&gt;
&gt;
&gt; -Devendar
&gt;
&gt;
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26109.php">http://www.open-mpi.org/community/lists/users/2015/01/26109.php</a>
&gt;

_______________________________________________
users mailing list
users_at_[hidden]
Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26111.php">http://www.open-mpi.org/community/lists/users/2015/01/26111.php</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26124.php">Diego Avesani: "Re: [OMPI users] OMPI users] OMPI users] MPI_Type_Create_Struct + MPI_TYPE_CREATE_RESIZED"</a>
<li><strong>Previous message:</strong> <a href="26122.php">Ralph Castain: "Re: [OMPI users] difference of behaviour for MPI_Publish_name between openmpi-1.4.5 and openmpi-1.8.4"</a>
<li><strong>In reply to:</strong> <a href="26111.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
