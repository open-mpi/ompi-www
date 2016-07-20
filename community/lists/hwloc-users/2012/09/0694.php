<?
$subject_val = "Re: [hwloc-users] Thread binding problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  6 04:05:54 2012" -->
<!-- isoreceived="20120906080554" -->
<!-- sent="Thu, 6 Sep 2012 10:05:49 +0200" -->
<!-- isosent="20120906080549" -->
<!-- name="Gabriele Fatigati" -->
<!-- email="g.fatigati_at_[hidden]" -->
<!-- subject="Re: [hwloc-users] Thread binding problem" -->
<!-- id="CAJNPZUWrWnUtEg7i1qMjU0h4EpjtnPBSyK8y-rk_4G6j5qtrgA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAJNPZUXBFUuru6_epYiND2TnTV2DczC-c9to-H1jCmycsnu-=A_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [hwloc-users] Thread binding problem<br>
<strong>From:</strong> Gabriele Fatigati (<em>g.fatigati_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-09-06 04:05:49
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0693.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0692.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Sorry,
<br>
<p>I used a wrong hwloc installation. Using the hwloc with the printf controls:
<br>
<p>mbind hwloc_linux_set_area_membind()  fails:
<br>
<p>Error from HWLOC mbind: Cannot allocate memory
<br>
<p>so this is the origin of bad allocation.
<br>
<p>I attach the right valgrind output
<br>
<p>valgrind --track-origins=yes --log-file=output_valgrind --leak-check=full
<br>
--tool=memcheck  --show-reachable=yes ./main_hybrid_bind_mem
<br>
<p><p><p><p><p>2012/9/6 Gabriele Fatigati &lt;g.fatigati_at_[hidden]&gt;
<br>
<p><span class="quotelev1">&gt; Hi Brice, hi Jeff,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Can you add some printf inside hwloc_linux_set_area_membind() in
</span><br>
<span class="quotelev1">&gt; src/topology-linux.c to see if ENOMEM comes from the mbind &gt;syscall or not?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I added printf inside that function, but ENOMEM does not come from there.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt; &gt;Have you run your application through valgrind or another memory-checking
</span><br>
<span class="quotelev1">&gt; debugger?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried with valgrind :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; valgrind --track-origins=yes --log-file=output_valgrind --leak-check=full
</span><br>
<span class="quotelev1">&gt; --tool=memcheck  --show-reachable=yes ./main_hybrid_bind_mem
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==25687== Warning: set address range perms: large range [0x39454040,
</span><br>
<span class="quotelev1">&gt; 0x2218d4040) (undefined)
</span><br>
<span class="quotelev1">&gt; ==25687==
</span><br>
<span class="quotelev1">&gt; ==25687==     Valgrind's memory management: out of memory:
</span><br>
<span class="quotelev1">&gt; ==25687==        newSuperblock's request for 4194304 bytes failed.
</span><br>
<span class="quotelev1">&gt; ==25687==        34253180928 bytes have already been allocated.
</span><br>
<span class="quotelev1">&gt; ==25687==     Valgrind cannot continue.  Sorry.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I attach the full output.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The code dies also using OpenMP pure code. Very misteriously.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2012/9/5 Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 5, 2012, at 2:36 PM, Gabriele Fatigati wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt; &gt; I don't think is a simply out of memory since NUMA node has 48 GB, and
</span><br>
<span class="quotelev2">&gt;&gt; I'm allocating just 8 GB.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Mmm.  Probably right.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Have you run your application through valgrind or another memory-checking
</span><br>
<span class="quotelev2">&gt;&gt; debugger?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've seen cases of heap corruption lead to malloc incorrectly failing
</span><br>
<span class="quotelev2">&gt;&gt; with ENOMEM.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; jsquyres_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; For corporate legal information go to:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; hwloc-users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users">http://www.open-mpi.org/mailman/listinfo.cgi/hwloc-users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Ing. Gabriele Fatigati
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; HPC specialist
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; SuperComputing Applications and Innovation Department
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; www.cineca.it                    Tel:   +39 051 6171722
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; g.fatigati [AT] cineca.it
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
Ing. Gabriele Fatigati
HPC specialist
SuperComputing Applications and Innovation Department
Via Magnanelli 6/3, Casalecchio di Reno (BO) Italy
www.cineca.it                    Tel:   +39 051 6171722
g.fatigati [AT] cineca.it

</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0694/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<ul>
<li>application/octet-stream attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-users/att-0694/output_valgrind">output_valgrind</a>
</ul>
<!-- attachment="output_valgrind" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Previous message:</strong> <a href="0693.php">Brice Goglin: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>In reply to:</strong> <a href="0692.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
<li><strong>Reply:</strong> <a href="0695.php">Gabriele Fatigati: "Re: [hwloc-users] Thread binding problem"</a>
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
