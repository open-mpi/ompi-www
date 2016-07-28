<?
$subject_val = "Re: [OMPI users] Icreasing OFED registerable memory";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan  6 13:37:34 2015" -->
<!-- isoreceived="20150106183734" -->
<!-- sent="Tue, 6 Jan 2015 13:37:32 -0500" -->
<!-- isosent="20150106183732" -->
<!-- name="Deva" -->
<!-- email="devendar.bureddy_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Icreasing OFED registerable memory" -->
<!-- id="CABB+w0QzTiewPskgrtJcLivsNCqm35O33TQE8ELRHJ36foeUOQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="72AAB83113C15C4CBB7CDE3037A199CB8B45E81F_at_BEXGW-H20514.local.bibalex.dom" -->
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
<strong>From:</strong> Deva (<em>devendar.bureddy_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-01-06 13:37:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26108.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] 2nd CfP: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>In reply to:</strong> <a href="26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26111.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Waleed,
<br>
<p>----------
<br>
&nbsp;&nbsp;&nbsp;Memlock limit: 65536
<br>
----------
<br>
<p>such a low limit should be due to per-user lock memory limit . Can you make
<br>
sure it is  set to &quot;unlimited&quot; on all nodes ( &quot;ulimit -l unlimited&quot;)?
<br>
<p>-Devendar
<br>
<p>On Tue, Jan 6, 2015 at 3:42 AM, Waleed Lotfy &lt;Waleed.Lotfy_at_[hidden]&gt;
<br>
wrote:
<br>
<p><span class="quotelev1">&gt; Hi guys,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Sorry for getting back so late, but we ran into some problems during the
</span><br>
<span class="quotelev1">&gt; installation process and as soon as the system came up I tested the new
</span><br>
<span class="quotelev1">&gt; versions for the problem but it showed another memory related warning.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; The OpenFabrics (openib) BTL failed to initialize while trying to
</span><br>
<span class="quotelev1">&gt; allocate some locked memory.  This typically can indicate that the
</span><br>
<span class="quotelev1">&gt; memlock limits are set too low.  For most HPC installations, the
</span><br>
<span class="quotelev1">&gt; memlock limits should be set to &quot;unlimited&quot;.  The failure occured
</span><br>
<span class="quotelev1">&gt; here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:    comp003.local
</span><br>
<span class="quotelev1">&gt;   OMPI source:   btl_openib_component.c:1200
</span><br>
<span class="quotelev1">&gt;   Function:      ompi_free_list_init_ex_new()
</span><br>
<span class="quotelev1">&gt;   Device:        mlx4_0
</span><br>
<span class="quotelev1">&gt;   Memlock limit: 65536
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You may need to consult with your system administrator to get this
</span><br>
<span class="quotelev1">&gt; problem fixed.  This FAQ entry on the Open MPI web site may also be
</span><br>
<span class="quotelev1">&gt; helpful:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages">http://www.open-mpi.org/faq/?category=openfabrics#ib-locked-pages</a>
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; WARNING: There was an error initializing an OpenFabrics device.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Local host:   comp003.local
</span><br>
<span class="quotelev1">&gt;   Local device: mlx4_0
</span><br>
<span class="quotelev1">&gt; --------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;&lt;&lt;Then the output of the program follows.&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; My current running versions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; OpenMPI: 1.6.4
</span><br>
<span class="quotelev1">&gt; OFED-internal-2.3-2
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I checked /etc/security/limits.d/, the scheduler's configurations (grid
</span><br>
<span class="quotelev1">&gt; engine) and tried adding the following line to /etc/modprobe.d/mlx4_core:
</span><br>
<span class="quotelev1">&gt; 'options mlx4_core log_num_mtt=22 log_mtts_per_seg=1' as suggested by Gus.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I am running out of ideas here, so please any help is appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; P.S. I am not sure if I should open a new thread with this issue or
</span><br>
<span class="quotelev1">&gt; continue with the current one, so please advice.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Waleed Lotfy
</span><br>
<span class="quotelev1">&gt; Bibliotheca Alexandrina
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post:
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/community/lists/users/2015/01/26107.php">http://www.open-mpi.org/community/lists/users/2015/01/26107.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
-Devendar
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-26109/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Previous message:</strong> <a href="26108.php">CUDENNEC Loic: "[OMPI users] [ICCS/Alchemy] 2nd CfP: Architecture, Languages, Compilation and Hardware support for Emerging ManYcore systems"</a>
<li><strong>In reply to:</strong> <a href="26107.php">Waleed Lotfy: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26110.php">Deva: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
<li><strong>Reply:</strong> <a href="26111.php">Gus Correa: "Re: [OMPI users] Icreasing OFED registerable memory"</a>
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
