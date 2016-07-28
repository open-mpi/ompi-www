<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 14:11:22 2015" -->
<!-- isoreceived="20150106191122" -->
<!-- sent="Tue, 06 Jan 2015 14:11:16 -0500" -->
<!-- isosent="20150106191116" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="54AC3354.2080709_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CABB+w0QzTiewPskgrtJcLivsNCqm35O33TQE8ELRHJ36foeUOQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 14:11:16
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>Previous message:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26109.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26123.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26123.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Waleed
<br>
<p>As Devendar said (and I tried to explain before),
<br>
you need to allow the locked memory limit to be unlimited for
<br>
user processes (in /etc/security/limits.conf),
<br>
*AND* somehow the daemon/job_script/whatever that launches the mpiexec
<br>
command must request &quot;ulimit -l unlimited&quot; (directly or indirectly).
<br>
The latter part depends on how your system's details.
<br>
I am not familiar to SGE (I use Torque), but presumably you can
<br>
add &quot;ulimit -l unlimited&quot; when you launch
<br>
the SGE daemons on the nodes.
<br>
Presumably this will make the processes launched by that daemon
<br>
(i.e. your mpiexec) inherit those limits,
<br>
and that is how I do it on Torque.
<br>
A more brute force way is just to include &quot;ulimit -l unlimited&quot;
<br>
in you job script before mpiexec.
<br>
Inserting a &quot;ulimit -a&quot; in your jobscript may help diagnose what you
<br>
actually have.
<br>
Please, see the OMPI FAQ that I sent you before for more details.
<br>
<p>I hope this helps,
<br>
Gus Correa
<br>
<p>On 01/06/2015 01:37 PM, Deva wrote:
<br>
<span class="quotelev1">&gt; Hi Waleed,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;    Memlock limit: 65536
</span><br>
<span class="quotelev1">&gt; ----------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; such a low limit should be due to per-user lock memory limit . Can you
</span><br>
<span class="quotelev1">&gt; make sure it is  set to &quot;unlimited&quot; on all nodes ( &quot;ulimit -l unlimited&quot;)?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Tue, Jan 6, 2015 at 3:42 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:Waleed.Lotfy_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Sorry for getting back so late, but we ran into some problems during
</span><br>
<span class="quotelev1">&gt;     the installation process and as soon as the system came up I tested
</span><br>
<span class="quotelev1">&gt;     the new versions for the problem but it showed another memory
</span><br>
<span class="quotelev1">&gt;     related warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev1">&gt;     allocate some locked memory.  This typically can indicate that the
</span><br>
<span class="quotelev1">&gt;     memlock limits are set too low.  For most HPC installations, the
</span><br>
<span class="quotelev1">&gt;     memlock limits should be set to &quot;unlimited&quot;.  The failure occured
</span><br>
<span class="quotelev1">&gt;     here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Local host:    comp003.local
</span><br>
<span class="quotelev1">&gt;        OMPI source:   btl_openib_component.c:1200
</span><br>
<span class="quotelev1">&gt;        Function:      ompi_free_list_init_ex_new()
</span><br>
<span class="quotelev1">&gt;        Device:        mlx4_0
</span><br>
<span class="quotelev1">&gt;        Memlock limit: 65536
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt;     problem fixed.  This FAQ entry on the Open MPI web site may also be
</span><br>
<span class="quotelev1">&gt;     helpful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;     WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;        Local host:   comp003.local
</span><br>
<span class="quotelev1">&gt;        Local device: mlx4_0
</span><br>
<span class="quotelev1">&gt;     --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     &lt;&lt;&lt;Then the output of the program follows.&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     My current running versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     OpenMPI: 1.6.4
</span><br>
<span class="quotelev1">&gt;     OFED-internal-2.3-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I checked /etc/security/limits.d/, the scheduler's configurations
</span><br>
<span class="quotelev1">&gt;     (grid engine) and tried adding the following line to
</span><br>
<span class="quotelev1">&gt;     /etc/modprobe.d/mlx4_core: 'options mlx4_core log_num_mtt=22
</span><br>
<span class="quotelev1">&gt;     log_mtts_per_seg=1' as suggested by Gus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     I am running out of ideas here, so please any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     P.S. I am not sure if I should open a new thread with this issue or
</span><br>
<span class="quotelev1">&gt;     continue with the current one, so please advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Waleed Lotfy
</span><br>
<span class="quotelev1">&gt;     Bibliotheca Alexandrina
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;     Link to this post:
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">http://www.open-mpi.org/community/lists/users/2015/01/26107.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -Devendar
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
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/01/26109.php">http://www.open-mpi.org/community/lists/users/2015/01/26109.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26112.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Accessing Process Affinity within MPI Program"</a>
<li><strong>Previous message:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>In reply to:</strong> <a href="26109.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26123.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26123.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
