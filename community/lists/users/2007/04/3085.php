<? include("../../include/msg-header.inc"); ?>
<!-- received="Wed Apr 18 10:34:39 2007" -->
<!-- isoreceived="20070418143439" -->
<!-- sent="Wed, 18 Apr 2007 09:34:34 -0500" -->
<!-- isosent="20070418143434" -->
<!-- name="Simple Kaul" -->
<!-- email="hello2u4eva_at_[hidden]" -->
<!-- subject="[OMPI users] Mellanox IB Gold install" -->
<!-- id="BAY108-F12F6F628F980BF7EC7053AAC500_at_phx.gbl" -->
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
<strong>From:</strong> Simple Kaul (<em>hello2u4eva_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-04-18 10:34:34
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<li><strong>Reply:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>I am trying to install IBGD-1.8.2 on a linux server (kernel-2.6.9-42.ELsmp) 
<br>
and get the following error when running the ./install script:
<br>
<p>Building ib RPMs. Please wait...
<br>
<p>Running /tmp/ib-1.8.2/build_rpm.sh --prefix /opt/mellanox --build_root 
<br>
/../..//IBGD --packages ib_verbs -- -kver 2.6.9-42.ELsmp --ksrc 
<br>
/lib/modules/2.6.9-42.ELsmp/source
<br>
\
<br>
ERROR: Failed executing &quot;/tmp/ib-1.8.2/build_rpm.sh --prefix /opt/mellanox 
<br>
--build_root /../../IBGD --packages ib_verbs -- -kver 2.6.9-42.ELsmp --ksrc 
<br>
/lib/modules/2.6.9-42.ELsmp/source &quot;
<br>
<p>See log file: /tmp/IBGD.12536.log
<br>
----------------------------------------------------------------------------------------------------------------
<br>
The log file under /tmp leads to the following error:
<br>
<p>make[1]: ***[libmosal.so] Error 1
<br>
make: ***[mlxsys_install] Error 2
<br>
ERROR: Failed to execute: make 
<br>
VAPI_KERNEL_SRC_DIR=../../..//tmp/openib/infiniband/ib_verbs/mellanox-hca...
<br>
<p>Appreciate any support.
<br>
<p>Thanks,
<br>
Simple
<br>
<p>_________________________________________________________________
<br>
Interest Rates Fall Again! $430,000 Mortgage for $1,399/mo - Calculate new 
<br>
payment 
<br>
<a href="http://www.lowermybills.com/lre/index.jsp?sourceid=lmb-9632-18679&amp;moid=7581">http://www.lowermybills.com/lre/index.jsp?sourceid=lmb-9632-18679&amp;moid=7581</a>
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3086.php">Jeff Squyres: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<li><strong>Previous message:</strong> <a href="3084.php">stephen mulcahy: "Re: [OMPI users] How to force OpenMPI to use specific interconnect"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
<li><strong>Reply:</strong> <a href="3087.php">Jeff Squyres: "Re: [OMPI users] Mellanox IB Gold install"</a>
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
