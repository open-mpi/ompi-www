<?
$subject_val = "[OMPI users] OpenIB Cannot Allocate Memory error";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Feb 27 11:35:31 2014" -->
<!-- isoreceived="20140227163531" -->
<!-- sent="Thu, 27 Feb 2014 11:35:27 -0500" -->
<!-- isosent="20140227163527" -->
<!-- name="Brock Palen" -->
<!-- email="brockp_at_[hidden]" -->
<!-- subject="[OMPI users] OpenIB Cannot Allocate Memory error" -->
<!-- id="46BC38ED-8BC5-4B5B-877E-A66540930664_at_umich.edu" -->
<!-- charset="iso-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] OpenIB Cannot Allocate Memory error<br>
<strong>From:</strong> Brock Palen (<em>brockp_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-02-27 11:35:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23691.php">basma a.azeem: "[OMPI users] checkpoint/restart facility - blcr"</a>
<li><strong>Previous message:</strong> <a href="23689.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have some suers that are reporting errors with OpenIB on mellonox gear,  it tends to apply to larger jobs (64 - 256 cores)  is not reliable, but happens with regularity.  Example error below:
<br>
<p>The nodes have 64GB of memory and the IB driver is set with:
<br>
options mlx4_core pfctx=0 pfcrx=0 log_num_mtt=24 log_mtts_per_seg=1
<br>
<p>Which is I read right should let one register 128GB,
<br>
<p>We did make one change, we showed codes having huge performance impacts and khugepaged consuming 100% cpu.  We found that we could get expected performance if we disabled memory defrag for huge pages, but left transparent huge paged enabled:
<br>
<p>cat /sys/kernel/mm/redhat_transparent_hugepage/defrag
<br>
[never] 
<br>
<p>Is this possibly related?  We didn't have reports before then, has anyone seen anything similar?
<br>
<p><p>--------------------------------------------------------------------------
<br>
The OpenFabrics (openib) BTL failed to register memory in the driver.
<br>
Please check /var/log/messages or dmesg for driver specific failure
<br>
reason.
<br>
The failure occured here:
<br>
<p>&nbsp;&nbsp;Local host:    mlx4_0
<br>
&nbsp;&nbsp;Device:        openib_reg_mr
<br>
&nbsp;&nbsp;Function:      Cannot allocate memory()
<br>
&nbsp;&nbsp;Errno says:    &#162;
<br>
&#216;y9&#201;A?&lt;8a&gt;&#217;
<br>
&lt;92&gt;&#242;D^C?#e&#193;&#254;/&#254;E?&amp;L?^Y&#183;&#221;^A?uy&#186;&#231;&#203;&lt;8c&gt;P?&lt;87&gt;&#237;&amp;&lt;8c&gt;&lt;99&gt;&#218;^E?7&lt;99&gt;&lt;8d&gt;       &#205;Q#?&#180;&#215;(&lt;91&gt;&#176;k^[&#191;^]&#209;78&#169;&#227;I?B&#229;^U&lt;9d&gt;&#237;F^A?&#243;&#252;^V&lt;84&gt;&#237;&#162;D?D9C$te^S?&amp;'B&lt;83&gt;[&lt;92&gt; ?A&#186;2^W?*^B?&lt;95&gt;#^]&#231;|&#184;^G?r&#186;mHPT&#241;&#190;&lt;8a&gt;&#237;&#214;^W&#236;&lt;84&gt;B?&#173;Lw&#231;&#237;&quot;&#254;&gt;5S&lt;99&gt;5&lt;92&gt;&#251;^T?&lt;9b&gt;&#235;#M^_&#220;&#226;&#190;&lt;9a&gt;w^O@&lt;98&gt;^G-?/&#247;&#237;&#244;Y0^L&#191;Mm^D&#206;&#194;C@?Y&#222;&lt;83&gt;t@^?^R&#191;&lt;98&gt;.&#234;/&#173;&#163;^L?^V&lt;83&gt;:{&lt;80&gt;B^M?
<br>
<p>You may need to consult with your system administrator to get this
<br>
problem fixed.
<br>
--------------------------------------------------------------------------
<br>
[nyx5641.engin.umich.edu:30080] 99407 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] Set MCA parameter &quot;orte_base_help_aggregate&quot; to 0 to see all help / error messages
<br>
[nyx5641.engin.umich.edu:30080] 54493 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 1 more process has sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 76831 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 76800 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 1 more process has sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 76834 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 104597 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 94309 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 96283 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 88849 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 87245 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5694.engin.umich.edu][[55235,1],50][../../../../../openmpi-1.6/ompi/mca/btl/openib/btl_openib_component.c:3707:mca_btl_openib_post_srr] error posting receive descriptors to shared receive queue 2 (6 from 107)
<br>
[nyx5694.engin.umich.edu][[55235,1],50][../../../../../openmpi-1.6/ompi/mca/btl/openib/btl_openib_component.c:3707:mca_btl_openib_post_srr] error posting receive descriptors to shared receive queue 2 (0 from 106)
<br>
[nyx5694.engin.umich.edu][[55235,1],50][../../../../../openmpi-1.6/ompi/mca/btl/openib/btl_openib_component.c:3707:mca_btl_openib_post_srr] error posting receive descriptors to shared receive queue 2 (0 from 105)
<br>
[nyx5641.engin.umich.edu:30080] 4868 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
[nyx5641.engin.umich.edu:30080] 557 more processes have sent help message help-mpi-btl-openib.txt / mem-reg-fail
<br>
<p><p><p>Brock Palen
<br>
www.umich.edu/~brockp
<br>
CAEN Advanced Computing
<br>
XSEDE Campus Champion
<br>
brockp_at_[hidden]
<br>
(734)936-1985
<br>
<p><p><p><p>
<br><hr>
<ul>
<li>application/pgp-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-23690/signature.asc">Message signed with OpenPGP using GPGMail</a>
</ul>
<!-- attachment="signature.asc" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="23691.php">basma a.azeem: "[OMPI users] checkpoint/restart facility - blcr"</a>
<li><strong>Previous message:</strong> <a href="23689.php">Edgar Gabriel: "Re: [OMPI users] OpenMPI-ROMIO-OrangeFS"</a>
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
