<?
$subject_val = "[OMPI devel] [1.8.2rc3] another openib bug (#4377)";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  3 15:49:15 2014" -->
<!-- isoreceived="20140803194915" -->
<!-- sent="Sun, 3 Aug 2014 12:49:13 -0700" -->
<!-- isosent="20140803194913" -->
<!-- name="Paul Hargrove" -->
<!-- email="phhargrove_at_[hidden]" -->
<!-- subject="[OMPI devel] [1.8.2rc3] another openib bug (#4377)" -->
<!-- id="CAAvDA14uSkMJpLEPkvQ-YVdsehcAZ3WCh8PUAFL3z5tY52fhCA_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI devel] [1.8.2rc3] another openib bug (#4377)<br>
<strong>From:</strong> Paul Hargrove (<em>phhargrove_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-08-03 15:49:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>Previous message:</strong> <a href="15484.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>Reply:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I have a pair of x86/linux (32 bit) hosts connected by Mellanox Tavor HCAs.
<br>
&nbsp;I have no idea if (or why) this has only appeared on this system, but I
<br>
find that blt:openib thinks the INI file says to ignore these HCAs.  See
<br>
the 4th line below:
<br>
<p><p>[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/btl_openib_ip.c:364:add_rdma_addr]
<br>
Adding addr 172.18.0.105 (0x690012ac) subnet 0xac120000 as mthca0:1
<br>
[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/btl_openib_ini.c:170:ompi_btl_openib_ini_query]
<br>
Querying INI files for vendor 0x02c9, part ID 23108
<br>
[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/btl_openib_ini.c:189:ompi_btl_openib_ini_query]
<br>
Found corresponding INI values: Mellanox Tavor Infinihost
<br>
[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/btl_openib_component.c:1541:init_one_device]
<br>
device mthca0 skipped; ignore_device=1
<br>
[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/btl_openib_component.c:988:device_destruct]
<br>
Failed to release mpool
<br>
[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/btl_openib_component.c:1020:device_destruct]
<br>
Failed to destroy device resources
<br>
[pcp-j-5][[27705,1],0][/home/pcp1/phargrov/OMPI/openmpi-1.8.2rc3-linux-x86-mx/openmpi-1.8.2rc3/ompi/mca/btl/openib/connect/btl_openib_connect_rdmacm.c:1981:rdmacm_component_finalize]
<br>
rdmacm_component_finalize
<br>
<p>Turns out this is known, and has been entered as trac ticket #4377,
<br>
currently assigned to miked.
<br>
Applying the 2-line patch attached to the ticket fixes the ignore_device=1
<br>
problem for me.
<br>
<p>Mike,
<br>
Please apply that patch to trunk and CMR for 1.8.2
<br>
<p>BTW:
<br>
Even with the &quot;ignore_device=1&quot; problem fixed, I can't get btl:openib
<br>
running on x86.
<br>
So, there may be additional reports in the next few hours.
<br>
<p>-Paul
<br>
<p><pre>
-- 
Paul H. Hargrove                          PHHargrove_at_[hidden]
Future Technologies Group
Computer and Data Sciences Department     Tel: +1-510-495-2352
Lawrence Berkeley National Laboratory     Fax: +1-510-486-6900
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-15485/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>Previous message:</strong> <a href="15484.php">Gilles GOUAILLARDET: "Re: [OMPI devel] OMPI devel] trunk warnings on x86"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
<li><strong>Reply:</strong> <a href="15486.php">Paul Hargrove: "Re: [OMPI devel] [1.8.2rc3] another openib bug (#4377)"</a>
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
