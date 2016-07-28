<?
$subject_val = "[OMPI users] openib component not available";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul 24 06:06:22 2014" -->
<!-- isoreceived="20140724100622" -->
<!-- sent="Thu, 24 Jul 2014 15:36:21 +0530" -->
<!-- isosent="20140724100621" -->
<!-- name="madhurima madhunapanthula" -->
<!-- email="erankimadhu_at_[hidden]" -->
<!-- subject="[OMPI users] openib component not available" -->
<!-- id="CAFqWg=TOV1LFnS-31MnUO95cqMLPkwm0SJB_smJd+XbiNX--UQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
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
<strong>Subject:</strong> [OMPI users] openib component not available<br>
<strong>From:</strong> madhurima madhunapanthula (<em>erankimadhu_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-07-24 06:06:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24862.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24860.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.8.2rc2r32288 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<li><strong>Reply:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p><p>I am trying to setup openmpi 1.8.1 on a system with infiniband.
<br>
<p>The configure option I am using is
<br>
<p>./configure  --enable-mpi-thread-multiple
<br>
<p><p>After installation,  it is not showing any openib BTL component when I use
<br>
the command:
<br>
'ompi_info --param btl openib'
<br>
<p><p>On the same machine, I have also installed openmpi 1.6.5. When i issue the
<br>
command 'ompi_info --param btl openib' from this setup, it lists many
<br>
openib components.
<br>
<p>Should I use any flag/option to enable openib in openmpi1.8.1?
<br>
<p><p><p><pre>
-- 
Lokah samasta sukhinobhavanthu
Thanks,
Madhurima
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24861/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24862.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.8.2rc2 on Solaris 10 Sparc"</a>
<li><strong>Previous message:</strong> <a href="24860.php">Siegmar Gross: "[OMPI users] problem with openmpi-1.8.2rc2r32288 on Solaris 10 Sparc"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
<li><strong>Reply:</strong> <a href="24863.php">Mike Dubman: "Re: [OMPI users] openib component not available"</a>
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
