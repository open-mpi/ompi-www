<?
$subject_val = "[OMPI users] Openmpi - Mac OS X SnowLeopard linking error";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 28 18:42:19 2009" -->
<!-- isoreceived="20090928224219" -->
<!-- sent="Mon, 28 Sep 2009 18:42:15 -0400" -->
<!-- isosent="20090928224215" -->
<!-- name="Pierre-Olivier Dallaire" -->
<!-- email="pierre-olivier.dallaire_at_[hidden]" -->
<!-- subject="[OMPI users] Openmpi - Mac OS X SnowLeopard linking error" -->
<!-- id="91EB6253-B64A-4885-813D-7C4168D3ACCB_at_videotron.ca" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] Openmpi - Mac OS X SnowLeopard linking error<br>
<strong>From:</strong> Pierre-Olivier Dallaire (<em>pierre-olivier.dallaire_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-28 18:42:15
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10802.php">worldeb_at_[hidden]: "[OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Reply:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>when compiling openmpi-1.3.3 with GNU or PGI compilers, the following  
<br>
occurs :
<br>
<p>ibtool: link: gcc-4.2 -O3 -DNDEBUG -m64 -finline-functions -fno-strict- 
<br>
aliasing -fvisibility=hidden -o orte-iof orte-iof.o ../../../ 
<br>
orte/.libs/libopen-rte.a /Users/podallaire/Downloads/openmpi-1.3.3/ 
<br>
opal/.libs/libopen-pal.a -lutil
<br>
Undefined symbols:
<br>
&quot;_orte_iof&quot;, referenced from:
<br>
_main in orte-iof.o
<br>
_abort_exit_callback in orte-iof.o
<br>
&quot;_orte_routed&quot;, referenced from:
<br>
_orte_read_hnp_contact_file in libopen-rte.a(hnp_contact.o)
<br>
_orte_rml_base_update_contact_info in libopen-rte.a(rml_base_contact.o)
<br>
_orte_rml_base_update_contact_info in libopen-rte.a(rml_base_contact.o)
<br>
ld: symbol(s) not found
<br>
collect2: ld returned 1 exit status
<br>
make[2]: *** [orte-iof] Error 1
<br>
make[1]: *** [all-recursive] Error 1
<br>
make: *** [all-recursive] Error 1
<br>
<p>&nbsp;From the following thread, it seems that an extra linking flag shoud  
<br>
be added : -all_load
<br>
See : <a href="http://www.pgroup.com/userforum/viewtopic.php?t=1594&amp;sid=a9139f8d260d438afc74b5243e06679a">http://www.pgroup.com/userforum/viewtopic.php?t=1594&amp;sid=a9139f8d260d438afc74b5243e06679a</a>
<br>
<p>Anybody else had this problem ?
<br>
<p>Thanks
<br>
<p>PO
<br>
<p><p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10803/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Previous message:</strong> <a href="10802.php">worldeb_at_[hidden]: "[OMPI users] use additional interface for openmpi"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
<li><strong>Reply:</strong> <a href="10804.php">Ralph Castain: "Re: [OMPI users] Openmpi - Mac OS X SnowLeopard linking error"</a>
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
